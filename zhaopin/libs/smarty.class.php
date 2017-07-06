<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/18
 * Time: 17:46
 */
class smarty
{
    public $templateDir = "template";
    public $compileDir = "compile";

    public $assignArray=array();

    public function setTemplateDir($dir = "template"){

        $this->templateDir = ROOT_PATH . $dir;
        if (!is_dir($dir)) {
            mkdir($dir);
        }

    }

    public function setCompileDir($dir = "compile"){

        $this->compileDir = ROOT_PATH . $dir;
        if (!is_dir($dir)) {
            mkdir($dir);
        }

    }


    public function assign($key,$val){
        $this->assignArray[$key]=$val;
    }

    public function display($path){
        $path=$this->templateDir."/".$path;
        $str=file_get_contents($path);

        $result=preg_replace("/\{([\s\S]+?)\}/",'<?php echo $this->assignArray["$1"]?>',$str);

        $compath=$this->compileDir."/".md5($path).".php";

        file_put_contents($compath,$result);

        include $compath;

    }


}


