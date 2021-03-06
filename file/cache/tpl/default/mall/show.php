<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('ui_header');?>
<script src="<?php echo DT_STATIC;?>statics/js/jquery.xySlider.js"></script>
<!-- END.sec_header -->
<!-- <>主体容器区域 -->
<div class="container">
<!-- //当前位置 -->
<div class="hd__curPos c--666 fs--12 bg--f8f8f8">
<div class="mid clearfix">
<div class="fl">您所在位置：<a href="<?php echo $MODULE['1']['linkurl'];?>">首页</a> &raquo; <a href="<?php echo $MOD['linkurl'];?>"><?php echo $MOD['name'];?></a> &raquo; <?php echo cat_pos($CAT, ' &raquo; ');?> &raquo;</div>
</div>
</div>
<!-- //内容展示区域 -->
<div class="sec__repairChoose-detail borB mb--50 mid">
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
<div class="wrap-history borT mt--20 pt--10 pb--30" style="display:none">
<h2>浏览历史</h2>
<div class="list"></div>
</div>
</div>
</div>
<div class="lt-imgSlider">
<!-- //左侧大图展示-->
<div class="wrap-imgSliderBox clearfix" style="background:#f8f8f8;">
<div class="wrap-imgSlider">
<div class="js-imglist" style="padding-bottom:150px;">
<!-- <span id="collect" style="background: rgba(0,0,0,.5);color: #fff;cursor: pointer;font-size: 14px;font-family: 宋体;padding: 10px 20px;line-height: 20px;position: absolute;top: 0;right: 0;"><i></i><em>加入收藏</em></span> -->
<ul class="wrap__img-preview">
<?php if(is_array($albums)) { foreach($albums as $k => $v) { ?>
<li><img src="<?php echo $v;?>" height="450" width="680" /><div class="desc"><?php echo $v['introduce'];?></div><span class="collect"><i></i><em>加入收藏</em></span></li>
<?php } } ?>
</ul>
<!-- //小缩略图-->
<div class="wrap__img-thumb clearfix J__imgThumb">
<div class="inner dib">
<a class="js-btn-prev prev-btn prev-btn2 fl disabled" id="ctl-prev" href="javascript:"></a>
<div class="g-thumblist">
<ul class="js-thumb-ls thumb-ls fl pos-rel">
<?php if(is_array($thumbs)) { foreach($thumbs as $k => $v) { ?>
<li><a><em class="num"><?php echo $k+1;?>/<?php echo count($thumbs);?></em><img src="<?php echo $v;?>" /></a></li>
<?php } } ?>
</ul>
</div>
<a class="js-btn-next next-btn next-btn2 fl" id="ctl-next" href="javascript:;"></a>
</div>
</div>
<a class="js-btn-prev lr-prev-btn" id="ctl-prev" href="javascript:"></a>
<a class="js-btn-next lr-next-btn" id="ctl-next" href="javascript:"></a>
</div>
</div>
</div>
<!-- //小区参数-->
<div class="wrap-releaseParameter clearfix mt--20">
<table class="train__tab-result" border="0" cellspacing="0" cellpadding="0">
<tbody class="align-c">
<tr>
<th>分类名称</th>
<td><?php echo $CAT['catname'];?></td>
<th>案例户型</th>
<td>普通住宅</td>
<th>案例面积</th>
<td>86㎡</td>
</tr>
<tr>
<th>楼盘名称</th>
<td><?php echo $title;?></td>
<th>所在区域</th>
<td><?php echo area_pos($item['areaid'], '&nbsp;');?></td>
<th>案例造价</th>
<td><?php echo $price;?>元起</td>
</tr>
</tbody>
</table>
<div class="desc pt--10"><?php echo $content;?></div>
</div>
<!--//小区相关案例-->
<div class="wrap__village-list mt--50">
<div class="item">
<div class="tab-cnt">
<div class="hdtit clearfix"><h2 class="fl">小区相关案例</h2><a class="fr" href="show.php?itemid=<?php echo $itemid;?>">换一批</a></div>
<div class="list pb--20">
<div class="J__swtMenu" style="display:block;">
<ul class="clearfix">
<?php $dht = tag("moduleid=$moduleid&condition=status=3&catid=$catid&areaid=$cityid&order=rand() desc&page=$page&showpage=1&pagesize=2&template=null")?>
<?php if(is_array($dht)) { foreach($dht as $i => $v) { ?>
<li>
<a class="aimg" href="<?php echo $v['linkurl'];?>">
<img src="<?php echo $v['thumb'];?>" height="120" width="200" />
<!--<em class="lbl">楼梯扶手</em>-->
</a>
<div class="title clamp2"><span><a href="<?php echo $v['linkurl'];?>"><?php echo $v['title'];?></a></span></div>
<div class="ft clearfix">
<span class="price fl"><em class="c--ff4a00">￥<i class="fs18"><?php echo $v['price'];?></i></em>起</span>
<a class="btn-bj fr" href="<?php echo $v['linkurl'];?>">去看看</a>
</div>
</li>
<?php } } ?>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script>
$(function () {
/** 图片轮播 */
var $slider = $(".js-imglist"), $nav = $(".js-thumb-ls li");
$slider.jq_xySlider({
selector: ".wrap__img-preview",
effect: "fade",
autoplay:true,
onEnd: function(idx){
$nav.removeClass("on").eq(idx).addClass("on");
},
navigation: $nav
});
/** 小缩略图左右切换 */
$(function () {
$(".J__imgThumb").jq_simpleStep({visual:5});
});
//收藏
$(".collect").on("click", function(){
if(!window.hasLogin){
alert('请先登录');
return false;
        }
var that = $(this);
var parentid  = "<?php echo $MOD['moduleid'];?>";
var articleid = "<?php echo $itemid;?>";
var catid   = "<?php echo $catid;?>";
var action = 'add';
$.post('/member/favorite_dongyou.php', {parentid:parentid,articleid:articleid,catid:catid,action:action}, function(data) {
if(!data){
alert('系统出错');
return false;
}
if(data == 'true'){
alert('收藏成功');
that.toggleClass("on");
that.find("em").text($(this).find("em").text()=="加入收藏" ? "已收藏" : "加入收藏");
}else if(data == 'false'){
alert('收藏失败，刷新再试试！');
return false;
}else{
alert(data);
return false;
}
});
})
})
</script>
<!-- <>底部区域 -->
<?php include template('slider');?>
<?php if($itemid) { ?>
<script src="<?php echo DT_STATIC;?>statics/js/zCaches.js"></script>
<script>
var ck = new zCaches();
ck.add({
id:'<?php echo $itemid;?>',
type:'mall',
cover:'<?php echo $thumb;?>',
title:'<?php echo $title;?>',
price:'<?php echo $price;?>',
tag:'',
itime:+new Date()
});

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
<?php } ?>
<?php include template('ui_footer');?>
