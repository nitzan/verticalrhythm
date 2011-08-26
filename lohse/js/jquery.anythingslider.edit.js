		var slider2 = ['Recipe', 'Quote', 'Image', 'Quote #2', 'Image #2'];
		function formatText(index, panel){
			return slider2[index - 1];
		}

		$(function () {
				$('#slider2').anythingSlider({
				width               : 1150,        // if resizeContent is false, this is the default width if panel size is not defined
				height              : 750,        // if resizeContent is false, this is the default height if panel size is not defined
				resizeContents      : true,      // If true, solitary images/objects in the panel will expand to fit the viewport
				startStopped        : true,       // If autoPlay is on, this can force it to start stopped
				buildNavigation     : false,      // If true, buildsa list of anchor links to link to each panel
				autoPlay            : false,      // This turns off the entire slideshow FUNCTIONALY, not just if it starts running or not
				navigationFormatter : formatText  // Format navigation labels with text
			});

			$("#slide-jump").click(function(){
				$('#slider2').anythingSlider(4);
				return false;
			});

			// Report Events to console
			$('.anythingSlider').bind('slideshow_start slideshow_stop slideshow_paused slideshow_unpaused slide_init slide_begin slide_complete',function(e, slider){
				// show object ID + event (e.g. "slider1: slide_begin")
				var txt = slider.$el[0].id + ': ' + e.type + ', now on panel #' + slider.currentPage;
				$('#status').text(txt);
				if (window.console && window.console.firebug){ console.debug(txt); } // added window.console.firebug to make this work in Opera
			});

		});