<?php

$database = require 'database.php';
$config=array(
	//'配置项'=>'配置值'
	'DEFAULT_MODULE'  =>'Admin',
	'URL_MODEL'       =>'2'
);
return array_merge($database,$config);
?>