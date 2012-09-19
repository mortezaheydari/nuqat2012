<? ob_start(); ?>

<?php require_once('Connections/Nuqat.php'); ?>

<?php require_once('connection/nuqat.php'); ?>



<!-- 
  -	paymentTestForm.php
  -		Description: 
  - Submit a payment transaction to the BANQUE AUDI PAYMENT SERVER.
  - Retrieves a payment transaction status from the BANQUE AUDI PAYMENT SERVER.
  -
  -
  - @AUTHOR TAGLOGIC OFFSHORE 
  -
  - NOTE: IMPROPER USE OF THIS CODE MIGHT LEAD TO SYSTEM MALFUNCTION AND INSTABILITY.
  -		TAGLOGIC OFFSHORE IS NOT HELD RESPONSIBLE FOR ANY MISUSE OF THIS CODE.
  -		PLEASE CONSULT WITH TAGLOGIC OFFSHORE FOR ANY QUESTIONS / SUGGESTIONS / CHANGES to this code.
  - COPYRIGHT 2007
-->
<?



	$SECURE_SECRET = "CDD35B6C891BC75EB49197A2574F46A8";
	// if the form is submitted undergo the below procedures
	if (isset($_POST['accessCode']))
	{
		ksort($_POST);
		$md5HashData = $SECURE_SECRET;
		
		foreach($_POST as $key => $value) 
		{
			
		    // create the md5 input and URL leaving out any fields that have no value
		    if (strlen($value) > 0 && ($key == 'accessCode' || $key == 'merchTxnRef' || $key == 'merchant' || $key == 'orderInfo' || $key == 'amount' || $key == 'returnURL')) {
		        print 'Key: '.$key.'  Value: '.$value."<br>";
		        // this ensures the first paramter of the URL is preceded by the '?' char
		        if ($appendAmp == 0) 
		        {
		            $vpcURL .= urlencode($key) . '=' . urlencode($value);
		            $appendAmp = 1;
		        } else {
		            $vpcURL .= '&' . urlencode($key) . "=" . urlencode($value);
		        }
		        $md5HashData .= $value;
		    }
		}	
		$newHash .= $vpcURL."&vpc_SecureHash=" . strtoupper(md5($md5HashData));
/*		echo "<script>location.href='https://gw1.audicards.com/TPGWeb/payment/prepayment.action?$newHash'</script>";*/
	    exit;
		
	}

		$txnResponseCode = "";
	


?>



<?
//check if this page is being redirected from payment client thus carrying the field vpc_TxnResponseCode
if (isset($_GET['vpc_TxnResponseCode']))
{
	//function to map each response code number to a text message	
	function getResponseDescription($responseCode) 
	{
	    switch ($responseCode) {
	        case "0" : $result = "Transaction Successful"; break;
	        case "?" : $result = "Transaction status is unknown"; break;
	        case "1" : $result = "Unknown Error"; break;
	        case "2" : $result = "Bank Declined Transaction"; break;
	        case "3" : $result = "No Reply from Bank"; break;
	        case "4" : $result = "Expired Card"; break;
	        case "5" : $result = "Insufficient funds"; break;
	        case "6" : $result = "Error Communicating with Bank"; break;
	        case "7" : $result = "Payment Server System Error"; break;
	        case "8" : $result = "Transaction Type Not Supported"; break;
	        case "9" : $result = "Bank declined transaction (Do not contact Bank)"; break;
	        case "A" : $result = "Transaction Aborted"; break;
	        case "C" : $result = "Transaction Cancelled"; break;
	        case "D" : $result = "Deferred transaction has been received and is awaiting processing"; break;
	        case "E" : $result = "Invalid Credit Card"; break;
	        case "F" : $result = "3D Secure Authentication failed"; break;
	        case "I" : $result = "Card Security Code verification failed"; break;
	        case "G" : $result = "Invalid Merchant"; break;
	        case "L" : $result = "Shopping Transaction Locked (Please try the transaction again later)"; break;
	        case "N" : $result = "Cardholder is not enrolled in Authentication scheme"; break;
	        case "P" : $result = "Transaction has been received by the Payment Adaptor and is being processed"; break;
	        case "R" : $result = "Transaction was not processed - Reached limit of retry attempts allowed"; break;
	        case "S" : $result = "Duplicate SessionID (OrderInfo)"; break;
	        case "T" : $result = "Address Verification Failed"; break;
	        case "U" : $result = "Card Security Code Failed"; break;
	        case "V" : $result = "Address Verification and Card Security Code Failed"; break;
	        case "X" : $result = "Credit Card Blocked"; break;
	        case "Y" : $result = "Invalid URL"; break;                
	        case "B" : $result = "Transaction was not completed"; break;                
	        case "M" : $result = "Please enter all required fields"; break;                
	        case "J" : $result = "Transaction already in use"; break;
	        case "BL" : $result = "Card Bin Limit Reached"; break;                
	        case "CL" : $result = "Card Limit Reached"; break;                
	        case "LM" : $result = "Merchant Amount Limit Reached"; break;                
	        case "Q" : $result = "IP Blocked"; break;                
	        case "R" : $result = "Transaction was not processed - Reached limit of retry attempts allowed"; break;                
	        case "Z" : $result = "Bin Blocked"; break;

	        default  : $result = "Unable to be determined"; 
	    }
	    return $result;
	}
	
	//function to display a No Value Returned message if value of field is empty
	function null2unknown($data) 
	{
	    if ($data == "") 
	        return "No Value Returned";
	     else 
	        return $data;
	} 		
	//get secure hash value of merchant	
	//get the secure hash sent from payment client
	$vpc_Txn_Secure_Hash = addslashes($_GET["vpc_SecureHash"]);
	unset($_GET["vpc_SecureHash"]); 
	ksort($_GET);
	// set a flag to indicate if hash has been validated
	$errorExists = false;
	//check if the value of response code is valid
	if (strlen($SECURE_SECRET) > 0 && addslashes($_GET["vpc_TxnResponseCode"]) != "7" && addslashes($_GET["vpc_TxnResponseCode"]) != "No Value Returned") 
	{
		//creat an md5 variable to be compared with the passed transaction secure hash to check if url has been tampered with or not
	    $md5HashData = $SECURE_SECRET;

		//creat an md5 variable to be compared with the passed transaction secure hash to check if url has been tampered with or not
	    $md5HashData_2 = $SECURE_SECRET;

	    // sort all the incoming vpc response fields and leave out any with no value
	    foreach($_GET as $key => $value) 
	    {
	        if ($key != "vpc_SecureHash" && strlen($value) > 0 && $key != 'action' ) 
	        {
				$hash_value = str_replace(" ",'+',$value);
				$hash_value = str_replace("%20",'+',$hash_value);
				$md5HashData_2 .= $value;
	            $md5HashData .= $hash_value;
	            
	        }
	    }

	    //if transaction secure hash is the same as the md5 variable created 
	    if ((strtoupper($vpc_Txn_Secure_Hash) == strtoupper(md5($md5HashData)) || strtoupper($vpc_Txn_Secure_Hash) == strtoupper(md5($md5HashData_2))))
	    {
	        $hashValidated = "<b>CORRECT</b>";
	    } 
	    else 
	    {
	        $hashValidated = "<b>INVALID HASH</b>";
	        $errorExists = true;
	    }
	} 
	else 
	{
	   	$hashValidated = "<FONT color='orange'><b>Not Calculated - No 'SECURE_SECRET' present.</b></FONT>";
	}
	//the the fields passed from the url to be displayed
	$amount          = null2unknown(addslashes($_GET["amount"])/100);
	$locale          = null2unknown(addslashes($_GET["vpc_Locale"]));
	$batchNo         = null2unknown(addslashes($_GET["vpc_BatchNo"]));
	$command         = null2unknown(addslashes($_GET["vpc_Command"]));
	$message         = null2unknown(addslashes($_GET["vpc_Message"]));
	$version         = null2unknown(addslashes($_GET["vpc_Version"]));
	$cardType        = null2unknown(addslashes($_GET["vpc_Card"]));
	$orderInfo       = null2unknown(addslashes($_GET["orderInfo"]));
	$receiptNo       = null2unknown(addslashes($_GET["vpc_ReceiptNo"]));
	$merchantID      = null2unknown(addslashes($_GET["merchant"]));
	$authorizeID     = null2unknown(addslashes($_GET["vpc_AuthorizeId"]));
	$merchTxnRef     = null2unknown(addslashes($_GET["merchTxnRef"]));
	$transactionNo   = null2unknown(addslashes($_GET["vpc_TransactionNo"]));
	$acqResponseCode = null2unknown(addslashes($_GET["vpc_AcqResponseCode"]));
	$txnResponseCode = null2unknown(addslashes($_GET["vpc_TxnResponseCode"]));
	
	// Show 'Error' in title if an error condition
	$errorTxt = "";
	
	// Show this page as an error page if vpc_TxnResponseCode equals '7'
	if ($txnResponseCode == "7" || $txnResponseCode == "No Value Returned" || $errorExists) {
	    $errorTxt = "Error ";
	}
	// This is the display title for 'Receipt' page 
	?>
			<!-- end branding table -->
	        <!-- End Branding Table -->
<table width="85%" align="center" cellpadding="5" border="0">
	            <tr>
	                <td align="right"><b>Hash Validity:</b></td>
	                <td class="errorMsg"><?=$hashValidated?></td>
	            </tr>
	        
	            <tr>
	                <td align="right"><b>Merchant Transaction Reference: </b></td>
	                <td><?=$merchTxnRef?></td>
	            </tr>
	            <tr>
	                <td align="right"><b>Merchant ID: </b></td>
	                <td><?=$merchantID?></td>
	            </tr>
	            <tr>
	                <td align="right"><b>Order Information: </b></td>
	                <td><?=$orderInfo?></td>
	            </tr>
	            <tr>
	                <td align="right"><b>Purchase Amount: </b></td>
	                <td><?=$amount?></td>
	            </tr>
	            <tr>
	                <td colspan="2" align="center">
	                <hr />
	                </td>
	            </tr>
	            
	            <tr>
	                <td colspan="2" align="center">
	                    Fields above are the request values returned.<br>
	                    Fields below are the response fields for a Standard Transaction.<br>
	                </td>
	            </tr>
	            <tr>
	                <td colspan="2" align="center">
	                <hr />
	                </td>
	            </tr>            
	            <tr>
	                <td align="right"><b>VPC Transaction Response Code: </b></td>
	                <td><?=$txnResponseCode?></td>
	            </tr>
	            <tr>
	                <td align="right"><b>Transaction Response Code Description:</b></td>
	                <td class="errorMsg"><?=getResponseDescription($txnResponseCode)?></td>
	            </tr>
	            <tr>
	                <td align="right"><b>Message: </b></td>
	                <td><?=$message?></td>
	            </tr>
	<?
	    // only display the following fields if not an error condition
	    if ($txnResponseCode != "7" && $txnResponseCode != "No Value Returned") 
	    { 
	?>
	            <tr>
	                <td align="right"><b>Receipt Number: </b></td>
	                <td><?=$receiptNo?></td>
	            </tr>
	            <tr>
	                <td align="right"><b>Transaction Number: </b></td>
	                <td><?=$transactionNo?></td>
	            </tr>
	            <tr>
	                <td align="right"><b>Acquirer Response Code: </b></td>
	                <td><?=$acqResponseCode?></td>
	            </tr>
	            <tr>
	                <td align="right"><b>Bank Authorization ID: </b></td>
	                <td><?=$authorizeID?></td>
	            </tr>
	            <tr>
	                <td align="right"><b>Batch Number: </b></td>
	                <td><?=$batchNo?></td>
	            </tr>
	            <tr>
	                <td align="right"><b>Card Type: </b></td>
	                <td><?=$cardType?></td>
	            </tr>	
	            <tr>
	                <td align="right"><b>Merchant Transaction Reference: </b></td>
	                <td><?=$merchTxnRef?></td>
	            </tr>                
	            <tr>
	                <td colspan="2"><HR /></td>
	            </tr>
	<? 
	} 
	?>    
			</table>
<?
}
?>

<?
if ($txnResponseCode=="0")
{

$query = "INSERT INTO bank_info (receiptNo, transactionNo, acqResponseCode, authorizeID, batchNo, cardType, merchTxnRef) VALUES ('".$receiptNo."', '".$transactionNo."', '".$acqResponseCode."', '".$authorizeID."', '".$batchNo."', '".$cardType."', '".$merchTxnRef."')";

mysql_select_db($database_nuqat,$nuqat);
mysql_query($query);



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

$colname_register = "-1";
if (isset($merchTxnRef)) {
  $colname_register = $merchTxnRef;
}
mysql_select_db($database_Nuqat, $Nuqat);
$query_register = sprintf("SELECT * FROM registeration WHERE merchTxnRef = %s", GetSQLValueString($colname_register, "int"));
$register = mysql_query($query_register, $Nuqat) or die(mysql_error());
$row_register = mysql_fetch_assoc($register);
$totalRows_register = mysql_num_rows($register);
$email_message = "";


$email_message = "Dear Nuqateer, \r\n\r\nThank you for registering. \r\n \r\n To VIEW and PRINT your e-ticket please click on the link below: \r\n \r\n ";
$email_message .= "http://nuqat.me/etickets.php?merchTxnRef=".$row_register['merchTxnRef']."\r\n \r\n ";
$email_message .= "Make sure you have a print out of your e-ticket when you attend so you can collect your PASS tag. \r\n\r\nLooking forward to see you. \r\n \r\n Best regards,\r\n \r\n Nuqat Team\r\n";


$headers = 'From: info@nuqat.me';
	

@mail($row_register['email'], "Nuqat Registeration", $email_message, $headers);

@mail("info@nuqat.me", "Full Name: ".$row_register['FName']." ".$row_register['LName'], $email_message, $headers);

@mail("wakpot@gmail.com", "Full Name: ".$row_register['FName']." ".$row_register['LName'], $email_message, $headers);


header("Location: http://nuqat.me/regconf.php?merchTxnRef=".$row_register['merchTxnRef']);

mysql_free_result($register);
}
?>

<? ob_flush(); ?>