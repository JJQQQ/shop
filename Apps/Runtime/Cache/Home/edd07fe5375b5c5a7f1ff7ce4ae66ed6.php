<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" type="text/html">
		<title><?php W('market/index');?></title>
		<link type="text/css" rel="stylesheet" href="/zl_shop/Public/index/css/lay.css">
		
	<style type="text/css">
		/*==================评价框======================*/
		.review_box{display:none;position:fixed;top:40px;left:350px;width:600px;height:450px;background:#f7f7f7;border:1px solid #ddd;}
		.review_box div.box{width:600px;height:390px;background:#f7f7f7;margin:0px auto}
		.review_box div.box div.box_top{width:600px;height:40px;background:#e4393c;line-height:40px;border-bottom:1px solid #ddd;color:#fff;font-size:16px;text-indent:10px;}
		.review_box div.box div.box_star{width:500px;height:40px;background:#f7f7f7;line-height:40px;border-bottom:1px solid #ddd;}
	    .review_box div.box div.box_star div.star1{float:left;width:100px;height:40px;background:#f7f7f7;line-height:40px;text-align:center;}
		.review_box div.box div.box_star div.star2{float:right;width:400px;height:40px;background:#ff7f7f7;line-height:40px;}
		.review_box div.box div.box_star div.star2 > div{cursor:pointer;float:left;width:50px;border:1px solid #bbb;height:30px;line-height:30px;margin-left:10px;margin-top:5px;}
		.review_box div.box div.box_star div.star2 > div input{visibility:hidden;}
		.review_box div.box div.box_content{width:500px;height:140px;margin-top:5px;background:#f7f7f7;border-bottom:1px solid #ddd;}
		.review_box div.box div.box_content div.content1{float:left;width:100px;height:140px;background:#f7f7f7;text-align:center;}
	    .review_box div.box div.box_content div.content2{float:right;width:400px;height:140px;background:#f7f7f7;}
		.review_box div.box div.box_pic{width:500px;height:140px;background:#f7f7f7;margin-top:5px;}
		.review_box div.box div.box_pic div.pic1 {float:left;width:100px;height:140px;background:#f7f7f7;text-align:center;}
		.review_box div.box div.box_pic div.pic2 {float:right;width:400px;height:140px;}
		.review_box div.box div.box_pic div.pic2 div.pic21 {float:left;width:200px;height:140px;}
		.review_box div.box div.box_pic div.pic2 div.pic22 {float:right;width:400px;height:140px;}
		.review_box div.box div.box_foot{width:600px;height:40px;background:#f7f7f7;margin-top:35px;}
		.review_box div.box div.box_foot button{border:0px;float:right;width:100px;height:30px;background:#e4393c;margin-top:5px;line-height:30px;text-align:center;color:#fff;font-size:15px;margin-right:10px;}
		.star_num > div{float:left;width:60px;height:100%;background:red;}
		.re_close_btn{width:25px;height:25px;border:1px solid #e4393b;float:right;font-size:16px;line-height:25px;text-align:center;}
		.re_close_btn:hover{border:1px solid #e4393c;background:#e4393c;color:#fff;cursor:pointer}
		
		#contain{width:990px;margin:10px auto;border:1px solid #ddd;}
		#contain div.review_top{width:990px;height:30px;background:#f7f7f7;border-bottom:1px solid #ddd;}
		#contain div.review_top > div{float:left;line-height:30px;text-align:center;}
		#contain div.review_top div.goods_name{width:400px;height:30px;}
		#contain div.review_top div.goods_time{width:300px;height:30px;}
		#contain div.review_top div.goods_review{width:290px;height:30px;b}
		#contain div.review_top div.after_sale{width:190px;height:30px;b}
		#contain div.goods_list{width:800px;background:red}
		#contain div.goods_list div.goods_info{width:990px;height:120px;background:#fff;border-bottom:1px solid #ddd}
		#contain div.goods_list div.goods_info > div{float:left;line-height:120px;}
		#contain div.goods_list div.goods_info div.info_name{width:400px;height:120px;}
		#contain div.goods_list div.goods_info div.info_name > div{float:left;margin-left:10px;margin-top:10px;}
		#contain div.goods_list div.goods_info div.info_name div.goods_img{width:100px;height:100px;}
		#contain div.goods_list div.goods_info div.info_name div.goods_name{width:260px;height:100px;line-height:18px;}
		#contain div.goods_list div.goods_info div.info_time{width:300px;height:120px;text-align:center;}
		#contain div.goods_list div.goods_info div.info_time a{color:#e4393c}
		#contain div.goods_list div.goods_info div.info_review{width:290px;height:120px;text-align:center;}
		#contain div.goods_list div.goods_info div.info_review a{color:#e4393c}

		
		/*================订单信息=======================*/
		
		
		
		
		/*================申请售后弹出框===========================*/
		#after_sale_box{display:none;width:600px;height:400px;border:1px solid #bbb;position:fixed;top:100px;left:350px;background:#f7f7f7}
		#after_sale_box div.sale_box_top{width:600px;height:40px;border-bottom:1px solid #bbbstyle="visibility:hidden";background:#f2f2f2}
		#after_sale_box div.sale_box_top > div{float:left;}
		#after_sale_box div.sale_box_top div.top_left{width:400px;height:40px;}
		#after_sale_box div.sale_box_top div.top_left > div{width:100px;height:28px;background:#f2f2f2;border:1px solid #aaa;float:left;margin-top:11px;margin-left:10px;line-height:28px;text-indent:20px;cursor:pointer;}
		#after_sale_box div.sale_box_top div.top_right{width:25px;height:25px;border:1px solid #aaa;background:#f2f2f2;float:right;line-height:25px;text-align:center;font-size:16px;color:#aaa;}
		#after_sale_box div.sale_box_top div.top_right:hover{background:#e4393c;color:#fff;border:1px solid #e4393c;cursor:pointer}
		#after_sale_box div.sale_content{width:600px;height:320px;background:#f7f7f7;margin-top:5px;}
		#after_sale_box div.sale_content div.content_head{width:600px;height:50px;background:#f7f7f7;margin-top:5px;border-bottom:1px solid #ddd;line-height:70px;text-indent:10px;font-size:14px;color:#e4393c}
		#after_sale_box div.sale_btn{width:600px;height:30px;background:#f2f2f2;margin-top:5px;}
		#after_sale_box div.sale_btn button{width:120px;height:30px;background:#e4393c;color:#fff;float:right;border:0px;cursor:pointer;}
	</style>

		
		<script src="/zl_shop/Public/js/jquery.js"></script>
	</head>
	<body>
		<!--======================头部公共部分开始==============================-->
		<div id="shortcut">
			<div class="w">
				
				<ul class="fleft">
					<li class="star"></li>
					<li><a href="#">收藏京东</a></li>
				</ul>
				<ul class="fright">
					
						<?php if($v = session('username')): ?><li><a href="/zl_shop/index.php/User/index"><?php echo ($v); ?></a></li><li>
								<a href="/zl_shop/index.php/login/logout">退出登录</a></li>
						
						<?php else: ?> <li><a href="/zl_shop/index.php/Login/login">请登录</a></li>
								<li><a href="/zl_shop/index.php/Reg/index">快速注册</a></li><?php endif; ?>
					
					
					<li><a href="/zl_shop/index.php/order/index">我的订单</a></li>
					<li><a href="#">京东会员</a></li>
					<li><a href="#">手机京东</a></li>
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
			
	<!--=============================评价弹出框==========================================-->
	<div class="review_box">
	        <div class="re_close_btn">╳</div>
		<form action="/zl_shop/index.php/Review/add_review" method="post" enctype="multipart/form-data">
			<input class="g_id" type="hidden" name="goods_id" value=""><!--=========商品id===========-->
			<input class="g_name" type="hidden" name="goods_name" value=""><!--=========商品id===========-->
			<input class="d_id" type="hidden" name="detail_id" value=""><!--=========订单详情id===========-->
			<div class="box">
			 <!--=============评分=================-->
				<div class="box_top">商品评价</div>
				<div class="box_star">
					<div class="star1">评分：</div>
					<div class="star2">
						<div class="star3"><input type="radio" name="star" value="1">1分</div>
						<div class="star3"><input type="radio" name="star" value="2">2分</div>
						<div class="star3"><input type="radio" name="star" value="3">3分</div>
						<div class="star3"><input type="radio" name="star" value="4">4分</div>
						<div class="star3"><input type="radio" name="star" value="5">5分</div>
					</div>
				</div>
				<!--=============评价内容=================-->
				<div class="box_content">
					<div class="content1">内容：</div>
					<div class="content2"><textarea name="message" style="width:400px;height:120px;"></textarea></div>
				</div>
				<!--=============图片=================-->
				<div class="box_pic">
					<div class="pic1">晒图：</div>
					<div class="pic2">
						<div class="pic21"><input type="file" name="goods_pic"></div>
						<div class="pic22"></div>
					</div>
				</div>
				<!--=============发表=================-->
				<div class="box_foot">
					<button type="submit">提交</button>
				</div>
			</div>
		</form>
	</div>
<!--========================订单商品列表=============================-->
	<div id="order_content"></div>
<div id="contain">
	
	<div class="review_top">
		<div class="goods_name">商品信息</div>
		<div class="goods_time">商品状态</div>
		<div class="goods_review">评价状态</div>

	</div>
	
	<?php if(is_array($data)): foreach($data as $key=>$goods): ?><div class="goods_list">
			<!--隐藏商品id,方便获取-->
			<input class="s_g_id" type="hidden" name="" value="<?php echo ($goods['goods_id']); ?>">
			<input class="s_detail_id"type="hidden" name="" value="<?php echo ($goods['id']); ?>">
			<div class="goods_info">
				<div class="info_name">
					<div class="goods_img"><img width="100" src="<?php echo ($goods['showimg']); ?>"></div>
					<div class="goods_name">
					<p class="name"><?php echo ($goods['goods_name']); ?></p>
					<p>单　价：<?php echo ($goods['price']); ?></p>
					<p>数　量：<?php echo ($goods['num']); ?></p>
					<p>时　间：<?php echo (date('Y-m-d H:i:s',$order['addtime'])); ?></p>
			
					</div>
				</div>
				<input class="order_detail_id" type="hidden" name="" value="<?php echo ($goods['id']); ?>"><!--====订单详情id=====-->
				<div class="info_time">
				
					<?php if($goods['state'] == 1): ?>未发货 | <a href="/zl_shop/index.php/Review/order_state/id/<?php echo ($goods['id']); ?>/aa/1">提醒发货</a>
					<?php elseif($goods['state'] == 2): ?>未发货 | 已提醒发货
					<?php elseif($goods['state'] == 3): ?>已发货 | <a href="/zl_shop/index.php/Review/order_state/id/<?php echo ($goods['id']); ?>/aa/3">确认收货</a>
					<?php elseif($goods['state'] == 4): ?>已完成 | <a class="apply_sale" href="javascript:">申请售后</a>
					<?php elseif($goods['state'] == 5): ?>申请退货中 | <a  href="/zl_shop/index.php/Review/order_state/id/<?php echo ($goods['id']); ?>/aa/5">取消</a>
					<?php elseif($goods['state'] == 6): ?>退货已完成
					<?php elseif($goods['state'] == 7): ?>申请换货中 | <a href="#">取消</a>
					<?php elseif($goods['state'] == 8): ?>换货已完成
					<?php elseif($goods['state'] == 9): ?>申请保修中 | <a href="#">取消</a>
					<?php elseif($goods['state'] == 10): ?>保修完成
					<?php else: endif; ?>
				
				</div>
				<div class="info_review">
					<?php if($goods['isreview'] == 1): ?><a class="review_btn"  href="javascript:">评价商品</a>
					<?php else: ?>已评价 | <a class="review_btn"  href="javascript:">追加评价</a><?php endif; ?>
				</div>
				
			
			</div>
		</div><?php endforeach; endif; ?>
	
	<!--==================================售后弹出框=======================================-->
	<div id="after_sale_box">
		<form action="/zl_shop/index.php/Review/order_state" method="get">
			
			<input type="hidden" name="order_detail_id" class="form_detail_id" value="">
			<input type="hidden" name="aa" value="4">
			<div class="sale_box_top">
				<div class="top_left">
					<div style="border:1px solid #e4393c;color:#e4393c" class="t_goods top_left_check"><input style="visibility:hidden" checked type="radio" name="sl" value="1">退货</div>
					<div class="h_goods top_left_check"><input style="visibility:hidden" type="radio" name="sl" value="2">换货</div>
					<div class="b_goods top_left_check"><input style="visibility:hidden" type="radio" name="sl" value="3">保修</div>
				</div>
				<div  class="top_right">╳</div>
				
				
				<div class="sale_content">
					<div class="content_head">请说明原因：</div>
					<div class="content_main"><textarea style="width:550px;height:100px;margin-top:10px;margin-left:20px;"></textarea></div>
				</div>
				
				
				<div class="sale_btn"><button>提 交</button></div>
			</div>
		</form>
	</div>
</div>

			<!--=========================footer开始======================================-->
		<div id="footer">
            <div class="w">
			<div class="footer-m">
				<ul>
				     
					<?php echo W('Links/index');?>
				</ul>
			</div>
            </div>
			<div class="footer-g" style="clear:both">
				<ul>
					<li><a href="#">北京市公安局朝阳分局备案编号110105014669</a></li>
					
					<li><a href="#">出版物经营许可证编号新出发(苏)批字第N-012号 </a></li>
					<li><a href="#"> 互联网出版许可证编号新出网证(京)字150号</a></li>
					<li><a href="#">Copyright © 2004-2015  京东JD.com 版权所有</a></li>
					<li><a href="#">京ICP证070359号</a>　电话:<?php W('market/dex');?> </li>
				</ul>
			</div>
			<div class="footer-k">
				<ul>
					<li><a href="#"><a href="#"><img src="/zl_shop/Public/index/images/108_40_zZOKnl.gif"></a></a></li>
					<li><a href="#"><a href="#"><img src="/zl_shop/Public/index/images/112_40_WvArIl.png"></a></a></li>
					<li><a href="#"><a href="#"><img src="/zl_shop/Public/index/images/rBEIDE_nzcIIAAAAAAB30mYXo5QAACrhACj22IAAHfq378.png"></a></a></li>
				</ul>
			</div>
		
		</div>
		
		<!--=========================footer结束======================================-->
		
	</body>
	<script src="/zl_shop/Public/index/js/lay.js"></script>
	
	<script type="text/javascript">
		
		$(".top_left_check").click(function(){
			var aa = $(this).children("input").attr("checked");
			if(!aa){
				$(this).children("input").attr("checked",true);
				$(".top_left_check").css({"border":"1px solid #bbb","color":"#666"});
				$(this).css({"border":"1px solid #e4393c","color":"#e4393c"});
			}
		
		});
		
		
		
		
		
		
		
		
		
		
		//=================s申请售后=========================
		$(".apply_sale").click(function(){
			var a = $(this).parents(".info_time").siblings(".order_detail_id").val();
			$(".form_detail_id").val(a);
		    $("#after_sale_box").css("display","block");
		});
		
		///==========关闭按钮============
		$(".top_right").click(function(){
			$("#after_sale_box").css("display","none");
		});
		
		
		
		
		$(".review_btn").click(function(){
			$(".review_box").css("display","block");
			//获取商品id
			var goods_id = $(this).parents(".goods_info").siblings(".s_g_id").val()
			//alert(goods_id)
			//获取订单详情id
			var detail_id = $(this).parents(".goods_info").siblings(".s_detail_id").val()
			
			//获取商品名字
			var goods_name = $(this).parent().siblings(".info_name").children(".goods_name").children(".name").html();
			
			//将获取到的值添加到表单中
			$(".g_id").val(goods_id);
			$(".d_id").val(detail_id);
			$(".g_name").val(goods_name);
		});
	
		$(".re_close_btn").click(function(){
			$(".review_box").css("display","none");
		});
	    
		
		$(".star3").click(function(){
			if(!$(this).children("input").attr("checked")){
				$(this).children("input").attr("checked",true);
				$(".star3").css("border","1px solid #bbb");
				$(".star3").css("background","#f2f2f2");
				$(".star3").css("color","#555");
				$(this).css("color","#fff");
				$(this).css("background","#e4393c");
				$(this).css("border","1px solid #e4393c");
			}
		
		});
	</script>

</html>