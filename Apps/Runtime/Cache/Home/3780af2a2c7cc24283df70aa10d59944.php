<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" type="text/html">
		<title>商城</title>
		<link type="text/css" rel="stylesheet" href="/zl_shop/Public/index/css/lay.css">
		
	<style type="text/css">
		#container{width:1349px;margin-top:10px;}
		#content{width:990px;margin:0px auto;}
		#content div.wt{width:990px;height:35px;background:#fff;line-height:35px;text-indent:10px;color:#e4393c;font-size:18px;}
		#content div.wt_nav{width:990px;height:35px;;line-height:35px;text-indent:10px;border-top:1px solid #ddd;border-bottom:1px solid #ddd;}
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
		#car_goods div.goods_list div.g_num div.g_num_box div.desc{width:28px;height:30px;border:1px solid #ccc;line-height:30px;text-align:center;font-size:20px;cursor:pointer;}
		#car_goods div.goods_list div.g_num div.g_num_box div.inp{width:36px;height:30px;border:1px solid #ccc;line-height:30px;text-align:center;}
		#car_goods div.goods_list div.g_num div.g_num_box div.add{width:28px;height:30px;border:1px solid #ccc;line-height:30px;text-align:center;font-size:20px;cursor:pointer;}
		
		#car_goods div.goods_list div.g_total{width:130px;height:120px;line-height:40px;}
		#car_goods div.goods_list div.g_handle{width:80px;height:120px;line-height:40px;}
		
		/*===================固定底栏======================*/
		#option_box{width:990px;height:40px;background:#000;position:fixed;bottom:0px;left:180px;}
		#option_box div.l_box{width:400px;height:50px;float:left;line-height:40px;text-indent:15px;}
		
		#option_box div.r_box{width:590px;height:50px;float:right;}
		#option_box div.r_box > div{float:left;}
		#option_box div.r_box div.r_price{width:390px;height:50px;}
		#option_box div.r_box div.r_price > div{float:left;width:195px;height:50px;line-height:40px;text-align:center;}
		#option_box div.r_box div.r_sub{width:200px;height:50px;background:#e4393c;}
		#option_box div.r_box div.r_sub a{display:block;width:200px;height:50px;background:#e4393c;line-height:40px;text-align:center;font-size:24px;color:#fff;}
	
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
			
	<!--=========主体部分================-->
	<div id="container">
		<div id="content">
			<div class="wt">全部商品（<?php echo W('Car/car_num');?>）</div>
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
						<li>操作</li>
					</ul>
				</div>
			</div>
			<div id="car_goods">
				
				<?php echo W('Car/my_car');?>
				
		
			
			</div>
			<div id="option_box">
				<div class="l_box">
					<span><input class="all_check" type="checkbox" name="" value="">全选</span>　　　
					<span><a href="#">删除选中的商品</a></span>
				</div>
				<div class="r_box">
					<div class="r_price">
						<div>已选择 <span class="total_num" style="color:#e4393c">0</span> 件商品</div>
						<div>总价（不含运费）<span class="total_price" style="color:#e4393c;font-size:15px;">0.00</span></div>
					</div>
					<div class="r_sub"><a class="r_sub_btn" href="javascript:">去 结 算</a></div>
				</div>
			</div>
		</div>
	</div>

	

			<!--=========================footer开始======================================-->
		
		
		<!--=========================footer结束======================================-->
		
	</body>
	<script src="/zl_shop/Public/index/js/lay.js"></script>
	
	<script type="text/javascript">
		//============按钮“去结算”事件==================
		$(".r_sub_btn").click(function(){
			//alert(1);
			var get_checked = $(".box_check:checked");
			var len = get_checked.length;
			//alert(get_checked.length);
			if(len){
				window.location.href = "/zl_shop/index.php/Car/order";
			}else{
				alert("请选择商品！");
			}
		});
		
		
		//商品全选
		$(".all_check").click(function(){
			//alert($(this).attr("checked"));
			if($(this).attr("checked")){
				$(".box_check").attr("checked",true);
				var g_total = $(".g_total").find('span');
				var len = g_total.length;
				var total_price = 0;
				//var a = g_total..get(0).innerHTML;
				//alert(a);
				for(var i=0 ;i < len ; i++){
					total_price +=  parseInt(g_total.get(i).innerHTML);
				}
				$(".total_price").html(total_price);
				$(".total_num").html(len);
			}else{
				$(".box_check").attr("checked",false);
				$(".total_price").html(0); 
				$(".total_num").html(0);
			}
		});
		
		//将选中的商品添加到session中，用的时候从session中拿数据
		$(".box_check").click(function(){
			//如果选中
			if($(this).attr("checked")){
				//====将商品数据添加到session中=====
				//获取商品信息
				
				var goods_id = $(this).parent().siblings(".goods_id").val();
				//alert(goods_id);
				var goods_pic = $(this).parent().siblings(".g_img").find("img").attr("src");
				var goods_name = $(this).parent().siblings(".g_img").find("span").html();
				//alert(goods_name);
				
				var goods_price = $(this).parent().siblings(".g_price").find("span").html();
				var goods_color = $(this).parent().siblings(".g_attr").find(".c1").html();
				var goods_size = $(this).parent().siblings(".g_attr").find(".c2").html();
				var goods_total = $(this).parent().siblings(".g_total").find("span").html();
				var goods_num = $(this).parent().siblings(".g_num").find(".buy-num").val();
				var car_id = $(this).next().val();
				
				//定义一个json数组
				json_data = {'goods_id':goods_id,'goods_pic':goods_pic,'car_id':car_id,'goods_name':goods_name,'goods_price':goods_price,'goods_color':goods_color,'goods_size':goods_size,'goods_total':goods_total,'goods_num':goods_num};
		
				$.ajax({
						'url':"/zl_shop/index.php/Car/add_goods_session",
						'type':"post",
						'async':true,
						'dataType':'json',
						'data':json_data,
						'success':function(data){
							alert(data);
							}
					});
				
			//如果取消
				}else{
					var car_id = $(this).next().val();
					$.ajax({
						'url':"/zl_shop/index.php/Car/del_goods_session",
						'type':"post",
						'async':true,
						'dataType':'json',
						'data':{'car_id':car_id},
						'success':function(data){
							alert(data);
							}
					});
				}
			
		});
		
		
	
	

		
		
		
		
		
		
		
		//=============选中商品====总价跟着变化==============
		$(".box_check").click(function(){
			//======价格的变化======
			var p = parseInt($(this).parent().siblings(".g_total").children("p").children("span").html());
			var total = parseInt($(".total_price").html()); 
			
			//=======商品数量的变化===========
			var num = parseInt($(this).parent().siblings(".g_num").find(".buy-num").val());
		    var total_num = parseInt($(".total_num").html());
			//alert(total_num);
			if($(this).attr("checked")){
				//===s价格的计算====
				total = total + p;
				$(".total_price").html(total);
				
				//=====商品数量的计算=====
				total_num = total_num + num;
				$(".total_num").html(total_num);
			}else{
				total = total - p;
				$(".total_price").html(total);
				
				//=====商品数量的计算=====
				total_num = total_num - num;
				$(".total_num").html(total_num);
			}
		});
		
		
		
		//======商品数量 加1 减1 ========
		$(".buy-num").keyup(function(){
			if($(this).val()!=""){
				var a = parseInt($(this).val());
				
				var car_id = $(this).parent().siblings(".car_id").val();
				//====小计的变化=======
				var goods_price = $(this).parents(".g_num").prev().find(".goods_price").html();
				//alert(car_id);
				if(!a){
					$(this).val(1);
					//使用ajax将修改的数据存储到数据库
					
					var small_total = parseInt($(this).parents(".g_num").prev().find(".goods_price").html()) * 1;
					$(this).parents(".g_num").next().find("span").html(small_total);
					
					$.ajax({
						'url':"/zl_shop/index.php/Car/edit_num",
						'type':"post",
						'async':true,
						'dataType':'json',
						'data':{"num":1,"car_id":car_id},
						'success':function(data){
							
							}
					});
					
				}else{
					$(this).val(a);
					var small_total = parseInt($(this).parents(".g_num").prev().find(".goods_price").html()) * a;
					$(this).parents(".g_num").next().find("span").html(small_total);
					$.ajax({
						'url':"/zl_shop/index.php/Car/edit_num",
						'type':"post",
						'async':true,
						'dataType':'json',
						'data':{"num":a,"car_id":car_id},
						'success':function(data){
							
							}
					});
				}
			}
		});
		
		//商品加一
		$(".add").click(function(){
			var car_id = $(this).siblings(".car_id").val();
			var goods_price = $(this).parents(".g_num").prev().find(".goods_price").html();//获取到商品单价
			if($(this).prev().children("input").val() == ""){
				$(this).prev().children("input").val(1);
				var small_total = parseInt($(this).parents(".g_num").prev().find(".goods_price").html()) * 1;//计算出小计
				$(this).parents(".g_num").next().find("span").html(small_total);//将小计写到页面上
				$.ajax({
					'url':"/zl_shop/index.php/Car/edit_num",
					'type':"post",
					'async':true,
					'dataType':'json',
					'data':{"num":1,"car_id":car_id},
					'success':function(data){
						
					}
				});
			}else{
				var s = parseInt($(this).prev().children("input").val()) + 1;
				$(this).prev().children("input").val(s);
				var small_total = parseInt($(this).parents(".g_num").prev().find(".goods_price").html()) * s;//计算出小计
				$(this).parents(".g_num").next().find("span").html(small_total);//将小计写到页面上
				$.ajax({
					'url':"/zl_shop/index.php/Car/edit_num",
					'type':"post",
					'async':true,
					'dataType':'json',
					'data':{"num":s,"car_id":car_id},
					'success':function(data){
						
					}
				});
			}
		});
		
		//商品减一
		$(".desc").click(function(){
			var car_id = $(this).siblings(".car_id").val();
			var goods_price = $(this).parents(".g_num").prev().find(".goods_price").html();//获取到商品单价
			if($(this).next().children("input").val()==""){
				$(this).next().children("input").val(1);
				var small_total = parseInt($(this).parents(".g_num").prev().find(".goods_price").html()) * 1;//计算出小计
				$(this).parents(".g_num").next().find("span").html(small_total);//将小计写到页面上
				
				$.ajax({
					'url':"/zl_shop/index.php/Car/edit_num",
					'type':"post",
					'async':true,
					'dataType':'json',
					'data':{"num":1,"car_id":car_id},
					'success':function(data){
						
					}
				});
			}else{
				var s = parseInt($(this).next().children("input").val()) - 1;
				var small_total = parseInt($(this).parents(".g_num").prev().find(".goods_price").html()) * s;//计算出小计
				$(this).parents(".g_num").next().find("span").html(small_total);//将小计写到页面上
				
				if(s <= 0){
					$(this).next().children("input").val(1);
					$.ajax({
					'url':"/zl_shop/index.php/Car/edit_num",
					'type':"post",
					'async':true,
					'dataType':'json',
					'data':{"num":1,"car_id":car_id},
					'success':function(data){
						
					}
				});
				}else{
					$(this).next().children("input").val(s);
					$.ajax({
						'url':"/zl_shop/index.php/Car/edit_num",
						'type':"post",
						'async':true,
						'dataType':'json',
						'data':{"num":s,"car_id":car_id},
						'success':function(data){
							
						}
					});
				}
			}	
		});
	</script>

</html>