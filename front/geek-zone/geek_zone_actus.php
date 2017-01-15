<?php require_once ('../../ScriptLibrary/ban_ip.php') ;?>
<?php require_once('../../Connections/dmic.php'); ?>
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

$maxRows_animation = 5;
$pageNum_animation = 0;
if (isset($_GET['pageNum_animation'])) {
  $pageNum_animation = $_GET['pageNum_animation'];
}
$startRow_animation = $pageNum_animation * $maxRows_animation;

mysql_select_db($database_dmic, $dmic);
$query_animation = "SELECT dmic_actus.id_actus, dmic_actus.sujet_date, dmic_actusoeuvres.oeuvres_name, dmic_actuscategorieslvl2.categorieslvl2_name, dmic_actus.sujet_name, dmic_actus.sujet_auteur FROM dmic_actus, dmic_actusoeuvres, dmic_actuscategorieslvl2 WHERE dmic_actus.categorieslvl1 = 5 AND dmic_actusoeuvres.id_oeuvres = dmic_actus.oeuvres AND dmic_actuscategorieslvl2.id_lvl2 = dmic_actus.categorieslvl2 ORDER BY dmic_actus.sujet_date DESC";
$query_limit_animation = sprintf("%s LIMIT %d, %d", $query_animation, $startRow_animation, $maxRows_animation);
$animation = mysql_query($query_limit_animation, $dmic) or die(mysql_error());
$row_animation = mysql_fetch_assoc($animation);

if (isset($_GET['totalRows_animation'])) {
  $totalRows_animation = $_GET['totalRows_animation'];
} else {
  $all_animation = mysql_query($query_animation);
  $totalRows_animation = mysql_num_rows($all_animation);
}
$totalPages_animation = ceil($totalRows_animation/$maxRows_animation)-1;

$maxRows_cinema = 5;
$pageNum_cinema = 0;
if (isset($_GET['pageNum_cinema'])) {
  $pageNum_cinema = $_GET['pageNum_cinema'];
}
$startRow_cinema = $pageNum_cinema * $maxRows_cinema;

mysql_select_db($database_dmic, $dmic);
$query_cinema = "SELECT dmic_actus.id_actus, dmic_actus.sujet_date, dmic_actusoeuvres.oeuvres_name, dmic_actuscategorieslvl2.categorieslvl2_name, dmic_actus.sujet_name, dmic_actus.sujet_auteur FROM dmic_actus, dmic_actusoeuvres, dmic_actuscategorieslvl2 WHERE dmic_actus.categorieslvl1 = 10 AND dmic_actusoeuvres.id_oeuvres = dmic_actus.oeuvres AND dmic_actuscategorieslvl2.id_lvl2 = dmic_actus.categorieslvl2 ORDER BY dmic_actus.sujet_date DESC";
$query_limit_cinema = sprintf("%s LIMIT %d, %d", $query_cinema, $startRow_cinema, $maxRows_cinema);
$cinema = mysql_query($query_limit_cinema, $dmic) or die(mysql_error());
$row_cinema = mysql_fetch_assoc($cinema);

if (isset($_GET['totalRows_cinema'])) {
  $totalRows_cinema = $_GET['totalRows_cinema'];
} else {
  $all_cinema = mysql_query($query_cinema);
  $totalRows_cinema = mysql_num_rows($all_cinema);
}
$totalPages_cinema = ceil($totalRows_cinema/$maxRows_cinema)-1;

$maxRows_series = 5;
$pageNum_series = 0;
if (isset($_GET['pageNum_series'])) {
  $pageNum_series = $_GET['pageNum_series'];
}
$startRow_series = $pageNum_series * $maxRows_series;

mysql_select_db($database_dmic, $dmic);
$query_series = "SELECT dmic_actus.id_actus, dmic_actus.sujet_date, dmic_actusoeuvres.oeuvres_name, dmic_actuscategorieslvl2.categorieslvl2_name, dmic_actus.sujet_name, dmic_actus.sujet_auteur FROM dmic_actus, dmic_actusoeuvres, dmic_actuscategorieslvl2 WHERE dmic_actus.categorieslvl1 = 13 AND dmic_actusoeuvres.id_oeuvres = dmic_actus.oeuvres AND dmic_actuscategorieslvl2.id_lvl2 = dmic_actus.categorieslvl2 ORDER BY dmic_actus.sujet_date DESC";
$query_limit_series = sprintf("%s LIMIT %d, %d", $query_series, $startRow_series, $maxRows_series);
$series = mysql_query($query_limit_series, $dmic) or die(mysql_error());
$row_series = mysql_fetch_assoc($series);

if (isset($_GET['totalRows_series'])) {
  $totalRows_series = $_GET['totalRows_series'];
} else {
  $all_series = mysql_query($query_series);
  $totalRows_series = mysql_num_rows($all_series);
}
$totalPages_series = ceil($totalRows_series/$maxRows_series)-1;

$maxRows_bd = 5;
$pageNum_bd = 0;
if (isset($_GET['pageNum_bd'])) {
  $pageNum_bd = $_GET['pageNum_bd'];
}
$startRow_bd = $pageNum_bd * $maxRows_bd;

mysql_select_db($database_dmic, $dmic);
$query_bd = "SELECT dmic_actus.id_actus, dmic_actus.sujet_date, dmic_actusoeuvres.oeuvres_name, dmic_actuscategorieslvl2.categorieslvl2_name, dmic_actus.sujet_name, dmic_actus.sujet_auteur FROM dmic_actus, dmic_actusoeuvres, dmic_actuscategorieslvl2 WHERE dmic_actus.categorieslvl1 = 6 AND dmic_actusoeuvres.id_oeuvres = dmic_actus.oeuvres AND dmic_actuscategorieslvl2.id_lvl2 = dmic_actus.categorieslvl2 ORDER BY dmic_actus.sujet_date DESC";
$query_limit_bd = sprintf("%s LIMIT %d, %d", $query_bd, $startRow_bd, $maxRows_bd);
$bd = mysql_query($query_limit_bd, $dmic) or die(mysql_error());
$row_bd = mysql_fetch_assoc($bd);

if (isset($_GET['totalRows_bd'])) {
  $totalRows_bd = $_GET['totalRows_bd'];
} else {
  $all_bd = mysql_query($query_bd);
  $totalRows_bd = mysql_num_rows($all_bd);
}
$totalPages_bd = ceil($totalRows_bd/$maxRows_bd)-1;

$maxRows_litterature = 5;
$pageNum_litterature = 0;
if (isset($_GET['pageNum_litterature'])) {
  $pageNum_litterature = $_GET['pageNum_litterature'];
}
$startRow_litterature = $pageNum_litterature * $maxRows_litterature;

mysql_select_db($database_dmic, $dmic);
$query_litterature = "SELECT dmic_actus.id_actus, dmic_actus.sujet_date, dmic_actusoeuvres.oeuvres_name, dmic_actuscategorieslvl2.categorieslvl2_name, dmic_actus.sujet_name, dmic_actus.sujet_auteur FROM dmic_actus, dmic_actusoeuvres, dmic_actuscategorieslvl2 WHERE dmic_actus.categorieslvl1 = 12 AND dmic_actusoeuvres.id_oeuvres = dmic_actus.oeuvres AND dmic_actuscategorieslvl2.id_lvl2 = dmic_actus.categorieslvl2 ORDER BY dmic_actus.sujet_date DESC";
$query_limit_litterature = sprintf("%s LIMIT %d, %d", $query_litterature, $startRow_litterature, $maxRows_litterature);
$litterature = mysql_query($query_limit_litterature, $dmic) or die(mysql_error());
$row_litterature = mysql_fetch_assoc($litterature);

if (isset($_GET['totalRows_litterature'])) {
  $totalRows_litterature = $_GET['totalRows_litterature'];
} else {
  $all_litterature = mysql_query($query_litterature);
  $totalRows_litterature = mysql_num_rows($all_litterature);
}
$totalPages_litterature = ceil($totalRows_litterature/$maxRows_litterature)-1;

$maxRows_manga = 5;
$pageNum_manga = 0;
if (isset($_GET['pageNum_manga'])) {
  $pageNum_manga = $_GET['pageNum_manga'];
}
$startRow_manga = $pageNum_manga * $maxRows_manga;

mysql_select_db($database_dmic, $dmic);
$query_manga = "SELECT dmic_actus.id_actus, dmic_actus.sujet_date, dmic_actusoeuvres.oeuvres_name, dmic_actuscategorieslvl2.categorieslvl2_name, dmic_actus.sujet_name, dmic_actus.sujet_auteur FROM dmic_actus, dmic_actusoeuvres, dmic_actuscategorieslvl2 WHERE dmic_actus.categorieslvl1 = 7 AND dmic_actusoeuvres.id_oeuvres = dmic_actus.oeuvres AND dmic_actuscategorieslvl2.id_lvl2 = dmic_actus.categorieslvl2 ORDER BY dmic_actus.sujet_date DESC";
$query_limit_manga = sprintf("%s LIMIT %d, %d", $query_manga, $startRow_manga, $maxRows_manga);
$manga = mysql_query($query_limit_manga, $dmic) or die(mysql_error());
$row_manga = mysql_fetch_assoc($manga);

if (isset($_GET['totalRows_manga'])) {
  $totalRows_manga = $_GET['totalRows_manga'];
} else {
  $all_manga = mysql_query($query_manga);
  $totalRows_manga = mysql_num_rows($all_manga);
}
$totalPages_manga = ceil($totalRows_manga/$maxRows_manga)-1;

$maxRows_informatique = 5;
$pageNum_informatique = 0;
if (isset($_GET['pageNum_informatique'])) {
  $pageNum_informatique = $_GET['pageNum_informatique'];
}
$startRow_informatique = $pageNum_informatique * $maxRows_informatique;

mysql_select_db($database_dmic, $dmic);
$query_informatique = "SELECT dmic_actus.id_actus, dmic_actus.sujet_date, dmic_actusoeuvres.oeuvres_name, dmic_actuscategorieslvl2.categorieslvl2_name, dmic_actus.sujet_name, dmic_actus.sujet_auteur FROM dmic_actus, dmic_actusoeuvres, dmic_actuscategorieslvl2 WHERE dmic_actus.categorieslvl1 = 9 AND dmic_actusoeuvres.id_oeuvres = dmic_actus.oeuvres AND dmic_actuscategorieslvl2.id_lvl2 = dmic_actus.categorieslvl2 ORDER BY dmic_actus.sujet_date DESC";
$query_limit_informatique = sprintf("%s LIMIT %d, %d", $query_informatique, $startRow_informatique, $maxRows_informatique);
$informatique = mysql_query($query_limit_informatique, $dmic) or die(mysql_error());
$row_informatique = mysql_fetch_assoc($informatique);

if (isset($_GET['totalRows_informatique'])) {
  $totalRows_informatique = $_GET['totalRows_informatique'];
} else {
  $all_informatique = mysql_query($query_informatique);
  $totalRows_informatique = mysql_num_rows($all_informatique);
}
$totalPages_informatique = ceil($totalRows_informatique/$maxRows_informatique)-1;

$maxRows_video_games = 5;
$pageNum_video_games = 0;
if (isset($_GET['pageNum_video_games'])) {
  $pageNum_video_games = $_GET['pageNum_video_games'];
}
$startRow_video_games = $pageNum_video_games * $maxRows_video_games;

mysql_select_db($database_dmic, $dmic);
$query_video_games = "SELECT dmic_actus.id_actus, dmic_actus.sujet_date, dmic_actusoeuvres.oeuvres_name, dmic_actuscategorieslvl2.categorieslvl2_name, dmic_actus.sujet_name, dmic_actus.sujet_auteur FROM dmic_actus, dmic_actusoeuvres, dmic_actuscategorieslvl2 WHERE dmic_actus.categorieslvl1 = 11 AND dmic_actusoeuvres.id_oeuvres = dmic_actus.oeuvres AND dmic_actuscategorieslvl2.id_lvl2 = dmic_actus.categorieslvl2 ORDER BY dmic_actus.sujet_date DESC";
$query_limit_video_games = sprintf("%s LIMIT %d, %d", $query_video_games, $startRow_video_games, $maxRows_video_games);
$video_games = mysql_query($query_limit_video_games, $dmic) or die(mysql_error());
$row_video_games = mysql_fetch_assoc($video_games);

if (isset($_GET['totalRows_video_games'])) {
  $totalRows_video_games = $_GET['totalRows_video_games'];
} else {
  $all_video_games = mysql_query($query_video_games);
  $totalRows_video_games = mysql_num_rows($all_video_games);
}
$totalPages_video_games = ceil($totalRows_video_games/$maxRows_video_games)-1;

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
<link href="../../Styles/Fluid Grid Layout/boilerplate.css" rel="stylesheet" type="text/css">
<link href="../../Styles/grid_layout_v4.css" rel="stylesheet" type="text/css">
<link href="../../SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css">
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
<script src="../../SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<script type='text/javascript' src="../../ScriptLibrary/tiny_mce/tiny_mce.js"></script>
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
  <h1 align="center">Actualit&eacute;s Geek-Zone.</h1>
  <p align="center">&nbsp;</p>
  <p>
  <a href="http://www.dmic-corp.fr/front/geek-zone/new_actus.php"><input type="submit" name="new_actus" id="new_actus" value="Nouvelle actualit&eacute;s Geek-Zone" /></a>
  </p>
  <div id="TabbedPanels1" class="TabbedPanels">
    <ul class="TabbedPanelsTabGroup">
      <li class="TabbedPanelsTab" tabindex="0">Derni&egrave;res actualit&eacute;s</li>
      <li class="TabbedPanelsTab" tabindex="0">Parcourir</li>
    </ul>
    <div class="TabbedPanelsContentGroup">
      <div class="TabbedPanelsContent">
        <table width="90%" border="0" align="center">
          <tr>
            <td><table width="100%" border="1" align="center" class="tab_cadrehov">
              <tr>
                <th colspan="5" scope="col">Animation <em>(<?php echo $totalRows_animation; ?> articles)</em></th>
                </tr>
              <tr>
                <th>Date</th>
                <th>Oeuvres</th>
                <th>Type de sujet</th>
                <th>Sujet</th>
                <th>Auteur</th>
              </tr>
              <?php do { ?>
                <tr>
                  <td><?php echo $row_animation['sujet_date']; ?></td>
                  <td><?php echo $row_animation['oeuvres_name']; ?></td>
                  <td><?php echo $row_animation['categorieslvl2_name']; ?></td>
                  <td><a href="http://www.dmic-corp.fr/front/geek-zone/actus.php?id_actus=<?php echo $row_animation['id_actus']; ?>"><?php echo $row_animation['sujet_name']; ?></a></td>
                  <td><?php echo $row_animation['sujet_auteur']; ?></td>
                </tr>
                <?php } while ($row_animation = mysql_fetch_assoc($animation)); ?>
            </table></td>
            <td>&nbsp;</td>
            <td><table width="100%" border="1" align="center" class="tab_cadrehov">
              <tr>
                <th colspan="5" scope="col">BD <em>(<?php echo $totalRows_bd; ?> articles)</em></th>
              </tr>
              <tr>
                <th>Date</th>
                <th>Oeuvres</th>
                <th>Type de sujet</th>
                <th>Sujet</th>
                <th>Auteur</th>
              </tr>
              <?php do { ?>
                <tr>
                  <td><?php echo $row_bd['sujet_date']; ?></td>
                  <td><?php echo $row_bd['oeuvres_name']; ?></td>
                  <td><?php echo $row_bd['categorieslvl2_name']; ?></td>
                  <td><a href="http://www.dmic-corp.fr/front/geek-zone/actus.php?id_actus=<?php echo $row_bd['sujet_date']; ?>"><?php echo $row_bd['sujet_name']; ?></a></td>
                  <td><?php echo $row_bd['sujet_auteur']; ?></td>
                </tr>
                <?php } while ($row_bd = mysql_fetch_assoc($bd)); ?>
            </table></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><table width="100%" border="1" align="center" class="tab_cadrehov">
              <tr>
                <th colspan="5" scope="col">Cin&eacute;ma <em>(<?php echo $totalRows_cinema; ?> articles)</em></th>
              </tr>
              <tr>
                <th>Date</th>
                <th>Oeuvres</th>
                <th>Type de sujet</th>
                <th>Sujet</th>
                <th>Auteur</th>
              </tr>
              <?php do { ?>
                <tr>
                  <td><?php echo $row_cinema['sujet_date']; ?></td>
                  <td><?php echo $row_cinema['oeuvres_name']; ?></td>
                  <td><?php echo $row_cinema['categorieslvl2_name']; ?></td>
                  <td><a href="http://www.dmic-corp.fr/front/geek-zone/actus.php?id_actus=<?php echo $row_cinema['id_actus']; ?>"><?php echo $row_cinema['sujet_name']; ?></a></td>
                  <td><?php echo $row_cinema['sujet_auteur']; ?></td>
                </tr>
                <?php } while ($row_cinema = mysql_fetch_assoc($cinema)); ?>
            </table></td>
            <td>&nbsp;</td>
            <td><table width="100%" border="1" align="center" class="tab_cadrehov">
              <tr>
                <th colspan="5" scope="col">Nouvelles technologies <em>(<?php echo $totalRows_informatique; ?> articles)</em></th>
              </tr>
              <tr>
                <th>Date</th>
                <th>Oeuvres</th>
                <th>Type de sujet</th>
                <th>Sujet</th>
                <th>Auteur</th>
              </tr>
              <?php do { ?>
                <tr>
                  <td><?php echo $row_informatique['sujet_date']; ?></td>
                  <td><?php echo $row_informatique['oeuvres_name']; ?></td>
                  <td><?php echo $row_informatique['categorieslvl2_name']; ?></td>
                  <td><a href="http://www.dmic-corp.fr/front/geek-zone/actus.php?id_actus=<?php echo $row_informatique['id_actus']; ?>"><?php echo $row_informatique['sujet_name']; ?></a></td>
                  <td><?php echo $row_informatique['sujet_auteur']; ?></td>
                </tr>
                <?php } while ($row_informatique = mysql_fetch_assoc($informatique)); ?>
            </table></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><table width="100%" border="1" align="center" class="tab_cadrehov">
              <tr>
                <th colspan="5" scope="col">Jeux vid&eacute;os <em>(<?php echo $totalRows_video_games; ?> articles)</em></th>
              </tr>
              <tr>
                <th>Date</th>
                <th>Oeuvres</th>
                <th>Type de sujet</th>
                <th>Sujet</th>
                <th>Auteur</th>
              </tr>
              <?php do { ?>
                <tr>
                  <td><?php echo $row_video_games['sujet_date']; ?></td>
                  <td><?php echo $row_video_games['oeuvres_name']; ?></td>
                  <td><?php echo $row_video_games['categorieslvl2_name']; ?></td>
                  <td><a href="http://www.dmic-corp.fr/front/geek-zone/actus.php?id_actus=<?php echo $row_video_games['id_actus']; ?>"><?php echo $row_video_games['sujet_name']; ?></a></td>
                  <td><?php echo $row_video_games['sujet_auteur']; ?></td>
                </tr>
                <?php } while ($row_video_games = mysql_fetch_assoc($video_games)); ?>
            </table></td>
            <td>&nbsp;</td>
            <td><table width="100%" border="1" align="center" class="tab_cadrehov">
              <tr>
                <th colspan="5" scope="col">Litt&eacute;rature <em>(<?php echo $totalRows_litterature; ?> articles)</em></th>
              </tr>
              <tr>
                <th>Date</th>
                <th>Oeuvres</th>
                <th>Type de sujet</th>
                <th>Sujet</th>
                <th>Auteur</th>
              </tr>
              <?php do { ?>
                <tr>
                  <td><?php echo $row_litterature['sujet_date']; ?></td>
                  <td><?php echo $row_litterature['oeuvres_name']; ?></td>
                  <td><?php echo $row_litterature['categorieslvl2_name']; ?></td>
                  <td><a href="http://www.dmic-corp.fr/front/geek-zone/actus.php?id_actus=<?php echo $row_litterature['id_actus']; ?>"><?php echo $row_litterature['sujet_name']; ?></a></td>
                  <td><?php echo $row_litterature['sujet_auteur']; ?></td>
                </tr>
                <?php } while ($row_litterature = mysql_fetch_assoc($litterature)); ?>
            </table></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><table width="100%" border="1" align="center" class="tab_cadrehov">
              <tr>
                <th colspan="5" scope="col">Manga <em>(<?php echo $totalRows_manga; ?> articles)</em></th>
              </tr>
              <tr>
                <th>Date</th>
                <th>Oeuvres</th>
                <th>Type de sujet</th>
                <th>Sujet</th>
                <th>Auteur</th>
              </tr>
              <?php do { ?>
                <tr>
                  <td><?php echo $row_manga['sujet_date']; ?></td>
                  <td><?php echo $row_manga['oeuvres_name']; ?></td>
                  <td><?php echo $row_manga['categorieslvl2_name']; ?></td>
                  <td><a href="http://www.dmic-corp.fr/front/geek-zone/actus.php?id_actus=<?php echo $row_manga['id_actus']; ?>"><?php echo $row_manga['sujet_name']; ?></a></td>
                  <td><?php echo $row_manga['sujet_auteur']; ?></td>
                </tr>
                <?php } while ($row_manga = mysql_fetch_assoc($manga)); ?>
            </table></td>
            <td>&nbsp;</td>
            <td><table width="100%" border="1" align="center" class="tab_cadrehov">
              <tr>
                <th colspan="5" scope="col">S&eacute;ries <em>(<?php echo $totalRows_series; ?> articles)</em></th>
              </tr>
              <tr>
                <th>Date</th>
                <th>Oeuvres</th>
                <th>Type de sujet</th>
                <th>Sujet</th>
                <th>Auteur</th>
              </tr>
              <?php do { ?>
                <tr>
                  <td><?php echo $row_series['sujet_date']; ?></td>
                  <td><?php echo $row_series['oeuvres_name']; ?></td>
                  <td><?php echo $row_series['categorieslvl2_name']; ?></td>
                  <td><a href="http://www.dmic-corp.fr/front/geek-zone/actus.php?id_actus=<?php echo $row_series['id_actus']; ?>"><?php echo $row_series['sujet_name']; ?></a></td>
                  <td><?php echo $row_series['sujet_auteur']; ?></td>
                </tr>
                <?php } while ($row_series = mysql_fetch_assoc($series)); ?>
            </table></td>
          </tr>
        </table>
      </div>
      <div class="TabbedPanelsContent">
      <script type="text/javascript" src="../inc/actusoeuvres_xhr.js" charset="iso_8859-1"></script>
			<?php
				echo("<?xml version=\"1.0\" encoding=\"iso-8859-1\"?>\n");
				/* Variables de connexion : ajustez ces paramètres selon votre propre environnement */
				$serveur = "dmiccorpglroot.mysql.db";
				$admin   = "dmiccorpglroot";
				$mdp     = "Password7";
				$base    = "dmiccorpglroot";
			?>
            <?php
				/* Requête SQL de récupération des données de la première liste */
				$sql = "SELECT `id_lvl1` AS idt, `categorieslvl1_name` ".
					   "FROM `dmic_actuscategorieslvl1` ".
					   "ORDER BY `categorieslvl1_name`;";
				/* Connexion et exécution de la requête */
				$connexion = mysql_connect($serveur, $admin, $mdp);
				if($connexion != false)
				{
					$choixbase = mysql_select_db($base, $connexion);
					$recherche = mysql_query($sql, $connexion);
					/* Création du tableau PHP des valeurs récupérées */
					$types = array();
					/* Index du département par tableau régional */
					$id = 0;
					while($ligne = mysql_fetch_assoc($recherche))
					{
						$types[$ligne['idt']] = $ligne['categorieslvl1_name'];
					}
			?>
            <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="get" id="chgdept">
                <table width="30%" border="1" align="center" class="tab_cadrehov">
                  <tr>
                    <th width="15%" scope="row">Types d'actus sur</th>
                    <td width="15%"><select name="types" id="types" onchange="getActusoeuvres(this.value);">
                      <option value="vide">- - - Cat&eacute;gories - - -</option>
                      <?php
                /* Construction de la premi&egrave;re liste : on se sert du tableau PHP */
                foreach($types as $nr => $nom)
                {
                    ?>
                      <option value="<?php echo($nr); ?>"><?php echo($nom); ?></option>
                      <?php
                }
                ?>
                    </select>
                    <!-- ICI, le secret : on met un bloc avec un id ou va s'ins&eacute;rer le code de
                     la seconde liste d&eacute;roulande --></td>
                  </tr>
                  <tr>
                    <th scope="row">Concerne</th>
                    <td>
						<script type="text/javascript" src="../inc/actuscategorieslvl2_xhr.js" charset="iso_8859-1"></script>
                        <span id="blocActusoeuvres"></span><br />
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">Actualit&eacute;s</th>
                    <td><script type="text/javascript" src="../inc/actussujet_xhr.js" charset="iso_8859-1"></script>
                        <span id="blocActuscategorieslvl2"></span><br /></td>
                  </tr>
                  <tr>
                    <th scope="row">Sujets</th>
                    <td><script type="text/javascript" src="../inc/actustexte_xhr.js" charset="iso_8859-1"></script>
                        <span id="blocActussujet"></span><br /></td>
                  </tr>
                </table>
            </form>
            <p align="center">
              <?php
            }
            else
            {
                /*  Si vous arrivez ici, vous avez un gros problème avec la connexion au serveur de base de données */
            ?>
            
              <?php
            }
            ?>
            <p align="center">
            	<span id="blocActustexte"></span><br />
          </span>            
      </div>
    </div>
  </div>
  <p>&nbsp;</p>
<!-- InstanceEndEditable --></div>
<div class="sidebar2" id="LayoutDiv5" align="center"><!-- InstanceBeginEditable name="sidebar2" -->
    <?php include ('../inc/sidebar/sidebar2_pub.inc.php'); ?>
<!-- InstanceEndEditable --></div>
<div id="LayoutDiv6" class="footer"><!-- InstanceBeginEditable name="footer" -->
  <?php include('../inc/footer/footer_users.inc.php');?>
  <script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
  </script>
<!-- InstanceEndEditable --></div>
</div>
</body>
<!-- InstanceEnd --></html>
<?php
mysql_free_result($profil_users);

mysql_free_result($animation);

mysql_free_result($cinema);

mysql_free_result($series);

mysql_free_result($bd);

mysql_free_result($litterature);

mysql_free_result($manga);

mysql_free_result($informatique);

mysql_free_result($video_games);

mysql_free_result($nb_animation);
?>
