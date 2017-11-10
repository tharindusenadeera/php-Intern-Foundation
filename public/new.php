<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 2017-02-20
 * Time: 9:16 AM
 */
?>
<html>
<head>
    <link rel="stylesheet" href="css/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/css/new.css">
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

                alert('Invalid NIC , re-enter please!!!');

                return false;
            }

        }

    </script>
</head>

<body>
    <div class="row">
        <div class="header">
                <header>
                    Government Services Examination.
                </header>
        </div>

    </div>

    <div class="container">
        <div id="login" class="mainbox col-md-6 col-md-offset-3">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">Sign In</div>

                </div>

                <div class="panel-body" style="padding-top:30px">
                    <form id="loginform" class="form-horizontal" role="form" action="../Includes/index_function.php"  method="post"  onsubmit="return validateIndex()">
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="nic" type="text" class="form-control" name="nic" value="" placeholder="NIC" maxlength="13" required>
                        </div>

                        <div class="input-group">
                            <div class="radio">
                                <label>
                                    <input id="first_time" type="radio" name="radio" value="1">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;First Attempt
                                </label>
                            </div>
                            <br>

                            <div class="radio">
                                <label>
                                    <input id="second_over" type="radio" name="radio" value="2" onclick="secondOver()">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Other Attempts
                                </label>
                            </div>
                        </div>
                        <br>

                        <br>

                        <div style="margin-bottom: 25px" class="input-group">
                            <input id="voucher" type="text" class="form-control" name="txtv" value="" placeholder="Receipt No">
                        </div>

                        <br>

                        <div class="img-responsive">
                            <img src="../Includes/captcha.php" class="img-rounded">
                        </div>
                        <br>
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="captcha" type="text" class="form-control" name="captcha" value="" placeholder="Enter here" required>
                        </div>

                        <br>
                        <div class="form-group">
                            <div class="button" style="margin-left: 25px">
                                <input type="submit" name="submit" class="btn btn-default" value="LogIn">
                            </div>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>


    <script src="javascript/voucher.js">
    </script>
</body>
</html>
