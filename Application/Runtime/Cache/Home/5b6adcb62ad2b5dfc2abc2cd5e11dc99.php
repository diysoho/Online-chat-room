<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Custom Login Form Styling</title>
        <meta name="description" content="Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="/Public/login/favicon.ico">
        <link rel="stylesheet" type="text/css" href="/Public/login/css/style.css" />
        <script src="/Public/login/js/modernizr.custom.63321.js"></script>
        <!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
		<style>
			body {
				background: #e1c192 url(/Public/login/images/wood_pattern.jpg);
			}
		</style>
    </head>
    <body>
        <div class="container">
		
			<!-- Codrops top bar -->
            <!--<div class="codrops-top">-->
                <!--<a href="http://tympanus.net/Tutorials/RealtimeGeolocationNode/">-->
                    <!--<strong>&laquo; Previous Demo: </strong>Real-Time Geolocation Service with Node.js-->
                <!--</a>-->
                <!--<span class="right">-->
                    <!--<a href="http://tympanus.net/codrops/?p=11372">-->
                        <!--<strong>Back to the Codrops Article</strong>-->
                    <!--</a>-->
                <!--</span>-->
            <!--</div>&lt;!&ndash;/ Codrops top bar &ndash;&gt;-->
			
			<header>
			
				<h1>欢迎使用 <strong>Rain聊天室</strong> </h1>
				<!--<h2>Creative and modern form design with CSS magic</h2>-->
				
				<!--<nav class="codrops-demos">-->
					<!--<a href="index.html">Demo 1</a>-->
					<!--<a class="current-demo" href="index2.html">Demo 2</a>-->
					<!--<a href="index3.html">Demo 3</a>-->
					<!--<a href="index4.html">Demo 4</a>-->
					<!--<a href="index5.html">Demo 5</a>-->
				<!--</nav>-->

				<!--<div class="support-note">-->
					<!--<span class="note-ie">Sorry, only modern browsers.</span>-->
				<!--</div>-->
				
			</header>
			
			<section class="main" >
				<form class="form-2" method="post" action="/index.php?c=login&a=login">
					<h1><span class="log-in">登录</span> or <span class="sign-up">注册</span></h1>
					<p class="float">
						<label for="login"><i class="icon-user"></i>用户名</label>
						<input type="text" name="username" placeholder="不输入用户名的是sb">
					</p>
					<p class="float">
						<label for="password"><i class="icon-lock"></i>密码</label>
						<input type="password" name="password" placeholder="不用输入密码" class="showpassword" disabled>
					</p>
					<p class="clearfix"> 
						<button type="submit" class="log-twitter" disabled>注册</button>
						<input type="submit" name="submit" value="登录">
					</p>
				</form>​​
			</section>
			
        </div>
		<!-- jQuery if needed -->
        <script type="text/javascript" src="/Public/login/js/jquery.min.js"></script>
		<script type="text/javascript">


			    $('#showPassword').click(function(){
					if($("#showPassword").is(":checked")) {
						$('.icon-lock').addClass('icon-unlock');
						$('.icon-unlock').removeClass('icon-lock');    
					} else {
						$('.icon-unlock').addClass('icon-lock');
						$('.icon-lock').removeClass('icon-unlock');
					}
			    });
			});
		</script>
    </body>
</html>