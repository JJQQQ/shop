<?php if (!defined('THINK_PATH')) exit();?><div id="myjd">
		<a href="#">
			<div class="mac"></div>
			<div class="myjdong"> <a href="/zl_shop/index.php/User/index">我的账户</a></div>
			<div class="btriangle"></div>
		</a>
		
		<div class="myjd-details">
			<div class="de-hd">
				
				
					<?php if($v = session('username')): ?>你好，<span style="color:#e4393c"><?php echo ($v); ?></span>
					<?php else: ?><a href="/zl_shop/index.php/login/index">请登录</a><?php endif; ?>
				
				
			</div>
			<div class="de-list">
				<ul style="border-right:1px solid #ddd;">
					<li><a href="#">全部订单（<?php echo ($order_count['all']); ?>）</a></li>
					<li><a href="#">未完成订单（<?php echo ($order_count['n']); ?>）</a></li>
					<li><a href="#">已完成订单（<?php echo ($order_count['y']); ?>）</a></li>
					<li><a href="#">待评价商品（<?php echo ($review_count); ?>）</a></li>
				
		
			
				</ul>
				<ul>
					<li><a href="#">全部售后（<?php echo ($after_count['all']); ?>）</a></li>
					<li><a href="#">退货（<?php echo ($after_count['t']); ?>）</a></li>
					<li><a href="#">换货（<?php echo ($after_count['h']); ?>）</a></li>
					<li><a href="#">保修（<?php echo ($after_count['b']); ?>）</a></li>
				</ul>
			</div>
			<div class="de-view">
				<a href="#">查看浏览历史</a>
			</div>
		</div>
</div>