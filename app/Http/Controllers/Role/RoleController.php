<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/22
 * Time: 14:42
 */
namespace App\Http\Controllers\Role;
use App\Http\Controllers\BaseController;
use App\Models\Ulizz_roles;
use App\Models\Ulizz_menu;
use Illuminate\Http\Request;
class RoleController extends BaseController
{
	/**
	 * [角色列表页]
	 * @author 李成龙
	 * @param    NULL
	 * @return   Resources Role Page
	 */
	public function lister()
	{
		$roleList = Ulizz_roles::get();
		return view('role.lister',['roleList'=>$roleList]);
	}

	/**
	 * [角色添加页面显示 & 表单提交处理入库]
	 * @author 李成龙
	 * @param    $request
	 * @return   布尔值 Resources Role Page
	 */
	public function add(Request $request)
	{
		$roleAddMsg = 0;
		if($request->isMethod('post'))
		{
			$data = $request->all();
			$data['menu_role_id'] = isset($data['menu_role_id']) ? implode(',',$data['menu_role_id']) : '';
			unset($data['_token']);
			$result = Ulizz_roles::insert($data);
			if($result)
			{
				$roleAddMsg = 1;
			}
		}
		$adminMenuList = Ulizz_menu::get()->toArray();
		$menu_lists =_tree_hTree($adminMenuList);
		$role = new Ulizz_roles();
		$roleOption = $role->recursionGetRole();
		return view('role.add',['menu_lists'=>$menu_lists,'roleAddMsg'=>$roleAddMsg,'roleOption'=>$roleOption]);
	}
}