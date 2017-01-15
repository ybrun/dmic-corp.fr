<?php require_once ('../ScriptLibrary/ban_ip.php') ;?>
<?php require_once('../Connections/dmic.php'); 
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}
?>
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
 
$currentPage = $_SERVER["PHP_SELF"];
 
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}
 
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form3")) {
  $insertSQL = sprintf("INSERT INTO dmic_demandedevisservices (addr_ip, nettoyage, resolution_probleme, installation_os, clonage, commentaire, statut, date_creation, contact, email_contact) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['ip'], "text"),
                       GetSQLValueString(isset($_POST['nettoyage']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString(isset($_POST['resolution_probleme']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString(isset($_POST['installation_os']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString(isset($_POST['clonage']) ? "true" : "", "defined","1","0"),
                       GetSQLValueString($_POST['commantaires'], "text"),
                       GetSQLValueString($_POST['statut'], "int"),
                       GetSQLValueString($_POST['date'], "date"),
                       GetSQLValueString($_POST['contact'], "text"),
                       GetSQLValueString($_POST['email_contact'], "text"));
 
  mysql_select_db($database_dmic, $dmic);
  $Result1 = mysql_query($insertSQL, $dmic) or die(mysql_error());
 
  $insertGoTo = "http://www.dmic-corp.fr/front/devis.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
 
if ((isset($_GET['id_devis_ordi'])) && ($_GET['id_devis_ordi'] != "")) {
  $deleteSQL = sprintf("DELETE FROM dmic_demandedevis WHERE id_devis=%s",
                       GetSQLValueString($_GET['id_devis_ordi'], "int"));
 
  mysql_select_db($database_dmic, $dmic);
  $Result1 = mysql_query($deleteSQL, $dmic) or die(mysql_error());
}
 
if ((isset($_GET['id_devis_service'])) && ($_GET['id_devis_service'] != "")) {
  $deleteSQL = sprintf("DELETE FROM dmic_demandedevisservices WHERE id_devisservice=%s",
                       GetSQLValueString($_GET['id_devis_service'], "int"));
 
  mysql_select_db($database_dmic, $dmic);
  $Result1 = mysql_query($deleteSQL, $dmic) or die(mysql_error());
}
 
$maxRows_profil_users = 10;
$pageNum_profil_users = 0;
if (isset($_GET['pageNum_profil_users'])) {
  $pageNum_profil_users = $_GET['pageNum_profil_users'];
}
$startRow_profil_users = $pageNum_profil_users * $maxRows_profil_users;
 
$colname_profil_users = "-1";
if (isset($_SESSION['MM_Username'])) {
  $colname_profil_users = $_SESSION['MM_Username'];
}
mysql_select_db($database_dmic, $dmic);
$query_profil_users = sprintf("SELECT nom_user, prenom_user, e_mail_user, profil FROM dmic_users WHERE login = %s", GetSQLValueString($colname_profil_users, "text"));
$query_limit_profil_users = sprintf("%s LIMIT %d, %d", $query_profil_users, $startRow_profil_users, $maxRows_profil_users);
$profil_users = mysql_query($query_limit_profil_users, $dmic) or die(mysql_error());
$row_profil_users = mysql_fetch_assoc($profil_users);
 
if (isset($_GET['totalRows_profil_users'])) {
  $totalRows_profil_users = $_GET['totalRows_profil_users'];
} else {
  $all_profil_users = mysql_query($query_profil_users);
  $totalRows_profil_users = mysql_num_rows($all_profil_users);
}
$totalPages_profil_users = ceil($totalRows_profil_users/$maxRows_profil_users)-1;
$_SESSION['Nom'] = $row_profil_users['nom_user'];
$_SESSION['Prenom'] = $row_profil_users['prenom_user'];
$_SESSION['E_Mail'] = $row_profil_users['profil'];
$_SESSION['Contact'] = $_SESSION['Nom'].' '.$_SESSION['Prenom'];
 
$colip_devis_pc_users = "-1";
if (isset($_SERVER['REMOTE_ADDR'])) {
  $colip_devis_pc_users = $_SERVER['REMOTE_ADDR'];
}
 
mysql_select_db($database_dmic, $dmic);
$query_devis_pc_users = sprintf("SELECT dmic_demandedevis.addr_ip AS 'Adresse IP', dmic_demandedevis.contact  AS 'Demandeur', dmic_demandedevis.email_contact AS 'Contact', dmic_demandedevis.pc_type AS 'Type ordinateur', dmic_demandedevis.pc_categorie AS 'Categorie', dmic_demandedevis.commentaires AS 'Commentaires', dmic_devisstatut.statut AS 'Statut', dmic_demandedevis.date_creation AS 'Date de creation', dmic_demandedevis.date_priseencompte AS 'Date de prise en compte', dmic_demandedevis.date_cloture AS 'Date de cloture' FROM dmic_demandedevis, dmic_devisstatut WHERE dmic_demandedevis.statut = dmic_devisstatut.id_statut AND dmic_demandedevis.addr_ip = %s", GetSQLValueString($colip_devis_pc_users, "text"));
$devis_pc_users = mysql_query($query_devis_pc_users, $dmic) or die(mysql_error());
$row_devis_pc_users = mysql_fetch_assoc($devis_pc_users);
$totalRows_devis_pc_users = mysql_num_rows($devis_pc_users);
 
$maxRows_devis_pc_admin = 10;
$pageNum_devis_pc_admin = 0;
if (isset($_GET['pageNum_devis_pc_admin'])) {
  $pageNum_devis_pc_admin = $_GET['pageNum_devis_pc_admin'];
}
$startRow_devis_pc_admin = $pageNum_devis_pc_admin * $maxRows_devis_pc_admin;
 
mysql_select_db($database_dmic, $dmic);
$query_devis_pc_admin = "SELECT dmic_demandedevis.id_devis, dmic_demandedevis.addr_ip AS 'Adresse IP', dmic_demandedevis.contact  AS 'Demandeur', dmic_demandedevis.email_contact AS 'Contact', dmic_demandedevis.pc_type AS 'Type ordinateur', dmic_demandedevis.pc_categorie AS 'Categorie', dmic_demandedevis.commentaires AS 'Commentaires', dmic_devisstatut.statut AS 'Statut', dmic_demandedevis.date_creation AS 'Date de creation', dmic_demandedevis.date_priseencompte AS 'Date de prise en compte', dmic_demandedevis.date_cloture AS 'Date de cloture' FROM dmic_demandedevis, dmic_devisstatut WHERE dmic_demandedevis.statut = dmic_devisstatut.id_statut";
$query_limit_devis_pc_admin = sprintf("%s LIMIT %d, %d", $query_devis_pc_admin, $startRow_devis_pc_admin, $maxRows_devis_pc_admin);
$devis_pc_admin = mysql_query($query_limit_devis_pc_admin, $dmic) or die(mysql_error());
$row_devis_pc_admin = mysql_fetch_assoc($devis_pc_admin);
 
if (isset($_GET['totalRows_devis_pc_admin'])) {
  $totalRows_devis_pc_admin = $_GET['totalRows_devis_pc_admin'];
} else {
  $all_devis_pc_admin = mysql_query($query_devis_pc_admin);
  $totalRows_devis_pc_admin = mysql_num_rows($all_devis_pc_admin);
}
$totalPages_devis_pc_admin = ceil($totalRows_devis_pc_admin/$maxRows_devis_pc_admin)-1;
 
$maxRows_devis_services_admin = 10;
$pageNum_devis_services_admin = 0;
if (isset($_GET['pageNum_devis_services_admin'])) {
  $pageNum_devis_services_admin = $_GET['pageNum_devis_services_admin'];
}
$startRow_devis_services_admin = $pageNum_devis_services_admin * $maxRows_devis_services_admin;
 
mysql_select_db($database_dmic, $dmic);
$query_devis_services_admin = "SELECT dmic_demandedevisservices.id_devisservice, dmic_demandedevisservices.addr_ip AS 'Adresse IP', dmic_demandedevisservices.contact AS 'Demandeur', dmic_demandedevisservices.email_contact AS 'Contact', dmic_demandedevisservices.commentaire AS 'Commentaires', dmic_devisstatut.statut AS 'Statut', dmic_demandedevisservices.date_creation AS 'Date de creation', dmic_demandedevisservices.date_priseencompte AS 'Date de prise en compte', dmic_demandedevisservices.date_cloture As 'Date de cloture' FROM dmic_demandedevisservices, dmic_devisstatut WHERE dmic_demandedevisservices.statut = dmic_devisstatut.id_statut";
$query_limit_devis_services_admin = sprintf("%s LIMIT %d, %d", $query_devis_services_admin, $startRow_devis_services_admin, $maxRows_devis_services_admin);
$devis_services_admin = mysql_query($query_limit_devis_services_admin, $dmic) or die(mysql_error());
$row_devis_services_admin = mysql_fetch_assoc($devis_services_admin);
 
if (isset($_GET['totalRows_devis_services_admin'])) {
  $totalRows_devis_services_admin = $_GET['totalRows_devis_services_admin'];
} else {
  $all_devis_services_admin = mysql_query($query_devis_services_admin);
  $totalRows_devis_services_admin = mysql_num_rows($all_devis_services_admin);
}
$totalPages_devis_services_admin = ceil($totalRows_devis_services_admin/$maxRows_devis_services_admin)-1;
 
$maxRows_devis_services_users = 10;
$pageNum_devis_services_users = 0;
if (isset($_GET['pageNum_devis_services_users'])) {
  $pageNum_devis_services_users = $_GET['pageNum_devis_services_users'];
}
$startRow_devis_services_users = $pageNum_devis_services_users * $maxRows_devis_services_users;
 
$colip2_devis_services_users = "-1";
if (isset($_SERVER['REMOTE_ADDR'])) {
  $colip2_devis_services_users = $_SERVER['REMOTE_ADDR'];
}
mysql_select_db($database_dmic, $dmic);
$query_devis_services_users = sprintf("SELECT dmic_demandedevisservices.id_devisservice, dmic_demandedevisservices.addr_ip AS 'Adresse IP', dmic_demandedevisservices.contact AS 'Demandeur', dmic_demandedevisservices.email_contact AS 'Contact', dmic_demandedevisservices.commentaire AS 'Commentaires', dmic_devisstatut.statut AS 'Statut', dmic_demandedevisservices.date_creation AS 'Date de creation', dmic_demandedevisservices.date_priseencompte AS 'Date de prise en compte', dmic_demandedevisservices.date_cloture As 'Date de cloture' FROM dmic_demandedevisservices, dmic_devisstatut WHERE dmic_demandedevisservices.statut = dmic_devisstatut.id_statut AND dmic_demandedevisservices.addr_ip = %s", GetSQLValueString($colip2_devis_services_users, "text"));
$query_limit_devis_services_users = sprintf("%s LIMIT %d, %d", $query_devis_services_users, $startRow_devis_services_users, $maxRows_devis_services_users);
$devis_services_users = mysql_query($query_limit_devis_services_users, $dmic) or die(mysql_error());
$row_devis_services_users = mysql_fetch_assoc($devis_services_users);
 
if (isset($_GET['totalRows_devis_services_users'])) {
  $totalRows_devis_services_users = $_GET['totalRows_devis_services_users'];
} else {
  $all_devis_services_users = mysql_query($query_devis_services_users);
  $totalRows_devis_services_users = mysql_num_rows($all_devis_services_users);
}
$totalPages_devis_services_users = ceil($totalRows_devis_services_users/$maxRows_devis_services_users)-1;
 
mysql_select_db($database_dmic, $dmic);
$query_os = "SELECT * FROM dmic_os ORDER BY name ASC";
$os = mysql_query($query_os, $dmic) or die(mysql_error());
$row_os = mysql_fetch_assoc($os);
$totalRows_os = mysql_num_rows($os);
 
mysql_select_db($database_dmic, $dmic);
$query_modele_pc = "SELECT * FROM dmic_modeledevispc";
$modele_pc = mysql_query($query_modele_pc, $dmic) or die(mysql_error());
$row_modele_pc = mysql_fetch_assoc($modele_pc);
$totalRows_modele_pc = mysql_num_rows($modele_pc);
 
$colname_modele_pc_dyn = "-1";
if (isset($_GET['modele_devis_pc'])) {
  $colname_modele_pc_dyn = $_GET['modele_devis_pc'];
}
mysql_select_db($database_dmic, $dmic);
$query_modele_pc_dyn = sprintf("SELECT * FROM dmic_modeledevispc WHERE id_modele = %s", GetSQLValueString($colname_modele_pc_dyn, "int"));
$modele_pc_dyn = mysql_query($query_modele_pc_dyn, $dmic) or die(mysql_error());
$row_modele_pc_dyn = mysql_fetch_assoc($modele_pc_dyn);
$totalRows_modele_pc_dyn = mysql_num_rows($modele_pc_dyn);
 
$maxRows_devis_pc_inscrit = 10;
$pageNum_devis_pc_inscrit = 0;
if (isset($_GET['pageNum_devis_pc_inscrit'])) {
  $pageNum_devis_pc_inscrit = $_GET['pageNum_devis_pc_inscrit'];
}
$startRow_devis_pc_inscrit = $pageNum_devis_pc_inscrit * $maxRows_devis_pc_inscrit;
 
$coluser_devis_pc_inscrit = "-1";
if (isset($_SESSION['MM_Username'])) {
  $coluser_devis_pc_inscrit = $_SESSION['MM_Username'];
}
mysql_select_db($database_dmic, $dmic);
$query_devis_pc_inscrit = sprintf("SELECT dmic_demandedevis.addr_ip AS 'Adresse IP', dmic_demandedevis.contact  AS 'Demandeur', dmic_demandedevis.email_contact AS 'Contact', dmic_demandedevis.pc_type AS 'Type ordinateur', dmic_demandedevis.pc_categorie AS 'Categorie', dmic_demandedevis.commentaires AS 'Commentaires', dmic_devisstatut.statut AS 'Statut', dmic_demandedevis.date_creation AS 'Date de creation', dmic_demandedevis.date_priseencompte AS 'Date de prise en compte', dmic_demandedevis.date_cloture AS 'Date de cloture' FROM dmic_demandedevis, dmic_devisstatut WHERE dmic_demandedevis.statut = dmic_devisstatut.id_statut AND dmic_demandedevis.contact = %s", GetSQLValueString($coluser_devis_pc_inscrit, "text"));
$query_limit_devis_pc_inscrit = sprintf("%s LIMIT %d, %d", $query_devis_pc_inscrit, $startRow_devis_pc_inscrit, $maxRows_devis_pc_inscrit);
$devis_pc_inscrit = mysql_query($query_limit_devis_pc_inscrit, $dmic) or die(mysql_error());
$row_devis_pc_inscrit = mysql_fetch_assoc($devis_pc_inscrit);
 
if (isset($_GET['totalRows_devis_pc_inscrit'])) {
  $totalRows_devis_pc_inscrit = $_GET['totalRows_devis_pc_inscrit'];
} else {
  $all_devis_pc_inscrit = mysql_query($query_devis_pc_inscrit);
  $totalRows_devis_pc_inscrit = mysql_num_rows($all_devis_pc_inscrit);
}
$totalPages_devis_pc_inscrit = ceil($totalRows_devis_pc_inscrit/$maxRows_devis_pc_inscrit)-1;
 
$maxRows_devis_service_inscrit = 10;
$pageNum_devis_service_inscrit = 0;
if (isset($_GET['pageNum_devis_service_inscrit'])) {
  $pageNum_devis_service_inscrit = $_GET['pageNum_devis_service_inscrit'];
}
$startRow_devis_service_inscrit = $pageNum_devis_service_inscrit * $maxRows_devis_service_inscrit;
 
$coluser_devis_service_inscrit = "-1";
if (isset($_SESSION['MM_Username'])) {
  $coluser_devis_service_inscrit = $_SESSION['MM_Username'];
}
mysql_select_db($database_dmic, $dmic);
$query_devis_service_inscrit = sprintf("SELECT dmic_demandedevisservices.id_devisservice, dmic_demandedevisservices.addr_ip AS 'Adresse IP', dmic_demandedevisservices.contact AS 'Demandeur', dmic_demandedevisservices.email_contact AS 'Contact', dmic_demandedevisservices.commentaire AS 'Commentaires', dmic_devisstatut.statut AS 'Statut', dmic_demandedevisservices.date_creation AS 'Date de creation', dmic_demandedevisservices.date_priseencompte AS 'Date de prise en compte', dmic_demandedevisservices.date_cloture As 'Date de cloture' FROM dmic_demandedevisservices, dmic_devisstatut WHERE dmic_demandedevisservices.statut = dmic_devisstatut.id_statut AND dmic_demandedevisservices.contact = %s", GetSQLValueString($coluser_devis_service_inscrit, "text"));
$query_limit_devis_service_inscrit = sprintf("%s LIMIT %d, %d", $query_devis_service_inscrit, $startRow_devis_service_inscrit, $maxRows_devis_service_inscrit);
$devis_service_inscrit = mysql_query($query_limit_devis_service_inscrit, $dmic) or die(mysql_error());
$row_devis_service_inscrit = mysql_fetch_assoc($devis_service_inscrit);
 
if (isset($_GET['totalRows_devis_service_inscrit'])) {
  $totalRows_devis_service_inscrit = $_GET['totalRows_devis_service_inscrit'];
} else {
  $all_devis_service_inscrit = mysql_query($query_devis_service_inscrit);
  $totalRows_devis_service_inscrit = mysql_num_rows($all_devis_service_inscrit);
}
$totalPages_devis_service_inscrit = ceil($totalRows_devis_service_inscrit/$maxRows_devis_service_inscrit)-1;
 
$queryString_devis_pc_users = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_devis_pc_users") == false && 
        stristr($param, "totalRows_devis_pc_users") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_devis_pc_users = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_devis_pc_users = sprintf("&totalRows_devis_pc_users=%d%s", $totalRows_devis_pc_users, $queryString_devis_pc_users);
 
$queryString_devis_pc_admin = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_devis_pc_admin") == false && 
        stristr($param, "totalRows_devis_pc_admin") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_devis_pc_admin = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_devis_pc_admin = sprintf("&totalRows_devis_pc_admin=%d%s", $totalRows_devis_pc_admin, $queryString_devis_pc_admin);
 
$queryString_devis_services_admin = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_devis_services_admin") == false && 
        stristr($param, "totalRows_devis_services_admin") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_devis_services_admin = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_devis_services_admin = sprintf("&totalRows_devis_services_admin=%d%s", $totalRows_devis_services_admin, $queryString_devis_services_admin);
 
$queryString_devis_service_inscrit = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_devis_service_inscrit") == false && 
        stristr($param, "totalRows_devis_service_inscrit") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_devis_service_inscrit = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_devis_service_inscrit = sprintf("&totalRows_devis_service_inscrit=%d%s", $totalRows_devis_service_inscrit, $queryString_devis_service_inscrit);
 
$queryString_devis_pc_inscrit = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_devis_pc_inscrit") == false && 
        stristr($param, "totalRows_devis_pc_inscrit") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_devis_pc_inscrit = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_devis_pc_inscrit = sprintf("&totalRows_devis_pc_inscrit=%d%s", $totalRows_devis_pc_inscrit, $queryString_devis_pc_inscrit);
 
$queryString_devis_services_users = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_devis_services_users") == false && 
        stristr($param, "totalRows_devis_services_users") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_devis_services_users = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_devis_services_users = sprintf("&totalRows_devis_services_users=%d%s", $totalRows_devis_services_users, $queryString_devis_services_users);
?>
<?php require_once ('../ScriptLibrary/ban_ip.php') ;?>
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
<script src="../Styles/Fluid%20Grid%20Layout/respond.min.js"></script>
<script src="../SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css">
<style type="text/css">
.Style7 {color: #660033; }
</style>
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
  <h1 align="center">Devis</h1>
  <p align="center"></p>
  <div id="TabbedPanels1" class="TabbedPanels">
    <ul class="TabbedPanelsTabGroup">
      <li class="TabbedPanelsTab" tabindex="0">Consultation</li>
      <li class="TabbedPanelsTab" tabindex="0">Demandes</li>
    </ul>
    <div class="TabbedPanelsContentGroup">
      <div class="TabbedPanelsContent">
        <div id="TabbedPanels2" class="TabbedPanels">
          <ul class="TabbedPanelsTabGroup">
            <li class="TabbedPanelsTab" tabindex="0">Montage d'ordinateurs</li>
            <li class="TabbedPanelsTab" tabindex="0">Services</li>
          </ul>
          <div class="TabbedPanelsContentGroup">
            <div class="TabbedPanelsContent">
              <p align="center" class="Style7">&nbsp;</p>
              <?php if ($_SESSION['MM_Username'] == NULL) { ?>
              <table width="50" border="0" align="center">
  <tr class="Style7">
    <?php if ($pageNum_devis_pc_users > 0) { // Show if not first page ?>
    <th scope="col"><a href="<?php printf("%s?pageNum_devis_pc_users=%d%s", $currentPage, 0, $queryString_devis_pc_users); ?>"><img src="http://www.dmic-corp.fr/images/first.png" width="12" height="10" /></a></th>
    <th scope="col"><a href="<?php printf("%s?pageNum_devis_pc_users=%d%s", $currentPage, max(0, $pageNum_devis_pc_users - 1), $queryString_devis_pc_users); ?>"><img src="http://www.dmic-corp.fr/images/left.png" width="10" height="10" /></a></th>
    <?php } // Show if not first page ?>
    <th scope="col"><div align="center">De</div></th>
    <th scope="col"><div align="center"><?php echo ($startRow_devis_pc_users + 1) ?></div></th>
    <th scope="col"><div align="center">&agrave; </div></th>
    <th scope="col"><div align="center"><?php echo min($startRow_devis_pc_users + $maxRows_devis_pc_users, $totalRows_devis_pc_users) ?></div></th>
    <th scope="col"><div align="center">sur</div></th>
    <th scope="col"><div align="center"><?php echo $totalRows_devis_pc_users ?></div></th>
    <?php if ($pageNum_devis_pc_users < $totalPages_devis_pc_users) { // Show if not last page ?>
    <th scope="col"><a href="<?php printf("%s?pageNum_devis_pc_users=%d%s", $currentPage, min($totalPages_devis_pc_users, $pageNum_devis_pc_users + 1), $queryString_devis_pc_users); ?>"><img src="http://www.dmic-corp.fr/images/right.png" width="10" height="10" /></a></th>
    <th scope="col"><a href="<?php printf("%s?pageNum_devis_pc_users=%d%s", $currentPage, $totalPages_devis_pc_users, $queryString_devis_pc_users); ?>"><img src="http://www.dmic-corp.fr/images/last.png" width="12" height="10" /></a></th>
    <?php } // Show if not last page ?>
  </tr>
</table>
 
              <table width="80%" border="1" align="center" class="tab_cadrehov">
                <tr>
                  <th scope="col"><div align="center">Adresse IP</div></th>
                  <th scope="col"><div align="center">Demandeur</div></th>
                  <th scope="col"><div align="center">Contact</div></th>
                  <th scope="col"><div align="center">Type d'ordinateur</div></th>
                  <th scope="col"><div align="center">Cat&eacute;gorie</div></th>
                  <th scope="col"><div align="center">Commantaires</div></th>
                  <th scope="col"><div align="center">Statut</div></th>
                  <th scope="col"><div align="center">Date de cr&eacute;ation</div></th>
                  <th scope="col"><div align="center">Date de prise en compte</div></th>
                  <th scope="col"><div align="center">Date de cl&ocirc;ture</div></th>
                </tr>
                <?php do { ?>
                  <tr>
                    <th scope="row"><div align="center"><?php echo $row_devis_pc_users['Adresse IP']; ?></div></th>
                    <td><div align="center"><?php echo $row_devis_pc_users['Demandeur']; ?></div></td>
                    <td><div align="center"><?php echo $row_devis_pc_users['Contact']; ?></div></td>
                    <td><div align="center"><?php echo $row_devis_pc_users['Type ordinateur']; ?></div></td>
                    <td><div align="center"><?php echo $row_devis_pc_users['Categorie']; ?></div></td>
                    <td><div align="center"><?php echo $row_devis_pc_users['Commentaires']; ?></div></td>
                    <td><div align="center"><?php echo $row_devis_pc_users['Statut']; ?></div></td>
                    <td><div align="center"><?php echo $row_devis_pc_users['Date de creation']; ?></div></td>
                    <td><div align="center"><?php echo $row_devis_pc_users['Date de prise en compte']; ?></div></td>
                    <td><div align="center"><?php echo $row_devis_pc_users['Date de cloture']; ?></div></td>
                  </tr>
                  <?php } while ($row_devis_pc_users = mysql_fetch_assoc($devis_pc_users)); ?>
            </table>
 
              <table width="50" border="0" align="center">
  <tr class="Style7">
    <?php if ($pageNum_devis_pc_users > 0) { // Show if not first page ?>
    <th scope="col"><a href="<?php printf("%s?pageNum_devis_pc_users=%d%s", $currentPage, 0, $queryString_devis_pc_users); ?>"><img src="http://www.dmic-corp.fr/images/first.png" width="12" height="10" /></a></th>
    <th scope="col"><a href="<?php printf("%s?pageNum_devis_pc_users=%d%s", $currentPage, max(0, $pageNum_devis_pc_users - 1), $queryString_devis_pc_users); ?>"><img src="http://www.dmic-corp.fr/images/left.png" width="10" height="10" /></a></th>
    <?php } // Show if not first page ?>
    <th scope="col"><div align="center">De</div></th>
    <th scope="col"><div align="center"><?php echo ($startRow_devis_pc_users + 1) ?></div></th>
    <th scope="col"><div align="center">&agrave; </div></th>
    <th scope="col"><div align="center"><?php echo min($startRow_devis_pc_users + $maxRows_devis_pc_users, $totalRows_devis_pc_users) ?></div></th>
    <th scope="col"><div align="center">sur</div></th>
    <th scope="col"><div align="center"><?php echo $totalRows_devis_pc_users ?></div></th>
    <?php if ($pageNum_devis_pc_users < $totalPages_devis_pc_users) { // Show if not last page ?>
    <th scope="col"><a href="<?php printf("%s?pageNum_devis_pc_users=%d%s", $currentPage, min($totalPages_devis_pc_users, $pageNum_devis_pc_users + 1), $queryString_devis_pc_users); ?>"><img src="http://www.dmic-corp.fr/images/right.png" width="10" height="10" /></a></th>
    <th scope="col"><a href="<?php printf("%s?pageNum_devis_pc_users=%d%s", $currentPage, $totalPages_devis_pc_users, $queryString_devis_pc_users); ?>"><img src="http://www.dmic-corp.fr/images/last.png" width="12" height="10" /></a></th>
    <?php } // Show if not last page ?>
  </tr>
</table>
              <p>
                <?php } ?>
                </p>
              <p>
                <?php if ($_SESSION['MM_UserGroup'] == 'Contributeurs' OR $_SESSION['MM_UserGroup'] == 'Formateurs' OR $_SESSION['MM_UserGroup'] == 'Stagiaires' OR $_SESSION['MM_UserGroup'] == 'Clients' OR $_SESSION['MM_UserGroup'] == 'Geek') { ?>
              </p>
              <table width="50" border="0" align="center">
  <tr class="Style7">
    <?php if ($pageNum_devis_pc_inscrit > 0) { // Show if not first page ?>
    <th scope="col"><a href="<?php printf("%s?pageNum_devis_pc_inscrit=%d%s", $currentPage, 0, $queryString_devis_pc_inscrit); ?>"><img src="http://www.dmic-corp.fr/images/first.png" width="12" height="10" /></a></th>
    <th scope="col"><a href="<?php printf("%s?pageNum_devis_pc_inscrit=%d%s", $currentPage, max(0, $pageNum_devis_pc_inscrit - 1), $queryString_devis_pc_inscrit); ?>"><img src="http://www.dmic-corp.fr/images/left.png" width="10" height="10" /></a></th>
    <?php } // Show if not first page ?>
    <th scope="col"><div align="center">De</div></th>
    <th scope="col"><div align="center"><?php echo ($startRow_devis_pc_inscrit + 1) ?></div></th>
    <th scope="col"><div align="center">&agrave; </div></th>
    <th scope="col"><div align="center"><?php echo min($startRow_devis_pc_inscrit + $maxRows_devis_pc_inscrit, $totalRows_devis_pc_inscrit) ?></div></th>
    <th scope="col"><div align="center">sur</div></th>
    <th scope="col"><div align="center"><?php echo $totalRows_devis_pc_inscrit ?></div></th>
    <?php if ($pageNum_devis_pc_inscrit < $totalPages_devis_pc_inscrit) { // Show if not last page ?>
    <th scope="col"><a href="<?php printf("%s?pageNum_devis_pc_inscrit=%d%s", $currentPage, min($totalPages_devis_pc_inscrit, $pageNum_devis_pc_inscrit + 1), $queryString_devis_pc_inscrit); ?>"><img src="http://www.dmic-corp.fr/images/right.png" width="10" height="10" /></a></th>
    <th scope="col"><a href="<?php printf("%s?pageNum_devis_pc_inscrit=%d%s", $currentPage, $totalPages_devis_pc_inscrit, $queryString_devis_pc_inscrit); ?>"><img src="http://www.dmic-corp.fr/images/last.png" width="12" height="10" /></a></th>
    <?php } // Show if not last page ?>
  </tr>
</table>
              <table width="80%" border="1" align="center" class="tab_cadrehov">
                <tr>
                  <th scope="col"><div align="center">Adresse IP</div></th>
                  <th scope="col"><div align="center">Demandeur</div></th>
                  <th scope="col"><div align="center">Contact</div></th>
                  <th scope="col"><div align="center">Type d'ordinateur</div></th>
                  <th scope="col"><div align="center">Cat&eacute;gorie</div></th>
                  <th scope="col"><div align="center">Commantaires</div></th>
                  <th scope="col"><div align="center">Statut</div></th>
                  <th scope="col"><div align="center">Date de cr&eacute;ation</div></th>
                  <th scope="col"><div align="center">Date de prise en compte</div></th>
                  <th scope="col"><div align="center">Date de cl&ocirc;ture</div></th>
                </tr>
                <?php do { ?>
                <tr>
                  <th scope="row"><div align="center"><?php echo $row_devis_pc_inscrit['Adresse IP']; ?></div></th>
                  <td><div align="center"><?php echo $row_devis_pc_inscrit['Demandeur']; ?></div></td>
                  <td><div align="center"><?php echo $row_devis_pc_inscrit['Contact']; ?></div></td>
                  <td><div align="center"><?php echo $row_devis_pc_inscrit['Type ordinateur']; ?></div></td>
                  <td><div align="center"><?php echo $row_devis_pc_inscrit['Categorie']; ?></div></td>
                  <td><div align="center"><?php echo $row_devis_pc_inscrit['Commentaires']; ?></div></td>
                  <td><div align="center"><?php echo $row_devis_pc_inscrit['Statut']; ?></div></td>
                  <td><div align="center"><?php echo $row_devis_pc_inscrit['Date de creation']; ?></div></td>
                  <td><div align="center"><?php echo $row_devis_pc_inscrit['Date de prise en compte']; ?></div></td>
                  <td><div align="center"><?php echo $row_devis_pc_inscrit['Date de cloture']; ?></div></td>
                </tr>
                <?php } while ($row_devis_pc_inscrit = mysql_fetch_assoc($devis_pc_inscrit)); ?>
              </table>
              <table width="50" border="0" align="center">
                <tr class="Style7">
                  <?php if ($pageNum_devis_pc_inscrit > 0) { // Show if not first page ?>
                  <th scope="col"><a href="<?php printf("%s?pageNum_devis_pc_inscrit=%d%s", $currentPage, 0, $queryString_devis_pc_inscrit); ?>"><img src="http://www.dmic-corp.fr/images/first.png" width="12" height="10" /></a></th>
                  <th scope="col"><a href="<?php printf("%s?pageNum_devis_pc_inscrit=%d%s", $currentPage, max(0, $pageNum_devis_pc_inscrit - 1), $queryString_devis_pc_inscrit); ?>"><img src="http://www.dmic-corp.fr/images/left.png" width="10" height="10" /></a></th>
                  <?php } // Show if not first page ?>
                  <th scope="col"><div align="center">De</div></th>
                  <th scope="col"><div align="center"><?php echo ($startRow_devis_pc_inscrit + 1) ?></div></th>
                  <th scope="col"><div align="center">&agrave; </div></th>
                  <th scope="col"><div align="center"><?php echo min($startRow_devis_pc_inscrit + $maxRows_devis_pc_inscrit, $totalRows_devis_pc_inscrit) ?></div></th>
                  <th scope="col"><div align="center">sur</div></th>
                  <th scope="col"><div align="center"><?php echo $totalRows_devis_pc_inscrit ?></div></th>
                  <?php if ($pageNum_devis_pc_inscrit < $totalPages_devis_pc_inscrit) { // Show if not last page ?>
                  <th scope="col"><a href="<?php printf("%s?pageNum_devis_pc_inscrit=%d%s", $currentPage, min($totalPages_devis_pc_inscrit, $pageNum_devis_pc_inscrit + 1), $queryString_devis_pc_inscrit); ?>"><img src="http://www.dmic-corp.fr/images/right.png" width="10" height="10" /></a></th>
                  <th scope="col"><a href="<?php printf("%s?pageNum_devis_pc_inscrit=%d%s", $currentPage, $totalPages_devis_pc_inscrit, $queryString_devis_pc_inscrit); ?>"><img src="http://www.dmic-corp.fr/images/last.png" width="12" height="10" /></a></th>
                  <?php } // Show if not last page ?>
                </tr>
              </table>
              <p>&nbsp;</p>
              <p>
                <?php } ?>
              </p>
              <p>
                <?php if ($_SESSION['MM_UserGroup'] == 'Administrateurs') { ?>
              </p>
              <table width="50" border="0" align="center">
                <tr class="Style7">
    <?php if ($pageNum_devis_pc_admin > 0) { // Show if not first page ?>
    <th scope="col"><a href="<?php printf("%s?pageNum_devis_pc_admin=%d%s", $currentPage, 0, $queryString_devis_pc_admin); ?>"><img src="http://www.dmic-corp.fr/images/first.png" width="12" height="10" /></a></th>
    <th scope="col"><a href="<?php printf("%s?pageNum_devis_pc_admin=%d%s", $currentPage, max(0, $pageNum_devis_pc_admin - 1), $queryString_devis_pc_admin); ?>"><img src="http://www.dmic-corp.fr/images/left.png" width="10" height="10" /></a></th>
    <?php } // Show if not first page ?>
    <th scope="col"><div align="center">De</div></th>
    <th scope="col"><div align="center"><?php echo ($startRow_devis_pc_admin + 1) ?></div></th>
    <th scope="col"><div align="center">&agrave; </div></th>
    <th scope="col"><div align="center"><?php echo min($startRow_devis_pc_admin + $maxRows_devis_pc_admin, $totalRows_devis_pc_admin) ?></div></th>
    <th scope="col"><div align="center">sur</div></th>
    <th scope="col"><div align="center"><?php echo $totalRows_devis_pc_admin ?></div></th>
    <?php if ($pageNum_devis_pc_admin < $totalPages_devis_pc_admin) { // Show if not last page ?>
    <th scope="col"><a href="<?php printf("%s?pageNum_devis_pc_admin=%d%s", $currentPage, min($totalPages_devis_pc_admin, $pageNum_devis_pc_admin + 1), $queryString_devis_pc_admin); ?>"><img src="http://www.dmic-corp.fr/images/right.png" width="10" height="10" /></a></th>
    <th scope="col"><a href="<?php printf("%s?pageNum_devis_pc_admin=%d%s", $currentPage, $totalPages_devis_pc_admin, $queryString_devis_pc_admin); ?>"><img src="http://www.dmic-corp.fr/images/last.png" width="12" height="10" /></a></th>
    <?php } // Show if not last page ?>
  </tr>
</table>
 
              <table width="80%" border="1" align="center" class="tab_cadrehov">
                <tr>
                  <th scope="col"><div align="center">Adresse IP</div></th>
                  <th scope="col"><div align="center">Demandeur</div></th>
                  <th scope="col"><div align="center">Contact</div></th>
                  <th scope="col"><div align="center">Type d'ordinateur</div></th>
                  <th scope="col"><div align="center">Cat&eacute;gorie</div></th>
                  <th scope="col"><div align="center">Commantaires</div></th>
                  <th scope="col"><div align="center">Statut</div></th>
                  <th scope="col"><div align="center">Date de cr&eacute;ation</div></th>
                  <th scope="col"><div align="center">Date de prise en compte</div></th>
                  <th scope="col"><div align="center">Date de cl&ocirc;ture</div></th>
                  <th width="2%" scope="col">&nbsp;</th>
                  <th width="2%" scope="col">&nbsp;</th>
                </tr>
                <?php do { ?>
                  <tr>
                    <th scope="row"><div align="center"><?php echo $row_devis_pc_admin['Adresse IP']; ?></div></th>
                    <td><div align="center"><?php echo $row_devis_pc_admin['Demandeur']; ?></div></td>
                    <td><div align="center"><?php echo $row_devis_pc_admin['Contact']; ?></div></td>
                    <td><div align="center"><?php echo $row_devis_pc_admin['Type ordinateur']; ?></div></td>
                    <td><div align="center"><?php echo $row_devis_pc_admin['Categorie']; ?></div></td>
                    <td><div align="center"><?php echo $row_devis_pc_admin['Commentaires']; ?></div></td>
                    <td><div align="center"><?php echo $row_devis_pc_admin['Statut']; ?></div></td>
                    <td><div align="center"><?php echo $row_devis_pc_admin['Date de creation']; ?></div></td>
                    <td><div align="center"><?php echo $row_devis_pc_admin['Date de prise en compte']; ?></div></td>
                    <td><div align="center"><?php echo $row_devis_pc_admin['Date de cloture']; ?></div></td>
                    <td><a href="http://www.dmic-corp.fr/front/admin/traitement_devis_pc.php?id=<?php echo $row_devis_pc_admin['id_devis']; ?>"><img src="http://www.dmic-corp.fr/images/modif.png" width="29" height="29"></a></td>
                    <td><a href="http://www.dmic-corp.fr/front/devis.php?id_devis_ordi=<?php echo $row_devis_pc_admin['id_devis']; ?>"><img src="http://www.dmic-corp.fr/images/showdeleted.png" width="16" height="16"></a></td>
                  </tr>
                  <?php } while ($row_devis_pc_admin = mysql_fetch_assoc($devis_pc_admin)); ?>
              </table>
              <table width="50" border="0" align="center">
                <tr class="Style7">
                  <?php if ($pageNum_devis_pc_admin > 0) { // Show if not first page ?>
                  <th scope="col"><a href="<?php printf("%s?pageNum_devis_pc_admin=%d%s", $currentPage, 0, $queryString_devis_pc_admin); ?>"><img src="http://www.dmic-corp.fr/images/first.png" width="12" height="10" /></a></th>
                  <th scope="col"><a href="<?php printf("%s?pageNum_devis_pc_admin=%d%s", $currentPage, max(0, $pageNum_devis_pc_admin - 1), $queryString_devis_pc_admin); ?>"><img src="http://www.dmic-corp.fr/images/left.png" width="10" height="10" /></a></th>
                  <?php } // Show if not first page ?>
                  <th scope="col"><div align="center">De</div></th>
                  <th scope="col"><div align="center"><?php echo ($startRow_devis_pc_admin + 1) ?></div></th>
                  <th scope="col"><div align="center">&agrave; </div></th>
                  <th scope="col"><div align="center"><?php echo min($startRow_devis_pc_admin + $maxRows_devis_pc_admin, $totalRows_devis_pc_admin) ?></div></th>
                  <th scope="col"><div align="center">sur</div></th>
                  <th scope="col"><div align="center"><?php echo $totalRows_devis_pc_admin ?></div></th>
                  <?php if ($pageNum_devis_pc_admin < $totalPages_devis_pc_admin) { // Show if not last page ?>
                  <th scope="col"><a href="<?php printf("%s?pageNum_devis_pc_admin=%d%s", $currentPage, min($totalPages_devis_pc_admin, $pageNum_devis_pc_admin + 1), $queryString_devis_pc_admin); ?>"><img src="http://www.dmic-corp.fr/images/right.png" width="10" height="10" /></a></th>
                  <th scope="col"><a href="<?php printf("%s?pageNum_devis_pc_admin=%d%s", $currentPage, $totalPages_devis_pc_admin, $queryString_devis_pc_admin); ?>"><img src="http://www.dmic-corp.fr/images/last.png" width="12" height="10" /></a></th>
                  <?php } // Show if not last page ?>
                </tr>
              </table>
              <p>
                <?php } ?>
              </p>
              <p>&nbsp; </p>
              <p align="center" class="Style7">&nbsp;</p>
              <p align="center" class="Style7"></p>
            </div>
            <div class="TabbedPanelsContent">
              <p>
                <?php if ($_SESSION['MM_Username'] == NULL) { ?>
              </p>
              <table width="50" border="0" align="center">
  <tr class="Style7">
    <?php if ($pageNum_devis_services_users > 0) { // Show if not first page ?>
    <th scope="col"><a href="<?php printf("%s?pageNum_devis_services_users=%d%s", $currentPage, 0, $queryString_devis_services_users); ?>"><img src="http://www.dmic-corp.fr/images/first.png" width="12" height="10" /></a></th>
    <th scope="col"><a href="<?php printf("%s?pageNum_devis_services_users=%d%s", $currentPage, max(0, $pageNum_devis_services_users - 1), $queryString_devis_services_users); ?>"><img src="http://www.dmic-corp.fr/images/left.png" width="10" height="10" /></a></th>
    <?php } // Show if not first page ?>
    <th scope="col"><div align="center">De</div></th>
    <th scope="col"><div align="center"><?php echo ($startRow_devis_services_users + 1) ?></div></th>
    <th scope="col"><div align="center">&agrave; </div></th>
    <th scope="col"><div align="center"><?php echo min($startRow_devis_services_users + $maxRows_devis_services_users, $totalRows_devis_services_users) ?></div></th>
    <th scope="col"><div align="center">sur</div></th>
    <th scope="col"><div align="center"><?php echo $totalRows_devis_services_users ?></div></th>
    <?php if ($pageNum_devis_services_users < $totalPages_devis_services_users) { // Show if not last page ?>
    <th scope="col"><a href="<?php printf("%s?pageNum_devis_services_users=%d%s", $currentPage, min($totalPages_devis_services_users, $pageNum_devis_services_users + 1), $queryString_devis_services_users); ?>"><img src="http://www.dmic-corp.fr/images/right.png" width="10" height="10" /></a></th>
    <th scope="col"><a href="<?php printf("%s?pageNum_devis_services_users=%d%s", $currentPage, $totalPages_devis_services_users, $queryString_devis_services_users); ?>"><img src="http://www.dmic-corp.fr/images/last.png" width="12" height="10" /></a></th>
    <?php } // Show if not last page ?>
  </tr>
</table>
              <table width="80%" border="1" align="center" class="tab_cadrehov">
                <tr>
                  <th scope="col"><div align="center">Adresse IP</div></th>
                  <th scope="col"><div align="center">Demandeur</div></th>
                  <th scope="col"><div align="center">Contact</div></th>
                  <th scope="col"><div align="center">Commantaires</div></th>
                  <th scope="col"><div align="center">Statut</div></th>
                  <th scope="col"><div align="center">Date de cr&eacute;ation</div></th>
                  <th scope="col"><div align="center">Date de prise en compte</div></th>
                  <th scope="col"><div align="center">Date de cl&ocirc;ture</div></th>
                </tr>
                <?php do { ?>
                <tr>
                  <th scope="row"><div align="center"><?php echo $row_devis_services_users['Adresse IP']; ?></div></th>
                  <td><div align="center">
                    <div align="center"><?php echo $row_devis_services_users['Demandeur']; ?></div>
                  </div></td>
                  <td><div align="center"><?php echo $row_devis_services_users['Contact']; ?></div></td>
                  <td><div align="center"><?php echo $row_devis_services_users['Commentaires']; ?></div></td>
                  <td><div align="center"><?php echo $row_devis_services_users['Statut']; ?></div></td>
                  <td><div align="center"><?php echo $row_devis_services_users['Date de creation']; ?></div></td>
                  <td><div align="center"><?php echo $row_devis_services_users['Date de prise en compte']; ?></div></td>
                  <td><div align="center"><?php echo $row_devis_services_users['Date de cloture']; ?></div></td>
                </tr>
                <?php } while ($row_devis_services_users = mysql_fetch_assoc($devis_services_users)); ?>
              </table>
              <table width="50" border="0" align="center">
                <tr class="Style7">
                  <?php if ($pageNum_devis_services_users > 0) { // Show if not first page ?>
                  <th scope="col"><a href="<?php printf("%s?pageNum_devis_services_users=%d%s", $currentPage, 0, $queryString_devis_services_users); ?>"><img src="http://www.dmic-corp.fr/images/first.png" width="12" height="10" /></a></th>
                  <th scope="col"><a href="<?php printf("%s?pageNum_devis_services_users=%d%s", $currentPage, max(0, $pageNum_devis_services_users - 1), $queryString_devis_services_users); ?>"><img src="http://www.dmic-corp.fr/images/left.png" width="10" height="10" /></a></th>
                  <?php } // Show if not first page ?>
                  <th scope="col"><div align="center">De</div></th>
                  <th scope="col"><div align="center"><?php echo ($startRow_devis_services_users + 1) ?></div></th>
                  <th scope="col"><div align="center">&agrave; </div></th>
                  <th scope="col"><div align="center"><?php echo min($startRow_devis_services_users + $maxRows_devis_services_users, $totalRows_devis_services_users) ?></div></th>
                  <th scope="col"><div align="center">sur</div></th>
                  <th scope="col"><div align="center"><?php echo $totalRows_devis_services_users ?></div></th>
                  <?php if ($pageNum_devis_services_users < $totalPages_devis_services_users) { // Show if not last page ?>
                  <th scope="col"><a href="<?php printf("%s?pageNum_devis_services_users=%d%s", $currentPage, min($totalPages_devis_services_users, $pageNum_devis_services_users + 1), $queryString_devis_services_users); ?>"><img src="http://www.dmic-corp.fr/images/right.png" width="10" height="10" /></a></th>
                  <th scope="col"><a href="<?php printf("%s?pageNum_devis_services_users=%d%s", $currentPage, $totalPages_devis_services_users, $queryString_devis_services_users); ?>"><img src="http://www.dmic-corp.fr/images/last.png" width="12" height="10" /></a></th>
                  <?php } // Show if not last page ?>
                </tr>
            </table>
              <p>
                <?php } ?>
              </p>
              <p>
                <?php if ($_SESSION['MM_UserGroup'] == 'Contributeurs' OR $_SESSION['MM_UserGroup'] == 'Formateurs' OR $_SESSION['MM_UserGroup'] == 'Stagiaires' OR $_SESSION['MM_UserGroup'] == 'Clients' OR $_SESSION['MM_UserGroup'] == 'Geek') { ?>
              </p>
              <table width="50" border="0" align="center">
                <tr class="Style7">
                  <?php if ($pageNum_devis_service_inscrit > 0) { // Show if not first page ?>
                  <th scope="col"><a href="<?php printf("%s?pageNum_devis_service_inscrit=%d%s", $currentPage, 0, $queryString_devis_service_inscrit); ?>"><img src="http://www.dmic-corp.fr/images/first.png" width="12" height="10" /></a></th>
                  <th scope="col"><a href="<?php printf("%s?pageNum_devis_service_inscrit=%d%s", $currentPage, max(0, $pageNum_devis_service_inscrit - 1), $queryString_devis_service_inscrit); ?>"><img src="http://www.dmic-corp.fr/images/left.png" width="10" height="10" /></a></th>
                  <?php } // Show if not first page ?>
                  <th scope="col"><div align="center">De</div></th>
                  <th scope="col"><div align="center"><?php echo ($startRow_devis_service_inscrit + 1) ?></div></th>
                  <th scope="col"><div align="center">&agrave; </div></th>
                  <th scope="col"><div align="center"><?php echo min($startRow_devis_service_inscrit + $maxRows_devis_service_inscrit, $totalRows_devis_service_inscrit) ?></div></th>
                  <th scope="col"><div align="center">sur</div></th>
                  <th scope="col"><div align="center"><?php echo $totalRows_devis_service_inscrit ?></div></th>
                  <?php if ($pageNum_devis_service_inscrit < $totalPages_devis_service_inscrit) { // Show if not last page ?>
                  <th scope="col"><a href="<?php printf("%s?pageNum_devis_service_inscrit=%d%s", $currentPage, min($totalPages_devis_service_inscrit, $pageNum_devis_service_inscrit + 1), $queryString_devis_service_inscrit); ?>"><img src="http://www.dmic-corp.fr/images/right.png" width="10" height="10" /></a></th>
                  <th scope="col"><a href="<?php printf("%s?pageNum_devis_service_inscrit=%d%s", $currentPage, $totalPages_devis_service_inscrit, $queryString_devis_service_inscrit); ?>"><img src="http://www.dmic-corp.fr/images/last.png" width="12" height="10" /></a></th>
                  <?php } // Show if not last page ?>
                </tr>
            </table>
              <table width="80%" border="1" align="center" class="tab_cadrehov">
                <tr>
                  <th scope="col"><div align="center">Adresse IP</div></th>
                  <th scope="col"><div align="center">Demandeur</div></th>
                  <th scope="col"><div align="center">Contact</div></th>
                  <th scope="col"><div align="center">Commantaires</div></th>
                  <th scope="col"><div align="center">Statut</div></th>
                  <th scope="col"><div align="center">Date de cr&eacute;ation</div></th>
                  <th scope="col"><div align="center">Date de prise en compte</div></th>
                  <th scope="col"><div align="center">Date de cl&ocirc;ture</div></th>
                </tr>
                <?php do { ?>
                <tr>
                  <th scope="row"><div align="center"><?php echo $row_devis_service_inscrit['Adresse IP']; ?></div></th>
                  <td><div align="center">
                    <div align="center"><?php echo $row_devis_service_inscrit['Demandeur']; ?></div>
                  </div></td>
                  <td><div align="center"><?php echo $row_devis_service_inscrit['Contact']; ?></div></td>
                  <td><div align="center"><?php echo $row_devis_service_inscrit['Commentaires']; ?></div></td>
                  <td><div align="center"><?php echo $row_devis_service_inscrit['Statut']; ?></div></td>
                  <td><div align="center"><?php echo $row_devis_service_inscrit['Date de creation']; ?></div></td>
                  <td><div align="center"><?php echo $row_devis_service_inscrit['Date de prise en compte']; ?></div></td>
                  <td><div align="center"><?php echo $row_devis_service_inscrit['Date de cloture']; ?></div></td>
                </tr>
                <?php } while ($row_devis_service_inscrit = mysql_fetch_assoc($devis_service_inscrit)); ?>
              </table>
              <table width="50" border="0" align="center">
                <tr class="Style7">
                  <?php if ($pageNum_devis_service_inscrit > 0) { // Show if not first page ?>
                  <th scope="col"><a href="<?php printf("%s?pageNum_devis_service_inscrit=%d%s", $currentPage, 0, $queryString_devis_service_inscrit); ?>"><img src="http://www.dmic-corp.fr/images/first.png" width="12" height="10" /></a></th>
                  <th scope="col"><a href="<?php printf("%s?pageNum_devis_service_inscrit=%d%s", $currentPage, max(0, $pageNum_devis_service_inscrit - 1), $queryString_devis_service_inscrit); ?>"><img src="http://www.dmic-corp.fr/images/left.png" width="10" height="10" /></a></th>
                  <?php } // Show if not first page ?>
                  <th scope="col"><div align="center">De</div></th>
                  <th scope="col"><div align="center"><?php echo ($startRow_devis_service_inscrit + 1) ?></div></th>
                  <th scope="col"><div align="center">&agrave; </div></th>
                  <th scope="col"><div align="center"><?php echo min($startRow_devis_service_inscrit + $maxRows_devis_service_inscrit, $totalRows_devis_service_inscrit) ?></div></th>
                  <th scope="col"><div align="center">sur</div></th>
                  <th scope="col"><div align="center"><?php echo $totalRows_devis_service_inscrit ?></div></th>
                  <?php if ($pageNum_devis_service_inscrit < $totalPages_devis_service_inscrit) { // Show if not last page ?>
                  <th scope="col"><a href="<?php printf("%s?pageNum_devis_service_inscrit=%d%s", $currentPage, min($totalPages_devis_service_inscrit, $pageNum_devis_service_inscrit + 1), $queryString_devis_service_inscrit); ?>"><img src="http://www.dmic-corp.fr/images/right.png" width="10" height="10" /></a></th>
                  <th scope="col"><a href="<?php printf("%s?pageNum_devis_service_inscrit=%d%s", $currentPage, $totalPages_devis_service_inscrit, $queryString_devis_service_inscrit); ?>"><img src="http://www.dmic-corp.fr/images/last.png" width="12" height="10" /></a></th>
                  <?php } // Show if not last page ?>
                </tr>
              </table>
              <p>
                <?php } ?>
              </p>
              <p>
                <?php if ($_SESSION['MM_UserGroup'] == 'Administrateurs') { ?>
              </p>
              <table width="50" border="0" align="center">
                <tr class="Style7">
    <?php if ($pageNum_devis_services_admin > 0) { // Show if not first page ?>
    <th scope="col"><a href="<?php printf("%s?pageNum_devis_services_admin=%d%s", $currentPage, 0, $queryString_devis_services_admin); ?>"><img src="http://www.dmic-corp.fr/images/first.png" width="12" height="10" /></a></th>
    <th scope="col"><a href="<?php printf("%s?pageNum_devis_services_admin=%d%s", $currentPage, max(0, $pageNum_devis_services_admin - 1), $queryString_devis_services_admin); ?>"><img src="http://www.dmic-corp.fr/images/left.png" width="10" height="10" /></a></th>
    <?php } // Show if not first page ?>
    <th scope="col"><div align="center">De</div></th>
    <th scope="col"><div align="center"><?php echo ($startRow_devis_services_admin + 1) ?></div></th>
    <th scope="col"><div align="center">&agrave; </div></th>
    <th scope="col"><div align="center"><?php echo min($startRow_devis_services_admin + $maxRows_devis_services_admin, $totalRows_devis_services_admin) ?></div></th>
    <th scope="col"><div align="center">sur</div></th>
    <th scope="col"><div align="center"><?php echo $totalRows_devis_services_admin ?></div></th>
    <?php if ($pageNum_devis_services_admin < $totalPages_devis_services_admin) { // Show if not last page ?>
    <th scope="col"><a href="<?php printf("%s?pageNum_devis_services_admin=%d%s", $currentPage, min($totalPages_devis_services_admin, $pageNum_devis_services_admin + 1), $queryString_devis_services_admin); ?>"><img src="http://www.dmic-corp.fr/images/right.png" width="10" height="10" /></a></th>
    <th scope="col"><a href="<?php printf("%s?pageNum_devis_services_admin=%d%s", $currentPage, $totalPages_devis_services_admin, $queryString_devis_services_admin); ?>"><img src="http://www.dmic-corp.fr/images/last.png" width="12" height="10" /></a></th>
    <?php } // Show if not last page ?>
  </tr>
</table>
              <table width="80%" border="1" align="center" class="tab_cadrehov">
                <tr>
                  <th scope="col"><div align="center">Adresse IP</div></th>
                  <th scope="col"><div align="center">Demandeur</div></th>
                  <th scope="col"><div align="center">Contact</div></th>
                  <th scope="col"><div align="center">Commantaires</div></th>
                  <th scope="col"><div align="center">Statut</div></th>
                  <th scope="col"><div align="center">Date de cr&eacute;ation</div></th>
                  <th scope="col"><div align="center">Date de prise en compte</div></th>
                  <th scope="col"><div align="center">Date de cl&ocirc;ture</div></th>
                  <?php if ($_SESSION['MM_UserGroup']=='Administrateurs') { ?>
                  <th width="2%" scope="col">&nbsp;</th>
                  <th width="2%" scope="col">&nbsp;</th>
                  <?php } ?>
                </tr>
                <?php do { ?>
                  <tr>
                    <th scope="row"><div align="center"><?php echo $row_devis_services_admin['Adresse IP']; ?></div></th>
                    <td><div align="center">
                      <div align="center"><?php echo $row_devis_services_admin['Demandeur']; ?></div>
                    </div></td>
                    <td><div align="center"><?php echo $row_devis_services_admin['Contact']; ?></div></td>
                    <td><div align="center"><?php echo $row_devis_services_admin['Commentaires']; ?></div></td>
                    <td><div align="center"><?php echo $row_devis_services_admin['Statut']; ?></div></td>
                    <td><div align="center"><?php echo $row_devis_services_admin['Date de creation']; ?></div></td>
                    <td><div align="center"><?php echo $row_devis_services_admin['Date de prise en compte']; ?></div></td>
                    <td><div align="center"><?php echo $row_devis_services_admin['Date de cloture']; ?></div></td>
                    <?php if ($_SESSION['MM_UserGroup']=='Administrateurs') { ?>
                    <td><img src="http://www.dmic-corp.fr/images/modif.png" width="29" height="29"></td>
                    <td><a href="http://www.dmic-corp.fr/front/devis.php?id_devis_service=<?php echo $row_devis_services_admin['id_devisservice']; ?>"><img src="http://www.dmic-corp.fr/images/showdeleted.png" width="16" height="16"></a></td>
                    <?php } ?>
                  </tr>
                  <?php } while ($row_devis_services_admin = mysql_fetch_assoc($devis_services_admin)); ?>
              </table>
              <table width="50" border="0" align="center">
                <tr class="Style7">
                  <?php if ($pageNum_devis_services_admin > 0) { // Show if not first page ?>
                  <th scope="col"><a href="<?php printf("%s?pageNum_devis_services_admin=%d%s", $currentPage, 0, $queryString_devis_services_admin); ?>"><img src="http://www.dmic-corp.fr/images/first.png" width="12" height="10" /></a></th>
                  <th scope="col"><a href="<?php printf("%s?pageNum_devis_services_admin=%d%s", $currentPage, max(0, $pageNum_devis_services_admin - 1), $queryString_devis_services_admin); ?>"><img src="http://www.dmic-corp.fr/images/left.png" width="10" height="10" /></a></th>
                  <?php } // Show if not first page ?>
                  <th scope="col"><div align="center">De</div></th>
                  <th scope="col"><div align="center"><?php echo ($startRow_devis_services_admin + 1) ?></div></th>
                  <th scope="col"><div align="center">&agrave; </div></th>
                  <th scope="col"><div align="center"><?php echo min($startRow_devis_services_admin + $maxRows_devis_services_admin, $totalRows_devis_services_admin) ?></div></th>
                  <th scope="col"><div align="center">sur</div></th>
                  <th scope="col"><div align="center"><?php echo $totalRows_devis_services_admin ?></div></th>
                  <?php if ($pageNum_devis_services_admin < $totalPages_devis_services_admin) { // Show if not last page ?>
                  <th scope="col"><a href="<?php printf("%s?pageNum_devis_services_admin=%d%s", $currentPage, min($totalPages_devis_services_admin, $pageNum_devis_services_admin + 1), $queryString_devis_services_admin); ?>"><img src="http://www.dmic-corp.fr/images/right.png" width="10" height="10" /></a></th>
                  <th scope="col"><a href="<?php printf("%s?pageNum_devis_services_admin=%d%s", $currentPage, $totalPages_devis_services_admin, $queryString_devis_services_admin); ?>"><img src="http://www.dmic-corp.fr/images/last.png" width="12" height="10" /></a></th>
                  <?php } // Show if not last page ?>
                </tr>
              </table>
              <?php } ?>
              <h1></h1>
            </div>
          </div>
        </div>
      </div>
      <div class="TabbedPanelsContent">
        <div id="TabbedPanels3" class="TabbedPanels">
          <ul class="TabbedPanelsTabGroup">
            <li class="TabbedPanelsTab" tabindex="0">Montage d'ordinateurs</li>
            <li class="TabbedPanelsTab" tabindex="0">Services</li>
          </ul>
          <div class="TabbedPanelsContentGroup">
            <div class="TabbedPanelsContent">
              <h1 align="center" class="Style7"></h1>
              <script type="text/javascript" src="inc/devis_pc_xhr.js" charset="iso_8859-1"></script>
              <form id="form1" name="form1" method="get" action="">
                <div align="center">
                  <label>
                    <select name="modele_devis_pc" id="modele_devis_pc" title="<?php echo $row_search_profils['type']; ?>" onChange="getDevisPc(this.value);">
                      <option value="vide"> - - - Charger un mod&egrave;le de devis ordinateur - - - </option>
					  <?php
do {  
?>
                      <option value="<?php echo $row_modele_pc['id_modele']?>"><?php echo $row_modele_pc['name']?></option>
                      <?php
} while ($row_modele_pc = mysql_fetch_assoc($modele_pc));
  $rows = mysql_num_rows($modele_pc);
  if($rows > 0) {
      mysql_data_seek($modele_pc, 0);
	  $row_modele_pc = mysql_fetch_assoc($modele_pc);
  }
?>
                    </select>
                  </label>
                </div>
              </form>
              <p align="center" class="Style7">&nbsp;</p>
              <span id="blocDevisPc"></span>
              <p align="center" class="Style7"></p>
            </div>
            <div class="TabbedPanelsContent">
              <form id="form3" name="form3" method="POST" action="<?php echo $editFormAction; ?>">
                <div align="center">
                  <table width="60%" border="1" class="tab_cadrehov">
                    <tr>
                      <th scope="row"><div align="center">
                        <input name="ip" type="hidden" id="ip" value="<?php echo $_SERVER["REMOTE_ADDR"]; ?>">
                        Type de services</div></th>
                      <td><p>
                        <label></label>
                        <label></label>
                        <label>
                          <input type="checkbox" name="nettoyage" id="nettoyage" />
                        </label>
                        Nettoyage ordinateur.</p>
                        <p>
                          <label>
                            <input type="checkbox" name="resolution_probleme" id="resolution_probleme" />
                          </label>
                          R&eacute;solution de probl&egrave;mes.</p>
                        <p>
                          <label>
                            <input type="checkbox" name="installation_os" id="installation_os" />
                          </label>
                          Installation de syst&egrave;me d'exploitation.</p>
                        <p>
                          <label>
                            <input type="checkbox" name="clonage" id="clonage" />
                          </label>
                          Clonage du syst&egrave;me d'exploitation.<br />
                        </p></td>
                    </tr>
                    <tr>
                      <th scope="row"><div align="center">Autres demandes, Commantaires</div></th>
                      <td><label>
                        <textarea name="commantaires" cols="50" rows="10" id="commantaires"></textarea>
                      </label></td>
                    </tr>
                    <tr>
                      <th scope="row"><div align="center">Identifiant (Login ou Nom Prénom)</div></th>
                      <td><label>
                        <input name="contact" type="text" id="contact" value="<?php echo $_SESSION['MM_Username']; ?>" />
                      </label></td>
                    </tr>
                    <tr>
                      <th scope="row"><div align="center">E-Mail</div></th>
                      <td><label>
                        <input name="email_contact" type="text" id="email_contact" value="<?php echo $row_profil_users['e_mail_user']; ?>" />
                      </label></td>
                    </tr>
                    <tr>
                      <th scope="row"><input name="statut" type="hidden" id="statut" value="1">
                        <input name="date" type="hidden" id="date" value="<?php $date = date("Y-m-d"); echo $date; ?>"></th>
                      <td><label>
                        <input type="submit" name="submit" id="submit" value="Envoyer la demande" />
                      </label></td>
                    </tr>
                  </table>
                </div>
                <input type="hidden" name="MM_insert" value="form2" />
                <input type="hidden" name="MM_insert" value="form3">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
 
<!-- InstanceEndEditable --></div>
<div class="sidebar2" id="LayoutDiv5" align="center"><!-- InstanceBeginEditable name="sidebar2" -->
    <?php include ('inc/sidebar/sidebar2_pub.inc.php'); ?>
<!-- InstanceEndEditable --></div>
<div id="LayoutDiv6" class="footer"><!-- InstanceBeginEditable name="footer" -->
  <?php include('inc/footer/footer_users.inc.php');?>
  <script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
var TabbedPanels2 = new Spry.Widget.TabbedPanels("TabbedPanels2");
var TabbedPanels3 = new Spry.Widget.TabbedPanels("TabbedPanels3");
  </script>
<!-- InstanceEndEditable --></div>
</div>
</body>
<!-- InstanceEnd --></html>
<?php
mysql_free_result($devis_pc_users);
 
mysql_free_result($devis_pc_admin);
 
mysql_free_result($devis_services_admin);
 
mysql_free_result($devis_services_users);
 
mysql_free_result($os);
 
mysql_free_result($modele_pc);
 
mysql_free_result($modele_pc_dyn);
 
mysql_free_result($devis_pc_inscrit);
 
mysql_free_result($devis_service_inscrit);
 
mysql_free_result($profil_users);
?>
 