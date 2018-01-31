<?php 
defined('IN_DESTOON') or exit('Access Denied');
require DT_ROOT.'/module/'.$module.'/common.inc.php';
require DT_ROOT.'/include/post.func.php';
login();

$parentid = 16;

if($submit) {

    if(empty($post['oldpassword']) || empty($post['password']) || empty($post['cpassword'])){
        message('请填写信息！');
    }
    if(!is_password($_username, $post['oldpassword'])) message('现有密码错误，请检查');
    if(strlen($post['password']) < 6) message('新密码最少6位，请修改');
    if($post['password'] != $post['cpassword']) message('两次输入的密码不一致，请检查');
    if($post['password'] == $post['oldpassword']) message('新密码不能与现有密码相同');
    $passsalt = random(8);
    $password = dpassword($post['password'], $passsalt);
    $db->query("UPDATE {$DT_PRE}member SET password='$password',passsalt='$passsalt' WHERE userid='$_userid'");
    userclean($_username);
    message('修改成功！', $_SERVER['HTTP_REFERER']);

}
include template('collection_anli', $module);

?>