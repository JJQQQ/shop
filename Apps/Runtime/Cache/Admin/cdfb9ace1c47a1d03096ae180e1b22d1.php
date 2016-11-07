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
							商城后台管理系统
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
							<a href="/zl_shop/admin.php/Acl/Index" class="dropdown-toggle">
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

				
<extend name="Public:layout" />
<block name="main-content">
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
                    <a href="#">权限管理</a>
                </li>
                <li class="active">设置权限</li>
				
            </ul><!-- .breadcrumb -->
            
			

        </div>

        <div class="page-content">
           
            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="table-responsive">
                                <form action="/zl_shop/admin.php/Acl/insert" method="post">
								<table id="sample-table-1" class="table table-striped table-bordered table-hover">
                                    <thead>
                                  
										<tr>
                                            <th class="center" style="width:100px;">
                                                <label>
                                                    <input type="checkbox" class="ace" id="ischeck" />
                                                    <span class="lbl"></span>
                                                </label>
                                            </th>
                                            <th style="width:200px;">控制器</th>
                                            <th>方法</th>
                                    
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td class="center">
                                                <label>
                                                    <input type="checkbox" class="ace"  />
                                                    <span class="lbl"></span>
                                                </label>
                                            </td>
                                            <td class="hidden-480">员工操作权限</td>
                                            <td class="hidden-480">
												<input type="checkbox" class="ace" name="Admin/index" value="查看员工"><span class="lbl"> 查看员工</span>
												<input type="checkbox" class="ace" name="Admin/add" value="添加员工页面"><span class="lbl"> 添加员工页面</span>
												<input type="checkbox" class="ace" name="Admin/insert" value="执行添加员工"><span class="lbl"> 执行添加员工</span>
												<input type="checkbox" class="ace" name="Admin/edit" value="员工修改页面"><span class="lbl"> 员工修改页面</span>
												<input type="checkbox" class="ace" name="Admin/update" value="执行员工修改"><span class="lbl"> 执行员工修改</span>
												<input type="checkbox" class="ace" name="Admin/del" value="删除员工"><span class="lbl"> 删除员工</span>
												<input type="checkbox" class="ace" name="Admin/editgroup" value="获取设置组页面"><span class="lbl"> 获取设置组页面</span>
												<input type="checkbox" class="ace" name="Admin/updategroup" value="设置组权限"><span class="lbl"> 设置组权限</span>
											</td>
										</tr>
                                        <tr>
                                            <td class="center">
                                                <label>
                                                    <input type="checkbox" class="ace" />
                                                    <span class="lbl"></span>
                                                </label>
                                            </td>
                                            <td class="hidden-480">会员操作权限</td>
                                            <td class="hidden-480">
												<input type="checkbox" class="ace" name="Users/index" value="查看会员"><span class="lbl"> 查看会员</span>
												<input type="checkbox" class="ace" name="Users/add" value="添加会员页面"><span class="lbl"> 添加会员页面</span>
												<input type="checkbox" class="ace" name="Users/insert" value="执行添加会员"><span class="lbl"> 执行添加会员</span>
												<input type="checkbox" class="ace" name="Users/edit" value="会员修改页面"><span class="lbl"> 会员修改页面</span>
												<input type="checkbox" class="ace" name="Users/update" value="执行会员修改"><span class="lbl"> 执行会员修改</span>
												<input type="checkbox" class="ace" name="Users/del" value="删除会员"><span class="lbl"> 删除会员</span>
											</td>
										</tr>
										<tr>
                                            <td class="center">
                                                <label>
                                                    <input type="checkbox" class="ace" />
                                                    <span class="lbl"></span>
                                                </label>
                                            </td>
											<td class="hidden-480">会员安全操作权限</td>
                                            <td class="hidden-480">
												<input type="checkbox" class="ace" name="Userdetails/index" value="查看会员安全信息"><span class="lbl"> 查看会员安全信息</span>
											</td>
										</tr>
										<tr>
                                            <td class="center">
                                                <label>
                                                    <input type="checkbox" class="ace" />
                                                    <span class="lbl"></span>
                                                </label>
                                            </td>
											<td class="hidden-480">商品操作权限</td>
                                            <td class="hidden-480">
												<input type="checkbox" class="ace" name="Goods/index" value="查看商品"><span class="lbl"> 查看商品</span>
												<input type="checkbox" class="ace" name="Goods/add" value="添加商品页面"><span class="lbl"> 添加商品页面</span>
												<input type="checkbox" class="ace" name="Goods/insert" value="执行添加商品"><span class="lbl"> 执行添加商品</span>
												<input type="checkbox" class="ace" name="Goods/edit" value="商品修改页面"><span class="lbl"> 商品修改页面</span>
												<input type="checkbox" class="ace" name="Goods/update" value="执行商品修改"><span class="lbl"> 执行商品修改</span>
												<input type="checkbox" class="ace" name="Goods/del" value="删除商品"><span class="lbl"> 删除商品</span>
											</td>
										</tr>
                                        <tr>
                                            <td class="center">
                                                <label>
                                                    <input type="checkbox" class="ace" />
                                                    <span class="lbl"></span>
                                                </label>
                                            </td>
											<td class="hidden-480">商品类别操作权限</td>
                                            <td class="hidden-480">
												<input type="checkbox" class="ace" name="Type/index" value="查看商品类别"><span class="lbl"> 查看商品类别</span>
												<input type="checkbox" class="ace" name="Type/add" value="添加商品类别页面"><span class="lbl"> 添加商品类别页面</span>
												<input type="checkbox" class="ace" name="Type/insert" value="执行添加商品类别"><span class="lbl"> 执行添加商品类别</span>
												<input type="checkbox" class="ace" name="Type/del" value="删除商品类别"><span class="lbl"> 删除商品类别</span>
												<input type="checkbox" class="ace" name="Type/getType" value="验证商品类别"><span class="lbl"> 验证商品类别</span>
							
											</td>
										</tr>
										<tr>
                                            <td class="center">
                                                <label>
                                                    <input type="checkbox" class="ace" />
                                                    <span class="lbl"></span>
                                                </label>
                                            </td>
											<td class="hidden-480">商品品牌操作权限</td>
                                            <td class="hidden-480">
												<input type="checkbox" class="ace" name="Brands/index" value="查看商品品牌"><span class="lbl"> 查看商品品牌</span>
												<input type="checkbox" class="ace" name="Brands/add" value="添加商品品牌页面"><span class="lbl"> 添加商品品牌页面</span>
												<input type="checkbox" class="ace" name="Brands/insert" value="执行添加商品品牌"><span class="lbl"> 执行添加商品品牌</span>
												<input type="checkbox" class="ace" name="Brands/edit" value="商品品牌修改页面"><span class="lbl"> 商品品牌修改页面</span>
												<input type="checkbox" class="ace" name="Brands/update" value="执行商品品牌修改"><span class="lbl"> 执行商品品牌修改</span>
												<input type="checkbox" class="ace" name="Brands/del" value="删除商品品牌"><span class="lbl"> 删除商品品牌</span>
											</td>
										</tr>
										<tr>
                                            <td class="center">
                                                <label>
                                                    <input type="checkbox" class="ace" />
                                                    <span class="lbl"></span>
                                                </label>
                                            </td>
											<td class="hidden-480">商品属性值操作权限</td>
                                            <td class="hidden-480">
												<input type="checkbox" class="ace" name="Attrvalue/index" value="查看商品属性值"><span class="lbl"> 查看商品属性值</span>
												<input type="checkbox" class="ace" name="Attrvalue/add" value="添加商品属性值页面"><span class="lbl"> 添加商品属性值页面</span>
												<input type="checkbox" class="ace" name="Attrvalue/insert" value="执行添加商品属性值"><span class="lbl"> 执行添加商品属性值</span>
												<input type="checkbox" class="ace" name="Attrvalue/edit" value="商品属性值修改页面"><span class="lbl"> 商品属性值修改页面</span>
												<input type="checkbox" class="ace" name="Attrvalue/update" value="执行商品属性值修改"><span class="lbl"> 执行商品属性值修改</span>
												<input type="checkbox" class="ace" name="Attrvalue/del" value="删除商品属性值"><span class="lbl"> 删除商品属性值</span>
											</td>
										</tr>
										<tr>
                                            <td class="center">
                                                <label>
                                                    <input type="checkbox" class="ace" />
                                                    <span class="lbl"></span>
                                                </label>
                                            </td>
											<td class="hidden-480">订单操作权限</td>
                                            <td class="hidden-480">
												<input type="checkbox" class="ace" name="Orders/index" value="查看订单"><span class="lbl"> 查看订单</span>
												<input type="checkbox" class="ace" name="Orders/edit" value="修改订单页面"><span class="lbl"> 修改订单页面</span>
												<input type="checkbox" class="ace" name="Orders/update" value="执行订单修改"><span class="lbl"> 执行订单修改</span>
												
											</td>
										</tr>
										
                                        
										<tr>
                                            <td class="center">
                                                <label>
                                                    <input type="checkbox" class="ace" />
                                                    <span class="lbl"></span>
                                                </label>
                                            </td>

                                      
                                            <td class="hidden-480">留言操作权限</td>
                                            <td class="hidden-480">
												<input type="checkbox" class="ace" name="Leave/index" value="查看留言"><span class="lbl"> 查看留言</span>
												<input type="checkbox" class="ace" name="Leave/add" value="添加留言页面"><span class="lbl"> 添加留言页面</span>
												<input type="checkbox" class="ace" name="Leave/insert" value="执行添加留言"><span class="lbl"> 执行添加留言</span>
												<input type="checkbox" class="ace" name="Leave/edit" value="留言修改页面"><span class="lbl"> 留言修改页面</span>
												<input type="checkbox" class="ace" name="Leave/update" value="执行留言修改"><span class="lbl"> 执行留言修改</span>
												<input type="checkbox" class="ace" name="Leave/del" value="删除留言"><span class="lbl"> 删除留言</span>
											</td>
										</tr>
                            
							            <tr>
                                            <td class="center">
                                                <label>
                                                    <input type="checkbox" class="ace" />
                                                    <span class="lbl"></span>
                                                </label>
                                            </td>

                                      
                                            <td class="hidden-480">回复留言操作权限</td>
                                            <td class="hidden-480">
												<input type="checkbox" class="ace" name="Review/index" value="查看回复留言"><span class="lbl"> 查看回复留言</span>
												<input type="checkbox" class="ace" name="Review/reply" value="回复留言页面"><span class="lbl"> 回复留言页面</span>
												<input type="checkbox" class="ace" name="Review/insert" value="执行回复留言"><span class="lbl"> 执行回复留言</span>
                                                <input type="checkbox" class="ace" name="Review/del" value="删除回复留言"><span class="lbl"> 删除回复留言</span>
											</td>
										</tr>
                                        
										<tr>
                                            <td class="center">
                                                <label>
                                                    <input type="checkbox" class="ace" />
                                                    <span class="lbl"></span>
                                                </label>
                                            </td>

                                      
                                            <td class="hidden-480">新闻操作权限</td>
                                            <td class="hidden-480">
												<input type="checkbox" class="ace" name="News/index" value="查看新闻"><span class="lbl"> 查看新闻</span>
												<input type="checkbox" class="ace" name="News/add" value="添加新闻页面"><span class="lbl"> 添加新闻页面</span>
												<input type="checkbox" class="ace" name="News/insert" value="执行添加新闻"><span class="lbl"> 执行添加新闻</span>
												<input type="checkbox" class="ace" name="News/edit" value="新闻修改页面"><span class="lbl"> 新闻修改页面</span>
												<input type="checkbox" class="ace" name="News/update" value="执行新闻修改"><span class="lbl"> 执行新闻修改</span>
												<input type="checkbox" class="ace" name="News/del" value="删除新闻"><span class="lbl"> 删除新闻</span>
											</td>
										</tr>
                                        <tr>
                                            <td class="center">
                                                <label>
                                                    <input type="checkbox" class="ace" />
                                                    <span class="lbl"></span>
                                                </label>
                                            </td>
											<td class="hidden-480">消息操作权限</td>
                                            <td class="hidden-480">
												<input type="checkbox" class="ace" name="notices/index" value="查看消息"><span class="lbl"> 查看消息</span>
												<input type="checkbox" class="ace" name="notices/add" value="添加消息页面"><span class="lbl"> 添加消息页面</span>
												<input type="checkbox" class="ace" name="notices/insert" value="执行添加消息"><span class="lbl"> 执行添加消息</span>
												<input type="checkbox" class="ace" name="notices/edit" value="消息修改页面"><span class="lbl"> 消息修改页面</span>
												<input type="checkbox" class="ace" name="notices/update" value="执行消息修改"><span class="lbl"> 执行消息修改</span>
												<input type="checkbox" class="ace" name="notices/del" value="删除消息"><span class="lbl"> 删除消息</span>
											</td>
										</tr>
										<tr>
                                            <td class="center">
                                                <label>
                                                    <input type="checkbox" class="ace" />
                                                    <span class="lbl"></span>
                                                </label>
                                            </td>
											<td class="hidden-480">登录操作权限</td>
                                            <td class="hidden-480">
												<input type="checkbox" class="ace" name="Login/code" value="验证码"><span class="lbl"> 验证码</span>
												<input type="checkbox" class="ace" name="Login/prologin" value="登录"><span class="lbl"> 登录</span>
												<input type="checkbox" class="ace" name="Login/logout" value="退出"><span class="lbl"> 退出</span>
												
											</td>
										</tr>
										<tr>
                                            <td class="center">
                                                <label>
                                                    <input type="checkbox" class="ace" />
                                                    <span class="lbl"></span>
                                                </label>
                                            </td>
											<td class="hidden-480">商城操作权限</td>
                                            <td class="hidden-480">
												<input type="checkbox" class="ace" name="Market/index" value="查看商城信息"><span class="lbl"> 查看商城信息</span>
												<input type="checkbox" class="ace" name="market/edit" value="修改商城信息页面"><span class="lbl"> 修改商城信息页面</span>
												<input type="checkbox" class="ace" name="market/update" value="执行修改商城信息"><span class="lbl"> 执行修改商城信息</span>
											
											</td>
										</tr>
										<tr>
                                            <td class="center">
                                                <label>
                                                    <input type="checkbox" class="ace" />
                                                    <span class="lbl"></span>
                                                </label>
                                            </td>

                                      
                                            <td class="hidden-480">友情链接操作权限</td>
                                            <td class="hidden-480">
												<input type="checkbox" class="ace" name="Link/index" value="查看友情链接"><span class="lbl"> 查看链接</span>
												<input type="checkbox" class="ace" name="Link/add" value="添加友情链接页面"><span class="lbl"> 添加链接页面</span>
												<input type="checkbox" class="ace" name="Link/insert" value="执行添加友情链接"><span class="lbl"> 执行添加链接</span>
												<input type="checkbox" class="ace" name="Link/edit" value="友情链接修改页面"><span class="lbl"> 链接修改页面</span>
												<input type="checkbox" class="ace" name="Link/update" value="执行友情链接修改"><span class="lbl"> 执行链接修改</span>
												<input type="checkbox" class="ace" name="Link/del" value="删除友情链接"><span class="lbl"> 删除链接</span>
											</td>
										</tr>
										
										
										
							            
                            
                                   
                                    
									
									
									
									
									
									
									
									
									
									
									
									
									
									</tbody>
									<tr>
										<td colspan="3"><input type="submit" value="提交"></td>
									</tr>
                                 </table>
								 
								</form>
                            </div><!-- /.table-responsive -->
                        </div><!-- /span -->
                    </div><!-- /row -->

                   
                    <!-- PAGE CONTENT ENDS -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div>

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
	$("#ischeck").click(function)(){
		alert(1);
	});
	/*
	$(".ischeck").click(function(){
		if($(this).checked == true){
			$(":input").checkde = true;
		}else{
		    $(":input").checked = false;
		}
	
	});
	*/
</script>

		</html>