<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
 <html>
     <head>
         <title>商城系统</title>
         <meta charset="utf-8" />
         <link href="/zl_shop/Public/index/css/index.css" rel="stylesheet"/>
         <link href="/zl_shop/Public/index/css/public.css" rel="stylesheet"/>
         <script src="/zl_shop/Public/index/js/jquery.js"></script>
         <script src="/zl_shop/Public/js/plug.js"></script>
         <script src="/zl_shop/Public/index/js/index.js"></script>
     </head>
     <body>
        <!--顶部快捷方式 START-->
        <div id="shortcut">
            <div class="w">
                <ul class="sendto">
                	<li>
                        <div class="send-target">
                            送至：<span>北京</span>
                            <i><span>◇</span></i>
                        </div>
                        <!--城市列表 START-->
                        <div class="send-list">
                            <div></div>
                            <ul class='sendcity'>
                                <li><a href="#none" data-id="01">北京</a></li> 
                                <li><a href="#none" data-id="02">上海</a></li> 
                                <li><a href="#none" data-id="03">天津</a></li> 
                                <li><a href="#none" data-id="04">重庆</a></li> 
                                <li><a href="#none" data-id="05">河北</a></li> 
                                <li><a href="#none" data-id="06">山西</a></li> 
                                <li><a href="#none" data-id="07">河南</a></li> 
                                <li><a href="#none" data-id="08">辽宁</a></li> 
                                <li><a href="#none" data-id="09">吉林</a></li> 
                                <li><a href="#none" data-id="10">江苏</a></li> 
                                <li><a href="#none" data-id="11">山东</a></li> 
                                <li><a href="#none" data-id="12">安徽</a></li> 
                                <li><a href="#none" data-id="13">浙江</a></li> 
                                <li><a href="#none" data-id="14">福建</a></li> 
                                <li><a href="#none" data-id="15">湖北</a></li> 
                                <li><a href="#none" data-id="16">湖南</a></li> 
                                <li><a href="#none" data-id="17">广东</a></li> 
                                <li><a href="#none" data-id="18">广西</a></li> 
                                <li><a href="#none" data-id="19">江西</a></li> 
                                <li><a href="#none" data-id="20">四川</a></li> 
                                <li><a href="#none" data-id="21">海南</a></li> 
                                <li><a href="#none" data-id="22">贵州</a></li> 
                                <li><a href="#none" data-id="23">云南</a></li> 
                                <li><a href="#none" data-id="24">西藏</a></li> 
                                <li><a href="#none" data-id="25">陕西</a></li> 
                                <li><a href="#none" data-id="26">甘肃</a></li> 
                                <li><a href="#none" data-id="27">青海</a></li> 
                                <li><a href="#none" data-id="28">宁夏</a></li> 
                                <li><a href="#none" data-id="29">新疆</a></li> 
                                <li><a href="#none" data-id="30">台湾</a></li> 
                                <li><a href="#none" data-id="31">香港</a></li> 
                                <li><a href="#none" data-id="32">澳门</a></li> 
                                <li><a href="#none" data-id="33">钓鱼岛</a></li>
                                <li><a href="#none" data-id="34">黑龙江</a></li> 
                                <li><a href="#none" data-id="35">内蒙古</a></li>  
                                <li><a href="#none" data-id="36">海外</a></li> 
                            </ul>
                        </div><!--城市列表 END-->
                    </li>
                </ul>
                <!--快捷菜单 START-->
                <ul class="short-menu" style="float: right">
                	<li>
                        <?php if($v = session('username')): ?><a href="/zl_shop/index.php/User/index"><?php echo ($v); ?></a>
                        <a href="/zl_shop/index.php/login/logout">退出</a>
                        <?php else: ?>
                        <a href="/zl_shop/index.php/Login/login">登录</a>
                        <a href="/zl_shop/index.php/Reg/index">快速注册</a><?php endif; ?>
                    </li>
                    <li class="spacer"></li>
                	<li>
                        <a href="/zl_shop/index.php/Order/index">我的订单</a>
                    </li>
                    <li class="spacer"></li>
                	<li>
                        <a href="" class="short-user">我的账户</a>
                        <div class="shortuser">
                            <div class="u-spacer"></div>
                            <div class="shortinfo">
                                <div class="u-pic">
                                    <a href="/zl_shop/index.php/User/index"><img src="/zl_shop/Public/index/images/shortcut-user.jpg" alt="" /></a>
                                </div>
                                <div class="u-name"><a href="/zl_shop/index.php/User/index"><?php echo ($v = session('username')); ?></a></div>
                                <div class="u-ext">
                                    <a href="/zl_shop/index.php/Car/index">购物车</a> | <a href="#">消息 <span style="color:red">1</span></a>
                                </div>
                            </div>
                        </div>
                    </li>
                  
                    <li class="spacer"></li>
                    <li>
                        <a href="javascript:;">客户服务</a>
                	</li>
                </ul><!--快捷菜单 END-->
            </div>
        </div><!--顶部快捷方式 END-->

        <!--顶部BANNER START-->
        <div id="top-banner">
            <div class="w">
                <a><img src="/zl_shop/Public/Uploads/images/top-banner.jpg" /></a>
            </div>
        </div><!--顶部BANNER END-->
        <!--搜索块 START-->
        <div id="search" class="w">
            <!--LOGO START-->
            <div class="shop-logo">
                <a href="/zl_shop/index.php/Index/index"><img src="/zl_shop/Public/index/images/shop-logo.png" /></a>
            </div><!--LOGO END-->
            <!--搜索框 START-->
            <div class="shop-search">
                <div class="search-form">
                    <form action="/zl_shop/index.php/List/index" method="get">
                        <input type="text" name="keyword" value="" />
                        <button type="submit">搜索</button>
                    </form>
                </div>
            </div><!--搜索框 END-->
            <!--购物车 START-->
            <div class="shop-cart">
                <div class="sc-icons">
                    <i class="ci-left"></i>
                    <i class="ci-right">></i>
                    <i class="ci-count"><?php echo W('Car/car_num');?></i>
                    <a href="/zl_shop/index.php/Car/index" target="_blank">我的购物车</a>
                </div>
                <div class="sc-history">
                    <div class="sc-spacer"></div>
                    <div class="sc-content">
                        <div class="sc-title">
                            <h4>最新加入的商品</h4>
                        </div>
                        <div class="sc-list">
                            <?php echo W("Car/index");?>
                        </div>
                        <div class="sc-bar">
                            <div class="sc-bar-total">
                                共 <b><?php echo W('Car/car_num');?></b> 件商品 共计 <strong>￥ <?php echo W('Car/car_total');?></strong>
                            </div>
                            <a href="/zl_shop/index.php/Car/index">去购物车</a>
                        </div>
                    </div>
                </div>
            </div><!--购物车 END-->
             <!--热搜关键词 START-->
            <div class="shop-hotwords">
                <a href="/zl_shop/index.php/List/index/keyword/太阳镜">太阳镜</a>
                <a href="/zl_shop/index.php/List/index/keyword/短裤">短裤</a>
                <a href="/zl_shop/index.php/List/index/keyword/T恤">T恤</a>
                <a href="/zl_shop/index.php/List/index/keyword/男装">男装</a>
                <a href="/zl_shop/index.php/List/index/keyword/吊带">吊带</a>
                <a href="/zl_shop/index.php/List/index/keyword/女鞋">女鞋</a>
                <a href="/zl_shop/index.php/List/index/keyword/精品">精品</a>
                <a href="/zl_shop/index.php/List/index/keyword/亲子">亲子</a>
                <a href="/zl_shop/index.php/List/index/keyword/凉鞋">凉鞋</a>
            </div><!--热搜关键词 END-->
        </div><!--搜索块 END-->
        <!--导航 START-->
        <div id="nav">
            <div class="w">
                <div id="categorys">
                    <div class="dt">
                        <a href="/zl_shop/index.php/List">全部商品分类</a>
                    </div>
                    <!--{begin 主类-->
                    <div class="dd">
                        <?php if(is_array($types)): foreach($types as $key=>$type): ?><div class="dd-list">
                            <div class="dd-items">
                                <h3><a target="_blank" href="/zl_shop/index.php/List/index/typeid/<?php echo ($type['id']); ?>"><?php echo ($type['name']); ?></a>
                                    <?php $__FOR_START_7346__=0;$__FOR_END_7346__=2;for($i=$__FOR_START_7346__;$i < $__FOR_END_7346__;$i+=1){ ?><a target="_blank" href="/zl_shop/index.php/List/index/typeid/<?php echo ($typeHost[$type['id']]['id'][$i]); ?>"><?php echo ($typeHost[$type['id']]['name'][$i]); ?></a><?php } ?>
                                </h3><i>></i>
                            </div>
                            <!--{begin 子类模块-->
                            <div class="dd-content">
                                <ul class="pop-list">
                                <?php if(is_array($type['child'])): foreach($type['child'] as $key=>$v): ?><li><a target="_blank" href="/zl_shop/index.php/List/index/typeid/<?php echo ($v['id']); ?>"><?php echo ($v['name']); ?></a></li><?php endforeach; endif; ?>
                                </ul>
                                <ul class="brand-list">
                                <?php $__FOR_START_9219__=0;$__FOR_END_9219__=count($brands[$type['id']]['id']);for($i=$__FOR_START_9219__;$i < $__FOR_END_9219__;$i+=1){ ?><li><a style="display:none" href="/zl_shop/index.php/List/index/brandid/<?php echo ($brands[$type['id']]['id'][$i]); ?>"></a><a href="/zl_shop/index.php/List/index/brandid/<?php echo ($brands[$type['id']]['id'][$i]); ?>"><img width="70" src="/zl_shop/Public/Uploads/brands/s_<?php echo ($brands[$type['id']]['logo'][$i]); ?>" alt="" /></a></li><?php } ?>
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
                <div id="treasure">
                    <a href="javascript:;"><img src="/zl_shop/Public/Uploads/images/nav-treasure.jpg" alt="" /></a>
                </div>
            </div>
        </div><!--导航 END-->
        <!--轮播 START-->
        <div id="focus">
            <div class="slider">
                <ul class="slider-main">
                    <?php if(is_array($focus)): foreach($focus as $key=>$focu): ?><li class="picslist">
                            <div class="pics">
                                 <a target="_blank" href="<?php echo ($focu['link']); ?>"><img src="/zl_shop/Public/Uploads/posts/s_<?php echo ($focu['pic']); ?>" alt="" /></a>
                            </div>
                        </li><?php endforeach; endif; ?>
                </ul>
                <div class="slider-extra">
                    <ul>
                    	<li class="slider-selected">1</li>
                    	<li>2</li>
                    	<li>3</li>
                    	<li>4</li>
                    	<li>5</li>
                    	<li>6</li>
                    </ul>
                </div>
                <div class="slider-page" style="display: none">
                    <a class="slider-prev" href="javascript:void(0)"><</a>
                    <a class="slider-next" href="javascript:void(0)">></a>
                </div>
            </div>
        </div><!--轮播 END-->
        <!--公告拦 START-->
        <div id="focus-extra" class="w">
            <div id="news">
                <div class="nt">
                    <h2>京东快报</h2>
                    <!-- <a href="#">更多 ></a> -->
                </div>
                <div class="nc">
                    <ul>
                        <?php if(is_array($news)): foreach($news as $key=>$new): ?><li>
                                <a href="#"><span>
                                    <?php if($new['type'] == '1'): ?>[特惠]
                                    <?php else: ?>
                                        [公告]<?php endif; ?>
                                    </span><?php echo ($new['title']); ?>
                                </a>
                            </li><?php endforeach; endif; ?>
                        <?php if(is_array($news)): foreach($news as $key=>$new): ?><li>
                                <a href="#"><span>
                                    <?php if($new['type'] == '1'): ?>[特惠]
                                    <?php else: ?>
                                        [公告]<?php endif; ?>
                                    </span><?php echo ($new['title']); ?>
                                </a>
                            </li><?php endforeach; endif; ?>
                        <?php if(is_array($news)): foreach($news as $key=>$new): ?><li>
                                <a href="#"><span>
                                    <?php if($new['type'] == '1'): ?>[特惠]
                                    <?php else: ?>
                                        [公告]<?php endif; ?>
                                    </span><?php echo ($new['title']); ?>
                                </a>
                            </li><?php endforeach; endif; ?>
                    </ul>
                </div>
            </div>
        </div><!--公告拦 END-->
        <!--特色推荐 START-->
        <div class="w">
            <div id="todays">
                <div class="tm">
                </div>
                <div class="tc">
                    <ul>
                        <?php if(is_array($goods)): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$good): $mod = ($i % 2 );++$i; if(($good["isbest"]) == "2"): ?><li>
                            <div>
                                <a target="_blank" href="/zl_shop/index.php/Details/index/id/<?php echo ($good['id']); ?>"><img width="151" src="/zl_shop/Public/Uploads/goods/l_<?php echo ($good['pic']); ?>" alt="" /></a>
                            </div>
                            </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                    <div class="slider-page" style="display: none">
                        <a class="slider-prev" href="javascript:void(0)"><</a>
                        <a class="slider-next" href="javascript:void(0)">></a>
                    </div>
                </div>
            </div>
            <div id="guess-like">
                <div class="guessyou">
                    <div class="gt">
                        <h2>猜你喜欢</h2>
                        <a class="gt-more" href="javascript:;">换一批</a>
                    </div>
                    <div class="gc">
                        <div class="gc-spacer">
                            <i></i>
                        </div>
                        <ul class="gc-list">
                            <?php if(is_array($goodsHot)): $i = 0; $__LIST__ = $goodsHot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li>
                                <div class="g-img">
                                    <a target="_blank" href="/zl_shop/index.php/Details/index/id/<?php echo ($v['id']); ?>"><img width="130" src="/zl_shop/Public/Uploads/goods/l_<?php echo ($v['pic']); ?>" alt="" /></a>
                                </div>
                                <div class="g-info">
                                    <div class="g-name"><a title="" target="_blank" href="/zl_shop/index.php/Details/index/id/<?php echo ($v['id']); ?>"><?php echo ($v['name']); ?></a></div>
                                    <div class="g-price">
                                        <i>￥</i><?php echo ($v['saleprice']); ?>
                                    </div>
                                </div>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="special-buy">
                <h2>京东特色购</h2>
                <div class="sp-count">
                    <div class="sp-left">
                        <?php $__FOR_START_28544__=0;$__FOR_END_28544__=12;for($i=$__FOR_START_28544__;$i < $__FOR_END_28544__;$i+=1){ ?><a target="_blank" href="/zl_shop/index.php/Details/index/id/<?php echo ($goods[$i]['id']); ?>">
                            <p class="sp-icons">
                                <span class="spicon sp-icon-left"></span>
                                <span>今日最大牌</span>
                                <span class="spicon sp-icon-right"></span>
                            </p>
                            <p class="sp-title"><?php echo ($goods[$i]['name']); ?></p>
                            <img width="200" src="/zl_shop/Public/Uploads/goods/l_<?php echo ($goods[$i]['pic']); ?>" alt="" />
                        </a><?php } ?>
                    </div>
                </div>
            </div>
        </div><!--特色推荐 END-->
        <!--楼层 START-->
        <div id="content">
            <div class="w">
                <!--广告banner START-->
                <div class="content-banner">
                    <a href="#"><img src="/zl_shop/Public/Uploads/images/content-banner-1.jpg" alt="" /></a>
                    <a href="#"><img src="/zl_shop/Public/Uploads/images/content-banner-2.jpg" alt="" /></a>
                    <a href="#"><img src="/zl_shop/Public/Uploads/images/content-banner-3.jpg" alt="" /></a>
                </div><!--广告banner END-->
                <!--1楼 START-->
                <div id="floor1">
                    <?php $typeId = '107'; ?><!--设置楼层展示类别 -->
                    <div class="ft">
                        <h2>
                            <i>1F</i>潮流女士
                        </h2>
                        <ul class="tab">
                            <?php if(is_array($typeShow)): $i = 0; $__LIST__ = $typeShow;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i; if(($v['pid']) == $typeId): ?><li class="tab-item" >
                                <a href="javascript:;"><?php echo ($v['name']); ?></a>
                                <span>◆</span>
                            </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                    <div class="fc">
                        <div class="side">
                            <div class="side-inner">
                                <div class="banner">
                                    <a target="_blank" title="" href="">
                                        <img width="330" height="475" src="/zl_shop/Public/Uploads/images/floor1-side.jpg">
                                    </a>
                                </div>
                                <!--{begin 推荐子类-->
                                <ul class="themes">
                                <?php $__FOR_START_10681__=0;$__FOR_END_10681__=count($typeHost[$typeId]['id']);for($i=$__FOR_START_10681__;$i < $__FOR_END_10681__;$i+=1){ ?><li class="fore1">
                                        <a href="/zl_shop/index.php/List/index/typeid/{$typeHost[$typeId]['id'][$i]}" target="_blank">
                                            <span><?php echo ($typeHost[$typeId]['name'][$i]); ?></span>
                                        </a>
                                    </li><?php } ?>
                                </ul><!--}end 推荐子类-->
                                <!--{begin 全部子类-->
                                <ul class="words">
                                    <li class="fore1">
                                    <?php if(is_array($types[$typeId]['child'])): foreach($types[$typeId]['child'] as $key=>$v): ?><a target="_blank" href="/zl_shop/index.php/List/index/typeid/<?php echo ($v['id']); ?>"><?php echo ($v['state'] == 3 ? '<span class="style-red">' : ''); echo ($v['name']); echo ($v['state'] == 3 ? '</span>' : ''); ?></a><?php endforeach; endif; ?>
                                    </li>
                                </ul><!--}end 全部子类-->
                            </div>
                        </div>
                        <!--{begin 商品展示-->
                        <?php if(is_array($typeShow)): $i = 0; $__LIST__ = $typeShow;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i; if(($v['pid']) == $typeId): ?><div class="main">
                            <ul class="main-body">
                                <?php if(is_array($goods)): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$good): $mod = ($i % 2 );++$i; if(($good['type_id']) == $v['id']): ?><li>
                                    <div class="p-img">
                                        <a target="_blank" href="/zl_shop/index.php/Details/index/id/<?php echo ($good['id']); ?>"><img width="130" height="130" src="/zl_shop/Public/Uploads/goods/s_<?php echo ($good['pic']); ?>" alt="" /></a>
                                    </div>
                                    <div class="p-name">
                                        <a title="<?php echo ($good['name']); ?>" target="_blank" href="/zl_shop/index.php/Details/index/id/<?php echo ($good['id']); ?>"><?php echo ($good['name']); ?></a>
                                    </div>
                                    <div class="p-price">
                                        <span>￥</span><?php echo ($good['saleprice']); ?>
                                    </div>
                                </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </div><?php endif; endforeach; endif; else: echo "" ;endif; ?><!--}end 商品展示-->
                        <!--{begin 本类品牌-->
                        <div class="slider">
                            <ul>
                            <?php $__FOR_START_20990__=0;$__FOR_END_20990__=count($brands[$typeId]['id']);for($i=$__FOR_START_20990__;$i < $__FOR_END_20990__;$i+=1){ ?><!-- {$brands[$typeId]['logo'][$i]} -->
                                <li><a href="/zl_shop/index.php/List/index/brandid/<?php echo ($brands[$typeId]['id'][$i]); ?>"><img width="70" src="/zl_shop/Public/Uploads/brands/s_<?php echo ($brands[$typeId]['logo'][$i]); ?>" alt="" /></a></li><?php } ?>
                            </ul>
                        </div><!--}end 本类品牌-->
                    </div>
                </div><!--1楼 END-->
                
                <div class="today-special">
                    <div class="tst">
                        <h2>今日抄底</h2>
                    </div>
                    <div class="tsc">
                        <ul>
                            
                            <?php if(is_array($goods)): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$good): $mod = ($i % 2 );++$i; if(($good['ishot']) == "2"): ?><li>
                                    <div class="p-img">
                                        <a target="_blank" href="/zl_shop/index.php/Details/index/id/<?php echo ($good['id']); ?>"><img width="100" src="/zl_shop/Public/Uploads/goods/s_<?php echo ($good['pic']); ?>" alt="" /></a>
                                    </div>
                                    <div class="p-info">
                                        <div class="p-name">
                                            <a target="_blank"  width="100" height="100" title="" href="/zl_shop/index.php/Details/index/id/<?php echo ($good['id']); ?>"><?php echo ($good['name']); ?></a>
                                        </div>
                                        <div class="p-price">
                                            <span>￥<?php echo ($good['saleprice']); ?></span>
                                        </div>
                                    </div>
                                </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div><!--楼层 END-->
        <!--footer START-->
        <div id="footer">
            <div class="slogen">
                <div class="w">
                    <i class="item1"></i>
                    <i class="item2"></i>
                    <i class="item3"></i>
                    <i class="item4"></i>
                </div>
            </div>
            <div class="w">
                <div class="otherinfo">
                    <div class="links">
                        <?php if(is_array($links)): foreach($links as $k=>$link): ?><a href="<?php echo ($link['linkaddress']); ?>" target="_blank"><?php echo ($link['linkname']); ?></a><span>|</span><?php endforeach; endif; ?>
                    </div>
                    <div class="copyright">ICP经营许可证：<span>京ICP证XXXXXX号</span>
                    </div>
                </div>
            </div>
        </div><!--footer END-->
        <script type="text/javascript">
            $('.otherinfo .links span').last().remove();
        </script>
        
        <!--电梯 START--/>
        <div id="global-toolbar">
        
        </div><!--电梯 END--/>
        </!--个人快捷栏 START--/>
        <div id="elevator">
        
        </div><!--个人快捷栏 END-->
        
     </body>
 </html>