<?php
header("Content-Type:text/html; charset=utf-8");
define('ZYDISK_ROOT', dirname(__FILE__));
require_once ZYDISK_ROOT.'/init.php';//加载全局项
$name1 = 'disk/'.$_GET['file'];
$name = iconv('UTF-8', 'GB2312', $name1);
$name = stripslashes($name);
$name = str_replace('*', '&', $name);
$download = sbasename($name);
if(!is_dir("./".$name)){
if(file_exists($name)){
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=".$download);
$extensie = filesuffix($download);
zinclude(ZYDISK_ROOT.'/data/setting/safe.php');//加载安全配置
if(sdownload == "0")
{//免除防盗链程序

if($_GET['file']=="")
{
zmsg("ZYDISK:没有提交相关参数,系统拒绝您的下载请求!");
}else{


if (phpsuffix($extensie)== false && (strpos($name, "..") == false)) {
		if (strpos($download, "./") != false || strpos($download, "./") != 0) {

			echo "ZYDISK:特殊路径,系统禁止下载!";
		} else {
			readfile($name);
		}
	} else {
		echo "ZYDISK:".$extensie."文件被系统禁止下载!!";
	}}

}else{
if(strstr($_SERVER['HTTP_REFERER'],Wurl)=="false"||$_SERVER['HTTP_REFERER']==""||strstr($_SERVER['HTTP_REFERER'],Wurl)=="")
{if($_SERVER['HTTP_REFERER']==""){
zmsg("ZYDISK:您直接进行了下载而并非源自本站,</p>因此系统拒绝您的请求,请登录后下载: 
".Wurl);
}
else{
zmsg("ZYDISK:您来自于".$_SERVER['HTTP_REFERER']."</p>并非源自本站,因此系统拒绝您的请求,请登录后下载:  ".Wurl."</p>");
}
}else{
if($_GET['file']=="")
{
zmsg("ZYDISK:没有提交相关参数,系统拒绝您的下载请求!");
}else{

if (phpsuffix($extensie)== false && (strpos($name, "..") == false)) {
		if (strpos($download, "./") != false || strpos($download, "./") == 0) {
			echo "ZYDISK:特殊路径,系统禁止下载!";
		} else {
			readfile($name);
		}
	} else {
		echo "ZYDISK:".$extensie."文件被系统禁止下载!!";
	}}

}}}else{
zmsg("扯蛋啊,木有此文件,下啥下啊。。。。。");}}else{
zmsg("扯蛋啊,丫的是目录,木有文件,下啥下啊。。。。。");}
?>