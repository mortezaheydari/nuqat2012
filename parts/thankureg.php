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
$query_ticket = sprintf("SELECT * FROM bank_info WHERE merchTxnRef = %s", GetSQLValueString($colname_ticket, "int"));
$ticket = mysql_query($query_ticket, $Nuqat) or die(mysql_error());
$row_ticket = mysql_fetch_assoc($ticket);
$totalRows_ticket = mysql_num_rows($ticket);
?>

<p>Thank you for registering with Nuqat.<br />
  <br />

Your E-ticket has been sent to your email.<br />
<br />

You can also VIEW and PRINT your e-ticket on the below link:</p>

<a class="nav-twotwelve" target="_blank" href="http://nuqat.me/etickets.php?merchTxnRef=<?php echo $row_ticket['merchTxnRef']; ?>">http://nuqat.me/etickets.php?merchTxnRef=<?php echo $row_ticket['merchTxnRef']; ?></a>

<p>Looking forward to see you.<br /><br />


Nuqat Team.</p>

<?php
mysql_free_result($ticket);
?>
