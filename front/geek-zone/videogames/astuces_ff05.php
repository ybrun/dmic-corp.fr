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
  <p align="center"><font size="7" color="#FF0000"><u><i><b>Trucs &amp; Astuces</b></i></u></font></p>
  <p align="center"><img border="0" src="/dmic-corp/images/logo4.jpg" width="237" height="95" /></p>
  <b>
  <p align="justify">&nbsp;</p>
  <p align="justify"><i><u><font face="Verdana" size="4" color="#FF0000">Obtenir ses statistiques</font></u></i></b><font FACE="Verdana" SIZE="3"><font color="#FFFFFF"><br />
    <br />
    Vous aimeriez savoir le nombre de combats que vous avez fait, le nombre d'ennemis que vous avez tué ? Alors rendez-vous près de la ville de Karnak et atterrissez votre engin à l'endroit indiqué sur les deux images ci-dessous.</font></p>
  <p align="center"><font color="#FFFFFF"><img src="/dmic-corp/images/stat1.gif" width="256" height="223" />&nbsp;&nbsp;<img src="/dmic-corp/images/stat2.gif" width="256" height="223" /></font></p>
  <p align="justify"><font color="#FFFFFF">Il faut que ce dernier puisse se changer en sous-marin. Faîtes le alors plonger et vous vous retrouverez devant une grotte. Entrez-y et parlez au vieil homme. Il vous donnera les statistiques que le jeu a mémorisé.</font></p>
  <p align="center"><font color="#FFFFFF"><img src="/dmic-corp/images/stat3.gif" width="256" height="223" />&nbsp;&nbsp;<img src="/dmic-corp/images/stat4.gif" width="256" height="223" /></font></p>
  <p><font color="#FFFFFF">Le pourcentage de trésors trouvés peut s'avérer assez utile pour éventuellement rechercher les trésors manqués.</font></p>
  <p>&nbsp;</p>
  </font><b>
  <p><font color="#FF0000"><u><i><font face="Verdana" size="4">Pas de combats dans la tour de Phoenix</font></i></u></font></b><font color="#FF0000"><u><font face="Verdana" size="4"><i><br />
    </i></font></u></font><font FACE="Verdana" SIZE="3"><font color="#FFFFFF"><br />
      Pour n'avoir aucun combat dans la tour de Phoenix, passez par les portes suivantes : Gauche, Gauche, Droite, Gauche, Gauche, Droite, Gauche, Gauche, Droite, Gauche, Gauche, Droite, Droite, Gauche, Droite, Gauche, Gauche, Droite et Haut.</font></p>
  <p>&nbsp;</p>
  </font><b>
  <p><i><u><font face="Verdana" color="#FF0000" size="4">Gagnez de l'ABP facilement</font></u></i></b><font color="#FFFFFF" face="Verdana" size="4"><br />
    </font><font FACE="Verdana" SIZE="3"><font color="#FFFFFF"><br />
      - Dans la tour de Phoenix, tous les deux ou trois étages, vous atteindrez une pièce avec deux pots. L'un contient de l'argent, l'autre abrite un monstre. Le monstre ne vous attaquera pas mais vous demandera de lui donner un Élixir. Si vous acceptez, il vous récompensera en vous donnant 100 ABP et un objet.<br />
  <br />
      - Allez au château de Val dans le monde 2. Là-bas, vous rencontrerez des statues par groupe de 2 (4 ABP) ou 5 (8 ABP). Cependant, vous pouvez éprouver des difficultés à les battre. Il suffit pour cela de leur envoyer un Soft, ce qui les tuera instantanément ! Vous pouvez maintenant maîtriser vos jobs !</font></p>
  <p>&nbsp;</p>
  </font><b>
  <p><i><u><font face="Verdana" size="4" color="#FF0000">Obtenir Kain</font></u></i></b><font FACE="Verdana" SIZE="3"><font color="#FFFFFF"><br />
    <br />
    Au début du jeu, nommez votre personnage Kain. Dès que possible, mettez le en Lancer et maîtrisez-le.</font></p>
  <p>&nbsp;</p>
  </font><b>
  <p><i><u><font face="Verdana" size="4" color="#FF0000">Mirage Ville</font></u></i></b><font FACE="Verdana" SIZE="3"><font color="#FFFFFF"><br />
    <br />
    Dans cette ville se trouve de très bonnes armes et armures. Rendez-vous dans la zone indiquée sur la carte ci-dessous. Marchez dans la forêt. Vous verrez le fondu enchaîné des combats mais vous entrerez en fait dans cette ville.</font></p>
  <p>&nbsp;</p>
  </font><b>
  <p><i><u><font face="Verdana" size="4" color="#FF0000">Chocobo noir dans le monde 3</font></u></i></b><font FACE="Verdana" SIZE="3"><font color="#FFFFFF"><br />
    <br />
    Allez à Mirage- ille et mettez-vous près du bar. Faites en le tour et entrez par la porte noire pour arrivez derrière le comptoir. Fouillez les barils et vous trouverez une arme très utile. Montez les escaliers plus loin à gauche et continuez un peu. Faites devenir l'un de vos personnage Thief ou mettez la compétence
    &quot;Secret&quot;. Traversez le passage secret pour trouver une porte, puis un piano. Jouez du piano et passez par la porte pour trouver le chocobo noir.<br />
    <br />
    Cette quête est indispensable pour obtenir les invocations Phoenix et Bahamut !</font></p>
  <p>&nbsp;</p>
  </font><b>
  <p><font color="#FF0000" face="Verdana" size="4"><u><i>Bonemail</i></u></font></b><font color="#FF0000" face="Verdana" size="4"><u><i><br />
    </i></u></font><font color="#FFFFFF"><br />
      Il s'agit d'une très bonne armure que vous pouvez récupérer dans un tas d'os, dans la vallée des dragons, dans le monde de Galuf.</font></p>
  <p align="center"><font FACE="Verdana" SIZE="3"><img border="0" src="/dmic-corp/images/bonemail.gif" width="256" height="223" /></p>
  <p>&nbsp;</p>
  </font><b>
  <p><font color="#FF0000"><u><i><font face="Verdana" size="4">Chicken ou Brave Sword</font></i></u></font></b><font color="#FF0000"><u><i><font face="Verdana" size="4"><br />
    </font></i></u></font><font FACE="Verdana" SIZE="3"><font color="#FFFFFF"><br />
      Allez au village de Moore dans le monde 3. Dirigez vous vers la petite grange devant le pub et entrez dans la forêt. Vous rencontrerez un sorcier qui vous demandera de choisir entre deux caisses. Celle de droite contient le couteau Chicken qui monte rapidement en expérience, celle de gauche contient Brave Sword. Je vous
      conseille la caisse de droite.</font></p>
  <p>&nbsp;</p>
  </font><b>
  <p><i><u><font face="Verdana" size="4" color="#FF0000">Lampe magique</font></u></i></b><font color="#FFFFFF"><br />
    <br />
    Au monde 3, vous pouvez récupérer une lampe magique qui vous permet d'incanter sans MP et dans cet ordre les invocations Bahamut, Leviathan, Phoenix, Odin, Hydra, Carbuncle, Shoat, Golem, Titan, Ifrit, Ramuh, Shiva, Remora, Sylph et Chocobo. Vous pouvez retourner à la cascade si vous avez utilisé toutes les invocations. Pour
    vous y rendre, vous devez utiliser Boko, votre chocobo, aller au nord-est puis à l'ouest. N'oubliez pas que Boko peut marcher sur les fleuves. Appuyez sur le bouton de validation lorsque vous vous trouvez sur la cascade.</font></p>
  <p align="center"><img border="0" src="/dmic-corp/images/lampe.gif" width="256" height="223" /><img border="0" src="/dmic-corp/images/lampe2.gif" width="256" height="223" /></p>
  <p>&nbsp;</p>
  <p><b><i><u><font face="Verdana" size="4" color="#FF0000">Les personnages</font></u></i></b></p>
  <p align="justify"><font color="#FFFFFF" size="3" face="Verdana">Final Fantasy V ne met en scène que peu de personnages. C'est peut-être l'un des mauvais points du jeu. Cependant, le système de job permet de les personnaliser un maximum. Les statistiques indiquées correspondent à celle du début du jeu : quand les personnages n'ont pas encore
    évolué.<br />
  </font></p>
  <p align="center"><b><u><font color="#008000" face="Verdana" size="4"><i>Butz</i></font></u></b></p>
  <p align="justify"><font color="#FFFFFF" size="3" face="Verdana">Butz est un aventurier solitaire dont le meilleur ami est boko, son chocobo. La météorite s'écrasant près du château de Tycoon attire son attention et il trouve alors une fille et un vieil homme, Reina et Galuf, inconscients. Ces derniers sont déterminés à se rendre au Temple du
    Vent pour comprendre ce qui ne va pas. Butz décide dans un premier temps de ne pas les suivre. Mais il se dit qu'il ne peut les laisser seuls dans un tel périple et leur offre son aide. C'est comme ça qu'il entre dans cette aventure ...<br />
    <br />
    Butz mène bien l'équipe. Il prend les initiatives et motives toujours ses troupes. Son père, Drogan, faisait partie des quatre guerriers de l'Aube.<br />
  <br />
    Butz est le plus puissant des quatre principaux personnages. Cependant, il n'est pas un très bon magicien.<br />
  <br />
  <i>Force</i> : 28 - <i>Agilité</i> : 25 - <i>Vitalité</i> : 27 - <i>Magie</i> : 25<br />
  </font></p>
  <p align="justify">&nbsp;</p>
  <p align="center"><b><i><u><font face="Verdana" size="4" color="#008000">Reina</font></u></i></b></p>
  <p align="justify"><font color="#FFFFFF" size="3" face="Verdana">Fille du Roi de Tycoon, Reina est inquiète lorsque son père part subitement pour régler un problème avec le Cristal du Vent. N'obéissant pas à son père, Reina quitte le château mais est sonnée par une météorite. Avant qu'elle soit prise par des gobelins, elle est sauvée par
    Butz. Son aventure commence lorsqu'elle se rend au Temple du Vent et découvre que le cristal s'est brisé et que son père a mystérieusement disparu.<br />
    <br />
    Reina a fait preuve d'un certains courage à plusieurs reprises, notamment pour sauver son dragon.<br />
  <br />
    Reina est la meilleure utilisatrice de magie du groupe mais a un niveau faible en force et HP.<br />
  <br />
  <i>Force</i> : 25 - <i>Agilité</i> : 26 - <i>Vitalité</i> : 25 - <i>Magie</i> : 28<br />
  </font></p>
  <p align="justify">&nbsp;</p>
  <p align="center"><b><i><u><font color="#008000" face="Verdana" size="4">Faris</font></u></i></b></p>
  <p align="justify"><font color="#FFFFFF" size="3" face="Verdana">Orphelin de naissance, Faris est le capitaine d'une bande de pirates. Il est ami avec un serpent de mer nommé Hydra qui permet à son bateau de naviguer sans vent. Faris surprend Reina, Butz et Galuf tentant de voler son navire pour rejoindre le Temple du Vent. Dans un premier temps, il
    les capture et décide de demander une rançon pour la princesse Reina. Cependant, un fait troublant le fait changer d'avis : Reina et lui ont exactement le même pendentif. Pendant l'aventure, il découvre ses origines et dévoile, malgré lui, son identité : Faris est une ... fille.<br />
    <br />
    Faris est le personnage le plus homogène, le plus polyvalent. Bien qu'il soit plus fort en attaques physiques, il n'excelle pas dans un domaine et n'a pas pas de réelle faiblesse.<br />
  <br />
  <i>Force</i> : 27 - <i>Agilité</i> : 27 - <i>Vitalité</i> : 26 - <i>Magie</i> : 26<br />
  </font></p>
  <p align="justify">&nbsp;</p>
  <p align="center"><b><i><u><font color="#008000" face="Verdana" size="4">Galuf</font></u></i></b></p>
  <p align="justify"><font color="#FFFFFF" size="3" face="Verdana">Galuf est un vieil homme qui est frappé par une météorite près du château de Tycoon et qui devient, par ce choc, totalement amnésique. Trouvé par Reina et Butz, il se souvient uniquement de son nom et on ne sait pourquoi, qu'il doit aller au Temple du Vent. Durant l'aventure, on
    apprend de plus en plus de choses à propos de Galuf : il n'est vraiment ce que tout le monde - et lui inclus - croit qu'il est.<br />
    <br />
    Galuf a le niveau de HP le plus élevé et est plutôt puissant mais est le pire magicien du groupe.<br />
  <br />
  <i>Force</i> : 27 - <i>Agilité</i> : 24 - <i>Vitalité</i> : 28 - <i>Magie</i> : 24<br />
  </font></p>
  <p align="justify">&nbsp;</p>
  <p align="center"><b><i><u><font color="#008000" face="Verdana" size="4">Krile</font></u></i></b></p>
  <p><font color="#FFFFFF" size="3" face="Verdana">Petite fille de Galuf, Krile se joint à la partie très tard dans le jeu. Vous pouvez cependant avoir un aperçu d'elle à travers certains flashbacks. Quand elle fera partie de votre équipe, elle héritera de toutes les capacités que Galuf avait pu apprendre. En d'autres mots, elle reprendra où
    Galuf s'est arrêté.<br />
    <br />
    Les statistiques de Krile sont celles de Galuf.</font></p>
  <p align="center"></p>
  <h1 class="Style3">&nbsp;</h1>
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
