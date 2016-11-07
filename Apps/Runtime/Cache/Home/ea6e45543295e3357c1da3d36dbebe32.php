<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" type="text/html">
		<title><?php W('market/index');?></title>
		<link type="text/css" rel="stylesheet" href="/zl_shop/Public/index/css/lay.css">
		
	<style type="text/css">
		#container{width:1349px;margin-top:10px;}
		#content{width:990px;margin:0px auto;}
		#content div.wt{width:990px;height:35px;background:#fff;line-height:35px;text-indent:10px;color:#e4393c;font-size:18px;}
		#content div.wt_nav{width:990px;height:35px;;line-height:35px;text-indent:10px;border-bottom:1px solid #ddd;border-top:1px solid #ddd;}
		#content div.wt_nav > div{width:495px;height:35px;background:#f7f7f7;line-height:35px;text-indent:10px;float:left;}
		#content div.wt_nav div.l_nav ul li{width:150px;height:35px;line-height:35px;text-align:center;float:left;}
		#content div.wt_nav div.r_nav ul li{width:120px;height:35px;line-height:35px;text-align:center;float:left;}
		#car_goods{width:990px;background:#666;}
		#car_goods div.goods_list{width:990px;height:120px;background:#fff;border-bottom:1px solid #ddd;}
		#car_goods div.goods_list > div{float:left;}
		#car_goods div.goods_list div.g_check{width:50px;height:120px;line-height:100px;text-align:center;}
		#car_goods div.goods_list div.g_img{width:350px;height:120px;}
		#car_goods div.goods_list div.g_img > div{float:left;}
		#car_goods div.goods_list div.g_img div.img{width:80px;height:80px;margin-top:10px;}
		#car_goods div.goods_list div.g_img div.goodsname{width:240px;height:80px;margin-left:10px;margin-top:10px;}
		#car_goods div.goods_list div.g_attr{width:130px;height:120px;line-height:40px;}
		#car_goods div.goods_list div.g_price{width:100px;height:120px;line-height:40px;}
		#car_goods div.goods_list div.g_num{width:150px;height:120px;line-height:40px;}
		#car_goods div.goods_list div.g_num div.g_num_box{width:100px;height:30px;line-height:40px;margin-top:10px;}
		#car_goods div.goods_list div.g_num div.g_num_box > div{float:left;}
		#car_goods div.goods_list div.g_num div.g_num_box div.inp{width:36px;height:30px;line-height:30px;text-align:center;}

		
		#car_goods div.goods_list div.g_total{width:130px;height:120px;line-height:40px;}
		#car_goods div.goods_list div.g_handle{width:80px;height:120px;line-height:40px;}
		
		/*===================固定底栏======================*/
		#option_box{width:990px;height:40px;background:#000;position:fixed;bottom:0px;left:180px;}
		#option_box div.l_box{width:400px;height:50px;float:left;line-height:40px;}
		
		#option_box div.r_box{width:590px;height:50px;float:right;}
		#option_box div.r_box > div{float:left;}
		#option_box div.r_box div.r_price{width:390px;height:50px;}
		#option_box div.r_box div.r_price > div{float:left;width:195px;height:50px;line-height:40px;text-align:center;}
		#option_box div.r_box div.r_sub{width:200px;height:50px;background:#e4393c;}
		#option_box div.r_box div.r_sub a{display:block;width:200px;height:50px;background:#e4393c;line-height:40px;text-align:center;font-size:24px;color:#fff;}
	    
		
		/*====================地址开始===============================*/
		#address_top{width:990px;height:35px;background:#fff;margin:10px auto;border-top:1px solid #fff;}
		#address_top > div{width:200px;height:35px;line-height:35px;}
		#address{width:990px;background:#fff;margin:10px auto;margin-top:-10px;;border:1px solid #ddd;}
		#address ul{width:950px;margin:0px auto;}
		#address ul li{width:950px;height:35px;margin:10px auto;}
		#address ul li > div{float:left;}
		#address ul li div.name_address{width:190px;height:33px;background:#f7f7f7;border:1px solid #ddd;line-height:35px;text-indent:30px; }

		
		#address ul li div.details_address{width750px;height:35px;background:#f7f7f7;line-height:35px;text-indent:10px;}
		#address ul li div.details_address div.u_d_p{width:540px;height:35px;line-height:35px;text-indent:10px;}
		#address ul li div.details_address > div{float:left}
		#address ul li div.details_address:hover{background:#ffd3d3;}
		.edit_address{width:200px;height:35px;line-height:35px;text-indent:10px;float;right;}
		.edit_address a{color:#f7f7f7}
		.edit_address a:hover{color:#e4393c}
		#address div.adds_box{width:990px;height:35px;background:#fff;line-height:35px;text-indent:25px;}
		.show_hide{display:none;}
		/*====================地址结束===============================*/
		
		/*====================添加地址弹出框=========================*/
		#add_address_box{display:none;width:600px;border:1px solid #ddd;position:fixed;top:100px;left:350px;background:#f7f7f7;z-index:9999;}
		#add_address_box div.box{width:550px;margin:0px auto;}
		#add_address_box div.box div.box_top{width:550px;height:50px;line-height:70px;text-indent:10px;font-size:18px;color:#e4393c;border-bottom:2px solid #e4393c}
		#add_address_box div.box div.box_foot{width:550px;height:50px;margin-top:50px;}
		
		#add_address_box div.box ul{width:550px;}
		
		#add_address_box div.box ul li{width:550px;height:50px;border:1px solid #f7f7f7;margin-top:5px;line-height:50px;text-indent:50px;;}
		#add_address_box div.box ul li span{color:#e4393c}
		.box_inp{width:350px;height:30px;border:1px solid #ddd;}
	    .box_btn{width:120px;height:35px;border:1px solid #e4393c;float:right;font-size:18px;color:#fff;background:#e4393c;line-height:35px;text-align:center;cursor:pointer;}
		.close_btn{width:25px;height:25px;background:#f7f7f7;float:right;line-height:25px;text-align:center;font-size:22px;color:#aaa;cursor:pointer}
		.close_btn:hover{width:25px;height:25px;background:#e4393c;float:right;line-height:25px;text-align:center;font-size:22px;color:#fff}
		
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
			
	<!--=============添加地址弹出框=================-->
	<div id="add_address_box">
		<div class="close_btn">╳</div>
		<div class="box">
			
			<form id="add_address" action="" method="">
			<div class="box_top">添加收货人地址 >>> </div>
			<ul>
				<li><span>*</span>　姓　名：<input class="box_inp" type="text" name="linkman" ></li>
				<li><span>*</span>　电　话：<input class="box_inp" type="text" name="phone" ></li>
				<li><span>*</span>　邮　编：<input class="box_inp" type="text" name="code" ></li>
				<li><span>*</span>　地　址：<?php echo ($city); ?></li>
				<li><span>*</span>　详细地址：<input class="box_inp" type="text" name="address2" ></li>
			</ul>
			<div class="box_foot"><div class="box_btn">提　交</div></div>
			</form>
		</div>
	</div>
	
	<!--=========主体部分================-->
	<div id="container">
		<!--===================地址开始===========================-->
		<div id="address_top">
			<div style="float:left;text-indent:10px;font-size:18px;color:#e4393c;">填写并核对订单信息</div>
			<div style="float:right;text-align:center;font-size:18px;"><a id="new_address" style="color:#e4393c" href="javascript:">添加新地址</a></div>
		</div>
		<div id="address">
			<ul>
				<!--=======默认地址=======-->
				<li>
					<div class="name_address"  style="border:1px solid #e4393c"><input type="radio" style="visibility:hidden"  checked name="address" value="<?php echo ($main_add['id']); ?>"><span><?php echo ($main_add['linkman']); ?></span>　<span style="color:#e4393c">（默认地址）</span></div>
					<div class="details_address">
						<div class="u_d_p">
						<span><?php echo ($main_add['linkman']); ?></span>　　
						<span class="d_address"><?php echo (implode(explode("#",$main_add['address'])," ")); ?></span>　　
						<span><?php echo ($main_add['phone']); ?></span>
						</div>
						<div class="edit_address">
						</div>
						<input type="hidden" name="" value="<?php echo ($main_add['ismain']); ?>">
					</div>
				</li>
				
				<?php if(is_array($adds)): foreach($adds as $key=>$add): ?><li class="adds show_hide">
						<div class="name_address"><input style="visibility:hidden"  type="radio" name="address" value="<?php echo ($add['id']); ?>"><span><?php echo ($add['linkman']); ?></span></div>
						<div class="details_address">
							<div class="u_d_p">
							<span class="linkman"><?php echo ($add['linkman']); ?></span>　　
							<span class="d_address"><?php echo (implode(explode("#",$add['address'])," ")); ?></span>　　
							<span class="phone"><?php echo ($add['phone']); ?></span>
							</div>
							<div class="edit_address">
								<a class="edit_main_address" href="/zl_shop/index.php/Car/edit_address/address_id/<?php echo ($add['id']); ?>">设为默认地址</a>　　
							　
								<a class="del_address" href="/zl_shop/index.php/Car/del_address/address_id/<?php echo ($add['id']); ?>">删除</a>
							</div>
							<input type="hidden" name="" value="<?php echo ($add['ismain']); ?>">
						</div>
					</li><?php endforeach; endif; ?>
			
			</ul>
			<div class="adds_box"><a class="adds_btn" href="javascript:">更多地址 ...</a></div>
		</div>
		
		
		<!--===================地址结束===========================-->
		<div id="content">
			<div class="wt">全部商品</div>
			<div class="wt_nav">
				<div class="l_nav">
					<ul>
						<li>商品</li>
					</ul>
				</div>
				<div class="r_nav">
					<ul>
						<li>单价(元)</li>
						<li>数量</li>
						<li>小计</li>
						<li>有/无货</li>
					</ul>
				</div>
			</div>
			<div id="car_goods">
				<?php if(is_array($orders)): foreach($orders as $key=>$order): ?><div class="goods_list">
						<div class="g_check">
						</div>
						<div class="g_img">
							<div class="img"><img width="80" src="<?php echo ($order['goods_pic']); ?>"></div>
							<div class="goodsname"><span><?php echo ($order['goods_name']); ?></span></div>
						</div>
						<div class="g_attr">
							<p>颜色：<span class="c1"><?php echo ($order['goods_color']); ?></span></p>
							<p>尺码：<span class="c2"><?php echo ($order['goods_size']); ?></span></p>
						</div>
						<div class="g_price">
							<p><span class="goods_price" style="margin-left:10px;"><?php echo ($order['goods_price']); ?></span></p>
						</div>
						<div class="g_num">
							<div class="g_num_box">
								<input type="hidden" name="car_id" class="car_id" value="<?php echo ($g['car_id']); ?>">
								
								<div class="inp" style="margin-left:32px;"><?php echo ($order['goods_num']); ?></div>
								
							</div>
						</div>
						<div class="g_total">
							<p><span style="margin-left:10px;"><?php echo ($order['goods_price'] * $order['goods_num']); ?></span></p>
						</div>
						<div class="g_handle">
							<p>有货</p>
						</div>
					</div><?php endforeach; endif; ?>
			</div>
			<div id="option_box">
				<div class="r_box">
					<div class="r_price">
						<div>已选择 <span class="total_num" style="color:#e4393c">0</span> 件商品</div>
						<div>总价（不含运费）<span class="total_price" style="color:#e4393c;font-size:15px;"><?php echo W('Car/car_total');?></span></div>
					</div> 
					<div class="r_sub"><a class="settle_btn" href="javascript:">提 交 订 单</a></div>
				</div>
			</div>
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
        $('.del_address').click(function(){
            if(!confirm('确认删除此地址?')){
                return false;
            }
        });
		//选择发货地址
		$(".name_address").click(function(){
			if($(this).children("input").attr("checked")){
				//$(this).children("input").attr("checked",false);
			   // $(this).css("border","1px solid #ddd");
			}else{
				$(".name_address").children("input").attr("checked",false);
				$(this).children("input").attr("checked",true);
				$(".name_address").css("border","1px solid #ddd");
				$(this).css("border","1px solid #e4393c");
			}
		});
		
		
		//弹出添加地址框
		$("#new_address").click(function(){
				//alert(1);
		    $("#add_address_box").css("display","block");
		});
		//关闭按钮
		$(".close_btn").click(function(){
			$("#add_address_box").css("display","none");
		});
		//提交数据
		$(".box_btn").click(function(){
			var address_data = $("#add_address").serialize();
			$.ajax({
				url:"/zl_shop/index.php/Car/add_address",
			    type:"post",
				dataType:"json",
				async:true,
				data:address_data,
				success:function(data){
					//alert(data);
				    if(data==1){
						alert("添加成功！");
						$("#add_address_box").css("display","none");
					}else{
						alert("添加失败！");
					}
				}
			});
		});
		
		
		
		
		
		
		
		//======多地址显示、隐藏=========
		$(".adds_btn").click(function(){
			$(".adds").slideToggle(10);
		});
		
		//==========选中地址============
		$(".settle_btn").click(function(){
			var address_id = $(".name_address input:checked").val();  //获取地址 id
			//alert(address_id);
			$.ajax({
				url:"/zl_shop/index.php/Car/add_order",
				type:"post",
				async:true,
				dataType:"json",
				data:{"address_id":address_id},
				success:function(data){
					//alert(data);
					if(data==1){
						window.location.href = "/zl_shop/index.php/Order/index";
					}else{
						
					}
					
				}
			});
		});
	</script>

</html>