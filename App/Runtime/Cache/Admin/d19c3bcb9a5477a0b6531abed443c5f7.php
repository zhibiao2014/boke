<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>界面管理</title>
<link href="CSS_PATH/style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="CSS_PATH/style.css" />
<script type="text/javascript" src="JS_PATH/js.js"></script>
</head>
<body id="index">


<h1>控制面板</h1>
<ul id="globalNav">
	<li><a href="#">我的文章</a>
		<ul>
			<li><a href="#" target="frameBord">&nbsp&nbsp&nbsp新文章</a></li>
			<li><a href="#" target="frameBord">&nbsp&nbsp&nbsp文章列表</a></li>
		</ul>
	</li>
	<li><a href="a"  target="frameBord">我的评论</a></li>
	<li><a href="b">用户管理</a>
		<ul>
			<li><a href="#">&nbsp&nbsp&nbsp新用户</a></li>
			<li><a href="#">&nbsp&nbsp&nbsp用户列表</a></li>
		</ul>
	</li>
	<li><a href="c">我的站点</a>
		<ul>
			<li><a href="#">&nbsp&nbsp&nbsp新站点</a></li>
			<li><a href="#">&nbsp&nbsp&nbsp我的站点</a></li>
		</ul>
	</li>
	<li><a href="../Index/login">退出</a></li>
</ul>

<iframe id="frameBord" name="frameBord" frameborder="0" height="650px" width="1000px">	
<h1>欢迎来到我的后台！</h1>
</iframe>

</body>
</html>