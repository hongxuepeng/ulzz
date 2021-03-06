<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/22
 * Time: 9:48
 */
namespace App\Http\Controllers\Menu;
use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Models\Ulizz_menu;

class MenuController extends BaseController
{
	/**
	 * [菜单列表页 菜单的呈现]
	 * @author 陈绪
	 * @param    NULL
	 * @return   Resources MenuPage
	 */
	public function lister(Request $request)
	{
		if($request->isMethod('post')){
			$menuList = Ulizz_menu::get()->toArray();
			$menuLists = _tree_sort(recursionArr($menuList),'list_order');
			return ajax_success('获取成功',$menuLists);
		}
		return view('menu/lister');
	}

	/**
	 * [菜单添加表单处理]
	 * @author 李成龙
	 * @param    $request
	 * @return   json 状态
	 */
	public function add(Request $request)
	{
		$data = _unsetNull($request->all());
		unset($data['_token']);
		$result = Ulizz_menu::insert($data);
		if($result)
		{
			return ajax_success('添加成功',$data);
		}
		else

		{
			return ajax_error('添加失败');
		}
	}

	/**
	 * [菜单修改维护]
	 * @author 李成龙
	 * @param    $request
	 * @return   json 状态
	 */
	public function edit(Request $request){
		$data = _unsetNull($request->all());
		unset($data['_token']);
		$result = Ulizz_menu::where('id',$data['id'])->update($data);
		if($result){
			return ajax_success('修改成功', $data);
		}else{
			return ajax_error('修改失败');
		}
	}
	/**
	 * [菜单删除]
	 * @author 李成龙
	 * @param    Menu ID
	 * @return   json 状态
	 */
	public function del(Request $request)
	{
		$id = $request->id;
		$result = Ulizz_menu::where('id',$id)->orWhere('parent_id',$id)->delete();
		//$result = Ulizz_menu::destroy($id);
		if($result) {
			return ajax_success('删除成功');
		} else {
			return ajax_error('删除失败');
		}
	}
}