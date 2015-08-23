<?php
/**
 * 首页
 * By:ZY
 * index.php
 */
header("Content-Type:text/html; charset=utf-8");
define('ZYDISK_ROOT', dirname(__FILE__));
require_once ZYDISK_ROOT.'/init.php';//加载全局项
datasafe();//安全措施
$getdir = isset($_GET['dir']) ? addslashes($_GET['dir']) : '';
$dir = ZYDISK_ROOT.'/'.filediskdir.'/'.$getdir;
$dirr= iconv('gb2312','utf-8',$getdir);
if(substr($dirr,-2,2) == ".." ) zmsg("你想干啥,外面很危险滴。。。。");

if(file_exists(filediskdir.'/'.$dirr))
{
$z = dir($dir);
while (($file = $z->read()) !== false)
{
$filee= iconv('gb2312','utf-8',$file);
if(is_dir($dir."/".$file))
{
if($filee == "." )
{
echo '<a href="index.php?dir='.$filee.'">返回上一级</a><br/>';
}else{
if($filee == "..") {echo"<br/>";}else{
if($filee == ".svn"){}else{
echo '<a href="index.php?dir='.$getdir.'/'.$filee.'">'.$filee.'</a><br/>';}}
}
}else{
echo '<a href="download.php?file='.$getdir.'/'.$filee.'">'.$filee.'</a><br/>';
}
}
$z->close();
}
else{
zmsg("扯蛋啊,木有此目录!");
}
?>
