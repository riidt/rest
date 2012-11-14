<?php
	if(!defined('REST')) 
	{
		exit('Access Denied');
	}
	
include_once("pwd.php");
include_once("config_common.php");
include_once("config_sql.php");

$restKey = $_POST["rest_key"];
$restName = $_POST["rest_name"];

if(!authorize($restKey, $restName))
{
	exit('authorize failed');
}

$pwd = new PWD();
echo $pwd->get();

