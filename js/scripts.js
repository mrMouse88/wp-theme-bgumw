$( document ).ready(function() {
    var windowHeight = $( window ).height();
    var bodyHeight = $( "body" ).height();  
    if(bodyHeight < windowHeight){
        $(".bg-footer").css('bottom', 0);
    }
});