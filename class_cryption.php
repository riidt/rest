<?php
if(!defined('REST')) {
	exit('Access Denied');
}


class Cryption {

	function en($str,$key) {
		$ret='';
		$str = base64_encode ($str);
		for ($i=0; $i<=strlen($str)-1; $i++){
			$d_str=substr($str, $i, 1);
			$int =ord($d_str);
			$int=$int^$key;
			$hex=strtoupper(dechex($int));
			$ret.=$hex;
		}
		return $ret;
	}

	function de($str,$key) {
		$ret='';
		for ($i=0; $i<=strlen($str)-1; 0){
			$hex=substr($str, $i, 2);
			$dec=hexdec($hex);
			$dec=$dec^$key;
			$ret.=chr($dec);
			$i=$i+2;
		}
		return base64_decode($ret);
	}

}