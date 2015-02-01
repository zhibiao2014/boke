<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>博客用户列表</title>
	<link rel="stylesheet" href="__PUBLIC__/Css/common.css" />
	<script type="text/javascript" src='__PUBLIC__/Js/jquery-1.8.2.min.js'></script>
	<script type="text/javascript" src='__PUBLIC__/Js/common.js'></script>
</head>
<body>
	<div class='status'>
		<span>原作博客列表</span>
	</div>
	<table class="table">
		<tr>
			<th>ID</th>
			<th>发布者</th>
			<th>博客标题</th>

			<!--<th>统计信息</th>-->
			<th>发布时间</th>

		</tr>
		<?php foreach ($datas as $key=>$value){ ?>
			<tr>
				<td><?php echo ($value['id']); ?></td>
				<td><?php echo ($value['username']); ?></td>
				<td><?php echo ($value['title']); ?></td>
				<!--
				<td>
					<ul>
						<li>转发：<?php echo ($valueturn); ?></li>
						<li>收藏：<?php echo ($valuekeep); ?></li>
						<li>评论：<?php echo ($valuecomment); ?></li>
					</ul>
				</td>-->
				<td><?php echo ($value['create_at']); ?></td>
			</tr>
		<?php } ?>
		<tr>
			<td colspan='7' align='center' height='60'><?php echo ($page); ?></td>
		</tr>
	</table>
</body>
</html>