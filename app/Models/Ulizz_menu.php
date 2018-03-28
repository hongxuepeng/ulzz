<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/21
 * Time: 17:22
 */
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Ulizz_menu extends Base
{
	protected $table = 'ulizz_menu';
	/**
	 * [递归获取菜单]
	 * @author 李成龙
	 * @param    父ID
	 * @return   Array
	 */
	public function recursionArr($pid = 0) {
		$array = [];
		$arr = $this->where('pid',$pid)->get();
		foreach ($arr as $value) {
			if ($value->pid == $pid) {
				$value['child'] = $this->recursionArr($value->id);
				$array[] = $value;
			}
		}
		return $array;
	}
}