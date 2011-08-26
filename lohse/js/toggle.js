	<!--//--><![CDATA[//><!--

    $(document).ready(function() { 
	    $(".extra_info").toggle(function(){
	    	$(".region-ultra-top").animate({marginTop:0},"slow", function () {
	    		$("#edit-name").focus();
	    	});
		},function(){
    		$(".region-ultra-top").animate({marginTop:-200},"slow");        
		});
	    $(".exit_toggle").toggle(function(){
	    	$(".region-ultra-top").animate({marginTop:-200},"slow", function () {
	    		$("#edit-name").focus();
	    	});
		},function(){
    		$(".region-ultra-top").animate({marginTop:-200},"slow");        
		});
	});
	
	//--><!]]>