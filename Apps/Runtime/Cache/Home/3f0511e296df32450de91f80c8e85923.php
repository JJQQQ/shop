<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" type="text/html">
		<title>注册页面</title>
		<style type="text/css">
			body{margin:-10px;width:1349px;}
			#box{background:#f5f5f5;padding:0px;margin:0px;width:100%;height:700px;}
			#reg-logo{width:990px;height:60px;margin:10px auto;position:relative;}
			#reg-logo span{display:block;width:300px;height:60px;line-height:60px;font-size:20px;position:absolute;top:0px;left:400px;}
			#main-content{width:990px;height:600px;border:1px solid #bbb;margin:10px auto;background:#fff;}
			#main-content div.reg-row{width:700px;height:60px;margin-top:20px;}
			#main-content div.reg-row > div{float:left;}
			#main-content div.reg-row div.reg-title{width:150px;height:60px;text-align:right;font-size:15px;line-height:60px;color:#666;}
			#main-content div.reg-row div.reg-content{width:300px;height:60px;line-height:60px;}
			#main-content div.reg-row div.reg-content input{width:280px;height:35px;}
			#main-content div.reg-row div.reg-tip{display:none;width:248px;height:37px;border:1px solid #bbb;margin-top:11px;font-size:12px;}
			#f-right{width:200px;height:400px;background:#999;float:right;margin-top:-480px;background-image:url("/zl_shop/Public/index/images/20150720191153.png")}
		    /*==============footer==================*/
			.foot{width:990px;height:60px;background:#f5f5f5;margin:40px auto;}
			.links{width:990px;height:18px;margin:0px auto;text-align:center}
			.links a{font-size:12px;color:#666}
			.links a:hover{color:red;text-decoration:underline;}
			.copyright{font-size:12px;color:#666;width:990px;height:18px;margin:20px auto;text-align:center}
		</style>
		<script src="/zl_shop/Public/js/jquery.js"></script>
	</head>
	<body>
		<div id="box">	
			<div id="reg-logo">
				<!--<img src="/zl_shop/Public/index/images/logo-2013.png">-->
				<span>个人账号注册</span>
			</div>
			<div id="main-content">
				<form action="/zl_shop/index.php/Reg/insert" id="regform" method="post">
					<div class="reg-row">
						<div class="reg-title">用户名：</div>
						<div class="reg-content username"><input type="text" name="username"></div>
						<div class="reg-tip username-tip"></div>
					</div>
					<div class="reg-row">
						<div class="reg-title">密码：</div>
						<div class="reg-content password"><input type="password" name="password"></div>
						<div class="reg-tip password-tip"></div>
					</div>
					<div class="reg-row">
						<div class="reg-title">确认密码：</div>
						<div class="reg-content password2"><input type="password" name="password2"></div>
						<div class="reg-tip password2-tip"></div>
					</div>
					<div class="reg-row">
						<div class="reg-title">邮箱：</div>
						<div class="reg-content email"><input type="text" name="email"></div>
						<div class="reg-tip email-tip"></div>
					</div>
					<div class="reg-row">
						<div class="reg-title">验证码：</div>
						<div class="reg-content code">
							<input type="text" style="width:150px;position:relative" name="code">
							<img src="/zl_shop/index.php/Reg/code" id="code" style="position:absolute;top:422px;left:487px;"></div>
						<div class="reg-tip"></div>
					</div>
					<div class="reg-row">
						<div class="reg-title"></div>
						<div style="line-height:60px;"><input id="deal" checked type="checkbox"/>我已阅读并同意（<a style="color:#005aa0" href="#">注册协议</a>） </div>
						<div class="reg-tip"></div>
					</div>
					<div class="reg-row">
						<div class="reg-title"></div>
						<div class="reg-content"><input type="submit" value="注　　册" style="background:#e4393c;border:0px;color:#fff;font-size:15px;"></div>
						<div class="reg-tip"></div>
					</div>
				</form>
				<div id="f-right"></div>
			</div>
		</div>
		<!--============footer===============-->
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
	</body>
	
	<script type="text/javascript">
		//==================用户名验证===================
			var a=false ,b=false ,c=false ,d=false;
			//=======得到焦点=========
			$(".username input").focus(function(){
				$(this).parent().next().css({"display":"block","background":"#f7f7f7","line-height":"40px","text-indent":"5px","color":"#666","border":"1px solid #bbb"});
				$(this).parent().next().html("6-20为字符，支持字母、数字及“_”组合");
			});
			//======失去焦点=========
			$(".username input").blur(function(){
				var username = $(this).val();
				if(username == ""){
					$(this).parent().next().css({"display":"none"});
				}else if(username.length < 6){
					$(this).parent().next().css({"background":"#ffebeb","border":"1px solid #ffabab","color":"red"});
					$(this).parent().next().html("用户名长度只能在6-20位之间");
				}else{
					
					//alert(username);
					//利用 Ajax 查询数据库用户名是否已存在
					$.ajax({
							url:"/zl_shop/index.php/Reg/check_username",
							type:"post",
							async:false,
							success:function(data){
								//alert(data);
								//alert(data.info);
								if(data.info == 1){
									$(".username input").parent().next().css({"background":"#ffebeb","border":"1px solid #ffabab","color":"red"});
									$(".username-tip").html("用户名已存在");
								}else{
									$(".username input").css({"border":"1px solid green"});
									$(".username input").parent().next().css({"display":"block","background":"#f7f7f7","line-height":"40px","text-indent":"5px","color":"green","border":"1px solid green"});
									$(".username-tip").html("用户名可用");
									a = true;
								}
								
							},
							data:"username="+username,
							dataType:"json"
					});
				}	
			});
		
			//========================验证密码========================================
			$(".password input").focus(function(){
				$(this).parent().next().css({"display":"block","background":"#f7f7f7","line-height":"40px","text-indent":"5px","color":"#666","border":"1px solid #bbb"});
				$(this).parent().next().html("6-20为字符，由字母、数字、符号组成");
			});
			//判断是否为空
			$(".password input").blur(function(){
				var password = $(this).val();
				//alert(password);
				if(password == ""){
					$(this).parent().next().css({"display":"none"});
				}else if(password.length < 6){
					$(this).parent().next().css({"background":"#ffebeb","border":"1px solid #ffabab","color":"red"});
					$(this).parent().next().html("密码长度只能在6-20位之间");
				}else{
					$(".password input").parent().next().css({"display":"block","background":"#f7f7f7","line-height":"40px","text-indent":"5px","color":"green","border":"1px solid green"});
					$(".password-tip").html("密码可用");
					b = true;
				}
			});
			
			//===========确认密码=============
			$(".password2 input").focus(function(){
				$(this).parent().next().css({"display":"block","background":"#f7f7f7","line-height":"40px","text-indent":"5px","color":"#666","border":"1px solid #bbb"});
				$(this).parent().next().html("请再次输入密码");
			});	
			
			 $(".password2 input").blur(function(){
				var password2 = $(this).val();
				var password = $(".password input").val();
				if(password2 == ""){
					$(this).parent().next().css({"display":"none"});
				}else if(password2.length < 6){
				$(this).parent().next().css({"background":"#ffebeb","border":"1px solid #ffabab","color":"red"});
					$(this).parent().next().html("密码长度只能在6-20位之间");
				}else if(password == password2){
					$(".password2 input").parent().next().css({"display":"none"});
					c = true;
				}else{
					$(this).parent().next().css({"background":"#ffebeb","border":"1px solid #ffabab","color":"red"});
					$(this).parent().next().html("密码不一致");
				}
			 
			 
			 });
			 
			 
			 //==========================邮箱验证====================================
			$(".email input").focus(function(){
				$(this).parent().next().css({"display":"block","background":"#f7f7f7","line-height":"40px","text-indent":"5px","color":"#666","border":"1px solid #bbb"});
				$(this).parent().next().html("请输入有效邮箱");
			});
			
			$(".email input").blur(function(){
				var email = $(this).val();
				var reg = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/;
				if(email == ""){
					$(this).parent().next().css({"display":"none"});
				
				}else if(reg.test(email)){
					$(".email input").parent().next().css({"display":"block","background":"#f7f7f7","line-height":"40px","text-indent":"5px","color":"green","border":"1px solid green"});
					$(".email-tip").html("邮箱有效");
					d = true;
				}else{
					$(this).parent().next().css({"background":"#ffebeb","border":"1px solid #ffabab","color":"red"});
					$(this).parent().next().html("邮箱格式错误");
				}
			});
	
			//选中协议时，注册信息可以提交
			 
			//alert(c);
			document.getElementById("regform").onsubmit = function(){
				var check = document.getElementById("deal").checked
				if(check && a && b && c && d){
					return true;
				}else{
					return false;
				}
			}
			
			//==========验证码=============
			
			var code = document.getElementById("code");
			code.onclick = function(){
				var s = "/zl_shop/index.php/Reg/code?"+Math.random();
				this.src = s;
			}
	
	</script>

</html>