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

$type_texte_lecture = "%";
if (isset($_GET['idt'])) {
  $type_texte_lecture = $_GET['idt'];
}
$cycle_texte_lecture = "%";
if (isset($_GET['id_cycle'])) {
  $cycle_texte_lecture = $_GET['id_cycle'];
}
$oeuvre_texte_lecture = "%";
if (isset($_GET['id_oeuvres'])) {
  $oeuvre_texte_lecture = $_GET['id_oeuvres'];
}
$chapitre_texte_lecture = "%";
if (isset($_GET['id_chapitres'])) {
  $chapitre_texte_lecture = $_GET['id_chapitres'];
}
mysql_select_db($database_dmic, $dmic);
$query_lecture = sprintf("SELECT * FROM dmic_oeuvrespublication WHERE dmic_oeuvrespublication.type like %s AND dmic_oeuvrespublication.`cycle` like %s AND dmic_oeuvrespublication.oeuvres like %s AND dmic_oeuvrespublication.chapitres like %s", GetSQLValueString("%" . $type_texte_lecture . "%", "text"),GetSQLValueString("%" . $cycle_texte_lecture . "%", "text"),GetSQLValueString("%" . $oeuvre_texte_lecture . "%", "text"),GetSQLValueString("%" . $chapitre_texte_lecture . "%", "text"));
$lecture = mysql_query($query_lecture, $dmic) or die(mysql_error());
$row_lecture = mysql_fetch_assoc($lecture);
$type_texte_lecture = "-1";
if (isset($_GET['types'])) {
  $type_texte_lecture = $_GET['types'];
}
$cycle_texte_lecture = "-1";
if (isset($_GET['cycle'])) {
  $cycle_texte_lecture = $_GET['cycle'];
}
$oeuvre_texte_lecture = "-1";
if (isset($_GET['oeuvres'])) {
  $oeuvre_texte_lecture = $_GET['oeuvres'];
}
$chapitre_texte_lecture = "-1";
if (isset($_GET['chapitres'])) {
  $chapitre_texte_lecture = $_GET['chapitres'];
}
$version_texte_lecture = "-1";
if (isset($_GET['versions'])) {
  $version_texte_lecture = $_GET['versions'];
}
mysql_select_db($database_dmic, $dmic);
$query_lecture = sprintf("SELECT * FROM dmic_oeuvrespublication WHERE type = %s AND cycle = %s AND oeuvres = %s AND chapitres = %s AND id_pub = %s", GetSQLValueString($type_texte_lecture, "int"),GetSQLValueString($cycle_texte_lecture, "int"),GetSQLValueString($oeuvre_texte_lecture, "int"),GetSQLValueString($chapitre_texte_lecture, "int"),GetSQLValueString($version_texte_lecture, "int"));
$lecture = mysql_query($query_lecture, $dmic) or die(mysql_error());
$row_lecture = mysql_fetch_assoc($lecture);
$totalRows_lecture = mysql_num_rows($lecture);

echo("<?xml version=\"1.0\" encoding=\"iso-8859-1\"?>\n");
/* Variables de connexion : ajustez ces paramètres selon votre propre environnement */
$serveur = "dmiccorpglroot.mysql.db";
$admin   = "dmiccorpglroot";
$mdp     = "Password7";
$base    = "dmiccorpglroot";
?>
<!--[if lte IE 6]><link rel='stylesheet' href='/glpi/css/styles_ie.css' type='text/css' media='screen' >
<![endif]--><link rel='stylesheet' type='text/css' media='print' href='/glpi/css/print.css' >
<link rel='shortcut icon' type='images/x-icon' href='/glpi/pics/favicon.ico' >
<script type="text/javascript" src='/glpi/lib/extjs/adapter/ext/ext-base.js'></script>
<script type='text/javascript' src='/glpi/lib/extjs/ext-all.js'></script>
<link rel='stylesheet' type='text/css' href='/glpi/lib/extjs/resources/css/ext-all.css' media='screen' >
<link rel='stylesheet' type='text/css' href='/glpi/lib/extrajs/starslider/slider.css' media='screen' >
<link rel='stylesheet' type='text/css' href='/glpi/css/tab-scroller-menu.css' media='screen' >
<script type='text/javascript' src='/glpi/lib/tiny_mce/tiny_mce.js'></script><link rel='stylesheet' type='text/css' href='/glpi/css/ext-all-glpi.css' media='screen' >
<script type='text/javascript' src='/glpi/lib/extjs/locale/ext-lang-fr.js'></script>
<script type='text/javascript' src='/glpi/lib/extrajs/xdatefield.js'></script>
<script type='text/javascript' src='/glpi/lib/extrajs/TabScrollerMenu.js'></script>
<script type='text/javascript' src='/glpi/lib/extrajs/datetime.js'></script>
<script type='text/javascript' src='/glpi/lib/extrajs/spancombobox.js'></script>
<script type='text/javascript' src='/glpi/lib/extrajs/starslider/slider.js'></script>
<script type='text/javascript'>
//<![CDATA[ 
Ext.BLANK_IMAGE_URL = '/glpi/lib/extjs/s.gif';
 Ext.Updater.defaults.loadScripts = true;
Ext.UpdateManager.defaults.indicatorText='<\span class="loading-indicator center">En cours de chargement...<\/span>';
//]]> 
</script>
<!--[if IE]><script type='text/javascript'>
Ext.UpdateManager.defaults.indicatorText='<\span class="loading-indicator-ie">En cours de chargement...<\/span>';
</script>
<![endif]--><script type='text/javascript' src='/glpi/script.js'></script>
<script type='text/javascript' src='/glpi/plugins/positions/lib/plupload/plupload.full.js'></script>
<script type='text/javascript' src='/glpi/plugins/positions/lib/js/jquery-1.6.2.min.js'></script>
<script type='text/javascript' src='/glpi/plugins/positions/upload.js'></script>
<script type='text/javascript' src='/glpi/plugins/positions/positions.js'></script>
<script type='text/javascript' src='/glpi/plugins/positions/geoloc.js'></script>
<script type='text/javascript' src='/glpi/plugins/positions/lib/canvas/canvasXpress.min.js'></script>
<script type='text/javascript' src='/glpi/plugins/positions/lib/canvas/ext-canvasXpress.js'></script>
<script type='text/javascript' src='/glpi/plugins/positions/lib/canvas/color-field.js'></script>
<script type='text/javascript' src='/glpi/plugins/positions/lib/crop/jquery.color.js'></script>
<script type='text/javascript' src='/glpi/plugins/positions/lib/crop/jquery.Jcrop.js'></script>
<script type='text/javascript' src='/glpi/plugins/positions/lib/crop/jquery.Jcrop.min.js'></script>
<link rel='stylesheet' href='/glpi/plugins/positions/positions.css' type='text/css' media='screen'>
<link rel='stylesheet' href='/glpi/plugins/positions/lib/canvas/color-field.css' type='text/css' media='screen'>
<link rel='stylesheet' href='/glpi/plugins/positions/lib/crop/jquery.Jcrop.css' type='text/css' media='screen'>
<link rel='stylesheet' href='/glpi/plugins/positions/lib/crop/jquery.Jcrop.min.css' type='text/css' media='screen'>
<link rel='stylesheet' href='/glpi/plugins/connections/connections.css' type='text/css' media='screen'>
<link rel='stylesheet' href='/glpi/plugins/projet/projet.css' type='text/css' media='screen'>
<link href="../../Styles/Fluid%20Grid%20Layout/boilerplate.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="cycles_xhr.js" charset="iso_8859-1"></script>
<?php
/* Requête SQL de récupération des données de la première liste */
$sql = "SELECT `id` AS idt, `type_name` ".
       "FROM `dmic_typeoeuvres` ".
       "ORDER BY `type_name`;";
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
        $types[$ligne['idt']] = $ligne['type_name'];
    }
?>

<form action="<?php echo($_SERVER['PHP_SELF']); ?>" method="get" id="chgdept">
    <table width="650" border="1" align="center" class="tab_cadrehov">
      <tr>
        <th width="176" scope="row">Type d'oeuvres</th>
        <td width="458"><select name="types" id="types" onchange="getCycles(this.value);">
          <option value="vide">- - - Choisissez un type d'oeuvre - - -</option>
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
        <th scope="row">Cycle</th>
        <td><script type="text/javascript" src="oeuvres_xhr.js" charset="iso_8859-1"></script>
      <span id="blocCycles"></span><br /></td>
      </tr>
      <tr>
        <th scope="row">Oeuvres</th>
        <td><script type="text/javascript" src="chapitres_xhr.js" charset="iso_8859-1"></script>
      <span id="blocOeuvres"></span><br /></td>
      </tr>
      <tr>
        <th scope="row">Chapitres</th>
        <td><script type="text/javascript" src="versions_xhr.js" charset="iso_8859-1"></script>
        <span id="blocChapitres"></span><br />
        </td>
      </tr>
      <tr>
        <th scope="row">Versions</th>
        <td><span id="blocVersions"></span><br /></td>
      </tr>
    </table>
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
  <span class="center spaced">
  <textarea cols='120' rows='60' id='answer' name='answer'><?php echo $row_lecture['texte']; ?></textarea>
</span></p>
<form id="form1" method="post" action="">
  <label for="test"></label>
  <p><span class='center spaced'>
  <script language='javascript' type='text/javascript'>tinyMCE.init({
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
         theme_advanced_buttons3 : ''});</script></span>
</form>

<?php
mysql_free_result($lecture);
?>
