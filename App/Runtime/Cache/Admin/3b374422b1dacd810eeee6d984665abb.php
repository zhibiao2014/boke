<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>发布博客</title>
	<link rel="stylesheet" href="__PUBLIC__/Css/common.css" />
	<script type="text/javascript" src='__PUBLIC__/Js/jquery-1.8.2.min.js'></script>
	<script type="text/javascript" src='__PUBLIC__/Js/common.js'></script>
</head>
<?php
$arrType=array('image/jpg','image/gif','image/png','image/bmp','image/pjpeg'); $max_size='500000'; $upfile='./image/human'; $file=$_FILES['upfile']; if($_SERVER['REQUEST_METHOD']=='POST'){ if(!is_uploaded_file($file['tmp_name'])){ echo "<font color='#FF0000'>文件不存在！</font>"; exit; } if($file['size']>$max_size){ echo "<font color='#FF0000'>上传文件太大！</font>"; exit; } if(!in_array($file['type'],$arrType)){ echo "<font color='#FF0000'>上传文件格式不对！</font>"; exit; } if(!file_exists($upfile)){ mkdir($upfile,0777,true); } $imageSize=getimagesize($file['tmp_name']); $img=$imageSize[0].'*'.$imageSize[1]; $fname=$file['name']; $ftype=explode('.',$fname); $picName=$upfile."/cloudy".$fname; if(file_exists($picName)){ echo "<font color='#FF0000'>同文件名已存在！</font>"; exit; } if(!move_uploaded_file($file['tmp_name'],$picName)){ echo "<font color='#FF0000'>移动文件出错！</font>"; exit; } else{ echo "<font color='#FF0000'>图片文件上传成功！</font><br/>"; echo "<font color='#0000FF'>图片大小：$img</font><br/>"; echo "图片预览：<br><div style='border:#F00 1px solid; width:200px;height:200px'>
    <img src=\"".$picName."\" width=200px height=200px>".$fname."</div>"; } } ?>
<body>
	<div class='status'>
		<span>发布博客</span>
	</div>
	<form action="<?php echo U('runAddBoke');?>" method='post' enctype="multipart/form-data">
		<table width="50%">
			<tr>
				<td width='25%' align='right'>标题：</td>
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
				<td align='right'>上传图片</td>
				<td>
					<input name='upfile' type='file'/>
					<input name="btn" type="submit" value="上传" /><br />
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