<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>我的博客</title>
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
		<li><a href="index">主页</a></li>
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

	<div class="top_bg">
		<div class="wrap">
			<div class="top">
				<h2>欢迎来到我的博客</h2>
			</div>
		</div>
	</div>


<!-- start main -->
<div class="wrap">`
	<div class="main">
		<div class="details">
			<h2>冬天是一季漫长的等待</h2>
			<div class="det_pic">
				  <img src="__PUBLIC__/images/det_pic.jpg" alt="" />
			</div>
			<div class="det_text">
				<p class="para">
				&nbsp&nbsp&nbsp&nbsp春天是一季灿烂的花开，夏天是一季热烈的日晒，秋天是一季成熟的残败，冬天是一季漫长的等待，其实，每个季节都有花开和期待，每个季节都有花落和伤感，只要我们的心跟随着起落，好时节便无处不在。

春夏秋冬，似乎一季比一季漫长。自古以来，人们就偏爱春光，一季短暂的花开花落，让人惜花伤春无限感慨，留不住花间晚照，留不住万紫千红，亦如人留不住刹那芳华，问一句：若有人知春去处，唤取归来同住！

然而，春去夏来悄无声息，一季热烈的日晒和倾盆大雨过后，池塘的莲便褪去洁白的荷衣，天意转凉，初秋来得明显，那一池残香便是最好的证明，烟光凝重暮山紫，一切都变得很有色彩，叶落丹枫透，菊开百花残，如果说春是一个充满情怀的少女，那么秋便是一个孤独的思妇，不知道为什么，秋总是免不了一段长长的愁绪，或是一段回忆，或是一种思念，或是一种慵懒，有一种心被空气笼罩的薄凉与孤独，仿佛缺少一种温暖，一种重逢。

一个人走过春夏秋冬，看过四季变换，在流年的光景里，我渐渐的爱上了轮回，无论是时间的轮回还是生命的轮回，或者是情感的轮回。我不知道造物者为何如此神奇伟大，但我知道天地间渺小的我，必定要遵循自然万物的规律，相信姻缘与宿命，简单的活着，平凡的活着，好好的活着，不去问为什么春光易逝，不去管为什么秋多伤感，也不去想冬天为何如此漫长，只要从容的度日，终有一天，春暖花开，即使还是会有轮回，我亦相信，我需要每一个季节，每一种感受，每一种领悟。

我分不清秋末冬初，亦不太喜欢别人划分的时间，无论阳历还是农历，我只喜欢凭自己的感觉和发现去判定每一个季节，因为，我心若有感触，情自会流露心间。我心若无感触，春夏秋冬便不存在，一切皆随心动。

听说家里下了场雪，即是早已入冬，我心有所触，都说“雪里江山美”，转眼就该“花间岁月新”了，似乎太渴望春天的到来，冬天才会显得愈加漫长，这一季冬天是我离开家的第三个冬天，广东不下雪，所以我才愈加思念记忆里的那场雪，其实只是为了寻找一种感觉，连同今天的思念一起，用昨天的深情去爱今天的每个人。

一年一个冬天，冬天过去一年也就完了，一生一个记忆，记忆消失了一生也就完了，只为了让记忆寻到一方土壤，不要去管哪一季会漫长，只需从容度日，安然等待，就算花真的开一千年，落一千年，就算我等不到花开，等不到你来，我依然选择等待。

等到春暖花开，夏晴蔚蓝，等到秋叶落败，冬雪又白，始终相信，人生需要一个漫长的等待，这是一种安排。
</p>
				<div class="read_more">
					 <a class="btn" href="details">读取全文</a>
				</div>
			</div>
			<div class="clear"></div>
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