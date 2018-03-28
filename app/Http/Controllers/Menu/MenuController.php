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
	 * @author 李成龙
	 * @param    NULL
	 * @return   Resources MenuPage
	 */
	public function lister()
	{
		$menuList = Ulizz_menu::get()->toArray();
		$menuLists = recursionArr($menuList);
		return ajax_success('获取成功',$menuLists);
	}

	/**
	 * [菜单添加页面显示 & 菜单添加表单处理]
	 * @author 李成龙
	 * @param    $request
	 * @return   布尔值 & Resources MenuPage
	 */
	public function add(Request $request)
	{
		if($request->isMethod('post'))
		{
			$data = _unsetNull($request->all());
			unset($data['_token']);
			$result = Ulizz_menu::insert($data);
			if($result)
			{
				return redirect('menu/lister');
			}
			else
			{
				return redirect('menu/add');
			}
		}
		$menu = new Ulizz_menu();
		$menuOption = $menu->recursionGetMenu();
		return view('menu.add',['menuOption'=>$menuOption]);
	}
}