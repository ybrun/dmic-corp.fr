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
  <p>
    <center>
      <span class="Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">&nbsp;Les
        Différents styles de jeux</font></a></span>
    </center>
  </p>
  <p class="Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">1) Plates-formes</font></a></p>
  <p class="Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">L'un des plus vieux styles de jeux est
    le jeu de plate forme. Le but est assez simple, il suffit d'avancer dans un
    niveau jusqu'à la fin, puis il faut pour cela tous les finir pour terminer le
    jeu. Tout ceci semble assez facile, et bien pas du tout. Car on dirige un petit
    personnage qui va devoir sauter de plate forme en plate forme ainsi que sur des
    petits monstres pour pouvoir avancer - il s'agit là du principe de &quot; Mario
    &quot; - et tout ça sans se faire toucher et sans tomber dans le vide, car
    sinon c'est la mort. Le&nbsp; problème est que lorsque le héros meurt, il faut recommencer le niveau tout
    entier, mais heureusement notre petite mascotte à plusieurs vies et recommence
    le niveau quand ses vies sont épuisées. Le jeu se déroule généralement
    selon un scrolling horizontal en 2D, mais désormais la génération 3D est là,
    et donc les jeux de plate forme deviennent en 3D, progrès oblige.</font></a></p>
  <p class="Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">Voici quelques exemples : &quot; Mario
    64 &quot; (N64, qui vient juste de sortir en version française), &quot; Crash
    Bandicoot &quot; (PSX) et &quot; Sonic &quot; (MD).</font></a></p>
  <p class="Style7">&nbsp;</p>
  <hr align="center" />
  <p class="Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">2) Shoot them up</font></a></p>
  <p class="Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">Par définition, tirer dessus, ce qui
    résume tout à fait le style de jeux. Effectivement le but est de détruire
    tout ce qui bouge. Plus on avance, plus il y a d'ennemies, et par conséquent
    plus le niveau est élevé. Tous les &quot; shoot them up &quot; sont basés sur
    des combats de vaisseaux qui aboutissent par un affrontement avec un Boss à
    chaque fin de niveau ; il est plus gros et plus puissant que les autres
    ennemies, avec une barre d'énergie plus importante. Tout au long du parcours le
    joueur se verra bénéficier d'armes de plus en plus puissantes, lui permettant
    ainsi de progresser plus facilement. Malheureusement, son armement se verra
    disparaître lors de la perte d'une vie, rehaussant de la sorte le niveau de
    difficulté. C'est pour&nbsp; cela qu'il faut être le plus adroit possible pour conserver son équipement
    indispensable pour terminer le jeu, et pouvoir jouir d'une séquence finale.</font></a></p>
  <p class="Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">Mais dans ce genre de video games la
    satisfaction se situe surtout dans le fait de découvrir les différents levels.</font></a></p>
  <p class="Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">Les plus connus sont &quot; Space
    Invaders &quot; (Atari), &quot; Paroduis &quot; (SN), et &quot; Philosoma &quot;
    (PSX). Il s'agit généralement de jeux au scrolling en 2D, mais désormais avec
    les progrès technologiques on tend à avoir des scrollings en 3D.</font></a></p>
  <p class="Style7">&nbsp;</p>
  <hr align="center" />
  <p class="Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">3) Beat Them Up</font></a></p>
  <p class="Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">Plus communément appelés jeux de
    baston ou encore combat, ce qui veut tout dire. En effet, le but est de tuer
    l'adversaire en le frappant soit à mains nues soit avec des armes, cela dépend
    du logiciel. Le précurseur de ce style est &quot; Street Fighter &quot; qui a
    imposer ses règles aux autres jeux du même genre, c'est à dire, une barre
    d'énergie en haut de l'écran, la victoire en deux rounds et les coups
    surnaturels à distance ainsi que les projections et autres super coups. Bien
    sur, sont venus s'ajouter au cours du temps d'autres innovations mais qui
    paraissent moindres face au concept même. Jeux demandant une certaine
    connaissance des coups, mais pas trop&nbsp; d'intelligence contrairement aux RPG ou les jeux d'aventure. Le nombre de
    personnages jouables varie de 8 à 24 et ils sont globalement tous dotés de
    pouvoirs, différents les uns des autres tant par la forme que par les coups
    laissant ainsi le choix au jouer pour qu'il puisse trouver son personnage
    fétiche.</font></a></p>
  <p class="Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">Les plus connus sont : &quot; Street
    Fighter &quot; (SN), &quot; Virtual Fighter &quot; (Saturn) et &quot; Tekken
    &quot; (PSX). On remarque cependant que ce genre de jeux est très présent sur
    consoles et prisé du public, surtout chez le jeunes.</font></a></p>
  <p class="Style7">&nbsp;</p>
  <hr align="center" />
  <p class="Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">4) Stratégie / War
    Games</font></a></p>
  <p class="Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">On peut différencier stratégie et war
    games (jeux de guerre), mais d'habitude ces deux styles sont associés car les
    jeux de guerres sont basés sur de la stratégie. Le but est de diriger des
    troupes sur des territoires pour conquérir ceux des ennemies. Cette manoeuvre
    est souvent accompagnée d'affrontements, mais s'ils sont mal gérés cela
    entraîne la perte de l'armée. C'est pour cela que la stratégie dans le
    maniement des armées est primordiale pour la victoire finale. Souvent il faut
    construire des bases pour pouvoir augmenter ses effectifs de manière à
    accroître sa force de&nbsp; frappe. Pour cela il faut récolter de l'argent grâce aux subventions données
    lors de la mission ou bien s'approprier les ressources naturels et les vendre.
    Le jeu est en vue de dessus de tel sorte à améliorer la visualisation des
    troupes et ainsi faciliter leur gestion. Les armes ont dans ce genre de combat
    une place primordiale pour l'issue de la bataille, d'où l'importance de
    l'argent de façon à acheter des armes.</font></a></p>
  <p class="Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">Dans ce genre de jeu il y a : &quot;
    Command &amp; Conquer&quot; (PSX), &quot; Battle Isle &quot; (PC) et &quot;
    Civilisation &quot; (PC). On les retrouve, notamment, en grande partie sur PC
    car destinés à un public plus âgés.</font></a></p>
  <p class="Style7">&nbsp;</p>
  <hr align="center" />
  <p class="Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">5) Simulation</font></a></p>
  <p class="Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">Par définition, action de faire
    paraître comme réelle une chose qui ne l'est pas. Donc ce style de jeux essaye
    d'être le plus proche possible de la réalité pour que le joueur, qui est seul
    devant son écran, puisse retrouver les sensations qu'il aime. En général, il
    s'agit de simulation de voitures, football, basket et d'aviation. Toute
    personne, ayant rêvé d'un jour piloter ou même comprendre le fonctionnement
    d'un avion, peut désormais y parvenir avec des logiciels comme &quot; Fly
    Simulator &quot; ou bien d'autres encore. De même,&nbsp; tous les passionnés de sport, tel que le foot, retrouvent leurs idoles et
    nombreuses phases de jeux ressemblant à la réalité. On constate cependant
    qu'il s'agit des simulations de courses qui marchent le mieux, certainement pour
    les sensations de vitesse qui sont de plus en plus réalistes grâce aux
    progrès techniques, ou peut-être parce que tout jeune rêve de conduire un
    jour une voiture.</font></a></p>
  <p class="Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">Voici quelques exemples de simulation :
    &quot; Destruction Derby &quot; (PSX), &quot; Fly Simulator &quot; (PC) et
    &quot; Daytona &quot; (Saturn).</font></a></p>
  <p class="Style7">&nbsp;</p>
  <hr align="center" />
  <p class="Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">6) Aventure</font></a></p>
  <p class="Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">Proche du Role Playing Game, les jeux
    d'aventure sont les plus complets, car ils empruntent ce que les autres jeux ont
    de meilleurs : réflexes et rapidité (comme dans les jeux d'action), astuce et
    culture (comme dans les jeux de réflexion), sens de la tactique et de la
    stratégie (comme dans les war games). Les histoires sont plus amples, parfois
    aussi complexes que des romans ou des scénarios de films. Les jeux d'aventure
    ne se contentent pas de fixer un cadre, par exemple la jungle, et un thème
    comme délivrer une princesse : on y trouve des personnages riches, des
    dialogues nombreux, des intrigues palpitantes. D'ailleurs, de plus en plus
    d'éditeurs de jeux&nbsp; d'aventure font appel à des écrivains ou des scénaristes professionnels. Les
    jeux récents proposent tous la vidéo plein écran, avec souvent des vrais
    acteurs placés dans les décors, eux même réalisé en vidéo ou en image de
    synthèse.</font></a></p>
  <p class="Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">Voici quelques must : &quot; Myst
    &quot; (PC), &quot; Les chevaliers de Balphomet &quot; (PSX) et &quot; King
    Quest &quot; (PC). On remarque que ce type de jeux et plus souvent adopté sur
    PC, frappant ainsi les adultes.</font></a></p>
  <p class="Style7">&nbsp;</p>
  <hr align="center" />
  <p class="Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">7) Role Playing Games</font></a></p>
  <p class="Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">On a tous, un jour, rêvé de faire une
    quête fantastique en compagnie de créatures mystiques, étranges dotées de
    pouvoirs surnaturels. C'est ce que permettent les RPG, en passant dans un monde
    légendaire où vous contrôlez un personnage destiné a devenir le héros, le
    sauveur. Au départ, vous évoluerez seul à la recherche d'indices pour sauver
    le monde d'un terrible danger. Puis viendrons s'ajouter des compagnons dévoués
    à votre cause, prêts à vous aider et mourir pour la réussite de cette
    mission (ce n'est qu'un jeu !).&nbsp;</font></a></p>
  <p class="Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">Les RPG sont caractérisés en
    général par des maisons et des paysages vus de dessus, d'affrontements entre
    le groupe d'aventuriers et des monstres maléfiques, et des dialogues avec les
    habitants de ce monde localisés dans de petits villages permettants ainsi
    d'avancer dans votre croisade.</font></a></p>
  <p class="Style7"><a name="marker" id="marker">En voici quelques exemples : &quot;
    Zelda &quot; (SN), &quot; Legend of Thor &quot; (MD), &quot; Suikonden &quot; (PSX).
    Ils sont surtout très appréciés au Japon, d'où leur aspect Manga. Zelda est
    le précurseur de ce style, seulement on constate que seule la forme a changé
    grâce aux nouvelles techniques, mais le fond reste le même. </a></p>
  <p class="Style7">&nbsp;</p>
  <hr align="center" />
  <p class="Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">8) Doom-Like</font></a></p>
  <p class="Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">On assiste là à un genre assez
    récent et si on regarde le titre on constate qu'il est composé par le titre
    d'un jeu &quot; Doom &quot; qui a créé il y a trois ans un véritable
    phénomène. Le jeu est à la base assez barbare mais simple puisqu'il s'agit en
    fait de tirer sur tout ce qui bouge. Effectivement, le jeu est composé de
    niveaux où l'on se promène dans différentes pièces rencontrant sur le chemin
    des monstres qu'il faut éliminer pour pouvoir avancer. Ce concept parait
    pourtant assez ancien, mais c'est parce que la nouveauté réside dans la
    réalisation et le mode de vie. Le jeu est entièrement en 3D mappé, et la vue
    est faible de sorte que l'on voit ce&nbsp; que le personnage voit comme si l'écran remplaçait ses yeux. Ainsi, on se
    prend dans le jeu, perdu dans les pièces tel un labyrinthe tant tout ce qui
    croise notre route en se cachant derrière les mûres. Votre héros est une
    sorte de Rambo en plus méchant.</font></a></p>
  <p class="Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">Voici quelques exemples : &quot; Doom
    &quot; (PC), &quot; Wolfestein D &quot; (PC), &quot; Quake &quot; (PC) et &quot;
    Duke Nuken 3D &quot; (PC).</font></a></p>
  <p class="Style7">&nbsp;</p>
  <hr align="center" />
  <p class="Style7"><a name="marker" id="marker">9) Autres </a></p>
  <p class="Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">On peut mettre dans cette rubrique tous
    les jeux issus des jeux de société tels que le &quot; Monopolie &quot; ou bien
    &quot; Risk &quot;. On encore les jeux tirés des films comme &quot; Terminator
    II &quot; et plus récemment &quot; Star War &quot;, voir même des mangas
    &quot; DBZ &quot;, &quot; Ranma 1/2 &quot; ou bien d'autres encore.</font></a></p>
  <p class="Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">On peut aussi mettre les jeux de
    réflexions qui, malgré leurs réalisations assez pauvres, sont très
    appréciés ; tout comme &quot; Tetris &quot;, &quot; le Démineur &quot; ou
    bien &quot; Shanghai &quot;.</font></a></p>
  <h1 class="Style3 Style7"></h1>
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
