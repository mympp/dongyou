<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('ui_header');?>
<script src="<?php echo DT_STATIC;?>statics/js/jquery.masonry.min.js"></script>
<script src="<?php echo DT_STATIC;?>statics/js/jquery.xySlider.js"></script>
<!-- <>主体容器区域 -->
<div class="container">
<!-- //当前位置 -->
<div class="hd__curPos c--666 fs--12">
<div class="mid clearfix">
<div class="fl">您所在位置：<a href="<?php echo $MODULE['1']['linkurl'];?>">首页</a> &raquo; <a href="<?php echo $MOD['linkurl'];?>"><?php echo $MOD['name'];?></a> &raquo; <?php echo cat_pos($CAT, ' &raquo; ');?> &raquo;</div>
</div>
</div>

<!-- //列表区域 -->
<div class="sec__repairChoose-list ff-st mid mt--10 pb--50">
<div class="clearfix">
<div class="wrap__repair-main">
<!--//排序条-->
<div class="orderBar clearfix">
<div class="sort fl J__order">
<a class="cur">为你找到以下数据</a>
<!-- <a class="<?php if($_GET['type'] !='hits') { ?>cur<?php } else { ?>down<?php } ?>
" href="?type=addtime">最新</a>
<a class="<?php if($_GET['type'] =='hits') { ?>cur<?php } else { ?>down<?php } ?>
" href="?type=hits">最热</a> -->
</div>
</div>
<!--//精选列表-->
<?php if($tags) { ?>
<?php include template('list-photo', 'tag');?>
<?php } else { ?>
<?php include template('noresult', 'message');?>

<?php } ?>

</div>
</div>
</div>
</div>
</div>
<?php include template('slider');?>
<?php include template('ui_footer');?>
<script>
$(function(){
/** ------------------ 维修精选js ------------------ */
//位置筛选（点击下拉）
$("#J__filterList .opt").on("click", ".dropdown", function(){
var idx = $(this).index();
if($(this).hasClass("on")){
$(this).removeClass("on");
$("#J__filterList .filterBox").eq(idx).slideUp(200);
}else{
$(this).addClass("on").siblings().removeClass("on");
$("#J__filterList .filterBox").slideUp(200);
$("#J__filterList .filterBox").eq(idx).slideDown(200);
}
});
//位置筛选（不限）
$("#J__filterList .first .opt .notto").on("click", "a", function(){
$("#J__filterList .opt .dropdown").removeClass("on");
$("#J__filterList .filterBox").hide();
clsOpts();
});
//位置筛选（X按钮）
$("#J__filterList .opt").on("click", ".dropdown .close", function(){
//勾选不限
$(this).parents(".items").siblings(".notto").find("a").addClass("cur");
clsOpts();
});
//位置筛选（radio选项）
$("#J__filterList .filterBox .opt").on("click", ".radio", function(){
var idx = $(this).parents(".filterBox").index() - 1;
var txt = $(this).text();
$("#J__filterList .first .opt .notto").find("a").removeClass("cur");
clsOpts();
$("#J__filterList .dropdown").eq(idx).find(".zoneTit").hide();
$("#J__filterList .dropdown").eq(idx).find(".zoneSelect").show();
$("#J__filterList .dropdown").eq(idx).find(".zoneSelect .text").text(txt).attr("title", txt);
});
//清除选项
function clsOpts(){
$("#J__filterList .filterBox").find(".radio").removeClass("cur");
$("#J__filterList .dropdown").find(".zoneTit").show();
$("#J__filterList .dropdown").find(".zoneSelect").hide();
$("#J__filterList .dropdown").find(".zoneSelect .text").text("").attr("title", "");
}
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
//自定义价格
$(".J__price input").on("input propertychange", function(){
var priceVal = parseInt($.trim($(this).val()));
if (priceVal <= 0) {
$(this).val(1)
return;
}
//判断价格是否是数字
var regExp = /^[1-9]*[1-9][0-9]*$/;
if (isNaN(priceVal) || !regExp.test($.trim($(this).val()))) {
$(this).val(1);
return;
}
});
//更多操作(展开-隐藏)
$(".J__more").on("click", function(){
if($(this).hasClass("on")){
$(this).removeClass("on");
$(this).find("em").text("更多");
$(this).siblings(".items").removeClass("is-expand").addClass("is-collapse");
}else{
$(this).addClass("on");
$(this).find("em").text("收起");
$(this).siblings(".items").removeClass("is-collapse").addClass("is-expand");
}
});
/** ------------------ 排序筛选js ------------------ */
$(".J__order").on("click", "a", function(){
$(this).addClass("cur").siblings().removeClass("cur");
});
});
</script>
