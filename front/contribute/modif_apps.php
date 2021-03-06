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

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form")) {
  $updateSQL = sprintf("UPDATE dmic_apps SET apps_name=%s, apps_finalname=%s, apps_version=%s, apps_type=%s, apps_systeme=%s, apps_description=%s WHERE apps_id=%s",
                       GetSQLValueString($_POST['nom_fichier'], "text"),
                       GetSQLValueString($_POST['apps_finalname'], "text"),
                       GetSQLValueString($_POST['apps_version'], "text"),
                       GetSQLValueString($_POST['apps_type'], "text"),
                       GetSQLValueString($_POST['systeme'], "text"),
                       GetSQLValueString($_POST['apps_description'], "text"),
                       GetSQLValueString($_POST['id'], "int"));

  mysql_select_db($database_dmic, $dmic);
  $Result1 = mysql_query($updateSQL, $dmic) or die(mysql_error());

  $updateGoTo = "/front/apps.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

mysql_select_db($database_dmic, $dmic);
$query_apps_type = "SELECT * FROM dmic_appstype ORDER BY apps_type_name ASC";
$apps_type = mysql_query($query_apps_type, $dmic) or die(mysql_error());
$row_apps_type = mysql_fetch_assoc($apps_type);
$totalRows_apps_type = mysql_num_rows($apps_type);

$colname_profil_users = "-1";
if (isset($_SESSION['MM_Username'])) {
  $colname_profil_users = $_SESSION['MM_Username'];
}
mysql_select_db($database_dmic, $dmic);
$query_profil_users = sprintf("SELECT profil FROM dmic_users WHERE login = %s", GetSQLValueString($colname_profil_users, "text"));
$profil_users = mysql_query($query_profil_users, $dmic) or die(mysql_error());
$row_profil_users = mysql_fetch_assoc($profil_users);
$totalRows_profil_users = mysql_num_rows($profil_users);

$colname_apps_dyn = "-1";
if (isset($_GET['id'])) {
  $colname_apps_dyn = $_GET['id'];
}
mysql_select_db($database_dmic, $dmic);
$query_apps_dyn = sprintf("SELECT * FROM dmic_apps WHERE apps_id = %s", GetSQLValueString($colname_apps_dyn, "int"));
$apps_dyn = mysql_query($query_apps_dyn, $dmic) or die(mysql_error());
$row_apps_dyn = mysql_fetch_assoc($apps_dyn);
$totalRows_apps_dyn = mysql_num_rows($apps_dyn);
$_SESSION['MM_UserGroup'] = $row_profil_users['profil'];
?>
<?php
if (!isset($_SESSION)) {
  session_start();
}
$MM_authorizedUsers = "Administrateurs,Formateurs,Contributeurs";
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

$MM_restrictGoTo = "http://www.dmic-corp.fr/no_authorized.php";
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
Pour en savoir plus sur les commentaires conditionnels autour des balises HTML en haut du fichier�:
paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/

Proc�dez comme suit si vous utilisez une version personnalis�e de modernizr (http://www.modernizr.com/)�:
* ins�rez ici le lien vers votre js
* supprimez le lien ci-dessous vers html5shiv
* ajoutez la classe "no-js" aux balises HTML en haut
* vous pouvez aussi supprimer le lien vers respond.min.js si vous avez inclus MQ Polyfill dans votre version de modernizr 
-->
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="../../Styles/Fluid%20Grid%20Layout/respond.min.js"></script>
<script type='text/javascript' src="../../ScriptLibrary/tiny_mce/tiny_mce.js"></script>
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
  <h1 align="center">Informations des applications.</h1>
  <p>&nbsp;</p>
  <form action="<?php echo $editFormAction; ?>" name="form" method="POST" enctype="multipart/form-data">
    <div align="center">
      <table width="60%" border="1" class="tab_cadrehov">
        <tr>
          <th width="30%" scope="row">Nom du Fichier</th>
          <td width="30%"><input name="id" type="hidden" value="<?php echo $row_apps_dyn['apps_id']; ?>"><input name="nom_fichier" type="text" id="nom_fichier" value="<?php echo $row_apps_dyn['apps_name']; ?>" /></td>
        </tr>
        <tr>
          <th scope="row">Nom de l'application</th>
          <td><input name="apps_finalname" type="text" id="apps_finalname" value="<?php echo $row_apps_dyn['apps_finalname']; ?>"></td>
        </tr>
        <tr>
          <th scope="row">Version</th>
          <td><input name="apps_version" type="text" id="apps_version" value="<?php echo $row_apps_dyn['apps_version']; ?>"></td>
        </tr>
        <tr>
          <th scope="row">Type d'application</th>
          <td><select name="apps_type" id="apps_type">
            <?php
do {  
?>
            <option value="<?php echo $row_apps_type['apps_type_name']?>"<?php if (!(strcmp($row_apps_type['apps_type_name'], $row_apps_dyn['apps_type']))) {echo "selected=\"selected\"";} ?>><?php echo $row_apps_type['apps_type_name']?></option>
            <?php
} while ($row_apps_type = mysql_fetch_assoc($apps_type));
  $rows = mysql_num_rows($apps_type);
  if($rows > 0) {
      mysql_data_seek($apps_type, 0);
	  $row_apps_type = mysql_fetch_assoc($apps_type);
  }
?>
          </select></td>
        </tr>
        <tr>
          <th scope="row">Syst&egrave;me</th>
          <td><select name="systeme" id="systeme">
            <option value="Andro&iuml;d" <?php if (!(strcmp("Andro�d", $row_apps_dyn['apps_systeme']))) {echo "selected=\"selected\"";} ?>>Andro&iuml;d</option>
            <option value="Linux" <?php if (!(strcmp("Linux", $row_apps_dyn['apps_systeme']))) {echo "selected=\"selected\"";} ?>>Linux</option>
            <option value="Mac OS" <?php if (!(strcmp("Mac OS", $row_apps_dyn['apps_systeme']))) {echo "selected=\"selected\"";} ?>>Mac OS</option>
            <option value="Serveur Web (Apache, IIS)" <?php if (!(strcmp("Serveur Web (Apache, IIS)", $row_apps_dyn['apps_systeme']))) {echo "selected=\"selected\"";} ?>>Serveur Web (Apache, IIS)</option>
            <option value="Windows" <?php if (!(strcmp("Windows", $row_apps_dyn['apps_systeme']))) {echo "selected=\"selected\"";} ?>>Windows</option>
          </select></td>
        </tr>
        <tr>
          <th scope="row">Description</th>
<script language='javascript' type='text/javascript'>tinyMCE.init({
         language : 'fr',
         mode : 'exact',
         elements: 'apps_description',
         valid_elements: '*[*]',
         browser_spellcheck : true,
         plugins : 'table,directionality,searchreplace',
         theme : 'advanced',
         entity_encoding : 'raw', theme_advanced_buttons1_add : 'ltr,rtl,search,replace',theme_advanced_toolbar_location : 'top',
         theme_advanced_toolbar_align : 'left',
	 theme_advanced_statusbar_location : 'none',
         theme_advanced_buttons1 : 'bold,italic,underline,strikethrough,fontsizeselect,formatselect,separator,justifyleft,justifycenter,justifyright,justifyfull,bullist,numlist,outdent,indent',
         theme_advanced_buttons2 : 'forecolor,backcolor,separator,hr,separator,link,unlink,anchor,separator,tablecontrols,undo,redo,cleanup,code,separator',
         theme_advanced_buttons3 : ''});</script>

  <textarea name='apps_description' cols='25' rows='10' id='apps_description' onBlur="MM_validateForm('proc_description','','R');return document.MM_returnValue"><?php echo $row_apps_dyn['apps_description']; ?></textarea></td>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <td><input type="submit" name="Submit" value="Modifier" /></td>
        </tr>
      </table>
    </div>
    <input type="hidden" name="MM_update" value="form">
  </form>
  <p>&nbsp;</p>
  <!-- end .content -->
<!-- InstanceEndEditable --></div>
<div class="sidebar2" id="LayoutDiv5" align="center"><!-- InstanceBeginEditable name="sidebar2" -->
    <?php include ('front/inc/sidebar/sidebar2_pub.inc.php'); ?>
<!-- InstanceEndEditable --></div>
<div id="LayoutDiv6" class="footer"><!-- InstanceBeginEditable name="footer" -->
  <?php include('../inc/footer/footer_users.inc.php');?>
<!-- InstanceEndEditable --></div>
</div>
</body>
<!-- InstanceEnd --></html>
<?php
mysql_free_result($apps_type);

mysql_free_result($apps_dyn);
?>
