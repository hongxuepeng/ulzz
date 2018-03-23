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
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
class PublicController extends Controller
{
	/**
	 * [菜单获取]
	 * @author 李成龙
	 * @param    NULL
	 * @return   Menu JSON
	 */
	public function getMenu()
	{
		$adminMenu = new Ulizz_menu();
		//取出菜单和用户的权限
		$menu_lists = $adminMenu->where('status','<>',0)->get()->toArray();

		$role = DB::table('ulizz_roles')->where('id',session('user_id'))->value('menu_role_id');

		$role = explode(',',$role);
		if(session('user_id') != 1){
			foreach($menu_lists as $key => $values){
				if(!in_array($values['id'],$role)){
					unset($menu_lists[$key]);
				}
			}
		}
		//$menu_lists =_tree_hTree(_tree_sort($menu_lists,'list_order'));
		return ajax_success('获取成功',(object)$menu_lists);
	}}