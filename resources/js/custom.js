$(document).ready(function () {
    $("#menu_open, #menu_close").click(function () {
        if ($("#mobile_menu").hasClass("open")) {
            $("#mobile_menu").removeClass("open");
        }
        else {
            $("#mobile_menu").addClass("open");
        }
    });
});