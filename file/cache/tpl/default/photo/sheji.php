<?php defined('IN_DESTOON') or exit('Access Denied');?><!-- <>主体容器区域 -->
<div class="container">
    <!-- //当前位置 -->
    <div class="hd__curPos c--666 fs--12">
        <div class="mid clearfix">
            <div class="fl">您所在位置：<a href="<?php echo $MODULE['1']['linkurl'];?>">首页</a> &raquo; <a href="<?php echo $MOD['linkurl'];?>"><?php echo $MOD['name'];?></a> &raquo; <?php echo cat_pos($CAT, ' &raquo; ');?> &raquo;</div>
        </div>
    </div>
    <!-- //筛选区域 -->
    <!--
<div class="sec__repairChoose-filter ff-st mid mt--10" style="display:none;">
<div class="filter-list filter-tuku clearfix mt--10" id="J__filterList">
<dl>
<dt class="lbl fl">类型</dt>
<dd class="opt">
<div class="filter-ct fl" style="padding-right:65px;">
<div class="notto"><a class="cur">全部</a></div>
<div class="items is-collapse">
<a class="radio"><i></i>铝合金门窗</a>
<a class="radio"><i></i>全铝门窗</a>
<a class="radio"><i></i>德国系统门窗（Hopo）</a>
<a class="radio"><i></i>铝合金门</a>
<a class="radio"><i></i>入户门</a>
<a class="radio"><i></i>不锈钢防盗门</a>
<a class="radio"><i></i>豪华防盗门</a>
<a class="radio"><i></i>别墅大门</a>
<a class="radio"><i></i>不锈钢栏杆</a>

<a class="radio"><i></i>不锈钢扶手</a>
<a class="radio"><i></i>阳台栏杆</a>
<a class="radio"><i></i>客厅挂钟</a>
<a class="radio"><i></i>客厅沙发</a>
<a class="radio"><i></i>家居客厅灯饰</a>
<a class="radio"><i></i>客厅圆桌</a>
<a class="radio"><i></i>家居客厅灯饰</a>
</div>
<div class="more J__more"><em>更多</em><i></i></div>
</div>
</dd>
</dl>
<div class="borbtm"></div>
<dl>
<dt class="lbl fl">风格</dt>
<dd class="opt">
<div class="filter-ct fl" style="padding-right:65px;">
<div class="notto"><a>全部</a></div>
<div class="items">
<a class="radio"><i></i>田园风格</a>
<a class="radio cur"><i></i>简约风格</a>
<a class="radio"><i></i>中式风格</a>
<a class="radio"><i></i>后现代</a>
<a class="radio"><i></i>法式风格</a>
<a class="radio"><i></i>新中式</a>
<a class="radio"><i></i>现代元素</a>
<a class="radio"><i></i>地中海</a>
<a class="radio"><i></i>美式田园</a>
</div>
</div>
</dd>
</dl>
<div class="borbtm"></div>
<dl>
<dt class="lbl fl">类别</dt>
<dd class="opt">
<div class="filter-ct fl" style="padding-right:65px;">
<div class="notto"><a class="cur">全部</a></div>
<div class="items">
<a class="radio"><i></i>家装</a>
<a class="radio"><i></i>工装</a>
</div>
</div>
</dd>
</dl>
</div>
</div>
-->
    <!-- //列表区域 -->
    <div class="sec__repairChoose-list ff-st mid mt--10 pb--50">
        <div class="clearfix">
            <div class="wrap__repair-main">
                <!--//设计图库-->
                <div class="wrap__picture-design">
                    <ul class="clearfix">
                        <li class="col-filter">
                            <dl>
                                <dt>全部</dt>
                                <dd>
                                    <a class="option <?php if($catid == $parentid) { ?>cur<?php } ?>
" href="list.php?catid=<?php echo $parentid;?>">全部</a>
                                    <?php $child = get_maincat($parentid, $CATEGORY, 1);?>
                                    <?php if(is_array($child)) { foreach($child as $i => $k) { ?>
                                    <a class="option <?php if($catid == $k['catid'] || $thisCatid['2'] == $k['catid']) { ?>cur<?php } ?>
" href="<?php echo $MOD['linkurl'];?><?php echo $k['linkurl'];?>"><?php echo $k['catname'];?></a>
                                    <?php } } ?>
                                </dd>
                            </dl>
                            <?php if(is_array($child)) { foreach($child as $i => $k) { ?>
                            <dl>
                                <dt><?php echo $k['catname'];?></dt>
                                <dd>
                                    <a class="option <?php if($catid == $parentid) { ?>cur<?php } ?>
" href="list.php?catid=<?php echo $parentid;?>">全部</a>
                                    <?php $childs = get_maincat($k['catid'], $CATEGORY, 1);?>
                                    <?php if(is_array($childs)) { foreach($childs as $i => $c) { ?>
                                    <a class="option <?php if($catid == $c['catid']) { ?>cur<?php } ?>
" href="<?php echo $MOD['linkurl'];?><?php echo $c['linkurl'];?>"><?php echo $c['catname'];?></a>
                                    <?php } } ?>
                                </dd>
                            </dl>
                            <?php } } ?>
                        </li>
                        <?php $tags = tag("moduleid=$moduleid&c=3$dtype&catid=$catid&pagesize=10&page=$page&showpage=1&datetype=5&order=".$MOD['order']."&template=null")?>
                        <?php if($tags) { ?>
                        <?php if(is_array($tags)) { foreach($tags as $t => $k) { ?>
                        <li>
                            <a class="aimg" href="<?php echo $k['linkurl'];?>">
                                <img src="<?php echo str_replace('.thumb.', '.middle.',$k['thumb']);?>" height="200" width="285" />
                                <div class="title">
                                    <h2 class="ellipsis ff-hv"><?php echo $k['title'];?></h2>
                                </div>
                            </a>
                            <div class="tag">
                               <?php $CAT = get_cat($k['catid']); echo cat_pos($CAT, ' | ');?>
                            </div>
                            <div class="ft clearfix">
                                <span class="views fl">浏览次数：<?php echo $k['hits'];?></span>
                                <a class="btn-bj transit bg__ff4a00-hover fr J__freeDesign" href="javascript:;">免费报价>></a>
                            </div>
                        </li>
                        <?php } } ?>
                        <?php } else { ?>
                        <li>
<?php include template('noresult', 'message');?>
                        
                        </li>
                        <?php } ?>
                    </ul>
                </div>
                <!-- <>分页.pagination -->
                <?php echo tag("moduleid=$moduleid&c=3$dtype&catid=$catid&pagesize=10&page=$page&showpage=1&datetype=5&order=".$MOD['order']."&template=list-page");?>
            </div>
        </div>
    </div>
</div>
