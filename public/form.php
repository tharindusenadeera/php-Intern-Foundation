<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 2016-12-17
 * Time: 11:54 PM
 */

session_start();
require_once("../Includes/db_connection.php");





?>

<html>
<head>

    <link rel="stylesheet" href="css/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/css/form_css.css">
    <script
        src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
    <script src="css/javascript/bootstrap.js/bootstrap.min.js"></script>
</head>

<body>


<div class="container">

    <!--form-->
    <form action="../Includes/form_function.php" method="post" name="form" class="form-group">
        <h2 align="center"><u>Government Services Examination</u></h2><br><br>

        <?php

        //get the user type (first time or more than first time)
        $type;
        if (isset($_GET['t'])) {
            $type = $_GET['t'];
        } else {
            header("Location: ../public/index.php");
        }

        if (isset($_GET['Message'])) {
            echo $_GET['Message'];
            echo "<br>";
        }
        ?>


        <!--<div class="container-fluid">-->
        <table>
            <tr>
                <!--officer type-->
                <td class="col-lg-3">

                    <div>
                        <label for="officer_type">Officer type</label>
                    </div>
                    <br>
                </td>


                <td class="">
                    <div>
                        <label>
                            <span id="o_type">
                                <select name="officer_type" id="o_type" tabindex="2" class="form-control" required>
                                    <option value="01"> Central Government</option>
                                    <option value="02"> Western Province</option>
                                    <option value="03"> Central Province</option>
                                    <option value="04"> Uva Province</option>
                                    <option value="05"> Sabaragamuwa Province</option>
                                    <option value="06"> North Central Province</option>
                                    <option value="07"> North Province</option>
                                    <option value="08"> Wayamba Province</option>
                                    <option value="09"> Southern Province</option>
                                    <option value="10">North Eastern Province</option>
                                </select>
                        </label>
                    </div>
                    <br>
                </td>
            </tr>


            <tr>
                <td>       <!--city no-->
                    <div class="col-lg-3">
                        <label for="city_no">City </label>
                    </div>
                    <br>
                </td>

                <td>
                    <div class="">
                        <label>
                            <?php
                            $c_query = "select * from exam_city";
                            $c_result = mysqli_query($db_connect, $c_query);

                            echo "<select name='city_no' class='form-control' required>";
                            while ($c_row = mysqli_fetch_array($c_result)) {
                                echo "<option value='" . $c_row['city_no'] . "'>" . $c_row['city'] . "</option>";
                            }
                            echo "</select>";
                            ?>
                        </label>
                    </div>
                    <br>
                </td>
            </tr>


            <tr>
                <td>
                    <!--Medium field-->
                    <div class="col-lg-3">
                        <label for="medium">Medium</label>
                    </div>
                    <br>
                </td>

                <td>
                    <div class="">
                    <span id="medium">
                        <select name="medium" id="medium" tabindex="2" class="form-control" required>
                            <option value="2"> Sinhala</option>
                            <option value="3"> English</option>
                            <option value="4"> Tamil</option>
                        </select>
                    </div>
                    <br>
                </td>
            </tr>


            <tr>
                <td>
                    <!--Service-->
                    <div class="col-lg-3">
                        <label for="Service">Service</label>
                    </div>
                    <br>
                </td>


                <td>
                    <div class="">
                        <label>
                            <?php
                            $s_query = "select * from services";
                            $s_result = mysqli_query($db_connect, $s_query);

                            echo "<select name='svc_id' class='form-control' required>";
                            while ($s_row = mysqli_fetch_array($s_result)) {
                                echo "<option value='" . $s_row['svc_id'] . "'>" . $s_row['service'] . "</option>";
                            }
                            echo "</select>";
                            ?>
                        </label>
                    </div>
                    <br>
                </td>
            </tr>


            <tr>
                <td>

                    <!--Examination -->

                    <div class="col-lg-3">
                        <label for="Examination">Examination </label>
                    </div>
                    <br>
                </td>


                <td>
                    <div class="">
                        <label>
                            <?php
                            $e_query = "select * from exams";
                            $e_result = mysqli_query($db_connect, $e_query);

                            echo "<select name='exam' class='form-control' required>";
                            while ($e_row = mysqli_fetch_array($e_result)) {
                                echo "<option value='" . $e_row['exam_id'] . "'>" . $e_row['exam'] . "</option>";
                            }
                            echo "</select>";
                            ?>
                        </label>
                    </div>
                    <br>
                </td>
            </tr>


            <tr>
                <!--NIC field-->
                <td>
                    <div class="col-lg-3">
                        <label for="name">NIC</label>
                    </div>
                    <br>
                </td>

                <td>
                    <div class="">
                        <input type="text" name="nic" value="" class="form-control" style="text-transform: uppercase"
                               required>
                    </div>
                    <br>
                </td>


            </tr>


            <tr>
                <td>

                    <!--Name field-->

                    <div class="col-lg-3">
                        <label for="name">Name</label>
                        <br>
                    </div>
                </td>

                <td>
                    <div class="">
                        <input type="text" name="name" value="" class="form-control" style="text-transform: uppercase"
                               required>
                    </div>
                    <br>
                </td>
            </tr>


            <tr>
                <td>
                    <!--Address field-->

                    <div class="col-lg-3">
                        <label for="address">Address</label>
                    </div>
                    <br>
                </td>

                <td>
                    <div class="">
                        <textarea name="address" class="form-control" style="text-transform: uppercase"
                                  required></textarea>
                    </div>
                    <br>
                </td>
            </tr>


            <tr>
                <td>

                    <!--Postal City field-->

                    <div class="col-lg-3">
                        <label for="postal_city">Postal City</label>
                    </div>
                    <br>
                </td>

                <td>
                    <div class="">
                        <input type="text" name="postal_city" value="" class="form-control"
                               style="text-transform: uppercase" required>
                    </div>
                    <br>
                </td>
            </tr>


            <tr>
                <td>

                    <!--subject field-->

                    <div class="col-lg-3">
                        <label for="subjects">Subject</label>
                    </div>
                    <br>
                </td>

                <td>
                    <div class="">
                        <label>
                            <?php
                            $es_query = "select * from exam_subject";
                            $es_result = mysqli_query($db_connect, $es_query);

                            echo "<select name='subject_id' class='form-control' required>";
                            while ($es_row = mysqli_fetch_array($es_result)) {
                                echo "<option value='" . $es_row['subject_id'] . "'>" . $es_row['subjects'] . "</option>";
                            }
                            echo "</select>";
                            ?>
                        </label>
                    </div>
                    <br>
                </td>


            <tr>

                <td>
                    <!--Gender field-->

                    <div class="col-lg-3">
                        <label for="gender">Gender</label>
                    </div>
                    <br>
                </td>

                <td>
                    <div class="">
                        <input type="radio" name="radio" value="0" class="radio-inline"/>Male
                    </div>

                    <div class="">
                        <input type="radio" name="radio" value="1" class="radio-inline"/>Female
                    </div>
                    <br>
                </td>
            </tr>


        </table>


        <br><br><br>

        <!-- set type as value in form -->
        <input type="hidden" name="type" value="<?= $type ?>" id="type">
        <!--<div class="row">-->
        <!--<div class="col-lg-1" >-->
        <button type="submit" class="btn btn-default" name="submit" onsubmit="validateIndex()" style="float:right;">
            Submit
        </button>
        <!--</div>-->
        <!--</div>-->
        <!--</div>-->

    </form>
</div>
<script src="javascript/index.js">
</script>

<!--<script src="javascript/gender.js"></script>-->
</body>
</html>
