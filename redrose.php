<?php
//ini_set('max_execution_time', 300);
ini_set('max_execution_time', 0); //unlimit
$timezone = "Asia/Ho_Chi_Minh";
if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
include('simple_html_dom.php');

//redrose.php?url=http://sv3.trasuavotin.com/count/online.txt
if(isset($_REQUEST['url'])){
	$url=$_REQUEST['url'];
	$html=file_get_html($url);
	echo $html;
}
?>