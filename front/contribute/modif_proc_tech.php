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
  $updateSQL = sprintf("UPDATE dmic_proc_tech SET proc_name=%s, proc_finalname=%s, proc_categorie=%s, proc_description=%s, proc_auteur=%s WHERE proc_id=%s",
                       GetSQLValueString($_POST['proc_name'], "text"),
                       GetSQLValueString($_POST['procs_finalname'], "text"),
                       GetSQLValueString($_POST['proc_categorie'], "text"),
                       GetSQLValueString($_POST['procs_description'], "text"),
                       GetSQLValueString($_POST['auteur'], "text"),
                       GetSQLValueString($_POST['proc_id'], "int"));

  mysql_select_db($database_dmic, $dmic);
  $Result1 = mysql_query($updateSQL, $dmic) or die(mysql_error());

  $updateGoTo = "http://www.dmic-corp.fr/front/liste_knowbaseitems.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

mysql_select_db($database_dmic, $dmic);
$query_proc_categorie = "SELECT * FROM dmic_knowbaseitemcategories ORDER BY name_categorie ASC";
$proc_categorie = mysql_query($query_proc_categorie, $dmic) or die(mysql_error());
$row_proc_categorie = mysql_fetch_assoc($proc_categorie);
$totalRows_proc_categorie = mysql_num_rows($proc_categorie);

$colname_profil_users = "-1";
if (isset($_SESSION['MM_Username'])) {
  $colname_profil_users = $_SESSION['MM_Username'];
}
mysql_select_db($database_dmic, $dmic);
$query_profil_users = sprintf("SELECT profil FROM dmic_users WHERE login = %s", GetSQLValueString($colname_profil_users, "text"));
$profil_users = mysql_query($query_profil_users, $dmic) or die(mysql_error());
$row_profil_users = mysql_fetch_assoc($profil_users);
$totalRows_profil_users = mysql_num_rows($profil_users);

$colname_proc_tech = "-1";
if (isset($_GET['id'])) {
  $colname_proc_tech = $_GET['id'];
}
mysql_select_db($database_dmic, $dmic);
$query_proc_tech = sprintf("SELECT * FROM dmic_proc_tech WHERE proc_id = %s", GetSQLValueString($colname_proc_tech, "int"));
$proc_tech = mysql_query($query_proc_tech, $dmic) or die(mysql_error());
$row_proc_tech = mysql_fetch_assoc($proc_tech);
$totalRows_proc_tech = mysql_num_rows($proc_tech);
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
<script type='text/javascript' src="../../ScriptLibrary/tiny_mce/tiny_mce.js"></script>
<!-- InstanceEndEditable -->
</head>

<body>
<div class="gridContainer clearfix">
  <div class="header" id="LayoutDiv1"><!-- InstanceBeginEditable name="header" -->
    <?php include ('../inc/header/header.inc.php'); ?>
    <!-- end .header -->
<!-- InstanceEndEditable --></div>
<div id="LayoutDiv2" class="header_pub"><!-- InstanceBeginEditable name="header_pub" -->
	<?php include('../inc/header/header_pub.inc.php');?>
<!-- InstanceEndEditable --></div>
  <div class="sidebar1" id="LayoutDiv3" align="center"><!-- InstanceBeginEditable name="sidebar1" -->
    <?php include ('../inc/sidebar/stats/stats.php'); ?>

  <!-- end .sidebar1 -->
<!-- InstanceEndEditable --></div>
<div id="LayoutDiv4" class="content"><!-- InstanceBeginEditable name="content" -->
  <h1 align="center">Upload de procédures techniques.</h1>
  <p>&nbsp;</p>
  <form action="<?php echo $editFormAction; ?>" name="form" method="POST" enctype="multipart/form-data">
    <div align="center">
      <table width="600" border="1" class="tab_cadrehov">
        <tr>
          <th width="300" scope="row">Nom de la procédure
            <input name="proc_id" type="hidden" id="proc_id" value="<?php echo $row_proc_tech['proc_id']; ?>">
            <input name="proc_name" type="hidden" id="proc_name" value="<?php echo $row_proc_tech['proc_name']; ?>"></th>
          <td width="284"><input name="procs_finalname" type="text" id="procs_finalname" value="<?php echo $row_proc_tech['proc_finalname']; ?>" size="50"></td>
        </tr>
        <tr>
          <th scope="row">Catégorie de la procédure</th>
          <td><select name="proc_categorie" id="proc_categorie" title="<?php echo $row_proc_tech['proc_categorie']; ?>">
            <?php
do {  
?>
            <option value="<?php echo $row_proc_categorie['name_categorie']?>"<?php if (!(strcmp($row_proc_categorie['name_categorie'], $row_proc_tech['proc_categorie']))) {echo "selected=\"selected\"";} ?>><?php echo $row_proc_categorie['name_categorie']?></option>
            <?php
} while ($row_proc_categorie = mysql_fetch_assoc($proc_categorie));
  $rows = mysql_num_rows($proc_categorie);
  if($rows > 0) {
      mysql_data_seek($proc_categorie, 0);
	  $row_proc_categorie = mysql_fetch_assoc($proc_categorie);
  }
?>
            </select></td>
        </tr>
        <tr>
          <th scope="row">Description</th>
          <td>
<script language='javascript' type='text/javascript'>tinyMCE.init({
         language : 'fr',
         mode : 'exact',
         elements: 'procs_description',
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
<div class='center spaced'>
  <textarea name='procs_description' cols='25' rows='10' id='procs_description' onBlur="MM_validateForm('proc_description','','R');return document.MM_returnValue"><?php echo $row_proc_tech['proc_description']; ?></textarea></td>
        </tr>
        <tr>
          <th scope="row">Auteur</th>
          <td><input name="auteur" type="text" id="auteur" value="<?php echo $row_proc_tech['proc_auteur']; ?>"></td>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <td><input type="submit" name="Submit" value="Modifier" /></td>
        </tr>
      </table>
    </div>
    <input type="hidden" name="MM_update" value="form">
  </form>
  <?php
if (isset($_POST['Submit'])) {
 if (!empty($_FILES['upload']['name'])) {
 	$ch = curl_init();
 	$localfile = $_FILES['upload']['tmp_name'];
 	$fp = fopen($localfile, 'r');
 	curl_setopt($ch, CURLOPT_URL, 'ftp://dmiccorpgl:DyaHbjCJVeYU@ftp.dmic-corp.fr/www/download/procs/'.$_FILES['upload']['name']);
 	curl_setopt($ch, CURLOPT_UPLOAD, 1);
 	curl_setopt($ch, CURLOPT_INFILE, $fp);
 	curl_setopt($ch, CURLOPT_INFILESIZE, filesize($localfile));
 	curl_exec ($ch);
 	$error_no = curl_errno($ch);
 	curl_close ($ch);
        if ($error_no == 0) {
        	$error = 'File uploaded succesfully.';
        } else {
        	$error = 'File upload error.';
        }
 } else {
    	$error = 'Please select a file.';
 }
}
?>
  <p>&nbsp;</p>
  <!-- end .content -->
<!-- InstanceEndEditable --></div>
<div class="sidebar2" id="LayoutDiv5" align="center"><!-- InstanceBeginEditable name="sidebar2" -->
    <?php include ('../inc/sidebar/sidebar2_pub.inc.php'); ?>
<!-- InstanceEndEditable --></div>
<div id="LayoutDiv6" class="footer"><!-- InstanceBeginEditable name="footer" -->
  <?php include('../inc/footer/footer_users.inc.php');?>
<!-- InstanceEndEditable --></div>
</div>
</body>
<!-- InstanceEnd --></html>
<?php
mysql_free_result($proc_categorie);

mysql_free_result($proc_tech);
?>
