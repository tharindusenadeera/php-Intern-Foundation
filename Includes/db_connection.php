<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 2016-12-17
 * Time: 11:52 PM
 */


$db_host     = "localhost";
$db_username = "root";
$db_password = "";
$db_name     = "g_s_e";

$db_connect = mysqli_connect("$db_host","$db_username","$db_password","$db_name");

if (mysqli_connect_error()){
    die("Database connection failed:". mysqli_connect_error());
}