<?php require_once ('../../ScriptLibrary/ban_ip.php') ;?>
<?php require_once('../../Connections/dmic.php'); ?>
<?php
if (!isset($_SESSION)) {
  session_start();
}
$MM_authorizedUsers = "Administrateurs";
$MM_donotCheckaccess = "false";

// *** Restrict Access To Page: Grant or deny access to this page
function isAuthorized($strUsers, $strGroups, $UserName, $UserGroup) { 
  // For security, start by assuming the visitor is NOT authorized. 
  $isValid = False; 

  // When a visitor has logged into this site, the Session variable MM_Username set equal to their username. 
  // Therefore, we know that a user is NOT logged in if that Session variable is blank. 
  if (!empty($UserName)) { 
    // Besides being logged in, you may restrict access to only certain users based on an ID established when they login. 
    // Parse the strings into arrays. 
    $arrUsers = Explode(",", $strUsers); 
    $arrGroups = Explode(",", $strGroups); 
    if (in_array($UserName, $arrUsers)) { 
      $isValid = true; 
    } 
    // Or, you may restrict access to only certain users based on their username. 
    if (in_array($UserGroup, $arrGroups)) { 
      $isValid = true; 
    } 
    if (($strUsers == "") && false) { 
      $isValid = true; 
    } 
  } 
  return $isValid; 
}

$MM_restrictGoTo = "/no_authorized.php";
if (!((isset($_SESSION['MM_Username'])) && (isAuthorized("",$MM_authorizedUsers, $_SESSION['MM_Username'], $_SESSION['MM_UserGroup'])))) {   
  $MM_qsChar = "?";
  $MM_referrer = $_SERVER['PHP_SELF'];
  if (strpos($MM_restrictGoTo, "?")) $MM_qsChar = "&";
  if (isset($_SERVER['QUERY_STRING']) && strlen($_SERVER['QUERY_STRING']) > 0) 
  $MM_referrer .= "?" . $_SERVER['QUERY_STRING'];
  $MM_restrictGoTo = $MM_restrictGoTo. $MM_qsChar . "accesscheck=" . urlencode($MM_referrer);
  header("Location: ". $MM_restrictGoTo); 
  exit;
}
?>
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

if ((isset($_GET['id'])) && ($_GET['id'] != "")) {
  $deleteSQL = sprintf("DELETE FROM dmic_appstype WHERE appstype_id=%s",
                       GetSQLValueString($_GET['id'], "int"));

  mysql_select_db($database_dmic, $dmic);
  $Result1 = mysql_query($deleteSQL, $dmic) or die(mysql_error());
}

$colname_profil_users = "-1";
if (isset($_SESSION['MM_Username'])) {
  $colname_profil_users = $_SESSION['MM_Username'];
}
mysql_select_db($database_dmic, $dmic);
$query_profil_users = sprintf("SELECT profil FROM dmic_users WHERE login = %s", GetSQLValueString($colname_profil_users, "text"));
$profil_users = mysql_query($query_profil_users, $dmic) or die(mysql_error());
$row_profil_users = mysql_fetch_assoc($profil_users);
$totalRows_profil_users = mysql_num_rows($profil_users);

mysql_select_db($database_dmic, $dmic);
$query_type_apps = "SELECT * FROM dmic_appstype ORDER BY apps_type_name ASC";
$type_apps = mysql_query($query_type_apps, $dmic) or die(mysql_error());
$row_type_apps = mysql_fetch_assoc($type_apps);
$totalRows_type_apps = mysql_num_rows($type_apps);

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
<style type="text/css">
.Style7 {color: #660033; }
.Style17 {color: #A74198}
</style>
<!-- InstanceEndEditable -->
</head>

<body>
<div class="gridContainer clearfix">
  <div id="LayoutDiv1" class="header"><!-- InstanceBeginEditable name="header" -->
<?php include ('../inc/header/header.inc.php'); ?>
    <!-- end .header -->
<!-- InstanceEndEditable --></div>
<div id="LayoutDiv2" class="header_pub"><!-- InstanceBeginEditable name="header_pub" -->
	<?php include('front/inc/header/header_pub.inc.php');?>
<!-- InstanceEndEditable --></div>
  <div class="sidebar1" id="LayoutDiv3" align="center"><!-- InstanceBeginEditable name="sidebar1" -->
   <?php include ('../inc/sidebar/stats/stats.php'); ?>
   </p>
<!-- InstanceEndEditable --></div>
<div id="LayoutDiv4" class="content"><!-- InstanceBeginEditable name="content" -->
  <h1 align="center"><span class="Style7">Configuration des intitul&eacute;s : type d'applications.</span></h1>
  <p align="center">&nbsp;</p>
  <p align="center"><span class="Style7">&nbsp;Intitul&eacute;s<span class="Style17">&nbsp;</span></span>
    <select name="menu_nav" id="menu_nav">
        <optgroup label="Applications">
          <option value="http://www.dmic-corp.fr/front/admin/config_intitules_type_apps.php"><span class="b">Type d'application</span></option>
          </optgroup>
        <optgroup label="Base de connaissance">
          <option value="http://www.dmic-corp.fr/front/admin/config_intitules_type_categorie_bdc.php"><span class="b">Type de cat&eacute;gorie</span></option>
          <option value="http://www.dmic-corp.fr/front/admin/config_intitules_categorie_bdc.php"><span class="b">Cat&eacute;gories</span></option>
          </optgroup>
        <optgroup label="Devis">
          <option value="http://www.dmic-corp.fr/front/admin/config_intitules_modele_devis_pc.php"><span class="b">Mod&egrave;le de Demande de devis de montage d'ordinateurs</span></option>
          <option value="http://www.dmic-corp.fr/front/admin/config_intitules_modele_pc.php"><span class="b">Mod&egrave;le d'ordinateurs</span></option>
          <option value="http://www.dmic-corp.fr/front/admin/config_intitules_os.php"><span class="b">Syst&egrave;me d'exploitation</span></option>
          <option value="http://www.dmic-corp.fr/front/admin/config_intitules_statut_devis.php"><span class="b">Statut</span></option>
          </optgroup>
        <optgroup label="G&eacute;n&eacute;ralit&eacute;">
          <option value="http://www.dmic-corp.fr/front/admin/config_intitules_types_actualites.php"><span class="b">Type d'actualit&eacute;s</span></option>
          </optgroup>
          <optgroup label="Utilisateurs">
          <option value="http://www.dmic-corp.fr/front/admin/config_intitules_profils_users.php"><span class="b">Profils</span></option>
          </optgroup>
      </select>
&nbsp;
<input name="add" value="Rechercher" class="submit" onClick="document.location=document.getElementById(&quot;menu_nav&quot;).value;" type="submit">
  </p>
  <p align="center">&nbsp;</p>
  <p align="left">
    <a href="http://www.dmic-corp.fr/front/admin/new_type_apps.php"><input type="submit" name="Nouveau type apps" id="Nouveau type apps" value="Nouveau type d'applications"></a>
  </p>
  <p align="center">&nbsp;</p>
  <table width="711" border="1" align="center" class="tab_cadrehov">
    <tr>
      <th width="281" scope="col"><div align="center">Nom du mod&egrave;le</div></th>
      <th width="354" scope="col"><div align="center">Description</div></th>
      <th width="32" scope="col">&nbsp;</th>
      <th width="16" scope="col">&nbsp;</th>
    </tr>
    <?php do { ?>
      <tr>
        <th scope="row"><div align="center"><?php echo $row_type_apps['apps_type_name']; ?></div></th>
        <td><div align="justify"><?php echo $row_type_apps['appstype_description']; ?></div></td>
        <td><a href="http://www.dmic-corp.fr/front/admin/modif_type_apps.php?id=<?php echo $row_type_apps['appstype_id']; ?>"><img src="/images/modif.png" width="32" height="32"></a></td>
        <td><a href="http://www.dmic-corp.fr/front/admin/config_intitules_type_apps.php?id=<?php echo $row_type_apps['appstype_id']; ?>"><img src="/images/delete2.png" width="16" height="16"></a></td>
      </tr>
      <?php } while ($row_type_apps = mysql_fetch_assoc($type_apps)); ?>
  </table>
  <p align="center">&nbsp;</p>
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
mysql_free_result($profil_users);

mysql_free_result($type_apps);
?>
