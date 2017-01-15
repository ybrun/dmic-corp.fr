<?php require_once ('ScriptLibrary/ban_ip.php') ;?>
<?php require_once('Connections/dmic.php'); ?>
<?php
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

$maxRows_news = 10;
$pageNum_news = 0;
if (isset($_GET['pageNum_news'])) {
  $pageNum_news = $_GET['pageNum_news'];
}
$startRow_news = $pageNum_news * $maxRows_news;

mysql_select_db($database_dmic, $dmic);
$query_news = "SELECT * FROM dmic_actualites ORDER BY `date` DESC";
$query_limit_news = sprintf("%s LIMIT %d, %d", $query_news, $startRow_news, $maxRows_news);
$news = mysql_query($query_limit_news, $dmic) or die(mysql_error());
$row_news = mysql_fetch_assoc($news);

if (isset($_GET['totalRows_news'])) {
  $totalRows_news = $_GET['totalRows_news'];
} else {
  $all_news = mysql_query($query_news);
  $totalRows_news = mysql_num_rows($all_news);
}
$totalPages_news = ceil($totalRows_news/$maxRows_news)-1;

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
<link href="Styles/Fluid Grid Layout/boilerplate.css" rel="stylesheet" type="text/css">
<link href="Styles/grid_layout_v4.css" rel="stylesheet" type="text/css">
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
<script src="Styles/Fluid%20Grid%20Layout/respond.min.js"></script>
<style type="text/css">
tableau_actualite {
	text-align: center;
}
</style>
<!-- InstanceEndEditable -->
</head>

<body>
<div class="gridContainer clearfix">
  <div id="LayoutDiv1" class="header"><!-- InstanceBeginEditable name="header" -->   
	<?php include ('front/inc/header/header.inc.php'); ?>
  <!-- InstanceEndEditable --></div>
<div id="LayoutDiv2" class="header_pub"><!-- InstanceBeginEditable name="header_pub" -->
	<?php include('front/inc/header/header_pub.inc.php');?>
<!-- InstanceEndEditable --></div>
  <div class="sidebar1" id="LayoutDiv3" align="center"><!-- InstanceBeginEditable name="sidebar1" -->
   <p><?php include ('front/inc/sidebar/stats/stats.php'); ?>
   </p>
<!-- InstanceEndEditable --></div>
<div id="LayoutDiv4" class="content"><!-- InstanceBeginEditable name="content" -->
<h1 align="center">Actualit&eacute;s.</h1>
<p align="center">&nbsp;</p>
  <?php if ($_SESSION['MM_UserGroup']=='Administrateurs' or $_SESSION['MM_UserGroup']=='Contributeurs' or $_SESSION['MM_UserGroup']=='Formateurs') { ?><a href="http://www.dmic-corp.fr/front/contribute/new_actualite.php"><input type="submit" name="Nouvelle actualit&eacute;" id="Nouvelle actualit&eacute;" value="Nouvelle actualit&eacute" class="submit">
  </a><?php } ?>
<p align="center">&nbsp;</p>
<table width="50" border="0" align="center">
  <tr class="Style7">
    <?php if ($pageNum_news > 0) { // Show if not first page ?>
    <th scope="col"><a href="<?php printf("%s?pageNum_news=%d%s", $currentPage, 0, $queryString_news); ?>"><img src="http://www.dmic-corp.fr/images/first.png" width="12" height="10" /></a></th>
    <th scope="col"><a href="<?php printf("%s?pageNum_news=%d%s", $currentPage, max(0, $pageNum_news - 1), $queryString_news); ?>"><img src="http://www.dmic-corp.fr/images/left.png" width="10" height="10" /></a></th>
    <?php } // Show if not first page ?>
    <th scope="col"><div align="center">De</div></th>
    <th scope="col"><div align="center"><?php echo ($startRow_news + 1) ?></div></th>
    <th scope="col"><div align="center">&agrave;</div></th>
    <th scope="col"><div align="center"><?php echo min($startRow_news + $maxRows_news, $totalRows_news) ?></div></th>
    <th scope="col"><div align="center">sur</div></th>
    <th scope="col"><div align="center"><?php echo $totalRows_news ?></div></th>
    <?php if ($pageNum_news < $totalPages_news) { // Show if not last page ?>
    <th scope="col"><a href="<?php printf("%s?pageNum_news=%d%s", $currentPage, min($totalPages_news, $pageNum_news + 1), $queryString_news); ?>"><img src="http://www.dmic-corp.fr/images/right.png" width="10" height="10" /></a></th>
    <th scope="col"><a href="<?php printf("%s?pageNum_news=%d%s", $currentPage, $totalPages_news, $queryString_news); ?>"><img src="http://www.dmic-corp.fr/images/last.png" width="12" height="10" /></a></th>
    <?php } // Show if not last page ?>
  </tr>
</table>
<?php do { ?>
<table width="60%" class="tab_cadrehov">
  <tbody>
    <tr class="noHover">
      <th width="491"><div align="center" class="Style11"><?php echo $row_news['date']; ?></div></th>
      <th width="748"><strong><?php echo $row_news['titre'] . ''; ?></strong><em>(<?php echo $row_news['type']; ?>)</em></th>
      <?php if ($_SESSION['MM_UserGroup']=='Administrateurs' or $_SESSION['MM_UserGroup']=='Contributeurs' or $_SESSION['MM_UserGroup']=='Formateurs') { ?>
      <td width="32" rowspan="2"><label><a href="http://www.dmic-corp.fr/front/contribute/modif_actualite.php?id=<?php echo $row_news['id']; ?>"><img src="http://www.dmic-corp.fr/images/modif.png" width="29" height="29" align="middle"></a></label></td>
      <?php } ?>
    </tr>
    <tr>
      <td colspan="2"><?php echo $row_news['actualites']; ?></td>
    </tr>
    </tbody>
</table>
<br>
<?php } while ($row_news = mysql_fetch_assoc($news)); ?>
<table width="50" border="0" align="center">
  <tr class="Style7">
    <?php if ($pageNum_news > 0) { // Show if not first page ?>
    <th scope="col"><a href="<?php printf("%s?pageNum_news=%d%s", $currentPage, 0, $queryString_news); ?>"><img src="http://www.dmic-corp.fr/images/first.png" width="12" height="10" /></a></th>
    <th scope="col"><a href="<?php printf("%s?pageNum_news=%d%s", $currentPage, max(0, $pageNum_news - 1), $queryString_news); ?>"><img src="http://www.dmic-corp.fr/images/left.png" width="10" height="10" /></a></th>
    <?php } // Show if not first page ?>
    <th scope="col"><div align="center">De</div></th>
    <th scope="col"><div align="center"><?php echo ($startRow_news + 1) ?></div></th>
    <th scope="col"><div align="center">&agrave;</div></th>
    <th scope="col"><div align="center"><?php echo min($startRow_news + $maxRows_news, $totalRows_news) ?></div></th>
    <th scope="col"><div align="center">sur</div></th>
    <th scope="col"><div align="center"><?php echo $totalRows_news ?></div></th>
    <?php if ($pageNum_news < $totalPages_news) { // Show if not last page ?>
    <th scope="col"><a href="<?php printf("%s?pageNum_news=%d%s", $currentPage, min($totalPages_news, $pageNum_news + 1), $queryString_news); ?>"><img src="http://www.dmic-corp.fr/images/right.png" width="10" height="10" /></a></th>
    <th scope="col"><a href="<?php printf("%s?pageNum_news=%d%s", $currentPage, $totalPages_news, $queryString_news); ?>"><img src="http://www.dmic-corp.fr/images/last.png" width="12" height="10" /></a></th>
    <?php } // Show if not last page ?>
  </tr>
</table>
<p>&nbsp;</p>
<?php if ($_SESSION['MM_UserGroup']=='Administrateurs') { ?>
<table width="60%" class="tab_cadrehov">
  <tr>
    <th width="33%" border="1">Actualit&eacute; GLPI</th>
    <td width="33%">&nbsp;</td>
    <th width="33%" border="1">Actualit&eacute;s OCS Inventory NG</th>
  </tr>
  <tr>
    <td border="1"> <SCRIPT language="Javascript"> 
 var member=""; //optionnel si vous etes inscrit sur la plateforme actifpub  le parametrage se fait dans votre espace membre 
 var fichier="http://www.glpi-project.org/?page=backend-breves&lang=fr"; 
 var limite="1";  //  sujets compris entre 1 
 var limite1="5";   //  et plus  
  var aspect="0";    //  0 ou 1 (1 permet d'afficher lien + description, 0 que les liens)  
 var minute="1";      //  0 ou 1 (1 permet d'afficher date et heure, 0 pas de date et heure) 
 var sujet="1"; //  0 ou 1 (1 permet d'afficher le titre des sujets trait?s, 0 pas de titre )  
 var te="Bitstream Vera Sans, arial, Tahoma, Sans serif";  // Police de caract?res (Verdana, arial etc...) 
 var fil_textsize="14";     // taille des liens et description 
 var title_textcolor="92BEE1";    // couleur des liens (000000 donne noir)  
 var tlien="none";  // style du lien none ou underline  
 var text_textcolor="";  // couleur description (000000 donne noir) 
 var frame_color=""; // couleur arri?re plan (FFFFFF donne blanc) 
 var content="1"; // 0 ou 1 comme param?tre optionnel, 1  format html,  0  format texte 
 var extract="";  // laisser vide ou indiquez le nombre de caract?res que vous souhaitez garder dans le corps du flux 
 var cache="15"; // gestion du cache exprim?e en minutes - en fonction de la fr?quence de mise ? jour 
  document.write('<s'+'cript language="JavaScript" type="text/javascript" SRC="http://www.actifpub.com/rss.php?fichier_AP_='+fichier+'&limite_AP_='+limite+'&limite1_AP_='+limite1+'&aspect_AP_='+aspect+'&minute_AP_='+minute+'&sujet_AP_='+sujet+'&te_AP_='+te+'&fil_textsize_AP_='+fil_textsize+'&title_textcolor_AP_='+title_textcolor+'&text_textcolor_AP_='+text_textcolor+'&frame_color_AP_='+frame_color+'&content_AP_='+content+'&cache_AP_='+cache+'&extract_AP_='+extract+'&tlien_AP_='+tlien+'&java=1&member_AP_='+member+'"></sc'+'ript>'); 
  </script></td>
    <td>&nbsp;</td>
    <td border="1"><SCRIPT language="Javascript"> 
 var member=""; //optionnel si vous etes inscrit sur la plateforme actifpub  le parametrage se fait dans votre espace membre 
 var fichier="http://www.ocsinventory-ng.org/en/rss.rss"; 
 var limite="1";  //  sujets compris entre 1 
 var limite1="5";   //  et plus  
  var aspect="0";    //  0 ou 1 (1 permet d'afficher lien + description, 0 que les liens)  
 var minute="1";      //  0 ou 1 (1 permet d'afficher date et heure, 0 pas de date et heure) 
 var sujet="1"; //  0 ou 1 (1 permet d'afficher le titre des sujets trait?s, 0 pas de titre )  
 var te="Bitstream Vera Sans, arial, Tahoma, Sans serif";  // Police de caract?res (Verdana, arial etc...) 
 var fil_textsize="14";     // taille des liens et description 
 var title_textcolor="92BEE1";    // couleur des liens (000000 donne noir)  
 var tlien="none";  // style du lien none ou underline  
 var text_textcolor="";  // couleur description (000000 donne noir) 
 var frame_color=""; // couleur arri?re plan (FFFFFF donne blanc) 
 var content="1"; // 0 ou 1 comme param?tre optionnel, 1  format html,  0  format texte 
 var extract="";  // laisser vide ou indiquez le nombre de caract?res que vous souhaitez garder dans le corps du flux 
 var cache="15"; // gestion du cache exprim?e en minutes - en fonction de la fr?quence de mise ? jour 
  document.write('<s'+'cript language="JavaScript" type="text/javascript" SRC="http://www.actifpub.com/rss.php?fichier_AP_='+fichier+'&limite_AP_='+limite+'&limite1_AP_='+limite1+'&aspect_AP_='+aspect+'&minute_AP_='+minute+'&sujet_AP_='+sujet+'&te_AP_='+te+'&fil_textsize_AP_='+fil_textsize+'&title_textcolor_AP_='+title_textcolor+'&text_textcolor_AP_='+text_textcolor+'&frame_color_AP_='+frame_color+'&content_AP_='+content+'&cache_AP_='+cache+'&extract_AP_='+extract+'&tlien_AP_='+tlien+'&java=1&member_AP_='+member+'"></sc'+'ript>'); 
  </script></td>
  </tr>
</table><?php } ?>
<p>&nbsp;</p>
  <!-- end .content -->
<!-- InstanceEndEditable --></div>
<div class="sidebar2" id="LayoutDiv5" align="center"><!-- InstanceBeginEditable name="sidebar2" -->
    <?php include ('front/inc/sidebar/sidebar2_pub.inc.php'); ?>
<!-- InstanceEndEditable --></div>
<div id="LayoutDiv6" class="footer"><!-- InstanceBeginEditable name="footer" -->
  <?php include('front/inc/footer/footer_users.inc.php');?>
  <!-- end .footer -->
<!-- InstanceEndEditable --></div>
</div>
</body>
<!-- InstanceEnd --></html>
<?php
mysql_free_result($news);

mysql_free_result($profil_users);
?>
