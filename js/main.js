$(document).on("scroll", scrollHandler);

function scrollHandler() {
    let scrolled = $(document).scrollTop();
    let slide1 = $("#slide_1").outerHeight();
    let slide4 = $("#slide_4").outerHeight();

    var color = "#d2ffd5";
    var blackLogo = false;

    var header = true;

    if (scrolled >= (slide1 + slide4 - 100)) {
        header = false;
    }

    if (scrolled >= (slide1 - 50)) {
        color = "black";
        blackLogo = true;
    }

    $(".header li").css("color", color);
    $(".logo span").css("color", color);

    if (blackLogo) {
        $(".logo img").attr("src", "images/logoblack.png");
        $(".header").css("background", "transparent");
    } else {
        $(".logo img").attr("src", "images/logo.png");
        $(".header").css("background", "linear-gradient(to bottom, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0))");
    }

    if (!header) {
        $(".margined").css("padding-top", "130px");
    } else {
        $(".margined").css("padding-top", "80px");
    }


}