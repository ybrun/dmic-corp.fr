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

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO dmic_users (login, nom_user, prenom_user, e_mail_user, password_user, profil) VALUES (%s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['login'], "text"),
                       GetSQLValueString($_POST['name'], "text"),
                       GetSQLValueString($_POST['prenom'], "text"),
                       GetSQLValueString($_POST['mail'], "text"),
                       GetSQLValueString($_POST['password'], "text"),
                       GetSQLValueString($_POST['profil'], "text"));

  mysql_select_db($database_dmic, $dmic);
  $Result1 = mysql_query($insertSQL, $dmic) or die(mysql_error());

  $insertGoTo = "http://www.dmic-corp.fr/front/admin/liste_users.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

$colname_inscription = "-1";
if (isset($_GET['id'])) {
  $colname_inscription = $_GET['id'];
}
mysql_select_db($database_dmic, $dmic);
$query_inscription = sprintf("SELECT * FROM dmic_inscription WHERE id_inscription = %s ORDER BY name ASC", GetSQLValueString($colname_inscription, "int"));
$inscription = mysql_query($query_inscription, $dmic) or die(mysql_error());
$row_inscription = mysql_fetch_assoc($inscription);
$totalRows_inscription = mysql_num_rows($inscription);

mysql_select_db($database_dmic, $dmic);
$query_profil = "SELECT * FROM dmic_profils_users ORDER BY name_profils ASC";
$profil = mysql_query($query_profil, $dmic) or die(mysql_error());
$row_profil = mysql_fetch_assoc($profil);
$totalRows_profil = mysql_num_rows($profil);

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
<style type="text/css">
.Style7 {color: #660033; }
</style>
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
  <h1 align="center">Traitement de l'inscription de <?php echo $row_inscription['name']; ?> <?php echo $row_inscription['prenom']; ?>.</h1>
  <p align="center">&nbsp;</p>
  <form name="form1" method="POST" action="<?php echo $editFormAction; ?>">
    <div align="center">
      <table width="500" border="1" class="tab_cadrehov">
        <tr>
          <th width="267" scope="col"><span class="Style7">Login</span></th>
          <th width="317" scope="col"><div align="left">
            <input name="login" type="text" id="login" value="<?php echo $row_inscription['login']; ?>" size="50">
          </div></th>
        </tr>
        <tr>
          <th scope="row"><span class="Style7">Mot de passe</span></th>
          <td><label>
            <input name="password" type="password" id="password" value="<?php echo $row_inscription['password']; ?>" size="50" />
          </label></td>
        </tr>
        <tr>
          <th scope="row"><span class="Style7">Nom</span></th>
          <td><label>
            <input name="name" type="text" id="name" value="<?php echo $row_inscription['name']; ?>" size="50" />
          </label></td>
        </tr>
        <tr>
          <th scope="row"><span class="Style7">Pr&eacute;nom</span></th>
          <td><input name="prenom" type="text" id="prenom" value="<?php echo $row_inscription['prenom']; ?>" size="50" /></td>
        </tr>
        <tr>
          <th scope="row"><span class="Style7"> E-mail</span></th>
          <td><label>
            <input name="mail" type="text" id="mail" value="<?php echo $row_inscription['mail']; ?>" size="50" />
          </label></td>
        </tr>
        <tr>
          <th class="Style7" scope="row">Raison de l' inscription.</th>
          <td><textarea name="raison" cols="50" rows="10" id="raison"><?php echo $row_inscription['raison']; ?></textarea></td>
        </tr>
        <tr>
          <th class="Style7" scope="row">Profil</th>
          <td><label for="profil"></label>
            <select name="profil" id="profil">
              <?php
do {  
?>
              <option value="<?php echo $row_profil['name_profils']?>"><?php echo $row_profil['name_profils']?></option>
              <?php
} while ($row_profil = mysql_fetch_assoc($profil));
  $rows = mysql_num_rows($profil);
  if($rows > 0) {
      mysql_data_seek($profil, 0);
	  $row_profil = mysql_fetch_assoc($profil);
  }
?>
            </select></td>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <td><label>
            <input type="submit" name="submit" id="submit" value="Envoyer" />
          </label></td>
        </tr>
      </table>
    </div>
    <input type="hidden" name="MM_insert" value="form1">
  </form>
  <p align="center">&nbsp;</p>
  <!-- end .content -->
<!-- InstanceEndEditable --></div>
<div class="sidebar2" id="LayoutDiv5" align="center"><!-- InstanceBeginEditable name="sidebar2" -->
    <?php include ('../inc/sidebar/sidebar2_pub.inc.php'); ?>
<!-- InstanceEndEditable --></div>
<div id="LayoutDiv6" class="footer"><!-- InstanceBeginEditable name="footer" -->
  <?php include('../inc/footer/footer_users.inc.php');?>
  <!-- end .footer -->
<!-- InstanceEndEditable --></div>
</div>
</body>
<!-- InstanceEnd --></html>
<?php
mysql_free_result($inscription);

mysql_free_result($profil);
?>
