;(function($){
    
    $(document).ready(function(){
	
	if ( navigator.userAgent.match(/webkit/gi) ) $("body").addClass("webkit");
	    
	var half_body_w = $("body").width()/2,
	    $title = $("#site-title"),
	    $title_text = $title.html(),
	    inc = 15,
	    opp = inc+180,
	    rot = inc;
	
	$title.after('<span class="rotd-180" style="-moz-transform:rotate(180deg);-webkit-transform:rotate(180deg);transform:rotate(180deg);">'+ $title_text +'</span>');
	
	while( rot < 180 ) {
	    
	    opp = ( rot+180 < 360 ) ? rot+180 : rot-180;
	    $title.after('<span class="rotd-'+rot+'" style="-moz-transform:rotate('+rot+'deg);-webkit-transform:rotate('+rot+'deg);transform:rotate('+rot+'deg);">'+ $title_text +'</span>\
			    <span class="rotd-'+opp+'" style="-moz-transform:rotate('+opp+'deg);-webkit-transform:rotate('+opp+'deg);transform:rotate('+opp+'deg);">'+ $title_text +'</span>');
	    
	    // doesn't seem to want to animate :(
	    /*$(".rotd-"+rot+", .rotd-"+opp).css("opacity",0).animate({ opacity: 0 },(rot/inc)*100,function(){
		console.log("yo");
		
		$(".rotd-"+rot+", .rotd-"+opp).animate({ opacity: 0.99 },400);
	    });*/
	    
	    rot += inc;
	}
	
	$("#content nav, #content header, #content .entry-content").css("opacity",0).each(function(i){
	    $(this).animate({ opacity: 0 },(i+1)*200,function(){
		$(this).animate({ opacity: 0.99 },500);
	    });
	});
	$("#site-description, .menu, .copyright").css("opacity",0).animate({opacity:0},700).each(function(i){
	    $(this).animate({ opacity: 0 },(i+1)*300,function(){
		$(this).animate({ opacity: 0.99 },500);
	    });
	});
	
	    
	if ( !$("body").hasClass("home") ) {
	    half_body_w = $title.parent().width()/2;
	}
	
	
    
	function resize_title() {
	    var offset = 18; //$("body").hasClass("gecko") ? 18 : 0;
	    if ( $title.width() <= half_body_w ) {
		while( $title.width() < half_body_w ) {
		    $title.add("span[class^=rotd]").stop().animate({ fontSize: '+=1px', marginBottom: half_body_w - $title.height()/2 + 9 },0);
		}
	    } else {
		while( $title.width() > half_body_w ) {
		    $title.add("span[class^=rotd]").stop().animate({ fontSize: '-=1px', marginBottom: half_body_w - $title.height()/2 + 9 },0);
		}
	    }
	    $("body.home").css({ paddingBottom: (half_body_w*2) + 18 });
	}
	
	resize_title();
	
	
	
    });
    
    $(window).load(function(){
	$("body").addClass("rotit");
    });
    
})(jQuery);