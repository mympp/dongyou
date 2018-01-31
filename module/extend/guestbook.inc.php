<?php 
defined('IN_DESTOON') or exit('Access Denied');
require DT_ROOT.'/module/'.$module.'/common.inc.php';
$MOD['guestbook_enable'] or dheader(DT_PATH);
$TYPE = explode('|', trim($MOD['guestbook_type']));
require DT_ROOT.'/include/post.func.php';
require MD_ROOT.'/guestbook.class.php';
$do = new guestbook();
$destoon_task = rand_task();
if($submit) {

	switch($type){
		case '预约咨询':

			if(empty($nickname) || empty($telephone)){
				message('请填写您的信息！');
			}
			if(!is_mobile($telephone)){
				message('手机号码格式不正确！');
			}

			$post['truename']  = $nickname;
			$post['telephone'] = $telephone;
			$post['type']      = $type;
			$post['content']   = '姓名：'.$nickname.';手机号码：'.$telephone;

			break;
		case '设计咨询':

			if(empty($nickname) || empty($telephone) || empty($mianji)){
				message('请填写您的信息！');
			}

			$mianji = trim($mianji);
			if(!preg_match("/^[0-9]*$/", $mianji)){
				message('面积是0-9数字！');
			}
			if(!is_mobile($telephone)){
				message('手机号码格式不正确！');
			}

			$post['truename']  = $nickname;
			$post['telephone'] = $telephone;
			$post['type']      = $type;

			$post['content']   = '建筑面积：'.$mianji.';手机号码：'.$telephone.';称呼：'.$nickname;

			break;
		case '预约维修':

			if(empty($nickname) || empty($telephone) || empty($xiaoqu)){
				message('请填写您的信息！');
			}
			$telephone = trim($telephone);
			if(!(is_mobile($telephone) || preg_match("/^(\(\d{3,4}\)|\d{3,4}-|\s)?\d{7,14}$/", $telephone))){
				message('电话号码格式不正确！');
			}

			if($content){
				$xiaoqu = $xiaoqu.';留言内容：'.$content;
			}

			$post['truename']  = $nickname;
			$post['telephone'] = $telephone;
			$post['type']      = $type;
			$post['content']   = '称呼：'.$nickname.';电话号码：'.$telephone.';小区名称：'.$xiaoqu;

			break;
		default:
			captcha($captcha, $MOD['guestbook_captcha']);
			break;
	}

//	echo '<pre>';var_dump($post);echo '</pre>';exit;
	if($do->pass($post)) {
		$post['areaid'] = $cityid;
		$do->add($post);

//		message($L['gbook_success'], $EXT['guestbook_url']);
		message($L['gbook_success'], $_SERVER['HTTP_REFERER']);

	} else {
		message($do->errmsg);
	}
} else {
	$type = '';
	$condition = "status=3 AND reply<>''";
	if($keyword) $condition .= " AND content LIKE '%$keyword%'";
	if($cityid) $condition .= ($AREA[$cityid]['child']) ? " AND areaid IN (".$AREA[$cityid]['arrchildid'].")" : " AND areaid=$cityid";
	$lists = $do->get_list($condition);
	$head_title = $L['gbook_title'];
	$content = isset($content) ? dhtmlspecialchars(stripslashes($content)) : '';
	$truename = $telephone = $email = $qq = $msn = $ali = $skype = '';
	if($_userid) {
		$user = userinfo($_username);
		$truename = $user['truename'];
		$telephone = $user['telephone'] ? $user['telephone'] : $user['mobile'];
		$email = $user['mail'] ? $user['mail'] : $user['email'];
		$qq = $user['qq'];
		$msn = $user['msn'];
		$ali = $user['ali'];
		$skype = $user['skype'];
	}
	include template('guestbook', $module);
}
?>