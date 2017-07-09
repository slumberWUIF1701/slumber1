<?php
/**
 * Created by PhpStorm.
 * User: Moonlight
 * Date: 2017/6/27
 * Time: 15:03
 */
class code{
    public $width=120;
    public $height=50;
    public $type="png";
    public $code="2345678abcdefhjkmnpABCDEFGHJKMN";
    public $codeLen=4;
    public $codeUrl="ARCENA.ttf";//字体
    public $current="";
    public $size=array("min"=>20,"max"=>30);
    public $angle=array("min"=>-15,"max"=>15);
    public $lineNum=4;
    public $pixNum=200;
    private $image;
    //1.创建画布
    function createCanvas(){
        $this->image=imagecreatetruecolor($this->width,$this->height);
        imagefill($this->image,0,0,$this->getColor());
    }
    //2.创建内容
    function createCon(){
        $this->getText();
        for($i=0;$i<$this->codeLen;$i++){
            $size=mt_rand($this->size["min"],$this->size["max"]);
            $angle=mt_rand($this->angle["min"],$this->angle["max"]);
            $x=$i*($this->width/$this->codeLen)+mt_rand(-10,10);
            if($i==0){
                $x=$x<0?0:$x;
            }
            $box=imagettfbbox($size,$angle,$this->codeUrl,$this->current[$i]);
            $height=$box[1]-$box[5];
            $y=$height+mt_rand(-10,20);
            $y=$y<$height?$height:$y;
            imagettftext($this->image,$size,$angle,$x,$y,$this->getColor("sa"),$this->codeUrl,$this->current[$i]);
        }
    }
    //随机取文字
    function getText(){
        $str="";
        for($i=0;$i<$this->codeLen;$i++){
            $num=mt_rand(0,strlen($this->code)-1);
            $str.=$this->code[$num];
        }
        $this->current=$str;
       return $str;
    }
    //画线
    function createLine(){
        for($i=0;$i<$this->lineNum;$i++){
            imageline($this->image,mt_rand(0,$this->width/2),mt_rand(0,$this->height),mt_rand($this->width/2,$this->width),mt_rand(0,$this->height),$this->getColor());
        }
    }
    //画点
    function createPix(){
        for($i=0;$i<$this->pixNum;$i++){
            imagesetpixel($this->image,mt_rand(0,$this->width),mt_rand(0,$this->height),$this->getColor());
        }
    }
    //取色
    function getColor($type="bgcolor"){
        $r=$type=="bgcolor"?mt_rand(0,120):mt_rand(125,255);
        $g=$type=="bgcolor"?mt_rand(0,120):mt_rand(125,255);
        $b=$type=="bgcolor"?mt_rand(0,120):mt_rand(125,255);
        return imagecolorallocate($this->image,$r,$g,$b);
    }
    //输出验证码
    function output(){
        header("content-type:image/".$this->type);
        //1.创建画布
        $this->createCanvas();
        //2.创建内容
        $this->createCon();
        //3.创建干扰线
        $this->createLine();
        //4.创建干扰点
        $this->createPix();
        $type="image".$this->type;
        $type($this->image);
        $this->current=strtolower($this->current);
        imagedestroy($this->image);
    }
}
