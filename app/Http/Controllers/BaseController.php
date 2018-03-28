<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Ulizz_menu;
use Illuminate\Support\Facades\Route;
class BaseController extends Controller
{
	public function __construct()
	{

		$this->middleware(function($request,$next){
			$user_info = $request->session()->get('user_info');
			//没登录返回登录页
			if(empty($user_info['id'])){
				return redirect('users/login');
			}
			$adminMenu = new Ulizz_menu();
			//取出菜单和用户的权限
			$menu_lists = $adminMenu->where('status','<>',0)->get()->toArray();
			$role = DB::table('ulizz_roles')->where('id',$user_info['role_id'])->value('menu_role_id');
			$role = explode(',',$role);
			$routeActionName = Route::currentRouteAction();
			$routeActionName = explode('@',trim(strrchr($routeActionName, '\\'),'\\'));
			$jurisdiction = 0;
			if($user_info['id'] != 1){
				foreach($menu_lists as $key => $values){
					if(!in_array($values['id'],$role)){
						unset($menu_lists[$key]);
					}else{
						if(strtolower($values['controller']) == strtolower($routeActionName[0]) && strtolower($values['action']) == strtolower($routeActionName[1])){
							$jurisdiction = 1;
						}
					}
				}
			}else{
				$jurisdiction = 1;
			}
			foreach($menu_lists as $k => $v){
				if(strtolower($v['controller']) == strtolower($routeActionName[0]) && strtolower($v['action']) == strtolower($routeActionName[1])){
					$adminMenu->where('id',$v['parent_id'])->update(['active'=>1]);
					$adminMenu->where('id',$v['id'])->update(['active'=>1]);
				}else{
					$adminMenu->where('id',$v['id'])->update(['active'=>0]);
				}
			}




		
		
		
		
				
			



			if($jurisdiction != 1 && strtolower($routeActionName[0]) != 'index' && strtolower($routeActionName[1]) != 'index'){
				return redirect('/');
			}
			view()->share('__user_info__',$user_info);
			return $next($request);
		});
	}
}
