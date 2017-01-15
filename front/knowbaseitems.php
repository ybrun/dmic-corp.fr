<?php require_once ('../ScriptLibrary/ban_ip.php') ;?>
<?php require_once('../Connections/dmic.php'); ?>
<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}
 
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
 
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
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
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
 
$colname_knowbaseitems = "-1";
if (isset($_GET['id'])) {
  $colname_knowbaseitems = $_GET['id'];
}
mysql_select_db($database_dmic, $dmic);
$query_knowbaseitems = sprintf("SELECT * FROM dmic_knowbaseitems WHERE id_knowbaseitems = %s", GetSQLValueString($colname_knowbaseitems, "int"));
$knowbaseitems = mysql_query($query_knowbaseitems, $dmic) or die(mysql_error());
$row_knowbaseitems = mysql_fetch_assoc($knowbaseitems);
$totalRows_knowbaseitems = mysql_num_rows($knowbaseitems);
 
mysql_select_db($database_dmic, $dmic);
$query_categorie = "SELECT * FROM dmic_knowbaseitemcategories ORDER BY name_categorie ASC";
$categorie = mysql_query($query_categorie, $dmic) or die(mysql_error());
$row_categorie = mysql_fetch_assoc($categorie);
$totalRows_categorie = mysql_num_rows($categorie);
 
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
<title>DMIC Corp</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
<meta http-equiv='Expires' content='Fri, Jun 12 1981 08:20:00 GMT'>
<meta http-equiv='Pragma' content='no-cache'>
<meta http-equiv='Cache-Control' content='no-cache'>
<link href="../Styles/Fluid Grid Layout/boilerplate.css" rel="stylesheet" type="text/css">
<link href="../Styles/grid_layout_v4.css" rel="stylesheet" type="text/css">
<!-- 
Pour en savoir plus sur les commentaires conditionnels autour des balises HTML en haut du fichierÂ :
paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/
 
ProcÃ©dez comme suit si vous utilisez une version personnalisÃ©e de modernizr (http://www.modernizr.com/)Â :
* insÃ©rez ici le lien vers votre js
* supprimez le lien ci-dessous vers html5shiv
* ajoutez la classe "no-js" aux balises HTML en haut
* vous pouvez aussi supprimer le lien vers respond.min.js si vous avez inclus MQ Polyfill dans votre version de modernizr 
-->
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="../Styles/Fluid%20Grid%20Layout/respond.min.js"></script>
<script type='text/javascript' src="/ScriptLibrary/tiny_mce/tiny_mce.js"></script>
<!-- InstanceEndEditable -->
</head>
 
<body>
<div class="gridContainer clearfix">
  <div id="LayoutDiv1" class="header"><!-- InstanceBeginEditable name="header" -->
    <?php include ('inc/header/header.inc.php'); ?>
<!-- InstanceEndEditable --></div>
<div id="LayoutDiv2" class="header_pub"><!-- InstanceBeginEditable name="header_pub" -->
	<?php include('inc/header/header_pub.inc.php');?>
<!-- InstanceEndEditable --></div>
  <div class="sidebar1" id="LayoutDiv3" align="center"><!-- InstanceBeginEditable name="sidebar1" -->
   <?php include ('inc/sidebar/stats/stats.php'); ?>
   </p>
<!-- InstanceEndEditable --></div>
<div id="LayoutDiv4" class="content"><!-- InstanceBeginEditable name="content" -->
		<h1 align="center">Base de connaissance - Consultation.</h1>
<p></p>
<p align="left"><a href="http://www.dmic-corp.fr/front/base_connaissances.php"><input type="submit" name="Précédent" id="Précédent" value="Pr&eacute;c&eacute;dent"></a></p>
<p></p>
  <script language='javascript' type='text/javascript'>tinyMCE.init({
			language : 'fr',
			mode : 'exact',
			elements: 'answer',
			valid_elements: '*[*]',
			browser_spellcheck : true,
			plugins : 'table,directionality,searchreplace',
			theme : 'advanced',
			entity_encoding : 'raw', theme_advanced_buttons1_add : 'ltr,rtl,search,replace',theme_advanced_toolbar_location : 'top',
			theme_advanced_toolbar_align : 'left',
			theme_advanced_statusbar_location : 'none',
			theme_advanced_buttons1 : 'bold,italic,underline,strikethrough,fontsizeselect,formatselect,separator,justifyleft,justifycenter,justifyright,justifyfull,bullist,numlist,outdent,indent',
			theme_advanced_buttons2 : 'forecolor,backcolor,separator,hr,separator,link,unlink,anchor,separator,tablecontrols,undo,redo,cleanup,code,separator',
			theme_advanced_buttons3 : ''});
		</script>
		<form method='POST' id='form_kb' name='form_kb'>
			<table width="80%" border="0" align="center" class="tab_cadrehov">
              <tr>
                <th width="10%" scope="col">Sujet</th>
                <th width="70%" scope="col"><?php echo $row_knowbaseitems['name']; ?></th>
              </tr>
              <tr>
                <th width="10%">Contenu</th>
                <td width="70%"><span class="center spaced">
                  <textarea cols='200' rows='50' id='answer' name='answer'><?php echo $row_knowbaseitems['answer']; ?></textarea>
                </span></td>
              </tr>
              <tr>
              	<th width="10%">Date de cr&eacute;ation</th>
                <td width="70%"><?php echo $row_knowbaseitems['date']; ?></td>
          </table>
		<input type='hidden' name='_glpi_csrf_token' value='0c5e7916645b9c577a2d6e384e5e08d3'>
  </form>
    <!-- InstanceEndEditable --></div>
<div class="sidebar2" id="LayoutDiv5" align="center"><!-- InstanceBeginEditable name="sidebar2" -->
    <?php include ('inc/sidebar/sidebar2_pub.inc.php'); ?>
<!-- InstanceEndEditable --></div>
<div id="LayoutDiv6" class="footer"><!-- InstanceBeginEditable name="footer" -->
  <?php include('inc/footer/footer_users.inc.php');?>
<!-- InstanceEndEditable --></div>
</div>
</body>
<!-- InstanceEnd --></html>
<?php
mysql_free_result($knowbaseitems);
 
mysql_free_result($categorie);
?>