<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/21
 * Time: 17:24
 */
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Ulizz_roles extends Base
{
	protected $table = 'ulizz_roles';


	/**
	 * [递归获取管理员]
	 * @author 李成龙
	 * @param    父ID
	 * @return   拼接的下拉框 option
	 */
	public function recursionGetRole($parent_id = 0, $num = 0) {
		$optionStr = '';
		$arr = $this->where('pid', $parent_id)->get();
		$gang = str_repeat('&nbsp;&nbsp;&nbsp;', $num);
		$num++;
		foreach ($arr as $value) {
			$name = $value->name;
			$parent_id = $value->id;
			$optionStr .= "<option value='{$parent_id}'>{$gang}{$name}</option>";
			$optionStr .= $this->recursionGetRole($parent_id,$num);
		}
		return $optionStr;
	}
}