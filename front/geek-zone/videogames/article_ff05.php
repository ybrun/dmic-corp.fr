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
  <p align="center"><img src="/dmic-corp/images/logo4.jpg" alt="" width="237" height="95" border="0" /></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Le monde de Final Fantasy V dépend des quatres critaux du Vent, de la Terre, de l'Eau et du Feu. Le pouvoir du Vent permet aux gens de naviguer sur un bateau, avec celui du feu a débuté le mouvement industriel et ainsi tous les cristaux ont chacun leur importance.
    Un jour, le Roi de Tycoon sent que quelque chose d'horrible va arriver et se rend au Temple du Vent. Là-bas, le cristal se brise devant ses yeux. Quelques instants après q'une météorite est tombé, causant des tremblements de terre autour du Château de Tycoon, le Roi disparait mystérieusement. Après cet évènement
    extraordinaire, quatre personnes d'origines différentes, Butz, Reina, Galuf et Faris, sont réunis dans d'étranges circonstances mais dans un but commun, rétablir la paix dans le monde.</font></p>
  <p align="center"><font face="Comic Sans MS" color="#FFFFFF"><br />
    Final Fantasy V est sorti en 1992 au Japon et s'est vendu à près de 2 500 000 exemplaires. Il s'agissait déjà du cinquième épisode de la saga Final Fantasy et les joueurs pouvaient se demander si Squaresoft allait pouvoir maintenir la qualité qui avait fait le succès des précédents opus.<br />
  <br />
    Final Fantasy V combine les éléments familiers des précédents épisodes - une histoire riche en rebondissements, des personnages aux personnalités diverses - mais innove aussi sur certains points, comme le système de jeu. Alors que dans Final Fantasy IV, chaque personnage avait sa propre classe, dans Final Fantasy V, le
    joueur attribue lui même des classes aux personnages. Celles-ci sont au nombre de 20 mais s'acquièrent au fil du jeu, peuvent être changées à tout instant et permettent d'obtenir des capacités, donnant une dimension stratégique et tactique. Les graphismes et musiques, toujours composées par Nobuo Uematsu, paraissent
    dérisoires aujourd'hui mais restent impressionants pour l'époque. Final Fantasy V avait donc tout pour convaincre une nouvelle fois le public.</font></p>
  <p align="center"><font face="Comic Sans MS" color="#FFFFFF"><br />
    Final Fantasy V n'a jamais vu le jour aux Etats-Unis sur Super Nes. En 1995, Squaresoft devait le sortir aux USA sous le nom &quot;Final Fantasy Extreme&quot; mais la fin des consoles 16 bits a mis fin au projet. La firme japonaise que nous adorons tous l'a finalement réédité en 1999 sur Playstation, avec Final Fantasy VI,
    sous le nom de Final Fantasy Anthlogy, avec deux scènes cinématiques supplémentaires. L'Europe a été quant à elle servie milieu 2002, grâce à FF Anthology : Edition Européenne, regroupant les quatrième et cinquième opus.</font></p>
  <p align="center"><font size="1" face="Verdana"><br />
  </font></p>
 
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
