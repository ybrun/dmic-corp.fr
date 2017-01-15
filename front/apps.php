<?php require_once ('../ScriptLibrary/ban_ip.php') ;?>
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
 
if ((isset($_GET['id'])) && ($_GET['id'] != "")) {
  $deleteSQL = sprintf("DELETE FROM dmic_apps WHERE apps_id=%s",
                       GetSQLValueString($_GET['id'], "int"));
 
  mysql_select_db($database_dmic, $dmic);
  $Result1 = mysql_query($deleteSQL, $dmic) or die(mysql_error());
 
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
 
$maxRows_log_administration = 5;
$pageNum_log_administration = 0;
if (isset($_GET['pageNum_log_administration'])) {
  $pageNum_log_administration = $_GET['pageNum_log_administration'];
}
$startRow_log_administration = $pageNum_log_administration * $maxRows_log_administration;
 
mysql_select_db($database_dmic, $dmic);
$query_log_administration = "SELECT dmic_apps.apps_name, dmic_apps.apps_finalname FROM dmic_apps WHERE dmic_apps.apps_type = '5' ORDER BY dmic_apps.apps_id DESC";
$query_limit_log_administration = sprintf("%s LIMIT %d, %d", $query_log_administration, $startRow_log_administration, $maxRows_log_administration);
$log_administration = mysql_query($query_limit_log_administration, $dmic) or die(mysql_error());
$row_log_administration = mysql_fetch_assoc($log_administration);
 
if (isset($_GET['totalRows_log_administration'])) {
  $totalRows_log_administration = $_GET['totalRows_log_administration'];
} else {
  $all_log_administration = mysql_query($query_log_administration);
  $totalRows_log_administration = mysql_num_rows($all_log_administration);
}
$totalPages_log_administration = ceil($totalRows_log_administration/$maxRows_log_administration)-1;
 
$maxRows_log_bureautique = 5;
$pageNum_log_bureautique = 0;
if (isset($_GET['pageNum_log_bureautique'])) {
  $pageNum_log_bureautique = $_GET['pageNum_log_bureautique'];
}
$startRow_log_bureautique = $pageNum_log_bureautique * $maxRows_log_bureautique;
 
mysql_select_db($database_dmic, $dmic);
$query_log_bureautique = "SELECT dmic_apps.apps_id, dmic_apps.apps_name, dmic_apps.apps_finalname  FROM dmic_apps WHERE dmic_apps.apps_type = '1' ORDER BY dmic_apps.apps_id DESC";
$query_limit_log_bureautique = sprintf("%s LIMIT %d, %d", $query_log_bureautique, $startRow_log_bureautique, $maxRows_log_bureautique);
$log_bureautique = mysql_query($query_limit_log_bureautique, $dmic) or die(mysql_error());
$row_log_bureautique = mysql_fetch_assoc($log_bureautique);
 
if (isset($_GET['totalRows_log_bureautique'])) {
  $totalRows_log_bureautique = $_GET['totalRows_log_bureautique'];
} else {
  $all_log_bureautique = mysql_query($query_log_bureautique);
  $totalRows_log_bureautique = mysql_num_rows($all_log_bureautique);
}
$totalPages_log_bureautique = ceil($totalRows_log_bureautique/$maxRows_log_bureautique)-1;
 
$maxRows_log_developpement = 5;
$pageNum_log_developpement = 0;
if (isset($_GET['pageNum_log_developpement'])) {
  $pageNum_log_developpement = $_GET['pageNum_log_developpement'];
}
$startRow_log_developpement = $pageNum_log_developpement * $maxRows_log_developpement;
 
mysql_select_db($database_dmic, $dmic);
$query_log_developpement = "SELECT dmic_apps.apps_id, dmic_apps.apps_name, dmic_apps.apps_finalname FROM dmic_apps WHERE dmic_apps.apps_type = '2' ORDER BY dmic_apps.apps_id DESC";
$query_limit_log_developpement = sprintf("%s LIMIT %d, %d", $query_log_developpement, $startRow_log_developpement, $maxRows_log_developpement);
$log_developpement = mysql_query($query_limit_log_developpement, $dmic) or die(mysql_error());
$row_log_developpement = mysql_fetch_assoc($log_developpement);
 
if (isset($_GET['totalRows_log_developpement'])) {
  $totalRows_log_developpement = $_GET['totalRows_log_developpement'];
} else {
  $all_log_developpement = mysql_query($query_log_developpement);
  $totalRows_log_developpement = mysql_num_rows($all_log_developpement);
}
$totalPages_log_developpement = ceil($totalRows_log_developpement/$maxRows_log_developpement)-1;
 
$maxRows_log_jeux = 5;
$pageNum_log_jeux = 0;
if (isset($_GET['pageNum_log_jeux'])) {
  $pageNum_log_jeux = $_GET['pageNum_log_jeux'];
}
$startRow_log_jeux = $pageNum_log_jeux * $maxRows_log_jeux;
 
mysql_select_db($database_dmic, $dmic);
$query_log_jeux = "SELECT dmic_apps.apps_id, dmic_apps.apps_name, dmic_apps.apps_finalname FROM dmic_apps WHERE dmic_apps.apps_type = '6' ORDER BY dmic_apps.apps_id DESC";
$query_limit_log_jeux = sprintf("%s LIMIT %d, %d", $query_log_jeux, $startRow_log_jeux, $maxRows_log_jeux);
$log_jeux = mysql_query($query_limit_log_jeux, $dmic) or die(mysql_error());
$row_log_jeux = mysql_fetch_assoc($log_jeux);
 
if (isset($_GET['totalRows_log_jeux'])) {
  $totalRows_log_jeux = $_GET['totalRows_log_jeux'];
} else {
  $all_log_jeux = mysql_query($query_log_jeux);
  $totalRows_log_jeux = mysql_num_rows($all_log_jeux);
}
$totalPages_log_jeux = ceil($totalRows_log_jeux/$maxRows_log_jeux)-1;
 
$maxRows_log_reseaux = 5;
$pageNum_log_reseaux = 0;
if (isset($_GET['pageNum_log_reseaux'])) {
  $pageNum_log_reseaux = $_GET['pageNum_log_reseaux'];
}
$startRow_log_reseaux = $pageNum_log_reseaux * $maxRows_log_reseaux;
 
mysql_select_db($database_dmic, $dmic);
$query_log_reseaux = "SELECT dmic_apps.apps_id, dmic_apps.apps_name, dmic_apps.apps_finalname FROM dmic_apps WHERE dmic_apps.apps_type = '3' ORDER BY dmic_apps.apps_id DESC";
$query_limit_log_reseaux = sprintf("%s LIMIT %d, %d", $query_log_reseaux, $startRow_log_reseaux, $maxRows_log_reseaux);
$log_reseaux = mysql_query($query_limit_log_reseaux, $dmic) or die(mysql_error());
$row_log_reseaux = mysql_fetch_assoc($log_reseaux);
 
if (isset($_GET['totalRows_log_reseaux'])) {
  $totalRows_log_reseaux = $_GET['totalRows_log_reseaux'];
} else {
  $all_log_reseaux = mysql_query($query_log_reseaux);
  $totalRows_log_reseaux = mysql_num_rows($all_log_reseaux);
}
$totalPages_log_reseaux = ceil($totalRows_log_reseaux/$maxRows_log_reseaux)-1;
 
$maxRows_log_virtualisation = 5;
$pageNum_log_virtualisation = 0;
if (isset($_GET['pageNum_log_virtualisation'])) {
  $pageNum_log_virtualisation = $_GET['pageNum_log_virtualisation'];
}
$startRow_log_virtualisation = $pageNum_log_virtualisation * $maxRows_log_virtualisation;
 
mysql_select_db($database_dmic, $dmic);
$query_log_virtualisation = "SELECT dmic_apps.apps_id, dmic_apps.apps_name, dmic_apps.apps_finalname FROM dmic_apps WHERE dmic_apps.apps_type = '4' ORDER BY dmic_apps.apps_id DESC";
$query_limit_log_virtualisation = sprintf("%s LIMIT %d, %d", $query_log_virtualisation, $startRow_log_virtualisation, $maxRows_log_virtualisation);
$log_virtualisation = mysql_query($query_limit_log_virtualisation, $dmic) or die(mysql_error());
$row_log_virtualisation = mysql_fetch_assoc($log_virtualisation);
 
if (isset($_GET['totalRows_log_virtualisation'])) {
  $totalRows_log_virtualisation = $_GET['totalRows_log_virtualisation'];
} else {
  $all_log_virtualisation = mysql_query($query_log_virtualisation);
  $totalRows_log_virtualisation = mysql_num_rows($all_log_virtualisation);
}
$totalPages_log_virtualisation = ceil($totalRows_log_virtualisation/$maxRows_log_virtualisation)-1;
 
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
  <h1 align="center">Applications.</h1>
  <p align="center">&nbsp;</p>
  <?php if ($_SESSION['MM_UserGroup']=='Administrateurs' or $_SESSION['MM_UserGroup']=='Contributeurs' or $_SESSION['MM_UserGroup']=='Formateurs') { ?>
  <a href="http://www.dmic-corp.fr/front/contribute/upload_apps.php">
  <input type="submit" name="Upload" id="Upload" value="Upload" class="submit">
  </a>
  <?php } ?>
  <p align="center">&nbsp;</p>
  <div id="TabbedPanels1" class="TabbedPanels">
    <ul class="TabbedPanelsTabGroup">
      <li class="TabbedPanelsTab" tabindex="0">News</li>
      <li class="TabbedPanelsTab" tabindex="0">Parcourir</li>
    </ul>
    <div class="TabbedPanelsContentGroup">
      <div class="TabbedPanelsContent">
        <table width="80%" border="0" align="center">
          <tr>
            <td width="30%"><table width="100%" border="1" class="tab_cadrehov">
                <tr>
                  <th scope="col">Administrations</th>
                </tr>
                <tr>
                  <td><ul>
                      <?php do { ?>
                      <li><a href="http://www.dmic-corp.fr/download/apps/<?php echo $row_log_administration['apps_name']; ?>"><?php echo $row_log_administration['apps_finalname']; ?></a></li>
                    <?php } while ($row_log_administration = mysql_fetch_assoc($log_administration)); ?>
                  </ul></td>
                </tr>
            </table></td>
            <td width="30%"><table width="100%" border="1" class="tab_cadrehov">
                <tr>
                  <th scope="col">Bureautiques</th>
                </tr>
                <tr>
                  <td><ul>
                      <?php do { ?>
                      <li><a href="http://www.dmic-corp.fr/download/apps/<?php echo $row_log_bureautique['apps_name']; ?>"><?php echo $row_log_bureautique['apps_finalname']; ?></a></li>
                    <?php } while ($row_log_bureautique = mysql_fetch_assoc($log_bureautique)); ?>
                  </ul></td>
                </tr>
            </table></td>
            <td width="30%"><table width="100%" border="1" class="tab_cadrehov">
                <tr>
                  <th scope="col">M&eacute;tiers et D&eacute;veloppements</th>
                </tr>
                <tr>
                  <td><ul>
                      <?php do { ?>
                      <li><a href="http://www.dmic-corp.fr/download/apps/<?php echo $row_log_developpement['apps_name']; ?>"><?php echo $row_log_developpement['apps_finalname']; ?></a></li>
                    <?php } while ($row_log_developpement = mysql_fetch_assoc($log_developpement)); ?>
                  </ul></td>
                </tr>
            </table></td>
          </tr>
          <tr>
            <td><table width="100%" border="1" class="tab_cadrehov">
              <tr>
                <th scope="col">Jeux</th>
              </tr>
              <tr>
                <td><ul>
                  <?php do { ?>
                  <li><a href="http://www.dmic-corp.fr/download/apps/<?php echo $row_log_jeux['apps_name']; ?>"><?php echo $row_log_jeux['apps_finalname']; ?></a></li>
                  <?php } while ($row_log_jeux = mysql_fetch_assoc($log_jeux)); ?>
                </ul></td>
              </tr>
            </table></td>
            <td><table width="100%" border="1" class="tab_cadrehov">
              <tr>
                <th scope="col">R&eacute;seaux</th>
              </tr>
              <tr>
                <td><ul>
                  <?php do { ?>
                  <li><a href="http://www.dmic-corp.fr/download/apps/<?php echo $row_log_reseaux['apps_name']; ?>"><?php echo $row_log_reseaux['apps_finalname']; ?></a></li>
                  <?php } while ($row_log_reseaux = mysql_fetch_assoc($log_reseaux)); ?>
                </ul></td>
              </tr>
            </table></td>
            <td><table width="100%" border="1" class="tab_cadrehov">
              <tr>
                <th scope="col">Virtualisations</th>
              </tr>
              <tr>
                <td><ul>
                  <?php do { ?>
                  <li><a href="http://www.dmic-corp.fr/download/apps/<?php echo $row_log_virtualisation['apps_name']; ?>"><?php echo $row_log_virtualisation['apps_finalname']; ?></a></li>
                  <?php } while ($row_log_virtualisation = mysql_fetch_assoc($log_virtualisation)); ?>
                </ul></td>
              </tr>
            </table></td>
          </tr>
        </table>
      </div>
      <div class="TabbedPanelsContent">
        <p>
			<script type="text/javascript" src="inc/apps_xhr.js" charset="iso_8859-1"></script>
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
				$sql = "SELECT `appstype_id` AS `idt`, `apps_type_name` ".
					   "FROM `dmic_appstype` ".
					   "ORDER BY `apps_type_name`;";
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
						$types[$ligne['idt']] = $ligne['apps_type_name'];
					}
			?>
            <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="get" id="chgdept">
                <table width="30%" border="1" align="center" class="tab_cadrehov">
                  <tr>
                    <th width="15%" scope="row">Types</th>
                    <td width="15%"><select name="types" id="types" onchange="getApps(this.value);">
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
            <span id="blocApps"></span>
            <p align="center">&nbsp;</p>
        </p>
      </div>
    </div>
  </div>
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
mysql_free_result($log_administration);
 
mysql_free_result($log_bureautique);
 
mysql_free_result($log_developpement);
 
mysql_free_result($log_jeux);
 
mysql_free_result($log_reseaux);
 
mysql_free_result($log_virtualisation);
 
mysql_free_result($categorie);
 
mysql_free_result($profil_users);
?>