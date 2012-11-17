<?php
if(!defined('REST')) {
	exit('Access Denied');
}

class Response
{
	public $status = 0;
	public $msg = "";
	
	function __construct() 
	{
		
	}
	
	public function __toString()
	{
		return "{\"status\":$this->status, \"msg\":\"$this->msg\"}";
	}
}