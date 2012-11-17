<?php
	if(!defined('REST')) 
	{
		exit('Access Denied');
	}

include_once("class_response.php");
include_once("config_common.php");
include_once("config_sql.php");

$restID = $_POST["id"];

$response = new Response();

$r = getApp($restID);

if(empty($r))
{
	$response->status = 0;
	$response->msg = "not exist";
}
else
{
	$response->status = 200;
	$response->msg = $r;
}

echo $response;
