<?php

// On vérifie si la fonction ini_set() a été désactivée...
$desactive = ini_get('disable_functions');
if (preg_match("/ini_set/i", "$desactive") == 0) {
// Si elle n'est pas désactivée, on définit ini_set de manière à n'afficher que les erreurs...
ini_set("error_reporting" , "E_ALL & ~E_NOTICE");
}

// Vérifier que le formulaire a été envoyé...
if (isset($_POST['envoi'])) {


//On commence une session pour enregistrer les variables du formulaire...

session_start();

$_SESSION['champ1'] = $_POST['champ1'];
$_SESSION['champ2'] = $_POST['champ2'];
$_SESSION['champ3'] = $_POST['champ3'];
$_SESSION['zone_email1'] = $_POST['zone_email1'];
$_SESSION['liste1'] = $_POST['liste1'];

//Evaluation du bouton 1 ...
switch($_POST['bouton1']) {
case "workshop1":
$_SESSION['bouton1'] = "workshop1";
break;
case "workshop2":
$_SESSION['bouton1'] = "workshop2";
break;
case "workshop3":
$_SESSION['bouton1'] = "workshop3";
break;
case "workshop4":
$_SESSION['bouton1'] = "workshop4";
break;
case "":
$_SESSION['bouton1'] = "";
break;
default:
$_SESSION['bouton1'] = "";
} // Fin du switch...

//Evaluation du bouton 2 ...
switch($_POST['bouton2']) {
case "workshop1":
$_SESSION['bouton2'] = "workshop1";
break;
case "workshop2":
$_SESSION['bouton2'] = "workshop2";
break;
case "workshop3":
$_SESSION['bouton2'] = "workshop3";
break;
case "workshop4":
$_SESSION['bouton2'] = "workshop4";
break;
case "":
$_SESSION['bouton2'] = "";
break;
default:
$_SESSION['bouton2'] = "";
} // Fin du switch...

// Définir l\'icone apparaissant en cas d\'erreur...


// Définir sur 0 pour afficher un petit x de couleur rouge.
// Définir sur 1 pour afficher l\'image d\'une croix rouge telle que celle utilisée dans l\'assistant
// Si vous utilisez l\'option 1, l\'image de la croix rouge \'icone.gif\' doit se trouver dans le répertoire \'images\',
// ce dernier devant se trouver au même niveau que votre formulaire...
$flag_icone = 0;

// On vérifie si $flag_icone est défini sur 0 ou 1...
if ($flag_icone == 0) {
$icone = "<b><font size=\"3\" face=\"Arial, Verdana, Helvetica, sans-serif\" color=\"#CC0000\">x</font></b>";
} else {
$icone = "<img src=\"images/icone.gif\"";
}

// Définir l'indicateur d'erreur sur zéro...
$flag_erreur = 0;
// N'envoyer le formulaire que s'il n'y a pas d'erreurs...
if ($flag_erreur == 0) {					

// Addresse de réception du formulaire
$email_dest = "tickets@nuqat.me";
$sujet = "Tickets";
$entetes ="MIME-Version: 1.0 \n";
	$entetes .="From: Ticket<tickets@nuqat.me>\n";
	$entetes .="Return-Path: Ticket<tickets@nuqat.me>\n";
	$entetes .="Reply-To: Ticket<tickets@nuqat.me>\n";
	$entetes .="Content-Type: text/html; charset=iso-8859-1 \n";
	$partie_entete = "<html>\n<head>\n<title>Form</title>\n<meta http-equiv=Content-Type content=text/html; charset=iso-8859-1>\n</head>\n<body bgcolor=#FFFFFF>\n";


//Partie HTML de l'e-mail...
$partie_champs_texte .= "<font face=\"Verdana\" size=\"2\" color=\"#003366\">First Name = " . $_SESSION['champ1'] . "</font><br>\n";
$partie_champs_texte .= "<font face=\"Verdana\" size=\"2\" color=\"#003366\">Last Name = " . $_SESSION['champ2'] . "</font><br>\n";
$partie_champs_texte .= "<font face=\"Verdana\" size=\"2\" color=\"#003366\">Mobile / Phone = " . $_SESSION['champ3'] . "</font><br>\n";
$partie_zone_email .= "<font face=\"Verdana\" size=\"2\" color=\"#003366\">Email Address = " . $_SESSION['zone_email1'] . "</font><br>\n";
$partie_listes .= "<font face=\"Verdana\" size=\"2\" color=\"#003366\">Choose Your Package = " . $_SESSION['liste1'] . "</font><br>\n";
$partie_boutons .= "<font face=\"Verdana\" size=\"2\" color=\"#003366\">Morning Workshops = " . $_SESSION['bouton1'] . "</font><br>\n";
$partie_boutons .= "<font face=\"Verdana\" size=\"2\" color=\"#003366\">Afternoon Workshops (3 consecutive afternoons) = " . $_SESSION['bouton2'] . "</font><br>\n";
					

					// Fin du message HTML
					$fin = "</body></html>\n\n";
					
					$sortie = $partie_entete . $partie_champs_texte . $partie_zone_email . $partie_listes . $partie_boutons . $partie_cases . $partie_zone_texte . $fin;


					// Send the e-mail
					if (@!mail($email_dest,$sujet,$sortie,$entetes)) {
					echo("Envoi du formulaire impossible");
					exit();
					} else {

                    // Rediriger vers la page de remerciement
                    header("Location:page-something");
                    exit();
                  } // Fin else
			    } // Fin du if ($flag_erreur == 0) {
			} // Fin de if POST
?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script language="JavaScript">


function verifSelection() {


if (document.mail_form.champ1.value == "") {
alert("First name cannot be empty")
return false
} 

if (document.mail_form.champ2.value == "") {
alert("Last name cannot be empty")
return false
} 

if (document.mail_form.champ3.value == "") {
alert("Mobile / Phone cannot be empty")
return false
} 

if (document.mail_form.zone_email1.value == "") {
alert("Email is invalid")
return false
}

invalidChars = " /:,;'"

for (i=0; i < invalidChars.length; i++) {	// does it contain any invalid characters?
badChar = invalidChars.charAt(i)

if (document.mail_form.zone_email1.value.indexOf(badChar,0) > -1) {
alert("Votre adresse e-mail contient des caractères invalides. Veuillez vérifier.")
document.mail_form.zone_email1.focus()
return false
}
}

atPos = document.mail_form.zone_email1.value.indexOf("@",1)			// there must be one "@" symbol
if (atPos == -1) {
alert('Votre adresse e-mail ne contient pas le signe "@". Veuillez vérifier.')
document.mail_form.zone_email1.focus()
return false
}

if (document.mail_form.zone_email1.value.indexOf("@",atPos+1) != -1) {	// and only one "@" symbol
alert('Il ne doit y avoir qu\'un signe "@". Veuillez vérifier.')
document.mail_form.zone_email1.focus()
return false
}

periodPos = document.mail_form.zone_email1.value.indexOf(".",atPos)

if (periodPos == -1) {					// and at least one "." after the "@"
alert('Vous avez oublié le point "." après le signe "@". Veuillez vérifier.')
document.mail_form.zone_email1.focus()
return false
}

if (periodPos+3 > document.mail_form.zone_email1.value.length)	{		// must be at least 2 characters after the 
alert('Il doit y avoir au moins deux caractères après le signe ".". Veuillez vérifier.')
document.mail_form.zone_email1.focus()
return false
}

if (document.mail_form.liste1.value == "") {
alert("choose your package")
return false
} 

} // Fin de la fonction
</script>

</head>

<body>
<form name="mail_form" method="post" action="<?=$_SERVER['PHP_SELF']?>" onSubmit="return verifSelection()">
  <div align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif, Tahoma"><strong>Formulaire
    de contact</strong></font></div><br><table align="center" width="566" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="16"><div align="center">
  <font color="#CC0000" size="2" face="Verdana, Arial, Helvetica, sans-serif, Tahoma"><strong><?php
if ($erreur_champ1) {
	  echo(stripslashes($erreur_champ1));
	  } else {
if ($erreur_champ2) {
	  echo(stripslashes($erreur_champ2));
	  } else {
if ($erreur_champ3) {
	  echo(stripslashes($erreur_champ3));
	  } else {
if ($erreur_email1) {
	  echo(stripslashes($erreur_email1));
	  } else {
if ($erreur_liste1) {
	  echo(stripslashes($erreur_liste1));
	  } else {
if ($erreur_bouton1) {
	  echo(stripslashes($erreur_bouton1));
	  } else {
if ($erreur_bouton2) {
	  echo(stripslashes($erreur_bouton2));
	  } else {
} // Fin du else...
} // Fin du else...
} // Fin du else...
} // Fin du else...
} // Fin du else...
} // Fin du else...
} // Fin du else...
?>
    </strong></font>
    </div></td>
      </tr>
    </table>
<p align="center"></p><table width="566" border="0" align="center"><tr>
      <td width="140"><div align="right"><font face="Verdana" size="2">First Name</font></div></td>
	  <td align="center" valign="middle" width="30">
      <?php
	  if ($erreur_champ1) {
	  echo($icone);
	  }
	  ?>
      </td>
      <td><input name="champ1" type="text" value="<?=stripslashes($_SESSION['champ1']);?>"></td>
    </tr></table><table width="566" border="0" align="center"><tr>
      <td width="140"><div align="right"><font face="Verdana" size="2">Last Name</font></div></td>
	  <td align="center" valign="middle" width="30">
      <?php
	  if ($erreur_champ2) {
	  echo($icone);
	  }
	  ?>
      </td>
      <td><input name="champ2" type="text" value="<?=stripslashes($_SESSION['champ2']);?>"></td>
    </tr></table><table width="566" border="0" align="center"><tr>
      <td width="140"><div align="right"><font face="Verdana" size="2">Mobile / Phone</font></div></td>
	  <td align="center" valign="middle" width="30">
      <?php
	  if ($erreur_champ3) {
	  echo($icone);
	  }
	  ?>
      </td>
      <td><input name="champ3" type="text" value="<?=stripslashes($_SESSION['champ3']);?>"></td>
    </tr></table><table width="566" border="0" align="center"><tr>
      <td width="140"><div align="right"><font face="Verdana" size="2">Email Address</font></div></td>
      <td width="30" align="center" valign="middle">
	  <?php
	  if ($erreur_email1) {
	  echo($icone);
	  }
	  ?>
	  </td>
      <td><input name="zone_email1" type="text" value="<?=stripslashes($_SESSION['zone_email1']);?>"></td>
    </tr></table><table width="566" border="0" align="center"><tr>
      <td width="140"><div align="right"><font face="Verdana" size="2">Choose Your Package</font></div></td>
      <td width="30" align="center" valign="middle">
	  <?php
	  if ($erreur_liste1) {
	  echo($icone);
	  }
	  ?>
	  </td>
      <td><select name="liste1" style="width:146"><option value="">Sélectionner...</option>
<option value="workshop1"<?php
if ($_SESSION['liste1'] == "workshop1") {
echo(" selected");
}
?>>workshop1</option>
<option value="workshop2"<?php
if ($_SESSION['liste1'] == "workshop2") {
echo(" selected");
}
?>>workshop2</option>
<option value="workshop3"<?php
if ($_SESSION['liste1'] == "workshop3") {
echo(" selected");
}
?>>workshop3</option>
<option value="workshop4"<?php
if ($_SESSION['liste1'] == "workshop4") {
echo(" selected");
}
?>>workshop4</option>
<option value=""<?php
if ($_SESSION['liste1'] == "") {
echo(" selected");
}
?>></option>
</select></td></tr></table><table width="566" border="0" align="center"><tr>
      <td width="140"><div align="right"><font face="Verdana" size="2">Morning Workshops</font></div></td>
      <td width="30" align="center" valign="middle">
	  <?php
	  if ($erreur_bouton1) {
	  echo($icone);
	  }
	  ?>
	  </td>
      <td><input type="radio" name="bouton1" value="workshop1"<?php
if ($_SESSION['bouton1'] == "workshop1") {
echo(" checked");
}
?>><font face="Verdana" size="2">workshop1</font><br><input type="radio" name="bouton1" value="workshop2"<?php
if ($_SESSION['bouton1'] == "workshop2") {
echo(" checked");
}
?>><font face="Verdana" size="2">workshop2</font><br><input type="radio" name="bouton1" value="workshop3"<?php
if ($_SESSION['bouton1'] == "workshop3") {
echo(" checked");
}
?>><font face="Verdana" size="2">workshop3</font><br><input type="radio" name="bouton1" value="workshop4"<?php
if ($_SESSION['bouton1'] == "workshop4") {
echo(" checked");
}
?>><font face="Verdana" size="2">workshop4</font><br><input type="radio" name="bouton1" value=""<?php
if ($_SESSION['bouton1'] == "") {
echo(" checked");
}
?>><font face="Verdana" size="2"></font></td></tr></table><table width="566" border="0" align="center"><tr>
      <td width="140"><div align="right"><font face="Verdana" size="2">Afternoon Workshops (3 consecutive afternoons)</font></div></td>
      <td width="30" align="center" valign="middle">
	  <?php
	  if ($erreur_bouton2) {
	  echo($icone);
	  }
	  ?>
	  </td>
      <td><input type="radio" name="bouton2" value="workshop1"<?php
if ($_SESSION['bouton2'] == "workshop1") {
echo(" checked");
}
?>><font face="Verdana" size="2">workshop1</font><br><input type="radio" name="bouton2" value="workshop2"<?php
if ($_SESSION['bouton2'] == "workshop2") {
echo(" checked");
}
?>><font face="Verdana" size="2">workshop2</font><br><input type="radio" name="bouton2" value="workshop3"<?php
if ($_SESSION['bouton2'] == "workshop3") {
echo(" checked");
}
?>><font face="Verdana" size="2">workshop3</font><br><input type="radio" name="bouton2" value="workshop4"<?php
if ($_SESSION['bouton2'] == "workshop4") {
echo(" checked");
}
?>><font face="Verdana" size="2">workshop4</font><br><input type="radio" name="bouton2" value=""<?php
if ($_SESSION['bouton2'] == "") {
echo(" checked");
}
?>><font face="Verdana" size="2"></font></td></tr></table><table width="566" border="0" align="center"><tr>
<td valign="top"><div align="center"> 
          <input type="reset" name="Reset" value=" Effacer ">
            
          <input type="submit" name="envoi" value="Envoyer">
        </div></td></tr></table><div align="center"><input name="nbre_fichiers" type="hidden" id="nbre_fichiers" value=""></div></form>
</body>
</html>