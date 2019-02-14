function checkHeight() {
    var windowHeight = $(window).height();
    var bodyHeight = $("body").height();
    if (bodyHeight+150 < windowHeight) {
        $(".bg-footer").css('bottom', 0);
    } else {
        $(".bg-footer").css('bottom', 'auto');
    }
}

//sticky footer
$(document).ready(function () {
    checkHeight();
});

//folding faq cards
$(document).ready(function () {
    $(".bg-faq-title").click(function () {
        $(this).parent().children(".bg-faq-content").slideToggle(function () {
            $(this).parent().children().children(".bg-faq-icon").toggleClass("up down");
            checkHeight();
        });
    });
});