<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 2017-02-13
 * Time: 8:24 PM
 */

require_once ("../Includes/db_connection.php");

?>

<html>

    <head>
        <link rel="stylesheet" href="../public/css/css/bootstrap.min.css">
        <link rel="stylesheet" href="../public/css/css/admin.css">
    </head>

<body>
<div class="row">
    <header>
        Application Results
    </header>
</div>
<br><br>

<div class="container">
    <form action="admin_view.php" method="post">
        <div class="row">
            <div class="col-md-4">
                Start Date: <input type="text" name="s_date" id="demo1" onclick="javascript:NewCal ('demo1','YYYYMMDD',true,12)" class="form-control">
            </div>
            <div class="col-md-4">
                End Date  : <input type="text" name="e_date" id="demo2" onclick="javascript:NewCal ('demo2','YYYYMMDD',true,12)" class="form-control">
            </div>

        </div>

        <div class="row">
            <div class="col-md-4">
                Officer Type: <select name="officer_type"  tabindex="2" class="form-control" required>
                    <option value="0"> All</option>
                    <option value="1"> Central Government</option>
                    <option value="2"> Western Province</option>
                    <option value="3"> Central Province</option>
                    <option value="4"> Uva Province</option>
                    <option value="5"> Sabaragamuwa Province</option>
                    <option value="6"> North Central Province</option>
                    <option value="7"> North Province</option>
                    <option value="8"> Wayamba Province</option>
                    <option value="9"> Southern Province</option>
                    <option value="10">North Eastern Province</option>
                </select></div>

            <div class="col-md-4">
                Services: <select name="service"  tabindex="2"  class="form-control" required>
                    <option value="0"> All</option>
                    <option value="1">Public Management Assistant</option>
                    <option value="2">Development Officer Service</option>
                    <option value="3">Government Translator Service</option>
                    <option value="4">Sri Lanka Librarian Service</option>

                </select>
            </div>
         </div>

        <div class="row">
            <div class="col-md-4">
                Status:<select name="status" class="form-control">
                    <option value="1">Summary</option>
                    <option value="2">Detail</option>
                </select>
            </div>


            <div class="col-md-4">
                Option:<select name="option"  tabindex="2" class="form-control" required>
                    <option value="1"> All</option>
                    <option value="first_time"> First Time</option>
                    <option value="second_over"> Second Or Over</option>
                </select>
            </div>
        </div>

        <br>
        <div class="row">
            <div class="col-md-2">
                <input type="submit" class="btn btn-default" name="submit" value="submit">
            </div>

        </div>

    </form>

</div>

<script type="text/javascript" src="../public/javascript/MOIssue.js"></script>
    </body>
</html>
