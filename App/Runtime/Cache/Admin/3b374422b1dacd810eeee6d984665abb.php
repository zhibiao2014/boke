<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>发布博客</title>
	<link rel="stylesheet" href="__PUBLIC__/Css/common.css" />
	<script type="text/javascript" src='__PUBLIC__/Js/jquery-1.8.2.min.js'></script>
	<script type="text/javascript" src='__PUBLIC__/Js/common.js'></script>
    <script src="__PUBLIC__/Js/uploadify/jquery.uploadify.min.js" type="text/javascript"></script>
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
                  <div class="col-tab pad-10">
    <ul class="tabBut cu-li">
      <li id="tab_attach_1" class="on" onclick="SwapTab('attach','on','',4,1);">上传附件</li>
      <li id="tab_attach_2" onclick="SwapTab('attach','on','',4,2);">网络文件</li>
      <li id="tab_attach_3" onclick="SwapTab('attach','on','',4,3);set_iframe('album_list','<?php echo U('Attachment/album_list');?>');">图库</li>
      <li id="tab_attach_4" onclick="SwapTab('attach','on','',4,4);">目录浏览</li>
    </ul>
    <div class="content" id="div_attach_1">
      <div class="img_upload">
        <form>
          <input id="file_upload" name="file_upload" type="file" multiple="true">
          <a href="javascript:$('#file_upload').uploadify('upload','*');" class="btupload">开始上传</a>
        </form>
        <div id="nameTip" class="onShow"><?php echo L('upload_up_to')?><font color="red"> <?php echo $args['file_upload_limit']; ?></font> <?php echo L('attachments')?>,<?php echo L('largest')?> <font color="red"><?php echo $file_size_limit?></font></div>
        <div class="bk3"></div>
      </div>
      <div class="bk3"></div>
      <div class="lh24">
        <?php echo L('supported')?> <font style="font-family: Arial, Helvetica, sans-serif"><?php echo str_replace(array('*.',';'),array('','、'),$args['file_types'])?></font> <?php echo L('formats')?>
      </div>
      <input type="checkbox" id="watermark_enable" value="1" <?php if(isset($watermark_enable) &&$watermark_enable == 1) echo 'checked'?> onclick="change_params()"> <?php echo L('watermark_enable')?>
      <div class="bk10"></div>
      <fieldset class="blue pad-10" id="swfupload">
        <legend>列表</legend>
        <div id="progress"></div>
        <ul id="attachment_list">
        </ul>
      </fieldset>
    </div>
    <div id="div_attach_2" class="contentList pad-10 hidden">
      <div class="bk10"></div>
      请输入网络地址<div class="bk3"></div><input type="text" name="info[filename]" class="input-text" value="" style="width:350px;" onblur="addonlinefile(this)">
      <div class="bk10"></div>
    </div>
    <div id="div_attach_3" class="contentList pad-10 hidden">
      <iframe name="album-list" src="javascript:void(0);" scrolling="no" width="100%" height="345" style="overflow-x:hidden;border:none" allowtransparency="true" id="album_list" ></iframe>
    </div>
    <div id="div_attach_4" class="contentList pad-10 hidden"></div>
  </div>
  <div id="att-status" class="hidden"></div>
  <div id="att-status-del" class="hidden"></div>
  <div id="att-name" class="hidden"></div>
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