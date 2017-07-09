<?php
/**
 * Created by PhpStorm.
 * User: Moonlight
 * Date: 2017/6/22
 * Time: 11:56
 */
//define('INDEX','index');
//$info=$_SERVER;
//var_dump($info);
//$search=isset($info['argv'][0])?$info['argv'][0]:"f=b";
//$result=explode("=",$search);
//$filename=$result[1];
//include $filename.".php";
header('content-type:text/html;charset=utf8');
define('coming','yes');
include "libs/functions.php";
$info=$_SERVER;
//e($info);

//项目运行的根目录
define("ROOT_PATH",substr($info['SCRIPT_FILENAME'],0,strrpos($info['SCRIPT_FILENAME'],"/")+1));
//e(ROOT_PATH);

//引擎目录
define("LIBS_PATH",ROOT_PATH.'libs/');
//e(LIBS_PATH);

//模块目录
define("MODULE_PATH",ROOT_PATH.'module/');
//echo MODULE_PATH;

//服务器根目录
define("HTTP_PATH","http://".$info['SERVER_NAME'].substr($info['SCRIPT_NAME'],0,strrpos($info['SCRIPT_NAME'],'/')+1));
// e(HTTP_PATH);

//当前运行的文件
define("SELF_PATH","http://".$info['SERVER_NAME'].$info['SCRIPT_NAME']);
//e(SELF_PATH);
//static目录
define("STATIC_PATH",HTTP_PATH."static/");
define("EDIT_PATH",STATIC_PATH."editor/");
//css目录
define("CSS_PATH",STATIC_PATH."css/");

//img目录
define("IMG_PATH",STATIC_PATH."img/");

//js目录
define("JS_PATH",STATIC_PATH."js/");

//字体目录
define("FONT_PATH",STATIC_PATH."fonts/");
//echo STATIC_PATH."<br>",CSS_PATH."<br>",IMG_PATH."<br>";
include_once LIBS_PATH."route.class.php";
include_once LIBS_PATH."smarty/Smarty.class.php";
include_once LIBS_PATH."db.class.php";
include_once LIBS_PATH."main.class.php";
include_once LIBS_PATH."session.class.php";
include_once LIBS_PATH."code.class.php";
include_once LIBS_PATH."tree.class.php";
include_once LIBS_PATH."page.class.php";
include_once LIBS_PATH."upload.class.php";
$route=new route();
$route->init();
