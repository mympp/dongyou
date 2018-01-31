<?php defined('IN_DESTOON') or exit('Access Denied');?><?php include template('ui_header');?>
<?php if($parentid == 43) { ?>
<?php include template('changjia', $module);?>
<?php } else if($parentid == 44) { ?>
<?php include template('fuwu', $module);?>
<?php } else if($parentid == 45) { ?>
<?php include template('changjing', $module);?>
<?php } ?>
<?php include template('slider');?>
<?php include template('ui_footer');?>