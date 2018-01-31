<?php defined('IN_DESTOON') or exit('Access Denied');?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=<?php echo DT_CHARSET;?>"/>
<title><?php if($seo_title) { ?><?php echo $seo_title;?><?php } else { ?><?php if($head_title) { ?><?php echo $head_title;?><?php echo $DT['seo_delimiter'];?><?php } ?>
<?php if($city_sitename) { ?><?php echo $city_sitename;?><?php } else { ?><?php echo $DT['sitename'];?><?php } ?>
<?php } ?>
</title>
<?php if($head_keywords) { ?>
<meta name="keywords" content="<?php echo $head_keywords;?>"/>
<?php } ?>
<?php if($head_description) { ?>
<meta name="description" content="<?php echo $head_description;?>"/>
<?php } ?>
<?php if($head_mobile) { ?>
<meta http-equiv="mobile-agent" content="format=html5;url=<?php echo $head_mobile;?>">
<?php } ?>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo DT_STATIC;?>favicon.ico"/>
<link rel="bookmark" type="image/x-icon" href="<?php echo DT_STATIC;?>favicon.ico"/>
<?php if($head_canonical) { ?>
<link rel="canonical" href="<?php echo $head_canonical;?>"/>
<?php } ?>
<?php if($EXT['archiver_enable']) { ?>
<link rel="archives" title="<?php echo $DT['sitename'];?>" href="<?php echo $EXT['archiver_url'];?>"/>
<?php } ?>
  <link rel="stylesheet" href="<?php echo DT_STATIC;?>statics/css/reset.css">
  <link rel="stylesheet" href="<?php echo DT_STATIC;?>statics/css/layout.css">
  <script type="text/javascript" src="<?php echo DT_STATIC;?>lang/<?php echo DT_LANG;?>/lang.js"></script>
  <script type="text/javascript" src="<?php echo DT_STATIC;?>file/script/config.js"></script>
  <script src="<?php echo DT_STATIC;?>statics/js/jquery-1.9.1.min.js"></script>
  <script src="<?php echo DT_STATIC;?>statics/js/common.js"></script>
</head>
<body class="bg--fff">
  <!-- <>顶部区域 -->
<div class="sec__header">
<div class="header-inner borB">
<!-- 顶部1 -->
<div class="wrap_topbar clearfix">
<div class="mid clearfix">
<div class="fl"><a class="btn-favicon" onclick="addFav()">收藏东有</a><script src="<?php echo DT_STATIC;?>statics/js/auth.js"></script></div>
<div class="fr">
<ul class="rt-list">
<?php if($_username) { ?>
<li>您好 <?php echo $_truename;?> ，欢迎来到东有家居装饰！</li>
<li class="vline">|</li>
<li><a href="/member/collection_jiaju.php">我的收藏</a></li>
<?php } ?>
<li class="vline">|</li>
<li><a href="javascript:alert('待完善')">帮助中心</a></li>
<li class="vline">|</li>
<li>联系方式：<b class="ff-hv">13794416333</b></li>
</ul>
</div>
</div>
</div>
<!-- //顶部2 -->
<div class="wrap_navbar J__navbar">
<div class="mid clearfix">
<div class="logo fl"><a href="/"><img src="<?php echo DT_STATIC;?>statics/img/logo.png" /></a></div>
<div class="nav__menu fl">
<dl class="clearfix">
<dd<?php if($moduleid<4) { ?> class="on"<?php } ?>
><a href="/">首页</a></dd>
<dd<?php if($MODULE['moduleid']==$moduleid) { ?> class="on"<?php } ?>
 data-type="1"><a href="<?php echo $MODULE['12']['linkurl'];?>"><?php echo $MODULE['12']['name'];?><i class="arr"></i></a></dd>
<dd<?php if($MODULE['moduleid']==$moduleid) { ?> class="on"<?php } ?>
><a href="<?php echo $MODULE['16']['linkurl'];?>"><?php echo $MODULE['16']['name'];?></a></dd>
<dd<?php if($MODULE['moduleid']==$moduleid) { ?> class="on"<?php } ?>
 data-type="2"><a href="<?php echo $MODULE['11']['linkurl'];?>"><?php echo $MODULE['11']['name'];?><i class="arr"></i></a></dd>
<dd<?php if($MODULE['moduleid']==$moduleid) { ?> class="on"<?php } ?>
 data-type="3"><a href="<?php echo $MODULE['21']['linkurl'];?>"><?php echo $MODULE['21']['name'];?><i class="arr"></i></a></dd>
<dd><a href="/about">关于我们</a></dd>
</dl>
</div>
<div class="box__sear fr">
<div class="inner clearfix">
<div class="select fl J__searSelect">
<i class="text" id="destoon_select"><?php if($MODULE[$moduleid]['ismenu'] && !$MODULE[$moduleid]['islink']) { ?> <?php echo $MODULE[$moduleid]['name'];?> <?php } else { ?> 全部 <?php } ?>
</i>
<span class="option" style="display:none;">
<?php if(is_array($MODULE)) { foreach($MODULE as $m) { ?>
<?php if($m['ismenu'] && !$m['islink']) { ?>
<em onclick="setModule('<?php echo $m['moduleid'];?>','<?php echo $m['name'];?>')"><?php echo $m['name'];?></em>
<?php } ?>
<?php } } ?>
</span>
</div>
<form class="fl" id="destoon_search" action="<?php echo $MODULE[$searchid]['linkurl'];?>search.php" onsubmit="return Dsearch(1);">
<input type="hidden" name="moduleid" value="<?php echo $searchid;?>" id="destoon_moduleid"/>
<input type="hidden" name="spread" value="0" id="destoon_spread"/>
<input class="ipt-sear fl" name="kw" id="destoon_kw" type="text" class="search_i" value="<?php if($kw) { ?><?php echo $kw;?><?php } else { ?>请输入关键词<?php } ?>
" onfocus="if(this.value=='请输入关键词') this.value='';"<?php if($DT['search_tips']) { ?> onkeyup="STip(this.value);" autocomplete="off"<?php } ?>
 x-webkit-speech speech/>
<input class="btn-sear fl" type="submit" value="" />
</form>
</div>
</div>
</div>
<!--//下拉框-->
<div class="wrap__dropdownMenu J__dropdownMenu">
<div class="dropdownMenu" data-type="1" style="display:none;">
<ul class="clearfix">
<li><a href="/photo/list.php?catid=14"><i class="ico i1"></i><p>家居定制产品</p></a></li>
<li><a href="/photo/list.php?catid=15"><i class="ico i2"></i><p>设计图库</p></a></li>
<li><a href="/photo/list.php?catid=16"><i class="ico i3"></i><p>免费量尺设计</p></a></li>
</ul>
</div>
<div class="dropdownMenu" data-type="2" style="display:none;">
<ul class="clearfix">
<li><a href="/special/list.php?catid=43"><i class="ico i4"></i><p>厂家定制图库</p></a></li>
<li><a href="/special/list.php?catid=44"><i class="ico i5"></i><p>服务保障</p></a></li>
<li><a href="/special/list.php?catid=45"><i class="ico i6"></i><p>场景定制</p></a></li>
</ul>
</div>
<div class="dropdownMenu" data-type="3" style="display:none;">
<ul class="clearfix">
<li><a href="/news/list.php?catid=10"><i class="ico i7"></i><p>家装攻略</p></a></li>
<li><a href="/news/list.php?catid=11"><i class="ico i8"></i><p>材料知识</p></a></li>
<li><a href="/news/list.php?catid=12"><i class="ico i9"></i><p>设计知识</p></a></li>
<li><a href="/news/list.php?catid=13"><i class="ico i10"></i><p>家居风水</p></a></li>
</ul>
</div>
</div>
<script type="text/javascript">
$(function(){
$(".J__navbar .nav__menu dl dd").hover(function(){
$(this).addClass("on").siblings().removeClass("on");
$(".J__dropdownMenu .dropdownMenu").hide();
$(".J__dropdownMenu, .J__dropdownMenu .dropdownMenu[data-type='"+$(this).attr("data-type")+"']").slideDown(300);
}, function(){
});
$(".J__navbar").on("mouseleave", function () {
$(".J__dropdownMenu .dropdownMenu").slideUp(300);
$(".J__navbar .nav__menu dl dd").removeClass("on");
});
});
</script>
</div>
</div>
</div><!-- END.sec_header -->
