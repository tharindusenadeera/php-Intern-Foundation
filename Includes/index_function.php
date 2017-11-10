<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 2016-12-19
 * Time: 8:27 AM
 */


session_start();

require_once("db_connection.php");

//getting the receipt from user
$txtv="";
$nic = "";
if(isset($_POST['submit'])){
    if(isset($_POST['nic'])){
        $nic = $_POST['nic'];
    }
    if(isset($_POST['txtv'])){
        $txtv = $_POST['txtv'];
    }
}
//searching the nic
$s_query = "SELECT * FROM nic WHERE nic_no = '".$nic."'";
    $s_result = mysqli_query($db_connect,$s_query);

//--------------------------------------------------------------------------------------------------------------------

// searching the receipt
$query = "SELECT * FROM receipt WHERE r_no = '".$txtv."'";
    $result = mysqli_query($db_connect,$query);



//index function
if (isset($_POST['radio']) && $_POST['radio'] == 1) {

    if (isset($_POST['captcha']) && $_POST['captcha'] != "" && $_SESSION['string'] == $_POST['captcha']) {
        if(mysqli_num_rows($s_result)>0){
            header("Location: ../public/form.php?t=1");
        }

    } else {
        //alert('Invalid NIC , re-enter please!!!');
        header("Location: ../public/new.php");
    }
} elseif (isset($_POST['radio']) && $_POST['radio'] == 2) {
    if (isset($_POST['captcha']) && $_POST['captcha'] != "" && $_SESSION['string'] == $_POST['captcha']) {
        if(mysqli_num_rows($s_result)>0){
            if(mysqli_num_rows($result) > 0 ){
                header("Location: ../public/form.php?t=2");
        }

        }
       else{
           //alert('Invalid Receipt , re-enter please!!!');
            header("Location: ../public/new.php");
       }
    }

}
















