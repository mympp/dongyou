<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('ui_header');?>
<!-- <>主体容器区域 -->
<div class="container">
<!-- //当前位置 -->
<div class="hd__curPos c--666 fs--12">
<div class="mid clearfix"><div class="fl">您所在位置：<a href="index.html">首页</a> > 常见问题</div></div>
</div>

<!-- //内容展示区域 -->
<div class="sec__repairChoose-detail borT mid">
<?php include template('rightbar', $module);?>
<div class="lt-imgSlider">
<!-- //图文资讯-->
<div class="wrap__imgtxt-info">
<?php $imgTags=tag("moduleid=$moduleid&length=20&condition=status=3 and thumb!=''&catid=$catid&areaid=$cityid&pagesize=3&order=".$MOD['order']."&template=null")?>
<ul class="clearfix">
<?php if(is_array($imgTags)) { foreach($imgTags as $i => $t) { ?>
<li class="<?php if($i==0) { ?>first<?php } ?>
">
<a class="aimg" href="<?php echo $t['linkurl'];?>"><img src="<?php echo $t['thumb'];?>" /></a>
<h2 class="tit clamp1"><?php echo $t['title'];?></h2>
</li>
<?php } } ?>
</ul>
</div>

<!-- //常见问题列表 -->
<div class="wrap__faq-list">
<div class="tab-hd clearfix">
<span class="<?php if(!$catid ) { ?>on<?php } ?>
"><a data-st-panel-cls="J__swtFaq" href="/news">热门推荐</a></span>
<span class="<?php if($catid == 10 ) { ?>on<?php } ?>
"><a data-st-panel-cls="J__swtFaq" href="/news/list.php?catid=10">维修攻略</a></span>
<span class="<?php if($catid == 11 ) { ?>on<?php } ?>
"><a data-st-panel-cls="J__swtFaq" href="/news/list.php?catid=11">材料知识</a></span>
<span class="<?php if($catid == 12 ) { ?>on<?php } ?>
"><a data-st-panel-cls="J__swtFaq" href="/news/list.php?catid=12">设计知识</a></span>
<span class="<?php if($catid == 13 ) { ?>on<?php } ?>
"><a data-st-panel-cls="J__swtFaq" href="/news/list.php?catid=13">家居风水</a></span>
</div>
<div class="tab-ct">
<div class="J__swtFaq">
<div class="faq-list">
<?php $tags=tag("moduleid=$moduleid&condition=status=3 and addtime>$today_endtime-30*86400&catid=$catid&areaid=$cityid&order=hits desc&template=list-cat&pagesize=3&page=$page&showpage=1&showcat=1");?>
</div>
</div>
</div>
</div>

</div>
</div>
</div>
<?php include template('slider');?>
<?php include template('ui_footer');?>