<?php
/**
 * Created by PhpStorm.
 * User: Moonlight
 * Date: 2017/6/22
 * Time: 18:05
 */
if(!defined("coming")){
    echo "非法";
    exit();
}
class db{
    private $host;
    private $user;
    private $pass;
    private $database;
    private $port;
    public $db;
    function __construct($table){
        $config=include ROOT_PATH."config.php";
        $this->table=$table;
        $this->host=$config['database']['host'];
        $this->user=$config['database']['user'];
        $this->pass=$config['database']['pass'];
        $this->database=$config['database']['database'];
        $this->port=$config['database']['port'];
        $this->db=new mysqli($this->host,$this->user,$this->pass,$this->database,$this->port);
        if (!$this->db){
            echo mysqli_connect_error();
            exit;
        }
        $this->db->query('set names utf8');
        $this->opts['field']="*";
        $this->opts["val"]=$this->opts['where']=$this->opts['order']=$this->opts['limit']="";
        return $this;
    }
    function select($sql=""){
        if(empty($sql)){
            $sql="select {$this->opts['field']} from $this->table {$this->opts['where']} {$this->opts['order']} {$this->opts['limit']}";
        }else{
            $sql=$sql;
        }
        $arr=array();
        $result=$this->db->query($sql);
        while($row=$result->fetch_assoc()){
            $arr[]=$row;
        }
      return $arr;
//        echo $sql;
    }
    function setField($params="*"){
        $this->opts['field']=$params;
        return $this;
    }
    function setWhere($params){
        $this->opts['where']="where ".$params;
        return $this;
    }
    function setOrder($params){
        $this->opts['order']="order by ".$params;
        return $this;
    }
    function setLimit($params){
        $this->opts['limit']="limit ".$params;
        return $this;
    }
    function setVal($params){
        $this->opts['val']=$params;
        return $this;
    }
    function join($tables){
        $sql="select ".$this->opts['field']." from ".$tables." ".$this->opts['where']." ".$this->opts['order']." ".$this->opts['limit'];
        $arr=array();
        $result=$this->db->query($sql);
        while($row=$result->fetch_assoc()){
            $arr[]=$row;
        }
        return $arr;
    }
    function update($params=""){
        if(!empty($params)){
            $params=strtolower($params);
            $index=strrpos($params,"where");
            if($index>-1){
                if($index>0){
                    $this->opts['field']=substr($params,0,$index);
                    $this->opts['where']=substr($params,$index);
                }else if($index==0){
                    $this->opts['field']=$this->opts['field'];
                    $this->opts['where']=$params;
                }
            }else{
                $this->opts['field']=$params;
                $this->opts['where']=$this->opts['where'];
            }
        }
        $sql="update ".$this->table." set ".$this->opts['field']." ".$this->opts['where'];
        $this->db->query($sql);
        return $this->db->affected_rows;
    }

    function del($params=""){
        if(!empty($params)){
            $this->opts['where']=$params;
        }
        $sql="delete from ".$this->table." ".$this->opts['where'];
        $this->db->query($sql);
        return $this->db->affected_rows;
    }

    function insert($params=""){
        if(!empty($params)){
            $arr=explode(",",$params);
            $keys="";
            $val="";
            foreach ($arr as $v){
                $arr1=explode("=",$v);
                $keys.=$arr1[0].",";
                $val.=$arr1[1].",";
            }

            $this->opts["field"]=substr($keys,0,-1);
            $this->opts["val"]=substr($val,0,-1);
        }

        $sql="insert into ".$this->table." (".$this->opts["field"].") values (".$this->opts["val"].")";
        $this->db->query($sql);

        return $this->db->affected_rows;
    }
}