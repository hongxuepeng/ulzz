<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/22
 * Time: 18:28
 */
namespace App\Http\Controllers;
use App\Http\Controllers\BaseController;
class IndexController extends BaseController
{
	/**
	 * [Index 首页]
	 * @author 李成龙
	 * @param
	 * @return   Resources Page
	 */
	public function index()
	{
		return view('index');
	}
}