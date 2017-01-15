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
<style type="text/css">
.Style17 {color: #A74198}
.Style5 {color: #FFFFCC}
.Style7 {color: #660033; }
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
	<?php include('../inc/header/header_pub.inc.php');?>
<!-- InstanceEndEditable --></div>
  <div class="sidebar1" id="LayoutDiv3" align="center"><!-- InstanceBeginEditable name="sidebar1" -->
   <?php include ('../inc/sidebar/stats/stats.php'); ?>
   </p>
<!-- InstanceEndEditable --></div>
<div id="LayoutDiv4" class="content"><!-- InstanceBeginEditable name="content" -->
    <h1 align="center" class="Style7">Configuration des intitul&eacute;s.</h1>
    <p align="center" class="Style17">&nbsp;</p>
    <p align="center" class="Style17"><span class="Style7">&nbsp;Intitul&eacute;s</span>&nbsp;
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
    <p align="center" class="Style17">&nbsp;</p>
    <table width="561" border="1" align="center" bordercolor="#92BEE1" class="tab_cadrehov">
      <tr>
        <th width="278" colspan="2" bordercolor="#FFFFCC" class="Style17" scope="col"><div align="center" class="Style7">Cat&eacute;gorie de l'intitul&eacute;</div></th>
        <th width="261" bordercolor="#FFFFCC" class="Style17" scope="col"><div align="center" class="Style7">Intitul&eacute;s</div></th>
      </tr>
      <tr>
        <th colspan="2" bordercolor="#FFFFCC" class="Style7" scope="row"><div align="center">Applications</div></th>
        <td bordercolor="#FFFFCC" class="Style17"><div align="justify">
          <ul>
            <li class="Style7"><a href="http://www.dmic-corp.fr/front/admin/config_intitules_type_apps.php">Type d'application</a></li>
          </ul>
        </div></td>
      </tr>
      <tr>
        <th colspan="2" bordercolor="#FFFFCC" class="Style7" scope="row"><div align="center">Base de connaissance</div></th>
        <td bordercolor="#FFFFCC" class="Style17"><div align="justify">
          <ul>
            <li class="Style7"><a href="http://www.dmic-corp.fr/front/admin/config_intitules_type_categorie_bdc.php">Type de cat&eacute;gorie</a></li>
            <li class="Style7"><a href="http://www.dmic-corp.fr/front/admin/config_intitules_categorie_bdc.php">Cat&eacute;gorie</a></li>
          </ul>
        </div></td>
      </tr>
      <tr>
        <th colspan="2" bordercolor="#FFFFCC" class="Style7" scope="row"><div align="center">Devis</div></th>
        <td bordercolor="#FFFFCC" class="Style17"><div align="justify">
          <ul>
            <li class="Style7"><a href="http://www.dmic-corp.fr/front/admin/config_intitules_modele_devis_pc.php">Mod&egrave;le de Demande de devis Ordinateur</a></li>
            <li class="Style7"><a href="http://www.dmic-corp.fr/front/admin/config_intitules_modele_pc.php">Mod&egrave;le Ordinateur</a></li>
            <li class="Style7"><a href="http://www.dmic-corp.fr/front/admin/config_intitules_os.php">Syst&egrave;me d'exploitation</a></li>
            <li class="Style7"><a href="http://www.dmic-corp.fr/front/admin/config_intitules_statut_devis.php">Statut</a></li>
          </ul>
        </div></td>
      </tr>
      <tr>
        <th colspan="2" bordercolor="#FFFFCC" class="Style17" scope="row"><div align="center" class="Style7">G&eacute;n&eacute;ralit&eacute;</div></th>
        <td bordercolor="#FFFFCC" class="Style17"><div align="justify">
          <ul>
            <li><a href="http://www.dmic-corp.fr/front/admin/config_intitules_types_actualites.php" class="Style7">Type d'actualit&eacute;s</a></li>
          </ul>
        </div></td>
      </tr>
      <tr>
        <th colspan="2" bordercolor="#FFFFCC" class="Style17" scope="row"><div align="center" class="Style7">Utilisateurs</div></th>
        <td bordercolor="#FFFFCC" class="Style17"><div align="justify">
          <ul>
            <li><a href="http://www.dmic-corp.fr/front/admin/config_intitules_profils_users.php" class="Style7">Profils</a></li>
          </ul>
        </div></td>
      </tr>
    </table>
    <h1 class="Style5">&nbsp;</h1>
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
