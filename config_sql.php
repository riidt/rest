<?php
if(!defined('REST')) {
	exit('Access Denied');
}

include_once("function_sql.php");

//Ucenter Home���ò���
$_SC = array();
$_SC['dbhost']  		= 'localhost'; //��������ַ
$_SC['dbuser']  		= 'riidt'; //�û�
$_SC['dbpw'] 	 		= 'neo0807'; //����
$_SC['dbcharset'] 		= 'utf8'; //�ַ���
$_SC['pconnect'] 		= 0; //�Ƿ��������
$_SC['dbname']  		= 'riidt'; //���ݿ�
$_SC['tablepre'] 		= 'uchome_'; //����ǰ׺
$_SC['charset'] 		= 'utf-8'; //ҳ���ַ���

//�������ݿ�
dbconnect();
/*	
$query = $_SGLOBAL['db']->query("SELECT * FROM rest");
while ($value = $_SGLOBAL['db']->fetch_array($query)) {
	echo $value['rest_id'].$value['rest_key'].$value['rest_name'];
}
*/