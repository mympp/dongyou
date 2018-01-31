<?php defined('IN_DESTOON') or exit('Access Denied');?><script src="js/jquery.xySlider.js"></script>
<!-- <>轮播图区域 -->
<div class="zone__idx-slider J_idxSlider">
<div class="slider-inner">
<ul class="slider-list">
<li style="background-image: url(<?php echo DT_STATIC;?>statics/img/placeholder/scene-banner.jpg);"><a href="#" target="_blank" class="mid"></a></li>
<li style="background-image: url(<?php echo DT_STATIC;?>statics/img/placeholder/scene-banner.jpg);"><a href="#" target="_blank" class="mid"></a></li>
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
<!--<div class="wrap__scene-banner"></div>-->
<!-- //分类查找 -->
<div class="similar-wrap wrap__cate-sear">
<div class="mid clearfix">
<div class="mt"><span class="tit">您可以从以下分类中直接查找</span></div>
<div class="mc">
<ul class="clearfix" id="J__cateList">
<li>
<a href="#">
<span class="ico i1"><i></i></span>
<h2 class="tit transit">铝合金门窗</h2>
<label class="clamp2 transit">铝合金门窗　德国系统门窗（Hopo）<br />集成门窗　阳台门窗　铝合金纱窗</label>
</a>
</li>
<li>
<a href="#">
<span class="ico i2"><i></i></span>
<h2 class="tit transit">入户门</h2>
<label class="clamp2 transit">不锈钢防盗门　豪华防盗门<br />别墅大门　全铜大门</label>
</a>
</li>
<li>
<a href="#">
<span class="ico i3"><i></i></span>
<h2 class="tit transit">不锈钢栏杆</h2>
<label class="clamp2 transit">阳台栏杆　玻璃栏杆　商场栏杆<br />窗前栏杆</label>
</a>
</li>
<li>
<a href="#">
<span class="ico i4"><i></i></span>
<h2 class="tit transit">楼梯扶手</h2>
<label class="clamp2 transit">不锈钢楼梯扶手　实木楼梯扶手<br />玻璃楼梯扶手</label>
</a>
</li>
<li>
<a href="#">
<span class="ico i5"><i></i></span>
<h2 class="tit transit">雨棚</h2>
<label class="clamp2 transit">不锈钢雨棚　玻璃雨棚<br />耐力板雨棚　阳光板雨棚</label>
</a>
</li>
<li>
<a href="#">
<span class="ico i6"><i></i></span>
<h2 class="tit transit">全铝家具</h2>
<label class="clamp2 transit">柜门维修　全铝橱柜<br />全铝家具</label>
</a>
</li>
</ul>
<script type="text/javascript">
$(function(){
$("#J__cateList li").hover(function(){
$(this).addClass("on").find(".ico i").animate({opacity: 1}, 300);
}, function(){
$(this).removeClass("on").find(".ico i").animate({opacity: 0}, 300);
});
});
</script>
</div>
</div>
</div>
<div class="wrap__scene-dzlist bg01">
<div class="mid clearfix">
<div class="dzlist fr">
<h2 class="tit">铝合金门窗定制</h2>
<ul class="clearfix">
<li>
<a href="#"><img src="<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/img/placeholder/case-img01.jpg" height="200" width="260" /></a>
<h3 class="clamp1">淘金路马生钛合金不锈钢防盗门</h3>
</li>
<li>
<a href="#"><img src="<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/img/placeholder/case-img06.jpg" height="200" width="260" /></a>
<h3 class="clamp1">淘金路马生钛合金不锈钢防盗门淘金路马生钛合金不锈钢防盗门</h3>
</li>
<li>
<a href="#"><img src="<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/img/placeholder/case-img07.jpg" height="200" width="260" /></a>
<h3 class="clamp1">淘金路马生钛合金不锈钢防盗门</h3>
</li>
<li>
<a href="#"><img src="<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/img/placeholder/case-img08.jpg" height="200" width="260" /></a>
<h3 class="clamp1">淘金路马生钛合金不锈钢防盗门</h3>
</li>
</ul>
</div>
</div>
</div>
<div class="wrap__scene-dzlist bg02">
<div class="mid clearfix">
<div class="dzlist fl">
<h2 class="tit">入户门定制</h2>
<ul class="clearfix">
<li>
<a href="#"><img src="<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/img/placeholder/case-img01.jpg" height="200" width="260" /></a>
<h3 class="clamp1">淘金路马生钛合金不锈钢防盗门</h3>
</li>
<li>
<a href="#"><img src="<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/img/placeholder/case-img06.jpg" height="200" width="260" /></a>
<h3 class="clamp1">淘金路马生钛合金不锈钢防盗门淘金路马生钛合金不锈钢防盗门</h3>
</li>
<li>
<a href="#"><img src="<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/img/placeholder/case-img07.jpg" height="200" width="260" /></a>
<h3 class="clamp1">淘金路马生钛合金不锈钢防盗门</h3>
</li>
<li>
<a href="#"><img src="<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/img/placeholder/case-img08.jpg" height="200" width="260" /></a>
<h3 class="clamp1">淘金路马生钛合金不锈钢防盗门</h3>
</li>
</ul>
</div>
</div>
</div>
<div class="wrap__scene-dzlist bg03">
<div class="mid clearfix">
<div class="dzlist fr">
<h2 class="tit">不锈钢栏杆定制</h2>
<ul class="clearfix">
<li>
<a href="#"><img src="<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/img/placeholder/case-img01.jpg" height="200" width="260" /></a>
<h3 class="clamp1">淘金路马生钛合金不锈钢防盗门</h3>
</li>
<li>
<a href="#"><img src="<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/img/placeholder/case-img06.jpg" height="200" width="260" /></a>
<h3 class="clamp1">淘金路马生钛合金不锈钢防盗门淘金路马生钛合金不锈钢防盗门</h3>
</li>
<li>
<a href="#"><img src="<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/img/placeholder/case-img07.jpg" height="200" width="260" /></a>
<h3 class="clamp1">淘金路马生钛合金不锈钢防盗门</h3>
</li>
<li>
<a href="#"><img src="<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/img/placeholder/case-img08.jpg" height="200" width="260" /></a>
<h3 class="clamp1">淘金路马生钛合金不锈钢防盗门</h3>
</li>
</ul>
</div>
</div>
</div>
<div class="wrap__scene-dzlist bg04">
<div class="mid clearfix">
<div class="dzlist fl">
<h2 class="tit">楼梯扶手定制</h2>
<ul class="clearfix">
<li>
<a href="#"><img src="<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/img/placeholder/case-img01.jpg" height="200" width="260" /></a>
<h3 class="clamp1">淘金路马生钛合金不锈钢防盗门</h3>
</li>
<li>
<a href="#"><img src="<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/img/placeholder/case-img06.jpg" height="200" width="260" /></a>
<h3 class="clamp1">淘金路马生钛合金不锈钢防盗门淘金路马生钛合金不锈钢防盗门</h3>
</li>
<li>
<a href="#"><img src="<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/img/placeholder/case-img07.jpg" height="200" width="260" /></a>
<h3 class="clamp1">淘金路马生钛合金不锈钢防盗门</h3>
</li>
<li>
<a href="#"><img src="<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/img/placeholder/case-img08.jpg" height="200" width="260" /></a>
<h3 class="clamp1">淘金路马生钛合金不锈钢防盗门</h3>
</li>
</ul>
</div>
</div>
</div>
<div class="wrap__scene-dzlist bg05">
<div class="mid clearfix">
<div class="dzlist fr">
<h2 class="tit">雨棚定制</h2>
<ul class="clearfix">
<li>
<a href="#"><img src="<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/img/placeholder/case-img01.jpg" height="200" width="260" /></a>
<h3 class="clamp1">淘金路马生钛合金不锈钢防盗门</h3>
</li>
<li>
<a href="#"><img src="<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/img/placeholder/case-img06.jpg" height="200" width="260" /></a>
<h3 class="clamp1">淘金路马生钛合金不锈钢防盗门淘金路马生钛合金不锈钢防盗门</h3>
</li>
<li>
<a href="#"><img src="<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/img/placeholder/case-img07.jpg" height="200" width="260" /></a>
<h3 class="clamp1">淘金路马生钛合金不锈钢防盗门</h3>
</li>
<li>
<a href="#"><img src="<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/img/placeholder/case-img08.jpg" height="200" width="260" /></a>
<h3 class="clamp1">淘金路马生钛合金不锈钢防盗门</h3>
</li>
</ul>
</div>
</div>
</div>
<div class="wrap__scene-dzlist bg06">
<div class="mid clearfix">
<div class="dzlist fl">
<h2 class="tit">全铝家居定制</h2>
<ul class="clearfix">
<li>
<a href="#"><img src="<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/img/placeholder/case-img01.jpg" height="200" width="260" /></a>
<h3 class="clamp1">淘金路马生钛合金不锈钢防盗门</h3>
</li>
<li>
<a href="#"><img src="<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/img/placeholder/case-img06.jpg" height="200" width="260" /></a>
<h3 class="clamp1">淘金路马生钛合金不锈钢防盗门淘金路马生钛合金不锈钢防盗门</h3>
</li>
<li>
<a href="#"><img src="<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/img/placeholder/case-img07.jpg" height="200" width="260" /></a>
<h3 class="clamp1">淘金路马生钛合金不锈钢防盗门</h3>
</li>
<li>
<a href="#"><img src="<?php echo DT_STATIC;?>statics/<?php echo DT_STATIC;?>statics/img/placeholder/case-img08.jpg" height="200" width="260" /></a>
<h3 class="clamp1">淘金路马生钛合金不锈钢防盗门</h3>
</li>
</ul>
</div>
</div>
</div>
<div class="wrap__service-steps">
<div class="align-c">
<img src="img/placeholder/scene__services-steps.jpg" />
<a class="btn-appointment bg__ff4a00-hover transit" href="javascript:;">立即预约</a>
</div>
</div>
<div class="wrap__dingzhi-freestyle wrap__scene-freestyle">
<div class="mid clearfix">
<h2 class="tit">实例定制对比 总有您的freestyle</h2>
<div class="wrap__slider J__slider">
<div class="slider-inner">
<ul class="slider-list">
<li>
<h4><em class="c--999">[栏杆]</em>广州广大花园栏杆翻新 <em class="c--999 ml--30">花费：</em><em class="c--ff4a00">6800元</em><em class="c--999 ml--10">耗时：</em><em class="c--ff4a00">18天</em></h4>
<div class="grid">
<div class="img"><img src="<?php echo DT_STATIC;?>statics/img/placeholder/case-img01.jpg" height="420" width="400" /><span class="tag">维修前</span></div>
<div class="img"><img src="<?php echo DT_STATIC;?>statics/img/placeholder/case-img02.jpg" height="420" width="400" /><span class="tag">维修后</span></div>
</div>
</li>
<li>
<h4><em class="c--999">[门窗]</em>广州御景花园门窗维修翻新 <em class="c--999 ml--30">花费：</em><em class="c--ff4a00">1500元</em><em class="c--999 ml--10">耗时：</em><em class="c--ff4a00">8天</em></h4>
<div class="grid">
<div class="img"><img src="<?php echo DT_STATIC;?>statics/img/placeholder/case-img02.jpg" height="420" width="400" /><span class="tag">维修前</span></div>
<div class="img"><img src="<?php echo DT_STATIC;?>statics/img/placeholder/case-img03.jpg" height="420" width="400" /><span class="tag">维修后</span></div>
</div>
</li>
<li>
<h4><em class="c--999">[木门]</em>广州广大花园木门维修 <em class="c--999 ml--30">花费：</em><em class="c--ff4a00">8800元</em><em class="c--999 ml--10">耗时：</em><em class="c--ff4a00">22天</em></h4>
<div class="grid">
<div class="img"><img src="<?php echo DT_STATIC;?>statics/img/placeholder/case-img06.jpg" height="420" width="400" /><span class="tag">维修前</span></div>
<div class="img"><img src="<?php echo DT_STATIC;?>statics/img/placeholder/case-img01.jpg" height="420" width="400" /><span class="tag">维修后</span></div>
</div>
</li>
<li>
<h4><em class="c--999">[扶手]</em>广州好景花园楼梯扶手 <em class="c--999 ml--30">花费：</em><em class="c--ff4a00">7700元</em><em class="c--999 ml--10">耗时：</em><em class="c--ff4a00">15天</em></h4>
<div class="grid">
<div class="img"><img src="<?php echo DT_STATIC;?>statics/img/placeholder/case-img07.jpg" height="420" width="400" /><span class="tag">维修前</span></div>
<div class="img"><img src="<?php echo DT_STATIC;?>statics/img/placeholder/case-img03.jpg" height="420" width="400" /><span class="tag">维修后</span></div>
</div>
</li>
<li>
<h4><em class="c--999">[楼梯]</em>广州广大花园栏杆翻新 <em class="c--999 ml--30">花费：</em><em class="c--ff4a00">6800元</em><em class="c--999 ml--10">耗时：</em><em class="c--ff4a00">18天</em></h4>
<div class="grid">
<div class="img"><img src="<?php echo DT_STATIC;?>statics/img/placeholder/case-img04.jpg" height="420" width="400" /><span class="tag">维修前</span></div>
<div class="img"><img src="<?php echo DT_STATIC;?>statics/img/placeholder/case-img07.jpg" height="420" width="400" /><span class="tag">维修后</span></div>
</div>
</li>
<li>
<h4><em class="c--999">[木板]</em>广州御花园木板维修 <em class="c--999 ml--30">花费：</em><em class="c--ff4a00">600元</em><em class="c--999 ml--10">耗时：</em><em class="c--ff4a00">6天</em></h4>
<div class="grid">
<div class="img"><img src="<?php echo DT_STATIC;?>statics/img/placeholder/case-img02.jpg" height="420" width="400" /><span class="tag">维修前</span></div>
<div class="img"><img src="<?php echo DT_STATIC;?>statics/img/placeholder/case-img07.jpg" height="420" width="400" /><span class="tag">维修后</span></div>
</div>
</li>
<li>
<h4><em class="c--999">[栏杆]</em>广州广大花园栏杆翻新广州广大花园栏杆翻新 <em class="c--999 ml--30">花费：</em><em class="c--ff4a00">5500元</em><em class="c--999 ml--10">耗时：</em><em class="c--ff4a00">11天</em></h4>
<div class="grid">
<div class="img"><img src="<?php echo DT_STATIC;?>statics/img/placeholder/case-img03.jpg" height="420" width="400" /><span class="tag">维修前</span></div>
<div class="img"><img src="<?php echo DT_STATIC;?>statics/img/placeholder/case-img05.jpg" height="420" width="400" /><span class="tag">维修后</span></div>
</div>
</li>
<li>
<h4><em class="c--999">[楼梯]</em>广州锦江之星楼梯翻新广州锦江之星楼梯翻新 <em class="c--999 ml--30">花费：</em><em class="c--ff4a00">1800元</em><em class="c--999 ml--10">耗时：</em><em class="c--ff4a00">7天</em></h4>
<div class="grid">
<div class="img"><img src="<?php echo DT_STATIC;?>statics/img/placeholder/case-img07.jpg" height="420" width="400" /><span class="tag">维修前</span></div>
<div class="img"><img src="<?php echo DT_STATIC;?>statics/img/placeholder/case-img05.jpg" height="420" width="400" /><span class="tag">维修后</span></div>
</div>
</li>
<li>
<h4><em class="c--999">[扶手]</em>广州广大花园栏杆翻新 <em class="c--999 ml--30">花费：</em><em class="c--ff4a00">1200元</em><em class="c--999 ml--10">耗时：</em><em class="c--ff4a00">10天</em></h4>
<div class="grid">
<div class="img"><img src="<?php echo DT_STATIC;?>statics/img/placeholder/case-img03.jpg" height="420" width="400" /><span class="tag">维修前</span></div>
<div class="img"><img src="<?php echo DT_STATIC;?>statics/img/placeholder/case-img06.jpg" height="420" width="400" /><span class="tag">维修后</span></div>
</div>
</li>
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
<div class="wrap__scene-faq">
<div class="mid clearfix">
<h2 class="tit">常见问题</h2>
<div class="list">
<div class="row">
<h2><a href="#">选橱柜什么板材最好？</a></h2>
<p>现在橱柜的箱体板材主要有实木颗粒板和实木多层,大的品牌主要是实木颗粒板因为它的防水防潮性能和握钉力好,但是因为它们的环保级别不一样,价格也是不一样的.最好的可以达到欧标EO级它的甲醛释放量。</p>
</div>
<div class="row">
<h2><a href="#">选橱柜什么板材最好？</a></h2>
<p>现在橱柜的箱体板材主要有实木颗粒板和实木多层,大的品牌主要是实木颗粒板因为它的防水防潮性能和握钉力好,但是因为它们的环保级别不一样,价格也是不一样的.最好的可以达到欧标EO级它的甲醛释放量。</p>
</div>
<div class="row">
<h2><a href="#">选橱柜什么板材最好？</a></h2>
<p>现在橱柜的箱体板材主要有实木颗粒板和实木多层,大的品牌主要是实木颗粒板因为它的防水防潮性能和握钉力好,但是因为它们的环保级别不一样,价格也是不一样的.最好的可以达到欧标EO级它的甲醛释放量。</p>
</div>
<div class="row">
<h2><a href="#">选橱柜什么板材最好？</a></h2>
<p>现在橱柜的箱体板材主要有实木颗粒板和实木多层,大的品牌主要是实木颗粒板因为它的防水防潮性能和握钉力好,但是因为它们的环保级别不一样,价格也是不一样的.最好的可以达到欧标EO级它的甲醛释放量。</p>
</div>
<div class="row">
<h2><a href="#">选橱柜什么板材最好？</a></h2>
<p>现在橱柜的箱体板材主要有实木颗粒板和实木多层,大的品牌主要是实木颗粒板因为它的防水防潮性能和握钉力好,但是因为它们的环保级别不一样,价格也是不一样的.最好的可以达到欧标EO级它的甲醛释放量。</p>
</div>
</div>
</div>
</div>
</div>
