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
							<a href="/zl_shop/admin.php/Type/Index" class="dropdown-toggle">
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
                    <a href="#">商品分类管理</a>
                </li>
                <li class="active">分类列表</li>
            </ul><!-- .breadcrumb -->

            
        </div>

        <div class="page-content">
            <div class="page-header" style="height: 50px">
                <h1 style="display: inline;">
                    <a href="/zl_shop/admin.php/Type/add"><i class="icon-plus"></i>添加分类</a>
                </h1>
                <div id="nav-search" style="float: right;">
                    <!-- <form action="/zl_shop/admin.php/Type/index" id="searchForm" method="post">
                    	<input type="text" name="name" value="<?php echo ($map['attrvalue']); ?>" placeholder="分类名称" style="height: 35px" />
                        <button class="btn btn-purple btn-sm" type="submit" style="margin-bottom: 4px">
                            搜索
                            <i class="icon-search icon-on-right bigger-110"></i>
                        </button>
                    </form> -->
                </div><!-- /.page-header -->
            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="table-responsive">
                                <form action="/zl_shop/admin.php/Type/getSort" method="post">
                                <table id="sample-table-1" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="center">ID</th>
                                            <th>分类名</th>
                                            <th class="hidden-480 center"><button type="submit" class="btn btn-xl btn-warning">点击重新排序</button></th>
                                            <th class="hidden-480 center">级别</th>
                                            <th class="hidden-480 center">状态</th>
                                            <th class="hidden-480">操作</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php if(is_array($typeList)): foreach($typeList as $key=>$type): ?><tr>
                                                    <td class="center"><?php echo ($type['id']); ?></td>
                                                    <td class="parent"><i class="icon-folder-open red"></i> <?php echo ($type['name']); ?></td>
                                                    <td class="hidden-480 center"><input type="text" name="<?php echo ($type['id']); ?>" value="<?php echo ($type['sort']==9999? '' : $type['sort']); ?>" style="font-size:20px;width:50px;text-align:center"/></td>
                                                    <td class="hidden-480 center"><?php echo ($type['layer']); ?></td>
                                                    <td class="hidden-480 center">
                                                    <?php if($type['state'] == 1): ?><span class="label label-sm label-info arrowed arrowed-righ">显示</span>
                                                    <?php elseif($type['state'] == '2'): ?>
                                                        <span class="label label-sm label-inverse arrowed-in">不显示</span>
                                                    <?php elseif($type['state'] == '3'): ?>
                                                        <span class="label label-success">推  荐</span>
                                                    <?php else: ?>
                                                        <span class="label label-warning">首页展示</span><?php endif; ?>
                                                    
                                                    </td>
                                                    <td class="hidden-480">
                                                        <div class="visible-md visible-lg hidden-sm hidden-xs btn-group">
                                                            <a href="/zl_shop/admin.php/Type/edit/id/<?php echo ($type['id']); ?>" class="btn btn-xs btn-info">
                                                                <i class="icon-edit bigger-120">修改</i>
                                                            </a>
                                                            <a href="/zl_shop/admin.php/Type/add/id/<?php echo ($type['id']); ?>" class="btn btn-xs btn-info">
                                                                <i class="icon-plus bigger-120">添加子类</i>
                                                            </a>

                                                            <a href="/zl_shop/admin.php/Type/del/id/<?php echo ($type['id']); ?>" class="btn btn-xs btn-danger">
                                                                <i class="deltype icon-trash bigger-120">删除</i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php if(!empty($type['child'])): if(is_array($type['child'])): foreach($type['child'] as $key=>$v): ?><tr class="type<?php echo ($type['id']); ?>" style="display:none">
                                                            <td class="center"><?php echo ($v['id']); ?></td>
                                                            <td>　　<i class="icon-folder-close pink"></i> <?php echo ($v['name']); ?></td>
                                                            <td class="hidden-480 center"><input type="text" name="<?php echo ($v['id']); ?>" value="<?php echo ($v['sort']==9999? '' : $v['sort']); ?>" style="font-size:20px;width:50px;text-align:center"/></td>
                                                            <td class="hidden-480 center"><?php echo ($v['layer']); ?></td>
                                                            <td class="hidden-480 center">
                                                            <?php if($v['state'] == 1): ?><span class="label label-sm label-info arrowed arrowed-righ">显示</span>
                                                            <?php elseif($v['state'] == '2'): ?>
                                                                <span class="label label-sm label-inverse arrowed-in">不显示</span>
                                                            <?php elseif($v['state'] == '3'): ?>
                                                                <span class="label label-success">推  荐</span>
                                                            <?php else: ?>
                                                                <span class="label label-warning">首页展示</span><?php endif; ?>
                                                            
                                                            </td>
                                                            <td class="hidden-480">
                                                                <div class="visible-md visible-lg hidden-sm hidden-xs btn-group">
                                                                    <a href="/zl_shop/admin.php/Type/edit/id/<?php echo ($v['id']); ?>" class="btn btn-xs btn-info">
                                                                        <i class="icon-edit bigger-120">修改</i>
                                                                    </a>
                                                                    <a href="/zl_shop/admin.php/Type/add/id/<?php echo ($v['id']); ?>" class="btn btn-xs btn-info">
                                                                        <i class="icon-plus bigger-120">添加子类</i>
                                                                    </a>

                                                                    <a href="/zl_shop/admin.php/Type/del/id/<?php echo ($v['id']); ?>" class="btn btn-xs btn-danger">
                                                                        <i class="deltype icon-trash bigger-120">删除</i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr><?php endforeach; endif; endif; endforeach; endif; ?>
                                        <tr><td colspan="12"><?php echo ($page); ?></td></tr>
                                    </tbody>
                                </table>
                                </form>
                            </div><!-- /.table-responsive -->
                        </div><!-- /span -->
                    </div><!-- /row -->


                    <div class="hr hr-18 dotted hr-double"></div>
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
    //删除提示
    $('.deltype').click(function(){
        if(!confirm('是否确认删除此类别！')){
            return false;
        }
    })
    //展开子类
    $('.parent').bind('click',function(){
        var type = $(this).prev().html();
        if($('.type'+type).length == 0){
            alert('没有子类,请添加！');
        }
        $('.type'+type).toggle();
    })
    
</script>

		</html>