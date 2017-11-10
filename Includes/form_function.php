<?php


/**
 * Created by PhpStorm.
 * User: acer
 * Date: 2016-12-19
 * Time: 8:28 AM
 */

require_once("db_connection.php");




//global variables
$officer_id = "";
$city = "";
$medium = "";
$service = "";
$exam = "";
$nic = "";
$name = "";
$address = "";
$postal_city = "";
$subjects = "";
$gender = "";
//get Type
$type = "";


if (isset($_POST['submit'])) {

    if (isset($_POST['officer_type'])) {
        $officer_id = strip_tags(strtoupper($_POST['officer_type']));
    }

    if (isset($_POST['city_no'])) {
        $city = strip_tags(strtoupper($_POST['city_no']));
    }

    if (isset($_POST['medium'])) {
        $medium = strip_tags(strtoupper($_POST['medium']));
    }

    if (isset($_POST['svc_id'])) {
        $service = strip_tags(strtoupper($_POST['svc_id']));
    }

    if (isset($_POST['exam'])) {
        $exam = strip_tags(strtoupper($_POST['exam']));
    }

    if (isset($_POST['nic'])) {
        $nic = strip_tags(strtoupper($_POST['nic']));
    }

    if (isset($_POST['name'])) {
        $name = strip_tags(strtoupper($_POST['name']));
    }

    if (isset($_POST['address'])) {
        $address = strtoupper($_POST['address']);
    }

    if (isset($_POST['postal_city'])) {
        $postal_city = strip_tags(strtoupper($_POST['postal_city']));
    }

    if (isset($_POST['subject_id'])) {
        $subjects = strip_tags(strtoupper($_POST['subject_id']));
    }

    if (isset($_POST['radio'])) {
        $gender = $_POST['radio'];
    }
    if (isset($_POST['type'])) {
        $type = $_POST['type'];
    }

}


if ($type == 1) {
    $f_query = "INSERT INTO first_time(officer_type,exam_city,medium,service,eb,nic,name,address,postal_city,subject_id,gender) VALUES ('$officer_id','$city','$medium','$service','$exam','$nic','$name','$address','$postal_city','$subjects','$gender')";
    mysqli_query($db_connect, $f_query); //or die(mysqli_error($db_connect));
//if (!mysqli_query($db_connect, $f_query)) {
//die("Error :" . mysqli_error($db_connect));
//}

} elseif ($type == 2) {
    $f_query = "INSERT INTO second_over(officer_type,exam_city,medium,service,eb,nic,name,address,postal_city,subject_id,gender) VALUES ('$officer_id','$city','$medium','$service','$exam','$nic','$name','$address','$postal_city','$subjects','$gender')";
    mysqli_query($db_connect, $f_query); //or die(mysqli_error($db_connect));
//if (!mysqli_query($db_connect, $f_query)) {
//die("Error :" . mysqli_error($db_connect));
//}

}


mysqli_close($db_connect);
$Message = "Successfully Submitted!!!";
//header("Location:../public/index.php?Message={$Message}");
header("Location:../public/form.php?Message={$Message}");


