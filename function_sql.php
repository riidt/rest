<?php
if(!defined('REST')) {
	exit('Access Denied');
}

function dbconnect() {
	global $_SGLOBAL, $_SC;
	
	include_once(S_ROOT.'./class_mysql.php');

	if(empty($_SGLOBAL['db'])) {
		$_SGLOBAL['db'] = new dbstuff;
		$_SGLOBAL['db']->charset = $_SC['dbcharset'];
		$_SGLOBAL['db']->connect($_SC['dbhost'], $_SC['dbuser'], $_SC['dbpw'], $_SC['dbname'], $_SC['pconnect']);
	}
}

function authorize($k, $n)
{
	global $_SGLOBAL, $_SC;
	
	$query = $_SGLOBAL['db']->query("SELECT * FROM rest WHERE rest_key='$k' AND rest_name='$n'");
	if ($_SGLOBAL['db']->num_rows($query)) 
	{
		return true;
	}
	
	return false;
}

function getApp($id)
{
	global $_SGLOBAL, $_SC;
	
	$query = $_SGLOBAL['db']->query("SELECT * FROM rest WHERE rest_id=$id");
	if ($value = $_SGLOBAL['db']->fetch_array($query)) 
	{
		return $value['rest_key'].",".$value['rest_name'];
	}
	return "";
}
