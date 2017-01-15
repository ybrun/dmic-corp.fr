<?php require_once ('../../../../ScriptLibrary/ban_ip.php') ;?>
<?php
	session_start();
?>
<!doctype html>
<html class=""><!-- InstanceBegin template="/Templates/modele_dmic.dwt.php" codeOutsideHTMLIsLocked="false" -->
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- InstanceBeginEditable name="doctitle" -->
<title>DMIC Corporation</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<style type="text/css">
.Style2 {font-family: "Times New Roman", Times, serif}
.Style3 {color: #FFFFCC}
.Style5 {color: #000000}
.Style5 {color: #660033; }
</style>
<script src="/dmic-corp/SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="/dmic-corp/SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css">
<!-- InstanceEndEditable -->
<link href="../../../../Styles/Fluid%20Grid%20Layout/boilerplate.css" rel="stylesheet" type="text/css">
<link href="../../../../Styles/Fluid%20Grid%20Layout/test.css" rel="stylesheet" type="text/css">
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
<script src="../../../../Styles/Fluid%20Grid%20Layout/respond.min.js"></script>
</head>
<body>
<div class="gridContainer clearfix">
  <div class="header" id="LayoutDiv1"><!-- InstanceBeginEditable name="header" -->
    <?php
	if ((isset($_SESSION['MM_Username'])) && (!empty($_SESSION['MM_Username'])))
	{
		// le login a été enregistré dans la session, j'affiche le menu admin
		if ($_SESSION['MM_UserGroup']='1')
			{include ('../header/header_admin.inc.php');}
	}
	else
	{
		// pas de login en session : proposer la connexion
		include ('../header/header_users.inc.php');
	}
?>
    <!-- end .header -->
<!-- InstanceEndEditable --></div>
  <div class="content" id="LayoutDiv3">
    <table width="100%" border="0">
      <tr>
        <td width="15%"><!-- InstanceBeginEditable name="sidebar1" -->
  <p> Les liens ci-dessus illustrent une structure de navigation de base à l'aide d'une liste simple dont le style est défini par CSS. Vous pouvez l'utiliser comme point de départ et modifier les propriétés afin de définir l'apparence de votre choix. Si vous avez besoin de menus de survol, créez-les à l'aide d'un menu Spry, d'un widget de menu téléchargé sur Adobe Exchange ou de diverses solutions JavaScript ou CSS.</p>
  <p>Si vous voulez placer la navigation en haut, déplacez l'élément ul.nav en haut de la page et recréez la mise en forme.</p>
  <!-- end .sidebar1 -->
<!-- InstanceEndEditable --></td>
        <td width="80%"><!-- InstanceBeginEditable name="content" -->
  <h1 align="center" class="Style3">Auteurs.</h1>
  <p align="center" class="Style3">&nbsp;</p>
  <div id="TabbedPanels1" class="TabbedPanels">
    <ul class="TabbedPanelsTabGroup Style2">
      <li class="TabbedPanelsTab" tabindex="0">Yohann B.</li>
      <li class="TabbedPanelsTab Style5" tabindex="0">
        <div align="justify">Guilhem L.</div>
        </li>
      </ul>
    <div class="TabbedPanelsContentGroup Style5">
      <div class="TabbedPanelsContent Style2">
        <p align="justify">Yohann B. alias Yank Elam, est né le 08 mars 1984 à Bobigny. Il passa son enfance à Nemours, une ville de campagne de sud Seine-et-Marne.</p>
        <p align="justify" class="Style5">C'est durant son adolescence, en 3ème, qu'il commence l'écriture en 1999 de &quot;L'Amour, poèmes romantiques&quot; (in review, Ed. le Manuscrit.com) puis en 2000 &quot;Le Fils des Dragons Ecarlates - 1: Therra, la fusion entre deux mondes&quot;.</p>
        <p align="justify" class="Style5">Après le lycée, il commence ses études de médecine mais il échouera aux examens. C'est durant cette année (2004-2005) qu'il élabore le scénario de &quot;Les Dragons Ecarlates - 1: Une menace venant de l'Ouest&quot;, et masterisa un jeu de rôle dans cette univers.</p>
        <p align="justify" class="Style5">Après la médecine, il débutta une Licence de Sciences et Technologies - Sciences de la Vie, spécialité Recherche (2005 - 2008) puis un Master de Sciences et Technologies - Biologie Intégrative et Physiologie, spécialité Neurosciences cognitivo-comportementales (2008-2010). Suite à l'obtention de son diplôme, il travailla durant un an à l'Institut du Cerveau et de la Moelle Epinière (ICM) de l'Hôpital Pitié-Salpétrière, au sein de l'équipe des Dr Luc Mallet &amp; Jérôme Yelnik (BEBG Team) afin d'élaborer un projet de thèse (qu'il n'aura pas). Il quitta alors cette équipe le 01 septembre 2011.</p>
        <p align="justify" class="Style5">C'est à partir de Septembre 2011 et son inscription à Cocyclics qu'il reprit la réécriture du tome 1 de &quot;Le Fils des Dragons Ecarlates&quot;. Il a commencé à élaborer un scénario pour &quot;L'Héritage des Dragons Ecarlates&quot; et une collaboration avec Guilhem Loupiac dans l'écriture de la Genèse du Fils des Dragons Ecarlates.</p>
        </div>
      </div>
    </div>
  <h1>&nbsp;</h1>
  <!-- end .content -->
<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
</script>
<!-- InstanceEndEditable --></td>
      </tr>
    </table>
  </div>
  <div class="footer" id="LayoutDiv4"><!-- InstanceBeginRepeat name="footer" --><!-- InstanceBeginRepeatEntry -->
    <?php include('../../../inc/footer/footer_users.inc.php');?>
  <!-- InstanceEndRepeatEntry --><!-- InstanceEndRepeat --></div>
</div>
</body>
<!-- InstanceEnd --></html>
