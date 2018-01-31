<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('ui_header');?>
<script src="<?php echo DT_STATIC;?>statics/js/jquery.xySlider.js"></script>
<!-- <>轮播图区域 -->
<div class="zone__idx-slider J_idxSlider">
<div class="slider-inner">
<ul class="slider-list">
<?php $tags=tag("table=ad&condition=pid=14&template=null");?>
<?php if(is_array($tags)) { foreach($tags as $t) { ?>
<li style="background-image: url(<?php echo $t['image_src'];?>);"><a href="<?php echo $t['url'];?>" target="_blank" class="mid"></a></li>
<?php } } ?>
<!--<li style="background-image: url(<?php echo DT_STATIC;?>statics/img/placeholder/idx-slider-img02.jpg);"><a href="#" target="_blank" class="mid"></a></li>-->
</ul>
<div class="slider-nav">
<div class="mid align-c"><i></i><i></i></div>
</div>
<div class="slider-ctlbtn">
<a class="js-btn-prev"></a>
<a class="js-btn-next"></a>
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
<div class="slider-search">
<div class="sear-inner">
<i class="close J__closeSearBox"></i>
<p class="tit">免费维修咨询</p>
<div class="form">
<form action="<?php echo $EXT['guestbook_url'];?>index.php" method="post" >
<input type="hidden" name="submit" value="1" />
<input type="hidden" name="type" value="预约咨询" />
<input class="ipt-text" type="text" name="nickname" placeholder="您的称呼" style="width:180px;" />
<input class="ipt-text" type="text" name="telephone" placeholder="填写手机号码，东有家居装饰为您提供专属服务" style="width:420px;" />
<input class="btn-appointment" type="submit" style="border:none;cursor:pointer;" value="预约咨询"/>
</form>
</div>
</div>
<script type="text/javascript">
$(".J__closeSearBox").on("click", function(){
$(this).parents(".slider-search").fadeOut(300);
});
</script>
</div>
</div> <!-- END.zone-idx-slider -->
<!-- <>主体容器区域 -->
<div class="container">
<!-- //1、分类查找 -->
<div class="similar-wrap wrap__cate-sear">
<div class="mid clearfix">
<div class="mt"><span class="tit">您可以从以下分类中直接查找</span></div>
<div class="mc">
<ul class="clearfix" id="J__cateList">
<?php $tags=tag("table=ad&condition=pid=28&template=null");?>
<?php if(is_array($tags)) { foreach($tags as $k => $v) { ?>
<li>
<a href="<?php echo $v['url'];?>">
<span class="ico i<?php echo $k+1;?>"><i></i></span>
<h2 class="tit transit"><?php echo $v['title'];?></h2>
<label class="clamp2 transit"><?php echo $v['text_name'];?></label>
</a>
</li>
<?php } } ?>
<!--<li>-->
<!--<a href="#">-->
<!--<span class="ico i1"><i></i></span>-->
<!--<h2 class="tit transit">铝合金门窗</h2>-->
<!--<label class="clamp2 transit">铝合金门窗　德国系统门窗（Hopo）<br />集成门窗　阳台门窗　铝合金纱窗</label>-->
<!--</a>-->
<!--</li>-->
<!--<li>-->
<!--<a href="#">-->
<!--<span class="ico i2"><i></i></span>-->
<!--<h2 class="tit transit">入户门</h2>-->
<!--<label class="clamp2 transit">不锈钢防盗门　豪华防盗门<br />别墅大门　全铜大门</label>-->
<!--</a>-->
<!--</li>-->
<!--<li>-->
<!--<a href="#">-->
<!--<span class="ico i3"><i></i></span>-->
<!--<h2 class="tit transit">不锈钢栏杆</h2>-->
<!--<label class="clamp2 transit">阳台栏杆　玻璃栏杆　商场栏杆<br />窗前栏杆</label>-->
<!--</a>-->
<!--</li>-->
<!--<li>-->
<!--<a href="#">-->
<!--<span class="ico i4"><i></i></span>-->
<!--<h2 class="tit transit">楼梯扶手</h2>-->
<!--<label class="clamp2 transit">不锈钢楼梯扶手　实木楼梯扶手<br />玻璃楼梯扶手</label>-->
<!--</a>-->
<!--</li>-->
<!--<li>-->
<!--<a href="#">-->
<!--<span class="ico i5"><i></i></span>-->
<!--<h2 class="tit transit">雨棚</h2>-->
<!--<label class="clamp2 transit">不锈钢雨棚　玻璃雨棚<br />耐力板雨棚　阳光板雨棚</label>-->
<!--</a>-->
<!--</li>-->
<!--<li>-->
<!--<a href="#">-->
<!--<span class="ico i6"><i></i></span>-->
<!--<h2 class="tit transit">全铝家具</h2>-->
<!--<label class="clamp2 transit">柜门维修　全铝橱柜<br />全铝家具</label>-->
<!--</a>-->
<!--</li>-->
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
<!-- //2、热销推荐 -->
<div class="similar-wrap wrap__hot-recommend bg--fff">
<div class="mid clearfix">
<div class="mt"><span class="tit"><i class="line"></i>热销产品推荐<i class="line"></i></span><label>东有热推，90%家庭的选择</label></div>
<div class="mc">
<ul class="clearfix">
<?php $tags=tag("table=ad&condition=pid=29&template=null");?>
<?php //var_dump($tags)?>
<?php if(is_array($tags)) { foreach($tags as $k => $v) { ?>
<li>
<a class="aimg" href="<?php echo $v['url'];?>">
<img src="<?php echo $v['image_src'];?>" height="200" width="285" />
<div class="head ff-hv"><em class="name"><?php echo $v['image_alt'];?></em><em class="sale"><?php echo $v['note'];?>人想买</em></div>
<div class="title">
<h2 class="ellipsis ff-hv"><?php echo $v['introduce'];?></h2>
</div>
</a>
</li>
<?php } } ?>
<!--<li>-->
<!--<a class="aimg" href="#">-->
<!--<img src="<?php echo DT_STATIC;?>statics/img/placeholder/hotpro-img01.jpg" height="200" width="285" />-->
<!--<div class="head ff-hv"><em class="name">入户门</em><em class="sale">265人想买</em></div>-->
<!--<div class="title">-->
<!--<h2 class="ellipsis ff-hv">豪华镀金入户门豪华镀金入户门</h2>-->
<!--</div>-->
<!--</a>-->
<!--</li>-->
<!--<li>-->
<!--<a class="aimg" href="#">-->
<!--<img src="<?php echo DT_STATIC;?>statics/img/placeholder/hotpro-img02.jpg" height="200" width="285" />-->
<!--<div class="head ff-hv"><em class="name">门窗</em><em class="sale">172人想买</em></div>-->
<!--<div class="title">-->
<!--<h2 class="ellipsis ff-hv">这里是产品标题文字最多显示18个字其它多余的文字...</h2>-->
<!--</div>-->
<!--</a>-->
<!--</li>-->
<!--<li>-->
<!--<a class="aimg" href="#">-->
<!--<img src="<?php echo DT_STATIC;?>statics/img/placeholder/hotpro-img03.jpg" height="200" width="285" />-->
<!--<div class="head ff-hv"><em class="name">不锈钢栏杆</em><em class="sale">328人想买</em></div>-->
<!--<div class="title">-->
<!--<h2 class="ellipsis ff-hv">不锈钢扶梯栏杆</h2>-->
<!--</div>-->
<!--</a>-->
<!--</li>-->
<!--<li>-->
<!--<a class="aimg" href="#">-->
<!--<img src="<?php echo DT_STATIC;?>statics/img/placeholder/hotpro-img04.jpg" height="200" width="285" />-->
<!--<div class="head ff-hv"><em class="name">雨棚</em><em class="sale">47人想买</em></div>-->
<!--<div class="title">-->
<!--<h2 class="ellipsis ff-hv">大型不锈钢型雨棚大型不锈钢型雨棚</h2>-->
<!--</div>-->
<!--</a>-->
<!--</li>-->
</ul>
</div>
</div>
</div>
<!-- //3、发现好设计 -->
<div class="similar-wrap wrap__found-design">
<div class="mid clearfix">
<div class="mt"><span class="tit c--fff"><i class="line"></i>发现好设计<i class="line"></i></span><label class="c--fff">立刻拥有令人羡慕的家</label></div>
<div class="mc">
<ul class="clearfix">
<li class="col1">
<div class="apic"><?php echo ad(20);?></div>
</li>
<li class="col2">
<div class="one">
<div class="apic"><?php echo ad(21);?></div>
</div>
<div class="two">
<div class="apic"><?php echo ad(22);?></div>
<div class="apic fr"><?php echo ad(23);?></div>
</div>
</li>
<li class="col3">
<div class="apic"><?php echo ad(24);?></div>
</li>
</ul>
</div>
</div>
</div>
<!-- //4、别人家的维修案例 -->
<div class="similar-wrap wrap__other-case bg--fff">
<div class="clearfix">
<div class="mt"><span class="tit"><i class="line"></i>别人家的定制案例<i class="line"></i></span><label>立刻解决家中维修问题</label></div>
<div class="mc">
<div class="head-nav">
<ul class="clearfix">
<?php $childs = get_maincat(14, $CATEGORY, 1);?>
<?php if(is_array($childs)) { foreach($childs as $k => $v) { ?>
<li><a href="#" this-catid="<?php echo $v['catid'];?>"><?php echo $v['catname'];?></a></li>
<?php } } ?>
<!--<li><a href="#">全铜大门</a></li>-->
<!--<li><a href="#">栏杆</a></li>-->
<!--<li><a href="#">楼梯扶手</a></li>-->
<!--<li><a href="#">雨棚</a></li>-->
<!--<li><a href="#">防盗网</a></li>-->
<!--<li><a href="#">阁楼</a></li>-->
<!--<li><a href="#">全铝家具</a></li>-->
<!--<li><a href="#">阳光房</a></li>-->
<!--<li><a href="#">其他</a></li>-->
</ul>
</div>
<div class="case-list">
<table border="0" cellspacing="0" cellpadding="0" id="J__caseList">
<tbody>
<tr>
<td>
<div class="imgbox" style="background-image:url(<?php echo DT_STATIC;?>statics/img/placeholder/case-img01.jpg);">
<div class="mask">
<h2>花都区雅宝新城不锈钢定制楼梯栏杆</h2>
<a class="btn-view" href="#">查看详情</a><a class="btn-order" href="#">立即预约</a>
</div>
</div>
</td>
<td>
<div class="imgbox" style="background-image:url(<?php echo DT_STATIC;?>statics/img/placeholder/case-img02.jpg);">
<div class="mask">
<h2>花都区雅宝新城不锈钢定制楼梯栏杆</h2>
<a class="btn-view" href="#">查看详情</a><a class="btn-order" href="#">立即预约</a>
</div>
</div>
</td>
<td>
<div class="imgbox" style="background-image:url(<?php echo DT_STATIC;?>statics/img/placeholder/case-img03.jpg);">
<div class="mask">
<h2>花都区雅宝新城不锈钢定制楼梯栏杆</h2>
<a class="btn-view" href="#">查看详情</a><a class="btn-order" href="#">立即预约</a>
</div>
</div>
</td>
<td>
<div class="imgbox" style="background-image:url(<?php echo DT_STATIC;?>statics/img/placeholder/case-img04.jpg);">
<div class="mask">
<h2>花都区雅宝新城不锈钢定制楼梯栏杆</h2>
<a class="btn-view" href="#">查看详情</a><a class="btn-order" href="#">立即预约</a>
</div>
</div>
</td>
</tr>
<tr>
<td>
<div class="imgbox" style="background-image:url(<?php echo DT_STATIC;?>statics/img/placeholder/case-img05.jpg);">
<div class="mask">
<h2>花都区雅宝新城不锈钢定制楼梯栏杆</h2>
<a class="btn-view" href="#">查看详情</a><a class="btn-order" href="#">立即预约</a>
</div>
</div>
</td>
<td>
<div class="imgbox" style="background-image:url(<?php echo DT_STATIC;?>statics/img/placeholder/case-img06.jpg);">
<div class="mask">
<h2>花都区雅宝新城不锈钢定制楼梯栏杆</h2>
<a class="btn-view" href="#">查看详情</a><a class="btn-order" href="#">立即预约</a>
</div>
</div>
</td>
<td>
<div class="imgbox" style="background-image:url(<?php echo DT_STATIC;?>statics/img/placeholder/case-img07.jpg);">
<div class="mask">
<h2>花都区雅宝新城不锈钢定制楼梯栏杆</h2>
<a class="btn-view" href="#">查看详情</a><a class="btn-order" href="#">立即预约</a>
</div>
</div>
</td>
<td>
<div class="imgbox" style="background-image:url(<?php echo DT_STATIC;?>statics/img/placeholder/case-img08.jpg);">
<div class="mask">
<h2>花都区雅宝新城不锈钢定制楼梯栏杆</h2>
<a class="btn-view" href="#">查看详情</a><a class="btn-order" href="#">立即预约</a>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
<!-- //5、我们的实力 -->
<div class="similar-wrap wrap__our-strength">
<div class="mid clearfix">
<div class="mt"><span class="tit"><i class="line"></i>我们的实力<i class="line"></i></span><label>点点滴滴一路走来，用故事诉说实力</label></div>
<div class="mc">
<ul class="clearfix">
<li>
<a class="aimg" href="#">
<img src="<?php echo DT_STATIC;?>statics/img/placeholder/our-strength-img01.jpg" height="200" width="285" />
<div class="title">
<h2 class="ellipsis ff-hv">豪华镀金入户门豪华镀金入户门</h2>
</div>
</a>
</li>
<li>
<a class="aimg" href="#">
<img src="<?php echo DT_STATIC;?>statics/img/placeholder/our-strength-img02.jpg" height="200" width="285" />
<div class="title">
<h2 class="ellipsis ff-hv">豪华镀金入户门豪华镀金入户门豪华镀金入户门豪华镀金入户门</h2>
</div>
</a>
</li>
<li>
<a class="aimg" href="#">
<img src="<?php echo DT_STATIC;?>statics/img/placeholder/our-strength-img03.jpg" height="200" width="285" />
<div class="title">
<h2 class="ellipsis ff-hv">豪华镀金入户门豪华镀金入户门</h2>
</div>
</a>
</li>
<li>
<a class="aimg" href="#">
<img src="<?php echo DT_STATIC;?>statics/img/placeholder/our-strength-img04.jpg" height="200" width="285" />
<div class="title">
<h2 class="ellipsis ff-hv">豪华镀金入户门豪华镀金入户门</h2>
</div>
</a>
</li>
</ul>
</div>
</div>
</div>
<!-- //6、找我家 -->
<div class="similar-wrap wrap__found-family bg--fff">
<div class="mid clearfix">
<div class="mt"><span class="tit"><i class="line"></i>找我家<i class="line"></i></span><label>试试查找我家小区定制案例，与邻居交流维修心得</label></div>
<div class="mc">
<div class="head-nav">
<ul class="clearfix">
<li><a href="#">门窗</a></li>
<li><a href="#">全铜大门</a></li>
<li><a href="#">栏杆</a></li>
<li><a href="#">楼梯扶手</a></li>
<li><a href="#">雨棚</a></li>
<li><a href="#">防盗网</a></li>
<li><a href="#">阁楼</a></li>
<li><a href="#">全铝家具</a></li>
<li><a href="#">阳光房</a></li>
<li><a href="#">其他</a></li>
</ul>
</div>
<div class="family-list">
<ul class="clearfix">
<li>
<div class="bigimg"><a href="#"><img src="<?php echo DT_STATIC;?>statics/img/placeholder/case-img02.jpg" /></a><h2 class="ellipsis ff-hv">御景花园小区实例</h2></div>
<div class="thumbs">
<span><img src="<?php echo DT_STATIC;?>statics/img/placeholder/case-img03.jpg" /><em>全铝家居</em></span>
<span><img src="<?php echo DT_STATIC;?>statics/img/placeholder/case-img04.jpg" /><em>门窗</em></span>
<span><img src="<?php echo DT_STATIC;?>statics/img/placeholder/case-img06.jpg" /><em>阳台门窗</em></span>
</div>
</li>
<li>
<div class="bigimg"><a href="#"><img src="<?php echo DT_STATIC;?>statics/img/placeholder/case-img01.jpg" /></a><h2 class="ellipsis ff-hv">毓秀清福小区实例</h2></div>
<div class="thumbs">
<span><img src="<?php echo DT_STATIC;?>statics/img/placeholder/hotpro-img01.jpg" /><em>全铝家居</em></span>
<span><img src="<?php echo DT_STATIC;?>statics/img/placeholder/hotpro-img02.jpg" /><em>门窗</em></span>
<span><img src="<?php echo DT_STATIC;?>statics/img/placeholder/hotpro-img03.jpg" /><em>护栏</em></span>
</div>
</li>
<li>
<div class="bigimg"><a href="#"><img src="<?php echo DT_STATIC;?>statics/img/placeholder/case-img07.jpg" /></a><h2 class="ellipsis ff-hv">幸福家园小区实例</h2></div>
<div class="thumbs">
<span><img src="<?php echo DT_STATIC;?>statics/img/placeholder/case-img06.jpg" /><em>全铝家居</em></span>
<span><img src="<?php echo DT_STATIC;?>statics/img/placeholder/case-img08.jpg" /><em>阳台门窗</em></span>
<span><img src="<?php echo DT_STATIC;?>statics/img/placeholder/case-img04.jpg" /><em>楼梯扶手</em></span>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
<!-- //7、展示 -->
<div class="similar-wrap wrap__showCase">
<div class="mid clearfix">
<div class="mc pt--50">
<div class="lt-bigimg fl">
<img src="<?php echo DT_STATIC;?>statics/img/placeholder/showcase-img01.jpg" />
</div>
<div class="rt-items fr">
<ul class="clearfix">
<li>
<a class="aimg fl" href="#"><img src="<?php echo DT_STATIC;?>statics/img/placeholder/case-img02.jpg" /></a>
<div class="info">
<h2 class="clamp1"><a href="#">三室一厅装修效果图，大空间的舒适套房</a></h2>
<label class="ff-hv c--999 clamp1">80平方米的户型是如今一种比较受欢迎的房型</label>
</div>
</li>
<li>
<a class="aimg fl" href="#"><img src="<?php echo DT_STATIC;?>statics/img/placeholder/case-img04.jpg" /></a>
<div class="info">
<h2 class="clamp1"><a href="#">三室一厅装修效果图，大空间的舒适套房</a></h2>
<label class="ff-hv c--999 clamp1">80平方米的户型是如今一种比较受欢迎的房型</label>
</div>
</li>
<li>
<a class="aimg fl" href="#"><img src="<?php echo DT_STATIC;?>statics/img/placeholder/case-img07.jpg" /></a>
<div class="info">
<h2 class="clamp1"><a href="#">三室一厅装修效果图，大空间的舒适套房 三室一厅装修效果图，大空间的舒适套房</a></h2>
<label class="ff-hv c--999 clamp1">80平方米的户型是如今一种比较受欢迎的房型 80平方米的户型是如今一种比较受欢迎的房型</label>
</div>
</li>
<li>
<a class="aimg fl" href="#"><img src="<?php echo DT_STATIC;?>statics/img/placeholder/case-img08.jpg" /></a>
<div class="info">
<h2 class="clamp1"><a href="#">三室一厅装修效果图，大空间的舒适套房</a></h2>
<label class="ff-hv c--999 clamp1">80平方米的户型是如今一种比较受欢迎的房型</label>
</div>
</li>
</ul>
<a class="redirect" href="#">更多</a>
</div>
</div>
</div>
</div>
<!-- //8、维修攻略 -->
<div class="similar-wrap wrap__repair-strategy bg--fff">
<div class="mid clearfix">
<div class="mt"><span class="tit"><i class="line"></i>维修攻略<i class="line"></i></span><label>懂得市场知识才能更好的维修房屋</label></div>
<div class="mc">
<ul class="clearfix">
<li>
<div class="itembox">
<div class="hd-box">
<div class="inner">
<img src="<?php echo DT_STATIC;?>statics/img/wxgl_icon_1.png" />
<p class="fs16">家装攻略</p>
</div>
<div class="inner inner2" style="background:url(<?php echo DT_STATIC;?>statics/img/placeholder/case-img07.jpg) no-repeat;background-size:cover;">
<i class="mask"></i>
<img src="<?php echo DT_STATIC;?>statics/img/wxgl_icon_1-1.png" />
<p class="fs16 c--fff">家装攻略</p>
</div>
</div>
<div class="ct-link">
<a class="clamp1" href="#">客厅家具迷：不会打造北欧风的看过来，三招教会你！</a>
<a class="clamp1" href="#">热浪太强，不如来点清凉怡人地中海~</a>
<a class="clamp1" href="#">不找装修公司，自己装修，是真的会省钱吗？</a>
<a class="clamp1" href="#">晚装修一年，或至少损失51681元！！！</a>
<a class="clamp1" href="#">你造吗？榻榻米可以帮你省钱！</a>
<a class="more" href="#" target="_blank">查看更多</a>
</div>
</div>
</li>
<li>
<div class="itembox">
<div class="hd-box">
<div class="inner">
<img src="<?php echo DT_STATIC;?>statics/img/wxgl_icon_2.png" />
<p class="fs16">材料知识</p>
</div>
<div class="inner inner2" style="background:url(<?php echo DT_STATIC;?>statics/img/placeholder/case-img08.jpg) no-repeat;background-size:cover;">
<i class="mask"></i>
<img src="<?php echo DT_STATIC;?>statics/img/wxgl_icon_2-1.png" />
<p class="fs16 c--fff">材料知识</p>
</div>
</div>
<div class="ct-link">
<a class="clamp1" href="#">客厅家具迷：不会打造北欧风的看过来，三招教会你！</a>
<a class="clamp1" href="#">热浪太强，不如来点清凉怡人地中海~</a>
<a class="clamp1" href="#">不找装修公司，自己装修，是真的会省钱吗？</a>
<a class="clamp1" href="#">晚装修一年，或至少损失51681元！！！</a>
<a class="clamp1" href="#">你造吗？榻榻米可以帮你省钱！</a>
<a class="more" href="#" target="_blank">查看更多</a>
</div>
</div>
</li>
<li>
<div class="itembox">
<div class="hd-box">
<div class="inner">
<img src="<?php echo DT_STATIC;?>statics/img/wxgl_icon_3.png" />
<p class="fs16">设计知识</p>
</div>
<div class="inner inner2" style="background:url(<?php echo DT_STATIC;?>statics/img/placeholder/case-img02.jpg) no-repeat;background-size:cover;">
<i class="mask"></i>
<img src="<?php echo DT_STATIC;?>statics/img/wxgl_icon_3-1.png" />
<p class="fs16 c--fff">设计知识</p>
</div>
</div>
<div class="ct-link">
<a class="clamp1" href="#">客厅家具迷：不会打造北欧风的看过来，三招教会你！</a>
<a class="clamp1" href="#">热浪太强，不如来点清凉怡人地中海~</a>
<a class="clamp1" href="#">不找装修公司，自己装修，是真的会省钱吗？</a>
<a class="clamp1" href="#">晚装修一年，或至少损失51681元！！！</a>
<a class="clamp1" href="#">你造吗？榻榻米可以帮你省钱！</a>
<a class="more" href="#" target="_blank">查看更多</a>
</div>
</div>
</li>
<li>
<div class="itembox">
<div class="hd-box">
<div class="inner">
<img src="<?php echo DT_STATIC;?>statics/img/wxgl_icon_4.png" />
<p class="fs16">家居风水</p>
</div>
<div class="inner inner2" style="background:url(<?php echo DT_STATIC;?>statics/img/placeholder/case-img01.jpg) no-repeat;background-size:cover;">
<i class="mask"></i>
<img src="<?php echo DT_STATIC;?>statics/img/wxgl_icon_4-1.png" />
<p class="fs16 c--fff">家居风水</p>
</div>
</div>
<div class="ct-link">
<a class="clamp1" href="#">客厅家具迷：不会打造北欧风的看过来，三招教会你！</a>
<a class="clamp1" href="#">热浪太强，不如来点清凉怡人地中海~</a>
<a class="clamp1" href="#">不找装修公司，自己装修，是真的会省钱吗？</a>
<a class="clamp1" href="#">晚装修一年，或至少损失51681元！！！</a>
<a class="clamp1" href="#">你造吗？榻榻米可以帮你省钱！</a>
<a class="more" href="#" target="_blank">查看更多</a>
</div>
</div>
</li>
</ul>
</div>
</div>
</div>
<!-- //9、品牌实力 -->
<div class="similar-wrap wrap__brand-power">
<div class="mid clearfix">
<div class="mt"><span class="tit"><i class="line"></i>品牌实力<i class="line"></i></span><label>让每一个选择我们的人都能享受品质家居</label></div>
<div class="mc">
<ul>
<li><a href="#"><img src="<?php echo DT_STATIC;?>statics/img/placeholder/brand-img01.jpg" height="120" width="285" /></a></li>
<li><a href="#"><img src="<?php echo DT_STATIC;?>statics/img/placeholder/brand-img02.jpg" height="120" width="285" /></a></li>
<li><a href="#"><img src="<?php echo DT_STATIC;?>statics/img/placeholder/brand-img03.jpg" height="120" width="285" /></a></li>
<li><a href="#"><img src="<?php echo DT_STATIC;?>statics/img/placeholder/brand-img04.jpg" height="120" width="285" /></a></li>
</ul>
<ul class="middle">
<li>
<a href="#"><img src="<?php echo DT_STATIC;?>statics/img/placeholder/brand-img05.jpg" height="120" width="285" /></a>
<a href="#"><img src="<?php echo DT_STATIC;?>statics/img/placeholder/brand-img06.jpg" height="120" width="285" /></a>
</li>
<li class="bigimg">
<a href="javascript:;"><img src="<?php echo DT_STATIC;?>statics/img/placeholder/brand-bigimg.jpg" height="258" width="590" /></a>
<div class="info">
<h2>东有家居定制</h2>
<p>不辜负每一位选择我们的您</p>
<a class="btn-zixun bg__ff4a00-hover transit" href="#">点击咨询</a>
</div>
</li>
<li>
<a href="#"><img src="<?php echo DT_STATIC;?>statics/img/placeholder/brand-img07.jpg" height="120" width="285" /></a>
<a href="#"><img src="<?php echo DT_STATIC;?>statics/img/placeholder/brand-img08.jpg" height="120" width="285" /></a>
</li>
</ul>
<ul>
<li><a href="#"><img src="<?php echo DT_STATIC;?>statics/img/placeholder/brand-img09.jpg" height="120" width="285" /></a></li>
<li><a href="#"><img src="<?php echo DT_STATIC;?>statics/img/placeholder/brand-img10.jpg" height="120" width="285" /></a></li>
<li><a href="#"><img src="<?php echo DT_STATIC;?>statics/img/placeholder/brand-img11.jpg" height="120" width="285" /></a></li>
<li><a href="#"><img src="<?php echo DT_STATIC;?>statics/img/placeholder/brand-img12.jpg" height="120" width="285" /></a></li>
</ul>
</div>
</div>
</div>
</div>
<?php include template('slider');?>
<?php include template('ui_footer');?>
