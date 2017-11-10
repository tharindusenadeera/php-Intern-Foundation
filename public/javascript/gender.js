/**
 * Created by acer on 2016-12-27.
 */
$(document).ready(function () {

        //$("#male").hide();

        $("#male").click(function () {

            $("#female").hide(1000) ;
        });

        $("#female").click(function () {
            $("#male").hide(1000);
        });
    }
);
