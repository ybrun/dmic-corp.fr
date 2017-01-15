<?php require_once ('../ScriptLibrary/ban_ip.php') ;?>
<?php require_once('../Connections/dmic.php'); ?>
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
  $insertSQL = sprintf("INSERT INTO guestbook (portail, `date`, name, email, `comment`) VALUES (%s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['portail'], "text"),
                       GetSQLValueString($_POST['date'], "date"),
                       GetSQLValueString($_POST['name'], "text"),
                       GetSQLValueString($_POST['e_mail'], "text"),
                       GetSQLValueString($_POST['message'], "text"));

  mysql_select_db($database_dmic, $dmic);
  $Result1 = mysql_query($insertSQL, $dmic) or die(mysql_error());

  $insertGoTo = "http://www.dmic-corp.fr/front/guestbook.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

$maxRows_guestbook = 10;
$pageNum_guestbook = 0;
if (isset($_GET['pageNum_guestbook'])) {
  $pageNum_guestbook = $_GET['pageNum_guestbook'];
}
$startRow_guestbook = $pageNum_guestbook * $maxRows_guestbook;

mysql_select_db($database_dmic, $dmic);
$query_guestbook = "SELECT * FROM guestbook WHERE guestbook.portail like 'Utilisateur' ORDER BY date DESC";
$query_limit_guestbook = sprintf("%s LIMIT %d, %d", $query_guestbook, $startRow_guestbook, $maxRows_guestbook);
$guestbook = mysql_query($query_limit_guestbook, $dmic) or die(mysql_error());
$row_guestbook = mysql_fetch_assoc($guestbook);

if (isset($_GET['totalRows_guestbook'])) {
  $totalRows_guestbook = $_GET['totalRows_guestbook'];
} else {
  $all_guestbook = mysql_query($query_guestbook);
  $totalRows_guestbook = mysql_num_rows($all_guestbook);
}
$totalPages_guestbook = ceil($totalRows_guestbook/$maxRows_guestbook)-1;

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
.Style3 {color: #FFFFCC}
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
  <h1 align="center" class="Style7">Livre d'or.</h1>
  <p align="center" class="Style3">&nbsp;</p>
  <form action="<?php echo $editFormAction; ?>" id="form1" name="form1" method="POST">
    <div align="center">
      <table width="200" border="1" class="tab_cadrehov">
        <tr>
          <th class="Style7" scope="row"><div align="center">Nom</div></th>
          <td><label>
            <input name="name" type="text" id="name" size="50" />
          </label></td>
        </tr>
        <tr>
          <th class="Style7" scope="row"><div align="center">E Mail</div></th>
          <td><label>
            <input name="e_mail" type="text" id="e_mail" size="50" />
          </label></td>
        </tr>
        <tr>
          <th class="Style7" scope="row"><div align="center">Message</div></th>
          <td><label>
            <textarea name="message" cols="50" rows="15" id="message"></textarea>
          </label></td>
        </tr>
        <tr class="Style7">
          <th colspan="2" scope="row"><div align="center"> <span class="Style3"> </span>
            <input name="portail" type="hidden" id="portail" value="Utilisateur" />
            <input name="date" type="hidden" id="date" value="<?php 
				  $date_US = date("Y-m-d");
				  $heure_US = date("H:i:s");
				  echo $date_US.' '.$heure_US ?>" />
            <input type="submit" name="submit" id="submit" value="Poster le message" />
          </div>
            <label>
            <div align="center"></div>
            </label></th>
        </tr>
      </table>
    </div>
    <input type="hidden" name="MM_insert" value="post_message" />
    <input type="hidden" name="MM_insert" value="form1" />
  </form>
  <p align="center" class="Style3">
  <table width="80%" class="tab_cadrehov">
    <tr>
      <td><b class="Style7">
        <?php   	         
  	     // Renvoie le nombre de lignes pour pouvoir afficher le nombre total de messages postés 
  	     echo mysql_num_rows($guestbook);  
  	     ?>
        messages </b>
        <table width="95%">
          <?php do { ?>
          <tr>
            <td><hr size=1>
              <?php echo '<a href="mailto:'.$row_guestbook['email'].'">'.$row_guestbook['name'].'</a>';
			 				  echo '<p><font color="#000000" face="Times New Roman"> Post&eacute; le : </font>';
							  echo '<font color="red">'.$row_guestbook['date'].'</font></p>';
							  echo '<p><div><font color=#000000">'.htmlentities($row_guestbook['comment']).'</font></div></p>';
							  echo '<hr size=1>';?></td>
          </tr>
          <?php } while ($row_guestbook = mysql_fetch_assoc($guestbook)); ?>
        </table></td>
    </tr>
  </table>
  </p>
  <h1></h1>
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
