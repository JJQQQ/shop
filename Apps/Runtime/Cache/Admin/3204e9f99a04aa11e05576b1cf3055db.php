<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>商城后台管理系统</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- basic styles -->
		<link href="/zl_shop/Public/admin/assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="/zl_shop/Public/admin/assets/css/font-awesome.min.css" />


		<!--[if IE 7]>
		  <link rel="stylesheet" href="/zl_shop/Public/admin/assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->
        
        
        
        

		<!-- fonts -->

	
		<!-- ace styles -->
        
		<link rel="stylesheet" href="/zl_shop/Public/admin/assets/css/ace.min.css" />
		<link rel="stylesheet" href="/zl_shop/Public/admin/assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="/zl_shop/Public/admin/assets/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="/zl_shop/Public/admin/assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

        
		<!-- ace settings handler -->

		<script src="/zl_shop/Public/admin/assets/js/ace-extra.min.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="/zl_shop/Public/admin/assets/js/html5shiv.js"></script>
		<script src="/zl_shop/Public/admin/assets/js/respond.min.js"></script>
		<![endif]-->
		
	</head>

	<body>
		<div class="navbar navbar-default" id="navbar">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<div class="navbar-header pull-left">
					<a href="#" class="navbar-brand">
						<small>
							<i class="icon-leaf"></i>
							京东商城后台管理系统
						</small>
					</a><!-- /.brand -->
				</div><!-- /.navbar-header -->

				<div class="navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="/zl_shop/Public/admin/assets/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>欢迎光临,</small>
									<?php echo ($v = session('name')); ?>
								</span>
								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="/zl_shop/admin.php/Admin/edit/id/">
										<i class="icon-cog"></i>
										设置
									</a>
								</li>

								<li>
									<a href="/zl_shop/admin.php/Admin/edit/id/">
										<i class="icon-user"></i>
										个人资料
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="/zl_shop/admin.php/Login/logout">
										<i class="icon-off"></i>
										退出
									</a>
								</li>
							</ul>
						</li>
					</ul><!-- /.ace-nav -->
				</div><!-- /.navbar-header -->
			</div><!-- /.container -->
		</div>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>

				<div class="sidebar" id="sidebar">
					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
					</script>

					<div class="sidebar-shortcuts" id="sidebar-shortcuts">
						<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
							<button class="btn btn-success">
								<i class="icon-signal"></i>
							</button>

							<button class="btn btn-info">
								<i class="icon-pencil"></i>
							</button>

							<button class="btn btn-warning">
								<i class="icon-group"></i>
							</button>

							<button class="btn btn-danger">
								<i class="icon-cogs"></i>
							</button>
						</div>

						<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
							<span class="btn btn-success"></span>

							<span class="btn btn-info"></span>

							<span class="btn btn-warning"></span>

							<span class="btn btn-danger"></span>
						</div>
					</div><!-- #sidebar-shortcuts -->

					<ul class="nav nav-list">
                        
						<li>
							<a href="/zl_shop/admin.php/Admin/Index" class="dropdown-toggle">
								<i class="icon-desktop"></i>
								<span class="menu-text"> 用户管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="/zl_shop/admin.php/Admin/index">
										<i class="icon-double-angle-right"></i>
										员工列表
									</a>
								</li>

								<li>
									<a href="/zl_shop/admin.php/Users/index">
										<i class="icon-double-angle-right"></i>
										会员列表
									</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 商品管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="/zl_shop/admin.php/Goods/index">
										<i class="icon-double-angle-right"></i>
										商品管理
									</a>
								</li>
								<li>
									<a href="/zl_shop/admin.php/Type/index">
										<i class="icon-double-angle-right"></i>
										商品类别
									</a>
								</li>
								<li>
									<a href="/zl_shop/admin.php/Brands/index">
										<i class="icon-double-angle-right"></i>
										商品品牌
									</a>
								</li>
								<li>
									<a href="/zl_shop/admin.php/Attrvalue/index">
										<i class="icon-double-angle-right"></i>
										商品属性
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 订单管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>
							<ul class="submenu">
								<li>
									<a href="/zl_shop/admin.php/Orders/index">
										<i class="icon-double-angle-right"></i>
										订单列表
									</a>
								</li>
							</ul>
						</li>
						    <li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 评论管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="/zl_shop/admin.php/Review/index">
										<i class="icon-double-angle-right"></i>
										评论列表
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 留言管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="/zl_shop/admin.php/Leave/index">
										<i class="icon-double-angle-right"></i>
										留言列表
									</a>
								</li>
								<li>
									<a href="/zl_shop/admin.php/Leave/messagereply">
										<i class="icon-double-angle-right"></i>
										回复列表
									</a>
								</li>
							</ul>
                        </li>
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 新闻管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="/zl_shop/admin.php/News/index">
										<i class="icon-double-angle-right"></i>
										公告列表
									</a>
								</li>

								<li>
									<a href="/zl_shop/admin.php/Notices/index">
										<i class="icon-double-angle-right"></i>
										消息列表
									</a>
								</li>
							</ul>
						</li>
						
						
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 商城设置 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="/zl_shop/admin.php/Posts/index">
										<i class="icon-double-angle-right"></i>
										展示图列表
									</a>
								</li>

								<li>
									<a href="/zl_shop/admin.php/market/index">
										<i class="icon-double-angle-right"></i>
										商城信息
									</a>
								</li>
							</ul>
						</li>
                        
                        <li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 友情链接 </span>
								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="/zl_shop/admin.php/Link/index">
										<i class="icon-double-angle-right"></i>
										友情链接列表
									</a>
								</li>

								<li>
									<a href="/zl_shop/admin.php/Link/add">
										<i class="icon-double-angle-right"></i>
										添加友情链接
									</a>
								</li>
							</ul>
						</li>
						 <li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 权限管理 </span>
								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="/zl_shop/admin.php/acl/setAcl">
										<i class="icon-double-angle-right"></i>
									    浏览所有权限
									</a>
								</li>
								<li>
									<a href="/zl_shop/admin.php/AdminGroup/index">
										<i class="icon-double-angle-right"></i>
										权限组列表
									</a>
								</li>
								<li>
									<a href="/zl_shop/admin.php/AdminGroup/addGroup">
										<i class="icon-double-angle-right"></i>
										添加权限组
									</a>
								</li>
							</ul>
						</li>

						
					</ul><!-- /.nav-list -->

					<div class="sidebar-collapse" id="sidebar-collapse">
						<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
					</div>

					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
					</script>
				</div>

				
    <div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="#">首页</a>
							</li>

							<li>
								<a href="#">员工管理</a>
							</li>
							<li class="active">员工信息修改</li>
						</ul><!-- .breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="icon-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- #nav-search -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								<a href="/zl_shop/admin.php/Admin/index">返回员工列表</a>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<form action="/zl_shop/admin.php/Admin/update" class="form-horizontal" id="regform" method="post" role="form" >
									<input type="hidden" name="id" value="<?php echo ($admin['id']); ?>">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 用户名 </label>
                                        <div class="col-sm-9">
											<input name="name" type="text" id="name" placeholder="请输入用户名" value="<?php echo ($admin['name']); ?>" class="col-xs-10 col-sm-3" />
											<span class="help-inline col-xs-12 col-sm-7">
												<span id="yzname" class="middle"></span>
											</span>
                                        </div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 真实姓名 </label>

										<div class="col-sm-9">
											<input name="realname" type="text" id="realname" placeholder="请输入真实名" value="<?php echo ($admin['realname']); ?>" class="col-xs-10 col-sm-3" />
											<span class="help-inline col-xs-12 col-sm-7">
												<span id="yzrealname" class="middle"></span>
											</span>
									   </div>
									</div>
                                 
									
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> 联系电话 </label>

										<div class="col-sm-9">
											<input type="text" name="phone" class="col-xs-10 col-sm-3" value="<?php echo ($admin['phone']); ?>" id="phone" />
											<span class="help-inline col-xs-12 col-sm-7">
												<span id="yzphone" class="middle"></span>
											</span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> 邮箱 </label>

										<div class="col-sm-9">
											<input type="text" name="email" class="col-xs-10 col-sm-3" value="<?php echo ($admin['email']); ?>" id="email" />
											<span class="help-inline col-xs-12 col-sm-7">
													<span id="yzemail" class="middle"></span>
												</span>	
											</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> 地址 </label>
											<div class="col-sm-9">
										     <?php echo ($city); ?>
										</div>
									</div>
                                    
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> 详细地址 </label>

										<div class="col-sm-9">
											<input type="text" name="address" class="col-xs-10 col-sm-3" value="<?php echo ($admin['address']); ?>" id="address" />
											<span class="help-inline col-xs-12 col-sm-7">
												<span id="yzaddress" class="middle"></span>
											</span>
										</div>
									</div>
                                    
                                 

									
                                    <div class="space-4"></div>
                                     <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> 性别 </label>

										<div class="col-sm-9">
											<input name="sex" class="ace" value="男" <?php echo ($admin['sex']=="男"?"checked":" "); ?>  type="radio">
											<span class="lbl"> 男</span>
                                            <input name="sex" class="ace" value="女"   <?php echo ($admin['sex']=="女"?"checked":" "); ?>  type="radio" >
											<span class="lbl"> 女</span>
									
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> 状态 </label>
                                            <div class="col-sm-9">
											<input name="state" class="ace" value="1" <?php echo ($admin['state']==1?"checked":" "); ?>  type="radio">
											<span class="lbl"> 工作中</span>
                                            <input name="state" class="ace" value="2" <?php echo ($admin['state']==2?"checked":" "); ?>  type="radio">
											<span class="lbl"> 禁用</span>
											
										</div>
									
									</div>
                                    <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> 用户组 </label>

										<div class="col-sm-9">
											<input name="admingroup" class="ace" value="1" <?php echo ($admin['admingroup']==1?"checked":" "); ?>  type="radio">
											<span class="lbl"> 普通员工</span>
                                            <input name="admingroup" class="ace" value="0"   <?php echo ($admin['admingroup']==0?"checked":" "); ?> type="radio">
											<span class="lbl"> 超级管理员</span>
											
										</div>
									</div>
                                    
                                    <div class="space-4"></div>
                                    
                                    
                                    <div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="submit">
												<i class="icon-ok bigger-110"></i>
												提交
											</button>

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="icon-undo bigger-110"></i>
												重填
											</button>
										</div>
									</div>
								<!-- PAGE CONTENT ENDS -->
								</form>
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->


				<!-- /#ace-settings-container -->
			</div><!-- /.main-container-inner -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->

		<!--<script src="/zl_shop/Public/admin/assets/js/jquery-2.0.3.min.js"></script>-->
		<script src="/zl_shop/Public/admin/assets/js/jquery-2.0.3.min.js"></script>
		

		<!-- <![endif]-->

		<!--[if IE]>
<script src="/zl_shop/Public/admin/assets/js/jquery-1.10.2.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='/zl_shop/Public/Admin/assets/js/jquery-2.0.3.min.js'>"+"<"+"script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='/zl_shop/Public/admin/assets/js/jquery-1.10.2.min.js'>"+"<"+"script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='/zl_shop/Public/admin/assets/js/jquery.mobile.custom.min.js'>"+"<"+"script>");
		</script>
		<script src="/zl_shop/Public/admin/assets/js/bootstrap.min.js"></script>
		<script src="/zl_shop/Public/admin/assets/js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="/zl_shop/Public/admin/assets/js/excanvas.min.js"></script>
		<![endif]-->

		<script src="/zl_shop/Public/admin/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="/zl_shop/Public/admin/assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="/zl_shop/Public/admin/assets/js/jquery.slimscroll.min.js"></script>
		<script src="/zl_shop/Public/admin/assets/js/jquery.easy-pie-chart.min.js"></script>
		<script src="/zl_shop/Public/admin/assets/js/jquery.sparkline.min.js"></script>
		<script src="/zl_shop/Public/admin/assets/js/flot/jquery.flot.min.js"></script>
		<script src="/zl_shop/Public/admin/assets/js/flot/jquery.flot.pie.min.js"></script>
		<script src="/zl_shop/Public/admin/assets/js/flot/jquery.flot.resize.min.js"></script>

		<!-- ace scripts -->

		<script src="/zl_shop/Public/admin/assets/js/ace-elements.min.js"></script>
		<script src="/zl_shop/Public/admin/assets/js/ace.min.js"></script>
		<!-- inline scripts related to this page -->
		
    <script type="text/javascript">
		var a=true,d=true, e=true, f=true, g=true;
		
		
		//验证用户名
		$('#name').blur(function(){
			var name = $(this).val();
			var len = name.length;
			//alert(name);
			
			if(name==""){
				$("#yzname").html("用户名不能为空！");
				$("#yzname").css("color","red");
				a = false;
			}else if(len < 6){
				$("#yzname").html("用户名至少六位！");
				$("#yzname").css("color","red");
				a = false;
			}else{
				$("#yzname").html("有效！");
				$("#yzname").css("color","green");
				a = true;
			}
		
		});
		

	
		
		//自定义一个函数验证汉字
		function isChn(str){ 
			var reg = /^[\u4E00-\u9FA5]+$/; 
			if(!reg.test(str)){ 
				$("#yzrealname").html("请输入中文！");
				$("#yzrealname").css("color","red");
				d = false;
            }else{ 
			    $("#yzrealname").html("有效！");
				$("#yzrealname").css("color","green");
				d = true;
			}
		}
		
		$("#realname").blur(function(){
			var realname = $(this).val();
			//alert(realname);
			if(realname!=""){
				isChn(realname);
			}else{
				$("#yzrealname").html("不能为空！");
				$("#yzrealname").css("color","red");
				d = false;
			}
		});
		
		//自定义一个函数用来验证手机号
		function isPhone(str){
		    var reg = /^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/;
			//var reg = /^[0-9]{11}$/;
			if(reg.test(str)){
				$("#yzphone").html("有效！");
				$("#yzphone").css("color","green");
				e = true;
			}else{
				$("#yzphone").html("请输入11位有效手机号！");
				$("#yzphone").css("color","red");
				e = false;
			}
		}
		
		$("#phone").blur(function(){
			var phone = $(this).val();
			var len = phone.length;
			//alert(phone);
			if(phone==""){
			    $("#yzphone").html("手机号不能为空！");
				$("#yzphone").css("color","red");
					e = false;
				
			}else if(len != 11){
				$("#yzphone").html("请输入11位有效手机号！");
				$("#yzphone").css("color","red");
					e = false;
			}else{
			    isPhone(phone);
			}
		});
		
		//验证详细地址（不能为空）
		$("#address").blur(function(){
			var address = $(this).val();
			if(address==""){
				$("#yzaddress").html("不能为空！");
				$("#yzaddress").css("color","red");
				f = false;
			}else{
				$("#yzaddress").html("有效！");
				$("#yzaddress").css("color","green");
				f = true;
			}
		});
		
		//自定义一盒函数来验证邮箱格式
		function isEmail(str){
			var reg = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/;
            if(reg.test(str)){
				$("#yzemail").html("有效！");
				$("#yzemail").css("color","green");
				g = true;
			}else{
				$("#yzemail").html("无效！");
				$("#yzemail").css("color","red");
				g = false;
			}
		}
		
		$("#email").blur(function(){
			var email = $(this).val();
			//alert(email.length);
		    if(email.length==0){
			//alert(1);
				$("#yzemail").html("不能为空！");
				$("#yzemail").css("color","red");
				g = false;
			}else{
			    isEmail(email);
			}
		});
		

	    document.getElementById("regform").onsubmit = function(){
		     if(a==true&& d==true &&e==true &&f==true &&g==true){
				return  true;
			}else{
				return false;
			}
		}
		
		
	</script>

		</html>