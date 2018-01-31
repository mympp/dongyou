<?php defined('IN_DESTOON') or exit('Access Denied');?><div class="wrap__repair-list mt--10">
<div class="waterfall-inner">
<ul class="col clearfix" id="js-container">
<?php if(is_array($tags)) { foreach($tags as $k => $t) { ?>
<li class="box">
<div class="inner">
<a class="img" href="<?php echo $t['linkurl'];?>">
<img src="<?php echo str_replace('.thumb.', '.middle.',$t['thumb']);?>">
</a>
<div class="title"><?php echo $t['title'];?></div>
</div>
</li>
<?php } } ?>
</ul>
</div>
</div>
<?php if($showpage && $pages) { ?><div class="pages"><?php echo $pages;?></div><?php } ?>
<script type="text/javascript">
$(function(){
var $container = $('#js-container');
$container.imagesLoaded(function(){
$container.masonry({
itemSelector: '.box',
isAnimated : true//是否采用jquery动画进行重拍版
});
});
});
</script>
