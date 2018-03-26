<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/22
 * Time: 14:19
 */
namespace App\Http\Controllers\Account;
use App\Http\Controllers\BaseController;
use App\Models\Ulizz_user;
use App\Models\Ulizz_roles;
use Illuminate\Http\Request;
class AccountController extends BaseController
{
	/**
	 * [用户管理列表页]
	 * @author 李成龙
	 * @param   NULL
	 * @return   Resources Account Page
	 */
	public function lister(Request $request)
	{
		$userList = Ulizz_user::get()->toArray();
		if($request->isMethod('post')){
			return ajax_success('获取成功',$userList);
		}
		return view('account.lister');
	}

	/**
	 * [管理员添加]
	 * @author 李成龙
	 * @param   $request
	 * @return   布尔值 & 重定向到 Account Page
	 */
	public function add(Request $request)
	{
		$accountAddMsg = 0;
		if($request->isMethod('post'))
		{
			$data = $request->all();
			$data['user_pwd'] = md5($data['user_pwd']);
			unset($data['_token'],$data['password2']);
			$result = Ulizz_user::insert($data);
			if($result){
				$accountAddMsg = 1;
			}
		}
		$role = new Ulizz_roles();
		$roleOption = $role->recursionGetRole();
		return view('account.add',['roleOption'=>$roleOption, 'accountAddMsg'=>$accountAddMsg]);
	}
}