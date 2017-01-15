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
  <h1 align="center" class="Style3">Personnages.</h1>
  <p align="center" class="Style3">&nbsp;</p>
  <div id="TabbedPanels1" class="TabbedPanels">
    <ul class="TabbedPanelsTabGroup">
      <li class="TabbedPanelsTab" tabindex="0">Les Dragons Ecarlates</li>
      <li class="TabbedPanelsTab" tabindex="0">L'Héritage des Dragons Ecarlates</li>
      <li class="TabbedPanelsTab" tabindex="0">Le Fils des Dragons Ecarlates</li>
      </ul>
    <div class="TabbedPanelsContentGroup">
      <div class="TabbedPanelsContent">
        <div id="TabbedPanels2" class="TabbedPanels">
          <ul class="TabbedPanelsTabGroup">
            <li class="TabbedPanelsTab" tabindex="0">Arthas</li>
            <li class="TabbedPanelsTab" tabindex="0">Atalant</li>
            <li class="TabbedPanelsTab" tabindex="0">Dark</li>
            <li class="TabbedPanelsTab" tabindex="0">Eärendil</li>
            <li class="TabbedPanelsTab" tabindex="0">Lenna</li>
            <li class="TabbedPanelsTab" tabindex="0">Le Prince Yank Elam</li>
            <li class="TabbedPanelsTab" tabindex="0">Ménélaque</li>
            <li class="TabbedPanelsTab" tabindex="0">Mike</li>
            <li class="TabbedPanelsTab" tabindex="0">Ragnarok</li>
            <li class="TabbedPanelsTab Style2" tabindex="0"> Parnël Tüceïn</li>
            </ul>
          <div class="TabbedPanelsContentGroup">
            <div class="TabbedPanelsContent Style2">
              <div align="justify" class="Style2">
                <div align="justify">Arthas est un roublard, et en même temps un orc vampirisé. Orphelin, il avait été mis dans un monastère érunienne près de Telrunya, et c'est la qu'il apprit à respecter la vie, et gagna en sagesse.<br />
                  Il a très vite été abandonné à lui même à cause de son énorme appétit et sa grande taille qui était hors norme même chez les orcs, il mesurait à ses 16 ans 2m20, et possédait une force surnaturelle, il partit à la chasse aux vampires à ses 18 ans pour devenir un homme, c'est là qu'il a subi l'étreinte et s'est rejoint aux hordes des vampires. Il appris à chasser, et se perfectionna dans l'art de la Danse et du Chant.<br />
                  A ses 22 ans, devenu mercenaire Arthas s'est engagé comme batteur chez Les Vaches qui pissent et après le destruction du groupe par un golem des montagne lors d'un concert, , il tomba amoureux de Fanny, et lui écrivit des poème sous le nom de Keats, tout en errant dans les forets du continent comme un Fantôme Hanté, avant de rencontrer Yank et ses ami.<br />
                  Il accompagne ses compagnon dans un seul but : retrouver Fanny et lui avouer son amour.</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <h1>&nbsp;</h1>
  <!-- end .content -->
<script type="text/javascript">
var TabbedPanels2 = new Spry.Widget.TabbedPanels("TabbedPanels2");
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
