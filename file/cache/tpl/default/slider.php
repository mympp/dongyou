<?php defined('IN_DESTOON') or exit('Access Denied');?>
<!-- …… 右侧浮动工具条.Start-->
<div class="wrap__floatToolbar">
<ul class="clearfix">
<li class="J__freeDesign">
<a class="ico i1" href="javascript:;"></a>
<div class="wrap-sub">
<a href="javascript:;">免费设计</a><i class="arr"></i>
</div>
</li>
<li>
<a class="ico i2" href="javascript:;"></a>
<div class="wrap-sub wrap-qrcode clearfix">
<div class="item fl">
<p>关注微信</p>
<img src="<?php echo DT_STATIC;?>statics/img/ft-qrcode-img.png" />
</div>
<div class="item fr">
<p>关注微信</p>
<img src="<?php echo DT_STATIC;?>statics/img/ft-qrcode-img.png" />
</div>
<i class="arr"></i>
</div>
</li>
<li>
<a class="ico i3" href="javascript:;"></a>
<div class="wrap-sub">
<a href="javascript:;">联系客服</a><i class="arr"></i>
</div>
</li>
<li class="J__goTop">
<a class="ico i4" href="javascript:;"></a>
<div class="wrap-sub">
<a href="javascript:;">返回顶部</a><i class="arr"></i>
</div>
</li>
</ul>
</div>
<!--//免费设计弹窗-->
<div class="popup__mask"></div>
<div class="popup__model popup-freedesign">
<i class="popup-close"></i>
<form action="<?php echo $EXT['guestbook_url'];?>index.php" method="post" id="subform">
<ul class="form">
<input type="hidden" name="submit" value="1" />
<input type="hidden" name="type" value="设计咨询" />
<li><label class="lbl">建筑面积</label><input class="ipt-text" type="text" name="mianji" placeholder="请输入建筑面积" /> <span class="unit">㎡</span></li>
<li><label class="lbl">手机号码<i class="c--ff4a00">*</i></label><input class="ipt-text" type="text" name="telephone" placeholder="请输入您的手机号码" /></li>
<li><label class="lbl">您的称呼<i class="c--ff4a00">*</i></label><input class="ipt-text" type="text" name="nickname" placeholder="请输入您的称呼" /></li>
</ul>
<input class="btn-join" type="submit" value="立即加入" style="border:none;background:none;cursor:pointer;" />
</form>
</div>
<script type="text/javascript">
$(function(){
$(".wrap__floatToolbar li").hover(function () {
$(this).find(".wrap-sub").stop().show().animate({
right : "48px",
opacity : "1"
}, 300)
}, function () {
$(this).find(".wrap-sub").stop().show().animate({
right : "105px",
opacity : "0"
}, 300, function () {
$(this).hide()
})
});

//返回顶部
$(".J__goTop").on("click", function () {
$("html, body").animate({scrollTop : 0}, 200);
});

//免费设计弹窗
$(".J__freeDesign").on("click", function(){
$(".popup-freedesign").removeClass("up").addClass("down");
$(".popup__mask").fadeIn(300);
});
$(".popup-freedesign .popup-close").on("click", function () {
$(".popup-freedesign").removeClass("down").addClass("up");
$(".popup__mask").fadeOut(300);
});
});
</script>
<!-- …… 右侧浮动工具条.End-->