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
.Style7 {color: #660033; }
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
  <p align="center"><span class="Style7"><strong><u><i><font face="Comic Sans MS" size="7">YOSHITAKA AMANO</font></i></u></strong><u><i><font face="Comic Sans MS" size="7"><br />
  </font></i></u></span></p>
  <p class="Style7"><font face="Comic Sans MS"><strong>Bienvenue à ma page consacrée à Maître Amano, un artiste comme on n'en voit plus de nos jours. Avant tout un mangaka bien à part avec un style qui lui est propre, c'est comme vous le savez sûrement un character designer de jeux vidéo et plus particulièrement de Final
    Fantasy 6. Il est le character designer de Final Fantasy 9, la prochaine bombe de Square, mais vu les premières images et infos qu'on a de ce jeu, il semblerait qu'il n'ait participé qu'aux dessins sur les CD du jeu parce qu'en toute franchise, on reconnaît absolument pas son style dans le jeu! Vous trouverez ici certains
    extraits de ses art-books à télécharger sur votre disque dur et, si vous ne le connaissez pas encore ce maître, vous avez le droit à une biographie de cet artiste qu'on ne connaît pas très bien ici, en Europe. D'ailleurs, j'me demande pourquoi est-ce que Monsieur Amano boude l'Europe, les Ricains et les Japs sont décidément
    les personnes qui comptent le plus pour lui... Si vous aimez ces dessins, je vous conseille vivement d'acheter Final Fantasy Japan (305 Frs chez Tonkam à Paris dans le 11ème), un art-book consacré à Final Fantasy (la plupart des extraits de cette page sont tirés de cet art-book) et le Sandman spécialement dessiné par
    Yoshitaka Amano (236 Frs à la FNAC). Pour connaître les adresses des lieux d'achat de certains art-books qu'on ne trouve hélas pas très facilement (si vous êtes Parisiens de préférence... excusez-moi pour les autres!) </strong><a href="mailto:Mulau77140@aol.com"><strong>contactez-moi</strong></a><strong>!</strong></font></p>
  <h1 class="Style3 Style7">&nbsp;</h1>
  <span class="Style3">
  <!-- fin de #mainContent -->
  </span>
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
