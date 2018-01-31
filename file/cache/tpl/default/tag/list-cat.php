<?php defined('IN_DESTOON') or exit('Access Denied');?><ul class="clearfix zlist">
<?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
<li>
    <a class="aimg fl" href="<?php echo $t['linkurl'];?>" title="<?php echo $t['alt'];?>"><img src="<?php echo $t['thumb'];?>" /></a>
    <div class="info">
        <h2 class="tit">[<?php echo $t['catname'];?>] <a href="<?php echo $t['linkurl'];?>"><?php echo $t['title'];?></a></h2>
        <p class="intro clamp3"><?php echo $t['introduce'];?></p>
        <div class="time"><?php echo timetodate($t['addtime'], $datetype);?> <span class="view"><i class="c--ff4a00"><?php echo $t['hits'];?></i>人浏览</span></div>
    </div>
</li>
<?php } } ?>
</ul>
<?php if($showpage && $pages) { ?><div class="pages mt--10 clearfix"><?php echo $pages;?></div><?php } ?>
