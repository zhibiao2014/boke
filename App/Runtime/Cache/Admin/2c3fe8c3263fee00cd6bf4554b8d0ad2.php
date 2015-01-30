<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>demo</title>
<script src="JS_PATH/jquery-1.8.0.min.js" type="text/javascript" ></script>
<link rel="stylesheet" type="text/css" href="CSS_PATH/register.css"/>
</head>
<body>

<div class='signup_container'>
	<h1 class='signup_title'>用户登陆</h1>
	<img src='IMG_PATH/people.png' id='admin' />
	<div id="signup_forms" class="signup_forms clearfix">
		<form class="signup_form_form" id="signup_form" method="post" action="" data-secure-action="https://www.tumblr.com/login" data-secure-ajax-action="">
			<div class="form_row first_row">
				<label for="signup_email">请输入用户名</label><div class='tip ok'></div>
				<input type="text" name="user[email]" placeholder="请输入用户名" id="signup_name" data-required="required">
			</div>
			<div class="form_row">
				<label for="signup_password">请输入密码</label><div class='tip error'></div>
				<input type="password" name="user[password]" placeholder="请输入密码" id="signup_password" data-required="required">
			</div>
		</form>
	</div>
	<div class="login-btn-set">
		<div class='rem'>记住我</div>
		<a href='javascript:void(0)' class='login-btn'></a>
	</div>
	<p class='copyright'>版权所有</p>
</div>

</body>

<script type="text/javascript">

$(function(){

    $('.rem').click(function(){
        $(this).toggleClass('selected');
    })

})


</script>

</html>