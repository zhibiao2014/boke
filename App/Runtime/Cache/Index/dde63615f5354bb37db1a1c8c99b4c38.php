<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE HTML>
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
				<li><a href="about">关于我们</a></li>
				<li><a href="service">服务</a></li>
				<li><a href="details">页面</a></li>
				<li><a href="blog">博客</a></li>
				<li><a href="contact">联系我们</a></li>
			</ul>
		</div>
		<div class="h_search">
    		<form>
    			<input type="text" value="" placeholder="search something...">
    			<input type="submit" value="">
    		</form>
		</div>
        <div class="menu">
        	<ul>
				<li class="active"><a href="index">主页</a></li>
				<li><a href="about">关于我们</a></li>
				<li><a href="service">服务</a></li>
				<li><a href="details">页面</a></li>
				<li><a href="blog">博客</a></li>
				<li><a href="contact">联系我们</a></li>
            </ul>
        </div>
        <div class="search">
            <form action="/iphone/search">
                <input type="text" value="Search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}" class="text">
            </form>
        </div>
        <div class="sub-head">
        	<ul>
            	<li><a href="#" id="menu">Menu  <span></span></a></li>
            	<li><a href="#" id="search">Search <span></span></a></li>
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
<!-- start slider -->
<div class="slider_bg">
<div class="wrap">
	<div class="slider">
				<!---start-da-slider----->
				<div id="da-slider" class="da-slider">
				<div class="da-slide">
					<h2>Welcome to our website</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				</div>
				<div class="da-slide">
					<h2>Clean & Flat Design</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				</div>
				<div class="da-slide">
					<h2>Clean & Flat Design</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				</div>
				<div class="da-slide">
					<h2>Welcome to our website</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				</div>			
				<nav class="da-arrows">
					<span class="da-arrows-prev"></span>
					<span class="da-arrows-next"></span>
				</nav>
			</div>
 			<!---//End-da-slider----->
 	</div>
</div>
</div>
<!-- start main -->
<div class="wrap">
	<div class="main">
		<div class="main_text">
			<h2>Lorem Ipsum is <span>simply dummy </span> text of the printing.</h2>
			<p class="para">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
		</div>
		<!-- start grids_of_3 -->
		<div class="grids_of_3">
			<div class="grid1_of_3">
				<img src="__PUBLIC__/images/icon1.png" alt=""/>
				<h3><a href="#">Lorem Ipsum is <span> simply </span> </a></h3>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
			</div>
			<div class="grid1_of_3">
				<img src="__PUBLIC__/images/icon2.png" alt=""/>
				<h3><a href="#">Lorem Ipsum is <span> simply </span> </a></h3>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
			</div>
			<div class="grid1_of_3">
				<img src="__PUBLIC__/images/icon3.png" alt=""/>
				<h3><a href="#">Lorem Ipsum is <span> simply </span> </a></h3>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
			</div>
			<div class="clear"></div>
		</div>
		<!-- end grids_of_3 -->
	</div>
</div>
<!-- start main_bg -->
<div class="main_bg">
<div class="wrap">
	<div class="main content_top">
		<!-- start span_of_3 -->
		<div class="span_of_3">
			<div class="span1_of_3">
				<a href="details"><img src="__PUBLIC__/images/pic1.jpg" alt=""/></a>
				<div class="span1_of_3_text">
					<h3><a href="details">Lorem Ipsum is simply  text</a></h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
				</div>
			</div>
			<div class="span1_of_3">
				<a href="details"><img src="__PUBLIC__/images/pic2.jpg" alt=""/></a>
				<div class="span1_of_3_text">
					<h3><a href="details">Lorem Ipsum is simply  text</a></h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
				</div>
			</div>
			<div class="span1_of_3">
				<a href="details"><img src="__PUBLIC__/images/pic3.jpg" alt=""/></a>
				<div class="span1_of_3_text">
					<h3><a href="details">Lorem Ipsum is simply  text</a></h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<!--  -->
		<div class="span_of_3">
			<div class="span1_of_3">
				<a href="details"><img src="__PUBLIC__/images/pic4.jpg" alt=""/></a>
				<div class="span1_of_3_text">
					<h3><a href="details">Lorem Ipsum is simply  text</a></h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
				</div>
			</div>
			<div class="span1_of_3">
				<a href="details"><img src="__PUBLIC__/images/pic5.jpg" alt=""/></a>
				<div class="span1_of_3_text">
					<h3><a href="details">Lorem Ipsum is simply  text</a></h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
				</div>
			</div>
			<div class="span1_of_3">
				<a href="details"><img src="__PUBLIC__/images/pic6.jpg" alt=""/></a>
				<div class="span1_of_3_text">
					<h3><a href="details">Lorem Ipsum is simply  text</a></h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<!-- end grids_of_3 -->
	</div>
</div>
</div>
<div class="wrap">
		<ul id="flexiselDemo3">
			<li><img src="__PUBLIC__/images/client1.jpg" /></li>
			<li><img src="__PUBLIC__/images/client6.jpg" /></li>
			<li><img src="__PUBLIC__/images/client2.jpg" /></li>
			<li><img src="__PUBLIC__/images/client5.jpg" /></li>
			<li><img src="__PUBLIC__/images/client4.jpg" /></li>
			<li><img src="__PUBLIC__/images/client3.jpg" /></li>
			<li><img src="__PUBLIC__/images/client4.jpg" /></li>
		</ul>
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
				<h4>popular post</h4>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				<ul class="f_nav1">
					<li class="timer"><a href="#">25-september 2013 </a></li>
				</ul>
				<p class="top">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				<ul class="f_nav1">
					<li class="timer"><a href="#">25-september 2013 </a></li>
				</ul>
			</div>
			<div class="span1_of_4">
				<h4>tags</h4>
				<p>It is a long established fact that a reader will be distracted by the<big>readable</big> content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal <big>blog</big> Many desktop publishing packages and web page editors now use Lorem.</p>
			</div>
			<div class="span1_of_4">
				<h4>a little about us</h4>
				<p class="btm">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
				<p>It is a long established fact that a reader will be of a page when looking at its layout.</p>

			</div>
			<div class="span1_of_4">
				<h4>get in touch</h4>
				<p class="btm">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
				<p class="btm1 pin">Texas, US</p>
				<p class="btm1 mail"><a href="mailto:info@mycompany.com">info(at)mycompany.com </a></p>
				<p class="call">01234 444 777</p>
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