<?php defined('IN_DESTOON') or exit('Access Denied');?>
<div class="wrap-appoitment">
                <img src="<?php echo DT_STATIC;?>statics/img/placeholder/appointment-ads.jpg" />
                <form action="<?php echo $EXT['guestbook_url'];?>index.php" method="post">
                    <ul class="clearfix">
                        <input type="hidden" name="submit" value="1" />
                        <input type="hidden" name="type" value="预约维修" />
                        <li><em class="lbl">您的称呼</em><input class="ipt-text" type="text" name="nickname" placeholder="先生/小姐" /></li>
                        <li><em class="lbl">小区名称</em><input class="ipt-text" type="text" name="xiaoqu" placeholder="请输入小区名称" /></li>
                        <li><em class="lbl">您的电话</em><input class="ipt-text" type="text" name="telephone" placeholder="请输入电话号码" /></li>
                    </ul>
                    <input class="btn-appoitment bg__ff4a00-hover transit" type="submit" value="预约维修" style="border:none;background:none;cursor:pointer;width: 100%" />
                </form>
            </div>
