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

			if($jurisdiction != 1 && strtolower($routeActionName[0]) != 'index' && strtolower($routeActionName[1]) != 'index'){
				return redirect('/');
			}
			//$menu_lists =_tree_hTree(_tree_sort($menu_lists,'list_order'));
			//$menu_lists = json_encode($menu_lists,JSON_UNESCAPED_UNICODE);
			//echo '<pre>';
			//var_dump($menu_lists);
			//exit();
			//视图间共享数据
			//view()->share('__menu_lists__',$menu_lists);
			//view()->share('__user_info__',$user_info);

			return $next($request);
		});
	}
}