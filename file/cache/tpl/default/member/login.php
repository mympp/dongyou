<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('ui_header');?>
<!-- <>登录、注册页面 -->
<div class="wrap__lgreg-panel lg">
<div class="mid pos-rel">
<div class="lgreg__panel-form">
<div class="qrcode"><img src="<?php echo DT_STATIC;?>statics/img/lgreg-qrcode.png" /></div>

<div class="form">
<div class="tabs clearfix">
<span class="on"><a data-st-panel-cls="J__swtLgReg">普通登录</a></span>
</div>
<div class="conts fl">
<form method="post" action="<?php echo $DT['file_login'];?>" onsubmit="return Dcheck();">
<input name="forward" type="hidden" value="<?php echo $forward;?>"/>
<input name="auth" type="hidden" value="<?php echo $auth;?>"/>
<!-- 1、普通登录 -->
<div class="J__swtLgReg" style="display: block;">
<div class="row">
<label class="lbl">用户名</label>
<input class="ipt-text" name="username" type="text" id="username" value="<?php echo $username;?>" placeholder="请输入用户名"/>
</div>
<div class="row">
<label class="lbl">密码</label>
<input class="ipt-text" type="password" name="password" placeholder="请输入密码" />
</div>

<div class="row ckbox-radio">
<label class="fl"><input type="checkbox" name="cookietime" value="1" id="cookietime"<?php if($MOD['login_remember']) { ?> checked<?php } ?>
 /> 记住我</label>
</div>
<div class="row mt--20">
<button class="btn-submit bg__ff4a00-hover transit dib" type="submit" name="submit" >立即登录</button>
</div>
<div class="row links">
<a class="forgetpwd fl" href="send.php">忘记密码？</a>
<span class="reg fr">没有账号？<a class="c--ff4a00" href="/member/register.php">立即注册</a></span>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
<?php include template('ui_footer');?>