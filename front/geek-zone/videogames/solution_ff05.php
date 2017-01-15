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
  <p align="center"><img border="0" src="/dmic-corp/images/logo4.jpg" width="237" height="95" /></p>
  <p align="center">&nbsp;</p>
  <p align="center"><font face="Comic Sans MS" color="#008000" size="5"><i><u>Monde 1</u></i></font></p>
  <p align="center"><font face="Comic Sans MS" color="#FFFFFF"><img border="0" src="/dmic-corp/images/carte1.jpg" width="600" height="567" /></font></p>
  <p align="justify"><i><u><font face="Comic Sans MS" color="#0000FF">Introduction</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
    <br />
    Vous découvrez Reina et son père. Il semblerait que le vent se soit arrêté et que le cristal de celui-ci ait des problèmes. Alors que Butz est autour du feu, avec son compagnon de route, le chocobo Boko, une météorite s'écrase près du château de Tycoon. Vous voici désormais sur la carte. Allez vers la droite pour
    rejoindre la météorite.<br />
  </font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font face="Comic Sans MS" color="#0000FF">Tycoon Meteor</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Vous surprenez bientôt deux Gobelins tentant de kidnapper Reina. Après le combat et quelques présentations, vous entendez des cris venant d'en haut à droite. Il s'agit de Galuf, un vieil homme amnésique qui se souvient que de son nom. Galuf et Reina décident de rejoindre le temple du vent. Vous voilà seul. En bas, sur la
      droite, se trouve un passage secret (dissimulé dans les buissons) menant à un coffre contenant une &quot;Phoenix Down&quot;. Retournez ensuite sur la gauche, vers votre chocobo. En suivant le chemin sur la gauche et après quelques péripéties, vous atteignez une drôle de caverne.<br />
    </font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font face="Comic Sans MS" color="#0000FF">Caverne</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Dans cette grotte se trouve une source qui vous permet de récupérer vos HP/MP. Il y a un coffre à ouvrir un peu après. Vous surprenez alors un pirate. Vous l'aurez compris, il suffit d'appuyer sur le crâne pour ouvrir la porte. Vous atteignez le repère des pirates.<br />
    </font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><i><u><b><font face="Comic Sans MS" color="#0000FF">Repère des pirates</font></b><font face="Comic Sans MS" color="#0000FF"><br />
      </font></u></i><font face="Comic Sans MS" color="#FFFFFF"><br />
        Pénétrez sur le bateau situé sur la droite et prenez le gouvernail ! Vous êtes surpris par Faris qui vous fait mettre au cachot. Acceptez ensuite que le pirate vous conduise au Temple du vent.<br />
      </font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font face="Comic Sans MS" color="#0000FF">Wind Shrine</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Allez parler aux érudits sur la gauche : les monstres ont envahi le temple et le roi est toujours là-haut ! Une jarre vous permet de récupérer vos HP/MP. Un érudit vous donne également 5 tonics. Montez maintenant les escaliers. Vous obtenez une tente (sur la gauche). La porte du milieu conduit à une sauvegarde. Prenez
      ensuite dans un premier temps l'escalier de droite (il vous permet d'obtenir &quot;Leather Cap&quot;) puis dans un deuxième temps l'escalier de gauche.</font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><u><font face="Comic Sans MS" color="#0000FF">Boss :</font></u></b><font face="Comic Sans MS" color="#FFFFFF"> Wingcrapter. Celui-ci est très facile à vaincre (deux tours suffisent).</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Vous pouvez désormais accéder à l'étage suivant. Un coffre est caché (on peut l'ouvrir grâce à un passage invisible en bas à droite : vous obtenez &quot;Staff&quot;). Vous arrivez ensuite au dernier étage, celui où se trouve le cristal du vent. Mais quelle
    est cette douce que nous attendons ? Le cristal se brise. Vous apprenez que vous êtes les guerriers choisis pour combattre le diable. Vous obtenez six nouveaux jobs (le savoir des ancêtres guerriers) : Knight, Monk, Blue Mage, Thief, Black Mage, White Mage. Utilisez maintenant le téléporteur. Boko vous proposera ensuite une
    petite explication concernant ces fameux jobs, acceptez ! Vous voilà de retour sur la carte.<br />
  </font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font face="Comic Sans MS" color="#0000FF">Tule</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Rejoignez la ville de Tule située à l'ouest du temple. Parlez au mage en violet si vous n'avez pas écouté les explications sur les jobs (il vous conduira à une maison pleine de mages qui vous donnent des conseils). Le tonneau à droite de l'auberge contient de l'argent. Allez ensuite au magasin de magies et achetez les
      toutes ! Une caisse et un tonneau contiennent un objet près du petit pont en haut. Entrez maintenant dans la grande maison en haut (celle de Zok). Pendant la nuit, Zok vous donnera la clé du canal. Le jour levé, quittez le village. Après une petite discussion sur le bateau, dirigez-vous à l'est, sur le bateau.<br />
    </font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font face="Comic Sans MS" color="#0000FF">Tornal Canal</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Ouvrez la porte puis avancez. Les combats ne sont pas très difficiles si vous êtes équipé de jobs (personnellement, à cet instant du jeu, j'utilise deux Knights, un Thief et un White Mage). Hydra (le bateau) est bientôt aspirée un tourbillon.</font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><u><font face="Comic Sans MS" color="#0000FF">Boss :</font></u></b><font face="Comic Sans MS" color="#FFFFFF"> Karl Boss : Attaquez sans relâche et utilisez des tonics ou cures lorsque nécessaire.</font></p>
      <p align="justify">&nbsp;</p>
    </blockquote>
  </blockquote>
  <b>
  <p align="justify"><i><u><font face="Comic Sans MS" color="#0000FF">Ship Graveyard</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
    <br />
    Hydra s'est sacrifiée et le bateau a dérivé ... Marchez sur le mat, allez vers le haut. Juste avant l'escalier, tournez à droite. Entrez et descendez les escaliers situés sur la droite. La porte du milieu permet d'obtenir une tente, celle de droite permet de progresser. Puis, allez dans l'eau grâce à l'escalier : un autre
    escalier se trouve sur la droite. Empruntez-le. La boîte avec la tête de mort contient 990 GP. Allez ensuite vers le haut. Vous pourrez utiliser deux portes. Celle du haut permet d'obtenir une &quot;Phoenix Down&quot;, celle du bas permet de continuer. Descendez alors l'escalier en bas à droite, vous arriverez à un nouvel
    écran. Allez donc vers le haut (un coffre contient un Tonic). Vous découvrez bientôt que Faris est ... une fille !!! Après un repos bien mérité, continuez par la porte où Reina s'était changée. Sauvez. Vous êtes de nouveau à l'extérieur. Marchez sur le mat et allez vers le bas (il ne faut pas sauter sur la pierre de
    droite). Entrez dans le bateau et récupérez le carte du monde (qui peut s'avérer utile;). En empruntant l'escalier de droite, vous trouverez trois coffres. Revenez sur vos pas et sautez sur cette fameuse pierre de droite. Le coffre est en fait un interrupteur qui vous permet d'ouvrir un nouveau passage.</font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><u><font face="Comic Sans MS" color="#0000FF">Boss :</font></u></b><font face="Comic Sans MS" color="#FFFFFF"> Siren : Ce boss n'est pas difficile. Veillez simplement à utiliser vos tonics et cures lorsque Siren se change en 'UnDead' (mort vivant). Vous pouvez ensuite rejoindre la carte.</font></p>
    </blockquote>
  </blockquote>
  <b>
  <p align="justify">&nbsp;</p>
  <p align="justify"><i><u><font face="Comic Sans MS" color="#0000FF">Kerwin Town</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
    <br />
    Au sud d'ici se trouve la charmante ville de Kerwin Town. Comme d'habitude, parlez à tout le monde, achetez un maximum de choses (armes, armures, magies ...). Au pub, il vous sera possible de jouer au piano mais aussi de récupérer un coffre grâce au passage secret en bas à gauche. En allant à l'étage, vous apprenez qu'un
    dragon se trouve dans les montagnes : la solution pour rejoindre Waltz ! Sortez donc et rejoignez ces dernières qui se trouvent un peu plus au nord.<br />
    <br />
  </font></p>
  <p align="justify"><b><i><u><font face="Comic Sans MS" color="#0000FF">North Moutain</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
    <br />
    Dans la grotte, il y a deux coffres à récupérer (une &quot;Phoenix Down&quot; et un &quot;Soft&quot;). Sortez par la porte en haut à gauche. Vous arrivez bientôt à un pont en cordes (faîtes attention, les plantes violettes sont empoisonnées !). Sauvegardez ensuite.</font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><u><font face="Comic Sans MS" color="#0000FF">Boss :</font></u></b><font face="Comic Sans MS" color="#FFFFFF"> Magissa : Tuez la d'abord et occupez vous de Faltzer ensuite. Pensez à vous guérir régulièrement.</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Après le combat, vous rejoignez le dragon : vous avez maintenant un moyen de transport un peu plus pratique que la marche !<br />
  </font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font face="Comic Sans MS" color="#0000FF">Town of Waltz</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Cette ville se trouve au sud de Kerwin Town. Pensez à visiter le magasin de magies car il est particulièrement intéressant ! (le magasin d'objets, comme dans la plupart des villes, se trouve dans l'auberge).<br />
    </font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font face="Comic Sans MS" color="#0000FF">Waltz Castle</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Allez parler au roi et apprenez qu'une nouvelle météorite vient s'écraser près de la tour de Waltz. Au deuxième étage du château, vous trouverez un escalier qui mène au &quot;StoreHouse&quot; dans lequel se trouvent quelques objets. Par ailleurs, je ne vous conseille pas de vous aventurer dans les sous-sols (B1 Floor)
      car les ennemis y sont trop puissants, pour l'instant).<br />
    </font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font face="Comic Sans MS" color="#0000FF">Waltz Tower</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Cette grande tour est bien visible sur la carte : elle est située au nord-ouest du château. Une fois là-bas, montez les étages tout simplement. Au quatrième étage, vous pouvez grimpez au lierre et récupérer une &quot;Silk Robe&quot;. Puis à droite du point de sauvegarde se trouve un &quot;Maiden's Kiss&quot;. Au
      huitième étage, grimpez aux branches de gauche dans un premier temps puis à celles de droite dans un deuxième temps.</font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><u><font face="Comic Sans MS" color="#0000FF">Boss :</font></u></b><font face="Comic Sans MS" color="#FFFFFF"> Garula : Pour battre ce monstre, misez sur les attaques physiques. C'est pourquoi je vous conseille de prendre dans votre équipe des Knights ainsi que des Monks uniquement, mais capables d'utiliser
        de la magie blanche.</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Vous obtenez ensuite, avec énormément de joie, cinq nouveaux jobs : Time Mage, Sorcerer, Summoner, Red Mage, Berseker. Ne vous inquiétez pas, le cristal situé en haut à gauche ne peut être récupéré ! La tour coule et Hydra vous sauve une nouvelle fois la vie
    !<br />
  </font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font face="Comic Sans MS" color="#0000FF">Retour au château de Waltz</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Allez dans la chambre du roi et parlez lui : il faut vous rendre à Karnak !<br />
    </font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font face="Comic Sans MS" color="#0000FF">Château de Tycoon</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Parlez au chancelier et passez la nuit. N'oubliez pas de fouiller toutes les pièces (tonneaux, caisses ...) car il y a beaucoup d'objets à récupérer ! De plus, une pièce à l'extrême gauche du château contient un levier qui permet d'investir une salle secrète. Vous y trouverez un &quot;Shuriken&quot;, un &quot;Katana&quot;
      et un &quot;Monster Bell&quot;.<br />
    </font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><i><u><b><font face="Comic Sans MS" color="#0000FF">Waltz Meteor</font></b><font face="Comic Sans MS" color="#0000FF"><br />
      </font></u></i><font face="Comic Sans MS" color="#FFFFFF"><br />
        Rendez-vous maintenant à la météorite qui s'est écrasé près de la tour ayant coulé. Elle vous permettra de vous téléporter sur l'autre continent, inaccessible avec le dragon.<br />
      </font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font face="Comic Sans MS" color="#0000FF">Town of Karnak</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      En progressant sur la carte, vous arrivez bientôt à la ville de Karnak. Vous apprenez que les monstres ont envahi le château et que Professeur Cid y est enfermé. En allant acheter une arme, vous vous faîtes envoyer en prison, justement près de Cid ! Le chancelier vous fera ensuite sortir. Rejoignez ensuite le bateau (Fire
      Ship). A l'intérieur de celui-ci se trouvent pas mal d'objets ! Fouillez donc les moindres recoins ! Il vous faut monter et descendre les étages avec ces sortes d'ascenseurs et passer par les conduits d'aération. Vous arrivez ensuite dans une salle dans laquelle il y a trois portes et quatre conduits. Le deuxième conduit en
      partant de la gauche vous permet d'obtenir &quot;Moonring&quot;, le troisième &quot;Thief 's Glove&quot;. La deuxième porte vous permet d'avancer (il faut prendre la porte de gauche après votre chute). Après le point de sauvegarde, vous êtes confronté à un petit exercice de logique. L'astuce consiste simplement à
      actionner certains leviers tout en étant sur la plaque qu'il fait bouger. Veillez aussi à actionner le levier en haut à gauche pour pouvoir récupérer le coffre ensuite. A cet instant de la partie, les combats sont assez énervants, donc utilisez la commande &quot;Kick&quot; des &quot;Monk&quot; pour pulvériser tous les
      ennemis en un coup.</font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><u><font face="Comic Sans MS" color="#0000FF">Boss :</font></u></b><font face="Comic Sans MS" color="#FFFFFF"> LiquidFlame : Je vous conseille de prendre au moins deux mages rouges dans votre équipe et d'utiliser &quot;Ice&quot; (glace) et &quot;Shiva&quot; sans relâche. Pensez à vous guérir
        régulièrement et n'utilisez surtout pas le feu.</font></p>
    </blockquote>
  </blockquote>
  <b>
  <p align="justify">&nbsp;</p>
  <p align="justify"><i><u><font face="Comic Sans MS" color="#0000FF">Fire Cristal</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
    <br />
    Vous arrivez devant le cristal du Feu qui se brise comme les autres ... Vous avez maintenant dix minutes pour quitter les lieux. Les coffres de la prison qui étaient auparavant inaccessibles peuvent désormais être ouverts. Prenez le temps de récupérer quelques objets ;) La destruction du château a entraîné celle du
    barrage : vous pouvez maintenant continuer. (Vous obtenez aussi trois nouveau jobs : Trainer, Geomancer et Ninja)<br />
  </font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font face="Comic Sans MS" color="#0000FF">Library of Ancients</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Elle se trouve au sud-est de Karnak. Sur la carte, ne marchez pas dans le sable car les ennemis y sont ma fois plutôt coriaces. A la bibliothèque, les érudits semblent plutôt anxieux. Descendez à l'échelle de gauche et entrez. Il faut que vous actionnez les interrupteurs pour déplacer les étagères et vous frayer un
      chemin. Vous rencontrez bientôt &quot;Ifrit&quot; (en grimpant à l'échelle à gauche d'une porte et en regardant le livre posé sur le sol).</font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><u><font face="Comic Sans MS" color="#0000FF">Boss :</font></u></b><font face="Comic Sans MS" color="#FFFFFF"> Ifrit : Attaquez logiquement avec vos magies de glace contre cette invocation symbolisant le feu.</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Vous arrivez ensuite derrière Mid, petit-fils de Cid.</font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><u><font face="Comic Sans MS" color="#0000FF">Boss :</font></u></b><font face="Comic Sans MS" color="#FFFFFF"> Biblos : Utilisez tout simplement Ifrit (voire vos magies de feu).</font></p>
    </blockquote>
  </blockquote>
  <b>
  <p align="justify">&nbsp;</p>
  <p align="justify"><i><u><font face="Comic Sans MS" color="#0000FF">Retour à Karnak</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
    <br />
    Retournez à Karnak, faîtes vos achats (puisque vous en aviez été empêché la dernière fois) et allez voir Cid à l'étage du pub. Retournez ensuite sur le Fire Ship où Cid vous invitera à vous reposer pendant qu'il répare le bateau. Après une discussion sur le passé de Galuf, réveillez Cid qui s'était assoupi. Vous
    êtes maintenant aux commandes d'un bateau !<br />
  </font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><u><i><font face="Comic Sans MS" color="#0000FF">Crescent Town</font></i></u></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Cette ville se trouve sur une île en forme de croissant, en bas à droite de la carte. Votre bateau coule : vous arrivez dans cette ville. Profitez en pour faire quelques achats, comme à l'accoutumé ! En allant dans la maison à droite, vous pourrez apprendre &quot;Strength Song&quot;. Vous apprenez également qu'un chocobo
      noir permet de voler. Rendez-vous donc dans la forêt en bas de Crescent Town.<br />
    </font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font face="Comic Sans MS" color="#0000FF">Forêt</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Attrapez ce fameux chocobo (violet ou noir ?). Vous récupérez par la même occasion les jobs Bard et Hunter. Le seul inconvénient du chocobo est qu'il faut le poser obligatoirement sur une forêt. Retournez ensuite grâce au volatile à &quot;Library of Ancients&quot;. Vous apprenez que le père de Reina a été vu à
      &quot;Sand Tides&quot; qui se trouve à l'ouest de la bibliothèque (très grande surface de sable, prenez le chemin à gauche)<br />
    </font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
  </font><b><i><u><font face="Comic Sans MS" color="#0000FF">Sand Tides</font></u></i></b></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><u><font face="Comic Sans MS" color="#0000FF">Boss :</font></u></b><font face="Comic Sans MS" color="#FFFFFF"> Sandworm : Pour le battre, n'utilisez surtout pas de magie. Veillez à avoir au moins un mage rouge dans votre équipe.</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Ensuite, ici le but n'est pas de rejoindre ce genre de temple, mais de descendre en bas de l'écran. Vous arrivez sur la carte et pouvez rejoindre &quot;Gorn Town&quot;.<br />
  </font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font face="Comic Sans MS" color="#0000FF">Gorn Town et Aéronef</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Une ville en ruines. En parcourant la ville, vous verrez le roi de Tycoon. Suivez-le Il vous piège et vous tombez dans un endroit étrange. Vous arrivez ensuite à un téléporteur qui vous amène près de Crescent. Vous avez ensuite le choix entre deux chemins. Commencez par emprunter celui du bas. Actionnez le bouton à
      gauche est suivez les instructions (fleurs, memo, urne, livre). Vous pouvez actionner le levier et ainsi récupérer deux &quot;Shuriken&quot; et un &quot;Mini&quot;. Puis empruntez le chemin du haut (en actionnant le levier) : vous arrivez sur le &quot;Fire Ship&quot; englouti précédemment ! Continuez sur la droite puis
      suivez Cid et Mid. A bord du vaisseau, parlez à Cid.</font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><u><font face="Comic Sans MS" color="#0000FF">Boss :</font></u></b><font face="Comic Sans MS" color="#FFFFFF"> Clay Claw : Mettez un Ninja dans votre équipe et utilisez les deux &quot;Shuriken&quot;. Vous voilà à bord d'un engin bi-fonction (bateau et avion !). De nouvelles contrées vous sont maintenant
        accessibles !!!</font></p>
    </blockquote>
  </blockquote>
  <b>
  <p align="justify">&nbsp;</p>
  <p align="justify"><font color="#0000FF"><u><i><font face="Comic Sans MS">De nouvelles contrées</font></i></u></font></b><font color="#0000FF"><u><font face="Comic Sans MS"><i><br />
    </i></font></u></font><font face="Comic Sans MS" color="#FFFFFF"><br />
      </font><b><i><u><font face="Comic Sans MS" color="#0000FF">Rikks Village</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
        <br />
        C'est le village natal de Butz. Il se trouve près du Temple du vent et est encerclé par les montagnes. Allez à l'auberge (c'est gratuit) pour apprendre des détails intéressants concernant Butz. Dans l'une des maisons, il y a une boîte à musique rose. Un érudit vous parlera de l'enfance du Butz (vous comprendrez pourquoi
        il a le vertige !).<br />
      </font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font face="Comic Sans MS" color="#0000FF">Easterly Village</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Contrairement à son nom, ce village se situe à l'extrême ouest de la carte (en haut). Vous pouvez y apprendre l'incantation &quot;Toad&quot; en inspectant le carré de fleur en haut à gauche et y faire quelques achats. Dans la forêt à droite de cette ville, près des chutes d'eau, vous pourrez récupérer Ramuh en le
      battant.<br />
      <br />
    </font></p>
  <p align="justify"><b><i><u><font face="Comic Sans MS" color="#0000FF">Jachol Village</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
    <br />
    Cette ville se trouve tout en bas à gauche de la carte. Vous pouvez y faire quelques achats intéressants.<br />
  </font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font face="Comic Sans MS" color="#0000FF">Tycoon Meteor</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      En survolant Gorn Town (la ville en ruines près de &quot;Sand Tides&quot;), vous verrez un drôle d'engin sortir du sol. Retournez à Crescent, à la base sous l'eau et parlez à Cid. Celui-ci vous informe qu'il vous faut de l'Adamantite pour améliorer le vaisseau et ainsi lui permettre de voler plus haut. Vous en trouverez
      dans la météorite près de Tycoon (la toute première du jeu). Entrez grâce à Galuf et récupérez cette roche de couleur violette.</font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><u><font face="Comic Sans MS" color="#0000FF">Boss :</font></u></b><font face="Comic Sans MS" color="#FFFFFF"> Adamantite : Cet ennemi est très résistant contre les attaques physiques mais s'avère très faible contre les attaques de glace. Je vous conseille donc de prendre quatre mages rouges et d'utiliser
        à fond &quot;Ice&quot; et &quot;Shiva&quot; tout en guérissant toute l'équipe une fois par tour.</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Retournez ensuite à la base sous-marine pour livrer la roche que Cid et Mid utilisent pour s'empresser d'améliorer le vaisseau : vous pouvez maintenant voler plus haut et atteindre le drôle de vaisseau.<br />
  </font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font face="Comic Sans MS" color="#0000FF">Ruins of Ronka</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Grâce à la nouvelle fonctionnalité de votre engin, vous pouvez maintenant accéder aux Ruines de Ronka. Pour pouvoir entrer dans ces dernières, vous devez dans un premier temps battre les cinq canons qui protègent leur entrée. Il est important de se rappeler qu'il est possible de descendre sauvegarder entre chaque combat
      ...</font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><u><font face="Comic Sans MS" color="#0000FF">Boss :</font></u></b><font face="Comic Sans MS" color="#FFFFFF"><br />
        - Rocket Gun<br />
        - FlameThrow<br />
        <br />
        Il s'agit des quatre canons situés au deux extrémités de la plate-forme. Ces ennemis sont très sensibles à la foudre et à la magie &quot;Wind Slashes&quot; da la commande &quot;Earth&quot; du Geomancer. Utilisez donc ces deux magies sans relâche tout en vous guérissant régulièrement.<br />
        <br />
        </font><b><u><font face="Comic Sans MS" color="#0000FF">Boss :</font></u><font face="Comic Sans MS" color="#FFFFFF"> Soul Gun</font></b><font face="Comic Sans MS" color="#FFFFFF"><br />
          <br />
          Vous pouvez maintenant combattre le gros canon central. Celui-ci est composé de trois parties, chacune d'entre elles devant être anéantie. Pour batte facilement cet ennemi, j'utilise personnellement trois Red Mage et un Summoner et emploie sans relâche Bolt2 et Ramuh et me guérie très régulièrement. En effet, l'attaque
          &quot;Beam Cannon&quot; est assez dévastatrice puisqu'elle peut causer jusqu'à 500 HP de dommages à tous les personnages. Il est donc important, avant le combat, de veiller à avoir un nombre de MP conséquent.</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Vous pouvez maintenant pénétrer les ruines.<br />
    <br />
    J'utilise dans cette partie deux Knight, un Ninja et un Geomancer. Équipez-vous de la capacité &quot;Secret&quot; (Thief) : les passages cachés et les coffres à récupérer sont très nombreux. Même si ces ruines se rapprochent assez d'un labyrinthe, je vous conseille fortement de prendre le temps de fouiller les moindres
    recoins. Vous pourrez ainsi trouver une Gold Armor, un Gold Shield, un Élixir, une Phoenix Down, une Potion. Une salle par exemple contient un Shuriken, 5000 GP, une AncientSword, un MoonRing et un PowerWrist. Vous arrivez bientôt devant le père de Reina, qui paraît d'ailleurs bizarre, après avoir actionné un interrupteur.
    Vous avez pu sauvegarder, quelques instants avant, en empruntant l'escalier de droite.</font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><u><font face="Comic Sans MS" color="#0000FF">Boss :</font></u></b><font face="Comic Sans MS" color="#FFFFFF"> Archeoavis<br />
        <br />
        Il s'agit d'un ennemi qui peut poser problème : ses faiblesses sont aléatoires. J'utilise personnellement un Knight, un Ninja (qui lance Shurikens et autres armes), un Red Mage qui guérit les personnages à tous les tours et un Geomancer et sa capacité &quot;Earth&quot;, très dévastatrice dans la première partie du
        combat. La deuxième partie du combat, après que Archeoavis a été régénéré par le cristal, se révèle beaucoup plus simple si vous avez réussi un maintenir un bon niveau de HP, grâce à votre Red Mage.</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">A la suite du combat, vous faîtes la rencontre de Krile, la petite fille de Galuf. Le dernier cristal se brise : X-Death est de retour et vous donne rendez-vous dans le monde de Galuf. Le roi de Tycoon se sacrifie pour sauver les cristaux. Vous récupérer Samourai,
    Lancer, Dancer et Chemist.<br />
    <br />
    Après une discussion qui en apprend un peu plus sur votre nouvel ennemi X-Death (il y a trente ans, il était venu pour détruire les cristaux sur Terre mais avait été piégé), Galuf et Krile retournent dans leur monde via la météorite.<br />
  </font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font face="Comic Sans MS" color="#0000FF">Court retour à Crescent</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Butz, Faris et Reina décident de rejoindre finalement leur compagnon dans l'autre monde. Vous trouvez une lettre de Cid qui vous informe que Mid et lui se trouvent à la météorite de Tycoon. Allez-y.<br />
    </font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font face="Comic Sans MS" color="#0000FF">Tycoon Meteor</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Il s'agit de la météorite du tout début du jeu. Grâce à l'Adamantite, Mid et Cid, nos deux experts en moyens de transport, espèrent régénérer le pouvoir des météorites.<br />
    </font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font face="Comic Sans MS" color="#0000FF">Karnak Meteor</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      C'est la météorite située à l'ouest de Tycoon.</font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><u><font face="Comic Sans MS" color="#0000FF">Boss :</font></u></b><font face="Comic Sans MS" color="#FFFFFF"> Titan<br />
        <br />
        Il ne pose strictement aucun problème si vous êtes équipé du Job Samouraï et que vous utilisez la capacité $toss qui pulvérise l'ennemi en un coup. Vous venez de récupérer une nouvelle invocation.</font></p>
    </blockquote>
  </blockquote>
  <b>
  <p align="justify">&nbsp;</p>
  <p align="justify"><u><i><font face="Comic Sans MS" color="#0000FF">Waltz Meteor</font></i></u></b><font face="Comic Sans MS" color="#FFFFFF"><br />
    <br />
    Il s'agit de la météorite située à l'endroit où se trouvait la grande tour ayant coulé.</font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><u><font face="Comic Sans MS" color="#0000FF">Boss :</font></u></b><font face="Comic Sans MS" color="#FFFFFF"> Byurobolos (x6)<br />
        <br />
        C'est l'un de ces combats qui peut être particulièrement embêtant si l'on n'emploie pas la bonne stratégie. Encore une fois, privilégiez la simplicité et utilisez la commande $toss qui tue les six ennemis en un coup. Cette commande est totalement inefficace contre certains ennemis mais s'avère particulièrement
        dévastatrice sur d'autres.</font></p>
    </blockquote>
  </blockquote>
  <b>
  <p align="justify">&nbsp;</p>
  <p align="justify"><i><u><font face="Comic Sans MS" color="#0000FF">Gorn Meteor</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
    <br />
    Cette météorite est située à l'endroit où se sont écrasées les ruines. Cid et Mid se sont faits capturer par un monstre.</font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><u><font face="Comic Sans MS" color="#0000FF">Boss :</font></u><font face="Comic Sans MS" color="#FFFFFF"> KimaBrain</font></b><font face="Comic Sans MS" color="#FFFFFF"><br />
        <br />
        Vous pouvez lui voler une &quot;Dragon Fang&quot;. Battez le grâce à la commande $toss.</font></p>
    </blockquote>
  </blockquote>
  <p><font face="Comic Sans MS" color="#FFFFFF">Avant de vous rendre à l'endroit que vous a indiqué Cid, je vous conseille de vous poser les questions suivantes. Vous ne pourrez revenir dans ce monde avant un bon bout de temps. Avez-vous récupéré Shiva au château de Waltz ? Avez-vous récupéré Elf Cloak et la magie Speed
    dans les sous-sol du château de Waltz (les ennemis étaient particulièrement difficiles) ? Avez-vous récupérer tous les trésors au château de Tycoon ? Avez-vous récupéré Ramuh dans la forêt de Easterly ? Avez-vous récupéré la magie Toad à Easterly Village ? Avez-vous appris les Song de Rikks, Crescent Town et
    Easterly Village ? Avez-vous appris toutes les magies bleues possibles ? Avez-vous regardé toutes les scènes concernant Butz à Rikks ?<br />
    <br />
    Vous pouvez maintenant quitter ce monde sans craindre d'avoir oublié quelque objet. Rendez-vous donc à l'endroit indiqué sur la carte, à l'intersection des champs d'énergie. Reina, Faris et Butz rejoignent Galuf dans ce monde inconnu.</font></p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p align="center"><i><u><b><font face="Comic Sans MS" size="5" color="#008000">Monde 2</font></b></u></i></p>
  <p align="center"><img border="0" src="/dmic-corp/images/carte2.jpg" width="600" height="596" /></p>
  <b>
  <p align="justify"><i><u><font face="Comic Sans MS" color="#0000FF">Ile perdue</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
    <br />
    Vous vous trouvez désormais sur une île où il n'y a apparemment rien à faire. En restant immobile quelques instants, l'équipe vous propose de vous reposer dans une tente. Si vous n'en avez pas, faîtes des combats pour en gagner. Alors que vous vous reposez dans la forêt, un boss vous surprend.</font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><u><font face="Comic Sans MS" color="#0000FF">Boss :</font></u></b><font face="Comic Sans MS" color="#FFFFFF"> Très facile à battre.</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">En ouvrant le coffre, vous êtes gazés.<br />
    <br />
  </font></p>
  <p align="justify"><b><i><u><font face="Comic Sans MS" color="#0000FF">Château de X-Death</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
    <br />
    Vous y êtes prisonniers. Vous incarnez ensuite Galuf. Descendez alors les étages pour retrouver vos compagnons.</font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><u><font face="Comic Sans MS" color="#0000FF">Boss :</font></u></b><font face="Comic Sans MS" color="#FFFFFF"> Gilgamesh<br />
        <br />
        Je l'ai personnellement battu en deux coups grâce à mes Knights.</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Remontez les escaliers que vous aviez descendus quelques instants plus tôt. L'une des deux portes qui étaient fermées est maintenant ouverte. Vous êtes sur la carte.<br />
  </font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font face="Comic Sans MS" color="#0000FF">Pont</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Rendez-vous au long pont situé sur la gauche. Vous aurez des ennemis à combattre. Appréciez au passage cette musique très rythmée et entraînante !</font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><u><font face="Comic Sans MS" color="#0000FF">Boss :</font></u></b><font face="Comic Sans MS" color="#FFFFFF"> Gilgamesh<br />
        <br />
        Toujours aussi facile à battre. J'utilise personnellement un Red Mage, un Samouraï, un Geomancer et un Knight.</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Une sorte d'explosion vous propulse ensuite sur un autre continent. En allant ver l'est, vous vous trouverez bientôt devant une petite ville.<br />
  </font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font face="Comic Sans MS" color="#0000FF">Lugor Border Town</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Comme d'habitude, profitez de ce genre de petite halte pour faire vos achats en armes, armures, objets, magies et pour vous reposer à l'auberge. Dansez au pub et obtenez 100 GP. Pendant la nuit, vous aurez une petite discussion avec Galuf.<br />
    </font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font face="Comic Sans MS" color="#0000FF">Forêt Moogle</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Descendez au sud (ne vous attardez pas dans le château que vous croiserez, les ennemis y sont beaucoup trop fort pour l'instant), allez à l'est puis au nord. Vous arrivez dans une forêt où se trouve un moogle. Celui-ci tombe dans une rivière souterraine. Allez le sauver.<br />
    </font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font face="Comic Sans MS" color="#0000FF">Rivière souterraine</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Le courant vous impose un chemin. Vous récupérez bientôt 4400 GP. Empruntez la chute d'eau. Vous récupérez une Phoenix Down. Un boss tient le pauvre petit Mog ...</font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><u><font face="Comic Sans MS" color="#0000FF">Boss :</font></u></b><font face="Comic Sans MS" color="#FFFFFF"> Tyrasaurus<br />
        <br />
        Ce boss est un mort vivant. Une Phoenix Down l'anéantit donc immédiatement.</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Le Moogle vous montre ensuite un chemin. Utilisez-le, en faisant bien attention de ne pas marcher dans les zones de sable (les ennemis y étant particulièrement coriaces).<br />
  </font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font face="Comic Sans MS" color="#0000FF">Moogle Village</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Vous arrivez dans le village des moogles (dissimulé dans la forêt). Retrouvez le Mog que vous avez sauvé. Vous récupérez un Cottage, un Dancing Dirk, 1 GP, 10 000 GP, une Phoenix Down ainsi qu'un Ether. Grâce au pouvoir télépathique des mogs et à sa capacité à comprendre ces derniers, Krile vous rejoint.<br />
    </font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font face="Comic Sans MS" color="#0000FF">Château de Val</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Krile vous amène au château de Val grâce à son dragon. Vous pouvez y récupérer Hero Drink et vous apprenez Telepo (dans le passage secret). Notez également que le château possède ses propres magasins et auberge. Je vous déconseille d'aller au deuxième sous-sol. Retrouvez Krile sur le toit. Elle vous annonce que son
      dragon est en train de mourir. Vous devez récupérer une herbe spéciale pour le soigner. Vous devez pour cela vous rendre dans la vallée des dragons. Vous pouvez récupérer Angel Robe dans l'auberge. En sortant du château, vous affrontez un boss.</font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><u><font face="Comic Sans MS" color="#0000FF">Boss :</font></u></b><font face="Comic Sans MS" color="#FFFFFF"> Aductor<br />
        <br />
        La commande $toss marche avec lui. Autant vous dire qu'il ne fait pas long feu.</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Vous devez aller au nord comme vous l'a indiqué Galuf. Mais vous devez dans un premier temps passer par Kelb Village.<br />
  </font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font face="Comic Sans MS" color="#0000FF">Kelb Village</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Dans un premier temps, tous les magasins sont fermés. La grille est fermée. La seule maison dans laquelle vous pouvez rentrer est celle de Kelga. Butz combattra alors contre ce dernier. Vous apprenez ensuite que le père de Butz, Drogan, faisait partie des quatre Dawn Warriors au même titre que Kelga, Galuf et Zeza. Ils combattirent
      X-Death trente ans auparavant. Après cette scène, les magasins et la grille sont réouverts.<br />
    </font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font face="Comic Sans MS" color="#0000FF">Valley of Dragoons</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Elle se trouve au nord de Kelb. Vous récupérez 5000 GP dans la première caverne. Vous récupérez un Cottage. Vous passez sur un pont de cordes.<br />
  <br />
      Très important : si vous combattez contre Golem, ne le frappez surtout pas mais guérissez le plutôt, comme il vous le demande. Si vous avez réussi à le maintenir en vie jusqu'à la fin du combat, en ayant battu les deux autres ennemis, vous l'aurez comme invocation. Golem est une invocation assez importante puisqu'elle
      permet de vous protéger pendant le combat.<br />
      <br />
      Vous arrivez bientôt dans une grotte où il y a une porte bloquée. Sur la droite se trouve un trou qui apparaît lorsque vous marchez dessus. Laissez vous tomber dedans pour pouvoir actionner ensuite ce petit crâne et débloquer le chemin. Dans la grotte maintenant accessible, commencez par aller sur la gauche afin de
      récupérer Wind Sword et Coronet. Sur la droite, vous récupérez une Phoenix Down et pouvez sauvegarder. Vous arrivez ensuite devant une herbe de dragon.</font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><u><font face="Comic Sans MS" color="#0000FF">Boss :</font></u></b><font face="Comic Sans MS" color="#FFFFFF"> Dragon Grass<br />
        <br />
        Utilisez les invocations Golem et Titan, un Samouraï pour sa commande $toss.</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Vous récupérez alors cette herbe et pouvez retourner au château.<br />
  </font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font face="Comic Sans MS" color="#0000FF">Val Castle</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Le soldat vous aviez prévenu que vous ne pourriez revenir à cause du sceau. Cependant, vous pouvez tout de même pénétrer le château en sautant sur la gauche, dans l'eau. Vous actionnerez une sorte d'interrupteur et vous serez aspirer dans le château. Krile vous apprend que vous devez aller voir Gill le sage. Il habite sur
      une île au nord-est de la vallée des dragons. Allez guérir le dragon. Rendez-vous sur cette île.<br />
    </font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font face="Comic Sans MS" color="#0000FF">L'île de Gill</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      L'île coule ... Allez au château qui se trouve pas très loin de cette île à l'ouest.<br />
    </font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><u><i><font face="Comic Sans MS" color="#0000FF">Surgate Castle</font></i></u></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Appuyez sur l'interrupteur pour entrer. Dans la bibliothèque du château, vous pouvez récupérer le registre des monstres. Dans la chambre du roi, vous récupérez Song of Speed. Vous apprenez au pub que Zeza, roi de Surgate et &quot;guerrier de l'aube&quot; s'apprête à attaquer le château de X-Death, qui est protégé par
      une barrière magique, avec sa flotte et que vous pouvez y poser votre dragon.<br />
    </font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font face="Comic Sans MS" color="#0000FF">La flotte de Zeza</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Retournez donc au château du début du deuxième monde. A droite de celui-ci se trouvent plusieurs bateaux. Posez y votre dragon. Zeza vous propose de vous reposer. Descendez dans les cabines et utilisez celle de droite. Pendant la nuit, le bateau est attaqué. Occupez-vous des monstres.</font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><u><font face="Comic Sans MS" color="#0000FF">Boss :</font></u></b><font face="Comic Sans MS" color="#FFFFFF"> Gilgamesh et Enkido<br />
        <br />
        Gilgamesh n'est décidément pas dur à battre. Attaquez simplement et guérissez-vous lorsque nécessaire.</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Après le combat, retrouvez Zeza dans la cabine de gauche. Déplacez avec lui la grosse caisse. Vous vous trouvez dans le sous-marin. Suivez ensuite Zeza à l'extérieur du sous-marin malgré sa demande.<br />
  </font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font face="Comic Sans MS" color="#0000FF">Barrier Tower</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Votre but dans cet tour est d'atteindre son sommet. Vous récupérez Whisper Grass qui vous permet de rester en communication avec Zeza. Vous récupérez 9000 GP. Au sixième étage, vous récupérez 18 000 GP. Au neuvième étage, le monstre dans le coffre de gauche vous fait gagner 6 ABP et un HairOrnament.</font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><u><font face="Comic Sans MS" color="#0000FF">Boss :</font></u></b><font face="Comic Sans MS" color="#FFFFFF"> Il est assez dur à battre. Son attaque comète est très dévastatrice et peut tuer vos personnages en une fois (1500 HP). J'utilise personnellement un Samouraï, un Knight, un Summoner et un Red
        Mage. Même si la situation semble perdue, continuez d'attaquer sans relâche. On peut parfois attaquer six fois sans que lui nous attaque.</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Vous avez détruit avec succès la barrière protectrice. Vous contrôlez maintenant le sous-marin.<br />
  </font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font face="Comic Sans MS" color="#0000FF">Gill Shrine</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Rendez-vous grâce à votre nouvel engin au quasi centre de la carte. Il y a un système de coffres qui ouvrent des portes. Il y a cinq coffres, donnons un numéro à chacun d'entre eux.</font> <font face="Comic Sans MS" color="#FFFFFF">Récupérez la pierre dans le coffre 5 pour la mettre dans le coffre 1. Vous pouvez
        maintenant débloquer un passage en appuyant sur le crâne. Mettez ensuite la pierre dans le coffre 4. Vous pouvez descendre au niveau 3 grâce au passage débloqué précédemment. Les coffres 2 et 3 ouvrent des portes qui ne mènent à rien. Au 3eme niveau, allez appuyez sur l'interrupteur en passant par le petit passage en
        bas à gauche. Vous arrivez bientôt devant une tortue. Il s'agit de Gill ! Vous récupérez Elder's Branch. Elle permet d'entrer dans la forêt de Moore. Pour quitter les lieux, mettez la pierre dans le coffre 5.<br />
</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font face="Comic Sans MS" color="#0000FF">Moore Village</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Lorsque vous vous trouvez sous l'eau avec votre sous-marin, la carte indique une ville à l'ouest. Le seul moyen d'y arriver est d'utiliser le sous-marin (celle-ci étant entourée par des montagnes). Faîtes-y des achats comme à l'accoutumée.<br />
    </font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font face="Comic Sans MS" color="#0000FF">Forêt de Moore</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Les combats y sont très nombreux et assez durs. Prévoyez beaucoup de potions et autres objets pour vous guérir.<br />
  <br />
      Dans la première partie de la forêt, vous récupérez 2500 GP et 4900 GP. Un arbre possède un creu. Appuyez dessus pour accéder à la deuxième partie de la forêt. Vous traversez un tunnel.<br />
  <br />
      Dans la deuxième partie, vous récupérez une Phoenix Down (en haut) et 9500 GP (sur la droite). Appuyez encore une fois sur un arbre possédant un creu pour accéder à la troisième partie de la forêt.<br />
  <br />
      Dans la troisième partie, vous trouvez un Cottage (tout de suite à gauche) et une Giant Drink (en bas à droite). Vous passez devant un cercle de flamme : il s'agit d'un point de sauvegarde. Vous récupérez sun Élixir (en haut, en longeant les buissons). Vous rencontrerez sûrement des dragons verts : ils ont une attaque de
      vent qui vous enlève 2500 HP. Plus haut, vous récupérez Mace, une arme pour les mages.<br />
      <br />
      X-Death met ensuite le feu à la forêt et vous êtes contraints de suivre le mog dans sa cachette. Vous pouvez vous restaurer à la source. Sortez et récupérez Flame Shield. Allez sur la gauche. Vous obtenez Ash et Flame Saber. Vous arrivez alors devant Elder's Tree et la branche vous débloque une nouvelle fois le chemin. A
      l'intérieur de l'arbre, vous affrontez un boss plutôt dur.</font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><u><font face="Comic Sans MS" color="#0000FF">Boss :</font></u></b><font face="Comic Sans MS" color="#FFFFFF"> (pas de nom)<br />
        <br />
        Il s'agit d'un boss qui possède quatre parties de 7777 HP. Attaquez avec vos Knights et Monks. Ayez un Red Mage ou un White Mage pour vous guérir en permanence. Si vous avez beaucoup d'argent, la commande $toss du Samouraï s'avère très utile. Invoquez Golem en début de combat pour vous protéger des attaques physiques.</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Galuf sacrifie ensuite sa vie pour repousser X-Death. Krile joint votre équipe. Elle hérite comme par magie des caractéristiques de Galuf.<br />
    <br />
    Avant de vous rendre au château de X-Death. Allez récupérez Bonemail, une excellent armure, et l'invocation Shoat si vous ne les avez pas encore.<br />
  <br />
    Vous pouvez maintenant vous rendre sans craintes au château de X-Death.<br />
  </font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF"><br />
    </font><b><i><u><font face="Comic Sans MS" color="#0000FF">Château de X-Death</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
      <br />
      Dans le château, les combats sont très nombreux et plutôt durs donc veillez encore une fois à posséder les objets qui vous serviront sans aucun doute. Ces combats auront au moins le mérite de vous apporter beaucoup d'ABP. Mais n'hésitez pas à fuir si nécessaire.<br />
  <br />
      Allez directement en haut (il n'y a rien à prendre dans les étages inférieurs).<br />
  <br />
      Au deuxième étage, vous trouvez Diamnd Shield et un Ether.<br />
  <br />
      Au troisième étage, vous avez l'impression qu'il n'y a pas d'issue mais en revenant sur vos pas, Krile vous apprend qu'il s'agit d'une illusion de X-Death.<br />
  <br />
      Au quatrième étage, vous obtenez Ice Shield.<br />
  <br />
      Au cinquième étage, vous récupérez un objet dont j'ai oublié de noter le nom !<br />
  <br />
      Au sixième, vous obtenez un Élixir.<br />
  <br />
      Au septième, vous trouvez Blizzard, une bonne arme dont l'élément est la glace, et Kotetsu, un katana.<br />
  <br />
      Au huitième niveau, à droite vous trouvez un Élixir et à gauche 9900 GP.<br />
  <br />
      Au neuvième étage, ayez un Geomancer pour que vous ne perdiez pas de vie en marchant sur la lave et pour ne pas tomber dans les trous.<br />
  <br />
      Au dixième, vous récupérez une Lance et 800 GP. Sur la droite, mettez vous contre le mur du haut et vous serez téléporté devant la flamme verte et rouge.</font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><u><font face="Comic Sans MS" color="#0000FF">Boss :</font></u></b><font face="Comic Sans MS" color="#FFFFFF"> Carbuncle<br />
        <br />
        Privilégiez les attaques physiques puisque ce boss a la magie Reflet ou utilisez Reflet sur vos membres et lancez leur vos magies pour toucher Carbuncle (une magie ne pouvant être reflétée deux fois).</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Le combat fini, retournez au dixième niveau. Quand vous allez sur la droite, un chemin s'écarte. Appuyez sur le mur du bat pour faire réapparaître ce passage.<br />
    <br />
    Au onzième niveau, vous arrivez à un coffre vide. En empruntant la porte de droite, vous trouvez Partisan et Magishuriken. En utilisant celle de gauche, vous rencontrez Gilgamesh.</font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><u><font face="Comic Sans MS" color="#0000FF">Boss :</font></u></b><font face="Comic Sans MS" color="#FFFFFF"> Gilgamesh<br />
        <br />
        Il n'est jamais très dur à battre. Attaquez normalement tout en veillant à vous guérir lorsque nécessaire.</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Au treizième et dernier niveau, vous faîtes face à X-Death.</font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><u><font face="Comic Sans MS" color="#0000FF">Boss :</font></u></b><font face="Comic Sans MS" color="#FFFFFF"> X-Death<br />
        <br />
        Commencez par invoquer Golem et Carbuncle et ré invoquez les souvent. Ceci implique que vous vous guérissiez avec des objets. Un Chemist peut donc s'avérer utile. La commande $toss est très pratique si vous avez suffisamment d'argent. Équipez également vous deux meilleurs combattants de Flame Shield et Ice Shield. En
        effet, X-Death utilise beaucoup Fire 3 et Ice 3.</font></p>
      <p>&nbsp;</p>
    </blockquote>
  </blockquote>
  <p align="center"><b><i><u><font face="Comic Sans MS" size="5" color="#008000">Monde 3</font></u></i></b></p>
  <p align="center"><img border="0" src="/dmic-corp/images/carte3.jpg" width="600" height="570" /></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">A suivre....</font></p>
  <h1 class="Style3">&nbsp;</h1>
  <span class="Style3">
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
