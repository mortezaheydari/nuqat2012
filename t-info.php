<?php require_once('connection/nuqat.php'); ?>


<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}


/**
 * Jcrop image cropping plugin for jQuery
 * Example cropping script
 * @copyright 2008 Kelly Hallman
 * More info: http://deepliquid.com/content/Jcrop_Implementation_Theory.html
 */


// If not a POST request, display page below:

		$TrnRef = rand(1, 10000) * rand(1, 10000);
		$OrderID = rand(1, 10000) * rand(1, 10000);


	
?>


<!DOCTYPE html>

 <html class="no-js" lang="en">



<head>

  <meta charset="utf-8">

 



  <!-- Use the .htaccess and remove these lines to avoid edge case issues.

       More info: h5bp.com/b/378 -->

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">



  <title></title>

  <meta name="description" content="">

  <meta name="author" content="">



  <!-- Mobile viewport optimized: j.mp/bplateviewport -->

  <meta name="viewport" content="width=device-width,initial-scale=1">



  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->



  <!-- CSS: implied media=all -->

  <!-- CSS concatenated and minified via ant build script-->



  <link rel="author" href="humans.txt" />

  <link rel="stylesheet" href="css/temp.css">

  <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" href="css/main-gallery.css" />

  <link href="css/screen.css" rel="stylesheet" type="text/css" media="screen" />

  

    <link rel="stylesheet" type="text/css" href="css/lightwindow.css" />

      

  <!-- end CSS-->



  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->



  <!-- All JavaScript at the bottom, except for Modernizr / Respond.

       Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries

       For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->

       

<script type="text/javascript">



  var _gaq = _gaq || [];

  _gaq.push(['_setAccount', 'UA-29336147-1']);

  _gaq.push(['_trackPageview']);



  (function() {

    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;

    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';

    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);

  })();



</script>

  

       

</head>

<!-- ShH - define page variables -->





<!-- ShH - Get template -->

<body>



<!-- ShH - google analytics -->

<!-- ShH - ana -->



<!--section02-->

<table class="pageContent"><tr><td>

 

 

 

 

      <table class="header">

	    <tr><td>

	    <!-- header logo, header text and header sponsor goes here-->

<!-- header-->            

	    <!--inside header)-->

        <table class="section"  style="background-color:#fff;">

	      <tr>

	        <td class="mainSize">

<table style="border:none"><tr>







<!--nuqat logo-->

<td width="221px"><a href="index.php"><img style="margin-top:7px; margin-bottom:7px;" src="img/headerlogo(x2).jpg" height="120px" width="221px" /></a></td>



<td width="500px">



<!--header main text table-->

<table style="border:none; margin-top:45px; margin-left:30px;">

<tr><td>

<p style="font-size:1.15em; color:#1D1D1B; line-height:20px; line-height:0px; text-transform:uppercase;">Nuqat Design Conference 2012</p>

</td></tr>

<tr><td>



	<table style="border:none;  line-height:0px">

	<tr><td>

	<h1>THE LOST CITY OF </h1>

	</td>

	<td>

	<h1 style="color:#e94f1b; padding-left:5px;">ARABESQUE</h1>

	</td>

	</tr>

	</table>



</td></tr></table>





</td>

      </table>



	  <td class="sidebarSize">



	    <!--sponsors table-->



		<table width="100%" height="130" style="border:none; margin-top:7px;">

        <tr><td>&nbsp;

		

        </td></tr>



    	<tr ><td>

		<img src="img/c2012/sponsorskuwait/nuqat_patronage_logo.jpg" style="margin-bottom:5px;" align="right" height="100" width="300">

    

		</td></tr>

        <tr><td>

        <p align="left" style="font-size:0.80em; color:#1D1D1B; visibility:hidden !important;">in   association with deisgn days dubai</p>

        </td></tr>

      </table>



	    </td></tr>

	    </table>





	    <!--section01-->

        <table class="section">

	      <tr>

	        <td class="mainSize">

<!-- menumain-->

        

        

<!--menumain -->      <nav id="topNav">  

<!--menumain -->                <ul>  

<!--menumain -->                    <li><a href="ourstory.php">our story</a></li>  

<!--menumain -->                	<li><a class="parent" href="conferences.php">conferences</a> 

<!--menumain -->                    	<ul class="submenu">  

<!--menumain -->							<li><a href="c2012kuwait.php">2012</a></li> 

<!--menumain -->                        	<li><a href="c2010.php">2010</a></li>  

<!--menumain -->                   		</ul>  

<!--menumain -->                </li>  

<!--menumain -->                <li><a href="contactus.php">nuqat events</a></li>  

<!--menumain -->                <li><a href="#">Calendar</a></li>  

<!--menumain -->                <li><a href="http://nuqatblog.com/" target="_blank">blog</a></li>  

<!--menumain -->            </ul>  

<!--menumain -->        </nav> 



			</td>

	        <td style="text-align:left;">

         

<div class="stayconnect">STAY CONNECTED</div>

			</td>

          </tr>

      </table>



        <table class="section" style="background-color:#1D1D1B">

	      <tr>

	        <td class="mainSize" style="background-color:#fff">



<script>

	required.add('Full_Name','NOT_EMPTY','Full Name');

	required.add('Email_Address','EMAIL','Email Address');

	required.add('Your_Message','NOT_EMPTY','Your Message')

</script>


	<!-- ******form****************************************************************************** -->       

<form action="holdvalue.php" method="post" style="text-align:center;">
<!-- The secure hash hidden field -->

    <!-- get user input -->
    
    
    

<div style="height:0px;overflow:hidden;">
<input name="accessCode" value="<?php echo $_POST['accessCode']; ?>" size="20" maxlength="8"/>
<input name="merchTxnRef" value="<?php echo $_POST['merchTxnRef']; ?>" size="20" maxlength="40"/>
<input name="merchant" value="<?php echo $_POST['merchant']; ?>" size="20" maxlength="16"/>
<input name="orderInfo" value="<?php echo $_POST['orderInfo']; ?>" size="20" maxlength="34"/>
<input name="amount" id="amount" value="<?php echo $_POST['amount']; ?>" maxlength="10"/>
<input name="returnURL" size="65" style="visibility:hidden;" value="http://creative-stud.io/nuqat/paymentprocess.php?action=py?" maxlength="250"/>






      <input value="<?php echo $_POST['EMAIL']; ?>" name="EMAIL" />
   	  <input value="<?php echo $_POST['FNAME']; ?>" name="FNAME" />
   	  <input value="<?php echo $_POST['LNAME']; ?>" name="LNAME" />
      <input value="<?php echo $_POST['PHONE']; ?>" name="PHONE" />
      <input value="<?php echo $_POST['live_in']; ?>" name="live_in" />
      <input value="<?php echo $_POST['address']; ?>" name="address" />
      <input value="<?php if ($_POST['hear'] == "other") {
		echo $_POST['hear_other'];
	} else{
		echo $_POST['hear'];			
	} ?>" name="hear" />
      <input value="<?php echo $_POST['PACKAGE']; ?>" name="PACKAGE" />
      <input value="<?php echo $_POST['MorningW']; ?>" name="MorningW" />
      <input value="<?php echo $_POST['AfternoonW']; ?>" name="AfternoonW" />




</div>




<table height="800" style="background-color:#fff;background:url(img/etickets/topheader.png) top center no-repeat;" width="450" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td style="text-align:center;padding-top:200px;"><img src="img/etickets/nuqatheader.png" width="159" height="174" /></td>
  </tr>
  <tr>
    <td height="40">&nbsp;</td>
  </tr>
  <tr>
    <td style="padding:5px 0 5px 0;font-family: 'nuqat';">FULL NAME: <?php echo $_POST['FNAME']." ".$_POST['LNAME']; ?></td>
  </tr>
  <tr>
    <td style="padding:5px 0 5px 0;font-family: 'nuqat';">EMAIL: <?php echo $_POST['EMAIL']; ?></td>
  </tr>
  <tr>
    <td style="padding:5px 0 5px 0;font-family: 'nuqat';">MOBILE: <?php echo $_POST['PHONE']; ?></td>
  </tr>
  <tr>
    <td style="padding:5px 0 5px 0;font-family: 'nuqat';">I live in <?php echo $_POST['live_in']; ?></td>
  </tr>
  <tr>
    <td style="padding:5px 0 5px 0;font-family: 'nuqat';">Address: <?php echo $_POST['address']; ?></td>
  </tr>
  <tr>
    <td style="padding:5px 0 5px 0;font-family: 'nuqat';">Heard about us: <?php 	if ($_POST['hear'] == "other") {
		echo $_POST['hear_other'];
	} else{
		echo $_POST['hear'];			
	} ?></td>
  </tr>      
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="padding:5px 0 5px 0;font-family: 'nuqat';">PACKAGE: <?php 
  	if ($_POST['PACKAGE'] == "3d2wd0") {
		echo "3 days Lectures + 2 workshops = KD 230 (820$)";
	} elseif ($_POST['PACKAGE'] == "3d1wd0") {
		echo "3 days + 1 workshop = KD 130 (460$)";
	}  elseif ($_POST['PACKAGE'] == "3d0wd0") {
		echo "3 days Lectures = KD 30 (110$)";
	}  elseif ($_POST['PACKAGE'] == "0d1wd0") {
		echo "1 Workshop = KD 110 (390$)";
	} /* elseif ($_POST['PACKAGE'] == "1d0wd1") {
		echo "Package: Day 1 Lectures = 200$";
	}  elseif ($_POST['PACKAGE'] == "1d0wd2") {
		echo "Package: Day 2 Lectures = 200$";
	}  elseif ($_POST['PACKAGE'] == "1d0wd3") {
		echo "Package: Day 3 Lectures = 200$";
	} */	
	?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="padding:5px 0 5px 0;font-family: 'nuqat';">MORNING WORKSHOP: <?php 
	
	
	if (isset($_POST['MorningW'])) {
		echo $_POST['MorningW'];
	} else {
		echo "#";
	}	
	
	?></td>
  </tr>
  <tr>
    <td style="padding:5px 0 5px 0;font-family: 'nuqat';">AFTERNOON WORKSHOP: <?php 
	
	
	if (isset($_POST['AfternoonW'])) {
		echo $_POST['AfternoonW'];
	} else {
		echo "#";
	}	
	
	?></td>
  </tr>
  <tr>
    <td height="100">&nbsp;</td>
  </tr>
  <tr>
    <td style="text-align:center;font-family: 'nuqat';color:#E94F1B;">PLEASE CONFIRM YOUR E-TICKET BEFORE PAYMENT.</td>
  </tr>
</table><br>


    <input type="submit" class="SubmitBtn" style="width:120px;height:50px;" NAME="SubButL" value="Pay Now!">
    </form>
    <!-- get user input -->    





	<!-- **************************************************************************************** -->       









	<!-- **************************************************************************************** --> 









			</td>

    

            

	        <td class="sidebarSize"> 

            

            <table style="height:100%;">



<tr><td style="text-align:center;vertical-align:top;">             

<!-- sidebar1-->

<table class="side-bar-table" style="position:relative;top:-1px;" width="235" border="0" cellspacing="0" cellpadding="0">        

  <tr>

    <td style="padding-bottom:5px;text-align:center;"><div style="margin-left: 17px;" class="register-now"><a href="#">REGISTER NOW</a></div></td>

  </tr>

  <tr>

    <td style="padding-top:5px;padding-bottom:5px;text-align:center;">KUWAIT CONFERENCE 2012</td>

  </tr>

<!--  <tr>

    <td height="40">&nbsp;</td>

  </tr>

  <tr>

    <td style="padding-top:5px;padding-bottom:5px;text-align:center;">PARTNER SPONSOR</td>

  </tr>

  <tr>

    <td style="padding-top:5px;padding-bottom:5px;text-align:center;"><img src="img/abyatlogo(x2).jpg" width="100" height="100" /></td>

  </tr>-->
<tr>
    <td style="padding-top:5px;padding-bottom:5px; padding-left:10px;text-align:left;">IN ASSOCIATION WITH</td>
  </tr>
  <tr>
    <td style="padding-top:5px;padding-bottom:5px;text-align:center;"><table><tbody><tr>
<td style="text-align:left; width:46
0px;padding-left:5px; vertical-align:bottom">

    <a href="http://americani.wordpress.com/" target="_blank"><img src="img/c2012/sponsorskuwait/amricani.jpg" height="68px" width="85px"></a>          
                    
</td>


<td style="text-align:left;  width:85px;padding-right:5px; border-left:thin solid #000;  vertical-align:bottom">


    <a href="http://darmuseum.org.kw/english/" target="_blank"><img src="img/c2012/sponsorskuwait/dar-alathat.jpg" height="68px" width="140px"></a>         
    
 
</td>
</tr></tbody></table></td>


  </tr>
  <tr>

    <td height="20">&nbsp;</td>

  </tr>

  <tr>

    <td style="padding-top:5px;padding-bottom:5px;text-align:center;">SUBSCRIBE FOR NEWSLETTERS</td>

  </tr>

  <tr>

    <td style="padding-top:5px;padding-bottom:5px;text-align:center;"><!-- Begin MailChimp Signup Form -->



<div id="mc_embed_signup">

<form action="http://nuqatfoundation.us4.list-manage1.com/subscribe/post?u=99d66cdca99ab9562bd3dd99a&amp;id=f68d9d1165" method="post" name="mc-embedded-subscribe-form" class="validate" target="_blank">

	<label>Email: </label>

	<input type="email" value="" name="EMAIL" style="background-color:#fff !important;border:thin solid #000;width:150px" placeholder="email address" required /><br /><br />





	<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="SubmitBtn">

</form>

</div>



<!--End mc_embed_signup--></td>

  </tr>

  <tr>

    <td style="padding-left:5px;padding-right:5px;text-align:center;padding-top:15px;">FOLLOW US</td>

  </tr>

  <tr>

    <td style="padding-top:5px;padding-bottom:5px;">

    	<table width="180" border="0" align="center" cellpadding="0" cellspacing="0">

			<tr>

    			<td width="50" style="padding-left:5px;padding-right:5px;"><div id="follow-us-twitter"><a href="http://twitter.com/#!/Nuqatweets" target="_blank"></a></div></td>

    			<td width="50" style="padding-left:5px;padding-right:5px;"><div id="follow-us-fb"><a href="http://www.facebook.com/nuqatME" target="_blank"></a></div></td>

    			<td width="50" style="padding-left:5px;padding-right:5px;"><div id="follow-us-youtube"><a href="#" target="_blank"></a></div></td>

  			</tr>

		</table>

    </td>

  </tr>

</table></td></tr>



<tr><td  style="text-align:center;">

<!-- sidebar2-->

<table style="height:100%;" width="235" border="0" cellspacing="0" cellpadding="0">        

  <tr>

    <td class="sidebar-down">&nbsp;</td>

  </tr>

</table></td></tr>





</table>





			</td>

          </tr>

          

          

      </table>

      

      

	    <!--section03-->   

        <table class="section">

    <tr>

    <td class="mainSize" style="vertical-align:top;">





<!-- footermenu-->

		<table  class="footer-menu" width="730" border="0" align="center" cellpadding="0" cellspacing="0">

  <tr>

    <td height="150">&nbsp;</td>

  </tr>

  <tr>

    <td style="vertical-align:middle;">

    	<table width="480" border="0" align="center" cellpadding="0" cellspacing="0">

  <tr>

    <td width="60" class="footer-links" style="text-align:center;"><a href="ourstory.php">about</a></td>

    <td width="60" class="footer-links" style="text-align:center;"><a href="#">register</a></td>

    <td width="60" class="footer-links" style="text-align:center;"><a href="http://nuqatblog.com/" target="_blank">blog</a></td>

    <td width="60" class="footer-links" style="text-align:center;"><a href="conferences.php">conferences</a></td>

    <td width="60" class="footer-links" style="text-align:center;"><a href="terms.php">terms</a></td>

    <td width="60" class="footer-links" style="text-align:center;"><a href="index.php">home</a></td>

    <td width="60" class="footer-links" style="text-align:center;"><a href="contactus.php">contact us</a></td>

  </tr>

</table>



    </td>

  </tr>

</table>

		

    </td>        



    

    <td class="sidebarSize footer-side" >

    





<table width="235" border="0" align="center" cellpadding="0" cellspacing="0">

<tr>

	<td height="150" style="text-align:center;vertical-align:bottom;padding-bottom:5px;">

    <img border="0" id="logo-me" />

    </td>

</tr>

 <tr>

     <td width="480" class="footer-links" style="text-align:center; font-size:0.95em; color:#fff;">

     <table width="200" align="center"; border="0" cellpadding="0" cellspacing="0">

  <tr>

    <td style="text-align:center;"></td>

  </tr>

  <tr>

    <td style="text-align:center;"><a onmouseover="

    document.getElementById('logo-me').style.visibility = 'visible';

    document.getElementById('logo-me').src = 'img/rawdesign.jpg';

    

    "

    onmouseout="document.getElementById('logo-me').style.visibility = 'hidden';" class="rawdesign" target="_blank" href="mailto:hussa@rawdesign.me" >Designed By Raw Design Studios </a></td>

  </tr>

  <tr>

    <td style="text-align:center;"><a onmouseover="

        document.getElementById('logo-me').style.visibility = 'visible';

    document.getElementById('logo-me').src = 'img/charchoob.jpg';

    

    " onmouseout="document.getElementById('logo-me').style.visibility = 'hidden';" class="rawdesign" target="_blank" href="https://www.facebook.com/pages/Charchoob-Web-Solutions/174180479308730" >Developed By CharChoob Web Solutions</a></td>

  </tr>

</table>



</td>

  </tr>

</table>



    <!--

	<div class="footerNull">

osuere mollis. Mauris aliquet elementum dapibus. Mauris rhoncus felis sed enim</div>-->

    </td></tr></table>

    

</td></tr></table>





	<!-- foot-->            

    

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

    



</body>

</html>

<!-- ShH - ana -->