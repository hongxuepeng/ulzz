<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/23
 * Time: 16:23
 */
function objectToArray($object) {
	//先编码成json字符串，再解码成数组
	return json_decode(json_encode($object), true);
}

function arrayToObject($arr){
	if(is_array($arr)){
		return (object) array_map(__FUNCTION__, $arr);
	}else{
		return $arr;
	}
}

function ajax_error($msg = '服务器错误，可刷新页面重试',$data=array()){
	$return = array('status'=>'0');
	$return['info'] = $msg;
	$return['data'] = $data;
	return json_encode($return,JSON_UNESCAPED_UNICODE);
}

function ajax_success($msg = '提交成功',$data=array()){
	$return = array('status'=>'1');
	$return['info'] = $msg;
	$return['data'] = $data;
	return json_encode($return,JSON_UNESCAPED_UNICODE);
}
/**
 * 分类排序（降序）
 */
function _tree_sort($arr,$cols){
	//子分类排序
	foreach ($arr as $k => &$v) {
		if(!empty($v['sub'])){
			$v['sub']=_tree_sort($v['sub'],$cols);
		}
		$sort[$k]=$v[$cols];
	}
	if(isset($sort))
		array_multisort($sort,SORT_ASC,$arr);
	return $arr;
}
/**
 * 横向分类树
 */
function _tree_hTree($arr,$pid=0){
	foreach($arr as $k => $v){
		if($v['parent_id']==$pid){
			$data[$v['id']]=$v;
			$data[$v['id']]['sub']=_tree_hTree($arr,$v['id']);
		}
	}
	return isset($data)?$data:array();
}



/**
 * 打印调试函数
 * @param mixed $var 打印的东西
 */
function p($var = null,$debugger = 0){
	$str = '<pre style="border:1px solid #ccc; padding:10px; font-size:16px; line-height:28px; border-radius:5px; background:#eaebe6;">%str%</pre>';
	$replace = print_r($var, true);
	if(is_null($var)){
		$replace = '__NULL__';
	}elseif(is_bool($var)){
		$var = $var === true ? 'true' : 'false';
		$replace = '(bool)'.$var;
	}elseif(is_string($var) && trim($var) === ''){
		$replace = '空';
	}
	$str = str_replace('%str%', $replace, $str);
	echo $str;
	if($debugger) exit;
}


/**
 * @param $data array  要下载的数据
 * @param $title_arr array　表头
 * @param $filename string　文件名称
 */
function export_csv($data,$title_arr,$file_name=''){
	ini_set("max_execution_time", "3600");

	$csv_data = '';

	/** 标题 */
	$nums = count($title_arr);

	for ($i = 0; $i < $nums - 1; ++$i) {
		//$csv_data .= '"' . $title_arr[$i] . '",';
		$csv_data .= $title_arr[$i] . ',';
	}
	if ($nums > 0) {
		$csv_data .= $title_arr[$nums - 1] . "\r\n";
	}

	foreach ($data as $k => $row) {
		$_tmp_csv_data = '';
		foreach ($row as $key => $r){
			$row[$key] = str_replace("\"", "\"\"", $r);

			if ( $_tmp_csv_data == '' ) {
				$_tmp_csv_data = $row[$key];
			}
			else {
				$_tmp_csv_data .= ','. $row[$key];
			}

		}

		$csv_data .= $_tmp_csv_data.$row[$nums - 1] . "\r\n";
		unset($data[$k]);
	}

	$csv_data = mb_convert_encoding($csv_data, "cp936", "UTF-8");
	$file_name = empty($file_name) ? date('Y-m-d-H-i-s', time()) : $file_name;
	// 解决IE浏览器输出中文名乱码的bug
	if(preg_match( '/MSIE/i', $_SERVER['HTTP_USER_AGENT'] )){
		$file_name = urlencode($file_name);
		$file_name = iconv('UTF-8', 'GBK//IGNORE', $file_name);
	}
	$file_name = $file_name . '.csv';
	header('Content-Type: application/download');
	header("Content-type:text/csv;");
	header("Content-Disposition:attachment;filename=" . $file_name);
	header('Cache-Control:must-revalidate,post-check=0,pre-check=0');
	header('Expires:0');
	header('Pragma:public');
	echo $csv_data;
	exit();
}

/**
 * 把数组里的NULL转化为空字符串
 */
function _unsetNull($arr){
	if($arr !== null){
		if(is_array($arr)){
			if(!empty($arr)){
				foreach($arr as $key => $value){
					if($value === null){
						$arr[$key] = '';
					}else{
						$arr[$key] = _unsetNull($value);      //递归再去执行
					}
				}
			}else{ $arr = ''; }
		}else{
			if($arr === null){ $arr = ''; }         //注意三个等号
		}
	}else{ $arr = ''; }
	return $arr;
}