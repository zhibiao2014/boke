<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>Home</title>
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
				<li class="active"><a href="index">主页</a></li>
				<li><a href="blog">博客</a></li>
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
				<li class=""><a href="index">主页</a></li>
				<li><a href="blog">博客</a></li>
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

<div class="slider_bg">
<div class="wrap">
	<div class="slider">
				<!---start-da-slider-->
				<div id="da-slider" class="da-slider">
				<?php foreach ($bokes as $key => $value ) { ?>
				<div class="da-slide">
					<h2><a href="#" style="color:white"><?php echo ($value['title']); ?></a></h2>
					<p>&nbsp&nbsp<?php echo ($value['content']); ?>.</p>
				</div>
				<?php } ?>
				<nav class="da-arrows">
					<span class="da-arrows-prev"></span>
					<span class="da-arrows-next"></span>
				</nav>
			</div>
 			<!--//End-da-slider-->
 	</div>
</div>
</div>


<!-- start main -->
<div class="wrap">
	<div class="main">
		<div class="main_text">
			<h2>生命就是个奇迹！！！</h2>
			<p class="para">"一枝从污泥里长出的夏荷，竟开出雪一样洁白纯净的花儿；<br />  一粒细细黑黑的萤火虫，竟能在茫茫黑夜里发出星星般闪亮的光。<br />  一株微不足道的小草，竟开出像海洋一样湛蓝的花；<br />  一只毫不起眼的鸟儿，竟能在枝头唱出远胜小提琴的夜曲；<br />  一条柔软无骨的蚯蚓，居然能在坚实的土地里如鱼在海中似的自由遨游。"</p>
		</div>
		<!-- start grids_of_3 -->
		<!--<div class="grids_of_3">
			<div class="grid1_of_3">
				<img src="__PUBLIC__/images/icon1.png" alt=""/>
				<h3><a href="#">视频 </a></h3>
				<p>百度视频搜索是全球最大的中文视频搜索引擎,拥有最多的中文视频资源,提供用户最完美的观看体验。.</p>
			</div>
			<div class="grid1_of_3">
				<img src="__PUBLIC__/images/icon2.png" alt=""/>
				<h3><a href="#">文章 </span> </a></h3>
				<p>爱情、亲情、友情等情感文章欣赏及人生感悟、经典、哲理、励志、搞笑文章,校园文章、美文故事、散文随笔等免费在线阅读。欢迎作者在本站发表文章,分享心情。.</p>
			</div>
			<div class="grid1_of_3">
				<img src="__PUBLIC__/images/icon3.png" alt=""/>
				<h3><a href="#">图片 </span> </a></h3>
				<p>50万张高清图片素材和桌面壁纸免费下载,全部高清无水印!内容涵盖风景图片、动物图片、鲜花图片、家居图片、设计素材、电脑壁纸、动漫壁纸、电影壁纸、明星壁纸、美女...</p>
			</div>
			<div class="clear"></div>
		</div>-->
		<!-- end grids_of_3 -->
	</div>
</div>
<!-- start main_bg -->
<div class="main_bg">
<div class="wrap">
	<div class="main content_top">
		<!-- start span_of_3 -->
		<div class="span_of_3">
			<?php foreach ($bokes as $key=>$value){ ?>
			<div class="span1_of_3">
				<a href="details"><img src="__PUBLIC__/images/pic1.jpg" alt=""/></a>
				<div class="span1_of_3_text">
					<h3><a href="details"><?php echo ($value['title']); ?></a></h3>
				</div>
			</div>
			<?php } ?>
			<div class="clear"></div>
		</div>
		<!-- end grids_of_3 -->
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
				<li>相信自己的目标，努力，努力，在努力！</li>
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