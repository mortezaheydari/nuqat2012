<script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="../SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<script src="../SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
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
      <input type="text" value="" name="EMAIL" class="required email" id="EMAIL" style="width:270px;" />
      <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td></tr></table></td>
  </tr>
  <tr>
    <td>	
    	<table>
        	<tr>
            	<td width="180">    
   	  <label for="FNAME">First Name  <span>*</span></label></td><td>
   	  <span id="sprytextfield1">
   	  <input type="text" value="" name="FNAME" class="required" id="FNAME" style="width:270px;" />
   	  <span class="textfieldRequiredMsg">A value is required.</span></span></td></tr></table></td>
  </tr>
  <tr>
    <td>	
    	<table>
        	<tr>
            	<td width="180">    
   	  <label for="LNAME">Last Name  <span>*</span></label></td><td>
   	  <span id="sprytextfield3">
   	  <input type="text" value="" name="LNAME" class="required" id="LNAME" style="width:270px;" />
   	  <span class="textfieldRequiredMsg">A value is required.</span></span></td></tr></table></td>
  </tr>
  <tr>
    <td>	
    	<table>
        	<tr>
            	<td width="180">    
   	  <label for="PHONE">Mobile Phone  <span>*</span></label></td><td>
   	  <span id="sprytextfield4">
      <input type="text" name="PHONE" class="required" value="" id="PHONE" style="width:270px;" />
      <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td></tr></table></td>
  </tr>

  <tr>
    <td>	
    	<table>
        	<tr>
            	<td width="180">    
   	  <label for="live_in">I live in  <span>*</span></label></td><td>
   	  <span id="spryselect1">
      <select name="live_in" id="live_in" class="required" style="width:270px;">
        <option value="-1" selected="selected" class="required">Select a Country</option>
        <option value="Kuwait">Kuwait</option>
        <option value="United States">United States</option>
        <option value="United Kingdom">United Kingdom</option>
        <option value="Afghanistan">Afghanistan</option>
        <option value="Albania">Albania</option>
        <option value="Algeria">Algeria</option>
        <option value="American Samoa">American Samoa</option>
        <option value="Andorra">Andorra</option>
        <option value="Angola">Angola</option>
        <option value="Anguilla">Anguilla</option>
        <option value="Antarctica">Antarctica</option>
        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
        <option value="Argentina">Argentina</option>
        <option value="Armenia">Armenia</option>
        <option value="Aruba">Aruba</option>
        <option value="Australia">Australia</option>
        <option value="Austria">Austria</option>
        <option value="Azerbaijan">Azerbaijan</option>
        <option value="Bahamas">Bahamas</option>
        <option value="Bahrain">Bahrain</option>
        <option value="Bangladesh">Bangladesh</option>
        <option value="Barbados">Barbados</option>
        <option value="Belarus">Belarus</option>
        <option value="Belgium">Belgium</option>
        <option value="Belize">Belize</option>
        <option value="Benin">Benin</option>
        <option value="Bermuda">Bermuda</option>
        <option value="Bhutan">Bhutan</option>
        <option value="Bolivia">Bolivia</option>
        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
        <option value="Botswana">Botswana</option>
        <option value="Bouvet Island">Bouvet Island</option>
        <option value="Brazil">Brazil</option>
        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
        <option value="Brunei Darussalam">Brunei Darussalam</option>
        <option value="Bulgaria">Bulgaria</option>
        <option value="Burkina Faso">Burkina Faso</option>
        <option value="Burundi">Burundi</option>
        <option value="Cambodia">Cambodia</option>
        <option value="Cameroon">Cameroon</option>
        <option value="Canada">Canada</option>
        <option value="Cape Verde">Cape Verde</option>
        <option value="Cayman Islands">Cayman Islands</option>
        <option value="Central African Republic">Central African Republic</option>
        <option value="Chad">Chad</option>
        <option value="Chile">Chile</option>
        <option value="China">China</option>
        <option value="Christmas Island">Christmas Island</option>
        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
        <option value="Colombia">Colombia</option>
        <option value="Comoros">Comoros</option>
        <option value="Congo">Congo</option>
        <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
        <option value="Cook Islands">Cook Islands</option>
        <option value="Costa Rica">Costa Rica</option>
        <option value="Cote D'ivoire">Cote D'ivoire</option>
        <option value="Croatia">Croatia</option>
        <option value="Cuba">Cuba</option>
        <option value="Cyprus">Cyprus</option>
        <option value="Czech Republic">Czech Republic</option>
        <option value="Denmark">Denmark</option>
        <option value="Djibouti">Djibouti</option>
        <option value="Dominica">Dominica</option>
        <option value="Dominican Republic">Dominican Republic</option>
        <option value="Ecuador">Ecuador</option>
        <option value="Egypt">Egypt</option>
        <option value="El Salvador">El Salvador</option>
        <option value="Equatorial Guinea">Equatorial Guinea</option>
        <option value="Eritrea">Eritrea</option>
        <option value="Estonia">Estonia</option>
        <option value="Ethiopia">Ethiopia</option>
        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
        <option value="Faroe Islands">Faroe Islands</option>
        <option value="Fiji">Fiji</option>
        <option value="Finland">Finland</option>
        <option value="France">France</option>
        <option value="French Guiana">French Guiana</option>
        <option value="French Polynesia">French Polynesia</option>
        <option value="French Southern Territories">French Southern Territories</option>
        <option value="Gabon">Gabon</option>
        <option value="Gambia">Gambia</option>
        <option value="Georgia">Georgia</option>
        <option value="Germany">Germany</option>
        <option value="Ghana">Ghana</option>
        <option value="Gibraltar">Gibraltar</option>
        <option value="Greece">Greece</option>
        <option value="Greenland">Greenland</option>
        <option value="Grenada">Grenada</option>
        <option value="Guadeloupe">Guadeloupe</option>
        <option value="Guam">Guam</option>
        <option value="Guatemala">Guatemala</option>
        <option value="Guinea">Guinea</option>
        <option value="Guinea-bissau">Guinea-bissau</option>
        <option value="Guyana">Guyana</option>
        <option value="Haiti">Haiti</option>
        <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
        <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
        <option value="Honduras">Honduras</option>
        <option value="Hong Kong">Hong Kong</option>
        <option value="Hungary">Hungary</option>
        <option value="Iceland">Iceland</option>
        <option value="India">India</option>
        <option value="Indonesia">Indonesia</option>
        <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
        <option value="Iraq">Iraq</option>
        <option value="Ireland">Ireland</option>
        <option value="Italy">Italy</option>
        <option value="Jamaica">Jamaica</option>
        <option value="Japan">Japan</option>
        <option value="Jordan">Jordan</option>
        <option value="Kazakhstan">Kazakhstan</option>
        <option value="Kenya">Kenya</option>
        <option value="Kiribati">Kiribati</option>
        <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
        <option value="Korea, Republic of">Korea, Republic of</option>
        <option value="Kyrgyzstan">Kyrgyzstan</option>
        <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
        <option value="Latvia">Latvia</option>
        <option value="Lebanon">Lebanon</option>
        <option value="Lesotho">Lesotho</option>
        <option value="Liberia">Liberia</option>
        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
        <option value="Liechtenstein">Liechtenstein</option>
        <option value="Lithuania">Lithuania</option>
        <option value="Luxembourg">Luxembourg</option>
        <option value="Macao">Macao</option>
        <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
        <option value="Madagascar">Madagascar</option>
        <option value="Malawi">Malawi</option>
        <option value="Malaysia">Malaysia</option>
        <option value="Maldives">Maldives</option>
        <option value="Mali">Mali</option>
        <option value="Malta">Malta</option>
        <option value="Marshall Islands">Marshall Islands</option>
        <option value="Martinique">Martinique</option>
        <option value="Mauritania">Mauritania</option>
        <option value="Mauritius">Mauritius</option>
        <option value="Mayotte">Mayotte</option>
        <option value="Mexico">Mexico</option>
        <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
        <option value="Moldova, Republic of">Moldova, Republic of</option>
        <option value="Monaco">Monaco</option>
        <option value="Mongolia">Mongolia</option>
        <option value="Montserrat">Montserrat</option>
        <option value="Morocco">Morocco</option>
        <option value="Mozambique">Mozambique</option>
        <option value="Myanmar">Myanmar</option>
        <option value="Namibia">Namibia</option>
        <option value="Nauru">Nauru</option>
        <option value="Nepal">Nepal</option>
        <option value="Netherlands">Netherlands</option>
        <option value="Netherlands Antilles">Netherlands Antilles</option>
        <option value="New Caledonia">New Caledonia</option>
        <option value="New Zealand">New Zealand</option>
        <option value="Nicaragua">Nicaragua</option>
        <option value="Niger">Niger</option>
        <option value="Nigeria">Nigeria</option>
        <option value="Niue">Niue</option>
        <option value="Norfolk Island">Norfolk Island</option>
        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
        <option value="Norway">Norway</option>
        <option value="Oman">Oman</option>
        <option value="Pakistan">Pakistan</option>
        <option value="Palau">Palau</option>
        <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
        <option value="Panama">Panama</option>
        <option value="Papua New Guinea">Papua New Guinea</option>
        <option value="Paraguay">Paraguay</option>
        <option value="Peru">Peru</option>
        <option value="Philippines">Philippines</option>
        <option value="Pitcairn">Pitcairn</option>
        <option value="Poland">Poland</option>
        <option value="Portugal">Portugal</option>
        <option value="Puerto Rico">Puerto Rico</option>
        <option value="Qatar">Qatar</option>
        <option value="Reunion">Reunion</option>
        <option value="Romania">Romania</option>
        <option value="Russian Federation">Russian Federation</option>
        <option value="Rwanda">Rwanda</option>
        <option value="Saint Helena">Saint Helena</option>
        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
        <option value="Saint Lucia">Saint Lucia</option>
        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
        <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
        <option value="Samoa">Samoa</option>
        <option value="San Marino">San Marino</option>
        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
        <option value="Saudi Arabia">Saudi Arabia</option>
        <option value="Senegal">Senegal</option>
        <option value="Serbia and Montenegro">Serbia and Montenegro</option>
        <option value="Seychelles">Seychelles</option>
        <option value="Sierra Leone">Sierra Leone</option>
        <option value="Singapore">Singapore</option>
        <option value="Slovakia">Slovakia</option>
        <option value="Slovenia">Slovenia</option>
        <option value="Solomon Islands">Solomon Islands</option>
        <option value="Somalia">Somalia</option>
        <option value="South Africa">South Africa</option>
        <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
        <option value="Spain">Spain</option>
        <option value="Sri Lanka">Sri Lanka</option>
        <option value="Sudan">Sudan</option>
        <option value="Suriname">Suriname</option>
        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
        <option value="Swaziland">Swaziland</option>
        <option value="Sweden">Sweden</option>
        <option value="Switzerland">Switzerland</option>
        <option value="Syrian Arab Republic">Syrian Arab Republic</option>
        <option value="Taiwan, Province of China">Taiwan, Province of China</option>
        <option value="Tajikistan">Tajikistan</option>
        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
        <option value="Thailand">Thailand</option>
        <option value="Timor-leste">Timor-leste</option>
        <option value="Togo">Togo</option>
        <option value="Tokelau">Tokelau</option>
        <option value="Tonga">Tonga</option>
        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
        <option value="Tunisia">Tunisia</option>
        <option value="Turkey">Turkey</option>
        <option value="Turkmenistan">Turkmenistan</option>
        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
        <option value="Tuvalu">Tuvalu</option>
        <option value="Uganda">Uganda</option>
        <option value="Ukraine">Ukraine</option>
        <option value="United Arab Emirates">United Arab Emirates</option>
        <option value="United Kingdom">United Kingdom</option>
        <option value="United States">United States</option>
        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
        <option value="Uruguay">Uruguay</option>
        <option value="Uzbekistan">Uzbekistan</option>
        <option value="Vanuatu">Vanuatu</option>
        <option value="Venezuela">Venezuela</option>
        <option value="Viet Nam">Viet Nam</option>
        <option value="Virgin Islands, British">Virgin Islands, British</option>
        <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
        <option value="Wallis and Futuna">Wallis and Futuna</option>
        <option value="Western Sahara">Western Sahara</option>
        <option value="Yemen">Yemen</option>
        <option value="Zambia">Zambia</option>
        <option value="Zimbabwe">Zimbabwe</option>
      </select>
      <span class="selectInvalidMsg">Please select a valid item.</span><span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td></tr></table></td>
  </tr>

  <tr>
    <td>	
    	<table>
        	<tr>
            	<td width="180">    
   	  <label for="address">Address  <span>*</span></label></td><td align="center"><span id="sprytextfield5">
   	  <input type="text" name="address" class="required" value="" id="address" style="width:270px" />
   	  <span class="textfieldRequiredMsg">A value is required.</span></span></td></tr></table></td>
  </tr>

  <tr>
    <td>	
    	<table>
        	<tr>
            	<td width="180">  
                
   	  <label for="hear">How did you hear about us?  <span>*</span></label></td><td><span id="spryselect2">
   	  <select name="hear" id="hear" class="required" style="width:270px;">
   	    <option value="-1">Choose one...</option>
   	    <option value="I'm a regular participant">I'm a regular participant</option>
   	    <option value="Thru a Nuqat representative">Thru a Nuqat representative</option>
   	    <option value="I'm your follower on social media">I'm your follower on social media</option>
   	    <option value="read about you in a publication">read about you in a publication</option>
   	    <option value="recommended by a friend">recommended by a friend</option>
   	    <option value="other">other</option>
 	    </select>
        <input id="other_reason" name="hear_other" type="text" placeholder="Other way" style="width:270px;" />
   	  <span class="selectInvalidMsg">Please select a valid item.</span><span class="selectRequiredMsg">Please select an item.</span></span>   	    <!-- <input type="text" name="hear_us" class="required" value="" id="hear_us_other" style="width:270px;visibility: hidden;" /> -->
  </td></tr></table></td>
  </tr>

  <tr>
    <td>	
    	<table>
        	<tr>
            	<td width="180">    
    	<label for="PACKAGE">Choose Your Package  <span>*</span></label></td><td><span id="spryselect3">
    	<select onchange="copy();" name="PACKAGE" class="required" id="PACKAGE" style="width:270px;">
    	  <option value="-1">Choose...</option>
    	  <option value="3d2wd0">3 days Lectures + 2 workshops = KD 230 (820$)</option>
    	  <option value="3d1wd0">3 days + 1 workshop = KD 130 (460$)</option>
    	  <option value="3d0wd0">3 days Lectures = KD 30 (110$)</option>
    	  <option value="0d1wd0">1 Workshop = KD 110 (390$)</option>
    	<!--  <option value="1d0wd1">Day 1 Lectures = 200$</option>
    	  <option value="1d0wd2">Day 2 Lectures = 200$</option>
    	  <option value="1d0wd3">Day 3 Lectures = 200$</option> -->
  	  </select>
    	<span class="selectInvalidMsg">Please select a valid item.</span><span class="selectRequiredMsg">Please select an item.</span></span>    	  <div id="label"></div>

    	</td></tr></table></td>
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

        document.getElementById('MorningW_2').checked = false;        
        document.getElementById('MorningW_3').checked = false;        
        document.getElementById('MorningW_4').checked = false;             
        document.getElementById('MorningW_6').checked = false;        
        document.getElementById('AfternoonW_0').checked = false;        
        document.getElementById('AfternoonW_1').checked = false;        
        document.getElementById('AfternoonW_2').checked = false;     
          
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

        document.getElementById('MorningW_2').checked = false;        
        document.getElementById('MorningW_3').checked = false;        
        document.getElementById('MorningW_4').checked = false;             
        document.getElementById('MorningW_6').checked = false;        
        document.getElementById('AfternoonW_0').checked = false;        
        document.getElementById('AfternoonW_1').checked = false;        
        document.getElementById('AfternoonW_2').checked = false;     
          
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
            <input type="radio" onclick="" name="MorningW" value="Tarek Atrissi (Type)" id="MorningW_0" class="radioBtn" />
            Tarek Atrissi (Type)</label><br />
			<label>
            <input type="radio" name="MorningW" value="Kashida (Product)" id="MorningW_2" class="radioBtn" />
            Kashida (Product)</label><br />
			<label>
            <input type="radio" name="MorningW" value="Nur Kaoukji (Fashion)" id="MorningW_3" class="radioBtn" />
            Nur Kaoukji (Fashion)</label><br />
			<label>
            <input type="radio" name="MorningW" value="Alfred Tarazi (Mixed Media)" id="MorningW_4" class="radioBtn" />
            Alfred Tarazi (Mixed Media)</label><br />
			<label>
            <input type="radio" name="MorningW" value="Rana Salam (Branding)" id="MorningW_6" class="radioBtn" />
            Rana Salam (Branding)</label><br /></td>
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
            <input type="radio" name="AfternoonW" value="Osama Esid (Photography)" id="AfternoonW_0" class="radioBtn" />
            Osama Esid (Photography)</label><br />
			<label>
            <input type="radio" name="AfternoonW" value="Pascal Zoghbi (Type)" id="AfternoonW_1" class="radioBtn" />
            Pascal Zoghbi (Type)</label><br />
			<label>
            <input type="radio" name="AfternoonW" value="Younes Duret (Product)" id="AfternoonW_2" class="radioBtn" />
            Younes Duret (Product)</label><br />
			<label>
            <input type="radio" name="AfternoonW" value="Elseed & WTD magazine & Archicamp (Graffiti & Architecture)" id="AfternoonW_4" class="radioBtn" />
            Elseed &amp; WTD magazine &amp; Archicamp (Graffiti &amp; Architecture)</label><br />
            <label>
            <input type="radio" name="AfternoonW" value="Plus Aziz (Trend Spotting)" id="AfternoonW_5" class="radioBtn" />
            Plus Aziz (Trend Spotting)</label><br /></td>
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
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1", {invalidValue:"-1"});
var sprycheckbox1 = new Spry.Widget.ValidationCheckbox("sprycheckbox1");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2", {invalidValue:"-1"});
var spryselect3 = new Spry.Widget.ValidationSelect("spryselect3", {invalidValue:"-1"});
</script>