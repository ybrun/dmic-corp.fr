<?php require_once ('../ScriptLibrary/ban_ip.php') ;?>
<?php require_once('../Connections/dmic.php'); ?>
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
 
	session_start();
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
<link href="../Styles/Fluid Grid Layout/boilerplate.css" rel="stylesheet" type="text/css">
<link href="../Styles/grid_layout_v4.css" rel="stylesheet" type="text/css">
<!-- 
Pour en savoir plus sur les commentaires conditionnels autour des balises HTML en haut du fichier :
paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/
 
Procédez comme suit si vous utilisez une version personnalisée de modernizr (http://www.modernizr.com/) :
* insérez ici le lien vers votre js
* supprimez le lien ci-dessous vers html5shiv
* ajoutez la classe "no-js" aux balises HTML en haut
* vous pouvez aussi supprimer le lien vers respond.min.js si vous avez inclus MQ Polyfill dans votre version de modernizr 
-->
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="../Styles/Fluid Grid Layout/respond.min.js"></script>
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
  <h1 align="center">L'&eacute;quipe.</h1>
  <p align="center">&nbsp;</p>
  <table width="auto" border="1" align="center" class="tab_cadrehov">
  <tr>
	<th>Chef de projet</th>
	<td>
		<ul>
			<li>BRUN Yohann</li>
		</ul>
	</td>
	</tr>
	<tr>
	<th>Web-d&eacute;veloppeurs</th>
	<td>
		<ul>
			<li>BRUN Yohann</li>
			<li>Postes &agrave pourvoir</li>
		</ul>
	</td>
	</tr>
	<tr>
	<th>Web-designers</th>
	<td>
		<ul>
			<li>BRUN Yohann</li>
			<li>Postes &agrave pourvoir</li>
		</ul>
	</td>
	</tr>
	<tr>
	<th>Testeurs</th>
	<td>
		<ul>
			<li>BRUN Yohann</li>
			<li>SebastianK</li>
			<li>Postes &agrave pourvoir</li>
		</ul>
	</td>
	</tr>
	<tr>
	<th>Contributeurs</th>
	<td>
		<ul>
			<li>BRUN Yohann</li>
			<li>SebastianK</li>
			<li>Postes &agrave pourvoir</li>
		</ul>
	</td>
	</tr>
	<tr>
	<th>Web-marketing, communication et recrutement</th>
	<td>
		<ul>
			<li>Postes &agrave pourvoir</li>
		<ul>
	</td>
	</tr>
</table>
  <p align="left">&nbsp;</p>
  <table width="80%" border="1" align="center" class="tab_cadrehov">
  <tr>
    <th>Annonce</th>
    <td><p align="left">DMIC Corp recrute des collaborateurs b&eacute;n&eacute;voles pour :</p>
      <ul>
        <li>1) Cr&eacute;er des proc&eacute;dures techniques &agrave; l'intention des utilisateurs et informaticiens ;</li>
        <li>2) Tester pour l'optimisation du site ;</li>
        <li>3) D&eacute;velopper et/ou am&eacute;liorer le site ;</li>
        <li>4) Recruter, communiquer et faire la promotion du site ;</li>
        <li>5) Modifier le design du site.</li>
      </ul></td>
  </tr>
</table>
  <p>&nbsp;</p>
  <p></p>
 
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