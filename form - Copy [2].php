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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
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
    
    
    

<div style="height:0px;overflow:hidden;">
<input name="accessCode" value="9AF2CCEE" size="20" maxlength="8"/>
<input name="merchTxnRef" value="<?php echo $TrnRef ?>" size="20" maxlength="40"/>
<input name="merchant" value="TEST834501" size="20" maxlength="16"/>
<input name="orderInfo" value="101483" size="20" maxlength="34"/>
<input name="amount" id="amount" value="" maxlength="10"/>
<input name="returnURL" size="65" value="http://localhost/nuqat2012/paymentTestForm.php?action=py?" maxlength="250"/></div>
    
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