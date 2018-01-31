<?php defined('IN_DESTOON') or exit('Access Denied');?><div class="rt-sidebar">
        <div class="inner">
<?php include template('appoitment');?>
            <div class="wrap-hotRecommend borT mt--20 pt--10">
                <h2><div class="clearfix"><span class="fl">热门推荐</span><a class="fr fs12 ff-sm mt--5 c--999" href="/news">更多></a></div></h2>
                <div class="list mt--5">
                    <?php $rightTags=tag("moduleid=$moduleid&condition=status=3 and addtime>$today_endtime-30*86400&catid=$catid&areaid=$cityid&order=hits desc&template=null&pagesize=9");?>
                    <?php if(is_array($rightTags)) { foreach($rightTags as $i => $t) { ?>
                        <a class="row <?php if($i < 3) { ?>top3<?php } ?>
" href="<?php echo $t['linkurl'];?>">
                            <em class="fl "><?php echo $i+1;?></em>
                            <div class="txt"><span><?php echo $t['title'];?></span></div>
                            <div class="info clearfix">
                                <img class="fl" src="<?php echo $t['thumb'];?>" />
                                <div class="tit"><?php echo dsubstr($t['introduce'], 32, '...');?><i>[查看详情]</i></div>
                            </div>
                        </a>
                    <?php } } ?>
                </div>
            </div>
            <div class="wrap-hotlabel borT mt--20 pt--10 pb--30">
                <h2><div class="clearfix"><span class="fl">热门标签</span><a class="fr fs12 ff-sm mt--5 c--999" href="#">更多></a></div></h2>
                <div class="list mt--5">
                    <a href="#">不锈钢栏杆</a><a href="#">铝合金门窗</a><a href="#">全铝门窗</a><a href="#">铝合金纱窗</a><a href="#">不绣钢防盗门</a><a href="#">入户门</a><a href="#">别墅大门</a><a href="#">楼梯扶手</a><a href="#">全铝家具</a><a href="#">铝合金阳台栏杆</a>
                </div>
            </div>
        </div>
    </div>