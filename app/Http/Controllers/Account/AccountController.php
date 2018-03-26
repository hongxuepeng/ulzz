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
		if($request->isMethod('post')){
			$where = [];
			if(isset($request->name))
			{
				$where[] = ['name','like','%'.$request->name.'%'];
			}
			$userList = Ulizz_user::where($where)->get()->toArray();
			if($userList)
			{
				return ajax_success('获取成功',$userList);
			}else
			{
				return ajax_error('获取失败');
			}
		}
		return view('account.lister');
	}

	/**
	 * [管理员添加]
	 * @author 陈绪
	 * @param   $request
	 * @return   布尔值 & 重定向到 Account Page
	 */
	public function add(Request $request)
	{
		if($request->isMethod('post')){

			$data = [
				'sex' => $request->sex,
				'user_login'=> $request->user_login,
				'user_pwd' => $request->user_pwd,
				'user_email' => $request->user_email,
				'user_nickname' => $request->user_nickname,
				'remarks' => $request->remarks,
				'phone' => $request->phone,
				'role_id' => $request->role_id,
				'update_time' => time(),
				'create_time' => time(),
			];
			$bool = Ulizz_user::insert($data);
			if ($bool == true) {
				return ajax_success('添加成功');
			} else {
				return ajax_error('添加失败');
			}
		}
	}




}