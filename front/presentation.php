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
 
Proc&eacutedez comme suit si vous utilisez une version personnalis&eacutee de modernizr (http://www.modernizr.com/) :
* ins&eacuterez ici le lien vers votre js
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
  <h1 align="center">Pr&eacute;sentation.</h1>
<p align="center">&nbsp;</p>
<p align="left">    <strong>DMIC Corp</strong> <em>(Dynamic Managment Informatic Center)</em> a &eacutet&eacute fond&eacute en octobre 2014 suite &agrave la cr&eacuteation d'un portail intranet. 
Il fait suite &agrave une volont&eacute de partage documentaire et la proposition de services <em>(devis, interventions...)</em> pour les utilisateurs, clients, formateurs et stagiaires d'une formation IT.
Une plateforme Litt&eacuteraire a m&ecircme &eacutet&eacute rajout&eacute en acc&egraves restreint pour l'&eacutecriture d'oeuvre de Fantasy et Sciences-Fiction.
<p align="left">	Aujourd'hui, DMIC Corp se voit comme un site collaboratif dans le domaine des Syst&egrave;mes d'Information <em>(SI)</em>. 
Nous avons pour objectif d'&eacute;claircir les utilisateurs sur le fonctionnement d'un SI et de les aider dans leur utilisation quotidienne.
A travers des &eacutel&eacutements de connaissances, cours et articles, nous voulons nous centrer sur :
	<ul>
		<li>1) l'utilisateur et le poste de travail ;</li>
		<li>2) l'utilisateur et les applications locales ;</li>
		<li>3) l'utilisateur et les applications de type client-serveurs ;</li>
		<li>4) l'informaticien, le poste de travail et les applications locales <em>(Support niveau 1)</em>;</li>
		<li>5) l'informaticien, les applications client-serveurs et les architectures serveurs <em>(Support niveau 2)</em>;</li>
		<li>6) l'administrateur et les architectures serveurs <em>(niveau 3)</em>;</li>
		<li>7) la gestion de projets ;</li>
		<li>8) ce qu'il y a autour de l'IT <em>(Math&eacutematique, Physique, Nouvelles technologies, Robotiques, Neurosciences...)</em>.</li>
</p>
<p> Nous pensons que l'&eacutevolution de l'informatique ne provient pas de la folie des sp&eacutecialistes, mais bien d'id&eacutees d'utilisateurs lambda... C'est donc avec vous que nous ferons l'informatique de demain !</p>
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
<p align="left">&nbsp;</p>
<p align="left">&nbsp;</p>
<p align="center">&nbsp;</p>
 
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