<?php defined('IN_DESTOON') or exit('Access Denied');?><script src="<?php echo DT_STATIC;?>statics/js/jquery.masonry.min.js"></script>
<script src="<?php echo DT_STATIC;?>statics/js/jquery.xySlider.js"></script>
<!-- <>主体容器区域 -->
<div class="container">
    <!-- //当前位置 -->
    <div class="hd__curPos c--666 fs--12">
        <div class="mid clearfix">
            <div class="fl">您所在位置：<a href="<?php echo $MODULE['1']['linkurl'];?>">首页</a> &raquo; <a href="<?php echo $MOD['linkurl'];?>"><?php echo $MOD['name'];?></a> &raquo; <?php echo cat_pos($CAT, ' &raquo; ');?> &raquo;</div>
        </div>
    </div>
    <!-- //筛选区域 -->
    <div class="sec__repairChoose-filter ff-st mid mt--10">
        <div class="filter-list clearfix" id="J__filterList">
            <dl class="first">
                <dt class="lbl fl">分类</dt>
                <dd class="opt">
                    <div class="filter-ct fl J__catwrap" style="padding-right:0;">
                        <div class="notto"><a class="cur" href="<?php echo $MOD['linkurl'];?>">不限</a></div>
                        <a class="js-btn-prev prev-btn fl disabled" id="ctl-prev" href="javascript:">
                            <</a>
                                <div style="float:left; overflow:hidden;white-space:nowrap;margin-left:7px;width:963px;position:relative;">
                                    <div class="items pos-rel J__catlist">
                                        <?php $child = get_maincat($parentid, $CATEGORY, 1);?>
                                        <?php if(is_array($child)) { foreach($child as $i => $k) { ?>
                                        <div class="dropdown">
                                            <div class="zoneTit"><?php echo $k['catname'];?><i class="arr"></i></div>
                                            <div class="zoneSelect" style="display:none;"><div class="text" title="<?php echo $k['catname'];?>"><?php echo $k['catname'];?></div><i class="close"></i></div>
                                        </div>
                                        <?php } } ?>
                                    </div>
                                </div>
                                <a class="js-btn-next next-btn fl" id="ctl-next" href="javascript:;">></a>
                                <script type="text/javascript">
                                    /** 小缩略图左右切换 */
                                    $(function () {
                                        $(".J__catwrap").jq_simpleStep({ selector: ".J__catlist", item: ".dropdown", visual: 9 });
                                    });
                                </script>
                    </div>
                </dd>
            </dl>
            <!-- //下拉框(门窗)-->
            <?php if(is_array($child)) { foreach($child as $i => $k) { ?>
            <div class="filterBox" style="display:none;">
                <dl>
                    <dt class="lbl fl">&nbsp;</dt>
                    <dd class="opt open">
                        <div class="filter-ct fl">
                            <div class="notto">&nbsp;</div>
                            <div class="items is-collapse">
                                <?php $childs = get_maincat($k['catid'], $CATEGORY, 1);?>
                                <?php if(is_array($childs)) { foreach($childs as $i => $c) { ?>
                                <a class="radio" href="<?php echo $MOD['linkurl'];?><?php echo $c['linkurl'];?>"><i></i><?php echo $c['catname'];?></a>
                                <?php } } ?>
                            </div>
                            <div class="more J__more"><em>更多</em><i></i></div>
                        </div>
                    </dd>
                </dl>
            </div>
            <?php } } ?>
        <!--相关推荐-->
        <div class="filter-list filter-recommend clearfix mt--10" id="J__filterList">
            <dl>
                <dt class="lbl fl">相关推荐</dt>
                <dd class="opt">
                    <div class="filter-ct fl" style="padding-right:65px;">
                        <!--<div class="notto"><a class="cur">不限</a></div>-->
                        <div class="items is-collapse">
                            <?php $dht=tag("table=category&condition=moduleid=$moduleid &showcat=1&pagesize=11&order=rand()&template=null");?>
                            <?php if(is_array($dht)) { foreach($dht as $i => $c) { ?>
                                <?php $thisCat = get_cat($c['catid']);$thisId = explode(',', $thisCat['arrparentid']);//var_dump($thisId)?>
                                <?php if($thisId['1'] ==14) { ?>
                                <a class="radio" href="<?php echo $MOD['linkurl'];?><?php echo $c['linkurl'];?>"><i></i><?php echo $c['catname'];?></a>
                                <?php } ?>
                            <?php } } ?>
                        </div>
                        <div class="more J__more"><em>更多</em><i></i></div>
                    </div>
                </dd>
            </dl>
        </div>
        <!--筛选选择条件-->
        <?php if($_GET['catid']) { ?>
        <div class="filter-options">
            <?php $lists = tag("moduleid=$moduleid&c=3$dtype&catid=$catid&fields=itemid&template=null")?>
            <div class="num dib mr--10"><em class="c--ff4a00 ff-ar"><?php echo count($lists);?></em>个满足条件</div>
            <div class="options dib">
                <a href="javascript:;"><em><?php echo $CAT['catname'];?></em><i class="close"></i></a>
                <!--<a href="javascript:;"><em>柜门维修</em><i class="close"></i></a>-->
                <!--<a href="javascript:;"><em>不锈钢门窗</em><i class="close"></i></a>-->
            </div>
            <a class="clear dib" href="/photo">清除</a>
        </div>
        <?php } ?>
    </div>
    <!-- //列表区域 -->
    <div class="sec__repairChoose-list ff-st mid mt--10 pb--50">
        <div class="clearfix">
            <div class="wrap__repair-main">
                <!--//排序条-->
                <div class="orderBar clearfix">
                    <div class="sort fl J__order">
                        <a class="<?php if($_GET['type'] !='hits') { ?>cur<?php } else { ?>down<?php } ?>
" href="<?php echo $MOD['linkurl'];?>list.php?catid=<?php echo $catid;?>&type=addtime">最新</a>
                        <a class="<?php if($_GET['type'] =='hits') { ?>cur<?php } else { ?>down<?php } ?>
" href="<?php echo $MOD['linkurl'];?>list.php?catid=<?php echo $catid;?>&type=hits">最热</a>
                    </div>
                </div>
                <!--//精选列表-->
                <?php $type =$_GET['type'] ? $_GET['type'] : 'addtime';?>
                <?php echo tag("moduleid=$moduleid&c=3$dtype&catid=$catid&pagesize=8&page=$page&showpage=1&datetype=5&order=$type desc&template=list-photo");?>
            </div>
        </div>
    </div>
</div>
</div>
