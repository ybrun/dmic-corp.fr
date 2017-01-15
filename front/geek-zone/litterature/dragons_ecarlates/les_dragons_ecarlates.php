<?php require_once ('../../../../ScriptLibrary/ban_ip.php') ;?>
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
.Style2 {font-family: "Times New Roman", Times, serif}
.Style3 {color: #FFFFCC}
</style>
<script src="/dmic-corp/SpryAssets/SpryCollapsiblePanel.js" type="text/javascript"></script>
<script src="/dmic-corp/SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="/dmic-corp/SpryAssets/SpryCollapsiblePanel.css" rel="stylesheet" type="text/css">
<link href="/dmic-corp/SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css">
<!-- InstanceEndEditable -->
<link href="../../../../Styles/Fluid%20Grid%20Layout/boilerplate.css" rel="stylesheet" type="text/css">
<link href="../../../../Styles/Fluid%20Grid%20Layout/test.css" rel="stylesheet" type="text/css">
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
<script src="../../../../Styles/Fluid%20Grid%20Layout/respond.min.js"></script>
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
    <h1 align="center" class="Style3">Les Dragons Ecarlates.</h1>
    <p align="center" class="Style3">&nbsp;</p>
    <div id="CollapsiblePanel1" class="CollapsiblePanel">
      <div class="CollapsiblePanelTab" tabindex="0">Tome 1 : Une menace venant de l'Ouest</div>
      <div class="CollapsiblePanelContent">
        <div id="CollapsiblePanel6" class="CollapsiblePanel">
          <div class="CollapsiblePanelTab" tabindex="0">Prologue</div>
          <div class="CollapsiblePanelContent">
            <div id="TabbedPanels3" class="TabbedPanels">
              <ul class="TabbedPanelsTabGroup">
                <li class="TabbedPanelsTab" tabindex="0">Version du 30/12/2011</li>
                <li class="TabbedPanelsTab Style2" tabindex="0">
                  <div align="justify">Version du 31/12/2011</div>
                  </li>
                <li class="TabbedPanelsTab Style2" tabindex="0">
                  <div align="justify">Version du 05/01/2012</div>
                  </li>
                </ul>
              <div class="TabbedPanelsContentGroup">
                <div class="TabbedPanelsContent Style2 Style2">
                  <p align="justify">La Planète Bleue brillait intensément. La Terre en l’an 972 avant Jésus Christ.</p>
                  <p align="justify"> </p>
                  <p align="justify">Le Royaume de Telrúnya était gouverné par le roi Celegorm Ier, un Nulénurien. Il était le  seul représentant de son espèce. Les Nulénuriens, exterminé par l’alliance maléfique des Orcs et des Gobelins, étaient un peuple d’humains dotés d’une incroyable longévité. Certains pouvaient, soit disant, vivre jusqu’à 500 ans. Ils étaient tous grands, blonds, à la pilosité orange et possédaient un fort caractère.</p>
                  <p align="justify">50 ans plus tôt, lorsque le village du petit Celegorm fut attaqué, ses parents, dont l’histoire n’a pas retenu les noms, le firent quitter la petite maison où ils vivaient et le placèrent sur une barque. Celegorm voyagea plusieurs jours sur la rivière Murmin, sans boire ni manger. Lorsque l’embarcation s’arrêta, un pêcheur le retrouva quasiment mort. A son réveil, il se retrouva dans un lit très confortable. L’homme entra avec un plateau de fruit.</p>
                  <p align="justify"> </p>
                  <p align="justify">-           Alors mon enfant, que t’est-il arrivé ?</p>
                  <p align="justify"> </p>
                  <p align="justify">Celegorm était encore prit de mutisme tant ce qu’il lui était arrivé était horrible.</p>
                  <p align="justify"> </p>
                  <p align="justify">-          Je crois savoir ! Les Orcs et les Gobelins ont attaqué ton village. Ne t’inquiète pas, je ne te ferai aucun mal. Tu vivras chez moi le temps que tu ailles mieux… </p>
                  <p align="justify"> </p>
                  <p align="justify">Celegorm vécut près de 10 ans chez le pêcheur, jusqu’au jour où un groupe de Lémurien arriva pour rechercher des survivants du peuple Nulénurien. Il quitta la petite maison pour l’Empire de Mu. Il y vécut près de 20 ans où il reçut une éducation militaire et diplomatique.  Il acquit le savoir des Lémures. Il partit vers le sud pour venger ses parents  et il trouva à la place, une jeune Lémurienne, la Princesse Linaël Tüceïn. Il s’avéra que cette haute dame venait de Mu et qu’elle s’est enfuie de son royaume. Celegorm apprit qu’elle s’était opposée au Grand Conseil concernant les agissements des Murianos, peuples de Lémuriens qui vivaient dans les profondeurs de la terre, vivant de l’esclavage d’être humain et de la guerre.  La Haute Cour de Mu ne voulut jamais intervenir évitant une guerre entre les elfes. La princesse haïssait son peuple, et elle partit en quête d’une rédemption. Celegorm lui raconta son histoire. Elle décida alors de le suivre pour le sud.</p>
                  <p align="justify">Pendant l’année qui suivit, Celegorm et Linaël tombèrent amoureux et elle tomba enceinte.</p>
                  <p align="justify">Ils arrivèrent dans un village en feu, attaqué par des Gobelins. Celegorm, armé de son épée Bâtarde, s’attaqua aux créatures humanoïdes et les mirent en fuite. Les villageois, admirant son courage, le nommèrent « Le Saint Protecteur ». Lui et sa femme, vécurent dans ce petit village. Celegorm, avec quelques hommes libérèrent  les quelques villages alentour de l’esclavage des Murianos de la région et il établit son royaume dans les montagnes des Alpüs. </p>
                  <p align="justify">Dans le repère des Murianos, il découvrit un cristal étrange venu tout droit des anciennes légendes et des textes sacrées.</p>
                  <p align="justify">Les anciennes alliances avec les peuples anciens n’éxistaient plus, et les cristaux stabilisant l’Univers furent resté caché. Celegorm découvrit Wing, le cristal du vent luisant dans son bleu ciel éclatant.</p>
                  <p align="justify"> </p>
                  <p align="justify">&nbsp;</p>
                  <p align="justify"> 20 ans s’écoulèrent dans la paix. Celegorm et Linaël se marièrent et eurent un garçon : le Prince Yank Elam. Il reçut une éducation nulénurienne, apprit la langue des Murianos, et le Lémurien commun. Mais après cette longue éducation de la cour, de la diplomatie et du savoir des anciens, Yank voulut apprendre l’art de la guerre et de la chevalerie, mais son père refusa :</p>
                  <p align="justify"> </p>
                  <p align="justify">-           Yank ! Un prince n’apprend pas l’art du combat et de la chevalerie, mais l’art de la politique !…</p>
                  <p align="justify"> </p>
                  <p align="justify">Au même moment, la Reine Linaël Tuceïn était dans la ville de Murin afin de résoudre des problèmes politiques. Celegorm et son fils était dans la salle du trône pour discuter de sa futur éducation. Un chevalier les coupa en entrant, tout affolé, dans la grande pièce :</p>
                  <p align="justify"> </p>
                  <p align="justify">-          Mon seigneur… Nous avons reçu une missive de Murin… Une armée a attaqué la ville… </p>
                  <p align="justify"> </p>
                  <p align="justify">Le roi envoya une armée pour protéger la ville et sauver sa femme. Mais ils ne découvrirent que ruine et désolation. La Reine, pendait égorgé sur un gibet. Après les obsèques, le roi reçut plusieurs missives. Les fiefs du royaume se faisaient attaqués par une Ombre de l’Ouest. Le Roi dévoré par le chagrin ne voulait plus de guerre.  Il lança une commission d‘enquête.</p>
                  <p align="justify"> </p>
                  <p align="justify">&nbsp;</p>
                  <p align="justify"> </p>
                  <p align="justify"> Dix années s’étaient encore écoulées. La commission d’enquête n’avait rien apprit au sujet de la menace. Mais, très régulièrement, les armées de Telrúnya partaient anéantir les quelques créatures maléfiques de la région, pour protéger la population.</p>
                  <p align="justify">Après le refus de son père pour lui enseigner l’art de la guerre, Yank chercha un maître d’arme digne de sa loyauté et de sa bonté royale, sans que son père ne le sache. Il trouva en plein cœur de la ville, dans le quartier commercial, Dark le forgeron, un ancien Guerrier-mage de la cour de son père. Malgré sa renommée dans le monde supérieur, ce Murianos détourna sa voie pour l’art de la forge. Dark réalisait maintenant des armes et des armures pour les armées de la cour. Après 10 ans d’apprentissage dans l’art des armes, Yank trouva son mentor.</p>
                  <p align="justify"> </p>
                  <p align="justify">Un après-midi d’une belle journée d’été, Yank Elam se baladait dans le château. Son père, absent, il pénétra dans la salle du trône. Il cherchait l’entrée de la salle des trésors. En examinant attentivement chaque mur, il remarqua une déformation. Il sut que c’était un passage. Mais un passage pour où ? Il poussa le mur, qui s’ouvrit et découvrit un mystérieux couloir s’enfonçant dans les sous-sols du château de sa famille. Il s’enfonça dans les profondeurs avec une torche, et arriva dans une pièce de miroir. En son centre, un cristal bleu ciel était en suspension au-dessus d’un piédestal, et à coté, un coffre. C’était le seul objet de la salle miroitante. Le jeune demi-Murianos  se dirigea vers le coffre, l’ouvrit et découvrit un vieux parchemin écrit dans une langue ressemblant étonnamment à la langue Lémurienne. Mais il était incapable de le déchiffrer. Il prit l’objet et se rendit en ville à la recherche de son mentor. Le prince voulait lui demander de traduire ce parchemin. Haïssant les créatures des ténèbres, il voulait venger sa mère. Ainsi il souhaitait que Dark lui fabrique une armure en forme de dragon digne de leurs écailles et trois katanas dont le manche représente trois dragons différents, et que leur lame soit aussi digne de leur griffes et de leur forces.</p>
                  <p align="justify">C’est ici que commence notre histoire.</p>
                  </div>
                <div class="TabbedPanelsContent Style2">
                  <p align="justify">L<span class="Style2">es Mythes et Légendes, que nos parents pouvaient nous raconter, parlaient de l’Histoire du monde. Alors que le Néant composait notre Univers, le dieu  créateur Erudeus, venant d’une autre dimension, tenait dans sa main le Cristal Jea Syîdan.  Dans sa mélopée, une lumière éclaira le noir obscur. De sa clarté, Jea Syîdan donna naissance aux cristaux élémentaires : Ayndr Danna (la Terre), Jahdleam Feht (l’Air), Ayi Fydan (l’Eau) et Vai Venna (le Feu). Ils résonnèrent harmonieusement avec Jea Syîdan et créèrent respectivement les dieux  Aulös, Calafalas, Manwyr, Findeciatïan et Curufin.</span></p>
                  <p align="justify" class="Style2">Ce que nos textes sacrés ne racontaient pas, fut  l’apparition du cristal obscur Tehg Upclina et de son maître Taurnil Culmáno, connu sous le nom Telepaldion. Dans les premiers moments de l’Univers, d’autres cristaux et dieux  naquirent de ce feu.</p>
                  <p align="justify" class="Style2">Il n’existe aucun récit de ce qui fit  les dieux. Seuls les dieux  Yekins ou leurs enfants Arenefangts connaissaient la vérité.</p>
                  <p align="justify" class="Style2"> </p>
                  <p align="justify" class="Style2">Nous sommes sur Terre, en l’an 972 avant Jésus Christ d’après le calendrier grégorien  là où commence mon histoire, celle de l’Elu, le Pince Yank Elam, mon demi-frère et futur roi Celegorm II de Telrúnya. Il est censé sauver  l’Univers et Jea Syîdan.</p>
                  <p align="justify" class="Style2">Mais commençons par le début. Yank est né de l’amour entre Celegorm Ier et Linaël Tüceïn.</p>
                  <p align="justify" class="Style2"> </p>
                  <p align="justify" class="Style2">Celegorm est le dernier représentant de son espèce, les Nulénuriens. Ce peuple d’humain, grands, blonds, à la pilosité orangé et dotés d’une incroyable longévité, vivait dans un village des Alpüs, reclus dans leur méditation. Il y a cinquante ans, alors que Celegorm n’était qu’un petit enfant, son village fut attaqué par l’alliance maléfique des Orcs et des Gobelins. Ses parents, dont l’histoire n’avait pas retenu les noms, le firent quitter la petite maison où ils vivaient et le placèrent sur une barque. Durant plusieurs jours, Celegorm voyagea sur la rivière Murmin, incapable de se nourrir. L’embarcation échouée, l’enfant à moitié mort, fut retrouvé par un pêcheur qui vivait non loin de la rivière, à des lieux lointains du village des Alpüs. Quand Celegorm se réveilla dans un lit confortable, il vit un homme étrange, balafré, dans des guenilles, avec dans ses mains un plateau de fruit.</p>
                  <p align="justify" class="Style2">Celegorm a été incapable de nous raconter les souvenirs de cette période. Je sais d’après les archives de mon peuple, qu’il a vécu durant dix ans avec ce pêcheur. Depuis cette catastrophe, mon peuple, les Lémuriens, recherchaient des survivants Nulénuriens. Comment ils découvrirent Celegorm ne fut pas écrit, mais il quitta le pêcheur pour l’empire de Mu, où il vécut durant vingt ans. Mon peuple lui enseigna la lecture et l’écriture des différentes langues du monde, l’art, l’escrime ainsi que la diplomatie. Toute l’éducation Lémurienne que devait avoir un futur roi.</p>
                  <p align="justify" class="Style2">Linaël Tüceïn était une jeune princesse Lémurienne, du peuple Murianos. Les Murianos vivaient dans les profondeurs de la terre, vivait de l’esclavage d’humain, qui selon eux était inférieur, et de la guerre. La barbarie des Murianos provoqua la colère du Grand Conseil Lémurien, lorsqu’ils s’allièrent aux Orcs et aux Gobelins pour anéantir les Hommes, création commune des Lémuriens et des Seurions. Linaël haïssait son peuple. Elle s’était enfuie de son royaume sous-terrain en quête d’une rédemption pour rejoindre l’Empire de Mu  et demander audience devant la Haute Cour qui ne voulait pas intervenir et éviter une guerre entre les différents peuples lémuriens. Durant, son voyage, elle rencontra un grand jeune homme blond à la peau orangée. Drapé dans sa toge blanche, un bouclier dans le dos et portant à sa ceinture une épée Bâtarde, il s’avança vers cette haute dame en détresse. Celui-ci  la réconforta dans ses bras virils où elle succomba aux larmes. Ils échangèrent leurs histoires, et Celegorm, qui partait vers le sud pour reconstruire son village et se venger de la mort de ses parents, décida d’accompagner Linaël vers le Royaume de Mu.</p>
                  <p align="justify" class="Style2"> </p>
                  <p align="justify" class="Style2">Comment ils tombèrent tous deux amoureux, nul ne le sait. Mais depuis qu’ils se virent, Celegorm et Linaël se vouèrent un amour passionnel. Quand Celegorm retourna en quête des Alpüs, Linaël l’accompagna.</p>
                  <p align="justify" class="Style2">En une année, Celegorm s’était fait une réputation. Durant son voyage, Celegorm et Linaël pénétrèrent dans un village en feu. Les villageois, qui fuyaient les flammes, étaient poursuivis par des Gobelins. Armé de son épée Bâtarde, il s’attaqua aux créatures humanoïdes. Devant cette bravoure, les habitants s’unirent à lui pour combattre et les mirent en fuite. Ce fut son premier fait d’arme. Au fur et à mesure que Celegorm et Linaël s’approchèrent des Alpüs, ils rencontrèrent de plus en plus  les mêmes situations...  Orcs… Gobelins… Villages en flamme et à sang. Sa haine grandissait, sa fougue le rendait vainqueur de chaque bataille… Et de ses prouesses, un convoi de chariots et d’hommes l’accompagnait jusqu’à la fin de son périple. Il fut nommé le Saint Protecteur. Une armée fut établie et là où ils allaient, la sauvagerie des Orcs et des Gobelins était repoussée, des villages étaient libérés de l’esclavagisme des Murianos. Ils arrivèrent, au plus haut sommet des Alpüs, dans le village natal de Celegorm : Telrúnya. Dans les ruines habitaient des Orcs, Gobelins et Murianos. Tous, ils  combattirent avec bravoure. Nul ne sait combien de blessés, de morts il y avait eu dans les deux camps. Mais Celegorm fut à nouveau vainqueur et il pourchassa ses ennemis jusqu’à leur repère. Un carnage et un pillage se furent, dont un étrange cristal luisant dans son bleu ciel éclatant. Selon les légendes et les textes sacrés, Celegorm découvrit l’un des cristaux de la création, Jahdleam Feht.</p>
                  <p align="justify" class="Style2"> </p>
                  <p align="justify" class="Style2"> Les anciennes alliances avec les peuples anciens n’étaient plus. Avec la découverte de Celegorm, on sut que les cristaux stabilisant l’Univers furent cachés des Ténèbres.</p>
                  <p align="justify" class="Style2">Il reconstruisit son village et le développa. Celegorm devint roi du royaume de Telrúnya, s’étendant sur tout le massif des Alpüs, trônant sur le Mont Blanc : le règne de Celegorm Ier commença, dans un pays libéré de l’obscurité de ses ennemis.</p>
                  <p align="justify" class="Style2"> </p>
                  <p align="justify" class="Style2">&nbsp;</p>
                  <p align="justify" class="Style2"> 20 ans s’écoulèrent dans la paix.</p>
                  <p align="justify" class="Style2">Au début de son règne, Celegorm s’unit à Linaël dans le mariage et donnèrent  vie au Prince  Yank Elam. Durant ces vingt années, le prince reçut de son père une éducation nulénurienne où il acquit la sagesse de son peuple et les connaissances en sciences. De sa mère, il apprit la langue des Murianos, et le Lémurien commun. De ses précepteurs, il eut une éducation de la cour, de la diplomatie et du savoir des anciens. Mais Yank voulait apprendre l’art de la guerre et de la chevalerie, mais son père refusa.</p>
                  <p align="justify" class="Style2"> </p>
                  <p align="justify" class="Style2">-           Yank ! Un prince n’apprend pas l’art du combat, mais l’art de la politique !… La guerre engendre la guerre… Tu ne dois pas protéger toi-même ton peuple, mais déléguer à ceux qui ont appris à le faire …</p>
                  <p align="justify" class="Style2"> </p>
                  <p align="justify" class="Style2">Le jour où le père et le fils avaient  cette conversation, la Reine Linaël Tüceïn étai t dans la ville de Murin. Les habitants de Murin tombaient malade. Les fermiers ne pouvaient plus travailler les champs, les caravanes ne venaient plus dans la ville pour le commerce. Murin subissait en plus une grave famine dû à son exclusion par les marchants. Linaël était partie avec des magiciens et des médecins pour soigner la population, des fermiers  pour relancer la production agricole.</p>
                  <p align="justify" class="Style2">La conversation entre Celegorm et son fils, concernant sa future éducation, fut interrompue par l’entrée d’un chevalier.</p>
                  <p align="justify" class="Style2"> </p>
                  <p align="justify" class="Style2">-          Mon Seigneur… Nous avons reçu une missive de Murin… Une armée a attaqué la ville… </p>
                  <p align="justify" class="Style2"> </p>
                  <p align="justify" class="Style2">Le roi envoya ses soldats pour protéger la ville et sauver sa femme. Mais ils ne découvrirent que ruines et désolation. La Reine, pendait égorgée sur un gibet. A leur retour, les obsèques furent célébrées. Le Roi dévoré par le chagrin, la mélancolie, restait assis sur son trône. La nuit, ses fidèles pouvaient entendre ses cris de lamentations. Celegorm devint l’ombre de lui-même. Il délaissa la gouvernance de son royaume. Il recevait de nombreuses missives concernant des attaques de plusieurs de ses fiefs par une Ombre venant de l’Ouest. Mais celui-ci ne réagissait pas, et délaissa son peuple pour son chagrin.</p>
                  <p align="justify" class="Style2"> </p>
                  <p align="justify" class="Style2">&nbsp;</p>
                  <p align="justify" class="Style2">Mon récit débute en l’an 972 avant Jésus Christ.</p>
                  <p align="justify" class="Style2">Dix années s’étaient encore écoulées. Celegorm était devenu une icône, et laissait son royaume sous la coupe d’un gouvernement. Telrúnya était tombé dans la décadence. Les politiciens avides de pouvoir, entretenaient divers complots pour prendre plus de pouvoir. Très régulièrement, les armées partaient  anéantir les quelques créatures maléfiques de la région et protéger la population. Une campagne de conquête et de guerre déchirait le royaume et les pays voisins. Devant l’inaction de son père, Yank voulait reprendre les rênes du pouvoir. Il devait devenir un homme important. Et dans le monde dans lequel il vivait, on montait dans la société par le fil de l’épée. Il chercha alors un maître d’armes digne de sa loyauté et de sa bonté royale. Il le trouva en plein cœur de la ville, dans le quartier commercial, Dark le forgeron, un ancien Guerrier-mage de la cour. Malgré sa renommée dans le monde supérieur, ce Murianos, devant son grand âge, se détourna de la voie de l’épée pour l’art de la forge. Durant ses services en tant que soldat, il était connu pour ses prouesses dans la création de ses propres armes. Aujourd’hui, Dark réalisait et entretenait les armes et les armures des armées de Telrúnya.</p>
                  <p align="justify" class="Style2"> </p>
                  <p align="justify" class="Style2">-          Je t’attendais, lança Dark, le dos tourné à la porte quand Yank entra dans sa boutique.</p>
                  <p align="justify" class="Style2">-          Comment vous savez qui je suis ? demanda-t-il lorsqu’il retira le capuchon de sa cape de voyage.</p>
                  <p align="justify" class="Style2">-          J’ai senti ton aura quand tu as pénétré dans la rue. Il ressemble à celui de ta mère et de ton père.</p>
                  <p align="justify" class="Style2">-          Comment ressentez-vous les auras ?</p>
                  <p align="justify" class="Style2">-          Tu l’apprendras en temps utile… Tu es là pour me demander de devenir ton maître, n’est-ce pas ?</p>
                  <p align="justify" class="Style2">-          Comment la  savez-vous ?</p>
                  <p align="justify" class="Style2">-          De nombreuses choses te dépassent… C’est ma destiné que de t’enseigner. Ta mère  le savait. Vois-tu, quand ta mère a quitté son peuple, elle connaissait son avenir. Elle savait qu’un jour elle enfanterait un être qui s’opposerait aux tourments de notre monde. Quand j’ai pris connaissance de mon futur, j’ai rejoint ma sœur et ton père dans leur voyage, pour que ce jour arrive enfin…</p>
                  <p align="justify" class="Style2">C’est ainsi que Dark le forgeron, devint le mentor du prince Yank Elam.</p>
                  <p align="justify" class="Style2"> </p>
                  <p align="justify" class="Style2">&nbsp;</p>
                  <p align="justify" class="Style2"> </p>
                  <p align="justify" class="Style2">Mais mon histoire débute quelques mois après ce jour.</p>
                  <p align="justify" class="Style2">Lors d’un bel après-midi d’été, le prince se baladait dans le château. Son maître lui avait demandé de découvrir les différents passages secrets. Alors que son père se reposait dans sa chambre, se lamentant sur son sort, Yank pénétra dans la salle du trône. Examinant attentivement  chaque mur, il remarqua une déformation derrière le trône. Il poussa de toutes ses forces, mais le passage ne bougea pas. S'asseyant sur le siège, les bras sur les accoudoirs, il sentit un pressoir. Appuyant dessus, un bruit sourd rompit le silence de la salle. Le passage s’ouvrit. Un mystérieux couloir descendait vers les sous-sols. Il s’enfonça dans les profondeurs avec une torche, et arriva dans une pièce aux murs recouvert de miroirs. En son centre, un cristal bleu ciel était en suspension au-dessus d’un piédestal, projetant sa lumière à travers la pièce. Devant celui-ci, un coffre, seul objet de la salle miroitante. Yank se dirigea vers le coffre, l’ouvrit et découvrit un vieux parchemin écrit dans une langue ressemblant étonnamment au lémurien. Mais il était incapable de le traduire. Il le prit et quitta la salle. C’est ici que commence notre histoire.</p>
                  </div>
                <div class="TabbedPanelsContent">
                  <p align="justify" class="Style2"><em>Ri to Tnekuk, m’Amo Ayhg Amer c’yhfumane eoq geuoq, vmuddyhd eo-taccoc ta me danna dnyhgemma, bundyhd ulpna ad moleine. Agminyhd me mora t’yira moleine idanamma, em ebbunda yira bnulacca è me Keïe efag knêga ad lyirevegyhga. </em></p>
                  <p align="justify" class="Style2"><em>M’acbuen pired ta m’Orefanc, ma goneka pnôma dam ma Vua, m’Aua acd conga ta gulbecceuh, me Danna acd geuca ta fea, ma Fyhd acd bunduan ta cekacca bon ge bend yh gîda. Ce gac gedna Accyhgac ca nadnofard tyhc m’oleredi, me moleine cane. </em></p>
                  <p align="justify" class="Style2"> </p>
                  <p align="right" class="Style2"><em>Prophétie de Lessien. </em></p>
                  <p align="justify" class="Style2"> </p>
                  <p align="justify" class="Style2"> </p>
                  <p align="justify" class="Style2">Les Mythes et Légendes, que nos parents pouvaient nous raconter, parlaient de l’Histoire du monde. Au temps où le Néant composait notre Univers, le Dieu créateur Erydoes, venant d’une autre dimension, tenait dans sa main le Cristal Jea Syîdan. Dans sa mélopée, une lumière éclaira l’obscurité de l’espace. De sa clarté, Jea Syîdan donna naissance aux cristaux élémentaires : Ayndr Danna (la Terre), Jahdleam Feht (l’Air), Ayi Fydan (l’Eau) et Vai Venna (le Feu). Ils résonnèrent avec Jea Syîdan en harmonie et créèrent respectivement les premiers Dieux Yekins : Iylös, Kilifilis, Canwer, Fauhdekitïan et Kyryfauh.</p>
                  <p align="justify" class="Style2">Ce que nos textes sacrés ne racontaient pas, était l’apparition de Tauhas Kyliho, connu sous le nom Telepiltioh puis de son cristal obscur Tehg Upclina. Dans les premiers moments de l’Univers, d’autres cristaux et Dieux naquirent de ce feu.</p>
                  <p align="justify" class="Style2">Il n’existe aucun récit de ce qui firent les Dieux. La vérité est connue uniquement des Yekins, leur serviteur Jymyn ou leurs enfants Arenefangts (Lémuriens et Seurions), premier être vivant de la planète Lessien.</p>
                  <p align="justify" class="Style2"> </p>
                  <p align="justify" class="Style2">Nous sommes sur Terre, en l’an  972 avant Jésus Christ, là où  commence cette histoire, celle de l’Elu, le Prince Yank Elam, mon demi-frère et futur roi Celegorm II de Telrúnya. D’après une prophétie, il est censé sauver l’Univers et Jea Syîdan.</p>
                  <p align="justify" class="Style2">Mais commençons par le début. Yank est né de l’amour entre Celegorm Ier et Linaël Tüceïn.</p>
                  <p align="justify" class="Style2"> </p>
                  <p align="justify" class="Style2">Celegorm était le dernier représentant de son espèce, les Rocírohuirms. Ce peuple d’humains,  grands, blonds, à la peau orangé et dotés d’une incroyable longévité, vivait dans un village des Alpüs, reclus dans leur méditation. Il y a cinquante ans, alors que Celegorm n’était qu’un très jeune enfant de trois ans, son village fut attaqué par l’alliance maléfique des Orcs et des Gobelins. Ses parents, dont l’histoire n’avait pas retenu les noms, le firent quitter la petite maison où ils habitaient et le placèrent sur une barque. Durant plusieurs jours, Celegorm voyagea sur la rivière Murmin, incapable de boire et de se nourrir. L’embarcation échouée fut retrouvée par un pêcheur qui vivait non loin de la rivière, à des lieues lointaines  du village des Alpüs. Quand Celegorm se réveilla dans un lit confortable, il vit un homme étrange, balafré, habillé de guenilles, et  portait dans ses mains un plateau de fruits.</p>
                  <p align="justify" class="Style2">Celegorm fut incapable de nous raconter ses souvenirs de cette période. Mon peuple, les Lémuriens, avait entendu parler d’un peuple des Alpüs qui vouait un culte pour  un cristal étrange qu’il détenait. Arrivés  dans la ville en ruine, ils découvrirent le roi et la reine qui gisaient près de la rivière. La femme tenait dans ses mains le manteau d’un enfant. Ils partirent alors à la recherche de survivants Rocírohuirmiens et ils découvrirent durant leur voyage qu’un pêcheur avait sauvé Celegorm, le prince des Rocírohuirms. D’après cet homme, l’enfant avait vécu à ses côtés durant dix ans.</p>
                  <p align="justify" class="Style2">Comment ils découvrirent Celegorm ne fut pas écrit. Mon peuple l’arracha au pêcheur  pour rejoindre l’Empire de Mu, où il vécut durant vingt ans. Mon peuple lui enseigna la lecture et l’écriture des différentes langues du monde, l’art, l’escrime ainsi que la diplomatie. Toute l’éducation Lémurienne que devait avoir un futur roi.</p>
                  <p align="justify" class="Style2"> </p>
                  <p align="justify" class="Style2">Linaël Tüceïn était une jeune princesse Lémurienne, du peuple Murianos. Les Murianos vivaient dans les profondeurs de la terre, de l’esclavage d’humain et de la guerre. La barbarie des Murianos provoqua la colère du Grand Conseil Lémurien. Ils s’étaient alliés aux Orcs et aux Gobelins pour capturer les Hommes, espèce créée par les Arenefangts. Linaël haïssait son peuple. Elle s’était enfuie de son royaume sous-terrain en quête d’une rédemption pour rejoindre l’Empire de Mu et demander audience devant la Haute Cour qui ne voulait pas intervenir et éviter une guerre entre les différents peuples lémuriens. Durant son voyage vers les terres du sud, elle rencontra un grand jeune homme blond à la peau orangée. Drapé dans sa toge blanche, un bouclier dans le dos et portant à sa ceinture une épée Bâtarde, il s’avança vers cette haute dame en détresse. Il la réconforta dans ses bras virils où elle succomba aux larmes. Ils échangèrent leurs histoires, et Celegorm, qui partait lui aussi vers le sud pour reconstruire son village et se venger de la mort de ses parents, décida d’accompagner Linaël vers le Royaume de Mu.</p>
                  <p align="justify" class="Style2"> </p>
                  <p align="justify" class="Style2">Comment ils tombèrent tous deux amoureux, nul ne le sait. Mais depuis qu’ils s’étaient rencontrés, Celegorm et Linaël se vouèrent un amour passionnel. Quand Celegorm retourna en quête des Alpüs, Linaël l’accompagna.</p>
                  <p align="justify" class="Style2">En une année, Celegorm s’était fait une réputation. Durant leur voyage, le couple pénétra dans un village en feu. Les habitants, qui fuyaient les flammes, étaient poursuivis par des Gobelins. Armé de son épée Bâtarde, il s’attaqua aux créatures humanoïdes. Face à cette bravoure, les villageois s’unirent à lui pour combattre et mirent leurs ennemies  en fuite. Ce fut son premier fait d’arme. Au fur et à mesure que Celegorm et Linaël s’approchèrent des Alpüs, ils rencontrèrent des situations similaires… Orcs… Gobelins… Villages à feu et à sang. Sa haine grandissait, sa fougue le rendait vainqueur de chaque bataille… Et de ses prouesses, un convoi de chariots et d’hommes survivant de ces massacres l’accompagnait jusqu’à la fin de son périple. Il fut nommé par eux le Saint Protecteur. Une armée fut établie  et là où ils allaient, la sauvagerie des Orcs et des Gobelins était repoussée, des villages étaient libérés de l’esclavagisme des Murianos. Ils arrivèrent, au plus haut sommet des Alpüs, dans le village natal de Celegorm : Telrúnya. Dans les ruines habitaient des Orcs, des Gobelins et des Murianos. Ils combattirent avec bravoure. Nul ne savait combien il y eu  de blessés, de morts dans les deux camps. Mais Celegorm fut de nouveau vainqueur et il pourchassa ses ennemis jusqu’à leur repère. Ce fut un carnage et un pillage, dont la découverte d’un étrange cristal bleu ciel éclatant. Selon les légendes et les textes sacrés, Celegorm découvrit l’un des cristaux de la création, Jahdleam Feht.</p>
                  <p align="justify" class="Style2"> </p>
                  <p align="justify" class="Style2"> Les anciennes alliances avec les peuples n’étaient plus. Avec la découverte de Celegorm, on apprit que les cristaux stabilisant l’Univers furent cachés des Ténèbres.</p>
                  <p align="justify" class="Style2">Il reconstruisit son village et le développa. Celegorm devint roi du royaume de Telrúnya, s’étendant sur tout le massif des Alpüs, trônant sur le Mont Blanc : le règne de Celegorm Ier commença, dans un pays libéré de l’obscurité de ses ennemis.</p>
                  <p align="justify" class="Style2"> </p>
                  <p align="justify" class="Style2">&nbsp;</p>
                  <p align="justify" class="Style2"> 20 ans s’écoulèrent dans la paix.</p>
                  <p align="justify" class="Style2">Au début de son règne, Celegorm s’unit à Linaël dans le mariage  et de leur union naquit le Prince Yank Elam. Durant ces vingt années, le prince reçut de son père une éducation nulénurienne où il acquit la sagesse de son peuple et les connaissances en sciences. De sa mère, il apprit la langue des Murianos, et le Lémurien commun. De ses précepteurs, il eut une éducation de la cour, de la diplomatie et du savoir des anciens. Yank voulait apprendre l’art de la guerre et de la chevalerie, mais son père refusa.</p>
                  <p align="justify" class="Style2"> </p>
                  <p align="justify" class="Style2">-           Yank ! Un prince n’apprend pas l’art du combat, mais l’art de la politique !… La guerre engendre la guerre… Tu ne dois pas protéger ton peuple toi-même, mais déléguer à ceux qui ont appris à combattre. Je sais ce que c’est d’avoir du sang sur les mains… Je ne veux pas que mon fils en fasse couler…</p>
                  <p align="justify" class="Style2"> </p>
                  <p align="justify" class="Style2">Le jour où le père et le fils eurent cette conversation, la Reine Linaël Tüceïn se trouvait dans la ville de Murin. Les habitants tombaient malade. Les fermiers ne pouvaient plus travailler les champs et les caravanes ne venaient pas  dans la ville pour le commerce. Murin subissait une grave famine dûe à son exclusion par les marchants. Linaël était partie avec des magiciens et des médecins et des fermiers pour relancer la production agricole.</p>
                  <p align="justify" class="Style2">La conversation entre Celegorm et son fils, concernant sa future éducation, fut interrompue par l’entrée d’un chevalier.</p>
                  <p align="justify" class="Style2"> </p>
                  <p align="justify" class="Style2">-          Mon Seigneur… Nous avons reçu une missive de Murin… Une armée a attaqué la ville… </p>
                  <p align="justify" class="Style2"> </p>
                  <p align="justify" class="Style2">Le roi envoya ses soldats pour protéger la ville et sauver sa femme. Mais ils ne découvrirent que ruines et désolation. La Reine, pendait égorgée  sur un gibet. A leur retour, les obsèques furent célébrées. Le Roi dévoré par le chagrin et la mélancolie, il restait assis sur son trône. La nuit, ses fidèles pouvaient entendre ses cris de lamentations. Celegorm devint l’ombre de lui-même. Il délaissa la gouvernance de son royaume. Il recevait de nombreuses missives concernant des attaques de plusieurs de ses fiefs par une Ombre venant de l’Ouest. Mais celui-ci  ne réagissait pas, et délaissa son peuple pour son chagrin.</p>
                  <p align="justify" class="Style2"> </p>
                  <p align="justify" class="Style2">&nbsp;</p>
                  <p align="justify" class="Style2"> Mon récit débute en l’an 972 avant Jésus Christ.</p>
                  <p align="justify" class="Style2">Dix années s’étaient encore écoulées. Celegorm était devenu une icône, et laissait son royaume sous la coupe d’un gouvernement.  Telrúnya était tombé dans la décadence. Les politiciens avides de pouvoir, complotaient pour prendre plus de pouvoir. Très régulièrement, les armées partaient en campagne pour anéantir les quelques créatures maléfiques de la région et protéger la population. Une campagne de conquête et de guerre déchirait le royaume et les pays voisins. Devant l’inaction de son père, Yank voulait reprendre les rênes. Il devait devenir un homme important. Et dans le monde dans lequel il vivait, on montait dans la société par le fil de l’épée. Il chercha alors un maître d’armes digne de sa loyauté et de sa bonté royale. Il le trouva en plein cœur de la ville, dans le quartier commercial, Dark le forgeron, un ancien Guerrier-mage de la cour. Malgré sa renommée dans le monde supérieur, ce Murianos, devant  son grand âge, se détourna de la voie de l’épée pour l’art de la forge. Durant ses services en tant que soldat, il était connu pour ses prouesses dans la création de ses propres armes. Aujourd’hui, Dark réalisait et entretenait les armes et les cuirasses des troupes de Telrúnya.</p>
                  <p align="justify" class="Style2"> </p>
                  <p align="justify" class="Style2">-          Je t’attendais, lança Dark, le dos tourné à la porte quand Yank entra dans sa boutique.</p>
                  <p align="justify" class="Style2">-          Comment savez-vous qui je suis ? demanda-t-il lorsqu’il retira le capuchon de sa cape de voyage.</p>
                  <p align="justify" class="Style2">-          J’ai senti ton aura quand tu as pénétré dans la rue. Il  ressemble à celui de ta mère et de ton père.</p>
                  <p align="justify" class="Style2">-          Comment ressentez-vous les auras ?</p>
                  <p align="justify" class="Style2">-          Tu l’apprendras en temps utile… En tant que Lémurien, nous avons la capacité de ressentir les êtres de la nature… On ne les visualise pas directement, mais on perçoit la nature de l’âme qui s’exhale de ton corps en une aura. Tu es là pour me demander de devenir ton maître, n’est-ce pas ?</p>
                  <p align="justify" class="Style2">-          Comment savez-vous ?</p>
                  <p align="justify" class="Style2">-          De nombreuses choses te dépassent… C’est ma destiné que de t’enseigner. Ta mère le savait… Certains membres de mon peuple ont la capacité de lire les mouvements célestes pour prédire l’avenir, continua-t-il devant le regard hébété du prince. Vois-tu, quand elle a quitté son peuple, elle connaissait son avenir. Elle savait qu’un jour elle enfanterait un être qui s’opposerait aux tourments de notre monde. Quand j’ai pris connaissance de mon futur, j’ai rejoint ma sœur et ton père dans leur voyage, pour que ce jour arrive enfin…</p>
                  <p align="justify" class="Style2"> </p>
                  <p align="justify" class="Style2">C’est ainsi que Dark le forgeron, devint le mentor du prince Yank Elam.</p>
                  <p align="justify" class="Style2"> </p>
                  <p align="justify" class="Style2">&nbsp;</p>
                  <p align="justify" class="Style2"> Mais mon histoire débute quelques mois après ce jour.</p>
                  <p align="justify" class="Style2">Lors d’un bel après-midi d’été, le prince se baladait dans le château. Son maître lui avait demandé de découvrir les différents passages secrets. Alors que son père se reposait dans sa chambre, se lamentant sur son sort, Yank pénétra dans la salle du trône. Examinant avec attention chaque mur, il remarqua une déformation derrière le trône. Il poussa de toutes ses forces, mais le passage ne se déplaça pas. Il s’assit sur le siège. Les bras sur les accoudoirs, il sentit un pressoir. Il appuya dessus et un bruit sourd rompit le silence de la salle. Le passage s’ouvrit. Un mystérieux couloir descendait vers les sous-sols. Il s’enfonça dans les profondeurs avec une torche, et arriva dans une pièce aux murs recouvert de miroirs. En son centre, un cristal bleu ciel était en suspension au-dessus d’un piédestal, projetant sa lumière à travers la pièce. Devant celui-ci, un coffre, seul objet de la salle miroitante. Yank se dirigea vers le coffre, l’ouvrit et découvrit un vieux parchemin écrit dans une langue étrange ressemblant au lémurien. Mais il tenta de le traduire.</p>
                  <p align="justify" class="Style2"> </p>
                  <p align="justify" class="Style2">Hu dy Drigog, l'Ely s'anwoleri iyx kioyx, flottant iy-dessys de li terre trankille, portant ocbre et lyciuri. Eklurant li lyhe d'auhe lyciuri uterelle, il ipporte auhe processe i li Giui iwek grike et cauhifikanke. </p>
                  <p align="justify" class="Style2">L'espoir buhit de l'Yhiwers, le kyrige bryle tel le Foe, l'Eoe est syrke de kocpission, li Terre est kiose de wie, le Want est portoer de sigesse pyr ki pirt an kute. Si kes kitre Essankes se retryweht dans l'ycihitu, li lyciuri seri. </p>
                  <p align="justify" class="Style2"> </p>
                  <p align="justify"><span class="Style2">Il le prit et quitta la salle. C’est ici que commence notre histoire.</span><br />
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <div id="CollapsiblePanel7" class="CollapsiblePanel">
          <div class="CollapsiblePanelTab" tabindex="0">Chapitre 1 </div>
          <div class="CollapsiblePanelContent">
            <div align="center"><img src="../../../../geek-zone/litterature/images/88565031_p.jpg" alt="" width="300" height="188" /></div>
            </div>
          </div>
        <div id="CollapsiblePanel8" class="CollapsiblePanel">
          <div class="CollapsiblePanelTab" tabindex="0">Chapitre 2</div>
          <div class="CollapsiblePanelContent">
            <div align="center"><img src="../../../../geek-zone/litterature/images/88565031_p.jpg" alt="" width="300" height="188" /></div>
            </div>
          </div>
        <div id="CollapsiblePanel9" class="CollapsiblePanel">
          <div class="CollapsiblePanelTab" tabindex="0">Chapitre 3</div>
          <div class="CollapsiblePanelContent">
            <div align="center"><img src="../../../../geek-zone/litterature/images/88565031_p.jpg" alt="" width="300" height="188" /></div>
            </div>
          </div>
        <div id="CollapsiblePanel10" class="CollapsiblePanel">
          <div class="CollapsiblePanelTab" tabindex="0">Chapitre 4</div>
          <div class="CollapsiblePanelContent">
            <div align="center"><img src="../../../../geek-zone/litterature/images/88565031_p.jpg" alt="" width="300" height="188" /></div>
            </div>
          </div>
        <div id="CollapsiblePanel11" class="CollapsiblePanel">
          <div class="CollapsiblePanelTab" tabindex="0">Chapitre 5</div>
          <div class="CollapsiblePanelContent">
            <div align="center"><img src="../../../../geek-zone/litterature/images/88565031_p.jpg" alt="" width="300" height="188" /></div>
            </div>
          </div>
        <div id="CollapsiblePanel12" class="CollapsiblePanel">
          <div class="CollapsiblePanelTab" tabindex="0">Chapitre 6</div>
          <div class="CollapsiblePanelContent">
            <div align="center"><img src="../../../../geek-zone/litterature/images/88565031_p.jpg" alt="" width="300" height="188" /></div>
            </div>
          </div>
        <div id="CollapsiblePanel13" class="CollapsiblePanel">
          <div class="CollapsiblePanelTab" tabindex="0">Chapitre 7</div>
          <div class="CollapsiblePanelContent">
            <div align="center"><img src="../../../../geek-zone/litterature/images/88565031_p.jpg" alt="" width="300" height="188" /></div>
            </div>
          </div>
        <div id="CollapsiblePanel14" class="CollapsiblePanel">
          <div class="CollapsiblePanelTab" tabindex="0">Chapitre 8</div>
          <div class="CollapsiblePanelContent">
            <div align="center"><img src="../../../../geek-zone/litterature/images/88565031_p.jpg" alt="" width="300" height="188" /></div>
            </div>
          </div>
        <div id="CollapsiblePanel15" class="CollapsiblePanel">
          <div class="CollapsiblePanelTab" tabindex="0">Chapitre 9</div>
          <div class="CollapsiblePanelContent">
            <div align="center"><img src="../../../../geek-zone/litterature/images/88565031_p.jpg" alt="" width="300" height="188" /></div>
            </div>
          </div>
        <div id="CollapsiblePanel16" class="CollapsiblePanel">
          <div class="CollapsiblePanelTab" tabindex="0">Chapitre 10</div>
          <div class="CollapsiblePanelContent">
            <div align="center"><img src="../../../../geek-zone/litterature/images/88565031_p.jpg" alt="" width="300" height="188" /></div>
            </div>
          </div>
        <div id="CollapsiblePanel17" class="CollapsiblePanel">
          <div class="CollapsiblePanelTab" tabindex="0">Chapitre 11</div>
          <div class="CollapsiblePanelContent">
            <div align="center"><img src="../../../../geek-zone/litterature/images/88565031_p.jpg" alt="" width="300" height="188" /></div>
            </div>
          </div>
  </div>
  </div>
    <p align="center" class="Style3">&nbsp;</p>
    <div id="CollapsiblePanel2" class="CollapsiblePanel">
      <div class="CollapsiblePanelTab" tabindex="0">Tome 2</div>
      <div class="CollapsiblePanelContent">
        <div align="center"><img src="../../../../geek-zone/litterature/images/88565031_p.jpg" alt="" width="300" height="188" /></div>
        </div>
      </div>
    <p align="center" class="Style3">&nbsp;</p>
    <div id="CollapsiblePanel3" class="CollapsiblePanel">
      <div class="CollapsiblePanelTab" tabindex="0">Tome 3</div>
      <div class="CollapsiblePanelContent">
        <div align="center"><img src="../../../../geek-zone/litterature/images/88565031_p.jpg" alt="" width="300" height="188" /></div>
        </div>
      </div>
    <p align="center" class="Style3">&nbsp;</p>
    <div id="CollapsiblePanel4" class="CollapsiblePanel">
      <div class="CollapsiblePanelTab" tabindex="0">Tome 4</div>
      <div class="CollapsiblePanelContent">
        <div align="center"><img src="../../../../geek-zone/litterature/images/88565031_p.jpg" alt="" width="300" height="188" /></div>
        </div>
      </div>
    <p align="center" class="Style3">&nbsp;</p>
    <div id="CollapsiblePanel5" class="CollapsiblePanel">
      <div class="CollapsiblePanelTab" tabindex="0">Tome 5</div>
      <div class="CollapsiblePanelContent">
        <div align="center"><img src="../../../../geek-zone/litterature/images/88565031_p.jpg" alt="" width="300" height="188" /></div>
        </div>
      </div>
    <p align="center" class="Style3">&nbsp;</p>
    <span class="Style3">
      <!-- fin de #mainContent -->
      </span></div>
  <script type="text/javascript">
<!--
var CollapsiblePanel1 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel1", {contentIsOpen:false});
var CollapsiblePanel6 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel6", {contentIsOpen:false});
var TabbedPanels3 = new Spry.Widget.TabbedPanels("TabbedPanels3", {defaultTab:2});
var CollapsiblePanel7 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel7", {contentIsOpen:false});
var CollapsiblePanel8 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel8", {contentIsOpen:false});
var CollapsiblePanel9 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel9", {contentIsOpen:false});
var CollapsiblePanel10 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel10", {contentIsOpen:false});
var CollapsiblePanel11 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel11", {contentIsOpen:false});
var CollapsiblePanel12 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel12", {contentIsOpen:false});
var CollapsiblePanel13 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel13", {contentIsOpen:false});
var CollapsiblePanel14 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel14", {contentIsOpen:false});
var CollapsiblePanel15 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel15", {enableAnimation:false, contentIsOpen:false});
var CollapsiblePanel16 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel16", {contentIsOpen:false});
var CollapsiblePanel17 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel17", {contentIsOpen:false});
var CollapsiblePanel2 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel2", {contentIsOpen:false});
var CollapsiblePanel3 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel3", {contentIsOpen:false});
var CollapsiblePanel4 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel4", {contentIsOpen:false});
var CollapsiblePanel5 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel5", {contentIsOpen:false});
//-->
  </script>
  <div>
    <div class="CollapsiblePanel">
      <div class="CollapsiblePanelContent">
        <div class="CollapsiblePanel">
          <div class="CollapsiblePanelContent"> </div>
          </div>
        </div>
      </div>
    </div>
  <h1>&nbsp;</h1>
  <!-- end .content -->
<script type="text/javascript">
var CollapsiblePanel6 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel6", {contentIsOpen:false});
var CollapsiblePanel7 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel7", {contentIsOpen:false});
var CollapsiblePanel1 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel1", {contentIsOpen:false});
var CollapsiblePanel1 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel1", {contentIsOpen:false});
var TabbedPanels3 = new Spry.Widget.TabbedPanels("TabbedPanels3", {defaultTab:2});
var CollapsiblePanel5 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel5", {contentIsOpen:false});
var CollapsiblePanel4 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel4", {contentIsOpen:false});
var CollapsiblePanel3 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel3", {contentIsOpen:false});
var CollapsiblePanel2 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel2", {contentIsOpen:false});
var CollapsiblePanel17 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel17", {contentIsOpen:false});
var CollapsiblePanel16 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel16", {contentIsOpen:false});
var CollapsiblePanel15 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel15", {enableAnimation:false, contentIsOpen:false});
var CollapsiblePanel14 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel14", {contentIsOpen:false});
var CollapsiblePanel13 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel13", {contentIsOpen:false});
var CollapsiblePanel12 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel12", {contentIsOpen:false});
var CollapsiblePanel11 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel11", {contentIsOpen:false});
var CollapsiblePanel10 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel10", {contentIsOpen:false});
var CollapsiblePanel9 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel9", {contentIsOpen:false});
var CollapsiblePanel8 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel8", {contentIsOpen:false});
var CollapsiblePanel6 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel6", {contentIsOpen:false});
</script>
<!-- InstanceEndEditable --></td>
      </tr>
    </table>
  </div>
  <div class="footer" id="LayoutDiv4"><!-- InstanceBeginRepeat name="footer" --><!-- InstanceBeginRepeatEntry -->
    <?php include('../../../inc/footer/footer_users.inc.php');?>
  <!-- InstanceEndRepeatEntry --><!-- InstanceEndRepeat --></div>
</div>
</body>
<!-- InstanceEnd --></html>
