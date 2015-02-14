$(document).ready(function(){
    $("#social .titles > div").click(function(){
        //if ($(this).hasClass("this") != ) {
            $("#social .titles > div").removeClass("this");
            
            var className = $(this).attr("class");
            
            $(this).addClass("this");
            
            $("#social .body > div").hide();
            
            $("#social .body").show();
            
            /*$(this).css({
                "border-bottom" : 0
            });*/
            $("."+className ,"#social .body").show();
        //}
    });
});