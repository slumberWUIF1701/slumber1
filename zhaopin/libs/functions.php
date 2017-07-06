<?php
/**
 * Created by PhpStorm.
 * User: Moonlight
 * Date: 2017/6/22
 * Time: 14:41
 */

    function e($param){
        if(is_array($param)){
            echo "<pre>";
            var_dump($param);
            echo "</pre>";
        }else if(is_string($param)){
            echo $param;
        }
    }

    function P($params){
        return  $_POST[$params];
    }
    function G($params){
        return  $_GET[$params];
    }
