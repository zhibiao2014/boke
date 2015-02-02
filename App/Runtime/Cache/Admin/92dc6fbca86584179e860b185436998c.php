<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>微博用户列表</title>
	<link rel="stylesheet" href="__PUBLIC__/Css/common.css" />
	<script type="text/javascript" src='__PUBLIC__/Js/jquery-1.8.2.min.js'></script>
	<script type="text/javascript" src='__PUBLIC__/Js/common.js'></script>
</head>
<body>
	<div class='status'>
		<span>后台管理员列表</span>
	</div>
	<table class="table">
		<tr>
			<th>ID</th>
			<th>管理员名称</th>
			<th>级别</th>
			<th>最后登录时间</th>
			<th>最后登录IP</th>
			<th>账号状态</th>		
  			<th>操作</th>
		</tr>
		<?php foreach ($users as $value) { ?>
			<tr>
				<td width='50' align='center'><?php echo ($value['user_id']); ?></td>
				<td width='120' align='center'><?php echo ($value['name']); ?></td>
				<td align='center'>
					<?php if($value["admin"]==1): ?>管理员
					<?php else: ?>
						超级管理员<?php endif; ?>
				</td>
				<td align='center'><?php echo ($value['logintime']); ?></td>
				<td align='center'><?php echo ($value['loginip']); ?></td>
				<td width='60' align='center'>
					<?php if($value["lock"]): ?>锁定
					<?php else: ?>未锁<?php endif; ?>
				</td>
				<td width='240'>
					<?php if($value["lock"]): ?><a href="<?php echo U('lockAdmin', array('id' => $value['user_id'], 'lock' => 0));?>" class='add lock'>解除锁定</a>
					<?php else: ?>
						<a href="<?php echo U('lockAdmin', array('id' => $value['user_id'], 'lock' => 1));?>" class='add lock'>锁定用户</a><?php endif; ?>
					<a href='<?php echo U("delAdmin", array("id" => $value["user_id"]));?>' class='add lock'>删除管理员</a>
				</td>
			</tr>
		<?php } ?>
	</table>
</body>
</html>