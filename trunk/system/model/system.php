<?php
/**
 * 系统核心库
 *
 * By:ZY
 * 
 */
	
function zrequire($z) {
   if(file_exists($z))
 {
require_once $z;
} 
else 
{
zmsg("杯具啊,加载文件失败了。。。。。。</p>
大概是系统文件不完全的原因吧。。。</p>
请检查系统的完整性!</p>
************************************</p>
需加载文件的绝对路径:$z</p>
************************************</p>
遇到无法解决的问题请联系ZY。。。。。</p>");
} 
	
	                  }
					  
					  
					  
function zinclude($z1) {
		if(file_exists($z1)) {
@include $z1;
} else {
zmsg("杯具啊,加载文件失败了。。。。。。</p>
大概是系统文件不完全的原因吧。。。</p>
请检查系统的完整性!</p>
************************************</p>
需加载文件的绝对路径:$z1</p>
************************************</p>
遇到无法解决的问题请联系ZY。。。。。</p>");
} 
	                     }


						 
function zmsg($text) {
	echo <<<EOT
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ZYDISK Message</title>
<style type="text/css">
<!--
body{background-color:#F7F7F7;font-family: Arial;font-size: 12px;line-height:150%;}
.main{background-color:#FFFFFF;margin-top:20px;font-size: 12px;color: #666666;width:580px;margin:10px 200px;padding:10px;list-style:none;border:#DFDFDF 1px solid;}
-->
</style>
</head>
<body>
<div class="main">
$text
<br /><br />
</div>
</body>
</html>
EOT;
 exit;                     }
					  
					  
					  
function sbasename($filename) {
		return preg_replace('/^.+[\\\\\\/]/', '', $filename);
	                          }

function filesuffix($file_name) {
$extend =explode("." , $file_name);
$va=count($extend)-1;
return $extend[$va];
                               }
							   

function phpsuffix($name){ 
$pos = strpos($name,"php");
if ($pos === false) {
    return false;
} else {
    return true;
}}
/////////////////////////以下借用emlog4代码,向那多、奇遇等开发人员致敬//////////////////////////////////
function datasafe(){ 
if (get_magic_quotes_gpc()){
		$_GET = stripslashesDeep($_GET);
		$_POST = stripslashesDeep($_POST);
		$_COOKIE = stripslashesDeep($_COOKIE);
		$_REQUEST = stripslashesDeep($_REQUEST);
	
}}

function stripslashesDeep($value){
	$value = is_array($value) ? array_map('stripslashesDeep', $value) : stripslashes($value);
	return $value;
}
/////////////////////////以上借用emlog4代码,向那多、奇遇等开发人员致敬//////////////////////////////////
?>