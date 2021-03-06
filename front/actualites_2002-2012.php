<?php require_once ('../ScriptLibrary/ban_ip.php') ;?>
<?php require_once ('../Connections/dmic.php');?>
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
<link href="../Styles/Fluid Grid Layout/boilerplate.css" rel="stylesheet" type="text/css">
<link href="../Styles/grid_layout_v4.css" rel="stylesheet" type="text/css">
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
<script src="../Styles/Fluid%20Grid%20Layout/respond.min.js"></script>
<style type="text/css">
.Style4 {font-family: Verdana,Arial,Helvetica,sans-serif; font-weight: bold; color: #FFFFCC; }
.Style40 {font-family: Verdana,Arial,Helvetica,sans-serif;}
.Style5 {color: #FFFFCC}
.Style7 {color: #660033; }
</style>
<!-- InstanceEndEditable -->
</head>

<body>
<div class="gridContainer clearfix">
  <div class="header" id="LayoutDiv1"><!-- InstanceBeginEditable name="header" -->
<?php include ('inc/header/header.inc.php'); ?>
    <!-- end .header -->
<!-- InstanceEndEditable --></div>
<div id="LayoutDiv2" class="header_pub"><!-- InstanceBeginEditable name="header_pub" -->
	<?php include('inc/header/header_pub.inc.php');?>
<!-- InstanceEndEditable --></div>
  <div class="sidebar1" id="LayoutDiv3" align="center"><!-- InstanceBeginEditable name="sidebar1" -->
<?php include('inc/header/header_pub.inc.php');?>
  <!-- end .sidebar1 -->
<!-- InstanceEndEditable --></div>
<div id="LayoutDiv4" class="content"><!-- InstanceBeginEditable name="content" -->
  <?php
	if ($_SESSION['MM_Username'] == NULL)
		{include ('inc/archives_news_users.inc.php');};
	if ((isset($_SESSION['MM_Username'])) && (!empty($_SESSION['MM_Username'])))
		{
			// le login a ?t? enregistr? dans la session, j'affiche le menu Administrateur
				if ($_SESSION['MM_UserGroup'] == 'Administrateurs')
				{
					include ('inc/archives_news_admin.inc.php');
				}
			// le login a ?t? enregistr? dans la session, j'affiche le menu Formateur
				elseif ($_SESSION['MM_UserGroup'] == 'Formateurs')
				{
					include ('inc/archives_news_users.inc.php');
				}
			// le login a ?t? enregistr? dans la session, j'affiche le menu Stagiaires
				elseif ($_SESSION['MM_UserGroup'] == 'Stagiaires')
				{
					include ('inc/archives_news_users.inc.php');
				}
			// le login a ?t? enregistr? dans la session, j'affiche le menu Clients
				elseif ($_SESSION['MM_UserGroup'] == 'Clients')
				{
					include ('inc/archives_news_users.inc.php');
				}
			// le login a ?t? enregistr? dans la session, j'affiche le menu Contributeurs
				elseif ($_SESSION['MM_UserGroup'] == 'Contributeurs')
				{
					include ('inc/archives_news_users.inc.php');
				}
			// le login a ?t? enregistr? dans la session, j'affiche le menu Geek
				elseif ($_SESSION['MM_UserGroup'] == 'Geek')
				{
					include ('inc/archives_news_users.inc.php');
				}
		}
?>
  <!-- end .content -->
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