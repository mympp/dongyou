<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('ui_header');?>
<!-- <>主体容器区域 -->
<div class="container">
<!-- //当前位置 -->
<div class="hd__curPos c--666 fs--12 bg--f8f8f8">
<div class="mid clearfix"><div class="fl">您所在位置：<a href="<?php echo $MODULE['1']['linkurl'];?>">首页</a> &raquo; <a href="<?php echo $MOD['linkurl'];?>"><?php echo $MOD['name'];?></a> &raquo; <?php echo cat_pos($CAT, ' &raquo; ');?> &raquo; 正文</div></div>
</div>

<!-- //内容展示区域 -->
<div class="sec__repairChoose-detail mid">
<?php include template('rightbar', $module);?>
<div class="lt-imgSlider">
<!-- //常见问题详情页 -->
<div class="wrap__faq-detail">
<div class="faq-intros">
<div class="hdtit">
<h2>[<?php echo cat_pos($CAT, ' &raquo; ');?>] <?php echo $title;?></h2>
<p class="time"><?php echo $adddate;?> <em class="view ml--30"><i class="c--ff4a00"><?php echo $hits;?></i>人浏览</em> -- <span id="collect" style="cursor: pointer;"><i></i><em>加入收藏</em></span></p>
</div>
<div class="intro">
<?php include template('content', 'chip');?>
</div>
<div class="prevnext clearfix">
<span class="prev fl">下一篇：<?php echo tag("moduleid=$moduleid&condition=status=3 and addtime>$addtime&areaid=$cityid&pagesize=1&order=addtime asc&template=list-np", -1);?></span>
<span class="next fr">上一篇：<?php echo tag("moduleid=$moduleid&condition=status=3 and addtime<$addtime&areaid=$cityid&pagesize=1&order=addtime desc&template=list-np", -1);?></span>
</div>
</div>
<!-- //点赞、分享 -->
<div class="faq-share clearfix">
<div class="favor fl">
<a class="zan" href="javascript:;"><i></i><em class="num">0</em></a>
<a class="love" href="javascript:;"><i></i><em class="num">12</em></a>
</div>
<div class="share fr bdsharebuttonbox">
<a class="wx" href="#" data-cmd="weixin">分享到朋友圈</a>
<a class="wb" href="#" data-cmd="tsina">分享到微博</a>
</div>
</div>
</div>

<!--//推荐阅读-->
<div class="wrap__village-list wrap__village-detail borT">
<div class="item">
<div class="tab-cnt">
<div class="hdtit clearfix"><h2 class="fl">推荐阅读</h2></div>
<div class="list pb--20">
<div class="J__swtMenu" style="display:block;">
<?php echo tag("moduleid=$moduleid&length=44&condition=status=3 and itemid<>$itemid and keyword like '%".$keytags['0']."%'&areaid=$cityid&pagesize=3&order=".$MOD['order']."&template=list-show-rec", -2);?>
</div>
</div>
</div>
</div>
</div>

</div>
</div>
</div>
<style>
.bdshare-button-style0-16 a, .bdshare-button-style0-16 .bds_more {
margin:0;
padding-left:0;
float:none;
height:auto;
line-height: inherit;
}
</style>
<script>
$(function () {
//收藏
$("#collect").on("click", function(){
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
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
<?php include template('slider');?>
<?php include template('ui_footer');?>