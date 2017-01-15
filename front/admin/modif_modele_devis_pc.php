<?php require_once ('../../ScriptLibrary/ban_ip.php') ;?>
<?php require_once('../../Connections/dmic.php'); ?>
<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

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

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form3")) {
  $updateSQL = sprintf("UPDATE dmic_modeledevispc SET name=%s, pc_type=%s, pc_categorie=%s, prix_minimum=%s, os=%s, processeur_type=%s, ram=%s, nbr_disque=%s, taille_C=%s, taille_D=%s, lecteur_type=%s, taille_ecran=%s WHERE id_modele=%s",
                       GetSQLValueString($_POST['new_name'], "text"),
                       GetSQLValueString($_POST['pc_type2'], "text"),
                       GetSQLValueString($_POST['categorie_pc2'], "text"),
                       GetSQLValueString($_POST['budget2'], "int"),
                       GetSQLValueString($_POST['os2'], "int"),
                       GetSQLValueString($_POST['processeur_type2'], "int"),
                       GetSQLValueString($_POST['ram2'], "int"),
                       GetSQLValueString($_POST['nbr_dd2'], "int"),
                       GetSQLValueString($_POST['taille_C2'], "int"),
                       GetSQLValueString($_POST['taille_D2'], "int"),
                       GetSQLValueString($_POST['lecteur2'], "text"),
                       GetSQLValueString($_POST['taille_ecran2'], "text"),
                       GetSQLValueString($_POST['id'], "int"));

  mysql_select_db($database_dmic, $dmic);
  $Result1 = mysql_query($updateSQL, $dmic) or die(mysql_error());

  $updateGoTo = "http://www.dmic-corp.fr/front/admin/config_intitules_modele_devis_pc.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: http://www.dmic-corp.fr/front/admin/config_intitules_modele_devis_pc.php"));
}

mysql_select_db($database_dmic, $dmic);
$query_modele_devis_pc = "SELECT * FROM dmic_modeledevispc ORDER BY name ASC";
$modele_devis_pc = mysql_query($query_modele_devis_pc, $dmic) or die(mysql_error());
$row_modele_devis_pc = mysql_fetch_assoc($modele_devis_pc);
$totalRows_modele_devis_pc = mysql_num_rows($modele_devis_pc);

$colname_modele_devis_pc_dyn = "-1";
if (isset($_GET['id'])) {
  $colname_modele_devis_pc_dyn = $_GET['id'];
}
mysql_select_db($database_dmic, $dmic);
$query_modele_devis_pc_dyn = sprintf("SELECT * FROM dmic_modeledevispc WHERE id_modele = %s", GetSQLValueString($colname_modele_devis_pc_dyn, "int"));
$modele_devis_pc_dyn = mysql_query($query_modele_devis_pc_dyn, $dmic) or die(mysql_error());
$row_modele_devis_pc_dyn = mysql_fetch_assoc($modele_devis_pc_dyn);
$totalRows_modele_devis_pc_dyn = mysql_num_rows($modele_devis_pc_dyn);

mysql_select_db($database_dmic, $dmic);
$query_os = "SELECT * FROM dmic_os ORDER BY name ASC";
$os = mysql_query($query_os, $dmic) or die(mysql_error());
$row_os = mysql_fetch_assoc($os);
$totalRows_os = mysql_num_rows($os);

$colname_profil_users = "-1";
if (isset($_SESSION['MM_Username'])) {
  $colname_profil_users = $_SESSION['MM_Username'];
}
mysql_select_db($database_dmic, $dmic);
$query_profil_users = sprintf("SELECT profil FROM dmic_users WHERE login = %s", GetSQLValueString($colname_profil_users, "text"));
$profil_users = mysql_query($query_profil_users, $dmic) or die(mysql_error());
$row_profil_users = mysql_fetch_assoc($profil_users);
$totalRows_profil_users = mysql_num_rows($profil_users);
$_SESSION['MM_UserGroup'] = $row_profil_users['profil'];
?>
<!doctype html>
<html><!-- InstanceBegin template="/Templates/modele_dmic_3.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf8">
<meta name="robots" content="noindex">
<!-- InstanceBeginEditable name="doctitle" -->
<title>DMIC Corporation</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<link href="../../Styles/Fluid Grid Layout/boilerplate.css" rel="stylesheet" type="text/css">
<link href="../../Styles/grid_layout_v4.css" rel="stylesheet" type="text/css">
<!-- 
Pour en savoir plus sur les commentaires conditionnels autour des balises HTML en haut du fichier :
paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/

Procédez comme suit si vous utilisez une version personnalisée de modernizr (http://www.modernizr.com/) :
* insérez ici le lien vers votre js
* supprimez le lien ci-dessous vers html5shiv
* ajoutez la classe "no-js" aux balises HTML en haut
* vous pouvez aussi supprimer le lien vers respond.min.js si vous avez inclus MQ Polyfill dans votre version de modernizr 
-->
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="../../Styles/Fluid%20Grid%20Layout/respond.min.js"></script>
<!-- InstanceEndEditable -->
</head>

<body>
<div class="gridContainer clearfix">
  <div id="LayoutDiv1" class="header"><!-- InstanceBeginEditable name="header" -->
<?php include ('../inc/header/header.inc.php'); ?>
    <!-- end .header -->
<!-- InstanceEndEditable --></div>
<div id="LayoutDiv2" class="header_pub"><!-- InstanceBeginEditable name="header_pub" -->
	<?php include('../inc/header/header_pub.inc.php');?>
<!-- InstanceEndEditable --></div>
  <div class="sidebar1" id="LayoutDiv3" align="center"><!-- InstanceBeginEditable name="sidebar1" -->
   <?php include ('../inc/sidebar/stats/stats.php'); ?>
   </p>
<!-- InstanceEndEditable --></div>
<div id="LayoutDiv4" class="content"><!-- InstanceBeginEditable name="content" -->
    <h1 align="center" class="Style7">Configuration des intitul&eacute;s.</h1>
  <h2 align="center" class="Style7">Modification<span class="Style7"> d'un Mod&egrave;le de Devis Ordinateur.</span></h2>
  <p align="center">&nbsp;</p>
  <form id="form2" name="form3" method="POST" action="<?php echo $editFormAction; ?>">
    <table width="400" border="1" align="center" class="tab_cadrehov">
      <tr>
        <th nowrap="nowrap" scope="row"><div align="center">ID</div></th>
        <td><div align="center">
          <input name="id" type="hidden" id="id" value="<?php echo $row_modele_devis_pc_dyn['id_modele']; ?>" />
          <?php echo $row_modele_devis_pc_dyn['id_modele']; ?></div></td>
        </tr>
      <tr>
        <th nowrap="nowrap" scope="row"><div align="center">Nom</div></th>
        <td><label>
          <input name="new_name" type="text" id="new_name" value="<?php echo $row_modele_devis_pc_dyn['name']; ?>" size="50" />
          </label></td>
        </tr>
      <tr>
        <th nowrap="nowrap" scope="row"><div align="center">Type d'ordinateur</div></th>
        <td><p>
          <label></label>
          <label></label>
          <label>
            <select name="pc_type2" id="pc_type2">
              <option value="----------" <?php if (!(strcmp("----------", $row_modele_devis_pc_dyn['pc_type']))) {echo "selected=\"selected\"";} ?>>----------</option>
              <option value="Unit&eacute; centrale" <?php if (!(strcmp("Unité centrale", $row_modele_devis_pc_dyn['pc_type']))) {echo "selected=\"selected\"";} ?>>Unit&eacute; centrale</option>
              <option value="Unit&eacute; portable" <?php if (!(strcmp("Unité portable", $row_modele_devis_pc_dyn['pc_type']))) {echo "selected=\"selected\"";} ?>>Unit&eacute; portable</option>
              </select>
            </label>
          <br />
          </p></td>
        </tr>
      <tr>
        <th nowrap="nowrap" scope="row"><div align="center">Cat&eacute;gorie</div></th>
        <td><p>
          <label>
            <select name="categorie_pc2" id="categorie_pc2">
              <option value="----------" <?php if (!(strcmp("----------", $row_modele_devis_pc_dyn['pc_categorie']))) {echo "selected=\"selected\"";} ?>>----------</option>
              <option value="Bureautique" <?php if (!(strcmp("Bureautique", $row_modele_devis_pc_dyn['pc_categorie']))) {echo "selected=\"selected\"";} ?>>Bureautique</option>
              <option value="Gaming" <?php if (!(strcmp("Gaming", $row_modele_devis_pc_dyn['pc_categorie']))) {echo "selected=\"selected\"";} ?>>Gaming</option>
              <option value="Polyvalent" <?php if (!(strcmp("Polyvalent", $row_modele_devis_pc_dyn['pc_categorie']))) {echo "selected=\"selected\"";} ?>>Polyvalent</option>
              <option value="Mini-ordinateur" <?php if (!(strcmp("Mini-ordinateur", $row_modele_devis_pc_dyn['pc_categorie']))) {echo "selected=\"selected\"";} ?>>Mini-ordinateur</option>
              <option value="Professionnel" <?php if (!(strcmp("Professionnel", $row_modele_devis_pc_dyn['pc_categorie']))) {echo "selected=\"selected\"";} ?>>Professionnel</option>
              <option value="Tactile" <?php if (!(strcmp("Tactile", $row_modele_devis_pc_dyn['pc_categorie']))) {echo "selected=\"selected\"";} ?>>Tactile</option>
              <option value="Tout-en-un" <?php if (!(strcmp("Tout-en-un", $row_modele_devis_pc_dyn['pc_categorie']))) {echo "selected=\"selected\"";} ?>>Tout-en-un</option>
              </select>
            </label>
          <br />
          </p></td>
        </tr>
      <tr>
        <th nowrap="nowrap" scope="row"><div align="center">Budget (en &euro;)</div></th>
        <td><label>
          <input name="budget2" type="text" id="budget2" value="<?php echo $row_modele_devis_pc_dyn['prix_minimum']; ?>" />
          </label></td>
        </tr>
      <tr>
        <th nowrap="nowrap" scope="row"><div align="center">Syst&egrave;me d'exploitation souhait&eacute;</div></th>
        <td><label>
          <select name="os2" id="os2" title="<?php echo $row_modele_devis_pc_dyn['os']; ?>">
            <option value="----------" <?php if (!(strcmp("----------", $row_modele_devis_pc_dyn['os']))) {echo "selected=\"selected\"";} ?>>----------</option>
            <?php
do {  
?>
            <option value="<?php echo $row_os['name']?>"<?php if (!(strcmp($row_os['name'], $row_modele_devis_pc_dyn['os']))) {echo "selected=\"selected\"";} ?>><?php echo $row_os['name']?></option>
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
          <select name="processeur_type2" id="processeur_type2" title="<?php echo $row_modele_devis_pc_dyn['processeur_type']; ?>">
            <option value="----------" <?php if (!(strcmp("----------", $row_modele_devis_pc_dyn['processeur_type']))) {echo "selected=\"selected\"";} ?>>----------</option>
            <option value="1 coeurs" <?php if (!(strcmp("1 coeurs", $row_modele_devis_pc_dyn['processeur_type']))) {echo "selected=\"selected\"";} ?>>1 coeurs</option>
            <option value="2 coeurs" <?php if (!(strcmp("2 coeurs", $row_modele_devis_pc_dyn['processeur_type']))) {echo "selected=\"selected\"";} ?>>2 coeurs</option>
            <option value="4 coeurs" <?php if (!(strcmp("4 coeurs", $row_modele_devis_pc_dyn['processeur_type']))) {echo "selected=\"selected\"";} ?>>4 coeurs</option>
            <option value="6 coeurs" <?php if (!(strcmp("6 coeurs", $row_modele_devis_pc_dyn['processeur_type']))) {echo "selected=\"selected\"";} ?>>6 coeurs</option>
            <option value="8 coeurs" <?php if (!(strcmp("8 coeurs", $row_modele_devis_pc_dyn['processeur_type']))) {echo "selected=\"selected\"";} ?>>8 coeurs</option>
            </select>
          </label></td>
        </tr>
      <tr>
        <th nowrap="nowrap" scope="row"><div align="center">Quantit&eacute; de M&eacute;moire RAM souhait&eacute; (en Go)</div></th>
        <td><label>
          <input name="ram2" type="text" id="ram2" value="<?php echo $row_modele_devis_pc_dyn['ram']; ?>" />
          </label></td>
        </tr>
      <tr>
        <th nowrap="nowrap" scope="row"><div align="center">Nombre de disque dur souhait&eacute;</div></th>
        <td><label>
          <input name="nbr_dd2" type="text" id="nbr_dd2" value="<?php echo $row_modele_devis_pc_dyn['nbr_disque']; ?>" />
          </label></td>
        </tr>
      <tr>
        <th nowrap="nowrap" scope="row"><div align="center">Taille du disque dur syst&egrave;me souhait&eacute;</div></th>
        <td><label>
          <input name="taille_C2" type="text" id="taille_C2" value="<?php echo $row_modele_devis_pc_dyn['taille_C']; ?>" />
          </label></td>
        </tr>
      <tr>
        <th nowrap="nowrap" scope="row"><div align="center">Taille du 2&egrave;me disque dur</div></th>
        <td><label>
          <input name="taille_D2" type="text" id="taille_D2" value="<?php echo $row_modele_devis_pc_dyn['taille_D']; ?>" />
          </label></td>
        </tr>
      <tr>
        <th nowrap="nowrap" scope="row"><div align="center">Type de lecteur souhait&eacute;</div></th>
        <td><label>
          <select name="lecteur2" id="lecteur2" title="<?php echo $row_modele_devis_pc_dyn['lecteur_type']; ?>">
            <option value="----------" <?php if (!(strcmp("----------", $row_modele_devis_pc_dyn['lecteur_type']))) {echo "selected=\"selected\"";} ?>>----------</option>
            <option value="Lecteur/Graveur DVD" <?php if (!(strcmp("Lecteur/Graveur DVD", $row_modele_devis_pc_dyn['lecteur_type']))) {echo "selected=\"selected\"";} ?>>Lecteur/Graveur DVD</option>
            <option value="Lecteur Blu-ray" <?php if (!(strcmp("Lecteur Blu-ray", $row_modele_devis_pc_dyn['lecteur_type']))) {echo "selected=\"selected\"";} ?>>Lecteur Blu-ray</option>
            <option value="Lecteur/Graveur Blu-ray" <?php if (!(strcmp("Lecteur/Graveur Blu-ray", $row_modele_devis_pc_dyn['lecteur_type']))) {echo "selected=\"selected\"";} ?>>Lecteur/Graveur Blu-ray</option>
            </select>
          </label></td>
        </tr>
      <tr>
        <th nowrap="nowrap" scope="row"><div align="center">Taille de l'&eacute;cran souhait&eacute;</div></th>
        <td><label>
          <select name="taille_ecran2" id="taille_ecran2" title="<?php echo $row_modele_devis_pc_dyn['taille_ecran']; ?>">
            <option value="----------" <?php if (!(strcmp("----------", $row_modele_devis_pc_dyn['taille_ecran']))) {echo "selected=\"selected\"";} ?>>----------</option>
            <option value="7''" <?php if (!(strcmp("7\'\'", $row_modele_devis_pc_dyn['taille_ecran']))) {echo "selected=\"selected\"";} ?>>7''</option>
            <option value="8''" <?php if (!(strcmp("8\'\'", $row_modele_devis_pc_dyn['taille_ecran']))) {echo "selected=\"selected\"";} ?>>8'</option>
            <option value="10''" <?php if (!(strcmp("10\'\'", $row_modele_devis_pc_dyn['taille_ecran']))) {echo "selected=\"selected\"";} ?>>10''</option>
            <option value="11''" <?php if (!(strcmp("11\'\'", $row_modele_devis_pc_dyn['taille_ecran']))) {echo "selected=\"selected\"";} ?>>11''</option>
            <option value="13''" <?php if (!(strcmp("13\'\'", $row_modele_devis_pc_dyn['taille_ecran']))) {echo "selected=\"selected\"";} ?>>13''</option>
            <option value="14''" <?php if (!(strcmp("14\'\'", $row_modele_devis_pc_dyn['taille_ecran']))) {echo "selected=\"selected\"";} ?>>14''</option>
            <option value="15''" <?php if (!(strcmp("15\'\'", $row_modele_devis_pc_dyn['taille_ecran']))) {echo "selected=\"selected\"";} ?>>15''</option>
            <option value="17''" <?php if (!(strcmp("17\'\'", $row_modele_devis_pc_dyn['taille_ecran']))) {echo "selected=\"selected\"";} ?>>17''</option>
            <option value="20''" <?php if (!(strcmp("20\'\'", $row_modele_devis_pc_dyn['taille_ecran']))) {echo "selected=\"selected\"";} ?>>20''</option>
            <option value="21'' - 22''" <?php if (!(strcmp("21\'\' - 22\'\'", $row_modele_devis_pc_dyn['taille_ecran']))) {echo "selected=\"selected\"";} ?>>21'' - 22''</option>
            <option value="23'' - 24''" <?php if (!(strcmp("23\'\' - 24\'\'", $row_modele_devis_pc_dyn['taille_ecran']))) {echo "selected=\"selected\"";} ?>>23'' - 24''</option>
            <option value="27'' et sup&eacute;rieur" <?php if (!(strcmp("27\'\' et supérieur", $row_modele_devis_pc_dyn['taille_ecran']))) {echo "selected=\"selected\"";} ?>>27'' et sup&eacute;rieur</option>
            </select>
          </label></td>
        </tr>
      <tr>
        <th nowrap="nowrap" scope="row">&nbsp;</th>
        <td><label>
          <input type="submit" name="submit2" id="submit2" value="Modifier" />
          </label></td>
        </tr>
      </table>
    <input type="hidden" name="MM_update" value="form3" />
  </form>
  <p>&nbsp;</p>
  <h1 class="Style7"></h1>
  <h1>&nbsp;</h1>
  <!-- end .content -->
<!-- InstanceEndEditable --></div>
<div class="sidebar2" id="LayoutDiv5" align="center"><!-- InstanceBeginEditable name="sidebar2" -->
    <?php include ('../inc/sidebar/sidebar2_pub.inc.php'); ?>
<!-- InstanceEndEditable --></div>
<div id="LayoutDiv6" class="footer"><!-- InstanceBeginEditable name="footer" -->
  <?php include('../inc/footer/footer_users.inc.php');?>
  <!-- end .footer -->
<!-- InstanceEndEditable --></div>
</div>
</body>
<!-- InstanceEnd --></html>
<?php
mysql_free_result($modele_devis_pc);

mysql_free_result($modele_devis_pc_dyn);

mysql_free_result($os);
?>
