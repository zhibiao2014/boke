<?php

$database = require 'database.php';
$config=array(
	//'配置项'=>'配置值'
	'APP_GROUP_LIST'    => 'Admin', //项目分组设定
    'DEFAULT_GROUP'     => 'Admin', //默认分组
	'URL_MODEL'       =>'2',
);
return array_merge($database,$config);
?>