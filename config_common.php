<?php
if(!defined('REST')) {
	exit('Access Denied');
}

$_SGLOBAL = array();

include_once("function_common.php");

//ʱ��
$mtime = explode(' ', microtime());
$_SGLOBAL['timestamp'] = $mtime[1];
$_SGLOBAL['supe_starttime'] = $_SGLOBAL['timestamp'] + $mtime[0];


