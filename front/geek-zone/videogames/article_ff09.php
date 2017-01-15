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
  <p align="center"><a href="../../../geek-zone/videogames/zidane_ani.gif"><img alt="Zidane Tribal" src="/dmic-corp/images/zidane_ani.gif" border="0" width="48" height="64" /></a><img alt="Final Fantasy 9" src="/dmic-corp/images/ff9logo.gif" width="160" height="67" /><img alt="Garnet Til Alexandros (Dagger)" src="/dmic-corp/images/garnet_ani.gif" border="0" width="50" height="64" /><b><br />
  </b></p>
  <p><b><font color="#800000"><img alt="Vivi Orunitia" src="/dmic-corp/images/vivi_ani.gif" border="0" width="52" height="64" /></font></b><font color="#FFFFFF" face="Comic Sans MS">Le jeu que tant de personnes attendaient est enfin sorti en version américaine! Dernier FF de l'ère Playstation, il était censé être le meilleur RPG de tous les temps et être le résultat
    de toutes les années d'expérience de Square! Je l'ai naturellement acheté le premier jour de sa sortie et je l'ai terminé! Sachez que je l'ai énormément aimé et qu'il était vraiment excellent! Mais doit-on parler de rpg du siècle comme le prétendent tant de magasines spécialisés? Peut-être pas, ne soyez pas trop déçus,
    mais il vous plaira quand même!</font></p>
  <p><font color="#FFFFFF" face="Comic Sans MS">Whoahhh! Que le jeu est beau! Les décors sont toujours magnifiques, on assiste toujours à de magnifiques décors en 3D fixe précalculés d'une superbe qualité, très riches en couleurs et en détails, ils participent beaucoup au bien être du joueur! Les personnages, eux, sont en
    SD comme dans les anciens Final Fantasy, très bien modélisés contrairement à Final Fantasy 7 où les persos étaient vraiment des assemblages de cônes et cubes, plutôt clairs contrairement à Final Fantasy 8 où ils étaient très pixellisés. Les sorts et les magies sont vraiment très belles, quoique rien de vraiment révolutionnaire
    de ce point de vue là. Les sorts les plus puissants sont cependant magnifiques et très apocalyptiques! Quant aux cinématiques, elles sont d'une beauté à faire tomber par terre tellement elles crèvent les yeux! J'ai personnellement aimé l'apparition d'Alexander à Alexandria et aussi l'attaque de la flotte d'airships
    contre les dragons! En plus vous en avez vraiment pour votre argent parce qu'il y en a beaucoup! Et enfin les invocations, elles sont toutes assez belles, une version courte sera dispo pour chaque invoc histoire de se concentrer plus sur le jeu au lieu de regarder bêtement un film! Cependant, j'ai personnellement aimé les
    invocs des 2 anciens FF, enfin bon, y a pas que ça dans la vie!<br />
    Mais FF9, ce n'est pas seulement une beauté, c'est aussi un bon gameplay! J'ai personnellement aimé le système qui était un mélange de FF6 et FF7! Pas cheap du tout mais ni trop lourd comme dans FF8 où avait l'impression de naviguer dans Windows 98 (sans plantage bien sûre...). Le système de combat respecte la tradition
    des FF, toujours aussi efficace, on remarque quelques retours au source dans ce domaine là comme la réhabilitation des dragon-knights de FF4 qui disparaissent de l'écran lorsqu'on les fait sauter et réapparaissent pour faire très mal!<br />
    La durée de vie? Bah elle n'est pas terrible... Le jeu est assez court, plus court qu'à l'accoutumé, on peut terminer le jeu en 30 heures environ, cependant les side quests devraient combler ce défaut car il y a de quoi faire avec ces side quests! On regrette cependant que les side quests ne donnent pas de récompense à la
    hauteur de leur difficulté. Les objets les mieux cachés ne sont pas forcément les meilleurs... Et comme d'hab, Square a mis un boss surpuissant nommé Ozma et qui est de très loin le puissant du jeu, il vaut largement les 2 derniers boss de fin réunis, et encore...</font></p>
  <p><font color="#FFFFFF" face="Comic Sans MS">Enfin bon, il faut quand même reconnaître que c'est un jeu que vous ne devez surtout pas rater si vous possédez une Playstation!</font></p>
  <p>&nbsp;</p>
  <b>
  <p align="justify"><font color="#FFFFFF" size="3" face="Comic Sans MS">Le retour des cristaux</font></b><font color="#FFFFFF" size="3" face="Comic Sans MS"> : Final Fantasy IX doit être le dernier Final Fantasy à sortir sur Playstation et Square est certain d'avoir repoussé les limites de la console. Avec Final Fantasy X et
    XI qui évolueront sur Playstion 2, on peut attendre beaucoup de notre série favorite. Avec Final Fantasy IX, Square voulait retrouver les racines de Final Fantasy tout en gardant le meilleur des autres séries. Leur but est de créer un jeu unique s'inspirant du meilleur de épisodes passés. Final Fantasy IX est donc à voir
    comme une évolution plutôt qu'une révolution.<br />
    <br />
    - <b>Introduction</b> : Final Fantasy IX évolue dans un monde appelé Héra, qui est divisé en 4 nations dominantes. Le voleur Djidane Tribal vient du royaume paisible de Linblum, dirigé par Cid. Cid décide d'engager le groupe de bandits de Djidane pour kidnapper la jeune Princesse Grenat, du royaume voisin d'Alexandrie, à
    cause de l'attaque qu'avait ordonnée la Reine sur les villages alentours. Bizarrement, Grenat, réalisant les erreurs de sa mère, se joint à Djidane, accompagnée de son fidèle garde du corps, Adelbert Steiner. Vivi fait son apparition lorsqu'il est envoyé, accompagné d'autre mages noirs, par la Reine Branet.<br />
    <br />
    - <b>Système de combat</b> : Contrairement à Final Fantasy VII ou VIII, dans Final Fantasy IX, quatre personnages peuvent se battre en même temps. Vous pouvez encore placer vos personnage en premier ou second plan, en fonction de sa sensibilité et de sa force de frappe. Pour les connaisseurs, le système de combat se
    rapproche de Final Fantasy VI ( FF3 us ).<br />
  </font></p>
  <p align="center"><font color="#FFFFFF" face="Comic Sans MS" size="3"><img src="/dmic-corp/images/0021.jpg" width="200" height="140" /></font></p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS" size="3"><br />
    <br />
    Bien qu'il n'était pas présent dans Final Fantasy VIII, le système des MP ( Magic Points ) fait son retour dans ce nouvel opus. Le choix des magies se limite à ce que la classe du personnage permet.</font></p>
  <blockquote>
    <blockquote>
      <p align="justify"><font color="#FFFFFF" face="Comic Sans MS" size="3">- <b>Capacité</b> - Chaque personnage peut obtenir les capacités basées sur sa classe. Par exemple, Djidane étant un voleur, vous pourrez obtenir la capacité &quot;Voler&quot;.<br />
        <br />
        - <b>Systeme d'équipement</b> - Chaque équipement possède son propre lot de capacités que le personnage peut apprendre lorsqu'il est équipé de cette même arme. Les équipements sont spécifiques pour chaque personnage. Par exemple, Djidane est obligé de porter des armures légères alors que Steiner ( Chevalier ) peut en
        porter des plus lourdes. Les magies et capacités à apprendre dépendent donc de l'arme que le personnage possède... Par exemple, équipé de certaines armes, Vivi pourra apprendre des magies telles que &quot;Feu&quot; ou &quot;Osmose&quot;. Dans les menus, chaque magie a sa jauge de AP qui une fois pleine, permet à Vivi
        d'utiliser la magie sans qu'il soit équipé de l'arme correspondante.<br />
        <br />
        - <b>Capacités</b> - Il y a deux types de capacités : les capacités d'action et les capacités de statut. Ces dernières peuvent augmenter vos statistiques ( comme par exemple la force ) ou peuvent augmenter la résistance d'un personnage contre les statuts anormaux ( tels que le poison ). Quant aux capacités d'action, elles
        vous permettent d'apprendre des capacités de combat comme Invoker.<br />
        <br />
        - <b>Mode Transe</b> - Ce mode est l'équivalent des limites de Final Fantasy VII et VIII. Ayant reçu un certain nombre de dommages, le personnage se met en &quot;trance&quot; lui permettant d'utiliser des capacités auparavant inaccessibles : puissantes attaques pour Djidane ou Steiner, double magie pour Grenat ou Eiko, etc.</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS" size="3">- <b>Mini-jeux</b> : A part le jeu de cartes, il n'y avait pas beaucoup de mini-jeux dans Final Fantasy VIII. Ceci change dans Final Fantasy IX, se rapprochant de Final Fantasy VII. Ainsi, vous pouvez jouer aux cartes, faire de la corde à sauter, faire une
    course contre un jeune hippopotame, etc.</font></p>
  <blockquote>
    <blockquote>
      <p align="justify"><font color="#FFFFFF" face="Comic Sans MS" size="3">- <b>Jeu de cartes</b> - Cela a été un tel succès que Square a décidé de réimplanter ce mini-jeu dans FFIX. Tout est identique à l'épisode précédent. La seule différence réside dans le fait qu'au début du combat, un tirage au sort gagné, vous
        permet de contrôler une carte de l'adversaire pendant le combat.<br />
        <br />
        - <b>Mog-poste</b> - C'est un grand réseau qui vous permettra d'envoyer des lettres ou colis à travers le monde. Les colis sont envoyé d'un Mog à un autre.</font></p>
    </blockquote>
  </blockquote>
  <p align="center"><font color="#FFFFFF" face="Comic Sans MS" size="3"><img src="/dmic-corp/images/0032.jpg" width="200" height="140" /><img src="/dmic-corp/images/0042.jpg" width="200" height="140" /></font></p>
  <p align="justify"><font color="#FFFFFF" size="3"><br />
    <br />
    - <b>La Musique</b> : Final Fantasy VIII avait pour chanteuse Faye Wong, Final Fantasy IX a la chanteuse japonaise Emiko Shiratori. Elle chante le thème principal &quot;Melodies of Life&quot; en japonais et anglais. Le compositeur Nobuo Uematsu demeure fidèle au poste pour son dernier Final Fantasy composé en solo. Plus de
    150 musiques jalonnent l'aventure !<br />
    <br />
    Final Fantasy IX est en fait simplement le FF le plus abouti sur la première PlayStation !</font></p>
  <p align="center">&nbsp; </p>
  <p align="center"><u><i><b><font size="5" color="#FF0000">Le test:</font></b></i></u></p>
  <b>
  <p align="justify"><font color="#FFFFFF" size="3" face="Comic Sans MS">Editeur :</font></b><font color="#FFFFFF" size="3" face="Comic Sans MS"> Squaresoft<br />
    <b>Développeur :</b> Squaresoft<br />
    <b>Genre :</b> RPG<br />
    <b>Dates de sortie :</b><br />
    - <b>Japon :</b> 9/07/2000<br />
    - <b>USA :</b> 14/11/2000<br />
    - <b>Europe :</b> 16/02/2001<br />
  <br />
    Après un septième et un huitième volets futuristes, Squaresoft semble vouloir rappeler ses anciens fans toujours attachés à l'héroïc fantasy. Final Fantasy IX ne devait au départ être qu'un épisode purement commercial... mais le retour en pleine forme de Yoshitaka Amano, Nobuo Uematsu, Hiroyuki Ito et bien évidemment
    Hironobu Sakagushi ont permit à FFIX de surpasser ce simple fait. Alors, le retour aux sources est-il un gage de qualité ?<br />
    <br />
    <b>Histoire :</b><br />
    <br />
    Un rappel de l'histoire de ce neuvième opus n'est pas de tout refus ! FFIX vous place entre les mains de Djidane Tribal, un jeune voleur appartenant au groupe des Tantalas. Suite au comportement étrange de la Reine Branet, la corpulente souveraine du royaume d'Alexandrie, le Roi Cid Fabre du puissant royaume de Lindblum se
    décide à envoyer les Tantalas à Alexandrie pour kidnapper la fille de Branet, la Princesse Grenat di Alexandros, en profitant d'un spectacle théâtral. Les voleurs, endossant le rôle d'acteurs, descendant dans le château durant la représentation pour kidnapper Grenat, qui est en réalité conscentante, car désireuse de
    quitter ce château où elle est enfermée depuis toujours... De folles courses poursuites dans les couloirs du château puis du vaisseau volant Prima Vista (qui avait amené les Tantalas) finissent par faire rejoindre deux personnages à l'équipe : Bibi Orunitia, un jeune mage noir n'ayant pas payé son entrée au spectacle,
    et Adelbert Steiner, capitaine des Brutos, un groupe de guerriers sensés protéger la famille royale.</font></p>
  <p align="center"><font color="#FFFFFF" face="Comic Sans MS" size="3"><img src="/dmic-corp/images/07.jpg" width="495" height="310" /></font></p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS" size="3">L'aventure commence là, après le départ en catastrophe du vaisseau... elle promet d'être riche et passionnante, animée par des méchants sans cesse plus charismatiques.<br />
    <br />
    <b>Graphismes :</b><br />
    <br />
    Il est bien un point où FFIX surpasse les précédents épisodes (mais pas les suivants évidemment), ce sont les graphismes. Pas question de changer une équipe qui gagne : le neuvième opus reprend la qualité graphique des autres FF sur PlayStation en l'améliorant grandement.<br />
    Commençons par un grand classique : les décors. Pas encore de tout-3D, mais une 2D fichtrement bien animée. Chaque décor jouit d'un soin tout particulier, additionné au fait que leur style &quot;conte de fées&quot; est très agréable pour les yeux. De nombreuses animations contribuent à rendre les lieux moins statiques :
    linge, drapeaux, ou herbe remuant au fil du vent, nuages défilant, fumée s'échappant des machines ou cheminées, oiseaux volant, et bien sûr personnages s'agitant... et respirant, une grande première. Bien que souvent basiques et saccadées, ces animations rendent le jeu plus vivant.<br />
    Venons-en ensuite au fondement du RPG classique : les combats. Ceux de FFIX sont une vraie réussite graphique. La modélisation des personnages et des ennemis est bonne, les décors assez riches et bien représentatifs du lieu que vous visitez, et les magies et invocations magistrales. (pour le peu que l'on voit ces
    dernières...) Les effets de lumière sont d'une réelle splendeur. En parlant d'ailleurs des invocations, il est bon de préciser que leur durée a été grandement raccourcie par rapport à FFVIII !<br />
    Pour terminer, la carte du monde est toujours aussi grande et aussi belle. Chaque région fait rêver et c'est un véritable voyage que Square nous donne via son jeu... Avec un airship, c'est encore plus agréable de voyager sur Héra (le nom du monde) ! Un effet de brouillard gâche malheureusement l'étendue de la carte...
    même si celui-ci est effacé par la présence volontaire de brûme sur un des continents : pas bêtes chez Square !<br />
    En bref, FFIX s'impose comme le plus beau FF sur la première console de Sony.<br />
  <br />
  <b>Système de jeu :</b><br />
  <br />
    Les habitués de Final Fantasy ne seront en aucun cas déboussolés devant FFIX. Le système de jeu est identique en tout points : déplacements, combats, carte du monde, menus... Toutefois, il faut noter des détails intéressants.<br />
    Le tout premier est une aubaine pour les fans des 6 premiers épisodes (à part FFIV peut-être) : on peut enfin former une équipe de 4, et non plus de 3 comme FFVII et VIII ! Ce changement n'est pas aussi tonitruant mais apporte une originalité un peu oubliée. Les combats à 4 sont vraiment très bons, d'autant qu'une option
    deux joueurs y a été glissée ! Bien que peu pratique, on note l'effort... Par contre, il se peut que certains personnages sont délaissés en combat, par manque d'intérêt. Côté déplacement dans les décors, il faut signaler un système déjà existant dans d'autres RPG : dès que vous vous trouvez devant un objet à
    ramasser, un &quot;!&quot; apparaît dans une bulle au dessus de votre tête. Pratique.<br />
    En combat, on note le retour des points de MP, disparus dans FFVIII. On retrouve avec joie ce système plus que classique. Sinon, chaque personnage a un job qui lui donne accès à une commande spéciale : voler pour Djidane, magie noire pour Bibi, invoker pour Grenat ou Eiko, etc. Le système de limite est d'ailleurs aussi
    toujours présent, sous l'appellation &quot;Transe&quot;. Votre personnage gagne pendant quelques tours de nouvelles aptitudes meurtrières, données par une jauge qui augmente quand les ennemis vous attaquent.</font></p>
  <p align="center"><font color="#FFFFFF" face="Comic Sans MS" size="3"><img src="/dmic-corp/images/08.jpg" width="495" height="330" /></font></p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS" size="3">La carte du monde ne change elle pas. On peut la parcourir de différentes manièes : à pied, en chocobo ou en différents vaisseaux volants.<br />
    Les menus sont enfin toujours pareils. Leur disposition est quasiment la même et on y trouve les commandes vitales. Jolis et faciles d'accès et de compréhension, ils permettent une gestion simple de toute votre équipe.<br />
    Je terminerai par le tout nouveau système de sauvegarde. Plus de points de sauvegarde, mais des Mogs ! Ceux-ci se chargeront de sauver votre partie, d'utiliser une tente, et ils vous proposeront un système excellent : la Mog-poste, qui permet d'envoyer et de recevoir des lettres de Mogs ou autres protagonistes. Certains Mogs
    peuvent même vous servir de boutique... c'est-y pas beau ?<br />
    <br />
    <b>Personnages :</b><br />
    <br />
    La nouvelle brochette de protagonistes de FFIX peut se targuer d'être charismatique de tous les côtés, grâce au talent du maître Yoshitaka Amano. En effet, même si le héros ne plaît pas à tout le monde, votre équipe est composée de membres très attachants et les méchants ont tous une classe folle.<br />
  <br />
    Vous pourrez contrôler jusqu'à 8 membres, que voici.<br />
    Le héros, Djidane Tribal, est un voleur âgé de 16 ans au passé totalement mystérieux. Il vous faudra explorer le jeu plus profondément pour découvrir mieux qui est ce personnage. Beaucoup de surprises en tout cas, histoire de remonter Djidane dans l'estime de ceux le trouvant trop peu intéressant. Sa vrai vie étant en
    effet tournée vers les filles...<br />
    L'héroïne de FFIX est sans conteste la Princesse Grenat di Alexandros, qui se renommera Dagga pour passer inaperçue. Cette jeune femme de 16 ans est enfermée dans le château de sa mère depuis ses 6 ans. Elle n'a d'ailleurs aucun souvenir de ce qu'il s'est passé avant. Son véritable passé est aussi à découvrir dans le
    jeu. Inutile de préciser qu'une histoire d'amour va lier Djidane et Dagga...<br />
    Grand chapeau, petits yeux brillants et démarche maladroite font de Bibi Orunitia l'un des personnages les plus attachants du jeu. Ce petit mage noir d'à peine 9 ans rejoindra votre équipe dès le début. Sa magie noire très puissante vous sera d'une grande utilité dans les combats. Au-delà, vous pourrez également
    découvrir le passé de ce petit bonhomme déchiré sur la question de la vie et de la mort, un thème récurrent dans le jeu.<br />
    Adelbert Steiner, appelé Steiner, est le bourrin de l'équipe. Ce guerrier de 33 ans au service de Branet s'embarquera dans l'aventure dès le début. Toujours sur les nerfs, il ne cessera de provoquer des situations comiques, en particulier avec Djidane. Son histoire n'a que très peu d'intérêt, mais il va finir par
    découvrir l'amour...<br />
    Plus loin dans le jeu, vous ferez la connaissance d'une guerrière originaire du royaume de Bloumécia : Freyja Crescent. Son apparence entre rat et femme ne l'empèche pas d'être attachante. Malgré son air fort et son esprit combattif, on découvre vite qu'elle est tourmentée par la disparition de son âme soeur. Une fois de
    plus, l'amour s'en mèle... Vous ne renierez pas la présence de Freyja en combat, d'autant plus qu'elle maîtrise la compétence &quot;Sauter&quot;.<br />
    Personnage moins important mais toujours utile, Kweena Quen est une corpulente Kwe, un peuple gourmand vivant dans les marais. Difficile de tomber sous le charme de Kweena, mais elle s'intègre relativement bien à l'équipe et apporte un brin d'humour dans certains situations. En combat, elle maîtrise la magie bleue, qui
    permet d'apprendre les sorts de l'ennemi.<br />
    La fin du deuxième CD vous apportera deux nouveaux personnages. Le premier est Eiko Carol, une gamine de 6 ans vivant seule dans le village de Madahine-salee. Son tempérament dynamique est tout à fait représentatif de son âge. Toujours accompagnée des Mogs, elle devra s'en séparer pour vous suivre dans votre quête. Seul
    Moug, son protecteur, restera à ses côtés, invisible...<br />
    Le second est Tarask Coral, un très grand chasseur de prime solitaire, lancé à vos trousses par Branet. Ce personnage très mystérieux et peu causant vous sera surtout utile en combat. Il pense toujours à lui en premier, ce qui facilite la prise de décisions...<br />
    Voilà pour votre équipe. On trouve évidemment d'autres personnages qui vous aideront, comme les membres des Tantalas : Bach, Frank, Markus, Cinna et Rubis. Du côté des têtes couronnés, Cid Fabre vous sera bien utile. Le souverain de Lindblum, bien que victime d'une drôle de transformation, est en effet conscient de la
    menace d'Alexandrie. L'histoire vous réservera d'autres surprises, qu'il faudra découvrir par vous-même.<br />
    <br />
    Et avec les méchants, on est aussi très bien servi !<br />
    La Reine Branet semble être votre ennemie au départ. Elle désire contrôler le monde entier grâce à des armées de mages noirs. Elle mettra deux bouffons à votre poursuite, Pile et Face, afin de récupérer la Princesse Grenat.<br />
    La grande guerrière Beate sera également à vos trousses. Elle vous combattra à plusieurs reprises mais vous ne ferez pas le poids. Cette femme charismatique manie en effet très bien l'épée.<br />
    Mais ces deux personnages ne sont rien à côté du vrai grand méchant du jeu : Kuja. Cet androgyne charismatique à la puissance imposante ne se dévoile réellement qu'assez tard dans le jeu. Toujours fier et sûr de lui, il fera tout pour vous éliminer. Chacune de ses apparitions est un moment de bonheur tant il inspire un
    sentiment de puissance...<br />
    Et voilà pour le tour des méchants. A nouveau, l'histoire vous réserve des surprises à ne pas citer ici !<br />
  <br />
  <b>Musique :</b><br />
  <br />
    Comment oublier ce détail pourtant fondateur du succès de la série ? Treize ans après le premier Final Fantasy, c'est toujours le même compositeur aux commandes : l'unique et inimitable Nobuo Uematsu. Après FFVII aux sonorités sombres et FFVIII au style plus &quot;new age&quot;, FFIX revient aux sources. Les musiques du
    jeu ont toutes un côté mélancolique et fantastique qui colle à merveille à chaque situation. Cette fois, Uematsu s'est défoulé car le jeu compte près de 150 thèmes. Chaque lieu, chaque personnage, chaque instant, chaque séquence cinématique a sa musique. Un travail de titan qui s'est quand même fait avec des
    reprises. Le thème principal est par exemple très présent. On trouve aussi des clichés aux précédents épisodes : une musique du premier FF, une du II, une du III, une du V (le thème de Kuja !) et une du VII (la cérémonie de Rufus). A chaque fois, le remix passe inaperçu.</font></p>
  <p align="center"><font color="#FFFFFF" face="Comic Sans MS" size="3"><img src="/dmic-corp/images/01.jpg" width="350" height="257" /></font></p>
  <p><font color="#FFFFFF" face="Comic Sans MS" size="3">A noter qu'un thème chanté fait son retour... Après Faye Eyes on Me de FFVIII, voici Melodies of Life, chantée en japonais et en anglais par la chanteuse japonaise Emiko Shiratori. Au final, une musique magnifique...<br />
    En ce qu'il s'agit des meilleurs thèmes, je citerais l'introduction, la représentation théâtrale, la forêt, la carte du monde, Dali, les thèmes de Freyja, Beate et bien évidemment Kuja, le village des mages noirs, l'attaque d'Alexandrie, l'Hildegarde, Terra, Branval, Mémoria, les combats finals et bien évidemment les
    thèmes de fin !<br />
    L'ambiance générale demeure néanmoins excellente.<br />
  <br />
  <b>Difficulté :</b><br />
  <br />
    Malheureusement, Final Fantasy IX est un jeu très facile. Bien que parfois corsé, la grande majorité du jeu est dirigiste et les combats souvent rapides. On peut penser que la démocratisation de la série et la portée universelle (ou aspect grand public) ont eu raison de FFIX. Même s'il n'atteint pas les sommets de FFX, il
    est bien fourni niveau &quot;cut-scenes&quot;, ces séquences où les personnages discutent. Les phases d'exploration sont souvent courtes au début, mais deviennent heureusement plus longues et difficiles au fil du temps. Un détail tout de même appréciable : la grande liberté. Les passages sur la carte du monde dans le
    premier CD sont idéals pour visiter tranquillement...<br />
    Au niveau des combats, rares sont les boss qui vous causeront de gros problèmes. Vous les enverrez facilement et rapidement au tapis. Le summum reste quand même les boss de fin, qui n'ont jamais été aussi simples à battre. Réjouissant quand on sait que la fin est un régal à revoir...<br />
    Pour finir, la durée de vie est plutôt mauvaise. A peine une trentaine d'heures sont à compter pour finir le jeu. Heureusement, vous pourrez rester plus longtemps devant votre écran. Rien que la quête des Chocobos et le jeu de cartes (de retour après FFVIII !) suffisent à allonger votre temps de jeu.<br />
  <br />
  <b>Traduction :</b><br />
  <br />
    Petit arrêt avant de conclure sur ce qui a été la plus grande polémique autour d'une traduction de RPG... Je le dis et je le redis : la traduction de FFIX est excellente ! Ceux qui bloquent sur les noms de personnages et objets (parfois douteux je l'admets) ignorent qu'il y a des milliers de pages de textes dans ce jeu... Un
    travail de traduction gigantesque mais au final réussi.<br />
    On admire ainsi les différents niveaux de langue des personnages : Djidane est plutôt cavalier, Grenat soutenue, Bibi et Eiko enfantins. Tout paraît naturel (sauf leurs &quot;citations&quot; visibles en laissant tourner le jeu sur l'écran titre) et les seules erreurs à noter se situent au niveau de fautes de frappe. Elles
    sont tellement rares qu'on s'en souvient après.<br />
    Pour finir, je dirais que la traduction ne m'a choquée qu'à un seul niveau : Bibi. Même si c'est la traduction littérale du nom Japonais, le Vivi américain est bien plus agréable à lire...<br />
  <br />
  <b>Notes :</b><br />
  <br />
  <b>Scénario :</b> 16/20<br />
  <b>Graphismes :</b> 19/20<br />
  <b>Gameplay :</b> 18/20<br />
  <b>Personnages :</b> 17/20<br />
  <b>Musique :</b> 18/20<br />
  <b>Difficulté :</b> 14/20<br />
  <b>Final : 17/20</b></font></p>
  <p><font color="#FFFFFF" face="Comic Sans MS" size="3"><br />
    Final Fantasy IX est bien un Final Fantasy. Même si je suis plus émerveillé avec les épisodes VII, VIII et X, il m'a fait passer un agréable moment dans un univers onirique d'une très grande beauté...</font></p>
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
