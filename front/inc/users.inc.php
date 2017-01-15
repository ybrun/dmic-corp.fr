<?php require_once('../../Connections/dmic.php'); ?>
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

if ((isset($_GET['id'])) && ($_GET['id'] != "")) {
  $deleteSQL = sprintf("DELETE FROM dmic_users WHERE id_users=%s",
                       GetSQLValueString($_GET['id'], "int"));

  mysql_select_db($database_dmic, $dmic);
  $Result1 = mysql_query($deleteSQL, $dmic) or die(mysql_error());
}

$colname_users = "-1";
if (isset($_GET['name_profils'])) {
  $colname_users = $_GET['name_profils'];
}
mysql_select_db($database_dmic, $dmic);
$query_users = sprintf("SELECT dmic_users.id_users, dmic_users.login, dmic_users.nom_user, dmic_users.prenom_user, dmic_users.e_mail_user, dmic_users.profil FROM dmic_users WHERE dmic_users.profil = %s", GetSQLValueString($colname_users, "text"));
$users = mysql_query($query_users, $dmic) or die(mysql_error());
$row_users = mysql_fetch_assoc($users);
$totalRows_users = mysql_num_rows($users);
?>
 <table width="80%" border="1" align="center" class="tab_cadrehov">
          <tr>
            <th scope="col"><div align="center">Login</div></th>
            <th scope="col"><div align="center">Nom</div></th>
            <th scope="col"><div align="center">Pr&eacute;nom</div></th>
            <th scope="col"><div align="center">E-Mail</div></th>
            <th scope="col"><div align="center">Profil</div></th>
            <th scope="col">&nbsp;</th>
            <th scope="col">&nbsp;</th>
          </tr>
          <?php do { ?>
          <tr>
            <td><div align="center"><?php echo $row_users['login']; ?></div></td>
            <td><div align="center"><?php echo $row_users['nom_user']; ?></div></td>
            <td><div align="center"><?php echo $row_users['prenom_user']; ?></div></td>
            <td><div align="center"><?php echo $row_users['e_mail_user']; ?></div></td>
            <td><div align="center"><?php echo $row_users['profil']; ?></div></td>
            <td><div align="center"><a href="http://www.dmic-corp.fr/front/admin/modif_users.php?id=<?php echo $row_users['id_users']; ?>"><img src="http://www.dmic-corp.fr/images/modif.png" width="29" height="29"></a></div></td>
            <td><div align="center"><a href="http://www.dmic-corp.fr/front/admin/liste_users.php?id=<?php echo $row_users['id_users']; ?>"><img src="http://www.dmic-corp.fr/images/showdeleted.png" width="16" height="16"></a></div></td>
          </tr>
          <?php } while ($row_users = mysql_fetch_assoc($users)); ?>
        </table>
 <?php
mysql_free_result($users);
?>
