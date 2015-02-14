$(document).ready(function(){
	var int=self.setInterval(function(){
		$(".date b").html(clock()+" "+date());
	    },1000);
	
});


function clock(){
    var d=new Date();
    var t=d.toLocaleTimeString();

    return t;
}

function date(){
    var d=new Date();
    var t=d.toLocaleDateString();

    return t;
}