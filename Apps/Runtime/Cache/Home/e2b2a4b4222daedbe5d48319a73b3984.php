<?php if (!defined('THINK_PATH')) exit();?>
<?php if(is_array($goods)): foreach($goods as $key=>$g): ?><div class="goods_list">
			
			<input class="goods_id" type="hidden" name="" value="<?php echo ($g['goods']['id']); ?>">
			<div class="g_check">
				<input class="box_check"  style="width:18px;height:18px" type="checkbox" name="" value="<?php echo ($g['car_id']); ?>">
				<input type="hidden" name="" value="<?php echo ($g['car_id']); ?>">
			</div>
			<div class="g_img">
				<div class="img"><img width="50" src="/zl_shop/Public/Uploads/goods/l_<?php echo ($g['goods']['pic']); ?>"/></div>
				<div class="goodsname"><span><?php echo ($g['goods']['name']); ?></span></div>
			</div>
			<div class="g_attr">
				<p>颜色：<span class="c1"><?php echo ($g['color']); ?></span></p>
				<p>尺码：<span class="c2"><?php echo ($g['size']); ?></span></p>
			</div>
			<div class="g_price">
				<p><span class="goods_price"><?php echo ($g['goods']['saleprice']); ?></span></p>
			</div>
			<div class="g_num">
				<div class="g_num_box">
					<input type="hidden" name="car_id" class="car_id" value="<?php echo ($g['car_id']); ?>">
					<div class="desc">-</div>
					<div class="inp"><input class="buy-num" style="width:36px;height:28px;border:0px;text-align:center" type="text" name="num" value="<?php echo ($g['num']); ?>"/></div>
					<div class="add">+</div>
				</div>
			</div>
			<div class="g_total">
				<p><span class="goods_total_price"><?php echo ($g['goods']['saleprice']*$g['num']); ?></span></p>
			</div>
			<div class="g_handle">
				<p><a href="/zl_shop/index.php/Car/del_car_goods/id/<?php echo ($g['car_id']); ?>">删除</a></p>
			</div>
		</div><?php endforeach; endif; ?>