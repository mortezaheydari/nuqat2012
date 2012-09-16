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

</style>
</head>

<body>
<table height="800" style="background-color:#fff;" width="450" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td style="text-align:center;"><img src="img/etickets/topheader.png" width="238" height="119" /></td>
  </tr>
  <tr>
    <td style="text-align:center;padding-top:10px;"><img src="img/etickets/nuqatheader.png" width="159" height="174" /></td>
  </tr>
  <tr>
    <td height="40">&nbsp;</td>
  </tr>
  <tr>
    <td style="padding:0 0 0px 50px;font-family: 'nuqat';"><p>FULL NAME: <?php echo $row_ticket['FName']." ".$row_ticket['LName']; ?></p></td>
  </tr>
  <tr>
    <td style="padding:0px 0 0 50px;font-family: 'nuqat';"><p>EMAIL: <?php echo $row_ticket['email']; ?></p></td>
  </tr>
  <tr>
    <td style="padding:0px 0 0 50px;font-family: 'nuqat';"><p>MOBILE: <?php echo $row_ticket['Mobile']; ?></p></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="padding:0px 0 0px 50px;font-family: 'nuqat';"><p>PACKAGE: <?php 
  	if ($row_ticket['Package'] == "3d2wd0") {
		echo "Package: 3 days Lectures + 2 workshops = 1100$";
	} elseif ($row_ticket['Package'] == "3d1wd0") {
		echo "Package: 3 days + 1 workshop = 850$";
	}  elseif ($row_ticket['Package'] == "3d0wd0") {
		echo "Package: 3 days Lectures = 500$";
	}  elseif ($row_ticket['Package'] == "0d1wd0") {
		echo "Package: 1 Workshop = 500$";
	}  elseif ($row_ticket['Package'] == "1d0wd1") {
		echo "Package: Day 1 Lectures = 200$";
	}  elseif ($row_ticket['Package'] == "1d0wd2") {
		echo "Package: Day 2 Lectures = 200$";
	}  elseif ($row_ticket['Package'] == "1d0wd3") {
		echo "Package: Day 3 Lectures = 200$";
	}	
	?></p></td>
  </tr>
  <tr>
    <td style="padding:0 0 0 50px;font-family: 'nuqat';"><p>TRANSACTION REFERENCE: <?php 	echo $row_ticket['merchTxnRef'];	
	?></p></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="padding:0 0 0 50px;font-family: 'nuqat';"><p>MORNING WORKSHOP: <?php 
	
	
	if ($row_ticket['MorningW'] <> "") {
		echo $row_ticket['MorningW'];
	} else {
		echo "#";
	}	
	
	?></p></td>
  </tr>
  <tr>
    <td style="padding:0 0 0 50px;font-family: 'nuqat';"><p>AFTERNOON WORKSHOP: <?php 
	
	
	if ($row_ticket['AfternoonW'] <> "") {
		echo $row_ticket['AfternoonW'];
	} else {
		echo "#";
	}	
	
	?></p></td>
  </tr>
  <tr>
    <td height="100">&nbsp;</td>
  </tr>
  <tr>
    <td style="text-align:center;font-family: 'nuqat';">PLEASE PRINT OUT YOUR E-TICKET FOR REGISTRATION</td>
  </tr>
</table>
<?php
mysql_free_result($ticket);
?>
</body></html>