<?php if (!defined('THINK_PATH')) exit();?><div  class="w">
    <div id="categorys">
        <div class="dt">
            <a href="/zl_shop/index.php/List">全部商品分类</a>
        </div>
        <!--{begin 主类-->
        <div class="dd" >
            <?php if(is_array($types)): foreach($types as $key=>$type): ?><div class="dd-list">
                <div class="dd-items">
                    <h3><a target="_blank" href="/zl_shop/index.php/List/index/typeid/<?php echo ($type['id']); ?>"><?php echo ($type['name']); ?></a>
                        <?php $__FOR_START_32095__=0;$__FOR_END_32095__=2;for($i=$__FOR_START_32095__;$i < $__FOR_END_32095__;$i+=1){ ?><a target="_blank" href="/zl_shop/index.php/List/index/typeid/<?php echo ($typeHost[$type['id']]['id'][$i]); ?>"><?php echo ($typeHost[$type['id']]['name'][$i]); ?></a><?php } ?>
                    </h3><i>></i>
                </div>
                <!--{begin 子类模块-->
                <div class="dd-content">
                    <ul class="pop-list">
                    <?php if(is_array($type['child'])): foreach($type['child'] as $key=>$v): ?><li><a target="_blank" href="/zl_shop/index.php/List/index/typeid/<?php echo ($v['id']); ?>"><?php echo ($v['name']); ?></a></li><?php endforeach; endif; ?>
                    </ul>
                    <ul class="brand-list">
                    <?php $__FOR_START_940__=0;$__FOR_END_940__=count($brands[$type['id']]['id']);for($i=$__FOR_START_940__;$i < $__FOR_END_940__;$i+=1){ ?><li><a style="display:none" href="/zl_shop/index.php/List/index/brandid/<?php echo ($brands[$type['id']]['id'][$i]); ?>"></a><a href="/zl_shop/index.php/List/index/brandid/<?php echo ($brands[$type['id']]['id'][$i]); ?>"><img width="70" src="/zl_shop/Public/Uploads/brands/s_<?php echo ($brands[$type['id']]['logo'][$i]); ?>" alt="" /></a></li><?php } ?>
                    </ul>
                </div><!--}end 子类模块-->
            </div><?php endforeach; endif; ?>
        </div><!--}end 主类-->
    </div>
    <div id="navitems">
        <ul>
            <?php if(is_array($typeIndex)): $i = 0; $__LIST__ = $typeIndex;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$type): $mod = ($i % 2 );++$i;?><li><a href="/zl_shop/index.php/List/index/typeid/<?php echo ($type['id']); ?>"><?php echo ($type['name']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</div>