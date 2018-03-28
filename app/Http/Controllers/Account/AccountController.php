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
use DB;

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
			if(!is_null($request->name))
			{
				$where[] = ['user_nickname','like','%'.$request->name.'%'];
			}
			$userList = Ulizz_user::where($where)->get();
			foreach($userList as &$value){
				$value->parse_role_id = DB::table('ulizz_roles')->where('id',$value->role_id)->value('name');
			}
			if($userList)
			{
				return ajax_success('获取成功',$userList);
			}
			else
			{
				return ajax_error('获取失败',$userList);
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
		$data = $request->all();
		unset($data['_token']);
		$data['user_pwd'] = md5('888888');
		$data['user_login'] = trim($data['user_login']);
		$data['update_time'] = date('Y-m-d H:i:s');
		$data['create_time'] = date('Y-m-d H:i:s');
		$data = _unsetNull($data);
		$bool = Ulizz_user::insert($data);
		if($bool){
			return ajax_success('添加成功',$data);
		}

	}

	/**
	 * [用户批量删除]
	 * @author 陈绪
	 * @param  ID & $request
	 * @return json 状态
	 */

	public function batch(Request $request){
		if($request->isMethod('get')) {
			$ulzz_userid_arr = $request->ids;
			$ulzz_userid_arr = explode(',',$ulzz_userid_arr);
			global $ulzz_userid_data;
			foreach($ulzz_userid_arr as $value){
				$ulzz_userid_data = Ulizz_user::destroy($value);
			}
			if($ulzz_userid_data == true){
				return ajax_success('删除成功');
			}else{
				return ajax_error('删除失败');
			}
		}
	}

	/**
	 * [用户管理员修改]
	 * @author 李成龙
	 * @param   ID & $request
	 * @return   json 状态
	 */
	public function edit(Request $request)
	{
		$id = $request->id;
		if($request->isMethod('post'))
		{
			$data = $request->all();
			$data['update_time'] = date('Y-m-d H:i:s');
			unset($data['_token']);
			$data = _unsetNull($data);
			$result = Ulizz_user::where('id',$id)->update($data);
			if($result)
			{
				return ajax_success('修改成功');
			}
			else
			{
				return ajax_error('修改失败');
			}
		}
		$userDate = Ulizz_user::find($id);
		return ajax_success('请求成功',$userDate);
	}


}