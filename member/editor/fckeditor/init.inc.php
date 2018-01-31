<?php
defined('IN_DESTOON') or exit('Access Denied');
$moddir = defined('DT_ADMIN') ? $MODULE[2]['moduledir'].'/editor/' : 'editor/';
$draft = $textareaid == 'content' && $_userid && $DT['save_draft'];
if($DT['save_draft'] == 2 && !defined('DT_ADMIN')) $draft = false;
$_width = is_numeric($width) ? $width.'px' : $width;
$_height = is_numeric($height) ? $height.'px' : $height;
$editor .= '<script type="text/javascript">var ModuleID = '.$moduleid.';';
$editor .= 'var DTAdmin = '.(defined('DT_ADMIN') ? 1 : 0).';';
$editor .= 'var EDPath = "'.$moddir.'fckeditor/";';
$editor .= 'var ABPath = "'.$MODULE[2]['linkurl'].'editor/fckeditor/";';
$editor .= 'var EDW = "'.$_width.'";';
$editor .= 'var EDH = "'.$_height.'";';
$editor .= 'var EDD = "'.($draft ? 1 : 0).'";';
$editor .= 'var EID = "'.$textareaid.'";';
$editor .= 'var FCKID = "'.$textareaid.'";';
$editor .= '</script>';
$editor .= '<script type="text/javascript" src="'.$moddir.'fckeditor/fckeditor.js?v=6.0"></script>';
$editor .= '<script type="text/javascript">';
$editor .= 'window.onload = function() {';
$editor .= 'var sBasePath = "'.$moddir.'fckeditor/";';
$editor .= 'var oFCKeditor = new FCKeditor("'.$textareaid.'");';
$editor .= 'oFCKeditor.Width = "'.$_width.'";';
$editor .= 'oFCKeditor.Height = "'.$_height.'";';
$editor .= 'oFCKeditor.BasePath = sBasePath;';
$editor .= 'oFCKeditor.ToolbarSet = "'.$toolbarset.'";';
$editor .= 'oFCKeditor.ReplaceTextarea();';
$editor .= '}';
$editor .= '</script>';
$editor .= '<script type="text/javascript" src="'.$moddir.'fckeditor/init.api.js"></script>';
$editor .= '<script type="text/javascript" src="'.DT_STATIC.'file/script/editor.js"></script>';
?>