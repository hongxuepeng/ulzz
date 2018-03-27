<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/23
 * Time: 14:42
 */
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Ulizz_menu;
use DB;
//use FontLib\Table\Type\name;
//use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Models\Ulizz_roles;
use Illuminate\Http\Request;
class PublicController extends Controller
{
	/**
	 * [菜单获取]
	 * @author 李成龙
	 * @param    NULL
	 * @return   Menu JSON
	 */
	public function getMenu(Request $request)
	{
		$userId = session('user_id');
		if(!$userId){
			return ajax_error('获取失败');
		}
		$adminMenu = new Ulizz_menu();
		//取出菜单和用户的权限
		$menu_lists = $adminMenu->where('status','<>',0)->get()->toArray();
		$role = DB::table('ulizz_roles')->where('id',$userId)->value('menu_role_id');
		$role = explode(',',$role);
		if(session('user_id') != 1){
			foreach($menu_lists as $key => $values){
				if(!in_array($values['id'],$role)){
					unset($menu_lists[$key]);
				}
			}
		}
		$arr = recursionArr($menu_lists);
		return ajax_success('获取成功',$arr);
	}

	/**
	 * [获取角色]
	 * @author 李成龙
	 * @param    NULL
	 * @return   json
	 */
	public function getRole()
	{
		$role = new Ulizz_roles();
		$roleArr = $role->recursionArr();
		return ajax_success('请求成功',$roleArr);
	}

	/**
	 * [测试页面]
	 * @author 李成龙
	 * @param    NULL
	 * @return   NULL
	 */
	public function test()
	{
		return view('test');
	}
}