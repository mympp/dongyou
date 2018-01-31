<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('ui_header');?>
<script src="<?php echo DT_STATIC;?>statics/js/jquery.xySlider.js"></script>
<!-- END.sec_header -->
<!-- <>主体容器区域 -->
<div class="container">
    <!-- //当前位置 -->
    <div class="hd__curPos c--666 fs--12 bg--f8f8f8">
        <div class="mid88 clearfix" style="margin:0 20px;">
            <div class="fl">您所在位置：<a href="<?php echo $MODULE['1']['linkurl'];?>">首页</a> &raquo; <a href="<?php echo $MOD['linkurl'];?>"><?php echo $MOD['name'];?></a> &raquo; <?php echo cat_pos($CAT, ' &raquo; ');?> &raquo;</div>
            <div class="hd__wrap-shareTo">
                <div class="wrap-wechat fl">
                    <span class="wx"><i></i>收藏到微信</span>
                    <div class="imgbox" style="display:none;">
                        <img src="<?php echo DT_STATIC;?>statics/img/ft-qrcode-img.png" height="150" width="150" />
                        <p class="c--ff4a00 fs14">收藏到微信</p>
                    </div>
                </div>
                <div class="wrap-msn fl"><span><i></i>发送到手机</span></div>
                <!--分享功能-->
                <div class="wrap-share fl">
                    <!-- Baidu Share begin -->
                    <span class="sharetxt"><i></i>分享</span>
                    <div class="sharebox" style="display:none;">
                        <div class="bdsharebuttonbox">
                            <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博">新浪微博</a>
                            <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间">QQ空间</a>
                            <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信">微信</a>
                            <a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博">腾讯微博</a>
                            <a href="#" class="bds_more" data-cmd="more" title="更多">更多...</a>
                        </div>
                    </div>
                    <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
                    <!-- Baidu Share end -->
                </div>
                <script type="text/javascript">
                    $(".wrap-wechat").hover(function(){
                        $(this).find(".imgbox").slideToggle(300);
                    });
                    $(".wrap-share").hover(function(){
                        $(this).find(".sharebox").slideToggle(300);
                    });
                </script>
            </div>
        </div>
    </div>
    <!-- //内容展示区域 -->
    <div class="sec__repairChoose-detail mid88">
        <?php include template('rightbar', $module);?>
        <div class="lt-imgSlider">
            <!-- //左侧大图展示-->
            <div class="wrap-imgSliderBox clearfix">
                <div class="wrap-imgSlider">
                    <div class="js-imglist" style="padding-bottom:150px;">
                        <ul class="wrap__img-preview">
                          
                            <?php if($T) { ?>
                            <?php if(is_array($T)) { foreach($T as $i => $v) { ?>
                            <li><img src="<?php echo $v['big'];?>" height="450" width="680" title="<?php echo $title;?>" oncontextmenu="return false;" onload="if(this.width><?php echo $MOD['max_width'];?>)this.width=<?php echo $MOD['max_width'];?>;if(this.src.indexOf('spacer.gif')!=-1){this.width=<?php echo $MOD['max_width'];?>;this.height=1;}" /><div class="desc"><?php echo $v['introduce'];?></div><span class="collect"><i></i><em>加入收藏</em></span></li>
                            <?php } } ?>
                            <a class="js-btn-prev lr-prev-btn" id="ctl-prev" href="javascript:"></a>
<a class="js-btn-next lr-next-btn" id="ctl-next" href="javascript:"></a>
                            <?php } ?>
                           
                        </ul>
                        <!-- //小缩略图-->
                        <div class="wrap__img-thumb clearfix J__imgThumb">
                           <div class="pn-thumb prev-thnum mr--10">
                               <?php $topTag = tag("moduleid=$moduleid&condition=status=3 and addtime<$addtime&areaid=$cityid&pagesize=1&order=addtime desc&template=null", -1)?>
                               <?php if($topTag) { ?>
                               <?php if(is_array($topTag)) { foreach($topTag as $i => $t) { ?>
                               <em class="txt">
                                   <a href="<?php echo $t['linkurl'];?>" class="txt" <?php if($target) { ?> target="<?php echo $target;?>"<?php } ?>
<?php if($class) { ?> <?php } ?>
 title="上一个：<?php echo $t['alt'];?>"><img src="<?php echo $t['thumb'];?>" /></a></em>
                               <?php } } ?>
                               <?php } else { ?>
                                暂无上一个
                               <?php } ?>
                           </div>
                            <div class="inner dib">
                                <a class="js-btn-prev prev-btn fl disabled" id="ctl-prev" href="javascript:"></a>
                                <div class="g-thumblist">
                                    <ul class="js-thumb-ls thumb-ls fl pos-rel">
                                       
                                        <?php if(is_array($T)) { foreach($T as $i => $w) { ?>
                                        <li><a><em class="num"><?php echo $i+1;?>/<?php echo count($T);?></em><img src="<?php echo $w['thumb'];?>" /></a></li>
                                        <?php } } ?>
                                    </ul>
                                </div>
                                <a class="js-btn-next next-btn fl" id="ctl-next" href="javascript:;"></a>
                            </div>
                            <div class="pn-thumb next-thnum ml&#45;&#45;10">
                               <?php $nextTag = tag("moduleid=$moduleid&condition=status=3 and addtime>$addtime&areaid=$cityid&pagesize=1&order=addtime asc&template=null", -1)?>
                                <?php if($nextTag) { ?>
                                <?php if(is_array($nextTag)) { foreach($nextTag as $i => $t) { ?>
                                <em class="txt">
                                <a href="<?php echo $t['linkurl'];?>" class="txt" <?php if($target) { ?> target="<?php echo $target;?>"<?php } ?>
<?php if($class) { ?> <?php } ?>
 title="下一个：<?php echo $t['alt'];?>"><img src="<?php echo $t['thumb'];?>" /></a></em>
                                <?php } } ?>
                                <?php } else { ?>
                                暂无下一个
                                <?php } ?>
                            </div>
                        </div>
                        <div class="wrap-question">
                            <a class="i1" href="javascript:void(0);"></a><a class="i2" href="javascript:void(0);"></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //相关案例-->
            <div class="wrap-releaseCase align-c clearfix">
                <div class="dib">
                    <div class="hd clearfix"><h2 class="fl">相关案例</h2><a class="fr" href="show.php?itemid=<?php echo $itemid;?>">换一批</a></div>
                    <ul class="clearfix">
                        <?php $dht = tag("moduleid=$moduleid&condition=status=3&catid=$catid&areaid=$cityid&order=rand()&page=$page&showpage=1&pagesize=2&template=null")?>
                        <?php if(is_array($dht)) { foreach($dht as $i => $v) { ?>
                        <li>
                            <a class="aimg" href="<?php echo $v['linkurl'];?>"><img src="<?php echo $v['thumb'];?>" /></a>
                            <h2 class="clamp1"><?php echo $v['title'];?></h2>
                            <p class="c--999 ff-hv">浏览：<?php echo $v['hits'];?></p>
                        </li>
                        <?php } } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include template('slider');?>
<?php if($itemid) { ?>
<script src="<?php echo DT_STATIC;?>statics/js/zCaches.js"></script>
<script>
    /** 图片轮播 */
    var $slider = $(".js-imglist"), $nav = $(".js-thumb-ls li");
        $slider.jq_xySlider({
            selector: ".wrap__img-preview",
            effect: "fade",
            autoplay:true,
            onEnd: function(idx){
                $nav.removeClass("on").eq(idx).addClass("on");
            },
            navigation: $nav
        });
        /** 小缩略图左右切换 */
        $(function () {
            $(".J__imgThumb").jq_simpleStep({visual:5});
        });
        //收藏
        $(".wrap__img-preview li .collect").on("click", function(){
            if(!window.hasLogin){
                alert('请先登录');
                return false;
            }
            var that = $(this);
            var parentid  = "<?php echo $MOD['moduleid'];?>";
            var articleid = "<?php echo $itemid;?>";
            var catid   = "<?php echo $catid;?>";
            var action = 'add';
            $.post('/member/favorite_dongyou.php', {parentid:parentid,articleid:articleid,catid:catid,action:action}, function(data) {
                if(!data){
                    alert('系统出错');
                    return false;
                }
                if(data == 'true'){
                    alert('收藏成功');
                    that.toggleClass("on");
                    that.find("em").text($(this).find("em").text()=="加入收藏" ? "已收藏" : "加入收藏");
                }else if(data == 'false'){
                    alert('收藏失败，刷新再试试！');
                    return false;
                }else{
                    alert(data);
                    return false;
                }
            })
        });
var ck = new zCaches();
ck.add({
id:'<?php echo $itemid;?>',
type:'photo',
cover:'<?php echo $thumb;?>',
title:'<?php echo $title;?>',
tag:'',
itime:+new Date()
    });
    $(".wrap-question").on("click",'a',function(){
        $(".popup-freedesign").removeClass("up").addClass("down");
        $(".popup__mask").fadeIn(300);
    });
    
</script>
<?php } ?>
<?php include template('ui_footer');?>
