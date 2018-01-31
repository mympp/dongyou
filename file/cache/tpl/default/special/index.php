<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('ui_header');?>
<script src="<?php echo DT_STATIC;?>statics/js/jquery.xySlider.js"></script>
<!-- <>轮播图区域 -->
<div class="zone__idx-slider J_idxSlider">
<div class="slider-inner">
<ul class="slider-list">
<li style="background-image: url(<?php echo DT_STATIC;?>statics/img/placeholder/guarantee-dingzhi-banner.jpg);"><a href="#" target="_blank" class="mid"></a></li>
<li style="background-image: url(<?php echo DT_STATIC;?>statics/img/placeholder/guarantee-dingzhi-banner.jpg);"><a href="#" target="_blank" class="mid"></a></li>
</ul>
<div class="slider-nav">
<div class="mid align-c"><i></i><i></i></div>
</div>
<script type="text/javascript">
var $slider = $(".J_idxSlider"), $nav = $(".slider-nav i");
$slider.jq_xySlider({
effect: "fade",
autoplay:true,
delay: 5000,
onEnd: function(idx){
$nav.removeClass("on").eq(idx).addClass("on");
},
navigation: $nav
});
</script>
</div>
</div> <!-- END.zone-idx-slider -->

<!-- <>主体容器区域 -->
<div class="container">
<!-- //banner区域 -->
<!--<div class="wrap__dingzhi-banner"></div>-->

<div class="wrap__dingzhi-img01"></div>
<div class="wrap__dingzhi-img02"></div>
<div class="wrap__dingzhi-img03"></div>
<div class="wrap__dingzhi-img04"></div>
<div class="wrap__dingzhi-img05"></div>
<div class="wrap__dingzhi-img06"></div>

<div class="wrap__service-apply">
<div class="mid align-c">
<h3>无论您处于定制哪个阶段</h3>
<h2>东有都能为您提供免费咨询服务</h2>
<label class="tel ff-hv">客服电话：13794416333</label>
<a class="btn-applyNow transit" href="javascript:;">立即申请</a>
</div>
</div>

<div class="wrap__dingzhi-freestyle">
<div class="mid clearfix">
<h2 class="tit">家居定制实例 总有您的freestyle</h2>
<div class="wrap__slider J__slider">
<div class="slider-inner">
<ul class="slider-list">
<li style="background-image: url(<?php echo DT_STATIC;?>statics/img/placeholder/case-img01.jpg);"></li>
<li style="background-image: url(<?php echo DT_STATIC;?>statics/img/placeholder/case-img02.jpg);"></li>
<li style="background-image: url(<?php echo DT_STATIC;?>statics/img/placeholder/case-img03.jpg);"></li>
<li style="background-image: url(<?php echo DT_STATIC;?>statics/img/placeholder/case-img04.jpg);"></li>
<li style="background-image: url(<?php echo DT_STATIC;?>statics/img/placeholder/case-img05.jpg);"></li>
<li style="background-image: url(<?php echo DT_STATIC;?>statics/img/placeholder/case-img06.jpg);"></li>
<li style="background-image: url(<?php echo DT_STATIC;?>statics/img/placeholder/case-img07.jpg);"></li>
<li style="background-image: url(<?php echo DT_STATIC;?>statics/img/placeholder/case-img04.jpg);"></li>
<li style="background-image: url(<?php echo DT_STATIC;?>statics/img/placeholder/case-img02.jpg);"></li>
</ul>
<div class="slider-nav">
<dl class="clearfix">
<dd class="nav"><div class="inner"><img src="<?php echo DT_STATIC;?>statics/img/placeholder/case-img01.jpg" /><h2><em>门窗</em></h2></div></dd>
<dd class="nav"><div class="inner"><img src="<?php echo DT_STATIC;?>statics/img/placeholder/case-img02.jpg" /><h2><em>入户门</em></h2></div></dd>
<dd class="nav"><div class="inner"><img src="<?php echo DT_STATIC;?>statics/img/placeholder/case-img03.jpg" /><h2><em>栏杆</em></h2></div></dd>
<dd class="nav"><div class="inner"><img src="<?php echo DT_STATIC;?>statics/img/placeholder/case-img04.jpg" /><h2><em>扶手</em></h2></div></dd>
<dd class="nav"><div class="inner"><img src="<?php echo DT_STATIC;?>statics/img/placeholder/case-img05.jpg" /><h2><em>雨棚</em></h2></div></dd>
<dd class="nav"><div class="inner"><img src="<?php echo DT_STATIC;?>statics/img/placeholder/case-img06.jpg" /><h2><em>防盗网</em></h2></div></dd>
<dd class="nav"><div class="inner"><img src="<?php echo DT_STATIC;?>statics/img/placeholder/case-img07.jpg" /><h2><em>阁楼</em></h2></div></dd>
<dd class="nav"><div class="inner"><img src="<?php echo DT_STATIC;?>statics/img/placeholder/case-img04.jpg" /><h2><em>全铝<br />家具</em></h2></div></dd>
<dd class="nav"><div class="inner"><img src="<?php echo DT_STATIC;?>statics/img/placeholder/case-img02.jpg" /><h2><em>铝合金<br />护栏</em></h2></div></dd>
</dl>
<p class="fs14 ff-sm pt--20"><a class="view-more" href="#">查看更多家居产品>></a></p>
<a class="btn-apply" href="javascript:;">立即申请</a>
</div>
<script type="text/javascript">
var $slider1 = $(".J__slider"), $nav1 = $(".slider-nav .nav");
$slider1.jq_xySlider({
effect: "fade",
autoplay:true,
onEnd: function(idx){
$nav1.removeClass("on").eq(idx).addClass("on");
},
navigation: $nav1
});
</script>
</div>
</div>
</div>
</div>
</div>
<?php include template('slide');?>
<?php include template('ui_footer');?>