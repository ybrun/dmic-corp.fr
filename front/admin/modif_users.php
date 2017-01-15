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

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE dmic_users SET login=%s, nom_user=%s, prenom_user=%s, e_mail_user=%s, password_user=%s, profil=%s WHERE id_users=%s",
                       GetSQLValueString($_POST['new_login'], "text"),
                       GetSQLValueString($_POST['new_name'], "text"),
                       GetSQLValueString($_POST['new_prenom'], "text"),
                       GetSQLValueString($_POST['new_mail'], "text"),
                       GetSQLValueString(md5($_POST['new_mdp']), "text"),
                       GetSQLValueString($_POST['new_profil'], "text"),
                       GetSQLValueString($_POST['id_users'], "int"));

  mysql_select_db($database_dmic, $dmic);
  $Result1 = mysql_query($updateSQL, $dmic) or die(mysql_error());

  $updateGoTo = "http://www.dmic-corp.fr/front/admin/liste_users.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

mysql_select_db($database_dmic, $dmic);
$query_new_profil = "SELECT * FROM dmic_profils_users ORDER BY name_profils ASC";
$new_profil = mysql_query($query_new_profil, $dmic) or die(mysql_error());
$row_new_profil = mysql_fetch_assoc($new_profil);
$totalRows_new_profil = mysql_num_rows($new_profil);

$colname_users = "-1";
if (isset($_GET['id'])) {
  $colname_users = $_GET['id'];
}
mysql_select_db($database_dmic, $dmic);
$query_users = sprintf("SELECT * FROM dmic_users WHERE id_users = %s", GetSQLValueString($colname_users, "int"));
$users = mysql_query($query_users, $dmic) or die(mysql_error());
$row_users = mysql_fetch_assoc($users);
$totalRows_users = mysql_num_rows($users);

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
  <h1 align="center" class="Style7">Modification d'un compte utilisateur.</h1>
  <p align="center">&nbsp;</p>
  <form action="<?php echo $editFormAction; ?>" method="POST" name="form1" id="form1">
    <div align="center">
      <table width="293" border="1" class="tab_cadrehov">
        <tr>
          <th width="133" scope="col"><span class="Style7">Login 
            <input name="id_users" type="hidden" id="id_users" value="<?php echo $row_users['id_users']; ?>">
          </span></th>
          <td width="144" scope="col"><label>
            <input name="new_login" type="text" id="new_login" value="<?php echo $row_users['login']; ?>" />
          </label></td>
        </tr>
        <tr>
          <th scope="row"><span class="Style7">Mot de passe</span></th>
          <td><label>
            <input name="new_mdp" type="password" id="new_mdp" value="<?php echo $row_users['password_user']; ?>" />
          </label></td>
        </tr>
        <tr>
          <th scope="row"><span class="Style7">Nom</span></th>
          <td><label>
            <input name="new_name" type="text" id="new_name" value="<?php echo $row_users['nom_user']; ?>" />
          </label></td>
        </tr>
        <tr>
          <th scope="row"><span class="Style7">Pr&eacute;nom</span></th>
          <td><input name="new_prenom" type="text" id="new_prenom" value="<?php echo $row_users['prenom_user']; ?>" /></td>
        </tr>
        <tr>
          <th scope="row"><span class="Style7">E Mail</span></th>
          <td><label>
            <input name="new_mail" type="text" id="new_mail" value="<?php echo $row_users['e_mail_user']; ?>" />
          </label></td>
        </tr>
        <tr>
          <th scope="row"><span class="Style7">Profil</span></th>
          <td><label>
            <select name="new_profil" id="new_profil" title="<?php echo $row_users['profil']; ?>">
              <?php
do {  
?>
              <option value="<?php echo $row_new_profil['name_profils']?>"<?php if (!(strcmp($row_new_profil['name_profils'], $row_users['profil']))) {echo "selected=\"selected\"";} ?>><?php echo $row_new_profil['name_profils']?></option>
              <?php
} while ($row_new_profil = mysql_fetch_assoc($new_profil));
  $rows = mysql_num_rows($new_profil);
  if($rows > 0) {
      mysql_data_seek($new_profil, 0);
	  $row_new_profil = mysql_fetch_assoc($new_profil);
  }
?>
            </select>
          </label></td>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <td><label><input type="submit" name="submit" id="submit" value="Envoyer" /></label></td>
        </tr>
      </table>
    </div>
    <input type="hidden" name="MM_update" value="form1">
</form>
  <h1>&nbsp;</h1>
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
mysql_free_result($new_profil);

mysql_free_result($users);
?>
