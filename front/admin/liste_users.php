<?php require_once ('../../ScriptLibrary/ban_ip.php') ;?>
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

if ((isset($_GET['id_inscription'])) && ($_GET['id_inscription'] != "")) {
  $deleteSQL = sprintf("DELETE FROM dmic_inscription WHERE id_inscription=%s",
                       GetSQLValueString($_GET['id_inscription'], "int"));

  mysql_select_db($database_dmic, $dmic);
  $Result1 = mysql_query($deleteSQL, $dmic) or die(mysql_error());
}

$maxRows_inscription = 10;
$pageNum_inscription = 0;
if (isset($_GET['pageNum_inscription'])) {
  $pageNum_inscription = $_GET['pageNum_inscription'];
}
$startRow_inscription = $pageNum_inscription * $maxRows_inscription;

mysql_select_db($database_dmic, $dmic);
$query_inscription = "SELECT * FROM dmic_inscription ORDER BY id_inscription DESC";
$query_limit_inscription = sprintf("%s LIMIT %d, %d", $query_inscription, $startRow_inscription, $maxRows_inscription);
$inscription = mysql_query($query_limit_inscription, $dmic) or die(mysql_error());
$row_inscription = mysql_fetch_assoc($inscription);

if (isset($_GET['totalRows_inscription'])) {
  $totalRows_inscription = $_GET['totalRows_inscription'];
} else {
  $all_inscription = mysql_query($query_inscription);
  $totalRows_inscription = mysql_num_rows($all_inscription);
}
$totalPages_inscription = ceil($totalRows_inscription/$maxRows_inscription)-1;

$maxRows_users = 10;
$pageNum_users = 0;
if (isset($_GET['pageNum_users'])) {
  $pageNum_users = $_GET['pageNum_users'];
}
$startRow_users = $pageNum_users * $maxRows_users;

mysql_select_db($database_dmic, $dmic);
$query_users = "SELECT * FROM dmic_users ORDER BY nom_user ASC";
$query_limit_users = sprintf("%s LIMIT %d, %d", $query_users, $startRow_users, $maxRows_users);
$users = mysql_query($query_limit_users, $dmic) or die(mysql_error());
$row_users = mysql_fetch_assoc($users);

if (isset($_GET['totalRows_users'])) {
  $totalRows_users = $_GET['totalRows_users'];
} else {
  $all_users = mysql_query($query_users);
  $totalRows_users = mysql_num_rows($all_users);
}
$totalPages_users = ceil($totalRows_users/$maxRows_users)-1;

mysql_select_db($database_dmic, $dmic);
$query_inscription_consultation = "SELECT * FROM dmic_inscription ORDER BY name ASC";
$inscription_consultation = mysql_query($query_inscription_consultation, $dmic) or die(mysql_error());
$row_inscription_consultation = mysql_fetch_assoc($inscription_consultation);
$totalRows_inscription_consultation = mysql_num_rows($inscription_consultation);

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
<script src="../../SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="../../SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css">
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
  <h1 align="center">Utilisateurs.</h1>
  <p align="center">&nbsp;</p>
  <div id="TabbedPanels1" class="TabbedPanels">
    <ul class="TabbedPanelsTabGroup">
      <li class="TabbedPanelsTab" tabindex="0">Statistiques</li>
      <li class="TabbedPanelsTab" tabindex="0">Liste utilisateurs</li>
      <li class="TabbedPanelsTab" tabindex="0">Nouvel utilisateur</li>
      <li class="TabbedPanelsTab" tabindex="0">Traitement des inscriptions</li>
    </ul>
    <div class="TabbedPanelsContentGroup">
      <div class="TabbedPanelsContent">
        <table width="80%" border="0" align="center">
          <tr>
            <td><table width="100%" border="1" class="tab_cadrehov">
              <tr>
                <th scope="col">Nouvelles inscriptions</th>
              </tr>
              <tr>
                <td><ul>
                  <?php do { ?>
                    <li><?php echo $row_inscription['login']; ?></li>
                    <?php } while ($row_inscription = mysql_fetch_assoc($inscription)); ?>
                </ul></td>
              </tr>
            </table></td>
            <td><table width="100%" border="1" class="tab_cadrehov">
              <tr>
                <th scope="col">Nouveaux utilisateurs</th>
              </tr>
              <tr>
                <td><ul>
                  <?php do { ?>
                  <li><?php echo $row_users['login']; ?></li>
                  <?php } while ($row_users = mysql_fetch_assoc($users)); ?>
                </ul></td>
              </tr>
            </table></td>
          </tr>
        </table>
      </div>
      <div class="TabbedPanelsContent">
        <p align="center">&nbsp;</p>
        <p>
          <script type="text/javascript" src="../inc/users_xhr.js" charset="iso_8859-1"></script>
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
				$sql = "SELECT `id` AS `idt`, `name_profils` ".
					   "FROM `dmic_profils_users` ".
					   "ORDER BY `name_profils`;";
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
						$types[$ligne['name_profils']] = $ligne['name_profils'];
					}
			?>
        <form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="get" id="chgdept">
          <table width="30%" border="1" align="center" class="tab_cadrehov">
            <tr>
              <th width="15%" scope="row">Types</th>
              <td width="15%"><select name="types" id="types" onchange="getUsers(this.value);">
                <option value="vide">- - - Profils - - -</option>
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
        <span id="blocUsers"></span>
        <p align="center">&nbsp;</p>
        <p></p>
      </div>
      <div class="TabbedPanelsContent">
      <form action="<?php echo $editFormAction; ?>" method="POST" name="form1" id="form1">
    <div align="center">
      <table width="293" border="1" class="tab_cadrehov">
        <tr>
          <th width="133" scope="col"><span class="Style7">Login</span></th>
          <td width="144" scope="col"><label>
            <input type="text" name="new_login" id="new_login" />
          </label></td>
        </tr>
        <tr>
          <th scope="row"><span class="Style7">Mot de passe</span></th>
          <td><label>
            <input type="password" name="new_mdp" id="new_mdp" />
          </label></td>
        </tr>
        <tr>
          <th scope="row"><span class="Style7">Nom</span></th>
          <td><label>
            <input type="text" name="new_name" id="new_name" />
          </label></td>
        </tr>
        <tr>
          <th scope="row"><span class="Style7">Pr&eacute;nom</span></th>
          <td><input type="text" name="new_prenom" id="new_prenom" /></td>
        </tr>
        <tr>
          <th scope="row"><span class="Style7">E Mail</span></th>
          <td><label>
            <input type="text" name="new_mail" id="new_mail" />
          </label></td>
        </tr>
        <tr>
          <th scope="row"><span class="Style7">Profil</span></th>
          <td><label>
            <select name="new_profil" id="new_profil">
              <?php
do {  
?>
              <option value="<?php echo $row_new_profil['name_profils']?>"><?php echo $row_new_profil['name_profils']?></option>
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
          <td><label>
            <input type="submit" name="submit" id="submit" value="Envoyer" />
          </label></td>
        </tr>
      </table>
    </div>
    <input type="hidden" name="MM_insert" value="form1" />
  </form>
      </div>
      <div class="TabbedPanelsContent">
      <table width="80%" border="1" align="center" class="tab_cadrehov">
    <tr>
      <th width="19%" scope="col"><div align="center">Adresse IP</div></th>
      <th width="19%" scope="col"><div align="center">Nom</div></th>
      <th width="20%" scope="col"><div align="center">Pr&eacute;nom</div></th>
      <th width="17%" scope="col"><div align="center">Login</div></th>
      <th width="17%" scope="col"><div align="center">E-mail</div></th>
      <th width="23%" scope="col"><div align="center">Raison</div></th>
      <th width="2%" scope="col"><div align="center"></div></th>
      <th width="2%" scope="col">&nbsp;</th>
      </tr>
    <?php do { ?>
      <tr>
        <th scope="row"><div align="center"><?php echo $row_inscription_consultation['addr_ip']; ?></div></th>
        <th scope="row"><div align="center"><?php echo $row_inscription_consultation['name']; ?></div></th>
        <td><div align="center"><?php echo $row_inscription_consultation['prenom']; ?></div></td>
        <td><div align="center"><?php echo $row_inscription_consultation['login']; ?></div></td>
        <td><div align="center"><?php echo $row_inscription_consultation['mail']; ?></div></td>
        <td><div align="center"><?php echo $row_inscription_consultation['raison']; ?></div></td>
        <td><div align="center"><a href="http://www.dmic-corp.fr/front/admin/inscription_traitement.php?id=<?php echo $row_inscription_consultation['id_inscription']; ?>"><img src="http://www.dmic-corp.fr/images/modif.png" width="29" height="29"></a></div></td>
        <td><div align="center"><a href="http://www.dmic-corp.fr/front/admin/liste_users.php?id_inscription=<?php echo $row_inscription_consultation['id_inscription']; ?>"><img src="http://www.dmic-corp.fr/images/showdeleted.png" width="16" height="16"></a></div></td>
      </tr>
      <?php } while ($row_inscription_consultation = mysql_fetch_assoc($inscription_consultation)); ?>
  </table>
      </div>
    </div>
</div>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>

<!-- InstanceEndEditable --></div>
<div class="sidebar2" id="LayoutDiv5" align="center"><!-- InstanceBeginEditable name="sidebar2" -->
    <?php include ('../inc/sidebar/sidebar2_pub.inc.php'); ?>
<!-- InstanceEndEditable --></div>
<div id="LayoutDiv6" class="footer"><!-- InstanceBeginEditable name="footer" -->
  <?php include('../inc/footer/footer_users.inc.php');?>
<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
</script>
<!-- InstanceEndEditable --></div>
</div>
</body>
<!-- InstanceEnd --></html>
<?php
mysql_free_result($inscription);

mysql_free_result($users);

mysql_free_result($inscription_consultation);
?>
