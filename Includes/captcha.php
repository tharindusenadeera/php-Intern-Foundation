<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 2017-01-03
 * Time: 11:57 AM
 */

session_start();


$img = imagecreatetruecolor(100,50);

$white = imagecolorallocate($img,255,255,255);
$bg  = imagecolorallocate($img,0,0,0);
$grey = imagecolorallocate($img,150,150,150);
$red = imagecolorallocate($img,255,0,0);
$pink = imagecolorallocate($img,200,0,150);

function randomString($length){

    $char = "23456789abcdefghjkmnpqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ";
    srand((double)microtime()*10000);
    $str = "";
    $i= 0;

    while ($i<=$length){
        $num = rand() % 33;
        $temp = substr($char,$num,1);
        $str = $str.$temp;
        $i++;
    }

    return $str;

}

 for ($i=0;$i<=rand(5,7);$i++){
    $color = (rand(1,2)==1) ? $pink:$white;
    imageline($img,rand(5,70),rand(5,20),rand(5,70)+5,rand(5,20)+5,$color);
 }
imagefill($img,150,130,$bg);
$string = randomString(rand(5,7));
$_SESSION['string']=$string;

imagettftext($img,11,0,10,20,$bg,"AlexBrush-Regular.ttf",$string);
imagestring($img,5,5,5,$string,$white);

header("cache-control:no-cache,must-revalidate");
header("content-type:image/png");
imagepng($img);
imagedestroy($img);