<?php require_once ('../ScriptLibrary/ban_ip.php') ;?>
<?php require_once('../Connections/dmic.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
 
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
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
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
 
$maxRows_procedure = 10;
$pageNum_procedure = 0;
if (isset($_GET['pageNum_procedure'])) {
  $pageNum_procedure = $_GET['pageNum_procedure'];
}
$startRow_procedure = $pageNum_procedure * $maxRows_procedure;
 
mysql_select_db($database_dmic, $dmic);
$query_procedure = "SELECT dmic_knowbaseitems.id_knowbaseitems, dmic_knowbaseitems.format, dmic_knowbaseitems.name_fichier, dmic_knowbaseitems.name FROM dmic_knowbaseitems WHERE dmic_knowbaseitems.type = '1' ORDER BY dmic_knowbaseitems.id_knowbaseitems DESC";
$query_limit_procedure = sprintf("%s LIMIT %d, %d", $query_procedure, $startRow_procedure, $maxRows_procedure);
$procedure = mysql_query($query_limit_procedure, $dmic) or die(mysql_error());
$row_procedure = mysql_fetch_assoc($procedure);
 
if (isset($_GET['totalRows_procedure'])) {
  $totalRows_procedure = $_GET['totalRows_procedure'];
} else {
  $all_procedure = mysql_query($query_procedure);
  $totalRows_procedure = mysql_num_rows($all_procedure);
}
$totalPages_procedure = ceil($totalRows_procedure/$maxRows_procedure)-1;
 
$maxRows_res_inc = 10;
$pageNum_res_inc = 0;
if (isset($_GET['pageNum_res_inc'])) {
  $pageNum_res_inc = $_GET['pageNum_res_inc'];
}
$startRow_res_inc = $pageNum_res_inc * $maxRows_res_inc;
 
mysql_select_db($database_dmic, $dmic);
$query_res_inc = "SELECT dmic_knowbaseitems.id_knowbaseitems, dmic_knowbaseitems.format, dmic_knowbaseitems.name_fichier, dmic_knowbaseitems.name FROM dmic_knowbaseitems WHERE dmic_knowbaseitems.type = '2' ORDER BY dmic_knowbaseitems.id_knowbaseitems DESC";
$query_limit_res_inc = sprintf("%s LIMIT %d, %d", $query_res_inc, $startRow_res_inc, $maxRows_res_inc);
$res_inc = mysql_query($query_limit_res_inc, $dmic) or die(mysql_error());
$row_res_inc = mysql_fetch_assoc($res_inc);
 
if (isset($_GET['totalRows_res_inc'])) {
  $totalRows_res_inc = $_GET['totalRows_res_inc'];
} else {
  $all_res_inc = mysql_query($query_res_inc);
  $totalRows_res_inc = mysql_num_rows($all_res_inc);
}
$totalPages_res_inc = ceil($totalRows_res_inc/$maxRows_res_inc)-1;
 
$maxRows_cours = 10;
$pageNum_cours = 0;
if (isset($_GET['pageNum_cours'])) {
  $pageNum_cours = $_GET['pageNum_cours'];
}
$startRow_cours = $pageNum_cours * $maxRows_cours;
 
mysql_select_db($database_dmic, $dmic);
$query_cours = "SELECT dmic_knowbaseitems.id_knowbaseitems, dmic_knowbaseitems.format, dmic_knowbaseitems.name_fichier, dmic_knowbaseitems.name FROM dmic_knowbaseitems WHERE dmic_knowbaseitems.type = '3' ORDER BY dmic_knowbaseitems.id_knowbaseitems DESC";
$query_limit_cours = sprintf("%s LIMIT %d, %d", $query_cours, $startRow_cours, $maxRows_cours);
$cours = mysql_query($query_limit_cours, $dmic) or die(mysql_error());
$row_cours = mysql_fetch_assoc($cours);
 
if (isset($_GET['totalRows_cours'])) {
  $totalRows_cours = $_GET['totalRows_cours'];
} else {
  $all_cours = mysql_query($query_cours);
  $totalRows_cours = mysql_num_rows($all_cours);
}
$totalPages_cours = ceil($totalRows_cours/$maxRows_cours)-1;
 
$_SESSION['MM_UserGroup'] = $row_profil_users['profil'];
 
	session_start();
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
Pour en savoir plus sur les commentaires conditionnels autour des balises HTML en haut du fichier :
paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/
 
Procédez comme suit si vous utilisez une version personnalisée de modernizr (http://www.modernizr.com/) :
* insérez ici le lien vers votre js
* supprimez le lien ci-dessous vers html5shiv
* ajoutez la classe "no-js" aux balises HTML en haut
* vous pouvez aussi supprimer le lien vers respond.min.js si vous avez inclus MQ Polyfill dans votre version de modernizr 
-->
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="../Styles/Fluid%20Grid%20Layout/respond.min.js"></script>
<script src="../SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css">
<!-- InstanceEndEditable -->
</head>
 
<body>
<div class="gridContainer clearfix">
  <div id="LayoutDiv1" class="header"><!-- InstanceBeginEditable name="header" -->
    <?php include ('inc/header/header.inc.php'); ?>
<!-- InstanceEndEditable --></div>
<div id="LayoutDiv2" class="header_pub"><!-- InstanceBeginEditable name="header_pub" -->
	<?php include('inc/header/header_pub.inc.php');?>
<!-- InstanceEndEditable --></div>
  <div class="sidebar1" id="LayoutDiv3" align="center"><!-- InstanceBeginEditable name="sidebar1" -->
   <?php include ('inc/sidebar/stats/stats.php'); ?>
   </p>
<!-- InstanceEndEditable --></div>
<div id="LayoutDiv4" class="content"><!-- InstanceBeginEditable name="content" -->
  <h1 align="center">Base de connaissances.</h1>
  <p align="center">&nbsp;</p>
  <?php if ($_SESSION['MM_UserGroup']=='Administrateurs' or $_SESSION['MM_UserGroup']=='Contributeurs' or $_SESSION['MM_UserGroup']=='Formateurs') { ?><p align="left">
    <a href="http://www.dmic-corp.fr/front/contribute/new_knowbaseitems.php" target="pop-up1" onclick="window.open('','pop-up1','width=1075,height=800,top=150,left=200,toolbar=0,location=0,directories=0,status=0,menubar=0,scrollbars=0,resizable=0');return document.MM_returnValue"><input type="submit" name="New" id="New" value="Nouvelle entr&eacute;e"></a>
  </p><?php } ?>

		<h2 align="center"><strong><u>News</u></strong></h2>
        <table width="80%" border="0" align="center">
          <tr>
            <td width="30%"><table width="100%" border="1" class="tab_cadrehov">
                <tr>
                  <th scope="col">Proc&eacute;dures</th>
                </tr>
                <tr>
                  <td><ul>
                      <?php do { ?>
                      <li>
                        <?php if ($row_procedure['format'] == 1) { ?>
                        <a href="http://www.dmic-corp.fr/front/knowbaseitems.php?id=<?php echo $row_procedure['id_knowbaseitems']; ?>"><?php echo $row_procedure['name']; ?></a>
                        <?php } ?>
                        <?php if ($row_procedure['format'] == 2) { ?>
                        <a href="http://www.dmic-corp.fr/download/procs/<?php echo $row_procedure['name_fichier']; ?>" target="_blank"><?php echo $row_procedure['name']; ?></a>
                        <?php } ?>
                      </li>
                    <?php } while ($row_procedure = mysql_fetch_assoc($procedure)); ?>
                  </ul></td>
                </tr>
            </table></td>
            <td width="30%"><table width="100%" border="1" class="tab_cadrehov">
                <tr>
                  <th scope="col">R&eacute;solution d'incidents</th>
                </tr>
                <tr>
                  <td><ul>
                      <?php do { ?>
                      <li>
                        <?php if ($row_res_inc['format'] == 1) { ?>
                        <a href="http://www.dmic-corp.fr/front/knowbaseitems.php?id=<?php echo $row_res_inc['id_knowbaseitems']; ?>"><?php echo $row_res_inc['name']; ?></a>
                        <?php } ?>
                        <?php if ($row_res_inc['format'] == 2) { ?>
                        <a href="http://www.dmic-corp.fr/download/procs/<?php echo $row_res_inc['name_fichier']; ?>" target="_blank"><?php echo $row_res_inc['name']; ?></a>
                        <?php } ?>
                      </li>
                    <?php } while ($row_res_inc = mysql_fetch_assoc($res_inc)); ?>
                  </ul></td>
                </tr>
            </table></td>
            <td width="30%"><table width="100%" border="1" class="tab_cadrehov">
                <tr>
                  <th scope="col">Cours</th>
                </tr>
                <tr>
                  <td><ul>
                      <?php do { ?>
                      <li>
                        <?php if ($row_cours['format'] ==1) { ?>
                        <a href="http://www.dmic-corp.fr/front/knowbaseitems.php?id=<?php echo $row_cours['id_knowbaseitems']; ?>"><?php echo $row_cours['name']; ?></a>
                        <?php } ?>
                        <?php if ($row_cours['format'] == 2) { ?>
                        <a href="http://www.dmic-corp.fr/download/procs/<?php echo $row_cours['name_fichier']; ?>" target="_blank"><?php echo $row_cours['name']; ?></a>
                        <?php } ?>
                      </li>
                    <?php } while ($row_cours = mysql_fetch_assoc($cours)); ?>
                  </ul></td>
                </tr>
            </table></td>
          </tr>
        </table>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
        <h2 align="center"><strong><u>Rechercher</u></strong></h2>
		<p></p>
			<script type="text/javascript" src="inc/categories_xhr.js" charset="iso_8859-1"></script>
			<?php
				echo("<?xml version=\"1.0\" encoding=\"iso-8859-1\"?>\n");
				/* Variables de connexion : ajustez ces paramètres selon votre propre environnement */
				$serveur = "dmiccorpglroot.mysql.db";
				$admin   = "dmiccorpglroot";
				$mdp     = "Password7";
				$base    = "dmiccorpglroot";
			?>
            <?php
				/* Requête SQL de récupération des données de la première liste */
				$sql = "SELECT `id` AS idt, `name_type` ".
					   "FROM `dmic_knowbaseitemtypecategorie` ".
					   "ORDER BY `name_type`;";
				/* Connexion et exécution de la requête */
				$connexion = mysql_connect($serveur, $admin, $mdp);
				if($connexion != false)
				{
					$choixbase = mysql_select_db($base, $connexion);
					$recherche = mysql_query($sql, $connexion);
					/* Création du tableau PHP des valeurs récupérées */
					$types = array();
					/* Index du département par tableau régional */
					$id = 0;
					while($ligne = mysql_fetch_assoc($recherche))
					{
						$types[$ligne['idt']] = $ligne['name_type'];
					}
			?>
            <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="get" id="chgdept">
                <table width="30%" border="1" align="center" class="tab_cadrehov">
                  <tr>
                    <th width="15%" scope="row">Types</th>
                    <td width="15%"><select name="types" id="types" onchange="getCategories(this.value);">
                      <option value="vide">- - - Types - - -</option>
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
                    <!-- ICI, le secret : on met un bloc avec un id ou va s'ins&eacute;rer le code de
                     la seconde liste d&eacute;roulande --></td>
                  </tr>
                  <tr>
                    <th scope="row">Cat&eacute;gories</th>
                    <td>
						<script type="text/javascript" src="inc/bdc_xhr.js" charset="iso_8859-1"></script>
                        <span id="blocCategories"></span><br />
                    </td>
                  </tr>
                </table>
            </form>
            <p align="center">
              <?php
            }
            else
            {
                /*  Si vous arrivez ici, vous avez un gros problème avec la connexion au serveur de base de données */
            ?>
 
              <?php
            }
            ?>
            </p>
            <p align="center">&nbsp;</p>
            <span id="blocBdC"></span>
            <p align="center">&nbsp;</p>
        </p>

  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
<!-- InstanceEndEditable --></div>
<div class="sidebar2" id="LayoutDiv5" align="center"><!-- InstanceBeginEditable name="sidebar2" -->
    <?php include ('inc/sidebar/sidebar2_pub.inc.php'); ?>
<!-- InstanceEndEditable --></div>
<div id="LayoutDiv6" class="footer"><!-- InstanceBeginEditable name="footer" -->
  <?php include('inc/footer/footer_users.inc.php');?>
<script type="text/javascript">
<!--
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
//-->
</script>
<!-- InstanceEndEditable --></div>
</div>
</body>
<!-- InstanceEnd --></html>
<?php
mysql_free_result($procedure);
 
mysql_free_result($res_inc);
 
mysql_free_result($cours);
 
mysql_free_result($categorie);
 
mysql_free_result($profil_users);
?>