<?php
if(!defined('REST')) {
	exit('Access Denied');
}

class PWD
{
	private $dbfile = "db.dat";
	private $response;
	function __construct() 
	{
		$this->response = new Response();
		
		echo $_SGLOBAL["db"];
	}
	
	public function get()
	{
		if(@file_exists($this->dbfile))
		{
			$handle = fopen($this->dbfile, "r");
			$contents = fread($handle, filesize ($this->dbfile));
			fclose($handle);

			$this->response->status = 200;
			$this->response->msg = "$contents";
		}
		else
		{
			$this->response->status = 4;
			$this->response->msg = "file not exist";
		}
		return $this->response;
	}
	
	public function put($content)
	{
		$flag = @file_exists($this->dbfile) && $this->bak();

		if(!$flag)
		{
			$this->response->status = 1;
			$this->response->msg = "bak failed";
		}
		else
		{
			if (!$handle = fopen($this->dbfile, 'w')) 
			{
		        $this->response->status = 2;
				$this->response->msg = "file open failed";
		    }
			else
			{
			    if (fwrite($handle, $content) === FALSE) {
			        $this->response->status = 3;
					$this->response->msg = "file write failed";
			    }
			    else
			    {
			    	$this->response->status = 200;
					$this->response->msg = "success";
			    }
			}
		    fclose($handle);
		}
		return $this->response;
	}
	
	private function bak()
	{
		$dt = date("Y-m-d-H-i-s");
		$bakfile = "bak/db.$dt.dat";
		
		return copy($this->dbfile, $bakfile);
	}
}