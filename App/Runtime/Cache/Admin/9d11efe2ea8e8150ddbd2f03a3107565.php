<?php if (!defined('THINK_PATH')) exit(); defined('THINK_PATH') or exit('No permission resources.'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="__PUBLIC__/CSS/admin/upload.css" rel="stylesheet" type="text/css">
  <link href="__PUBLIC__/CSS/admin/table_form.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="__PUBLIC__/CSS/admin/style/zh-cn-styles1.css" title="styles1" media="screen">
  <link rel="alternate stylesheet" type="text/css" href="__PUBLIC__/CSS/admin/style/zh-cn-styles2.css" title="styles2" media="screen">
  <link rel="alternate stylesheet" type="text/css" href="__PUBLIC__/CSS/admin/style/zh-cn-styles3.css" title="styles3" media="screen">
  <link rel="alternate stylesheet" type="text/css" href="__PUBLIC__/CSS/admin/style/zh-cn-styles4.css" title="styles4" media="screen">
  <link rel="stylesheet" type="text/css" href="__PUBLIC__/JS/admin/uploadify/uploadify.css">
  <script type="text/javascript" src="__PUBLIC__/JS/admin/jquery.min.js"></script>
  <script type="text/javascript" src="__PUBLIC__/JS/admin/jquery.cookie.js"></script>
  <script type="text/javascript" src="__PUBLIC__/JS/admin/styleswitch.js"></script>
  <script src="__PUBLIC__/JS/admin/uploadify/jquery.uploadify.js"></script>
  <script type="text/javascript">
    var fileSizeLimit = "<?php echo (isset($_GET['fileSizeLimit']) ? $_GET['fileSizeLimit'] : 2);?>";
    var fileTypeDesc = "<?php echo (isset($_GET['fileTypeDesc']) ? $_GET['fileTypeDesc'] : '图片');?>";
    var fileTypeExts = "<?php echo ($args['file_types'] ? $args['file_types'] : '*.gif; *.jpg; *.png');?>";
    var queueSizeLimit = <?php echo ($args['file_upload_limit'] ? $args['file_upload_limit'] : '20');?>;
    var uploadLimit = <?php echo ($args['file_upload_limit'] ? $args['file_upload_limit'] : '20');?>;
  </script>
</head>
<body>
  <div class="col-tab pad-10">
    <ul class="tabBut cu-li">
      <li id="tab_attach_1" class="on" onclick="SwapTab('attach','on','',4,1);">上传附件</li>
    </ul>
    <div class="content" id="div_attach_1">
      <div class="img_upload">
        <form>
          <input id="file_upload" name="file_upload" type="file" multiple="true">
          <a href="javascript:$('#file_upload').uploadify('upload','*');" class="btupload">开始上传</a>
        </form>
        <div id="nameTip" class="onShow">最多上传<font color="red"> <?php echo $args['file_upload_limit']; ?></font>个附件,单文件最大<font color="red"><?php echo $file_size_limit?></font></div>
        <div class="bk3"></div>
      </div>
      <div class="bk3"></div>
      <div class="lh24">
        支持<font style="font-family: Arial, Helvetica, sans-serif"><?php echo str_replace(array('*.',';'),array('','、'),$args['file_types'])?></font> 格式
      </div>
      <input type="checkbox" id="watermark_enable" value="1" <?php if(isset($watermark_enable) &&$watermark_enable == 1) echo 'checked'?> onclick="change_params()"> 是否添加水印</div>
      <fieldset class="blue pad-10" id="swfupload">
        <legend>列表</legend>
        <div id="progress"></div>
        <ul id="attachment_list">
        </ul>
      </fieldset>
    </div>
  </div>
  <div id="att-status" class="hidden"></div>
  <div id="att-status-del" class="hidden"></div>
  <div id="att-name" class="hidden"></div>
  <script type="text/javascript">
    $('#file_upload').uploadify({
      'auto'            : false,
      post_params:{"thumb_width": "<?php echo $args['thumb_width']; ?>","thumb_height":"<?php echo $args['thumb_height']; ?>","watermark_enable":"<?php echo $args['watermark_enable']; ?>","filetype_post":"<?php echo $args['file_types_post']; ?>"},
      'formData'        : {'type':'<?php echo $_GET['type']; ?>'},
      'swf'             : '__PUBLIC__/JS/admin/uploadify/uploadify.swf',
      'uploader'        : '__PUBLIC__/Upfile',
      'buttonImage'     : '',
      'buttonClass'     : 'addnew',
      'buttonText'      : '',
      'height'          : '28',
      'width'           : '75',
      'fileSizeLimit'   : fileSizeLimit + "MB",
      'fileTypeDesc'    : fileTypeDesc,
      'fileTypeExts'    : fileTypeExts,
      'removeTimeout'   : 0,
      'queueSizeLimit'  : queueSizeLimit,
      'uploadLimit'     : uploadLimit,
      'onUploadError'   : function(file, errorCode, errorMsg, errorString) {
        alert(file.name + ' 上传失败，错误原因: ' + errorString);
      },
      'onUploadSuccess' : function(file, data, response) {
        var image_info = $.parseJSON(data);
        if (image_info.status == 'error') {
          alert(image_info.error_info);
        } else {
          <?php if ($_GET['type'] == 'video' || $_GET['type'] == 'swf' ) { ?>
            var src = "__PUBLIC__/Images/admin/flv.png";
            <?php
 } else { ?>
            var src = image_info.attachment_info['path'];
            <?php
 } ?>
          var html = '<li><div id="attachment_' + image_info.attachment_id +'" class="img-wrap">';
          html += '<a href="javascript:void(0);" onclick="javascript:att_cancel(this,' + image_info.attachment_id + ',\'upload\'' + ')" class="on">'
          html += '<div class="icon"></div>';
          html += '<img src="' + src + '" width="80" imgid="' + image_info.attachment_id + '" path="' + image_info.attachment_info['path'] + '" title="' + file.name + '">';
          html += '</a></div></li>';
          $('#attachment_list').append(html);
          att_insert(file.name,image_info.attachment_id);
        }
      }
    });

function att_insert(file_name,id) {
  var uploadfile = $("#attachment_"+id+" img").attr('path');
  $('#att-status').append('|'+uploadfile);
  $('#att-name').append('|'+file_name);
}

function att_cancel(obj,id,source) {
  var src = $(obj).children("img").attr("path");
  var filename = $(obj).children("img").attr("title");
  if($(obj).hasClass('on')){
    $(obj).removeClass("on");
    var imgstr = $("#att-status").html();
    var length = $("a[class='on']").children("img").length;
    var strs = filenames = '';
    for(var i=0;i<length;i++) {
      strs += '|'+$("a[class='on']").children("img").eq(i).attr('path');
      filenames += '|'+$("a[class='on']").children("img").eq(i).attr('title');
    }
    $('#att-status').html(strs);
    $('#att-name').html(filenames);
    if(source=='upload') $('#att-status-del').append('|'+id);
  } else {
    $(obj).addClass("on");
    $('#att-status').append('|'+src);
    $('#att-name').append('|'+filename);
    var imgstr_del = $("#att-status-del").html();
    var imgstr_del_obj = $("a[class!='on']").children("img")
    var length_del = imgstr_del_obj.length;
    var strs_del='';
    for(var i=0;i<length_del;i++){
      strs_del += '|'+imgstr_del_obj.eq(i).attr('imgid');
    }
    if(source=='upload') $('#att-status-del').html(strs_del);
  }
}

function SwapTab(name,cls_show,cls_hide,cnt,cur){
  for(i=1;i<=cnt;i++){
    if(i==cur){
      $('#div_'+name+'_'+i).show();
      $('#tab_'+name+'_'+i).attr('class',cls_show);
    }else{
      $('#div_'+name+'_'+i).hide();
      $('#tab_'+name+'_'+i).attr('class',cls_hide);
    }
  }
}

function addonlinefile(obj) {
  var strs = $(obj).val() ? '|'+ $(obj).val() :'';
  $('#att-status').html(strs);
}
function set_iframe(id,src){
  $("#"+id).attr("src",src+"?args="+queueSizeLimit+","+ fileSizeLimit +"," + uploadLimit);
}
</script>
</body>
</html>