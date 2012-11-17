<?php
	if(!defined('REST')) 
	{
		exit('Access Denied');
	}
	
include_once("class_pwd.php");
include_once("config_common.php");
include_once("config_sql.php");
include_once("class_response.php");

$restID = $_POST["rest_id"];
$restKey = $_POST["rest_key"];
$restName = $_POST["rest_name"];



if(!authorize($restID, $restKey, $restName))
{
	$response = new Response();
	$response->status=0;
	$response->msg="authorize failed";
}
else
{
	$pwd = new PWD();
	$response=$pwd->get();
}

echo $response;