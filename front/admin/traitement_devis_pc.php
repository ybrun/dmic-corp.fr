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

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE dmic_demandedevis SET garantie_os=%s, garantie_os_matos=%s, clonage=%s, statut=%s, date_priseencompte=%s, date_cloture=%s WHERE id_devis=%s",
                       GetSQLValueString(isset($_POST['garantie_os']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString(isset($_POST['garantie_os_matos']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString(isset($_POST['clonage']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString($_POST['statut2'], "int"),
                       GetSQLValueString($_POST['date_priseencompte'], "date"),
                       GetSQLValueString($_POST['date_cloture'], "date"),
                       GetSQLValueString($_POST['id'], "int"));

  mysql_select_db($database_dmic, $dmic);
  $Result1 = mysql_query($updateSQL, $dmic) or die(mysql_error());

  $updateGoTo = "/front/devis.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form2")) {
  $updateSQL = sprintf("UPDATE dmic_demandedevis SET modele_boitier=%s, quantite_boitier=%s, prix_unitaire_boitier=%s, fournisseur_boitier=%s, prix_total_boitier=%s, modele_mothercard=%s, quantite_mothercard=%s, prix_unitaire_mothercard=%s, fournisseur_mothercard=%s, prix_total_mothercard=%s, modele_processeur=%s, quantite_processeur=%s, prix_unitaire_processeur=%s, fournisseur_processeur=%s, prix_total_processeur=%s, modele_ventilateur=%s, quantite_ventilateur=%s, prix_unitaire_ventilateur=%s, fournisseur_ventilateur=%s, prix_total_ventilateur=%s, modele_ram=%s, quantite_ram=%s, prix_unitaire_ram=%s, fournisseur_ram=%s, prix_total_ram=%s, modele_ddc=%s, quantite_ddc=%s, prix_unitaire_ddc=%s, fournisseur_ddc=%s, prix_total_ddc=%s, modele_ddd=%s, quantite_ddd=%s, prix_unitaire_ddd=%s, fournisseur_ddd=%s, prix_total_ddd=%s, modele_lecteuroptique=%s, quantite_lecteuroptique=%s, prix_unitaire_lecteuroptique=%s, fournisseur_lecteuroptique=%s, prix_total_lecteuroptique=%s, modele_ecran=%s, quantite_ecran=%s, prix_unitaire_ecran=%s, fournisseur_ecran=%s, prix_total_ecran=%s, modele_clavier=%s, quantite_clavier=%s, prix_unitaire_clavier=%s, fournisseur_clavier=%s, prix_total_clavier=%s, modele_souris=%s, quantite_souris=%s, prix_unitaire_souris=%s, fournisseur_souris=%s, prix_total_souris=%s, quantite_os=%s, prix_unitaire_os=%s, fournisseur_os=%s, prix_total_os=%s, prix_total_options=%s, prestations=%s, quantite_prestations=%s, prix_unitaire_prestations=%s, prix_total_prestations=%s, autres=%s, quantite_autres=%s, prix_unitaires_autres=%s, fournisseur_autres=%s, prix_total_autres=%s, prix_total_devis=%s WHERE id_devis=%s",
                       GetSQLValueString($_POST['modele_boitier'], "text"),
                       GetSQLValueString($_POST['quantite_boitier'], "int"),
                       GetSQLValueString($_POST['prix_unitaire_boitier'], "int"),
                       GetSQLValueString($_POST['fournisseur_boitier'], "int"),
                       GetSQLValueString($_POST['prix_total_boitier'], "int"),
                       GetSQLValueString($_POST['modele_mothercard'], "text"),
                       GetSQLValueString($_POST['quantite_mothercard'], "int"),
                       GetSQLValueString($_POST['prix_unitaire_mothercard'], "int"),
                       GetSQLValueString($_POST['fournisseur_mothercard'], "int"),
                       GetSQLValueString($_POST['prix_total_mothercard'], "int"),
                       GetSQLValueString($_POST['modele_processeur'], "text"),
                       GetSQLValueString($_POST['quantite_processeur'], "int"),
                       GetSQLValueString($_POST['prix_unitaire_processeur'], "int"),
                       GetSQLValueString($_POST['fournisseur_processeur'], "int"),
                       GetSQLValueString($_POST['prix_total_processeur'], "int"),
                       GetSQLValueString($_POST['modele_ventilateur'], "text"),
                       GetSQLValueString($_POST['quantite_ventilateur'], "int"),
                       GetSQLValueString($_POST['prix_unitaire_ventilateur'], "int"),
                       GetSQLValueString($_POST['fournisseur_ventilateur'], "int"),
                       GetSQLValueString($_POST['prix_total_ventilateur'], "int"),
                       GetSQLValueString($_POST['modele_ram'], "text"),
                       GetSQLValueString($_POST['quantite_ram'], "int"),
                       GetSQLValueString($_POST['prix_unitaire_ram'], "int"),
                       GetSQLValueString($_POST['fournisseur_ram'], "int"),
                       GetSQLValueString($_POST['prix_total_ram'], "int"),
                       GetSQLValueString($_POST['modele_ddc'], "text"),
                       GetSQLValueString($_POST['quantite_ddc'], "int"),
                       GetSQLValueString($_POST['prix_unitaire_ddc'], "int"),
                       GetSQLValueString($_POST['fournisseur_ddc'], "int"),
                       GetSQLValueString($_POST['prix_total_ddc'], "int"),
                       GetSQLValueString($_POST['modele_ddd'], "text"),
                       GetSQLValueString($_POST['quantite_ddd'], "int"),
                       GetSQLValueString($_POST['prix_unitaire_ddd'], "int"),
                       GetSQLValueString($_POST['fournisseur_ddd'], "int"),
                       GetSQLValueString($_POST['prix_total_ddd'], "int"),
                       GetSQLValueString($_POST['modele_lecteuroptique'], "text"),
                       GetSQLValueString($_POST['quantite_lecteuroptique'], "int"),
                       GetSQLValueString($_POST['prix_unitaire_lecteuroptique'], "int"),
                       GetSQLValueString($_POST['fournisseur_lecteuroptique'], "int"),
                       GetSQLValueString($_POST['prix_total_lecteuroptique'], "int"),
                       GetSQLValueString($_POST['modele_ecran'], "text"),
                       GetSQLValueString($_POST['quantite_ecran'], "int"),
                       GetSQLValueString($_POST['prix_unitaire_ecran'], "int"),
                       GetSQLValueString($_POST['fournisseur_ecran'], "int"),
                       GetSQLValueString($_POST['prix_total_ecran'], "int"),
                       GetSQLValueString($_POST['modele_clavier'], "text"),
                       GetSQLValueString($_POST['quantite_clavier'], "int"),
                       GetSQLValueString($_POST['prix_unitaire_clavier'], "int"),
                       GetSQLValueString($_POST['fournisseur_clavier'], "int"),
                       GetSQLValueString($_POST['prix_total_clavier'], "int"),
                       GetSQLValueString($_POST['modele_souris'], "text"),
                       GetSQLValueString($_POST['quantite_souris'], "int"),
                       GetSQLValueString($_POST['prix_unitaire_souris'], "int"),
                       GetSQLValueString($_POST['fournisseur_souris'], "int"),
                       GetSQLValueString($_POST['prix_total_souris'], "int"),
                       GetSQLValueString($_POST['quantite_os'], "int"),
                       GetSQLValueString($_POST['prix_os'], "int"),
                       GetSQLValueString($_POST['fournisseur_os'], "int"),
                       GetSQLValueString($_POST['prix_total_os'], "int"),
                       GetSQLValueString($_POST['prix_total_options'], "int"),
                       GetSQLValueString($_POST['prestations'], "text"),
                       GetSQLValueString($_POST['quantite_prestation'], "int"),
                       GetSQLValueString($_POST['prix_unitaire_prestations'], "int"),
                       GetSQLValueString($_POST['prix_total_prestations'], "int"),
                       GetSQLValueString($_POST['autres'], "text"),
                       GetSQLValueString($_POST['quantite_autres'], "int"),
                       GetSQLValueString($_POST['prix_unitaire_autres'], "int"),
                       GetSQLValueString($_POST['fournisseur_autres'], "int"),
                       GetSQLValueString($_POST['prix_total_autres'], "int"),
                       GetSQLValueString($_POST['prix_total_devis'], "int"),
                       GetSQLValueString($_POST['id_devis'], "int"));

  mysql_select_db($database_dmic, $dmic);
  $Result1 = mysql_query($updateSQL, $dmic) or die(mysql_error());

  $updateGoTo = "/front/admin/traitement_devis_pc.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$colname_devis_pc_dyn = "-1";
if (isset($_GET['id'])) {
  $colname_devis_pc_dyn = $_GET['id'];
}
mysql_select_db($database_dmic, $dmic);
$query_devis_pc_dyn = sprintf("SELECT * FROM dmic_demandedevis WHERE id_devis = %s", GetSQLValueString($colname_devis_pc_dyn, "int"));
$devis_pc_dyn = mysql_query($query_devis_pc_dyn, $dmic) or die(mysql_error());
$row_devis_pc_dyn = mysql_fetch_assoc($devis_pc_dyn);
$totalRows_devis_pc_dyn = mysql_num_rows($devis_pc_dyn);

mysql_select_db($database_dmic, $dmic);
$query_statut_devis = "SELECT * FROM dmic_devisstatut";
$statut_devis = mysql_query($query_statut_devis, $dmic) or die(mysql_error());
$row_statut_devis = mysql_fetch_assoc($statut_devis);
$totalRows_statut_devis = mysql_num_rows($statut_devis);

mysql_select_db($database_dmic, $dmic);
$query_fournisseur = "SELECT * FROM dmic_fournisseur ORDER BY name_fournisseur ASC";
$fournisseur = mysql_query($query_fournisseur, $dmic) or die(mysql_error());
$row_fournisseur = mysql_fetch_assoc($fournisseur);
$totalRows_fournisseur = mysql_num_rows($fournisseur);

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
?>
<?php $statut_devispc = $row_devis_pc_dyn['statut']; ?>
<!doctype html>
<html><!-- InstanceBegin template="/Templates/modele_dmic_3.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf8">
<meta name="robots" content="noindex">
<!-- InstanceBeginEditable name="doctitle" -->
<title>DMIC Corp</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<meta charset="utf-8">
<script src="../../SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="../../SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css">
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
<!-- InstanceEndEditable --></div>
<div id="LayoutDiv2" class="header_pub"><!-- InstanceBeginEditable name="header_pub" -->
	<?php include('../inc/header/header_pub.inc.php');?>
<!-- InstanceEndEditable --></div>
  <div class="sidebar1" id="LayoutDiv3" align="center"><!-- InstanceBeginEditable name="sidebar1" -->
   <?php include ('../inc/sidebar/stats/stats.php'); ?>
   </p>
<!-- InstanceEndEditable --></div>
<div id="LayoutDiv4" class="content"><!-- InstanceBeginEditable name="content" -->
<div id="TabbedPanels1" class="TabbedPanels">
  <ul class="TabbedPanelsTabGroup">
    <li class="TabbedPanelsTab" tabindex="0">La demande</li>
    <?php if ($statut_devispc>=2) { ?>
    <li class="TabbedPanelsTab" tabindex="0">Le devis</li>
    <?php } ?>
  </ul>
  <div class="TabbedPanelsContentGroup">
    <div class="TabbedPanelsContent">
      <form name="form1" method="POST" action="<?php echo $editFormAction; ?>">
      <table width="60%" border="1" align="center" class="tab_cadrehov">
        <?php if ($row_devis_pc_dyn['pc_type']!=NULL) { ?><tr>
          <th width="30%" nowrap="nowrap" scope="row"><div align="center">
            <input name="id" type="hidden" id="id" value="<?php echo $row_devis_pc_dyn['id_devis']; ?>">
            Type d'ordinateur</div></th>
          <td width="30%"><p>
            <label></label>
            <label></label>
            <?php echo $row_devis_pc_dyn['pc_type']; ?><br />
          </p></td>
        </tr><?php } ?>
        <?php if ($row_devis_pc_dyn['pc_categorie']!=NULL) { ?><tr>
          <th nowrap="nowrap" scope="row"><div align="center">Cat&eacute;gorie</div></th>
          <td><p><?php echo $row_devis_pc_dyn['pc_categorie']; ?><br />
          </p></td>
        </tr><?php } ?>
        <?php if ($row_devis_pc_dyn['budget']!=NULL) { ?><tr>
          <th nowrap="nowrap" scope="row"><div align="center">Budget (en &euro;)</div></th>
          <td><?php echo $row_devis_pc_dyn['budget']; ?></td>
        </tr><?php } ?>
        <?php if ($row_devis_pc_dyn['os']!=NULL) { ?><tr>
          <th nowrap="nowrap" scope="row"><div align="center">Syst&egrave;me d'exploitation souhait&eacute;</div></th>
          <td><?php echo $row_devis_pc_dyn['os']; ?></td>
        </tr><?php } ?>
        <?php if ($row_devis_pc_dyn['pc_type']=='Unit&eacute; centrale' & $row_devis_pc_dyn['pc_categorie']!=NULL) { ?><tr>
          <th nowrap="nowrap" scope="row"><div align="center">Type de processeur souhait&eacute;</div></th>
          <td><?php echo $row_devis_pc_dyn['processeur_type']; ?></td>
        </tr><?php } ?>
        <?php if ($row_devis_pc_dyn['ram']!=0) { ?><tr>
          <th nowrap="nowrap" scope="row"><div align="center">Quantit&eacute; de M&eacute;moire RAM souhait&eacute; (en Go)</div></th>
          <td><?php echo $row_devis_pc_dyn['ram']; ?></td>
        </tr><?php } ?>
        <?php if ($row_devis_pc_dyn['nbr_disque']!=0) { ?><tr>
          <th nowrap="nowrap" scope="row"><div align="center">Nombre de disque dur souhait&eacute;</div></th>
          <td><?php echo $row_devis_pc_dyn['nbr_disque']; ?></td>
        </tr><?php } ?>
        <?php if ($row_devis_pc_dyn['taille_C']!=0) { ?><tr> 
          <th nowrap="nowrap" scope="row"><div align="center">Taille du disque dur syst&egrave;me souhait&eacute;</div></th>
          <td><?php echo $row_devis_pc_dyn['taille_C']; ?></td>
        </tr><?php } ?>
        <?php if ($row_devis_pc_dyn['taille_D']!=0) { ?><tr>
          <th nowrap="nowrap" scope="row"><div align="center">Taille du 2&egrave;me disque dur</div></th>
          <td><?php echo $row_devis_pc_dyn['taille_D']; ?></td>
        </tr><?php } ?>
        <?php if ($row_devis_pc_dyn['lecteur_type']!=NULL) { ?><tr>
          <th nowrap="nowrap" scope="row"><div align="center">Type de lecteur souhait&eacute;</div></th>
          <td><?php echo $row_devis_pc_dyn['lecteur_type']; ?></td>
        </tr><?php } ?>
        <?php if ($row_devis_pc_dyn['taille_ecran']!=NULL) { ?><tr>
          <th nowrap="nowrap" scope="row"><div align="center">Taille de l'&eacute;cran souhait&eacute;</div></th>
          <td><?php echo $row_devis_pc_dyn['taille_ecran']; ?></td>
        </tr><?php } ?>
        <?php if ($row_devis_pc_dyn['souris']==1 or $row_devis_pc_dyn['clavier']==1) { ?><tr>
          <th nowrap="nowrap" scope="row">Accessoires</th>
          <td><?php if ($row_devis_pc_dyn['souris']==1) { echo "<ul><li>Souris</li></ul>";};
		  	  		if ($row_devis_pc_dyn['clavier']==1) { echo "<ul><li>Clavier</li></ul>";};
			  ?>	
          </td>
        </tr><?php } ?>
        <?php if ($row_devis_pc_dyn['garantie_os']==1 or $row_devis_pc_dyn['garantie_matos']==1 or $row_devis_pc_dyn['garantie_os_matos']==1 or $row_devis_pc_dyn['clonage']==1) { ?><tr>
          <th nowrap="nowrap" scope="row"><div align="center">Options</div></th>
          <td><?php if ($row_devis_pc_dyn['garantie_os']==1) { echo "<ul><li>Garantie OS</li></ul>";}?>
            <?php if ($row_devis_pc_dyn['garantie_matos']==1) { echo "<ul><li>Garantie matérielles</li></ul>";}?>
			<?php if ($row_devis_pc_dyn['garantie_os_matos']==1) { echo "<ul><li>Garantie OS et matérielles</li></ul>";}?>
			<?php if ($row_devis_pc_dyn['clonage']==1) { echo "<ul><li>Clonage du système</li></ul>";}?></td>
        </tr><?php } ?>
        <tr>
          <th nowrap="nowrap" scope="row"><div align="center">Commantaires</div></th>
          <td><?php echo $row_devis_pc_dyn['commentaires']; ?></td>
        </tr>
        <tr>
          <th nowrap="nowrap" scope="row"><div align="center">Nom et Pr&eacute;nom</div></th>
          <td><?php echo $row_devis_pc_dyn['contact']; ?></td>
        </tr>
        <tr>
          <th nowrap="nowrap" scope="row"><div align="center">E-Mail</div></th>
          <td><?php echo $row_devis_pc_dyn['email_contact']; ?></td>
        </tr>
        <tr>
          <th nowrap="nowrap" scope="row">Date de création</th>
          <td><?php echo $row_devis_pc_dyn['date_creation']; ?></td>
        </tr>
        <tr>
          <th nowrap="nowrap" scope="row">Date de prise en compte</th>
          <td><?php echo $row_devis_pc_dyn['date_priseencompte']; ?></td>
        </tr>
        <tr>
          <th nowrap="nowrap" scope="row">Date de clôture</th>
          <td><?php echo $row_devis_pc_dyn['date_cloture']; ?></td>
        </tr>
        <?php if ($_SESSION['MM_UserGroup']=='Administrateurs') { ?><tr>
          <th nowrap="nowrap" scope="row">Statut</th>
          <td><select name="statut2" id="statut2">
            <?php
do {  
?>
            <option value="<?php echo $row_statut_devis['id_statut']?>"<?php if (!(strcmp($row_statut_devis['id_statut'], $row_devis_pc_dyn['statut']))) {echo "selected=\"selected\"";} ?>><?php echo $row_statut_devis['statut']?></option>
            <?php
} while ($row_statut_devis = mysql_fetch_assoc($statut_devis));
  $rows = mysql_num_rows($statut_devis);
  if($rows > 0) {
      mysql_data_seek($statut_devis, 0);
	  $row_statut_devis = mysql_fetch_assoc($statut_devis);
  }
?>
          </select></td>
        </tr><?php } ?>
        <tr>
          <th nowrap="nowrap" scope="row"><input name="date_priseencompte" type="hidden" id="date_priseencompte" value="<?php if ($statut_devispc==1) 
		  							{ 
		  								$date = date("Y-m-d"); 
										echo $date;
									}
		  						   else 
								   	{
										$date = $row_devis_pc_dyn['date_priseencompte']; 
										echo $date;
									} ?>">
            <input name="date_cloture" type="hidden" id="date_cloture" value="<?php if ($statut_devispc==3) { $date = date("Y-m-d"); echo $date;} ?>"></th>
          <?php if ($_SESSION['MM_UserGroup']=='Administrateurs') { ?><td><label>
            <input type="submit" name="submit" id="submit" value="Enregistrer" />
          </label></td><?php } ?>
        </tr>
      </table>
      <input type="hidden" name="MM_update" value="form1">
      </form>
    </div>
    <?php if ($statut_devispc>=2) { ?>
    <div class="TabbedPanelsContent">
      <form name="form2" method="POST" action="<?php echo $editFormAction; ?>">
        <table width="94%" border="1" align="center" class="tab_cadrehov">
          <tr>
            <th colspan="4" align="center" valign="middle" scope="col"><input name="id_devis" type="hidden" id="id_devis" value="<?php echo $row_devis_pc_dyn['id_devis']; ?>">
              Matériel</th>
            <th width="65" rowspan="2" align="center" valign="middle" scope="col">Fournisseur</th>
            <th width="65" rowspan="2" align="center" valign="middle" scope="col">Prix TTC Total</th>
          </tr>
          <tr>
            <th width="21%" align="center" valign="middle" scope="row">Type</th>
            <th width="29%" align="center" valign="middle"><strong>Modèle</strong></th>
            <th width="65" align="center" valign="middle"><strong>Quantité</strong></th>
            <th width="65" align="center" valign="middle"><strong>Prix TTC Unitaire</strong></th>
          </tr>
          <?php if ($row_devis_pc_dyn['pc_type']!=NULL) { ?><tr>
            <th align="center" valign="middle" scope="row">Boîtier</th>
            <td align="center" valign="middle"><textarea name="modele_boitier" cols="45" rows="3" id="modele_boitier"><?php echo $row_devis_pc_dyn['modele_boitier']; ?></textarea></td>
            <td width="65" align="center" valign="middle"><input name="quantite_boitier" type="text" id="quantite_boitier" value="<?php echo $row_devis_pc_dyn['quantite_boitier']; ?>" size="2"></td>
            <td width="65" align="center" valign="middle"><input name="prix_unitaire_boitier" type="text" id="prix_unitaire_boitier" value="<?php echo $row_devis_pc_dyn['prix_unitaire_boitier']; ?>" size="2"></td>
            <td width="65" align="center" valign="middle"><select name="fournisseur_boitier" id="fournisseur_boitier" title="<?php echo $row_devis_pc_dyn['fournisseur_boitier']; ?>">
              <?php
do {  
?>
              <option value="<?php echo $row_fournisseur['id_fournisseur']?>"<?php if (!(strcmp($row_fournisseur['id_fournisseur'], $row_devis_pc_dyn['fournisseur_boitier']))) {echo "selected=\"selected\"";} ?>><?php echo $row_fournisseur['name_fournisseur']?></option>
              <?php
} while ($row_fournisseur = mysql_fetch_assoc($fournisseur));
  $rows = mysql_num_rows($fournisseur);
  if($rows > 0) {
      mysql_data_seek($fournisseur, 0);
	  $row_fournisseur = mysql_fetch_assoc($fournisseur);
  }
?>
            </select></td>
            <td width="65" align="center" valign="middle"><input name="prix_total_boitier" type="text" id="prix_total_boitier" value="<?php echo $row_devis_pc_dyn['prix_total_boitier']; ?>" size="2"></td>
          </tr><?php } ?>
          <?php if ($row_devis_pc_dyn['pc_type']='Unit&eacute; centrale' & $row_devis_pc_dyn['pc_categorie']!=NULL) { ?><tr>
            <th align="center" valign="middle" scope="row">Carte mère</th>
            <td align="center" valign="middle"><textarea name="modele_mothercard" cols="45" rows="3" id="modele_mothercard"><?php echo $row_devis_pc_dyn['modele_mothercard']; ?></textarea></td>
            <td width="65" align="center" valign="middle"><input name="quantite_mothercard" type="text" id="quantite_mothercard" value="<?php echo $row_devis_pc_dyn['quantite_mothercard']; ?>" size="2"></td>
            <td width="65" align="center" valign="middle"><input name="prix_unitaire_mothercard" type="text" id="prix_unitaire_mothercard" value="<?php echo $row_devis_pc_dyn['prix_unitaire_mothercard']; ?>" size="2"></td>
            <td width="65" align="center" valign="middle"><select name="fournisseur_mothercard" id="fournisseur_mothercard" title="<?php echo $row_devis_pc_dyn['fournisseur_mothercard']; ?>">
              <?php
do {  
?>
              <option value="<?php echo $row_fournisseur['id_fournisseur']?>"<?php if (!(strcmp($row_fournisseur['id_fournisseur'], $row_devis_pc_dyn['fournisseur_mothercard']))) {echo "selected=\"selected\"";} ?>><?php echo $row_fournisseur['name_fournisseur']?></option>
              <?php
} while ($row_fournisseur = mysql_fetch_assoc($fournisseur));
  $rows = mysql_num_rows($fournisseur);
  if($rows > 0) {
      mysql_data_seek($fournisseur, 0);
	  $row_fournisseur = mysql_fetch_assoc($fournisseur);
  }
?>
            </select></td>
            <td width="65" align="center" valign="middle"><input name="prix_total_mothercard" type="text" id="prix_total_mothercard" value="<?php echo $row_devis_pc_dyn['prix_total_mothercard']; ?>" size="2"></td>
          </tr><?php } ?>
          <?php if ($row_devis_pc_dyn['pc_type']=='Unit&eacute; centrale' & $row_devis_pc_dyn['pc_categorie']!=NULL) { ?><tr>
            <th align="center" valign="middle" scope="row">Processeur</th>
            <td align="center" valign="middle"><textarea name="modele_processeur" cols="45" rows="3" id="modele_processeur"><?php echo $row_devis_pc_dyn['modele_processeur']; ?></textarea></td>
            <td width="65" align="center" valign="middle"><input name="quantite_processeur" type="text" id="quantite_processeur" value="<?php echo $row_devis_pc_dyn['quantite_processeur']; ?>" size="2"></td>
            <td width="65" align="center" valign="middle"><input name="prix_unitaire_processeur" type="text" id="prix_unitaire_processeur" value="<?php echo $row_devis_pc_dyn['prix_unitaire_processeur']; ?>" size="2"></td>
            <td width="65" align="center" valign="middle"><select name="fournisseur_processeur" id="fournisseur_processeur" title="<?php echo $row_devis_pc_dyn['fournisseur_processeur']; ?>">
              <?php
do {  
?>
              <option value="<?php echo $row_fournisseur['id_fournisseur']?>"<?php if (!(strcmp($row_fournisseur['id_fournisseur'], $row_devis_pc_dyn['fournisseur_processeur']))) {echo "selected=\"selected\"";} ?>><?php echo $row_fournisseur['name_fournisseur']?></option>
              <?php
} while ($row_fournisseur = mysql_fetch_assoc($fournisseur));
  $rows = mysql_num_rows($fournisseur);
  if($rows > 0) {
      mysql_data_seek($fournisseur, 0);
	  $row_fournisseur = mysql_fetch_assoc($fournisseur);
  }
?>
            </select></td>
            <td width="65" align="center" valign="middle"><input name="prix_total_processeur" type="text" id="prix_total_processeur" value="<?php echo $row_devis_pc_dyn['prix_total_processeur']; ?>" size="2"></td>
          </tr><?php } ?>
          <?php if ($row_devis_pc_dyn['pc_type']=='Unit&eacute; centrale' & $row_devis_pc_dyn['pc_categorie']!=NULL) { ?><tr>
            <th align="center" valign="middle" scope="row">Ventilateur</th>
            <td align="center" valign="middle"><textarea name="modele_ventilateur" cols="45" rows="3" id="modele_ventilateur"><?php echo $row_devis_pc_dyn['modele_ventilateur']; ?></textarea></td>
            <td width="65" align="center" valign="middle"><input name="quantite_ventilateur" type="text" id="quantite_ventilateur" value="<?php echo $row_devis_pc_dyn['quantite_ventilateur']; ?>" size="2"></td>
            <td width="65" align="center" valign="middle"><input name="prix_unitaire_ventilateur" type="text" id="prix_unitaire_ventilateur" value="<?php echo $row_devis_pc_dyn['prix_unitaire_ventilateur']; ?>" size="2"></td>
            <td width="65" align="center" valign="middle"><select name="fournisseur_ventilateur" id="fournisseur_ventilateur" title="<?php echo $row_devis_pc_dyn['fournisseur_ventilateur']; ?>">
              <?php
do {  
?>
              <option value="<?php echo $row_fournisseur['id_fournisseur']?>"<?php if (!(strcmp($row_fournisseur['id_fournisseur'], $row_devis_pc_dyn['fournisseur_ventilateur']))) {echo "selected=\"selected\"";} ?>><?php echo $row_fournisseur['name_fournisseur']?></option>
              <?php
} while ($row_fournisseur = mysql_fetch_assoc($fournisseur));
  $rows = mysql_num_rows($fournisseur);
  if($rows > 0) {
      mysql_data_seek($fournisseur, 0);
	  $row_fournisseur = mysql_fetch_assoc($fournisseur);
  }
?>
            </select></td>
            <td width="65" align="center" valign="middle"><input name="prix_total_ventilateur" type="text" id="prix_total_ventilateur" value="<?php echo $row_devis_pc_dyn['prix_total_ventilateur']; ?>" size="2"></td>
          </tr><?php } ?>
          <?php if ($row_devis_pc_dyn['ram']!=0 or $row_devis_pc_dyn['ram']!=NULL) { ?><tr>
            <th align="center" valign="middle" scope="row">Barrette de RAM</th>
            <td align="center" valign="middle"><textarea name="modele_ram" cols="45" rows="3" id="modele_ram"><?php echo $row_devis_pc_dyn['modele_ram']; ?></textarea></td>
            <td width="65" align="center" valign="middle"><input name="quantite_ram" type="text" id="quantite_ram" value="<?php echo $row_devis_pc_dyn['quantite_ram']; ?>" size="2"></td>
            <td width="65" align="center" valign="middle"><input name="prix_unitaire_ram" type="text" id="prix_unitaire_ram" value="<?php echo $row_devis_pc_dyn['prix_unitaire_ram']; ?>" size="2"></td>
            <td width="65" align="center" valign="middle"><select name="fournisseur_ram" id="fournisseur_ram" title="<?php echo $row_devis_pc_dyn['fournisseur_ram']; ?>">
              <?php
do {  
?>
              <option value="<?php echo $row_fournisseur['id_fournisseur']?>"<?php if (!(strcmp($row_fournisseur['id_fournisseur'], $row_devis_pc_dyn['fournisseur_ram']))) {echo "selected=\"selected\"";} ?>><?php echo $row_fournisseur['name_fournisseur']?></option>
              <?php
} while ($row_fournisseur = mysql_fetch_assoc($fournisseur));
  $rows = mysql_num_rows($fournisseur);
  if($rows > 0) {
      mysql_data_seek($fournisseur, 0);
	  $row_fournisseur = mysql_fetch_assoc($fournisseur);
  }
?>
            </select></td>
            <td width="65" align="center" valign="middle"><input name="prix_total_ram" type="text" id="prix_total_ram" value="<?php echo $row_devis_pc_dyn['prix_total_ram']; ?>" size="2"></td>
          </tr><?php } ?>
          <?php if ($row_devis_pc_dyn['nbr_disque']!=0 or $row_devis_pc_dyn['taille_C']!=0) { ?><tr>
            <th align="center" valign="middle" scope="row">Disque dur système</th>
            <td align="center" valign="middle"><textarea name="modele_ddc" cols="45" rows="3" id="modele_ddc"><?php echo $row_devis_pc_dyn['modele_ddc']; ?></textarea></td>
            <td width="65" align="center" valign="middle"><input name="quantite_ddc" type="text" id="quantite_ddc" value="<?php echo $row_devis_pc_dyn['quantite_ddc']; ?>" size="2"></td>
            <td width="65" align="center" valign="middle"><input name="prix_unitaire_ddc" type="text" id="prix_unitaire_ddc" value="<?php echo $row_devis_pc_dyn['prix_unitaire_ddc']; ?>" size="2"></td>
            <td width="65" align="center" valign="middle"><select name="fournisseur_ddc" id="fournisseur_ddc" title="<?php echo $row_devis_pc_dyn['fournisseur_ddc']; ?>">
              <?php
do {  
?>
              <option value="<?php echo $row_fournisseur['id_fournisseur']?>"<?php if (!(strcmp($row_fournisseur['id_fournisseur'], $row_devis_pc_dyn['fournisseur_ddc']))) {echo "selected=\"selected\"";} ?>><?php echo $row_fournisseur['name_fournisseur']?></option>
              <?php
} while ($row_fournisseur = mysql_fetch_assoc($fournisseur));
  $rows = mysql_num_rows($fournisseur);
  if($rows > 0) {
      mysql_data_seek($fournisseur, 0);
	  $row_fournisseur = mysql_fetch_assoc($fournisseur);
  }
?>
            </select></td>
            <td width="65" align="center" valign="middle"><input name="prix_total_ddc" type="text" id="prix_total_ddc" value="<?php echo $row_devis_pc_dyn['prix_total_ddc']; ?>" size="2"></td>
          </tr><?php } ?>
          <?php if ($row_devis_pc_dyn['nbr_disque']!=0 or $row_devis_pc_dyn['taille_D']!=0) { ?><tr>
            <th align="center" valign="middle" scope="row">2ème disque dur</th>
            <td align="center" valign="middle"><textarea name="modele_ddd" cols="45" rows="3" id="modele_ddd"><?php echo $row_devis_pc_dyn['modele_ddd']; ?></textarea></td>
            <td width="65" align="center" valign="middle"><input name="quantite_ddd" type="text" id="quantite_ddd" value="<?php echo $row_devis_pc_dyn['quantite_ddd']; ?>" size="2"></td>
            <td width="65" align="center" valign="middle"><input name="prix_unitaire_ddd" type="text" id="prix_unitaire_ddd" value="<?php echo $row_devis_pc_dyn['prix_unitaire_ddd']; ?>" size="2"></td>
            <td width="65" align="center" valign="middle"><select name="fournisseur_ddd" id="fournisseur_ddd" title="<?php echo $row_devis_pc_dyn['fournisseur_ddd']; ?>">
              <?php
do {  
?>
              <option value="<?php echo $row_fournisseur['id_fournisseur']?>"<?php if (!(strcmp($row_fournisseur['id_fournisseur'], $row_devis_pc_dyn['fournisseur_ddd']))) {echo "selected=\"selected\"";} ?>><?php echo $row_fournisseur['name_fournisseur']?></option>
              <?php
} while ($row_fournisseur = mysql_fetch_assoc($fournisseur));
  $rows = mysql_num_rows($fournisseur);
  if($rows > 0) {
      mysql_data_seek($fournisseur, 0);
	  $row_fournisseur = mysql_fetch_assoc($fournisseur);
  }
?>
            </select></td>
            <td width="65" align="center" valign="middle"><input name="prix_total_ddd" type="text" id="prix_total_ddd" value="<?php echo $row_devis_pc_dyn['prix_total_ddd']; ?>" size="2"></td>
          </tr><?php } ?>
          <?php if ($row_devis_pc_dyn['lecteur_type']!=NULL) { ?><tr>
            <th align="center" valign="middle" scope="row">Lecteur optique</th>
            <td align="center" valign="middle"><textarea name="modele_lecteuroptique" cols="45" rows="3" id="modele_lecteuroptique"><?php echo $row_devis_pc_dyn['modele_lecteuroptique']; ?></textarea></td>
            <td width="65" align="center" valign="middle"><input name="quantite_lecteuroptique" type="text" id="quantite_lecteuroptique" value="<?php echo $row_devis_pc_dyn['quantite_lecteuroptique']; ?>" size="2"></td>
            <td width="65" align="center" valign="middle"><input name="prix_unitaire_lecteuroptique" type="text" id="prix_unitaire_lecteuroptique" value="<?php echo $row_devis_pc_dyn['prix_unitaire_lecteuroptique']; ?>" size="2"></td>
            <td width="65" align="center" valign="middle"><select name="fournisseur_lecteuroptique" id="fournisseur_lecteuroptique">
              <?php
do {  
?>
              <option value="<?php echo $row_fournisseur['id_fournisseur']?>"<?php if (!(strcmp($row_fournisseur['id_fournisseur'], $row_devis_pc_dyn['fournisseur_lecteuroptique']))) {echo "selected=\"selected\"";} ?>><?php echo $row_fournisseur['name_fournisseur']?></option>
              <?php
} while ($row_fournisseur = mysql_fetch_assoc($fournisseur));
  $rows = mysql_num_rows($fournisseur);
  if($rows > 0) {
      mysql_data_seek($fournisseur, 0);
	  $row_fournisseur = mysql_fetch_assoc($fournisseur);
  }
?>
            </select></td>
            <td width="65" align="center" valign="middle"><input name="prix_total_lecteuroptique" type="text" id="prix_total_lecteuroptique" value="<?php echo $row_devis_pc_dyn['prix_total_lecteuroptique']; ?>" size="2"></td>
          </tr><?php } ?>
          <?php if ($row_devis_pc_dyn['taille_ecran']!=NULL) { ?><tr>
            <th align="center" valign="middle" scope="row">Ecran</th>
            <td align="center" valign="middle"><textarea name="modele_ecran" cols="45" rows="3" id="modele_ecran"><?php echo $row_devis_pc_dyn['modele_ecran']; ?></textarea></td>
            <td width="65" align="center" valign="middle"><input name="quantite_ecran" type="text" id="quantite_ecran" value="<?php echo $row_devis_pc_dyn['quantite_ecran']; ?>" size="2"></td>
            <td width="65" align="center" valign="middle"><input name="prix_unitaire_ecran" type="text" id="prix_unitaire_ecran" value="<?php echo $row_devis_pc_dyn['prix_unitaire_ecran']; ?>" size="2"></td>
            <td width="65" align="center" valign="middle"><select name="fournisseur_ecran" id="fournisseur_ecran">
              <?php
do {  
?>
              <option value="<?php echo $row_fournisseur['id_fournisseur']?>"<?php if (!(strcmp($row_fournisseur['id_fournisseur'], $row_devis_pc_dyn['fournisseur_ecran']))) {echo "selected=\"selected\"";} ?>><?php echo $row_fournisseur['name_fournisseur']?></option>
              <?php
} while ($row_fournisseur = mysql_fetch_assoc($fournisseur));
  $rows = mysql_num_rows($fournisseur);
  if($rows > 0) {
      mysql_data_seek($fournisseur, 0);
	  $row_fournisseur = mysql_fetch_assoc($fournisseur);
  }
?>
            </select></td>
            <td width="65" align="center" valign="middle"><input name="prix_total_ecran" type="text" id="prix_total_ecran" value="<?php echo $row_devis_pc_dyn['prix_total_ecran']; ?>" size="2"></td>
          </tr><?php } ?>
          <?php if ($row_devis_pc_dyn['clavier']==1) { ?><tr>
            <th align="center" valign="middle" scope="row">Clavier</th>
            <td align="center" valign="middle"><textarea name="modele_clavier" cols="45" rows="3" id="modele_clavier"><?php echo $row_devis_pc_dyn['modele_clavier']; ?></textarea></td>
            <td width="65" align="center" valign="middle"><input name="quantite_clavier" type="text" id="quantite_clavier" value="<?php echo $row_devis_pc_dyn['quantite_clavier']; ?>" size="2"></td>
            <td width="65" align="center" valign="middle"><input name="prix_unitaire_clavier" type="text" id="prix_unitaire_clavier" value="<?php echo $row_devis_pc_dyn['prix_unitaire_clavier']; ?>" size="2"></td>
            <td width="65" align="center" valign="middle"><select name="fournisseur_clavier" id="fournisseur_clavier">
              <?php
do {  
?>
              <option value="<?php echo $row_fournisseur['id_fournisseur']?>"<?php if (!(strcmp($row_fournisseur['id_fournisseur'], $row_devis_pc_dyn['fournisseur_clavier']))) {echo "selected=\"selected\"";} ?>><?php echo $row_fournisseur['name_fournisseur']?></option>
              <?php
} while ($row_fournisseur = mysql_fetch_assoc($fournisseur));
  $rows = mysql_num_rows($fournisseur);
  if($rows > 0) {
      mysql_data_seek($fournisseur, 0);
	  $row_fournisseur = mysql_fetch_assoc($fournisseur);
  }
?>
            </select></td>
            <td width="65" align="center" valign="middle"><input name="prix_total_clavier" type="text" id="prix_total_clavier" value="<?php echo $row_devis_pc_dyn['prix_total_clavier']; ?>" size="2"></td>
          </tr><?php } ?>
          <?php if ($row_devis_pc_dyn['souris']==1) { ?><tr>
            <th align="center" valign="middle" scope="row">Souris</th>
            <td align="center" valign="middle"><textarea name="modele_souris" cols="45" rows="3" id="modele_souris"><?php echo $row_devis_pc_dyn['modele_souris']; ?></textarea></td>
            <td width="65" align="center" valign="middle"><input name="quantite_souris" type="text" id="quantite_souris" value="<?php echo $row_devis_pc_dyn['quantite_souris']; ?>" size="2"></td>
            <td width="65" align="center" valign="middle"><input name="prix_unitaire_souris" type="text" id="prix_unitaire_souris" value="<?php echo $row_devis_pc_dyn['prix_unitaire_souris']; ?>" size="2"></td>
            <td width="65" align="center" valign="middle"><select name="fournisseur_souris" id="fournisseur_souris">
              <?php
do {  
?>
              <option value="<?php echo $row_fournisseur['id_fournisseur']?>"<?php if (!(strcmp($row_fournisseur['id_fournisseur'], $row_devis_pc_dyn['fournisseur_souris']))) {echo "selected=\"selected\"";} ?>><?php echo $row_fournisseur['name_fournisseur']?></option>
              <?php
} while ($row_fournisseur = mysql_fetch_assoc($fournisseur));
  $rows = mysql_num_rows($fournisseur);
  if($rows > 0) {
      mysql_data_seek($fournisseur, 0);
	  $row_fournisseur = mysql_fetch_assoc($fournisseur);
  }
?>
            </select></td>
            <td width="65" align="center" valign="middle"><input name="prix_total_souris" type="text" id="prix_total_souris" value="<?php echo $row_devis_pc_dyn['prix_total_souris']; ?>" size="2"></td>
          </tr><?php } ?>
          <?php if ($row_devis_pc_dyn['os']!=NULL) { ?><tr>
            <th align="center" valign="middle" scope="row">Système d'exploitation</th>
            <td align="center" valign="middle"><select name="name_os" id="name_os">
              <?php
do {  
?>
              <option value="<?php echo $row_os['name']?>"<?php if (!(strcmp($row_os['name'], $row_devis_pc_dyn['os']))) {echo "selected=\"selected\"";} ?>><?php echo $row_os['name']?></option>
              <?php
} while ($row_os = mysql_fetch_assoc($os));
  $rows = mysql_num_rows($os);
  if($rows > 0) {
      mysql_data_seek($os, 0);
	  $row_os = mysql_fetch_assoc($os);
  }
?>
            </select></td>
            <td width="65" align="center" valign="middle"><input name="quantite_os" type="text" id="quantite_os" value="<?php echo $row_devis_pc_dyn['quantite_os']; ?>" size="2"></td>
            <td width="65" align="center" valign="middle"><input name="prix_os" type="text" id="prix_os" value="<?php echo $row_devis_pc_dyn['prix_unitaire_os']; ?>" size="2"></td>
            <td width="65" align="center" valign="middle"><select name="fournisseur_os" id="fournisseur_os">
              <?php
do {  
?>
              <option value="<?php echo $row_fournisseur['id_fournisseur']?>"<?php if (!(strcmp($row_fournisseur['id_fournisseur'], $row_devis_pc_dyn['fournisseur_os']))) {echo "selected=\"selected\"";} ?>><?php echo $row_fournisseur['name_fournisseur']?></option>
              <?php
} while ($row_fournisseur = mysql_fetch_assoc($fournisseur));
  $rows = mysql_num_rows($fournisseur);
  if($rows > 0) {
      mysql_data_seek($fournisseur, 0);
	  $row_fournisseur = mysql_fetch_assoc($fournisseur);
  }
?>
            </select></td>
            <td width="65" align="center" valign="middle"><input name="prix_total_os" type="text" id="prix_total_os" value="<?php echo $row_devis_pc_dyn['prix_total_os']; ?>" size="2"></td>
          </tr><?php } ?>
          <?php if ($row_devis_pc_dyn['garantie_os']==1 or $row_devis_pc_dyn['garantie_matos']==1 or $row_devis_pc_dyn['garantie_os_matos']==1 or $row_devis_pc_dyn['clonage']==1) { ?><tr>
            <th align="center" valign="middle" scope="row">Options</th>
            <td colspan="3">
            <?php if ($row_devis_pc_dyn['garantie_os']==1) { echo "<ul><li>Garantie OS</li></ul>";}?>
            <?php if ($row_devis_pc_dyn['garantie_matos']==1) { echo "<ul><li>Garantie matérielles</li></ul>";}?>
			<?php if ($row_devis_pc_dyn['garantie_os_matos']==1) { echo "<ul><li>Garantie OS et matérielles</li></ul>";}?>
			<?php if ($row_devis_pc_dyn['clonage']==1) { echo "<ul><li>Clonage du système</li></ul>";}?>
</td>
            <td width="65" align="center" valign="middle">DMIC-CORP</td>
            <td width="65" align="center" valign="middle"><input name="prix_total_options" type="text" id="prix_total_options" value="<?php echo $row_devis_pc_dyn['prix_total_options']; ?>" size="2"></td>
          </tr>
          <tr>
            <th align="center" valign="middle" scope="row">Prestation</th>
            <td align="center" valign="middle"><textarea name="prestations" cols="45" rows="3" id="prestations"><?php echo $row_devis_pc_dyn['prestations']; ?></textarea></td>
            <td width="65" align="center" valign="middle"><input name="quantite_prestation" type="text" id="quantite_prestations" value="<?php echo $row_devis_pc_dyn['quantite_prestations']; ?>" size="2"></td>
            <td width="65" align="center" valign="middle"><input name="prix_unitaire_prestations" type="text" id="prix_unitaire_prestations" value="<?php echo $row_devis_pc_dyn['prix_unitaire_prestations']; ?>" size="2"></td>
            <td width="65" align="center" valign="middle">DMIC-CORP</td>
            <td width="65" align="center" valign="middle"><input name="prix_total_prestations" type="text" id="prix_total_prestations" value="<?php echo $row_devis_pc_dyn['prix_total_prestations']; ?>" size="2"></td>
          </tr><?php } ?>
          <tr>
            <th align="center" valign="middle" scope="row">Autres</th>
            <td align="center" valign="middle"><textarea name="autres" cols="45" rows="3" id="autres"><?php echo $row_devis_pc_dyn['autres']; ?></textarea></td>
            <td width="65" align="center" valign="middle"><input name="quantite_autres" type="text" id="quantite_autres" value="<?php echo $row_devis_pc_dyn['quantite_autres']; ?>" size="2"></td>
            <td width="65" align="center" valign="middle"><input name="prix_unitaire_autres" type="text" id="prix_unitaire_autres" value="<?php echo $row_devis_pc_dyn['prix_unitaires_autres']; ?>" size="2"></td>
            <td width="65" align="center" valign="middle"><select name="fournisseur_autres" id="fournisseur_autres">
              <?php
do {  
?>
              <option value="<?php echo $row_fournisseur['id_fournisseur']?>"<?php if (!(strcmp($row_fournisseur['id_fournisseur'], $row_devis_pc_dyn['fournisseur_autres']))) {echo "selected=\"selected\"";} ?>><?php echo $row_fournisseur['name_fournisseur']?></option>
              <?php
} while ($row_fournisseur = mysql_fetch_assoc($fournisseur));
  $rows = mysql_num_rows($fournisseur);
  if($rows > 0) {
      mysql_data_seek($fournisseur, 0);
	  $row_fournisseur = mysql_fetch_assoc($fournisseur);
  }
?>
            </select></td>
            <td width="65" align="center" valign="middle"><input name="prix_total_autres" type="text" id="prix_total_autres" value="<?php echo $row_devis_pc_dyn['prix_total_autres']; ?>" size="2"></td>
          </tr>
          <tr>
            <th colspan="5" align="right" valign="middle" scope="row">Totaux</th>
            <td width="65" align="center" valign="middle"><input name="prix_total_devis" type="text" id="prix_total_devis" value="<?php echo $row_devis_pc_dyn['prix_total_devis']; ?>" size="2"></td>
          </tr>
          <?php if ($_SESSION['MM_UserGroup']=='Administrateurs') { ?><tr>
            <th colspan="6" align="right" valign="middle" scope="row"><input type="submit" name="submit_devis" id="submit_devis" value="Enregistrer le devis"></th>
          </tr><?php } ?>
        </table>
        <input type="hidden" name="MM_update" value="form2">
      </form>
    </div>
    <?php } ?>
  </div>
</div>

<!-- InstanceEndEditable --></div>
<div class="sidebar2" id="LayoutDiv5" align="center"><!-- InstanceBeginEditable name="sidebar2" -->
    <?php include ('../inc/sidebar/sidebar2_pub.inc.php'); ?>
<!-- InstanceEndEditable --></div>
<div id="LayoutDiv6" class="footer"><!-- InstanceBeginEditable name="footer" -->
  <?php include('../inc/footer/footer_users.inc.php');?>
<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
</script><!-- InstanceEndEditable --></div>
</div>
</body>
<!-- InstanceEnd --></html>
<?php
mysql_free_result($devis_pc_dyn);

mysql_free_result($statut_devis);

mysql_free_result($fournisseur);

mysql_free_result($os);

mysql_free_result($profil_users);
?>
