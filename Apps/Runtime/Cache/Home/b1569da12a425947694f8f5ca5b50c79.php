<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<meta charset="utf-8" type="text/html">
		<title>登录</title>
		<style type="text/css">
			*{padding:0;margin:0}
			a{text-decoration:none;color:#333;font-size:15px;}
			#contain{width:1349px;height:680px;}
			.head{width:990px;height:60px;margin:10px auto;}
			#logo{width:300px;height:60px;}
			.logfont{font-size:25px;margin-top:0px;}
			.middle{width:1349px;height:475px;background:url("/zl_shop/Public/Uploads/images/558d3054N5c6a4a92.jpg");}
			.foot{width:990px;height:60px;background:#fff;margin:40px auto;}
			.links{width:990px;height:18px;margin:0px auto;text-align:center}
			.links a{font-size:12px;color:#666}
			.links a:hover{color:red;text-decoration:underline;}
			.copyright{font-size:12px;color:#666;width:990px;height:18px;margin:20px auto;text-align:center}
			#login-form{width:345px;height:355px;background:#fff;position:absolute;top:120px;right:180px;}
			#login-form div.mt{width:306px;height:27px;background:#fff;margin:20px auto;}
			#login-form div.mt div.right-link{width:90px;height:27px;float:right;margin-top:-27px;line-height:27px;}
			#login-form div.mt div.right-link a{display:block;width:90px;height:27px;line-height:-60px;}
			
			#login-form div.msg{width:306px;height:27px;background:#999;margin:10px auto;background:#ddd}
			#login-form div.mc{width:306px;height:350px;margin:10px auto;}
			#login-form div.mc div.item{width:306px;height:40px; margin:10px auto;line-height:40px;}
			.login-label{display:block;width:38px;height:38px;border:1px solid #aaa;}
			.loginname{float:right;height:40px;width:267px;margin-top:-40px;}
			.logft{font-size:13px;color:#555;}
			.wpass{font-size:13px;}
			.wpass:hover{color:red;text-decoration:underline;}
			.sub{width:306px;height:40px;background:#c40000;border:0px solid red;font-size:20px;font-wigth:bold;color:#fff;}
		</style>
		<script src="/zl_shop/Public/js/jquery.js"></script>
	</head>
	<body>
		<div id="contain">
			<!--============================ LOGO ==========================================-->
			<div class="head">
				<div id="logo">
					<!--<a href="#"><img src="/zl_shop/Public/index/images/20150714145947.png"></a>-->
			    </div>
			</div>
			<div id="bg-img" class="middle">
				<div id="login-form">
					<div class="mt">
						<div><h2>会员登录</h2></div>
						<div class="right-link"><a href="/zl_shop/index.php/Reg/index"><img src="/zl_shop/Public/index/images/20150714115530.png"></a></div>
					</div>
					<div class="msg"><img src="/zl_shop/Public/index/images/20150714135552.png"></div>
					<form action="/zl_shop/index.php/Login/prologin" id="regform" method="post">
					<div class="mc">
						<div class="item">
							<label  class="login-label"><img src="/zl_shop/Public/index/images/20150714150340.png"></label>
							<input class="loginname" id="username" type="text"  name="username" tabindex="1" autocomplete="off" placeholder="邮箱/用户名/已验证手机">
						
                        </div>
						<div class="item">
							<label  class="login-label"><img src="/zl_shop/Public/index/images/20150714150608.png"></label>
							<input class="loginname" id="password" type="password"  name="password" tabindex="1" autocomplete="off" placeholder="密码">
							
                        </div>
						<div class="item">
							<label  class="login-label"><img src="/zl_shop/Public/index/images/20150714150608.png"></label>
							<input class="loginname" style="width:120px;float:left;margin-left:39px;"  type="text"  name="code" tabindex="1" autocomplete="off" placeholder="输入验证码">
							<img src="/zl_shop/index.php/Login/code" id="code" style="float:right;margin-top:-40px;" />
                        </div>
						<div class="item">
						
							<input type="checkbox" ><span class="logft"> 自动登录</span>
							<input type="checkbox" ><span class="logft"> 安全控件登录</span>
							<span style="float:right;"><a  class="wpass" href="/zl_shop/index.php/Login/forget_pwd">忘记密码？</a></span>
						</div>
						<div class="item">
							<input class="sub" type="submit" value="登　 录">
						
							
						</div>
						<div class="item">
							<span class="logft">使用合作网站登录：</span>
							<a class="wpass" href="#">QQ钱包</a><span class="logft"> | </span>
							<a class="wpass" href="#">QQ</a><span class="logft"> | </span>
							<a class="wpass" href="#">微信</a>
						</div>
					</div>
					</form>
				</div>
			</div>
			
			<div class="foot">
				<div class="links">
					<a href="#">关于我们</a><span class="logft"> | </span>
					<a href="#">联系我们</a><span class="logft"> | </span>
					<a href="#">人才招聘</a><span class="logft"> | </span>
					<a href="#">商家入驻</a><span class="logft"> | </span>
					<a href="#">广告服务</a><span class="logft"> | </span>
					
					<a href="#">友情链接</a><span class="logft"> | </span>
					<a href="#">销售联盟</a><span class="logft"> | </span>
					
					<a href="#">English Site</a>
					
				</div>
				<div class="copyright">
					Copyright©2015-2016 版权所有
				</div>
			</div>
		</div>
	</body>
	<script type="text/javascript">
	
	//验证码
		var code = document.getElementById("code");
		//var but = document.getElementById("but");
		code.onclick = function(){
			var c = "/zl_shop/index.php/Login/code?"+Math.random();
			this.src = c;
		}
			
		
		
	</script>
</html>