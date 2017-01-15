<?php require_once ('../ScriptLibrary/ban_ip.php') ;?>
<?php require_once('../Connections/dmic.php'); ?>
<?php
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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "modif_user")) {
  $updateSQL = sprintf("UPDATE dmic_users SET login=%s, nom_user=%s, prenom_user=%s, e_mail_user=%s, password_user=%s WHERE id_users=%s",
                       GetSQLValueString($_POST['login'], "text"),
                       GetSQLValueString($_POST['nom'], "text"),
                       GetSQLValueString($_POST['prenom'], "text"),
                       GetSQLValueString($_POST['mail'], "text"),
                       GetSQLValueString(md5($_POST['password']), "text"),
                       GetSQLValueString($_POST['id_users'], "int"));

  mysql_select_db($database_dmic, $dmic);
  $Result1 = mysql_query($updateSQL, $dmic) or die(mysql_error());

  $updateGoTo = "http://www.dmic-corp.fr/front/index.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
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

$colname_user = "-1";
if (isset($_SESSION['MM_Username'])) {
  $colname_user = $_SESSION['MM_Username'];
}
mysql_select_db($database_dmic, $dmic);
$query_user = sprintf("SELECT * FROM dmic_users WHERE login = %s", GetSQLValueString($colname_user, "text"));
$user = mysql_query($query_user, $dmic) or die(mysql_error());
$row_user = mysql_fetch_assoc($user);
$totalRows_user = mysql_num_rows($user);
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
<!-- InstanceEndEditable -->
</head>

<body>
<div class="gridContainer clearfix">
  <div id="LayoutDiv1" class="header"><!-- InstanceBeginEditable name="header" -->
    <?php include ('../front/inc/header/header.inc.php'); ?> 
<!-- InstanceEndEditable --></div>
<div id="LayoutDiv2" class="header_pub"><!-- InstanceBeginEditable name="header_pub" -->
	<?php include('../front/inc/header/header_pub.inc.php');?>
<!-- InstanceEndEditable --></div>
  <div class="sidebar1" id="LayoutDiv3" align="center"><!-- InstanceBeginEditable name="sidebar1" -->
   <?php include ('../front/inc/sidebar/stats/stats.php'); ?>
   </p>
<!-- InstanceEndEditable --></div>
<div id="LayoutDiv4" class="content"><!-- InstanceBeginEditable name="content" -->
  <h1 align="center"><?php echo $row_user['nom_user']; ?> <?php echo $row_user['prenom_user']; ?></h1>
  <p>&nbsp;</p>
  <form name="modif_user" method="POST" action="<?php echo $editFormAction; ?>">
    <table width="auto" border="1" align="center" class="tab_cadrehov">
      <tr>
        <th scope="row"><div align="center">Login 
          <input name="id_users" type="hidden" id="id_users" value="<?php echo $row_user['id_users']; ?>">
        </div></th>
        <td><div align="center">
          <input name="login" type="text" id="login" value="<?php echo $row_user['login']; ?>">
        </div></td>
      </tr>
      <tr>
        <th scope="row"><div align="center">Password</div></th>
        <td><div align="center">
          <input name="password" type="password" id="password" value="<?php echo $row_user['password_user']; ?>">
        </div></td>
      </tr>
      <tr>
        <th scope="row"><div align="center">Nom</div></th>
        <td><div align="center">
          <input name="nom" type="text" id="nom" value="<?php echo $row_user['nom_user']; ?>">
        </div></td>
      </tr>
      <tr>
        <th scope="row"><div align="center">Pr&eacute;nom</div></th>
        <td><div align="center">
          <input name="prenom" type="text" id="prenom" value="<?php echo $row_user['prenom_user']; ?>">
        </div></td>
      </tr>
      <tr>
        <th scope="row"><div align="center">E-Mail</div></th>
        <td><div align="center">
          <input name="mail" type="text" id="mail" value="<?php echo $row_user['e_mail_user']; ?>">
        </div></td>
      </tr>
      <tr>
        <th scope="row"><div align="center">Profil</div></th>
        <td><div align="center"><?php echo $row_user['profil']; ?></div></td>
      </tr>
      <tr>
        <td colspan="2" scope="row"><div align="right">
          <input type="submit" name="Modifier" id="Modifier" value="Modifier">
        </div></td>
      </tr>
    </table>
    <input type="hidden" name="MM_update" value="modif_user">
  </form>
  <p align="center">&nbsp;</p>

<!-- InstanceEndEditable --></div>
<div class="sidebar2" id="LayoutDiv5" align="center"><!-- InstanceBeginEditable name="sidebar2" -->
    <?php include ('../front/inc/sidebar/sidebar2_pub.inc.php'); ?>
<!-- InstanceEndEditable --></div>
<div id="LayoutDiv6" class="footer"><!-- InstanceBeginEditable name="footer" -->
  <?php include('../front/inc/footer/footer_users.inc.php');?>
<!-- InstanceEndEditable --></div>
</div>
</body>
<!-- InstanceEnd --></html>
<?php
mysql_free_result($profil_users);

mysql_free_result($user);
?>
