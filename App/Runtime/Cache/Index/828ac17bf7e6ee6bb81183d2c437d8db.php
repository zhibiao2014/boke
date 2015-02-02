<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>我的博客</title>
<?php  function getstr($string, $length, $encoding = 'utf-8') { $string = trim($string); if($length && strlen($string) > $length) { $wordscut = ''; if(strtolower($encoding) == 'utf-8') { $n = 0; $tn = 0; $noc = 0; while ($n < strlen($string)) { $t = ord($string[$n]); if($t == 9 || $t == 10 || (32 <= $t && $t <= 126)) { $tn = 1; $n++; $noc++; } elseif(194 <= $t && $t <= 223) { $tn = 2; $n += 2; $noc += 2; } elseif(224 <= $t && $t < 239) { $tn = 3; $n += 3; $noc += 2; } elseif(240 <= $t && $t <= 247) { $tn = 4; $n += 4; $noc += 2; } elseif(248 <= $t && $t <= 251) { $tn = 5; $n += 5; $noc += 2; } elseif($t == 252 || $t == 253) { $tn = 6; $n += 6; $noc += 2; } else { $n++; } if ($noc >= $length) { break; } } if ($noc > $length) { $n -= $tn; } $wordscut = substr($string, 0, $n); } else { for($i = 0; $i < $length - 1; $i++) { if(ord($string[$i]) > 127) { $wordscut .= $string[$i].$string[$i + 1]; $i++; } else { $wordscut .= $string[$i]; } } } $string = $wordscut; } return trim($string); } ?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='__PUBLIC__/css/google.css' rel='stylesheet' type='text/css'>
<link href="__PUBLIC__/css/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="__PUBLIC__/js/jquery.min.js"></script>
	 	<!---strat-slider---->
	    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/slider.css" />
		<script type="text/javascript" src="__PUBLIC__/js/modernizr.custom.28468.js"></script>
		<script type="text/javascript" src="__PUBLIC__/js/jquery.cslider.js"></script>
			<script type="text/javascript">
				$(function() {
				
					$('#da-slider').cslider({
						autoplay	: true,
						bgincrement	: 450
					});
				
				});
			</script>
		<!---//strat-slider---->
<!-- start top_js_button -->
<script type="text/javascript" src="__PUBLIC__/js/move-top.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/easing.js"></script>
   <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>

</head>
<body>
<!-- start header -->
<div class="header_bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
			<a href="index"><img src="__PUBLIC__/images/logo.png" alt=""/> </a>
		</div>
		<div class="social-icons">
		    <ul>
		      <li><a href="#" target="_blank"></a></li>
			  <li><a href="#" target="_blank"></a></li>
		      <li><a href="#" target="_blank"></a></li>
			  <li><a href="#" target="_blank"></a></li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>
<!-- start header -->
<div class="header_btm">
<div class="wrap">
	<div class="header_sub">
		<div class="h_menu">
		
	<ul>
		<li><a href="<?php echo U('Index/Index/index');?>">主页</a></li>
		<li class="active"><a href="<?php echo U('Index/Index/blog');?>">博客</a></li>
	</ul>

		</div>
		<div class="h_search">
    		<form>
    			<input type="text" value="" placeholder="搜索博客...">
    			<input type="submit" value="">
    		</form>
		</div>
        <div class="menu">
        	<ul>
				<li class=""><a href="<?php echo U('Index/Index/index');?>">主页</a></li>
				<li><a href="<?php echo U('Index/Index/blog');?>">博客</a></li>
            </ul>
        </div>
        <div class="search">
            <form action="/iphone/search">
                <input type="text" value="Search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}" class="text">
            </form>
        </div>
        <div class="sub-head">
        	<ul>
            	<li><a href="#" id="menu">菜单  <span></span></a></li>
            	<li><a href="#" id="search">搜索 <span></span></a></li>
            </ul>
            <div class="clear"></div>
        </div>
	   <script type="text/javascript">
		$(".menu,.search").hide();
		$("#menu").click(function(){
			$(".menu").toggle();
			$(".search").hide();
			$("#search").removeClass("active");
			$("#menu").toggleClass("active");
		});
		$("#search").click(function(){
			$(".search").toggle();
			$(".menu").hide();
			$("#menu").removeClass("active");
			$("#search").toggleClass("active");
			$(".text").focus();
		});
	</script>
	<script type="text/javascript" src="__PUBLIC__/js/script.js"></script>
	<div class="clear"></div>

		<div class="clear"></div>
</div>
</div>
</div>

	<div class="top_bg">
		<div class="wrap">
			<div class="top">
				<h2>欢迎来到我的博客</h2>
			</div>
		</div>
	</div>


	<div class="wrap">
		<div class="main">
			<div class="blog">
				<?php foreach ($data as $value) { ?>
				<div class="blog_list">
				<a  href="details/id/<?php echo ($value['id']); ?>"><h2><?php echo ($value['title']); ?></h2></a>
					<h5><?php echo ($value['create_at']); ?> , Posted by&nbsp;<a href="index"><?php echo ($value['uname']); ?></a></h5>
					<div class="blog_para">
						<p class="para"><a  href="details/id/<?php echo ($value['id']); ?>"><img src="__PUBLIC__/images/blog1.jpg" alt=""></a><?php echo getstr($value['content'],600) ?>......</p>
						<div class="read_more">
							<a class="btn" href="details/id/<?php echo ($value['id']); ?>">查看全文</a>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<?php } ?>	 
			</div>
		</div>
	</div>

<div class="wrap">
		<!--<ul id="flexiselDemo3">
			<li><img src="__PUBLIC__/images/client1.jpg" /></li>
			<li><img src="__PUBLIC__/images/client6.jpg" /></li>
			<li><img src="__PUBLIC__/images/client2.jpg" /></li>
			<li><img src="__PUBLIC__/images/client5.jpg" /></li>
			<li><img src="__PUBLIC__/images/client4.jpg" /></li>
			<li><img src="__PUBLIC__/images/client3.jpg" /></li>
			<li><img src="__PUBLIC__/images/client4.jpg" /></li>
		</ul>-->
	<script type="text/javascript">
$(window).load(function() {
	$("#flexiselDemo1").flexisel();
	$("#flexiselDemo2").flexisel({
		enableResponsiveBreakpoints: true,
    	responsiveBreakpoints: { 
    		portrait: { 
    			changePoint:480,
    			visibleItems: 1
    		}, 
    		landscape: { 
    			changePoint:640,
    			visibleItems: 2
    		},
    		tablet: { 
    			changePoint:768,
    			visibleItems: 3
    		}
    	}
    });

	$("#flexiselDemo3").flexisel({
		visibleItems: 5,
		animationSpeed: 1000,
		autoPlay: true,
		autoPlaySpeed: 3000,    		
		pauseOnHover: true,
		enableResponsiveBreakpoints: true,
    	responsiveBreakpoints: { 
    		portrait: { 
    			changePoint:480,
    			visibleItems: 1
    		}, 
    		landscape: { 
    			changePoint:640,
    			visibleItems: 2
    		},
    		tablet: { 
    			changePoint:768,
    			visibleItems: 3
    		}
    	}
    });
    
});
</script>
<script type="text/javascript" src="__PUBLIC__/js/jquery.flexisel.js"></script>
</div>
<!-- start footer -->
<div class="footer_bg">
<div class="wrap">
	<div class="footer">
		<!-- start span_of_4 -->
		<div class="span_of_4">
			<div class="span1_of_4">
				<h4>热门文章</h4>
				<?php foreach ($hots as $key=>$value) { ?>
				<h3><a href="details" style="color:white"><?php echo ($value['title']); ?></a></h3>
				<ul class="f_nav1">
					<li class="timer"><a href="#"><?php echo ($value['create_at']); ?></a></li>
				</ul><br>
				<?php } ?>
			</div>
			<div class="span1_of_4">
				<h4>特色文章</h4>
				<?php foreach ($tags as $key=>$value) { ?>
				<h3><a href="details" style="color:white"><?php echo ($value['title']); ?></a></h3>
				<ul class="f_nav1">
					<li class="timer"><a href="#"><?php echo ($value['create_at']); ?></a></li>
				</ul><br>
				<?php } ?>
			</div>
			<div class="span1_of_4">
				<h4>关于我们</h4>
				<ul style="color:white">
				<li>人若有志，就不会在半坡停止。</li><br>
				<li>相信自己，一定能成功。</li><br>
				<li>学习是苦根上长出来的甜果。</li><br>
				<li>相信自己的目标，努力，努力，再努力！</li>
				</ul>
			</div>
			<div class="span1_of_4">
				<h4>保持联系</h4>
				<p class="btm"></p>
				<p class="btm1 pin">湖南常德</p>
				<p class="btm1 mail"><a href="mailto:276595510@qq.com">给我发邮件</a></p>
				<p class="call">18711665602</p>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>
</div>
<!-- start footer -->
<div class="footer_bg1">
<div class="wrap">
	<div class="footer1">
		<!-- scroll_top_btn -->
	    <script type="text/javascript">
			$(document).ready(function() {
			
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
		 <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
		<!--end scroll_top_btn -->
		<div class="social-icons">
		    <ul>
		      <li><a href="#" target="_blank"></a></li>
			  <li><a href="#" target="_blank"></a></li>
		      <li><a href="#" target="_blank"></a></li>
			  <li><a href="#" target="_blank"></a></li>
			</ul>
		</div>
|
		<div class="clear"></div>
	</div>
</div>
</div>
<div style="display:none"><script src='__PUBLIC__/js/cnzz.js' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>