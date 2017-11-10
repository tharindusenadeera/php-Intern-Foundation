<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 2016-12-17
 * Time: 11:52 PM
 */

require_once("../Includes/db_connection.php");
include("../Includes/index_function.php");

?>
<!--suppress ALL -->
<html>
<head>
    <link rel="stylesheet" href="css/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/css/index_css.css">
    <script
        src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
    <script src="javascript/bootstrap.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <script>
        function validateIndex() {
            var IsOk;
            var nic;

                nic = document.getElementById('nic').value;
//[0-9]- element value should be integer within 1 to 9
//            {9} will iterate [0-9] first 9 characters
//            [vVxX] this means next character should be v,V or x,X
                if (nic.match(/^[0-9]{9}[vVxX]$/)) {

                    return true;
                } else {

                    alert('Invalid NIC , re-enter please');

                    return false;
                }

        }

    </script>
</head>

<body>
<div class="row">
    <div class="row">
        <header><b>Government Services Examination</b> </header>
    </div>
</div>






<br>

<div class="container-fluid">


            <form action="../Includes/index_function.php" method="post"  onsubmit="return validateIndex()"  >


                <div class="row">
                    <div class="log">
                        <h3> Log In!</h3>
                    </div>

                </div>


                <div class="row">
                    <input type="text" tabindex="2" id="nic" name="nic" placeholder="Enter NIC" maxlength="13" required>
                </div>


                <br>


                <div class="row">

                    <table>
                        <tr>
                            <td><br><label for="first_time">First Time</label><br></td>
                            <td>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="first_time" name="radio"
                                                                                   value="1" class="radio-inline" required></td>
                        </tr>

                        <tr>
                            <td><br><br><br><label for="second_over">Over First</label></td>
                            <td><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="second_over" value="2"
                                                                                         onclick="secondOver()" name="radio"
                                                                                         class="radio-inline" required></td>
                        </tr>
                    </table>
                </div>



                <div class="row">

                    <br>
                    <input type="text" id="voucher" name="txtv" placeholder="Enter Here">

                </div>
                <br>





                <div class="row">
                    <img src="../Includes/captcha.php" class="">
                </div>
                <br>
                <div class="row">
                    <input type="text" name="captcha" tabindex="2" placeholder="Enter Here!" required>
                </div>



                <div class="row">
                    <div class="button">
                        <button type="submit" class="btn btn-default" name="submit">Submit</button>
                    </div>


                </div>





            </form>

</div>







<script src="javascript/voucher.js">
</script>

<!--<script src="javascript/index.js">-->
<!--</script>-->


</body>
</html>