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
  <p align="center"><font face="Star Jedi" color="#FF0000" size="7"><u><i>Solution</i></u></font></p>
  <p align="center"><img src="/dmic-corp/images/ff9logo.gif" alt="" width="160" height="67" border="0" /></p>
  <p align="center"><font face="Verdana"><i><u><font size="4" color="#008000">CD1</font></u></i></font></p>
  <p align="justify"><font face="Verdana"><u><font color="#0000FF">1. Prima Vista</font></u></font></p>
  <blockquote>
    <blockquote>
      <p align="justify"><font face="Verdana" color="#FFFFFF"> À récupérer :</font></b><font face="Verdana" color="#FFFFFF"><br />
        - 47 Gils, en fouillant la pièce<br />
        - 2 Potions, en fouillant la pièce et à voler à Maskedefer<br />
        - 1 Poignet, à voler à Maskedefer<br />
        - 1 Dague Magik, à voler à Maskedefer </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">Après la séquence d'introduction, vous vous retrouvez dans le vaisseau Prima Vista. Muni de votre lampe, fouillez la pièce. A chaque &quot;!&quot;, appuyez sur X pour dénicher un objet ! <br />
    Une fois que vous avez récupéré les objets et regardé les informations sur le Prima Vista (important pour la suite), approchez-vous de la chandelle au milieu. Appuyez sur X pour l'allumer. Renommez alors votre personnage. Le nom de
    base, et celui que nous gardons pour cette solution, est <b>Djidane</b>. Les trois personnages qui arrivent sont vos amis. C'est alors qu'un monstre arrive. Pendant le combat, utilisez la commande &quot;Voler&quot; pour récupérer des objets. Attaquez-le ensuite jusqu'à ce qu'il enlève son masque : il s'agit en fait de Bach,
    votre chef. <br />
    Après son briefing, il vous pose une question. Répondez-lui &quot;La princesse Grenat&quot;, mais essayez quand même l'autre proposition (une petite astuce permet de voir une scène cachée !). Une nouvelle FMV s'ensuit. </font></p>
  <p align="justify">&nbsp;</p>
  <b><font FACE="Verdana">
  <p align="justify"><u><font color="#0000FF">2. Alexandrie</font></u></p>
  <blockquote>
    <blockquote> </font>
      <p align="justify"><font face="Verdana" color="#FFFFFF"> À récupérer :</font></b><font face="Verdana" color="#FFFFFF"><br />
        - 6 Potions, sur la place à la statue, 2 dans la grande rue, chez la grand-mère, dans la taverne, à droite dans l'église<br />
        - 1 Carte Sahagin, sur la place à la statue<br />
        - 1 Carte Zombie, sur la place à la statue<br />
        - 1 Carte Kaïmahan, sur la place à la statue<br />
        - 9 Gils, chez la grand-mère<br />
        - 1 Carte Meiden, chez la grand-mère<br />
        - 33 Gils, dans les fourrés de la rue de la taverne<br />
        - 1 Carte Gobelin, dans les fourrés de la rue de la taverne<br />
        - 1 Carte Flambos, dans la taverne<br />
        - 27 Gils, dans la taverne<br />
        - 38 Gils, chez le marchand d'objets<br />
        - 1 Résurex, sur la grande place<br />
        - 1 Remède, dans l'armurerie<br />
        - 1 Ether, dans l'armurerie<br />
        - 1 Tente, dans l'église<br />
        - 3 Gils, dans la maison à droite de l'église<br />
        - 1 Lasik, dans la maison à droite de l'église<br />
        - 29 Gils, sur les toits<br />
        - 63 Gils, sur les toits<br />
        - 92 Gils, sur les toits </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">Vous voici entre les mains d'un curieux petit bonhomme aux yeux luisants sous son chapeau. Une fois remis d'aplomb de votre chute, allez vers le bas. Vous aboutirez à une petite place : fouillez-la ! <br />
    Revenez sur vos pas et montez la rue. Un souriceau vous foncera dedans ! Entrez ensuite dans les différentes maisons pour dénicher des objets. <br />
    Continuez vers le haut. Vous verrez des Nobles de Tréno. Entrez dans la taverne au centre et fouillez la. Sortez puis continuez vers la gauche. Entrez dans la boutique à droite. N'achetez rien pour le moment ! <br />
    Continuez tout droit et vous arriverez sur la Grande Place d'Alexandrie.<br />
    Allez au guichet, au milieu, pour enregistrer votre billet mais aussi pour apprendre plein de choses sur la Reine et sa fille ! Il s'avère au final que votre billet est un faux... L'homme au guichet vous offre alors une <b>Carte Gobelin</b>, une <b>Carte Meiden</b> et une <b>Carte Squelette</b>.<br />
    Entrez dans les différents commerces autour de la place pour dénicher d'autres objets. <br />
    Vous pouvez jouer à la corde à sauter à gauche de la place. En fonction de votre nombre de saut, vous remportez des objets ! Néanmoins attention, la vitesse augmente. </font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><font face="Verdana" color="#FFFFFF">Vos gains : </font></b><font face="Verdana" color="#FFFFFF"><br />
        - <b>Pour 20 sauts :</b> 10 Gils<br />
        - <b>Pour 50 sauts :</b> Carte Pampa<br />
        - <b>Pour 100 sauts :</b> Carte Genji<br />
        - <b>Pour 200 sauts :</b> Carte Alexandrie<br />
        - <b>Pour 300 sauts :</b> Carte Chakette<br />
        - <b>Pour 1000 sauts :</b> Corde d'or </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">Allez dans la ruelle en bas à gauche. Une fois que l'horloger est parti, le même souriceau qui vous a bousculé arrive. Il vous demande de l'aider. Acceptez, sauf si vous voulez parler à Jack. Pour lui parler, refusez au souriceau et attendez qu'il arrive en haut de la ruelle. Allez directement lui parler,
    sinon il risque de vous voler de l'argent. Il vous expliquera alors les règles du jeu de cartes ! Vous pouvez ensuite revenir dans la ruelle.<br />
    Si vous avez dit oui au souriceau, il vous demande d'aller observer si le champ est libre. Dites-lui oui puis suivez-le vers le bas. <br />
    Descendez la rue et entrez dans la maison avant l'église pour la fouiller. Sortez puis allez sur le ponton de bois. En longeant le mur de l'église, vous trouverez Tom, un petit garçon qui a perdu son chat. Celui-ci se trouve sur la place que vous avez visité au tout début ! Appuyez sur X
    devant le chat et Tom viendra le chercher. Retournez là où il était, il vous donnera une <b>Carte Succube</b>. <br />
    Entrez maintenant dans l'église dans laquelle le souriceau est allé. <br />
    Essayez de grimper l'échelle. Un Mog vous tombe dessus ! A la fin de la discussion, vous pourrez sauvegarder grâce à lui. Il s'appelle <b>Coubo</b>. Montez rejoindre le souriceau et aventurez vous sur les toits. Fouillez-les ! Vous découvrez que le petite mage noir s'appelle <b>Bibi</b>. Vous entrez alors dans le château... </font></p>
  <p align="justify">&nbsp;</p>
  <b><font FACE="Verdana">
  <p align="justify"><u><font color="#0000FF">3. Le Château d'Alexandrie</font></u></p>
  <blockquote>
    <blockquote> </font>
      <p align="justify"><font face="Verdana" color="#FFFFFF"> À récupérer :</font></b><font face="Verdana" color="#FFFFFF"><br />
        - 2 Renais, dans la pièce avec le Mog, dans la salle des machines<br />
        - 1 Résurex, dans la salle des machines<br />
        - 1 Elixir, si vous trouvez tous les Brutos </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">Après la FMV, le spectacle théâtral débute. Après le dialogue, vous participez à un faux combat. Enchaînez coups et &quot;Illusions&quot;. Ces dernières sont des magies impressionnantes mais ne causant aucun dégât. Il vous faut sortir les armes pour finir le combat.<br />
    Après ce combat, un autre combat, qui fera appel à vos réflexes, se déroule entre Djidane et Frank. Vous devrez être particulièrement attentionné et appuyer sur le bon bouton le plus vite possible ! Vous recevrez de l'argent selon votre prestation. </font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><font face="Verdana" color="#FFFFFF">Astuce : </font></b> <font face="Verdana" color="#FFFFFF"> dans les 15 premières secondes, vous aurez rarement recours aux touches O, Carré, touches directionnelles <b>&lt;-</b> et <b>-&gt;</b> ! En outre, vous avez 49 touches à taper. Repérez-vous sur la musique pour savoir si la fin est proche !</font></p>
      <b>
      <p align="justify"><font face="Verdana" color="#FFFFFF">Gains : </font></b> <font face="Verdana"> Ces gains vous seront remis par Branet quand vous contrôlerez Steiner.<br />
        - Moins de 50 spectateurs satisfaits : Ether<br />
        - Entre 50 et 79 spectateurs satisfaits : Elixir<br />
        - Entre 80 et 99 spectateurs satisfaits : Soierie<br />
        - 100 spectateurs satisfaits : Lunalithe </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF"><br />
    Vous êtes désormais dans le château et incarnez <b>Steiner</b>, capitaine des Brutos de la Reine. Vous devrez retrouver tous vos Brutos de telle sorte qu'ils partent tous à la recherche de la Princesse Grenat. C'est facultatif, mais préférable pour la suite. </font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><font face="Verdana" color="#FFFFFF">Les Brutos : </font></b><font face="Verdana" color="#FFFFFF"><br />
        - Bloutch : dans la salle avec le Mog<br />
        - Lauda : dans la bibliothèque<br />
        - Toghebon : attrapez-le à l'étage, il court entre les portes pour éviter Steiner<br />
        - Melgentheim : dans la salle de droite de l'écran avec le grand escalier et le portrait de Branet<br />
        - Hagen : au dessous de la fontaine, dans les jardins<br />
        - Brutos inconnu : au pied de la tour, à droite de l'écran avec la fontaine<br />
        - Weimar : au pied de l'autre tour, à gauche de l'écran avec la fontaine<br />
        - Bayroyd : en montant la tour gauche. Parlez lui une première fois puis parlez-lui une seconde fois. Il comptabilisera les Brutos avant de vous remettre un <b>Elixir</b> si vous les avez tous trouvé ! </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">Vous contrôlez maintenant Djidane, qui court encore derrière la Princesse. Suivez-la jusqu'à la salle des machines. Ici, vous devrez tourner la vanne (que vous trouverez avec un &quot;!&quot;) pour faire apparaître deux coffres !<br />
    Continuez à avancer vers la droite. Steiner vous barrera la route et un combat s'engage. Il faut lui infliger 170 HP de dégâts. Laissez ensuite faire l'histoire jusqu'au prochain combat, où il vous faudra toujours battre Steiner. Utilisez la magie &quot;Feu&quot; de Bibi. Le troisième combat prend lieu après la séquence
    cinématique. Vous devrez attendre que le Succube explose tout en combattant Steiner avec la même technique que précédemment. <br />
    Mais le monstre explose et le Prima Vista va s'écraser au coeur d'une forêt mystérieuse... </font></p>
  <p align="justify"><font face="Verdana" color="#FFFFFF"><br />
  </font><b><font FACE="Verdana"><u><font color="#0000FF">4. La Forêt Maudite</font></u></p>
  <blockquote>
    <blockquote> </font>
      <p align="justify"><font face="Verdana" color="#FFFFFF"> À récupérer :</font></b><font face="Verdana" color="#FFFFFF"><br />
        - 1 Renais, derrière le conducteur endormi<br />
        - 1 Paracoup, dans un coffre à trésors caché dans la timonerie du Prima Vista<br />
        - 1 Poignet, dans un coffre à trésors dans le Prima Vista<br />
        - 3 Ethers, dans la chambre de Bibi, dans le couloir à droite en descendant de la timonerie, dans la réserve<br />
        - 116 Gils, sur le lit superposé de la chambre de Bibi<br />
        - 1 Gomme-Armet, dans la cale<br />
        - 1 Potion, dans un coffre à trésors dans la cale<br />
        - Soin de Frank, <b>Trésor</b><br />
        - 1 Cuireau, à droite de Frank avant de sortir du Prima Vista<br />
        - Appeau à Mog, <b>Trésor</b></font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">Vous êtes entre les mains de Djidane. Vous avez alors droit au premier <b>ATE</b> (ou Active Time Event) du jeu ! En appuyant sur [SELECT], vous pourrez le regarder : il vous montre Grenat et Bibi.<br />
    C'est comme cela que marcheront tous les ATE du jeu !<br />
    Armez Djidane (vous devrez vérifier souvent vos armes, mais ça, nous ne l'indiquons plus maintenant !), puis sauvegardez votre partie auprès du Mog (cela aussi, nous ne l'indiquerons plus !). <br />
    Aventurez-vous dans la forêt, en bas à droite. Avancez jusqu'à trouver Bibi et la Princesse dans de sales draps. Le combat s'engage.</font> <font face="Verdana" color="#FFFFFF">Vous ne devez absolument pas toucher Grenat ! Le monstre lui aspirera des HP : pensez à lui lancer des Potions au bout de 2 ou 3 attaques de l'ennemi sur elle. Si Djidane arrive en transe, n'utilisez surtout pas &quot;Cadrage&quot;. En mêlant attaques et soins sur la Princesse, vous en viendrez à bout rapidement.<br />
      Malheureusement, Bibi se fait lui aussi capturer à son tour... Utilisez la même technique qu'avec Grenat. Bibi vous aidera en lançant des magies noires.<br />
      Vous revenez alors au Prima Vista, où vos personnages sont soignés. <br />
      Après la discussion avec Bach, sortez de la timonerie et regardez les deux ATE disponibles. Allez ensuite à droite pour voir Bibi. Sortez et parlez avec Frank. Vous devez alors retourner voir Bach. Allez à gauche et descendez l'escalier vers la cale de l'appareil. Bach est dans la pièce de droite. Suivez-le, avant de le
      combattre ! <br />
      Il vous faut impérativement garder vos HP au dessus de 30. Ce combat est assez facile mais il faut garder un oeil prudent car le Game Over arrive vite ! <br />
      Remontez ensuite dans la réserve. C'est la porte qui se trouve devant vous quand vous remontez les escaliers. Parlez alors à Steiner, puis aller faire de même avec Bibi.<br />
      Steiner et Bibi décident de mélanger leurs attaques. Steiner pour alors utiliser Mgklame, une attaque dans laquelle Bibi charge l'épée de Steiner d'une force élémentale quelconque ! <br />
      Vous quittez alors le Prima Vista et recevez le <b>Soin de Frank</b>. Si vous voulez, Cina vend des objets. Sauvegardez et en avant vers la forêt ! Un ATE vous surprendra pendant que vous marcherez. Vous y verrez l'orchestre du Prima Vista jouer... la marche de la Shinra de Final Fantasy VII ! Continuez à avancer et à combattre jusqu'à une petite fontaine, où vous aurez un ATE. Sur la fontaine, vous aurez un &quot;!&quot;. Appuyez sur X
      pour retrouver l'intégralité de vos HP / MP !<br />
      Un Mog est caché dans le tronc d'arbre au premier plan, vous voyez sa petite boule rouge. Appuyez sur X devant pour le faire sortir et ainsi sauvegarder. N'oubliez pas la Mog-poste ! À partir de maintenant, nous ne le dirons plus. <br />
      Continuez vers la droite pour arriver au premier boss du jeu : Blambourine.</font></p>
  <p align="justify">&nbsp;</p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><i><u><font face="Verdana" color="#FF0000"> Boss N°1 : Blambourine: </font></u></i></p>
      <p align="justify"></b><font face="Verdana" color="#FFFFFF"> <br />
        <b>HP :</b> 916 ; <b>MP :</b> 1431 ; <b>Niveau :</b> 7<br />
        <b>Faiblesse :</b> Feu<br />
        <b>À voler :</b> Lasik, Armet Fer ; <b>Laissé au combat :</b> Potion, Renais ; <b>Gils :</b> 468 ; <b>CP :</b> 5<br />
        <b>Combat :</b> Ce combat peut s'avérer difficile si vous ne vous soignez pas assez. Il ne faut jamais laisser vos HP tourner au jaune ! Mais attention, avant l'arrivée de Frank, aucun dégât n'est comptabilisé... Utilisez donc la commande &quot;Stocker&quot; de Bibi jusqu'à son arrivée. Volez aussi avec Djidane. Quand
        Frank est là, déchaînez tous vos coups pour vaincre Blambourine. S'il attaque avec &quot;Pollen&quot;, il faut utiliser un Lasik sur les personnages qui attaquent à l'arme, sinon ils seront infligés de l'altération &quot;Obscurité&quot; ! Pensez aussi à utiliser Mgklame de Steiner. </font></p>
      <p align="justify">&nbsp;</p>
    </blockquote>
  </blockquote>
  <p align="justify"><font color="#FFFFFF"><font face="Verdana"> Après le combat, vous devrez être extrèmement rapide ! Ouvrez immédiatement le menu avec </font><u><font face="Verdana" size="1" color="#007f00">/\</font></u><font face="Verdana"> et soignez vos personnages ! Courez le plus vite possible pour échapper aux monstres et éviter au maximum les
    combats. Pendant les combats, n'hésitez pas à user de la magie de Bibi ou de Mgklame avec Steiner. <br />
    Une fois en dehors de la forêt, vous retrouverez vos HP et MP. Un Mog nommé Mogoo vous attend. Il vous montrera un ATE vous expliquant entièrement FFIX ! Vous recevez l'<b>Appeau à Mog</b> avant de partir sur la Carte du Monde embrumée... </font></font></p>
  <p align="justify">&nbsp;</p>
  <b><font FACE="Verdana">
  <p align="justify"><u><font color="#0000FF">5. Continent de la Brume</font></u></p>
  <blockquote>
    <blockquote> </font>
      <p align="justify"><font face="Verdana" color="#FFFFFF"> À récupérer :</font></b><font face="Verdana" color="#FFFFFF"><br />
        - 1 Potion, à la Porte Nord<br />
        - 1 Lasik, à la Porte Nord </font></p>
    </blockquote>
  </blockquote>
  <p><font face="Verdana" color="#FFFFFF"><br />
    Le Continent de la Brume s'offre désormais à vous ! Pas dans son intégralité, évidemment, mais vous découvrez enfin la Carte du Monde de FFIX. Vous pouvez aller directement à la grotte des glaces (Image ci-dessus), mais il y a un autre endroit à visiter et qui contient des objets sympathiques... Il s'agit de la Porte
    Nord, qui est à l'Ouest (pas très logique). En écoutant à la grande porte puis en appellant quelqu'un, vous pourrez acheter des Potions ! <br />
    Revenez alors sur la carte et profitez-en pour tester l'<b>Appeau à Mog</b>. Appuyez sur Carré ! <br />
    Entrez alors dans la Grotte des Glaces... </font></p>
  <p>&nbsp;</p>
  <b><font FACE="Verdana">
  <p align="justify"><u><font color="#0000FF">6. La Grotte des Glaces</font></u></p>
  <blockquote>
    <blockquote> </font>
      <p align="justify"><font face="Verdana" color="#FFFFFF"> À récupérer :</font></b><font face="Verdana" color="#FFFFFF"><br />
        - 1 Tente, en bas à gauche dans le second écran<br />
        - 2 Potions, en bas à gauche du troisième écran, à droite sur le quatrième écran<br />
        - 1 Ether, dans une paroi que Bibi peut faire fondre<br />
        - 1 Elixir, dans une paroi que Bibi peut faire fondre<br />
        - 1 Dague Magik, dans un passage auquel vous avez accès après que Bibi ait fait fondre un bloc de glace<br />
        - 1 Renais, à droite du cinquième écran<br />
        - 1 Cuirgnet, dans un passage secret du cinquième écran </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">Vous voici dans la Grotte des Glaces, un endroit gelé plutôt redoutable. Bibi vous y sera d'une grande utilité ! En effet, à chaque &quot;!&quot;, n'hésitez pas à appuyer sur X ! Bibi, grâce à son sort de Feu,
    fera fondre les parois derrières lesquelles sont cachés des objets ! <br />
    Les combats seront aussi plus facile si vous utilisez le sort Feu généralisé (c'est à dire en appuyant sur [R1]) ! Prenez garde aux courants d'air froids, vous avez malheureusement plus de chances d'y rencontrer des monstres. <br />
    Le trajet est quant à lui très simple : allez tout droit ! Arrivé un moment, il y a un embranchement. Prenez à gauche, dégelez le pauvre Mog, regardez l'ATE et sauvegardez si vous voulez. <br />
    Soignez Djidane avant d'emprunter le chemin de droite. Toute votre équipe se trouvera paralysée dans ce vent froid. Djidane se réveillera alors, seul... Allez vers le haut. Un Valseur vous assaille ! </font></p>
  <p align="justify">&nbsp;</p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><font color="#FF0000"><u><i><font face="Verdana"> Boss N°2 : Valseur 1 + Sealion: </font></i></u></font></b><font color="#FF0000"><u><font face="Verdana"> <i> <br />
        </i></font></u></font><font face="Verdana" color="#FFFFFF"> <br />
          - <b>Valseur 1</b> :<br />
          <b>HP :</b> 229 ; <b>MP :</b> 9999 ; <b>Niveau :</b> 2<br />
          <b>Faiblesse :</b> Feu, Glace<br />
          <b>À voler :</b> Remède, Soierie ; <b>Laissé au combat :</b> - ; <b>Gils :</b> 399 ; <b>CP :</b> 5<br />
          <br />
          - <b>Sealion</b> :<br />
          <b>HP :</b> 472 ; <b>MP :</b> 9999 ; <b>Niveau :</b> 3<br />
          <b>Faiblesse :</b> Feu<br />
          <b>À voler :</b> Ether, Mithdague ; <b>Laissé au combat :</b> Maxi Potion, Renais, Carte Meiden ; <b>Gils :</b> 399 ; <b>CP :</b> 5<br />
          <br />
          <b>Combat :</b> le Valseur est seul au début, mais il a vite fait d'invoquer un monstre gigantesque nommé Sealion. Néanmoins ne vous inquiètez pas, ce combat reste facile, surtout si vous avez une Transe ! Tuez Valseur avant Sealion, car il le soigne. Une fois le Valseur descendu, le combat ne durera pas très longtemps.
          Veillez quand même à garder vos HP au plus haut. </font></p>
      <p align="justify">&nbsp;</p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF"> Retournez sur vos pas. Vos amis se réveillent juste. Après la discussion, retournez sur les lieux du combat et empruntez le chemin de droite. Continuez jusqu'à la sortie. <br />
    Le ciel bleu apparaît enfin...</font> <font face="Verdana" color="#FFFFFF"> Durant la discussion, vous devrez donner un pseudonyme à la Princesse. Le jeu vous propose <b>Dagga</b> et c'est celui que nous garderons pour cette solution. Il est maintenant temps de partir vers Dali !</font></p>
  <p align="justify"><font face="Verdana" color="#FFFFFF"> <br />
  </font><b><font FACE="Verdana"><u><font color="#0000FF">7. Dali</font></u></p>
  <blockquote>
    <blockquote> </font>
      <p align="justify"><font face="Verdana" color="#FFFFFF"> À récupérer :</font></b><font face="Verdana" color="#FFFFFF"><br />
        - 1 Maxi Potion, au Belvédère de Dali<br />
        - 135 Gils, au Belvédère de Dali<br />
        - 4 Potions, dans l'auberge, dans les sous-sols, dans la salle avec la brume<br />
        - 1 Antidote, dans l'auberge<br />
        - 120 Gils, dans le tas de pièces mécaniques à gauche du village<br />
        - Le Bélier, <b>Trésor</b>, caché dans le moulin<br />
        - 156 Gils, en bas du premier écran du sous sol<br />
        - 1 Lasik, en bas dans le deuxième écran du sous sol<br />
        - 1 Ether, en grimpant sur les caisses dans la pièce avec le Mog<br />
        - 1 Armet Fer, sur les caisses dans l'écran après la pièce du Mog<br />
        - 1 Cuirgnet, dans la pièce après celle du Mog<br />
        - 95 Gils, dans la deuxième pièce après le Mog<br />
        - 1 Résurex, dans la pièce avec la brume<br />
        - 1 Renais, dans la pièce avec la brume </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">Avant de vous rendre à Dali, vous pouvez visiter deux endroits facultatifs. Il y a d'abord la Porte de Dali, assez loin au Sud-Est. Vous ne pourrez pas passer, mais en parlant au garde vous pourrez vous reposer et acheter des objets ! <br />
    Vous pouvez aussi vous rendre au Belvédère de Dali, qui est habité par un viel homme grand amateur de café. Fouillez l'endroit pour trouver des choses intéressantes...</font> <font face="Verdana" color="#FFFFFF">Rendez-vous ensuite à Dali. Vous prendrez d'abord un peu de repos à l'auberge. Vous êtes entre les mains de Djidane. Sortez et sauvegardez auprès du Mog. En sortant, vous avez la possibilité de regarder plusieurs ATE, mettant en scène Dagga et Bibi. Les ATE de Dagga sont assez amusants et montrent le soucis de perfection
      de la traduction. <br />
      Visitez le village. En face de l'auberge, il y a une armurerie dans laquelle vous verrez Dagga. Allez ensuite trouver Bibi, près du moulin. C'est alors qu'il se fait enlever derrière votre dos ! Retournez alors à l'auberge, où Dagga vous attend. Vous partez à la recherche de Bibi. Un ATE mettant en scène Steiner prend
      place. <br />
      Avec Djidane, revenez là où Bibi s'est fait enlever. Entrez dans le moulin et passez par le passage secret : c'est la grosse cheminée au ras du sol, au premier plan. <br />
      Descendez dans les sous-sols. Le trajet est clairement indiquée : allez tout droit ! Il y a de nombreux objets et quelques manivelles à manipuler, mais les &quot;!&quot; vont vous avertir immédiatement. Dans la pièce, il y a une grande porte qui laisse échapper un filet de brume : vous pouvez l'ouvrir, mais prenez garde !
      Si vous l'ouvrez, deux monstres vous attaquent. La pièce derrière contient juste quelques objets. Continuez ensuite vers la droite. <br />
      Vous reprenez Steiner en mains. Il est au Belvédère de Dali et cherche un Aéronef. Parlez à Moricio dans sa cabane pour essayer de lui soutirer des informations. Une fois que la conversation est finie, équipez Steiner et sortez du Belvédère. Vous retrouvez les autres.</font></p>
  <p align="justify">&nbsp;</p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><i><u><font face="Verdana" color="#FF0000">Boss N°3 : Valseur 2: </font></u></i></p>
      <p align="justify"></b><font face="Verdana" color="#FFFFFF"><br />
        <b>HP :</b> 1030 ; <b>MP :</b> 3017 ; <b>Niveau :</b> 2<br />
        <b>Faiblesse :</b> Vent<br />
        <b>À voler :</b> Chapopointu, Cuirasse ; <b>Laissé au combat :</b> Ether ; <b>Gils :</b> 441 ; <b>CP :</b> 5<br />
        <b>Combat :</b> Valseur 2 peut vous causer de gros problème si vous ne faites pas attention à vos HP. Sachez d'abord qu'il n'attaque jamais Dagga. Ce n'est pas une raison pour laisser mourir les autres et faire attaquer Dagga : il l'enlève s'ils sont morts ! Le Valseur riposte avec un Brasier + si vous l'attaquez avec de la
        magie. Frappez donc avec Steiner et Djidane. Soignez avez Dagga à tous les tours, car ses attaques sont médiocres. Si Bibi meurt, n'essayez pas de le ranimer, cela serait inutile vu sa faible force de frappe ! En revanche, usez au début de Mgklame ! </font></p>
      <p align="justify">&nbsp;</p>
    </blockquote>
  </blockquote>
  <p><font face="Verdana" color="#FFFFFF">Après le combat, vous pouvez retourner à l'auberge pour vous soigner et sauvegardez. Sortez et rejoignez l'Aéronef. C'est parti ! </font></p>
  <p>&nbsp;</p>
  <b><font FACE="Verdana">
  <p align="justify"><u><font color="#0000FF">8. L'Aéronef</font></u></font></b><font face="Verdana" color="#FFFFFF"><br />
    <br />
    Montez dans l'engin et suivez les différentes discussions. Il vous suffit d'avancer. Un autre Valseur arrive et détruit une partie de l'appareil... Le combat peut s'engager. </font></p>
  <p align="justify">&nbsp;</p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><i><u><font face="Verdana" color="#FF0000">Boss N°4 : Valseur 3:</font></u></i></p>
      <p align="justify"></b><font face="Verdana" color="#FFFFFF"><br />
        <b>HP :</b> 1128 ; <b>MP :</b> 2080 ; <b>Niveau :</b> 7<br />
        <b>Faiblesse :</b> Tueur, Birdkiller, Vent<br />
        <b>À voler :</b> Chapopointu, Armure de lin, Gantelex ; <b>Laissé au combat :</b> - ; <b>Gils :</b> - ; <b>CP :</b> -<br />
        <b>Combat :</b> Bibi est en transe au début du combat. Cela va faciliter les choses ! Profitez immédiatement de sa capacité à lancer deux magies en un tour. Usez aussi de Mgklame de Steiner. Quand il vole, vous ne pouvez pas l'attaquer à main nue. Lancer donc des sorts avec Bibi. Faites très attention à votre jauge de HP,
        car le Valseur riposte souvent avec Foudre + ! </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">Admirez ensuite le passage par la Porte puis l'arrivée à Lindblum... </font></p>
  <p align="justify">&nbsp;</p>
  <b><font FACE="Verdana">
  <p align="justify"><u><font color="#0000FF">9. Lindblum</font></u></p>
  <blockquote>
    <blockquote> </font>
      <p align="justify"><font face="Verdana" color="#FFFFFF"> À récupérer :</font></b><font face="Verdana" color="#FFFFFF"><br />
        - 1 Grain de Coubo, <b>Trésor</b>, lors d'un ATE<br />
        - 1 Cuirgnet, à côté de la sortie Taxair du quartier ouvrier<br />
        - 1 Erlastron, à droite de l'entrée du restaurant du quartier ouvrier<br />
        - 1 Chapopointu, dans la dernière maison du quartier ouvrier<br />
        - 1 Carte Mimi, dans la dernière maison du quartier ouvrier<br />
        - 163 Gils, à gauche au red-de-chaussée de l'auberge du quartier commerçant<br />
        - 2 Tentes, à droite devant l'église du quartier commerçant, à droite derrière le quai de la Porte du Dragon Terrestre<br />
        - 1 Cuirasse, tout en haut à droite dans l'église du quartier commerçant<br />
        - 1 Bocca, dans la maison avec l'horloge et les oiseaux du quartier commerçant<br />
        - 1 Maxi Potion, dans la maison avec l'horloge et les oiseaux du quartier commerçant<br />
        - 1 Gantelex, au fond à gauche à la forge du quartier commerçant<br />
        - 127 Gils, au premier plan dans l'écran en sortant du taxair du quartier théâtral<br />
        - 1 Gemme, en bas dans la maison de l'artiste<br />
        - 282 Gils, dans le repère des Tantalas<br />
        - 68 Gils, dans le repère des Tantalas<br />
        - 97 Gils, dans le repère des Tantalas<br />
        - 1 Mini Bloumécia, <b>Trésor</b>, dans le repère des Tantalas<br />
        - 1 Vitrilumet, dans la chambre de Dagga au château<br />
        - 1 Ether, dans la chambre de Dagga au château<br />
        - Diane d'or, <b>Trésor</b>, en remportant la Fête de la chasse<br />
        - 1 Carte Mamouth, sur le quai de la Porte du Dragon Aquatique </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">Une fois arrivé à Lindblum, le Conseiller Olmetta vous reçoit avant de vous envoyer auprès du Roi Cid. Contentez-vous de le suivre puis d'écouter la conversation.<br />
    Djidane se rend alors en ville et rencontre <b>Freyja</b>, une ancienne amie. Vous vous réveillez dans l'auberge de Lindblum. Vous aurez droit à un nouvel ATE de Mogoo ! Descendez et allez dans la rue : un ATE de Bibi se déclenche.Lindblum s'offre à vous ! Après avoir visité tout le quartier (qui est le quartier commerçant), rendez-vous à la gare du Taxair, située juste en face de l'auberge. Vous pouvez commencer par le quartier ouvrier puis finir par le quartier théâtral. <br />
    Rendez-vous finalement au Château. Montez jusqu'à la fontaine et prenez à droite. Allez jusqu'à la chambre de Dagga : c'est la porte tout en haut. Steiner y est. Parlez au Mog puis entamez la fouille du Château pour retrouver Dagga. Comme l'accès aux étages supérieurs est impossible, vous devrez voler un uniforme. Sortez
    de la chambre et descendez les escaliers. Allez parler au garde assis en bas à gauche. Djidane parviendra à lui dérober son uniforme... <br />
    Revenez ensuite à la fontaine et allez vers l'ascenceur. Le garde vous laisse passer. Il vous suffit maintenant de monter jusqu'au sommet du Château. Pour cela, rendez-vous au dernier étage et prenez à gauche vers la machinerie de l'ascenceur. Dagga est tout en haut, elle chante.</font> <font face="Verdana" color="#FFFFFF">Vous pourrez manipuler le télescope et découvrir ainsi les différents endroits proches de Lindblum. La Fête de la chasse commence bientôt, Djidane décide d'y participer. <br />
      Commencez par équiper Djidane de ses meilleurs armes, armures et accessoires. Sauvegardez auprès du Mog et foncez au quartier théâtral ! Durant les 12 minutes imparties, vous devrez battre un maximum de monstres pour remporter le plus de points possible. Vous avez également le droit de changer de quartier, mais
      concentrez-vous d'abord sur le premier. Quand arrivent les 5 dernières minutes, rendez-vous au quartier commerçant. Sur la grande place avec la fontaine, un monstre immense apparaît. Freyja vous viendra en aide si vous décidez de le battre.</font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><font face="Verdana" color="#FFFFFF">Aide : </font></b> <font face="Verdana" color="#FFFFFF"> Qui désirez-vous faire gagner ? Comment faire ?<br />
        - <b>Bibi :</b> faites que Freyja et Djidane perdent le combat contre le Phacoche<br />
        - <b>Djidane :</b> attaquez Freyja lors du combat contre le Phacoche jusqu'à ce qu'elle tombe inanimée<br />
        - <b>Freyja :</b> même stratégie, sur Djidane cette fois-ci </font></p>
      <b>
      <p align="justify"><font face="Verdana" color="#FFFFFF">Vos gains en cas de victoire : </font></b><font face="Verdana"><br />
        - <b>Bibi :</b> Carte Aérothéâtre<br />
        - <b>Djidane :</b> 5000 Gils<br />
        - <b>Freyja :</b> Coraline </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">Une fois la Fête terminée, toute l'équipe se retrouve auprès du Roi Cid et le gagnant reçoit son prix ainsi que la <b>Diane d'or</b>. Un messager de Bloumécia fait alors irruption. L'équipe décide de s'y rendre.<br />
    Dagga vous endort pour s'échapper avec Steiner. Descendez alors à la Porte du Dragon Terrestre en suivant Cid. Il y a un marchand auquel vous devrez acheter un maximum de Potions et de Renais, car Dagga n'est plus des votres. Vous devez tenir jusqu'à la fin du CD1 avec ! Comme vous n'avez rien à acheter par la suite,
    n'hésitez à vider vos Gils. </font></p>
  <b><font FACE="Verdana">
  <p align="justify">&nbsp;</p>
  <p align="justify"><u><font color="#0000FF">10. Marais des Kwe, Forêt des Chocobo</font></u></font></b><font face="Verdana" color="#FFFFFF"><br />
    <br />
    Sur votre chemin pour la Caverne de Guismar, vous pouvez emprunter le marais des Kwe et ainsi récupérer un nouveau personnage : <b>Kweena</b>. Rendez-vous dans le Marais, où vous verrez enfin ce fameux Mogoo. Il vous suffit de vous aventurer dans les broussailles pour arriver à une mare pleine de grenouille. Trouvez une
    grenouille et offrez-la à Kweena. Après des discussions avec Kwell, acceptez Kweena au sein de votre groupe, elle vous sera utile pour la suite ! Mieux vaut 4 personnages que 3. Vous pouvez maintenant attraper des grenouilles dans les marais et gagner des objets rares. <br />
    Si le coeur vous en dit, vous pouvez commencer la quête des Chocobos dès maintenant, bien que ce ne soit pas obligatoire. Rendez-vous dans la Forêt des Chocobo, puis suivez notre guide des Chocobos ! <br />
    Vous pouvez alors vous rendre à la Caverne de Guismar, en vous repérant sur la carte. </font></p>
  <b><font FACE="Verdana">
  <p align="justify">&nbsp;</p>
  <p align="justify"><u><font color="#0000FF">11. La Caverne de Guismar</font></u></p>
  <blockquote>
    <blockquote> </font>
      <p align="justify"><font face="Verdana" color="#FFFFFF"> À récupérer :</font></b><font face="Verdana" color="#FFFFFF"><br />
        - 1 Erlastron, derrière le grand pilier de roche en haut à gauche du petit pont à l'entrée<br />
        - 1 Paramith, sur le grand escalier autour de la pièce avec la cloche<br />
        - 1 Tricorne, sur le grand escalier autour de la pièce avec la cloche </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">Après la petite discussion, entrez dans la grotte. Allez à droite et parlez à l'homme, qui vous remet une <b>Cloche Guismar</b>. Allez à la porte et utilisez la cloche pour l'ouvrir. Avancez : vous êtes attaqués par des Mages Noirs lancés par Pile et Face !</font> <font face="Verdana" color="#FFFFFF">Après les avoir terrassé, continuez tout droit pour trouver un Mage Noir. Combattez-le pour obtenir une nouvelle cloche. Vous pouvez alors déverrouiller la porte principale vous permettant d'accéder à un grand escalier aboutissant à une pièce avec une grande cloche. Une Mog court tout autour : son mari est coincé sous la
    cloche.</font> <font face="Verdana" color="#FFFFFF">Elle parvient à sentir le Grain de Coubo trouvé par Bibi à Lindblum ! Son mari sort alors immédiatement, sentant les grains. Le couple s'en va dans une pièce voisine. Ouvrez le coffre pour obtenir une <b>Cloche Cuismar</b>. Avec elle, ouvrez la porte de droite. Sauvegardez et reprenez des forces si vous le souhaitez.
      Attention : au fond de la pièce il y a un accès vers la Carte du Monde. C'est le Plateau de Popos sur lequel se trouvent des monstres extrèmement puissants. Ne vous y aventurez pas à ce moment-ci de la partie, c'est trop dangeureux ! <br />
      Sortez de la pièce. Le Mog vous donne une <b>Cloche Sacrée</b>, qui vous permet de déverrouiller la porte de l'autre côté de la cloche. Néanmoins prudence, un boss vous attend derrière. Vérifiez bien votre équipement !</font></p>
  <p align="justify">&nbsp;</p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><i><u><font face="Verdana" color="#FF0000">Boss N°5 : Gisamark: </font></u></i></p>
      <p align="justify"></b><font face="Verdana" color="#FFFFFF"><br />
        <b>HP :</b> 3175 ; <b>MP :</b> 502 ; <b>Niveau :</b> 16<br />
        <b>Faiblesse :</b> Birdkiller, Tonnerre, Vent<br />
        <b>À voler :</b> Elixir, Tricorne ; <b>Laissé au combat :</b> Tente, Carte Mithépée ; <b>Gils :</b> 800 ; <b>CP :</b> 5<br />
        <b>Combat :</b> Prenez garde, ce combat est très difficile ! Non seulement les HP de Gisamark sont élevés, mais il riposte aux attaques magiques avec un Silent Voice, qui rend les sorts impossibles. Attaquez donc au maximum avec les armes et utilisez la capacité &quot;Sauter&quot; de Freyja en abondance. Essayez au tout
        début du combat dans lancer sur Gisamark une Tente, qui aura peut-être pour effet de lui infliger Coi ou Obscurité. Vous pouvez toujours essayer d'obtenir une Transe de Djidane, qui serait profitable. Si Bibi meurt, n'essayez pas de le raminer vu sa faible force de frappe. Et surtout, laissez vos HP au plus haut ! </font></p>
      <p align="justify">&nbsp;</p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">L'équipe s'échappe ensuite de la Grotte... </font></p>
  <p align="justify">&nbsp;</p>
  <b><font FACE="Verdana">
  <p align="justify"><u><font color="#0000FF">12. La Porte Sud</font></u></p>
  <blockquote>
    <blockquote> </font>
      <p align="justify"><font face="Verdana" color="#FFFFFF"> À récupérer :</font></b><font face="Verdana" color="#FFFFFF"><br />
        - 1 Multimassue, à côté du tonneau à gauche<br />
        - 1 Potion, devant le train<br />
        - 1 Laisser-passer, <b>Trésor</b></font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">Steiner arrive à la Porte Sud avec Dagga cachée dans un baluchon. Vous réussissez à entrer. Une fois à l'intérieur, vous devez aller dans la ruelle de droite pour libérer Dagga et ainsi aller prendre le train. Parlez à Marie l'apprentie, à l'ouvrier à gauche, puis à l'homme à droite. Après qu'on
    homme vous ait remis un <b>Laisser-passer</b>, vous pourrez enfin emprunter la ruelle.</font> <font face="Verdana" color="#FFFFFF">Devant le train, il y a un vendeur. Pensez à acheter des objets de soin pour Djidane et son équipe.<br />
      Embarquez dans le train...</font><b><font face="Verdana"> &nbsp; </font></b></p>
  <p align="justify">&nbsp;</p>
  <p align="justify"><b><font FACE="Verdana"> <u><font color="#0000FF"> 13. Bloumécia</font></u></p>
  <blockquote>
    <blockquote> </font>
      <p align="justify"><font face="Verdana" color="#FFFFFF"> À récupérer :</font></b><font face="Verdana" color="#FFFFFF"><br />
        - 2 Tentes, à l'Arc de Bloumécia, dans un coffre après les grands escaliers<br />
        - 1 Maxi Potion, à l'Arc de Bloumécia<br />
        - Le Cancer, <b>Trésor</b>, derrière le chariot renversé du deuxième écran<br />
        - 2 Défijeurs, dans les maisons<br />
        - 1 Germina, dans les maisons<br />
        - 1 Potion, dans les maisons<br />
        - 1 Cloche de Garde, <b>Trésor</b>, derrière le lit dans la maison de la personne mourrante<br />
        - 1 Ether, dans la maison de la personne mourrante<br />
        - 1 Renais, dans un coffre après les grands escaliers<br />
        - 1 Mithlance, dans l'ancienne armurerie<br />
        - 1 Foudrekane, à côté du Mog dans la trésorerie </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">Avant d'entrer dans Bloumécia, vous pouvez visiter l'Arc de Bloumécia, qui se trouve à l'Est. Vous y trouverez quelques objets. Sauvegardez et entrez dans Bloumécia, le Royaume de la pluie éternelle...</font> <font face="Verdana" color="#FFFFFF">Après la discussion, allez tout droit. Les monstres de Bloumécia sont moyennement puissants, prenez garde. Arrivé un moment, Pile et Face se dressent de nouveau contre vous. Battez les Mages Noirs comme dans la Caverne de Guismar. Il n'y a pas de grosse difficulté.</font> <font face="Verdana" color="#FFFFFF">Vous pouvez commencer à dépouiller Bloumécia de ses objets. Prenez le grand escalier à droite. Le coffre d'en bas est vrai mais celui du dessus est faux ! Il s'agit d'un monstre nommé Mimik assez coriace. Engagez-vous en vitesse dans la porte du haut si vous voulez l'éviter. La grande porte est fermée. Prenez garde à cet
    écran, vous pouvez tomber sous les assaults violents de Diabolik, un monstre puissant. Continuez à gauche et marcher (<b>Ne courez pas</b>) sur la planche pour récupérer le coffre de l'autre côté. <br />
    Revenez au bas de l'escalier. Prenez la porte de gauche et pillez les coffres. Comme dans l'autre pièce, c'est un Mimik qui se fait passer pour un coffre au deuxième étage. La porte à droite vous amène à la maison de l'architecte. Vous devez passer ensuite par la fenêtre pour aller sur la terrasse et ainsi passer de
    l'autre côté. <br />
    Entrez dans la pièce, vous trouvez un soldat de Bloumécia. Parlez-lui. Prenez la <b>Cloche de Garde</b> derrière le lit. Vous pouvez maintenant aller à la grande porte qui était fermée, en haut des escaliers. Ouvrez-là avec la cloche. <br />
    Une famille le descend au même moment. A la fin de la discussion, continuez à monter. La pièce suivante abrite une gigantesque statue sur le point de s'écrouler. Continuez. Dans la pièce d'après, les deux coffres au premier plan sont à vider. Par contre, celui du fond est à nouveau un Mimik ! Sortez de la pièce : vous
    accédez à une grande place.</font> <font face="Verdana" color="#FFFFFF">Prenez la porte de gauche. Dans la pièce, prenez l'arme sur la statue du fond. Sortez et prenez la porte de droite cette fois-ci. Un Mog vous attend. Ouvrez le coffre, sauvegardez et achetez des objets (car certains sont très intéressants). Steelskin arrive. Il vous propose 3 objets à un prix intéressant : prenez-les !
      Autant le dire tout de suite : préparez-vous au combat, la fin est proche. Armez-vous d'objets atténuants les sorts de foudre. <br />
      Préparez-vous, sortez et grimpez vers le grand Palais au fond. La suite est automatique jusqu'au combat fatidique avec Beate...</font></p>
  <p align="justify">&nbsp; </p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><u><i><font face="Verdana" color="#FF0000">Boss N°6 : Beate: </font></i></u></p>
      <p align="justify"> </b><font face="Verdana" color="#FFFFFF"><br />
        <b>HP :</b> 3630 ; <b>MP :</b> 3467 ; <b>Niveau :</b> 14<br />
        <b>Faiblesse :</b> Tueur<br />
        <b>À voler :</b> Renais, Haubert, Mithépée ; <b>Laissé au combat :</b> - ; <b>Gils :</b> - ; <b>CP :</b> -<br />
        <b>Combat :</b> Ce combat est difficile. Ne vous laissez pas aller et garder l'oeil constamment sur vos HP. Beate est puissante et ses attaques peuvent vous être fatales en un coup. Pensez quand même à la voler avec Djidane. Faites sauter Freyja. Utilisez la Foudre avec Bibi. Quant à Kweena, faites la attaquer et utilisez-la
        pour soigner les autres personnages. Beate est impossible à battre. Une fois que vous lui aurez enlevé le nombre d'HP indiqué, elle vous lancera une attaque fatale. Le tout est de faire durer le combat sans souffrir, et ça devrait aller si vous usez de vos potions. </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">Le CD1 s'achève ici... Beate et Branet se retirent tandis que le mystérieux Kuja vous nargue avant de partir, vous laissant pour mort... </font></p>
  <p align="justify">&nbsp; </p>
  <p align="center"><b><i><u><font color="#008000" size="4">CD2</font></u></i></b></p>
  <b><font FACE="Verdana">
  <p align="justify"><u><font color="#0000FF">1. La Porte Sud</font></u></p>
  <blockquote>
    <blockquote> </font>
      <p align="justify"><font face="Verdana" color="#FFFFFF"> À récupérer :</font></b><font face="Verdana" color="#FFFFFF"><br />
        - 1 Renais, dans un coffre en bas à gauche de la salle d'attente<br />
        - 1610 Gils, dans un coffre après le petit pont, en bas de la Porte<br />
        - 1 Elixir, dans le champ de Dali </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">Le CD2 commence et vous reprenez le contrôle de Dagga et Steiner, qui sont arrivés en haut de la Porte Sud. Fouillez un peu la station. Après avoir parlé au chef de gare, vous entendez une voix qui ne vous est pas inconnue... Revenez là où sont les trains pour voir Markus et Cina, puis retournez dans la
    salle d'attente.</font> <font face="Verdana" color="#FFFFFF">Après la discussion, embarquez dans le train. Une discussion entre Dagga et Markus s'ensuit, jusqu'à ce que le train soit arrêté par quelque chose en travers de la route... Il s'agit en fait du Valseur 3, plutôt en mauvais état, mais toujours décidé à capturer Dagga !</font></p>
  <p align="justify">&nbsp;</p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><i><u><font face="Verdana" color="#FF0000">Boss N°7 : Valseur 3: </font></u></i></p>
      <p align="justify"></b><font face="Verdana" color="#FFFFFF"><br />
        <b>HP :</b> 1292 ; <b>MP :</b> 344 ; <b>Niveau :</b> 9<br />
        <b>Faiblesse :</b> Tueur, Birdkiller, Vent<br />
        <b>À voler :</b> Chapopointu, Foudrekane, Canne Feu ; <b>Laissé au combat :</b> - ; <b>Gils :</b> 864 ; <b>CP :</b> -<br />
        <b>Combat :</b> Valseur 3 est particulièrement affaibli par rapport au premier combat. Soignez-vous souvent avec Dagga et lancez plein d'attaques avec Markus et Steiner. Si vous maîtrisez attaques et soins, vous viendrez rapidement à bout de ce boss sans prétention ! </font></p>
      <p align="justify">&nbsp;</p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">Une fois le train arrivé, videz la boutique pour avoir un maximum d'objets de soins. En effet, vous ne pourrez pas refaire le plein avant un certain temps... Allez ensuite en haut : vous arriverez devant une grande pierre. En allant à gauche, vous arrivez à une sortie menant à Dali. Si vous y allez, vous
    pourrez ouvrir le coffre dont la vieille paysanne bloquait le passage, dans le champ du petit village... <br />
    Revenez sur vos pas et prenez à droite. Videz le coffre sous le petit pont puis continuez : vous reviendrez sur la carte du monde. </font></p>
  <p align="justify">&nbsp;</p>
  <b><font FACE="Verdana">
  <p align="justify"><u><font color="#0000FF">2. Tréno</font></u></p>
  <blockquote>
    <blockquote> </font>
      <p align="justify"><font face="Verdana" color="#FFFFFF"> À récupérer :</font></b><font face="Verdana" color="#FFFFFF"><br />
        - 3 Ethers, 2 dans la grotte de Kwane, 1 au bord du lac devant la maison de Dame Stella<br />
        - Les Gémeaux, <b>Trésor</b>, en jetant 13 pièces dans la fontaine de Tréno<br />
        - 1 Mithdague, à gauche de l'entrée de la grande tour tout à gauche de Tréno<br />
        - 1 Carte Yéti, dans un coffre de Tréno<br />
        - 1 Gil, dans un coffre de Tréno<br />
        - Le Taureau, <b>Trésor</b>, derrière le petit commerce au bas de l'échelle, à droite de l'entrée de Tréno<br />
        - 2225 Gils, à gauche de l'entrée de la salle des ventes de Tréno </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF"><br />
    Avant d'aller à Tréno, octroyez-vous un petit détour en direction de la grotte de Kwane ! Vous y trouverez 2 Ethers. <br />
    Vous pouvez maintenant entrer dans Tréno. Après la dispute, vous prenez le contrôle de Steiner. Regardez les ATE qui suivent, puis fouillez la ville afin de mettre la main sur tous les objets qui y sont cachés... Terminez votre visite par celle de la salle des ventes, où vous reprendrez le contrôle de Dagga. Markus se
    trouve dans l'auberge, rendez-vous y !</font> <font face="Verdana" color="#FFFFFF">Discutez avec Markus, puis descendez jusqu'à trouver Bach. Vous embarquez alors dans les sous-sols de Tréno... Votre équipe se retrouve ensuite dans la forge, où Maître Totto, l'ancien éducateur de Dagga, vous surprend. S'ensuit une discussion aboutissant au don de l'Anguille Platine recherchée pour guérir Frank...<br />
      Il ne vous reste plus qu'à suivre Maître Totto dans les souterrains de Tréno...</font></p>
  <p align="justify">&nbsp;</p>
  <p align="justify"><b><font FACE="Verdana"><u><font color="#0000FF">3. La Route de la Gorgone</font></u></p>
  <blockquote>
    <blockquote> </font>
      <p align="justify"><font face="Verdana" color="#FFFFFF"> À récupérer :</font></b><font face="Verdana" color="#FFFFFF"><br />
        - 1 Haubert, dans un coffre à côté du levier<br />
        - 1 Renais, dans un coffre à côté du levier </font></p>
    </blockquote>
  </blockquote>
  <b>
  <p align="justify"><font face="Verdana" color="#FFFFFF">Note : </font></b> <font face="Verdana" color="#FFFFFF"> Vous pouvez remonter à Tréno si vous le voulez ! </font></p>
  <p align="justify"><font face="Verdana" color="#FFFFFF"><br />
    Une fois en bas, prenez le chemin de gauche, videz les coffres et activez le levier. Revenez au point de départ et empruntez le chemin de gauche afin de tirer la chaîne située en haut. Vous découvrez alors un moyen de transport original : les Gorgones ! Vérifiez bien votre équipemment (un boss vous attend, pour ne rien
    vous cacher). Actionnez le levier, montez à l'intérieur puis réactionnez le levier pour partir. Pendant le trajet, un boss vous assaille (ô surprise) ! </font></p>
  <p align="justify">&nbsp;</p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><u><i><font face="Verdana" color="#FF0000">Boss N°8 : Larvalar Junior: </font></i></u></p>
      <p align="justify"></b><font face="Verdana" color="#FFFFFF"><br />
        <b>HP :</b> 2296 ; <b>MP :</b> 3649 ; <b>Niveau :</b> 13<br />
        <b>Faiblesse :</b> Glace<br />
        <b>À voler :</b> Ossumelet, Mithrette ; <b>Laissé au combat :</b> - ; <b>Gils :</b> - ; <b>CP :</b> -<br />
        <b>Combat :</b> Prenez garde, car ce boss peut vous causer de gros ennuis ! Soignez vos personnages le plus souvent que possible avec Dagga, et utilisez-la aussi pour parer au poison dévastateur à ce niveau du jeu. Attaquez fort avec Steiner et pensez à faire voler à Markus, avant de le faire combattre. Larvalar Junior s'en
        va avant la fin du combat, qui devrait ne pas trop vous poser de problèmes si vous suivez mes conseils. </font></p>
      <p align="justify">&nbsp;</p>
    </blockquote>
  </blockquote>
  <b><font FACE="Verdana">
  <p align="justify"><u><font color="#0000FF">4. Le tronc de Clayra</font></u></p>
  <blockquote>
    <blockquote> </font>
      <p align="justify"><font face="Verdana" color="#FFFFFF"> À récupérer :</font></b><font face="Verdana" color="#FFFFFF"><br />
        - 1 Renais, en montant dans le tronc<br />
        - 2 Bottes magik, en montant dans le tronc, accessible quand vous sautez dans le sable avec Kweena<br />
        - 1 Canne Glace, en montant dans le tronc<br />
        - 1 Ether, en montant dans le tronc<br />
        - 1 Fourchette +, en montant dans le tronc<br />
        - 1 Tente, en montant dans le tronc<br />
        - 1 Canne Feu, en montant dans le tronc<br />
        - 1 Remède, en montant dans le tronc<br />
        - des Desert Boots, en montant dans le tronc<br />
        - 1 Mithgilet, en montant dans le tronc<br />
        - 1 Paramith, en montant dans le tronc<br />
        - 1 Potion, en montant dans le tronc<br />
        - 1 Elixir, en montant dans le tronc<br />
        - 1 Maxi Potion, en montant dans le tronc<br />
        - 900 Gils, en montant dans le tronc<br />
        - 1 ChocoLégume, en montant dans le tronc<br />
        - 1 Robe en Soie, dans le tronc, accessible quand vous sautez dans le sable avec Kweena<br />
        - 3 Mécanisme, en montant dans le tronc </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">Vous retrouvez le groupe de Djidane, encore assomé à Bloumécia. Une fois sortis de la ville, dirigez-vous au sud-ouest pour rejoindre la cité dont parlait Kuja : Clayra. Elle a la forme d'une gigantesque tornade, au milieu des terres...<br />
    Entrez sans crainte dans le tourbillon. Avancez tout droit pour arriver devant l'immense tronc, et continuez jusqu'à la porte fermée. Elle s'active à l'aide du levier en haut à droite. Continuez votre avancée dans l'arbre, qui doit être assez linéaire. N'oubliez pas de fouiller tous les décors pour trouver un grand
    nombre d'objets. <br />
    Arrivé à un endroit, vous découvrirez un trou dans le sol. Mettez-y la main afin d'actionner un levier pour que le sable change de direction, dans le tronc. Faites demi-tour et escaladez la racine sur le chemin, qui vous amènera à une nouvelle salle ! </font></p>
  <p align="justify">&nbsp;</p>
  <b><font FACE="Verdana">
  <p align="justify"><u><font color="#0000FF">5. Clayra</font></u></p>
  <blockquote>
    <blockquote> </font>
      <p align="justify"><font face="Verdana" color="#FFFFFF"> À récupérer :</font></b><font face="Verdana" color="#FFFFFF"><br />
        - 2 Résurex, à Clayra<br />
        - 970 Gils, à Clayra<br />
        - 1 Thor, à Clayra<br />
        - 2 Gemmes, à Clayra<br />
        - 1 Remède, à Clayra<br />
        - 2 Boccas, à Clayra<br />
        - 1 Jaunelard, à Clayra<br />
        - 1 Ether, à Clayra </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">Vous êtes maintenant dans la ville de Clayra ! Freyja est tout de suite amenée auprès du Roi. En attendant son retour, vous pouvez visiter la ville, qui se révèle riche en informations et surtout en objets ! Vous aurez également droit à des Active Time Events.<br />
    Il y a quelques marchants proposant des objets permettant de booster vos personnages, alors profitez-en ! </font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><font face="Verdana" color="#FFFFFF">Secret : </font></b> <font face="Verdana" color="#FFFFFF"> Comment récupérer les deux coffres inaccessibles du tronc ? C'est simple ! Si vous avez regardé les deux ATE de Kweena, descendez jusqu'à l'entrée et prenez à droite. Vous verrez Kweena devant un tourbillon de sable. Celle-ci saute dedans ! Suivez-la en vitesse et vous tomberez là où sont
        les deux coffres ! Rentrez ensuite à Clayra, par le même chemin que dans le tronc. </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">Une fois la visite finie, allez parler au prêtre dans le temple, puis allez à l'auberge. Dan survient, avertissant qu'un enfant vient d'être capturé par un monstre... Suivez-le, soignez vos personnages si besoin est, vérifiez leur équipement et sauvegardez, avant de commencer le combat... </font></p>
  <p align="justify">&nbsp;</p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><u><i><font face="Verdana" color="#FF0000">Boss N°9 : Fourmilion:</font></i></u></p>
      <p align="justify"></b><font face="Verdana" color="#FFFFFF"><br />
        <b>HP :</b> 3938 ; <b>MP :</b> 3950 ; <b>Niveau :</b> 16<br />
        <b>Faiblesse :</b> Glace<br />
        <b>À voler :</b> Désembrouil, Mithgilet, Armet d'or ; <b>Laissé au combat :</b> Ether, Désembrouil, Carte Sahagin ; <b>Gils :</b> 1616 ; <b>CP :</b> 5<br />
        <b>Combat :</b> Autant vous avertir : c'est un combat très difficile. Inutile d'utiliser les armes, car Fourmilion riposte violemment à chaque fois. Bibi vous sera donc très utile. Utilisez 4 ou 5 fois la commande Stock avant de lancer une attaque magique, pour faire très mal. Les sorts de glace sont particulièrement
        recommandés. Faites voler Djidane. Avec Kweena et Freyja, soignez-vous, car ce boss vous lancera des attaques plutôt dévastatrices... </font></p>
      <p align="justify">&nbsp;</p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">Une fois le combat terminé, vous retournez en ville puis dans le temple, afin d'assister à la Danse du Vent. Elle échoue malheureusement.<br />
    Vous retrouvez ensuite rapidement vos personnages se trouvant à Alexandrie : tandis que Steiner et Markus sont prisonniers, Dagga affronte verbalement sa mère. Aucun choix n'est obligatoire durant la conversation. Immédiatement après, vous retournez à Clayra, où l'équipe réfléchit à la situation. <br />
    Avant de sortir de Clayra, pensez à &quot;piller&quot; le temple qui contient quelques objets. Parlez au Grand Prêtre pour recevoir un <b>Emeraude</b>. Rendez-vous aussi dans l'auberge, où Steelskin vous vend une <b>Maxi Potion</b>, un <b>Ether</b> et un <b>Résurex</b> pour 444 Gils ! Pensez aussi à sauvergarder.<br />
    Descendez jusqu'à l'entrée de Clayra, puis descendez le long du tronc, comme vous êtes arrivés. Vous rencontrerez des soldats d'Alexandrie. Une fois arrivés au pont, Puck arrivera, vous avertissant que l'assault à été lancé sur Clayra ! <br />
    Les Mages Noirs ont commencé à attaquer Clayra. Vous devrez en combattre beaucoup, alors prenez garde. Là où vous avez rencontré le Fourmilion se trouvent le Mog de l'auberge et Steelskin. En montant jusqu'au temple, vous croiserez plusieurs couples déboussolés : dites au premier d'aller à droite, suivez-les jusqu'à
    l'auberge, où vous devrez orienter la famille vers la gauche. Dites à la femme avec ses enfants d'aller vers la droite et le pont. Continuez à monter, jusqu'au belvédaire puis jusqu'au temple, où un homme vous sauve. <br />
    C'est alors que Beate s'en mèle, bien décidée à voler la Perle Magique. Une fois dans le temple, elle accomplit son ordre avant de s'échapper. Suivez la, mais néanmoins, n'oubliez pas de sauvegarder et de parler aux habitants, qui ont un cadeau pour vous si vous avez sauvé tout le monde...<br />
    Courez au dehors. Beate vous attend... </font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><u><i><font face="Verdana" color="#FF0000">Boss N°10 : Beate: </font></i></u></p>
      <p align="justify"></b><font face="Verdana" color="#FFFFFF"><br />
        <b>HP :</b> 4736 ; <b>MP :</b> 3964 ; <b>Niveau :</b> 17<br />
        <b>Faiblesse :</b> Tueur<br />
        <b>À voler :</b> Renais, Thor, Nothung ; <b>Laissé au combat :</b> - ; <b>Gils :</b> - ; <b>CP :</b> -<br />
        <b>Combat :</b> Ce combat n'est pas aussi dur qu'on pourrait le penser, même si Beate ne se laisse pas faire ! Vous n'avez d'ailleurs pas la possibilité de gagner : elle met fin au combat en lançant son attaque Faucheuse. Notez que Beate ne fera jamais d'attaque groupée, ce qui facilite les soins. Restez avec vos HP au
        maximum. Attaquez-la avec vos armes, sautez avec Freyja et usez de la magie de Bibi, en ayant Stocké auparavant. Vous n'aurez pas trop de problèmes. </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">L'attaque menace de s'intensifier. Vos héros bondissent dans les vasques de téléportation des Mages Noirs afin de résister à l'hécatombe. Branet invoque alors Odin pour détruire l'immense arbre... <br />
    Vous vous retrouvez à bord de la Rose Rouge, le vaisseau royal. Ecoutez le dialogue entre Beate et Branet, puis allez sauvegarder auprès du Mog. Parlez à Bibi en bas pour partir vers Alexandrie... </font></p>
  <p align="justify"><font face="Verdana" color="#FFFFFF"><br />
  </font><b><font FACE="Verdana"><u><font color="#0000FF">6. Le Château d'Alexandrie</font></u></p>
  <blockquote>
    <blockquote> </font>
      <p align="justify"><font face="Verdana" color="#FFFFFF"> À récupérer :</font></b><font face="Verdana" color="#FFFFFF"><br />
        - 1 Tente, dans le passage secret de la chambre de Branet<br />
        - 1 Nothung, dans le passage secret de la chambre de Branet </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">Vous retrouvez Steiner et Markus, toujours emprisonnés dans leur &quot;cage&quot;... Place maintenant au passage sûrement le plus énervant du jeu, alors prenez garde à la crise de nerfs !<br />
    Il s'agit pour vous de vous libérer. A l'aide des touches <b>Gauche</b> et <b>Droite</b>, vous devrez faire balancer la cage, de telle sorte qu'elle heurte un des murs. Pour cela, vous devrez appuyer correctement sur le bon bouton au bon moment, pour gagner de la vitesse et ainsi de la hauteur. Pensez à appuyer sur la bonne
    touche immédiatement quand la cage fait demi tour. De même, quand vous avez suffisement d'élan, appuyez plusieurs fois en même temps ! Si vous comprenez vite comment faire pour ne pas eclater en sanglots, ça devrait aller... <br />
    Une fois que la cage a heurté un mur, vous pouvez vous échapper. Vérifiez votre équipement (uniquement pour Steiner) puis avancez. Des gardes de mettent en travers de votre chemin : battez-les autant que vous voulez si jamais vous désirez augmenter votre niveau. Continuez à avancer sans tenir compte de l'échelle du
    milieu. Prenez en revanche celle de gauche. Une fois en haut, vous retrouvez Djidane, Bibi et Freyja... dont vous reprenez les commandes, Steiner en plus. Markus s'en va lui sauver Frank. <br />
    À partir de là, vous avez exactement 30 minutes pour retrouver et sauver Dagga !<br />
    Ne paniquez pas, 30 minutes c'est bien trop ! Vérifiez bien votre équipement puis avancez. Ici, les combats peuvent être évités. Il suffit d'éviter de croiser le chemin d'un garde... Néanmoins, c'est plutôt recommandé d'en combattre quelques uns, pour le plaisir de vos EXP ! Foncez immédiatement à l'intérieur du
    château, gravissez l'escalier puis allez en bas, montez l'autre escalier et allez en haut. Passez la porte et allez tout droit : vous vous retrouvez dans la chambre de Branet. <br />
    Appuyez sur X devant le chandelier, au dessus de la cheminée, pour débloquer un passage secret... Descendez le grand escalier et avancez jusqu'à une porte close... Ouvrez-la... et... </font></p>
  <p align="justify">&nbsp;</p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><u><i><font face="Verdana" color="#FF0000"> Boss N°11a : Pile:</font></i></u></p>
      <p align="justify"></b><font face="Verdana" color="#FFFFFF"> <br />
        <b>HP :</b> 4896 ; <b>MP :</b> 9999 ; <b>Niveau :</b> 16<br />
        <b>Faiblesse :</b> Tueur<br />
        <b>À voler :</b> Partisan, Galaxias ; <b>Laissé au combat :</b> - ; <b>Gils :</b> - ; <b>CP :</b> -<br />
        <br />
        <b>Boss N°11b : Face</b><br />
        <b>HP :</b> 2984 ; <b>MP :</b> 9999 ; <b>Niveau :</b> 16<br />
        <b>Faiblesse :</b> Tueur<br />
        <b>À voler :</b> Mitharmure, Mithgilet ; <b>Laissé au combat :</b> - ; <b>Gils :</b> - ; <b>CP :</b> -<br />
        <br />
        <b>Combat :</b> Ce combat est très facile et vous devriez y mettre fin rapidement. N'oubliez pas le compte à rebours toutefois... Pensez à les piller avec Djidane. Concentrez vos attaques sur un seul des deux, de préférence celui qui se concentre (il reste à terre avec un halo de lumière autour de lui). Vérifiez vos HP
        qui ne risquent pas de tomber brutalement et attaquez fort, le combat devrait passer vite ! </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF"> Courez vers Dagga pour la sauver ! Après l'ATE, sauvegardez puis sortez des sous-sols sans oublier de bien vous soigner. Une fois dans la chambre de Branet, Beate arrive et vous défie à nouveau... </font></p>
  <p align="justify">&nbsp;</p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><i><u><font face="Verdana" color="#FF0000"> Boss N°12 : Beate: </font></u></i></p>
      <p align="justify"></b><font face="Verdana" color="#FFFFFF"> <br />
        <b>HP :</b> 5709 ; <b>MP :</b> 4203 ; <b>Niveau :</b> 19<br />
        <b>Faiblesse :</b> Tueur<br />
        <b>À voler :</b> Renais, Nothung, Gilet camo ; <b>Laissé au combat :</b> - ; <b>Gils :</b> - ; <b>CP :</b> -<br />
        <b>Combat :</b> Beate veut à nouveau s'occuper de vous. Utilisez exactement la même technique que lors des précédents combats, mais vous aurez plus de HP à lui faire perdre avant de mettre fin au combat... </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF"> Après la discussion, le groupe s'enfuit avec la princesse, tandis que Beate et Freyja restent pour couvrir les arrières. Descendez le grand escalier avant de reprendre le contrôle de Beate et Freyja. Utilisez à 100% la force de frappe de Beate, car vous ne pourrez guère le faire plus par la suite. Vous ne
    ferez ainsi qu'une bouchée des monstres. Steiner abandonne Djidane, Dagga et Bibi puis remonte. Continuez jusqu'à la Route de la Gorgone et grimpez dans la première qui vient après vous être libérés du piège... <br />
    Une fois dans la grotte, un monstre vous assaille lâchement ! </font></p>
  <p align="justify">&nbsp;</p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><u><i><font face="Verdana" color="#FF0000"> Boss N°13 : Larvalar: </font></i></u></p>
      <p align="justify"></b><font face="Verdana" color="#FFFFFF"> <br />
        <b>HP :</b> 3352 ; <b>MP :</b> : 584 ; <b>Niveau :</b> 18<br />
        <b>Faiblesse :</b> Glace<br />
        <b>À voler :</b> Cahnène, Giladaman, Renais ; <b>Laissé au combat :</b> Ether, carte Gorgone ; <b>Gils :</b> 1404 ; <b>CP :</b> 7<br />
        <b>Combat :</b> Voici donc le retour de Larvalar. Prenez garde, car il peut vous envoyer au tapis facilement, d'autant plus qu'il s'enroule sur lui-même pour parer aux attaques. Evitez donc les attaques à l'arme et privilégiez la magie Glace de Bibi. Volez avec Djidane, attaquez et soignez abondemment avec Dagga, car le
        moindre déficit de HP peut vous être fatal. Si vous persévérez, vous arrivez facilement à bout de ce serpent, qui ne reviendra plus vous déranger ! </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF"> La Route de la Gorgone vous fait déboucher violemment dans un endroit plutôt accueillant de prime abord... </font></p>
  <b><font FACE="Verdana">
  <p align="justify">&nbsp;</p>
  <p align="justify"><u><font color="#0000FF">7. Pinnacle Rocks</font></u></p>
  <blockquote>
    <blockquote> </font>
      <p align="justify"><font face="Verdana" color="#FFFFFF"> À récupérer :</font></b><font face="Verdana" color="#FFFFFF"><br />
        - 1 Mithgilet, en dessous du Mog<br />
        - 1 Organix, au fond de la rivière<br />
        - 1 Mithrilet, en remontant la rivière, tout au bout </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF"><br />
    La luxuriante forêt de Pinnacle Rocks est un lieu de mystère, et vous allez bien vite le constater ! Ramuh, que les joueurs des précédents FF doivent connaître, fait son apparition et parle à Dagga. Vous devrez retrouver, réunir et réorganiser une histoire cachée dans ce lieu. Cette quête n'est pas obligatoire mais
    vous permet d'obtenir Ramuh. </font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><font face="Verdana" color="#FFFFFF">Première partie : </font></b> <font face="Verdana" color="#FFFFFF"> parlez à Ramuh en personne, celui qui s'est adressé le premier à vous, pour recevoir un bout de l'histoire : <b>Mystère</b>. </font></p>
      <b>
      <p align="justify"><font face="Verdana" color="#FFFFFF">Deuxième partie : </font></b> <font face="Verdana" color="#FFFFFF"> allez en haut à gauche du Mog pour trouver <b>Genèse</b>. </font></p>
      <b>
      <p align="justify"><font face="Verdana" color="#FFFFFF">Troisième partie : </font></b> <font face="Verdana" color="#FFFFFF"> allez dans l'eau en dessous du Mog puis fouillez juste à gauche de la petite fenêtre à barreaux pour obtenir <b>Humain</b>. </font></p>
      <b>
      <p align="justify"><font face="Verdana" color="#FFFFFF">Quatrième partie : </font></b> <font face="Verdana" color="#FFFFFF"> continuez dans la rivière. Dans l'écran après celui du Mog, il vous suffit de fouiller dans l'eau : <b>Assistance</b>. </font></p>
      <b>
      <p align="justify"><font face="Verdana" color="#FFFFFF">Cinquième partie : </font></b> <font face="Verdana" color="#FFFFFF"> continuez encore dans la rivière. Au dernier écran, fouillez entre les deux branchages sous le chemin pour avoir le droit à <b>Silence</b>. </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">Retournez voir Ramuh puis donnez lui l'histoire dans l'ordre. Si vous ne voulez pas chercher, voici les deux solutions possibles : <b>Genèse, Assistance, Silence, Mystère</b> ou <b>Genèse, Assistance, Silence, Humain</b>. Vous recevrez un <b>Péridot</b> permettant d'invoquer Ramuh si vous répondez
    correctement ! Une fois que cela est fait, retournez dans la rivière et avancez jusqu'à sortir pour rejoindre Lindblum... </font></p>
  <b><font FACE="Verdana">
  <p align="justify">&nbsp;</p>
  <p align="justify"><u><font color="#0000FF">8. Lindblum</font></u></p>
  <blockquote>
    <blockquote> </font>
      <p align="justify"><font face="Verdana" color="#FFFFFF"> À récupérer :</font></b><font face="Verdana" color="#FFFFFF"><br />
        - 1 carte Lindblum, dans la grande rue du quartier commerçant<br />
        - 1 Résurex, dans le coffre d'une maison<br />
        - 1 Ether, dans le coffre d'une maison<br />
        - 340 Gils, dans le repère des Tantalas<br />
        - 993 Gils, dans le repère des Tantalas<br />
        - 262 Gils, dans le repère des Tantalas<br />
        - 1 Gemme, dans un coffre au quartier théâtral<br />
        - 1 Bandana, à la porte du Dragon Terrestre </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF"><br />
    Sous vos yeux effrayés, Branet réduit Lindblum en cendres à l'aide de la chimère Atomos ! Vous entrez alors dans la ville détruite... Fouillez les maisons du quartier commerçant puis dirigez-vous vers la place la plus au bout, pour y rencontrer le conseiller Olmetta, qui vous mènera auprès du Roi Cid. Vous apprenez alors
    un peu plus sur Branet et Kuja. Votre équipe décide de se rendre sur le Continent Extérieur... <br />
    Avant de partir, libre à vous de fouiller la ville et d'acheter un nouvel équipement dans les boutiques qui demeurent. N'hésitez pas à prendre le taxair pour les autres quartier, notamment le théâtral, où le repère des Tantalas est toujours aussi rempli ! Une fois que tout est terminé, rendez-vous là où vous aviez
    rencontré Olmetta et parlez à l'homme sur la place. Dans les sous-sols du château, le Roi vous donne la Mappemonde qui vous indique en fait ce à quoi le monde entier ressemble.<br />
    Rendez-vous à la Porte du Dragon Terrestre, où le marchand a des objets intéressants à vendre, puis sortez. Direction : le marais des Kwe ! </font></p>
  <b><font FACE="Verdana">
  <p align="justify">&nbsp;</p>
  <p align="justify"><u><font color="#0000FF">9. La Route des Fossiles</font></u></p>
  <blockquote>
    <blockquote> </font>
      <p align="justify"><font face="Verdana" color="#FFFFFF"> À récupérer :</font></b><font face="Verdana" color="#FFFFFF"><br />
        - 2 Ethers, en retournant à l'entrée après l'attaque d'Amérante et dans un coffre<br />
        - 1 Féélarme, dans un coffre en faisant un détour<br />
        - 1 Tiare, dans un coffre en faisant un détour<br />
        - 1 Gilet camo, en fouillant plus loin dans la grotte<br />
        - 1 Gemme, à trouver en fouillant la roche à la pioche<br />
        - 1 Maxi Potion, à trouver en fouillant la roche à la pioche<br />
        - 1 Madahine, à trouver en fouillant la roche à la pioche </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF"><br />
    Il s'agit du Marais où vous aviez rencontré Kweena. Après l'attaque de Clayra, elle avait disparu... vous la retrouvez donc là ! Parlez-lui et suivez-la. Elle vous emmènera par hasard à l'entrée d'une grotte souterraine... Quelle heureuse surprise ! Il vous suffit d'y rentrer pour aller jusqu'au continent extérieur... <br />
    Prenez garde en entrant dans la Route des Fossiles, car une bien heureuse surprise vous attend. Vérifiez votre équipement, puis avancez. Arrivé à un moment, un monstre se met à vous poursuivre. Vous n'avez pas d'autre choix que de foncer ! Sur le pont, vous devrez prendre garde aux balanciers. Aventurez-vous en dessous
    uniquement quand le passage est libre, car sinon le monstre se jettera sur vous ! Si vous attendez quelques rapides instants avant de vous glisser sous le premier, les deux suivants devraient être négociés sans arrêt. Prudence toutefois !<br />
    Si jamais l'Amérante vous rattrape, vous devrez combattre. Il peut tuer directement les membres de votre équipe dont le niveau est un multiple de 5 ! De plus, vous ne pourrez pas le tuer, juste l'affaiblir, pour vous enfuir par la suite. Au bout du 8ème balancier, votre calvaire sera fini. Enfin, pas entièrement, car une
    femme assez déterminée vous bondit dessus... </font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify">&nbsp;</p>
      <p align="justify"><i><u><font face="Verdana" color="#FF0000">Boss N°14 : Lamie: </font></u></i></p>
      <p align="justify"></b><font face="Verdana" color="#FFFFFF"><br />
        <b>HP :</b> 5708 ; <b>MP :</b> 4802 ; <b>Niveau :</b> 19<br />
        <b>Faiblesse :</b> Tueur<br />
        <b>À voler :</b> Epée Vénus, Graduis, Ether ; <b>Laissé au combat :</b> - ; <b>Gils :</b> - ; <b>CP :</b> -<br />
        <b>Combat :</b> Lamie n'attaque que Dagga. Il vous suffit de la soigner très souvent et d'attaquer avec le reste de l'équipe pour réussir à en venir à bout. N'oubliez pas de voler avec Djidane ! Lamie s'enfuira avant que vous ne puissez la battre. </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">Vous voici maintenant livrés au destin dans cette immense grotte, qui est assez énervante... Vous pouvez commencer par retourner en arrière, car un objet est caché là où le monstre a commencé à vous poursuivre. Revenez dans le bon sens. Vous verrez... une gorgone ! Il s'agit en fait du meilleur moyen
    de transport ici... <br />
    Pour intercepter une gorgone, il vous faut cueillir des fleurs. Il y en a toujours à proximité d'un lieu de passage. Prenez-en donc une puis attendez le passage d'une gorgone. Il faut attendre le &quot; ! &quot; avant de l'attraper. Une fois à dos de gorgone, vous pourrez avancer jusqu'à une nouvelle gallerie. Allez trouver
    le Mog, accompagné de Steelskin, celui-ci vous vendant un <b>Résurex</b>, un <b>Remède</b> et un <b>Ether</b> pour 555 Gils. N'hésitez surtout pas à vous les procurer ! <br />
    Descendez ensuite en bas à droite des Mogs. Prenez une gorgone pour arriver à une pièce avec un coffre. Revenez sur vos pas. Parlez à l'homme dans la salle des Mogs, puis montez à droite pour prendre une gorgone. Une fois au carrefour, activez le levier et revenez prendre une gorgone. Le chemin a été dévié. Une fois
    descendu de la bête, prenez les escaliers et avancez jusqu'à trouver un coffre contenant un Ether. Empruntez le chemin du bas pour actionner le levier. Revenez ensuite au premier carrefour, réactionnez le levier lui reprenez une gorgone pour revenir là où étaient le mineur et les mogs. <br />
    Retournez auprès des mogs pour sauver puis prenez la gorgone de droite. Vous vous retrouvez à côté d'un mineur vendant des objets. Une fois que vous avez fait &quot; le plein &quot;, montez l'escalier. En haut, il y a un nouveau carrefour. <br />
    Une petite quête : actionnez le levier de ce carrefour et prenez une gorgone. Si vous allez à droite, vous trouverez une Tiare ! Revenez ensuite et remettez le levier en position.<br />
    Prenez la gorgone sans avoir touché au levier. Elle vous enverra à un endroit recouvert de feuilles. Escaladez-les pour aller jusqu'à un carrefour... Si vous actionnez le levier, vous pourrez ensuite rejoindre la gorgone à droite qui vous emmenera à la sortie de la grotte... </font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><font face="Verdana" color="#FFFFFF">Quête secondaire : </font></b> <font face="Verdana" color="#FFFFFF"> Si vous désirez explorer au maximum la grotte, voici la dernière quête possible. N'actionnez pas tout de suite le levier, à côté des feuilles, et continuez à droite pour reprendre une gorgone vous emmenant encore plus loin. Vous trouvrez un Gilet Camo à gauche. Avancez tout
        droit. Au fond, il y a une dernière mine. Parlez à l'homme et louez la pioche en l'échange d'une Potion ! Commencez par la façade de gauche : si vous creusez, le mur s'écroulera, libérant un mog ! Maintenant, fouillez et creusez un peu partout afin de recueillir des objets divers. Retournez ensuite d'où vous venez : le
        mur avec les feuilles. Vous pouvez désormais suivre le guide pour sortir de la grotte. </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">Un nouveau continent s'ouvre à vous. Sauvegardez et lancez-vous à l'aventure ! Faites très attention aux Pampas qui peuplent ces terres. Il peuvent, tout comme dans FFVIII, vous infliger 1000 points de dommages en un seul coup... Pour ne pas vous faire avoir, ne les attaquez que quand ils sont hors de
    terre. <br />
    En allant tout à l'Est, vous trouverez un autre Marais des Kwe. Visitez le à l'occasion. Dirigez-vous maintenant vers l'étrange pont sous lequel vous avez déjà dû passer. </font></p>
  <b><font FACE="Verdana">
  <p align="justify">&nbsp;</p>
  <p align="justify"><u><font color="#0000FF">10. Condéa (1)</font></u></p>
  <blockquote>
    <blockquote> </font>
      <p align="justify"><font face="Verdana" color="#FFFFFF"> À récupérer :</font></b><font face="Verdana" color="#FFFFFF"><br />
        - 2700 Gils, à l'entrée même de la ville, sous la fenêtre en nid d'abeilles<br />
        - 1800 Gils, dans un des lits à l'auberge<br />
        - 1 Diamant, dans la place principale, caché par l'objet au centre<br />
        - 1 Résurex, en bas des escaliers, à côté de la boutique </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">Une fois entré dans le village, l'équipe se disperse comme à l'habitude. Et comme à l'habitude aussi, des ATE vous attendent. Visitez un peu Condéa pour trouver quelques objets, peut-être vous reposer. Un mog se trouve à côté de la boutique... Curieusement, quand vous vous trouvez à côté, un Mage
    Noir surgit et s'en va en courant.</font> <font face="Verdana" color="#FFFFFF">Terminez de visiter la ville puis sortez sans oublier de parler au bonhomme à l'entrée...</font></p>
  <b><font FACE="Verdana">
  <p align="justify">&nbsp;</p>
  <p align="justify"><u><font color="#0000FF">11. Village des Mages Noirs</font></u></p>
  <blockquote>
    <blockquote> </font>
      <p align="justify"><font face="Verdana" color="#FFFFFF"> À récupérer :</font></b><font face="Verdana" color="#FFFFFF"><br />
        - 1 Elixir, à droite de l'entrée de la maison, à gauche au premier écran<br />
        - 1 ChocoLégume, dans la maison derrière le mog<br />
        - 2000 Gils, dans le moulin<br />
        - 843 Gils, sur les toits, en haut de l'échelle du moulin<br />
        - 1 Ether, dans la boutique<br />
        - 1 Vierge, dans la chambre de l'auberge<br />
        - 1 Obi Noir, à l'étage de la boutique </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">Le Village des Mages Noirs se trouve au sud-est de Condéa, perdu dans la grande forêt qui court entre le plateau et la montagne. Vous devriez le trouver rapidement. <br />
    Entrez. Là, il va falloir être tactique car l'entrée est cachée. A l'intersection, vous devrez prendre à droite, à droite, à gauche et à droite.<br />
    Vous voici dans le village. A nouveau l'équipe se sépare. Visitez le village pour prendre les objets, voir le mog, vos compagnons ainsi que les ATE vous montrant la réaction des Mages Noirs suite à votre venue. Vous pouvez aller à l'auberge pour dormir. Pendant la nuit, Bibi se réveillera et ira parler à un Mage Noir.<br />
    Le lendemain, finissez de visiter le village pour trouver les objets et sortez pour rejoindre Condéa. </font></p>
  <b><font FACE="Verdana">
  <p align="justify">&nbsp;</p>
  <p align="justify"><font color="#0000FF"><u>12. Condéa (2)</u></font></font></b><font face="Verdana"><u><br />
    </u></font><font face="Verdana" color="#FFFFFF"> <br />
      Vous voici de retour à Condéa. Pour aller vers la montagne, vous devrez effectuer la Cérémonie de Sacralisation.<br />
      Une fois la Cérémonie effectuée, Djidane et Dagga pourront passer, suivis des autres personnages. Durant le dialogue entre Djidane et Bibi, vous pouvez choisir n'importe quelle solution. La 2 vous donnera accès toutefois à un ATE. Kweena ne va pas tarder à vous quitter, alors récupérez son équipement ! Vous êtes
      désormais à la Passe de Condéa. </font></p>
  <b><font FACE="Verdana">
  <p align="justify">&nbsp;</p>
  <p align="justify"><u><font color="#0000FF">13. La Passe de Condéa</font></u></p>
  <blockquote>
    <blockquote> </font>
      <p align="justify"><font face="Verdana" color="#FFFFFF"> À récupérer :</font></b><font face="Verdana" color="#FFFFFF"><br />
        - 1 Remède, en haut des racines de gauche<br />
        - 1 Roc Bleu, en haut des racines de gauche<br />
        - 1 Roc Rouge, en haut des racines de droite<br />
        - 1 Tente, en haut des racines de droite<br />
        - 1 Roc Jaune, à la place du boss<br />
        - 1 Roc Vert, sur la branche de droite après le boss<br />
        - 1 Ether, sur la branche de droite après le boss<br />
        - 1 Lunalithe, si vous avez tous les Rocs </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">Eiko rejoint vos rangs. Associez-lui les objets que vous avez enlevé à Kweena, puis avancez dans la passe. Au fond, vous trouverez des racines que vous pourrez escalader. Des objets vous attendent en haut.<br />
    Redescendez et prenez à droite cette fois-ci. Il y a une autre racine à escalader, et d'autres objets en haut à prendre ! Continuez ensuite le long du chemin pour trouver un Mog, accompagné de Steelskin. Vous pourrez, pour 666 Gils, lui acheter un <b>Cachet</b>, une <b>Tente</b> et un <b>Ether</b> ! </font></p>
  <p align="justify">&nbsp;</p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><font face="Verdana" color="#FFFFFF">Quête secondaire : </font></b> <font face="Verdana" color="#FFFFFF"> sur le chemin avant les Mogs, vous pourrez attraper un Puluche des Montagnes. Si vous en avez un, retournez à Condéa ! Le dénommé Kikunosuke vous offrira une <b>carte Puluche</b> en échange du Puluche des Montagnes ! </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">Le chemin se divise alors en deux. Inutile pour le moment d'aller à droite. Allez à gauche. Vous pourrez admirer une séquence cinématique vous montrant le gigantesque Ifa. Continuez tout droit, mais pensez à soigner vos personnages. En effet, un boss vous attend... </font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><i><u><font face="Verdana" color="#FF0000">Boss N°15 : Gargantua: </font></u></i></p>
      <p align="justify"></b><font face="Verdana" color="#FFFFFF"><br />
        <b>HP :</b> 8106 ; <b>MP :</b> 908 ; <b>Niveau :</b> 28<br />
        <b>Faiblesse :</b> Tueur<br />
        <b>À voler :</b> Renais, Mithrette, Fifre ; <b>Laissé au combat :</b> Tente, Elixir, Carte Fourmilion ; <b>Gils :</b> 2136 ; <b>CP :</b> 9<br />
        <b>Combat :</b> Ce combat ne risque pas de vous causer de trop gros problèmes, mais restez prudent. Sa seule grosse attaque est &quot;Séisme&quot;. Pour la contrer, mettez toute votre équipe en lévitation (sort disponible avec la Tiare) ! Gargantua se soigne dès qu'il a perdu beaucoup de HP. Utilisez des attaques psychiques
        pour l'en empécher. Volez le avec Djidane et attaquez normalement avec le reste de l'équipe. </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">Ramassez le <b>Roc Jaune</b> et continuez à droite. Vous y trouverez le dernier Roc ainsi qu'un <b>Ether</b>. Si vous avez ramassé les autres Rocs, vous pouvez vous rendre là où étaient les Mogs puis aller à droite. Vous trouverez une grande statue dans laquelle vous devrez mettre les Rocs pour rececvoir
    un <b>Lunalithe</b> ! <br />
    Revenez ensuite où était Gargantua et prenez à droite puis à gauche. Vous reviendrez sur l'Atlas. Dirigez-vous vers Madahine-Salee, au Nord-Est. Sauvegardez et entrez. </font></p>
  <b><font FACE="Verdana">
  <p align="justify">&nbsp;</p>
  <p align="justify"><u><font color="#0000FF">14. Madahine-Salee (1)</font></u></p>
  <blockquote>
    <blockquote> </font>
      <p align="justify"><font face="Verdana" color="#FFFFFF"> À récupérer :</font></b><font face="Verdana" color="#FFFFFF"><br />
        - La Balance, <b>Trésor</b>, derrière la fontaine<br />
        - 1 Tente, à côté de Dagga<br />
        - 1 Gemme, autour de la table<br />
        - 1 Résurex, autour de la table<br />
        - Kilimandjaro, <b>Trésor</b>, dans la cuisine, à gauche de la table </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">Une fois dans Madahine-Salee, vous apprenez que vous êtes chez Eiko. Vous aurez droit à un ATE de Bibi. Fouinez un peu la place principale du village détruit puis allez à droite. Un ATE vous y attend. En retournant sur la place, vous aurez encore un ATE, vous montrant Eiko en train de préparer à manger. <br />
    Vous pourrez agir sur cet Active Time Event ! Il vous suffira d'envoyer les Mogs aider Eiko, comme ceci :<br />
    - Chimono : envoyez-le pêcher<br />
    - Mocha : envoyez-le prendre des pommes de terre<br />
    - Monel : laissez-le dans les cuisines<br />
  <br />
    Allez vers le bas, vers la maison d'Eiko. Bibi est à côté de la porte. Parlez-lui. Vous devrez ensuite suivre le Mog nommé Moriçone, qui vous emmenera jusqu'au Mur des Invokations. Un autre ATE mettant en scène Eiko intervient. Mettez de préférence un repas pour 11/12 personnes, n'utilisez pas les Puluches et mettez
    Monel aux cuisines et à la pêche ! <br />
    Parlez au Mog devant l'entrée du Mur. Retournez voir Dagga et parlez-lui, puis reparlez enfin au Mog. Vous pourrez entrer voir le Mur ! Sortez ensuite et vous verrez un dernier ATE avec Eiko. Elle vient de pêcher Kweena... Après ça, vous pourrez enfin rentrer dans sa maison.<br />
    Après avoir mangé, visitez la maison, ramassez les objets, parlez aux Mogs. L'équipe décide alors de se rendre à l'Ifa. Rendez-vous là où vous avez battu Gargantua et prenez le chemin de gauche cette fois-ci... </font></p>
  <b><font FACE="Verdana">
  <p align="justify">&nbsp;</p>
  <p align="justify"><u><font color="#0000FF">15. L'Ifa (1)</font></u></p>
  <blockquote>
    <blockquote> </font>
      <p align="justify"><font face="Verdana" color="#FFFFFF"> À récupérer :</font></b><font face="Verdana" color="#FFFFFF"><br />
        - 1 Renais, en descendant dans l'arbre et après avoir actionné un interrupteur<br />
        - 1 Maxi Potion, dans la partie noire en descendant dans l'arbre<br />
        - 1 Bâton bénit, en descendant dans l'arbre et après avoir actionné un interrupteur plus bas<br />
        - 1 Ether, en descendant dans l'arbre<br />
        - 1 Ramyaflûte, en descendant dans l'arbre<br />
        - 1 Remède, en descendant dans l'arbre<br />
        - 1 Elixir, sur la plate-forme avec le boss<br />
        - 1 Brigandine, sur la plate-forme avec le boss </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">Sur la carte du monde, avancez jusqu'au grand arbre : c'est l'Ifa. Entrez puis avancez tout droit jusqu'à tomber sur une petite plate-forme. Djidane décide de se placer dessus. Cette plate-forme vous permet d'accéder dans les profondeurs de l'arbre...<br />
    A partir de maintenant, prenez garde, car la plupart des monstres sont des morts-vivants. N'oubliez pas que les objets de soin peuvent les tuer très rapidement et que les compétences comme Undeadkiller vous permettront d'augmenter la puissance de vos coups ! Une fois descendu de la pierre qui vous a amené dans les profondeurs
    de l'Ifa, commencez à descendre. Vous trouverez des leviers à actionner, vous permettant d'accéder à différents coffres. Si un des leviers ne semble pas agir, retournez à l'écran précédent pour voir qu'un coffre y est apparu !<br />
    Arrivé en bas, vous verrez une nouvelle plate-forme. Montez-y pour qu'elle vous conduise encore plus profondément. Durant la descente, des monstres vous attaqueront... En bas, quelques objets vous attendent, puis préparez-vous au combat. Un gros boss finira par vous tomber dessus... </font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><u><i><font face="Verdana" color="#FF0000">Boss N°16 : Soulcage: </font></i></u></p>
      <p align="justify"></b><font face="Verdana" color="#FFFFFF"><br />
        <b>HP :</b> 9765 ; <b>MP :</b> 862 ; <b>Niveau :</b> 26<br />
        <b>Faiblesse :</b> Undeadkiller, Feu, Sacré<br />
        <b>À voler :</b> Cahnène, Manto noir, Brigandine ; <b>Laissé au combat :</b> Résurex, Elixir ; <b>Gils :</b> 3800 ; <b>CP :</b> 9<br />
        <b>Combat :</b> Soulcage n'est pas un boss très difficile à tuer, mais il faut savoir prendre ses précautions. N'utilisez en aucun cas les sorts de feu de Bibi, car il pourrait contrer avec une attaque mortelle. Au cas où votre doigt ait glissé, vous pouvez contrer avec une attaque de glace. En l'attaquant aux armes, vous
        réussirez à l'envoyer au tapis assez vite. Si jamais vous n'avez pas de temps à perdre, il existe une méthode radicale : balancez-lui un Elixir ou la magie Vie. Il se peut qu'il meure instantanément ! </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">Vous vous retrouverez à la sortie de l'Ifa, après une brève séquence cinématique. Retournez à Madahine-salee. </font></p>
  <p align="center"><font face="Verdana" color="#FFFFFF"><br />
  </font></p>
  <b><font FACE="Verdana">
  <p align="justify"><u><font color="#0000FF">16. Madahine-salee (2)</font></u></p>
  <blockquote>
    <blockquote> </font>
      <p align="justify"><font face="Verdana" color="#FFFFFF"> À récupérer :</font></b><font face="Verdana" color="#FFFFFF"><br />
        - 1 Renais, dans un coffre à côté d'Eiko<br />
        - 1 Gilet camo, dans un coffre à côté d'Eiko<br />
        - 1 Explodor, dans le Mur des Invokations<br />
        - 1 Elixir, dans le Mur des Invokations </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">De retour à Madahine-salee, suivez Eiko jusqu'à la petite pièce sous sa cuisine. Après la discussion, sortez de la pièce et allez voir dans le Mur des Invokations sans oublier de parler au Mog se trouvant devant. Ensuite, demandez à voir Moug. Vous voyez alors Eiko se faire enlever. Le Rouge se met en
    travers de votre chemin et le combat démarre... </font></p>
  <p align="justify">&nbsp;</p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><u><i><font face="Verdana" color="#FF0000">Boss N°17 : Le Rouge: </font></i></u></p>
      <p align="justify"></b><font face="Verdana" color="#FFFFFF"><br />
        <b>HP :</b> 8985 ; <b>MP :</b> 5865 ; <b>Niveau :</b> 22<br />
        <b>Faiblesse :</b> Tueur<br />
        <b>À voler :</b> Ether, Amèriffe ; <b>Laissé au combat :</b> Tente ; <b>Gils :</b> 4790 ; <b>CP :</b> 9<br />
        <b>Combat :</b> ce combat n'est pas un obstacle infranchissable. Il vaut quand même mieux que Djidane soit équipé des compétences Auto Booster, Contrattak, Tueur ou Auto Potion. Lorsque Le Rouge se place sur les murs, ne l'attaquez pas, car c'est inutile. Attendez qu'il revienne à sa place pour le rouer de coups... Pensez
        aussi à vous soigner. </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">Le Rouge s'enfuit alors. Suivez à nouveau Eiko jusqu'à la pièce sous la cuisine pour découvrir sa <b>Boucle Relique</b>. Sortez de la maison et approchez vous du garde fou. Un &quot;!&quot; va apparaître...<br />
    Après ces séquences cinématiques, vous pouvez sortir de Madahine-salee. Le Rouge vous attend à la sortie. Il rejoint ensuite votre groupe, et vous devrez choisir qui prendre pour aller à l'Ifa. Inutile de prendre Dagga et Eiko ensemble, une seule des deux suffit. Dès que vous êtes prêts, vous pouvez retourner à l'Ifa... </font></p>
  <b><font FACE="Verdana">
  <p align="justify">&nbsp;</p>
  <p align="justify"><u><font color="#0000FF">17. L'Ifa (2)</font></u></p>
  <blockquote>
    <blockquote> </font>
      <p align="justify"><font face="Verdana" color="#FFFFFF"> À récupérer :</font></b><font face="Verdana" color="#FFFFFF"><br />
        - 1 Béryl, sur la statue de Léviathan </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">Bercés par une musique extraordinaire, élancez-vous à nouveau dans le grand arbre. Avancez simplement sur les branches. Arrivé un moment, Vous apercevez enfin Kuja...<br />
    Après des discussions, vous vous retrouvez nez à nez avec des monstres lâchés par Kuja. Ils sont faciles à tuer, ne vous inquiétez pas. Dagga prend ensuite la décision d'aller sauver sa mère.<br />
    Un Mog se cache derrière le tronc de l'écran dans lequel vous êtes déjà. Une fois vos affaires effectuées, suivez Dagga le long de la grande branche. Des monstres vont vous y attaquer, mais ils sont sans danger. <br />
    Une fois en bas, il vous suffit d'admirer la fin du CD2. </font></p>
  <p align="justify">&nbsp; </p>
  <p align="center"><b><i><u><font color="#007F00" size="4">CD3</font></u></i></b></p>
  <b><font FACE="Verdana">
  <p align="justify"><u><font color="#0000FF">1. Alexandrie (1)</font></u></p>
  <blockquote>
    <blockquote> </font>
      <p align="justify"><font face="Verdana" color="#FFFFFF"> À récupérer :</font></b><font face="Verdana" color="#FFFFFF"><br />
        - 1 Carte Shiva, en tirant la corde du clocher<br />
        - 1 Carte Ramuh, en tirant la corde du clocher<br />
        - 1 Opale, remis par Totto<br />
        - 1 Topaze, remis par Totto<br />
        - 1 Améthyste, remis par Totto<br />
        - 3 Résurex, un à gauche avant d'embarquer sur le bateau, l'autre à gauche en débarquant du bateau et le dernier au pied de la tour gauche du château<br />
        - 3927 Gils, à droite avant d'embarquer<br />
        - 1 Ether à droite en débarquant du bateau<br />
        - 1 Lapis derrière la fontaine en débarquant du bateau<br />
        - Le Lion, <b>Trésor</b>, devant l'ascenceur de la tour gauche<br />
        - 2680 Gils, sous une table du théâtre </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF"><br />
    Ce troisième CD commence à Alexandrie, alors que Grenat est sur le point de devenir la nouvelle Reine. En ville, Djidane déprime un peu d'apprendre cela, malgré le fait qu'il aie retrouvé ses amis les Tantalas. Vous prenez alors le contrôle de Bibi. Allez dans la taverne pour trouver Djidane, qui n'est pas spécialement
    bavard. Le barman par contre vous apprend que les Tantalas sont en ville, au théâtre qu'à ouvert Ruby. Différents ATE sont disponibles selon les endroits de la ville où vous vous rendez, de même que des mini-jeux comme la course contre Hippo.<br />
    Allez au théâtre, qui se trouve dans la ruelle où vous aviez rencontré Puck au CD1. Markus et Frank se trouvent devant, vous ne pouvez pas le manquer. Acceptez l'invitation de Frank pour voir la pièce. Pendant ce temps, vous revenez à Grenat.<br />
    Maître Totto décide de vous donner 3 nouvelles chimères : il s'agit de Shiva (avec une <b>Opale</b>), Ifrit (avec une <b>Topaze</b>) et Atomos (avec une <b>Améthyste</b>). Grenat désire voir Djidane mais on lui refuse cela. Vous voyez maintenant Eiko qui désire écrire une lettre d'amour à Djidane. Mais comme ne sait pas
    s'y prendre, elle demande à Totto de la faire, pendant que ce dernier reste fasciné par les origines d'Eiko. Ensuite, avancez pour sortir du château. C'est alors que Bach vous surprend... Après une petite discussion, Bach se décide à amener la lettre à Djidane, mais son soin la lui fait perdre immédiatement. Beate la
    retrouve et pense qu'elle est de Steiner... <br />
    On revient alors à Djidane, qui désire demander à Bach de revenir parmi les Tantalas. Après une petite discussion dans la taverne, Bibi arrive et décide d'aller voir Grenat. Vous pouvez visiter un peu la ville, histoire de trouver quelques gâteries, de lire la dernière lettre au Mog dans le clocher, mais aussi pour jouer,
    dans la maison du forgeron, à un jeu avec les trois frères des Tantalas. N'oubliez pas non plus que vous pouvez sortir de la ville (par la place en cercle avec une statue au milieu)... <br />
    Une fois que vous êtes prêt, il vous suffit d'aller en haut de la grand place pour embarquer. Deux objets vous attendent de chaque côtés du petit appontement.<br />
    Idem de l'autre côté, où en fouillant de chaque côté du bateau et derrière la fontaine vous trouverez des objets. Avant d'entrer tout droit dans le château, faites un détour par la tour gauche. Un Résurex vous attend à son pied. Entrez puis allez à gauche pour accéder à l'ascenseur mênant jusqu'à la mer. Pas la
    peine pour le moment de vous y aventurer, sauf qu'au fond d'une des pièces vous trouverez l'une des pierres Stellaires : <b>Le Lion</b> ! <br />
    Allez maintenant dans le château, où vous retrouvez vos amis. Peu après, vous retrouvez Grenat. Après cela, vous aurez droit à l'une des séquences les plus drôles du jeu : tout ceux qui ont lu la lettre se retrouvent autour de la fontaine, jusqu'à ce que Bach n'intervienne. <br />
    Après quelques discussions, l'équipe décide de se rendre à Tréno pour voir Maître Totto. Djidane est également intéressé par le tournoi de cartes qui s'y déroule. Avant de quitter Alexandrie pour Tréno, vous avez droit à un ATE vous montrant Pile et Face se faufilant dans le château...</font></p>
  <b><font FACE="Verdana">
  <p align="justify">&nbsp;</p>
  <p align="justify"><u><font color="#0000FF">2. Tréno (grotte de Kwane et Dali)</font></u></p>
  <blockquote>
    <blockquote> </font>
      <p align="justify"><font face="Verdana" color="#FFFFFF"> À récupérer :</font></b><font face="Verdana" color="#FFFFFF"><br />
        - 1 Bracimeira, dans un ATE d'Eiko<br />
        - 3 Ether, dans des coffres et en haut de l'échelle (grotte de Kwane)<br />
        - Le Scorpion, <b>Trésor</b>, en bas du petit lac (grotte de Kwane)<br />
        - 1 Diadème, dans un des coffres du moulin (Dali)<br />
        - 1 Elixir, dans un des coffres du moulin (Dali)<br />
        - Mini Branet, <b>Trésor</b>, voir quête du moulin de Dali<br />
        - 30 000 Gils, voir quête du moulin de Dali<br />
        - Bluemountain, <b>Trésor</b>, voir quête du moulin de Dali </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF"><br />
    Après votre arrivée à Tréno, vous vous retrouvez seul. Commencez par sortir de chez Totto. Une fois dehors, un ATE vous attend, concernant Bibi. Par la suite, vous aurez le choix entre deux ATE : si vous désirez en savoir plus sur Bibi et son passé, prenez néanmoins &quot;Si je retournais chez moi&quot;. Si vous continuez
    encore, vous aurez un ATE traitant de Tarask, puis encore un autre concernant Eiko. Outre ces ATE, visitez un peu la ville, et profitez-en pour faire un tour à la salles des enchères par exemple, ou bien donner vos pierres Stellaires à Stella. <br />
    Avant d'aller participer au tournoi de cartes, n'oubliez pas que les portes de Tréno ne sont pas fermées. Profitez-en pour aller faire un tour à la Grotte de Kwane, qui se trouve à l'Est, au bout du continent. Fouillez-la pour trouver quelques objets intéressants, comme la pierre stellaire <b>le Scorpion</b> par exemple. Le
    petit lac qui fume vous permet de récupérer en outre vos HP et MP. Dans la maison de Kwane, si vous avez regardé l'ATE &quot;Si je retournais chez moi&quot;, vous retrouvez Bibi et en apprenez davantage sur son passé... <br />
    De l'autre côté de Tréno, vous avez le village Dali, qui comporte une petite mini-quête fort intéressante... Une fois dans le village, et après avoir été chercher le contenu de deux coffres dans le moulin, allez à la maison du maire. </font></p>
  <p align="justify">&nbsp;</p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><font face="Verdana" color="#FFFFFF">La clé du maire : </font></b> <font face="Verdana" color="#FFFFFF"> Dans la maison du maire, vous verrez le fils de ce dernier en train de dormir. Pour ne pas le réveiller, vous devrez marcher lentement. Il y a différents endroits à fouiner dans cette maison : le bureau, l'échelle, le poêle et l'étagère. Vous devrez opérer une tactique spéciale
        afin de piller toute la pièce sans vous faire remarquer. En arrivant par la rue, aller jeter un oeil dans le bureau et l'étagère, tandis qu'en venant du moulin, allez plutôt voir du côté du bureau. Ensuite, si vous fouillez le poêle, vous trouverez la clé du maire... De même, en retournant au bureau, c'est le trésor
        Mini Branet qui vous attend. La clé que vous venez d'obtenir vous permet d'ouvrir la porte fermée du moulin. Derrière elle vous attendent 30000 Gils dans un coffre. &quot;Réouvrez&quot; ce coffre pour obtenir le <b>kafé Bluemoutain</b> ! </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">En revenant à Tréno, vous pouvez aller participer au tournoi de cartes. Si jamais vous n'en avez pas assez, allez voir Totto. Allez maintenant dans le grand bâtiment au centre de la ville... Le bonhomme à gauche de l'entrée vous expliquera toutes les modalités. Pensez à sauvegarder dès que vous le
    pouvez (et si vous avez gagné évidemment). Les deux premiers tours sont relativement faciles. Suivant les différents ATE que vous avez vu, un nouveau se déclenchera (ou non) après le premier tour. Avant de retourner pour le second tour, vous aurez également quelques ATE. Vous les retrouverez aussi après.<br />
    Le troisième tour est plus corsé. Mais, si vous avez un peu d'expérience, vous réussirez sûrement à gagner. Notez les cartes de votre adversaire : ce ne sont que des cartes Puluche ! Si vous gagnez le tournoi, vous remporterez un <b>Métempsy</b>. Votre joie sera bien vite atténuée : pendant que vous jouiez aux cartes,
    Kuja est arrivé à Alexandrie, avec la ferme intension de la détruire... </font></p>
  <p align="justify"><font face="Verdana" color="#FFFFFF"><br />
  </font><b><font FACE="Verdana"><u><font color="#0000FF">3. Alexandrie (2)</font></u></p>
  <blockquote>
    <blockquote> </font>
      <p align="justify"><font face="Verdana" color="#FFFFFF"> À récupérer :</font></b><font face="Verdana" color="#FFFFFF"><br />
        - 1 Potion, si vous n'assignez aucune bonne tâche aux Brutos<br />
        - 1 Ether, si vous assignez une bonne tâche aux Brutos<br />
        - 1 Elixir, si vous assignez deux bonnes tâches aux Brutos<br />
        - 1 Angelarme, si vous assignez toutes les bonnes tâches aux Brutos </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">De retour à Alexandrie, vous voyez Dagga et Beate sur le pied de guerre. Afin de secourir la population et d'avertir le Roi Cid, vous devrez donner une tâche aux Brutos. Si vous vous souvenez de ce que vous a dit Bayroyd au début du jeu, lorsque vous aviez à chercher les Brutos dans le château, vous
    n'aurez aucun mal à assigner les tâches correspondant le mieux à ces guerriers. Vous recevrez les objets indiqués ci-dessus selon les bonnes tâches assignées. Voici néanmoins une aide : </font></p>
  <p align="justify">&nbsp;</p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><font face="Verdana" color="#FFFFFF">Les tâches des Brutos : </font></b><font face="Verdana"><br />
        - Apporter des renseignements : Bloutch et Kohel<br />
        - Aider les habitants : Weimar et Hagen<br />
        - Aller demander de l'aide à Cid : Bayroyd et Lauda<br />
        - Préparer le grand canon : Toghebon et Melgentheim </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">Maintenant, vous êtes entre les mains de Steiner et Beate, qui sont descendu en ville pour tuer un maximum de monstres.<br />
    Si vous n'avez pas changé l'équipement de Steiner depuis quelques temps, profitez-en. Profitez aussi du fait que Beate soit avec vous pour lui enlever son équipement ! En utilisant l'attaque Lame Sainte de Beate, vous devriez réussir à tuer les monstres très rapidement. Vous devrez descendre le long du boulevard principal
    de la ville, qui mène normalement à la sortie. Bien que vous soyez puissants, pensez à vous soigner pour éviter les mauvaises surprises. <br />
    Vous revenez ensuite à Dagga, toujours dans le château. Allez jusque devant la chambre de la Reine, au deuxième étage du château, puis prenez la porte de gauche pour arriver devant un immense escalier. Gravissez-le pour admirer une séquence magnifique : un combat de Chimères...<br />
    Après cette longue séquence pendant laquelle vous apprenez beaucoup de choses, vous retrouvez maintenant Djidane, dans le château. Refaites le même chemin que Dagga (à moins que vous ne désiriez visiter, toutes les salles sont accessibles !) pour la retrouver avec Eiko. Vous assistez alors impuissant à la destruction
    d'Alexandrie... </font></p>
  <p align="justify">&nbsp;</p>
  <b><font FACE="Verdana">
  <p align="justify"><u><font color="#0000FF">4. Lindblum (1)</font></u></p>
  <blockquote>
    <blockquote> </font>
      <p align="justify"><font face="Verdana" color="#FFFFFF"> À récupérer :</font></b><font face="Verdana" color="#FFFFFF"><br />
        - 1 EgoBracelet, dans un des coffres de la chambre<br />
        - 2 Elixir, dans un des coffres de la chambre et dans un coffre de la maison du quartier commerçant<br />
        - 1273 Gils, dans un coffre de la base des Tantalas<br />
        - 970 Gils, dans un coffre de la base des Tantalas<br />
        - 4826 Gils, dans un coffre de la base des Tantalas<br />
        - 1 Lapis, dans un coffre chez l'artiste (quartier théâtral)<br />
        - Le Sagittaire, <b>Trésor</b>, dans les débrits de la grande rue (quartier commerçant)<br />
        - 2 Remède, dans un coffre de la maison du quartier commerçant et à la Porte du Dragon Terrestre<br />
        - 1 Bracimaira, à la Porte du Dragon Aquatique </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">Djidane se réveille dans le château de Lindblum. Fouillez les coffres de la chambre puis sortez-en : Frank apparaît. Il vous renseignera sur la tournure des événements. En sortant, vous verrez un ATE avec Kweena. Montez maintenant là où vous aviez retrouvé Dagga au CD1, pour discuter avec elle, même
    si elle n'est pas bavarde.<br />
    Ensuite, vous devrez aller dans la chambre de Cid, qui est gardée. En vous adressant au garde, vous pourrez entrer !<br />
    Kuja est au coeur de la discussion. Après quelques instants, Eiko apparaît et vous annonce que Dagga est devenue... muette. Quand vous reprenez le contrôle de Djidane, allez à la chambre. Maître Totto est appelé à la rescousse, mais vous annonce malheureusement qu'il ne peut rien faire. Par contre, il semble intéressé
    par le cas du Roi Cid et prodigue un remède, qui ne marchera qu'en cherchant trois objets : un <b>Remède étrange</b>, un <b>Remède suspect</b> et un <b>Beau remède</b>. <br />
    Vous êtes envoyé dans Lindblum pour retrouver ces trois remèdes. On vous indique où se trouve le premier : il est en effet détenu par Cina. Rendez-vous à la planque des Tantalas, au quartier théâtral, pour recevoir l'objet. Retournez à l'intérieur de la planque pour vider les 3 coffres présents : votre porte-monnaie
    en aura pour son plaisir. Avant de reprendre le Taxair, allez dans la maison de l'artiste, qui se trouve juste sous la gare. Fouillez le bas de l'escalier pour trouver le second remède, et n'oubliez pas d'aller visiter le coffre !<br />
    Allez maintenant au quartier commerçant et fouinez la gauche du deuxième écran pour trouver <b>Le Sagittaire</b>. N'oubliez pas non plus de refaire le tour des maisons. Allez ensuite sur la place tout au bout et allez parler à Alice qui vous donnera le dernier remède. Revenez ensuite au château et entrez dans la chambre de
    Cid pour assister à la préparation de l'antidote, qui échoue lamentablement...<br />
    Une fois cet incident passé, votre équipe décide de poursuivre Kuja. Votre première destination sera le village des Mages Noirs. Vous voyez ensuite un nouvel ATE de Kweena. Si vous désirez la récupérer dans votre équipe dès maintenant, vous devrez aller là où elle est restée. Mais cela vous coûtera 100 Gils... Mais
    de toute façon, elle reviendra quand même lorsque vous prendrez le Narcisse Bleu.<br />
    Une fois que vous êtes prêt, allez au sous-sol du château, côté Dragon Aquatique. En sortant et sans avoir oublié de piquer les objets, vous trouverez votre bateau : le Narcisse Bleu. </font></p>
  <p align="justify">&nbsp;</p>
  <b><font FACE="Verdana">
  <p align="justify"><u><font color="#0000FF">5. Narcisse Bleu, Village des Mages Noirs, Désert de Quieras</font></u></p>
  <blockquote>
    <blockquote> </font>
      <p align="justify"><font face="Verdana" color="#FFFFFF"> À récupérer :</font></b><font face="Verdana" color="#FFFFFF"><br />
        - 1 Obi noir, à l'étage dans la boutique du Village des Mages Noirs </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF"><br />
    Vous disposez maintenant d'un bateau, qui vous permet de parcourir les mers du globe comme vous le désirez. Une fois votre équipe constituée, vous avez deux choix : faites une petite &quot;pause&quot; et retournez à Alexandrie ou autour pour entraîner un peu vos personnages, ou allez directement au Village des Mages Noirs.
    Une petite plage se trouve à l'Est.<br />
    Le Village semble vide... Allez au cimetière pour voir un des Mages avec Bibi, qui vous explique ce qu'il s'est passé. Vous irez ensuite de l'autre côté du village, voir le Chocobo nouveau né. une fois que vous avez fini de visiter le village, retournez à votre bateau pour atteindre votre nouvelle destination : le désert
    de Quieras.<br />
    Ce désert se situe à l'Est du même continent. Vous verrez une immense étendue désertique. En allant vers le Nord-Est, vous trouverez des tourbillons de sable. Un seul vous permet d'accéder au Palais de Kuja : il s'agit de celui le plus au Nord-Est. Si vous vous trompez, vous aurez droit à un combat contre un Fourmilion... </font></p>
  <p align="justify">&nbsp;</p>
  <b><font FACE="Verdana">
  <p align="justify"><font color="#0000FF"><u>6. Le Palais du Désert (1)</u></font></font></b><font face="Verdana"><u><br />
    </u></font><font face="Verdana" color="#FFFFFF"> <br />
      Vous vous retrouvez maintenant enfermé avec le Roi Cid. Kuja vous parle et vous oblige à venir le voir... Sortez alors de votre cellule et allez où se trouvent les deux Mages Noirs.<br />
      Après être arrivé dans la nouvelle pièce, allez vers la droite. Kuja est là. Il vous donne une mission à accomplir : vous devrez aller à Euyevair pour trouver un <b>Roc de Goulg</b>. Après cela, choisissez votre équipe. Faites attention toutefois, prenez vos personnages les plus puissants à l'attaque, car la magie ne
      peut être utilisée là-bas ! Pour l'équipe secondaire, répartissez bien les personnages, pour garder un niveau équitable en combat.<br />
      Après cette discussion, vous êtes envoyé sur le quai, où un vaisseau vous attend : il s'agit d'Hildegarde 1. Inutile de penser que vous êtes libre, car le vaisseau ira directement se poser sur le Nord du Continent Oublié. </font></p>
  <b><font FACE="Verdana">
  <p align="justify">&nbsp;</p>
  <p align="justify"><u><font color="#0000FF">7. Le Continent Oublié, Euyevair</font></u></p>
  <blockquote>
    <blockquote> </font>
      <p align="justify"><font face="Verdana" color="#FFFFFF"> À récupérer :</font></b><font face="Verdana" color="#FFFFFF"><br />
        - 1 Remède, derrière l'escalier sur l'écran avec la spirale jaune<br />
        - 1 Ninja Sun, en haut de l'escalier sur l'écran avec la spirale jaune<br />
        - 1 Elixir, à l'étage de la pièce à gauche de l'écran avec la spirale jaune<br />
        - 1 Diamantine, tout en bas de la pièce à gauche de l'écran avec la spirale jaune<br />
        - 1 Carapace, derrière l'hologramme du globe<br />
        - 1 Bretelle, en bas de la salle avec les 4 projecteurs lumineux<br />
        - 1 Bottes 7L, en haut de la salle avec les 4 projecteurs lumineux<br />
        - 1 Robe Gaïa, à droite du Mog à l'intérieur d'Euyevair<br />
        - 1 Roc de Goulg, après le combat contre Arkh </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">Vous ne pourrez pas remonter à bord du vaisseau, mais Pile et Face vous y offrent quelques objets à acheter. Allez maintenant vers le Sud. La position d'Euyevair est indiquée sur la carte, mais ça ne sera pas aussi facile que cela. En effet, le chemin est assez labyrinthique. Mais en vous repérant sur la
    carte, vous ne devrez pas avoir trop de problèmes.<br />
    Un Mog se trouve à l'entrée. Pensez à lui acheter beaucoup d'objets de soin, car la magie ne peut pas être utilisée ici. Une fois que vous êtes préparé et que vous avez sauvegardé, entrez dans la ville. Ville plutôt peu habitée, comme vous allez vite vous en rendre compte. Fouillez un peu les lieux pour trouver divers
    objets. Allez d'abord vers la droite pour trouver un Mog accompagné de Steelskin. Ce dernier vous propose à nouveaux un lot de 3 objets : cette fois, une <b>Maxi Potion</b>, une <b>Emeraude</b> et un <b>Elixir</b>.<br />
    Revenez à la pièce précédente, montez les escaliers et allez à gauche. Sur l'autre écran, activez le levier bleu, qui devient rouge. Retournez à droite, descendez l'escalier et allez à gauche. Dans cette pièce, un hologramme apparaît. Un coffre se trouve derrière. Examinez l'hologramme puis prenez l'escalier en bas à
    gauche. La pièce suivante contient 4 projecteurs, que vous devrez &quot;activer&quot; dans un ordre précis : celle en haut à gauche, celle en haut à droite, celle en bas à droite et enfin celle en bas à gauche. Allez maintenant à l'escalier en haut à gauche. <br />
    Au milieu du pont se trouve un orbe. Examinez-le pour voir quelques projections. Continuez ensuite vers la gauche pour revenir à la salle avec l'hologramme. Prenez la porte bleu qui se trouve tout à gauche.<br />
    Cette immense paroi est constituée de &quot;masques&quot; qui vont vour raconter leur histoire. Une fois cette séquence terminée, retournez là où était Steelskin pour voir une autre séquence. Sauvegardez puis aller à droite. Descendez à l'aide de la petite plate-forme, avancez, et... </font></p>
  <p align="justify">&nbsp;</p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><u><i><font face="Verdana" color="#FF0000">Boss N°18 : Arkh: </font></i></u></p>
      <p align="justify"></b><font face="Verdana" color="#FFFFFF"><br />
        <b>HP :</b> 20002 ; <b>MP :</b> 1374 ; <b>Niveau :</b> 38<br />
        <b>Faiblesse :</b> Birdkiller, Vent<br />
        <b>À voler :</b> Elixir, Bretelle, Lance Gourou ; <b>Laissé au combat :</b> Lapita, Ether ; <b>Gils :</b> 5964 ; <b>CP :</b> 11<br />
        <b>Combat :</b> Les boss de FFIX ne sont d'habitude pas très coriaces, mais celui-ci va vous en faire voir de toutes les couleurs. Son attaque la plus redoutable donne l'altération d'état Folie. Vous pouvez l'éviter en vous associant la compétence Détrouble. Comme la magie ne peut pas être utilisée, focalisez-vous sur
        l'attaque armée. Des compétences telles que Birdkiller ou Contrattak sauront prouver leur efficacité. Gardez un personnage en retrait pour vous soigner. Si vous n'êtes pas pris par l'altération d'état Folie, la victoire devrait se faire sans trop de mal... </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">Une fois le combat terminé, vous vous emparez du <b>Roc de Goulg</b>. Vous basculez maintenant sur l'autre équipe, toujours entre les mains de Kuja... </font></p>
  <b><font FACE="Verdana">
  <p align="justify">&nbsp;</p>
  <p align="justify"><u><font color="#0000FF">8. Le Palais du Désert (2)</font></u></p>
  <blockquote>
    <blockquote> </font>
      <p align="justify"><font face="Verdana" color="#FFFFFF"> À récupérer :</font></b><font face="Verdana" color="#FFFFFF"><br />
        - 1 Alliance, sur la perle illuminée<br />
        - 1 Féelarme, dans un coffre en allumant les bougies en haut de l'escalier de lumière<br />
        - 1 Chevillère, sur la perle illuminée dans la salle des bougies<br />
        - 1 Carapace, sur la perle illuminée du couloir courbé<br />
        - 1 N-Kai, sur la perle illuminée de la bibliothèque<br />
        - 1 Capuchon, en allumant les deux bougies après le Mog de la bibliothèque<br />
        - 1 Glacelier, en allumant deux bougies sur une statue </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">Votre autre équipe est donc toujours prisonnière de Kuja. Leur vie est maintenant en danger, votre seul espoir repose sur les épaules de Cid. De plus, le temps vous est compté. Une fois dans le couloir, allez jusqu'à la salle de torture, qui se trouve en bas à droite. Un monstre se trouve dans une cage
    et effraie Cid, vous devrez ne pas bouger d'un poil... Quand il a le dos tourné, appuyez rapidement sur la touche O pour avancer. Arrêtez-vous dès qu'il se retourne, ou vous devrez tout recommencer. <br />
    Une fois au sablier, vous devrez placer différents poids pour l'arrêter. Si vous êtes fainéant, voici la combinaison : <b>B, C, D</b>. Vous obtiendrez la <b>Clef du Sablier</b>, qui vous permettra d'ouvrir la porte du cachot. Les personnages qui ne sont pas dans l'autre équipe sont donc présents. Sortez et allez dans le
    Palais en lui-même... Vous arrivez dans un couloir avec deux statues de chaque côté : examinez la perle illuminée pour trouver un objet. Il serait d'ailleurs bon pour vous de toucher toutes ces perles, car le Palais en contient d'autres. <br />
    Le gros du Palais arrive. La salle qui suit le couloir avec les statues contient un pont de lumière à activer : pour cela, tournez les statues (en vous déplaçant) de sorte qu'elles regardent en bas à gauche (pour celle de gauche) et en bas à droite (pour celle de droite). Un petit cadeau vous attend au bout de l'escalier
    lumineux. Continuez ensuite à gauche pour accéder à une salle pleine de flambeaux à allumer dans un ordre précis. <br />
    Allumez d'abord les trois qui se trouvent à gauche de l'écran, pour ouvrir une porte. Passez-la pour aller de l'autre côté de la salle, où vous allumerez le flambeau dans le coin en bas à gauche. Revenez au côté gauche et allumez les deux flambeaux du milieu. Ne touchez pas encore à celui dans le petit balcon rond.
    Occupez-vous alors des flambeaux de droite qui n'étaient pas encore allumés, et allez allumer le dernier, sur le balcon. Examinez alors la statue au centre, elle contient une perle et un objet... <br />
    Prenez la porte de droite pour arriver dans un couloir. Allumez la bougie se trouvant devant la statue, vous verrez alors une perle sur laquelle vous n'avez plus qu'à vous jeter. Allez au fond à gauche du couloir et grimpez l'escalier. Un flambeau, à droite, est à allumer avant de continuer vers la bibliothèque. <br />
    Allumez le chandelier en bas à gauche, montez les escaliers qui sont apparus et allumez les bougies en haut. Une perle apparaît, examinez-la à nouveau. Jetez un oeil aux livres en haut de l'échelle à gauche. Une fois ceci fait, allez embraser les tas de cire de droite. Une porte s'ouvre alors, grimpez l'escalier de droite
    et passez-la. Il vous faut allumer les flambeaux de la pièce derrière avant de revenir à la bibliothèque pour allumer les dernières bougies, celle en bas à droite, devant la statue. Vous ouvrirez une autre porte, vers un passage dans lequel vous devrez encore et toujours allumer les flambeaux. Une fois ces tribulations
    terminées, vous pouvez sortir de cette salle, en passant à travers le mur en bas à gauche... Un mog vous attend derrière, profitez-en. <br />
    La pièce qui suit est la dernière. Allumez les deux flambeaux puis regardez de près la perle. Prenez la porte à gauche pour allumer les bougies de la salle derrière, puis examinez la perle qui apparaît. Allez ensuite la bougie sous le tableau, vous aurez également un message qui apparaîtra. Revenez à la grande salle
    précédente et éteignez la bougie à gauche de la statue : un escalier de lumière apparaîtra. <br />
    Empruntez-le et préparez-vous au combat. En haut, en effet, un boss vous attend. Si toutefois vous voyez un &quot;!&quot; en inspectant la bougie tout en haut, vous devrez aller allumer celles que vous avez oublié. Une fois que vous avez tout allumé, le combat peut enfin commencer... </font></p>
  <p align="justify">&nbsp;</p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><u><i><font face="Verdana" color="#FF0000"> Boss N°19 : Obélisk: </font></i></u></p>
      <p align="justify"></b><font face="Verdana" color="#FFFFFF"> <br />
        <b>HP :</b> 12119 ; <b>MP :</b> 9999 ; <b>Niveau :</b> 36<br />
        <b>Faiblesse :</b> Birdkiller, Vent<br />
        <b>À voler :</b> - ; <b>Laissé au combat :</b> Elixir, Ether ; <b>Gils :</b> 4089 ; <b>CP :</b> 11<br />
        <b>Combat :</b> Contrairement à Arkh, ce combat ne devrait vous poser aucun gros problème. Si vous avez examiné toutes les perles, Obélisk va tenter vainement d'augmenter sa puissance, ce qui sera pour vous un avantage de taille. Ce colosse se mettra automatiquement la protection Boomerang, vous forçant à attaquer à
        l'arme (ou à contourner la protection en lançant Boomerang sur un allié et envoyer les attaques magiques sur lui), ou bien des attaques enlevant des MP, car Obélisk meurt s'il a perdu soit tout ses HP soit tout ses MP. Le combat devrait être rapide et simple, alors fiez-vous à vos propres attaques. </font></p>
    </blockquote>
  </blockquote>
  <p><font face="Verdana" color="#FFFFFF"> Rééxaminez les lieux du combat avant d'aller sur la petite plate-forme circulaire, qui vous amènera directement dans l'antre de Kuja. <br />
    C'est alors qu'arrivent Djidane et son équipe. Allez directement sur la petite plate-forme de téléportation pour revenir voir Kuja, qui demande à voir Djidane. Toute l'équipe arrive ensuite pour empécher Kuja de prendre le Roc de Goulg, mais la capture d'Eiko laisse la voie libre à Kuja qui en profite... Faites votre
    équipe puis jetez un oeil à la pièce pour trouver la <b>Carte Nemingwhay</b> au premier plan. Elle permet de changer les noms de vos personnages. Retournez de là où vous êtes arrivé et passez là où était le Mage Noir. Vous sortirez ainsi du Palais. Actionnez le levier, descendez et continuez pour partir et retrouver le
    Narcisse Bleu. Votre destination actuelle est libre, mais vous êtes tenu d'aller à Gaza Est, une ville enneigée située sur le continent au Nord-Ouest de la carte. </font></p>
  <b><font FACE="Verdana">
  <p align="justify">&nbsp;</p>
  <p align="justify"><u><font color="#0000FF">9. Gaza Est, le Pic de Goulg</font></u></p>
  <blockquote>
    <blockquote> </font>
      <p align="justify"><font face="Verdana" color="#FFFFFF"> À récupérer :</font></b><font face="Verdana" color="#FFFFFF"><br />
        - 9393 Gils, à gauche à l'entrée du Pic de Goulg<br />
        - 1 Ether, dans des déchets en haut d'une échelle<br />
        - 1 Bicorne, sur une plate-forme<br />
        - 1 Broche d'or, au bout d'un chemin, sur une plate-forme<br />
        - 1 Angel Moon, en bas à droite de la corde<br />
        - 1 Robe Gaïa, vers le haut, dans l'écran des escaliers<br />
        - 1 Elixir, dans l'une des petites pièces<br />
        - 1 Ruban, reçu par Eiko </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">Gaza Est est coincée au pied de deux immenses montagnes. Entrez-y et parler avec l'homme qui se présente, pour apprendre que Kuja vient de passer. Avant de vous diriger au Pic de Goulg, choisissez votre équipe puis visitez un peu la ville. Quelques boutiques sont présentes, profitez-en.<br />
    Passez derrière l'Autel pour rejoindre le chemin vous menant au Pic. Une fois que vous êtes entrés, visitez les lieux. Différents objets se trouvent au bout des nombreux chemins au coeur de cette mine, le chemin principal à suivre étant pourtant le suivant. Allez vers la droite, passez dans la petite pièce et descendez
    lorsque vous voyez le &quot;!&quot;. Une fois en bas, fouinez à droite pour aller trouver un objet et surtout une information sur l'utilisation du puits. Revenez à la corde et continuez à descendre.<br />
    Ramassez l'objet près du Mog puis continuez vers la droite pour prendre les escaliers et aller dénicher un autre objet. Revenez vers le puits pour y affronter deux dragons. Ils sont assez durs à battre, alors prenez garde. En utilisant une Tente sur eux, vous parviendrez toutefois à leur donner différentes altérations
    d'état. Allez à gauche du puits et prenez l'objet dans le coffre. Vous verrez également une nouvelle indication sur l'utilisation du puits. Un Mog se trouve non loin, allez lui rendre visite. Dans une autre petite cabane, vous avez encore un objet à prendre et un combat contre un dragon à faire. <br />
    Revenez au puits et baissez trois fois le levier situé à gauche pour l'activer. Entrez-y pour avoir un autre combat contre des dragons. Ensuite, continuez tout droit pour assister à une scène avec Kuja, Pile et Face...<br />
    Après la séquence, durant laquelle Pile et Face veulent prendre les Chimères d'Eiko, vous recevrez un Ruban permettant d'apprendre la Chimère Marthym. Ensuite, les deux bouffons fusionnent pour vous proposer un petit combat... </font></p>
  <p align="justify">&nbsp;</p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><i><u><font face="Verdana" color="#FF0000">Boss N°20 : Siamois: </font></u></i></p>
      <p align="justify"></b><font face="Verdana" color="#FFFFFF"><br />
        <b>HP :</b> 24348 ; <b>MP :</b> 1570 ; <b>Niveau :</b> 42<br />
        <b>Faiblesse :</b> Devilkiller, Feu<br />
        <b>À voler :</b> Vaccin, Broche d'or, Plastronix ; <b>Laissé au combat :</b> Vaccin ; <b>Gils :</b> 6428 ; <b>CP :</b> 11<br />
        <b>Combat :</b> Si vous aviez Bibi dans votre groupe, il ne fera pas partie de celui-ci pour ce combat, qui n'est pas spécialement facile. Utilisez des attaques de feu pour tirer un maximum de HP à ce boss, mais pensez à vous soigner du poison qu'il inflige via ses attaques. Une bonne maîtrise des HP et des attaques lourdes
        suffira à faire de vous le vainqueur de cette bataille. </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">Vous retrouvez ensuite la femme de Cid, Hilda, avec qui vous aurez une petite discussion, avant de partir vite du Pic. </font></p>
  <b><font FACE="Verdana">
  <p align="justify">&nbsp;</p>
  <p align="justify"><u><font color="#0000FF">10. Lindblum (2)</font></u></p>
  <blockquote>
    <blockquote> </font>
      <p align="justify"><font face="Verdana" color="#FFFFFF"> À récupérer :</font></b><font face="Verdana" color="#FFFFFF"><br />
        - 1 Grenat, reçu par Dagga </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">De retour au Palais du Roi Cid, sortez de la pièce et montez à l'étage supérieur pour retrouver votre groupe ainsi que les époux royaux.<br />
    Hilda explique la situation et des informations inattendues viennent vite. Après un ATE, Hilda reprend. Vous comprenez bien vite que vous devez aller dans un autre monde... Un autre ATE s'ensuit. Par la suite, vous vous rendez à Alexandrie où vous rencontrez Beate puis Dagga, qui a enfin retrouvé la parole...<br />
    Vous vous retrouvez alors tous dans l'Hildegarde 3, fraîchement achevé par Cid. Vous êtes maintenant libre d'aller où vous voulez avant de continuer le scénario. Et il y a tant de choses à faire : retourner glaner quelques coffres nouvellement accessibles, faire un peu de quête des Chocobos, découvrir Daguéréo, etc.
    Une fois que vous êtes prêt, allez au Château d'Ypsen, qui se trouve au nord-est du Continent Oublié... </font></p>
  <p align="justify"><font face="Verdana" color="#FFFFFF"><br />
  </font></p>
  <p align="justify"><b><font FACE="Verdana"><u><font color="#0000FF">11. Château d'Ypsen</font></u></p>
  <blockquote>
    <blockquote> </font>
      <p align="justify"><font face="Verdana" color="#FFFFFF"> À récupérer :</font></b><font face="Verdana" color="#FFFFFF"><br />
        - Le Verseau, <b>Trésor</b>, dans la première salle<br />
        - 1 Dague, dans la première salle<br />
        - 1 Griffe, à gauche du Mog<br />
        - 1 Javeline, à gauche au sommet de la grande terrasse<br />
        - 1 Flamberge, à droite au sommet de la grande terrasse<br />
        - 1 Bâton, dans la salle au grand trou<br />
        - Miroir monde, <b>Trésor</b>, après avoir battu Dahaka<br />
        - Miroir d'eau, <b>Trésor</b>, après avoir battu Dahaka<br />
        - Miroir feu, <b>Trésor</b>, après avoir battu Dahaka<br />
        - Miroir de vent, <b>Trésor</b>, après avoir battu Dahaka<br />
        - 1 Barrette, en se reposant 2 minutes dans la salle avec la statue au mur<br />
        - 1 Arôme, dans une trappe sur la cour du château<br />
        - 1 Aéro-massue, dans le nouveau passage à l'entrée<br />
        - 1 Golemflûte, après l'ascenseur dans le nouveau passage à l'entrée<br />
        - 1 Musc, dans la salle avec les vases<br />
        - 1 Magekane, dans un coffre après avoir sauté sur le lustre<br />
        - 1 Fourchette, dans un coffre après avoir sauté sur le lustre </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">Le Château d'Ypsen n'est pas un niveau comme les autres. En effet, vous aurez vite remarqué qu'il est renversé. De ce fait, vos armes sont aussi inverséés : les armes médiocres deviennent très fortes et les armes puissantes deviennent ridicules. Ainsi, il vaut mieux pour vous tout inverser, afin d'être
    à la mesure des ennemis. Alors que vous entrez, Tarask vous quitte en vous proposant un défi.<br />
    Une fois dans le château, fouillez entre les colonnes de la première salle pour trouver deux cadeaux. Passez ensuite la porte pour arriver sur la cour, où un Mog a pris place. Si vous n'avez plus vos armes faibles, il en vend, alors profitez-en ! Une fois que vous avez fini avec le Mog, prenez le mât au milieu de la cour. En
    bas, prenez l'escalier à gauche et continuez tout droit. Vous arriverez jusqu'à une échelle au sommet de laquelle se cache deux coffres. Redescendez et allez de l'autre côté pour prendre l'autre échelle. Descendez à la première à droite pour trouver un coffre. Prenez l'échelle de droite et passez par la porte.<br />
    Tarask se trouve là. Une fois qu'il vous a quitté, prenez les quatre Miroirs du mur. Malheureusement, ceci ne se fera pas sans qu'un charmant boss ne vienne entraver votre route... </font></p>
  <p align="justify">&nbsp;</p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><i><u><font face="Verdana" color="#FF0000">Boss N°21 : Dahaka: </font></u></i></p>
      <p align="justify"></b><font face="Verdana" color="#FFFFFF"><br />
        <b>HP :</b> 29186 ; <b>MP :</b> : 1776 ; <b>Niveau :</b> 46<br />
        <b>Faiblesse :</b> Birdkiller, Feu, Vent<br />
        <b>À voler :</b> Elixir, Mithgriffe, Orichalque ; <b>Laissé au combat :</b> Carte Ramuh ; <b>Gils :</b> 8092 ; <b>CP :</b> 11<br />
        <b>Combat :</b> Dahaka est un adversaire rusé. Inutile d'utiliser de la glace ni de la terre contre lui, car les dégâts seront insignifiants. Préférez des attaques de Feu et de Vent. Les attaques physiques sont également utiles, sauf lorsque le boss devient plus petit. A ce moment, la magie est obligatoire. Comme
        d'habitude, vous devrez vous soigner dès que vos HP commencent à tomber bas. Ceci dit, Dahaka n'est pas plus compliqué que cela à battre, et il devrait vite retourner d'où il vient. </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">Une fois l'affrontement terminé, vous avez deux possibilités. Pour les lâches : vous pouvez quitter directement le château sans demander votre rester. Pour les courageux : il reste des secrets cachés à découvrir... Je suppose que vous êtes tous courageux, alors voici quels sont les secrets du Château
    d'Ypsen... <br />
    En sortant de la salle où vous avez combattu Dahaka, vous remarquerez un étrange symbole par terre. Choisissez &quot;Regarder de plus près&quot; pour voir d'autres options s'afficher. Sélectionnez-en une plusieurs fois de suite jusqu'à ce que vous puissez &quot;Foncer dessus&quot;. Ensuite, vous avez le choix entre
    &quot;Foncer dedans&quot; et &quot;Se reposer 2 minutes&quot;. Choisissez cette dernière option pour obtenir un objet.<br />
    De retour dans la cour du Château, vous verrez une trappe. Une autre, fermée, est cachée plus haut. Utilisez là pour tomber plus bas et trouver un objet. Une fois que cela est fait, vous pouvez passer au second secret du lieu. <br />
    Revenez dans le hall d'entrée pour découvrir un nouveau passage au centre. Empruntez le et prenez l'objet à gauche. Prenez l'ascenseur pour arriver à une nouvelle pièce. Pillez le coffre de gauche et prenez un vase. Une énigme commencera alors, avec un indice. Pour vous simplifier la chose, voici ce qu'il faut faire :
    déplacez les vases dans le sens inverse des aiguilles d'une montre, jusqu'à ce qu'un des vases ne se mette à briller. Un objet vous attend à l'intérieur.<br />
    Une fois que vous avez fini vos détours dans le Château, sortez-en. Votre équipe se réunit en bas, mais Tarask manque à l'appel. Une fois que vous êtes retournés dans le Château, allez dans la cour et descendez le mât pour trouver votre ami, désespéré. Une fois que vous l'avez convaincu de vous suivre, ressortez. </font></p>
  <p align="justify"><font face="Verdana"><br />
  </font></p>
  <p align="justify"><font color="#0000FF"><u><b><font face="Verdana">12. Les Sanctuaires</font></b></u><font face="Verdana"><u><br />
    </u></font></font><font color="#FFFFFF"> <br />
      Les quatre Miroirs que vous avez récoltés à Ypsen doivent maintenant être renvoyés à leurs Sanctuaires respectifs. Votre groupe va se diviser en 4 équipes de 2 personnages, qui sont déjà choisis. Vous vous retrouverez avec Kweena, pour renvoyer le Miroir monde au Sanctuaire de la Terre. Mais avant cela, vous devrez
      déposez vos compagnons aux autres Sanctuaires. Les choix d'équipe qui vous seront demandés n'ont aucune importance, car vous aboutirez toujours à Djidane et Kweena.<br />
      Commencez par le Sanctuaire de l'Eau, où Dagga et Eiko iront porter le Miroir d'eau. Il se trouve dans l'océan, juste un peu au Sud du Château d'Ypsen.<br />
      Allez ensuite au volcan se trouvant au Nord de Gaza Est, pour y déposer Tarask et Freyja. Il s'agit du Sanctuaire de Feu.<br />
      Allez ensuite au Sud du Continent Oublié (celui où se trouve Euyevair), dans une sorte de faille où vous entendrez le vent souffler. C'est le Sanctuaire du Vent, où Bibi et Steiner iront poser le Miroir de vent.<br />
      Vous voilà maintenant seul avec Kweena. Rendez-vous au Sud du Palais du Désert, dans une vaste plaine où le sol tremble incessemment. Au centre de celle-ci, vous trouverez le Sanctuaire de la Terre. Avant d'entrer, pensez à vérifier votre équipement...</font></p>
  <p align="justify"><font face="Verdana"><br />
    </font><font color="#0000FF"><u><b><font face="Verdana">13. Sanctuaire de la Terre</font></b></u><font face="Verdana"><u><br />
      </u></font></font><font color="#FFFFFF"> <br />
        Avancez et allez ensuite vers la gauche. Les murs vont commencer à se rapprocher, mais ne bougez pas jusqu'à ce qu'un &quot;!&quot; apparaisse. Appuyez alors immédiatement sur X pour échapper au piège. Mais ne soufflez pas trop vite,
        car deux autres épreuves du même genre vous attendent plus loin. Après un petit aperçu de Dagga et Eiko, continuez à avancer et posez votre Miroir Monde sur le socle qui l'attend... Un boss apparaît évidemment, pour vous barrer le chemin.</font></p>
  <p align="center">&nbsp;</p>
  <p align="justify">&nbsp;</p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><i><u><font face="Verdana" color="#FF0000"> Boss N°22 : Barbarian: </font></u></i></p>
      <p align="justify"></b><font face="Verdana" color="#FFFFFF"> <br />
        <b>HP :</b> 20756 ; <b>MP :</b> 2234 ; <b>Niveau :</b> 54<br />
        <b>Faiblesse :</b> Devilkiller, Vent, Sacré<br />
        <b>À voler :</b> Vengeresse, Catsuit ; <b>Laissé au combat :</b> Renais, Carte Atomos ; <b>Gils :</b> 4512 ; <b>CP :</b> 11<br />
        <b>Combat :</b> Barbarian est un boss plutôt redoutable, mais ses puissantes attaques de terre peuvent être réduites ou évitées grâce à des Desert Boots ou des Bottes 7L, ainsi que la magie Lévitation. Le combat sera vite mené si vous vous soignez à temps. Essayez, lorsque le boss a perdu plus du quart de ses HP,
        d'utiliser la Magie Bleue &quot;Cannibale&quot; de Kweena. Vous pourrez non seulement le tuer directement, mais aussi apprendre le sort Earthshake ! </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF"> Une fois que ce combat est terminé, vous rejoignez tour à tour vos amis aux différents Sanctuaires, puis quelques discussions ont lieu dans l'Hildegarde 3. Une fois que tout est bon, et que vous êtes prêts, vous pouvez aller à l'Île de Lumière... Toutefois, si vous désirez flâner un peu sur Héra,
    profitez-en, car certains lieux ne vous seront plus accessibles par la suite. </font></p>
  <b><font FACE="Verdana">
  <p align="justify">&nbsp;</p>
  <p align="justify"><u><font color="#0000FF">14. Terra</font></u></p>
  <blockquote>
    <blockquote> </font>
      <p align="justify"><font face="Verdana" color="#FFFFFF"> À récupérer :</font></b><font face="Verdana" color="#FFFFFF"><br />
        - 1 Hypnoronne, dans un coffre en arrivant à Terra<br />
        - 1 Dragonet, dans un coffre en arrivant à Terra<br />
        - 1 Elixir, dans un coffre en poursuivant la jeune fille<br />
        - 1 Remède, dans un coffre en bas du filet<br />
        - 1 Mithmassue, dans un coffre en poursuivant la jeune fille<br />
        - 1 Plastronix, dans un coffre en poursuivant la jeune fille<br />
        - 1 Minerva, dans un chemin caché à gauche dans les escaliers </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">Pour rejoindre Terra, il vous suffit de choisir la destination &quot;Île de Lumière&quot; sur la carte du monde. Cette Île se trouve exactement au Sud du Continent Fermé. Vous serez alors aspirés jusqu'à un lieu aussi impressionnant que mystérieux : Terra.<br />
    Dès votre arrivée, le mystère se creuse, puisque vous rencontrez Garland. Une fois la discussion finie, avancez. Une jeune fille semble vous attendre, plus loin. Mais celle-ci fuit dès que vous l'approchez. Récupérez les objets à gauche puis suivez la fille. Dans l'écran suivant, vous trouverez un coffre à gauche, avant
    de continuer vers le haut, et allez vers le bas avec le filet. Poursuivez alors vers la gauche, sans oublier de ramasser l'objet qui se trouve à l'angle du chemin, puis courrez une dernière fois vers la fille. <br />
    Cette fois-ci, elle vous adressera la parole. Continuez alors à avancer... A un moment, vous arriver sur une petite plateforme entre deux escaliers. Une ouverture se trouve à gauche. Rentrez dedans et fouillez-là pour trouver un objet. Ensuite, poursuivez pour arriver à Branval... </font></p>
  <b><font FACE="Verdana">
  <p align="justify">&nbsp;</p>
  <p align="justify"><u><font color="#0000FF">15. Branval</font></u></p>
  <blockquote>
    <blockquote> </font>
      <p align="justify"><font face="Verdana" color="#FFFFFF"> À récupérer :</font></b><font face="Verdana" color="#FFFFFF"><br />
        - 1 Angel Moon, dans la pièce avec le Mog<br />
        - 2 Elixir, au fond de la grande salle de réunion et dans la pièce où était Dagga<br />
        - 1 Angelarme, en bas de la petite retenue d'eau<br />
        - 1 3 yeux, en sautant sur le petit roc de la retenue d'eau </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">Une nouvelle étonnante vous attend dans cette petite société inattendue, bercée par une musique envoûtante. Mais votre élan est bien vite coupé par l'apparition de l'Invincible, dont le terrible souvenir fait s'évanouir Dagga. Par la suite, vous pouvez enfin visiter Branval. Allez vers la droite du
    village pour trouver une pièce avec un Mog et un coffre.<br />
    Après avoir consulté à votre guise le Mog, sortez puis rentrez à nouveau. Steelskin, le Mog voyageur, sera là. Profitez-en, si vous avez 2222 Gils, pour lui acheter ses traditionnels objets. Ici, ce sont un Diamant, un Ether et un Elixir. Allez dans le bâtiment tout en haut pour visiter un peu et dénicher un coffre, en
    bas de l'escalier. En allant du côté gauche, fouinez le bord de la petite retenue d'eau pour recevoir des gâteries. Parlez ensuite au bonhomme se tenant au bord. C'est alors que Eiko vous invite à venir au laboratoire de Branval.<br />
    Dagga se réveille alors. Fouinez sa chambre puis allez dans le laboratoire, dans le bâtiment du haut. Parlez à la jeune fille que vous avez poursuivi plus tôt. Suivez-là pour continuer à discuter. Par la suite, vous reprenez les commandes d'Eiko. Des ATE s'ensuivent. Vous devez maintenant retrouvez les membres du groupe.
    Allez à droite de la retenue d'eau pour Bibi, dans le bâtiment du haut pour trouver Kweena et Tarask près du pont.<br />
    Sortez et montez vers le passage qui se situe plus haut, pour voir une jeune fille. Parlez-lui. </font></p>
  <p align="justify"><font face="Verdana" color="#FFFFFF"><br />
  </font><b><font FACE="Verdana"><u><font color="#0000FF">16. Pandémonium</font></u></p>
  <blockquote>
    <blockquote> </font>
      <p align="justify"><font face="Verdana" color="#FFFFFF"> À récupérer :</font></b><font face="Verdana" color="#FFFFFF"><br />
        - 1 Calote, à droite derrière le premier Mog<br />
        - 20007 Gils, dans un coffre sur une plateforme<br />
        - 1 Elixir, dans un coffre en prenant le cercle de téléportation de droite<br />
        - 1 Angearmure, dans un coffre en prenant le cercle de téléportation de gauche<br />
        - 1 Combat boots, dans le labyrinthe de cercles de téléportation </font></p>
    </blockquote>
  </blockquote>
  <p align="center">&nbsp; </p>
  <p align="justify"><font face="Verdana" color="#FFFFFF"><br />
    Vous vous trouvez maintenant dans le magnifique château Pandémonium, avec Djidane. Avancez tout droit pour retrouver Garland qui commence à discuter. Suivez-le sans cesse pour continuer la discussion, qui vous apprendra bien des choses... Mais Djidane s'évanouit. <br />
    Lorsqu'il se réveille, une magnifique séquence s'enclenche... Il erre alors dans les recoins de Pandémonium... Mais un monstre ne tarde pas à venir vous déranger. Attaquez le fortement, mais ne vous soignez qu'en cas d'extrème urgence. Dès que le monstre a perdu un certain nombre de HP, Freyja viendra vous aider. Tarask
    suivra, jusqu'à ce que vous n'acheviez le montre. Mais Djidane ne semble pas vouloir écouter ses amis, et il continue à nouveau seul. Steiner et Kweena sont en train de combattre un monstre, mais Djidane leur vient finalement en aide. Par la suite, il continue seul mais tombe sur un immense Blindragon. Une fois que vos HP
    tombent très bas, Dagga arrive, et avec elle sa magie de soin si utile. A partir de là, attaquez le monstre, tout en profitant de la magie de Dagga.<br />
    Ô magie... Djidane est maintenant de nouveau avec ses amis, et son moral est remonté. Maintenant, reprenez le même chemin en sens inverse jusqu'à retrouver le reste de votre équipe. Profitez du Mog qui a pris place dans cette pièce, puis retournez vers la gauche jusqu'à une salle de commandes. Activez le bouton en haut à
    droite et dépéchez-vous de rejoindre le pont de lumière qui s'est activé. Or, la salle est parsemée de rayons lumineux : en toucher un remet à 0 le compte à rebours et vous expédie en plein combat. <br />
    La Salle de Commande des Pierres se trouve après. Une machine vous permet de choisir un chiffre entre 0 et 5. En fait, cela modifie la direction de l'ascenceur de la salle suivante. Tout d'abord, indiquez 3. Allez dans l'ascenceur à partir de la 3ème plateforme et allez vers le haut jusqu'à un autre ascenceur. En haut, un
    coffre plein de Gils vous attend. Retournez en bas et entrez différentes possibilités de chiffres. Vous verrez bien vite qu'il est difficile de faire cela en un seul groupe. Vous vous séparez donc, avec une partie dans la salle de Commandes et l'autre dans celle avec les ascenceurs. Vous pourrez ainsi coordonner vos actions
    de telle sorte que vous pourrez atteindre le sommet. Le chiffre 1 vous donnera finalement les clés de la libertés. Toutefois, avant cela, vous trouvez différents cercles de téléportation, vous menant à différents objets. <br />
    Une fois tout en haut, vous vous retrouvez dans une sorte de dédale. Un seul objet est à ramasser : il vous suffit d'aller vers le bas au premier croisement. Ensuite, continuez à droite et empruntez les différents cercles de téléportation pour arriver jusqu'à un Mog... Sauvegardez et soignez-vous. En continuant, vous
    allez enchaîner trois combats, alors soyez sûrs d'être prêts. Une fois que c'est bon... Allez-y. </font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify">&nbsp; </p>
      <p align="justify"><i><u><font face="Verdana" color="#FF0000">Boss N°23 : Silverdragon: </font></u></i></p>
      <p align="justify"> </b><font face="Verdana" color="#FFFFFF"><br />
        <b>HP :</b> 24055 ; <b>MP :</b> 9999 ; <b>Niveau :</b> 58<br />
        <b>Faiblesse :</b> Dragonkiller, Birdkiller, Glace<br />
        <b>À voler :</b> Elixir, Dragarmure, Césariffe ; <b>Laissé au combat :</b> Angel Moon, Carte Fenril ; <b>Gils :</b> 5240 ; <b>CP :</b> 13<br />
        <b>Combat :</b> Les hostilitées commencent avec un Silverdragon, puissant Dragon redoutable. La première chose à faire, c'est vous soigner dès qu'il faut, grâce à Dagga ou Eiko. Ensuite, n'hésitez pas à attaquer avec la magie Glace de Bibi, sans oublier de Stocker un peu au préalable. En attaquant de front avec Djidane,
        vous réussirez également à lui enlever des HP. Répétez ces opérations tout en prenant garde aux attaques du Dragon, qui sont principalement de l'élément Vent. Silverdragon est assez facile à tuer, mais il ne faut pas pour autant baisser les bras tout de suite... </font></p>
    </blockquote>
  </blockquote>
  <p align="center">&nbsp; </p>
  <p align="justify">&nbsp;</p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><i><u><font face="Verdana" color="#FF0000">Boss N°24 : Garland: </font></u></i></p>
      <p align="justify"> </b><font face="Verdana" color="#FFFFFF"><br />
        <b>HP :</b> 40728 ; <b>MP :</b> 9999 ; <b>Niveau :</b> 62<br />
        <b>Faiblesse :</b> Tueur<br />
        <b>À voler :</b> Combat boots, Ninjasuit, Robe noire ; <b>Laissé au combat :</b> Elixir, Renais ; <b>Gils :</b> 0 ; <b>CP :</b> 0<br />
        <b>Combat :</b> Voici maintenant l'énigmatique Garland, qui est bien décidé à vous empécher de continuer. Mais il a une faiblesse de taille, qui va vous permettre d'attaquer efficacement. En effet, il n'attaque qu'un seul personnage à la fois, vous permettant de vous soigner à temps alors que le reste de l'équipe bourre
        dans le lard. Néanmoins, il utilise la magie Stop, qui paralyse un personnage. Avec un Remède, l'altération est vite oubliée. Vous n'avez qu'à attaquer au maximum avec vos personnages, pour mener à bien ce combat assez long, car Garland a un assez grand nombre de HP. Ne baissez toujours pas les bras !... </font></p>
    </blockquote>
  </blockquote>
  <p align="center">&nbsp; </p>
  <p align="justify">&nbsp;</p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><i><u><font face="Verdana" color="#FF0000">Boss N°25 : Kuja: </font></u></i></p>
      <p align="justify"> </b><font face="Verdana" color="#FFFFFF"><br />
        <b>HP :</b> 42382 ; <b>MP :</b> 9999 ; <b>Niveau :</b> 64<br />
        <b>Faiblesse :</b> Tueur<br />
        <b>À voler :</b> Ether, Angearmure, Robe de lumière ; <b>Laissé au combat :</b> - ; <b>Gils :</b> 0 ; <b>CP :</b> 0<br />
        <b>Combat :</b> Voilà l'affrontement final de ce CD3... Enfin, Kuja est devant vous pour un combat. Mais pas question de rire, puisque ça va chauffer ! Même si au premier abord on peut penser que ce combat est très difficile, il demeure assez facile. Comme Garland, il n'attaque qu'une seule personne à la fois, mais il
        utilise Quart qui enlève 1/4 des HP. Attaquez donc le plus possible tout en vous soignant, surtout si Kuja lance sa magie Méga Atomnium, qui cause des dégâts dévastateurs. Le combat ne peut pas être gagné, puisqu'il prend fin sur la transe de Kuja, qui invoque Ultima, l'ultime magie... </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">Après une séquence où Garland apprend son destin à Kuja, vous reprenez Djidane en main. Terra est sur le point de disparaître, alors courrez le long du chemin, jusqu'à ce que s'enclenchent les dernières cinématiques de ce 3ème disque... Votre ultime tâche apparaît donc : anéantir
    Kuja... </font></p>
  <p align="justify">&nbsp; </p>
  <p align="center"><i><u><b><font color="#007F00" size="4">CD4</font></b></u></i></p>
  <b><font FACE="Verdana">
  <p align="justify"><font color="#0000FF"><u>1. Village des Mages Noirs</u></font></font></b><font face="Verdana"><u><br />
    </u></font><font face="Verdana" color="#FFFFFF"> <br />
      Ce quatrième et dernier CD débute alors que votre équipe est revenue au village des Mages Noirs. Les génomes ont pris place dans ce lieu retiré. La situation est grave, vous n'avez plus qu'un seul but : anéantir Kuja.<br />
      Dès que vous reprenez le contrôle de l'Invincible, vous aurez deux solutions : aller droit vers la fin ou effectuer les quêtes annexes. Cette deuxième solution est la meilleure, car en plus de vous donner de nouveaux objets dont des armes surpuissantes, elles vous permettront d'augmenter votre niveau en combat. Néanmoins,
      même avec un niveau peu élevé, vous pourrez aller titiller les boss de fin. Tâchez tout de même d'avoir les armes les plus puissantes. <br />
      Quoiqu'il en soit, si vous désirez faire les quêtes, je vous reporter à cette page ! Maintenant, passons à la fin du jeu... </font></p>
  <p>&nbsp;</p>
  <b><font FACE="Verdana">
  <p align="justify"><font color="#0000FF"><u>2. Vers l'Ifa</u></font></font></b><font face="Verdana"><u><br />
    </u></font><font face="Verdana" color="#FFFFFF"> <br />
      Dirigez l'Invincible vers l'arbre Ifa, qui est surmonté d'une boule luminescente. Appuyez alors sur O pour entrer... <br />
      L'accueil sera chaud. Une spectaculaire armée de Silverdragons se précipite vers vous. Une fois que vous avez atteint le coeur, un charmant boss viendra vous rendre visite. </font></p>
  <p align="justify">&nbsp;</p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><i><u><font face="Verdana" color="#FF0000"> Boss N°26 : Shinryû: </font></u></i></p>
      <p align="justify"></b><font face="Verdana" color="#FFFFFF"> <br />
        <b>HP :</b> 54940 ; <b>MP :</b> 9999 ; <b>Niveau :</b> 67<br />
        <b>Faiblesse :</b> Dragonkiller, Birdkiller, Glace, Vent<br />
        <b>À voler :</b> Remède, Dragonet, G-Armure ; <b>Laissé au combat :</b> Ether, Angel Moon, Elixir ; <b>Gils :</b> 9506 ; <b>CP :</b> 13<br />
        <b>Combat :</b> Un combat assez peu difficile si vous avez déjà réussi haut les mains le combat contre le Silverdragon de Kuja. Néanmoins, vous devrez rester prudent. D'abord, veillez à ce qu'une de vos guèrisseuse soit là, car les sorts de soins vous seront très utiles. Si vos personnages sont protégés contre les
        attaques d'eau et de vent, c'est également un bon point. En utilisant le sort Somni, vous pourrez profiter d'un plus grand nombre d'attaques. Si vous jonglez efficacement entre attaques normales, magies et si possible Transes, vous deviendrez le vainqueur de ce combat. </font></p>
      <font FACE="Verdana" SIZE="1">
      <p align="justify">&nbsp;</p>
    </blockquote>
  </blockquote>
  </font><b><font FACE="Verdana">
  <p align="justify"><u><font color="#0000FF">3. Mémoria</font></u></p>
  <blockquote>
    <blockquote> </font>
      <p align="justify"><font face="Verdana" color="#FFFFFF"> À récupérer :</font></b><font face="Verdana" color="#FFFFFF"><br />
        - 1 Caïn, à droite de l'orbe à l'entrée de Mémoria<br />
        - 1 La Tour, sur le pilier d'une petite corniche<br />
        - 1 Angeflûte, dans les piliers des ruines après la vision d'Alexandrie<br />
        - 1 Runigriffe, dans les piliers avant d'entrer dans l'oeil de l'Invicible<br />
        - 1 Makila, dans le coin gauche de la plate-forme avant de monter l'échelle vers Kaozium </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">Vous voici dans l'extraordinaire monde des souvenirs : Mémoria. Avant d'entrer, vous devez choisir une équipe, où Djidane n'est pas obligé de se trouver. A partir de l'entrée, notez que vous pouvez retourner dans l'Invincible à partir d'ici. A gauche des escaliers se trouve un orbe lumineux : il vous
    permet de sauvegarder, d'utiliser une tente et de changer votre équipe. A droite, caché derrière les piliers, vous trouverez un <b>Caïn</b>.<br />
    Avancez jusqu'à la pièce suivante. Si vous allez en bas à gauche de l'écran, un &quot;!&quot; apparaîtra au dessus de votre tête : en appuyant sur la touche Carré, vous aurez droit à une partie de carte avec un fantôme. En
    continuant, vous arriverez dans une pièce avec une corniche qui s'avance : sur l'un des coins se trouve La Tour, une arme de Djidane. Montez maintenant les escaliers à gauche pour tomber sur votre premier boss de Mémoria. </font></p>
  <p align="center">&nbsp;</p>
  <p align="justify">&nbsp;</p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><i><u><font face="Verdana" color="#FF0000">Boss N°27 : Merilith: </font></u></i></p>
      <p align="justify"></b><font face="Verdana" color="#FFFFFF"><br />
        <b>HP :</b> 59497 ; <b>MP :</b> 3381 ; <b>Niveau :</b> 72<br />
        <b>Faiblesse :</b> Devilkiller, Glace<br />
        <b>À voler :</b> Cotte Genji, Epée Ultima, Masamune ; <b>Laissé au combat :</b> Résurex, Renais, Ether, Elixir ; <b>Gils :</b> 8532 ; <b>CP :</b> 10<br />
        <b>Combat :</b> Merilith n'est pas une mince affaire... Pour vous défendre au mieux, la compétence Invincible (si vos HP sont faibles) ainsi que Nichonifroa seront bien utiles. Surtout ne l'attaquez pas avec des sorts de feu, car il les absorbe. Au contraire, essayez de le mitrailler de glace. Si vous disposez de la
        compétence Attaque à MP, utilisez-la, car elle cause d'assez gros dommages. S'il lance Boomerang, contre-attaquez en lançant également boomerang sur l'un de vos personnages puis utilisez des sorts sur lui : ils iront directement sur Merilith sans être renvoyés. Prenez soin d'avoir vos HP au maximum avant d'infliger le coup
        de grâce, car avant de mourir, il lance une attaque dévastatrice allant jusqu'à 3000 HP de dégâts... </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">Une fois Merilith vaincu, vous arrivez dans une pièce où une étrange vision apparaît : il s'agit du château d'Alexandrie, qui se fait détruire... Après quelques discussions entre vos personnages (qui ne sont pas obligatoirement de votre équipe), vous reprenez votre chemin, non sans avoir été fouiller
    autour de la stèle au milieu de la salle, où vous trouverez une <b>Angeflûte</b> pour Eiko, ainsi qu'un point de sauvegarde caché. Surtout, sauvegardez !!! <br />
    La pièce suivante est très agitée, car un orage y règne. A gauche, un second fantôme vous attend pour jouer aux cartes, si toutefois vous le désirez... En allant vers la droite, une nouvelle vision vous attend : il s'agit de Dagga et sa mère, quittant Madahine-salee.<br />
    En continuant à droite, vous arrivez dans une pièce où l'oeil de l'Invincible vous regarde. Avant de monter les escaliers, prenez le temps de fouiller la zone, où une Runigriffe vous attend. Montez ensuite pour rencontrer un boss que les joueurs du premier FF doivent connaître... </font></p>
  <p align="center">&nbsp;</p>
  <p align="justify">&nbsp;</p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><u><i><font face="Verdana" color="#FF0000">Boss N°28 : Tiamat: </font></i></u></p>
      <p align="justify"></b><font face="Verdana" color="#FFFFFF"><br />
        <b>HP :</b> 59494 ; <b>MP :</b> 3381 ; <b>Niveau :</b> 72<br />
        <b>Faiblesse :</b> Dragonkiller, Glace<br />
        <b>À voler :</b> Sanguine, Bottes 7 Lieux, Grand Armet ; <b>Laissé au combat :</b> Ether, Angel Moon, Renais, Elixir ; <b>Gils :</b> 8820 ; <b>CP :</b> 10<br />
        <b>Combat :</b> Tiamat est un montre et vent, donc équipez-vous en conséquence. Les compétences Nichonifroa en défense et Attaque à MP en attaque vous seront grandement utiles. Si un de vos personnages entre en lévitation, ramenez-le immédiatement sur terre, car sinon il sera éjecté du combat par Tiamat ! En attaquant
        beaucoup et efficacement et surtout en vous soignant, vous mettrez vite fin au combat. </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">Maintenant, avancez. Dans l'escalier de la zone en ruines, vous trouverez sur la droite un endroit où sauvegarder. Inutile pour moi de vous conseiller de le faire immédiatement ! Dans la salle suivante, un autre fantôme joueur de carte se cache : il est vers la droite. Partez maintenant vers la gauche pour
    admirer une scène magnifique : la rencontre entre Héra et Terra... <br />
    La salle suivante semble être sous l'eau, mais il n'en est rien. Vous pourriez la passer très rapidement, mais ceux qui aiment les secrets peuvent se glisser à droite avant l'escalier. Au bout du chemin caché, appuyez sur X pour trouver
    Pluton (en choisissant &quot;s'arrêter&quot;), un boss caché... Pour tout savoir sur lui, cliquez ici. Ensuite, prenez les escaliers et allez tout droit pour tomber sur Cariatide, l'avant dernier boss de Mémoria.</font></p>
  <p align="center">&nbsp;</p>
  <p align="justify">&nbsp;</p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><i><u><font face="Verdana" color="#FF0000">Boss N°29 : Cariatide: </font></u></i></p>
      <p align="justify"></b><font face="Verdana" color="#FFFFFF"><br />
        <b>HP :</b> 59496 ; <b>MP :</b> 3380 ; <b>Niveau :</b> 72<br />
        <b>Faiblesse :</b> Devilkiller, Tonnerre<br />
        <b>À voler :</b> Armet Genji, Bâton magik, Robe de Kwe ; <b>Laissé au combat :</b> Résurex, Renais, Ether, Elixir ; <b>Gils :</b> 8628 ; <b>CP :</b> 10<br />
        <b>Combat :</b> Cariatide est un boss spécial car il dispose de 3 parties. Concentrez vos attaques sur le corps de la bête, qui contre-attaquera avec Déker ou Aquaballe, des attaques puissantes. Gardez un oeil très prudent sur vos HP et n'hésitez pas à vous soigner. Pour diminuer la puissance de ses attaques d'eau, pensez
        à vous équiper d'armes contre cet élément. A l'attaque, les compétences Devilkiller et Attaque à MP seront toujours aussi efficaces, sans oublier Nichonifroa pour vous protéger. Avec les attaques de foudre de Bibi, le combat sera encore davantage écourté. </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">Continuez tout droit puis aller à droit des escaliers pour arriver jusqu'à un orbe de sauvegardé caché. Plus haut, un fantôme joueur de cartes est toujours présent pour disputer une petite partie. Allez gaiement vers la gauche pour arriver dans une salle où la naissance de Héra est représentée...
    Grimpez à l'échelle pour arriver à une plate forme. Sur le coin gauche, l'arme ultime de Bibi, <b>Makila</b>, se cache, tandis que de l'autre côté se trouve un dernier joueur de cartes ! Montez toutes les échelles pour trouver le dernier Guardian... </font></p>
  <p align="center">&nbsp;</p>
  <p align="justify">&nbsp;</p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><i><u><font face="Verdana" color="#FF0000">Boss N°30 : Kaozium: </font></u></i></p>
      <p align="justify"></b><font face="Verdana" color="#FFFFFF"><br />
        <b>HP :</b> 58554 ; <b>MP :</b> 9999 ; <b>Niveau :</b> 71<br />
        <b>Faiblesse :</b> Devilkiller, Feu, Vent, Sacré<br />
        <b>À voler :</b> Gant Genji, Sirèneflûte, Robe noire ; <b>Laissé au combat :</b> Résurex, Renais, Ether, Elixir ; <b>Gils :</b> 8436 ; <b>CP :</b> 10<br />
        <b>Combat :</b> Ce combat est aussi corsé que les précédents. Kaozium fait un grand nombre d'attaques de Terre, donc pensez à vous mettre en lévitation pour les éviter. Il attaque avec Hadès Niv. 5 qui tue les personnages aux niveaux multiples de 5... Faites donc attention. Pour lui enlever un maximum d'HP, attaquez avec
        du Feu et toujours les compétences Devilkiller et Attaque à MP ! </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF">Une fois que ce combat est terminé, sauvegardez en vitesse sur le pilier de gauche avant d'avancer... vous arrivez dans le vide spatial... Allez jusqu'à la lumière au centre de l'écran en appuyant sur la touche directionnelle haut. </font></p>
  <p align="justify"><font face="Verdana"><br />
  </font></p>
  <p align="justify"><font color="#0000FF"><u><b><font face="Verdana">4. Le monde de Cristal</font></b></u><font face="Verdana"><u><br />
    </u></font></font><font color="#FFFFFF"> <br />
      Une fois que vous êtes arrivé dans cet immense paysage tourmenté, contentez-vous de suivre le chemin. Au bout, un dernier orbe de vous permet de faire votre ultime sauvegarde du jeu... En plus de cela, vous pouvez également revenir à l'entrée de Mémoria, mais attention : ça ne marche pas dans l'autre sens ! Je vous
      conseille cette échappatoire si vous redoutez les derniers boss, mais si vous en êtes arrivés là, ça devrait aller.<br />
      <br />
      Toutefois, vous aurez l'occasion de revenir à l'orbe après le premier des 3 derniers combats. Une fois que vous êtes prêt, avancez dans le cercle de lumière...</font></p>
  <p align="center">&nbsp;</p>
  <p align="justify">&nbsp;</p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><u><i><font face="Verdana" color="#FF0000">Boss N°31 : Sulfura: </font></i></u></p>
      <p align="justify"></b><font face="Verdana" color="#FFFFFF"><br />
        <b>HP :</b> 55535 ; <b>MP :</b> 9999 ; <b>Niveau :</b> 74<br />
        <b>Faiblesse :</b> Devilkiller, Entomokiller, Birdkiller, Glace, Vent<br />
        <b>À voler :</b> Elixir, Obi noir, Héroïgriffe ; <b>Laissé au combat :</b> Renais, Angel Moon ; <b>Gils :</b> 19016 ; <b>CP :</b> 0<br />
        <b>Combat :</b> Le combat débute par une attaque Météore dévastatrice de Sulfura, à laquelle vous ne survivrez pas si vous n'avez pas un bon niveau... Dès que vos HP commençent à descendre dangeureusement, faites les remonter immédiatement. De l'autre côté, attaquez avec des sorts de Glace ou de Vent et profitez si
        jamais une Transe apparaît. En vous soignant efficacement et en attaquant fortement en même temps, ce combat ne devrait pas trop vous poser de problème. </font></p>
      <font FACE="Verdana" SIZE="1">
      <p align="justify">&nbsp;</p>
    </blockquote>
  </blockquote>
  </font>
  <p align="center">&nbsp;</p>
  <p align="justify">&nbsp;</p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><u><i><font face="Verdana" color="#FF0000">Boss N°32 : Kuja en transe: </font></i></u></p>
      <p align="justify"></b><font face="Verdana" color="#FFFFFF"><br />
        <b>HP :</b> 55535 ; <b>MP :</b> 9999 ; <b>Niveau :</b> 76<br />
        <b>Faiblesse :</b> Tueur, Birdkiller<br />
        <b>À voler :</b> Ether, Robe, Métempsy ; <b>Laissé au combat :</b> - ; <b>Gils :</b> - ; <b>CP :</b> -<br />
        <b>Combat :</b> C'est parti pour l'affrontement que vous attendiez depuis le début du jeu. Kuja en transe n'est vraiment pas difficile à battre, ou alors vos personnages ont vraiment un niveau médiocre. Dans l'hypothèse où vous avez des personnages faibles, voici une tactique : attaquez Kuja avec vos personnages plus forts,
        qui devront normalement se faire contre-attaquez. Soignez-les immédiatement pour leur permettre de réattaquez dès le tour suivant. Les compétences Attaque à MP et Tueur seront très utiles, sans oublier, si vous avez Tarask dans votre équipe, le sort... &quot;Sort&quot; ! Avec cela, vous devriez y arriver. Pour les autres
        (joueur), attaquez fortement à l'arme (sans oublier la compétence &quot;Choc&quot; de Steiner, disponible sur l'arme Ragnarok), soignez-vous après chaque coup dur, même si ceux-ci sont plutôt doux. </font></p>
      <font FACE="Verdana" SIZE="1">
      <p align="justify">&nbsp;</p>
    </blockquote>
  </blockquote>
  <p align="justify">&nbsp;</p>
  </font>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><i><u><font face="Verdana" color="#FF0000">Boss final : Darkness: </font></u></i></p>
      <p align="justify"></b><font face="Verdana" color="#FFFFFF"><br />
        <b>HP :</b> 54100 ; <b>MP :</b> 9999 ; <b>Niveau :</b> 69<br />
        <b>Faiblesse :</b> Birdkiller, Vent, Sacré<br />
        <b>À voler :</b> Elixir (x4) ; <b>Laissé au combat :</b> - ; <b>Gils :</b> - ; <b>CP :</b> -<br />
        <b>Combat :</b> Après votre bataille contre Kuja, vous découvrez Darkness, l'ultime incarnation du mal. Choisissez votre équipe, soyez sûr d'avoir vos bonnes compétences équipées, puis lancez-vous à l'attaque. Darkness est un peu plus compliqué que Kuja dans le sens où il a recours à des altérations d'état plutôt
        dérangeantes. Son attaque Crucifix par exemple suffit à mettre hors de combat tous vos personnages pour que Darkness les détruise ensuite un par un... Mais avant qu'il ne lance Crucifix, Darkness utilisera Newtonring, qui enlève plus de 3000 HP. Soignez-vous le plus vite possible, mais n'oubliez pas que des compétences
        comme AutoRécup et AutoPotion peuvent vous être d'un grand secours, et si vous disposez d'Invincible, c'est encore mieux. Côté attaque, avec des compétences comme Attaque à MP ou Birdkiller, vos coups seront plus puissants, mais la technique la plus dévastatrice reste, si vous avez Steiner, de lui faire lancer plusieurs
        &quot;Choc&quot;, qui enlève à coup sûr 9999 HP. Si Djidane tombe en Transe, ça ne être que très appréciable également. Si vous désirez utiliser Freyja, n'oubliez pas qu'elle peut sauter pour rester hors de portée des attaques de Darkness... Ce combat n'est pas très difficile, ne vous inquiétez pas. Il devrait vite
        prendre fin. </font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Verdana" color="#FFFFFF"><br />
    Final Fantasy IX se termine maintenant sous vos yeux. Vous l'avez bien mérité ! Quant à moi, je vais me prendre quelques années de vacances, car une solution c'est vraiment loin d'être agréable à faire... </font></p>
 
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
