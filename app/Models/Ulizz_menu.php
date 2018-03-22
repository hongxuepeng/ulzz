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
	 * @return   拼接的下拉框 option
	 */
	public function recursionGetMenu($parent_id = 0, $num = 0) {
		$optionStr = '';
		$arr = $this->where('parent_id', $parent_id)->get();
		$gang = str_repeat('&nbsp;&nbsp;&nbsp;', $num);
		$num++;
		foreach ($arr as $value) {
			$name = $value->name;
			$parent_id = $value->id;
			$optionStr .= "<option value='{$parent_id}'>{$gang}{$name}</option>";
			$optionStr .= $this->recursionGetMenu($parent_id,$num);
		}
		return $optionStr;

	}
}