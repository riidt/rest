<?php
if(!defined('REST')) {
	exit('Access Denied');
}

include_once("function_sql.php");

//Ucenter Home配置参数
$_SC = array();
$_SC['dbhost']  		= 'localhost'; //服务器地址
$_SC['dbuser']  		= 'riidt'; //用户
$_SC['dbpw'] 	 		= 'neo0807'; //密码
$_SC['dbcharset'] 		= 'utf8'; //字符集
$_SC['pconnect'] 		= 0; //是否持续连接
$_SC['dbname']  		= 'riidt'; //数据库
$_SC['tablepre'] 		= 'uchome_'; //表名前缀
$_SC['charset'] 		= 'utf-8'; //页面字符集

//链接数据库
dbconnect();
/*	
$query = $_SGLOBAL['db']->query("SELECT * FROM rest");
while ($value = $_SGLOBAL['db']->fetch_array($query)) {
	echo $value['rest_id'].$value['rest_key'].$value['rest_name'];
}
*/