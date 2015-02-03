<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta http-equiv="Cache-control" content="private, must-revalidate" />
	<title>发布博客</title>
	<script type="text/javascript">
	var path='__PUBLIC__';
	var url='__URL__';
	</script>
	<script type="text/javascript" src="__PUBLIC__/Js/jquery.js"></script>
	<script type="text/javascript" src="__PUBLIC__/Js/swfupload.js"></script>
	<script type="text/javascript" src="__PUBLIC__/Js/handlers.js"></script>
	<link href="__PUBLIC__/Css/default.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="__PUBLIC__/Css/common.css" />
	<script type="text/javascript" src='__PUBLIC__/Js/jquery-1.8.2.min.js'></script>
	<script type="text/javascript" src='__PUBLIC__/Js/common.js'></script>
	<script type="text/javascript">
		var swfu;
		window.onload = function () {
			swfu = new SWFUpload({
				upload_url: "__PUBLIC__/Upload",
				post_params: {"PHPSESSID": "<?php echo session_id();?>"},
				file_size_limit : "2 MB",
				file_types : "*.jpg;*.png;*.gif;*.bmp",
				file_types_description : "JPG Images",
				file_upload_limit : "100",
				file_queue_error_handler : fileQueueError,
				file_dialog_complete_handler : fileDialogComplete,
				upload_progress_handler : uploadProgress,
				upload_error_handler : uploadError,
				upload_success_handler : uploadSuccess,
				upload_complete_handler : uploadComplete,
				button_image_url : "__PUBLIC__/Images/upload.png",
				button_placeholder_id : "spanButtonPlaceholder",
				button_width: 113,
				button_height: 33,
				button_text : '',
				button_text_style : '.spanButtonPlaceholder { font-family: Helvetica, Arial, sans-serif; font-size: 14pt;} ',
				button_text_top_padding: 0,
				button_text_left_padding: 0,
				button_window_mode: SWFUpload.WINDOW_MODE.TRANSPARENT,
				button_cursor: SWFUpload.CURSOR.HAND,			
				flash_url : "__PUBLIC__/JS/swfupload.swf",
				custom_settings : {
					upload_target : "divFileProgressContainer"
				},				
				debug: false
			});
		};
	</script>
</head>
<body>
	<div class='status'>
		<span>发布博客</span>
	</div>
	<form action="<?php echo U('runAddBoke');?>" method='post' enctype="multipart/form-data">
		<table width="50%">
			<tr>
				<td width='25%' align='right'>标题</td>
				<td>
					<input type="text" name='title' style='font-size:30px' />
				</td>
			</tr>
			<tr>
				<td align='right'>内容</td>
				<td>
					<textarea name='content' style='width:800px;height:300px;'></textarea>
				</td>
			</tr>
			<tr>
				<td align='right'>上传图片</td>
				<td>
					<div style="width: 610px; height: auto; border: 1px solid #e1e1e1; font-size: 12px; padding: 10px;">
						<span id="spanButtonPlaceholder"></span>
						<div id="divFileProgressContainer"></div>
						<div id="thumbnails">
							<ul id="pic_list" style="margin: 5px;"></ul>
							<div style="clear: both;"></div>
						</div>
					</div>
					<input type="hidden" name="s" id="" value=""/>
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