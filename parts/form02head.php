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

  <link rel="author" href="humans.txt" />
  <link rel="stylesheet" href="css/temp.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style.css">



<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />

<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />


<script src="SpryAssets/SpryValidationCheckbox.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationCheckbox.css" rel="stylesheet" type="text/css" />


<script>


function copy() {
	if (document.getElementById("PACKAGE").value=='3d2wd0') {
		
		document.getElementById("morning_box").style.visibility = 'visible';
		document.getElementById("morning_box").style.height = '173px';
		document.getElementById("morning_box").style.overflow = 'hidden';	
		
		document.getElementById("amount").value = 82000;
		
		document.getElementById("afternoon_box").style.visibility = 'visible';
		document.getElementById("afternoon_box").style.height = '131px';
		document.getElementById("afternoon_box").style.overflow = 'hidden';
		
		
		document.getElementById("time_div").style.visibility = 'hidden';
		document.getElementById("time_div").style.height = '0px';
		document.getElementById("time_div").style.overflow = 'hidden';		
        
        
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
						
				
	} else if (document.getElementById("PACKAGE").value=='3d1wd0') {
		
		document.getElementById("morning_box").style.visibility = 'hidden';	
		document.getElementById("morning_box").style.height = '0px';
		document.getElementById("morning_box").style.overflow = 'hidden';	
		
		document.getElementById("amount").value = 46000;
				
		document.getElementById("afternoon_box").style.visibility = 'hidden';
		document.getElementById("afternoon_box").style.height = '0px';
		document.getElementById("afternoon_box").style.overflow = 'hidden';
		
		
		document.getElementById("time_div").style.visibility = 'visible';
		document.getElementById("time_div").style.height = '30px';
		document.getElementById("time_div").style.overflow = 'hidden';		
        
        
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
					
		
	} else if (document.getElementById("PACKAGE").value=='3d0wd0') {
		
		document.getElementById("morning_box").style.visibility = 'hidden';
		document.getElementById("morning_box").style.height = '0px';
		document.getElementById("morning_box").style.overflow = 'hidden';	
		
		document.getElementById("amount").value = 11000;
				
		document.getElementById("afternoon_box").style.visibility = 'hidden';
		document.getElementById("afternoon_box").style.height = '0px';
		document.getElementById("afternoon_box").style.overflow = 'hidden';	
		
		
		document.getElementById("time_div").style.visibility = 'hidden';	
		document.getElementById("time_div").style.height = '0px';
		document.getElementById("time_div").style.overflow = 'hidden';		
        
        
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
		  			
	} else if (document.getElementById("PACKAGE").value=='0d1wd0') {
		
		document.getElementById("morning_box").style.visibility = 'hidden';	
		document.getElementById("morning_box").style.height = '0px';
		document.getElementById("morning_box").style.overflow = 'hidden';	
		
		document.getElementById("amount").value = 39000;
				
		document.getElementById("afternoon_box").style.visibility = 'hidden';
		document.getElementById("afternoon_box").style.height = '0px';
		document.getElementById("afternoon_box").style.overflow = 'hidden';
		
		
		document.getElementById("time_div").style.visibility = 'visible';
		document.getElementById("time_div").style.height = '30px';
		document.getElementById("time_div").style.overflow = 'hidden';		
        
        
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
		  			
	}	 else if (document.getElementById("PACKAGE").value=='1d0wd1') {
		
		document.getElementById("morning_box").style.visibility = 'hidden';
		document.getElementById("morning_box").style.height = '0px';
		document.getElementById("morning_box").style.overflow = 'hidden';	
		
		document.getElementById("amount").value = 20000;
				
		document.getElementById("afternoon_box").style.visibility = 'hidden';
		document.getElementById("afternoon_box").style.height = '0px';
		document.getElementById("afternoon_box").style.overflow = 'hidden';	
		
		
		document.getElementById("time_div").style.visibility = 'hidden';	
		document.getElementById("time_div").style.height = '0px';
		document.getElementById("time_div").style.overflow = 'hidden';		
        
        
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
					
	} 	else if (document.getElementById("PACKAGE").value=='1d0wd2') {
		
		document.getElementById("morning_box").style.visibility = 'hidden';
		document.getElementById("morning_box").style.height = '0px';
		document.getElementById("morning_box").style.overflow = 'hidden';	
		
		document.getElementById("amount").value = 20000;
				
		document.getElementById("afternoon_box").style.visibility = 'hidden';
		document.getElementById("afternoon_box").style.height = '0px';
		document.getElementById("afternoon_box").style.overflow = 'hidden';	
		
		
		document.getElementById("time_div").style.visibility = 'hidden';	
		document.getElementById("time_div").style.height = '0px';
		document.getElementById("time_div").style.overflow = 'hidden';		
        
        
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
		   			
	} else if (document.getElementById("PACKAGE").value=='1d0wd3') {
		
		document.getElementById("morning_box").style.visibility = 'hidden';
		document.getElementById("morning_box").style.height = '0px';
		document.getElementById("morning_box").style.overflow = 'hidden';	
		
		document.getElementById("amount").value = 20000;
				
		document.getElementById("afternoon_box").style.visibility = 'hidden';
		document.getElementById("afternoon_box").style.height = '0px';
		document.getElementById("afternoon_box").style.overflow = 'hidden';	
		
		
		document.getElementById("time_div").style.visibility = 'hidden';	
		document.getElementById("time_div").style.height = '0px';
		document.getElementById("time_div").style.overflow = 'hidden';		
        
        
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
}


</script>

<script src="http://code.jquery.com/jquery-1.8.1.js"></script>

<script type="text/javascript">
		$(document).ready(function(e) {
        $(function(){
            //initially hide the textbox
            $("#other_reason").hide();
            $('#hear').change(function() {
              if($(this).find('option:selected').val() == "other"){
                $("#other_reason").show();
                $("#other_reason").attr('name') = "hear";
              }else{
                $("#other_reason").hide();
                $("#other_reason").attr('name') = "hear_other";
              }
            });
            $("#other_reason").keyup(function(ev){
                  var othersOption = $('#hear').find('option:selected');
                  if(othersOption.val() == "other"){
                    ev.preventDefault();
                    //change the selected drop down text
                    $(othersOption).html($("#other_reason").val());
                  } 
            });
        });            
        });

    </script>  
</head>
