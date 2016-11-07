<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" type="text/html">
		<title>商城</title>
		<link type="text/css" rel="stylesheet" href="/zl_shop/Public/index/css/lay.css">
		
	<style type="text/css">
		/*==========================主体部分开始=======================================*/
		#hotsales{width:1210px;height:152px;margin:10px auto;background:#f1f1f1;}
		#hotsales > div{float:left;}
		#hotsales div.hotimg{width:60px;height:85px;background:#ddd;margin-left:20px;margin-right:10px;background-image:url("/zl_shop/Public/index/images/20150715183029.png");}
		#hotsales div.goods{width:920px;height:137px;margin-top:5px;}
		#hotsales div.goods div.hotgoods{width:286px;height:122px;background:#fff;float:left;margin:7px;}
		#hotsales div.goods div.hotgoods > div{float:left;}
		#hotsales div.goods div.hotgoods div.goodspic{width:100px;height:100px;margin:11px 7px;}
		#hotsales div.goods div.hotgoods div.goodsdescr{width:154px;height:100px;margin:11px 7px;}
		#hotsales div.goods div.hotgoods div.goodsdescr div.goodstitle{width:154px;height:45px;line-height:40px;overflow:hidden;}
		#hotsales div.goods div.hotgoods div.goodsdescr div.goodsprice{width:154px;height:25px;}
		#hotsales div.goods div.hotgoods div.goodsdescr div.goodsget{width:154px;height:30px;overflow:hidden;}
		#hotsales div.goods div.hotgoods div.goodsdescr div.goodsget a{display:block;text-align: center;width:74px;height:24px;line-height:24px;border:1px solid #bbb;}
		#hotsales div.goods div.hotgoods div.goodsdescr div.goodsget a:hover{border:1px solid red;text-decoration:none}
		
		#hotsales div.activity{width:200px;height:152px;}
		#hotsales div.activity > div{float:left;}
		#hotsales div.activity div.actimg{width:60px;height:85px;background-image:url("/zl_shop/Public/index/images/20150715183047.png");margin-right:10px;}
		#hotsales div.activity div.saleactive{width:130px;height:152px;overflow:hidden;}
		#hotsales div.activity div.saleactive ul{margin: 5px 5px 0 0;overflow: hidden;}
		#hotsales div.activity div.saleactive ul li{font-family:simsun;height:25px;margin-top:5px;padding:0 5px;list-style-type:disc;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;}
		
		/*==========================主体部分结束=======================================*/
		/*==========================商品品牌分类开始=======================================*/
		#crumbs-nav-main{width:1210px;height:25px;margin:0px auto;line-height:25px;}
		#crumbs-nav-main span.typefont{font-size:15px;}
		#s-title{width:1210px;height:35px;background:#f1f1f1;margin:5px auto;line-height:35px;border-top:1px solid #ddd;border-bottom:1px solid #ddd;}
		#goods-brands{width:1210px;height:100px;margin:5px auto;}
		#goods-brands > div {float:left;}
		#goods-brands div.sl-key{width:110px;height:100px;}
		#goods-brands div.sl-value{width:950px;height:100px;margin-top:1px;overflow:hidden}
		#goods-brands div.sl-value ul li a{display:block;width:116px;height:48px;line-height:48px;text-align:center;float:left;border:1px solid #ddd;}
		#goods-brands div.sl-value ul li a:hover{border:1px solid #e4393c;text-decoration:none;}
		#goods-brands div.sl-ext{width:150px;height:100px;}
		
		#price{width:1210px;height:35px;margin:0px auto;border-top:1px solid #ddd;border-bottom:1px solid #ddd;line-height:35px;}
		#price div.good-price{width:100px;height:35;}
		#price > div{float:left;}
		#price div.range ul li {margin:0px 50px 0px 0px;height:35px;float:left;}
		#price div.range-price{width:300px;height:35px;}
		
		#attrtype{width:1210px;height:35px;margin:0px auto;border-bottom:1px solid #ddd;line-height:35px;}
		#attrtype div.attr{width:100px;height:35;}
		#attrtype > div{float:left;}
		#attrtype div.attrvalue{float:left;width:800px;overflow:hidden;height: 35px;}
		#attrtype div.attrvalue ul li {margin:0px 20px 0px 0px;height:35px;float:left;}
		#attrtype div.attrbox{float:right;width:250px;height:35px;line-height:35px;}
		#attrtype div.attrbox a, .attrbox button{display:inline;width:50px;height:20px;border:1px solid #bbb;float:left;margin-left:20px;line-height:20px;text-align:center;margin-top:7px;}
		.attrbox button{display:none;height: 22px;background: #fff;color: #C4393C;}
		#hotsale{clear:both;width:1210px;height:35px;margin:0px auto;border-bottom:1px solid #ddd;line-height:35px;}
		#hotsale div.hot-m{width:100px;height:35;}
		#hotsale > div{float:left;}
		#hotsale div.hot-g ul li{margin:0px 20px 0px 0px;height:35px;float:left;}
        #searchgoods ul li a{cursor:pointer;}
        *.attrvalue .check, .hot-g .check{color: #C4393C;}
        #searchgoods ul li .check{color:#C4393C;}
		/*==========================商品品牌分类结束=======================================*/
		
		/*==========================商品列表开始=======================================*/
		
		#goodslist{overflow:hidden;width:1210px;margin:10px auto;}
		#mc{width:210px;border:1px solid #bbb;float:left;}
		#mc div.mt{width:210px;height:32px;line-height:32px;text-indent:10px;}
		#mc div.mtgoods{width:210px;overflow:hidden;}
		#mc div.mtgoods div.p-goods{width:190px;height:254px;margin:10px 10px 0px 10px;padding-bottom:5px;}
		
		#mc div.mtgoods div.p-goods div.p-img{width:190px;height:190px;}
		#mc div.mtgoods div.p-goods div.p-name{width:190px;height:30px;background:#fff;text-indent:10px;overflow:hidden;}
		#mc div.mtgoods div.p-goods div.p-name a{display:block;width:190px;height:30px;line-height:30px;overflow:hidden;}
		#mc div.mtgoods div.p-goods div.p-price{width:190px;height:17px;background:#fff;text-indent:10px;overflow:hidden;line-height:16px;}
		#mc div.mtgoods div.p-goods div.p-review{width:190px;height:17px;background:#fff;text-indent:10px;overflow:hidden;line-height:16px;}
		
		#ml{width:990px;background:#fff;float:right;border:1px solid #bbb;position:relative;}
		#ml div.filter{width:990px;height:77px;}
		#ml div.filter div.filter1{width:990px;height:37px;background:#f1f1f1;border-top:1px solid #ddd;border-bottom:1px solid #ddd;}
		#ml div.filter div.filter1 > div{float:left;margin-top:6px }
		#ml div.filter div.filter1 div.f-sort{width:216px;height:25px;margin-left:10px;}
		#ml div.filter div.filter1 div.f-sort ul li a{display:block;padding:0px 8px 0px 8px;height:25px;float:left;line-height:25px;border:1px solid #ddd;color:#666;}
		#ml div.filter div.filter1 div.f-sort ul li a:hover{border:1px solid #ddd;text-decoration:none;}
		
		#ml div.filter div.filter1 div.f-search{width:216px;height:25px;margin-left:30px;}
		#ml div.filter div.filter1 div.f-search input.f-inp{height:20px;border:1px solid #bbb;}
		#ml div.filter div.filter1 div.f-search input.f-btn{width:40px;height:23px;margin-left:-4px;}
		#ml div.filter div.filter2{width:990px;height:38px;background:#f9f9f9;border-bottom:1px solid #ddd;}
		#ml div.plist{width:990px;background:#fff;margin-top:10px;overflow:hidden}
		#ml div.plist ul li{width:240px;height:400px;background:#fff;float:left;margin:2px;border:1px solid #fff;}

		#ml div.plist ul li:hover{border:1px solid #e4393c;}
		#ml div.plist ul li div.p-goods{width:240px;height:350px;background:#fff;}
		#ml div.plist ul li div.p-goods div.p-img{width:220px;height:220px;margin-left:10px;margin-top:10px;}
		#ml div.plist ul li div.p-goods div.p-scroll{display:none;width:220px;height:29px;margin-left:10px;margin-top:10px;background:#000;}
		#ml div.plist ul li div.p-goods div.p-commit{width:220px;height:20px;margin-left:10px;margin-top:10px;}
		#ml div.plist ul li div.p-goods div.p-price{width:220px;height:22px;margin-left:10px;margin-top:10px;}
		#ml div.plist ul li div.p-goods div.p-name{width:220px;height:20px;margin-top:10px;overflow:hidden;text-indent:10px;}
		#ml div.plist ul li div.p-goods div.p-shop{width:220px;height:18px;margin-left:10px;margin-top:10px;}
		#ml div.page{width:990px;height:30px;background:#fff;}
        .pagination{float: right;}
		.pagination li{float: left;}
		.pagination li a,.pagination li span{float:left;font-family:arial;font-size:14px;height:19px;line-height:20px;margin-left:2px;overflow:hidden;border-radius:3px;padding:4px 11px;font-weight:700;color:#005aa0;border:1px solid #ccc}
		.pagination .active span{border:none;color:#f60;}
		#ml div.filter div.filter1 div.f-sort ul li .f-order{background:#e4393c;color:#fff;border:1px solid red;}
		/*===================================浏览历史开始==================================================*/
		#review{width:1210px;height:160px;border:1px solid #bbb;margin:0px auto;}
		#review div.mt{width:1210px;height:30px;border-top:1px solid #bbb;}
		#review div.mt div.title{width:200px;height:30px;float:left;line-height:30px;text-indent:10px;}
		#review div.mt div.extra{width:80px;height:30px;float:right;line-height:30px;}
		#review div.mc{width:1210px;height:126px;}
		#review div.mc ul li{width:86px;height:112px;float:left;margin-top:5px;margin-left:5px;border:1px solid #fff;}
		#review div.mc ul li:hover{border:1px solid #bbb;}
		#review div.mc ul li div.mc-img{width:70px;height:70px;margin:5px auto;}
		#review div.mc ul li div.mc-price{width:70px;height:18px;margin:5px auto;color:#e4393c;text-align:center;}
		/*===================================浏览历史结束==================================================*/
		
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
			
    <form action="/zl_shop/index.php/List/index" id="order" method="post">
        <input type="hidden" name="order" value="<?php echo ($_POST['order']); ?>" />
    </form>
		<!--======================热卖推荐开始==============================-->
		<div id="hotsales">
			<div class="hotimg"></div>
			<div class="goods">
				<?php if(is_array($hot_goods)): foreach($hot_goods as $key=>$goods): ?><div class="hotgoods">
						<div class="goodspic"><img width="100" src="/zl_shop/Public/Uploads/goods/l_<?php echo ($goods['pic']); ?>"></div>
						<div class="goodsdescr">
							<div class="goodstitle"><a target="_blank" href="/zl_shop/index.php/Details/index/id/<?php echo ($goods['id']); ?>"><?php echo ($goods['name']); ?></a></div>
							<div class="goodsprice">特价：<?php echo ($goods['saleprice']); ?></div>
							<div class="goodsget"><a target="_blank" href="/zl_shop/index.php/Details/index/id/<?php echo ($goods['id']); ?>">立即抢购</a></div>
						</div>
					</div><?php endforeach; endif; ?>
			</div>
			<div class="activity">
				<div class="actimg"></div>
				<div class="saleactive">
					<ul>
						<?php if(is_array($news)): foreach($news as $key=>$new): ?><li>
                            ·
                            <a href="javascript:;"><?php echo ($new['title']); ?></a></li><?php endforeach; endif; ?>
					</ul>
				</div>
			</div>
		</div>
		<!--======================热卖推荐结束==============================-->
		<!--======================商品品牌分类开始==============================-->
		<div id="crumbs-nav-main">
            <?php $__FOR_START_1514__=0;$__FOR_END_1514__=count($navTypeList);for($i=$__FOR_START_1514__;$i < $__FOR_END_1514__;$i+=1){ if(count($navTypeList) > 0): if($i == 0): ?><span class="typefont"><b><?php echo ($typeList[$navTypeList[$i]]); ?></b></span>　>　
                    <?php elseif($i == count($navTypeList)-1): ?>
                    <span><?php echo ($typeList[$navTypeList[$i]]); ?></span>
                    <?php else: ?>
                    <span><?php echo ($typeList[$navTypeList[$i]]); ?></span>　>　<?php endif; ?>
                <?php else: ?>
                    <span class="typefont"><b><?php echo ($typeList[$navTypeList[$i]]); ?></b></span><?php endif; } ?>
		</div>
		<div id="s-title">
			<span style="color:red;font-size:15px;">　<?php echo ($typeList[$_GET['typeid']]); ?></span>
			<span>　商品筛选</span>　
			<span>共<?php echo ($count); ?>个商品</span>
		</div>
		<!--=========商品品牌===========-->
        <div id="searchgoods">
        <?php if(!empty($brandList)): ?><div id="goods-brands">
			<div class="sl-key"><span>　品牌：</span></div>
			<div class="sl-value">
				<ul>
                     <li><a class="subfilter <?php echo ($_GET['brandid']==''?'check':''); ?>" filter="brandid" tag="">不限</a></li>
                    <?php if(is_array($brandList)): $i = 0; $__LIST__ = $brandList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li><a class="subfilter <?php echo ($_GET['brandid']==$v['id']?'check':''); ?>" filter="brandid" tag="<?php echo ($v['id']); ?>"><?php echo ($v['name']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
			<div class="sl-ext">
				<span></span>　　
				<span></span>
			</div>
		</div><?php endif; ?>
		<div id="price">
			<div class="good-price"><span>　价格：</span></div>
			<div class="range">
				<ul>
					<li><a class="subfilter <?php echo ($_GET['price']==''?'check':''); ?>" filter="price" tag="">不限</a></li>
					<li><a class="subfilter <?php echo ($_GET['price']=='0_100'?'check':''); ?>" filter="price" tag="0_100">0-100</a></li>
					<li><a class="subfilter <?php echo ($_GET['price']=='100_300'?'check':''); ?>" filter="price" tag="100_300">100-300</a></li>
					<li><a class="subfilter <?php echo ($_GET['price']=='300_500'?'check':''); ?>" filter="price" tag="300_500">300-500</a></li>
					<li><a class="subfilter <?php echo ($_GET['price']=='500_700'?'check':''); ?>" filter="price" tag="500_700">500-700</a></li>
					<li><a class="subfilter <?php echo ($_GET['price']=='700_1000'?'check':''); ?>" filter="price" tag="700_1000">700-1000</a></li>
					<li><a class="subfilter <?php echo ($_GET['price']=='1000'?'check':''); ?>" filter="price" tag="1000">1000以上</a></li>
				</ul>
			</div>
			<div class="range-price">
				<form action="/zl_shop/index.php/List/index" method="get">
					<input type="text" name="egt" size=3 style="border:1px solid #bbb;height:20px;"> - 
					<input type="text" name="elt" size=3 style="border:1px solid #bbb;height:20px;">　
					<input type="submit" value="确定">
				</form>
			</div>
		</div>
		<div id="attrtype">
			<div class="attr"><span>　颜色：</span></div>
			<form action="/zl_shop/index.php/List/index" method="get">
            <div class="attrvalue">
				<ul>                        
                <li><a class="subfilter <?php echo ($_GET['attrid']==''?'check':''); ?>" filter="attrid" tag="">不限</a></li>
                    <?php if(is_array($attrs)): $i = 0; $__LIST__ = $attrs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$attr): $mod = ($i % 2 );++$i; if(($attr['attrname']) == "颜色"): ?><li><a class="subfilter <?php echo ($_GET['attrid']==$attr['id']?'check':''); ?>" filter="attrid" tag="<?php echo ($attr['id']); ?>"><?php echo ($attr['attrvalue']); ?></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
			<div class="attrbox">
				<a class="moreattr" href="javascript:;">更多</a>　　　
				<a class="morecheck" href="javascript:;">+ 多选</a>
				<button type="button" onclick="subAttrs()">确认</button>
			</div>
            </form>
		</div>
		<div id="hotsale">
			<div class="hot-m"><span>　尺码：</span></div>
			<div class="hot-g">
				<ul>
                <li><a class="subfilter <?php echo ($_GET['attrsizeid']==''?'check':''); ?>" href="/zl_shop/index.php/List/index/attrsizeid/">不限</a></li>
                    <?php if(is_array($attrs)): $i = 0; $__LIST__ = $attrs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$attr): $mod = ($i % 2 );++$i; if(($attr['attrname']) == "尺码"): ?><li><a class="subfilter <?php echo ($_GET['attrsizeid']==$attr['id']?'check':''); ?>" filter="attrsizeid" tag="<?php echo ($attr['id']); ?>"><?php echo ($attr['attrvalue']); ?></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
		</div>
        </div>
		<!--======================商品品牌分类结束==============================-->
		<!--======================商品列表开始==============================-->
		<div id="goodslist">
			<!--===========推荐商品=============-->
			<div id="mc">
				<div class="mt"><h3>商品推荐：</h3></div>
				<div class="mtgoods">
					<?php if(is_array($best_goods)): foreach($best_goods as $key=>$goods): ?><div class="p-goods">
							<div class="p-img"><a target="_blank" href="/zl_shop/index.php/Details/index/id/<?php echo ($goods['id']); ?>"><img width="190" src="/zl_shop/Public/Uploads/goods/<?php echo ($goods['pic']); ?>"></a></div>
							<div class="p-name"><a target="_blank" href="/zl_shop/index.php/Details/index/id/<?php echo ($goods['id']); ?>"><?php echo ($goods['name']); ?></a></div>
							<div class="p-price"><span style="color:#e4393c;font-size:15px;"><b><?php echo ($goods['saleprice']); ?></b></span></div>
							<div class="p-review"><span>共有 <a href="#"><?php echo ($goods['reviewcount']); ?></a> 个评价</span></div>
						</div><?php endforeach; endif; ?>
				</div>
			</div>
			
			<div id="ml">
				<div class="filter">
					<div class="filter1">
						<div class="f-sort">
							<ul>
								<li><a class="f-sear" sort="<?php echo ($_POST['order']=='salecount_DESC'?'salecount_ASC':'salecount_DESC'); ?>" href="javascript:">销量</a></li>
								<li><a href="javascript:" sort="<?php echo ($_POST['order']=='saleprice_DESC'?'saleprice_ASC':'saleprice_DESC'); ?>" class="f-sear f-price">价格</a></li>
								<li><a href="javascript:" sort="<?php echo ($_POST['order']=='reviewcount_DESC'?'reviewcount_ASC':'reviewcount_DESC'); ?>" class="f-sear f-review">评论数</a></li>
								<li><a href="javascript:" sort="<?php echo ($_POST['order']=='addtime_DESC'?'addtime_ASC':'addtime_DESC'); ?>" class="f-sear f-addtime">上架时间</a></li>
							</ul>
						</div>
						<!-- <div class="f-search">
							<input class="goods-search" class="f-inp" type="text" value="请输入商品关键字" name="">
							<input class="f-btn" type="submit" value="搜索">
						</div> -->
					</div>
					<div class="filter2"></div>
				</div>
				<div class="plist">
                    <?php if(empty($goodsList)): ?><strong style="display: block; width: 120px; margin: 0 auto;">没有搜索相关商品...</strong><?php endif; ?>
					<ul>
                    <?php if(is_array($goodsList)): $i = 0; $__LIST__ = $goodsList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li>
							<div class="p-goods">
								<div class="p-img"><a target="_blank" href="/zl_shop/index.php/Details/index/id/<?php echo ($v['id']); ?>"><img width="220" src="/zl_shop/Public/Uploads/goods/l_<?php echo ($v['pic']); ?>"></a></div>
								<div class="p-scroll"></div>
								<div class="p-price"><span style="color:#e4393c;font-size:18px;">￥<?php echo ($v['saleprice']); ?></span></div>
								<div class="p-name"><a target="_blank" href="/zl_shop/index.php/Details/index/id/<?php echo ($v['id']); ?>"><?php echo ($v['name']); ?></a></div>
								<div class="p-commit"><span>已有人 <a style="color:#005aa0;font-size:15px;" href="javascript:;"><?php echo ($v['reviewcount']); ?></a> 评价</span></div>
						
								<div class="p-shop"><a target="_blank" style="color:#000;" href="/zl_shop/index.php/List/index/typeid/<?php echo ($v['type_id']); ?>"><?php echo ($typeList[$v['type_id']]); ?></a><!-- <span>　京东自营</span> --></div>
							</div>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
				<div class="page"><?php echo ($page); ?></div>
				
				
			</div>
		</div>
		<!--======================商品列表结束==============================-->
		
		<!--======================浏览历史开始==============================-->
		<?php if(!empty($histories)): ?><div id="review">
			<div class="mt">
				<div class="title"><h3>最近浏览</h3></div>
				<div class="extra"><a href="#">更多浏览记录</a></div>
			</div>
			<div class="mc">
				<ul>
					<?php if(is_array($histories)): foreach($histories as $key=>$goods): ?><li>
							<div class="mc-img"><a href="/zl_shop/index.php/Details/index/id/<?php echo ($goods['id']); ?>"><img width="70" src="/zl_shop/Public/Uploads/goods/l_<?php echo ($goods['pic']); ?>"></a></div>
							<div class="mc-price"><?php echo ($goods['saleprice']); ?></div>
						</li><?php endforeach; endif; ?>
				</ul>
			</div>
		</div><?php endif; ?>
		<!--======================浏览历史结束==============================-->
		

			<!--=========================footer开始======================================-->
		
		
		<!--=========================footer结束======================================-->
		
	</body>
	<script src="/zl_shop/Public/index/js/lay.js"></script>
	
	<script type="text/javascript">
		//===============商品搜索========================
		$(".goods-search").focus(function(){
			$(this).val("");
		});
		$(".goods-search").blur(function(){
			$(this).val("请输入商品关键字");
		});
		
		<!--
        /* 颜色多选 */
        //颜色收起、展开
        $('.moreattr').toggle(function(){
            $('.attrvalue').css({'height':'auto'});
            $(this).html('收起');
        },function(){
            $('.attrvalue').css({'height':'35px'});
            $(this).html('更多');
        })
        //单选、多选
        $('.morecheck').toggle(function(){
            $(this).html('单选');
            $('.attrvalue a').removeClass('check');
            $('.subfilter').unbind("click");//去除a标签单事件
            $('.attrvalue a').attr('filter','attrid[]');
            //点击选择颜色
            $('.subfilter').toggle(function(){
                $(this).addClass('check');
                $(this).find('input').attr('checked',true);
                $('.attrbox button').css({'display':'block'});
            },function(){
                $(this).removeClass('check');
                $(this).find('input').attr('checked',false);
            })
            
        },function(){
            $('.attrvalue a').removeClass('check');
            $('.attrvalue a').attr('filter','attrid');
            $('.attrvalue a').bind("click", function(){
                selectFilter(Tag, $(this), $('.attrvalue a'));//绑定a标签单事件，触发的函数
            });
            $(this).html('+ 多选');
            $('.attrbox button').css({'display':'none'});
        })
        //提交多选条件
        function subAttrs(){
            selectFilter(Tag, $(this), $(this));
        }
        //多选条件维持
        var moreSearch = '<?php echo (json_encode($_GET['attrid'])); ?>'?<?php echo (json_encode($_GET['attrid'])); ?>:'';//获取颜色多选条件
        //如果是对象,遍历颜色,如果颜色Tag值和接收到的值相同,添加样式
        //alert(moreSearch);
        if(moreSearch && typeof(moreSearch) == 'object'){
            $('.attrvalue a').each(function(i,data){
                var index = parseInt($(data).attr('tag'));
                for(var i = 0; i < moreSearch.length; i++){
                    var tag = parseInt(moreSearch[i]);
                    if(index == tag){
                        $(this).addClass('check');
                    }
                    //alert(tag);
                }
            });
        }
        /* 商品搜索 */
        var type_id = "<?php echo ($_GET['typeid']?$_GET['typeid']:''); ?>";
        if(type_id){
            var Tag = '/zl_shop/index.php/List/index?typeid=' + type_id + '&';
        } else {
            var Tag = '/zl_shop/index.php/List/index?';//搜索跳转主链接
        }
        var keyword = '<?php echo ($_GET['keyword']); ?>';
        if(keyword){
            Tag += 'keyword=' + keyword + '&';
        }
        //品牌选择
        $('#goods-brands ul li a').click(function(){
            selectFilter(Tag, $(this), $('#goods-brands ul li a'));
        })
        //价格选择
        $('#price ul li a').click(function(){
            selectFilter(Tag, $(this), $('#price ul li a'));
        });
        //颜色选择
        $('.attrvalue a').click(function(){
            selectFilter(Tag, $(this), $('.attrvalue a'));
        })

        //尺码选择
        $('#hotsale ul li a').click(function(){
            selectFilter(Tag, $(this), $('#hotsale ul li a'));
        });
        //选择函数
        function selectFilter(Tag, obj, reclass){
            reclass.removeClass('check');
            obj.addClass('check');
            $('.check').each(function(i, data){
                if($(data).attr('tag')){
                    Tag += $(data).attr('filter') + '=' + $(data).attr('tag') + '&';
                }
            })
            //window.location.href= Tag;
            $('#order').attr('action',Tag);//维持排序状态，并提交搜索条件
            $('#order').submit();
        }
        /* 商品搜索 */
        //排序
        $(".f-sear").click(function(){
            $(this).parent().siblings().children().removeClass('f-order');
			$(this).addClass('f-order');
            var sort = $(this).attr('sort');
            $('#order input[name=order]').val(sort);
            $('#order').attr('action',window.location.href);
            $('#order').submit();
        });
        //状态维持
        var state = '<?php echo ($_POST['order']); ?>';
        if(state == 'salecount_DESC'){
            state = 'salecount_ASC';
        } else if (state == 'salecount_ASC'){
            state = 'salecount_DESC';
        }
        if(state == 'saleprice_DESC'){
            state = 'saleprice_ASC';
        } else if (state == 'saleprice_ASC'){
            state = 'saleprice_DESC';
        }
        if(state == 'addtime_DESC'){
            state = 'addtime_ASC';
        } else if (state == 'addtime_ASC'){
            state = 'addtime_DESC';
        }
        if(state == 'reviewcount_DESC'){
            state = 'reviewcount_ASC';
        } else if (state == 'reviewcount_ASC'){
            state = 'reviewcount_DESC';
        }
        $(".f-sear").each(function(i,data){
            if($(data).attr('sort') == state){
                $(data).addClass('f-order');
            }
        });
        //上一页下一页维持排序状态
        $('.num').click(function(){
            $('#order').attr('action', $(this).attr('href'));
            $('#order').submit();
            return false;
        });
        $('.prev').click(function(){
            $('#order').attr('action', $(this).attr('href'));
            $('#order').submit();
            return false;
        });
        $('.next').click(function(){
            $('#order').attr('action', $(this).attr('href'));
            $('#order').submit();
            return false;
        });
        -->
	</script>
	

</html>