<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>读取数据</title>
</head>
<body>
	<table>
		<tr>
			<td>id:</td>
			<td><?php echo $data['id']; ?></td>
		</tr>
		<tr>
			<td>标题：</td>
			<td><?php echo $data['title']; ?></td>
		</tr>
		<tr>
			<td>内容：</td>
			<td><?php echo $data['content']; ?></td>
		</tr>
	</table>
</body>
</html>