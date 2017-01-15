<?php require_once ('../../../ScriptLibrary/ban_ip.php') ;?>
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
<!-- InstanceEndEditable -->
<link href="../../../Styles/Fluid%20Grid%20Layout/boilerplate.css" rel="stylesheet" type="text/css">
<link href="../../../Styles/Fluid%20Grid%20Layout/test.css" rel="stylesheet" type="text/css">
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
<script src="../../../Styles/Fluid%20Grid%20Layout/respond.min.js"></script>
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
  <p align="center"><img src="/dmic-corp/images/logo2.jpg" alt="" width="307" height="230" border="0" /></p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS" size="3">Premier Final Fantasy développé sur console Sony, Final Fantasy VII est de loin l'épisode le plus apprécié des fans. Il vous place entre les mains de Clad, un mercenaire ex-membre du Soldat, et venant juste de rejoindre AVANLANCHE, un groupe dirigé par
    Barret et ayant pour but d'empécher la Shinra, une immense corporation, d'extraire l'énergie Mako de la Terre. L'énergie Mako est indispensable pour la survie de la planète, ce qui pousse AVANLANCHE a détruire les réacteurs Mako de l'immense ville de Midgar. Néanmoins, votre ennemi se révèlera en fait être Sephiroth,
    un personnage mystérieux mais extrèmement puissant.<br />
    <br />
    Final Fantasy VII... Sans doute le 1er RPG de la majorité d'entre vous. Et pour cause, ce septième volet de la saga fétiche de Square a democratisé le RPG sur notre continent. Sa traduction , bien que médiocre, dans la langue de Molière a augmenté ses chances de trouver un public dans notre beau pays. A noter que la
    version PAL (européenne) a beneficié directement de l'ajout des Armes d'Emeraude et de Rubis. Suite aux plaintes des fans nippons, ces ajouts seront disponibles sur l'Archipel avec la réedition du jeu, qui se nomme FF VII International. Une version PC a également vu le jour, assez anectodique car bourrée de bugs. Elle
    permettait en revanche de jouer avec Sephiroth !<br />
    <br />
    Le système de combat de FFVII se base sur des petites pierres appelées matérias. Celles-ci, placées sur vos armes et armures, vous permettent d'accéder à différentes capacités : magie, invocations, coups spéciaux, augmentation des points de vie ou de magie, etc. On note évidemment le retour des limites, ces furies
    permettant aux personnages d'accéder à des coups surpuissants.<br />
    <br />
    Final Fantasy VII marque l'apogée des mini-jeux dans la série : on y trouve en effet un immense parc d'attraction nommé Gold Saucer. Plein de petits jeux vous sont proposés, moyennant toutefois une certaine somme d'argent. On peut néanmoins y trouver certaines armes et limites ultimes des personnages.</font></p>
  <p align="center">&nbsp;</p>
  <p align="center"></p>
  <h1>&nbsp;</h1>
  <!-- end .content -->
<!-- InstanceEndEditable --></td>
      </tr>
    </table>
  </div>
  <div class="footer" id="LayoutDiv4"><!-- InstanceBeginRepeat name="footer" --><!-- InstanceBeginRepeatEntry -->
    <?php include('../../inc/footer/footer_users.inc.php');?>
  <!-- InstanceEndRepeatEntry --><!-- InstanceEndRepeat --></div>
</div>
</body>
<!-- InstanceEnd --></html>
