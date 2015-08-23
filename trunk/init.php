<?php
/**
 * 全局项加载
 * By:ZY
 * init.php
 */
error_reporting(7);
ob_start();
header('Content-Type: text/html; charset=UTF-8');
require_once ZYDISK_ROOT.'/system/model/system.php';
zrequire(ZYDISK_ROOT.'/data/setting/system.php');//加载配置
?>