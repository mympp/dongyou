<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('ui_header');?>
<!-- <>登录、注册页面 -->
<div class="wrap__lgreg-panel">
<div class="lgreg__panel-main">
<div class="hdtips">我已经注册，现在去<a class="c--ff4a00" href="/menber/login.php">登录</a></div>
<div class="reg-form">
<form method="post" id="dform">
<input type="hidden" name="action" value="post"/>
<input type="hidden" name="post[regid]" value="5"/>
<input type="hidden" name="submit" value="1"/>
<div class="item">
<label class="lbl"><i class="c--ff4a00">*</i>用户名：</label>
<em class="ico-user"></em><input class="ipt-text" type="text" autocomplete="off" name="post[username]" id="username" placeholder="会员名称 <?php echo $MOD['minusername'];?>-<?php echo $MOD['maxusername'];?>个字符，小写字母和数字"/>
</div>
<div class="item">
<label class="lbl"><i class="c--ff4a00">*</i>请设置密码：</label>
<em class="ico-pass"></em><input class="ipt-text" name="post[password]" id="password" placeholder="登录密码 <?php echo $MOD['minpassword'];?>-<?php echo $MOD['maxpassword'];?>个字符"/>
</div>
<div class="item">
<label class="lbl"><i class="c--ff4a00">*</i>请确认密码：</label>
<em class="ico-pass"></em><input class="ipt-text" type="password" name="post[cpassword]" id="cpassword" autocomplete="off" placeholder="请再次输入6-20位登录密码" />
</div>
<div class="item">
<label class="lbl"><i class="c--ff4a00">*</i>验证码：</label>
<!-- <input name="captcha" class="ipt-text" id="captcha" type="text" value="" placeholder="请输入验证码"  autocomplete="off"/> -->
<?php if($MOD['captcha_register']) { ?>
<div style="height:44px;margin-left:16px;" class="bd-b"><?php include template('captcha', 'chip');?></div>
<?php } ?>
<!-- <img class="vcode_img" src="<?php echo DT_PATH;?>api/captcha.png.php?action=image" alt="验证码" id="captchapng" onclick="reloadcaptcha();"/>
<a class="c--999 ml--10" href="javascript:reloadcaptcha();">看不清？<em class="c--76ba30">换一张</em></a><span id="ccaptcha"></span> -->
</div>

<div class="item">
<div class="ckbox-radio">
<label><input type="checkbox" checked="checked" onclick="if(this.checked){Ds('sbm');}else{Dh('sbm');}"/> 我已阅读并同意<a class="protocle c--ff4a00" href="javascript:;">《东有家居装饰用户注册协议》</a></label>
</div>
</div>
<div class="item">
<button class="btn-submit" type="button" onclick="Dregister()">立即注册</button>
</div>
</form>
</div>
</div>
</div>
<script type="text/javascript">
var AJPath = "/ajax.php";
function showcaptcha() {
if(Dd('captchapng').style.display=='none') {
Dd('captchapng').style.display='';
}
if(Dd('captchapng').src.indexOf('loading.gif') != -1) {
Dd('captchapng').src='<?php echo DT_PATH;?>api/captcha.png.php?action=image';
}
if(Dd('captcha').value=='点击显示') {
Dd('captcha').value='';
}
Dd('captcha').className = '';
}
function reloadcaptcha() {
Dd('captchapng').src = '<?php echo DT_PATH;?>api/captcha.png.php?action=image&refresh='+Math.random();
//Dd('ccaptcha').innerHTML = '';
Dd('captcha').value = '';
}
function checkcaptcha(s) {
s = s.trim();
var t = encodeURIComponent(s);
if(t.indexOf('%E2%80%86') != -1) s = decodeURIComponent(t.replace(/%E2%80%86/g, ''));
if(!is_captcha(s)) return;
$.post(AJPath, 'action=captcha&captcha='+s,
function(data) {
if(data == '0') {
// Dd('ccaptcha').innerHTML = '&nbsp;&nbsp;<img src="<?php echo DT_SKIN;?>image/check_right.gif" align="absmiddle"/>';
<?php if($DT_MOB['os'] == 'ios') { ?>
Dd('captcha').value = s;
<?php } ?>
} else {
Dd('captcha').focus;
// Dd('ccaptcha').innerHTML = '&nbsp;&nbsp;<img src="<?php echo DT_SKIN;?>image/check_error.gif" align="absmiddle"/>';
}
}
);
}
function is_captcha(v) {
if(v == '点击显示') return false;
if(v.match(/^[a-z0-9A-Z]{1,}$/)) {
return v.match(/^[a-z0-9A-Z]{4,}$/);
} else {
return v.length > 1;
}
}
$(function() {
$('#captcha').bind('keyup blur', function() {
checkcaptcha($('#captcha').val());
});
});
function Dregister() {
var val,len;
val = $('#username').val();
len = val.length;
if(len < <?php echo $MOD['minusername'];?> || len > <?php echo $MOD['maxusername'];?>) {
alert('会员名长度限制为<?php echo $MOD['minusername'];?>-<?php echo $MOD['maxusername'];?>');
return false;
}
if(val.indexOf('__') != -1 || val.indexOf('--') != -1) {
alert('会员名中划线和下划线不能连续出现');
return false;
}
if(!val.match(/^[a-z0-9]{1}[a-z0-9_\-]{0,}[a-z0-9]{1}$/)) {
alert('会员名限制为小写字母、数字组合');
return false;
}
val = $('#password').val();
len = val.length;
if(len < <?php echo $MOD['minpassword'];?> || len > <?php echo $MOD['maxpassword'];?>) {
alert('密码长度限制为<?php echo $MOD['minpassword'];?>-<?php echo $MOD['maxpassword'];?>');
return false;
}
<?php if($MOD['captcha_register']) { ?>
val = $('#captcha').val();
if(!is_captcha(val)) {
alert('请填写验证码');
return false;
}
<?php } ?>
$.ajaxSetup({
beforeSend: function(request) {
request.setRequestHeader("User-Agent","Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.108 Mobile Safari/537.36");
}
});
$.post('register.php', $('#dform').serialize(), function(data) {
console.log(data);
if(data == 'ok') {
alert('注册成功！')
self.location.href= 'login.php';
}else {
alert(data);
}
});
return;
}
</script>
<?php include template('ui_footer');?>
