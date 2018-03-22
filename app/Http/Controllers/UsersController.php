<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/22
 * Time: 17:50
 */
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ulizz_user;
use Illuminate\Support\Facades\Session;
class UsersController extends Controller
{
	/**
	 * [用户登陆页 登陆方法]
	 * @author 李成龙
	 * @param    $request
	 * @return   Resources Page
	 */
	public function login(Request $request)
	{
		if($request->isMethod('post'))
		{
			$user_login = $request->input('user_login');
			$user_pwd = md5($request->input('user_pwd'));
			$user_info = Ulizz_user::where('user_login',$user_login)->first();
			if(!$user_info)
			{
				return ajax_error('用户名错误！');
			}
			if($user_info->user_pwd != $user_pwd)
			{
				return ajax_success('密码错误');
			}
			if(!$user_info->user_status)
			{
				return ajax_error('该用户已被禁用 请联系管理员！');
			}
			else
			{
				Session::put('user_id',$user_info->id);
				unset($user_info->user_pwd);
				Session::put('user_info',$user_info->toArray());
				Session::save();
				return ajax_success('登陆成功',['url'=>'/']);
			}
		}
		return view('users.login');
	}
}