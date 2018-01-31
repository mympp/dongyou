<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('ui_header');?>
<link href="<?php echo DT_STATIC;?>statics/css/fancybox.css" rel="stylesheet" />
<script src="<?php echo DT_STATIC;?>statics/js/jquery.fancybox.js"></script>
<!-- END.sec_header -->
<!-- <>主体容器区域 -->
<div class="container">
<!-- //当前位置 -->
<div class="hd__curPos c--666 fs--12">
<div class="mid clearfix"><div class="fl">您所在位置：<a href="<?php echo $MODULE['1']['linkurl'];?>">首页</a> &raquo; <a href="<?php echo $MOD['linkurl'];?>"><?php echo $MOD['name'];?></a> &raquo; <?php echo cat_pos($CAT, ' &raquo; ');?></div></div>
</div>
<!-- //小区信息 -->
<div class="wrap__village-intro ff-st mid mt--10">
<div class="inner">
<?php if($parentid) $thisCat = get_cat($parentid);?>
<img class="img fl" src="<?php echo $thisCat['thumb'];?>" height="150" width="200" />
<div class="intro">
<h2><?php echo $thisCat['catname'];?></h2>
<div class="desc"><em class="dib v__top">楼盘介绍：</em><div class="txt dib"><?php echo $thisCat['introduce'];?></div></div>
<p class="addr ff-hv mt--10">楼盘地址：<?php echo $thisCat['address'];?> <a class="map" href="#">地图</a></p>
<div class="view ff-hv mt--10"><em class="c--ff4a00">20820</em>人查看了该楼盘</div>
</div>
<?php $listTags=tag("moduleid=$moduleid&condition=status=3&catid=$catid&areaid=$cityid&order=price asc&template=null&pagesize=1");?>
<div class="price">￥<em><?php echo $listTags['0']['price'];?></em>起</div>
</div>
</div>
<!-- //内容展示区域 -->
<div class="sec__repairChoose-detail bor mt--10 mb--50 mid">
<div class="rt-sidebar bg--fff">
<div class="inner">
<?php include template('appoitment');?>
<div class="wrap-nearcase borT mt--20 pt--10">
<h2>周边小区案例</h2>
<div class="list">
<?php $tags = tag("moduleid=$moduleid&condition=status=3 and addtime>$today_endtime-30*86400&catid=$catid&areaid=$cityid&order=rand()&pagesize=4&template=null")?>
<?php if(is_array($tags)) { foreach($tags as $i => $c) { ?>
<a href="<?php echo $c['linkurl'];?>">
<img src="<?php echo $c['thumb'];?>" />
<p class="clamp1"><?php echo $c['title'];?></p>
</a>
<?php } } ?>
</div>
</div>
<div class="wrap-history borT mt--20 pt--10 pb--30">
<h2>浏览历史</h2>
<div class="list">
</div>
</div>
</div>
</div>
<div class="lt-imgSlider">
<!--//小区列表-->
<div class="wrap__village-list wrap__village-detail">
<div class="item">
<!--维修案例-小区图册-->
<div class="tab-cnt">
<div class="head">
<span class="on"><a data-st-panel-cls="J__swtMenu" href="javascript:;">维修案例</a></span>
<span><a data-st-panel-cls="J__swtMenu" href="javascript:;">小区图册</a></span>
</div>
<div class="list">
<div class="J__swtMenu" style="display:block;">
<div class="village-cate">
<?php $num=tag("moduleid=$moduleid&condition=status=3&catid=$parentid&areaid=$cityid&fields=count(*) as num&template=null");?>
<span><a class="<?php if($catid==$parentid) { ?>on<?php } ?>
" href="?catid=<?php echo $parentid;?>">全部案例</a> <em class="num">(<?php echo $num['0']['num']?>)</em></span><em class="vline">|</em>
<?php if(is_array($maincat)) { foreach($maincat as $k => $v) { ?>
<span><a class="<?php if($catid== $v['catid']) { ?>on<?php } ?>
" href="<?php echo $MOD['linkurl'];?><?php echo $v['linkurl'];?>"><?php echo set_style($v['catname'],$v['style']);?></a><?php if(!$cityid) { ?> <em class="num">(<?php echo $v['item'];?>)</em><?php } ?>
</span><?php if(count($maincat) != ($k+1)) { ?><em class="vline">|</em><?php } ?>
<?php } } ?>
</div>
<ul class="clearfix">
<?php $tags = tag("moduleid=$moduleid&condition=status=3 and addtime>$today_endtime-30*86400&catid=$catid&areaid=$cityid&order=hits desc&page=$page&showpage=1&pagesize=9&template=null")?>
<?php if(is_array($tags)) { foreach($tags as $t => $v) { ?>
<li>
<a class="aimg" href="<?php echo $v['linkurl'];?>">
<img src="<?php echo str_replace('.thumb.', '.middle.',$v['thumb']);?>" height="180" width="100%" />
<?php if($v['catid']) $thisCat = get_cat($v['catid']);?>
<em class="lbl"><?php echo $thisCat['catname'];?></em>
</a>
<div class="title clamp2"><span><a href="<?php echo $v['linkurl'];?>"><?php echo $v['title'];?></a></span>
<div>[ 
<?php $CAT = get_cat($v['catid']); echo cat_pos($CAT, ' &raquo; ');?>
 ]</div>
</div>
<div class="ft clearfix">
<span class="price fl"><em class="c--ff4a00">￥<i class="fs18"><?php echo $v['price'];?></i></em>起</span>
<a class="btn-bj fr" href="<?php echo $v['linkurl'];?>">去看看</a>
</div>
</li>
<?php } } ?>
</ul>
<!-- <>分页.pagination -->
<div class="zone-g-pagination mt--10 clearfix">
<div class="pagination-inner">
<?php echo tag("moduleid=$moduleid&condition=status=3 and addtime>$today_endtime-30*86400&catid=$catid&areaid=$cityid&order=hits desc&page=$page&showpage=1&pagesize=9&template=list-page");?>
</div>
</div>
</div>
<!--//小区图册-->
<div class="J__swtMenu" style="display:none;" id="J__photos">
<ul class="clearfix">
<?php $randTags = tag("moduleid=$moduleid&condition=status=3 and addtime>$today_endtime-30*86400&catid=$catid&areaid=$cityid&order=rand()&pagesize=9&template=null")?>
<?php if(is_array($randTags)) { foreach($randTags as $t => $v) { ?>
<li>
<a class="aimg" href="<?php echo str_replace('.thumb.'.file_ext($v['thumb']), '',$v['thumb']);?>" rel="group">
<img src="<?php echo str_replace('.thumb.', '.middle.',$v['thumb']);?>"height="180" width="273">
<div class="cover-tit clamp1"><?php echo $v['title'];?></div>
</a>
</li>
<?php } } ?>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="pb--30"></div>
</div>
</div>
</div>
<!-- <>底部区域 -->
<script type="text/javascript">
$(function(){
//维修案例-小区图册切换
$(function(){
$('[data-st-panel-cls="J__swtMenu"]').on("click", function(){
var idx = $(this).parent().index();
$(this).parent("span").addClass("on").siblings().removeClass("on");
$(this).parents(".head").siblings(".list").find(".J__swtMenu").eq(idx).show().siblings().hide();
});
});
//大图预览
function fancybox(){
var config = {
'overlayColor': '#000',
'overlayOpacity': 0.45,
'transitionIn' : 'elastic',
'transitionOut' : 'elastic',
'showNavArrows': true,
'titlePosition' : 'inside',
'titleFormat' : function(title, currentArray, currentIndex, currentOpts) {
//alert(currentIndex);
var res = $("#J__photos li:eq("+currentIndex+") .cover-tit").html();
return "<div class='align-l fs14'>"+ res +"</div>"
}
};
$("a[rel=group]").fancybox(config);
//$(".isShow").fancybox(config).trigger("click");
}
fancybox();
});
</script>
<script src="<?php echo DT_STATIC;?>statics/js/zCaches.js"></script>
<script>
var ck = new zCaches();
var ckwrap = $('.wrap-history .list');
var clist = [];
for(var key in ck.list){
var item = ck.list[key];
if(item.type == 'mall'){
clist.push(item);
}
}
clist = clist.sort(function(a,b){
return a.itime<b.itime;
}).splice(0,6);
var clen = clist.length;
if(clen>0){
for(var i=0;i<clen;i++){
render(clist[i]);
}
ckwrap.parent().show();
}

function render(item){
var tpl =   '<a  href="/' + item.type + '/show.php?itemid='+ item.id +'">\
<img class="fl gray-filter"  src="'+item.cover+'"/>\
<div class="info">\
<h2 class="clamp1">'+item.title+'</h2>\
<div class="clearfix">\
<em class="fl c--999">入户门</em><label class="fr fs12"><span class="c--ff4a00 ff-ar fs14">￥<i>'+item.price+'</i></span>起</label>\
</div>\
</div>\
</a>';
ckwrap.append(tpl);
}
</script>
<?php include template('slider');?>
<?php include template('ui_footer');?>
