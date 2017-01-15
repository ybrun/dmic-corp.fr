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
  <p align="center"><img src="/dmic-corp/images/logoFFT.jpg" alt="" width="278" height="113" border="0" /></p>
  <font face="Comic Sans MS" color="#FFFFFF">Final Fantasy Tactics est le deuxième Final Fantasy à voir le jour sur Playstation et sort le 29 janvier 1998. Son aspect tactique le rend radicalement différent des autres Final
Fantasy. C'est pourquoi Square a longuement hésité à le sortir sous ce nom. Quoiqu'il en soit, on ne
pourra jamais reprocher ce choix à Square, puisque Final Fantasy Tactics honore sans conteste sa série phare !<br />
<br />
La guerre de cinquante ans vient de se terminer, les anciens chevaliers deviennent des voleurs et des mercenaires. Le Roi Atkascha est de plus en plus malade. Avec ses seuls enfants comme héritiers, Ovelia sa fille et Orinas son fils, le royaume
d'Ivalice plonge doucement dans la guerre civile entre le Prince Goltana et le Duc
Larg. Ces derniers se battent pour le trône. La Lion War commence alors...<br />
<br />
Vous êtes Ramza, le plus jeune des frères Beoulve, une famille de nobles et grands guerriers connue à travers tout le pays. Vous êtes engagés dans la Hokuten Soldiers Academy
d'Ivalice et combattez la Death Corps, tandis que la Lion War commence lentement. Après un sérieux accident à Fort
Zeakden, vous, Ramza, êtes
poussés directement au centre de la plus grande guerre de toute l'histoire d'Ivalice...<br />
<br />
Comme son nom l'indique, Final Fantasy Tactics est Tactical-RPG. Il offre un excellent système de jobs - chevaliers, archers, prêtres, voleurs, mages... - que l'on n'avait plus vu dans la série depuis Final Fantasy V. Chaque bataille, qui peut durer plusieurs dizaines de minutes, vous demandera une stratégie bien particulière.<br />
<br />
Sans être époustanflant graphiquement, Final Fantasy Tactics est très joli. Les batailles et les parties du scénario sont très agréables à suivre. Vous évoluez sur des damiers en 3D où les reliefs sont apparents et où vous pouvez modifier l'angle de vue. Les animations des objets, magies, invocations sont elles aussi
très belles.<br />
<br />
Musicalement, FFT est particulièrement réussi ! Etant donné le temps que l'on peut passer sur un combat, c'est vraiment un point important. Les <a href="file:///E:/Mes%20sites%20webs/Dark%20mulau's%20RPG%20Parody/FFTmusique.htm">musiques</a>, composées par Hitoshi Sakimoto et Masaharu
Iwata, sont tantôt dynamiques et rythmées, collant aux batailles, tantôt douces pour les moments
plus calmes.<br />
<br />
En définitive, Final Fantasy Tactics est un excellent T-RPG qui vous tiendra en haleine une quarantaine d'heures grâce à son scénario, ses graphismes et ses musiques !</font>
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
