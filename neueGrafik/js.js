$(document).ready(function(){

	//show
	$("#recent").show();
	
	//hide
	$("#recent").find("li:gt(0)").hide();
	
	//start fade
	setTimeout("fadeRecent(0)",3000);
	
});

$(window).load(function(){

	//Resize
	$("#content").find("img, embed, object").each(function(){
		w = $(this).width();
		h = $(this).height();
		nw = 180;
		r = nw/w;
		$(this).width(nw);
		$(this).height(r*h);
	});

	//fade In
	$("#loading").fadeOut(function(){
		$("#content").css({"opacity":0,"visibility":"visible"});
		$("#content").stop().animate({"opacity":1});
	});
	
});

function fadeRecent(current){

	//find next
	next = current + 1;
	if(next > 4){
		next = 0;
	}

	//fade
	$("#recent").find("li:eq("+current+")").fadeOut(function(){
		$("#recent").find("li:eq("+next+")").fadeIn();
	});
	
	//cycle
	setTimeout("fadeRecent("+next+")",3000);
	
};