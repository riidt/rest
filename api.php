<?php
	define("REST", 1);
	define('S_ROOT', dirname(__FILE__).DIRECTORY_SEPARATOR);
	//header('Content-type: application/json');
	date_default_timezone_set("Asia/Chongqing");
	
	$ac = empty($_GET['ac']) ? '': $_GET['ac'];
	
	if(!$ac)
	{
		exit('api error');
	}
	
	include_once(S_ROOT.'./'.$ac.'.php');