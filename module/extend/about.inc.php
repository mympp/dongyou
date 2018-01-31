<?php 
defined('IN_DESTOON') or exit('Access Denied');
require DT_ROOT.'/module/'.$module.'/common.inc.php';
$MOD['link_enable'] or dheader(DT_PATH);
require DT_ROOT.'/include/post.func.php';
$ext = 'about';

include template($ext, $module);

?>