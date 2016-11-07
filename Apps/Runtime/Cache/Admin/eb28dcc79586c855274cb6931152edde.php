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
        
<style type="text/css">
input.ace.ace-checkbox-2[type="checkbox"] + .mylbl::before, input.ace.ace-checkbox-2[type="radio"] + .mylbl::before{
    box-shadow: none;
}
input.ace.ace-checkbox-2[type="checkbox"] + .mylbl::before, input.ace.ace-checkbox-2[type="radio"] + .mylbl::before{
    background-color: #fafafa;
    border: 1px solid #c8c8c8;
    border-radius: 0;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
    color: #32a3ce;
    content: " ";
    display: inline-block;
    font-family: fontAwesome;
    font-size: 12px;
    font-weight: normal;
    height: 30px;
    line-height: 30px;
    margin-right: 1px;
    min-width: 30px;
    text-align: center;
    vertical-align: middle;
}
input.ace[type="checkbox"] + .mylbl, input.ace[type="radio"] + .mylbl{
    display: inline-block;
    font-weight: normal;
    line-height: 20px;
    margin: 0;
    min-height: 18px;
    min-width: 18px;
    position: relative;
    z-index: 11;
}
label, .mylbl{
    vertical-align: middle;
}
input.ace.ace-checkbox-2[type="checkbox"] + .mylbl::before, input.ace.ace-checkbox-2[type="radio"] + .mylbl::before{
    box-shadow: none;
}
input.ace[type="checkbox"]:checked + .mylbl::before, input.ace[type="radio"]:checked + .mylbl::before{
    background-color: #f5f8fc;
    border-color: #adb8c0;
    content: "";
    display: inline-block;
}

input.ace.ace-checkbox-2[type="checkbox"]:checked + .mylbl::before, input.ace.ace-checkbox-2[type="radio"]:checked + .mylbl::before{
    background-color: #f9a021;
    border-color: #f9a021;
    color: #fff;
}

</style>

        

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
							<a href="/zl_shop/admin.php/Goods/Index" class="dropdown-toggle">
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
                    <a href="/zl_shop/admin.php/Index">首页</a>
                </li>

                <li>
                    <a href="/zl_shop/admin.php/Goods/index">商品管理</a>
                </li>
                <li class="active">商品列表</li>
            </ul><!-- .breadcrumb -->
        </div>

        <div class="page-content">
            <div class="page-header" style="height: 50px">
                <h1 style="display: inline;">
                    <a href="/zl_shop/admin.php/Goods/add"><i class="icon-plus"></i>添加商品</a>
                </h1>
                <div id="nav-search" style="float: right;">
                    <form action="/zl_shop/admin.php/Goods/index" id="searchForm" method="post">
                    	<input type="text" name="name" value="<?php echo ($map['attrvalue']); ?>" placeholder="商品名" style="height: 35px" />
                    	<input type="text" name="minPrice" value="<?php echo ($map['attrname']); ?>" placeholder="价格大于" style="height: 35px;width: 70px" /> — 
                    	<input type="text" name="maxPrice" value="<?php echo ($map['attrname']); ?>" placeholder="价格小于" style="height: 35px;width: 70px" />
                        <select name="type_id" style="height: 35px">
                            <option value=''>选择类别搜索</option>
                            <?php if(is_array($types)): foreach($types as $key=>$v): ?><option value="<?php echo ($v['id']); ?>"><?php echo ($v['html']); echo ($v['name']); ?></option><?php endforeach; endif; ?>
                        </select>
                        <label>
                            <input type="checkbox" class="ace ace-checkbox-2 mystyle" name="state" value="2" />
                            <span class="mylbl"> 出售中</span>
                        </label>
                        <label>
                            <input type="checkbox" class="ace ace-checkbox-2 mystyle" name="isbest" value="2" />
                            <span class="mylbl"> 推荐商品</span>
                        </label>
                        <label>
                            <input type="checkbox" class="ace ace-checkbox-2 mystyle" name="ishot" value="2" />
                            <span class="mylbl"> 热销商品</span>
                        </label>
                        <button class="btn btn-purple btn-sm" type="submit" style="margin-bottom: 4px">
                            搜索
                            <i class="icon-search icon-on-right bigger-110"></i>
                        </button>
                    </form>
                </div><!-- #nav-search -->
		    </div><!-- /.page-header -->

            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="table-responsive">
                                <table id="sample-table-1" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>商品名</th>
                                            <th class="hidden-480">价格</th>
                                            <th class="hidden-480">销量</th>
                                            <th class="hidden-480">状态</th>
                                            <th class="hidden-480">推荐</th>
                                            <th class="hidden-480">热销</th>

                                            <th>操作</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php if(is_array($goods)): foreach($goods as $key=>$good): ?><tr>
                                            <td>
                                                <a href="javascript:;"><?php echo ($good['id']); ?></a>
                                            </td>
                                            <td><?php echo ($good['name']); ?></td>
                                            <td class="hidden-480"><?php echo ($good['saleprice']); ?></td>
                                          

                                            <td class="hidden-480">
                                                <span class="label label-success"><?php echo ($good['salecount']); ?></span>
                                            </td>
                                            <td class="hidden-480">
                                                <span to="state" tag="<?php echo ($good['state']); ?>" filter="<?php echo ($good['id']); ?>" class="goodstate label label-sm <?php echo ($good['state']==1?'label-info':'label-warning'); ?>"><?php echo ($good['state']==1?'仓库中':'在售'); ?></span>
                                            </td>
                                            <td class="hidden-480">
                                                <span to="isbest" tag="<?php echo ($good['isbest']); ?>" filter="<?php echo ($good['id']); ?>" class="goodstate label label-sm <?php echo ($good['isbest']==1?'label-info':'label-warning'); ?>"><?php echo ($good['isbest']==1?'否':'推荐中'); ?></span>
                                            </td>
                                            <td class="hidden-480">
                                                <span to="ishot" tag="<?php echo ($good['ishot']); ?>" filter="<?php echo ($good['id']); ?>" class="goodstate label label-sm <?php echo ($good['ishot']==1?'label-info':'label-warning'); ?>"><?php echo ($good['ishot']==1?'否':'推荐中'); ?></span>
                                            </td>

                                            <td>
                                                <div class="visible-md visible-lg hidden-sm hidden-xs btn-group">
                                                     <a href="/zl_shop/index.php/Details/index/id/<?php echo ($good['id']); ?>" class="btn btn-xs btn-info">
                                                        <i class="icon-edit bigger-120">查看</i>
                                                    </a>
                                                    <a href="/zl_shop/admin.php/Goods/edit/id/<?php echo ($good['id']); ?>" class="btn btn-xs btn-info">
                                                        <i class="icon-edit bigger-120">修改</i>
                                                    </a>
                                                    <a href="/zl_shop/admin.php/Goods/pics/id/<?php echo ($good['id']); ?>" class="btn btn-xs btn-info">
                                                        <i class="icon-edit bigger-120">图库</i>
                                                    </a>

                                                    <a href="/zl_shop/admin.php/Goods/del/id/<?php echo ($good['id']); ?>" class="del btn btn-xs btn-danger">
                                                        <i class="icon-trash bigger-120">删除</i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr><?php endforeach; endif; ?>
                                        <tr><td colspan="7"><?php echo ($page); ?></td></tr>
                                    </tbody>
                                </table>
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
    //删除商品确认
    $(".del").click(function(){
        if(!confirm('是否确认删除此商品！')){
            return false;
        }
    });
    //修改状态
    $('.goodstate').click(function(){
        if(!confirm('是否确认修改商品状态！')){
            return false;
        }
        var fieldName = $(this).attr('to');//商品字段名称
        var id = $(this).attr('filter');//商品ID
        var st = $(this).attr('tag');//商品状态
        $.ajax({
            url : "/zl_shop/admin.php/Goods/editState",
            type : 'POST',
            data : 'id='+id+'&'+fieldName+'='+st,
            dataType : 'json',
            success : function(data){
                if(data == 1){
                    alert('修改成功!');
                    window.location.reload();
                } else {
                    alert('修改失败!');
                }
            }
        })
    });
</script>

		</html>