<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" type="text/html">
		<title>商城</title>
		<link type="text/css" rel="stylesheet" href="/zl_shop/Public/index/css/lay.css">
		
	<link type="text/css" rel="stylesheet" href="/zl_shop/Public/index/css/order.css">
	<script src="/zl_shop/Public/index/js/jquery.js"></script>
	<style type="text/css">
		#order_list{width:850px;border:1px solid #ddd;}
		#order_list div.order_list_top{background:#fa8072;width:850px;height:40px;border-bottom:1px solid #ddd;line-height:40px;font-size:12px;color:#e4393c;}
		#order_list div.order_list_top > a{display:block;float:left;width:80px;height:40px;color:#fff;text-align:center}
		
		
		#order_list div.order_list_nav{background:#f7f7f7;width:850px;height:30px;border-bottom:1px solid #ddd;line-height:30px;}
		#order_list div.order_list_nav ul li{float:left;width:115px;height:30px;border-left:1px solid #ddd;line-height:30px;text-align:center;color:#666;}
        #order_list div.order_list_details{width:850px;height:50px;border-bottom:1px solid #ddd;line-height:50px;background:#fff;}
		#order_list div.order_list_details ul li{float:left;width:115px;height:50px;line-height:50px;text-align:center;color:#666;}
        
	
	 
	
	</style>

		
		<script src="/zl_shop/Public/js/jquery.js"></script>
	</head>
	<body>
		<!--======================头部公共部分开始==============================-->
		<div id="shortcut">
			<div class="w">
				
				<ul class="fleft">
					<li class="star"></li>
					<li><a href="#">收藏</a></li>
				</ul>
				<ul class="fright">
					
						<?php if($v = session('username')): ?><li><a href="/zl_shop/index.php/User/index"><?php echo ($v); ?></a></li><li>
								<a href="/zl_shop/index.php/login/logout">退出登录</a></li>
						
						<?php else: ?> <li><a href="/zl_shop/index.php/Login/login">请登录</a></li>
								<li><a href="/zl_shop/index.php/Reg/index">快速注册</a></li><?php endif; ?>
					
					
					<li><a href="/zl_shop/index.php/order/index">我的订单</a></li>
					
					<li><a class="u-server" href="#">客户服务</a></li>
						<ul class="userserver">
							<li><a href="#">帮助中心</a></li>
							<li><a href="#">帮助中心</a></li>
							<li><a href="#">帮助中心</a></li>
							<li><a href="#">帮助中心</a></li>
							<li><a href="#">帮助中心</a></li>
							<li><a href="#">帮助中心</a></li>
						</ul>
					
					<li><a class="url" href="#">网址导航</a></li>
						<ul class="url-nav">
							<li><a href="#">网址导航</a></li>
							<li><a href="#">网址导航</a></li>
							<li><a href="#">网址导航</a></li>
							<li><a href="#">网址导航</a></li>
							<li><a href="#">网址导航</a></li>
							<li><a href="#">网址导航</a></li>
							<li><a href="#">网址导航</a></li>
							<li><a href="#">网址导航</a></li>
							<li><a href="#">网址导航</a></li>
							<li><a href="#">网址导航</a></li>
							<li><a href="#">网址导航</a></li>
						</ul>
				</ul>
			</div>
		</div>
        
		<div id="header">
			<div class="headertop">
				<!--===========LOGO====================-->
				<div id="logo"><a href="/zl_shop/index.php/Index"><img src="/zl_shop/Public/index/images/logo-201305.png"></a></div>
				<!--===========search====================-->
				<div id="search">
					<div class="sear">
						<form action="/zl_shop/index.php/List/index" method="get">
							<input class="searchinput" type="text" name="keyword" />
                            <button type="submit" class="searcher">搜索</button>
						</form>	
					</div>
					<div class="hotwords">
						<ul>
							<li>热门搜索：</li>
							<li><a href="/zl_shop/index.php/List/index/keyword/太阳镜">太阳镜</a></li>
                            <li><a href="/zl_shop/index.php/List/index/keyword/短裤">短裤</a></li>
                            <li><a href="/zl_shop/index.php/List/index/keyword/T恤">T恤</a></li>
                            <li><a href="/zl_shop/index.php/List/index/keyword/男装">男装</a></li>
                            <li><a href="/zl_shop/index.php/List/index/keyword/吊带">吊带</a></li>
                            <li><a href="/zl_shop/index.php/List/index/keyword/女鞋">女鞋</a></li>
                            <li><a href="/zl_shop/index.php/List/index/keyword/精品">精品</a></li>
                            <li><a href="/zl_shop/index.php/List/index/keyword/亲子">亲子</a></li>
                            <li><a href="/zl_shop/index.php/List/index/keyword/凉鞋">凉鞋</a></li>
						</ul>
					</div>
				</div>
				<!--=================我的京东=====================-->
				<!--
				<div id="myjd">
					<a href="#">
						<div class="mac"></div>
						<div class="myjdong"> <a href="/zl_shop/index.php/User/index">我的京东</a></div>
						<div class="btriangle"></div>
					</a>
					<div class="myjd-details">
						<div class="de-hd">
							
							
								<?php if($v = session('username')): ?>你好，<span style="color:#e4393c"><?php echo ($v); ?></span>
								<?php else: ?><a href="/zl_shop/index.php/login/index">请登录</a><?php endif; ?>
							
							
						</div>
						<div class="de-list">
							<ul style="border-right:1px solid #ddd;">
								<li><a href="#">全部订单（0）</a></li>
								<li><a href="#">未完成订单（0）</a></li>
								<li><a href="#">已完成订单（0）</a></li>
								<li><a href="#">待评价商品（0）</a></li>
							
					
						
							</ul>
							<ul>
								<li><a href="#">全部售后（0）</a></li>
								<li><a href="#">退货（0）</a></li>
								<li><a href="#">换货（0）</a></li>
								<li><a href="#">保修（0）</a></li>
							</ul>
						</div>
						<div class="de-view">
							<a href="#">查看浏览历史</a>
						</div>
					</div>
				</div>
				-->
				
				<?php echo W('MyJD/index');?>
				<!--=================去购物车结算=====================-->
				
				<div id="settleup">
					
					<a href="#">
						<div class="car"><div class="carimg"></div></div>
						<div class="jiesuan"><a href="#">去购物车结算</a></div>
						<div class="rtriangle"></div>
					</a>
					<div class="mycar-details">
						<div class="g-new"><h3>最新加入的商品</h3></div>
						<div class="g-list">
							<?php echo W('Car/index');?>
						</div>
						<div class="g-total">
							<span>共有<a style="color:#e4393c;font-size:14px;" href="javascript:"> <?php echo W('Car/car_num');?> </a>件商品</span>　　　　　　
							<span>共计<a style="color:#e4393c;font-size:20px;" href="javascript:"> ￥<?php echo W('Car/car_total');?></a></span>
				
						</div>
						<div class="g-settle">
							<a href="/zl_shop/index.php/Car/index">去购物车结算</a>
						</div>
					</div>
				</div>
				<!--=======购物车商品数量========-->
				<div class="car-count"><?php echo W('Car/car_num');?></div>
			</div>

			<?php echo W('Type/index');?>
			
			<div style="clear:both;"></div>
			<!--======================头部公共部分结束==============================-->
			
<div id="main_center">
	<div id="content">
		<div id="content_top">
			<div class="tit">
				<a href="/zl_shop/index.php/Order/index">我的京东</a>
			</div>
			<div class="page">
				<a href="">个人主页</a>
			</div>
			<div class="set">
				<a href="">设置</a>
			</div>
			<div class="com">
				<a href="">社区</a>
			</div>
		</div>
		<div id="clear"></div>
		<div id="content_host">
			<div id="left">
				<div id="menu">
					<ul>
						<li><b>订单中心</b></li>
						<li><a href="#" style="font-weight:bold;color:#e4393c;">我的订单</a></li>
						<li><a href="">团购订单</a></li>
						<li><a href="">本地生活订单</a></li>
						<li><a href="">我的预售</a></li>
						<li><a href="">评价晒单</a></li>
						<li><a href="">取消订单记录</a></li>
					</ul>
					<ul>
						<li><b>关注中心</b></li>
						<li><a href="">关注的商品</a></li>
						<li><a href="">关注的店铺</a></li>
						<li><a href="">关注的活动</a></li>
						<li><a href="">浏览历史<img src="/zl_shop/Public/Uploads/images/red_new.png"></a></li>
					</ul>
					<ul>
						<li><b>资产中心</b></li>
						<li><a href="">小金库</a></li>
						<li><a href="">余额</a></li>
						<li><a href="">优惠劵</a></li>
						<li><a href="">京东卡/E卡</a></li>
						<li><a href="">京豆</a></li>
					</ul>
					<ul>
						<li><b>特色业务</b></li>
						<li><a href="">京东通信</a></li>
						<li><a href="">定期送</a></li>
					</ul>
					<ul>
						<li><b>客户服务</b></li>
						<li><a href="">返修退换货</a></li>
						<li><a href="">价格保护</a></li>
						<li><a href="">意见建议</a></li>
						<li><a href="">购买咨询</a></li>
					</ul>
					<ul>
						<li><b>设置</b></li>
						<li><a href="">个人信息</a></li>
						<li><a href="">收货地址</a></li>
					</ul>
				</div>
			
			</div>
			<div id="right">
				
				
	<!--=======================订单列表开始===============================-->
        <div id="order_list">
				<div class="order_list_top">
					<a class="all_order" href="javascript:">全部订单</a>
					<a class="n_order" href="javascript:">未完成订单</a>
					<a class="y_order" href="javascript:">已完成订单</a>
					
				</div>
			    <div class="order_list_nav">
					<ul>
						<li>订单号</li>
						<li>联系人</li>
						<li>地址</li>
						<li>电话</li>
						<li>时间</li>
						<li>总金额</li>
						<li style="width:150px">操作</li>
						
					</ul>
				</div>
				
				<?php if(is_array($orders)): foreach($orders as $key=>$order): ?><div class="order_list_details all_order_list">
					<ul>
						<li><?php echo ($order['osn']); ?></li>
						<li><?php echo ($order['linkman']); ?></li>
						<li style="line-height:25px;"><?php echo (implode('',explode('#',$order['address']))); ?></li>
						<li><?php echo ($order['phone']); ?></li>
						<li><?php echo (date('Y-m-d H:i:s',$order['addtime'])); ?></li>
						<li><?php echo ($order['money']); ?></li>
						<li style="width:150px;line-height:50px;">
						  　<a style="color:#005aa3" href="/zl_shop/index.php/Order/checkorder/id/<?php echo ($order['id']); ?>">详情</a>
						
						    <a style="color:#005aa3"  href="/zl_shop/index.php/review/index/id/<?php echo ($order['id']); ?>">评价/售后</a> 
							<a style="color:#e4393c" class="delOrder" href="/zl_shop/index.php/Order/delete_order/id/<?php echo ($order['id']); ?>">取消</a>　
						</li>
					</ul>
				</div><?php endforeach; endif; ?>
		</div>		
			<!--=======================订单列表结束===============================-->
				<div id="order3">
					<div class="mt">
						<span><b>猜你喜欢</b></span>
						<div class="tab_menu">
							<a href="#" class="tab-item tab-selected"><b>1</b></a>
							<a href="#" class="tab-item"><b>2</b></a>
							<a href="#" class="tab-item"><b>3</b></a>
						</div>
					</div>
					<div class="nt" style="display:block;">
						<?php if(is_array($goods_data)): foreach($goods_data as $key=>$v): ?><ul class="hide">
							<li>
								<div>
									<a href="/zl_shop/index.php/details/index/id/<?php echo ($v['id']); ?>" target="_bank">
										<img src="/zl_shop/Public/Uploads/goods/l_<?php echo ($v['pic']); ?>" alt="<?php echo ($v['name']); ?>" width="160px" height="160px"/>
									</a>
								</div>
								<div class="name">
									<a href="/zl_shop/index.php/details/index/id/<?php echo ($v['id']); ?>" target="_bank"><?php echo ($v['name']); ?></a>
								</div>
								 <div class="price">
									<strong>￥<?php echo ($v['saleprice']); ?></strong>
								 </div>
								 <div class="num">
									<a href="跳转地址" target="_bank">(商品评价数量<?php echo ($v['reviewcount']); ?>)</a>
								 </div>
							</li>
						</ul><?php endforeach; endif; ?>
					</div>
					<div class="nt" style="display:none;">
						<?php if(is_array($rel)): foreach($rel as $key=>$r): ?><ul class="hide">
							<li>
								<div>
									<a href="/zl_shop/index.php/details/index/id/<?php echo ($r['id']); ?>" target="_bank">
										<img src="/zl_shop/Public/Uploads/goods/l_<?php echo ($r['pic']); ?>" alt="<?php echo ($r['name']); ?>" width="160px" height="160px"/>
									</a>
								</div>
								<div class="name">
									<a href="/zl_shop/index.php/details/index/id/<?php echo ($r['id']); ?>" target="_bank"><?php echo ($r['name']); ?></a>
								</div>
								 <div class="price">
									<strong>￥<?php echo ($r['saleprice']); ?></strong>
								 </div>
								 <div class="num">
									<a href="跳转地址" target="_bank">(商品评价数量<?php echo ($r['reviewcount']); ?>)</a>
								 </div>
							</li>
						</ul><?php endforeach; endif; ?>
					</div>
					<div class="nt" style="display:none;">
						<?php if(is_array($rel)): foreach($rel as $key=>$r): ?><ul class="hide">
							<li>
								<div>
									<a href="/zl_shop/index.php/details/index/id/<?php echo ($r['id']); ?>" target="_bank">
										<img src="/zl_shop/Public/Uploads/goods/l_<?php echo ($r['pic']); ?>" alt="<?php echo ($r['name']); ?>" width="160px" height="160px"/>
									</a>
								</div>
								<div class="name">
									<a href="/zl_shop/index.php/details/index/id/<?php echo ($r['id']); ?>" target="_bank"><?php echo ($r['name']); ?></a>
								</div>
								 <div class="price">
									<strong>￥<?php echo ($r['saleprice']); ?></strong>
								 </div>
								 <div class="num">
									<a href="跳转地址" target="_bank">(商品评价数量<?php echo ($r['reviewcount']); ?>)</a>
								 </div>
							</li>
						</ul><?php endforeach; endif; ?>
					</div>
				</div>
				
			</div>
			<div id="clear"></div>
		</div>
	</div>
</div>
<div id="clear"></div>

			<!--=========================footer开始======================================-->
		
		
		<!--=========================footer结束======================================-->
		
	</body>
	<script src="/zl_shop/Public/index/js/lay.js"></script>
	
		<script src="/zl_shop/Public/index/js/order.js"></script>
		<script type="text/javascript">
			$(".all_order").hover(function(){
				//===========样式变化============
				$(".order_list_top a").css({'background':'#fa8072'});
				$(this).css({'background':'#e4393c'});
				//===========数据==============
				//alert(1);
				//===========数据==============
			   
			});
			
			
				
			$(".n_order").hover(function(){
				//===========样式变化============
				$(".order_list_top a").css({'background':'#fa8072'});
				$(this).css({'background':'#e4393c'});
			});
			$(".y_order").hover(function(){
				//===========样式变化============
				$(".order_list_top a").css({'background':'#fa8072'});
				$(this).css({'background':'#e4393c'});
			});
            
            $('.delOrder').click(function(){
                if(!confirm('确认取消？')){
                    return false;
                }
            });
</script>

</html>