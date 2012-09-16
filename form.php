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
<script>


function copy() {
	document.getElementById("amount").value =  document.getElementById("PACKAGE").value;
	if (document.getElementById("PACKAGE").value==55000) {
		document.getElementById("morning_box").style.visibility = 'visible';
		document.getElementById("morning_box").style.height = '173px';
		document.getElementById("morning_box").style.overflow = 'hidden';	
		
		document.getElementById("afternoon_box").style.visibility = 'visible';
		document.getElementById("afternoon_box").style.height = '131px';
		document.getElementById("afternoon_box").style.overflow = 'hidden';
		
		
		document.getElementById("time_div").style.visibility = 'hidden';
		document.getElementById("time_div").style.height = '0px';
		document.getElementById("time_div").style.overflow = 'hidden';		
        
        
        document.getElementById('MorningW_0').checked = false;
        document.getElementById('MorningW_1').checked = false;
        document.getElementById('MorningW_2').checked = false;        
        document.getElementById('MorningW_3').checked = false;        
        document.getElementById('MorningW_4').checked = false;        
        document.getElementById('MorningW_5').checked = false;        
        document.getElementById('MorningW_6').checked = false;        
        document.getElementById('AfternoonW_0').checked = false;        
        document.getElementById('AfternoonW_1').checked = false;        
        document.getElementById('AfternoonW_2').checked = false;     
        document.getElementById('AfternoonW_3').checked = false;  
        document.getElementById('AfternoonW_4').checked = false;     				
				
	} else if (document.getElementById("PACKAGE").value==38500) {
		document.getElementById("morning_box").style.visibility = 'hidden';	
		document.getElementById("morning_box").style.height = '0px';
		document.getElementById("morning_box").style.overflow = 'hidden';	
		
		document.getElementById("afternoon_box").style.visibility = 'hidden';
		document.getElementById("afternoon_box").style.height = '0px';
		document.getElementById("afternoon_box").style.overflow = 'hidden';
		
		
		document.getElementById("time_div").style.visibility = 'visible';
		document.getElementById("time_div").style.height = '30px';
		document.getElementById("time_div").style.overflow = 'hidden';		
        
        
        document.getElementById('MorningW_0').checked = false;
        document.getElementById('MorningW_1').checked = false;
        document.getElementById('MorningW_2').checked = false;        
        document.getElementById('MorningW_3').checked = false;        
        document.getElementById('MorningW_4').checked = false;        
        document.getElementById('MorningW_5').checked = false;        
        document.getElementById('MorningW_6').checked = false;        
        document.getElementById('AfternoonW_0').checked = false;        
        document.getElementById('AfternoonW_1').checked = false;        
        document.getElementById('AfternoonW_2').checked = false;     
        document.getElementById('AfternoonW_3').checked = false;  
        document.getElementById('AfternoonW_4').checked = false;     	
					
		
	} else if (document.getElementById("PACKAGE").value<=27500) {
		document.getElementById("morning_box").style.visibility = 'hidden';
		document.getElementById("morning_box").style.height = '0px';
		document.getElementById("morning_box").style.overflow = 'hidden';	
		
		document.getElementById("afternoon_box").style.visibility = 'hidden';
		document.getElementById("afternoon_box").style.height = '0px';
		document.getElementById("afternoon_box").style.overflow = 'hidden';	
		
		
		document.getElementById("time_div").style.visibility = 'hidden';	
		document.getElementById("time_div").style.height = '0px';
		document.getElementById("time_div").style.overflow = 'hidden';		
        
        
        document.getElementById('MorningW_0').checked = false;
        document.getElementById('MorningW_1').checked = false;
        document.getElementById('MorningW_2').checked = false;        
        document.getElementById('MorningW_3').checked = false;        
        document.getElementById('MorningW_4').checked = false;        
        document.getElementById('MorningW_5').checked = false;        
        document.getElementById('MorningW_6').checked = false;        
        document.getElementById('AfternoonW_0').checked = false;        
        document.getElementById('AfternoonW_1').checked = false;        
        document.getElementById('AfternoonW_2').checked = false;     
        document.getElementById('AfternoonW_3').checked = false;  
        document.getElementById('AfternoonW_4').checked = false;     			
	}	
}


</script>
</head>

<body>

<table class="pageContent"><tr><td>
 
 
 
 
      <table class="header">
	    <tr><td>

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
<p style="font-size:1.15em; color:#1D1D1B; line-height:20px; line-height:0px; text-transform:uppercase;">Nuqat Design Conference DUBAI 2012</p>
</td></tr>
<tr><td>

	<table style="border:none;  line-height:0px">
	<tr><td>
	<h1>THE LOST CITY OF </h1>
	</td>
	<td>
	<h1 style="color:#139BA3; padding-left:5px;">ARABESQUE</h1>
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
		<img src="img/headersponsor01(x2).jpg" height="80" width="80" align="right" style="margin-bottom:5px; margin-right:5px; margin-left:5px; visibility:hidden !important;"/>
    
		</td></tr>
        <tr><td>
        <p align="left" style="font-size:0.80em; color:#1D1D1B; visibility:hidden !important;">in   association with deisgn days dubai</p>
        </td></tr>
      </table>
    </td></tr></table>









<!--temp-->

	    <!--section01-->
        <table class="section">
	      <tr>
	        <td class="mainSize">
<!-- menumain-->
        
        
<?php $browser = $_SERVER['HTTP_USER_AGENT'];
	if (strstr($browser, "MSIE")) { 
		include('parts/menumainhtml4.php');
	}else{
		include('parts/menumain.php');
}; ?>


			</td>
	        <td style="text-align:left;">
	<!-- manustaycon-->            
<?php include('parts/manustaycon.php');?>

			</td>
          </tr>
      </table>
      


        
        
	    <!--section02 (herer goes the main body)-->
        <table class="section" style="background-color:#1D1D1B">
	      <tr>
	        <td class="mainSize" style="background-color:#fff">
            
        


	<!-- **************************************************************************************** -->    
    
    <!-- The "Pay Now!" button submits the form, transferring control to the page detailed below -->
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />

<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationRadio.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationRadio.css" rel="stylesheet" type="text/css" />

<form action="holdvalue.php" method="post">
<!-- The secure hash hidden field -->

    <!-- get user input -->
    
    
    

<div style="height:0px;overflow:hidden;visibility:hidden;">
<input name="accessCode" value="9AF2CCEE" size="20" maxlength="8"/>
<input name="merchTxnRef" value="<?php echo $TrnRef ?>" size="20" maxlength="40"/>
<input name="merchant" value="TEST834501" size="20" maxlength="16"/>
<input name="orderInfo" value="101483" size="20" maxlength="34"/>
<input name="amount" id="amount" value="" maxlength="10"/></td>
<input name="returnURL" size="65" style="visibility:hidden;" value="http://localhost/nuqat2012/paymentTestForm.php?action=py?" maxlength="250"/></div>
    
    <!-- get user input -->    




<table width="600" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
    	<table>
        	<tr>
            	<td width="180">
   	  <label for="EMAIL">Email Address  <span>*</span></label></td><td>
   	  <span id="sprytextfield2">
      <input type="text" value="" name="EMAIL" class="required email" id="EMAIL" />
      <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td></tr></table></td>
  </tr>
  <tr>
    <td>	
    	<table>
        	<tr>
            	<td width="180">    
   	  <label for="FNAME">First Name  <span>*</span></label></td><td>
   	  <span id="sprytextfield1">
   	  <input type="text" value="" name="FNAME" class="required" id="FNAME" />
   	  <span class="textfieldRequiredMsg">A value is required.</span></span></td></tr></table></td>
  </tr>
  <tr>
    <td>	
    	<table>
        	<tr>
            	<td width="180">    
   	  <label for="LNAME">Last Name  <span>*</span></label></td><td>
   	  <span id="sprytextfield3">
   	  <input type="text" value="" name="LNAME" class="required" id="LNAME" />
   	  <span class="textfieldRequiredMsg">A value is required.</span></span></td></tr></table></td>
  </tr>
  <tr>
    <td>	
    	<table>
        	<tr>
            	<td width="180">    
   	  <label for="PHONE">Mobile Phone  <span>*</span></label></td><td>
   	  <span id="sprytextfield4">
      <input type="text" name="PHONE" class="required" value="" id="PHONE" />
      <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td></tr></table></td>
  </tr>
  <tr>
    <td>	
    	<table>
        	<tr>
            	<td width="180">    
    	<label for="PACKAGE">Choose Your Package  <span>*</span></label></td><td>
    	<span id="spryselect1">
    	<select onchange="copy();" name="PACKAGE" class="required" id="PACKAGE">
    	  <option value="">Choose...</option>
    	  <option value="55000">3 days Lectures + 2 workshops = 550$</option>
    	  <option value="38500">3 days + 1 workshop = 385$</option>
    	  <option value="27500">3 days Lectures = 275$</option>
    	  <option value="11000">Day 1 Lectures = 110$</option>
    	  <option value="11000">Day 2 Lectures = 110$</option>
    	  <option value="11000">Day 3 Lectures = 110$</option>
  	  </select>
      <div id="label"></div>

    	<span class="selectRequiredMsg">Please select an item.</span></span></td></tr></table></td>
  </tr>

  <tr>
    <td><div id="time_div" style="visibility:hidden;height:0;overflow:hidden;">
    	<table>
        	<tr>
            	<td width="180">    
    	<label for="time">Please Select When</label></td><td>
    	<select onchange="
	if (document.getElementById('time').value==0) {
		document.getElementById('morning_box').style.visibility = 'visible';
		document.getElementById('morning_box').style.height = '173px';
		document.getElementById('morning_box').style.overflow = 'hidden';	
		
		document.getElementById('afternoon_box').style.visibility = 'hidden';
		document.getElementById('afternoon_box').style.height = '0px';
		document.getElementById('afternoon_box').style.overflow = 'hidden';
        
        
        document.getElementById('MorningW_0').checked = false;
        document.getElementById('MorningW_1').checked = false;
        document.getElementById('MorningW_2').checked = false;        
        document.getElementById('MorningW_3').checked = false;        
        document.getElementById('MorningW_4').checked = false;        
        document.getElementById('MorningW_5').checked = false;        
        document.getElementById('MorningW_6').checked = false;        
        document.getElementById('AfternoonW_0').checked = false;        
        document.getElementById('AfternoonW_1').checked = false;        
        document.getElementById('AfternoonW_2').checked = false;     
        document.getElementById('AfternoonW_3').checked = false;  
        document.getElementById('AfternoonW_4').checked = false;                     
        
					
	} else if (document.getElementById('time').value==1) {
		document.getElementById('morning_box').style.visibility = 'hidden';
		document.getElementById('morning_box').style.height = '0px';
		document.getElementById('morning_box').style.overflow = 'hidden';
		
		document.getElementById('afternoon_box').style.visibility = 'visible';
		document.getElementById('afternoon_box').style.height = '131px';
		document.getElementById('afternoon_box').style.overflow = 'hidden';
        
        
        document.getElementById('MorningW_0').checked = false;
        document.getElementById('MorningW_1').checked = false;
        document.getElementById('MorningW_2').checked = false;        
        document.getElementById('MorningW_3').checked = false;        
        document.getElementById('MorningW_4').checked = false;        
        document.getElementById('MorningW_5').checked = false;        
        document.getElementById('MorningW_6').checked = false;        
        document.getElementById('AfternoonW_0').checked = false;        
        document.getElementById('AfternoonW_1').checked = false;        
        document.getElementById('AfternoonW_2').checked = false;     
        document.getElementById('AfternoonW_3').checked = false;  
        document.getElementById('AfternoonW_4').checked = false;     					
	}        
        
        " name="time" class="required" id="time">
    	  <option value="">Choose...</option>
    	  <option value="0">Morning</option>
    	  <option value="1">Afternoon</option>
  	  </select>
</td></tr></table></div></td>
  </tr>
  
  <tr>
    <td><div id="morning_box" style="visibility:hidden;height:0;overflow:hidden;">
    <label>Morning Workshops</label>
    <table width="400" id="MorningW">
        <tr>
          <td>
          <span id="spryradio1">
          <label>
            <input type="radio" onclick="" name="MorningW" value="Younes Duret (Product)" id="MorningW_0" class="radioBtn" />
            Younes Duret (Product)</label><br />
			<label>
            <input type="radio" name="MorningW" value="Nadine & Tarek (Arabic Type)" id="MorningW_1" class="radioBtn" />
            Nadine & Tarek (Arabic Type)</label><br />
			<label>
            <input type="radio" name="MorningW" value="Nedda & Gisbert (Jewelry)" id="MorningW_2" class="radioBtn" />
            Nedda & Gisbert (Jewelry)</label><br />
			<label>
            <input type="radio" name="MorningW" value="Manar Moursi (Architecture)" id="MorningW_3" class="radioBtn" />
            Manar Moursi (Architecture)</label><br />
			<label>
            <input type="radio" name="MorningW" value="Haleh Anvari (Photography)" id="MorningW_4" class="radioBtn" />
            Haleh Anvari (Photography)</label><br />
			<label>
            <input type="radio" name="MorningW" value="Sh. Alanoud Al Sabah (Jewelry) (1 day)" id="MorningW_5" class="radioBtn" />
            Sh. Alanoud Al Sabah (Jewelry) (1 day)</label><br />
			<label>
            <input type="radio" name="MorningW" value="Asad Faulwell (Arabesque Mixed Media)" id="MorningW_6" class="radioBtn" />
            Asad Faulwell (Arabesque Mixed Media)</label><br />                        
			<span class="radioRequiredMsg">Please make a selection.</span></span></td>
          </td>
        </tr>
      </table>
	</td>
  </tr>
  <tr>
    <td><div id="afternoon_box" style="visibility:hidden;height:0;overflow:hidden;">
      <label>Afternoon Workshops (3 consecutive afternoons)</label>
      <table width="400" id="AfternoonW">
        <tr>
          <td>     
            <span id="spryradio2">
          <label>
            <input type="radio" name="AfternoonW" value="Alfred Tarazi (Mixed Media)" id="AfternoonW_0" class="radioBtn" />
            Alfred Tarazi (Mixed Media)</label><br />
			<label>
            <input type="radio" name="AfternoonW" value="Pascal Zoghbi (Arabic Type)" id="AfternoonW_1" class="radioBtn" />
            Pascal Zoghbi (Arabic Type)</label><br />
			<label>
            <input type="radio" name="AfternoonW" value="Osama El Sid (Photography technique)" id="AfternoonW_2" class="radioBtn" />
            Osama El Sid (Photography technique)</label><br />
			<label>
            <input type="radio" name="AfternoonW" value="Rana Al Salam (Branding)" id="AfternoonW_3" class="radioBtn" />
            Rana Al Salam (Branding)</label><br />
			<label>
            <input type="radio" name="AfternoonW" value="WTD MAG (21-22) only" id="AfternoonW_4" class="radioBtn" />
            WTD MAG (21-22) only</label><br />
          <span class="radioRequiredMsg">Please make a selection.</span></span></td>
        </tr>
      </table></div>    
    </td>
  </tr>
  <tr>
    <td>

    <input type="submit" NAME="SubButL" value="Pay Now!"></td>
  </tr>   
</table>

</form>
       
	<!-- **************************************************************************************** -->   

			</td>
    
            
	        <td class="sidebarSize"> 
            
            <table style="height:100%;">

<tr><td style="text-align:center;vertical-align:top;">             
<!-- sidebar1-->
<?php include('parts/sidebar1.php');?>
</td></tr>

<tr><td  style="text-align:center;">
<!-- sidebar2-->
<?php include('parts/sidebar2.php');?>
</td></tr>


</table>


			</td>
          </tr>
          
          
      </table>
      
      
	    <!--section03-->   
        <table class="section">
    <tr>
    <td class="mainSize" style="vertical-align:top;">


<!-- footermenu-->
<?php include('parts/footermenu.php');?>

		
    </td>        

    
    <td class="sidebarSize footer-side" >
<!--
	<div class="footerNull">
osuere mollis. Mauris aliquet elementum dapibus. Mauris rhoncus felis sed enim</div>-->
    </td></tr></table>
    
</td></tr></table>


	<!-- foot-->            




<!--temp-->




	
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "email");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "phone_number", {format:"phone_custom"});
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
var spryradio1 = new Spry.Widget.ValidationRadio("spryradio1");
var spryradio2 = new Spry.Widget.ValidationRadio("spryradio2");
</script>

</body>

</html>