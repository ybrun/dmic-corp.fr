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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "chgdept")) {
  $insertSQL = sprintf("INSERT INTO dmic_actus (categorieslvl1, oeuvres, categorieslvl2, sujet_name, sujet_texte, sujet_auteur, sujet_date) VALUES (%s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['types'], "int"),
					   GetSQLValueString($_POST['actusoeuvres'], "int"),
					   GetSQLValueString($_POST['actuscategorieslvl2'], "int"),
					   GetSQLValueString($_POST['sujet'], "text"),
                       GetSQLValueString($_POST['answer'], "text"),
                       GetSQLValueString($_POST['auteur'], "text"),
					   GetSQLValueString($_POST['date'], "date"));

  mysql_select_db($database_dmic, $dmic);
  $Result1 = mysql_query($insertSQL, $dmic) or die(mysql_error());

  $insertGoTo = "/geek-zone/geek_zone_actus.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

echo("<?xml version=\"1.0\" encoding=\"iso-8859-1\"?>\n");
/* Variables de connexion : ajustez ces paramètres selon votre propre environnement */
$serveur = "dmiccorpglroot.mysql.db";
$admin   = "dmiccorpglroot";
$mdp     = "Password7";
$base    = "dmiccorpglroot";
?>

<link href="../../Styles/Fluid%20Grid%20Layout/boilerplate.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../inc/actusoeuvres_xhr.js" charset="iso_8859-1"></script>
<?php
/* Requête SQL de récupération des données de la première liste */
$sql = "SELECT `id_lvl1` AS idt, `categorieslvl1_name` ".
	   "FROM `dmic_actuscategorieslvl1` ".
	   "ORDER BY `categorieslvl1_name`;";
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
		$types[$ligne['idt']] = $ligne['categorieslvl1_name'];
	}
?>
<form name="chgdept" action="<?php echo $editFormAction; ?>" method="POST" id="chgdept">
    <table width="650" border="1" align="center" class="tab_cadrehov">
      <tr>
        <th width="146" scope="row"><div align="center"><strong>Type d'actus sur</strong></div></th>
        <td width="488"><select name="types" id="types" onchange="getActusoeuvres(this.value);">
          <option value="vide">- - - Cat&eacute;gories - - -</option>
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
          <a href="/front/geek-zone/new_categorieslvl1_actus.php"><img src="/images/add_dropdown.png" width="11" height="11"></a>
          <!-- ICI, le secret : on met un bloc avec un id ou va s'ins&eacute;rer le code de
         la seconde liste d&eacute;roulande --></td>
      </tr>
      <tr>
        <th scope="row"><div align="center"><strong>Concerne</strong></div></th>
        <td><script type="text/javascript" src="../inc/actuscategorieslvl2_xhr.js" charset="iso_8859-1"></script>
            <span id="blocActusoeuvres"></span><br /><a href="/front/geek-zone/new_oeuvres_actus.php"><img src="/images/add_dropdown.png" width="11" height="11"></a></td>
      </tr>
      <tr>
        <th scope="row"><div align="center">Actualit&eacute;s</div></th>
        <td>
            <span id="blocActuscategorieslvl2"></span><br /><a href="/front/geek-zone/new_categorieslvl2_actus.php"><img src="/images/add_dropdown.png" width="11" height="11"></a></td>
      </tr>
      <tr>
        <th scope="row"><div align="center"><strong>Sujets</strong></div></th>
        <td><span id="blocActussujet">
          <input name="sujet" type="text" id="sujet" size="40" />
        </span></td>
      </tr>
      <tr>
        <th scope="row"><div align="center">Auteurs</div></th>
        <td><label for="auteur"></label>
        <input name="auteur" type="text" id="auteur" size="40" />
        </td>
      </tr>
      <tr>
        <th scope="row"><div align="center">Date</div></th>
        <td><?php $date = date("Y-m-d");
				  echo $date; ?>
        <input name="date" type="hidden" id="date" value="<?php echo $date; ?>"></td>
      </tr>
      <tr>
        <th colspan="2" scope="row"><div class='center spaced'><label for="test"></label>
  <p><script language='javascript' type='text/javascript'>tinyMCE.init({
         language : 'fr',
         mode : 'exact',
         elements: 'answer',
         valid_elements: '*[*]',
         browser_spellcheck : true,
         plugins : 'table,directionality,searchreplace',
         theme : 'advanced',
         entity_encoding : 'raw', theme_advanced_buttons1_add : 'ltr,rtl,search,replace',theme_advanced_toolbar_location : 'top',
         theme_advanced_toolbar_align : 'left',
	 theme_advanced_statusbar_location : 'none',
         theme_advanced_buttons1 : 'bold,italic,underline,strikethrough,fontsizeselect,formatselect,separator,justifyleft,justifycenter,justifyright,justifyfull,bullist,numlist,outdent,indent',
         theme_advanced_buttons2 : 'forecolor,backcolor,separator,hr,separator,link,unlink,anchor,separator,tablecontrols,undo,redo,cleanup,code,separator',
         theme_advanced_buttons3 : ''});</script><span class='center spaced'>
  <textarea cols='120' rows='60' id='answer' name='answer'></textarea></span></div></p></th>
      </tr>
      <tr>
        <th colspan="2" scope="row"><div align='center'><input type="submit" name="publish" id="publish" value="Publier" /></div></th>
      </tr>
    </table>
    <input type="hidden" name="MM_insert" value="chgdept" />
</form>
<p>
  <?php
}
else
{
    /*  Si vous arrivez ici, vous avez un gros problème avec la connexion au serveur de base de données */
?>
  <?php
}
?>
<p>
