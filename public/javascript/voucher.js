/**
 * Created by acer on 2016-12-27.
 */
$(document).ready(function () {

        $("#voucher").hide();

        $("#second_over").click(function () {
            $("#voucher").show();
        });

        $("#first_time").click(function () {
            $("#voucher").hide();
        });
    }
);