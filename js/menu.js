$(document).ready(function (){
    toggleMenu();
});

$(window).resize(function (){
    toggleMenu();
});

var flag = false;

function toggleMenu(){
    var windows_width = $(window).width();
    var menu = $(".mainmenu");
    
    if(windows_width < 1024){
        if(flag==false){
            var menu_toggle = "<div class='menu toggle' data-toggle-menu='mainmenu'>" + 
                                "<div></div>" +
                                "<div></div>" +
                                "<div></div>" +
                            "</div>";
        
            $(menu).hide();
            $("#header").prepend(menu_toggle);
            $(menu).addClass('list');

            $(".menu.toggle").click(function (){
                $(menu).slideToggle();
            });
            
            
            flag = true;
        }
    }else{
        $(menu).show();
        $(menu).removeClass('list');
        $(".menu.toggle").remove();
        
        flag = false;
    }
}


/*$(document).ready(function(){
    controlloDimMenu();//Controllo la dimensione del menu
});

$(window).resize(function(){
    controlloDimMenu();//Controllo la dimensione del menu
});

function less(){
    $("#page .mainmenu .menu .less").remove();
    $("#page .mainmenu .menu").append("<li class=\"more\" onclick=\"more();\"><a>&nbsp;</a></li>");
    
    controlloDimMenu();
}

function more(){
    var visualizzati = vociMenuVis();
    var totali = vociTotali();
    var li = $(".mainmenu .menu li");//Seleziono gli elementi del menu principale
    var cont = 0;
    
    for(i=0; i<totali;i++){
        cont = cont+1;
        if (cont > visualizzati){
            $(li[i]).show();
        }
    }
    
    $("#page .mainmenu .menu .more").remove();
    $("#page .mainmenu .menu").prepend("<li class=\"less\" onclick=\"less();\"><a>&nbsp;</a></li>");
}

function vociTotali(){
    var page = $("#page");
    var header_width = $(".mainmenu", page).width();
    var menu_width   = $(".mainmenu .menu li", page).width();
    var li = $(".mainmenu .menu li");//Seleziono gli elementi del menu principale
    var tot = 0;
    for (i=0; i<li.length; i++){//ciclo gli elementi del menu
        tot = tot+1;
    }
    
    return tot;
}

function vociMenuVis(){
    var page = $("#page");
    var header_width = $(".mainmenu", page).width();
    var menu_width   = $(".mainmenu .menu li", page).width();
    var li = $(".mainmenu .menu li");//Seleziono gli elementi del men principale
    var lunghezza_li_tot = li.length * menu_width;//Larghezza del menu
    var k=0;
    var vis=0;
    
    if (lunghezza_li_tot> header_width){
        for (i=0; i<li.length; i++){//ciclo gli elementi del menu
            k = k + menu_width;//dimensione del menu al ciclo attuale
            //se la dimensione attuale � superiore al suo contenitore
            if (k < header_width){
                vis = vis+1;
            }
        }
    }else{
        vis = li.length;
    }
    
    return vis;
}

function controlloDimMenu() {
    var page = $("#page");
    var header_width = $(".mainmenu", page).width();
    var menu_width   = $(".mainmenu .menu li", page).width();
    var li = $(".mainmenu .menu li");//Seleziono gli elementi del men principale
    var lunghezza_li_tot = li.length * menu_width;//Larghezza del menu
    var k=0;
    
    //se la dimensione del menu � superiore a quella del suo contenitore
    if (lunghezza_li_tot> header_width){
        for (i=0; i<li.length; i++){//ciclo gli elementi del menu
            k = k + menu_width;//dimensione del menu al ciclo attuale
            //se la dimensione attuale � superiore al suo contenitore
            if (k > header_width) {
                $(li[i]).hide();//Nascondo i li in eccesso
                hide = true;//Almeno un li nascosto
            }
        }
        $(".mainmenu .menu", page).append("<li class=\"more\" onclick=\"more();\"><a>&nbsp;</a></li>");
    }else{//se la dimensione � inferiore
        $(".mainmenu .menu li", page).show();//mostro tutti i li del menu
        $(".mainmenu .menu .more", page).remove();
        $(".mainmenu .menu .less", page).remove();
    }
}*/