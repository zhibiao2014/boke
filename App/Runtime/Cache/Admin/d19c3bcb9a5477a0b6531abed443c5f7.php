<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>管理界面</title>
<link rel="stylesheet" type="text/css" href="CSS_PATH/style.css" />
<script type="text/javascript" src="JS_PATH/js.js"></script>
</head>

<body id="index">
<h1></h1>
<ul id="globalNav">
	<li><a href="#">管理项目1</a>
		<ul>
			<li><a href="#">1-1</a></li>
			<li><a href="#">1-2</a></li>
			<li><a href="#">1-3</a></li>
			<li><a href="#">1-4</a></li>
		</ul>
	</li>
	<li><a href="a" target="frameBord">管理项目2</a></li>
	<li><a href="b" target="frameBord">管理项目3</a></li>
	<li><a href="login.html">退出</a></li>
</ul>
<iframe id="frameBord" name="frameBord" frameborder="0" width="100%" height="100%" src="siteInfo.html"></iframe>
</body>
</html>