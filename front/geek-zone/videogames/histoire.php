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
  <h2 align="center" class="Style7"><a name="marker" id="marker"><b><i><u>L'Histoire du Jeu Vidéo</u></i></b></a></h2>
  <p align="center" class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="5">Introduction</font></u></i></b></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">Qu’est ce qu’un jeu
    vidéo ? Il s’agit au sens large d’un jeu électronique sur un
    support audiovisuel, dont le fonctionnement peut-être géré par un
    ordinateur capable de tâches diverses, ou par un circuit
    électronique dédié.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">Avant de se lancer dans une
    étude approfondie avec des articles détaillés sur chaque
    élément important, faisons une rétrospective des grandes dates de
    l’histoire des jeux vidéos.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">Il convient d’abord d’estimer
    l’époque où tout a vraiment commencé, qui peut varier selon le
    point de vue. Les jeux vidéos sont associés aux ordinateurs dans
    la plupart des cas, mais pas question ici de retracer l’historique
    de l’informatique, dans la mesure où cela nous ferait remonter
    plusieurs siècles en arrière. Concentrons nous sur l’aspect
    ludique des choses.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">Aussi, notre histoire
    commence aux Etats-Unis en 1951, année où un jeune ingénieur
    nommé Ralph Baer est chargé par ses employeurs, la société Loral
    Electronics, de concevoir un téléviseur ; non pas un téléviseur
    ordinaire, mais le meilleur jamais construit.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">Baer pense que pour rendre
    son appareil différent des autres, révolutionnaire, il doit y
    incorporer de quelque façon que ce soit une possibilité pour l’utilisateur
    de jouer. Ses employeurs refusent l’idée, et le produit s’avèrera
    n’être finalement qu’un récepteur de télévision comme les
    autres. Ralph Baer n’est donc pas entré dans l’histoire, mais
    on peut considérer qu’il est le premier à avoir eu l’idée d’un
    jeu vidéo.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">Il faut attendre 7 années
    de plus pour voir apparaître ce qui est peut-être la première
    tentative réussie de création d’un jeu vidéo, avec le travail
    du physicien Willy Higinbotham, qui programme pour le plaisir un jeu
    de tennis sur un oscilloscope mais ne juge pas opportun d'en
    déposer l'invention.<br />
    Quatre ans plus tard, en 1962, Steve Russel crée un jeu nommé
    Spacewar sur un DEC PDP-1, le premier mini-ordinateur, qui, pour
    l'époque, est révolutionnaire par son faible encombrement, son
    écran vectoriel et ses performances (comparé aux énormes machines
    de l'époque qui travaillent avec des cartes perforées) (merci à
    Serge Rossi pour ses infos). Spacewar est dans un sens le premier
    vrai jeu vidéo de l’histoire, si l’on considère que c’est le
    premier à utiliser un ordinateur.<br />
    En </font> <font face="Times New Roman" size="4">1971, Nolan Bushnell, alors âgé de 30 ans, entre à son tour
      dans l’histoire des jeux vidéos, après avoir eu l’occasion de
      jouer à Spacewar, en concevant la première machine d’arcade,
      Computer Space, un jeu très proche de Spacewar, puis Pong, jeu de
      tennis qui sera le premier succès commercial obtenu par un jeu
      vidéo.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">1979</font> <font face="Times New Roman" size="4"> verra l’apparition
    de Space Invaders, venu du Japon, puis d’autres titres
    légendaires comme Centipede, Frogger, Asteroids ou Pac Man, qui
    feront du jeu vidéo une industrie de premier plan.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">Les jeux vidéos, au cours
    de leur histoire, ont entraîné la création de compagnies dont le
    nom nous est familier. Atari, une compagnie américaine avec un nom
    Japonais, en est un exemple, tout comme les Japonais Sega et
    Nintendo, même si cette dernière est née bien avant l’éclosion
    de ce marché.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">D’autres grandes
    compagnies, au départ étrangères à l’univers du jeu vidéo,
    ont tenter de s’y intégrer. Ainsi la société Magnavox,
    responsable de l’Odyssey, la toute première console multi-jeu
    commercialisée, était une filiale de Philips, une compagnie
    aujourd’hui vieille de plus d’un siècle (tout comme Nintendo).
    Et qui aurait pu imaginer, dans les années 80, qu’un jour Sony
    ferait partie des grands noms du jeu vidéo, et en ferait sa
    principale activité, au dépends de la vidéo et de la hi-fi ?
    (voir les récents remaniements drastiques de personnel du géant
    Japonais).</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">Aujourd’hui, les jeux
    vidéos sont souvent accusés d’encourager les pulsions violentes
    des enfants. Les créateurs s’autocensurent, des avertissements et
    des âges minimums sont notifiés sur les emballages des jeux, et
    certains ont récemment frôlé l’interdiction pure et simple de
    vente. Cette dérive est souvent associée à notre époque, faite
    de violence, où les enfants sont habitués à s’abreuver d’images
    de meurtres, que ce soit dans les films, les bandes dessinées, où
    tout simplement au journal télévisé. Pourtant, à l’époque des
    toutes premières consoles de jeu, celles-ci étaient généralement
    vendues avec un pistolet (à cellule photo-électrique, mais d’un
    aspect très réaliste) utilisé dans certains jeux où il fallait
    tirer sur l’écran. La violence suggérée par les jeux vidéos n’a
    donc rien de nouveau ni de moderne. En fait, ceux-ci nous ont
    toujours donné une vision du futur.<br />
  &nbsp;</font></a></p>
  <hr align="center" />
  <p align="center" class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="5"><u><i><b>1889-1970 : Quelques dates
    importantes</b></i></u><font size="4"><br />
    </font></font></a></p>
  <p align="center" class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4"><b><i><u>1889</u></i></b></font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">Fusajiro Yamauchi monte une
    fabrique de cartes à jouer nommée Marufuku, qui produit un jeu de
    carte Japonais du nom d’Hanafuda. En 1907, Marufuku se lancera
    dans la fabrication de cartes à jouer occidentales, puis plus tard,
    en 1951, sera rebaptisée Nintendo Playing Card Company, le mot
    Nintendo signifiant « les dieux en décideront ».</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker">&nbsp; </a></p>
  <p align="center" class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4"><b><i><u>1891</u></i></b></font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">Gerard Philips,
    néerlandais, crée une société de fabrication de lampes
    électriques qui porte son nom.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker">&nbsp; </a></p>
  <p align="center" class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4"><b><i><u>1918</u></i></b></font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">Konosuke Matsushita crée
    la Matsuchita Electric Housewares Manufacturing Works, qui durant
    les 70 années suivantes engendrera de nombreuses filiales, comme
    Panasonic.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker">&nbsp; </a></p>
  <p align="center" class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4"><b><i><u>1932</u></i></b></font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">La Connecticut Leather
    Company est fondée par un immigré Russe du nom de Maurice
    Greenberg, et fabrique des chaussures en cuir. Au début des années
    50, Leonard, le fils de Greenberg, invente une machine à couper le
    cuir, et la société, dont le nom est raccourci en Coleco,
    prospère dans la vente d’équipements de cordonnerie. Vers 1959,
    Leonard Greenberg invente une machine à fabriquer des moules en
    plastiques, et Coleco se reconvertit dans la fabrication de piscines
    pré-moulées.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker">&nbsp; </a></p>
  <p align="center" class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4"><b><i><u>1945</u></i></b></font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">Dans leur atelier, Harold
    Matson et Elliot Handler fabriquent des cadres en bois. Ils fondent
    leur propre entreprise, Mattel, dont le nom est obtenu en combinant
    les noms Matson et Elliot.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">Pendant ses loisirs, Elliot
    Handler utilise les chutes de bois de l’atelier pour construire
    des meubles miniatures pour maison de poupées.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker">&nbsp; </a></p>
  <p align="center" class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4"><b><i><u>1947</u></i></b></font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">Akio Morita et Masaru Ibuka
    fondent la Tokyo Telecommunications Engineering Company, après
    avoir vu fonctionner un enregistreur à bande de fabrication
    américaine et décidé d’en produire un semblable.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">En </font> <font face="Times New Roman" size="4">1952, Ibuka et Morita
    achètent pour 25000$ une licence leur permettant d’être la
    première société non américaine à produire des transistors,
    invention de Bell Labs. Ils utilisent ces transistors, et la
    réduction d’encombrement qu’ils représentent par rapport aux
    relais à lampes, pour produire le premier poste de radio portable
    à piles du monde. La radio à transistors est un succès au Japon,
    et Ibuka et Morita cherchent à la lancer en Europe et aux USA.
    Réalisant que le nom Anglais de leur société est trop long, ils
    adoptent le nom de Sony, un mot inventé à partir de la racine
    latine sonus (son).</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker">&nbsp; </a></p>
  <p align="center" class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4"><b><i><u>1951</u></i></b></font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">Ralph Baer, ingénieur chez
    Loral, une société qui développe des instruments électroniques
    pour avions de combat, à pour instruction de « concevoir la
    meilleure télévision du monde ».</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">Il suggère à ses patrons
    d’inclure dans le récepteur un module interactif de jeu, mais l’idée
    est rejetée.<br />
  </font></a></p>
  <p align="center" class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4"><b><i><u>1954</u></i></b></font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">David Rosen, un américain
    vétéran de la guerre de Corée, se souvient de la popularité
    auprès des soldats des machines à sous et des juke-box. Rentré au
    pays, il se lance dans l’exportation de ces machines vers les
    bases militaires américaines au Japon. Il fonde la société
    Service Games, et dans les années 60, décide de produire ses
    propres machines, et rachète une fabrique de juke-box de Tokyo. Les
    Japonais qui travaillent pour lui auront pour habitude de raccourcir
    le nom de la société étiqueté sur les machines, Service Games,
    en Se-Ga, et Rosen finira par adopter ce nom définitivement.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker">&nbsp; </a></p>
  <p align="center" class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4"><b><i><u>1958</u></i></b></font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">Au Brookhaven National
    Laboratories, à New York, un physicien nommé Willy Higinbotham
    programme pour s’amuser un jeu de tennis sur l’écran d’un
    oscilloscope. Un an plus tard, il adapte son jeu sur un écran
    cathodique 15 pouces. Persuadé, à tort, qu’il n’a là rien
    inventé, il ne dépose pas son idée.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker">&nbsp; </a></p>
  <p align="center" class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4"><b><i><u>1962</u></i></b></font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">Etudiant au MIT
    (Massachussets
    Institute of Technology), Steve Russel crée Spacewar, le premier
    jeu interactif sur support informatique, un PDP-1 (Programmed Data
    Processor-1), ordinateur construit par Digital. L’affichage du jeu
    se fait au moyens de caractères ASCII sur un écran vectoriel, et
    le système est basé sur un mini-ordinateur DEC PDP-1.<br />
    La même année, un certain Nolan Bushnell entre à l’université
    de l’Utah, et découvre Spacewar au laboratoire d’informatique.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker">&nbsp; </a></p>
  <p align="center" class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4"><b><i><u>1965</u></i></b></font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">Nolan Bushnell obtient un
    job d’été au Salt Lake City Carnival, un parc d’attractions,
    où il tient une salle d’arcade remplie de jeux électroniques
    primitifs. L’idée lui vient de créer un jeu vidéo semblable à
    Spacewar à destination de telles salles de jeu. Le coût et l’encombrement
    énorme des systèmes informatiques de l’époque rend à ce stade
    la chose impossible.</font></a></p>
  <p align="center" class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4"><br />
  </font> <font face="Times New Roman" size="4"><b><i><u> 1966</u></i></b></font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">Ralph Baer, qui travaille
    maintenant chez Sanders Associates, et son équipe réussissent à
    faire fonctionner un jeu sur une télévision. Il développent un
    jeu de course automobile et un jeu de tennis, et modifient un
    pistolet d’enfant afin qu’il puisse identifier au moyen d’une
    cellule photo-électrique le déplacement d’un objet sur l’écran.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker">&nbsp; </a></p>
  <p align="center" class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4"><b><i><u>1968</u></i></b></font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">Le jeu inventé par Baer
    est déposé, et les droits sont acquis par Sanders.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker">&nbsp; </a></p>
  <p align="center" class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4"><b><i><u>1970</u></i></b></font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">La société Magnavox
    achète les droits du jeu de Baer à Sanders Associates.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">Pendant ce temps, avec l’aide
    de Ted Dabney, Nolan Bushnell transforme la chambre de sa fille
    Britta en atelier électronique où les deux hommes travaillent sur
    une version de Spacewar exploitable en salle de jeu. Ils parviennent
    à mettre au point un système adaptable sur une télévision.
    Bushnell baptise son jeu Computer Space.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">La fabriquant de jeux
    électroniques pour salles d’arcade Nutting Associates achète les
    droits d’exploitation de Computer Space et engage Bushnell.</font></a></p>
  <p class="Style7">&nbsp;</p>
  <hr align="center" />
  <p align="center" class="Style7 Style7"><a name="marker" id="marker"><font size="5" face="Times New Roman"><u><i><b>1971-1977 : L’ère des
    jeux vidéo commence</b></i></u></font><font face="Times New Roman" size="4"><br />
    </font></a></p>
  <p align="center" class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4"><b><i><u>1971</u></i></b></font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">Nutting Associates lance le
    premier jeu vidéo d’arcade de l’histoire : Computer Space<br />
    1500 unités sont fabriquées. Les composants sont enfermés dans un
    caisson en bois de taille réduite au look futuriste, équipé d’un
    écran noir et blanc 13 pouces.<br />
    Le public boude Computer Space, trouvant peut-être le jeu trop
    difficile et complexe.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker">&nbsp; </a></p>
  <p align="center" class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4"><b><i><u>1972</u></i></b></font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Magnavox commence à
    fabriquer l’Odyssey.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Le système de jeu sur télévision de Baer est fabriqué en série.
      Sanders et Magnavox commencent à le montrer à différents
      distributeurs.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">L’Odyssey est dévoilée.</font></u></i></b><font face="Times New Roman" size="4"><br />
    Le </font> <font face="Times New Roman" size="4"> 24 Mai 1972, Magnavox présente l’Odyssey lors d’une
      convention à Burlingame, Californie. Les gens de Nutting,
      persuadés d’être les seuls à travailler sur un concept de jeu
      vidéo, envoie Bushnell voir la machine. Celui-ci passe quelques
      minutes à jouer avec, et rapporte à ses patrons que l’Odyssey
      est un jeu inintéressant qui ne risque pas de leur faire grande
      concurrence.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Nolan Bushnell quitte
    Nutting Associates.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Computer Space se vend mal, et Bushnell comprend qu’il s’est
      trompé, que son jeu n’est pas assez abordable pour des joueurs
      qui découvrent ce type de produit pour la première fois. Il
      demande le feu vert à Nutting pour concevoir un nouveau jeu, plus
      simple, mais exige cette fois une part plus large des profits sur le
      contrat, dans la mesure où il est à l’origine du concept. Les
      dirigeants de Nutting refusent et Bushnell quitte la société.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><i><b><u><font face="Times New Roman" size="4">Bushnell fonde Atari.</font></u></b></i><font face="Times New Roman" size="4"><br />
    Bushnell et Dabney décident de créer leur propre société pour la
    conception et la distribution de leur prochain jeu. Ils pensent l’appeler
    Syzygy (un nom qui désigne l’alignement de trois corps
    célestes), mais le nom est déjà utilisé par une autre
    entreprise, et adoptent le nom d’Atari, un terme issu du jeu de
    Go, que Bushnell pratique avec passion, et qui est l’équivalent d’«échec
    au roi».</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Naissance de Pong.</font></u></i></b><font face="Times New Roman" size="4"><br />
    Bushnell engage Al Alcorn dans son équipe de développement.
    Celui-ci est inexpérimenté, et Bushnell le charge pour le tester
    de programmer un petit jeu de tennis. Voyant le résultat, Bushnell
    adopte l’idée d’un jeu de tennis pour la première production d’Atari.
    Après quelques semaines de travail, Bushnell, Dabney et Alcorn
    aboutissent à la création de Pong, un jeu de tennis nommé ainsi
    parce que le nom de « Ping-Pong » est une marque déposée.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Pong tombe en panne.</font></u></i></b><font face="Times New Roman" size="4"><br />
    Bushnell tente de vendre Pong à des distributeurs de jeux d’arcade.
    Bally se monte désintéressé, ainsi que tous les autres. Atari se
    chargera donc aussi de la distribution. Le jeu est mis en test au
    Andy Capps, un bar local. Après deux semaines, la machine tombe en
    panne, submergée par les joueurs et les pièces de 25 cents. Ce
    sera à n’en point douter un succès.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Magnavox lance la première
    console de jeu : l’Odyssey.</font></u></i></b><font face="Times New Roman" size="4"><br />
      L’Odyssey n’est vendu dans un premier temps que dans les
      magasins à l’enseigne Magnavox, et les gens en déduisent qu’elle
      ne fonctionne qu’avec les téléviseurs de cette marque, ce qui
      est faux. Malgré ce malentendu, l’Odyssey se vend à 100000
      exemplaires. Beaucoup de gens l’achètent car c’est le seul
      équivalent au jeu Pong que l’on peut avoir chez soi.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Les poursuites judiciaires
    commencent.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Magnavox attaque Atari en justice, déclarant que Pong est une copie
      d’un des jeux disponibles pour l’Odyssey. Ils viennent de
      découvrir la signature de Nolan Bushnell dans le livre d’or de la
      démonstration de l’Odyssey à Burlingame. Pour quelques centaines
      de milliers de dollars, Atari dédommage Magnavox et obtient l’autorisation
      inconditionnelle de fabriquer des unités Pong sous toutes les
      formes possibles.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker">&nbsp; </a></p>
  <p align="center" class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4"><b><i><u>1973</u></i></b></font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">La competition.</font></u></i></b><font face="Times New Roman" size="4"><br />
    Alors que Pong est un véritable phénomène en salles d’arcade, d’autres
    compagnies veulent entrer dans la danse et créer des jeux
    similaires, comme Nutting, qui regrette de ne pas s’être plié
    aux exigences de Bushnell. A la fin de l’année 73, 25 compagnies
    produisent des jeux d’arcade, coupant une partie des profits d’Atari.
    Ted Dabney, sentant qu’Atari est en danger, vend ses parts de la
    société à Bushnell.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker">&nbsp; </a></p>
  <p align="center" class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4"><b><i><u>1974</u></i></b></font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Un échec transformé en
    succès.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Atari lance un jeu d’arcade nommé Touch Me, dans lequel 4 boutons
      lumineux s’allument dans un ordre aléatoire, que le joueur doit
      restituer en les pressant à son tour, la séquence étant de plus
      en plus longue et rapide. Le jeu n’obtient aucun succès. Ralph
      Baer, l’homme à l’origine de l’Odyssey, décide d’en
      fabriquer un clone en ajoutant des notes de musiques diverses
      associées aux lumières. Il vend son prototype à Milton Bradley,
      qui le commercialise sous la forme d’un jeu portable nommé Simon,
      et obtient un des plus gros succès de l’histoire du jeu
      électronique. Plus tard, Atari tente de se rattraper en lançant sa
      propre version portable de Touch Me, mais ne trouve pas sa place sur
      le marché.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Atari vise les foyers
    américains.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Harold Lee propose à Bushnell de lancer une version domestique de
      Pong, adaptable à une télévision, inspirée de la console Odyssey.
      Malgré l’inexpérience d’Atari dans le marché de la grande
      consommation, Bushnell lui donne le feu vert.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker">&nbsp; </a></p>
  <p align="center" class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4"><i><u><b>1975</b></u></i></font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">L’exclusivité pour
    Sears.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Tom Quinn, de Sears Roebuck, propose de racheter toutes les unités
      de Pong qu’Atari peut fabriquer. Il demande à Bushnell de doubler
      ses capacités de productions, et obtient les droits d’exclusivité
      sur Pong pour un an. Le jeu sera vendu avec le logo Sears Tele-Games,
      et devient la sensation de Noël 1975.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Le premier jeu «
    micro-informatique ».</font></u></i></b><font face="Times New Roman" size="4"><br />
      Midway Games lance Gunfight, le premier jeu à utiliser un
      micro-processeur plutôt que des circuits électroniques à
      transistors. Développé par de Taito, Gunfight est aussi le premier
      jeu d’arcade d’origine Japonaise à connaître une exploitation
      mondiale.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker">&nbsp; </a></p>
  <p align="center" class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4"><b><i><u>1976</u></i></b></font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Un des pères des jeux
    vidéos sauve Coleco.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Inspirées par le succès d’Atari, d’autres compagnies lancent
      des consoles de jeu, parmi lesquelles on retrouve Coleco, qui
      élargit son champ d’activités avec la console Telstar, un clone
      de Pong. La compagnie de Leonard Greenberg fait appel à Ralph Baer
      pour résoudre un problème d’interférence de la machine sur des
      fréquences radio réservées, et la Telstar peut-être
      commercialisée dans les temps voulus.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Naissances des jeux sur
    cartouches.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Fairchild Camera &amp; Instruments lance son Video Entertainment
      System, rebaptisé à la dernière minute Channel F, la première
      console multi-jeu à utiliser des cartouches, support insérable
      contenant des mémoires où sont stockées les données logicielles
      du jeu. Celles-ci ont le même format que des cassettes d’enregistrement
      audio 8-pistes.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><i><b><u><font face="Times New Roman" size="4">La violence arrive dans les
    jeux vidéo.</font></u></b></i><font face="Times New Roman" size="4"><br />
      Exidy Games lance Death Race 2000, un jeu d’arcade de course
      automobile inspiré du film du même nom sorti en 1975 (mis en
      scène par Paul Bartel, avec David Carradine et un Sylvester
      Stallone débutant, sorti en France sous le titre « Les seigneurs
      de la route »). Le joueur gagne des points en écrasant des
      piétons (comme dans le film !), et de nombreuses voix s’indignent
      contre le produit, qui est rapidement retiré du marché.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Atari est vendu pour 28
    Millions.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Nolan Bushnell vend Atari à Warner Communications pour 28 millions
      de dollars, et reste à la tête de la société.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker">&nbsp; </a></p>
  <p align="center" class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4"><b><i><u>1977</u></i></b></font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><i><u><b><font face="Times New Roman" size="4">Ouverture des Pizza Time
    Theatre.</font></b></u></i><font face="Times New Roman" size="4"><br />
      Atari ouvre le premier Pizza Time Theatre, qui combine restaurant et
      salle d’arcade. On peut y admirer des animaux robotisés, jouer à
      des jeux électroniques ou des jeux d’arcades tout en mangeant une
      pizza. La mascotte de l’établissement est le rat Chuck E.Cheese.
      Bushnell a eu l’idée du concept trois ans auparavant en faisant
      la queue dans un fast-food.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Atari lance sa propre
    console à cartouches.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Celle-ci est baptisée le Video Computer System (VCS), et on peut l’acheter
      à Noël pour 250$.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Bally pénètre le marché
    de la grande consommation.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Bally lance une console appelée Bally Professional Arcade. Vendu
      350$, le système ne rencontre pas le succès escompté.<br />
    </font></a></p>
  <hr align="center" />
  <p align="center" class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="5">1978–1981 : L’Age d’or.</font></u></i></b><font face="Times New Roman" size="4"><br />
  </font></a></p>
  <p align="center" class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4"><b><u><i>1978</i></u></b></font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Bushnell quitte Atari.</font></u></i></b><font face="Times New Roman" size="4"><br />
    Peu apprécié des dirigeants de Warner qui l’accusent d’être
    responsable des pertes d’Atari, Bushnell quitte la société qu’il
    a fondée. Il rachète à Atari les droits d’exploitation des
    Pizza Time Theatre, et en fait une chaîne de restaurants répandue
    dans tout les pays. Ray Kassar devient le PDG d’Atari.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Nintendo se lance dans le
    jeu d’arcade.</font></u></i></b><font face="Times New Roman" size="4"><br />
      En Mars, Nintendo lance Computer Othello, un jeu d’arcade très
      simple d’accès basé sur le célèbre jeu de société.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Les trackballs entrent dans
    les salles d’arcade.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Atari lance le jeu Football, qui utilise un système de contrôle
      révolutionnaire basé sur une boule partiellement enfoncée dans la
      machine que le joueur fait tourner du bout de ses doigts. Le
      système est appelé Trackball, et son utilisation se généralisera
      à toutes les applications informatiques, au même titre que la
      souris.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4"><b><i><u>Un nouveau phénomène venu
    du Soleil Levant.</u></i></b><br />
    Midway importe Space Invaders, un jeu d’arcade développé par
    Taito. Le jeu connaît un succès historique. C’est, entre autres
    innovations, le premier jeu d’arcade à mémoriser le meilleur
    score.<br />
    Les deux succès du moment en salles d’arcade sont Football et
    Space Invaders, mais la popularité de Football aux USA s’évanouit
    avec la fin de la saison de football américain. Au Japon, le jeu
    Space Invaders est reconnu par le ministère de l’économie comme
    responsable d’une rupture des stocks nationaux de pièces de
    monnaies. Aux USA, on accuse le jeu de provoquer une recrudescence
    de l’absentéisme des élèves en classe.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Atari attaque le marché
    des ordinateurs.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Pour concurrencer Apple, Atari lance les ordinateurs 8-bits Atari
      400 et 800, qui ne sont guère pris au sérieux, le public associant
      Atari au jeu.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Magnavox lance la première
    console de jeu équipée d’un clavier.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Magnavox lance l’Odyssey 2, une console à cartouches munie d’un
      clavier à membrane. En Europe, l'Odyssey 2 est commercialisée sous
      le nom de Video Pac par Philips, mais elle est écrasée par l'Atari
      VCS 2600. La Video Pac est la première console multi-jeu jamais
      vendue en Europe.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Apparition des jeux
    vectoriels.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Cinematronics lance Space Wars, un jeu semblable à Spacewar et
      Computer Space. Le jeu utilise un affichage dit vectoriel, basé sur
      des segments lumineux, plutôt que des pixels (points lumineux),
      utilisés jusque là. On peut considérer qu’il s’agit là du
      premier pas vers un affichage à base de polygones, dont les faces
      seront plus tard munies de textures, animées dans des repères en
      trois dimensions, et aboutiront aux jeux en 3d d’aujourd’hui.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker">&nbsp; </a></p>
  <p align="center" class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4"><b><i><u>1979</u></i></b></font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Les jeux holographiques.</font></u></i></b><font face="Times New Roman" size="4"><br />
    Atari développe Cosmos, une console portable qui utilise des
    hologrammes, c’est à dire des images animées en trois dimensions
    ne nécessitant aucun support (elle s’affichent dans l’air). Les
    hologrammes n’interviennent pas dans le jeu, et ne jouent qu’un
    rôle esthétique. Le jeu ne sera jamais commercialisé.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><i><b><u><font face="Times New Roman" size="4">Atari lance Lunar Lander</font></u></b></i><font face="Times New Roman" size="4"><br />
    Il s’agit du premier d’une série de jeux vectoriels sortis par
    Atari. Le joueur doit aider un module lunaire à alunir en douceur,
    en maîtrisant sa grand inertie de mouvement.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><i><b><u><font face="Times New Roman" size="4">Asteroids succède à Lunar
    Lander.</font></u></b></i><font face="Times New Roman" size="4"><br />
      En dépit de la popularité du jeu, Atari arrête la production de
      Lunar Lander, et se consacre à son nouveau jeu Asteroids. Ce jeu,
      prévu à l’origine pour fonctionner sur la console Cosmos et
      doté de graphismes vectoriels, est l’œuvre d’Ed Logg et Lyle
      Rains. Ce sera le jeu le plus vendu de l’histoire d’Atari, sur
      toutes sortes de supports : jeu d’arcade, cartouche pour VCS (très
      bonne adaptation avec des graphismes pixellisés) et adaptation sur
      différents autres systèmes. Asteroids introduit une nouveauté :
      la possibilité pour celui qui bat le meilleur score d’entrer son
      nom abrégé en trois lettres ! 80000 unités sont vendues aux USA,
      mais le jeu est moins populaire dans les autres pays.</font> <font face="Times New Roman" size="4">Sega, de son côté,
        connaît son premier succès en salles d’arcade avec Monaco GP,
        une course de formule 1 vue de dessus, qui sera suivie d’une
        suite, Pro Monaco GP en 1980, et Super Monaco GP en 1989 avec des
        graphismes en 3d.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">MB (Milton Bradley) lance
    la première console à cartouches portable.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Il s’agit de la console Microvision, équipée d’un affichage à
      LED.<br />
    </font></a></p>
  <p align="center" class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4"><b><i><u>1980</u></i></b></font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Les envahisseurs sont parmi
    nous.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Atari lance une version pour sa console domestique (VCS) de Space
      Invaders, qui bat tout les records de vente et propulse la VCS en
      tête de peloton.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">L’Intellivision de
    Mattel.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Mattel Electronics lance la console Intellivision, premier sérieux
      concurrent de la VCS. L’Intellivision à de meilleures
      possibilité graphiques, pour un prix à peine plus élevé de 299$.
      Mattel promet une ligne de périphériques qui permettront de
      convertir la console en micro-ordinateur.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Exode massive chez Atari.</font></u></i></b><font face="Times New Roman" size="4"><br />
    Plusieurs programmeurs quittent Atari, lassés que leur nom soit
    absent de l’emballage des jeux qu’ils créent (Atari pratique la
    même politique que Walt Disney, tout leurs produits sont
    mentionnés comme des créations d’Atari, sans autre explication),
    et forment Activision, un rival sérieux pour l’équipe de
    développement d’Atari.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">L’armée américaine aime
    les jeux vidéos.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Un designer d’Atari, Ed Rottberg, crée Battlezone, le premier jeu
      en vue subjective 3d de l’histoire, dans lequel le joueur pilote
      un char dans un champ de bataille. Le ministère de la défense
      demande à Atari d’étudier une version améliorée du jeu pour l’entraînement
      de ses soldats.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Arivée de Pac-Man.</font></u></i></b><font face="Times New Roman" size="4"><br />
    Namco lance Pac-Man, le jeu vidéo le plus populaire de tous les
    temps. 300000 unités du jeu d’arcade sont vendus à travers le
    monde, et on peut compter au moins autant de contrefaçons, dont
    100000 rien qu’aux USA. Parmi les faits les plus notables de l’histoire
    de Pac-Man, signalons que c’est le premier jeu à avoir eu du
    succès auprès des femmes, et que le jeu devait s’appeler à l’origine
    Puck-Man, mais fut rebaptisé par craintes des mauvais jeux de mots.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><u><i><font face="Times New Roman" size="4">Sega licence des jeux Atari.</font></i></u></b><font face="Times New Roman" size="4"><br />
    Missile Command, une création d’Atari, est le premier jeu que
    Sega fabrique sous licence.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Débuts de Nintendo of
    America.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Minoru Arakawa, beau-fils du patron de Nintendo Hiroshi Yamauchi
      ouvre Nintendo of America à New York, puis se déplace à Seattle,
      et enfin Washington. Cette filiale américaine du géant Japonais ne
      connaît guère de succès dans ses premières production, des jeux
      électroniques portables.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><u><i><font face="Times New Roman" size="4">Bally abandonne les
    consoles.</font></i></u></b><font face="Times New Roman" size="4"><br />
      Le système Professional Arcade est vendu à Astrovision, qui le
      rebaptise Astrocade.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Un monde virtuel.</font></u></i></b><font face="Times New Roman" size="4"><br />
    Williams, une société basée à Chicago qui produit des flippers,
    lance un jeu d’arcade conçu par Eugene Jarvis nommé Defender, un
    jeu de tir à défilement horizontal qui figure le premier monde
    virtuel cohérent à apparaître dans un jeu vidéo, avec un radar
    qui indique au joueur ce qui se passe hors-champ. Le jeu devient
    rapidement un gros succès.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker">&nbsp; </a></p>
  <p align="center" class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4"><b><i><u>1981</u></i></b></font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><u><i><font face="Times New Roman" size="4">Nintendo joue bien le coup.</font></i></u></b><font face="Times New Roman" size="4"><br />
    A la demande des dirigeants de Nintendo qui en ont marre que la
    société ne décolle pas dans le domaine du jeu vidéo, un jeune
    artiste Japonais nommé Shigeru Moyamoto crée Donkey Kong. Le
    héros, originalement nommé Jumpman, est un charpentier qui doit
    sauver sa petite amie Pauline des mains d’un gorille déchaîné
    qui lui balance des barils d’essence du haut d’un échafaudage.
    Jumpman sera rebaptisé Mario par l’équipe de Nintendo of America,
    en raison de sa moustache qui le fait ressembler au propriétaire
    des locaux où ils travaillent, un certain Mario Segali.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><u><i><font face="Times New Roman" size="4">Des programmeurs d’Atari
    et de Mattel s’unissent.</font></i></u></b><font face="Times New Roman" size="4"><br />
      La société Imagic est fondée par des programmeurs
      démissionnaires d’Atari et de Mattel, qui travaillaient sur la
      VCS et l’Intellivision, et qui encore une fois en ont eu marre que
      personne ne reconnaisse leur travail. Imagic produit des jeux pour
      VCS et Intellivision.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Atari fait fortune avec les
    créations des autres.</font></u></i></b><font face="Times New Roman" size="4"><br />
      En achetant à répétition des licences de jeux d’arcades, comme
      Pac Man, et en les adaptant à la va-vite sur VCS, Atari engrange
      des millions de dollars et invente un nouveau marché.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Des vecteurs colorés.</font></u></i></b><font face="Times New Roman" size="4"><br />
    Atari lance Tempest, un jeu crée par Jeff Minter, qui utilise pour
    la première fois un processeur graphique vectoriel capable d’afficher
    plusieurs couleurs. En raison de l’instabilité matérielle de
    celui-ci, l’expérience s’arrêtera là, mais le jeu est un
    énorme succès</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Première victime d’un
    jeu vidéo.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Un homme meurt d’une crise cardiaque en jouant à Berzerk, un jeu
      d’arcade qui, comme son nom l’indique, met en scène un soldat
      contre une armée de robots dans une action frénétique.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Le règne des jeux d’arcade.</font></u></i></b><font face="Times New Roman" size="4"><br />
    Les jeux d’arcade (tous confondus) réalisent aux USA pour l’année
    1981 des profits estimés à 5 milliards de dollars, un record
    absolu.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Le premier magazine de jeux
    vidéos.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Arnie Katz et Bill Kunkel fondent aux USA le tout premier magazine
      dédié aux jeux vidéos, Electronic Games.<br />
    </font></a></p>
  <hr align="center" />
  <p align="center" class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="5">1982-1984 : Le crash.</font></u></i></b><font face="Times New Roman" size="4"><br />
  </font></a></p>
  <p align="center" class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4"><b><i><u>1982</u></i></b></font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Sortie de la Colecovision.</font></u></i></b><font face="Times New Roman" size="4"><br />
    Coleco lance la Colecovision, une console de jeux à cartouches
    proposant des graphismes et un son largement supérieurs à la
    concurrence, et proches des standards du jeu d’arcade. Coleco
    reçoit le soutien de Nintendo, et peut intégrer dans l’emballage
    de sa console le jeu Donkey Kong, dans une excellente conversion. Le
    jeu est aussi adapté sur VCS et Intellivision dans des versions
    correctes, quoique bien inférieures. Un adaptateur pour cartouches
    VCS est fourni pour la Colecovision (qui fait la colère d’Atari),
    et des accords sont signés avec les Japonais de Sega, Konami, et
    Universal (créateurs du jeu Mr DO !) pour enrichir la ludothèque
    de cette console très prometteuse.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Magnavox et Atari remettent
    ça.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Magnavox lance un jeu pour Odyssey 2 nommé KC Munchkin. Atari les
      attaque aussitôt en justice, déclarant que ce jeu est un clone de
      Pac Man, dont ils possèdent les droits pour une exploitation sur
      console. Magnavox est sommé par le juge de retirer son produit du
      marché.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Un mauvais clone.</font></u></i></b><font face="Times New Roman" size="4"><br />
    Alors que Coleco lance sur le marché des adaptations de jeux d’arcade
    sur console de très bonne qualité, Atari sort sa version de Pac
    Man pour VCS 2600. Mauvaise nouvelle, l’adaptation est une
    horreur. Même si Atari se rattrapera après avec Ms Pac Man, une
    suite beaucoup mieux réalisée, ce faux-pas malheureux entame une
    baisse de crédibilité pour Atari auprès du public.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">E.T téléphone maison.</font></u></i></b><font face="Times New Roman" size="4"><br />
    Atari sort le jeu E.T, inspiré du film de Steven Spielberg.
    Programmé en seulement 6 semaines par Howard Scott Warshaw, le jeu
    est nul, mais Atari compte profiter du succès du film et prend le
    risque de fabriquer autant de cartouches qu’il y a de consoles
    Atari VCS et de clones de cette console en circulation. L’arnaque
    ne prend pas, et des centaines de milliers de cartouches d’E.T et
    de Pac Man finissent dans un entrepôt du Nouveau Mexique, avec d’autres
    jeux invendus. L’image d’Atari se dégrade un peu plus.<br />
    Pendant ce temps, Activision fait un malheur avec ses jeux VCS d’excellente
    qualité, comme Pitfall ou H.E.R.O.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><i><b><u><font face="Times New Roman" size="4">Le super système d’Atari.</font></u></b></i><font face="Times New Roman" size="4"><br />
    Atari lance la VCS 5200, une console plus puissante que la VCS 2600,
    pour concurrencer la Colecovision et l’Intellivision qui marchent
    de mieux en mieux. Basée sur l’architecture des micro-ordinateurs
    Atari 400 et 800, la 5200 présente des jeux beaucoup plus beaux,
    mais qui n’apportent rien en intérêt à ceux de la 2600. De
    plus, elle n’est pas compatible avec les jeux de cette dernière.
    Un adaptateur sortira un peu plus tard, mais il est déjà trop
    tard, la 5200 est un bide. A noter que cette console est livrée
    avec deux joysticks analogiques, devenus depuis un standard, mais
    inadaptés au marché de l’époque.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Les vecteurs arrivent dans
    les foyers.</font></u></i></b><font face="Times New Roman" size="4"><br />
      La General Consumer Electronics (VCE) développe la Vectrex, l’unique
      console de jeu de l’histoire à intégrer des graphismes
      vectoriels. La Vectrex, machine extraordinaire, est équipée d’un
      écran monochrome, de deux joysticks analogiques et d’un jeu
      intégré en série nommé Mine Storm (ou Mine Sweeper selon les
      versions), un clone impressionnant d’Asteroids.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">La Pac-Mania continue.</font></u></i></b><font face="Times New Roman" size="4"><br />
    Midway crée Ms Pac-Man sans faire appel aux développeurs Japonais
    du jeu original. C’est le jeu d’arcade le plus vendu aux USA,
    avec 115000 unités, et Namco développe de son côté Super Pac-Man,
    un jeu très différent de l’original, pour le marché Japonais.
    Des barrettes mémoire contenant des améliorations pour la version
    originale de Pac-Man (modification des graphismes, ajout de nouveaux
    labyrinthes, nouveaux sons…) sont vendues par Namco dans le monde
    entier. Impossible de s’y retrouver dans cet enchevêtrement de
    versions alternatives. L’une d’elles, à destination des USA, «
    américanise » le jeu en remplaçant les fruits avalés par Pac-Man
    par des canettes de Coca Cola et des hamburgers.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Les actions chutent.</font></u></i></b><font face="Times New Roman" size="4"><br />
    Le 7 décembre 1982 est une date importante dans l’histoire des
    jeux vidéos. Atari annonce que les ventes de consoles VCS 2600 et
    5200 cette année n’ont pas atteint les objectifs. Aussitôt, l’action
    de la Warner chute de 32 % ! C’est la première fois que la bourse
    se ressent d’un échec dans le domaine du jeu vidéo, et le crash
    du marché qui va s’ensuivre est mémorable.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker">&nbsp; </a></p>
  <p align="center" class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4"><b><i><u>1983</u></i></b></font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Nouvelle société pour
    Nolan Bushnell.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Bushnell fait son retour sur le marché des jeux vidéos. Il rejoint
      Videa, et rebaptise la société Sente Games, une autre référence
      au jeu de Go (« Sente » signifie cette fois « échec et mat !
      »), qui forme un partenariat avec Midway Games.<br />
      Cette fois, Bushnell échoue, et le seul jeu crée par Sente, Hat
      Trick, un jeu de hockey sur glace, est un bide.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Atari top-secret.</font></u></i></b><font face="Times New Roman" size="4"><br />
    En Mars, Atari annonce un projet au contenu top-secret, baptisé du
    nom de code Falcon Project. Il s’agit en fait de la création d’une
    filiale nommée Ataritel, qui tente de s’introduire sur le marché
    des télécommunications.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><u><i><font face="Times New Roman" size="4">Un dessin animé / jeu
    vidéo.</font></i></u></b><font face="Times New Roman" size="4"><br />
      Cinematronics lance Dragon’s Lair, conçu par Rick Dyer, et basé
      sur un dessin animé de Don Bluth. C’est le premier jeu d’arcade
      à utiliser la technologie laser-disc, pour stocker les séquences
      animées.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Un nouvel ordinateur pour
    Commodore.</font></u></i></b><font face="Times New Roman" size="4"><br />
      La société Commodore lance le Commodore 64, un micro-ordinateur
      peu coûteux mais très performant qui enfonce toutes les consoles
      de jeux du marché avec ses graphismes et ses possibilités sonores,
      en plus de proposer toute la gamme d’applications qu’on peut
      attendre d’un micro. C’est le début d’un grand renversement
      des tendances du marché du jeu vidéo, que les consoles vont
      progressivement quitter au profit des micro-ordinateurs, le nouveau
      produit qui monte. Au cours des années qui vont suivre, une
      multitude de nouveaux micros vont sortir, et aucun ne manquera de
      garnir sa logithèque de jeux afin d’attirer un large public :
      Amstrad, Atari, Commodore, MSX, Oric, Sinclair, Acorn, Apple, IBM et
      bien d’autres encore (même notre Thomson national), sont autant
      de marques qui ont contribué à l’explosion du marché de la
      micro-informatique au cœur de laquelle le jeu vidéo tient une
      place prépondérante.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">La Nintendo Famicom.</font></u></i></b><font face="Times New Roman" size="4"><br />
    Nintendo lance son Family Computer (Famicom) au Japon, une console
    qui a l’apparence d’un jouet, livrée avec les jeux Donkey Kong,
    Donkey Kong Junior et Popeye. Nintendo ne compte pas au départ
    commercialiser la Famicom en dehors du Japon, mais Atari se montre
    intéressé par la vente du produit et des jeux dans les autres
    pays. En Juin les deux compagnies signent un accord dans ce sens.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><i><b><u><font face="Times New Roman" size="4">Comment
    Nichibutsu voit les choses.</font></u></b></i><font face="Times New Roman" size="4"><br />
      La société Nichibutsu, spécialisée dans
      les jeux d'arcade, sort une console nommée My Vision, qui ne
      connait qu'une brève diffusion, limitée au Japon. Equipée du
      même processeur graphique que la Colecovision, elle ne possède pas
      de joypad, mais 14 boutons montés sur la console sur lesquels vient
      se poser un cache plastique fourni avec chaque jeu qui en indique
      les fonctions. Seulement une dizaine de jeux seront produits,
      principalement des jeux de réflexion genre Othello ou Master Mind.<br />
      L'insuccès de cette console est surtout dû
      à la concurrence de la Famicom.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">L’ordinateur de
    Coleco.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Coleco révèle l’Adam, son micro-ordinateur, au CES (Consumer
      Electronics Show) de Juin, et se sert de sa version de Donkey Kong
      pour faire la démonstration. Atari, qui a racheté les droits de
      Donkey Kong à Nintendo, accuse ces derniers de rupture de contrat
      et menace d’arrêter la production de la Famicom. Nintendo se
      retourne contre Coleco, prétextant que les droits acquis sur Donkey
      Kong sur ces derniers ne concernaient qu’une adaptation sur
      Colecovision, et pas sur un micro-ordinateur. Coleco rétorque que l’Adam
      n’est qu’un prolongement de la Colecovision et que la version de
      Donkey Kong est la même pour les deux systèmes !</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Controverse chez Atari.</font></u></i></b><font face="Times New Roman" size="4"><br />
    Le PDG d’Atari Ray Kassar est pris en flagrant délit de
    roublardise par les dirigeants de la Warner qui se sont aperçu que
    celui-ci s’est débarrassé de ses actions Warner moins de 24
    heures avant de faire une annonce des derniers (mauvais) chiffres d’Atari
    qui en a entraîné la baisse !<br />
    La plaisanterie ne fait pas rire la Warner, et Kassar est congédié
    le 6 Septembre. Il est remplacé par James Morgan. L’implication d’Atari
    dans la vente de la Famicom et de ses jeux ne résistera pas à
    cette crise.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Le crash.</font></u></i></b><font face="Times New Roman" size="4"><br />
    Trop de produits sont en concurrence, le marché du jeu vidéo n’a
    plus d’avenir, et bien peu des nombreuses sociétés dont il a
    entraîné la création résistent. Les jeux et les consoles de
    toutes marques sont bradés pour écouler les stocks. L’heure est
    à la micro-informatique, moins limitée que les consoles, qui vont
    temporairement disparaître du marché.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker">&nbsp; </a></p>
  <p align="center" class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4"><b><i><u>1984</u></i></b></font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">La Vectrex arrive après la
    guère.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Milton Bradley commence à distribuer la Vectrex, mais la chute des
      prix généralisée l’oblige à la vendre à perte à 100$ l’unité.
      Cette console qui aurait pu devenir un standard sera finalement
      abandonnée.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Coleco victime d’une rage
    d’Adam.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Dupé par l’expansion du marché des micro-ordinateurs, Coleco
      abandonne la Colecovision et se lance à corps perdu dans la
      distribution de l’Adam, sans expérience dans la
      micro-informatique et de façon précipitée. C’est un désastre,
      60 % des modèles vendus sont défectueux et retournés en garantie,
      ruinant tout espoir d’une carrière pour cette machine pourtant
      très prometteuse.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Mattel revend l’Intellivision.</font></u></i></b><font face="Times New Roman" size="4"><br />
    Arrivée à la fin d’un beau parcours, l’Intellivision est
    revendue par Mattel à un de ses vice-présidents, qui fonde
    Intellivision Inc.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Nintendo croit en l’Amérique.</font></u></i></b><font face="Times New Roman" size="4"><br />
    Alors que le marché du jeu vidéo et des consoles est en déroute,
    Nintendo lance la commercialisation de la Famicom aux USA en Mai.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Atari contre attaque.</font></u></i></b><font face="Times New Roman" size="4"><br />
    Au CES d’été, Atari présente de nouveaux produits. La console
    VCS 7800, encore plus puissante que la 5200 et cette fois compatible
    avec les jeux 2600, et le Mindlink, un système de contrôle de jeu
    à reconnaissance vocale fixé sur la tête du joueur, qui ne sera
    jamais commercialisé.<br />
    Devant les pertes accusées par la société, la Warner veut s’en
    débarrasser, et la revend à Jack Tramiel, l’homme qui à fondé
    Commodore et vient de s’en faire éjecter. Warner Communications
    garde la division arcade, rebaptisée Atari Games, et ferme la
    division Ataritel.<br />
    Tramiel renomme la division micro-informatique qu’il a acquise
    Atari Corporation, et annonce son désir d’arrêter la production
    de consoles de jeux au profit de la création d’un ligne de
    micro-ordinateurs 16-bit, les Atari ST. La 7800 et le Mindlink,
    présentés aux CES, sont mis sur la touche pour une durée
    indéterminée.</font></a></p>
  <p class="Style7">&nbsp;</p>
  <hr align="center" />
  <p align="center" class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="5"><b><i><u>1985-1988 : Les jeux
    vidéos sont de retour. </u></i></b><font size="4"><br />
    </font></font></a></p>
  <p align="center" class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4"><b><i><u>1985</u></i></b></font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><u><i><font face="Times New Roman" size="4">La Famicom arrive enfin en
    Amérique.</font></i></u></b><font face="Times New Roman" size="4"><br />
      Nintendo lance sa console aux US sous le nom de NES (Nintendo
      Entertainment System). Les revendeurs sont si sceptiques sur le
      succès d’une autre console de jeux que Nintendo doit s’engager
      à racheter tous les stocks invendus. Toutefois, grâce à une
      ludothèque bien fournie, et seule sur le marché déserté par les
      autres produits, la NES est un succès inattendu.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Atari s’attaque à Apple.</font></u></i></b><font face="Times New Roman" size="4"><br />
    Après le succès d’Apple avec le Macintosh, Tramiel défie la
    société de Steve Jobs en lançant l’Atari 520 ST, basé sur le
    microprocesseur Motorola 68000 (comme le Mac), surnommé par les
    employés d’Atari Corp. le « Jackintosh » tant il ressemble à
    son concurrent.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">L’URSS conquiert le monde
    avec un seul jeu.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Le programmeur Russe Alexei Pazhitnov crée Tetris, un jeu simple
      mais impossible à quitter dès lors qu’on a commencé à y jouer.
      Le jeu tourne sur un IBM PC, dans une version programmée par
      Pazhitnov et Vadim Gerasimov.<br />
    </font></a></p>
  <p align="center" class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4"><b><i><u>1986</u></i></b></font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Nintendo persiste.</font></u></i></b><font face="Times New Roman" size="4"><br />
    Encouragé par les premiers résultats de la NES aux USA, Nintendo
    agrandit la distribution de sa console aux USA. La console est
    livrée avec le jeu Super Mario Bros, une conversion d’un jeu d’arcade
    mettant en vedette le héros de Donkey Kong qui a eu un gros
    succès.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Sega entre en scène.</font></u></i></b><font face="Times New Roman" size="4"><br />
    Après le succès de la NES, Sega lance sa console, la SMS (Sega
    Master System) aux USA. La console récupère le hardware 8-bit du
    MSX, un standard micro-informatique développé en partenariat par
    Microsoft et des constructeurs Japonais, qui a connu un joli succès
    au Japon et en Europe.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Atari change d’avis.</font></u></i></b><font face="Times New Roman" size="4"><br />
    Ayant remarqué que les consoles sont en train de faire leur retour,
    Atari décide finalement de sortir la console Atari VCS 7800.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><i><b><u><font face="Times New Roman" size="4">Bonne nouvelles pour
    Nintendo.</font></u></b></i><font face="Times New Roman" size="4"><br />
      Nintendo fait 10 fois plus de profits que son premier concurrent,
      Sega. Au Japon, un lecteur de disquettes pour NES est
      commercialisé, ainsi que des hits tels Legend of Zelda (chef
      d'oeuvre de Shigeru Miyamoto, déjà créateur de Donkey Kong et
      Mario Bros), Nintendo Golf ou Nintendo Soccer.<br />
      Des sociétés qui ont auparavant travaillé pour Atari en
      développant des jeux VCS rejoignent les rangs de Nintendo. Namco
      produit également des adaptations pour la console de ses hits en
      salle d’arcade.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker">&nbsp; </a></p>
  <p align="center" class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4"><b><u><i>1987</i></u></b></font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Nouveautés.</font></u></i></b><font face="Times New Roman" size="4"><br />
    La main-mise de Nintendo sur le marché s’intensifie, et Sega et
    Atari perdent du terrain. Ce dernier sort de nouveaux jeux pour VCS
    2600 dans l’indifférence generale, ainsi que des versions 7800
    des classiques de Namco, Galaga et Dig Dug et de Williams avec les
    jeux Robotron : 2084 et Joust, ainsi que des adaptations du jeu de
    basket One-on-one Basketball (d’Electronic Arts) et des versions
    de ses propres classiques Centipede et Asteroids.</font> <font face="Times New Roman" size="4">Nintendo sort The Legend of
      Zelda en cartouche aux USA, après avoir décidé de ne pas exporter
      le coûteux lecteur de disquettes en dehors du Japon. Des jeux comme
      Kid Icarus et Metroid proposent des graphismes supérieurs et une
      durée de vie plus importante à la moyenne des jeux pour consoles
      de l’époque.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Tonka distribue des jeux
    Sega.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Le géant Japonais du jouet métallique prend en charge la
      distribution US des jeux pour Sega Master System, les rendant
      disponibles dans un plus large panel de points de vente, afin de
      lutter à armes égales contre Nintendo.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><u><i><font face="Times New Roman" size="4">Atari transforme un
    micro-ordinateur en console.</font></i></u></b><font face="Times New Roman" size="4"><br />
      Atari lance l’Atari XE Game System (XEGS), qui cache en son sein
      le micro-ordinateur Atari 800 XL sous l’apparence d’une console
      de jeu. Le XEGS peut utiliser les cartouches sorties pour ce micro
      qui arrive en fin de carrière, et elle est livrée avec deux jeux,
      Barnyard Blaster et Flight Simulator II, un pistolet optique et un
      clavier adaptable. Le XEGS ne fera qu’une brève apparition sur le
      marché, comme tous les produits de type « du neuf avec du vieux »
      lancés par Atari à l’initiative de Jack Tramiel pour alimenter
      en dollars le développement de l’Atari ST.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">NEC lance une console
    16-bit au Japon.</font></u></i></b><font face="Times New Roman" size="4"><br />
      La NEC PC-Engine, vendue comme une console 16-bit, n’a de 16-bit
      que son processeur graphique. Cependant, les premières photos de
      jeux qu’elle propose font forte impression.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker">&nbsp; </a></p>
  <p align="center" class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4"><b><u><i>1988</i></u></b></font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Atari sort des jeux pour
    NES.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Incapable de faire à face à la concurrence de Nintendo avec ses
      consoles réchauffées, Atari lance le label Tengen, une filiale
      dédiée au développement de jeux pour consoles, qui se spécialise
      rapidement sur la NES. La collaboration entre les deux compagnies
      finira par un procès, Atari attaquant Nintendo pour violation de la
      loi anti-trust, déclarant que le géant Japonais s’est rendu
      coupable de pratiques frauduleuses pour asseoir son monopole, comme
      l’obligation de payer des droits à Nintendo pour publier un jeu
      NES. (Il faut dire qu’Atari avait été victime des mêmes
      attaques à l’époque de la suprématie de la VCS 2600 par Coleco).<br />
      Tengen annoncera plus tard son intention de développer des jeux NES
      et de les distribuer aux USA sans la bénédiction de Nintendo.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Faillite de Coleco.</font></u></i></b><font face="Times New Roman" size="4"><br />
    Après plus de cinquante ans d’existence, Coleco dépose son bilan
    après le bide de l’Adam. Son catalogue est en partie racheté par
    Milton Bradley.</font></a></p>
  <p class="Style7">&nbsp;</p>
  <hr align="center" />
  <p align="center" class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="5">1989-1992 : Expansion du
    marché.</font></u></i></b><font face="Times New Roman" size="4"><br />
    </font></a></p>
  <p align="center" class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4"><b><i><u>1989</u></i></b></font></a></p>
  <p align="left" class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">L’affaire
    Tetris.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Tengen fait l’acquisition des droits sur Tetris et commence à
      vendre la cartouche pour NES. Il s’avère en fait que Tengen à
      acheté les droits à Mirrorsoft, qui se les était appropriés
      frauduleusement. Après une écœurante lutte juridique entre Atari,
      Nintendo, Mirrorsoft et Elorg (la société Russe qui protège les
      droits des créateurs de Tetris), placée sous le signe du mensonge
      et de l’avidité, c’est Nintendo qui sort une fois de plus grand
      vainqueur de l’histoire, désigné par un tribunal américain seul
      détenteur des droits d’un jeu qui, rappelons-le, est l’invention
      d’un Russe (à qui personne n’a demandé son avis). La cartouche
      Tengen est retirée du marché, et se voit remplacée par la version
      développée par BulletProof Software, avec la bénédiction de
      Nintendo. Aujourd’hui, les collectionneurs recherchent avidement
      la version Tengen dont les exemplaires fabriqués, stockés dans un
      hangar, auraient été détruits par une tornade.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">La Game Boy arrive.</font></u></i></b><font face="Times New Roman" size="4"><br />
    Nintendo lance sa mini console portable à cartouches, équipée d’un
    écran LCD monochrome et vendue 109$, ce qui en fait le système le
    moins cher du marché, tout en proposant un catalogues fourni de
    bons jeux (eux aussi beaucoup moins chers que ceux des autres
    systèmes), qui, avec l’excellente autonomie de la console qui n’utilise
    que quatre piles, vont contribuer à en faire un autre record
    mondial de ventes pour Nintendo. La console est en plus vendue avec
    Tetris, ce qui ne gâte rien.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">La console NEC PC Engine
    est lancée en Amérique.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Elle s’appellera dans le nouveau monde Turbo Grafx-16, vendue au
      prix de 189$. NEC commercialise également un lecteur de CD-ROM pour
      sa console, un des premiers de la sorte</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><i><b><u><font face="Times New Roman" size="4">Sega lance la Genesis.</font></u></b></i><font face="Times New Roman" size="4"><br />
    La console 16-bit de Sega, nommée Genesis (ou Megadrive en Europe),
    arrive aux USA après un lancement au Japon qui n’a été qu’un
    demi-succès. Le système est vendu 250$, avec le jeu Altered Beast.
    Le marketing de la console insiste sur sa puissance largement
    supérieure à celle de ses consurrents, à commencer par la NES.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Atari lance la Lynx.</font></u></i></b><font face="Times New Roman" size="4"><br />
    La société Epyx, spécialisée dans le développement de jeux pour
    Commodore 64 (Summer Games, Winter Games, Impossible Mission…)
    présente une console portable à affichage LCD couleur au CES d’hiver.
    Atari rachète les droits de la machine, et la commercialise sous le
    nom de Lynx. D’excellents jeux crées par Epyx constituent le
    catalogue de base de la Lynx, auxquels viennent s’ajouter des
    conversions d’anciens hits d’Atari. Plus chère que la Game Boy
    mais plus performante, la Lynx aurait pu être un succès mais
    souffrira toute sa carrière du manque de développeurs intéressés
    par la création de jeux sur ce support et des constantes rumeurs de
    faillite d’Atari, pourtant bien relancé par le succès du 520 ST.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker">&nbsp; </a></p>
  <p align="center" class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4"><b><i><u>1990</u></i></b></font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Bonne année pour Nintendo.</font></u></i></b><font face="Times New Roman" size="4"><br />
    Super Mario 3, sur NES, devient la cartouche de jeu la plus vendue
    au monde. Malgré la concurrence de la Genesis et de la
    Turbografx-16, la NES est dans sa meilleure année. Nintendo Japon
    présente la Super Famicom, une console 16-bits qui surpasse en
    puissance celles de NEC et Sega, ainsi qu’un premier jeu, Super
    Mario 4, et la console s’arrache rapidement au Japon.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Dispute sur les locations
    de cartouches.</font></u></i></b><font face="Times New Roman" size="4"><br />
      a société Blockbuster, une chaîne de vidéo-clubs, propose en
      location des jeux NES dans ses magasins. Nintendo l’attaque en
      justice, prétendant que cela lui fait perdre des ventes, mais le
      tribunal lui donne tort. Nintendo fera quelques semaines plus tard
      un autre procès, cette fois sur la reproduction des manuels d’instruction
      des jeux par Blockbuster, et cette fois gagnera.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">La Neo-Geo.</font></u></i></b><font face="Times New Roman" size="4"><br />
    SNK, société Japonaise qui a longtemps développé des jeux pour
    Nintendo, comme Ikari Warriors et Crystalis, lance une console
    16-bits, la Neo-Geo, dont la puissance est égale à celle des
    machines d’arcades. Du reste, la Neo-Geo est aussi vendue sous
    forme de jeu d’arcade proposant plusieurs jeux. La Neo-Geo est un
    produit incroyable qui fait passer les machines de Sega, Nintendo et
    NEC pour des antiquités, mais son prix, 399$, et le prix déplacé
    de ces jeux, également 400$ en moyenne, l’empêcheront de percer
    (mais pas de devenir une légende).</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><i><b><u><font face="Times New Roman" size="4">Les jeux d’arcade de Sega
    continuent à entrer dans les foyers.</font></u></b></i><font face="Times New Roman" size="4"><br />
      Sega continue à adapter avec succès ses jeux d’arcade
      spectaculaires sur sa console. Afterburner, Space Harrier, E-Swat et
      d’autres hits se vendent plutôt bien, ainsi que des adaptations
      des hits de la société Japonaise Capcom, comme Strider, qui est
      élu jeu de l’année par la presse spécialisée.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">NEC lance la Turbografx-16
    portable.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Elle coûte 300$, et peut faire tourner tous les jeux NEC, affichés
      sur un petit écran LCD couleur.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Le Commodore CDTV.</font></u></i></b><font face="Times New Roman" size="4"><br />
    Commodore annonce son CDTV (Commodore Dynamic Total Vision), à la
    base un Amiga équipé d’un lecteur de CD-ROM, qui est la
    première console de jeu à vocation autant éducative que ludique.
    Les jeux sont vendus sur CD, un support moins coûteux que la
    cartouche.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker">&nbsp; </a></p>
  <p align="center" class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4"><b><i><u>1991</u></i></b></font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Nintendo lance la SuperNES
    dans le monde entier.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Elle coûte 250$, et s’appellera Super Famicom aux USA, et
      SuperNES en Europe. Beaucoup craignent que les possesseurs de NES ne
      fassent pas l’investissement d’une nouvelle console, surtout
      dans la mesure ou la NES marche encore très fort et Nintendo
      annonce des titres comme Mario ou Zelda qui font figure de redite.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Arrivée de Sonic.</font></u></i></b><font face="Times New Roman" size="4"><br />
    Le hérisson Sonic the Hedgehog fait l’objet d’un jeu de
    plate-forme très rapide et superbe, qui, Sega l’espère, va
    supplanter Mario dans l’esprit des joueurs. Le jeu est un joli
    succès, mais Nintendo ne s’y intéresse pas, et le jeu ne sera
    jamais adapté sur NES ou SuperNES.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Le malin génie de Nintendo.</font></u></i></b><font face="Times New Roman" size="4"><br />
    La société Galoob Toys lance le Game Genie, une cartouche qui
    permet de tricher aux jeux NES. Chez Nintendo, on est furieux que ce
    produit qui réduit la durée de vie des jeux soit en vente, mais le
    géant Japonais n’arrivera jamais à en faire cesser la
    commercialisation.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Street Fighter II.</font></u></i></b><font face="Times New Roman" size="4"><br />
    Capcom lance un nouveau phénomène avec ce jeu de combat qui casse
    la baraque en salles d’arcade. Les gamins font la queue pour y
    jouer dans le monde entier, et il n’est pas rare de voir une
    dizaine d’exemplaires du jeu dans certaines salles. La hausse de
    fréquentation des salles d’arcades entraînée par ce seul jeu
    permet l’ouverture de nombreuses enseignes, et la création de
    jeux toujours plus perfectionnés, les gérants n’étant plus
    aussi rétifs devant leur coût élevé.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><u><i><font face="Times New Roman" size="4">La Panther d’Atari.</font></i></u></b><font face="Times New Roman" size="4"><br />
    Atari annonce une console 32-bit nommée Panther pour concurrencer
    Sega et Nintendo.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker">&nbsp; </a></p>
  <p align="center" class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4"><b><i><u>1992</u></i></b></font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">La Genesis prend des
    forces.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Bien qu’étant sous contrat avec Nintendo, le développeurs Konami
      et Capcom sont en pourparlers avec Sega pour la création de jeux
      pour Genesis. Ils finiront par sortir quelques titres, mais
      réserveront toujours leurs meilleures équipes de développement à
      Nintendo. Sega lance Sonic 2, à l’occasion des grandes vacances,
      qui fait un carton.<br />
      Plus tard, la Sega CD est lancée, vendue 300$, sort, mais le
      lecteur de CD-ROM dont elle dispose, mal développé, ne permet pas
      l’apport de jeux révolutionnaires. Seuls quelques films
      interactifs exploiteront le support, mais ne connaîtront pas le
      succès.<br />
      Au Japon, JVC lance la Wondermega, une console fabriquée sous
      licence Sega et vendue 620$, qui combine l’utilisation du CD et
      des cartouches pour Megadrive.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Nintendo divorce de Sony et
    épouse Philips.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Le lecteur de CD pour SuperNES, fabriqué par Sony pour Nintendo,
      est abandonné par ce dernier. Nintendo lui préfère Philips, qui
      vient de sortir le CD-I (Compact Disc Interactive) une console
      multimédia utilisant le support CD aussi bien pour des jeux que
      pour de la vidéo, et demande au géant Néerlandais de travailler
      sur un lecteur de CD-ROM pour SuperNES capable de lire les jeux
      prévus sur CD-I et de les faire fonctionner sur la console.<br />
      Sony récupère ses prototypes, dont le nom initialement prévu
      était « SuperNES Play-Station », et décide de se venger de la
      traîtrise de Nintendo en lançant une console 32-bit basée sur ce
      lecteur qui écraserait la SuperNES.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Lancement de la 3DO.</font></u></i></b><font face="Times New Roman" size="4"><br />
    3DO, une compagnie créée par Trip Hawkins, fondateur d’Electronic
    Arts, annonce une console 32-bit qui reçoit le soutien de Panasonic,
    Time-Warner et MCA. 3DO n’à pas l’intention de fabriquer cette
    console en série dans ses ateliers. Hawkins rêve que sa console
    devienne un standard adopté par toutes les marques.<br />
  </font></a></p>
  <hr align="center" />
  <p align="center" class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="5">1993-1997 : L’ère des
    consoles 32-bits.</font></u></i></b></a></p>
  <p align="center" class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">1993</font></u></i></b></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Panasonic distribue la 3DO.</font></u></i></b><font face="Times New Roman" size="4"><br />
    Elle est vendue au prix exagéré de 699$, avant que toute
    concurrence sur le marché des 32-bit n’ait imposé un prix
    généralisé, ce qui lui nuit beaucoup en dépit de sa puissance
    très intéressante.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Atari lance la Jaguar.</font></u></i></b><font face="Times New Roman" size="4"><br />
    Atari décide de sauter une étape en lançant directement une
    console 64-bit. Le projet Panther est abandonné, et la Jaguar
    arrive en magasins. En réalité, elle utilise deux processeurs
    32-bit, et non pas un 64-bit, ce qui est très différent. La Jaguar
    est entièrement fabriquée et conçue en Amérique, ce dont Atari
    se montre très fier.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">De nouvelles consoles Sega
    et Nintendo.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Nintendo et Sega annoncent la nouvelle génération de leur gamme.
      La Sega Saturn sera une console 32/64-bit, et le projet Nintendo,
      encore flou, est une console nommée Reality développée par
      Silicon Graphics.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">La violence dans les jeux
    montrée du doigt.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Williams lance dans les salles d’arcade Mortal Kombat, le pendant
      politiquement incorrect de Street Fighter II, ou la violence est
      montrée de façon très graphique et le sang coule à flots. Le jeu
      est un gros hit, mais choque beaucoup de monde avec ses « Finish
      him ! » et ses fatalités qui permettent au joueur de décapiter ou
      éventrer son prochain. Deux sénateurs américains, Joseph
      Liebermann (Connecticut) et Herbert Kohl (Wisconsin), lancent une
      enquête sur la violence dans les jeux vidéos, qui aboutit à un
      système de classement des jeux vidéos par catégorie d’âge
      préconisée, notifié clairement sur l’emballage du jeu.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker">&nbsp; </a></p>
  <p align="center" class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4"><b><i><u>1994</u></i></b></font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">L’ESRB est établi aux
    USA.</font></u></i></b><font face="Times New Roman" size="4"><br />
      L’Entertainement Software Rating Board (ESRB), est un système de
      classement des jeux dans des catégories symbolisées par des
      lettres, en fonction de leur violence ou de leur caractère
      érotique, inscrit sur de larges étiquettes ornant la boîte du
      jeu.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Nintendo met le paquet sur
    sa 16-bit.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Nintendo sort des jeux marquants pour donner un coup de pouce à la
      SuperNES qui ne connaît pas la même domination que la NES sur ses
      homologues, tels que Super Metroid ou StarFox. Le jeu Donkey Kong
      Country, qui marque le retour du grand singe parmi les produits les
      plus en vue de la marque, est présenté lors d’un salon. Ce jeu,
      de loin le meilleur qu’on ait vu à ce stade tourner sur SuperNES,
      est supposé démontrer que malgré son processeur moins puissant
      que ceux des 3DO et Jaguar, la SuperNES a de grosses capacités. Le
      jeu sera un gros succès, et marquera le dépassement de la Genesis
      par la SuperNES.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">La Genesis à l’heure du
    32-bit.</font></u></i></b><font face="Times New Roman" size="4"><br />
      On ne sait pas vraiment ce qu’une technologie 32-bit, 32/64-bit ou
      64-bit peut apporter en terme de qualité des jeux, mais toujours
      est-il que les constructeurs se livrent à une course effrénée à
      la puissance processeur. Sega sort le 32X (180$), un périphérique
      qui permet à la Genesis d’utiliser des cartouches 32-bit, afin de
      la mettre au niveau des 3DO et Jaguar. Ces jeux sont des adaptations
      de jeux d’arcade, comme Virtua Racing ou Star Wars, et obtiennent
      un bon succès, ainsi qu’une conversion de Doom d’Id Software,
      un jeu sorti sur PC qui fait figure de véritable révolution. Ces
      jeux et ce périphérique sont développés par Sega of America, et
      nul ne sait si la compagnie a l’intention de les sortir au Japon.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Sortie de la Super Game
    Boy.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Vendue 60$, la Super Game Boy est un adaptateur pour SuperNES
      permettant de jouer aux jeux Game Boy sur cette dernière, avec un
      affichage en couleur sur une télé.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">De nouvelles consoles
    sortent au Japon.</font></u></i></b><font face="Times New Roman" size="4"><br />
      La Sega Saturn et la Sony Playstation arrivent au Japon, et il ne
      faut pas plus de quelques semaines (et un simple coup d’œil sur
      les jeux) pour que tout le monde dise que la Playstation est plus
      puissante.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker">&nbsp; </a></p>
  <p align="center" class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4"><b><i><u>1995</u></i></b></font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Sega, c’est plus fort que…..</font></u></i></b><font face="Times New Roman" size="4"><br />
    Sega annonce que la Saturn sortira aux USA le 2 Septembre, mais
    finalement craque et sort sa console dès le mois de Mai, pour
    prendre un peu d’avance sur la Playstation. La console est vendue
    400$. Les développeurs de jeux sont pris de cours, et la console
    est lâchée dans la nature sans un catalogue de jeux suffisant.
    Toutes les Saturn sont en démonstration dans les magasins avec le
    même sempiternel Panzer Dragoon, ce qui rappèle les innombrables
    systèmes lancés dans les années 80 sans logithèque. Ca commence
    mal pour la Saturn qui se vend d’emblée au dessous des
    prévisions.<br />
    On parle d’un partenariat entre Sega et 3DO pour la 3DO M2, une
    console 64-bit qui doit succéder à la 3DO (qui n’a pas si mal
    marché), mais le deal ne se fera jamais, tout en provoquant des
    rumeurs de nouvelle console qui porteront un coup fatal aux ventes
    de 3DO. La technologie M2 finira par être achetée par Panasonic
    pour 100 millions de $ et n’aboutira à la sortie d’aucune
    console.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Nintendo annonce la Virtual
    Boy.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Il s’agira d’une console portable 32-bits aux capacités
      supérieures à celles de la SuperNES, qui offrira aussi les
      avantages qui ont fait le succès de la Game Boy, pour un prix de
      180$.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">La Playstation sort aux
    USA.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Sony lance la Playstation aux USA, vendu 300$, soit 100$ de moins
      que la Saturn et le prix annoncé initialement, sans jeu inclus et
      avec un seul joypad. Les ventes sont d’emblée excellentes, et le
      catalogue de jeux est fourni d’excellents titres.<br />
      Les ventes de la Jaguar, déjà insuffisante, s’effondrent,
      malgré la sortie d’un périphérique CD. Les exécutifs d’Atari
      classent déjà la console parmi les nombreux échecs de la
      compagnie et de tarderont pas à la laisser tomber, avec tous ceux
      qui en acheté une.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">La nouvelle Nintendo
    révélée aux USA.</font></u></i></b><font face="Times New Roman" size="4"><br />
      La sortie de la console 64-bits de Nintendo, sans cesse repoussée,
      fait courir des rumeurs plutôt malsaines pour Nintendo. L’Ultra
      64 (ou N64), c’est son nouveau nom, serait moins puissante que la
      Playstation malgré ses 64-bits, et le choix du support des jeux sur
      cartouches serait une erreur dont Nintendo aurait pris conscience
      trop tard. Les cartouches sont en effet beaucoup plus chères à
      produire que les CD à cause des unités de mémoires qu’elles
      contiennent, et comme les jeux seraient vendus à un prix
      équivalent à ceux de la Playstation, ils représenteraient un
      bénéfice bien moindre.<br />
      Finalement, la console est dévoilée en Mars, et le jeu Super Mario
      64, en 3d, fait forte impression, même si des rumeurs persistent
      selon lesquelles très peu de jeux sont prévus pour la console.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Mort du 32X et de la SegaCD.</font></u></i></b><font face="Times New Roman" size="4"><br />
    Par crainte de créer la confusion avec une gamme trop large de
    produits différents et incompatibles, Sega laisse tomber le 32X, la
    Sega CD, et un projet appelé Neptune, une console qui devait être
    capable d’utiliser tous les jeux Sega quelque soit leur format.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Carton (provisoire) de la
    N64 au Japon.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Au Japon, Nintendo bénéficie toujours d’une confiance aveugle de
      ses fans, la N64 est très attendue. Des centaines de milliers d’unités
      sont fabriquées, et à la sortie de la console, les ventes sont
      largement conforme aux espoirs de la compagnie dans un premier
      temps, mais ralentissent après quelques semaines. L’explication
      est simple : manque de jeux disponibles, et confirmation des
      rumeurs.<br />
    </font></a></p>
  <p align="center" class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4"><b><i><u>1996</u></i></b></font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Baisse du prix des
    consoles.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Sony, qui fait un carton avec la Playstation, fait tellement de
      bénéfices sur les ventes de jeux qu’il peut se permettre de
      baisser le prix de sa console à 199$, tout en annonçant une grande
      variété de nouveaux produits. Sega est obligé de s’aligner sur
      cette baisse, qui nuit encore à la rentabilité de la Saturn,
      déjà bien faible. Des rumeurs disent que Sega serait sur le point
      de laisser tomber la fabrication de consoles et se concentrerait sur
      les jeux d’arcade et leur adaptation sur différent systèmes,
      comme le PC, qui après s’être imposé (sous l’impulsion de
      Microsoft) comme le standard en micro-informatique (avec le
      Macintosh d’Apple), est en train de devenir une machine de jeux
      redoutable grâce au Pentium, ligne de processeurs toujours plus
      puissants produits par Intel, qui met ses capacités en matière de
      jeux au niveaux des consoles 32 et 64-bits.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">De nouveaux jeux d’arcade.</font></u></i></b><font face="Times New Roman" size="4"><br />
    Sega lance Virtua Fighter 3 au Japon et aux USA, qui propose des
    graphismes en 3d jamais vus ailleurs. Une version Saturn est
    immédiatement annoncée.<br />
    Dans les salles d’arcade, la nouvelle mode est aux jeux de
    simulations : Ski, snowboard (surf des neiges), jetski, moto,
    voiture de course ou de rallye, vélo, voire des véhicules
    imaginaires comme cette machine volante à pédales aperçue dans
    certaines salles, permettent au joueur d’utiliser des dispositifs
    de commande révolutionnaires qu’on ne verra jamais dans les
    foyers, montés sur des systèmes animés par vérins, et proposant
    des conditions de jeu d’un réalisme total. Sega et Namco sont les
    deux grands noms de ce marché, qui envoie à la casse le jeu d’arcade
    traditionnel, devenu obsolète depuis que les consoles offrent des
    graphismes équivalents. Peu à peu, jouer à un jeu d’arcade s’apparente
    de plus en plus à faire un tour de manège, et les sensations
    physiques font partie des nouvelles exigences des joueurs, la palme
    dans ce domaine revenant à Sega et son G-Lock 360, un simulateur d’avion
    de combat dans la lignée d’Afterburner, équipé d’un siège
    monté sur une structure sphérique pouvant tourner sur 360° ! Les
    sensations procurées par l’engin (note de votre serviteur : j’ai
    essayé) sont si monstrueuses que bien peu s’y frotteront, et le
    G-Lock 360 sera vite remplacé par une version plus sage où le
    siège ne bouge que sur deux axes horizontaux.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Premier résultats
    officiels de la Saturn.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Sega annonce que les ventes Japonaises sont bonnes, mais les ventes
      aux USA et en Europe sont très décevantes. Au banc des accusés :
      le manque de jeux disponibles.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Nintendo accuse des pertes.</font></u></i></b><font face="Times New Roman" size="4"><br />
    Le géant Japonais annonce la vente de sa milliardième cartouche,
    en même temps, et c’est plus important, que des pertes lourdes
    causées par les méventes (relatives) de N64. Acclaim, développeur
    de jeu préféré de Nintendo (Turok, NBA Jam, l’adaptation de
    Mortal Kombat) et ex-chouchou de Wall Street, s’associe à ces
    mauvais résultats.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Fin d’Atari.</font></u></i></b><font face="Times New Roman" size="4"><br />
    Une page de l’histoire des jeux vidéo est tournée, Atari est
    racheté par JTS, un fabriquant de disques durs, et annonce la fin
    de la Jaguar, confirmant les rumeurs qui circulaient depuis des
    mois.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><i><b><u><font face="Times New Roman" size="4">La Nintendo Atlantis.</font></u></b></i><font face="Times New Roman" size="4"><br />
    Encore un projet de console 32-bit portable pour Nintendo, basée
    sur la technologie RISC (le nouveau mot à la mode), développée en
    sous-traitance par une société Européenne. L’Atlantis ne verra
    jamais le jour.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Nolan Bushnell is back !</font></u></i></b><font face="Times New Roman" size="4"><br />
    Le fondateur d’Atari, père des jeux d’arcade et du jeu vidéo
    moderne, refait surface (il a 55 ans) avec Aristo, énième
    société qu’il monte, spécialisée dans les terminaux Internet /
    PC à usage des cybercafés.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><i><b><u><font face="Times New Roman" size="4">Sortie US de la N64.</font></u></b></i><font face="Times New Roman" size="4"><br />
    A sa sortie aux USA, la N64 se vend à 1.7 millions d’exemplaires
    en trois mois. Devant ce succès, les développeurs se mettent enfin
    au travail pour étoffer la ludothèque de la console qui va pouvoir
    s’envoler vers le succès.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><u><i><font face="Times New Roman" size="4">Tout va bien pour Sony.</font></i></u></b><font face="Times New Roman" size="4"><br />
    La Playstation rapporte 12 millions de $ par jour à Sony jusqu’aux
    fêtes de Noël, où elle est la star incontestée. Pour un coup d’essai
    dans le domaine des jeux vidéos, c’est un coup de maître, et
    Nintendo doit se mordre les doigts d’avoir laissé tomber cette
    console qui, rappelons-le, était à l’origine un simple lecteur
    de CD-ROM pour Super NES.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Un musée du jeu vidéo.</font></u></i></b><font face="Times New Roman" size="4"><br />
    Videotopia, un musée retraçant l’histoire des jeux vidéos, s’ouvre
    à Pittsburgh, Pennsylvanie au Carnegie Science Center le 15 Juin.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Mort de la Virtual Boy.</font></u></i></b><font face="Times New Roman" size="4"><br />
    La console portable de Nintendo est abandonnée, suite à de très
    faibles ventes au Japon. Nintendo attribue cet échec au concepteur
    de la machine, Gunpei Yokoi, 55 ans, à qui on devait déjà la Game
    Boy. Yokoi quitte Nintendo en disgrâce et fonde sa propre
    société.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker">&nbsp; </a></p>
  <p align="center" class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4"><b><i><u>1997</u></i></b></font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Nintendo et Sony commencent
    bien l’année.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Début 1997, Sony annonce qu’il y a 3.2 millions de Playstation
      utilisées aux USA, dont un tiers s’est vendu à Noël 96.
      Nintendo, de son côté, annonce 2.5 millions de N64 pour les USA,
      chiffre qui selon eux aurait pu être plus élevé si les stocks
      avaient été suffisants.<br />
      En Avril, les chiffres mondiaux de la Playstation sont révélés. 5
      millions d’unités au Japon, 4 millions aux USA, et 2.2 millions
      en Europe, tous ces chiffres étant pratiquement doublés 4 mois
      plus tard, le total atteignant 20 millions de machines vendues à
      travers le monde. Il s’agit de la console la plus populaire de
      tous les temps, devant le VCS d’Atari qui détenait le record. Les
      analystes pensent que la console se vendra encore jusqu’à fin-98.
      (En réalité, fin 2000, on la trouve encore en vente).<br />
      En Juillet, Sony lance le Yaroze, un système seulement disponible
      aux USA pour 750$, qui permet de jouer aux jeux Playstation sur un
      compatible PC. En Europe, un tel système serait illégal sans l’accord
      de Sony, mais pas aux USA.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Nintendo lance une «
    nouvelle » console.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Nintendo surprend tout le monde en sortant aux USA une version
      compacte de la SuperNES, dont les jeux se vendent toujours, vendue
      100$.<br />
      Parallèlement, la sortie du jeu le plus attendu pour la N64, Legend
      of Zelda 64, est enfin annoncé. Le jeu doit d’abord sortir en
      CD-ROM, en même temps qu’un lecteur de CD-ROM adaptable sur la
      console appelé le 64DD, mais le jeu sort d’abord en cartouche.
      Nintendo annonce la sortie du 64DD pour fin 97, puis quelques
      semaines plus tard repousse cette sortie à Mars 98, puis Juin 98.<br />
      En Europe, la CEE vote de nouvelles lois qui changent radicalement
      la politique de Nintendo. Auparavant, les développeurs qui
      travaillaient pour Nintendo devaient ne développer que pour les
      consoles Nintendo, et chaque jeu devait porter le label Nintendo.
      Ces clauses notifiées sur contrat sont désormais illégales en
      Europe.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Peut-être une nouvelle
    console Sega.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Les analystes prédisent que Sega va sortir une console 64-bits,
      pour faire oublier l’échec de la Saturn, qui serait équipée d’un
      modem, d’un lecteur de CD-ROM 8x, et beaucoup plus puissante que
      la Playstation et la N64. Sega dément ces rumeurs, même elles s’avèreront
      être fondées. Lockheed Martin a soumis plusieurs plans de consoles
      l’année précédente, mais c’est un système développé par
      Sega qui est retenu. Son nom de code est Black-Belt, et elle
      utilisera une carte 3dFX-2 pour l’affichage, un nouveau processeur
      SH-4 d’Hitachi, cadencé à 200 Mhz, et un lecteur de CD qui ne
      lira pas les DVD.<br />
      La Black Belt est entièrement développé au sein de Sega of
      America, qui travaille aussi sur un successeur possible de la Saturn,
      appelé Dural, qui lui utilise un processeur graphique PowerVR, le
      concurrent de 3dFX, ce qui provoquera un procès de ces derniers
      pour rupture de contrat.<br />
      Avant la fin de l’année, la Dural est rebaptisée Katana, et Sega
      prévoit de la sortir aux USA en Octobre 1998, au prix de 199$.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Des rumeurs sur une
    nouvelle console Sony.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Les rumeurs viennent de certains employés de chez Sony. Une
      nouvelle console 64-bits serait à l’étude, équipée de plus de
      RAM que la Playstation, d’un chip R4000 et d’un lecteur de
      DVD-ROM quadruple vitesse. Cette console serait compatible avec les
      jeux Playstation. Sans confirmer les rumeurs sur le hardware, Sony
      annonce la Playstation 2 pour fin 1998.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">La guerre des prix.</font></u></i></b><font face="Times New Roman" size="4"><br />
    Nintendo Japon annonce le 21 Février une baisse du prix de la N64,
    à 137$ (au Japon). Le 27, Sony suit et annonce que le prix de la
    Playstation descend à 200$ en Angleterre et en Australie. Une
    semaine plus tard, le 3 Mars, la Playstation descend aux USA à
    149$. Nintendo renchérit dans la baisse, et le prix de la N64 aux
    USA est porté à 150 $.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><i><b><u><font face="Times New Roman" size="4">La Saturn marche bien au
    Japon.</font></u></b></i><font face="Times New Roman" size="4"><br />
      Bide total dans tous les autres pays, la Saturn est une belle
      réussite au Japon, et Sega finit par annoncer que les prochains
      jeux et extensions prévus pour la console ne sortiront que la-bas.
      On prévoit notamment un CD appelé Digital Dance Mix, qui combine
      des titre de la star Japonaise techno Namie Amuro et des animations
      en 3d.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Nouveaux jeux d’arcade.</font></u></i></b><font face="Times New Roman" size="4"><br />
    Sega crée un nouvel évènement dans le jeu d’arcade avec Super
    GT Scud Race, un jeu de course en 3d sorti seulement au Japon et aux
    USA. Une version Saturn n’est pas prévue. Capcom lance le très
    attendu Street Fighter 3 au Japon, mais le jeu n’a as le
    retentissement attendu. Il semble que l’ère des jeux de combats
    en 3d touche à sa fin.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Sega fusionne avec Bandai.</font></u></i></b><font face="Times New Roman" size="4"><br />
    Sega et cet autre géant du jeu au Japon parlent de fusionner, ce
    qui obligerait Bandai à arrêter de développer des jeux pour
    Playstation. La nouvelle provoque un soulèvement des employés de
    Bandai, qui n’ont pas été consultés, la décision ayant été
    prise par le président Makoto Yamashima seul. Cette révolte l’oblige
    à revenir en arrière, et la fusion n’aura finalement pas lieu.<br />
    La principale explication de ce revirement de politique est le
    Tamagotchi, célèbre animal virtuel doté d’une vie propre se
    présentant sous la forme d’un petit boîtier électronique à
    affichage LCD, que Bandai vient d’inventer, et qui a à lui seul
    renfloué la compagnie en difficulté grâce à ses ventes
    mirobolantes, rendant la fusion avec Sega inutile.<br />
    Bandai a sorti le Tamagotchi aux USA en Mai, et 30000 unités s’en
    sont vendues en 3 jours. C’est un véritable phénomène de
    société, qui va s’étendre au monde entier.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">StarFox 64 bât des
    records.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Shigeru Miyamoto a encore frappé : Nintendo annonce que StarFox 64
      est le meilleur jeu à être sorti sur quelque système que ce soit,
      et 300000 copies sont vendues les 5 premiers jours de
      commercialisation, en Juin. On est cependant loin des scores de
      Legend of Zelda 64 (2 millions de copies en 3 jours au Japon).</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Tiger lance un concurrent
    pour la Game Boy.</font></u></i></b><font face="Times New Roman" size="4"><br />
      La société Tiger lance le game.com, une console portable capable
      de lire des jeux sur cartouche comme la Game Boy, et qui présente
      des fonctions résidentes intéressantes : organiseur personnel,
      quelques jeux (solitaire, démineur), calculatrice, et même la
      possibilité de se connecter sur une ligne téléphonique via le
      modem d’un ordinateur PC à un service de courrier électronique.
      Elle est équipée d’un stylo optique pour accéder à des
      fonctions sur son écran LCD. Très en avance sur son temps, la
      game.com ne connaîtra qu’une diffusion limitée.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Le père de la Game Boy
    meurt dans un accident stupide.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Le 4 Octobre 1997, Gumpei Yokoi, l’inventeur de la Game Boy, qui
      rappelons le est un des deux ou trois plus gros succès de l’histoire
      de Nintendo, a un petit accrochage avec la voiture qui le précède
      à carrefour. Il sort de sa voiture pour inspecter son pare-chocs et
      se fait faucher par une autre voiture qui arrivait à une vitesse
      excessive sur l’autre voie. Il meurt avant son arrivée à l’hôpital,
      à l’âge de 56 ans.<br />
      En dehors de la Game Boy, Yokoi s’était déjà rendu responsable
      de l’invention des jeux Game&amp;Watch, jeux portables à écran
      LCD vendus par Nintendo dans les années 80, qui avaient rapporté
      des milliards à la compagnie. C’est aussi à lui que l’on doit
      l’invention du game-pad, système de contrôle à base de boutons
      directionnels venu des Game&amp;Watch qui a supplanté le joystick
      pour les consoles.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><i><b><u><font face="Times New Roman" size="4">Nintendo reparle de l’Atlantis.</font></u></b></i><font face="Times New Roman" size="4"><br />
    Nintendo annonce que l’Atlantis va finalement être lancée,
    maintenant que la Game Boy arrive en fin de carrière. L’Atlantis
    sera équipée d’un processeur 32-bit, et pourra fonctionner 30
    heures avec le même jeu de piles. Des kits de développements à
    usage des créateurs de jeux devraient être distribués avant la
    fin de l’année.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">La Jaguar n’est pas
    morte. (en fait si).</font></u></i></b><font face="Times New Roman" size="4"><br />
      La société Telegames surprend tout le monde en sortant 6 nouveaux
      jeux pour Jaguar, comme Breakout 2000, et deux jeux pour Lynx. Les
      jeux reçoivent de très mauvaises critiques, et disparaissent très
      vite du marché.</font></a></p>
  <p align="left" class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">La M2 refait surface.</font></u></i></b><font face="Times New Roman" size="4"><br />
    En Juillet, un journal Japonais rapporte que durant une interview,
    un officiel de Matsushita à mentionné que la M2 (qui devait
    succéder à la défunte 3DO), est abandonnée et que son équipe de
    développement est démembrée. Matsushita publie immédiatement un
    démenti et annonce que la M2 est prête à être lancée avec un
    catalogue de dix jeux, et que la compagnie ne la retarde que pour
    cause de saturation du marché.<br />
    Finalement, et ce sera confirmé par le président de Matsushita,
    Yoichi Morishita, la M2 ne sortira pas en tant que console de jeux,
    mais sa technologie sera utilisée pour développer un système à
    vocation multimédia (jeux, vidéo, hi-fi, cinéma, applications
    éducative, télématique et Dieu sait quoi encore), dans le genre
    du CD-I de Philips ou du CDTV de Commodore, deux beaux projets qui
    se soldèrent par des bides historiques et des licenciements et
    faillites à la pelle.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">VM Labs donne dans l’effet
    d’annonce.</font></u></i></b><font face="Times New Roman" size="4"><br />
      En Novembre, la société VM Labs, vieille d’à peine trois ans,
      annonce un projet de console de jeu disponible fin 98. Le président
      Richard Miller annonce que le « Projet X » est une réalité, mais
      ne donne aucune spécification technique de la console, se
      contentant de dire qu’elle sera développée par plusieurs
      laboratoires, comme c’était le cas de la 3DO.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Rions un peu avec : La
    censure en Arizona.</font></u></i></b><font face="Times New Roman" size="4"><br />
      En Arizona, un projet de loi est présenté au Rules Comittee (qui
      entérine les lois au niveau d’un état américain, avant que
      celles-ci ne soient proposée au niveau fédéral). Il s’agit d’apposer
      sur certains emballages ou publicités de jeux (principalement des
      jeux pour PC, qui sont en général sans limites dans la violence,
      comparé aux jeux pour consoles) une étiquette mentionnant (prenez
      votre souffle) :<br />
      « Jeu strictement interdit aux mineurs, contenant de la violence
      graphique, des descriptions sanglantes de scènes de torture, des
      représentations réalistes d’agressions sexuelles, du
      cannibalisme, des mutilations, des meurtres, et des déjections d’urine
      et de matière fécale dans un contexte morbide et violent ».<br />
      Si un jeu présentait tout ça en même temps sur sa boîte, il
      ferait à n’en point douter un carton historique, mais
      heureusement le projet de loi sera rejeté.<br />
      Curieusement, à la même époque, les sénateurs Kohl et
      Liebermann, grands défenseurs de la censure pour les jeux vidéos,
      publient le rapport de leur enquête qui n’est pas si défavorable
      à l’industrie du jeu vidéo. Fin 97, la plupart des jeux figurent
      clairement sur leur emballage un classement sur leur échelle de «
      violence et subversion ». Les deux sénateurs s’énervent juste
      un peu contre les revendeurs qui continuent à vendre n’importe
      quel jeu à n’importe quel mineur sans prêter attention aux
      avertissements. L’industrie du jeu d’arcade échappe au
      classement, les salles d’arcade étant principe interdites d’entrée
      au mineurs (sans blague !).<br />
    </font></a></p>
  <hr align="center" />
  <p align="center" class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="5">1998-1999 : L’ère
    moderne.</font></u></i></b><font face="Times New Roman" size="4"><br />
    </font></a></p>
  <p align="center" class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4"><b><i><u>1998</u></i></b></font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Nouvelle console Sega.</font></u></i></b><font face="Times New Roman" size="4"><br />
    Sega recentre ses projets sur une console 64-bits nommée Katana qui
    regroupe les deux projets précédents de la compagnie, la Dural et
    la Black Belt, en un seul. La Katana devrait utiliser Windows CE, le
    système des PC adapté à un usage sans souris ni clavier, afin que
    les versions PC et Katana des jeux soient les mêmes.<br />
    Il faut savoir que le PC est maintenant une force égale aux
    consoles dans le domaine des jeux vidéos, qui permet outre des
    graphismes et des animations 3D supérieures, une interactivité
    plus grande, et des jeux plus complexes et riches, permettant de
    jouer en réseau local ou sur Internet. Les possesseurs de PC
    constituent un public plus mûr en matière de jeu vidéo que celui
    des consoles. Dans bien des cas, ce sont ces dernières qui doivent
    être maintenues au niveau en proposant des adaptations des jeux
    incroyables développés sur PC, alors que c’était le contraire
    auparavant.<br />
    La Katana est présentée en Mai, et l’un de ses aspects les plus
    novateurs est le VMS (Visual Memory System), un système de
    sauvegarde sur une carte qui se branche dans le joypad de la
    console, équipée d’un écran LCD qui permet de lui attribuer
    quelques fonctions interactives ou d’afficher les noms des parties
    sauvegardées, voire des petits jeux genre Tamagotchi.<br />
    La Katana est supposée sortir au Japon en Novembre, les USA et l’Europe
    devant attendre 1999. Le lancement devrait coûter au total 100
    millions de dollars, Sega jouant son va-tout sur cette console, qui
    vers la fin de l’année 1998 se voit à la dernière minute avant
    son lancement rebaptisée Dreamcast.<br />
    La console est très attendue, et sort au Japon le 27 Novembre. Les
    150000 unités initialement fabriquées sont très vite vendues,
    ainsi que 130000 copies du jeu Virtua Fighter 3.<br />
    Une version arcade de la Dreamcast est aussi annoncée, appelée
    Naomi, qui devrait avoir les mêmes capacités que les jeux d’arcade
    Sega précédents, tout en coûtant 3 fois moins cher à fabriquer
    grâce à la fabrication en grande série de la Dreamcast. Les
    conversions de jeux d’arcade vers la console seraient évidemment
    très simple à réaliser, et les machines d’arcade en question
    pourraient même lire les cartes de sauvegardes VMS.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">La Playstation 2, suite du
    feuilleton.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Les rumeurs concernant le développement de la Playstation 2
      abondent, surtout depuis qu’Internet est devenu un bien de
      consommation courante. Sony garde le silence, tout en laissant
      échapper quelques informations, avec une science du marketing
      infaillible. En Juillet, la nouvelle du développement de la console
      est confirmée officiellement. Elle sera basée sur l’utilisation
      du DVD, si ce support s’impose comme un nouveau standard. En
      attendant, la console est mise en attente jusqu’en 2000. Sony
      prend le risque de laisser la Dreamcast s’installer sur le marché
      sans concurrence, mais s’arrange pour qu’il soit en permanence
      question de sa future console afin d’augmenter l’effet d’attente.
      La carte mère de la console sera selon les rumeurs produite par
      Toshiba, et le processeur devrait tourner à 250 Mhz. Ces dernière
      informations ne sont pas confirmées par Sony.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Encore du retard pour le
    64DD.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Le lecteur de CD-ROM pour N64 n’est pas présenté à l’E3 comme
      prévu, et on raconte qu’il ne sortira jamais. Nintendo lance tout
      de même le N64 Expansion Pack, qui se branche sur le port d’extension
      de la console et double la mémoire à 8 Mo.<br />
      Le jeu Legend of Zelda – Ocarina of Time sort le 23 Novembre.
      325000 cartouches ont été commandées avant que le jeu ne sorte,
      ce qui est un record, et ceux qui ont ainsi pré-commandé le jeu
      sont privilégiés en recevant une cartouche en plastique doré dite
      « gold cartridge ». Au cours de l’année, le jeu se vendra à
      2.5 millions d’exemplaire, rapportant 150 millions de dollars, ce
      qui est mieux que le film le plus rentable de l’année au box
      office, « 1001 pattes », qui ne rapporte à Walt Disney « que »
      114 millions de $.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Le phénomène Pokemon.</font></u></i></b><font face="Times New Roman" size="4"><br />
    Nintendo annonce que ses Pokemons vont arriver aux USA, après avoir
    cartonné au Japon. Les Pokemon (abréviation de Pocket Monsters)
    sont les personnage d’un dessin animé (dont Nintendo est
    possesseur des droits) qui ont beaucoup fait parler d’eux dans le
    monde entier après avoir provoqué 700 crises d’épilepsie au
    cours d’une diffusion télé Japonaise, les gamins ayant été
    victimes des flashs lumineux ininterrompus provoqués par les
    apparitions de Pikachu, le Pokemon le plus populaire. Après avoir
    quelque peu fait retoucher les épisodes suivants pour éviter que
    cela ne se reproduise, provoqué l’apparition d’avertissements
    sur l’épilepsie sur les jeux vidéos du monde entier, et
    dédommagé les familles des enfants atteints, Nintendo flaire le
    coup médiatique juteux et décide d’exploiter ce sous-sous-sous-(ajouter autant de sous que vous voudrez)-produit de
    la culture Japonaise au niveau mondial. En Septembre, le jeu Game
    Boy arrive en deux versions, ainsi qu’un Tamagotchi appelé Pocket
    Pikachu. Durant les deux années suivantes ce seront une somme
    incroyable de produits dérivés des dessins animés Pokemon qui
    envahiront la planète, des jouets vendus pour la plupart à des
    prix surréalistes qui rendront Nintendo plus riche et prospère qu’il
    ne la jamais été.<br />
    Pendant ce temps, la Game Boy arrive à ses dix ans d’existence
    avec la sortie de la Game Boy Light, une nouvelle version équipée
    d’un éclairage de l’écran fort bienvenu, ainsi que des
    périphériques pour Game Boy, comme une caméra et une imprimante,
    qui malgré la faible résolution de la console connaîtront un
    grand succès. Néanmoins, la Game Boy Light va être rapidement
    assassinée par la sortie de la Game Boy Color, qui en plus d’être
    compatible avec les jeux Game Boy existant, va vite se rendre
    indispensable aux fans grâce aux jeux colorisés ne pouvant tourner
    que sur elle.</font></a></p>
  <p class="Style7"> <b><a name="marker" id="marker"><i><u><font face="Times New Roman" size="4">Il n’y pas que
    Nintendo,
    Sega et Sony.</font></u></i></a></b><font face="Times New Roman" size="4"><a name="marker" id="marker"><br />
      D’autres marques continuent d’essayer de se maintenir sur le
      marché des consoles de jeu :</a></font> <font face="Times New Roman" size="4"><a name="marker" id="marker">Tiger continue envers et
        contre tout de fabriquer et soutenir la Game.com, dont les ventes ne
        décolleront jamais, et sort même la Game.com Pocket Pro.</a></font> <font face="Times New Roman" size="4"> <a name="marker" id="marker"> Bandai sort le Wonderswan,
          une console portable partiellement développée par le regretté
          Gunpei Yokoi, qui peut afficher des jeux sur écran monochrome
          intégré, et espère en vendre 3 millions (pour 40 $) avant Mars
          1999. </a></font> <font face="Times New Roman" size="4"><a name="marker" id="marker">SNK annonce la Neo-Geo
            Pocket, une version portable de la Neo-Geo, équipée d’un écran
            LCD monochrome supérieur à celui de Game Boy, compatible avec les
            jeux du VMS de la Dreamcast, et livrée avec un petit joystick pour
            50$. Elle n’est prévue de n’être commercialisée qu’au
            Japon.</a></font>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Hasbro boulimique de
    licences.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Après le succès obtenu par son remake 3D de Frogger sur PC et
      Playstation, Hasbro Interactive rachète plusieurs sociétés
      impliquées dans le marché du jeu vidéo. La première est Tiger
      Electronics, fabriquant de divers jeux électroniques et de la
      Game.com. Hasbro annonce aussi le rachat d’Atari pour 5 millions
      de dollars. Des rumeurs circulent sur une éventuelle réapparition
      de la Jaguar et de la Lynx, mais Hasbro annonce n’être
      intéressé que par les jeux du catalogue Atari, parmi lesquels
      Centipede, dont une version PC est éditée, ainsi qu’une version
      Playstation qui ne verra jamais le jour suite à l’insuccès de la
      précédente.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">La nostalgie, une valeur
    sure.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Activision sort une compilation de 30 jeux pour VCS 2600 adaptés
      sur Playstation, ainsi q’une version améliorée d’Asteroids
      pour PC et Playstation, qui reçoivent un accueil encourageant.<br />
      A Las Vegas, l’exposition annuelle World of Atari, abandonnée
      depuis longtemps, refait surface. En fait, elle célèbre les
      classiques du jeu vidéo dans leur ensemble, pas seulement ceux d’Atari.<br />
      Plus tard dans l’année, un CD intitulé Intellivision Lives sort,
      qui contient une collection de 50 jeux Intellivision fonctionnant en
      émulation de la console sur un PC ou un Mac.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">VM Labs, toujours un
    mystère.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Durant les deux premiers trimestres 1998, VM Labs ne se presse pas
      pour sortir sa nouvelle console, toujours appelée Project X. Les
      rumeurs disent qu’il s’agit d’un système multimédia à la
      CD-I, qui permettra de jouer et d’utiliser des applications
      éducatives. Tout change après l’E3, où il est annoncé que le
      Projet X ne sera pas une console, mais une extension pour lecteurs
      DVD permettant de mieux utiliser les applications interactives du
      DVD. En Juillet, VM Labs annonce que le Project X sera intégré en
      série dans les lecteurs de DVD Thomson et Toshiba, et que des jeux
      sur DVD utilisables sur ces lecteurs, et tous ceux équipés de l’extension
      Project X, seront développés par Activision, Capcom et Hasbro. A
      la fin de l’année, le système trouvera son nom définitif : NUON.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">L’IDSA sur tous les
    fronts.</font></u></i></b><font face="Times New Roman" size="4"><br />
      L’Interactive Digital Software Association, un groupe de défense
      des intérêts des compagnies oeuvrant dans le jeu vidéo, annonce
      qu’en 1998, le marché s’est accru de 30 %. Cela dit, cet
      accroissement des ventes ne concerne que les consoles et les
      micro-ordinateurs, le marché du jeu d’arcade étant lui en
      déclin, à l’image de la société Acclaim qui vient de s’en
      retirer.<br />
      L’IDSA se met à lutter contre un autre phénomène : l’émulation.<br />
      En gros, il s’agit de faire fonctionner sur un PC ou un Mac des
      logiciels (principalement des jeux) développés pour d’autres
      machines en en reproduisant fidèlement le fonctionnement par des
      trésors de programmation. Au début, cela ne concerne que les vieux
      jeux d’arcade et les consoles ou micro-ordinateurs dépassés,
      mais avec le temps et la surpuissance des PC, des émulateurs de
      consoles encore présentes sur le marché comme la Playstation, la
      N64 ou même la Dreamcast commencent à voir le jour. De plus, ces
      émulateurs n’ont rien d’illégal s’il ne sont pas fournis
      avec les fichiers de fonctionnement interne indispensables de ces
      machines, et des copies déplombées des jeux. Il est très simple
      de trouver sur Internet tout cela sur des sites séparés, et l’IDSA
      se bât pour faire fermer des sites qui confondent nostalgie et
      piratage pur et simple. D’un point de vue juridique, tout cela est
      complètement flou bien entendu, et le caractère mondial d’Internet
      empêche toute unité des règles d’un pays à l’autre, d’un
      utilisateur à l’autre.<br />
      Il existe même un émulateur Playstation (bleem!) pour console
      Dreamcast !</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker">&nbsp; </a></p>
  <p align="center" class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4"><b><i><u>1999</u></i></b></font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Nintendo se joint à IBM
    pour sa nouvelle console.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Nintendo annonce la Game Boy Advance, une console 32-bit couleur
      portable, capable de se connecter à Internet en la couplant à un
      téléphone cellulaire (un portab', pardon). Elle devrait être
      compatible avec les précédentes Game Boy, et être développée en
      partenariat par Nintendo et IBM.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Adieu JTS.</font></u></i></b><font face="Times New Roman" size="4"><br />
    Le fabriquant de disques durs qui avait racheté Atari à fait
    faillite début 99.</font></a></p>
  <p align="left" class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Microsoft annonce sa
    console.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Le géant de la micro-informatique annonce, c’était à prévoir,
      le développement d’une console de jeu, la X-Box, basée sur
      Windows CE comme la Dreamcast et équipée d’un processeur Intel
      Pentium III et d’une carte vidéo Nvidia, les derniers composants
      les plus en vue sur les PC haut de gamme.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Pac-Man vaincu.</font></u></i></b><font face="Times New Roman" size="4"><br />
    Pour la première fois depuis la sortie du jeu il y a plus de quinze
    ans, un joueur arrive à la fin du dernier labyrinthe sans tricher
    sur une borne d’arcade de Pac-Man. Il s’appelle Billy Mitchell,
    c’est un américain et son score final est de 3.333.360 points !</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Les données de la
    Playstation 2 révélées.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Les informations sur la Playstation 2, qui n’en finit plus de se
      faire désirer, sont révélées. Elle sera équipée d’un
      processeur Toshiba cadencé à 250 Mhz appelé l’Emotion Engine,
      coûtera 800$ environ, sera compatible avec les jeux Playstation,
      lira tous les DVD, et sortira au Japon en Mars 2000 et aux USA et en
      Europe fin 2000.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Dernières nouvelles de
    Sega.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Un lecteur Iomega ZIP pour Dreamcast permettant de sauvegarder des
      données (le point faible de toutes les consoles) est prévu d’être
      disponible.<br />
      Sega va produire des jeux pour Game Boy et WonderSwan, ne s’estimant
      pas en concurrence avec ces produits.<br />
      La Dreamcast, dont le succès ne saurait plus être contesté
      maintenant, va voir son prix baisser de 250$ à 164$ au Japon, tout
      en restant à 200$ aux USA.<br />
      Les video-clubs Hollywood Video, très célèbres aux USA, sont
      autorisés à louer des consoles Dreamcast, contre un paiement de
      350$ par machine à Sega, et à la condition que le seul jeu fourni
      soit Sonic Adventure. Il s’agit de promouvoir la console, et non
      pas de l’utiliser à bas-prix.<br />
      Un pistolet optique pour Dreamcast était prévu, mais son lancement
      est annulé suite à plusieurs tueries aux USA impliquant des
      adolescents. La compagnie s’autocensure, ce qui est devenu une
      habitude dans le monde des consoles, mais certes pas pour les
      éditeurs de jeux sur PC, qui vont de plus en plus loin dans la
      violence, le gore bien gras et la grossièreté (Kingpin, Soldier of
      Fortune).</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Les émulateurs, encore.</font></u></i></b><font face="Times New Roman" size="4"><br />
    Connectix Corporation lance le Virtual Game Station, un logiciel qui
    permet de jouer aux jeux Playstation sur un Mac en émulation
    Playstation avec un rendu supérieur à celui de la console
    elle-même. Les méandres du système judiciaire américain
    empêchent Sony de faire arrêter cette vente, comme ce fut jadis le
    cas pour Coleco et son adaptateur de jeux VCS pour Colecovision. Sur
    le net, le monde de l’émulation délire totalement, des
    émulateurs Game Boy Advance et Playstation 2 étant annoncés en
    même temps que la sortie de ces consoles !</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker">&nbsp; </a></p>
  <p align="center" class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4"><b><i><u>2000</u></i></b></font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Etat des lieux</font></u></i></b><font face="Times New Roman" size="4"><br />
    La Playstation 2 est sortie pendant l'été, et il est encore trop
    tôt pour en parler. Nintendo annonce sa Game Cube, une console avec
    lecteur DVD visant à remettre en selle l’ex-leader du marché, et
    Microsoft n’arrête pas de revoir à la hausse le hardware de la
    X-Box qui se présente comme un PC (sans clavier) surpuissant pour
    les jeux, aussi encombrant que l’unité centrale d’un PC haut de
    gamme. La Dreamcast maintient une bonne vitesse de croisière, mais
    les développeurs commencent à connaître quelques difficultés à
    adapter dessus les jeux PC toujours plus gourmands.<br />
    La micro-informatique ludique, elle, se résume au PC, qui se
    décline en une infinité de configurations différentes aux
    composants dont la puissance et le prix grimpent encore et encore.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">X-Box : Ca frémit.</font></u></i></b><font face="Times New Roman" size="4"><br />
    La sortie de la X-Box est retardée à la fin-2001, mais on en sait
    déjà un peu plus : La console n'utilisera que des jeux prévus
    spécialement pour elle, et pas les jeux PC. Bien qu'équipée en
    série d'un lecteur de DVD, elle ne pourra lire les films en DVD
    qu'avec une extension vendue séparément. Son processeur sera
    finalement un Pentium III 766, et sa carte vidéo une GeForce 2 de
    NVidia. Elle sera équipée d'un disque dur de 8 Go, et d'un modem
    56 Kbps, le tout pour un prix d'environ 3000 f. Son boîtier sera un
    peu plus imposant que celui d'une PS2, mais pas autant que ce que
    les premières photos laissaient envisager. Quant à la mascotte de
    la console, il s'agira d'Abe, le héros du jeu Abe's Odyssey</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Sega vs PS2</font></u></i></b><font face="Times New Roman" size="4"><br />
    Pendant ses premières semaines d'exploitation commerciale, la PS2
    brille surtout par la difficulté à s'en procurer une et l'absence
    de titres forts dans sa ludothèque. Certaines cérémonies
    organisées à l'occasion de la sortie officielle se sont soldées
    par des émeutes honteuses, notamment au Virgin Megastore à Paris,
    où des gens se sont fait piétiner. Pour calmer le jeu, Sony
    annonce une production massive en vue des fêtes de Noël. Sega
    prépare la contre-attaque en baissant le prix de la Dreamcast, et
    en la vendant accompagnée de nombreux accessoires (même un lecteur
    de DVD en Angleterre) et d'un jeu (alors que la PS2, plus chère,
    est livrée nue). Les fêtes passées, on s'appercevra que Sega a
    bien réussi à endiguer le raz-de-marée, aidé il est vrai par la
    déception que provoque la découverte des premiers jeux sur PS2
    (Hélas, l'inéluctable ne sera pas empêché, voir plus loin, en
    2001). La PS1, du coup, trouve encore quelques clients, d'autant
    plus que les jeux les plus importants du moment (Final Fantasy IX en
    tête) sont encore développés dessus (ce qui laisse un goût amèr
    à ceux qui viennent de débourser 3000f pour une PS2).</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><i><u><b><font face="Times New Roman" size="4">Tempête glaciale</font></b></u></i><font face="Times New Roman" size="4"><br />
    En Mai, la sortie de Diablo II, de Blizzard, sur PC, constitue un
    évenement gigantesque : deux millions d'exemplaires sont déjà
    pré-commandés, et le jeu ne va pas décevoir les attentes (malgré
    des différences radicales avec ce qui avait été annoncé, et des
    graphismes anachroniques).</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Quake III sur Dreamcast :
    et si on s'était moqué de nous ?</font></u></i></b><font face="Times New Roman" size="4"><br />
      La conversion du hit de Id sur Dreamcast fait l'effet d'une bombe :
      graphismes magnifiques, et vitesse de jeu très satisfaisante. Sur
      PC, le jeu exige, pour un tel rendu, une configuration beaucoup plus
      puissante que celle de la Dreamcast. La nouvelle fait d'autant plus
      de bruit que Q3 est le jeu universellement utilisé pour tester la
      puissance des configs PC, et les joueurs du monde entier se posent
      des questions sur la crédibilité des données techniques dont les
      constructeurs de matériel PC les gavent.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">NVidia : une terre, un roi.</font></u></i></b><font face="Times New Roman" size="4"><br />
    Bouleversements sur le marché des cartes vidéo haut de gamme pour
    PC. La fin de 3dFX est annoncée (racheté par NVidia), et le
    succès grandissant des cartes NVidia est au premier plan des
    remaniements du marché qui l'ont provoqué. Sur le marché des
    cartes dédiées au jeu, ne reste qu'ATI pour contester
    l'hégémonie (avec le Radeon). Même le Mac, jusqu'ici domaine
    réservé d'ATI, commence à faire les yeux doux aux GeForce, plus
    puissante sur le papier et aux drivers plus stables.<br />
    On commence à parler de la GeForce 3, une carte qui devrait mettre
    tout le monde d'accord, et refaire passer le PC dans la catégorie
    des joujoux hors de prix après une jolie percée grand public en
    98-99.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Counterstrike : on se
    calme.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Le jeu en réseau (sur Internet ou réseau local), qui est devenu
      une donnée incontournable, aussi bien sur PC que sur consoles, se
      voit révolutionné par un mod (une extension gratuite) de Half-life
      nommé Counterstrike. Alors que jusqu'ici le mode de jeu le plus
      pratiqué était le deathmatch, dans lequel les joueurs s'affrontent
      dans une ambiance de tuerie frénétique, Counterstrike joue la
      carte du réalisme, du jeu en équipe, et des missions militaires
      complexes lors desquelles la discrétion et la tactique priment sur
      l'attaque frontale et la force de frappe. Les joueurs adorent, et
      tous les développeurs se mettent au diapason de cette nouvelle
      façon de jouer en réseau, à commencer par ceux qui oeuvrent pour
      Quake III et Unreal Tournament, les deux stars du FPS orienté
      multi-joueur.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Game Cube à l'horizon.</font></u></i></b><font face="Times New Roman" size="4"><br />
    Alors que les spécifications techniques de la future consoles de
    Nintendo se révèlent, on se rend compte que cette fois, la
    compagnie de Yamauchi, qui vient de prendre sa retraite (Yamauchi,
    pas la compagnie), ne cherche pas la supériorité technologique à
    tout prix, mais plutôt le fun garanti. Concue sous la coupe de
    Shigeru Miyamoto, la GC sera équipée d'une carte graphique ATI,
    d'un processeur cadencé à 350 Mhz, et utilisera des mini-DVD,
    support encore une fois unique mais moins coûteux que la cartouche.
    Shigeru Miyamoto s'implique énormément dans le développement de
    cette console, dont le prix de vente devrait être bien inférieur
    à celui des X-Box et PS2. Les premiers jeux annoncés, par contre,
    restent dans les sempiternelles franchises Nintendo. Heureusement,
    il y a Zelda....<br />
    Quant à la Game Boy Advance, il faudrait avoir un certain esprit de
    contradiction pour ne pas prédire un avenir doré à cette console,
    vu son faible prix, sa technologie impressionante et la qualité
    prévue des jeux.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker">&nbsp; </a></p>
  <p align="center" class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4"><b><i><u>2001</u></i></b></font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">So long Dreamcast</font></u></i></b><font face="Times New Roman" size="4"><br />
    Malgré un succès indéniable et une grosse cote auprès des
    authentiques joueurs, la Dreamcast coûte trop cher à Sega et n'a
    conquis que 30 % des parts de marché. Plus de 500 millions de
    dollars de budget promotionnel, ajouté aux pertes financières
    endurées pendant les précédentes années conduisent en Février
    la firme à abandonner la production de consoles. La Dreamcast est
    ainsi abandonnée, ainsi que des projets de jeux qui étaient
    quasiment prêts à être lancés, comme Half-life, et qui se voient
    reportés à l'année suivante et sur X-Box et PS2.<br />
    Même si le le support technique est assuré jusqu'à la fin de
    l'année et qu'une dizaine de nouveaux titres DC sont confirmés
    (notamment les très attendus Shenmue 2, Rez et Headhunter), ça
    sent le sapin pour cette console. Les fans du monde entier sont
    consternés, et rendent Sony responsable de ce malheur, ce qui
    entraîne des réactions souvent démesurées sur le net, mais qui
    confirment leur attachement à la Dreamcast.<br />
    Sega, libéré de toute contrainte quant au support sur lequel il
    peut éditer des jeux, annonce ainsi que ses futurs jeux majeurs
    sortiront sur PS2, Game Cube et X-Box. Son intention est de devenir
    le premier éditeur mondial de jeux vidéo.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">La GBA cartonne</font></u></i></b><font face="Times New Roman" size="4"><br />
    Quelque soient les résultats qu'engendrera la NGC, Nintendo va pour
    le mieux, car la Game Boy Advance est une énorme succès. Soutenue
    par une campagne promotionnelle bien menée (et très chère), cette
    console est le produit qui arrive au moment où il le faut. Avec ses
    jeux un peu rétro (du réchauffé disent les détracteurs) vendus
    au prix (très) fort et sa ludothèque tout de suite énorme, elle
    fait le plein de fans grâce à son prix de vente abordable (environ
    800f) et sa puissance technologique incroyable compte tenu de sa
    petite taille. Seul bémol : l'écran LCD, non rétro-éclairé
    (toujours pour des raisons d'autonomie), sur lequel on voit pas
    grand chose malgré son excellente qualité.&nbsp;<br />
    La console est si bien accueillie que personne ne songe à
    énumérer les mille et un petits détails et autres modalités de
    vente sur lesquels Nintendo arnaque l'acheteur dans l'affaire. Ca
    s'appele le génie commercial.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">La PS2 sur la sellette</font></u></i></b><font face="Times New Roman" size="4"><br />
    Les mois passent et on attend toujours de voir tourner sur PS2 un
    jeu qui justifie le tapage autour de cette console.<br />
    Il ya du nouveau, cependant, avec Gran Turismo 3. Très attendu, ce
    troisième volet de ce qui est considéré comme le meilleur jeu de
    course automobile sur consoles ne déçoit pas. Les graphismes sont
    somptueux, le jeu est passionnant et sa durée de vie est énorme,
    grâce à une difficulté plutôt élevée et de nombreux challenges
    à relever.<br />
    D'un point de vue technique, c'est une réussite qui prouve qu'à
    défaut de laisser loin derrière elle la Dreamcast, la PS2 est tout
    de même une bonne plate-forme de jeu 3d. On attend par ailleurs
    Silent Hill 2 et Metal Gear Solid 2 pour la fin de l'année.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Asta luego SNK</font></u></i></b><font face="Times New Roman" size="4"><br />
    2001 est une véritable hécatombe pour le monde des jeux
    vidéo.&nbsp;<br />
    Après la DC, c'est SNK qui annonce cette fois une faillite pure et
    simple. Depuis la Neo Geo en 1990 et sa version portable la Neo Geo
    Pocket, SNK n'avait pas sorti de produit vraiment neuf, et s'était
    tenu à l'écart de l'évolution technique des jeux vidéo vers la
    3d systématique. Du coup, la marque était devenue une des plus
    vénérées au monde et faisait office de dernier bastion du jeu à
    l'ancienne. Avec des titres comme Metal Slug ou la série des King
    of Fighters, la Neo Geo (et son équivalent en borne d'arcade le
    MVS), en mettait plein la vue tout en continuant à n'utiliser que
    des sprites, des scrollings et une architecture 16-bits.<br />
    La mort de SNK marque donc la fin d'une époque. L'émulation Neo
    Geo étant très bien installée sur le net, certains lui attribuent
    une part de résponsabilité dans ce qui s'est passé, mais en même
    temps, elle contribue à perpétuer à la fois la mémoire de SNK et
    du jeu en 2d en général.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Max Payne</font></u></i></b><font face="Times New Roman" size="4"><br />
    Il s'appelle Max Payne, c'est un flic, et il n'est pas content.
    Dépositaires de toute une culture cinématographique basée sur la
    stylisation de la violence, les Finlandais de Remedy secouent les
    puces du marché des jeux 3d avec cette bombe pour PC et PS2 (et
    plus tard X-Box) qui ne laisse personne indifférent (le jeu est
    même censuré en Allemagne).<br />
    Moteur graphique révolutionnaire, gameplay jouissif utilisant le
    ralenti comme élément ergonomique, scénario passionnant, Max
    Payne est le jeu de l'année.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Le Fujiama sur le maillot
    de l'OL</font></u></i></b><font face="Times New Roman" size="4"><br />
      Les fans de foot qui pratiquent les jeux vidéo depuis la grande
      époque font un bond sur leur canapé en apercevant le logo Atari
      sur le maillot des joueurs de l'Olympique Lyonnais. Il faut dire que
      Infogrames, qui finance le club, a racheté la marque, et compte
      bien utiliser la vague rétro pour en tirer quelques bénéfices.
      Des compilations de vieux titres Atari dans des versions très
      fidèles aux originaux font aussitôt leur apparition dans la
      ludothèque PSX. Le précédent propriétaire de la marque Atari,
      Hasbro Interactive, avait déjà tenté de jouer la carte du revival
      deux ans auparavant, mais sous la forme de versions 3d modernisées
      de vieux hits comme Missile Command ou Breakout.<br />
      Dans les deux cas, les fans de jeux rétro font la moue et
      retournent vers leurs sites de download préférés.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">On-line or die</font></u></i></b><font face="Times New Roman" size="4"><br />
    Les connexions Internet haut-débit se généralisent, même en
    France (c'est vous dire si elles se généralisent), et le jeu
    on-line devient de plus en plus pratiqué. De gros titres comme
    Anarchy Online ou Everquest, basés sur des univers persistants,
    obtiennent un succès phénoménal.<br />
    Citons également dans le même registre Bomberman Online et
    Phantasy Star Online sur Dreamcast, qui sont les seuls jeux on-line
    massivement pratiqués sur consoles, en l'occurence sur Dreamcast.
    On parle alors aussitôt de kits pour connexion ADSL pour PS2 et
    X-Box.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Dieux virtuels de qualité
    s'achètent chez Molyneux</font></u></i></b><font face="Times New Roman" size="4"><br />
      Le créateur de Dungeon Keeper, fondateur de Bullfrog et vénérable
      sage de la conception de jeux vidéo depuis une quinzaine d'année
      s'appelle Peter Molyneux. Après avoir ouvert en 1997 son propre
      studio de développement, il lance le premier jeu qui lui ressemble
      à 100 %.<br />
      Ca s'appelle Black&amp;White, ça met le joueur dans la peau d'un
      dieu qui peut tout faire de ses propres mains et doit se faire
      vénérer par ses sujets, et c'est dans une superbe 3d qui requiert
      un ordinateur un milliard de fois plus puissant que le premier
      chef-d'oeuvre de Molyneux, Populous.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Flight Simulator :
    polémique indigne.</font></u></i></b><font face="Times New Roman" size="4"><br />
      Après les évènements du 11 Septembre, tout élément qui aurait
      pu servir à l'organisation de l'attentat est considéré comme une
      aide au terrorisme international. C'est une véritable psychose, et
      quelqu'un soulève l'hypothèse que les kamikazes du World Trade
      Center se seraient entraînés sur Flight Simulator, à l'aide du
      scénario New York qui est très réaliste.<br />
      Heureusement, l'affaire ne va pas bien loin.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><b><i><u><font face="Times New Roman" size="4">Game Cube : Sortie en
    silence</font></u></i></b><font face="Times New Roman" size="4"><br />
      En Septembre, la Nintendo Game Cube sort au Japon alors que le monde
      entier à bien d'autres chose plus graves en tête.<br />
      Le succès est au rendez-vous, même si ce n'est pas le
      raz-de-marée annoncé. Les jeux NGC sont très prometteurs, mais ce
      ne sont que des promesses. On attend encore de voir ariver les
      grands noms comme Zelda ou Mario.<br />
      Pour patienter, les plus férus se procurent déjà des consoles
      importées du Japon.</font></a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><i><u><b><font face="Times New Roman" size="4">Lankhor : au-revoir</font></b></u></i><font face="Times New Roman" size="4"><br />
    Le studio de développement français Lankhor, coupable d'avoir
    amusé et fait rêver des millions de joueur depuis 15 ans, est
    condamné début Décembre par le tribunal de la conjoncture
    économique à fermer ses portes. Encore une triste date pour une
    année décidément catastrophique. Lankhor éditera un dernier
    titre en Février 2002 : Ski Park Manager.&nbsp;</font></a></p>
  <center class="Style7">
    <p>&nbsp;</p>
  </center>
  <p class="Style7 Style7"><a name="marker" id="marker">&nbsp;</a></p>
  <p class="Style7 Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4">24/07/2002 - Dark Mulau</font></a></p>
  <p>&nbsp; </p>
  <h1 class="Style3">&nbsp;</h1>
  <span class="Style7">
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
