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
  <p align="center"><img border="0" src="/dmic-corp/images/Final_Fantasy_IV_logo.gif" width="260" height="98" /></p>
  <font color="#FFFFFF" face="Comic Sans MS"><img src="/dmic-corp/images/kain_ani.gif" border="0" width="33" height="34" />Mes très chers fans de RPG, laissez-moi vous présenter un de 
mes meilleurs RPG! Vous êtes bien à ma page dédiée à Final Fantasy 4, un RPG que 
quasiment personne en France ne connaît tout simplement parce que d'une part il 
n'est jamais sorti officiellement, et d'autre part, en import il était 
extrêmement rare! Seules de très rares personnes possèdent la cartouche 
américaine et je fais heureusement parti du club, nah (petit clin d'oeil à un 
ami lyonnais soit dit en passant...). La version américaine vulgairement appelée 
Final Fantasy 2 a été légèrement censurée par rapport à la version japonaise. 
Quelques rares scènes soit disant violentes ont été supprimées et le niveau de 
difficulté affaibli, enfin bon, c'est pas non plus du Walt Disney, si vous 
arrivez à enchaîner tous les combats à la fin sans fuire une seule fois, c'est 
que vous êtes vraiment pros!</font>
  <p><font face="Comic Sans MS" color="#FFFFFF">Cecil est le commandant de la puissante flotte aérienne du royaume de Baron et a pour but de retrouver tous les cristaux du monde et de les ramener à son Roi. Au cours d'une mission, il prend conscience de la cruauté avec laquelle le Roi de Baron dérobe les cristaux aux
    autres peuples et lui demande une explication. Mais le Roi qui ne veut rien savoir le démet de ses fonctions et l'envoie au village Myst pour une ultime mission qui ne se passe pas comme prévu…<br />
    <br />
    Ainsi, le chevalier des ténèbres Cecil perdit son 
    titre de Capitaine des Red Wings. Lui et Dragoon Kain quittèrent Baron pour le Village de Mist 
    dans une vallée qui sombre dans un brouillard épais. L'Airship a été un rêve 
    pour tous les Hommes. Après la réalisation du rêve arrivèrent l'avidité et 
    l'ambition. Grâce à sa flotte d'Airships, Baron devint la nation la plus 
    puissante. Mais pourquoi Baron 
    recherche les cristaux? Pourquoi les monstres sont en train d'apparaître?<br />
    Les 
    cristaux perdent leur lumière en silence... </font></p>
  <p><font color="#FFFFFF"><font face="Comic Sans MS">A partir de là, Cecil va traverser diverses contrées pour rejoindre Baron et va entre temps, rencontrer beaucoup de personnes ainsi que son véritable ennemi ce qui va le pousser à rejeter sa nature de Chevalier Noir et à devenir un Paladin…<br />
    <br />
    Final Fantasy IV est le premier volet de la série à voir le jour sur Super Famicom (Super Nintendo chez nous). Même si les capacités de la console ne sont que peu exploitées on peut remarquer de grands changements au niveau graphique et musical. Les personnages et les décors sont plus fins et les magnifiques mélodies
    toujours composées par Nobuo Uematsu disposent d'une qualité sonore impressionnante pour l'époque. C'est aussi dans ce volet que
    l'ATB (Active Time Battle) fait son apparition, système qui permet aux monstres et aux héros d'attaquer en même temps et non plus chacun leur tour comme dans les FFs précédents.<br />
    <br />
    Final Fantasy IV est sorti le 19 juillet 1991 au Japon, il sortira un peu plus tard aux Etats-Unis sous le nom de Final Fantasy II avec beaucoup de détails du scénario changés, moins de combats, des ennemis plus simples et certaines scènes censurées. Final Fantasy IV se verra réédité aux côtés de Final Fantasy V et IV
    dans Final Fantasy Colletion sorti en Mars 1999 au Japon. La sortie US de la version &quot;hard&quot; s'est elle faite en 2001 dans le pack FF
    Chronicles, avec Chrono Trigger. Les américains ont enfin pu profiter du jeu complet et retraduit. Quant à l'Europe, FFIV a vu le jour accompagné de FFV dans Final Fantasy Anthology :
    Edition Européenne à la mi-2002. Malheureusement, il est resté en anglais.</font><br />
  </font></p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p><font face="Comic Sans MS" color="#FFFFFF"><img alt="Des dialogues vraiment émouvants!" 
src="/dmic-corp/images/screenff401.jpg" border="0" width="275" height="243" />Des dialogues vraiment émouvants</font></p>
  <p><font color="#FFFFFF" face="Comic Sans MS">Dans ce FF, vous dirigez au début du jeu un chevalier 
    au service d&#8217;un roi qui semble au départ être un monarque maléfique aux 
    ambitions mystérieuses. Le héros, tourmenté par les actes crapuleux qu&#8217;il commet 
    au nom du roi va progressivement se remettre en cause et devenir un véritable 
    héros&nbsp;! On découvrira tout au long du jeu de nouveaux événements, des 
    scènes inoubliables (comme le sacrifice de votre ami Cid) et d&#8217;incroyables coups 
    de théâtre (par exemple lorsqu&#8217;on découvre que le roi avait été manipulé ou que 
    votre principal ennemi est&#8230;votre frère&nbsp;!) qui bouleversent complètement le 
    scénario&nbsp;!</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF"><img alt="Une très bonne intro!" 
src="/dmic-corp/images/screenff403.jpg" border="0" width="275" height="241" />Une très bonne intro!</font></p>
  <p><font color="#FFFFFF" face="Comic Sans MS">Mais FF4, ce n&#8217;est pas seulement des coups de théâtre 
    et un scénario, c&#8217;est aussi un RPG avec de bonnes musiques dont la musique 
    inoubliable de Rosa, la petite amie du héros. Le système est simple, pas de 
    complication avec des évolutions de classes, etc&#8230; Cependant, chaque personnage a 
    une classe unique (summoner, dragon-knight, black mage, etc&#8230;) et autre détail 
    aussi en ce qui les concerne, on ne peut pas les changer par nous même dans 
    l&#8217;aventure, le scénar le fait pour vous&nbsp;!</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF"><img alt="Une belle carte du monde pour l'époque!" 
src="/dmic-corp/images/screenff402.jpg" border="0" width="275" height="243" />Une belle carte du monde pour l'époque!</font></p>
  <p><font color="#FFFFFF" face="Comic Sans MS">Sorti en 1991, c&#8217;est le deuxième FF dispo aux 
    Etats-Unis (après FF1 en 1990), premier FF sorti sur SNES, il est devenu par 
    conséquent le premier FF dispo en Europe puisque la SNES pouvait accepter des 
    jeux imports grâce à un adaptateur. Certes, paraît-il, il n&#8217;est pas vraiment 
    révolutionnaire par rapport à ses concurrents de l&#8217;époque (que je n&#8217;ai jamais 
    connu&#8230;), il a conservé une qualité graphique des FF précédents à savoir très 8 
    bits, mais son intérêt ne réside pas dans sa qualité 
    graphique&nbsp;!</font></p>
  <p><font color="#FFFFFF" face="Comic Sans MS">Vous pouvez essayer de finir le jeu, il n'est vraiment 
    pas très long, un rpg-gamer &quot;normal&quot; devrait le finir en 20 heures seulement. 
    Pour le finir à 100% (avoir Odin, etc...), rajoutez quelques heures en plus! Je 
    ne vais naturellement pas vous raconter toute l'histoire, d'une part ça mettrait 
    beaucoup de temps, d'autre part, je préfère que vous la découvrez vous-même! De 
    toute façon, l'intro de cette page en dit assez sur la suite du jeu. Le scénar 
    est, je vous l'assure très très riche et vraiment merveilleux! On a vraiment 
    l'impression de vivre une de ces magnifiques légendes qu'on nous a raconté 
    durant notre tendre enfance... Le scénar vous promet beaucoup de coups de 
    théâtre aussi, croyez-moi!</font></p>
  <p>&nbsp;</p>
  <p><font face="Comic Sans MS" color="#FFFFFF"><img alt="Un système de combat simple!" 
src="/dmic-corp/images/screenff404.jpg" border="0" width="275" height="241" />Un système de combat simple!</font></p>
  <p><font color="#FFFFFF" face="Comic Sans MS">Premier Final à sortir sur ce qui était la nouvelle 
    console de Nintendo à l'époque (la SNES), elle était et reste encore aujourd'hui 
    une référence pour les Final Fantasy qui l'ont suivi. Les cristaux magiques dans 
    le scénario du 5, les dialogues poétiques et le charisme des personnages du 6, 
    un héros qui sort du groupe dans le 7, le chevalier-dragon du 9, bref, tous les 
    FF sortis après le 4 ont été influencés par ce dernier.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Voilà, j'espère vous avoir mis l'eau à la bouche et je 
    vous conseille fortement de finir ce RPG, il vous laissera de bons souvenirs. Il 
    est assez court alors pas d'excuse! Si vous voulez voir de magnifiques dessins 
    de Yoshitaka Amano consacrés à ce jeu, cliquez <a target="_parent" href="file:///E:/Mes%20sites%20webs/Dark%20mulau's%20RPG%20Parody/YoshitakaAmano.htm">ici</a>.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF"><img src="/dmic-corp/images/ff2.jpg" border="0" width="256" height="224" /> C'est con, mais on l'a appelé FF2 chez les 
    Ricains!</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF"><img src="/dmic-corp/images/FF2-boite1.jpg" 
border="0" width="271" height="190" />Une boîte de jeu simple... mais quelle 
    cartouche se cache à l'intérieur!</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF"><img src="/dmic-corp/images/FF2-boite2.jpg" 
border="0" width="266" height="193" />Une description et traduction francaises 
    collées à l'arrière qui ont sali l'image du jeu! &quot;A la tête de votre flotte 
    aérienne, vous Cécile, capitaine des Ailes Rouges serez vous capable de déjouer 
    les plans du roi et sauvez le monde? Dans ce jeu, tous vos actes déterminent 
    l'évolution de l'histoire. Etes-vous prêt!!!&quot; Notez &quot;Cécile&quot; avec un &quot;e&quot; pour 
    faire tapette et &quot;Ailes Rouges&quot; traduit de Red Wings pour faire 
    moche!</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF"><img src="/dmic-corp/images/FF2-walkthrough.jpg" 
border="0" width="350" height="258" />Un mini-walkthrough dans le mode d'emploi! On 
    ne vera plus ça...</font></p>
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
