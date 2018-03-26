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
	public function lister()
	{
		$userList = Ulizz_user::get()->toArray();
		return view('account.lister',['userList'=>$userList]);
	}

	/**
	 * [管理员添加]
	 * @author 李成龙
	 * @param   $request
	 * @return   布尔值 & 重定向到 Account Page
	 */
	public function add(Request $request)
	{
		if($request->isMethod('post'))
		{
			$data = $request->all();
			$data['user_pwd'] = md5($data['user_pwd']);
			unset($data['_token'],$data['password2']);
			$result = Ulizz_user::insert($data);
			if($result == true){
				return ajax_success('添加成功',$result);
			}else{
				exit;
			}

		}
	}

	/**
	 * 管理员查找
	 *
	 */



}