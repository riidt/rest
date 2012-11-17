<?php
	if(!defined('REST')) 
	{
		exit('Access Denied');
	}
		
include_once("class_cryption.php");
$c = new Cryption();

$s = "ri.idt@163.com && riidt0807";
$k = "riidt0807";
$en = $c->en($s, $k);
$de = $c->de($en, $k);

echo $de."<br>";
echo $en."<br>";
echo $s."<br>";