    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')</script>
   
    
     	<!-- JavaScript -->
    <script src="js/libs/modernizr-2.0.6.min.js"></script>        
	<script type="text/javascript" src="javascript/prototype.js"></script>
	<script type="text/javascript" src="javascript/effects.js"></script>  
    <script>var $j = jQuery.noConflict();</script>
    
    
    



    	<script type="text/javascript">
		(function($) { $j(document).ready(function(){	
			$j("#indexsliders").easySlider({
				auto: true, 
				continuous: true
			});
		});	})(jQuery);
	</script>


    	<script type="text/javascript">
		(function($) { $j(document).ready(function(){	
			$j("#c2012wsld").easySlider({
				auto: true, 
				continuous: true
			});
		});	})(jQuery);
	</script>
    
        	<script type="text/javascript">
		(function($) { $j(document).ready(function(){	
			$j("#c2012ssld").easySlider({
				auto: true, 
				continuous: true
			});
		});	})(jQuery);
	</script>
    
    	<script type="text/javascript">
		(function($) { $j(document).ready(function(){	
			$j("#c2010speakersgallery").easySlider({
				auto: true, 
				continuous: true
			});
		});	})(jQuery);
	</script>
  
  
	<script type="text/javascript">
	(function($) {	$j(document).ready(function(){	
			$j("#c2010workshopgallery").easySlider({
				auto: true, 
				continuous: true
			});
		});	})(jQuery); 
	</script>
    
    
 	<script type="text/javascript">
	(function($) {	$j(document).ready(function(){	
			$j("#c2010entertainmentgallery").easySlider({
				auto: true, 
				continuous: true
			});
		});	})(jQuery); 
	</script>   

  
        <script type="text/javascript">
       (function($) { $j(function() {
            var offset = $j("#sidebar").offset();
            var topPadding = 0;
            $j(window).scroll(function() {
                if ($j(window).scrollTop() > offset.top) {
                    $j("#sidebar").stop().animate({
                        marginTop: $j(window).scrollTop() - offset.top + topPadding
                    });
                } else {
                    $j("#sidebar").stop().animate({
                        marginTop: 0
                    });
                };
            });
        });})(jQuery); 
    </script>    
    
        <script>
        (function($) { $j(function() {
        
                function filterPath(string) {
                        return string
                        .replace(/^\//,'')
                        .replace(/(index|default).[a-zA-Z]{3,4}$/,'')
                        .replace(/\/$/,'');
                }
        
                var locationPath = filterPath(location.pathname);
                var scrollElem = scrollableElement('html', 'body');
        
                // Any links with hash tags in them (can't do ^= because of fully qualified URL potential)
                $j('a[href*=#]').each(function() {
        
                        // Ensure it's a same-page link
                        var thisPath = filterPath(this.pathname) || locationPath;
                        if (  locationPath == thisPath
                                && (location.hostname == this.hostname || !this.hostname)
                                && this.hash.replace(/#/,'') ) {
        
                                        // Ensure target exists
                                        var $target = $j(this.hash), target = this.hash;
                                        if (target) {
        
                                                // Find location of target
                                                var targetOffset = $target.offset().top;
                                                $j(this).click(function(event) {
        
                                                        // Prevent jump-down
                                                        event.preventDefault();
        
                                                        // Animate to target
                                                        $j(scrollElem).animate({scrollTop: targetOffset}, 400, function() {
        
                                                                // Set hash in URL after animation successful
                                                                location.hash = target;
        
                                                        });
                                                });
                                        }
                        }
        
                });
        
                // Use the first element that is "scrollable"  (cross-browser fix?)
                function scrollableElement(els) {
                        for (var i = 0, argLength = arguments.length; i <argLength; i++) {
                                var el = arguments[i],
                                $scrollElement = $j(el);
                                if ($scrollElement.scrollTop()> 0) {
                                        return el;
                                } else {
                                        $scrollElement.scrollTop(1);
                                        var isScrollable = $scrollElement.scrollTop()> 0;
                                        $scrollElement.scrollTop(0);
                                        if (isScrollable) {
                                                return el;
                                        }
                                }
                        }
                        return [];
                }
        
        });})(jQuery);
        </script>    
       
    <script type="text/javascript" src="javascript/lightwindow.js"></script>  
    
    
    <!-- scripts concatenated and minified via ant build script-->
    <script defer src="js/plugins.js"></script>
    <script defer src="js/script.js"></script>
    
    <!-- end scripts-->
    
    
    
    <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
    <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->