<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 2017-02-13
 * Time: 8:24 PM
 */

require_once ('../Includes/db_connection.php');
echo "<head><link rel='stylesheet' type='text/css' href='../public/css/css/admin_view.css'></head>";


//global variables
global $db_connect;

$s_date = "";
$e_date = "";
$officer_type = "";
$service = "";
$option = "";
$status = "";

if (isset($_POST['submit'])) {

    if (isset($_POST['s_date'])) {
        $s_date = $_POST['s_date'];
    }

    if (isset($_POST['e_date'])) {
        $e_date = $_POST['e_date'];
    }

    if (isset($_POST['officer_type'])) {
        $officer_type = $_POST['officer_type'];
    }

    if (isset($_POST['service'])) {
        $service = $_POST['service'];
    }

    if (isset($_POST['option'])) {
        $option = $_POST['option'];
    }

    if (isset($_POST['status'])) {
        $status = $_POST['status'];
    }

}
//first/second time detail-All
function allOfficerType($db_connect,$s_date,$e_date,$x,$y){
    $a_query = "SELECT * FROM $x WHERE s_time BETWEEN '$s_date' AND '$e_date' AND service LIKE $y";
    $result = mysqli_query($db_connect,$a_query) or die("MySQL error: " . mysqli_error($db_connect) . "<hr>\nQuery: $a_query");

    if (!$result) {
        printf("Error: %s\n", mysqli_error($db_connect));
        exit();
    }

    echo "<table>";

    echo "<tr>";
    echo "<th scope='col'> Officer Type </th>";
    echo "<th scope='col'> Exam City </th>";
    echo "<th scope='col'> Medium </th>";
    echo "<th scope='col'> Service </th>";
    echo "<th scope='col'> EB  </th>";
    echo "<th scope='col'> NIC </th>";
    echo "<th scope='col'> Name </th>";
    echo "<th scope='col'> Address </th>";
    echo "<th scope='col'> Postal City </th>";
    echo "<th scope='col'> Subject ID</th>";
    echo "<th scope='col'> Gender </th>";
    echo "<th scope='col'> Date/Time</th>";
    echo "</tr>";

    echo "<tr>";
    while ($row = mysqli_fetch_array($result)) {
        echo "<td>" . $row['officer_type']. "</td>";
        echo "<td>" . $row['exam_city']. "</td>";
        echo "<td>" . $row['medium']. "</td>";
        echo "<td>" . $row['service']. "</td>";
        echo "<td>" . $row['eb']. "</td>";
        echo "<td>" . $row['nic']. "</td>";
        echo "<td>" . $row['name']. "</td>";
        echo "<td>" . $row['address']. "</td>";
        echo "<td>" . $row['postal_city']. "</td>";
        echo "<td>" . $row['subject_id']. "</td>";
        echo "<td>" . $row['gender']. "</td>";
        echo "<td>" . $row['s_time']. "</td>";
        echo "</tr>";
    }

    echo "</table>";

    mysqli_close($db_connect);

}

function allServices($db_connect,$s_date,$e_date,$x,$y){
    $a_query = "SELECT * FROM $x WHERE s_time BETWEEN '$s_date' AND '$e_date' AND officer_type LIKE $y";
    $result = mysqli_query($db_connect,$a_query) or die("MySQL error: " . mysqli_error($db_connect) . "<hr>\nQuery: $a_query");

    if (!$result) {
        printf("Error: %s\n", mysqli_error($db_connect));
        exit();
    }

    echo "<table>";

    echo "<tr>";
    echo "<th scope='col'> Officer Type </th>";
    echo "<th scope='col'> Exam City </th>";
    echo "<th scope='col'> Medium </th>";
    echo "<th scope='col'> Service </th>";
    echo "<th scope='col'> EB  </th>";
    echo "<th scope='col'> NIC </th>";
    echo "<th scope='col'> Name </th>";
    echo "<th scope='col'> Address </th>";
    echo "<th scope='col'> Postal City </th>";
    echo "<th scope='col'> Subject ID</th>";
    echo "<th scope='col'> Gender </th>";
    echo "<th scope='col'> Date/Time</th>";
    echo "</tr>";

    echo "<tr>";
    while ($row = mysqli_fetch_array($result)) {
        echo "<td>" . $row['officer_type']. "</td>";
        echo "<td>" . $row['exam_city']. "</td>";
        echo "<td>" . $row['medium']. "</td>";
        echo "<td>" . $row['service']. "</td>";
        echo "<td>" . $row['eb']. "</td>";
        echo "<td>" . $row['nic']. "</td>";
        echo "<td>" . $row['name']. "</td>";
        echo "<td>" . $row['address']. "</td>";
        echo "<td>" . $row['postal_city']. "</td>";
        echo "<td>" . $row['subject_id']. "</td>";
        echo "<td>" . $row['gender']. "</td>";
        echo "<td>" . $row['s_time']. "</td>";
        echo "</tr>";
    }

    echo "</table>";

    mysqli_close($db_connect);


}
//----------------------------------------------------------------------------------------------------------------
//first time/Second_over details-Provincial--------------------------------------------------------------------------------------
function firstSecondProDetail($db_connect,$s_date,$e_date,$x,$y,$z)
{

    $c_query = "SELECT * FROM $z WHERE s_time BETWEEN '$s_date' AND '$e_date' AND service LIKE $x AND officer_type LIKE $y";
    $result = mysqli_query($db_connect,$c_query);// or die("MySQL error: " . mysqli_error($db_connect) . "<hr>\nQuery: $c_query");

    if (!$result) {
    printf("Error: %s\n", mysqli_error($db_connect));
    exit();
    }


    echo "<table>";

    echo "<tr>";
    echo "<th scope='col'> Officer Type </th>";
    echo "<th scope='col'> Exam City </th>";
    echo "<th scope='col'> Medium </th>";
    echo "<th scope='col'> Service </th>";
    echo "<th scope='col'> EB  </th>";
    echo "<th scope='col'> NIC </th>";
    echo "<th scope='col'> Name </th>";
    echo "<th scope='col'> Address </th>";
    echo "<th scope='col'> Postal City </th>";
    echo "<th scope='col'> Subject ID</th>";
    echo "<th scope='col'> Gender </th>";
    echo "<th scope='col'> Date/Time</th>";
    echo "</tr>";

    echo "<tr>";
    while ($row = mysqli_fetch_array($result)) {

        echo "<td>" . $row['officer_type']. "</td>";
        echo "<td>" . $row['exam_city']. "</td>";
        echo "<td>" . $row['medium']. "</td>";
        echo "<td>" . $row['service']. "</td>";
        echo "<td>" . $row['eb']. "</td>";
        echo "<td>" . $row['nic']. "</td>";
        echo "<td>" . $row['name']. "</td>";
        echo "<td>" . $row['address']. "</td>";
        echo "<td>" . $row['postal_city']. "</td>";
        echo "<td>" . $row['subject_id']. "</td>";
        echo "<td>" . $row['gender']. "</td>";
        echo "<td>" . $row['s_time']. "</td>";
        echo "</tr>";
    }

    echo "</table>";

    mysqli_close($db_connect);

}


//first time/Second_over summary-Provincial---------------------------------------------------------------------------------------
function firstSecondProSummary($db_connect,$s_date,$e_date,$x,$y,$z){

    $s_query = "SELECT DISTINCT eb, COUNT(eb_id) AS ID FROM $z WHERE s_time BETWEEN '$s_date' AND '$e_date' AND service LIKE $x AND officer_type LIKE $y GROUP BY eb_id ";
    $s_result = mysqli_query($db_connect,$s_query) or die('Cannot show the table');
    if (!$s_result) {
        printf("Error: %s\n", mysqli_error($db_connect));
        exit();
    }

    echo "<table>";
    echo "<tr>";
    echo "<th> Eb</th>";
    echo "<th> Amount Applied</th>";
    echo "</tr>";

    echo "<tr>";
    while ($row = mysqli_fetch_array($s_result)){
        echo "<td>" . $row['eb'] . "</td>";
        echo "<td>" . $row['ID'] . "</td>";
    }
    echo "</tr>";
    echo "</table>";
    mysqli_close($db_connect);
}


//-----------------------------------------------------------------------------------------------------------------
//first time All Services Details---------------------------------------------------------------------------------
//Central Government----------------------------------------------------------------------------------------------
if($service==0 && $officer_type==1 && $status==2 && $option=='first_time'){
    allServices($db_connect,$s_date,$e_date,'first_time',1);
}
if($service==0 && $officer_type==1 && $status==2 && $option=='second_over'){
    allServices($db_connect,$s_date,$e_date,'second_over',1);
}
//Western Province------------------------------------------------------------------------------------------------
if ($service==0 && $officer_type==2 && $status==2 && $option=='first_time'){
    allServices($db_connect,$s_date,$e_date,'first_time',2);
}
if($service==0 && $officer_type==2 && $status==2 && $option=='second_over'){
    allServices($db_connect,$s_date,$e_date,'second_over',2);
}
//Central Province------------------------------------------------------------------------------------------------
if($service==0 && $officer_type==3 && $status==2 && $option=='first_time'){
    allServices($db_connect,$s_date,$e_date,'first_time',3);
}
if($service==0 && $officer_type==3 && $status==2 && $option=='second_over'){
    allServices($db_connect,$s_date,$e_date,'second_over',3);
}
//Uva Province----------------------------------------------------------------------------------------------------
if($service==0 && $officer_type==4 && $status==2 && $option=='first_time') {
    allServices($db_connect, $s_date, $e_date, 'first_time', 4);
}
if($service==0 && $officer_type==4 && $status==2 && $option=='second_over'){
    allServices($db_connect,$s_date,$e_date,'second_over',4);
}
//second time All Details------------------------------------------------------------------------------------------

//-------------------------------------PUBLIC MANAGEMENT ASSISTANT SERVICE-------------------------------------------
//All-first-------------------------------------------------------------------------------------------------------------
if($service==1 && $officer_type==0 && $status==2 && $option=='first_time'){
    allOfficerType($db_connect,$s_date,$e_date,'first_time',1);
}
//All-second------------------------------------------------------------------------------------------------------
if($service==1 && $officer_type==0 && $status==2 && $option=='second_over'){
    allOfficerType($db_connect,$s_date,$e_date,'second_over',1);
}

//-----------------------------------------------Central Government-----------------------------------------------
//first time Central Government Public Management Assistant Summary
if($service==1 && $officer_type==1 && $status==1 && $option=='first_time'){

    echo "<caption><u>Public Management Assistant Service Central Government First Time Summary</u></caption>";
    echo "<br><br>";
    firstSecondProSummary($db_connect,$s_date,$e_date,1,1,'first_time');
}

//second time Central Government Public Management Assistant Summary
if($service==1 && $officer_type==1 && $status==1 && $option=='second_over'){

    echo "<caption><u>Public Management Assistant Service Central Government Second Time Summary</u></caption>";
    echo "<br><br>";
    firstSecondProSummary($db_connect,$s_date,$e_date,1,1,'second_over');
}

//first time Central Government Public Management Assistant Details
if($service==1 && $officer_type==1 && $status==2 && $option=='first_time'){

    echo "<caption><u> Public Management Assistant Service Central Government First Time Details</u></caption>";
    echo "<br><br>";
    firstSecondProDetail($db_connect,$s_date,$e_date,1,1,'first_time');
}

//second time Central Government Public Management Assistant Details
if($service==1 && $officer_type==1 && $status==2 && $option=='second_over'){

    echo "<caption><u> Public Management Assistant Service Central Government Second Time Detail</u></caption>";
    echo "<br><br>";
    firstSecondProDetail($db_connect,$s_date,$e_date,1,1,'second_over');
}
//-----------------------------------------------------Western Province-----------------------------------------------
//first time Western Province Public Management Assistant Summary
if($service==1 && $officer_type==2 && $status==1 && $option=='first_time'){

    echo "<caption> Public Management Assistant Service Western Province First Time Summary</caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,1,2,'first_time');
}
//Second time Western Province Public Management Assistant Summary
if($service==1 && $officer_type==2 && $status==1 && $option=='second_over'){

    echo "<caption> Public Management Assistant Service Western Province Second Time Summary</caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,1,2,'second_over');
}
//first time Western Province Public Management Assistant Detail
if($service==1 && $officer_type==2 && $status==2 && $option=='first_time'){

    echo "<caption> Public Management Assistant Service Western Province First Time Details</caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,1,2,'first_time');
}
//second time Western Province Public Management Assistant Detail
if($service==1 && $officer_type==2 && $status==2 && $option=='second_over'){

    echo "<caption> Public Management Assistant Service Western Province Second Time Details</caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,1,2,'second_over');
}

//------------------------------------------------------Central Province----------------------------------------------
//first time Central Province Public Management Assistant Summary
if($service==1 && $officer_type==3 && $status==1 && $option=='first_time'){

    echo "<caption> Public Management Assistant Service Central Province First Time Summary</caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,1,3,'first_time');
}
//second time Central Province Public Management Assistant Summary
if($service==1 && $officer_type==3 && $status==1 && $option=='second_over'){

    echo "<caption> Public Management Assistant Service Central Province Second Time Summary</caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,1,3,'second_over');
}
//first time Central Province Public Management Assistant Detail
if($service==1 && $officer_type==3 && $status==2 && $option=='first_time'){

    echo "<caption> Public Management Assistant Service Central Province First Time Details</caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,1,3,'first_time');
}
//Second time Central Province Public Management Assistant Detail
if($service==1 && $officer_type==3 && $status==2 && $option=='second_over'){

    echo "<caption> Public Management Assistant Service Central Province Second Time Details</caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,1,3,'second_over');
}
//------------------------------------------------------Uva Province--------------------------------------------------
//first time Uva Province Public Management Assistant Summary
if($service==1 && $officer_type==4 && $status==1 && $option=='first_time'){

    echo "<caption> Public Management Assistant Service Uva Province First Time Summary</caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,1,4,'first_time');
}
//second time Uva Provincial Public Management Assistant Summary
if($service==1 && $officer_type==4 && $status==1 && $option=='second_over'){

    echo "<caption> Public Management Assistant Service Uva Province Second Time Summary</caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,1,4,'second_over');
}
//first time Uva Province Public Management Assistant Detail
if($service==1 && $officer_type==4 && $status==2 && $option=='first_time'){

    echo "<caption> Public Management Assistant Service Uva Province First Time Details</caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,1,4,'first_time');
}
//second time Uva Province Public Management Assistant Detail
if($service==1 && $officer_type==4 && $status==2 && $option=='second_over'){

    echo "<caption> Public Mangement Assistant Service Uva Province Second Time Details</caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,1,4,'second_over');
}
//-----------------------------------------------------Sabaragamuwa Province------------------------------------------
//first time Sabaragamuwa Province Public Management Assistant Summary
if($service==1 && $officer_type==5 && $status==1 && $option=='first_time'){

    echo "<caption> Public Management Assistant Service Sabaragamuwa Province First Time Summary</caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,1,5,'first-time');
}
//second time Sabaragamuwa Province Public Management Assistant Summary
if($service==1 && $officer_type==5 && $status==1 && $option=='second_over'){

    echo "<caption> Public Management Assistant Service Sabaragamuwa Province Second Time Summary</caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,1,5,'second_over');
}
//first time Sabaragamuwa province Public Management Assistant Detail
if($service==1 && $officer_type==5 && $status==2 && $option=='first_time'){

    echo "<caption> Public Management Assistant Service Sabaragamuwa Province First Time Details</caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,1,5,'first_time');
}
//second time Sabaragamuwa province Public Management Assistant Detail
if($service==1 && $officer_type==5 && $status==2 && $option=='second_over'){

    echo "<caption> Public Management Assistant Service Sabaragamuwa Province Second Time Details</caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,1,5,'second_over');
}
//------------------------------------------------------North Central Province----------------------------------------
//first time North Central Province Public Management Assistant Summary
if($service==1 && $officer_type==6 && $status==1 && $option=='first_time'){

    echo "<caption> Public Management Assistant Service North Central Province First Time Summary</caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,1,6,'first_time');
}
//second time North Central Province Public Management Assistant Summary
if($service==1 && $officer_type==6 && $status==1 && $option=='second_over'){

    echo "<caption> Public Management Assistant Service North Central Province Second Time Summary</caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,1,6,'second_over');
}
//first time North Central Province Public management Assistant Detail
if($service==1 && $officer_type==6 && $status==2 && $option=='first_time'){

    echo "<caption> Public Management Assistant Service North Central Province First Time Details</caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,1,6,'first_time');
}
//second time North Central Province Public Management Assistant Detail
if($service==1 && $officer_type==6 && $status==2 && $option=='second_over'){

    echo "<caption> Public Management Assistant Service North Central Province Second Time Details</caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,1,6,'second_over');
}
//-------------------------------------------------------North Province-----------------------------------------------
//first time North Province Public Management Assistant Summary
if($service==1 && $officer_type==7 && $status==1 && $option=='first_time'){

    echo "<caption> Public Management Assistant Service North Province First Time Summary</caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,1,7,'first_time');
}
//second time North Province Public Management Assistant Summary
if($service==1 && $officer_type==7 && $status==1 && $option=='second_over'){

    echo "<caption> Public Management Assistant Service North Province Second Time Summary</caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,1,7,'second_over');
}
//first time North Province Public Management Assistant Detail
if($service==1 && $officer_type==7 && $status==2 && $option=='first_time'){

    echo "<caption> Public Management Assistant Service North Province First Time Details</caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,1,7,'first_time');
}
//second time North Province Public Management Assistant Detail
if($service==1 && $officer_type==7 && $status==2 && $option=='second_over'){

    echo "<caption> Public Management Assistant Service North Province Second Time Details</caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,1,7,'second_over');
}
//--------------------------------------------------------Wayamba Province--------------------------------------------
//first time Wayamba Province Public Management Assistant Summary
if($service==1 && $officer_type==8 && $status==1 && $option=='first_time'){

    echo "<caption> Public Management Assistant Service Wayamaba Province First Time Summary</caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,1,8,'first_time');
}
//second time Wayamba Province Public Management Assistant Summary
if($service==1 && $officer_type==8 && $status==1 && $option=='second_over'){

    echo "<caption> Public Management Assistant Service Wayamba Province Second Time Summary</caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,1,8,'second_over');
}
//first time Wayamba Province Public Management Assistant Detail
if($service==1 && $officer_type==8 && $status==2 && $option=='first_time'){

    echo "<caption> Public Management Assistant Service Wayamaba Province First Time Details</caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,1,8,'first_time');
}
//second time Wayamba Province Public Management Assistant Detail
if($service==1 && $officer_type==8 && $status==2 && $option=='second_over'){

    echo "<caption> Public Management Assistant Service Wayamba Province Second Time Details</caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,1,8,'second_over');
}
//---------------------------------------------------------Southern Province------------------------------------------
//first time Southern Province Public Management Assistant Summary
if($service==1 && $officer_type==9 && $status==1 && $option=='first_time'){

    echo "<caption> Public Management Assistant Service Southern Province First Time Summary</caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,1,9,'first_time');
}
//second time Southern Province Public Management Assistant Summary
if($service==1 && $officer_type==9 && $status==1 && $option=='second_over'){

    echo "<caption> Public Management Assistant Service Southern Province Second Time Summary</caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,1,9,'second_over');
}
//first time Southern Province Public Management Assistant Detail
if($service==1 && $officer_type==9 && $status==2 && $option=='first_time'){

    echo "<caption> Public Management Assistant Service Southern Province First Time Details</caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,1,9,'first_time');
}
//second time Southern Province Public Management Assistant Detail
if($service==1 && $officer_type==9 && $status==2 && $option=='second_over'){

    echo "<caption> Public Management Assistant Service Southern Province Second Time Details</caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,1,9,'second_over');
}
//----------------------------------------------------------North Eastern Province------------------------------------
//first time North Eastern Province Public Management Assistant Summary
if($service==1 && $officer_type==10 && $status==1 && $option=='first_time'){

    echo "<caption> Public Management Assistant Service North Eastern Province First Time Summary</caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,1,10,'first_time');
}
//second time North Eastern Province Public Management Assistant Summary
if($service==1 && $officer_type==10 && $status==1 && $option=='second_over'){

    echo "<caption> Public Management Assistant Service North Eastern Province Second Time Summary</caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,1,10,'second_over');
}

//first time North Eastern Province Public Management Assistant Detail
if($service==1 && $officer_type==10 && $status==2 && $option=='first_time'){

    echo "<caption> Public Management Assistant Service North Eastern Province First Time Details</caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,1,10,'first_time');
}
//second time North Eastern Province Public Management Assistant Detail
if($service==1 && $officer_type==10 && $status==2 && $option=='second_over'){

    echo "<caption> Public Management Assistant Service North Eastern Province Second Time Details</caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,1,10,'second_over');
}
//--------------------------------------------------------------------------------------------------------------------

//--------------------------------------DEVELOPMENT OFFICER SERVICE-----------------------------------------------
//All-first-------------------------------------------------------------------------------------------------------
if($service==2 && $officer_type==0 && $status==2 && $option=='first_time'){
    allOfficerType($db_connect,$s_date,$e_date,'first_time',2);
}
//All-second------------------------------------------------------------------------------------------------------
if($service==2 && $officer_type==0 && $status==2 && $option=='second_over'){
    allOfficerType($db_connect,$s_date,$e_date,'second_over',2);
}
//--------------------------------------Central Government------------------------------------------------------------
//first time Central Government Development Officer Service Summary
if($service==2 && $officer_type==1 && $status==1 && $option=='first_time'){

    echo "<caption> Development Officer Service Central Government First Time Summary</caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,2,1,'first_time');
}
//second time Central Government Development Officer Service Summary
if($service==2 && $officer_type==1 && $status==1 && $option=='second_over'){

    echo "<caption> Development Officer Service Central Government Second Time Summary</caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,2,1,'second_over');
}

//first time Central Government Development Officer Service Details
if($service==2 && $officer_type==1 && $status==2 && $option=='first_time'){

    echo "<caption> Development Officer Service Central Government First Time Details</caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,2,1,'first_time');
}

//second time Central Government Development Officer Service Details
if($service==2 && $officer_type==1 && $status==2 && $option=='second_over'){

    echo "<caption> Development Officer Service Central Government Second Time Details</caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,2,1,'second_over');
}
//-----------------------------------------Western Province-----------------------------------------------------------
//first time Western Province Development Officer Service Summary
if($service==2 && $officer_type==2 && $status==1 && $option=='first_time'){

    echo "<caption> Development Officer Service Western Province First Time Summary</caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,2,2,'first_time');
}
//second time Western Province Development Officer Service Summary
if($service==2 && $officer_type==2 && $status==1 && $option=='second_over'){

    echo "<caption> Development Officer Service Western Province Second Time Summary</caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,2,2,'second_over');
}

//first time Western Province Development Officer Service Details
if($service==2 && $officer_type==2 && $status==2 && $option=='first_time'){

    echo "<caption> Development Officer Service Western Province First Time Details</caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,2,2,'first_time');
}

//second time Western Province Development Officer Service Details
if($service==2 && $officer_type==2 && $status==2 && $option=='second_over'){

    echo "<caption> Development Officer Service Western Province Second Time Details</caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,2,2,'second_over');
}
//-----------------------------------------Central Province-----------------------------------------------------------
//first time Central Province Development Officer Service Summary
if($service==2 && $officer_type==3 && $status==1 && $option=='first_time'){

    echo "<caption> Development Officer Service Western Province First Time Summary</caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,2,3,'first_time');
}
//second time Central Province Development Officer Service Summary
if($service==2 && $officer_type==3 && $status==1 && $option=='second_over'){

    echo "<caption> </caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,2,3,'second_over');
}

//first time Central Province Development Officer Service Details
if($service==2 && $officer_type==3 && $status==2 && $option=='first_time'){

    echo "<caption> </caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,2,3,'first_time');
}

//second time Central Province Development Officer Service Details
if($service==2 && $officer_type==3 && $status==2 && $option=='second_over'){

    echo "<caption> </caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,2,3,'second_over');
}
//-----------------------------------------Uva Province---------------------------------------------------------------
//first time Uva Province Development Officer Service Summary
if($service==2 && $officer_type==4 && $status==1 && $option=='first_time'){

    echo "<caption> </caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,2,4,'first_time');
}
//second time Uva Province Development Officer Service Summary
if($service==2 && $officer_type==4 && $status==1 && $option=='second_over'){

    echo "<caption> </caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,2,4,'second_over');
}

//first time Uva Province Development Officer Service Details
if($service==2 && $officer_type==4 && $status==2 && $option=='first_time'){

    echo "<caption> </caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,2,4,'first_time');
}

//second time Uva Province Development Officer Service Details
if($service==2 && $officer_type==4 && $status==2 && $option=='second_over'){

    echo "<caption> </caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,2,4,'second_over');
}
//-----------------------------------------Sabaragamuwa Province------------------------------------------------------
//first time Sabaragamuwa Province Development Officer Service Summary
if($service==2 && $officer_type==5 && $status==1 && $option=='first_time'){

    echo "<caption> </caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,2,5,'first_time');
}
//second time Sabaragamuwa Province Development Officer Service Summary
if($service==2 && $officer_type==5 && $status==1 && $option=='second_over'){

    echo "<caption> </caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,2,5,'second_over');
}

//first time Sabaragamuwa Province Development Officer Service Details
if($service==2 && $officer_type==5 && $status==2 && $option=='first_time'){

    echo "<caption> </caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,2,5,'first_time');
}

//second time Sabaragamuwa Province Development Officer Service Details
if($service==2 && $officer_type==5 && $status==2 && $option=='second_over'){

    echo "<caption> </caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,2,5,'second_over');
}
//-----------------------------------------North central Province-----------------------------------------------------
//first time North Central Province Development Officer Service Summary
if($service==2 && $officer_type==6 && $status==1 && $option=='first_time'){

    echo "<caption> </caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,2,6,'first_time');
}
//second time North Central Province Development Officer Service Summary
if($service==2 && $officer_type==6 && $status==1 && $option=='second_over'){

    echo "<caption> </caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,2,6,'second_over');
}

//first time North Central Province Development Officer Service Details
if($service==2 && $officer_type==6 && $status==2 && $option=='first_time'){

    echo "<caption> </caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,2,6,'first_time');
}

//second time North Central Province Development Officer Service Details
if($service==2 && $officer_type==6 && $status==2 && $option=='second_over'){

    echo "<caption> </caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,2,6,'second_over');
}
//-----------------------------------------North Province-------------------------------------------------------------
//first time North Province Development Officer Service Summary
if($service==2 && $officer_type==7 && $status==1 && $option=='first_time'){

    echo "<caption> </caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,2,7,'first_time');
}
//second time North Province Development Officer Service Summary
if($service==2 && $officer_type==7 && $status==1 && $option=='second_over'){

    echo "<caption> </caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,2,7,'second_over');
}

//first time North Province Development Officer Service Details
if($service==2 && $officer_type==7 && $status==2 && $option=='first_time'){

    echo "<caption> </caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,2,7,'first_time');
}

//second time North Province Development Officer Service Details
if($service==2 && $officer_type==7 && $status==2 && $option=='second_over'){

    echo "<caption> </caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,2,7,'second_over');
}
//-----------------------------------------Wayamba Province-----------------------------------------------------------
//first time Wayamba Province Development Officer Service Summary
if($service==2 && $officer_type==8 && $status==1 && $option=='first_time'){

    echo "<caption> </caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,2,8,'first_time');
}
//second time Wayamba Province Development Officer Service  Summary
if($service==2 && $officer_type==8 && $status==1 && $option=='second_over'){

    echo "<caption> </caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,2,8,'second_over');
}

//first time Wayamba Province Development Officer Service  Details
if($service==2 && $officer_type==8 && $status==2 && $option=='first_time'){

    echo "<caption> </caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,2,8,'first_time');
}

//second time Wayamba Province Development Officer Service  Details
if($service==2 && $officer_type==8 && $status==2 && $option=='second_over'){

    echo "<caption> </caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,2,8,'second_over');
}
//-----------------------------------------Southern Province----------------------------------------------------------
//first time Southern Province Development Officer Service Summary
if($service==2 && $officer_type==9 && $status==1 && $option=='first_time'){

    echo "<caption> </caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,2,9,'first_time');
}
//second time Southern Province Development Officer Service Summary
if($service==2 && $officer_type==9 && $status==1 && $option=='second_over'){

    echo "<caption> </caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,2,9,'second_over');
}

//first time Southern Province Development Officer Service Details
if($service==2 && $officer_type==9 && $status==2 && $option=='first_time'){

    echo "<caption> </caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,2,9,'first_time');
}

//second time Southern Province Development Officer Service Details
if($service==2 && $officer_type==9 && $status==2 && $option=='second_over'){

    echo "<caption> </caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,2,9,'second_over');
}
//-----------------------------------------North Eastern Province-----------------------------------------------------
//first time North Eastern Province Development Officer Service Summary
if($service==2 && $officer_type==10 && $status==1 && $option=='first_time'){

    echo "<caption> </caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,2,10,'first_time');
}
//second time North Eastern Province Development Officer Service Summary
if($service==2 && $officer_type==10 && $status==1 && $option=='second_over'){

    echo "<caption> </caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,2,10,'second_over');
}

//first time North Eastern Province Development Officer Service Details
if($service==2 && $officer_type==10 && $status==2 && $option=='first_time'){

    echo "<caption> </caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,2,10,'first_time');
}

//second time North Eastern Province Development Officer Service Details
if($service==2 && $officer_type==10 && $status==2 && $option=='second_over'){

    echo "<caption> </caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,2,10,'second_over');
}
//--------------------------------------------------------------------------------------------------------------------

//---------------------------------------GOVERNMENT TRANSLATOR SERVICE--------------------------------------------
//All-first-------------------------------------------------------------------------------------------------------
if($service==3 && $officer_type==0 && $status==2 && $option=='first_time'){
    allOfficerType($db_connect,$s_date,$e_date,'first_time',3);
}
//All-second------------------------------------------------------------------------------------------------------
if($service==3 && $officer_type==0 && $status==2 && $option=='second_over'){
    allOfficerType($db_connect,$s_date,$e_date,'second_over',3);
}
//---------------------------------------Central Government-----------------------------------------------------------
//first time Central Government Government Translator Service Summary
if($service==3 && $officer_type==1 && $status==1 && $option=='first_time'){

    echo "<caption> </caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,3,1,'first_time');
}
//second time Central Government Government Translator Service Summary
if($service==3 && $officer_type==1 && $status==1 && $option=='second_over'){

    echo "<caption> </caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,3,1,'second_over');
}

//first time Central Government Government Translator Service Details
if($service==3 && $officer_type==1 && $status==2 && $option=='first_time'){

    echo "<caption> </caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,3,1,'first_time');
}

//second time Central Government Government Translator Service Details
if($service==3 && $officer_type==1 && $status==2 && $option=='second_over'){

    echo "<caption> </caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,3,1,'second_over');
}
//---------------------------------------Western Province-------------------------------------------------------------
//first time Western Province Government Translator Service Summary
if($service==3 && $officer_type==2 && $status==1 && $option=='first_time'){

    echo "<caption> </caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,3,2,'first_time');
}
//second time Western Province Government Translator Service Summary
if($service==3 && $officer_type==2 && $status==1 && $option=='second_over'){

    echo "<caption> </caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,3,2,'second_over');
}

//first time Western Province Government Translator Service Details
if($service==3 && $officer_type==2 && $status==2 && $option=='first_time'){

    echo "<caption> </caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,3,2,'first_time');
}

//second time Western Province Government Translator Service Details
if($service==3 && $officer_type==2 && $status==2 && $option=='second_over'){

    echo "<caption> </caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,3,2,'second_over');
}
//---------------------------------------Central Province-------------------------------------------------------------
//first time Central Province Government Translator Service Summary
if($service==3 && $officer_type==3 && $status==1 && $option=='first_time'){

    echo "<caption> </caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,3,3,'first_time');
}
//second time Central Province Government Translator Service Summary
if($service==3 && $officer_type==3 && $status==1 && $option=='second_over'){

    echo "<caption> </caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,3,3,'second_over');
}

//first time Central Province Government Translator Service Details
if($service==3 && $officer_type==3 && $status==2 && $option=='first_time'){

    echo "<caption> </caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,3,3,'first_time');
}

//second time Central Province Government Translator Service Details
if($service==3 && $officer_type==3 && $status==2 && $option=='second_over'){

    echo "<caption> </caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,3,3,'second_over');
}
//---------------------------------------Uva Province-----------------------------------------------------------------
//first time Uva Province Government Translator Service Summary
if($service==3 && $officer_type==4 && $status==1 && $option=='first_time'){

    echo "<caption> </caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,3,4,'first_time');
}
//second time Uva Province Government Translator Service Summary
if($service==3 && $officer_type==4 && $status==1 && $option=='second_over'){

    echo "<caption> </caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,3,4,'second_over');
}

//first time Uva Province Government Translator Service Details
if($service==3 && $officer_type==4 && $status==2 && $option=='first_time'){

    echo "<caption> </caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,3,4,'first_time');
}

//second time Uva Province Government Translator Service Details
if($service==3 && $officer_type==4 && $status==2 && $option=='second_over'){

    echo "<caption> </caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,3,4,'second_over');
}
//---------------------------------------Sabaragamuwa Province--------------------------------------------------------
//first time Sabaragamuwa Province Government Translator Service Summary
if($service==3 && $officer_type==5 && $status==1 && $option=='first_time'){

    echo "<caption> </caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,3,5,'first_time');
}
//second time Sabaragamuwa Province Government Translator Service Summary
if($service==3 && $officer_type==5 && $status==1 && $option=='second_over'){

    echo "<caption> </caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,3,5,'second_over');
}

//first time Sabaragamuwa Province Government Translator Service Details
if($service==3 && $officer_type==5 && $status==2 && $option=='first_time'){

    echo "<caption> </caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,3,5,'first_time');
}

//second time Sabaragamuwa Province Government Translator Service Details
if($service==3 && $officer_type==5 && $status==2 && $option=='second_over'){

    echo "<caption> </caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,3,5,'second_over');
}
//---------------------------------------North Central Province-------------------------------------------------------
//first time North Central Province Government Translator Service Summary
if($service==3 && $officer_type==6 && $status==1 && $option=='first_time'){

    echo "<caption> </caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,3,6,'first_time');
}
//second time North Central Province Government Translator Service Summary
if($service==3 && $officer_type==6 && $status==1 && $option=='second_over'){

    echo "<caption> </caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,3,6,'second_over');
}

//first time North Central Province Government Translator Service Details
if($service==3 && $officer_type==6 && $status==2 && $option=='first_time'){

    echo "<caption> </caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,3,6,'first_time');
}

//second time North Central Province Government Translator Service Details
if($service==3 && $officer_type==6 && $status==2 && $option=='second_over'){

    echo "<caption> </caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,3,6,'second_over');
}
//---------------------------------------North Province---------------------------------------------------------------
//first time North Province Government Translator Service Summary
if($service==3 && $officer_type==7 && $status==1 && $option=='first_time'){

    echo "<caption> </caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,3,7,'first_time');
}
//second time North Province Government Translator Service Summary
if($service==3 && $officer_type==7 && $status==1 && $option=='second_over'){

    echo "<caption> </caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,3,7,'second_over');
}

//first time North Province Government Translator Service Details
if($service==3 && $officer_type==7 && $status==2 && $option=='first_time'){

    echo "<caption> </caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,3,7,'first_time');
}

//second time North Province Government Translator Service Details
if($service==3 && $officer_type==7 && $status==2 && $option=='second_over'){

    echo "<caption> </caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,3,7,'second_over');
}
//---------------------------------------Wayamba Province-------------------------------------------------------------
//first time Wayamba Province Government Translator Service Summary
if($service==3 && $officer_type==8 && $status==1 && $option=='first_time'){

    echo "<caption> </caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,3,8,'first_time');
}
//second time Wayamba Province Government Translator Service Summary
if($service==3 && $officer_type==8 && $status==1 && $option=='second_over'){

    echo "<caption> </caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,3,8,'second_over');
}

//first time Wayamba Province Government Translator Service Details
if($service==3 && $officer_type==8 && $status==2 && $option=='first_time'){

    echo "<caption> </caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,3,8,'first_time');
}

//second time Wayamba Province Government Translator Service Details
if($service==3 && $officer_type==8 && $status==2 && $option=='second_over'){

    echo "<caption> </caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,3,8,'second_over');
}
//---------------------------------------Southern Province------------------------------------------------------------
//first time Southern Province Government Translator Service Summary
if($service==3 && $officer_type==9 && $status==1 && $option=='first_time'){

    echo "<caption> </caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,3,9,'first_time');
}
//second time Southern Province Government Translator Service Summary
if($service==3 && $officer_type==9 && $status==1 && $option=='second_over'){

    echo "<caption> </caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,3,9,'second_over');
}

//first time Southern Province Government Translator Service Details
if($service==3 && $officer_type==9 && $status==2 && $option=='first_time'){

    echo "<caption> </caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,3,9,'first_time');
}

//second time Southern Province Government Translator Service Details
if($service==3 && $officer_type==9 && $status==2 && $option=='second_over'){

    echo "<caption> </caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,3,9,'second_over');
}
//---------------------------------------North Eastern Province-------------------------------------------------------
//first time North Eastern Province Government Translator Service Summary
if($service==3 && $officer_type==10 && $status==1 && $option=='first_time'){

    echo "<caption> </caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,3,10,'first_time');
}
//second time North Eastern Province Government Translator Service Summary
if($service==3 && $officer_type==10 && $status==1 && $option=='second_over'){

    echo "<caption> </caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,3,10,'second_over');
}

//first time North Eastern Province Government Translator Service Details
if($service==3 && $officer_type==10 && $status==2 && $option=='first_time'){

    echo "<caption> </caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,3,10,'first_time');
}

//second time North Eastern Province Government Translator Service Details
if($service==3 && $officer_type==10 && $status==2 && $option=='second_over'){

    echo "<caption> </caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,3,10,'second_over');
}
//--------------------------------------------------------------------------------------------------------------------

//-----------------------------------------SRI LANKA LIBRARIAN SERVICE--------------------------------------------
//All-first-------------------------------------------------------------------------------------------------------
if($service==4 && $officer_type==0 && $status==2 && $option=='first_time'){
    allOfficerType($db_connect,$s_date,$e_date,'first_time',4);
}
//All-second------------------------------------------------------------------------------------------------------
if($service==4 && $officer_type==0 && $status==2 && $option=='second_over'){
    allOfficerType($db_connect,$s_date,$e_date,'second_over',4);
}
//-----------------------------------------Central Government---------------------------------------------------------
//first time Central Government Sri Lanka Librarian Service Summary
if($service==4 && $officer_type==1 && $status==1 && $option=='first_time'){

    echo "<caption> </caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,4,1,'first_time');
}
//second time Central Government Sri Lanka Librarian Service Summary
if($service==4 && $officer_type==1 && $status==1 && $option=='second_over'){

    echo "<caption> </caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,4,1,'second_over');
}

//first time Central Government Sri Lanka Librarian Service Details
if($service==4 && $officer_type==1 && $status==2 && $option=='first_time'){

    echo "<caption> </caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,4,1,'first_time');
}

//second time Central Government Sri Lanka Librarian Service Details
if($service==4 && $officer_type==1 && $status==2 && $option=='second_over'){

    echo "<caption> </caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,4,1,'second_over');
}
//-----------------------------------------Western Province-----------------------------------------------------------
//first time Western Province Sri Lanka Librarian Service Summary
if($service==4 && $officer_type==2 && $status==1 && $option=='first_time'){

    echo "<caption> </caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,4,2,'first_time');
}
//second time Western Province Sri Lanka Librarian Service Summary
if($service==4 && $officer_type==2 && $status==1 && $option=='second_over'){

    echo "<caption> </caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,4,2,'second_over');
}

//first time Western Province Sri Lanka Librarian Service Details
if($service==4 && $officer_type==2 && $status==2 && $option=='first_time'){

    echo "<caption> </caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,4,2,'first_time');
}

//second time Western Province Sri Lanka Librarian Service Details
if($service==4 && $officer_type==2 && $status==2 && $option=='second_over'){

    echo "<caption> </caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,4,2,'second_over');
}
//-----------------------------------------Central Province-----------------------------------------------------------
//first time Central Province Sri Lanka Librarian Service Summary
if($service==4 && $officer_type==3 && $status==1 && $option=='first_time'){

    echo "<caption> </caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,4,3,'first_time');
}
//second time Central Province Sri Lanka Librarian Service Summary
if($service==4 && $officer_type==3 && $status==1 && $option=='second_over'){

    echo "<caption> </caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,4,3,'second_over');
}

//first time Central Province Sri Lanka Librarian Service Details
if($service==4 && $officer_type==3 && $status==2 && $option=='first_time'){

    echo "<caption> </caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,4,3,'first_time');
}

//second time Central Province Sri Lanka Librarian Service Details
if($service==4 && $officer_type==3 && $status==2 && $option=='second_over'){

    echo "<caption> </caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,4,3,'second_over');
}
//-----------------------------------------Uva Province---------------------------------------------------------------
//first time Uva Province Sri Lanka Librarian Service Summary
if($service==4 && $officer_type==4 && $status==1 && $option=='first_time'){

    echo "<caption> </caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,4,4,'first_time');
}
//second time Uva Province Sri Lanka Librarian Service Summary
if($service==4 && $officer_type==4 && $status==1 && $option=='second_over'){

    echo "<caption> </caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,4,4,'second_over');
}

//first time Uva Province Sri Lanka Librarian Service Details
if($service==4 && $officer_type==4 && $status==2 && $option=='first_time'){

    echo "<caption> </caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,4,4,'first_time');
}

//second time Uva Province Sri Lanka Librarian Service Details
if($service==4 && $officer_type==4 && $status==2 && $option=='second_over'){

    echo "<caption> </caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,5,4,'second_over');
}
//-----------------------------------------Sabaragamuwa Province------------------------------------------------------
//first time Sabaragamuwa Province Sri Lanka Librarian Service Summary
if($service==4 && $officer_type==5 && $status==1 && $option=='first_time'){

    echo "<caption> </caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,4,5,'first_time');
}
//second time Sabaragamuwa Province Sri Lanka Librarian Service Summary
if($service==4 && $officer_type==5 && $status==1 && $option=='second_over'){

    echo "<caption> </caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,4,5,'second_over');
}

//first time Sabaragamuwa Province Sri Lanka Librarian Service Details
if($service==4 && $officer_type==5 && $status==2 && $option=='first_time'){

    echo "<caption> </caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,4,5,'first_time');
}

//second time Sabaragamuwa Province Sri Lanka Librarian Service Details
if($service==4 && $officer_type==5 && $status==2 && $option=='second_over'){

    echo "<caption> </caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,4,5,'second_over');
}
//-----------------------------------------North Central Province-----------------------------------------------------
//first time North Central Province Sri Lanka Librarian Service Summary
if($service==4 && $officer_type==6 && $status==1 && $option=='first_time'){

    echo "<caption> </caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,4,6,'first_time');
}
//second time North Central Sri Lanka Librarian Service Summary
if($service==4 && $officer_type==6 && $status==1 && $option=='second_over'){

    echo "<caption> </caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,4,6,'second_over');
}

//first time North Central Sri Lanka Librarian Service Details
if($service==4 && $officer_type==6 && $status==2 && $option=='first_time'){

    echo "<caption> </caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,4,6,'first_time');
}

//second time North Central Province Sri Lanka Librarian Service Details
if($service==4 && $officer_type==6 && $status==2 && $option=='second_over'){

    echo "<caption> </caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,4,6,'second_over');
}
//-----------------------------------------North Province-------------------------------------------------------------
//first time North Province Sri Lanka Librarian Service Summary
if($service==4 && $officer_type==7 && $status==1 && $option=='first_time'){

    echo "<caption> </caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,4,7,'first_time');
}
//second time North Province Sri Lanka Librarian Service Summary
if($service==4 && $officer_type==7 && $status==1 && $option=='second_over'){

    echo "<caption> </caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,4,7,'second_over');
}

//first time North Province Sri Lanka Librarian Service Details
if($service==4 && $officer_type==7 && $status==2 && $option=='first_time'){

    echo "<caption> </caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,4,7,'first_time');
}

//second time North Province Sri Lanka Librarian Service Details
if($service==4 && $officer_type==7 && $status==2 && $option=='second_over'){

    echo "<caption> </caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,4,7,'second_over');
}
//-----------------------------------------Wayamba Province----------------------------------------------------------
//first time Wayamba Province Sri Lanka Librarian Service Summary
if($service==4 && $officer_type==8 && $status==1 && $option=='first_time'){

    echo "<caption> </caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,4,8,'first_time');
}
//second time Wayamba Province Sri Lanka Librarian Service Summary
if($service==4 && $officer_type==8 && $status==1 && $option=='second_over'){

    echo "<caption> </caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,4,8,'second_over');
}

//first time Wayamba Province Sri Lanka Librarian Service Details
if($service==4 && $officer_type==8 && $status==2 && $option=='first_time'){

    echo "<caption> </caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,4,8,'first_time');
}

//second time Wayamba Province Sri Lanka Librarian Service Details
if($service==4 && $officer_type==8 && $status==2 && $option=='second_over'){

    echo "<caption> </caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,4,8,'second_over');
}
//-----------------------------------------Southern Province---------------------------------------------------------
//first time Southern Province Sri Lanka Librarian Service Summary
if($service==4 && $officer_type==9 && $status==1 && $option=='first_time'){

    echo "<caption> </caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,4,9,'first_time');
}
//second time Southern Province Sri Lanka Librarian Service Summary
if($service==4 && $officer_type==9 && $status==1 && $option=='second_over'){

    echo "<caption> </caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,4,9,'second_over');
}

//first time Southern Province Sri Lanka Librarian Service Details
if($service==4 && $officer_type==9 && $status==2 && $option=='first_time'){

    echo "<caption> </caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,4,9,'first_time');
}

//second time Southern Province Sri Lanka Librarian Service Details
if($service==4 && $officer_type==9 && $status==2 && $option=='second_over'){

    echo "<caption> </caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,4,9,'second_over');
}
//-----------------------------------------North Eastern Province----------------------------------------------------
//first time North Eastern Province Sri Lanka Librarian Service Summary
if($service==4 && $officer_type==10 && $status==1 && $option=='first_time'){

    echo "<caption> </caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,4,10,'first_time');
}
//second time North Eastern Province Sri Lanka Librarian Service Summary
if($service==4 && $officer_type==10 && $status==1 && $option=='second_over'){

    echo "<caption> </caption>";
    firstSecondProSummary($db_connect,$s_date,$e_date,4,10,'second_over');
}

//first time North Eastern Province Sri Lanka Librarian Service Details
if($service==4 && $officer_type==10 && $status==2 && $option=='first_time'){

    echo "<caption> </caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,4,10,'first_time');
}

//second time North Eastern Province Sri Lanka Librarian Service Details
if($service==4 && $officer_type==10 && $status==2 && $option=='second_over'){

    echo "<caption> </caption>";
    firstSecondProDetail($db_connect,$s_date,$e_date,4,10,'second_over');
}
//----------------------------------------------------------------------------------------------------------------