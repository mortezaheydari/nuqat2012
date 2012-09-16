<table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><h1>Register Now</h1></td>
  </tr>
  <tr>
    <td><form action="t-info.php" method="post">
<!-- The secure hash hidden field -->

    <!-- get user input -->
    
    
    

<div style="height:0px;overflow:hidden;">
<input name="accessCode" value="2297AC40" size="20" maxlength="8"/>
<input name="merchTxnRef" value="<?php echo $TrnRef ?>" size="20" maxlength="40"/>
<input name="merchant" value="834501" size="20" maxlength="16"/>
<input name="orderInfo" value="<?php echo $OrderID ?>" size="20" maxlength="34"/>
<input name="amount" id="amount" value="" maxlength="10"/>
<input name="returnURL" size="65" style="visibility:hidden;" value="http://www.nuqat.me/paymentTestForm.php?action=py?" maxlength="250"/></div>
    
    <!-- get user input -->    




<table width="600" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
    	<table>
        	<tr>
            	<td width="180">
   	  <label for="EMAIL">Email Address  <span>*</span></label></td><td>
   	  <span id="sprytextfield2">
      <input type="text" value="" name="EMAIL" class="required email" id="EMAIL" style="width:261px;" />
      <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td></tr></table></td>
  </tr>
  <tr>
    <td>	
    	<table>
        	<tr>
            	<td width="180">    
   	  <label for="FNAME">First Name  <span>*</span></label></td><td>
   	  <span id="sprytextfield1">
   	  <input type="text" value="" name="FNAME" class="required" id="FNAME" style="width:261px;" />
   	  <span class="textfieldRequiredMsg">A value is required.</span></span></td></tr></table></td>
  </tr>
  <tr>
    <td>	
    	<table>
        	<tr>
            	<td width="180">    
   	  <label for="LNAME">Last Name  <span>*</span></label></td><td>
   	  <span id="sprytextfield3">
   	  <input type="text" value="" name="LNAME" class="required" id="LNAME" style="width:261px;" />
   	  <span class="textfieldRequiredMsg">A value is required.</span></span></td></tr></table></td>
  </tr>
  <tr>
    <td>	
    	<table>
        	<tr>
            	<td width="180">    
   	  <label for="PHONE">Mobile Phone  <span>*</span></label></td><td>
   	  <span id="sprytextfield4">
      <input type="text" name="PHONE" class="required" value="" id="PHONE" style="width:261px;" />
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
    	  <option value="3d2wd0">3 days Lectures + 2 workshops = 1,100$</option>
    	  <option value="3d1wd0">3 days + 1 workshop = 850$</option>
    	  <option value="3d0wd0">3 days Lectures = 500$</option>
          <option value="0d1wd0">1 Workshop = 500$</option>
    	  <option value="1d0wd1">Day 1 Lectures = 200$</option>
    	  <option value="1d0wd2">Day 2 Lectures = 200$</option>
    	  <option value="1d0wd3">Day 3 Lectures = 200$</option>
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
        document.getElementById('MorningW_6').checked = false;        
        document.getElementById('AfternoonW_0').checked = false;        
        document.getElementById('AfternoonW_1').checked = false;        
        document.getElementById('AfternoonW_2').checked = false;     
        document.getElementById('AfternoonW_3').checked = false;  
        document.getElementById('AfternoonW_4').checked = false;    
        document.getElementById('AfternoonW_5').checked = false;                       
        
					
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
        document.getElementById('MorningW_6').checked = false;        
        document.getElementById('AfternoonW_0').checked = false;        
        document.getElementById('AfternoonW_1').checked = false;        
        document.getElementById('AfternoonW_2').checked = false;     
        document.getElementById('AfternoonW_3').checked = false;  
        document.getElementById('AfternoonW_4').checked = false;    
        document.getElementById('AfternoonW_5').checked = false;           					
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
    <label>Morning Workshops (each workshop is for 3 consecutive Mornings)</label>
    <table width="400" id="MorningW">
        <tr>
          <td>
          <label>
            <input type="radio" onclick="" name="MorningW" value="Younes Duret (Product)" id="MorningW_0" class="radioBtn" />
            Younes Duret (Product)</label><br />
			<label style="height:0;overflow:hidden;">
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
            <input type="radio" name="MorningW" value="Asad Faulwell (Arabesque Mixed Media)" id="MorningW_6" class="radioBtn" />
            Asad Faulwell (Arabesque Mixed Media)</label><br /></td>
          </td>
        </tr>
      </table>
	</td>
  </tr>
  <tr>
    <td><div id="afternoon_box" style="visibility:hidden;height:0;overflow:hidden;">
      <label>Afternoon Workshops (each workshop is for 3 consecutive Afternoons)</label>
      <table width="400" id="AfternoonW">
        <tr>
          <td>
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
            <input type="radio" name="AfternoonW" value="Sh. Alanoud Al Sabah (Jewelry) (20th) + WTD MAG (21st-22nd) only" id="AfternoonW_4" class="radioBtn" />
            Sh. Alanoud Al Sabah(Jewelry)(20th) + WTD MAG(21st-22nd) only</label><br /></td>
        </tr>
      </table></div>    
    </td>
  </tr>
  <tr>
    <td style="padding:5px 0 5px 0;">

      <span id="sprycheckbox1">
      <input type="checkbox" name="Terms" id="Terms" />
      <label for="Terms">I agree to the Nuqat <a class="nav-twotwelve" target="_blank"   href="terms.php">Terms</a></label>
      <span class="checkboxRequiredMsg">Please Agree to the terms.</span></span></td>
  </tr>   
  <tr>
    <td>

    <input type="submit" class="SubmitBtn" NAME="SubButL" value="Register"></td>
  </tr>   
  
  <tr>
    <td><p>Group packages are available. Please email us on <a class="nav-twotwelve" target="_blank" href="mailto:info@nuqat.me">info@nuqat.me</a><p></td>
  </tr>   
</table>

</form></td>
  </tr>
</table>






    
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "email");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "phone_number", {format:"phone_custom"});
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
var sprycheckbox1 = new Spry.Widget.ValidationCheckbox("sprycheckbox1");
</script>