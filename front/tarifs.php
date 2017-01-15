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
?><!doctype html>
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
<!--
.Style1 {font-size: 10px}
-->
</style>
<!-- InstanceEndEditable -->
</head>

<body>
<div class="gridContainer clearfix">
  <div id="LayoutDiv1" class="header"><!-- InstanceBeginEditable name="header" -->
    <?php include ('inc/header/header.inc.php'); ?>
    <!-- end .header -->
<!-- InstanceEndEditable --></div>
<div id="LayoutDiv2" class="header_pub"><!-- InstanceBeginEditable name="header_pub" -->
	<?php include('inc/header/header_pub.inc.php');?>
<!-- InstanceEndEditable --></div>
  <div class="sidebar1" id="LayoutDiv3" align="center"><!-- InstanceBeginEditable name="sidebar1" -->
   <?php include ('inc/sidebar/stats/stats.php'); ?>
   </p>
<!-- InstanceEndEditable --></div>
<div id="LayoutDiv4" class="content"><!-- InstanceBeginEditable name="content" -->
  <h1 align="center" class="Style7">Tarifs.</h1>
  <p align="center" class="Style7">&nbsp;</p>
  <table width="60%" border="1" align="center" class="tab_cadrehov">
    <tr>
      <th colspan="2" class="Style7" scope="col"><div align="center">Prestations</div></th>
      <th width="75" class="Style7" scope="col"><div align="center">Plein tarif</div></th>
      <th width="75" class="Style7" scope="col"><div align="center">Tarif r&eacute;duit*</div></th>
      </tr>
    <tr>
      <th colspan="4" class="Style7" scope="row"><div align="center">Prestations informatiques</div></th>
      </tr>
    <tr>
      <td colspan="2" class="Style7" scope="row"><div align="center">Installation d'un OS</div></td>
      <td width="75" class="Style7"><div align="center">30 &euro;</div></td>
      <td width="75" class="Style7"><div align="center">20 &euro;</div></td>
      </tr>
    <tr>
      <td width="180" rowspan="2" class="Style7" scope="row"><div align="center">Installation de logiciels</div></td>
      <td class="Style7"><div align="center">Logiciels bureautiques</div></td>
      <td width="75" class="Style7"><div align="center">15 &euro;</div></td>
      <td width="75" class="Style7"><div align="center">10 &euro;</div></td>
    </tr>
    <tr>
      <td class="Style7"><div align="center">Logiciels sp&eacute;cifiques</div></td>
      <td width="75" class="Style7"><div align="center">20 &euro;</div></td>
      <td width="75" class="Style7"><div align="center">15 &euro;</div></td>
    </tr>
    <tr>
      <td rowspan="2" class="Style7" scope="row"><div align="center">Clonage du syst&egrave;me</div></td>
      <td class="Style7"><div align="center">Clone sur disque dur client</div></td>
      <td width="75" class="Style7"><div align="center">20 &euro;</div></td>
      <td width="75" class="Style7"><div align="center">10 &euro;</div></td>
    </tr>
    <tr>
      <td class="Style7"><div align="center">Clone h&eacute;berg&eacute;</div></td>
      <td width="75" class="Style7"><div align="center">25 &euro;</div></td>
      <td width="75" class="Style7"><div align="center">15 &euro;</div></td>
    </tr>
    <tr>
      <td colspan="2" class="Style7" scope="row"><div align="center">Intervention probl&egrave;mes divers</div></td>
      <td width="75" class="Style7"><div align="center">20 &euro; /h</div></td>
      <td width="75" class="Style7"><div align="center">10 &euro; /h</div></td>
    </tr>
    <tr>
      <td colspan="2" class="Style7" scope="row"><div align="center">Commande de pi&egrave;ces informatiques</div></td>
      <td colspan="2" class="Style7">Prix fournisseur + 5% du prix de la facture.</td>
      </tr>
    <tr>
      <td colspan="4" class="Style7" scope="row">&nbsp;</td>
    </tr>
    <tr>
      <th colspan="4" class="Style7" scope="row"><div align="center">R&eacute;solution de probl&egrave;mes</div></th>
    </tr>
    <tr>
      <td rowspan="2" class="Style7" scope="row">Nettoyage</td>
      <td class="Style7" scope="row">Nettoyage</td>
      <td class="Style7"><div align="center">30 &euro;</div></td>
      <td class="Style7"><div align="center">25 &euro;</div></td>
    </tr>
    <tr>
      <td class="Style7" scope="row">Si &eacute;chec : Diagnostique</td>
      <td colspan="2" class="Style7"><div align="center">10 &euro;</div></td>
    </tr>
    <tr>
      <td rowspan="4" class="Style7" scope="row">R&eacute;solution de probl&egrave;mes</td>
      <td class="Style7" scope="row">R&eacute;installation de programmes</td>
      <td colspan="2" class="Style7"><div align="center">10 &euro;</div></td>
    </tr>
    <tr>
      <td class="Style7" scope="row">Restauration de l'OS via les outils Microsoft</td>
      <td class="Style7"><div align="center">30 &euro;</div></td>
      <td class="Style7"><div align="center">25 &euro;</div></td>
    </tr>
    <tr>
      <td class="Style7" scope="row">Restauration de l'OS via le Clone via clone client</td>
      <td class="Style7"><div align="center">30 &euro;</div></td>
      <td class="Style7"><div align="center">25 &euro;</div></td>
    </tr>
    <tr>
      <td class="Style7" scope="row">restauration de l'OS via Clone h&eacute;berg&eacute;</td>
      <td class="Style7"><div align="center">35 &euro;</div></td>
      <td class="Style7"><div align="center">30 &euro;</div></td>
    </tr>
    <tr>
      <td colspan="4" class="Style7" scope="row">&nbsp;</td>
      </tr>
    <tr>
      <th colspan="4" class="Style7" scope="row"><div align="center">Packs</div>        <div align="center"></div>        <div align="center"></div></th>
      </tr>
    <tr>
      <td colspan="2" class="Style7" scope="row"><div align="justify">Pack Installation d'un OS et des logiciels <span class="Style1"><em>(+10 &euro; par logiciels sp&eacute;cifiques)</em></span></div></td>
      <td class="Style7"><div align="center">45 &euro;</div></td>
      <td class="Style7"><div align="center">35 &euro;</div></td>
    </tr>
    <tr>
      <td colspan="2" class="Style7" scope="row"><div align="justify">Pack Installation d'un OS, des logiciels et clonage du syst&egrave;me <span class="Style1"><em>(+10 &euro; par logiciels sp&eacute;cifiques)</em></span></div></td>
      <td class="Style7"><div align="center">60 &euro;</div></td>
      <td class="Style7"><div align="center">45 &euro;</div></td>
    </tr>
    <tr>
      <td colspan="2" class="Style7" scope="row">Pack montage ordinateur, installation d'un OS et des logiciels <span class="Style1"><em>(+10 &euro; par logiciels sp&eacute;cifiques)</em></span></td>
      <td colspan="2" class="Style7"><div align="center">60 &euro;</div></td>
      </tr>
    <tr>
      <td colspan="2" class="Style7" scope="row">Pack montage ordinateur, installation d'un OS et des logiciels + clonage syst&egrave;me</td>
      <td colspan="2" class="Style7"><div align="center">75 &euro;</div>
          <div align="center"></div></td>
    </tr>
    <tr>
      <td colspan="4" class="Style7" scope="row">&nbsp;</td>
    </tr>
    <tr>
      <th colspan="4" class="Style7" scope="row"><div align="center">Enseignements particuliers</div>        <div align="center"></div>        <div align="center"></div></th>
      </tr>
    <tr>
      <td colspan="2" class="Style7" scope="row"><div align="center">Cours particulier</div></td>
      <td width="75" class="Style7"><div align="center">20 &euro; / h</div></td>
      <td width="75" class="Style7"><div align="center"></div></td>
      </tr>
  </table>
  <p align="center" class="Style7 Style1">* Garantit syst&egrave;me ou Garantit mat&eacute;rielr: 10 &euro; / ans / ordinateurs</p>
  <p align="center" class="Style7 Style1">* Garantit syst&egrave;me et Garantit mat&eacute;riel: 20 &euro; / ans / ordinateurs</p>
  <h1 align="center" class="Style7">&nbsp;</h1>
  <h1 align="center" class="Style7">Options. </h1>
  <table width="80%" border="1" align="center" class="tab_cadrehov">
    <tr>
      <th width="304" class="Style7" scope="col">Options</th>
      <th width="106" class="Style7" scope="col"><div align="center">Outils</div></th>
      <th width="468" class="Style7" scope="col">Description</th>
    </tr>
    <tr>
      <th class="Style7" scope="col"><div align="justify">Gestion du client et de son parc informatique</div></th>
      <td class="Style7" scope="col"><div align="center">GLPI</div></td>
      <td class="Style7" scope="col"><div align="justify">
        <ul>
          <li>Inventaire mat&eacute;riel et logiciel</li>
          <li>Outil de gestion des incidents</li>
        </ul>
      </div></td>
    </tr>
    <tr>
      <th class="Style7" scope="row"><div align="justify">Inventaire mat&eacute;riels et logiciels en temps r&eacute;el</div></th>
      <td class="Style7"><div align="center">OCS Inventory NG</div></td>
      <td class="Style7"><div align="justify">Un client install&eacute; sur l'ordinateur envoie les informations mat&eacute;riel et logiciel vers un serveur de gestion, synchronis&eacute; avec GLPI.</div></td>
    </tr>
    <tr>
      <th class="Style7" scope="row"><div align="justify">Installation d'un logiciel de prise en main &agrave; distance</div></th>
      <td class="Style7"><div align="center">TeamViewer</div></td>
      <td class="Style7"><div align="justify"></div></td>
    </tr>
    <tr>
      <th class="Style7" scope="row"><div align="justify">Clonage du syst&egrave;me pour restauration du syst&egrave;me en cas de probl&egrave;me.</div></th>
      <td class="Style7"><div align="center">Clonezilla</div></td>
      <td class="Style7"><div align="justify">Logiciel permettant de cr&eacute;er une image disque du syst&egrave;me qui pourra &ecirc;tre utilis&eacute; en cas probl&egrave;me.</div></td>
    </tr>
    <tr>
      <th class="Style7" scope="row"><div align="justify">Remplacement du/des mat&eacute;riel(s) d&eacute;fectueux gratuit.</div></th>
      <td class="Style7"><div align="center"></div></td>
      <td class="Style7"><div align="justify"></div></td>
    </tr>
  </table>
  <p align="left" class="Style7"></p>
  <h1>&nbsp;</h1>
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
