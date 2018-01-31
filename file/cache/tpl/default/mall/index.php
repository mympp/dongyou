<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('ui_header');?>
<link href="<?php echo DT_STATIC;?>statics/css/fancybox.css" rel="stylesheet" />
<script src="<?php echo DT_STATIC;?>statics/js/jquery.fancybox.js"></script>
<!-- <>主体容器区域 -->
<div class="container">
<!-- //当前位置 -->
<div class="hd__curPos c--666 fs--12">
<div class="mid clearfix"><div class="fl">您所在位置：<a href="<?php echo $MODULE['1']['linkurl'];?>">首页</a> &raquo; <a href="<?php echo $MOD['linkurl'];?>"><?php echo $MOD['name'];?></a> &raquo; <?php echo cat_pos($CAT, ' &raquo; ');?></div></div>
</div>
<!-- //筛选区域 -->
<div class="sec__repairChoose-filter ff-st mid mt--10">
<div class="filter-list filter-tuku clearfix mt--10" id="J__filterList">
<dl>
<dt class="lbl fl">地址</dt>
<dd class="opt">
<div class="filter-ct fl" style="padding-right:65px;">
<div class="notto"><a class="cur" href="/mall">不限</a></div>
<div class="items">
<?php $mainarea = get_mainarea(0, $AREA)?>
<?php if(is_array($mainarea)) { foreach($mainarea as $k => $v) { ?>
<a class="radio" href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid='.$v['areaid']);?>"><i></i><?php echo $v['areaname'];?></a>
<?php } } ?>
</div>
</div>
</dd>
</dl>
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
<?php $tags = tag("moduleid=$moduleid&condition=status=3 and addtime>$today_endtime-30*86400&areaid=$cityid&order=rand()&pagesize=4&template=null")?>
<?php if(is_array($tags)) { foreach($tags as $i => $c) { ?>
<a href="<?php echo $c['linkurl'];?>">
<img src="<?php echo str_replace('.thumb.', '.middle.',$c['thumb']);?>" />
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
<div class="wrap__repair-main">
<!--//排序条-->
<div class="orderBar bornone borB clearfix">
<div class="sort fl J__order">
<a class="<?php if($_GET['type'] !='hits') { ?>cur<?php } else { ?>down<?php } ?>
" href="?type=addtime">最新</a>
<a class="<?php if($_GET['type'] =='hits') { ?>cur<?php } else { ?>down<?php } ?>
" href="?type=hits">最热</a>
</div>
<div class="sear fr">
<form action="<?php echo $MOD['linkurl'];?>search.php" id="fsearch">
<input type="hidden" name="list" id="list" value="<?php echo $list;?>"/>
<input type="text" class="ipt-text fl" name="kw" value="<?php echo $kw;?>" placeholder="找自家小区工地，看真实维修案例" />
<input type="submit" class="btn-sear fl" style="border: 0" value="查找">
</form>
</div>
</div>
</div>
<!--//推荐小区-->
<div class="wrap__village-recommend mt--10">
<div class="slogan"><em class="kw">荐</em><em class="txt"><i></i>当<br />前<br />推<br />荐</em></div>
<div class="list">
<ul class="clearfix">
<?php $hotTags=tag("moduleid=$moduleid&condition=status=3 and addtime>$today_endtime-30*86400&catid=$catid&areaid=$cityid&order=hits desc&template=null&pagesize=3&page=$page&showpage=1&showcat=1");?>
<?php if(is_array($hotTags)) { foreach($hotTags as $t => $m) { ?>
<li>
<a class="img gray-filter" href="<?php echo $m['linkurl'];?>"><img src="<?php echo str_replace('.thumb.', '.middle.',$m['thumb']);?>" /></a>
<div class="cnt">
<a class="title ellipsis" href="<?php echo $m['linkurl'];?>"><?php echo $m['title'];?>[<?php echo $m['catname'];?>]</a>
<?php if($m['catid']) $thisCat = get_cat($m['catid']);?>
<label class="addr db mt--10"><a href="<?php echo $thisCat['linkurl'];?>">[<?php echo $thisCat['catname'];?>]</a></label>
<p class="price mt--10"><em class="unit">￥</em><em class="num"><?php echo $m['price'];?></em>起</p>
</div>
</li>
<?php } } ?>
</ul>
</div>
</div>
<!--//小区列表-->
<div class="wrap__village-list">
<?php if(is_array($maincat)) { foreach($maincat as $k => $v) { ?>
<?php if($v['catid']) $thisCat = get_cat($v['catid']);?>
<div class="item">
<div class="row clearfix">
<div class="col1 fl">
<a href="<?php echo $MOD['linkurl'];?><?php echo $v['linkurl'];?>"><img src="<?php echo str_replace('.thumb.', '.middle.',$v['thumb']);?>" height="100" width="150" /></a>
<?php $num=tag("moduleid=$moduleid&condition=status=3&catid=".$v['catid']."&areaid=$cityid&fields=count(*) as num&template=null");?>
<em class="imgNum"><?php echo $num['0']['num']?></em>
</div>
<div class="col2 fl">
<div class="hotelName clearfix">
<h2><a class="ellipsis" href="<?php echo $MOD['linkurl'];?><?php echo $v['linkurl'];?>"><?php echo set_style($v['catname'],$v['style']);?></a></h2>
</div>
<p class="addr ff-hv mt--10">地址：<?php echo $thisCat['address'];?> <a class="map" href="#">地图</a></p>
<div class="view ff-hv mt--10"><em class="c--ff4a00">20820</em>人查看了该楼盘</div>
</div>
<div class="col3 fr">
<div class="price dib">
<?php $listTags=tag("moduleid=$moduleid&condition=status=3&catid=".$v['catid']."&areaid=$cityid&order=price asc&template=null&pagesize=1");?>
<p class="min"><em class="unit">￥</em><em class="num"><?php if($listTags['0']['price']) { ?><?php echo $listTags['0']['price'];?><?php } else { ?>0.00<?php } ?>
</em>起</p>
<a class="btn-view bg__ff4a00-hover mt--30" href="<?php echo $MOD['linkurl'];?><?php echo $v['linkurl'];?>">查看详情</a>
</div>
</div>
</div>
<!--维修案例-小区图册-->
<div class="tab-cnt">
<div class="head">
<span class="on"><a data-st-panel-cls="J__swtMenu" href="javascript:;">维修案例</a></span>
<span><a data-st-panel-cls="J__swtMenu" href="javascript:;">小区图册</a></span>
</div>
<div class="list">
<div class="J__swtMenu" style="display:block;">
<ul class="clearfix">
<?php $type =$_GET['type'] ? $_GET['type'] : 'hits';?>
<?php $listTags=tag("moduleid=$moduleid&condition=status=3 and addtime>$today_endtime-30*86400&catid=".$v['catid']."&areaid=$cityid&order=$type desc&template=null&pagesize=4");?>
<?php if(is_array($listTags)) { foreach($listTags as $t => $c) { ?>
<li>
<a class="aimg" href="<?php echo $c['linkurl'];?>">
<img src="<?php echo str_replace('.thumb.', '.middle.',$c['thumb']);?>" height="120" width="200" />
<?php if($c['catid']) $thisCat = get_cat($c['catid']);?>
<em class="lbl"><?php echo $thisCat['catname'];?></em>
</a>
<div class="title clamp2"><span><a href="<?php echo $c['linkurl'];?>"><?php echo $c['title'];?></a></span></div>
<div class="ft clearfix">
<span class="price fl"><em class="c--ff4a00">￥<i class="fs18"><?php echo $c['price'];?></i></em>起</span>
<a class="btn-bj fr" href="<?php echo $c['linkurl'];?>">去看看</a>
</div>
</li>
<?php } } ?>
</ul>
</div>
<div class="J__swtMenu J__photos" style="display:none;">
<ul class="clearfix">
<?php $randListTags=tag("moduleid=$moduleid&condition=status=3 and addtime>$today_endtime-30*86400&catid=".$v['catid']."&areaid=$cityid&order=rand() desc&template=null&pagesize=4");?>
<?php if(is_array($randListTags)) { foreach($randListTags as $t => $v) { ?>
<li>
<a class="aimg"  href="<?php echo str_replace('.thumb.'.file_ext($v['thumb']), '',$v['thumb']);?>" rel="group">
<img src="<?php echo str_replace('.thumb.', '.middle.',$v['thumb']);?>" height="120" width="200" />
</a>
<div class="title clamp2"><span><a href="<?php echo $v['linkurl'];?>"><?php echo $v['title'];?></a></span></div>
</li>
<?php } } ?>
</ul>
</div>
</div>
</div>
</div>
<?php } } ?>
</div>
<!-- <>分页.pagination -->
<div class="zone-g-pagination mt--10 clearfix">
<div class="pagination-inner">
<!-- 分页-->
</div>
</div>
<div class="pb--30"></div>
</div>
</div>
</div>
<script type="text/javascript">
$(function(){
//单选（不限）
$("#J__filterList .opt .notto").on("click", "a", function(){
$(this).addClass("cur");
$(this).parent().siblings(".items").find(".radio").removeClass("cur");
});
//单选
$("#J__filterList .opt").on("click", ".radio", function(){
$(this).parent().siblings(".notto").find("a").removeClass("cur");
$(this).addClass("cur").siblings().removeClass("cur");
});
/** ------------------ 排序筛选js ------------------ */
$(".J__order").on("click", "a", function(){
$(this).addClass("cur").siblings().removeClass("cur");
});
//维修案例-小区图册切换
$(function(){
$('[data-st-panel-cls="J__swtMenu"]').on("click", function(){
var idx = $(this).parent().index();
$(this).parent("span").addClass("on").siblings().removeClass("on");
$(this).parents(".head").siblings(".list").find(".J__swtMenu").eq(idx).show().siblings().hide();
});
});
});
</script>
<script src="<?php echo DT_STATIC;?>statics/js/zCaches.js"></script>
<script>
$(function(){
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
var res = $(".J__photos li:eq("+currentIndex+") .cover-tit").html();
return "<div class='align-l fs14'>"+ res +"</div>"
}
};
$("a[rel=group]").fancybox(config);
//$(".isShow").fancybox(config).trigger("click");
}
fancybox();
});
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
