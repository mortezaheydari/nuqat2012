<?php require_once('Connections/Nuqat.php'); ?>
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

$colname_ticket = "-1";
if (isset($_GET['merchTxnRef'])) {
  $colname_ticket = $_GET['merchTxnRef'];
}
mysql_select_db($database_Nuqat, $Nuqat);
$query_ticket = sprintf("SELECT * FROM registeration WHERE merchTxnRef = %s", GetSQLValueString($colname_ticket, "int"));
$ticket = mysql_query($query_ticket, $Nuqat) or die(mysql_error());
$row_ticket = mysql_fetch_assoc($ticket);
$totalRows_ticket = mysql_num_rows($ticket);
?>
<!DOCTYPE html>

<html>
<head>
<style>

@font-face {
	font-family: 'nuqat';
	src: url(http://nuqat.me/css/avian.ttf) format('truetype');
}
td { padding:0 0 0px 50px;font-family: 'nuqat';font-weight:bolder;font-size:0.8em; }
</style>
</head>

<body>
<table height="800" style="background-color:#fff;background:url(img/etickets/topheader.png) top center no-repeat;" width="450" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td style="text-align:center;padding-top:200px;padding-left:0;"><img src="img/etickets/nuqatheader.png" /></td>
  </tr>
  <tr>
    <td height="40">&nbsp;</td>
  </tr>
  <tr>
    <td>FULL NAME: <?php echo $row_ticket['FName']." ".$row_ticket['LName']; ?></td>
  </tr>
  <tr>
    <td>EMAIL: <?php echo $row_ticket['email']; ?></td>
  </tr>
  <tr>
    <td>MOBILE: <?php echo $row_ticket['Mobile']; ?></td>
  </tr>
  <tr>
    <td>Live In: <?php echo $row_ticket['live_in']; ?></td>
  </tr>  
  <tr>
    <td>Address: <?php echo $row_ticket['address']; ?></td>
  </tr>    
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>PACKAGE: <?php 
  	if ($row_ticket['Package'] == "3d2wd0") {
		echo "3 days Lectures + 2 workshops = KD 230 (820$)";
	} elseif ($row_ticket['Package'] == "3d1wd0") {
		echo "3 days + 1 workshop = KD 130 (460$)";
	}  elseif ($row_ticket['Package'] == "3d0wd0") {
		echo "3 days Lectures = KD 30 (110$)";
	}  elseif ($row_ticket['Package'] == "0d1wd0") {
		echo "1 Workshop = KD 110 (390$)";
	} /* elseif ($row_ticket['Package'] == "1d0wd1") {
		echo "Package: Day 1 Lectures = 200$";
	}  elseif ($row_ticket['Package'] == "1d0wd2") {
		echo "Package: Day 2 Lectures = 200$";
	}  elseif ($row_ticket['Package'] == "1d0wd3") {
		echo "Package: Day 3 Lectures = 200$";
	} */	
	?></td>
  </tr>
  <tr>
    <td>TRANSACTION REFERENCE: <?php 	echo $row_ticket['merchTxnRef'];	
	?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>MORNING WORKSHOP: <?php 
	
	
	if ($row_ticket['MorningW'] <> "") {
		echo $row_ticket['MorningW'];
	} else {
		echo "#";
	}	
	
	?></td>
  </tr>
  <tr>
    <td>AFTERNOON WORKSHOP: <?php 
	
	
	if ($row_ticket['AfternoonW'] <> "") {
		echo $row_ticket['AfternoonW'];
	} else {
		echo "#";
	}	
	
	?></td>
  </tr>
  <tr>
    <td height="100">&nbsp;</td>
  </tr>
  <tr>
    <td style="text-align:center;padding-left:0;color:#E94E1B;">PLEASE PRINT OUT YOUR E-TICKET FOR REGISTRATION</td>
  </tr>
</table>
<?php
mysql_free_result($ticket);
?>
</body></html>