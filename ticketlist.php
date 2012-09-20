<?php require_once('Connections/Nuqat.php'); ?>

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

$colname_register = "-1";
if (isset($merchTxnRef)) {
  $colname_register = $merchTxnRef;
}
mysql_select_db($database_Nuqat, $Nuqat);
$query_register = sprintf("SELECT * FROM bank_info b1 INNER JOIN registeration r1 ON b1.merchTxnRef=r1.merchTxnRef WHERE Date >= '2012-09-18'");
$register = mysql_query($query_register, $Nuqat) or die(mysql_error());
$row_register = mysql_fetch_assoc($register);
$totalRows_register = mysql_num_rows($register);

?>

<style type="text/css" media="screen">
@font-face {
	font-family: 'nuqat';
	src: url(css/avian.ttf) format('truetype'); /* Safari, Android, iOS */
}

table {
	font-family: 'nuqat', sans-serif;
}

	td {
		border:solid 1px #808080;color: #1D1D1B;
		padding: 5px;
	}
	
	th {
		background-color: #fff; color: #1D1D1B;
		border: solid 1px #808080;
		padding: 5px;
		font-size: 2em;
	}
</style>
<table border="0" cellspacing="0" cellpadding="0">
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Date</th>
		<th>Link</th>
	</tr>
	<tr>
		<td><?php echo $row_register['FName']; ?> <?php echo $row_register['LName']; ?></td>
		<td><?php echo $row_register['email']; ?></td>	
		<td><?php echo $row_register['Date']; ?></td>
		<td><a href="http://nuqat.me/etickets.php?merchTxnRef=<?php echo $row_register['merchTxnRef']; ?>" target="_blank">http://nuqat.me/etickets.php?merchTxnRef=<?php echo $row_register['merchTxnRef']; ?></a></td>
	</tr>
<?php while($result = mysql_fetch_array($register,MYSQL_BOTH)) { ?>
	<tr>
		<td><?php echo $result['FName']; ?> <?php echo $result['LName']; ?></td>
		<td><?php echo $result['email']; ?></td>	
		<td><?php echo $result['Date']; ?></td>
		<td><a href="http://nuqat.me/etickets.php?merchTxnRef=<?php echo $result['merchTxnRef']; ?>" target="_blank">http://nuqat.me/etickets.php?merchTxnRef=<?php echo $result['merchTxnRef']; ?></a></td>
	</tr>
<?php } ?>
</table>

<?php mysql_free_result($register); ?>