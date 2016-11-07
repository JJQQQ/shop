<?php if (!defined('THINK_PATH')) exit();?><ul>
	<?php if(is_array($goods)): foreach($goods as $key=>$g): ?><li>
			<div class="g-img"><a href="#"><img width="50" src="/zl_shop/Public/Uploads/goods/<?php echo ($g['goods']['pic']); ?>"></a></div>
			<div class="g-title"><a  href="#"><?php echo ($g['goods']['name']); ?></a></div>
			<div class="g-price">
				<p>　　<span style="color:#e4393c;"><?php echo ($g['goods']['saleprice']); ?></span> * <?php echo ($g['num']); ?></p>
				<p>　　　　<a style="color:#005ea7;" href="/zl_shop/index.php/List/del/car_id/<?php echo ($g['car_id']); ?>">删除</a></p>
			</div>
		</li><?php endforeach; endif; ?>	
</ul>