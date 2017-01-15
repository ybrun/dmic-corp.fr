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
  $insertSQL = sprintf("INSERT INTO dmic_modeledevispc (name, pc_type, pc_categorie, prix_minimum, os, processeur_type, ram, nbr_disque, taille_C, taille_D, lecteur_type, taille_ecran) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['name'], "text"),
                       GetSQLValueString($_POST['pc_type'], "text"),
                       GetSQLValueString($_POST['categorie_pc'], "text"),
                       GetSQLValueString($_POST['budget'], "int"),
                       GetSQLValueString($_POST['os'], "int"),
                       GetSQLValueString($_POST['processeur_type'], "int"),
                       GetSQLValueString($_POST['ram'], "int"),
                       GetSQLValueString($_POST['nbr_dd'], "int"),
                       GetSQLValueString($_POST['taille_C'], "int"),
                       GetSQLValueString($_POST['taille_D'], "int"),
                       GetSQLValueString($_POST['lecteur'], "text"),
                       GetSQLValueString($_POST['taille_ecran'], "text"));

  mysql_select_db($database_dmic, $dmic);
  $Result1 = mysql_query($insertSQL, $dmic) or die(mysql_error());

  $insertGoTo = "http://www.dmic-corp.fr/front/admin/config_intitules_modele_devis_pc.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

mysql_select_db($database_dmic, $dmic);
$query_os = "SELECT * FROM dmic_os ORDER BY name ASC";
$os = mysql_query($query_os, $dmic) or die(mysql_error());
$row_os = mysql_fetch_assoc($os);
$totalRows_os = mysql_num_rows($os);

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
    <h2 align="center" class="Style7">Ajout d'un Mod&egrave;le de Devis Ordinateur.</h2>
    <p>&nbsp;</p>
  <div align="center">
    <form id="form1" name="form1" method="POST" action="<?php echo $editFormAction; ?>">
      <table width="400" border="1" class="tab_cadrehov">
        <tr>
          <th nowrap="nowrap" scope="row"><div align="center">Nom du mod&egrave;le</div></th>
          <td><label>
            <input name="name" type="text" id="name" size="50" />
            </label></td>
          </tr>
        <tr>
          <th nowrap="nowrap" scope="row"><div align="center">Type d'ordinateur</div></th>
          <td><p>
            <label></label>
            <label></label>
            <label>
              <select name="pc_type" id="pc_type">
                <option value="----------">----------</option>
                <option value="Unit&eacute; centrale">Unit&eacute; centrale</option>
                <option value="Unit&eacute; portable">Unit&eacute; portable</option>
                </select>
              </label>
            <br />
            </p></td>
          </tr>
        <tr>
          <th nowrap="nowrap" scope="row"><div align="center">Cat&eacute;gorie</div></th>
          <td><p>
            <label>
              <select name="categorie_pc" id="categorie_pc">
                <option value="----------">----------</option>
                <option value="Bureautique">Bureautique</option>
                <option value="Gaming">Gaming</option>
                <option value="Polyvalent">Polyvalent</option>
                <option value="Mini-ordinateur">Mini-ordinateur</option>
                <option value="Professionnel">Professionnel</option>
                <option value="Tactile">Tactile</option>
                <option value="Tout-en-un">Tout-en-un</option>
                </select>
              </label>
            <br />
            </p></td>
          </tr>
        <tr>
          <th nowrap="nowrap" scope="row"><div align="center">Budget (en &euro;)</div></th>
          <td><label>
            <input type="text" name="budget" id="budget" />
            </label></td>
          </tr>
        <tr>
          <th nowrap="nowrap" scope="row"><div align="center">Syst&egrave;me d'exploitation souhait&eacute;</div></th>
          <td><label>
            <select name="os" id="os">
              <option value="----------">----------</option>
              <?php
do {  
?>
              <option value="<?php echo $row_os['name']?>"><?php echo $row_os['name']?></option>
              <?php
} while ($row_os = mysql_fetch_assoc($os));
  $rows = mysql_num_rows($os);
  if($rows > 0) {
      mysql_data_seek($os, 0);
	  $row_os = mysql_fetch_assoc($os);
  }
?>
              </select>
            </label></td>
          </tr>
        <tr>
          <th nowrap="nowrap" scope="row"><div align="center">Type de processeur souhait&eacute;</div></th>
          <td><label>
            <select name="processeur_type" id="processeur_type">
              <option value="1 coeurs">1 coeurs</option>
              <option value="2 coeurs">2 coeurs</option>
              <option value="4 coeurs">4 coeurs</option>
              <option value="6 coeurs">6 coeurs</option>
              <option value="8 coeurs">8 coeurs</option>
              </select>
            </label></td>
          </tr>
        <tr>
          <th nowrap="nowrap" scope="row"><div align="center">Quantit&eacute; de M&eacute;moire RAM souhait&eacute; (en Go)</div></th>
          <td><label>
            <input type="text" name="ram" id="ram" />
            </label></td>
          </tr>
        <tr>
          <th nowrap="nowrap" scope="row"><div align="center">Nombre de disque dur souhait&eacute;</div></th>
          <td><label>
            <input type="text" name="nbr_dd" id="nbr_dd" />
            </label></td>
          </tr>
        <tr>
          <th nowrap="nowrap" scope="row"><div align="center">Taille du disque dur syst&egrave;me souhait&eacute;</div></th>
          <td><label>
            <input type="text" name="taille_C" id="taille_C" />
            </label></td>
          </tr>
        <tr>
          <th nowrap="nowrap" scope="row"><div align="center">Taille du 2&egrave;me disque dur</div></th>
          <td><label>
            <input type="text" name="taille_D" id="taille_D" />
            </label></td>
          </tr>
        <tr>
          <th nowrap="nowrap" scope="row"><div align="center">Type de lecteur souhait&eacute;</div></th>
          <td><label>
            <select name="lecteur" id="lecteur">
              <option value="----------">----------</option>
              <option value="Lecteur/Graveur DVD">Lecteur/Graveur DVD</option>
              <option value="Lecteur Blu-ray">Lecteur Blu-ray</option>
              <option value="Lecteur/Graveur Blu-ray">Lecteur/Graveur Blu-ray</option>
              </select>
            </label></td>
          </tr>
        <tr>
          <th nowrap="nowrap" scope="row"><div align="center">Taille de l'&eacute;cran souhait&eacute;</div></th>
          <td><label>
            <select name="taille_ecran" id="taille_ecran">
              <option value="----------">----------</option>
              <option value="7''">7''</option>
              <option value="8''">8'</option>
              <option value="10''">10''</option>
              <option value="11''">11''</option>
              <option value="13''">13''</option>
              <option value="14''">14''</option>
              <option value="15''">15''</option>
              <option value="17''">17''</option>
              <option value="20''">20''</option>
              <option value="21'' - 22''">21'' - 22''</option>
              <option value="23'' - 24''">23'' - 24''</option>
              <option value="27'' et sup&eacute;rieur">27'' et sup&eacute;rieur</option>
              </select>
            </label></td>
          </tr>
        <tr>
          <th nowrap="nowrap" scope="row">&nbsp;</th>
          <td><label>
            <input type="submit" name="submit" id="submit" value="Envoyer" />
            </label></td>
          </tr>
        </table>
      <input type="hidden" name="MM_insert" value="form1" />
      </form>
    </div>
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
mysql_free_result($os);
?>
