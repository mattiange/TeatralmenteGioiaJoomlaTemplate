$(document).ready(function(){
    $(".search label").hide();

    $(".search input").click(function(e){
        //$(this).attr("style", "width:450px;height:30px;").css("width","auto");
        $(this).addClass("");
        $(this).animate({width:"550px"}, "slow");//Modifica larghezza
        $(this).animate({height:"35px"}, "slow");//Modifica altezza

        e.stopPropagation();
    });


    $(document).click(function(){
        //$(".search input").attr("style", "width:150px;height:20px;");
        $(".search input").animate({width:"350px"}, "slow");//Modifica larghezza
        $(".search input").animate({height:"25px"}, "slow");//Modifica altezza
    });

});