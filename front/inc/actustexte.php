<?php require_once('../../Connections/dmic.php'); ?>
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

$colname_actustexte = "-1";
if (isset($_GET['id_actus'])) {
  $colname_actustexte = $_GET['id_actus'];
}
mysql_select_db($database_dmic, $dmic);
$query_actustexte = sprintf("SELECT id_actus, sujet_name, sujet_texte, sujet_auteur, sujet_date FROM dmic_actus WHERE id_actus = %s", GetSQLValueString($colname_actustexte, "int"));
$actustexte = mysql_query($query_actustexte, $dmic) or die(mysql_error());
$row_actustexte = mysql_fetch_assoc($actustexte);
$totalRows_actustexte = mysql_num_rows($actustexte);
?>
<meta charset="utf8">
<style type="text/css">
.textoeuvre {
	background-color: #FFF;
	width: 80%;
}
</style>
<div class="textoeuvre">
  <table width="80%" border="1" align="center" class="tab_cadrehov">
    <tr>
      <th><h3>Sujet : <?php echo $row_actustexte['sujet_name']; ?></h3></td>
      <th><h3>Auteur : <?php echo $row_actustexte['sujet_auteur']; ?></h3></td>
      <th><h3> Date : <?php echo $row_actustexte['sujet_date']; ?></h3></td>
      <?php if ($_SESSION['MM_UserGroup']=="Administrateurs" or $_SESSION['MM_UserGroup']=="Culture"){ ?>
      <th width="2%"><a><img src="http://www.dmic-corp.fr/images/modif.png" width="29" height="29"></a></td>
	  <?php } ?>
    </tr>
    <tr>
      <td colspan="4"><?php echo $row_actustexte['sujet_texte']; ?></td>
    </tr>
  </table>
</div>
<?php
mysql_free_result($actustexte);
?>
