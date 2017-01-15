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
<style type="text/css">
.Style3 {color: #FFFFCC}
</style>
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
  <p align="center"><font color="#FFFFFF" size="2"><img src="/dmic-corp/images/Image24.gif" alt="" width="552" height="368" />&nbsp;</font></p>
  <p align="center">&nbsp;</p>
  <font FACE="Baskerville Old Face" SIZE="6">
  <p align="center"></font><b><i><u><font face="Baskerville Old Face" size="6" color="#FF0000">BIENVENUE DANS LE MONDE MAGIQUE DE «&nbsp;HEROS 3&nbsp;»THE RESTORATION OF ERATHIA</font></u></i></b></p>
  <p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">HEROS 3 est un jeu de stratégie en tour par tour&nbsp;.vous possedé une ville qu il va falloire developer avec des battiment qui vont vous servir a construire votre armée.vous pourer ammeliore vos batiments pour que vos armées soit plus forte et
    composées de plus fortes créatures</font></p>
  <p align="center">&nbsp;</p>
  <p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">L’HISTOIRE&nbsp;:les humain reviennes de
    guere, dirigés par la fille du roi&nbsp;.une fois arrivés vous decouvrer que le royaume de votre père est completement ravagé et vous voulé le vanger .en prenant les humains votre destinée sera de vangé
    votre père.en prenant les hadès (seigneurs du mal ex&nbsp;:satan)vous devrer tenir votre royaume.en prenant les donjon (des bètes alliées au
    hades) vous serés indirectement les alliés des hades.en prenent les tours(alliées au humains) vous serés indirectement les alliés des humains&nbsp;.si vous prener les rempares vous
    sere indirectement alliés avec les humains . si vous prené les necropoles(mort-vivants) vous serer indirectement alliés avec les hadès. La dernière campagne vous serés allier directements avec vos alliés et se sera la guere avec vos enemis se sera la mission la plus difficile du jeu.a se moment du jeu vous seré les
    humains</font></p>
  <p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">LES MONSTRES DONT VOUS AUREZ LA POSIBILITE DE VOUS SERVIRE AVEC DIFERANTES ARMEES(toutes les unitées que vous aller voir sont améliorés)</font></p>
  <p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">CHATEAU(humains)</font></p>
  <table border="1" cellspacing="1" cellpadding="4" width="563">
    <tr>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">nom</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">attaque</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">deffence</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">Degat</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">Points de vie</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">vittesse</font></p></td>
    </tr>
    <tr>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">Hall bardier</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">6</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">5</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">2-3</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">10</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">5</font></p></td>
    </tr>
    <tr>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">Grand arbalètrié</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">6</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">3</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">2-3</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">10</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">6</font></p></td>
    </tr>
    <tr>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">Griffons royaux</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">9</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">9</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">3-6</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">25</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">9</font></p></td>
    </tr>
    <tr>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">paladin</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">12</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">12</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">7-10</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">35</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">6</font></p></td>
    </tr>
    <tr>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">zélote</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">12</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">10</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">10-12</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">30</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">7</font></p></td>
    </tr>
    <tr>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">champion</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">16</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">16</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">20-25</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">100</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">9</font></p></td>
    </tr>
    <tr>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">archange</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">30</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">30</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">50</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">250</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">18</font></p></td>
    </tr>
  </table>
  <p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">REMPARES (druides)</font></p>
  <table border="1" cellspacing="1" cellpadding="4" width="563">
    <tr>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">nom</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">attaque</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">deffence</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">dégat</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">Point de vie</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">vittesse</font></p></td>
    </tr>
    <tr>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">Capitaine centaure</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">6</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">3</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">2-3</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">10</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">8</font></p></td>
    </tr>
    <tr>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">Nain guerier</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">7</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">7</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">2-4</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">20</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">5</font></p></td>
    </tr>
    <tr>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">Grand elfe</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">9</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">5</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">3-5</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">15</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">7</font></p></td>
    </tr>
    <tr>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">Pégase d’argent</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">9</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">10</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">5-9</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">30</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">12</font></p></td>
    </tr>
    <tr>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">Soldat sylvanien</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">9</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">12</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">10-14</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">65</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">4</font></p></td>
    </tr>
    <tr>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">Licorne de guère</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">15</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">14</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">18-22</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">110</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">9</font></p></td>
    </tr>
    <tr>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">Dragon d’or</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">27</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">27</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">40-50</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">250</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">16</font></p></td>
    </tr>
  </table>
  <p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">TOUR(mages)</font></p>
  <table border="1" cellspacing="1" cellpadding="4" width="563">
    <tr>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">nom</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">attaque</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">deffence</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">dégat</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">Point de vie</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">vittesse</font></p></td>
    </tr>
    <tr>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">Maitre lutin</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">4</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">4</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">1-2</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">4</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">5</font></p></td>
    </tr>
    <tr>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">Gargouille d’obsidien</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">7</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">7</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">2-3</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">16</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">9</font></p></td>
    </tr>
    <tr>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">Golem de fer</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">9</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">10</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">4-5</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">35</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">5</font></p></td>
    </tr>
    <tr>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">archimage</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">12</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">9</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">7-9</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">30</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">7</font></p></td>
    </tr>
    <tr>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">génie</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">12</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">12</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">13-16</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">40</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">11</font></p></td>
    </tr>
    <tr>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">Reine naga</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">16</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">13</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">30</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">110</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">7</font></p></td>
    </tr>
    <tr>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">titan</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">24</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">24</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">40-60</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">300</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">11</font></p></td>
    </tr>
  </table>
  <p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">HADES(démons)</font></p>
  <table border="1" cellspacing="1" cellpadding="4" width="563">
    <tr>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">nom</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">attaque</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">deffence</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">dégat</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">Point de vie</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">vittesse</font></p></td>
    </tr>
    <tr>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">familier</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">4</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">4</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">1-2</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">4</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">7</font></p></td>
    </tr>
    <tr>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">magog</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">7</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">4</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">2-4</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">13</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">6</font></p></td>
    </tr>
    <tr>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">cerbère</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">10</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">8</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">2-5</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">25</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">8</font></p></td>
    </tr>
    <tr>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">Démon cornu</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">10</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">10</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">7-9</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">40</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">6</font></p></td>
    </tr>
    <tr>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">Seigneur des abimes</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">13</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">13</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">13-17</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">45</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">7</font></p></td>
    </tr>
    <tr>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">Sultan éfrit</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">16</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">14</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">16-24</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">90</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">13</font></p></td>
    </tr>
    <tr>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">archidiable</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">26</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">28</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">30-40</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">200</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">17</font></p></td>
    </tr>
  </table>
  <p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">BASTION(bètes sanguinaires)</font></p>
  <table border="1" cellspacing="1" cellpadding="4" width="563">
    <tr>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">nom</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">attaque</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">deffence</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">dégat</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">Point de vie</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">vittesse</font></p></td>
    </tr>
    <tr>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">hobgobelin</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">5</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">3</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">1-2</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">5</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">7</font></p></td>
    </tr>
    <tr>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">pillard</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">8</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">5</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">3-4</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">10</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">8</font></p></td>
    </tr>
    <tr>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">Chef orque</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">8</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">4</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">2-5</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">20</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">5</font></p></td>
    </tr>
    <tr>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">Ogre mage</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">13</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">7</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">6-12</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">60</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">5</font></p></td>
    </tr>
    <tr>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">Rock foudroyant</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">13</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">11</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">11-15</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">60</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">11</font></p></td>
    </tr>
    <tr>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">Roi cyclope</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">17</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">13</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">16-20</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">70</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">8</font></p></td>
    </tr>
    <tr>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">Belemott royal</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">19</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">19</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">30-50</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">300</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">9</font></p></td>
    </tr>
  </table>
  <p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">FORTERESSE(vivant dans les marais)</font></p>
  <table border="1" cellspacing="1" cellpadding="4" width="563">
    <tr>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">nom</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">attaque</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">deffence</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">dégat</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">Point de vie</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">vittesse</font></p></td>
    </tr>
    <tr>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">Gnoll maraudeur</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">4</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">6</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">2-3</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">6</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">5</font></p></td>
    </tr>
    <tr>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">Guerrier lézard</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">5</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">7</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">2-3</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">12</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">5</font></p></td>
    </tr>
    <tr>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">Guèpe dragon</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">6</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">8</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">2-5</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">20</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">13</font></p></td>
    </tr>
    <tr>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">Grand basilic</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">12</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">12</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">6-10</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">40</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">7</font></p></td>
    </tr>
    <tr>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">Grand gorgone</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">11</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">16</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">12-16</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">70</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">6</font></p></td>
    </tr>
    <tr>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">Monarque wivem</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">14</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">14</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">18-22</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">70</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">11</font></p></td>
    </tr>
    <tr>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">pyrohydre</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">18</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">20</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">25-45</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">250</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">7</font></p></td>
    </tr>
  </table>
  <p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">NECROPOLE(morts-vivants)</font></p>
  <table border="1" cellspacing="1" cellpadding="4" width="563">
    <tr>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">nom</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">attaque</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">deffence</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">dégat</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">Point de vie</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">vittesse</font></p></td>
    </tr>
    <tr>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">Guerier squelette</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">6</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">6</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">1-3</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">6</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">5</font></p></td>
    </tr>
    <tr>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">zombie</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">5</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">5</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">2-3</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">20</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">4</font></p></td>
    </tr>
    <tr>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">spectre</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">7</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">7</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">3-5</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">18</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">7</font></p></td>
    </tr>
    <tr>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">Seigneur vampire</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">10</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">10</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">5-8</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">40</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">9</font></p></td>
    </tr>
    <tr>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">Grande liche</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">13</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">10</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">11-15</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">40</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">7</font></p></td>
    </tr>
    <tr>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">Chevaliers de l’effroi</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">18</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">18</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">15-30</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">120</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">9</font></p></td>
    </tr>
    <tr>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">Dragon fantome</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">19</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">17</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">25-50</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">200</font></p></td>
      <td width="17%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">14</font></p></td>
    </tr>
  </table>
  <p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">DONJON(représentation du mal)</font></p>
  <table border="1" cellspacing="1" cellpadding="4" width="563">
    <tr>
      <td width="19%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">nom</font></p></td>
      <td width="16%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">attaque</font></p></td>
      <td width="16%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">deffence</font></p></td>
      <td width="16%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">dégat</font></p></td>
      <td width="16%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">Point de vie</font></p></td>
      <td width="16%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">vittesse</font></p></td>
    </tr>
    <tr>
      <td width="19%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">Troglodite infernale</font></p></td>
      <td width="16%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">5</font></p></td>
      <td width="16%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">4</font></p></td>
      <td width="16%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">1-3</font></p></td>
      <td width="16%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">6</font></p></td>
      <td width="16%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">5</font></p></td>
    </tr>
    <tr>
      <td width="19%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">Harpie sinistre</font></p></td>
      <td width="16%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">6</font></p></td>
      <td width="16%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">6</font></p></td>
      <td width="16%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">1-4</font></p></td>
      <td width="16%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">14</font></p></td>
      <td width="16%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">9</font></p></td>
    </tr>
    <tr>
      <td width="19%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">Yeux démoniaques</font></p></td>
      <td width="16%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">10</font></p></td>
      <td width="16%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">8</font></p></td>
      <td width="16%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">3-5</font></p></td>
      <td width="16%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">22</font></p></td>
      <td width="16%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">7</font></p></td>
    </tr>
    <tr>
      <td width="19%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">Reine méduse</font></p></td>
      <td width="16%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">10</font></p></td>
      <td width="16%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">10</font></p></td>
      <td width="16%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">6-8</font></p></td>
      <td width="16%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">30</font></p></td>
      <td width="16%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">6</font></p></td>
    </tr>
    <tr>
      <td width="19%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">Roi minautaure</font></p></td>
      <td width="16%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">15</font></p></td>
      <td width="16%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">15</font></p></td>
      <td width="16%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">12-20</font></p></td>
      <td width="16%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">50</font></p></td>
      <td width="16%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">8</font></p></td>
    </tr>
    <tr>
      <td width="19%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">scorpicor</font></p></td>
      <td width="16%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">16</font></p></td>
      <td width="16%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">14</font></p></td>
      <td width="16%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">14-20</font></p></td>
      <td width="16%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">80</font></p></td>
      <td width="16%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">11</font></p></td>
    </tr>
    <tr>
      <td width="19%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">Dragon noir</font></p></td>
      <td width="16%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">25</font></p></td>
      <td width="16%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">25</font></p></td>
      <td width="16%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">40-50</font></p></td>
      <td width="16%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">300</font></p></td>
      <td width="16%" valign="top"><p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">15</font></p></td>
    </tr>
  </table>
  <p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">LE CLASSEMENT DES TROIS MEILLEURS UNITEES</font></p>
  <p align="center"><font face="Baskerville Old Face" size="4">1)ARCHANGE</font></p>
  <p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">2)DRAGON D’OR</font></p>
  <p align="center"><font face="Baskerville Old Face" size="4">3)TITAN</font></p>
  <p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF">LE CLASSEMENT DES TROIS MOIN BONNES UNITEES</font></p>
  <p align="center"><font face="Baskerville Old Face" size="4">1°MAITRE LUTIN</font></p>
  <p align="center"><font face="Baskerville Old Face" size="4">2°FAMILIER</font></p>
  <p align="center"><font face="Baskerville Old Face" size="4">3°HOBGOBELIN</font></p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <u>
  <p align="center"><font face="Baskerville Old Face" size="4" color="#FFFFFF"><a href="mailto:tousport@aol.com">tousport@aol.com</a></font></u><font face="Baskerville Old Face" size="4" color="#FFFFFF"> si vous voulez le résumé d’un jeu ou des codes ou n’importe quoi contacter moi</font></p>
  <p align="center"><b><i><u><font face="Baskerville Old Face" color="#FF0000">marchand jeremy</font></u></i></b></p>
  <h1 class="Style3"></h1>
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
