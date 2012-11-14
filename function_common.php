<?php
if(!defined('REST')) {
	exit('Access Denied');
}

function generateKey()
{
	list($usec, $sec) = explode(" ", microtime());
	$s = "neo".date("Y-m-d-H-i-s").$usec;
	$k = md5($s);
	return $k;
}