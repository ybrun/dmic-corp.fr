<?php require_once('../../Connections/dmic.php'); 
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}
?>
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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form2")) {
  $insertSQL = sprintf("INSERT INTO dmic_demandedevis (addr_ip, pc_type, pc_categorie, budget, processeur_type, ram, nbr_disque, taille_C, taille_D, lecteur_type, taille_ecran, clavier, souris, os, garantie_os, garantie_matos, garantie_os_matos, clonage, commentaires, statut, date_creation, contact, email_contact) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['ip'], "text"),
                       GetSQLValueString($_POST['pc_type'], "text"),
                       GetSQLValueString($_POST['categorie_pc'], "text"),
                       GetSQLValueString($_POST['budget'], "int"),
                       GetSQLValueString($_POST['processeur_type'], "text"),
                       GetSQLValueString($_POST['ram'], "int"),
                       GetSQLValueString($_POST['nbr_dd'], "int"),
                       GetSQLValueString($_POST['taille_C'], "int"),
                       GetSQLValueString($_POST['taille_D'], "int"),
                       GetSQLValueString($_POST['lecteur'], "text"),
                       GetSQLValueString($_POST['taille_ecran'], "text"),
                       GetSQLValueString(isset($_POST['accessoires_clavier']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString(isset($_POST['accessoires_souris']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString($_POST['os'], "text"),
                       GetSQLValueString(isset($_POST['garantie_os']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString(isset($_POST['garantie_matériel']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString(isset($_POST['garantie_os_matos']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString(isset($_POST['clonage']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString($_POST['commantaires'], "text"),
                       GetSQLValueString($_POST['statut'], "int"),
                       GetSQLValueString($_POST['date'], "date"),
                       GetSQLValueString($_POST['contact'], "text"),
                       GetSQLValueString($_POST['email_contact'], "text"));

  mysql_select_db($database_dmic, $dmic);
  $Result1 = mysql_query($insertSQL, $dmic) or die(mysql_error());

  $insertGoTo = "/front/devis.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

$colname_modele_pc_dyn = "-1";
if (isset($_GET['modele_devis_pc'])) {
  $colname_modele_pc_dyn = $_GET['modele_devis_pc'];
}
mysql_select_db($database_dmic, $dmic);
$query_modele_pc_dyn = sprintf("SELECT * FROM dmic_modeledevispc WHERE id_modele = %s", GetSQLValueString($colname_modele_pc_dyn, "int"));
$modele_pc_dyn = mysql_query($query_modele_pc_dyn, $dmic) or die(mysql_error());
$row_modele_pc_dyn = mysql_fetch_assoc($modele_pc_dyn);
$colname_modele_pc_dyn = "-1";
if (isset($_GET['id_modele'])) {
  $colname_modele_pc_dyn = $_GET['id_modele'];
}
mysql_select_db($database_dmic, $dmic);
$query_modele_pc_dyn = sprintf("SELECT * FROM dmic_modeledevispc WHERE id_modele = %s", GetSQLValueString($colname_modele_pc_dyn, "int"));
$modele_pc_dyn = mysql_query($query_modele_pc_dyn, $dmic) or die(mysql_error());
$row_modele_pc_dyn = mysql_fetch_assoc($modele_pc_dyn);
$totalRows_modele_pc_dyn = mysql_num_rows($modele_pc_dyn);

mysql_select_db($database_dmic, $dmic);
$query_os = "SELECT * FROM dmic_os ORDER BY name ASC";
$os = mysql_query($query_os, $dmic) or die(mysql_error());
$row_os = mysql_fetch_assoc($os);
$totalRows_os = mysql_num_rows($os);

mysql_select_db($database_dmic, $dmic);
$query_modele_pc = "SELECT * FROM dmic_modeledevispc";
$modele_pc = mysql_query($query_modele_pc, $dmic) or die(mysql_error());
$row_modele_pc = mysql_fetch_assoc($modele_pc);
$totalRows_modele_pc = mysql_num_rows($modele_pc);

$colname_profil_users = "-1";
if (isset($_SESSION['MM_Username'])) {
  $colname_profil_users = $_SESSION['MM_Username'];
}
mysql_select_db($database_dmic, $dmic);
$query_profil_users = sprintf("SELECT nom_user, prenom_user, e_mail_user, profil FROM dmic_users WHERE login = %s", GetSQLValueString($colname_profil_users, "text"));
$profil_users = mysql_query($query_profil_users, $dmic) or die(mysql_error());
$row_profil_users = mysql_fetch_assoc($profil_users);
$totalRows_profil_users = mysql_num_rows($profil_users);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Document sans titre</title>
</head>

<body>
<form action="<?php echo $editFormAction; ?>" id="form2" name="form2" method="POST">
<table width="60%" border="1" align="center" class="tab_cadrehov">
  <tr>
    <th width="30%" nowrap="nowrap" scope="row"><div align="center">
      <input name="ip" type="hidden" id="ip" value="<?php echo $_SERVER["REMOTE_ADDR"]; ?>">
      Type d'ordinateur</div></th>
    <td width="30%"><p>
      <label></label>
      <label></label>
      <label>
        <select name="pc_type" id="pc_type">
          <option value="" <?php if (!(strcmp("", $row_modele_pc_dyn['pc_type']))) {echo "selected=\"selected\"";} ?>>----------</option>
          <option value="Unit&eacute; centrale" <?php if (!(strcmp("Unité centrale", $row_modele_pc_dyn['pc_type']))) {echo "selected=\"selected\"";} ?>>Unit&eacute; centrale</option>
          <option value="Unit&eacute; portable" <?php if (!(strcmp("Unité portable", $row_modele_pc_dyn['pc_type']))) {echo "selected=\"selected\"";} ?>>Unit&eacute; portable</option>
        </select>
      </label>
      <br />
    </p></td>
  </tr>
  <tr>
    <th nowrap="nowrap" scope="row"><div align="center">Cat&eacute;gorie</div></th>
    <td><p>
      <label>
        <select name="categorie_pc" id="categorie_pc">
          <option value="" <?php if (!(strcmp("", $row_modele_pc_dyn['pc_categorie']))) {echo "selected=\"selected\"";} ?>>----------</option>
          <option value="Bureautique" <?php if (!(strcmp("Bureautique", $row_modele_pc_dyn['pc_categorie']))) {echo "selected=\"selected\"";} ?>>Bureautique</option>
          <option value="Gaming" <?php if (!(strcmp("Gaming", $row_modele_pc_dyn['pc_categorie']))) {echo "selected=\"selected\"";} ?>>Gaming</option>
          <option value="Polyvalent" <?php if (!(strcmp("Polyvalent", $row_modele_pc_dyn['pc_categorie']))) {echo "selected=\"selected\"";} ?>>Polyvalent</option>
          <option value="Mini-ordinateur" <?php if (!(strcmp("Mini-ordinateur", $row_modele_pc_dyn['pc_categorie']))) {echo "selected=\"selected\"";} ?>>Mini-ordinateur</option>
          <option value="Professionnel" <?php if (!(strcmp("Professionnel", $row_modele_pc_dyn['pc_categorie']))) {echo "selected=\"selected\"";} ?>>Professionnel</option>
          <option value="Tactile" <?php if (!(strcmp("Tactile", $row_modele_pc_dyn['pc_categorie']))) {echo "selected=\"selected\"";} ?>>Tactile</option>
          <option value="Tout-en-un" <?php if (!(strcmp("Tout-en-un", $row_modele_pc_dyn['pc_categorie']))) {echo "selected=\"selected\"";} ?>>Tout-en-un</option>
        </select>
      </label>
      <br />
    </p></td>
  </tr>
  <tr>
    <th nowrap="nowrap" scope="row"><div align="center">Budget (en &euro;)</div></th>
    <td><label>
      <input name="budget" type="text" id="budget" value="<?php echo $row_modele_pc_dyn['prix_minimum']; ?>" size="100%" />
    </label></td>
  </tr>
  <tr>
    <th nowrap="nowrap" scope="row"><div align="center">Syst&egrave;me d'exploitation souhait&eacute;</div></th>
    <td><label>
      <select name="os" id="os">
        <option value="" <?php if (!(strcmp("", $row_modele_pc_dyn['os']))) {echo "selected=\"selected\"";} ?>>----------</option>
        <?php
do {  
?>
        <option value="<?php echo $row_os['name']?>"<?php if (!(strcmp($row_os['name'], $row_modele_pc_dyn['os']))) {echo "selected=\"selected\"";} ?>><?php echo $row_os['name']?></option>
        <?php
} while ($row_os = mysql_fetch_assoc($os));
  $rows = mysql_num_rows($os);
  if($rows > 0) {
      mysql_data_seek($os, 0);
	  $row_os = mysql_fetch_assoc($os);
  }
?>
      </select>
    </label></td>
  </tr>
  <tr>
    <th nowrap="nowrap" scope="row"><div align="center">Type de processeur souhait&eacute;</div></th>
    <td><label>
      <select name="processeur_type" id="processeur_type">
        <option value="" <?php if (!(strcmp("", $row_modele_pc_dyn['processeur_type']))) {echo "selected=\"selected\"";} ?>>----------</option>
        <option value="1 coeurs" <?php if (!(strcmp("1 coeurs", $row_modele_pc_dyn['processeur_type']))) {echo "selected=\"selected\"";} ?>>1 coeurs</option>
        <option value="2 coeurs" <?php if (!(strcmp("2 coeurs", $row_modele_pc_dyn['processeur_type']))) {echo "selected=\"selected\"";} ?>>2 coeurs</option>
        <option value="4 coeurs" <?php if (!(strcmp("4 coeurs", $row_modele_pc_dyn['processeur_type']))) {echo "selected=\"selected\"";} ?>>4 coeurs</option>
        <option value="6 coeurs" <?php if (!(strcmp("6 coeurs", $row_modele_pc_dyn['processeur_type']))) {echo "selected=\"selected\"";} ?>>6 coeurs</option>
        <option value="8 coeurs" <?php if (!(strcmp("8 coeurs", $row_modele_pc_dyn['processeur_type']))) {echo "selected=\"selected\"";} ?>>8 coeurs</option>
      </select>
    </label></td>
  </tr>
  <tr>
    <th nowrap="nowrap" scope="row"><div align="center">Quantit&eacute; de M&eacute;moire RAM souhait&eacute; (en Go)</div></th>
    <td><label>
      <input name="ram" type="text" id="ram" value="<?php echo $row_modele_pc_dyn['ram']; ?>" size="100%" />
    </label></td>
  </tr>
  <tr>
    <th nowrap="nowrap" scope="row"><div align="center">Nombre de disque dur souhait&eacute;</div></th>
    <td><label>
      <input name="nbr_dd" type="text" id="nbr_dd" value="<?php echo $row_modele_pc_dyn['nbr_disque']; ?>" size="100%" />
    </label></td>
  </tr>
  <tr>
    <th nowrap="nowrap" scope="row"><div align="center">Taille du disque dur syst&egrave;me souhait&eacute;</div></th>
    <td><label>
      <input name="taille_C" type="text" id="taille_C" value="<?php echo $row_modele_pc_dyn['taille_C']; ?>" size="100%" />
    </label></td>
  </tr>
  <tr>
    <th nowrap="nowrap" scope="row"><div align="center">Taille du 2&egrave;me disque dur</div></th>
    <td><label>
      <input name="taille_D" type="text" id="taille_D" value="<?php echo $row_modele_pc_dyn['taille_D']; ?>" size="100%" />
    </label></td>
  </tr>
  <tr>
    <th nowrap="nowrap" scope="row"><div align="center">Type de lecteur souhait&eacute;</div></th>
    <td><label>
      <select name="lecteur" id="lecteur">
        <option value="" <?php if (!(strcmp("", $row_modele_pc_dyn['lecteur_type']))) {echo "selected=\"selected\"";} ?>>----------</option>
        <option value="Lecteur/Graveur DVD" <?php if (!(strcmp("Lecteur/Graveur DVD", $row_modele_pc_dyn['lecteur_type']))) {echo "selected=\"selected\"";} ?>>Lecteur/Graveur DVD</option>
        <option value="Lecteur Blu-ray" <?php if (!(strcmp("Lecteur Blu-ray", $row_modele_pc_dyn['lecteur_type']))) {echo "selected=\"selected\"";} ?>>Lecteur Blu-ray</option>
        <option value="Lecteur/Graveur Blu-ray" <?php if (!(strcmp("Lecteur/Graveur Blu-ray", $row_modele_pc_dyn['lecteur_type']))) {echo "selected=\"selected\"";} ?>>Lecteur/Graveur Blu-ray</option>
      </select>
    </label></td>
  </tr>
  <tr>
    <th nowrap="nowrap" scope="row"><div align="center">Taille de l'&eacute;cran souhait&eacute;</div></th>
    <td><label>
      <select name="taille_ecran" id="taille_ecran">
        <option value="" <?php if (!(strcmp("", $row_modele_pc_dyn['taille_ecran']))) {echo "selected=\"selected\"";} ?>>----------</option>
        <option value="7''" <?php if (!(strcmp("7\'\'", $row_modele_pc_dyn['taille_ecran']))) {echo "selected=\"selected\"";} ?>>7''</option>
        <option value="8''" <?php if (!(strcmp("8\'\'", $row_modele_pc_dyn['taille_ecran']))) {echo "selected=\"selected\"";} ?>>8'</option>
        <option value="10''" <?php if (!(strcmp("10\'\'", $row_modele_pc_dyn['taille_ecran']))) {echo "selected=\"selected\"";} ?>>10''</option>
        <option value="11''" <?php if (!(strcmp("11\'\'", $row_modele_pc_dyn['taille_ecran']))) {echo "selected=\"selected\"";} ?>>11''</option>
        <option value="13''" <?php if (!(strcmp("13\'\'", $row_modele_pc_dyn['taille_ecran']))) {echo "selected=\"selected\"";} ?>>13''</option>
        <option value="14''" <?php if (!(strcmp("14\'\'", $row_modele_pc_dyn['taille_ecran']))) {echo "selected=\"selected\"";} ?>>14''</option>
        <option value="15''" <?php if (!(strcmp("15\'\'", $row_modele_pc_dyn['taille_ecran']))) {echo "selected=\"selected\"";} ?>>15''</option>
        <option value="17''" <?php if (!(strcmp("17\'\'", $row_modele_pc_dyn['taille_ecran']))) {echo "selected=\"selected\"";} ?>>17''</option>
        <option value="20''" <?php if (!(strcmp("20\'\'", $row_modele_pc_dyn['taille_ecran']))) {echo "selected=\"selected\"";} ?>>20''</option>
        <option value="21'' - 22''" <?php if (!(strcmp("21\'\' - 22\'\'", $row_modele_pc_dyn['taille_ecran']))) {echo "selected=\"selected\"";} ?>>21'' - 22''</option>
        <option value="23'' - 24''" <?php if (!(strcmp("23\'\' - 24\'\'", $row_modele_pc_dyn['taille_ecran']))) {echo "selected=\"selected\"";} ?>>23'' - 24''</option>
        <option value="27'' et sup&eacute;rieur"27'' et supérieur <?php if (!(strcmp("27\'\' et supérieur", $row_modele_pc_dyn['taille_ecran']))) {echo "selected=\"selected\"";} ?>>27'' et sup&eacute;rieur</option>
      </select>
    </label></td>
  </tr>
  <tr>
    <th nowrap="nowrap" scope="row">Accessoires</th>
    <td><p>
      <label>
        <input type="checkbox" name="accessoires_clavier" value="case à cocher" id="accessoires_clavier">
        Clavier</label>
      <br>
      <label>
        <input type="checkbox" name="accessoires_souris" value="case à cocher" id="accessoires_souris">
        Souris</label>
      <br>
    </p></td>
  </tr>
  <tr>
    <th nowrap="nowrap" scope="row"><div align="center">Options</div></th>
    <td><label>
      <input name="garantie_os" type="checkbox" id="garantie_os" value="Garantie OS" />
      Garantie OS<br />
      <input name="garantie_matériel" type="checkbox" id="garantie_matériel" value="Garantie Matériel" />
      Garantie Mat&eacute;riel<br />
      <input name="garantie_os_matos" type="checkbox" id="garantie_os_matos" value="Garantie OS et matériel" />
      Garantie OS et mat&eacute;riel<br />
      <input name="clonage" type="checkbox" id="clonage" value="Clonage du système" />
      Clonage du syst&egrave;me</label></td>
  </tr>
  <tr>
    <th nowrap="nowrap" scope="row"><div align="center">Commantaires</div></th>
    <td><label>
      <textarea name="commantaires" cols="100%" rows="10" id="commantaires"></textarea>
    </label></td>
  </tr>
  <tr>
    <th nowrap="nowrap" scope="row"><div align="center">Nom et Pr&eacute;nom</div></th>
    <td><label>
      <input name="contact" type="text" id="contact" value="<?php echo $_SESSION['MM_Username']; ?>" size="100%" />
    </label></td>
  </tr>
  <tr>
    <th nowrap="nowrap" scope="row"><div align="center">E-Mail</div></th>
    <td><label>
      <input name="email_contact" type="text" id="email_contact" value="<?php echo $row_profil_users['e_mail_user']; ?>" size="100%" />
    </label></td>
  </tr>
  <tr>
    <th nowrap="nowrap" scope="row"><input name="statut" type="hidden" id="statut" value="1">
      <input name="date" type="hidden" id="date" value="<?php $date = date("Y-m-d"); echo $date; ?>"></th>
    <td><label>
      <input type="submit" name="submit" id="submit" value="Envoyer la demande" />
    </label></td>
  </tr>
</table>
<input type="hidden" name="MM_insert" value="form2">
</form>
</body>
</html>
<?php
mysql_free_result($modele_pc_dyn);

mysql_free_result($os);

mysql_free_result($modele_pc);

mysql_free_result($profil_users);
?>
