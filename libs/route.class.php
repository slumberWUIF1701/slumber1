<?php
class route{
    private static $dir='';
    private static $file='';
    private static $action='';
    public function init(){
        $this->getInfo();
    }
    private function getInfo()
    {
        self::$dir = isset($_REQUEST['d']) && !empty($_REQUEST['d']) ? $_REQUEST['d'] : 'index';
        self::$file = isset($_REQUEST['f']) && !empty($_REQUEST['f']) ? $_REQUEST['f'] : 'index';
        self::$action = isset($_REQUEST['a']) && !empty($_REQUEST['a']) ? $_REQUEST['a'] : 'init';
        $dir = MODULE_PATH . self::$dir;
//        var_dump($dir);
        if (is_dir($dir)) {
            $file = MODULE_PATH . self::$dir.'/' . self::$file . '.class.php';
//            var_dump($file);
            if (file_exists($file)) {
                include_once "$file";
                //类名和文件名一致
                if (class_exists(self::$file, false)) {
                    //类存在 实例化类
                    $obj = new self::$file();
                    if (method_exists($obj, self::$action)) {
                        $method = self::$action;
                        //调用方法
                        $obj->$method();
                    } else {
                        echo "这个方法不存在";
                    }
                } else {
                    echo "这个类不存在";
                }
            } else {
                echo "文件不存在";
            }
        } else {
            echo "文件夹不存在";
        }
    }
}
