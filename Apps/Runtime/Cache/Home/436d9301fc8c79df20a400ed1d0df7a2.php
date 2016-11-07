<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" type="text/html">
		<title>商城</title>
		<link type="text/css" rel="stylesheet" href="/zl_shop/Public/index/css/lay.css">
		
	<style type="text/css">
		
		#root-nav{width:1349px;height:45px;background:#f2f2f2;}
		#root-nav div.root-w{width:1210px;height:45px;margin:0px auto;line-height:45px;}
		#root-nav div.root-w strong a{font-size:20px;}
		
		#p-box{width:1349px;height:450px;}
		#p-box div.p-w{width:1210px;height:450px;margin:0px auto;background:#fff;border-bottom:1px solid #f2f2f2;}
		#p-box div.p-w > div{float:left;}
		/*===================商品图片浏览=======================*/
		/* #p-box div.p-w div.preview{width:378px;height:450px;}*/
		#p-box div.p-w div.preview{width:350px;height:450px;}
		#p-box div.p-w div.preview div.preview-bimg{width:350px;height:350px;cursor:pointer;position:relative;}
		#p-box div.p-w div.preview div.preview-bimg div.magnify{width:350px;height:350px;background:red;position:absolute;top:0px;left:350px;}
		
		#p-box div.p-w div.preview div.preview-simg{width:350px;height:54px;}
		#p-box div.p-w div.preview div.preview-simg ul li{width:50px;height:50px;float:left;margin:4px 10px;cursor:pointer;}
		#p-box div.p-w div.preview div.preview-n{width:350px;height:40px;background:#fff;line-height:60px;}
		#p-box div.p-w div.preview div.preview-n div.p-share{width:160px;height:40px;float:right;}
		#p-box div.p-w div.preview div.preview-n div.p-share a{margin:0px 10px;}
		
		#p-box div.p-w div.p-inner{width:588px;height:450px;}
		#name{width:588px;height:100px;}
		#name span{display:block;width:560px;height:50px;line-height:50px;margin:0px auto;}
		
		#summary{width:588px;height:100px;}
		#summary div.price{width:560px;height:50px;margin:0px auto;line-height:50px;}
		#summary div.price span{font-size:25px;color:#e4393c;}
		#summary div.price div.totalp{width:70px;height:40px;float:right;line-height:20px;margin-top:10px;}
		#summary div.activity{width:560px;height:50px;margin:0px auto;line-height:50px;}
		
		#choose{width:588px;height:456px;}
		#choose div.address{width:560px;height:80px;margin:0px auto;}
		#choose div.address > div{width:560px;height:40px;line-height:40px;}
		#choose div.attr{width:560px;height:140px;margin:0px auto;}
		#choose div.attr > div{width:560px;height:70px;line-height:70px;}
		#choose div.attr div.attr-color > div{float:left;}
		#choose div.attr div.attr-color div.c-color {width:70px;height:70px;}
		#choose div.attr div.attr-color div.color {width:490px;height:70px;}
		#choose div.attr div.attr-color div.color > label{width:50px;height:30px;border:1px solid #ccc;float:left;padding-left:20px;margin-top:20px;line-height:30px;margin-right:10px;text-align:center;cursor:pointer;}
		#choose div.attr div.attr-color div.color > label input{visibility:hidden;width:0;height:0;margin:0;padding:0;}
		#choose div.num{width:560px;height:60px;margin:20px auto;}
		#choose div.num div.p-num{width:60px;height:40px;background:#fff;position:relative;}
		#choose div.num div.p-num input{width:40px;height:40px;border:0px;text-indent:8px;border:1px solid #bbb;;}
		#choose div.num div.p-num div.add-desc{width:20px;height:40px;position:absolute;top:0px;left:40px;}
		#choose div.num div.p-num div.add-desc a{border:1px solid #bbb;display:block;width:20px;height:20px;background:#ddd;line-height:20px;text-align:center;font-size:15px;text-decoration:none;}
		#choose div.num div.p-num a.add-car{border:1px solid #e4393c;display:block;width:150px;height:40px;background:#e4393c;line-height:40px;text-align:center;font-size:20px;text-decoration:none;
											position:absolute;top:0px;left:100px;color:#fff;border-radius:5px;
										}
		#choose div.num div.p-num a.add-car:hover{background:#f9393c;}
		#choose div.tip{width:560px height:60px;margin:0px auto;}
		
		/*=============商品介绍===商品评价=====规格参数========= ... ================================*/
		#all-details{width:1210px;margin:10px auto;}
		#all-details > div{float:left;}
		#aleft{width:210px;border:1px solid #bbb;}
        #mc div.mt{width:210px;height:32px;line-height:32px;text-indent:10px;}
		#mc div.mtgoods{width:210px;overflow:hidden;}
		#mc div.mtgoods div.p-goods{width:190px;height:254px;margin:10px 10px 0px 10px;padding-bottom:5px;}
		
		#mc div.mtgoods div.p-goods div.p-img{width:190px;height:190px;}
		#mc div.mtgoods div.p-goods div.p-name{width:190px;height:30px;background:#fff;text-indent:10px;overflow:hidden;}
		#mc div.mtgoods div.p-goods div.p-name a{display:block;width:190px;height:30px;line-height:30px;overflow:hidden;}
		#mc div.mtgoods div.p-goods div.p-price{width:190px;height:17px;background:#fff;text-indent:10px;overflow:hidden;line-height:16px;}
		#mc div.mtgoods div.p-goods div.p-review{width:190px;height:17px;background:#fff;text-indent:10px;overflow:hidden;line-height:16px;}
		

		#aright{width:990px;margin-left:6px;overflow:hidden}
		#aright div.nav{width:990px;height:40px;background:#f2f2f2;border:1px solid #ddd;border-top:3px solid #e4393c;}
		#aright div.nav ul li a{display:block;width:120px;height:40px;float:left;line-height:40px;text-align:center;margin-top:-3px;margin-right:3px;border-top:3px solid #e4393c;}
		#aright div.content{width:990px;position:relative;margin-top:10px;overflow:hidden}
		#aright div.content div.g-d{display:block;width:988px;position:relative;border:1px solid #bbb;z-index:999;}
		#aright div.content div.g-p{background:#f2f2f2;overflow:hidden;display:none;width:990px;height:2818px;position:relative;top:0px;left:0px;z-index:999;border:1px solid #fff;}
		#aright div.content div.g-p div.g-p-nav{width:990px;height:30px;border:1px solid #ddd;background:#f2f2f2}
		#aright div.content div.g-p div.g-p-nav ul li{float:left}
		#aright div.content div.g-p div.g-p-nav ul li a{display:block;width:120px;height:30px;float:left;line-height:30px;text-align:center;}
        
      
		
		/*============= rate 好评率 ==================*/		
        #rate{width:990px;height:120px;margin-top:10px;}
        #rate > div{float:left;}
        #rate div.mc{width:200px;height:120px;font-size:80px;margin-left:10px;line-height:120px;text-align:center;color:#e4393c;}
        #rate div.mt{width:500px;height:120px;margin-left:10px;margin-top:10px;}
        #rate div.mt div.mt-g{width:500px;height:30px;margin-left:10px;margin-top:5px;}
        #rate div.mt div.mt-g div.mt-k{width:100px;height:30px;float:left;line-height:30px;text-indent:20px;}
        #rate div.mt div.mt-g div.mt-h{width:380px;height:15px;background:#ddd;float:right;margin:5px 0px;}
        #rate div.mt div.mt-g div.mt-h div.mt-h-q{width:320px;height:15px;background:#e4393c;}
        #rate div.mt div.mt-g div.mt-h div.mt-h-w{width:30px;height:15px;background:#e4393c;}
        #rate div.mt div.mt-g div.mt-h div.mt-h-e{width:30px;height:15px;background:#e4393c;}
      

		
		/*=============================================*/
	    #g-p-content{width:990px;position:relative;}
	    #g-p-content div.w{width:990px;height:30px;background:#f2f2f2;margin-top:-1px;border:1px solid #ddd;}
	    #g-p-content div.w > div{float:left;line-height:30px;text-align:center;}
	    #g-p-content div.w div.w-message{width:500px;height:30px;}
	    #g-p-content div.w div.w-degree{width:160px;height:30px;}
	    #g-p-content div.w div.w-cof{width:160px;height:30px;}
	    #g-p-content div.w div.w-user{width:170px;height:30px;}

	    /*=============全部评价===================*/
		#g-p-content div.all-p{background:#fff;display:block;width:990px;height:2755px;position:absolute;top:30px;left:0px;}
		.all-p-details{width:960px;height:140px;margin:0px auto;}
        .all-p-details > div{float:left;}
		.all-p-details div.a-p-x{width:500px;height:120px;margin-top:15px;}
		.all-p-details div.a-p-x ul li:nth-child(1){width:500px;height:60px;line-height:25px;word-break:break-all;font-size:14px;color:#555;}
		.all-p-details div.a-p-x ul li:nth-child(2){width:500px;height:25px;line-height:25px;}
		.all-p-details div.a-p-x ul li:nth-child(3){width:500px;height:25px;line-height:25px;}
		.all-p-details div.a-p-d{width:100px;height:20px;margin-top:50px;margin-left:20px;}
		.all-p-details div.a-p-d ul li{width:13px;height:13px;float:left;margin:3px 3px;}
		.all-p-details div.a-p-m{width:80px;height:60px;margin-top:40px;margin-left:70px; line-height:30px;}
		.all-p-details div.a-p-u{width:100px;height:100px;margin-top:20px;float:right;line-height:30px;}

	    
		/*=========评论回复==========*/
		
		.review_box{display:none;width:960px;height:147px;background:#cdcdcd;margin-bottom:-10px;}
		.review_box2{cursor:pointer;width:120px;height:35px;background:#e4393c;float:right;margin-right:20px;line-height:35px;text-align:center;color:#fff;font-size:18px;border:1px solid #e4393c}
		/*显示所有的回复*/
		.all-review{width:960px;background:#f2f2f2;}
		.all-review ul li{width:940px;height:100px;margin-left:10px;}
		.all-review ul li div.top{width:940px;height:60px;margin-top:10px;}
		.all-review ul li div.bottom-btn{cursor:pointer;background:#e4393c;color:#fff;width:50px;height:20px;line-height:20px;text-align:center;font-size:12px;}
		
		
		/*====回复====*/
		
		
		
		/*=============好评===================*/
		#g-p-content div.good-p{background:#fff;display:block;width:990px;height:2755px;position:absolute;top:30px;left:0px;}
		
		/*=============中评===================*/	   
		#g-p-content div.mid-p{background:#fff;display:block;width:990px;height:2755px;position:absolute;top:30px;left:0px;}
		
		/*=============差评===================*/	   
		#g-p-content div.bad-p{background:#fff;display:block;width:990px;height:2755px;position:absolute;top:30px;left:0px;}
	
	    .a_page{width:990px;height:25px;border:1px solid #fff;position:absolute;bottom:0px;block;background:#fff;}
	    .a_page ul li {width:50px;height:25px;border:1px solid #bbb;background:#e4393c;float:left;line-height:25px;text-align:center;color:#fff;}
	    .a_page ul li a{width:50px;height:25px;display:block;background:#f2f2f2}
		.w_page{width:990px;height:25px;border:1px solid #fff;position:absolute;bottom:0px;block;background:#fff;}
	    .w_page ul li {width:50px;height:25px;border:1px solid #bbb;background:#e4393c;float:left;line-height:25px;text-align:center;color:#fff;}
	    .w_page ul li a{width:50px;height:25px;display:block;background:#f2f2f2}
		.m_page{width:990px;height:25px;border:1px solid #fff;position:absolute;bottom:0px;block;background:#fff;}
	    .m_page ul li {width:50px;height:25px;border:1px solid #bbb;background:#e4393c;float:left;line-height:25px;text-align:center;color:#fff;}
	    .m_page ul li a{width:50px;height:25px;display:block;background:#f2f2f2}
		.b_page{width:990px;height:25px;border:1px solid #fff;position:absolute;bottom:0px;block;background:#fff;}
	    .b_page ul li {width:50px;height:25px;border:1px solid #bbb;background:#e4393c;float:left;line-height:25px;text-align:center;color:#fff;}
	    .b_page ul li a{width:50px;height:25px;display:block;background:#f2f2f2}
		
        /*   放大镜      */
        .bigImg{
            diaplay: block;
            width: 400px;
            height: 400px;
            overflow: hidden;
            position: absolute;
            z-index: 100;
            left: 420px;
            float: left;
            border: 1px solid #ccc;
        }
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
			
	<div id="root-nav">
		<div class="root-w">
            <?php $__FOR_START_32738__=0;$__FOR_END_32738__=count($typeIds);for($i=$__FOR_START_32738__;$i < $__FOR_END_32738__;$i+=1){ if(($i) == "0"): ?><strong>
                    <a href="/zl_shop/index.php/List/index/typeid/<?php echo ($typeIds[$i]); ?>"><?php echo ($typeInfo[$typeIds[$i]]); ?></a>　>　
                </strong>
                <?php else: ?>
                <span>
                    <a href="/zl_shop/index.php/List/index/typeid/<?php echo ($typeIds[$i]); ?>"><?php echo ($typeInfo[$typeIds[$i]]); ?></a>　>　
                </span><?php endif; } ?>
            <span>
				<a href="/zl_shop/index.php/List/index/typeid/<?php echo ($type_id); ?>"><?php echo ($typeInfo[$type_id]); ?></a>
			</span>
		</div>
	</div>
	<div id="p-box">
		<div class="p-w">
			<div class="preview">
				<div class="preview-bimg">
					<img src="/zl_shop/Public/Uploads/goods/s_<?php echo ($goods_info['pic']); ?>">
				</div>
				<div class="preview-simg"><!-- 
					<ul>
						<li><img class="turn-img" src="/zl_shop/Public/index/images/557d44f6N90721ac4.jpg"></li>
						<li><img class="turn-img" src="/zl_shop/Public/index/images/557d44f3N9c2280ab_004.jpg"></li>
						<li><img class="turn-img" src="/zl_shop/Public/index/images/552778b4N6beeb13c.jpg"></li>
						<li><img class="turn-img" src="/zl_shop/Public/index/images/552778b8N1228e677.jpg"></li>
						<li><img class="turn-img" src="/zl_shop/Public/index/images/552778b9Nde2a5a2e.jpg"></li>
					</ul> -->
				</div>
				<div class="preview-n">
					商品编号<span>　<?php echo ($goods_info['psn']); ?></span>
					<div class="p-share">
						<a href="#"><img src="/zl_shop/Public/index/images/20130725.png"> 分享</a>
						<a href="#"><img src="/zl_shop/Public/index/images/20130725.png"> 关注商品</a>
					</div>
				</div>
			</div>
            <!-- <div class="bigImg">
                <img src="/zl_shop/Public/Uploads/goods/<?php echo ($goods_info['pic']); ?>" />
            </div> -->
			<div class="p-inner">
				<div id="name">
                    <input type="hidden" value="<?php echo ($goods_info['id']); ?>" class="goods_id"/>
                    <input type="hidden" value="<?php echo ($goods_info['name']); ?>" class="goods_name"/>
					<span><h2><?php echo ($goods_info['name']); ?></h2></span>
				</div>
				<div id="summary">
					<div class="price">京东价：<span>￥ <?php echo ($goods_info['saleprice']); ?></span>　<a href="#">(降价通知)</a>
						
						<div class="totalp"><p>累计评价</p><p><a style="color:#005ea4" href="#"><?php echo ($count['all']); ?></a></p></div>
						
					</div>
					<div class="activity">
						<p>月销量：<?php echo ($goods_info['salecount']); ?>　　　库存量：<span id="stock"></span></p>
					</div>
				
				</div>
				<div id="choose">
						<!-- <div class="address">
							<div class="choose-add"><p><span>配送至：<?php echo ($city); ?></span> <span>有货</span></p></div>
							<div class="add-server"><p>服　务：由 京东 发货并提供售后服务。</p></div>
						</div> -->
						<div class="attr">
							
							<div class="attr-color">
								<div class="c-color">选择颜色：</div>
								<div class="color color_value">
									<?php if(is_array($at_color)): foreach($at_color as $key=>$color): ?><label for="color<?php echo ($color['id']); ?>" class="c-c"><input style="margin-left:-30px;" id="color<?php echo ($color['id']); ?>" value="<?php echo ($color['id']); ?>" type="radio" name="color"/><?php echo ($color['attrvalue']); ?></label><?php endforeach; endif; ?>
								</div>
							</div>
							<div class="attr-color">
								<div class="c-color">选择尺码：</div>
								<div class="color size_value">
									<?php if(is_array($at_size)): foreach($at_size as $key=>$size): ?><label for="color<?php echo ($size['id']); ?>" class="c-c"><input style="margin-left:-30px;" value="<?php echo ($size['id']); ?>" id="color<?php echo ($size['id']); ?>" type="radio" name="size"/><?php echo ($size['attrvalue']); ?></label><?php endforeach; endif; ?>
								</div>
							</div>
							
						</div>
						<div class="num">
							<div class="p-num">
								<input type="text" class="buy-num" name="" value="1">
								<div class="add-desc">
									<a class="add" href="javascript:">+</a>
									<a class="desc"href="javascript:">-</a>
								</div>
								<a class="add-car" href="#"><b>加入购物车</b></a>
							</div>
						</div>
						<!-- <div class="tip">
							<p><span>温馨提示：</span><span>1.北京地区支持礼品包装</span></p>
							　<p><span>　　　　　2.以旧换新，最高抵扣3000元</span></p>
							　<p><span>　　　　　3.支持7天无理由退货</span></p>
						</div> -->
				</div>
			</div>
			<!-- <div id="review_area">
				<div>品牌LOGO</div>
				<div></div>
				<div></div>
			</div> -->
		</div>
	</div>
	<div id="all-details">
        <div id="aleft">
        <?php if(empty($best_goods)): ?><strong style="display: block;margin: 50px auto;width: 120px;">没有搜索到相关商品...</strong>
        <?php else: ?>
			<div id="mc">
				<div class="mt"><h3>热销推荐：</h3></div>
				<div class="mtgoods">
					<?php if(is_array($best_goods)): foreach($best_goods as $key=>$goods): ?><div class="p-goods">
							<div class="p-img"><a target="_blank" href="/zl_shop/index.php/Details/index/id/<?php echo ($goods['id']); ?>"><img width="190" src="/zl_shop/Public/Uploads/goods/<?php echo ($goods['pic']); ?>"></a></div>
							<div class="p-name"><a target="_blank" href="/zl_shop/index.php/Details/index/id/<?php echo ($goods['id']); ?>"><?php echo ($goods['name']); ?></a></div>
							<div class="p-price"><span style="color:#e4393c;font-size:15px;"><b><?php echo ($goods['saleprice']); ?></b></span></div>
							<div class="p-review"><span>共有 <a href="#"><?php echo ($goods['reviewcount']); ?></a> 个评价</span></div>
						</div><?php endforeach; endif; ?>
				</div>
			</div><?php endif; ?>
		</div>
		<div id="aright">
			<div class="nav">
				<ul>
					<li><a style="background:#e4393c;color:#fff" href="javascript:" class="ana goods-d">商品详情</a></li>
				
					<li><a href="javascript:" class="ana goods-p">商品评价(<?php echo ($count['all']); ?>)</a></li>
					
				</ul>
			</div>
			<!--好评率-->
			<div id="rate">
				<div class="mc">
					<span><?php echo ($rate['w']); ?>%</span>
				</div>
				<div class="mt">
					<div class="mt-g">
						<div class="mt-k">好评(<span class="rate_w"><?php echo ($rate['w']); ?></span>%)</div>
						<div class="mt-h"><div class="mt-h-q"></div></div>
					</div>
					
					<div class="mt-g">
						<div class="mt-k">中评(<span class="rate_m"><?php echo ($rate['m']); ?></span>%)</div>
						<div class="mt-h"><div class="mt-h-w"></div></div>
					</div>
					
					<div class="mt-g">
						<div class="mt-k">差评(<span class="rate_b" ><?php echo ($rate['b']); ?></span>%)</div>
						<div class="mt-h"><div class="mt-h-e"></div></div>
					</div>
				</div>
			</div>
			
		
			<div class="content">
				<!--商品详情-->
				<div class="g-ana g-d"><?php echo ($goods_info['descr']); ?></div>
			
			
				<!--商品评价-->
				<div class="g-ana g-p">
					<div class="g-p-nav">
						<ul>
							<li><a style="background:#e4393c;color:#fff;" class="nav-list a-p" href="javascript:">全部评价(<?php echo ($count['all']); ?>)</a></li>
							<li><a class="nav-list g-pj" href="javascript:">好评(<?php echo ($count['w']); ?>)</a></li>
							<li><a class="nav-list m-p" href="javascript:">中评(<?php echo ($count['m']); ?>)</a></li>
							<li><a class="nav-list b-p" href="javascript:">差评(<?php echo ($count['b']); ?>)</a></li>
						</ul>
					</div>
					
					<div id="g-p-content">
						<div class="w">
							<div class="w-message">评价心得</div>
							<div class="w-degree">顾客满意度</div>
							<div class="w-cof">购买信息</div>
							<div class="w-user">评论者</div>
						</div>
						
						<!--全部评价-->
						<div class="pj all-p">
							<?php if(is_array($a)): foreach($a as $key=>$data): ?><div class="all-p-details">
									<!--评级内容-->
									<div class="a-p-x">
										<ul>
											<li><?php echo ($data['review']['message']); ?></li>
											<li><?php echo (date('Y-m-d H:i:s',$data['review']['addtime'])); ?></li>
											<li>
												<a class="review_btn"  href="javascript:">回复 (<?php echo ($data['count']); ?>)</a>　　
												<a href="javascript:">赞 (0)</a>
											</li>
										</ul>
									</div>
									<!--评级等级-->
									<div class="a-p-d">
										<ul>
											<?php $__FOR_START_29782__=0;$__FOR_END_29782__=$data['review']['star'];for($i=$__FOR_START_29782__;$i < $__FOR_END_29782__;$i+=1){ ?><li><img src="/zl_shop/Public/index/images/20130725.png"></li><?php } ?>
										</ul>
									</div>
									<!--购买信息-->
									<div class="a-p-m">
										<p><span>颜色：红色</span></p>
										<p><span>尺寸：XL</span></p>
									</div>
									<!--评论人-->
									<div class="a-p-u">
										<p><span><?php echo ($data['user']['username']); ?></span></p>
										
										<p><span>
											<?php if($data['user']['userrid'] == 1): ?>注册会员
											<?php elseif($data['user']['userrid'] == 2): ?>铜牌会员
											<?php elseif($data['user']['userrid'] == 3): ?>银牌会员
											<?php elseif($data['user']['userrid'] == 4): ?>金牌会员
											<?php elseif($data['user']['userrid'] == 5): ?>钻石会员
											<?php else: endif; ?>
										
										
										</span></p>
									
									</div>
									<div class="review_box">
										<div><textarea style="width:920px;height:50px;font-size:18px;margin:10px;margin-left:15px;background:#f2f2f2" class="review_area"></textarea></div>
										<div class="review_box2">发　表</div>
										<div style="display:none;"><?php echo ($data['review']['id']); ?></div>
									</div>
									<div class="all-review">
										<ul>
											<?php if(is_array($data['reviewsreply'])): foreach($data['reviewsreply'] as $key=>$reviewsply): ?><li>
													<!--回复内容-->
													<div class="top">
														<span style="color:#005aa2">匿名:</span>
														<span style="color:#000;"><?php echo ($reviewsply['message']); ?></span>
														<span style="color:#999"><?php echo (date('Y-m-d H:i:s',$reviewsply['addtime'])); ?></span>
													</div>
												<!--回复按钮-->
												<div class="bottom-btn"  href="javascript:">回　复</div>
												   
												</li>
												<div style="margin-top:-1px;" class="review_box re_box">
													<div><textarea style="width:920px;height:50px;font-size:18px;margin:10px;margin-left:15px;background:#f2f2f2" class="review_area"></textarea></div>
													<div class="review_box2">发　表</div>
													<div style="display:none;"><?php echo ($data['review']['id']); ?></div>
												</div><?php endforeach; endif; ?>
											<!--========回复分页======-->
										</ul>
									</div>
							    </div><?php endforeach; endif; ?>
							<div class="a_page"><?php echo ($all_page); ?></div>	
						</div>
						
						<!--好评-->
						<div class="pj good-p">
							<?php if(is_array($w)): foreach($w as $key=>$data): ?><div class="all-p-details">
									<!--评级内容-->
									<div class="a-p-x">
										<ul>
											<li><?php echo ($data['review']['message']); ?></li>
											<li><?php echo (date('Y-m-d H:i:s',$data['review']['addtime'])); ?></li>
											<li>
												<a class="review_btn"  href="javascript:">回复 (<?php echo ($data['count']); ?>)</a>　　
												<a href="javascript:">赞 (0)</a>
											</li>
										</ul>
									</div>
									<!--评级等级-->
									<div class="a-p-d">
										<ul>
											<?php $__FOR_START_27863__=0;$__FOR_END_27863__=$data['review']['star'];for($i=$__FOR_START_27863__;$i < $__FOR_END_27863__;$i+=1){ ?><li><img src="/zl_shop/Public/index/images/20130725.png"></li><?php } ?>
										</ul>
									</div>
									<!--购买信息-->
									<div class="a-p-m">
										<p><span>颜色：红色</span></p>
										<p><span>尺寸：XL</span></p>
									</div>
									<!--评论人-->
									<div class="a-p-u">
										<p><span><?php echo ($data['user']['username']); ?></span></p>
										
										<p><span>
											<?php if($data['user']['userrid'] == 1): ?>注册会员
											<?php elseif($data['user']['userrid'] == 2): ?>铜牌会员
											<?php elseif($data['user']['userrid'] == 3): ?>银牌会员
											<?php elseif($data['user']['userrid'] == 4): ?>金牌会员
											<?php elseif($data['user']['userrid'] == 5): ?>钻石会员
											<?php else: endif; ?>
										
										
										</span></p>
										<p><span>购买时间</span></p>
									</div>
									<div class="review_box">
										<div><textarea style="width:920px;height:50px;font-size:18px;margin:10px;margin-left:15px;background:#f2f2f2" class="review_area"></textarea></div>
										<div class="review_box2">发　表</div>
										<div style="display:none;"><?php echo ($data['review']['id']); ?></div>
									</div>
									<div class="all-review">
										<ul>
											<?php if(is_array($data['reviewsreply'])): foreach($data['reviewsreply'] as $key=>$reviewsply): ?><li>
													<!--回复内容-->
													<div class="top">
														<span style="color:#005aa2"><?php echo ($reviewsply['user_id']); ?>:</span>
														<span style="color:#000;"><?php echo ($reviewsply['message']); ?></span>
														<span style="color:#999"><?php echo (date('Y-m-d H:i:s',$reviewsply['addtime'])); ?></span>
													</div>
												<!--回复按钮-->
												<div class="bottom-btn"  href="javascript:">回　复</div>
												   
												</li>
												<div style="margin-top:-1px;" class="review_box re_box">
													<div><textarea style="width:920px;height:50px;font-size:18px;margin:10px;margin-left:15px;background:#f2f2f2" class="review_area"></textarea></div>
													<div class="review_box2">发　表</div>
													<div style="display:none;"><?php echo ($data['review']['id']); ?></div>
												</div><?php endforeach; endif; ?>
											
										</ul>
									</div>
							    </div><?php endforeach; endif; ?>
					
						</div>
						
						<!--中评-->
						<div class="pj mid-p">
							<?php if(is_array($m)): foreach($m as $key=>$data): ?><div class="all-p-details">
									<!--评级内容-->
									<div class="a-p-x">
										<ul>
											<li><?php echo ($data['review']['message']); ?></li>
											<li><?php echo (date('Y-m-d H:i:s',$data['review']['addtime'])); ?></li>
											<li>
												<a class="review_btn"  href="javascript:">回复 (<?php echo ($data['count']); ?>)</a>　　
												<a href="javascript:">赞 (0)</a>
											</li>
										</ul>
									</div>
									<!--评级等级-->
									<div class="a-p-d">
										<ul>
											<?php $__FOR_START_2500__=0;$__FOR_END_2500__=$data['review']['star'];for($i=$__FOR_START_2500__;$i < $__FOR_END_2500__;$i+=1){ ?><li><img src="/zl_shop/Public/index/images/20130725.png"></li><?php } ?>
										</ul>
									</div>
									<!--购买信息-->
									<div class="a-p-m">
										<p><span>颜色：红色</span></p>
										<p><span>尺寸：XL</span></p>
									</div>
									<!--评论人-->
									<div class="a-p-u">
										<p><span><?php echo ($data['user']['username']); ?></span></p>
										
										<p><span>
											<?php if($data['user']['userrid'] == 1): ?>注册会员
											<?php elseif($data['user']['userrid'] == 2): ?>铜牌会员
											<?php elseif($data['user']['userrid'] == 3): ?>银牌会员
											<?php elseif($data['user']['userrid'] == 4): ?>金牌会员
											<?php elseif($data['user']['userrid'] == 5): ?>钻石会员
											<?php else: endif; ?>
										
										
										</span></p>
										<p><span>购买时间</span></p>
									</div>
									<div class="review_box">
										<div><textarea style="width:920px;height:50px;font-size:18px;margin:10px;margin-left:15px;background:#f2f2f2" class="review_area"></textarea></div>
										<div class="review_box2">发　表</div>
										<div style="display:none;"><?php echo ($data['review']['id']); ?></div>
									</div>
									<div class="all-review">
										<ul>
											<?php if(is_array($data['reviewsreply'])): foreach($data['reviewsreply'] as $key=>$reviewsply): ?><li>
													<!--回复内容-->
													<div class="top">
														<span style="color:#005aa2"><?php echo ($reviewsply['user_id']); ?>:</span>
														<span style="color:#000;"><?php echo ($reviewsply['message']); ?></span>
														<span style="color:#999"><?php echo (date('Y-m-d H:i:s',$reviewsply['addtime'])); ?></span>
													</div>
												<!--回复按钮-->
												<div class="bottom-btn"  href="javascript:">回　复</div>
												   
												</li>
												<div style="margin-top:-1px;" class="review_box re_box">
													<div><textarea style="width:920px;height:50px;font-size:18px;margin:10px;margin-left:15px;background:#f2f2f2" class="review_area"></textarea></div>
													<div class="review_box2">发　表</div>
													<div style="display:none;"><?php echo ($data['review']['id']); ?></div>
												</div><?php endforeach; endif; ?>
											
										</ul>
									</div>
							    </div><?php endforeach; endif; ?>
						
						</div>
						
						<!--差评-->
					    <div class="pj bad-p">
							<?php if(is_array($b)): foreach($b as $key=>$data): ?><div class="all-p-details">
									<!--评级内容-->
									<div class="a-p-x">
										<ul>
											<li><?php echo ($data['review']['message']); ?></li>
											<li><?php echo (date('Y-m-d H:i:s',$data['review']['addtime'])); ?></li>
											<li>
												<a class="review_btn"  href="javascript:">回复 (<?php echo ($data['count']); ?>)</a>　　
												<a href="javascript:">赞 (0)</a>
											</li>
										</ul>
									</div>
									<!--评级等级-->
									<div class="a-p-d">
										<ul>
											<?php $__FOR_START_4269__=0;$__FOR_END_4269__=$data['review']['star'];for($i=$__FOR_START_4269__;$i < $__FOR_END_4269__;$i+=1){ ?><li><img src="/zl_shop/Public/index/images/20130725.png"></li><?php } ?>
										</ul>
									</div>
									<!--购买信息-->
									<div class="a-p-m">
										<p><span>颜色：红色</span></p>
										<p><span>尺寸：XL</span></p>
									</div>
									<!--评论人-->
									<div class="a-p-u">
										<p><span><?php echo ($data['user']['username']); ?></span></p>
										
										<p><span>
											<?php if($data['user']['userrid'] == 1): ?>注册会员
											<?php elseif($data['user']['userrid'] == 2): ?>铜牌会员
											<?php elseif($data['user']['userrid'] == 3): ?>银牌会员
											<?php elseif($data['user']['userrid'] == 4): ?>金牌会员
											<?php elseif($data['user']['userrid'] == 5): ?>钻石会员
											<?php else: endif; ?>
										
										
										</span></p>
										<p><span>购买时间</span></p>
									</div>
									<div class="review_box">
										<div><textarea style="width:920px;height:50px;font-size:18px;margin:10px;margin-left:15px;background:#f2f2f2" class="review_area"></textarea></div>
										<div class="review_box2">发　表</div>
										<div style="display:none;"><?php echo ($data['review']['id']); ?></div>
									</div>
									<div class="all-review">
										<ul>
											<?php if(is_array($data['reviewsreply'])): foreach($data['reviewsreply'] as $key=>$reviewsply): ?><li>
													<!--回复内容-->
													<div class="top">
														<span style="color:#005aa2"><?php echo ($reviewsply['user_id']); ?>:</span>
														<span style="color:#000;"><?php echo ($reviewsply['message']); ?></span>
														<span style="color:#999"><?php echo (date('Y-m-d H:i:s',$reviewsply['addtime'])); ?></span>
													</div>
													<!--回复按钮-->
													<div class="bottom-btn"  href="javascript:">回　复</div>
												</li>
												<div style="margin-top:-1px;" class="review_box re_box">
													<div><textarea style="width:920px;height:50px;font-size:18px;margin:10px;margin-left:15px;background:#f2f2f2" class="review_area"></textarea></div>
													<div class="review_box2">发　表</div>
													<div style="display:none;"><?php echo ($data['review']['id']); ?></div>
												</div><?php endforeach; endif; ?>
										</ul>
									</div>
							    </div><?php endforeach; endif; ?>
						
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <div style="clear:both"></div>

			<!--=========================footer开始======================================-->
		
		
		<!--=========================footer结束======================================-->
		
	</body>
	<script src="/zl_shop/Public/index/js/lay.js"></script>
	

	<script type="text/javascript">
		
		//==========好评率==============
		var w = $(".rate_w").html();
		wid = w/100 * 380 + "px";
		$(".mt-h-q").css("width",wid);
		//==========中评率==============
		var m = $(".rate_m").html();
		mid = m/100 * 380 + "px";
		$(".mt-h-w").css("width",mid);
		//==========中评率==============
		var b = $(".rate_b").html();
		bid = b/100 * 380 + "px";
		$(".mt-h-e").css("width",bid);
		
		
		
		//=======评论回复框=========
		$(".review_btn").click(function(){
			$(this).parents(".a-p-x").siblings(".review_box").slideToggle(300);
		});

        //点击回复时获取到回复的内容
        $(".review_box2").click(function(){
		    var message = $(this).prev().children(".review_area").val();
			if(!message==""){
				$(this).parent(".review_box").slideUp(300);
				//获取到评论id
				var review_id = $(this).next().html();
				$.ajax({
					'url':"/zl_shop/index.php/Details/review",
					'type':"post",
					'async':true,
					'dataType':'json',
					'data':{'message':message,"review_id":review_id},
					'success':function(data){
						
						//alert(data);
					}
				});
			}
		});

		




	   //大小图转换
		$(".turn-img").hover(function(){
			//得到小图的 src
			var s = $(this).attr("src");
			//得到大图的 src
			var b = $(this).parents(".preview-simg").prev().children().attr("src");
			//alert(b);
			$(this).parents(".preview-simg").prev().children().attr({"src":s});
		});
		
		
		
		//======商品数量 加1 减1 ========
		$(".buy-num").keyup(function(){
			if($(this).val()!=""){
				var a = parseInt($(this).val());
				if(!a){
					$(this).val(1);
				}else{
					$(this).val(a);
				}
			}
		});
		
		$(".add").click(function(){
			if($(this).parent().prev().val() == ""){
				$(this).parent().prev().val(1);
			}else{
				var s = parseInt($(this).parent().prev().val()) + 1;
				$(this).parent().prev().val(s);
			}
			
		});
		
		$(".desc").click(function(){
			
			if($(this).parent().prev().val()==""){
				$(this).parent().prev().val(1);
			}else{
				var s = parseInt($(this).parent().prev().val()) - 1;
				if(s <= 0){
					$(this).parent().prev().val(1);
				}else{
					$(this).parent().prev().val(s);
				}
			}	
		});
		
		//==============颜色==============
		$(".c-c").click(function(){
	
			$(this).siblings().css({"border-color":"#ccc","background":"#fff","color":"#000"});
			$(this).css({"border-color":"#e4393c","background":"#e4393c","color":"#fff"});
			$(this).siblings().removeProp("id");
			$(this).prop({"id":"check-color"});
			
		});
		
		
		//=============尺寸================
		$(".c-s").click(function(){
			$(this).siblings().css({"border-color":"#ccc","background":"#fff","color":"#000"});
			$(this).css({"border-color":"#e4393c","background":"#e4393c","color":"#fff"});
			$(this).siblings().removeProp("id");
			$(this).prop({"id":"check-size"});
		});
		
		
		//=================加入购物车===========================
		$(".add-car").click(function(){
			var color = $(".color_value input:checked").val();
			var size = $(".size_value input:checked").val();
			var buy_num = $(".buy-num").val();
			var goods_id = $(".goods_id").val();
			 var goods_name = $(".goods_name").val();
			//alert(goods_name);
			var goods_psn = $(".preview-n").children("span").html();
			$.ajax({
				url:"/zl_shop/index.php/Details/add_car",
			    type:"post",
				async:true,
				dataType:"json",
				data:{'psn':goods_psn,'color':color,'size':size,'num':buy_num,'goods_id':goods_id,'goods_name':goods_name},
				success:function(data){
                    if(data.info == 1){
                        if(!confirm('请先登录！')){
                            return false;
                        }
                        window.location.href="/zl_shop/index.php/Login/login";
                        return;
                    }
					alert(data.info);
                    window.location.reload();
				}
			});
		
		});
		
		//============商品库存量查询==============================
		$("input").click(function(){
			var goods_id = $(".goods_id").val();
			var attrvalue_id ="";
			if($(".color_value input:checked").val()){
				 attrvalue_id += $(".color_value input:checked").val() +",";
			}
			
			if($(".size_value input:checked").val()){
				 attrvalue_id += $(".size_value input:checked").val();
			}
			
			$.ajax({
				url:"/zl_shop/index.php/Details/check_stock",
				type:"post",
				dataType:"json",
				async:true,
				data:{'attrvalue_id':attrvalue_id,"goods_id":goods_id},
			    success:function(data){
					//alert(data);
					$("#stock").html(data);
				}
			
			});
		});
		
		
		
		
		
		
		//======自定义函数======    
	    function g_show(aobj,bobj){
			$(".ana").css({"background":"#f2f2f2","color":"#666"});
			$(".g-ana").css("display","none");
			aobj.css({"background":"#e4393c","color":"#fff"});
			bobj.css("display","block");
		}
		
		$(".goods-d").hover(function(){g_show($(".goods-d"),$(".g-d"));});
		//$(".goods-p").hover(function(){g_show($(".goods-p"),$(".g-p"));});
	    
		$(".goods-p").hover(function(){
			$(".ana").css({"background":"#f2f2f2","color":"#666"});
			$(this).css({"background":"#e4393c","color":"#fff"});
			$(".g-d").css('display',"none");
			$(".g-p").css('display',"block");
		});
	    
		
		
	
		//======评价=============
		
		function p_show(aobj,bobj){
			$(".nav-list").css({"background":"#f2f2f2","color":"#666"});
			$(".pj").css("display","none");
			aobj.css({"background":"#e4393c","color":"#fff"});
			bobj.css("display","block");
		}
		$(".a-p").hover(function(){p_show($(".a-p"),$(".all-p"));});
		$(".g-pj").hover(function(){p_show($(".g-pj"),$(".good-p"));});
		$(".m-p").hover(function(){p_show($(".m-p"),$(".mid-p"));});
		$(".b-p").hover(function(){p_show($(".b-p"),$(".bad-p"));});
	
	
	</script>

	
	
	
</html>