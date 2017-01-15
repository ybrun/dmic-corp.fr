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
  <p align="center" class="Style7"><font face="Times New Roman" size="6"><b><i><u>L'Histoire
    de Sega</u></i></b></font></p>
  <p class="Style7"><font face="Times New Roman" size="4"><br />
    <br />
    Sega ne date pas d'hier, et<a name="marker" id="marker"> les aventures de l'éditeur de jeux
      le plus connu du monde débuta en 1951, bien que la première console familiale
      date de 1983 !</a></font></p>
  <p class="Style7"><a name="marker" id="marker"><font face="Times New Roman" size="4"><br />
  </font></a></p>
  <p>  
  <p class="Style7"><font face="Times New Roman" size="4"><a name="marker" id="marker">1954 - L'entreprise
    Rosen Enterprises est fondée par l'Américain David Rosen, qui s'installera
    définitivement au Japon après la Seconde Guerre Mondiale. Celui-ci achète des
    machines à sous d'occasion aux USA et les installes dans les bases Américaines sous le nom de Nifun Shashin.<br />
    <br />
    <br />
    1957 - Rosen étends son domaine d'activité et achète également des jeux
    d'arcade qu'il installe un peu partout au Japon, et plus uniquement dans les
    bases Américaines. Cela lui vaudra le titre de &quot;père du jeu
    d'arcade&quot; au Japon. En 1960, le jeu d'arcade c'était Rosen Enterprises et
    aucune autre.<br />
    <br />
    <br />
    1964 - Rosen décide de changer de direction. Il désire fabriquer ses propres
    machines plutôt que d'importer celles des autres compagnies. Pour réaliser ce
    voeu, Rosen achète une compagnie située à Tokyo qui fabriquais jusqu'alors
    des jukeboxes, la Nihon Goraku Bussan, et convertit les quelques 6000 usines
    ainsi misent à sa disposition à la fabrication de machines de jeux.<br />
    Rosen créa le nom SEGA à partir d'un nom utilisé en interne dans une
    subdivision de la Nihon Goraku Bussan, Service Games.<br />
    <br />
    <br />
    1966 - Sega produit son premier hit, dénommé &quot;Periscope&quot;. Rosen vend
    Sega à la Gulf and Western Industries en 1967 mais continue à oeuvrer dans la
    société en tant que CEO.<br />
    <br />
    <br />
    1976 - Sega produit d'autres jeux à succès, tels que The Fonz (1976), un jeu
    tiré du célèbre personnage du feuilleton &quot;Happy Days&quot; (!), Space
    Attack (1977), un clône de Space Invaders de Taito, et Head-on, un clône du
    jeu d'Atari Dodge'Em. (1979)<br />
    <br />
    <br />
    1979 - Rosen acquiert une compagnie de distribution fondée par l'entrepreneur
    Japonais Hayao Nakayam. De fin 70 au début des années 80, Sega produisit des
    jeux d'arcade pour les premières consoles de jeux, comme l'Atari VCS2600 et la
    CBS Colecovision. Sega n'était pas encore une puissante maison d'édition, mais
    rencontrait un succès certain grâce à quelques titres phares comme Turbo
    (1981, vendu sur Colecovision avec le fameux volant), Frogger (1981) et Zaxxon
    (1982).<br />
    <br />
    <br />
    1982 - Sega atteint des ventes internationales de plus de 214 millions de $ par
    an, et sort le premier jeu vidéo utilisant un LaserDisc (Astron Belt) et le
    premier jeu en 3D (SubRoc-3D).<br />
    Cette année également, Sega met en vente sa première console de jeux,
    dénommée SG-1000, qui sera un succès au Japon.<br />
    <br />
    <br />
    1983 - Le grand crash des jeux vidéo ! Le marché des jeux vidéo s'effondre
    très rapidement aux USA, juste après que Gulf &amp; Western, qui détenaient
    20% de SEGA, rachètent les parts publiques et vendent la part Américaine à
    Bally (Manufacturing Corp.). Malgré cela, SEGA survit au Japon.<br />
    En 1979, Rosen avait acquis la compagnie de distribution de l'entrepreneur
    Japonais Hayao Nakayama. Après le crash, Rosen rejoignit Nakayama et d'autres
    investisseurs Japonais pour racheter la partie Japonaise de Sega pour 38
    millions de $. Nakayama devint donc le PDG et Rosen dirigea le commerce avec les
    USA.<br />
    <br />
    <br />
    1984 - Sega est rachetée intégralement par un partenariat entre Sega Japon et
    CSK Corporation. Ensemble, ils créent Sega Enterprises LTD, basée
    exclusivement au Japon.<br />
    <br />
    <br />
    1986 - Sega rentre en bourse. Sega of America et Sega of Europe sont formées
    pour maîtriser les ventes à l'étranger, et sortie internationale de la Master
    System. La Master System est en fait la cinquième console de Sega, mais la
    première à être officiellement distribuée dans le monde : les autres furent
    exclusivement pour le marché nippon. De plus, Sega of America fut établie afin
    d'adapter et distribuer le maximum de titres au marché Américain en pleine
    explosion. Il fut même question de développements spécifiques au marché
    Américain !<br />
    <br />
    <br />
    1987 - Sega sort plusieurs jeux d'arcade qui rencontrent un immense succès. Des
    jeux comme Out Run (1986), After Burner (1987) et Shinobi (1987) apportèrent
    non-seulement des fonds pour les développements futurs, mais aussi un catalogue
    de jeu de qualité à porter sur les consoles familiales.<br />
    <br />
    <br />
    1989 - La Megadrive/Genesis est lancée. Avec ce système, Sega se tourne vers
    les joueurs déjà un peu plus matures. Au lancement, la Genesis (nom de la
    Megadrive Américaine) coûtait 189$ avec une manette et un jeu, Altered Beast.
    Le &quot;Power Base Converter&quot;, un adaptateur permettant de jouer aux jeux
    Master System sur la Megadrive, fut immédiatemment disponible, et Sega
    prévoyait de sortir un modem et un clavier vers la fin 1990.<br />
    <br />
    <br />
    1991 - Time Traveler, la première borne d'arcade holographique : sans
    équipement spécial, comme les traditionnelles lunettes LCD, le jeu affichait
    des images en 3 dimensions grâce à deux écrans et un système de miroirs.<br />
    <br />
    <br />
    1993 - Virtua Racing et Virtua Fighter font un carton, en tant que premiers jeux
    d'arcade en 3D. Sega met en vente le Mega CD, l'extension CD pour la console
    Megadrive.<br />
    <br />
    <br />
    1994 - Introduction de la 32-X. SOA (Sega Of America), Time Warner et TCI
    mettent en place le Sega Channel.<br />
    <br />
    <br />
    1995 - Sega forme SegaSoft, sa nouvelle division orientée vers l'édition de
    jeux pour ordinateur, et lance la Sega Saturn, leur vraie 32 bits. Bien que la
    Saturn ait eue quelques longueurs d'avance (quelques semaines) sur la Sony
    Playstation, il était plus facile de développer sur la PSX, et cette dernière
    prit rapidement le dessus en termes de sorties de jeux. Malgré le succès de
    ses jeux d'arcade tels que House of the Dead et Virtua Fighter 3, Sega se tenait
    fort tranquille après le flop de la Saturn, qui connue beaucoup plus de succès
    au Japon que dans le reste du monde.<br />
    <br />
    <br />
    1996 - Sega, MCA et DreamWorks (la société de Steven Spielberg), David Geffen
    et Jeffrey Katzenberg rejoignent Sega GameWorks afin de créer des centres
    familiaux de location de jeux vidéo, afin d'étendre le marché du jeu vidéo.<br />
    <br />
    <br />
    1998 - Sortie de la Dreamcast, première console 128 bits du marché.</a></font></p>
 
</p>
<p class="Style7">&nbsp;</p>
<p align="center" class="Style7"><b><i><u><font face="Times New Roman" size="5">Les
  machines de Sega :</font></u></i></b></p>
<p class="Style7"><font face="Times New Roman" size="4"><br />
  Sega, c'est une grande famille de consoles, de bornes d'arcade, de projets
  avortés ou de flops commerciaux !<br />
  <br />
  <br />
</font></p>
<p class="Style7"><b><i><u><font face="Times New Roman" size="4">SG-1000 (1983) :</font></u></i></b></p>
<table cellspacing="0" cellpadding="0" border="0">
  <tbody>
    <tr>
      <td width="1" height="274" class="Style7"></td>
      <td width="692" height="274" class="Style7"><font face="Times New Roman" size="4">C'est
        la première console de jeu de Sega, pas très costaude, et</font></a><font face="Times New Roman" size="4"><a name="marker" id="marker2"> très inférieure à la Nintendo Famicom par exemple en termes de
          capacités graphiques et sonores ! En fait, c'est plus ou moins un clône
          d'une console qui marche fort aux USA à la même époque, la CBS
          Colecovision, d'une technologie éprouvée que l'on retrouvera plus tard
          dans les ordinateurs de la gamme MSX, à savoir : un microprocesseur Z80
          à 3.58 MHz, une puce graphique Texas Instruments TI9918 associée à 16
          Ko de mémoire vidéo gérant 32 sprites monochromes en 256x192 points et
          16 couleurs et une puce sonore émettant 3 voix + canal de bruit sur 8
          octaves. Détail amusant, la SG-1000 (Sega Game 1000) ne possède qu'un
          seul joystick, attaché, mais un port permettait à un deuxième joueur de
          rejoindre une partie.<br />
          <br />
          Néanmoins, elle connue un certain succès au Japon, et Sega n'hésita pas
          à sortir pour elle un adaptateur clavier qui permettait d'en faire un
          ordinateur (le Sega Keyboard SK-1100) ! Un second modèle fit son
          apparition, la SG-1000 II ou Mark-II en abrégé, et une interface
          permettait de connecter la SG-1000 au Pioneer SEED (une réminiscence du
          LaserActive) à la SG-1000.<br />
          <br />
          On vit aussi apparaitre des clônes de la SG-1000, preuve irréfutable
          d'un certain succès, chez par exemple la compagnie Japonaise de jouets
          Tsukuda Original, qui s'appelait l'Othello Multivision. Pourquoi Othello
          ?? Simplement, Tsukuda posséde la licence du jeu Othello. Les deux
          modèles sortis, la FG-1000 (1983) et la FG-2000 (1984) possédaient en
          interne le fameux jeu Othello.</a></font></td>
      <td width="21" height="274" class="Style7"></td>
      <td width="250" height="274" class="Style7"><p><font face="Times New Roman" size="4"><img alt="Sega SG-1000S" src="/dmic-corp/images/sg1000s.jpg" border="0" width="250" height="293" /></font></p></td>
    </tr>
  </tbody>
</table>
<p class="Style7"><font face="Times New Roman" size="4">Il y eut aussi les
  &quot;Dina 2-in-1&quot; et<a name="marker" id="marker2"> &quot;Personal Arcade&quot;, par
    respectivement Bit Corporation et Telegames. Le Dina 2-in-1 était donc un
    clône de la SG-1000 et de la Colecovision. Les premières consoles &quot;Personal
    Arcade&quot; de chez Telegames étaient en fait fabriquées par Bit Corporation,
    et comportaient encore le nom &quot;Dina&quot;. Elles possédaient le port
    cartouche de la SG-1000, bien que la Personal Arcade était réputée comme
    étant plutôt un clône de la Colecovision.<br />
    <br />
  </a></font></p>
<span class="Style7"><a name="marker"> </span>
<table border="0">
  <tbody>
    <tr>
      <td width="374" height="143" class="Style7"><p><font face="Times New Roman" size="4"><img alt="Sega SG-1000-II" src="/dmic-corp/images/mark2.jpg" width="358" height="180" /></font></p></td>
      <td width="218" height="143" class="Style7"></td>
      <td width="262" height="143" class="Style7"><p><font face="Times New Roman" size="4"><img alt="Sega SG-1000 et SG-1000-II" src="/dmic-corp/images/sg1000.jpg" width="270" height="180" /></font></p></td>
    </tr>
    <tr>
      <td width="374" height="2" class="Style7"><p align="center"><font face="Times New Roman" size="4">La
        SG-1000 II, ou Mark-II</font></p></td>
      <td width="218" height="2" class="Style7"></td>
      <td width="262" height="2" class="Style7"><p align="center"><font face="Times New Roman" size="4">Les
        SG-1000 et SG-1000-II/ Mark-II</font></a></p></td>
    </tr>
  </tbody>
</table>
<p class="Style7"><font face="Times New Roman" size="4"><br />
  <br />
</font></p>
<p class="Style7"><b><i><u><font face="Times New Roman" size="4">SC-3000 (1983) :</font></u></i></b></p>
<table cellspacing="0" cellpadding="0" border="0">
  <tbody>
    <tr>
      <td class="Style7"><font face="Times New Roman" size="4">Le SC-3000 (Sega
        Computer 3000) est en fait une version recarrossée de la Mark-II avec
        son extension clavier (SK-1000), qui fut vendu comme un ordinateur à
        part entière, disposant du parc de cartouches de la Mark-II plus des
        cartouches spécifiques, telles que le Basic.<br />
        Ce même Basic, assez honorable, permet d'accéder tout comme sur
        ordinateur MSX aux lutins graphiques (32 sprites monochromes) et<a name="marker" id="marker2"> aux capacités sonores de la machine. Malheureusement, doté de
          seulement 8 Ko de RAM d'origine, l'utilisateur se trouvait nez à nez
          avec seulement 512 octets de mémoire libre une fois la cartouche Basic
          version 3.0 insérée !<br />
          <br />
          Heureusement, le modèle SC-3000H viendra vite corriger bon nombre de
          ces défauts, avec notamment un clavier mécanique et 32 Ko de RAM.</a></font></td>
      <td width="10" class="Style7"></td>
      <td class="Style7"><p><font face="Times New Roman" size="4"><img src="/dmic-corp/images/sc3000s.jpg" border="0" width="350" height="211" /></font></p>
        <p align="center">&nbsp;</p></td>
    </tr>
  </tbody>
</table>
<table border="0">
  <tbody>
    <tr>
      <td width="420" class="Style7"><p><font face="Times New Roman" size="4"><img src="/dmic-corp/images/set3000.jpg" width="378" height="152" /></font></p></td>
      <td width="258" class="Style7"></td>
      <td width="297" class="Style7"><p><font face="Times New Roman" size="4"><img src="/dmic-corp/images/sc3000h.jpg" width="320" height="152" /></font></p></td>
    </tr>
    <tr>
      <td width="420" class="Style7"><p><font face="Times New Roman" size="4">L'imprimante 4
        couleurs à stylos SP-400, le joystick Sega SJ-300, le lecteur de
        cassette SR-1000 et<a name="marker" id="marker2"> le fameux lecteur de disquettes 3
          pouces SF-7000 (comme sur Amstrad !).</a></font></p></td>
      <td width="258" class="Style7"></td>
      <td width="297" class="Style7"><p align="center"><font face="Times New Roman" size="4">Le
        SC-3000H</font></p></td>
    </tr>
  </tbody>
</table>
<p class="Style7"><font face="Times New Roman" size="4"><br />
  <br />
</font></p>
<p class="Style7"><b><i><u><font face="Times New Roman" size="4">Mark-III (1985) :</font></u></i></b></p>
<table cellspacing="0" cellpadding="0" border="0">
  <tbody>
    <tr>
      <td width="195" class="Style7"><p><font face="Times New Roman" size="4"><img alt="Sega Mark-III" src="/dmic-corp/images/mark3s.jpg" border="0" width="250" height="250" /></font></p>
        <p align="center">&nbsp;</p></td>
      <td width="4" class="Style7"></td>
      <td width="529" class="Style7"><font face="Times New Roman" size="4">La
        Mark-III est en fait une console bien connue chez nous car à un détail
        prêt, il s'agit de l'ancêtre de la console que nous connaitrons en
        1986 sous le nom de Master System ! (voir plus bas).<br />
        Néanmoins, la Mark-III se distingue par l'intégration d'une puce
        sonore FM en 6 voies, en plus de la puce PSG 3 voies contenue dans la
        SG-1000 ou la Mark-II et<a name="marker" id="marker2"> notre Master System. La puce
          vidéo a nettement évoluée depuis la Mark-II, et affiche 16 couleurs
          parmis 64.<br />
          <br />
          Détail interressant, le port pour les cartes de jeux vient de faire ici
          son apparition ! Ce format de cartes provient très probablement du MSX.</a></font></td>
      <td width="15" class="Style7"></td>
      <td width="246" class="Style7"><p><font face="Times New Roman" size="4"><img alt="Sega Mark-III" src="/dmic-corp/images/mk3set.jpg" border="0" width="329" height="250" /></font></p>
        <p align="center"><font face="Times New Roman" size="4">Mark-III
          avec imprimante et<a name="marker" id="marker2"> tablette !</a></font></p></td>
    </tr>
  </tbody>
</table>
<p align="center" class="Style7"><font face="Times New Roman" size="4"><br />
</font></p>
<p class="Style7"><font face="Times New Roman" size="4"><br />
  <br />
</font></p>
<p class="Style7"><b><i><u><font face="Times New Roman" size="4">Master System (1986) :</font></u></i></b></p>
<table cellspacing="0" cellpadding="0" border="0">
  <tbody>
    <tr>
      <td width="378" class="Style7"><font face="Times New Roman" size="4">La
        Master System est la première console internationale de la firme Sega.
        C'est une petite 8 bits proposant des jeux de qualité, et<a name="marker" id="marker2"> surtout, qui peux se vanter d'utiliser en 1986 une connectique Péritel
          RVB affichant de superbes images sur nos téléviseurs, à l'inverse de
          la Nintendo Famicom/NES et de sa connectique composite baveuse.<br />
          D'un design futuriste assez agréable, la Master System première du nom
          possède non seulement un port cartouche, bien évidemment, mais aussi
          un port pour cartes de jeux ! de la taille d'une carte de crédit, peu
          de jeux sortiront malgré tout sous ce format, certainement beaucoup
          moins avantageux économiquement parlant que les cartouches normales.<br />
          <br />
          La Master System dispose d'un excellent catalogue, très fournis en
          adaptations de bornes d'arcade de Sega de l'époque (Alien Syndrome, Out
          Run, Space Harrier, Hang On, etc.) et des premiers opus de séries à
          succès, tels que Phantasy Star.</a></font></td>
      <td width="4" class="Style7"></td>
      <td width="436" class="Style7"><p><font face="Times New Roman" size="4"><img alt="Sega Master System" src="/dmic-corp/images/mastersystems.jpg" border="0" width="300" height="187" /></font></p>
        <p align="center">&nbsp;</p></td>
    </tr>
  </tbody>
</table>
<p class="Style7"><font face="Times New Roman" size="4">La Master System
  Japonaise, elle, est sensiblement différente de notre Master System à nous,
  Européens, voir même Américains. En effet, à part pour la partie sonore, la
  Master System telle que nous la connaissons est un mixte entre la Mark-III pour
  le graphisme et<a name="marker" id="marker2"> la Mark-II pour le son (3 voies PSG), et
    accepte les cartouches de jeux (voir même les cartes !) de la Mark-III. Alors
    qu'au Japon, le modèle dénommé effectivemment Master System est une console
    à part, bien que compatible, incluant d'origine l'interface pour les fameuses
    lunettes 3D ainsi que la puce sonore FM 6 voies de la Mark-III mais
    malheureusement disposant d'un port cartouche différent.<br />
    Il est également interressant de noter que la Master System disposa d'un clône
    au Japon, vendu sous licence Samsung, du nom accrocheur de... Gam*boy !!</a></font></p>
<span class="Style7"><a name="marker"> </span>
<p class="Style7"><font face="Times New Roman" size="4"><br />
  <br />
</font></p>
<p class="Style7"><b><i><u><font face="Times New Roman" size="4">Master System 2 (1988)
  :</font></u></i></b></p>
<table cellspacing="0" cellpadding="0" border="0">
  <tbody>
    <tr>
      <td width="365" height="185" class="Style7"><font face="Times New Roman" size="4">Afin
        de réduire très certainement les coûts de production, la Master
        System 2 change de boitier et</font></a><font face="Times New Roman" size="4"><a name="marker" id="marker2"> perd au passage son lecteur de carte/adaptateur, et donc les lunettes 3D !
          les capacités techniques elles restent fort heureusement inchangées, et
          Alex Kidd in Miracle World, jeu fort sympathique au demeurant, s'intégre
          en ROM directement dans la console.<br />
          <br />
          La connectique et les jeux sur cartouches classiques restent tout à fait
          compatibles avec la première Master System, heureusement ! La Master
          System évolua encore quelques temps sous d'autres dénominations et
          apparences, comme le prouve les photos ci-bas :</a></font></td>
      <td width="12" height="185" class="Style7"></td>
      <td width="471" height="185" class="Style7"><p><font face="Times New Roman" size="4"><img alt="Sega Master System 2" src="/dmic-corp/images/mastersystem2.jpg" width="280" height="181" /></font></p></td>
    </tr>
  </tbody>
</table>
<table border="0">
  <tbody>
    <tr>
      <td width="367" class="Style7"><p><font face="Times New Roman" size="4"><img alt="Sega Master System 3" src="/dmic-corp/images/mastersystem3.jpg" width="283" height="200" /></font></p></td>
      <td width="82" class="Style7"></td>
      <td width="425" align="right" class="Style7"><p><font face="Times New Roman" size="4"><img alt="Sega Master System Girl" src="/dmic-corp/images/mastersystemgirls.jpg" border="0" width="353" height="200" /></font></p></td>
    </tr>
    <tr>
      <td width="367" class="Style7"><p align="center"><font face="Times New Roman" size="4">La
        Master System 3, ou &quot;Compact&quot;</font></p></td>
      <td width="82" class="Style7"></td>
      <td width="425" class="Style7"><p align="center"><font face="Times New Roman" size="4">La
        Master System Girl, uniquement au Brézil !</font></p></td>
    </tr>
  </tbody>
</table>
<p class="Style7"><font face="Times New Roman" size="4"><br />
  <br />
</font></p>
<p class="Style7"><b><i><u><font face="Times New Roman" size="4">Megadrive (1988) :</font></u></i></b></p>
<table cellspacing="0" cellpadding="0" border="0">
  <tbody>
    <tr>
      <td class="Style7"><font face="Times New Roman" size="4">Fort du succès
        de ses bornes d'arcade, de la maitrise des composants des mêmes bornes
        et<a name="marker" id="marker2"> voulant concurrencer le seul constructeur innovant
          dans le domaine des consoles de jeux vidéo de l'époque, à savoir Nec
          et leur fameuse PC-Engine, Sega décida lui aussi de lancer sa 16 bits,
          digne évolution de la Master System 8 bits. La Megadrive est
          architecturée autour d'un puissant microprocesseur Hitachi 68000 à 8
          MHz, secondé par le même microprocesseur que la Master System, un
          Zilog Z80 à 4 MHz qui s'occupera dorénavant de gérer le son de la
          console. Un puissant processeur graphique directement associé au
          microprocesseur sur un bus 16 bits propose d'animer jusqu'à 80 sprites
          de bonne taille sur plusieurs plans, et ce en 4x16 couleurs parmis 512 !
          Mais curieusement, ce qui peut sembler honnête en termes de nombre de
          couleurs affichables s'avère au final assez décevant : Chaque plan ne
          peut afficher plus de 16 couleurs, ce qui reste très limité par
          rapport à la PC-Engine et à sa palette de 64 couleurs. Mais qu'est ce
          qu'un plan dans le cas de la Megadrive ? Et bien : les sprites sont un
          plan à part, le décor est composé d'un ou deux plans, le score et
          autres informations sur le plan restant. Ainsi, les décors ne jouissent
          souvent que de 16 couleurs, et des jeux comme Lords of Thunder ou
          Wonderboy 3 ne tiennent absolument pas la comparaison avec leurs
          homologues sur PC-Engine.</a></font></td>
      <td width="10" class="Style7"></td>
      <td class="Style7"><p><font face="Times New Roman" size="4"><img alt="Sega Megadrive" src="/dmic-corp/images/megadrives.jpg" border="0" width="300" height="251" /></font></p>
        <p align="center">&nbsp;</p></td>
    </tr>
  </tbody>
</table>
<p class="Style7"><font face="Times New Roman" size="4">Par contre, la
  Megadrive tire largement son épingle du jeu au niveau animation<a name="marker" id="marker2"> et surtout sonore ! Ce n'est pas moins de 10 voix sonores stéréo qui sont
    proposées sur la Megadrive, explorant au passage presque toutes les
    technologies sonores de l'époque : 3 voix PSG (équivalentes à la Master
    System ou aux ordinateurs MSX ou Amstrad pour les connaisseurs), 6 voix FM de
    qualité arcade (pour un rendu d'instrument notamment à vent beaucoup plus
    réaliste) et enfin une voix PCM pour les digitalisations sonores. Il suffit
    d'écouter les musiques d'un Street of Rage par exemple pour apprécier la
    qualité sonore de la Megadrive. Impressionnant !<br />
    <br />
    La Megadrive marchera très bien aux USA (où elle sera dénommée Genesis) et
    en Europe, grâce notamment à de très bons jeux de sport ou d'excellentes
    adaptations de jeux d'arcade, souvent de la firme Sega. Son succès au Japon fut
    un peu plus mitigé, puisque occulté par le succès de la PC-Engine et quelques
    années plus tard, par la phénoménale Nintendo Super Famicom.</a></font></p>
<span class="Style7"><a name="marker"> </span>
<p class="Style7"><font face="Times New Roman" size="4"><br />
  <br />
  <br />
</font></p>
<p class="Style7"><b><i><u><font face="Times New Roman" size="4">MegaCD (1990) :</font></u></i></b></p>
<table cellspacing="0" cellpadding="0" border="0">
  <tbody>
    <tr>
      <td width="484" class="Style7"><font face="Times New Roman" size="4">Le
        MegaCD n'est pas qu'une &quot;bête&quot; extension au même titre que
        l'Interface Unit de la Nec ou d'un bête lecteur de CDROM pour PC :
        c'est presque une console à part entière ! en effet, le MegaCD est lui
        aussi pourvu d'un microprocesseur, un Hitachi 68000 à 12 MHz
        (contrairement aux 8 MHz de la console de base) et</font></a><font face="Times New Roman" size="4"><a name="marker" id="marker2"> de beaucoup de mémoire RAM dédiée. Il ne lui manque en fin de compte
          qu'une puce vidéo et sonore pour être autonome ou presque ! Pourquoi un
          autre processeur alors que la Megadrive dispose déjà d'un puissant 68000
          se demanderont certains ? Pour concurrencer la Super Nintendo et notamment
          son fameux mode 7 (zooms et rotations à gogo), il fallait un surcroit de
          puissance qu'apporte cet autre 68000. Et en effet, en allumant le MegaCD
          sans CDROMs à l'intérieur, une petite démo technique montre un logo
          SEGA pivotant sur lui-même (rotations), avec des nuages en zooms.</a></font></td>
      <td width="27" class="Style7"></td>
      <td width="201" class="Style7"><p><font face="Times New Roman" size="4"><img alt="Sega MegaCD" src="/dmic-corp/images/megacd.jpg" width="200" height="142" /></font></p></td>
    </tr>
  </tbody>
</table>
<p class="Style7"><font face="Times New Roman" size="4">Physiquement, le MegaCD
  premier modèle est une extension se glissant dessous le premier modèle de
  Megadrive, formant un ensemble un petit peu imposant, surtout en hauteur, mais
  assez design.</font></p>
<p class="Style7"><font face="Times New Roman" size="4">Malheureusement, ce
  modèle à tiroir fut vite remplacé pour des questions d'ordre mécanique par
  le MegaCD 2...</font></p>
<p class="Style7"><font face="Times New Roman" size="4"><br />
  <br />
  <br />
</font></p>
<p class="Style7"><b><i><u><font face="Times New Roman" size="4">Teradrive (1990) :</font></u></i></b></p>
<table cellpadding="2" border="0">
  <tbody>
    <tr>
      <td class="Style7"><font face="Times New Roman" size="4">Heureux mariage
        d'un PC à base de 80286 et<a name="marker" id="marker2"> d'une Megadrive, le
          Teradrive fut plus connu sur nos côtes grâce au modèle similaire
          présenté à l'époque par Amstrad, le MegaPC. Le Teradrive était
          construit par IBM pour Sega au Japon et possédais entre autres un
          disque dur interne de 30 Mo.<br />
          <br />
          Il est dommage que ce genre d'initiative n'est pas été répétée dans
          le futur, notamment avec la Saturn. Bien qu'avec la Dreamcast, on ne
          sait jamais ? ^_^</a></font></td>
      <td width="40" class="Style7"></td>
      <td class="Style7"><p><font face="Times New Roman" size="4"><img alt="Sega Teradrive" src="/dmic-corp/images/teradrive.jpg" width="280" height="285" /></font></p>
        <p align="center"><font face="Times New Roman" size="4">Le
          mariage d'une Megadrive et<a name="marker" id="marker2"> d'un PC</a></font></p></td>
    </tr>
  </tbody>
</table>
<p class="Style7"><font face="Times New Roman" size="4"><br />
  <br />
</font></p>
<p class="Style7"><b><i><u><font face="Times New Roman" size="4">MegaCD 2 (1991) :</font></u></i></b></p>
<table cellspacing="0" cellpadding="0" border="0">
  <tbody>
    <tr>
      <td class="Style7"><font face="Times New Roman" size="4">Cette fois-ci,
        la réincarnation du lecteur de CD &quot;intelligent&quot; de la
        Megadrive est une large platine sur laquelle vient s'enficher la
        Megadrive 2 ou même le premier modèle, mais moyennant un curieux
        puzzle de pièces métalliques et<a name="marker" id="marker2"> plastiques.
          L'ensemble est vraiment imposant, pas pratique à brancher car
          nécessitant deux alimentations séparées et des raccords pour les
          sorties vidéo et audio.<br />
          <br />
          Mais le MegaCD ne marcha pas ou bien mal, peu de titres sortiront
          dessus, et on peu certainement blâmer la difficulté à laquelle ont
          dû se heurter les programmeurs de l'époque pour attaquer un système
          comportant jusqu'à 3 microprocesseurs ! Cette leçon ne profitera
          malheureusement pas à Sega, du moins pas dans les quelques années à
          venir, comme le prouveront la 32-X et la Saturn...</a></font></td>
      <td width="10" class="Style7"></td>
      <td class="Style7"><p><font face="Times New Roman" size="4"><img alt="Sega MegaCD2" src="/dmic-corp/images/megacdboxs.jpg" border="1" width="335" height="200" /><br />
      </font></p>
        <p align="center">&nbsp;</p></td>
    </tr>
  </tbody>
</table>
<p class="Style7"><font face="Times New Roman" size="4"><br />
  <br />
</font></p>
<p class="Style7"><b><i><u><font face="Times New Roman" size="4">GameGear (1991) :</font></u></i></b></p>
<table cellspacing="0" cellpadding="0" border="0">
  <tbody>
    <tr>
      <td class="Style7"><font face="Times New Roman" size="4">Afin de
        répondre à la Nintendo GameBoy, première console portable à succès
        de l'histoire des jeux vidéo, et<a name="marker" id="marker2"> surtout aux consoles
          portables couleurs comme l'Atari Lynx et la formidable Nec PC-Engine GT,
          Sega lance la GameGear, sa propre console de jeux portable. Dotée d'un
          écran couleur de moindre qualité que ses rivales de l'époque, surtout
          vis à vis de la PC-Engine GT, la GameGear tire son hardware non pas de
          la Megadrive comme on aurait aimé le penser, mais plutôt de la
          vieillissante Master System 8 bits.<br />
          <br />
          Il s'en suit un système peu impressionnant techniquement, mais dont les
          jeux fort heureusement rattraperont la faible qualité du hardware.</a></font></td>
      <td width="20" class="Style7"></td>
      <td class="Style7"><p><font face="Times New Roman" size="4"><img alt="Sega GameGear" src="/dmic-corp/images/gamegears.jpg" border="0" width="300" height="166" /></font></p>
        <p align="center">&nbsp;</p></td>
    </tr>
  </tbody>
</table>
<p class="Style7"><font face="Times New Roman" size="4">Diverses extensions
  seront commercialisées pour la GameGear, comme l'adaptateur pour cartouches de
  jeux Master System (les deux systèmes étant très similaires niveau hardware),
  et<a name="marker" id="marker2"> un tuner NTSC transformant la GameGear en un télévision
    portable.</a></font></p>
<span class="Style7"><a name="marker"> </span>
<p class="Style7"><font face="Times New Roman" size="4"><br />
  <br />
</font></p>
<p class="Style7"><b><i><u><font face="Times New Roman" size="4">Wondermega (1991) :</font></u></i></b></p>
<table cellspacing="0" cellpadding="0" border="0">
  <tbody>
    <tr>
      <td class="Style7"><font face="Times New Roman" size="4">Curieusement, la
        Wondermega, un produit qui ne fut pas exporté en dehors du Japon, est
        un assemblage d'une Megadrive + un MegaCD dans un seul et</font></a><font face="Times New Roman" size="4"><a name="marker" id="marker2"> même boitier, d'assez bonne allure. Plusieurs constructeurs nippons
          s'attelèrent à en fabriquer, et nacquirent ainsi des modèles Pioneer
          pouvant servir de machine à Karaoke !</a></font>
        <p>&nbsp;</p></td>
      <td width="40" class="Style7"></td>
      <td class="Style7"><p><font face="Times New Roman" size="4"><img src="/dmic-corp/images/wondermega.jpg" width="315" height="192" /></font></p></td>
    </tr>
  </tbody>
</table>
<p class="Style7"><font face="Times New Roman" size="4"><br />
  <br />
</font></p>
<p class="Style7"><b><i><u><font face="Times New Roman" size="4">Megadrive 2 (1992) :</font></u></i></b></p>
<table cellspacing="0" cellpadding="0" border="0">
  <tbody>
    <tr>
      <td class="Style7"><font face="Times New Roman" size="4">Certainement
        pour des soucis de coût de production, la Megadrive se transforma un
        petit peu plus tard en Megadrive 2, beaucoup plus petite, et<a name="marker" id="marker2"> venant parfaitement s'insérer dans la nouvelle version du MegaCD (2 lui
          aussi en l'occurence). Les capacités techniques restent heureusement
          inchangées et les jeux sont entièrement compatibles d'un modèle à
          l'autre. Seule la connectique vidéo à curieusement changée, mais
          pourra être utilisée sur les Sega Pico et Sega Multimega.</a></font>
        <p>&nbsp;</p></td>
      <td width="40" class="Style7"></td>
      <td class="Style7"><p><font face="Times New Roman" size="4"><img src="/dmic-corp/images/megadrive2boxs.jpg" width="307" height="250" /></font></p></td>
    </tr>
  </tbody>
</table>
<p class="Style7"><font face="Times New Roman" size="4"><br />
  <br />
</font></p>
<p class="Style7"><b><i><u><font face="Times New Roman" size="4">Multimega (ou CDX)
  (1992):</font></u></i></b></p>
<table cellspacing="0" cellpadding="0" border="0">
  <tbody>
    <tr>
      <td class="Style7"><font face="Times New Roman" size="4">Pourquoi faire
        compliqué quand on peut faire simple ? La Multimega est sûrement la
        meilleure incarnation d'une Megadrive couplée à un MegaCD, et<a name="marker" id="marker2"> le tout sous un format de baladeur CD ! plus de problèmes de
          connectique, d'alimentation, de place, la Multimega s'utilise sans
          soucis avec le câble vidéo de la Megadrive 2 et peut fonctionner sur
          piles ! Elle peut même servir de baladeur CD classique ^_^</a></font>
        <p>&nbsp;</p></td>
      <td width="40" class="Style7"></td>
      <td class="Style7"><p><font face="Times New Roman" size="4"><img alt="Sega CD-X ou Multimega" src="/dmic-corp/images/cdxs.jpg" width="280" height="211" /></font></p></td>
    </tr>
  </tbody>
</table>
<p class="Style7"><font face="Times New Roman" size="4"><br />
  <br />
</font></p>
<p class="Style7"><b><i><u><font face="Times New Roman" size="4">Megajet (1993) :</font></u></i></b></p>
<table cellspacing="0" cellpadding="0" border="0">
  <tbody>
    <tr>
      <td class="Style7"><font face="Times New Roman" size="4">La MegaJet est
        en fait une Megadrive portable, dans le sens ou la console tient bien
        effectivemment dans la main. Mais rien à voir avec une Gameboy ou tout
        autre console avec écran intégré ! En effet, la MegaJet ne dispose
        pas d'écran et<a name="marker" id="marker2"> doit donc se connecter sur la
          télévision moyennant le même câble vidéo que la Megadrive 2. Les
          caractéristiques techniques restent inchangées par rapport à la
          console familiale classique, et fort heureusement, la logithèque passe
          sans problèmes.<br />
          <br />
          Mais alors, où est l'intéret d'avoir fait une console dite portable
          sans écran ? justement, la console ne rencontra pas de succès. Par
          contre, l'idée fit son chemin, et le simple fait d'en faire une
          véritable portable avec un écran couleur LCD intégré donnera
          naissance à la Nomad...</a></font></td>
      <td width="50" class="Style7"></td>
      <td class="Style7"><p><font face="Times New Roman" size="4"><img alt="Sega Megajet" src="/dmic-corp/images/megajets.jpg" border="0" width="250" height="298" /></font></p>
        <p align="center">&nbsp;</p></td>
    </tr>
  </tbody>
</table>
<p class="Style7"><font face="Times New Roman" size="4"><br />
  <br />
</font></p>
<p class="Style7"><b><i><u><font face="Times New Roman" size="4">32-X (1993) :</font></u></i></b></p>
<table cellspacing="0" cellpadding="0" border="0">
  <tbody>
    <tr>
      <td class="Style7"><font face="Times New Roman" size="4">Alors que <a target="_blank" href="http://mo5.com/MHI/Consoles/3do.htm">3DO</a> et<a name="marker" id="marker2"> Atari avec leur </a><a target="_blank" href="http://mo5.com/MHI/Consoles/jaguar.htm">Jaguar</a> introduisaient des consoles de jeux 32 bits ou plus, capables d'afficher
        des jeux en réelles 3D<a name="marker" id="marker2"> texturée, Sega décida lui
          aussi de proposer sa solution 32 bits sous la forme d'une greffe pour la
          Megadrive, la 32-X. La 32-X est architecturée autour de deux
          processeurs RISC d'Hitachi, des SH-2 à 23 MHz, que l'on retrouvera plus
          tard dans la Saturn. La 32-X fonctionne elle aussi à base de cartouches
          et s'enfiche elle-même dans le port cartouche de la Megadrive. Elle
          peut afficher près de 50.000 polygones texturés ou non à la seconde,
          ce qui est certes faible à la vue des performances des machines
          d'aujourd'hui, mais suffisant à l'époque pour adapter un titre phare
          et innovant de Sega Arcade : Virtua Racing ! En termes de capacités 3D,
          on peux même avancer que la 32-X était supérieure aux 3DO et Atari
          Jaguar.</a></font></td>
      <td width="40" class="Style7"></td>
      <td class="Style7"><p><font face="Times New Roman" size="4"><img alt="Sega 32-X" src="/dmic-corp/images/32xs.jpg" border="0" width="250" height="187" /></font></p>
        <p align="center">&nbsp;</p></td>
    </tr>
  </tbody>
</table>
<p class="Style7"><font face="Times New Roman" size="4">L'extension dispose en
  interne de 4 Mo de mémoire, venants se superposer aux mémoires déjà
  contenues dans la Megadrive, voir le MegaCD, et<a name="marker" id="marker2"> affiche grâce
    à une processeur graphique supplémentaire 32.768 couleurs simultanément.</a></font></p>
<span class="Style7"><a name="marker"> </span>
<p class="Style7">&nbsp;</p>
<p class="Style7"><font face="Times New Roman" size="4"><br />
  <br />
</font></p>
<p class="Style7"><b><i><u><font face="Times New Roman" size="4">Nomad (1994) :</font></u></i></b></p>
<table cellspacing="0" cellpadding="0" border="0">
  <tbody>
    <tr>
      <td class="Style7"><font face="Times New Roman" size="4">La Nomad est
        l'évolution de la MegaJet, donc une Megadrive portable, qui cette
        fois-ci incorpore un écran LCD couleur ! Malheureusement, la qualité
        de ce dernier n'a rien à voir avec la qualité des écrans à matrice
        active des consoles portables de Nec (PC-Engine GT et</font></a><font face="Times New Roman" size="4"><a name="marker" id="marker2"> PC-Engine LT). En effet, les couleurs bavent tout de même un peu, et
          l'écran a un peu de mal à restituer correctement le décor dans un jeu
          à scrolling rapide, comme le célèbrissime ThunderForce IV ! Il n'en
          reste pas moins agréable de pouvoir se balader partout en pouvant jouer
          à Phantasy Star 4 ou Shining Force 2, jeux autrement plus calmes
          graphiquement parlants, surtout que l'écran de la Nomad est
          définitivement plus grand que celui de sa grande rivale, la Nec PC-Engine
          GT.</a></font>
        <p>&nbsp;</p></td>
      <td width="30" class="Style7"></td>
      <td class="Style7"><p><font face="Times New Roman" size="4"><img alt="Sega Nomad" src="/dmic-corp/images/nomads.jpg" border="0" width="300" height="177" /></font></p>
        <p align="center">&nbsp;</p></td>
    </tr>
  </tbody>
</table>
<p class="Style7"><font face="Times New Roman" size="4"><br />
  <br />
</font></p>
<p class="Style7"><b><i><u><font face="Times New Roman" size="4">Pico (1994) :</font></u></i></b></p>
<table cellspacing="0" cellpadding="0" border="0">
  <tbody>
    <tr>
      <td class="Style7"><font face="Times New Roman" size="4">La Pico est une
        console totalement destinée aux enfants, dotée d'un crayon
        &quot;magique&quot; permettant de sélectionner des cases ou des dessins
        sur les livrets fournis avec les jeux. Je pense qu'il s'agit à
        l'intérieur d'une banale Master System, tant les graphismes et<a name="marker" id="marker2"> les animations sont sommaires.<br />
          <br />
          La Pico utilise la connectique vidéo de la Megadrive 2 et possède un
          catalogue d'à peu près une quinzaine de cartouches, chaque cartouche
          acceuillant en général plusieurs jeux.</a></font>
        <p>&nbsp;</p></td>
      <td width="40" class="Style7"></td>
      <td class="Style7"><p><font face="Times New Roman" size="4"><img alt="Sega Pico" src="/dmic-corp/images/pico.jpg" width="214" height="223" /></font></p>
        <p align="center"><font face="Times New Roman" size="4">La
          Pico, pour les enfants !</font></p></td>
    </tr>
  </tbody>
</table>
<p class="Style7"><font face="Times New Roman" size="4"><br />
  <br />
</font></p>
<p class="Style7"><b><i><u><font face="Times New Roman" size="4">Neptune (1994) :</font></u></i></b></p>
<table cellspacing="0" cellpadding="0" border="0">
  <tbody>
    <tr>
      <td class="Style7"><font face="Times New Roman" size="4">Bien qu'elle ne
        fut jamais sortie, et<a name="marker" id="marker2"> qu'il ne soit même pas sûr
          qu'elle est existée au moins sous l'état de prototype, la Neptune
          devrait être le chainon manquant entre la 32-X et la Saturn, ou plus
          précisément, une Megadrive comportant l'extension 32-X incluse !<br />
          <br />
          Néanmoins, on appréciera son look très sympathique, et le fait que
          Sega est définitivement envie de sortie une nouvelle console portant le
          nom d'une planète de notre système solaire !</a></font></td>
      <td width="40" class="Style7"></td>
      <td class="Style7"><p><font face="Times New Roman" size="4"><img alt="Sega Neptune" src="/dmic-corp/images/neptune.jpg" width="350" height="187" /></font></p>
        <p align="center"><font face="Times New Roman" size="4">La
          Neptune, un prototype ?</font></p></td>
    </tr>
  </tbody>
</table>
<p class="Style7"><font face="Times New Roman" size="4"><br />
  <br />
</font></p>
<p align="left" class="Style7"><b><i><u><font face="Times New Roman" size="4">Saturn (1995) :</font></u></i></b></p>
<table cellspacing="0" cellpadding="0" border="0">
  <tbody>
    <tr>
      <td class="Style7"><font face="Times New Roman" size="4">La
        &quot;vraie&quot; 32 bits de Sega fit son apparition en 1995 au Japon,
        et<a name="marker" id="marker2"> se heurtera quelques mois plus tard à une nouvelle
          venue, la Sony Playstation. Tirant partie de l'expérience acquise sur
          la 32-X, qui ne marchait décidément pas, Sega améliora subtilement le
          modèle de base en augmentant la fréquence des deux processeurs Risc
          Hitachi SH-2 à 28 MHz (contre 23 MHz pour la 32-X), en y ajoutant deux
          processeurs graphiques très performants, au moins dans l'animation des
          sprites et des plans graphiques, et un processeur sonore Yamaha de 32
          voix piloté par un 68000. Malheureusement, tout ceci fait de la Saturn
          une console extrèmement difficile à programmer, ce qui lui causera le
          plus grand tord. N'empêche, la Saturn est capable d'afficher 5 plans
          graphiques indépendants en 16 bits, dont 2 en rotation ou en zoom, plus
          une infinité de sprites, et dispose de beaucoup plus de mémoire vidéo
          que la PlayStation, par exemple.<br />
          <br />
          Mais le principal obstacle auquel s'est vraiment heurtée la Saturn,
          c'est la 3D !</a></font></td>
      <td width="20" class="Style7"></td>
      <td class="Style7"><p><font face="Times New Roman" size="4"><img alt="Sega Saturn" src="/dmic-corp/images/saturn.jpg" width="250" height="216" /></font></p></td>
    </tr>
  </tbody>
</table>
<p class="Style7"><font face="Times New Roman" size="4">Peu de temps après sa
  sortie, voici qu'arrive sur le marché quémandeur de nouvelles technologies un
  nouveau constructeur dans le domaine des jeux vidéo, Sony. Et<a name="marker" id="marker2"> celui-ci apporte sous son bras le fruit technologiquement extrèmement avancé
    de sa collaboration avortée avec Nintendo (Sony devait construire l'extension
    CD de la Super Famicom, souvenez-vous !) qui, il faut bien le reconnaitre,
    dépasse tout ce que l'on a jamais vu en qualité 3D auparavant, Saturn comprise
    !<br />
    <br />
    Le fait est que l'on ne peut pas dire que les ingénieurs de Sega croyaient
    beaucoup à la 3D, et ce certainement à cause du peu de succès de leur
    extension 32-X. La Saturn était donc équipée certes pour générer des images
    en 3D, mais de manière peu orthodoxe : A l'opposé des cartes accélératrices
    3D classiques et de la PlayStation, qui calcule des triangles dans les 3
    dimensions, la Saturn utilise ses capacités internes à déformer des sprites !
    Il s'en suit un affichage souvent chaotique, comme dans Sega Rally, puisque les
    coordonnées inférieures des sprites ne peuvent à prioris être inférieures
    à 0 et donc disparaitre de l'écran. Ce défaut sera corrigé plus tard, ou du
    moins contourné, mais tous les jeux 3D ou presque de la Saturn affichent ce
    genre de déformation peu naturelle, immédiatemment visible en regardant la
    route dans un jeu de voiture par exemple.<br />
    <br />
    Il n'en reste pas moins que la Saturn est absolument imbattable en termes de
    capacités 2D, et comme nous le démontre Radiant Silvergun pour ne citer que
    lui (le meilleur shoot-them-up du monde, dois-je le rappeler ?), une utilisation
    poussée de la Saturn en mélangeant ses fabuleuses capacités 2D et un peu de
    3D donne un résultat graphique époustouflant, même de nos jours !<br />
    <br />
    L'ultime évolution de la Saturn restera sans doutes l'incroyable Hi-Saturn
    d'Hitachi, portable avec un écran LCD couleur intégré et un GPS ! Photos !</a></font></p>
<span class="Style7"><a name="marker"> </span>
<table cellspacing="0" cellpadding="0" border="0">
  <tbody>
    <tr>
      <td class="Style7"><p><font face="Times New Roman" size="4"><img alt="Hitachi Hi-Saturn" src="/dmic-corp/images/hisaturn2s.jpg" border="0" width="266" height="200" /></font></a></p></td>
      <td class="Style7"><p><font face="Times New Roman" size="4"><img alt="Hitachi Hi-Saturn" src="/dmic-corp/images/hisaturn3s.jpg" border="0" width="268" height="200" /></font></p></td>
      <td align="right" class="Style7"><p><font face="Times New Roman" size="4"><img alt="Hitachi Hi-Saturn" src="/dmic-corp/images/hisaturn1s.jpg" border="0" width="266" height="200" /></font></p></td>
    </tr>
    <tr>
      <td class="Style7"><p align="center"><font face="Times New Roman" size="4">La
        console seule</font></p></td>
      <td class="Style7"><p align="center"><font face="Times New Roman" size="4">Gros
        plan sur l'écran couleur LCD</font></p></td>
      <td class="Style7"><p align="center"><font face="Times New Roman" size="4">Le
        même écran replié sur la console, pour le transport</font></p></td>
    </tr>
  </tbody>
</table>
<p class="Style7"><font face="Times New Roman" size="4"><br />
  <br />
</font></p>
<p class="Style7"><b><i><u><font face="Times New Roman" size="4">Wonderbook (1995) :</font></u></i></b></p>
<table cellspacing="0" cellpadding="0" border="0">
  <tbody>
    <tr>
      <td class="Style7"><font face="Times New Roman" size="4">Au même titre
        que la Pico, le Wonderbook est une console, ou du moins un jouet,
        destiné uniquement aux plus jeunes. Mais au contraire de la Pico, le
        Wonderbook est complètement dénué de sortie télévision, et<a name="marker" id="marker2"> ne sait produire que du son !<br />
          Un produit équivalent se dénommait Electronic Comic Book (bande
          dessinée électronique) mais s'adressait à des enfants un petit peu
          plus grands.<br />
          <br />
          Le Wonderbook était produit par Sega en collaboration avec la compagnie
          Américaine RKS.</a></font></td>
      <td width="40" class="Style7"></td>
      <td class="Style7"><p><font face="Times New Roman" size="4"><img alt="Sega Wonderbook" src="/dmic-corp/images/wonderbook.jpg" width="254" height="223" /></font></p>
        <p align="center"><font face="Times New Roman" size="4">Le
          Wonderbook, version bridée de la Pico ?</font></p></td>
    </tr>
  </tbody>
</table>
<p class="Style7"><font face="Times New Roman" size="4"><br />
  <br />
</font></p>
<p class="Style7"><b><i><u><font face="Times New Roman" size="4">Genesis 3 (1997) :</font></u></i></b></p>
<table cellspacing="0" cellpadding="0" border="0">
  <tbody>
    <tr>
      <td height="145" class="Style7"><font face="Times New Roman" size="4">Cette
        toute dernière incarnation, de fort petite taille, de la Megadrive
        originelle n'est sortie qu'aux USA, et<a name="marker" id="marker2"> était vendue
          semble t-il avec un pack de jeux regroupant 6 jeux sur une cartouche.<br />
          Elle est par contre tout à fait incompatible avec le MegaCD et la 32-X.<br />
          <br />
          Trop mignon !</a></font></td>
      <td width="40" height="145" class="Style7"></td>
      <td height="145" class="Style7"><p><font face="Times New Roman" size="4"><img alt="Sega Genesis3" src="/dmic-corp/images/genesis3s.jpg" width="209" height="200" /></font></p></td>
    </tr>
  </tbody>
</table>
<p class="Style7"><font face="Times New Roman" size="4"><br />
  <br />
</font></p>
<p class="Style7"><b><i><u><font face="Times New Roman" size="4">Dreamcast (1998) :</font></u></i></b></p>
<table cellspacing="0" cellpadding="0" border="0">
  <tbody>
    <tr>
      <td class="Style7"><font face="Times New Roman" size="4">En 1998, Sega
        innove (pour une dernière fois ?!) et<a name="marker" id="marker2"> lance la
          première 128 bits du marché. La Dreamcast est née d'un conglomérat
          technologique de constructeurs Japonais, à savoir : Hitachi pour le
          processeur Risc (un SH-4 à 200 MHz), Yamaha pour la partie sonore (64
          voix) et le lecteur de supports dédié, le GDROM (1.2 Go de données),
          Nec et Innovation Technologies pour le processeur graphique, un PowerVR2
          (3 M de polygones). D'où le nom de Dream-Cast, littéralement &quot;une
          équipe de rêve&quot;, faisant référence à l'ensemble de ces
          constructeurs.<br />
          Il est important de rappeler que la Saturn utilisait déjà des
          processeurs Hitachi (deux SH-2) et une puce sonore Yamaha (32 voix,
          pilotée par un 68000).<br />
          <br />
          Pourtant dotée d'excellents titres comme Shenmue, Jet Set Radio et MSR,
          la Dreamcast ne rencontra pas le succès estimé, sûrement à cause de
          l'échec de la Saturn et au fait que Sony lança la Playstation 2 alors
          que la Dreamcast commençait seulement à sortir de l'ombre.</a></font></td>
      <td width="10" class="Style7"></td>
      <td class="Style7"><p><font face="Times New Roman" size="4"><img alt="Sega Dreamcast" src="/dmic-corp/images/dreamcasts.jpg" border="0" width="307" height="225" /></font></p>
        <p align="center">&nbsp;</p></td>
    </tr>
  </tbody>
</table>
<p align="center" class="Style7"><font face="Times New Roman" size="4">L'avenir
  de SEGA</font></p>
<p class="Style7"><font face="Times New Roman" size="4">Maintenant c'est
  officiel ! sega stop la production de dreamcast le 31 mars 2001 ....... triste
  nouvelle pour touts les fans .....mais le pire, ce n'est pas l'arrét de la DC,
  c'est l'arret de sega dans le monde des constructeurs ,dit du hardware .......<br />
  Maintenant sega est un editeur tiers comme capcom , ou bien square .....<br />
  Mise a part EA sport ,tous on eux une bonne reaction .......<br />
  Les voici , tirées d'un article de game one.net......<br />
  &quot;Voici le bilan des déclarations de ces sociétés, toutes japonaises, si
  on met de côté le nouveau venu dans le monde des consoles, Microsoft.</font></p>
<p class="Style7"><font face="Times New Roman" size="4">Bandai : société
  créatrice des Tamagotchi et<a name="marker" id="marker2"> détentrice de nombreuses licences
    de dessins animés japonais.<br />
  &quot;Sega possède la plus grande propriété de jeux et la plus grande
    puissance de développement. L’industrie du jeu sera encore plus stimulée
    dans l’avenir, grâce à Sega. Nous attendons leurs futurs titres&quot;.</a></font></p>
<span class="Style7"><a name="marker" id="marker2">
<p>
Capcom : allié
de Sega depuis de nombreuses années, Capcom a été l’un des plus grands
éditeurs de la Dreamcast avec des adaptations de nombreux jeux de combat et</a><font face="Times New Roman" size="4"><a name="marker" id="marker2"> de la saga Resident Evil.<br />
&quot;Capcom a toujours supporté la Dreamcast, et nous sommes déçus que son
vrai potentiel n’ait pas été atteint, pour les joueurs. Concernant l’annonce
de Sega, nous souhaitons que tout le monde soit détendu et patient. Le retrait
de la Dreamcast sur le marché du hardware était prévisible, et n’aura pas d’influence
sur notre compagnie. Cependant, ce fut tout de même une annonce soudaine et
surprenante. Nous allons terminer les projets Dreamcast en cours et les sortir
sur le marché comme prévu. Nous pensons que ce sera une excellente décision
pour Sega sur le long terme. Nous espérons qu’ils se rétablissent
complètement en fournissant leurs jeux sur de multiples plateformes&quot;.</a></font>
</p>
</span>
<p class="Style7"><a name="marker" id="marker2"><font face="Times New Roman" size="4">Enix : grand rival de
  SquareSoft au Japon avec sa série mythique de RPG : Dragon Quest. N’a jamais
  vraiment développer pour les machines de Sega.<br />
  &quot;Nous n’avons pas vraiment de commentaires à faire sur leur intention de
  quitter le marché du hardware et de devenir un développeur, nous attendons de
  voir leurs jeux. Nous ne voulons pas porter de jugement sur la gestion des
  autres entreprises, mais nous espérons que Sega fasse beaucoup de bons jeux
  dans l’avenir.&quot;</font></a></p>
<p class="Style7"><a name="marker" id="marker2"><font face="Times New Roman" size="4">Microsoft : géant de l’informatique
  professionnel et grand public, le fabricant de la future Xbox aimerait sans
  aucun doute travailler main dans la main avec Sega.<br />
  &quot;Nous sommes contents que Sega conserve la Xbox dans sa ligne de mire, bien
  que leur intention de développer sur Xbox n’ait pas encore été annoncée.
  Nous souhaitons continuer nos discussions avec Sega cette année. Si Sega veut
  choisir une bonne plateforme, ils doivent nous rejoindre&quot;.</font></a></p>
<p> <span class="Style7"><span class="Style7"><a name="marker" id="marker2">Namco : grand
  rival de Sega sur le marché de l’arcade. Allié de poids de Sony depuis de
  nombreuses années avec des titres comme Tekken ou Ridge Racer.<br />
  &quot;Namco et</a><font face="Times New Roman" size="4"><a name="marker" id="marker2"> Sega sont à la fois de bons rivaux et de merveilleux compagnons depuis 40 ans.
    Nous voulons contribuer à développer une industrie saine en poursuivant cette
    compétition et cette coopération dans le futur&quot;.</a></font> </span></p>
<span class="Style7"><a name="marker" id="marker2">
<p>
Nintendo : ennemi
juré de Sega durant la première moitié des années 90. Une guerre terminée
qui annonce un inévitable rapprochement.<br />
&quot;Sega travaille actuellement sur plusieurs titres Game Boy Advance, et</a><font face="Times New Roman" size="4"><a name="marker" id="marker2"> malgré le fait que Sega ait confirmé ses plans d’arrêter la production de
Dreamcast, nous ne pouvons pas encore annoncer s’il développera sur GameCube.
Notre politique a toujours été d’étendre nos licences de développement de
jeux aux entreprises intéressées, tant qu’il n’y a pas de conditions
spéciales et Sega est dévoué à la production de titres de qualité. C’est
quelque chose que nous n’avons pas à craindre de la part de Sega, nous
espérons qu’il fera le meilleur usage du hardware Nintendo&quot;.</a></font>
</p>
<a name="marker" id="marker2">
<p>
<font face="Times New Roman" size="4">Sony : constructeur de
la PlayStation 2, la console qui a achevé l'existence fragile de la Dreamcast.
Sega, pour survivre, n’a plus d’autre choix que de développer sur la
nouvelle console de Sony.<br />
&quot;Sega a développé beaucoup de jeux extraordinaires et</font></a><font face="Times New Roman" size="4"><a name="marker" id="marker2"> est reconnu comme l’une des plus grandes entreprises de production de jeux
dans le monde, grâce à sa haute technologie. Les marchés de la PlayStation et
de la PlayStation 2 vont encore beaucoup progresser, et nous attendons que leur
catalogue s’enrichisse avec des titres attractifs de chez Sega.&quot;</a></font>
</p>
<a name="marker" id="marker2">
<p>
<font face="Times New Roman" size="4">Comme vous avez pu le
voir ,meme Sony qui est devenu l'enemi number one de sega , a une bonne reaction
, c'est sur que la play 2 avait besoin de sega pour avoir des bons jeux ...(!)..
mais il y a toujours des mecontents ....par exemple EA Sport...En effet !
rapellons que EA sport est allié à sony ! Et</font></a><font face="Times New Roman" size="4"><a name="marker" id="marker2"> que maintenant cette boite va avoir dela concurence de taille; SEGA ! Rapellons
que sega est à l'origine des meilleurs jeux de sports ! (sauf le foot !), (tout
les 2k et virtua tennis)</a></font>
</p>
</span></span>
<p class="Style7"><a name="marker" id="marker2"><font face="Times New Roman" size="4">Tout ca pour dire que
  sega a besoin des concurents pour remonter la pente !<br />
  Malgré le succés de la dream sega est toujours dans le rouge .........<br />
  Mais ce depart n'a pas que des incovenient !<br />
  Pour preuve sega va faire un carton en tant qu'editeurs, il serait logique que
  si ils revenaient<br />
  dans le monde des consoles ils auraient un nouveau public beaucoup plus large !</font></a></p>
<p class="Style7"><a name="marker" id="marker2"><font face="Times New Roman" size="4">Gageons que sega
  revienne un jour dans le petit monde des consoles !!!<br />
  Cela fera plaisir à beaucoup de monde .......<br />
  Pour le moment nous ne pouvons que leur souhaiter bonne chance pour la
  suite...........</font></a></p>
 
<p class="Style7 Style7">&nbsp;</p>
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
