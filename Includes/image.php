<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 2016-12-20
 * Time: 9:39 PM
 */


//include ("../public/css/fonts");

$img = imagecreatetruecolor(80,50);

$white = imagecolorallocate($img,255,255,255);
$black = imagecolorallocate($img,0,0,0);
$gray  = imagecolorallocate($img,150,150,150);
$red   = imagecolorallocate($img,255,0,0);
$pink  = imagecolorallocate($img,200,0,150);


function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

imagefill($img,0,0,$gray);
imagettftext($img,12,0,15,15,$white,"glyphicons-halflings-regular.ttf",'hello');