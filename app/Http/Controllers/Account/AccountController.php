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
			if(!is_null($request->name))
			{
				$where[] = ['user_nickname','like','%'.$request->name.'%'];
			}
			$userList = Ulizz_user::where($where)->get()->toArray();
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
		$data['user_pwd'] = base64_encode($data['user_pwd']);
		$data['update_time'] = date('Y-m-d H:i:s');
		$data['create_time'] = date('Y-m-d H:i:s');
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
		$ulzz_userid_arr = $request->ids;
		if(!empty($ulzz_userid_arr)){
			return ajax_success('确定要删除吗？');
		}
		global $ulzz_userid_data;
		foreach($ulzz_userid_arr as $value){
			$ulzz_userid_data = Ulizz_user::destroy($value);
		}
		if($ulzz_userid_data){
			return ajax_success('删除成功');
		}else{
			return ajax_error('删除失败');
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
		$userDate = Ulizz_user::find($id);
		if($request->isMethod('post'))
		{
			$data = $request->all();
			$data['update_time'] = date('Y-m-d H:i:s');
			if(is_null($data['user_pwd']))
			{
				$data['user_pwd'] = $userDate['user_pwd'];
			}
			else
			{
				$data['user_pwd'] = base64_encode($data['user_pwd']);
			}
			unset($data['_token']);
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
		return ajax_success('请求成功',$userDate);
	}


}