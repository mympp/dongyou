<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('ui_header');?>
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
<div class="notto"><a class="<?php if(empty($areaid)) { ?>cur<?php } ?>
" href="/mall">不限</a></div>
<div class="items">
<?php $mainarea = get_mainarea(0, $AREA)?>
<?php if(is_array($mainarea)) { foreach($mainarea as $k => $v) { ?>
<a class="radio <?php if($areaid==$v['areaid']) { ?>cur<?php } ?>
" href="<?php echo $MOD['linkurl'];?><?php echo rewrite('search.php?areaid='.$v['areaid']);?>"><i></i><?php echo $v['areaname'];?></a>
<?php } } ?>
</div>
</div>
</dd>
</dl>
</div>
<!-- 筛选选择条件 -->
<div class="filter-options">
<div class="num dib mr&#45;&#45;10"><em class="c&#45;&#45;ff4a00 ff-ar"><?php echo $items;?></em>个满足条件</div>
<div class="options dib">

<?php if($areaid) { ?>
<?php if(is_array($mainarea)) { foreach($mainarea as $k => $v) { ?>
<?php if($v['areaid'] == $areaid) { ?>
<a href="javascript:;"><em><?php echo $v['areaname'];?></em><i class="close"></i></a>
<?php } ?>
<?php } } ?>
<?php } ?>
</div>
<a class="clear dib" href="/mall">清除</a>
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
<?php $altags = tag("moduleid=$moduleid&condition=status=3 and addtime>$today_endtime-30*86400&areaid=$cityid&order=rand()&pagesize=4&template=null")?>
<?php if(is_array($altags)) { foreach($altags as $i => $c) { ?>
<a href="<?php echo $c['linkurl'];?>">
<img src="<?php echo $c['thumb'];?>" />
<p class="clamp1"><?php echo $c['title'];?></p>
</a>
<?php } } ?>
</div>
</div>
<div class="wrap-history borT mt--20 pt--10 pb--30">
<h2>浏览历史</h2>
<div class="list"></div>
</div>
</div>
</div>
<div class="lt-imgSlider">
<div class="wrap__repair-main">
<!--//排序条-->
<div class="orderBar bornone borB clearfix">
<div class="sort fl J__order">
<!-- <a class="<?php if($_GET['type'] !='hits') { ?>cur<?php } else { ?>down<?php } ?>
" href="?type=addtime">最新</a>
<a class="<?php if($_GET['type'] =='hits') { ?>cur<?php } else { ?>down<?php } ?>
" href="?type=hits">最热</a> -->

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
<a class="img gray-filter" href="<?php echo $m['linkurl'];?>"><img src="<?php echo $m['thumb'];?>" /></a>
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
<div class="item">
<!--维修案例-小区图册-->
<div class="tab-cnt">
<div class="list">
<div class="J__swtMenu" style="display:block;">
<ul class="clearfix">
<?php if($tags) { ?>
<?php if(is_array($tags)) { foreach($tags as $k => $c) { ?>
<?php if($v['catid']) $thisCat = get_cat($v['catid']);?>
<li>
<a class="aimg" href="<?php echo $c['linkurl'];?>">
<img src="<?php echo $c['thumb'];?>" height="120" width="200" />
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
<?php } else { ?>
<?php include template('noresult', 'message');?>
<?php } ?>
</ul>
</div>
</div>
</div>
</div>
</div>
<!-- <>分页.pagination -->
<div class="zone-g-pagination mt--10 clearfix">
<div class="pagination-inner">
<!-- 分页-->
<?php include template('list-page', 'tag');?>
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
