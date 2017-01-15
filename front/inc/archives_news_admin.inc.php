<?php require_once('../Connections/dmic.php'); ?>
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

if ((isset($_GET['id'])) && ($_GET['id'] != "")) {
  $deleteSQL = sprintf("DELETE FROM dmic_actualites WHERE id=%s",
                       GetSQLValueString($_GET['id'], "int"));

  mysql_select_db($database_dmic, $dmic);
  $Result1 = mysql_query($deleteSQL, $dmic) or die(mysql_error());
}

$maxRows_news = 10;
$pageNum_news = 0;
if (isset($_GET['pageNum_news'])) {
  $pageNum_news = $_GET['pageNum_news'];
}
$startRow_news = $pageNum_news * $maxRows_news;

mysql_select_db($database_dmic, $dmic);
$query_news = "SELECT * FROM dmic_actualites WHERE dmic_actualites.`date` <= '2014%' ORDER BY `date` DESC";
$query_limit_news = sprintf("%s LIMIT %d, %d", $query_news, $startRow_news, $maxRows_news);
$news = mysql_query($query_limit_news, $dmic) or die(mysql_error());
$row_news = mysql_fetch_assoc($news);

if (isset($_GET['totalRows_news'])) {
  $totalRows_news = $_GET['totalRows_news'];
} else {
  $all_news = mysql_query($query_news);
  $totalRows_news = mysql_num_rows($all_news);
}
$totalPages_news = ceil($totalRows_news/$maxRows_news)-1;
$pageNum_news = 0;
if (isset($_GET['pageNum_news'])) {
  $pageNum_news = $_GET['pageNum_news'];
}
$startRow_news = $pageNum_news * $maxRows_news;

mysql_select_db($database_dmic, $dmic);
$query_news = "SELECT * FROM dmic_actualites WHERE dmic_actualites.`date` <= '2014%' ORDER BY `date` DESC";
$query_limit_news = sprintf("%s LIMIT %d, %d", $query_news, $startRow_news, $maxRows_news);
$news = mysql_query($query_limit_news, $dmic) or die(mysql_error());
$row_news = mysql_fetch_assoc($news);

if (isset($_GET['totalRows_news'])) {
  $totalRows_news = $_GET['totalRows_news'];
} else {
  $all_news = mysql_query($query_news);
  $totalRows_news = mysql_num_rows($all_news);
}
$totalPages_news = ceil($totalRows_news/$maxRows_news)-1;

$queryString_news = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_news") == false && 
        stristr($param, "totalRows_news") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_news = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_news = sprintf("&totalRows_news=%d%s", $totalRows_news, $queryString_news);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="../../Styles/Fluid%20Grid%20Layout/boilerplate.css" rel="stylesheet" type="text/css">
<style type="text/css">
body {
	font-family: Verdana,Arial,Helvetica,sans-serif;
}
.Style7 {color: #660033; }
</style>
</head>

<body>
<h1 align="center">Archives des Actualités 2002 à 2012.</h1>
<p align="center">&nbsp;</p>
<table width="50" border="0" align="center">
  <tr class="Style7">
    <?php if ($pageNum_news > 0) { // Show if not first page ?>
    <th scope="col"><a href="<?php printf("%s?pageNum_news=%d%s", $currentPage, 0, $queryString_news); ?>"><img src="../../glpi/pics/first.png" width="12" height="10" /></a></th>
    <th scope="col"><a href="<?php printf("%s?pageNum_news=%d%s", $currentPage, max(0, $pageNum_news - 1), $queryString_news); ?>"><img src="../../glpi/pics/left.png" width="10" height="10" /></a></th>
    <?php } // Show if not first page ?>
    <th scope="col"><div align="center">De</div></th>
    <th scope="col"><div align="center"><?php echo ($startRow_news + 1) ?></div></th>
    <th scope="col"><div align="center">à </div></th>
    <th scope="col"><div align="center"><?php echo min($startRow_news + $maxRows_news, $totalRows_news) ?></div></th>
    <th scope="col"><div align="center">sur</div></th>
    <th scope="col"><div align="center"><?php echo $totalRows_news ?></div></th>
    <?php if ($pageNum_news < $totalPages_news) { // Show if not last page ?>
    <th scope="col"><a href="<?php printf("%s?pageNum_news=%d%s", $currentPage, min($totalPages_news, $pageNum_news + 1), $queryString_news); ?>"><img src="../../glpi/pics/right.png" width="10" height="10" /></a></th>
    <th scope="col"><a href="<?php printf("%s?pageNum_news=%d%s", $currentPage, $totalPages_news, $queryString_news); ?>"><img src="../../glpi/pics/last.png" width="12" height="10" /></a></th>
    <?php } // Show if not last page ?>
  </tr>
</table>
<table width="100%" border="1" align="center" class="tab_cadrehov">
  <tr>
    <th width="142" scope="col"><div align="center">Date</div></th>
    <th width="139" scope="col"><div align="center">Catégorie</div></th>
    <th width="1140" scope="col"><div align="center">Actualités / Mise à jour</div></th>
    <th width="29" scope="col">&nbsp;</th>
    <th width="16" scope="col">&nbsp;</th>
  </tr>
  <?php do { ?>
  <tr>
    <th scope="row"><div align="center"><?php echo $row_news['date']; ?></div></th>
    <td><div align="center"><?php echo $row_news['type']; ?></div></td>
    <td><label for="news"></label>
      <div align="justify"><?php echo $row_news['actualites']; ?></div></td>
    <td><div align="center"><a href="http://www.dmic-corp.fr/front/contribute/modif_actualite.php?id=<?php echo $row_news['id'];?>"><img src="../../images/modif.png" width="29" height="29"></a></div></td>
    <td><div align="center"><a href="http://www.dmic-corp.fr/front/index.php?id=<?php echo $row_news['id']; ?>"><img src="../../glpi/pics/showdeleted.png" width="16" height="16"></a></div></td>
  </tr>
  <?php } while ($row_news = mysql_fetch_assoc($news)); ?>
</table>
<table width="50" border="0" align="center">
  <tr class="Style7">
    <?php if ($pageNum_news > 0) { // Show if not first page ?>
    <th scope="col"><a href="<?php printf("%s?pageNum_news=%d%s", $currentPage, 0, $queryString_news); ?>"><img src="../../glpi/pics/first.png" width="12" height="10" /></a></th>
    <th scope="col"><a href="<?php printf("%s?pageNum_news=%d%s", $currentPage, max(0, $pageNum_news - 1), $queryString_news); ?>"><img src="../../glpi/pics/left.png" width="10" height="10" /></a></th>
    <?php } // Show if not first page ?>
    <th scope="col"><div align="center">De</div></th>
    <th scope="col"><div align="center"><?php echo ($startRow_news + 1) ?></div></th>
    <th scope="col"><div align="center">à </div></th>
    <th scope="col"><div align="center"><?php echo min($startRow_news + $maxRows_news, $totalRows_news) ?></div></th>
    <th scope="col"><div align="center">sur</div></th>
    <th scope="col"><div align="center"><?php echo $totalRows_news ?></div></th>
    <?php if ($pageNum_news < $totalPages_news) { // Show if not last page ?>
    <th scope="col"><a href="<?php printf("%s?pageNum_news=%d%s", $currentPage, min($totalPages_news, $pageNum_news + 1), $queryString_news); ?>"><img src="../../glpi/pics/right.png" width="10" height="10" /></a></th>
    <th scope="col"><a href="<?php printf("%s?pageNum_news=%d%s", $currentPage, $totalPages_news, $queryString_news); ?>"><img src="../../glpi/pics/last.png" width="12" height="10" /></a></th>
    <?php } // Show if not last page ?>
  </tr>
</table>
<p align="center"></p>
</body>
</html>
<?php
mysql_free_result($news);
?>
