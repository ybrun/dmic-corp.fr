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


$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "new_categorie")) {
  $insertSQL = sprintf("INSERT INTO dmic_actuscategorieslvl2 (categories_lvl1, oeuvres, categorieslvl2_name, `description`) VALUES (%s, %s, %s, %s)",
                       GetSQLValueString($_POST['types'], "int"),
					   GetSQLValueString($_POST['actusoeuvres'], "int"),
                       GetSQLValueString($_POST['oeuvre_name'], "text"),
                       GetSQLValueString($_POST['commentaire'], "text"));

  mysql_select_db($database_dmic, $dmic);
  $Result1 = mysql_query($insertSQL, $dmic) or die(mysql_error());

  $insertGoTo = "/front/geek-zone/new_actus.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

mysql_select_db($database_dmic, $dmic);
$sql = "SELECT id_lvl1 AS idt, categorieslvl1_name FROM dmic_actuscategorieslvl1 ORDER BY categorieslvl1_name ASC";
$recherche = mysql_query($sql, $dmic) or die(mysql_error());
$types = array();
$id = 0;
while($ligne = mysql_fetch_assoc($recherche))
    {
        $types[$ligne['idt']] = $ligne['categorieslvl1_name'];
    }

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
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../../Styles/Fluid Grid Layout/boilerplate.css" rel="stylesheet" type="text/css">
<link href="../../Styles/grid_layout_v4.css" rel="stylesheet" type="text/css">
<script type='text/javascript' src="../../ScriptLibrary/tiny_mce/tiny_mce.js"></script>
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
      <h1 align="center" class="Style7">Geek-Zone d'Actus.</h1>
  <h2 align="center" class="Style7">Nouvelle sous-catégorie d'une oeuvre.</h2>
  <p align="center">&nbsp;</p>
  <script type="text/javascript" src="../inc/actusoeuvres_xhr.js" charset="iso_8859-1"></script>
  
  <form action="<?php echo $editFormAction; ?>" method="POST" name="new_categorie" id="new_categorie">
    <label></label>
    <table width="300" border="1" align="center" bordercolor="#92BEE1" class="tab_cadrehov">
      <tr>
        <th bordercolor="#92BEE1" scope="col"><div align="center" class="Style7">Catégories d'actus</div></th>
        <th bordercolor="#92BEE1" scope="col"><div align="left">
          <select name="types" id="types" onchange="getActusoeuvres(this.value);">
            <option value="vide">- - - Sous-cat&eacute;gories - - -</option>
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
        </div></th>
        </tr>
      <tr>
        <th bordercolor="#92BEE1" scope="col">Oeuvres</th>
        <th bordercolor="#92BEE1" scope="col"><div align="left"><span id="blocActusoeuvres"></span></div></th>
      </tr>
      <tr>
        <th bordercolor="#92BEE1" scope="col">Sous-catégories d'actus</th>
        <th bordercolor="#92BEE1" scope="col"><div align="left">
          <input name="oeuvre_name" type="text" id="oeuvre_name" value="" size="100" />
        </div></th>
      </tr>
      <tr>
        <th bordercolor="#92BEE1" scope="row"><div align="right" class="Style7 Style7">
          <div align="center">Commentaire</div>
          </div></th>
        <td bordercolor="#92BEE1"><label>
          <script type='text/javascript' src='../../../glpi/lib/tiny_mce/tiny_mce.js'></script>
  <script language='javascript' type='text/javascript'>tinyMCE.init({
         language : 'fr',
         mode : 'exact',
         elements: 'commentaire',
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
  <div class='center spaced'><textarea name='commentaire' cols='100' rows='30' id='commentaire' onBlur="MM_validateForm('answer','','R');return document.MM_returnValue"></textarea>
  </div>
          </label></td>
        </tr>
      <tr>
        <th bordercolor="#92BEE1" scope="row">&nbsp;</th>
        <td bordercolor="#92BEE1"><label>
          <input type="submit" name="submit" id="submit" value="Envoyer" />
          </label></td>
        </tr>
      </table>
    <label> </label>
    <input type="hidden" name="MM_insert" value="new_categorie" />
  </form>
  <h1>&nbsp;</h1>
<!-- InstanceEndEditable --></div>
<div class="sidebar2" id="LayoutDiv5" align="center"><!-- InstanceBeginEditable name="sidebar2" -->
    <?php include ('front/inc/sidebar/sidebar2_pub.inc.php'); ?>
<!-- InstanceEndEditable --></div>
<div id="LayoutDiv6" class="footer"><!-- InstanceBeginEditable name="footer" -->
  <?php include('front/inc/footer/footer_users.inc.php');?>
<!-- InstanceEndEditable --></div>
</div>
</body>
<!-- InstanceEnd --></html>
<?php
mysql_free_result($recherche);
?>
