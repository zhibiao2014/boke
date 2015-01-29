<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>添加</title>
</head>
<body>
	<form method="post" action="<?php echo U('Form/insert');?>">
		标题：<input type='text' name='title'><br />
		内容：<textarea name='content' rows="5" cols="45"></textarea><br />
		<input type='submit' value='提交'>
	</form>
</body>
</html>