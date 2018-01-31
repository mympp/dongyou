<?php defined('IN_DESTOON') or exit('Access Denied');?><ul class="clearfix">
<?php if(is_array($tags)) { foreach($tags as $i => $t) { ?>
    <li>
        <a class="aimg" href="<?php echo $t['linkurl'];?>" title="<?php echo $t['alt'];?>">
            <img src="i<?php echo $t['thumb'];?>" height="180" width="273" />
        </a>
        <div class="title clamp2"><span class="" style="height:40px;"><a href="<?php echo $t['linkurl'];?>"><?php echo $t['title'];?></a></span></div>
    </li>
<?php } } ?>
</ul>
<?php if($showpage && $pages) { ?><div class="pages"><?php echo $pages;?></div><?php } ?>
