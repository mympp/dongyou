<?php 
defined('IN_DESTOON') or exit('Access Denied');
login();
require DT_ROOT.'/module/'.$module.'/common.inc.php';
require DT_ROOT.'/include/post.func.php';
$TYPE = get_type('favorite-'.$_userid);
require MD_ROOT.'/favorite_dongyou.class.php';
$do = new favorite_dongyou();
switch($_POST['action']) {
	case 'add':
		$post['parentid']  = (int)$_POST['parentid'];
		$post['articleid'] = (int)$_POST['articleid'];
		$post['catid']     = (int)$_POST['catid'];
		$CAT = get_cat($post['catid']);

		$r = $db->get_one("SELECT COUNT(*) AS num FROM {$DT_PRE}favorite_dongyou WHERE userid=$_userid and parentid='".$post['parentid']."' and articleid='".$post['articleid']."'");
		if($r['num'] > 0) exit('已收藏');

		if(empty($post['parentid']) || empty($post['articleid']) || empty($post['catid'])){
			exit('parentid,articleid,catid不存在');
		}else{
			$submit = 1;
		}
		if($CAT['moduleid'] != $post['parentid']){
			exit('分类出错');
		}

		if($submit) {
			$post['userid'] = $_userid;
			$post['addtime'] = $DT_TIME;
			if($do->add($post)) {
				exit('true');
			} else {
				exit('false');
			}
		}
	break;
	case 'delete':

		$itemid = $_POST['id'] ? $_POST['id'] : $itemid;
		$itemid or exit('请选择收藏');

		if(is_array($itemid)) {
			foreach ($itemid as $k => $v) {
				$do->itemid = $v;
				$r[$k] = $do->get_one();
				if(!$r[$k] || $r[$k]['userid'] != $_userid) exit('Invalid Request');
			}
		}else{
			$do->itemid = $itemid;
			$r = $do->get_one();
			if(!$r || $r['userid'] != $_userid) exit('Invalid Request');

		}
		$do->delete($itemid);
		exit('true');
	break;
	default:
		exit('Invalid Request');
	break;
}
?>