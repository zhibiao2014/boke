<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>发布博客</title>
	<link rel="stylesheet" href="__PUBLIC__/Css/common.css" />
	<script type="text/javascript" src='__PUBLIC__/Js/jquery-1.8.2.min.js'></script>
	<script type="text/javascript" src='__PUBLIC__/Js/common.js'></script>
</head>
<body>
	<div class='status'>
		<span>发布博客</span>
	</div>
	<form action="<?php echo U('runAddBoke');?>" method='post'>
		<table width="50%">
			<tr>
				<td width='15%' align='right'>标题：</td>
				<td>
					<input type="text" name='title' style='font-size:30px' />
				</td>
			</tr>
			<tr>
				<td align='right'>内容：</td>
				<td>
					<textarea id="editor_id" name="content" style="width:500px;height:300px;"></textarea>
				</td>
			</tr>
			<tr>
				<td colspan='2'>
					<input type="submit" value='发布' class='big-btn'/>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>