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

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "modif_profils_users")) {
  $updateSQL = sprintf("UPDATE dmic_profils_users SET name_profils=%s, commentaire=%s WHERE id=%s",
                       GetSQLValueString($_POST['new_name'], "text"),
                       GetSQLValueString($_POST['new_commentaire'], "text"),
                       GetSQLValueString($_POST['id'], "int"));

  mysql_select_db($database_dmic, $dmic);
  $Result1 = mysql_query($updateSQL, $dmic) or die(mysql_error());

  $updateGoTo = "http://www.dmic-corp.fr/front/admin/config_intitules_profils_users.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: http://www.dmic-corp.fr/front/admin/config_intitules_profils_users.php"));
}

mysql_select_db($database_dmic, $dmic);
$query_profil_user = "SELECT * FROM dmic_profils_users ORDER BY name_profils ASC";
$profil_user = mysql_query($query_profil_user, $dmic) or die(mysql_error());
$row_profil_user = mysql_fetch_assoc($profil_user);
$totalRows_profil_user = mysql_num_rows($profil_user);

$colname_profils_users_dynamique = "-1";
if (isset($_GET['id'])) {
  $colname_profils_users_dynamique = $_GET['id'];
}
mysql_select_db($database_dmic, $dmic);
$query_profils_users_dynamique = sprintf("SELECT * FROM dmic_profils_users WHERE id = %s", GetSQLValueString($colname_profils_users_dynamique, "int"));
$profils_users_dynamique = mysql_query($query_profils_users_dynamique, $dmic) or die(mysql_error());
$row_profils_users_dynamique = mysql_fetch_assoc($profils_users_dynamique);
$totalRows_profils_users_dynamique = mysql_num_rows($profils_users_dynamique);

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
<script type='text/javascript' src="../../ScriptLibrary/tiny_mce/tiny_mce.js"></script>
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
    <h1 align="center" class="Style7">Configuration des intitul&eacute;s.</h1>
  <h2 align="center" class="Style7">Modification d'un Profil.</h2>
  <form action="<?php echo $editFormAction; ?>" method="POST" name="modif_profils_users" id="modif_profils_users">
    <p>&nbsp;</p>
    <table width="847" border="1" align="center" bordercolor="#92BEE1" class="tab_cadrehov">
      <tr>
        <th width="231" bordercolor="#92BEE1" scope="col"><div align="right" class="Style7">ID</div></th>
        <th width="600" bordercolor="#92BEE1" scope="col"><div align="center" class="Style4"><?php echo $row_profils_users_dynamique['id']; ?>
          <input name="id" type="hidden" id="id" value="<?php echo $row_profils_users_dynamique['id']; ?>" />
          </div></th>
        </tr>
      <tr>
        <th bordercolor="#92BEE1" scope="row"><div align="right" class="Style7">Nom du profil</div></th>
        <td bordercolor="#92BEE1"><label>
          <input name="new_name" type="text" id="new_name" value="<?php echo $row_profils_users_dynamique['name_profils']; ?>" size="100" maxlength="250" />
          </label></td>
        </tr>
      <tr>
        <th bordercolor="#92BEE1" scope="row"><div align="right" class="Style7">Commentaires</div></th>
        <td bordercolor="#92BEE1"><label>
<script language='javascript' type='text/javascript'>tinyMCE.init({
         language : 'fr',
         mode : 'exact',
         elements: 'new_commentaire',
         valid_elements: '*[*]',
         browser_spellcheck : true,
         plugins : 'table,directionality,searchreplace',
         theme : 'advanced',
         entity_encoding : 'raw', theme_advanced_buttons1_add : 'ltr,rtl,search,replace',theme_advanced_toolbar_location : 'top',
         theme_advanced_toolbar_align : 'left',
	 theme_advanced_statusbar_location : 'none',
         theme_advanced_buttons1 : 'bold,italic,underline,strikethrough,fontsizeselect,formatselect,separator,justifyleft,justifycenter,justifyright,justifyfull,bullist,numlist,outdent,indent',
         theme_advanced_buttons2 : 'forecolor,backcolor,separator,hr,separator,link,unlink,anchor,separator,tablecontrols,undo,redo,cleanup,code,separator',
         theme_advanced_buttons3 : ''});</script>
<div class='center spaced'><textarea name='new_commentaire' cols='100' rows='30' id='new_commentaire' onBlur="MM_validateForm('answer','','R');return document.MM_returnValue"><?php echo $row_profils_users_dynamique['commentaire']; ?></textarea>
</div>

          </label></td>
        </tr>
      <tr>
        <th bordercolor="#92BEE1" scope="row">&nbsp;</th>
        <td bordercolor="#92BEE1"><label>
          <input type="submit" name="modifier" id="modifier" value="Modifier" />
          </label></td>
        </tr>
      </table>
    <input type="hidden" name="MM_update" value="modif" />
    <input type="hidden" name="MM_update" value="modif_profils_users" />
  </form>
  <h1 class="Style5"></h1>
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
mysql_free_result($profil_user);

mysql_free_result($profils_users_dynamique);
?>
