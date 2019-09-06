$(document).ready(function() {

    $(".toggle").click(function () {
        $(this).toggleClass("on");
        $(".menu").slideToggle();
        if ($(window).width() < 1348) {
            $(".menu").prependTo(".toggle");
        }
        else return $this;
    });


});