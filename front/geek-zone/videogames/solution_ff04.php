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
  <p align="center"><b><font face="Comic Sans MS" size="7" color="#FF0000"><i><u>Final Fantasy IV: la soluce</u></i></font></b></p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="justify">&nbsp;</p>
  <p align="justify"><b><i><u><font face="Comic Sans MS" color="#0000FF" size="4">- L'aventure commence !</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
    <br />
    Vous incarnez Cecil, capitaine des Red Wings et vous venez de dérober un certain cristal au peuple de Mysidia pour le ramener au roi de Baron. Pendant le voyage vous êtes attaqués par 2 groupes de monstres, Cecil s'en débarrasse automatiquement^^. Après cette petite introduction vous arrivez à Baron.<br />
  <br />
    </font><b><i><u><font face="Comic Sans MS" color="#0000FF" size="4">- Baron</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Dès votre arrivée au château un certain Beigan vous emmène au Roi et lui dit par la même occasion que vous avez des attitudes de rebelle. Après une discussion un peu tendue ave le Roi vous êtes dégradé ! Le Roi vous demande par la suite de vous rendre à Myst, votre ami Cain : ) intervient mais le Roi ne l'écoute pas
      et lui demande d'aller avec vous. Vous recevez un paquet du Roi. Après une courte discussion avec Cain vous contrôlez enfin Cecil ! Vous devez vous rendre à sa chambre. Allez au Sud dans le hall du château, prenez les 3 coffres à droite, pour y accéder appuyez sur le bouton derrière le garde. Visitez un peu le château
      avant de vous rendre à votre chambre qui se trouve dans la tour de l'aile Ouest du château. Sur le chemin menant à votre chambre vous rencontrez Rosa votre bien-aimée et Cid le mécano^^. Allez dormir dans votre chambre.<br />
      Après une bonne nuit de sommeil vous quittez le château avec Cain. Allez faire un petit tour au village de Baron, parlez à tout le monde et achetez quelques items. Une fois votre visite du village terminée, rendez vous à la cave Myst au Nord-Ouest.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font size="4" color="#0000FF" face="Comic Sans MS">- Cave Myst</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Le chemin est très linéaire donc pas de grandes difficultés. Marchez jusqu'à qu'une voix vous interpelle. A partir de là allez au Nord prendre le coffre et continuez votre route. Après le pont prenez l'escalier au Nord pour un coffre, ensuite prenez les 2 escaliers au Sud et allez à l'Ouest pour un nouveau coffre. Revenez
      sur vos pas et empruntez le chemin entre les 2 escaliers, prenez le coffre au passage et allez au Nord. La voix de tout à l'heure vous interpelle encore une fois et vous demande si vous voulez continuez, choisissez OUI si vous êtes prêts à vous battre.<br />
      <br />
      Boss : Myst Dragon, HP : 450, faiblesse : aucune<br />
      Attaquez avec Cecil et utilisez le saut de Cain pour en venir en bout. N'attaquez pas lorsque le Boss se transforme en brume, attendez qu'il reprenne sa forme initiale pour l'attaquer.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Après le combat prenez la sortie qui s'offre à vous. Une fois hors de la grotte vous voyez un village à l'Est, allez-y.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font size="4" color="#0000FF" face="Comic Sans MS">- Village Myst</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Dès votre arrivée le fameux paquet que le Roi vous a donné s'ouvre et il se trouve qu'il était rempli de monstres qui vont détruire le village ! le Roi vous a manipulé…par la suite Cecil entend une petite fille pleurer, vous faites la connaissance de Rydia et vous apprenez par la même occasion qu'en tuant le dragon vous
      avez tué sa mère ! Rydia prise de colère invoque Titan qui modifie quelque peu le relief. ^_^<br />
      Vous vous réveillez non loin du village avec Rydia mais Cain à disparu. Allez à l'Est et rejoignez le village au milieu du désert.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font size="4" color="#0000FF" face="Comic Sans MS">- Kaipo</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Cecil amène automatiquement Rydia à l'auberge du village pour quelle prenne un peu de repos et lui aussi par la même occasion. Alors que vous commencez à vous endormir des gardes de Baron viennent vous attaquer.<br />
  <br />
      Boss : Officier ;Soldat(x3), HP : 120;30, faiblesse : aucune<br />
      Si vous voulez que le combat se termine rapidement tuez les 3 soldat, l'officier s'enfuira. Si vous choisissez cette option vous gagnerez moins d'expérience alors commencez par tuer 2 soldats, occupez vous de l'officier et tuez le soldat restant.<br />
  <br />
      Après ce combat, Rydia rejoint le groupe.<br />
      Visitez le village et allez à la maison la plus au Nord-est, vous y trouverez Rosa gravement malade. Le seul moyen de la sauver est de trouver le 'Rubis de sable' à l'Est de Damcyan. Quittez le village et dirigez vous vers la grotte au Nord.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font size="4" color="#0000FF" face="Comic Sans MS">- Passage Souterrain</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      A l'entrée allez au Nord pour 2 coffres ensuite, direction l'Ouest. Après le pont allez au Sud pour un coffre. Au Nord un vieil homme du nom de Tella vous barre la route, après une courte discussion il rejoint le groupe : )<br />
      Allez à l'Est, prenez le coffre du bas, continuez encore à l'Est, prenez l'escalier qui vous mène dans l'eau et prenez le coffre au Nord. Revenez sur vos pas et empruntez le passage à l'extrême Nord-Ouest. Suivez le chemin au Nord vous vous retrouvez dans l'eau. Prenez l'escalier à l'Ouest pour un coffre et suivez le
      chemin au Sud. Montez l'escalier, prenez le coffre à l'Ouest, traversez le pont au Sud, suivez le chemin et passez la porte. Vous arrivez à un point de sauvegarde, après un repos bien mérité, continuez votre route. Prenez le coffre au Nord et allez dans l'eau au Sud. Suivez l'unique chemin qui se présente à vous et passez
      la porte. Marchez, vous arrivez à 2 ponts, le pont à l'Est mène à 2 coffres, celui à l'Ouest vous permez de continuer, passez la porte au bout de ce dernier. A l'Ouest se trouve un passage secret, allez-y et marchez tout au Nord, continuez à l'Est derrière les escaliers et prenez le coffre au Sud. Revenez sur vos pas,
      prenez le coffre et montez les escaliers. Suivez le chemin au Nord, l'escalier à l'Est mène à 2 coffres. Traversez le pont à l'Ouest, prenez les 2 coffres au Sud et montez les escaliers au Nord. Vous voilà à l'air libre, reposez vous et entrez dans la grotte au Nord.<br />
      <br />
      </font><b><i><u><font size="4" color="#0000FF" face="Comic Sans MS">- Chutes d'eau</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
        <br />
        Après votre chute, montez l'escalier, marchez un peu, prenez les 2 coffres en bas de l'escalier au Sud, traversez le pont et franchissez la porte. Traversez le pont, prenez les 2 coffres au passage, traversez un 2ème pont et allez dans l'eau. Au milieu de la cascade au Nord se trouve le Boss, allez à sa rencontre si vous
        êtes prêts.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    Boss : Octomammoth, HP : 2350, faiblesse : éclair<br />
    Attaquez avec Cecil et faites des magies d'éclair (le seul sort qui soit efficace contre ce boss) avec Tella et Rydia. Son nombre de tentacules vous indique son niveau de vie, moins il en a plus vous êtes proches de la victoire.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    Après le combat, sortez de la grotte en prenant le passage droit devant. Une fois sur la carte allez au Nord pour rejoindre Damcyan qui est attaqué par les Red Wings juste avant votre arrivée.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font size="4" color="#0000FF" face="Comic Sans MS">- Damcyan</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Allez tout droit et montez au 3ème étage de la tour(n'oubliez pas le coffre au 2ème). Après une scène, Tella quitte le groupe et Gilbert le rejoint. Vous recevez par la même occasion votre premier moyen de transport : l'aéroglisseur qui va vous permettre de traverser les eaux peu profondes.<br />
      Traversez les eaux peu profondes au Nord-est de Damcyan pour allez au repère de l'Antlion, ce dernier se trouve sur un bout de terre un peu avant le Mont Obs.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font size="4" color="#0000FF" face="Comic Sans MS">- Grotte de l'Antlion</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Traversez le pont à l'Ouest pour un coffre, descendez l'escalier au Sud et prenez le coffre derrière le pont. Ensuite, descendez l'escalier au Sud-ouest, suivez le chemin du Sud et prenez les 2 coffres au passage. Revenez sur vos pas et avant l'escalier empruntez le chemin à l'Est. Passez sous le pont au Nord pour un coffre,
      continuez le chemin à l'Est, montez les grands escaliers et allez au Nord pour un coffre. Rebroussez chemin et franchissez le passage au Sud des grands escaliers. Suivez le chemin au Sud jusqu'à apercevoir une porte, derrière se trouve un coffre, prenez le. Continuez le chemin, montez l'escalier et franchissez le passage au
      Nord de ce dernier. Vous verrez une porte, elle contient 3 coffres et un point de sauvegarde : )<br />
      Reposez vous et retournez dans la partie de la grotte juste avant le passage menant au point de sauvegarde. Prenez le coffre au Nord juste derrière le passage, traversez le pont à l'Ouest pour un coffre, rebroussez chemin juste avant le pont et allez à l'extrême Sud de la pièce, vous voyez un passage, allez-y. Descendez
      tous les escaliers, l'Antlion vient vous rendre visite.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    Boss : Antlion, HP : 1100, faiblesse : aucune<br />
    Attaquez avec Cecil et invoquez le Chocobo avec Rydia car il se trouve qu'il est très efficace contre ce boss.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    A la fin du combat vous recevez le rubis de sable. Sortez de la grotte et retournez à Kaipo en passant par les eaux peu profondes au Sud-ouest de Damcyan.<br />
  <br />
    </font><b><i><u><font size="4" color="#0000FF" face="Comic Sans MS">- Retour à Kaipo</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Allez voir Rosa dans la maison au Nord-est et utilisez le rubis. Rosa est guérie et rejoint le groupe mais elle est encore faible, vous décidez de rester pour la nuit. A votre réveil quittez Kaipo et allez au Mont Obs, il se trouve à l'Est du nid de l'Antlion.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font size="4" color="#0000FF" face="Comic Sans MS">- Mont Obs<br />
      </font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
        A votre arrivée Rydia brûle la barrière de glace et apprend la magie de feu par la même occasion. Empruntez le chemin qui s'ouvre à vous. Le premier passage que vous rencontrez mène à un point de sauvegarde et 4 coffres, le suivant mène au sommet du Mont. Une fois au sommet, vous assistez à la bataille d'un karatéka
        contre plusieurs montres, nos amis décident de l'aider.<br />
        <br />
        Boss : MotherBomb, HP : ???, faiblesse : aucune<br />
        Attaquez avec Cecil et Yang, invoquer le Chocobo avec Rydia et soignez avec Rosa. Au bout d'un moment, le boss va exploser en 6 petites bombes. Si vous HPs sont bas soignez-vous vite car elles s'autodétruisent sur vous et font assez mal(200 HP de dégâts selon les persos).</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    Après le combat, Yang rejoint le groupe. Prenez le passage au Nord, il faut joindre Fabul au plus vite ! Suivez le chemin, il n'y en a qu'un. Une fois sur la carte, traversez la forêt au Nord. Une fois que vous l'avez traversée, direction l'Est. Vous voyez un château entre 2 rivières, c'est Fabul.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font size="4" color="#0000FF" face="Comic Sans MS">- Fabul</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Dans le hall il y a une auberge à l'Est et une armurerie à l'Ouest. Au 1er étage la porte au Sud mène à 2 tours, selle de gauche contient 3 coffres au RDC et celle de droite 1 coffre au denier étage. Allez dans la salle du trône qui se trouve derrière la porte Nord du 1er étage. Après une discussion. Après, le Roi
      vous demande si vous voulez bien l'aider à défendre le cristal de Fabul, dites oui. Cecil, Yang et Gilbert se mettent en première ligne pour défendre le château. Après une série de 6 combats successifs vous vous retrouvez dans la salle du crystal, Cain arrive et un duel s'engage.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    Boss : Cain, HP : ???, faiblesse : ???<br />
    Vous êtes obligés de perdre alors gardez vos objets de soin.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    Après le combat, vous faites la connaissance du terrible Golbez qui prend le cristal et capture Rosa par la même occasion. Une fois remit de vos émotions, sortez de la salle du cristal. Dans la salle du trône appuyez sur le bouton à l'Est pour ouvrir un passage secret contenant 3 coffres. Allez dormir à l'auberge du
    château, le roi va vous fournir un bateau pour aller à Baron. Quittez Fabul et allez à l'Est prendre le bateau. La traversée se passe bien jusqu'à que Léviathan vous attaque. Vous vous retrouvez échoué sur une plage séparé de tous vos compagnons. Il y a un village à l'Est, allez-y.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font size="4" color="#0000FF" face="Comic Sans MS">- Mysidia</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Vous n'êtes guère appréciés dans ce village^^, d'ailleurs certains vous transformerons en grenouille ou en cochon o_0<br />
      Allez au Nord dans la grande maison et parlez au vieil homme, il vous explique que pour battre Golbez vous devez à tout prix devenir un Paladin. Pour se faire, il faut aller chercher le sabre sacrée au Mont Ordeals. Après votre discussion le vieil homme demande à Palom et Porom de vous accompagner pour accomplir cette
      tâche. Le Mont Ordeals se trouve à l'Est de Mysidia, il est entouré d'une grande forêt.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font size="4" color="#0000FF" face="Comic Sans MS">- Mont Ordeals<br />
      </font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
        Dès votre arrivé vous êtes bloqué par un mur de feu, mais Palom vous ouvre la voie. Après une petite scène dans le repère de Golbez commencez votre ascension. Marchez et prenez le coffre à l'Est de l'escalier, montez l'escalier, prenez le coffre à l'Est, montez un 2ème escalier et franchissez le passage. Suivez le
        chemin(très linéaire), vous rencontrez Tella, après une discussion, il revient dans le groupe : ). Prenez le passage devant vous. Allez à l'Ouest prendre le coffre, montez les escaliers au Nord. Vous arrivez au sommet, il y a un point de sauvegarde à l'Est. Prenez l'escalier au Nord, Scarmiglione un des généraux de Golbez
        viens vous barrer la route.<br />
        <br />
        Boss : Scarmiglione ;revenants(x4), HP : 3500 ;200, faiblesse : feu<br />
        Cecil ne fait des dégâts qu'à Scarmiglione. Utilisez la commande 'Twin' de Palom et Porom et faites des magies de feu avec Tella. A chaque attaque, Scarmiglione contre attaque avec un éclair.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    Après le combat, soignez vous en priorité ! Marchez un peu, Scarmiglione revient à la charge.<br />
  <br />
    Boss : Scarmiglione le retour, HP : 3500, faiblesse : feu, soin.<br />
    La première chose à faire est d'utiliser la commande 'change' car il vous attaque dans le dos. Ensuite attaquez sans relâche avec Cecil, utilisez la commande 'Twin' des jumeaux, faites des magies de feu et soignez à l'occasion.<br />
  <br />
    Après le combat, aller devant la genre de pierre tombale. Vous êtes téléportés dans une salle inconnue et vous recevez le sabre sacré ! mais avant de devenir un vrai Paladin vous devez combattre votre nature de Dark Knight.<br />
  <br />
    Boss : Dark Knight, HP : 4500, faiblesse : aucune<br />
    Ce combat n'est pas des plus facile. Alternez attaques et soins pour remporter la victoire.<br />
  <br />
    Après le combat vous devenez un Paladin ! et Tella se rappelle d'un coup de tout ses sorts dont le terrible Meteo !<br />
    Quittez le Mont et retournez à Mysidia. Allez au magasin d'armure acheter l'équipement de Paladin pour Cecil et allez voir le vieil homme dans la maison au Nord. Après une discussion, sortez de la maison et rentrez dans la salle de téléportation à l'Est du village&nbsp; qui était inaccessible jusqu'à lors. Vous vous
    téléportez à Baron.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font size="4" color="#0000FF" face="Comic Sans MS">- Retour à Baron<br />
      </font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
        Sortez de la salle de téléportation et allez au bar de l'auberge. Vous apercevez Yang, allez lui parler. Ce dernier vous attaque !<br />
  <br />
        Boss : Monk&nbsp; , HP : ???, faiblesse : aucune<br />
        Son coup de pied fait quand même 150 HP de dégâts sur tous alors faites attention !</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    Après le combat, Yang qui a retrouvé ses esprits rejoint le groupe. Le gérant de l'auberge vous offre une nuit gratuite : )et Cecil trouve une clé qui va vous être très utile puisqu'elle permet de déverrouiller l'armurerie et le passage vers le château à l'Ouest du village. Dès que vous êtes prêts, allez-y.</font></p>
  <p align="justify"><b><i><u><font size="4" color="#0000FF" face="Comic Sans MS">- Vieux souterrain</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
    <br />
    Prenez l'escalier au Sud, suivez le chemin au Sud, traversez le pont, avancez et prenez la direction du Sud pour 3 coffres. Traversez le pont au Nord, suivez le chemin et montez l'escalier. Descendez l'escalier, il y a un passage secret au Sud&nbsp; qui mène à un coffre. Au Sud de ce coffre il y a encore un passage secret
    menant à un 2ème coffre. Revenez sur vos pas, au pied de l'escalier et empruntez le passage secret à l'Est et un 2ème passage secret toujours à l'Est. Prenez le coffre au milieu de la salle et empruntez le passage secret au Sud. Prenez la sortie Est du passage et franchissez le passage au Nord. Suivez le chemin au bout du
    grand escalier, franchissez le passage secret à l'Ouest pour un coffre, continuez en empruntant le passage au Nord. La porte à l'Ouest mène à un point de sauvegarde, il y a un passage secret à l'Est dans cette même salle. Montez l'escalier à l'Ouest et franchissez le passage pour joindre le château de Baron.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font size="4" color="#0000FF" face="Comic Sans MS">- Château de Baron</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Allez à l'Ouest et montez le petit escalier. Rendez vous à la chambre de Cecil si vous avez besoin de repos sinon direction la salle du trône. Vous rencontrez Beigan juste avant la salle du trône mais il se transforme en monstre.<br />
  <br />
      Boss : Beigan ; bras droit ;bras gauche, HP : 4444 ;444 ;444, faiblesse : aucune<br />
      Attention, ce boss peut faire très mal. Utilisez d'abord votre sort le plus puissant sur Beigan, ce dernier se mettra un reflet. A partir de là attaquez Beigan avec Cecil et Yang et faites des magies sur les bras pour limiter les attaques du boss. Seul problème, les bras repoussent.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    Après le combat, soignez vous et allez dans la salle du trône. Parlez au Roi qui se trouve être le second général de Golbez, Caigniozzio.<br />
  <br />
    Boss : Caigniozzio, HP : 5310, faiblesse : éclair<br />
    Ce boss est très facile si on utilise ce qu'il faut. Il craint les sorts d'éclair alors agissez en conséquence et utilisez l'éclair3 de Tella qui lui fait énormément de dégâts.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    Après le combat, Cid fait irruption dans la salle du trône. Après une discussion il vous amène à son aéronef. Mais Caignizzio vous tend un piège et Palom et Porom se sacrifient pour vous sauver !&nbsp;<br />
    Après une petite scène dans le repère de Golbez, Cid vous mène à son aéronef. . A peine sorti du château avec l'aéronef que Cain viens vous voir et vous propose un marché, le cristal de Troia contre Rosa. Allez donc à Troia qui se trouve au Sud-ouest de Baron grâce à votre nouveau moyen de transport.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font size="4" color="#0000FF" face="Comic Sans MS">- Troia</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Commencez par visitez le village, au Nord-est du village se trouve une écurie de chocobo noir^^<br />
      Dans le bar un homme vous demande un pass. Ce pass est vendu par la femme à l'entrée du bar mais attention ! Ne l'achetez que si vous avez de l'argent en trop car c'est assez cher pour se qu'il permet de faire…<br />
      Après avoir visité le village, allez au château. Allez dans la salle au Nord et parlez aux 8 clercs, elle vous disent que le cristal à était volé par
      l'elf qui habite dans une grotte au Nord-Est. Sortez de la salle et allez à l'Ouest, vous retrouvez Gilbert. IL vous donne un objet très utile pour plus tard, la
      Twinharp.
      Allez à l'Est du château prendre 8 coffres et sortez. Attention ! ! ! Le repère de
      l'elf est protégé par un champ magnétique qui rend inutilisable les armes et armures en métal, alors retournez au village et équipez vous comme il faut. Une fois cette tâche accomplie il est temps d'aller au repère de l'Elf mais il est
      inaccessible avec l'aéronef. . Pas de panique, allez au Nord de Troia à pied, au village des
      chocobos. Capturez un chocobo noir pour pouvoir joindre la grotte de l'elf.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><font face="Comic Sans MS" color="#0000FF" size="4"><b><i><u>- Cave Magnes</u></i></b></font><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Dans cette cave les armes et armures en métal sont inutilisables alors équipez vous avec celles achetées a Troia. Dès votre arrivée dans la cave prenez le coffre a l'Est, allez au Sud suivez le chemin et prenez les escaliers sans oublier le coffre a proximité. A cet étage à l'Ouest se trouve un coffre ainsi qu'à l'Est,
      au Nord une porte mène à 2 coffres, au Nord-ouest se trouve un escalier qu'il faut emprunter pour continuer. Vous arrivez à un nouvel étage, la porte à l'ouest mène à un point de sauvegarde, prenez le pont en bois, la porte sur le chemin mène à 3 coffres. Après avoir passé un 2ème pont en bois passez la porte au
      Nord, prenez le coffre et allez à l'escalier à l'Ouest. Suivez le chemin, à l'est se trouve une salle de sauvegarde, au Nord la salle menant au boss, avant d'y entrer n'oubliez pas le coffre non loin de là. Une fois dans la salle parlez au perso devant le cristal.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    Boss : Dark Elf, HP : ???, faiblesse : aucune<br />
    Pas d'affolement vous êtes obligés de perdre ce combat.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    Alors que nos amis sont battus Gilbert joue de sa harpe, la TwinHarp réagit et le champ magnétique disparaît. Reequipez vos persos avec des bonnes armes et armures en métal et c'est reparti ! ! !<br />
  <br />
    Boss : Dark Elf(2ème round), HP : ???, faiblesse : aucune<br />
    Attaquez avec Yang et Cecil, il ne fera pas long feu.<br />
  <br />
    Boss : Dark Elf(3ème round), HP : 3900, faiblesse : aucune<br />
    Voici la vraie forme de l'elf, attaquez avec Cecil, Yang et Cid et soignez vous avec Tella. Son nombre d'HP en fait un boss pas trop difficile mais attention à son souffle(250 HP de dégâts sur tous)<br />
  <br />
    Après votre victoire prenez le cristal et retournez à Troia.<br />
  <br />
    </font><b><i><u><font size="4" color="#0000FF" face="Comic Sans MS">- Retour à Troia</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Rendez vous au château, allez voir Gilbert et les 6 clercs, Cain vous demande de vous rendre à l'aéronef. Une fois à bord Cain vous mène au repère de Golbez.<br />
  <br />
      </font><b><i><u><font size="4" color="#0000FF" face="Comic Sans MS">- Tower of Zot</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
        <br />
        Prenez n'importe quel chemin, ils mènent tous au même endroit, allez à l'Ouest pour un coffre et à l'Est pour prendre la porte. Vous entrez dans un petit labyrinthe, allez tout en bas de la salle, à gauche et montez jusqu'à la porte, attention le coffre à proximité contient un monstre mais si vous le battez vous
        obtiendrez une épée de feu. Une fois la porte franchie, prenez n'importe quel chemin ils mènent tous à la même porte. Marchez jusqu'à atteindre un croisement, le chemin du haut mène à 3 portes, la porte de gauche contient 2 coffres, celle du milieu 1 coffre, pareil pour celle de droite. Le chemin de droite vous permet de
        progresser. Vous arrivez au 5ème étage, la 1ère porte est une salle de sauvegarde la 2ème mène à un boss.<br />
        <br />
        Boss : Dog, Mag, Rag, HP : 2900 ;4600 ;2590, faiblesse : aucune<br />
        Occupez vous de Mag(la dodu^^) en premier car elle a la fâcheuse habitude de ressusciter ses soeurs. Une fois Mag vaincue les 2 autres ne tiendront pas longtemps face à vos attaques.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    Une fois derrière la porte vous rencontrez Golbez et Cain. Après une scène que je vous laisse le plaisir de découvrir Rosa et Cain rejoignent votre équipe, il est temps de quitter la tour mais un boss se dresse devant vous.<br />
  <br />
    Boss : Valvalicia, HP : 8650, faiblesse : aucune<br />
    Attaquez sans relâche avec Cain, Cecil et Cid, soignez avec Rosa, attention lorsque le boss se met en tornade il devient plus résistant et balance des magies de pétrification et des attaques qui baissent au plus bas les HP des persos, utilisez le saut de Cain pour percer sa défense.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    Après votre victoire la tour s'écroule mais grâce à la magie de Rosa le groupe est téléporté à Baron dans la chambre de Cecil. Cain vous révèle alors qu'il existe d'autres cristaux, les Darks cristaux, Ces derniers se trouvent dans Le monde souterrain, Cain vous donne la clé pour y accéder.<br />
  <br />
    </font><b><i><u><font size="4" color="#0000FF" face="Comic Sans MS">- Le monde souterrain</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Prenez l'aéronef et allez à Agart au Sud de Baron. Allez au puit au milieu du village et utilisez la clef donné par Cain. Sortez du village et rentrez dans le trou qui est apparu avec l'aéronef. Dès votre arrivée vous êtes attaqué par les Red Wings, l'aéronef s'écrase à coté d'un bâtiment, allez-y.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font size="4" color="#0000FF" face="Comic Sans MS">- Château des nains</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Allez voir le roi, ce dernier vous dit que le cristal est encore ici, Cid quitte l'équipe pour allez réparer l'aéronef et le rendre résistant à la lave. Alors que le roi et nos héros discutent Yang sent que quelque chose se trame dans la salle du cristal, nos persos si rendent et tombent sur des poupées. Un combat très
      facile s'en suit mais les poupées restantes se réunissent, et hop encore un boss.<br />
      <br />
      Boss : Calcobrena, HP : 5300, faiblesse : aucune<br />
      Ce boss n'est vraiment pas difficile, lorsqu'il se divise en 6 poupées commencez par tuer les poupées bleues pour l'empêcher de se reformer.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    Après le combat Golbez vient vous rendre visite et vous dévoile son terrible projet, un combat s'en suit, nos amis se font littéralement détruire par Golbez, mais alors que ce dernier allait donner le coup de grâce à Cecil, Rydia vient le sauver.<br />
  <br />
    Boss : Golbez, HP : 23000, faiblesse : aucune<br />
    Voilà un adversaire de taille ! Golbez fait beaucoup de magies à répétions alors commencez par ressusciter Rosa pour quelle applique un reflet sur Rydia qui est très importante dans ce combat car c'est la seule à pouvoir faire de sérieux dégâts à Golbez grâce à ses invocations.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    Après avoir battu Golbez, Rydia vous rejoint, mais Golbez n'est pas tout à fait mort et s'empare du cristal ! Après se combat, le groupe décide de se rendre à la tour de Bab-il.<br />
  <br />
    Avant de partir dormez, faites le plein d'items, équipez vous avec de nouvelles armes et armures et visitez le château pour trouvez quelques coffres. Si vous voulez aller dans l'endroit le plus bizarre du jeu prenez le passage entre le vendeur d'armes et celui d'armures, vous arrivez dans un bar vide, franchissez le passage
    secret à l'Est pour voir la face cachée du bar. Dès que vous êtes prêts prenez l'escaliers à coté de l'aubergiste et parlez au nain au milieu du couloir, il vous ouvrira un passage vers l'extérieur. Rendez-vous à Bab-il au Nord-Est.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font size="4" color="#0000FF" face="Comic Sans MS">- Bab-il Tower<br />
      </font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
        Les magies et les armes de glace sont de rigueur ici.<br />
        Dès votre arrivée allez à l'Est puis à l'Ouest pour prendre 3 coffres, allez tout droit pour avancer. Suivez le chemin(prenez le coffre au passage), la première porte contient un coffre(attention il est rempli de monstres mais il y à une belle récompense si vous gagnez : ), pareil pour la 2ème porte(il y a un monstre
        aussi), la porte au Nord mène au 3ème étage. Prenez le coffre à gauche ainsi que celui tout à l'Est, la porte au sud mène à 2 coffres(n'oubliez pas celui près de la porte avant d'entrer), le chemin au Nord mène à l'étage suivant. Une fois au 4ème étage, prenez la 1èr porte qui se présente à vous, c'est une salle
        de sauvegarde. Ensuite, direction le chemin au Nord, au bout de ce dernier vous arrivez à un genre de croisement :<br />
        La salle droit devant contient un coffre avec un monstre, en bas se trouve 2 salles, la première contient un coffre(avec un joli monstre^^) et la 2ème ne contient rien ! o_0<br />
        Le chemin du haut mène à l'étage suivant. Prenez les 2 coffres de chaque cotés de l'escalier central(la porte au bout de ce dernier est inaccessible pour l'instant), prenez la porte au nord-est, franchissez encore une porte et vous arrivez au 7ème étage. La porte à l'Est est une salle de sauvegarde, dirigez vous vers les
        escaliers au sud, prenez le coffre et franchissez la porte à l'Est. Suivez le chemin, vous rencontrez Rubicante et un docteur, c'est parti pour un boss.<br />
        <br />
        Boss : Dr Lugeie, Balnab, HP : 4900;4800, faiblesse : éclair<br />
        Vous aurez vite fait d'en venir à bout.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    Boss : Dr Lugeie, HP : 9300, faiblesse : éclair<br />
    Attention, le docteur s'énerve ! Attaquez avec Cecil et Yang, faites des sauts avec Cain, soignez avec Rosa et abusez d'Indra.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    A la fin du combat vous obtenez une clé. Rendez-vous au 5ème étage et ouvrez la porte close au bout de l'escalier central. Vous arrivez dans la salle de contrôle du canon, débarrassez vous des 3 lutins qui vous barre la route. Vous apprenez que le canon ne peut être arrêté mais Yang se sacrifie pour le faire !<br />
    Après cet évènement redescendez la tour, avant de sortir Golbez vous interpelle et essaye de vous anéantir mais Cid arrive à temps avec un nouvel aéronef ! une poursuite s'en suit, Cid se sacrifie à son tour pour que vous puissiez vous échapper.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font size="4" color="#0000FF" face="Comic Sans MS">- Retour à la surface</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Allez dans la partie Est du château Retournez à Baron et parlez à un des deux techniciens au pied de la tour. Ces derniers vont adapter un crochet à l'aéronef pour pouvoir transporter l'aéroglisseur ! Allez donc chercher l'aéroglisseur où vous l'aviez laissé avec l'aéronef et dirigez vous vers l'île où se trouve
      Bab-il au Sud-ouest de Baron. Arrivé sur l'île, allez au château d'Eblana pour prendre de nombreux coffres. Une fois cette tâche accomplie, prenez l'aéroglisseur et dirigez vous à l'Ouest de l'île en prenant le chemin d'eaux peu profondes, vous arrivez à une grotte.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font size="4" color="#0000FF" face="Comic Sans MS">- Cave Eblana</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Suivez le chemin, ne prenez pas encore le passage à l'Ouest, allez plutôt à l'Est. Traversez les 2 ponts, prenez le coffre au Sud et allez au Nord, vous vous retrouvez les pieds dans l'eau. Continuez au Nord et arrivé au mur prenez le passage secret à l'Ouest pour 2 coffres. Une fois cette petite chasse au trésor terminé
      rebroussez chemin et franchissez le passage à l'Ouest. Vous arrivez dans un village souterrain construit par les survivants d'Eblana, profitez en pour vous reposez et faire quelques achats. Prenez l'escalier le plus au Nord pour poursuivre votre route.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font size="4" color="#0000FF" face="Comic Sans MS">- Passage vers Bab-il</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Prenez le coffre à droite, suivez le chemin au Nord, prenez le coffre, arrivé au cadavre franchissez le passage secret au Sud pour un coffre et gravissez l'escalier au Nord. Allez au Nord-est pour un coffre, traversez le passage secret à l'Est pour un autre coffre et direction le passage au Sud. Traversez le passage secret à
      l'Est pour 2 coffres, sortez du passage, prenez les 3 coffres, prenez un nouveau coffre au bout du chemin, allez à l'Ouest pour un autre coffre, rebroussez chemin puis allez à l'Est pour 3 coffres et empruntez le chemin au Nord. A l'Est se trouve une salle contenant un point de sauvegarde et un passage secret menant à un
      coffre. Allez à l'Ouest pour un coffre et direction le Nord. Vous rencontrez le prince d'Eblana, Edge. Après s'être fait laminé par Rubicante et soigné par Rosa Edge rejoint le groupe : )<br />
      Prenez le coffre à l'Ouest&nbsp; et franchissez le passage au Nord.</font></p>
  <p align="justify">&nbsp;</p>
  <p align="justify"><b><i><u><font size="4" color="#0000FF" face="Comic Sans MS">- Bab-il tower(2ème partie)<br />
    </font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      Montez les marches et au bout de ces dernières appuyez sur A pour que Edge vous aide à infiltrer la tour. Prenez le coffre devant vous et suivez le chemin à l'Ouest. Au terme de ce chemin prenez le coffre à l'extrême Est et franchissez la porte non loin de là. Empruntez le chemin au Nord, descendez les escaliers au milieu
      de la salle et prenez le coffre(attention il est riche en monstres). Continuez le chemin et passez la porte. Prenez la direction de l'Ouest, n'oubliez pas le coffre au passage et franchissez une nouvelle porte. Allez à l'Est, la 1ère salle contient un point de sauvegarde la 2ème mène aux étages suivants, allez-y. Après
      avoir franchit une nouvelle porte vous arrivez au 5ème étage. Prenez le chemin de gauche, allez au Nord-ouest pour un coffre et montez l'escalier au milieu de la salle.<br />
      <br />
      Boss : Eblana King ;Eblana Queen, HP : ???;???, faiblesse : ???<br />
      Attaquez l'un ou l'autre c'est pareil. Au bout d'un moment, une scène s'enclenche et le combat prend fin…</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    Après le combat Rubicante viens vous rendre visite et Edge apprend deux nouvelles techniques ! ! Parlez à Rubicante pour vous battre.<br />
  <br />
    Boss : Rubicante, HP : 34000, faiblesse : glace, eau.<br />
    Rubicante est plutôt sympa, il vous guéri complètement avant le combat^^, mais ce n'est pas une raison pour lui faire des cadeaux ! Rubicante est assez fourni en Hps alors il va falloir frapper fort ! Utilisez le saut de Cain qui est une fois de plus très efficace(surtout si ce dernier est équipé d'une arme de glace=),
    attaquez avec Cecil, utilisez la magie d'eau d'Edge, invoquez Myst avec Rydia et soignez avec Rosa. Attention à l'attaque de Rubicante lorsqu'il se découvre, elle tue un perso sur le coup.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    Après le combat entrez dans la salle devant vous, c'est la salle qui contient tous les cristaux volés par Golbez ! Avancez un peu vous tombez dans un ravin.<br />
    C'est reparti pour un tour dans Bab-il…-_-<br />
    Prenez le coffre au Nord et franchissez la porte au Sud puis dans la salle suivante la porte au Nord. Empruntez le chemin au Sud, prenez le coffre à l'Est, allez à l'Ouest et franchissez la porte. Vous entrez dans une salle ou se trouve un aéronef ! après une discussion le groupe décide de s'en emparer.<br />
  <br />
    </font><b><i><u><font size="4" color="#0000FF" face="Comic Sans MS">- Retour dans le monde souterrain</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Retournez au château des nains au Sud-est de Bab-il et allez parler au Roi. Après une discussion il vous donne la clé pour ouvrir la cave qui contient le dernier Cristal mais pour allez là-bas il faut traversez la lave, chose impossible pour l'instant. Parlez un peu à tout le monde vous apprenez qu'une personne qui a était
      repêché se repose à l'infirmerie. Allez-y, vous retrouvez ce bon vieux Cid ! Parlez lui, ce dernier va de ce pas modifié votre aéronef pour qu'il puisse traverser la lave. Sortez du château et joignez le village au Sud-Ouest.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font size="4" color="#0000FF" face="Comic Sans MS">- Tomra</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Visitez le village, équipez vous et reposez vous. Quand vous êtes prêts sortez du village.<br />
  <br />
  &gt;2 possibilités s'offrent à vous :<br />
      Ou vous choisissez de réaliser deux quêtes secondaires qui vous permettront de gagner en expérience et d'acquérir de nouvelles invocations, ou vous décidez de vous rendre à la cave scellée à l'Ouest de Tomra. Vous pouvez réaliser ces 2 quêtes avant ou après vous êtres rendu à la cave scellée, sachez juste que si
      vous les faites avant, Cain sera encore dans le groupe. Sachez aussi que la difficulté des quêtes sera plus élevée si vous y allez avant mais en contre partie vous n'aurez aucun problème dans la cave scellée puisque vous aurez acquis beaucoup d'expérience.<br />
      <br />
      Allez donc à l'extrême Nord-ouest du monde souterrain si vous avez choisit la première option et entrez dans la grotte.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font size="4" color="#0000FF" face="Comic Sans MS">- Cave des fées (facultatif)<br />
      </font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
        Les taches vertes sur le sol vous enlève des Hps alors utiliser le sort de flotte sur tout le groupe. Allez à l'Ouest pour 3 coffres et prenez l'escalier au Sud. Franchissez le passage au Nord pour 3 coffres et prenez le passage au Sud. Allez au point de sauvegarde à l'Est, franchissez le passage secret au Nord-est pour un
        coffre, allez à l'extrême Ouest de la salle, prenez les 2 coffres au nord et franchissez le passage au Sud. Suivez le chemin et franchissez le premier passage pour 5 coffres. Continuez le chemin au Nord, prenez le passage secret à l'Est pour un coffre et franchissez le passage. Prenez le coffre à l'Est, continuez le chemin,
        vous voyez une maison, entrez-y. Vous vous retrouvez dans la demeure des fées. vous voyez Yang inconscient, parlez lui ainsi qu'aux fées. Vous ne pouvez rien faire pour le moment, prenez le passage au second étage pour sortir de la cave.<br />
        <br />
        </font><b><i><u><font size="4" color="#0000FF" face="Comic Sans MS">- Cave des fées 2ème partie (facultatif)</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
          <br />
          Retournez dans la cave, franchissez le passage au Sud et traversez le passage au Nord. Au milieu de la salle se trouve un passage secret(il y a une tâche verte à l'entrée du passage), traversez le et continuez à l'Est. Suivez le chemin au Sud, prenez les 4 coffres au milieu du chemin, continuez au Sud, prenez les 5 coffres
          et tombez dans le trou. Suivez le chemin au Nord, traversez le passage secret à l'Ouest au bout du chemin et marchez sur la dalle. Allez à l'Est. Préparez vous car les 6 coffres sur le chemin contiennent tous un bon lot de monstres(pas toujours faciles). Après avoir prit les 6 coffres sortez de la cave en marchant sur la
          dalle à l'Est.<br />
          <br />
          Prenez votre aéronef et dirigez vous sur l'île au Sud-est de la cave des fées.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font size="4" color="#0000FF" face="Comic Sans MS">- Terre des monstres invoqués (facultatif)<br />
      </font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
        Attention les tâches sur le sol vous enlève des HPs alors utilisez le sort qui permet de flotter sur tout le groupe.<br />
        Allez au Sud-est pour un coffre, ensuite dirigez vous vers le Nord-est pour un autre coffre, prenez le passage secret en face de ce dernier pour un nouveau coffre et dirigez vous vers le passage à l'extrême Ouest. Allez au Nord et au Sud pour 2 coffres, empruntez le chemin à l'Est et franchissez le passage. Suivez le chemin
        jusqu'au coffre, prenez le, allez à l'Est pour un autre coffre et traversez le passage secret juste à côté du coffre pour prendre les quelques coffres décimés dans la pièce. Allez sur la dalle au milieu de la pièce, vous arrivez au village des monstres invoqués.<br />
        Prenez tous les coffres et marchez sur la dalle au Nord. La seconde maison au Nord contient un point de sauvegarde. Allez à la bibliothèque et prenez le teleporteur au Sous-sol. Vous rencontrez la reine Ashura, battez vous contre elle pour prouver votre courage.<br />
  <br />
        ! avant de la défier assurez vous que Rosa connaisse le sort Reflet(sort quelle apprend au nv 36) car sans celui ci il est quasiment impossible de battre Ashura !<br />
  <br />
        Boss : Ashura, HP : 31000, faiblesse : aucune<br />
        La technique pour en venir à bout est simple, lancez lui un reflet dessus pour que ses sorts de soin vous soient favorables, attaquez avec Cecil, Cain et Edge, invoquez avec Rydia.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    Après le combat, vous recevez Ashura comme nouvelle invocation. Soignez vous et défiez le roi Léviathan(c'est le papi à côté d'Ashura)<br />
  <br />
    Boss : Léviathan, HP : 50000, faiblesse : éclair<br />
    Attention Léviathan est assez coriace alors soyez vigilant ! Surveillez toujours votre niveau de vie et soignez souvent avec Rosa. Attaquez avec Cecil, invoquez Titan ou Indra, utilisez le saut de Cain et la magie d'éclair d'Edge.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    Après le combat, Léviathan rejoint la liste des invocations et sortez du village.<br />
  <br />
    Après ces deux quêtes dirigez vous vers la grotte à L'Ouest de Tomra.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font size="4" color="#0000FF" face="Comic Sans MS">- Cave scellée</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Attention ici toutes les portes sont des monstres.<br />
      Utilisez la clé donné par le roi des nains pour entrer. Traversez le ravin au Sud, la salle sur le chemin mène à 2 coffres. Prenez le coffre au Sud et dirigez vous vers l'Ouest. Traversez le ravin au Nord et entrez dans la salle face à vous. Les deux portes au Nord n'aboutissent à rien, prenez l'escalier au Sud-Est.
      Traversez le ravin au Sud pour un coffre, revenez sur vos pas, allez à l'Est prendre le coffre et empruntez le chemin au Nord ce celui ci. Vous arrivez à une série de 6 salles, la 1ère est vide, la 2ème contient un coffre, la 3ème contient 3 coffres, la 4ème ne contient rien, la 5ème mène à un point de sauvegarde et la
      6ème contient 2 coffres. Empruntez le chemin à l'Ouest et franchissez la porte au Sud. Marchez un peu, prenez le coffre et descendez l'escalier à l'Ouest. La salle à l'Ouest ne mène à rien, prenez les 2 coffres à l'Est et franchissez le passage au Sud. Allez prendre le coffre à l'Est, la salle ne contient rien, descendez
      la corde au milieu de la salle. Allez dans la salle à l'Est pour 2 coffres et empruntez l'escalier à l'Ouest. Sauvegardez, franchissez le passage au Sud, descendez les escaliers au milieu de la salle, traversez le pont et franchissez la porte. Prenez le cristal, sortez de la salle, un joli boss vient vous dire bonjour.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    Boss : Démon Wall, HP : 28000, faiblesse : aucune<br />
    La grande difficulté face à ce boss est que le temps vous est compté, utilisez donc des attaques rapides et efficaces comme la commande lancer d'Edge et les puissantes invocations(Léviathan) ou magies noires de Rydia.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    Après le combat sortez de la cave. Alors que vous êtes à deux pas de la sortie Golbez reprend le contrôle sur Cain qui vous dérobe le cristal. Retournez au château des nains.<br />
  <br />
    </font><b><i><u><font size="4" color="#0000FF" face="Comic Sans MS">- Il faut retourner à la surface !<br />
      </font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
        Parlez au roi, vous devez vous rendre à Mysidia mais impossible de se rendre vers le monde extérieur, heureusement que Cid est là : ). Ce dernier va une nouvelle fois retaper votre aéronef pour qu'il puisse faire un trou vers le monde extérieur. Cid épuisé reste sur place, prenez votre aéronef et appuyez sur A sous le
        cratère au Nord-est&nbsp; pour quitter le monde souterrain.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
  &gt;Encore une fois il y a un petit lot de quêtes secondaires à réaliser, prenez la direction de Mysidia si vous n'êtes pas intéressé ou prenez la direction de Troia si cela vous intéresse.<br />
  <br />
    </font><b><i><u><font size="4" color="#0000FF" face="Comic Sans MS">- Le trésor de Troia (facultatif)<br />
      </font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
        Entrez dans le château, parlez aux clercs et dirigez vous vers l'aile droite du château. Descendez l'escalier de gauche et parlez à la danseuse. Cette dernière vous ouvre un passage secret menant à 18 coffres ! (rien que ça^^)</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font size="4" color="#0000FF" face="Comic Sans MS">- Yang…(facultatif)</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Rendez vous à Fabul et allez parler à la femme à Yang qui se trouve au dernière étage de la tour gauche du château. La femme de Yang vous donne une poêle. Sortez du château prenez votre aéronef et retournez à la demeure des fées dans le monde souterrain. Allez voir Yang et donnez lui un coup de poêle sur la tête. Il
      reprend connaissance mais est encore trop faible pour venir avec vous. Comme lot de consolation vous recevez l'invocation Sylphid.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font size="4" color="#0000FF" face="Comic Sans MS">- Un objet bien utile (facultatif)<br />
      </font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
        Retournez à Fabul, allez voir la femme de Yang et rendez lui sa poêle. En échange elle vous donne un objet qui vous sera d'une grande utilité pour la suite.<br />
  <br />
        </font><b><i><u><font face="Comic Sans MS" color="#0000FF">-</font></u></i></b><font size="4" face="Comic Sans MS" color="#0000FF"><u><i><b> L'esprit du Roi (facultatif)<br />
          </b></i></u></font><font face="Comic Sans MS" color="#FFFFFF"><br />
            Rendez vous au château de Baron et allez au Sous-sol du château en passant par la tour droite. Vous rencontrez l'esprit du roi de Baron qui va vous faire passer un petit test…<br />
  <br />
            Boss : Odin, HP : 20000, faiblesse : éclair<br />
            Ce boss est très simple mais peut aussi être un des plus difficiles si l'on a pas ce qu'il faut sous la main. Vous avez une minute pour le battre sinon il vous fera son attaque préférée(celle qui coupe tout en morceaux^^). Commencez donc par lancer l'objet donné par la femme à Yang avec Edge ce qui fait 9999 HP de
            dégâts à Odin ! Enchaînez avec l'éclair 3 de Rydia et quelques attaques de Cecil. Hop ! en 15 secondes Odin n'est plus : )</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    Après le combat vous pouvez invoquez ce cher Odin.<br />
  <br />
    </font><b><i><u><font size="4" color="#0000FF" face="Comic Sans MS">- Le collectionneur (facultatif)</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Allez chercher votre premier aéronef qui doit se trouver près d'Eblan et transportez votre aéroglisseur près d'Argenta qui se trouve au Sud de Fabul. Prenez donc votre aéroglisseur et dirigez vous vers la grotte à l'Est. Parlez au nain au milieu de la pièce et donnez lui la queue de rat trouvée au village des monstres
      invoqués. Le nain vous donne de l'Adamant en échange.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font size="4" color="#0000FF" face="Comic Sans MS">- Le forgeron légendaire (facultatif)<br />
      </font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
        Rendez vous au monde souterrain et prenez la direction du Sud-Est. IL y a une petite maison, posez vous à proximité et allez-y. Montez au 2ème étage et donnez l'Adamant au vieil homme. Ce dernier reprend confiance en lui&nbsp; et va forger votre épée ! Mais il va falloir attendre un peu avant quelle soit prête.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    Prenez la direction de Mysidia.<br />
  <br />
    </font><b><i><u><font size="4" color="#0000FF" face="Comic Sans MS">- Ce n'est plus une légende…<br />
      </font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
        Entrez dans Mysidia, le chef du village viens vous accoster. Après une petite scène votre nouveau moyen de transport, un gigantesque vaisseau, sort des flots.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font size="4" color="#0000FF" face="Comic Sans MS">- L'épée sacrée (facultatif)</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Retournez voir le forgeron du monde souterrain, votre épée est enfin prête ! Vous recevez Excalibur une des deux épées les plus puissantes du jeu ! ! Retournez à la surface…<br />
  <br />
      </font><b><i><u><font size="4" color="#0000FF" face="Comic Sans MS">- En route vers la Lune !<br />
        </font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
          Montez dans votre nouveau moyen de transport et touchez le cristal pour vous envolez vers la Lune. Faites un peu le tour de la Lune, vous voyez une structure bleue, entrez dans la grotte à l'Ouest de celle-ci.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font size="4" color="#0000FF" face="Comic Sans MS">- Passage vers le palais</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Allez à l'Est pour un coffre et suivez le chemin au Nord. Prenez les 2 coffres à l'Est et franchissez le passage au Nord. Vous vous retrouvez à l'extérieur, prenez l'unique chemin praticable et entrez dans la grotte au bout du chemin. Suivez le chemin au Sud, une fois à l'extérieur allez à l'Est et rentrez dans le palais.</font></p>
  <p align="center">&nbsp;</p>
  <p align="justify"><b><i><u><font size="4" color="#0000FF" face="Comic Sans MS">- Palais de Cristal</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
    <br />
    Allez au Nord, un vieil homme vous interpelle. Après vous avoir fait de grandes révélations notamment sur Cecil, Foo-Soo-Ya rejoint le groupe.<br />
    Il faut que vous retourniez sur Terre, mais avant, si le cœur vous en dit, allez donc chercher la meilleure invocation du jeu. Pour cela prenez votre vaisseau et entrez dans la grotte entourée de montagnes à l'Ouest du palais de Cristal.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font size="4" color="#0000FF" face="Comic Sans MS">- Grotte du Dragon (facultatif)</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Prenez le coffre au Sud, traversez le passage secret au Nord du chemin à l'Est&nbsp; pour un coffre, prenez ce chemin et franchissez le passage au Sud. Suivez le chemin à l'Ouest, au terme de ce chemin prenez les 2 coffres à l'Ouest et à l'Est puis empruntez le chemin au Nord, un boss vous barre la route.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    Boss : Behemot, HP : 23000, faiblesse : aucune<br />
    Ce boss ne fait que des contre-attaques mais qui sont tout de même assez puissantes. Utilisez donc vos attaques et magies les plus puissantes pour réduire son nombre de contre-attaque et en venir à bout plus facilement.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    Après le combat, traversez le passage droit devant. Suivez le chemin au Sud, un autre boss vient vous voir.<br />
  <br />
    Boss : Behemot, HP : 23000, faiblesse : aucune<br />
    Utilisez la même technique que précédemment.<br />
  <br />
    Après le combat continuez le chemin, encore un boss…-_-<br />
  <br />
    Boss : Behemot, HP : 23000, faiblesse : aucune<br />
    Rien à redire.<br />
  <br />
    Après le combat, continuez le chemin, montez les marches de l'hôtel et parlez à l'homme face à vous. Vous allez avoir à faire au roi des dragons en personne…<br />
  <br />
    Boss : Bahamut, HP : 45000, faiblesse : aucune.<br />
    Pour Bahamut c'est un peu comme Odin, très difficile au premier abord mais dès qu'on utilise la bonne technique il devient un des boss les plus faciles du jeu. Il faut agir assez vite, pendant que Bahamut prépare son attaque faites un reflet sur Rosa et
    Foo-Soo-Ya. Attaquez avec Cecil et Edge, invoquez levantin et faites des
    reflets sur les autres membres du groupe si vous en avait le temps. Quand Bahamut lancera son attaque vous serez protégés par le reflet, attaquez sans relâche, lancez des Flare et surveillez vos reflets.</font></p>
  <p align="left"><font face="Comic Sans MS" color="#FFFFFF"><br />
    <br />
    <br />
    Après le combat Bahamut s'ajoute à la liste des invocations, sortez de la grotte.<br />
  <br />
    Prenez votre vaisseau et retournez sur la planète bleue.<br />
  <br />
    </font><b><i><u><font size="4" color="#0000FF" face="Comic Sans MS">- Le géant de Bab-il<br />
      </font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
        Dès votre arrivée le géant se réveille et commence à faire du grabuge. Heureusement tous les peuples terriens s'unissent pour le détruire. Pendant qu'ils occupent le géant, le groupe de Cecil décide d'aller à l'intérieur du géant pour le détruire une fois pour toute.<br />
  <br />
        </font><b><i><u><font face="Comic Sans MS" color="#0000FF" size="4">- A l'intérieur du géant</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
          <br />
          Vous arrivez dans la tête. Prenez le chemin au Nord et descendez l'escalier vous entrez dans le cou. Descendez l'escalier au Sud vous arrivez dans le corps. Suivez le chemin à l'Ouest, prenez les 3 coffres sur le passage, montez les dernières marches du chemin, prenez les 2 coffres au Nord-est et à l'Ouest puis empruntez le
          passage au Nord, vous êtes dans l'estomac. Il y a 3 escaliers face à vous, prenez celui de gauche et de droite pour 2 coffres, prenez celui du milieu pour continuer et prenez le passage au bout du chemin. Suivez le chemin au Sud, prenez le coffre, montez les grands escaliers, allez à l'Ouest pour un point de sauvegarde et
          traversez le passage au Nord. Suivez le chemin, les 4 généraux de Golbez viennent vous barrer la route.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    Boss : Scarmiglione, HP : 20000, faiblesse : Feu<br />
    Pas de grandes difficultés dans ce combat, utilisez vos magies de feu les plus puissantes pour le renvoyer en enfer.<br />
  <br />
    Boss : Rubicante, HP : 40000, faiblesse : Eau, Glace.<br />
    Encore un combat bien simple utilisez vos puissantes magies de glace, il ne fera pas long feu.<br />
  <br />
    Boss : Caigniozzio, HP : 22000, faiblesse : Eclair<br />
    Envoyez lui quelques éclair3 et ce ne sera plus qu'un mauvais souvenir.<br />
  <br />
    Boss : Valvalicia, HP : 28000, faiblesse : aucune<br />
    Invoquez Bahamut, utilisez la magie Meteo de Foo-Soo-Ya et attaquez avec Cecil et
    Edge.<br />
    <br />
    S'en est fini des généraux…continuez votre route et prenez le passage. Vous arrivez devant l'ordinateur central, c'est parti pour un boss.<br />
  <br />
    Boss : Control system ;Défense system ;Attaque System, HP : 30000 ;3000 ;3000, faiblesse : aucune<br />
    Commencez par détruire le système de défense et acharnez vous sur le système de contrôle. Faites quand même attention car ce boss dispose d'une attaque qui fait 9999 HP de dégâts sur un personnage.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    Après le combat Golbez vient vous rendre visite, alors qu'il allez vous attaquer, Foo-Soo-Ya brise l'emprise de Zemus sur Golbez…<br />
    Après une sacrée révélation Golbez et Foo-Soo-Ya partent défier Zemus. Alors que le géant commence à s'écrouler Cain vient vous aider à vous échapper. Après une discussion dans votre vaisseau vous retournez sur la Lune pour détruire
    Zemus.<br />
    <br />
    </font><b><i><u><font size="4" color="#0000FF" face="Comic Sans MS">- Le souterrain Lunaire</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Attention vous entrez dans le donjon le plus long et le plus dur du jeu ! Vérifiez que vous avez beaucoup d'objets de soins et de guérison. Si vous avez la flemme de retourner sur Terre vous pouvez toujours faire vos achats dans le village Nemingway qui se trouve au Sud du Palais de Cristal. les Nemingways ne sont pas très
      amicaux mais il y en a un dans la foule qui vend des objets, il suffit de le trouver^^.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    Allez au Palais de Cristal et rendez-vous dans la pièce des cristaux. Marchez sur la dalle au centre de la pièce pour accéder au monde souterrain de la Lune.<br />
    Traversez le passage secret à l'Est, suivez le chemin et prenez le coffre au bout du chemin, retournez à l'entrée du souterrain. Traversez le mur à l'Ouest&nbsp; et marchez sur la dalle. Suivez le chemin et marchez sur une nouvelle dalle. Allez au Nord, prenez le coffre et marchez sur la dalle au Sud-Ouest. Allez au Sud et
    franchissez le passage. Au Nord se trouve une épée, essayez de la prendre, un boss vous en empêche.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    Boss : White Dragon, HP : 31000, faiblesse : aucune<br />
    Commencez par lancer le sort de flotte sur toute l'équipe avec Rosa pour éviter les mauvaises surprises. Attaquez avec Cecil et Edge, utilisez la commande Saut de Cain, invoquez Bahamut, soignez avec Rosa et faites très attention à une des attaques de ce boss qui baisse les HPs de tout le groupe au plus bas.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    Après le combat vous recevez un des deux masamune qui sont les meilleures armes d'Edge. Retournez à l'entrée du souterrain et Prenez le passage au bout du chemin au Sud.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    Suivez le chemin à l'Est et traversez le mur. Prenez la direction du Nord, au milieu du chemin allez à l'Ouest pour un coffre. Continuez le chemin au Nord, allez à l'Ouest, traversez le mur, prenez le coffre à l'Ouest et franchissez le passage. Allez au Sud de la pièce et franchissez le passage secret à l'Est&nbsp; puis
    encore un l'Est et à l'Ouest pour 3 coffres. Revenez sur vos pas et franchissez le passage au milieu de la salle. Prenez le coffre à l'extrême Est, descendez les escaliers non loin, franchissez le passage à l'Ouest pour un coffre, descendez les escaliers à l'Est et franchissez le passage. Suivez le chemin au Nord, prenez le
    coffre à l'Est, allez à l'Ouest prenez le coffre et franchissez le passage au Sud. Prenez le coffre à l'Ouest(attention à partir d'ici la plupart sont remplis de monstres) et descendez les marches à l'Est. Allez à l'Ouest, prenez le coffre et franchissez le passage. Franchissez le passage secret au Nord-est, prenez le
    coffre, franchissez un nouveau passage secret à l'Est, traversez le passage au Sud pour un coffre et franchissez le passage au Nord. Prenez le coffre à l'Ouest, franchissez le passage à l'Ouest, prenez le coffre au Sud-est, traversez le passage au Nord, prenez le coffre à l'Ouest, franchissez le passage à l'Ouest et
    descendez les marches au Sud. Prenez les 2 coffres à l'Est et à l'Ouest, descendez l'escalier au Sud-ouest, prenez le coffre et traversez le pont invisible à l'Ouest.<br />
    Allez au Nord, traversez le mur à l'Est puis dirigez vous vers le Sud. Prenez le coffre au Sud, allez à l'extrême Est, marchez sur la dalle<br />
    Montez les marches et marchez sur une nouvelle dalle. . Montez une nouvelle série de marches, prenez le coffre, prenez le coffre, montez encore une série de marches et marchez sur la dalle. Sauvegardez, franchissez le passage au Sud, allez à l'Est et touchez l'épée.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    Boss : Dark Bahamut, HP : 50000, faiblesse : aucune<br />
    Attention ce boss est très fort. Dark Bahamut à la fâcheuse tendance à enchaîner Flare sur Flare ce qui peut vite décimer tout votre groupe. Attaquez avec Cecil, utilisez la commande Saut et la commande Lancer de Cain et d'Edge, invoquez Bahamut sans relâche et ressuscitez vos persos si besoin est avec le sort Vie2 de
    Rosa. Rosa doit absolument rester en vie tout long du combat car sans elle vos chance de gagner le combat sont très minimes.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    Après le combat vous recevez Ragnarok, l'épée la plus puissante du jeu avec Excalibur.<br />
    Retournez avant le pont invisible, prenez les escaliers à l'Ouest et franchissez le passage.<br />
  <br />
    Prenez le coffre au Nord-ouest et franchissez le passage au Nord-Est. Suivez le chemin, vous arrivez à une série de salles. La première contient un point de sauvegarde. Dans la 2ème salle il y a une lance, essayez de la prendre, un boss vous en empêche.<br />
  <br />
    Boss : Plague, HP : 33300, faiblesse : aucune<br />
    Ce boss est vraiment très fort puisque dès le début du combat il lance le sort peine de mort sur tout vos persos, ce qui vous laisse 10 secondes pour en venir à bout, chose faisable mais très difficile. Utilisez donc la technique suivante : engagez le combat avec 1 ou 2 persos morts dans votre équipe, une fois que le boss
    lance son sort ressuscitez vos persos morts. Ces derniers ne sont pas touchés par le sort ! vous pouvez donc vous occupez du boss sans aucun problème et l'anéantir vite fait.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    Après le combat vous recevez la meilleure arme de Cain. Continuez votre chemin et entrez dans la 3ème salle. Avancez un peu, un boss vient vous embêter.<br />
  <br />
    Boss : Lunarsaurus(x2), HP : 23000 chacun, faiblesse : aucune<br />
    Encore un combat qui n'est pas des plus faciles à part si vous avez l'épée Ragnarok qui fait 9999 HP de dégâts aux Lunarsaurus. Invoquez Bahamut et acharnez vous sur un seul à la fois. Une fois qu'un des 2 est mort l'autre ne tardera pas à succomber sous vos coups.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    Après le combat prenez les 2 coffres et continuez votre route. Suivez le chemin à l'Est, descendez l'escalier sur le chemin et franchissez le passage (92) .</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    Attention à partir d'ici les ennemis sont très forts. Descendez les marches à l'Est, prenez le coffre à l'Ouest, descendez les marches et essayez de prendre le sabre à l'Est, naturellement un boss vient vous déranger.<br />
  <br />
    Boss : Tidarthian, HP : 50000, faiblesse : aucune<br />
    Encore un dur à cuire…Dans ce combat il faut agir très vite car ce boss dispose d'attaques puissantes qu'il enchaîne allègrement. Utilisez la commande Lancer
    d'Edge, le Saut de Cain, la magie Flare de Rydia, attaquez avec Cecil et soignez avec Rosa à chaque tour.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    Après le combat vous recevez le deuxième Masamune. Descendez les marches au Nord. Prenez l'escalier au Sud, allez à l'Est pour un coffre, prenez un second escalier au Sud, allez à l'Ouest, descendez l'escalier, allez à l'Est, prenez le coffre au passage et marchez sur la dalle au bout du chemin. Prenez l'escalier à l'Ouest
    puis à l'Est, prenez le coffre non loin, allez à l'Ouest, prenez le coffre, descendez l'escalier, allez à l'Ouest et marchez sur la dalle. Suivez le chemin et marchez sur la dalle. Avancez un peu, vous apercevez
    Foo-Soo-Ya, Golbez et Zemus. Foo-Soo-Ya et Golbez s'unissent contrent Zemus et le détruise mais sa mort donne à
    Zeromus qui se débarrasse de Foo-Soo-Ya et Golbez…<br />
    <br />
    Boss : Zeromus, HP : ???, faiblesse : ???<br />
    Alors que vous êtes à l'agonie tout vos amis s'unissent pour vous remettre sur pieds. Utilisez le cristal que vous a donné Golbez avec Cecil sur Zeromus pour qu'il prenne sa vraie forme.<br />
  <br />
    Boss : Zeromus (vraie forme), HP : 110000, faiblesse : aucune<br />
    Il est déjà plus impressionnant…il vous faut être aux alentours du niveau 55 pour avoir une chance de le battre. Zeromus à quelques attaques destructrices et une seule erreur de votre part peut vous être fatale. Attaquez avec Cecil(équipez le avec l'épée Excalibur pour plus de dégâts), utilisez la commande Saut de
    Cain et la commande Lancer d'Edge, invoquez Bahamut sans relâche et soignez très souvent avec Rosa. Essayez de maintenir Rosa en vie pendant tout le combat car c'est en partie grâce à elle que vous aurez l'opportunité de terrasser
    Zeromus.<br />
    <br />
    Après le combat ne faites rien d'autre qu'admirer la très jolie fin de Final Fantasy IV : )</font></p>
  <p align="justify"><font size="1" face="Verdana">&nbsp;</font></p>
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
