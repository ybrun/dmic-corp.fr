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
  <p align="center"><font face="Comic Sans MS" size="7" color="#FF0000"><u><i><b>Soluce</b></i></u></font></p>
  <p align="center"><img border="0" src="/dmic-corp/images/FF8.Logo.jpg" width="225" height="180" /></p>
  <p align="justify">&nbsp;</p>
  <p align="center"><font face="Comic Sans MS" size="5" color="#008000"><u><i><b>- Apprendre à jouer</b></i></u></font></p>
  <p align="left"><font face="Comic Sans MS" color="#FFFFFF">Final Fantasy VIII est un jeu complexe, certes... Cependant, il existe des techniques très simples pour bien apprendre à jouer. Il y a plusieurs façons de voir les choses, mais je vous assure que bien saisir la gestion de vos personnages est plus difficile qu'il n'y
    paraît.</font></p>
  <p align="left"><font face="Comic Sans MS" color="#0000FF"><u><i><b>1. Les bases :</b></i></u></font></p>
  <p align="left"><font face="Comic Sans MS" color="#FFFFFF">Pour triompher dans Final Fantasy VIII, il faut bien retenir six choses :</font></p>
  <p align="left">&nbsp;&nbsp;&nbsp;<font face="Comic Sans MS" color="#FFFFFF"> 1) Vous devez récupérer le plus de Guardians Forces (voir page consacré au <a href="file:///E:/Mes%20sites%20webs/Dark%20mulau's%20RPG%20Parody/FF8Invocation.htm">G-Force</a>) possible, car c'est grâce à eux que vous pouvez bénéficier de persos puissants.</font></p>
  <p align="left">&nbsp;&nbsp;&nbsp;<font face="Comic Sans MS" color="#FFFFFF"> 2) La commande voler est la plus importante du jeu, puisque vous pouvez dans un premier temps bénéficier des sortilèges et dans un second temps les associer à vos capacités afin de booster chacune des possibilités de vos héros.</font></p>
  <p align="left">&nbsp;&nbsp;&nbsp;<font face="Comic Sans MS" color="#FFFFFF"> 3) Les G-Forces ne sont pas les meilleurs moyens d'attaque pour triompher. Elles n'existent que pour vous permettre d'associer des magies et des éléments à vos différentes capacités.</font></p>
  <p align="left">&nbsp;&nbsp;&nbsp;<font face="Comic Sans MS" color="#FFFFFF"> 4) Une invocation bien éduquée est synonyme de succès supplémentaire.</font></p>
  <p align="left">&nbsp;&nbsp;&nbsp;<font face="Comic Sans MS" color="#FFFFFF"> 5) certains sortilèges sont beaucoup plus important que d'autres et il ne sert à rien d'encombrer vos personnages de magies inutiles.</font></p>
  <p align="left">&nbsp;&nbsp;&nbsp;<font face="Comic Sans MS" color="#FFFFFF"> 6) Lisez bien attentivement tous les tutorials et référez-vous souvent à cette parties afin de comprendre la puissance de vos héros.</font></p>
  <p align="left">&nbsp;</p>
  <p align="left"><b><i><u><font face="Comic Sans MS" color="#0000FF">2. Les commandes (pour PSone et PS2)</font></u></i></b></p>
  <p align="left">&nbsp;&nbsp;&nbsp;<font face="Comic Sans MS" color="#FFFFFF"> <u>1) En cours de jeu:</u></font></p>
  <p align="left"><font face="Comic Sans MS" color="#FFFFFF"><u>Rond:</u> entrer dans le menu</font></p>
  <p align="left"><font face="Comic Sans MS" color="#FFFFFF"><u>Triangle:</u> même effet que rond</font></p>
  <p align="left"><font face="Comic Sans MS" color="#FFFFFF"><u>Carré:</u> proposer une partie de Triple Triad aux personnes, courir+pad</font></p>
  <p align="left"><font face="Comic Sans MS" color="#FFFFFF"><u>Croix:</u> parler, examiner un objet, effectuer une action</font></p>
  <p align="left"><font face="Comic Sans MS" color="#FFFFFF"><u>Pad analogique, croix multidirectionnelle:</u> bouger</font></p>
  <p align="left"><font face="Comic Sans MS" color="#FFFFFF"><u>Start:</u> pause, vibration activée ou non</font></p>
  <p align="left"><font face="Comic Sans MS" color="#FFFFFF"><u>Select:</u> aucun effet</font></p>
  <p align="left">&nbsp;</p>
  <p align="left">&nbsp;&nbsp;&nbsp;<font face="Comic Sans MS" color="#FFFFFF"> <u>2) Sur la carte:</u></font></p>
  <p align="left"><font face="Comic Sans MS" color="#FFFFFF"><u>Pad + carré:</u> courir</font></p>
  <p align="left"><font face="Comic Sans MS" color="#FFFFFF"><u>Rond:</u> entrer dans le menu</font></p>
  <p align="left"><font face="Comic Sans MS" color="#FFFFFF"><u>Triangle:</u> même effet que rond</font></p>
  <p align="left"><font face="Comic Sans MS" color="#FFFFFF"><u>Croix:</u> aucun effet</font></p>
  <p align="left"><font face="Comic Sans MS" color="#FFFFFF"><u>Start:</u> pause, vibration activée ou non</font></p>
  <p align="left"><font face="Comic Sans MS" color="#FFFFFF"><u>Select:</u> zoom carte</font></p>
  <p align="left"><font face="Comic Sans MS" color="#FFFFFF"><u>R1:</u> faire tourner la caméra sur la droite</font></p>
  <p align="left"><font face="Comic Sans MS" color="#FFFFFF"><u>L1:</u> faire tourner la caméro sur la gauche</font></p>
  <p align="left"><font face="Comic Sans MS" color="#FFFFFF"><u>R2:</u> changer de profondeur en matière d'angle de vue</font></p>
  <p align="left"><font face="Comic Sans MS" color="#FFFFFF"><u>L2:</u> même effet que R2</font></p>
  <p align="left">&nbsp;</p>
  <p align="left">&nbsp;&nbsp;&nbsp;<font face="Comic Sans MS" color="#FFFFFF"> <u>3) En cours de combat:</u></font></p>
  <p align="left"><font face="Comic Sans MS" color="#FFFFFF"><u>Pad:</u> sélectionner une action</font></p>
  <p align="left"><font face="Comic Sans MS" color="#FFFFFF"><u>Rond:</u> changer de personnage lorsque les barres d'Active Time Battle pleine</font></p>
  <p align="left"><font face="Comic Sans MS" color="#FFFFFF"><u>Croix:</u> confirmer un choix</font></p>
  <p align="left"><font face="Comic Sans MS" color="#FFFFFF"><u>Carré:</u> aucun effet</font></p>
  <p align="left"><font face="Comic Sans MS" color="#FFFFFF"><u>R1:</u> activer la Gunblade et réaliser un combo parfait (uniquement avec Squall)</font></p>
  <p align="left"><font face="Comic Sans MS" color="#FFFFFF"><u>R2 + L2:</u> fuir</font></p>
  <p align="left">&nbsp;</p>
  <p align="left">&nbsp;&nbsp;&nbsp;<font face="Comic Sans MS" color="#FFFFFF"> <u>4) Dans les menus:</u></font></p>
  <p align="left"><font face="Comic Sans MS" color="#FFFFFF"><u>Pad:</u> choisir un sous-menu</font></p>
  <p align="left"><font face="Comic Sans MS" color="#FFFFFF"><u>Rond:</u> annuler une commande</font></p>
  <p align="left"><font face="Comic Sans MS" color="#FFFFFF"><u>Croix:</u> accepter une commande</font></p>
  <p align="left">&nbsp;</p>
  <p align="left"><font face="Comic Sans MS" color="#0000FF"><b><i><u>3. Saisir l'importance des G-Forces:</u></i></b></font></p>
  <p align="left"><font face="Comic Sans MS" color="#FFFFFF">Voici un exemple de ce que vous pouvez faire dès le début. Dès que vous possédez une G-Force, associez-le à un de vos personnages. Vous pourrez ainsi apprendre les différentes capacités possibles dans le jeu et augmenter vos possibilités. vous pouvez ainsi gagner
    des capacités, augmenter votre niveau dans quelque domaine, pour peu que votre G-Force connaisse la magie liée à un paramètre donné. Par exemple, vous bénéficierez de plus de force en associant Ifrit car celui-ci possède Vgr+A, ce qui vous permet, associé à un sortilège puissant comme Ultima, de faire grimper votre
    niveau d'attaque.</font></p>
  <p align="left"><font face="Comic Sans MS" color="#FFFFFF">Les G-forces apprennent également des actions pour vos persos. Exemple, grâce à Shiva, vous pourrez utiliser châtiment ou grâce à Alexander, vous pourrez ranimer à tout moment.</font></p>
  <p align="left"><font face="Comic Sans MS" color="#FFFFFF">Ils vous permettent de multiplier certains états, comme votre vitesse. Exemple, Cerberus vous offre Auto-Boost (ce qui vous permet d'avoir une initiative dix fois supérieure à la normale).</font></p>
  <p align="left"><font face="Comic Sans MS" color="#FFFFFF">Bien éduqués, les GF peuvent également apprendre des capacités à l'intégralité de votre équipe. Exemple, Nosferatu vous permet d'éviter tous les combat sur la carte grâce à la commande No-Combat.</font></p>
  <p align="left"><font face="Comic Sans MS" color="#FFFFFF">Au fur et à mesure de leur initiations, vos monstres chéris peuvent également augmenter leurs propres capacités ainsi que de nouvelles possibilités dans le menu.</font></p>
  <p align="left"><font face="Comic Sans MS" color="#FFFFFF">Voici la liste totale des nombreux créa... grâce auxquels vous pouvez modifier des items, des sortilèges et même des cartes afin de multiplier vos réserves ou bien upgrader des magies ou objets.</font></p>
  <p align="left">&nbsp;&nbsp;&nbsp;<font face="Comic Sans MS" color="#FFFFFF"> <u>- Créa-Mgi-Cél:</u> permet de créer une magie céleste (se reporter à <u><a href="file:///E:/Mes%20sites%20webs/Dark%20mulau's%20RPG%20Parody/FF8IndexDesMagies.htm">l'index des magies</a></u>) à partir d'un objet (Golgotha)</font></p>
  <p align="left">&nbsp;&nbsp;&nbsp;<font face="Comic Sans MS" color="#FFFFFF"> <u>- Créa-Mgi-Plus:</u> permet d'upgrader une magie à son niveau plus à partir d'un sort de même nature (ex: brasier en brasier +). C'est Golgotha qui vous apprend cette capacité menu..</font></p>
  <p align="left">&nbsp;&nbsp;&nbsp;<font face="Comic Sans MS" color="#FFFFFF"> <u>- Mode carte:</u> permet de créer des objets grâce à des cartes (Golgotha).</font></p>
  <p align="left">&nbsp;&nbsp;&nbsp;<font face="Comic Sans MS" color="#FFFFFF"> <u>- Créa-Mgi-Gla:</u> permet de créer une magie de glace à partir d'un objet (Shiva).</font></p>
  <p align="left">&nbsp;&nbsp;&nbsp;<font face="Comic Sans MS" color="#FFFFFF"> <u>- Cré-Mgi-Inc:</u> permet de créer une magie de feu à partir d'un objet (Ifrit).</font></p>
  <p align="left">&nbsp;&nbsp;&nbsp;<font face="Comic Sans MS" color="#FFFFFF"> <u>- Créa-balles:</u> permet de créer des balles pour Irvine à partir d'un objet (Ifrit).</font></p>
  <p align="left">&nbsp;&nbsp;&nbsp;<font face="Comic Sans MS" color="#FFFFFF"> <u>- Créa-Mgi-Méd:</u> permet de créer une magie curative avec un objet (Ondine).</font></p>
  <p align="left">&nbsp;&nbsp;&nbsp;<font face="Comic Sans MS" color="#FFFFFF"> <u>- Créa-Mgi-Ana:</u> permet de créer un objet à faculté soignante avec un objet (Ondine).</font></p>
  <p align="left">&nbsp;&nbsp;&nbsp;<font face="Comic Sans MS" color="#FFFFFF"> <u>- Créa-Mgi-Temp:</u> permet de créer une magie temporelle avec un objet (Nosferatu).</font></p>
  <p align="left">&nbsp;&nbsp;&nbsp;<font face="Comic Sans MS" color="#FFFFFF"> <u>- Créa-Mgi-Mtl:</u> permet de créer une magie mentale (se reporter à <a href="file:///E:/Mes%20sites%20webs/Dark%20mulau's%20RPG%20Parody/FF8IndexDesMagies.htm">l'index des magies</a>) avec un objet
    (Nosferatu).</font></p>
  <p align="left">&nbsp;&nbsp;&nbsp;<font face="Comic Sans MS" color="#FFFFFF"> <u>- Créa-Mgi-Thér:</u> créer un objet à faculté curative avec un objet (Ahuri).</font></p>
  <p align="left">&nbsp;&nbsp;&nbsp;<font face="Comic Sans MS" color="#FFFFFF"> <u>- Créa-Mgi-Pro:</u> créer une magie protectrice grâce à un objet (Leviathan).</font></p>
  <p align="left">&nbsp;&nbsp;&nbsp;<font face="Comic Sans MS" color="#FFFFFF"> <u>- Créa-Thér-GF:</u> créer un objet à faculté soignante pour les G-Forces avec un objet (Leviathan).</font></p>
  <p align="left">&nbsp;&nbsp;&nbsp;<font face="Comic Sans MS" color="#FFFFFF"> <u>- Créa-Mgi-Max:</u> créer une magie max avec une magie + (Cerberus).</font></p>
  <p align="left">&nbsp;&nbsp;&nbsp;<font face="Comic Sans MS" color="#FFFFFF"> <u>- Soin Nv +:</u> upgrader les objets soignants (ex: remèdes en remèdes+)... C'est cerberus qui vous apprend cette capacité.</font></p>
  <p align="left">&nbsp;&nbsp;&nbsp;<font face="Comic Sans MS" color="#FFFFFF"> <u>- Bazars:</u> accéder aux bazars (upgrader les armes) à partir de l'écran (Helltrain).</font></p>
  <p align="left">&nbsp;&nbsp;&nbsp;<font face="Comic Sans MS" color="#FFFFFF"> <u>- Créa-Thér-Tab:</u> créer thérapie taboue avec un objet (Helltrain).</font></p>
  <p align="left">&nbsp;&nbsp;&nbsp;<font face="Comic Sans MS" color="#FFFFFF"> <u>- Souk:</u> permet de bénéficier d'une &quot;solde&quot; sur certains objets.</font></p>
  <p align="left">&nbsp;&nbsp;&nbsp;<font face="Comic Sans MS" color="#FFFFFF"> <u>- Sentier:</u> augmente le prix des ventes de vos objets ou armes.</font></p>
  <p align="left">&nbsp;&nbsp;&nbsp;<font face="Comic Sans MS" color="#FFFFFF"> <u>- Connaisseur:</u> permet de dénicher des objets rares.</font></p>
  <p align="left">&nbsp;&nbsp;&nbsp;<font face="Comic Sans MS" color="#FFFFFF"> <u>- Boutiques:</u> accéder aux boutiques à partir de l'écran menu.</font></p>
  <p align="left">&nbsp;&nbsp;&nbsp;<font face="Comic Sans MS" color="#FFFFFF"> <u>- Créa-Capa-GF:</u> permet de créer des capacités G-Forces avec un objet.</font></p>
  <p align="left">&nbsp;</p>
  <p align="left"><b><u><i><font face="Comic Sans MS" color="#0000FF">4. Dernier conseil:</font></i></u></b></p>
  <p align="left"><font face="Comic Sans MS" color="#FFFFFF">Référez-vous souvent à votre menu tutorial: TOUT y est expliqué en long, en large et en travers. Lorsque vous avancez, de nouvelles sections viennent enrichir votre menu et vous pouvez ainsi saisir toutes les subtilités du scénario, du jeu et de la gestion si
    particuli-re des persos et des G-Forces de Final Fantasy VIII.</font></p>
  <p align="left">&nbsp;</p>
  <p align="left"><img border="0" src="/dmic-corp/images/carte.jpg" width="558" height="434" /></p>
  <p align="center"><b><i><u><font size="5" color="#008000" face="Comic Sans MS">- Disque 1</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
    <br />
  </font></p>
  <p align="justify"><b><i><u><font face="Comic Sans MS" color="#0000FF">1. Au commencement</font></u></i></b></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Après la somptueuse présentation de Final Fantasy VIII, vous vous réveillez dans l'infirmerie de la BGU, suite à son combat avec Seifer. Une inconnue l'observe par la vitre puis Quistis entre. Vous irez ensuite dans votre salle de cours. A partir du moment où
    Squall est assis, il peut accéder à l'ordinateur. Quand Quistis aura fini de parler, restez à votre place et à l'aide du bouton d'action, allumez votre ordinateur personnel. vous gagnerez les deux G-Forces Golgotha et Shiva et allez dans &quot;Tutorial&quot;.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Allez parler à Quistis. Elle vous donne rendez-vous&nbsp; à l'extérieur de l'université, afin d'affronter (et de récupérer) la G-Force Ifrit dans une grotte située à gauche du Garden, derrière une forêt: &quot;la mine de souffre&quot;.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">En sortant de la salle, vous rencontrez Selphie. Demandez-lui si ça va et proposez-lui de visiter la BGU. Parlez avec l'homme accompagné de l'enfant afin qu'il vous donne les cartes pour le Triple Triad. Prenez ensuite l'ascenseur et expliquez à Selphie la
    disposition de l'université. L'expliquation terminée, vous êtes libre d'aller retrouver Quistis dehors mais je vous conseille de vous entraîner avant (la serre de combat) afin d'augmenter le niveau de Squall et de Shiva (déesse de la glace, à utiliser plus tard contre Ifrit, dieu du feu).</font></p>
  <blockquote>
    <blockquote>
      <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">La glace est efficace contre les plantes mutantes mais si vous voyez le Tyranosaure, fuyez. Il est imbattable pour le moment (13 000 HP).</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Retrouvez Quistis à l'extérieur et battez-vous avec elle contre les monstres ou allez directement affronter Ifrit (le niveau 12 pour Squall est un minimum).</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Deux monstres intéressants: le moustique géant possède la magie scan (en dernière position) et la larve géante possède la magie &quot;soin&quot; (en dernière position).</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Si vous voyez le Tyranosaure, fuyez. Il est imbattable pour le moment (13 000 HP).</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Enregistrer avant de rentrer dans la mine de souffre.</font></p>
  <p align="justify"><b><i><u><font face="Comic Sans MS" color="#0000FF">2. Ifrit</font></u></i></b></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Allez affronter Ifrit quand vous vous sentez prêts. Vous avez un temps limité à sélectionner avant. Si vous n'êtes pas sortit de la caverne avant la fin de ce temps, vous mourrez. Une astuce consiste à fuir tous les combats, sauf celui avec Ifrit. Si vous avez
    boosté suffisament Shiva, Ifrit ne vous pausera pas de problèmes - il fait un peut plus de 1000 HP.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Retournez ensuite au Garden et allez dans votre chambre, changer de tenu. Vous êtes ensuite envoyé à Dollet, et ceci sera votre examen afin de devenir membre du Seed. Rendez vous au port de Balamb avec Squall, Seifer et Zell, et apprenez à conduire une voiture.</font></p>
  <blockquote>
    <blockquote>
      <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Vous pouvez maintenant affronter le Tyranosaure, si vous en avez envie.</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Dans Balamb, vous pouvez aller à l'hôtel, dans la maison de Zell et dans un magasin d'upgrades.</font></p>
  <p align="justify">&nbsp;</p>
  <p align="justify"><b><i><u><font face="Comic Sans MS" color="#0000FF">3. Direction Dollet !</font></u></i></b></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Prenez le bateau. Ecoutez bien, le briefing de mission. Parlez ensuite à Zell puis à Seifer. Celui-ci vous demandera de sortir. Accepter. Cela déclanchera une scène vidéo. Vous arrivez à Dolet.</font></p>
  <blockquote>
    <blockquote>
      <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Tous les gardes (en bleu) disposent de la magie &quot;soin&quot;.</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Plusieurs combats contre des gardes (faibles, un peut plus de 100 HP) vous attendent. Quand vous arrivez sur la place avec le chien, vous devez patientez/discutez/vous battre jusqu'au moment où le chien hurle et que 6 gardes apparaissent. Seifer décide alors de les
    suivre. Le 3ème garde que vous rencontrez dans les escaliers déclenche un affrontement avec un serpent géant. Ensuite, Seifer part seul attaquer la tour de l'émetteur. Selphie intègre votre équipe. Au sommet de la tour, Biggs (rouge) répare l'émetteur (SC).</font></p>
  <blockquote>
    <blockquote>
      <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Affrontez-le une 1ère fois et il sera secondé par Wedge (bleu). Lorsqu'ils sont battus, Sulfura apparaît. Ce boss possède la G-Force Ondine en dernière position. Volez-le. Sulfura fait dans les 3 000 HP.</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Ensuite, Selphie vous informe que vous avez 30 minutes pour rejoindre le bateau, avant qu'il ne parte. Lorsque vous vous mettez en route, un robot-araigné nommé Goliath apparaît.</font></p>
  <blockquote>
    <blockquote>
      <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Il fait un peut plus de 5000 pts et vous ne pouvez pas le tuer, juste l'affaiblir. Vous avez le choix entre le combattre plusieurs fois (en lui enlevant à chaque fois ± 1000 pts) ou en lui enlevant ses 5000 HP en deux fois.</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Refaites tout le chemin en sens inverse et admirez la cinématique.</font></p>
  <p align="justify">&nbsp;</p>
  <p align="justify"><b><i><u><font face="Comic Sans MS" color="#0000FF">4. Congrulations</font></u></i></b></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">En arrivant à Balamb, Quistis vous laisse quartier libre. Seifer disparait et vous devez rentrer à pied à la BGU. Parlez à Quistis, Shu puis Cid. Cid vous demande ce que vous avez ressenti, répondez &quot;rien de spécial&quot;. Dirigez vous vers la droite et
    parlez à Seifer. Montez au premier étage. Discutez avec tout le monde. Vous êtes invité dans le bureau de Cid pour avoir réussi votre examen. Après la cérémonie, parlez avec Cid qui vous donnera un objet. Celui-ci vous donnera des infos sur vos combats. Retournez dans votre salle de cours.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Vous êtes dans votre chambre avec Selphie. Changez-vous. Après quelque discution, admirez la cinématique. Après le bal, Quistis vous demande de l'accompagner à la pièce secrète de la serre de combat. Allez-y. En ressortant de la salle secrète et en vous
    dirigeant vers la sortie gauche de la salle d'entraînement, vous entenderez un cri. La fille du début est attaqué par un boss.</font></p>
  <blockquote>
    <blockquote>
      <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Volez lui la magie bouclier avant de l'éclater! (ne vous occupez pas des 3 &quot;tortues&quot;, concentrez-vous sur le boss).</font></p>
    </blockquote>
  </blockquote>
  <p align="justify">&nbsp;</p>
  <p align="justify"><b><i><u><font face="Comic Sans MS" color="#0000FF">5. Etait-ce un rêve ou la réalité ?</font></u></i></b></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Le jour suivant, Squall, Zell et Selphie sont envoyés à Timber. Parlez avec Cid et il vous remettra la lampe-objet contenant la GF Nosferatu (28 000 HP).</font></p>
  <blockquote>
    <blockquote>
      <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Cette GF attaque avec la magie &quot;Demi&quot;, qui rapidement vous laisse avec 1 HP, et frappe au corps avec un coup de 1000 HP. Pour le vaincre, attendez que vos persos aient plus de 1500 HP (niveau 30) et renvoyez-lui son sort &quot;Demi&quot; (qui occasionnera
        entre 1000 et 9000 pts de dégats).</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Allez prendre le train à Balamb. En cours de route, les 3 persos s'endorment et rêvent de Laguna, Kiros et Ward. Ce sont eux que vous contrôlerez, maintenant. Ils se battent dans la forêt de Timber puis, ils vont dans la ville de Deling. Allez à l'hôtel et
    après des dialogues dans la salle de danse du bas, Laguna se retrouve avec la chanteuse Julia. Puis, vous reprenez le contrôle de Squall et de ses compagnons. Ceux-ci arrivent à Timber. Squall parle avec un membre de la résistance &quot;Hibous de la Forêt&quot; - le bon mot de passe est le 3ème. Ils sont présentés à Linoa
    qui leur explique comment s'emparer du train privé du président.</font></p>
  <p align="justify">&nbsp;</p>
  <p align="justify"><b><i><u><font face="Comic Sans MS" color="#0000FF">6. Attaque du convoi du président Deling</font></u></i></b></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Vous vous trouvez à présent sur le toit du train, suivez Linoa. ne perdez pas de temps, vous ne disposez que de cinq minutes pour réaliserl'intégralité de la mission. Vous de vez descendre à l'aide d'un cable pour composer un code que Linoa vous criera du toit
    du train (1 = rond ; 2 = croix ; 3 = carré ; 4 = triangle).Vous devez entrer une série de trois codes. Faite attention aux gardes sinon vous devrez tout recommencer.</font></p>
  <blockquote>
    <blockquote>
      <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Entrez dans la voiture du Président et combattez le boss - une potion de soin ou une queue de Phénix en viendra rapidement à bout. Volez-lui avant les magies &quot;Double&quot; et &quot;Zombies&quot;.</font></p>
    </blockquote>
  </blockquote>
  <p align="justify">&nbsp;</p>
  <p align="justify"><b><i><u><font face="Comic Sans MS" color="#0000FF">7. De retour à Timber</font></u></i></b></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">En arrivant à Timber, vous combattrez deux types de gardes, les rouges et les bleus.</font></p>
  <blockquote>
    <blockquote>
      <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Tous les deux disposent de la magie &quot;soin&quot; mais celle des rouges soigne plus (&quot;soin2&quot;?).</font></p>
    </blockquote>
  </blockquote>
  <p><font face="Comic Sans MS" color="#FFFFFF">Visitez le journal local &quot;Timber Maniacs&quot; (et récupérez la magie &quot;glace3&quot;), la maison à sa droite - vous verrez une ruelle, par la fenêtre arrière de cette maison. Continuez votre chemin du côté gauche de la rue et prenez les escaliers, à gauche, juste
    avant le tunnel. Descendez, entrez dans le bar et discutez avec le personnel jusqu'à ce que l'un d'entre eux pousse le type qui bloque la porte du fond. Passez dans la ruelle et grimpez les escaliers menant à l'écran géant de télé. Au studio de télé, Seifer essaye de tuer le Président puis disparait avec Edea.</font></p>
  <p align="justify">&nbsp;</p>
  <p align="justify"><b><i><u><font face="Comic Sans MS" color="#0000FF">8. East Academy</font></u></i></b></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Quistis suggère alors d'aller chercher de l'aide à l'université de Galbadia. Aidé par des membres de la résistance (le type, à droite à l'extérieur du local du journal), ils prennent le train en direction de Galbadia. Descendez du train au 1er arrêt, et
    traversez la forêt qui se trouve à gauche de l'arrêt. Les persos s'endorment et Laguna refait son apparition. Cette fois, il se promène dans une mine. Lorsqu'il trouve la sortie, débouchant sur un surplomb au-dessus de l'eau, les ennemis attaquent en force pour laisser Kiros et Ward avec 1 HP. Tous les trois plongent dans
    l'eau et vous vous retrouvez aux commandes de Squall.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Squall arrive à l'université de Galbadia. Montez à l'étage dans une salle où il y aura une longue discussion puis sortez du Garden. Irvine vous rejoindra à ce moment-là. Vous pouvez-vous promenez dans le Garden si vous en avez envie, ou vous promener sur la
    carte. Certains lieux vous sont interdits, pour l'instant.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Ensuite, Squall part pour Deling (la cité du 1er rêve avec Laguna). Vous pouvez y aller en train ou à pied. Vous devez voir le Colonel Caraway. Lorsque vous vous présentez à sa maison, un garde vous dit que vous devez aller à &quot;La tombe des Rois sans
    noms&quot;. Vous devez y récupérer un numéro, laissé par un ancien élève. Le guarde vous donne la carte de la tombe, qui est en forme de croix. La tombe se trouve à l'extrème gauche de Deling.</font></p>
  <blockquote>
    <blockquote>
      <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Ce garde se trouve à l'entrée du parc, quand la rue vous est montré de face, et descendant vers vous. Il y a un pont à gauche, deux arrêts de bus et à côté de celui de droite, se trouve un chemin menant à la maison du Colonel et où vous pouvez trouver un
        pôt de magie. Le garde n'est pas très visible car il y a un contrôleur de bus juste à côté.</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">La tombe se présente ainsi (et faites les opérations dans cet ordre):</font></p>
  <blockquote>
    <blockquote>
      <p><font face="Comic Sans MS" color="#FFFFFF">à gauche se trouve un moulin à eau qu'il faut remettre en route (dans l'angle gauche de la pièce)</font></p>
      <p><font face="Comic Sans MS" color="#FFFFFF">à droite se trouve un cours d'eau. Faites monter le niveau de l'eau (dans l'angle gauche de la pièce)</font></p>
      <p><font face="Comic Sans MS" color="#FFFFFF">en haut se trouve le 1er GF Tauros. Mettez-le en fuite.</font></p>
      <p><font face="Comic Sans MS" color="#FFFFFF">Lorsque vous aurez fait ces 3 opérations, la tour, qui se trouve au milieu de la tombe, sera accessible par la gauche. Vous y affronterez Tauros &amp; Taurus. Battez-les, et vous les mettrez dans votre équipe.</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Après avoir pénétrez dans la tombe, vous tomberez rapidement sur un objet posé (aléatoirement) sur le sol. Notez le numéro qui vous sera donné (après avoir cliqué sur l'objet avec la touche &quot;cercle&quot;) et allez donner ce numéro au garde, à Deling.</font></p>
  <p align="justify">&nbsp;</p>
  <p align="justify"><b><i><u><font face="Comic Sans MS" color="#0000FF">9. Deling City</font></u></i></b></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Vous pouvez maintenant accédez à la maison du Colonel. Après une longue discussion, allez vous promener dans la ville et discutez avec tous les gens que vous rencontrez. Tôt ou tard, vous tomberez sur un perso près d'un Arc de Triomphe, et l'aventure continuera.
    Rinoa se rendra seule chez le Président Deling, en grimpant sur de caisses, puis une échelle, à gauche, et finalement en grimpant sur le toit (deux fois à gauche).<br />
    Le président est tué par Edea Au cours d'une des nombreuses scènes cinématiques, Edea envoie deux statues attaquer Linoa.<br />
    Pour débloquer Quistis, Selphie et Zell, enfermés chez le Colonel, cliquez sur le tableau (à droite), et sur la statue dans le renfoncement, à gauche. Prenez ensuite un verre (à gauche) et donnez le à la statue. Pénétrez dans le passage secret.<br />
    Une nouvelle SC. Squall et Irvine vont au secours de Linoa, en utilisant le même chemin qu'elle.</font></p>
  <blockquote>
    <blockquote>
      <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Volez le GT Ahuri aux gargouilles - elles sont sensibles à la foudre.</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Descendez par la trappe, dans le couloir.<br />
    Retour aux trois autres dans le souterrain. Vous devez utiliser certaines roues à eau. Ce passage est assez long mais pas vraiment compliqué.<br />
    Retour à Linoa, Squall et Irvine. Encore des SC. Finalement, Squall combat Seifer puis, les 3 affrontent Edea.<br />
    Admirez la cinématique de fin.</font></p>
  <p align="justify">&nbsp;</p>
  <p align="center"><b><i><u><font size="5" color="#008000" face="Comic Sans MS">- Disque 2</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
    <br />
  </font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Note: A partir de ce CD, vous devez parler avec TOUS les gens que vous rencontrez. Et parfois, plusieurs fois de suite. Alors, si je décris une action et que vous n'arrivez pas à l'avoir, c'est que vous n'avez pas parlé/ou pas suffisamment avec tout le monde...</font></p>
  <p align="justify">&nbsp;</p>
  <p align="justify"><b><i><u><font face="Comic Sans MS" color="#0000FF">10. Laguna's come-back</font></u></i></b></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Laguna se réveille dans un village. Sortez de sa maison et allez discuter avec la voisine (première maison à gauche de celle de Laguna). Discutez avec elle et la petite fille puis prenez le pont et aller tout droit. Arrivez au carrefour, allez dans la maison de la
    vieille. Ensuite, reprenez la route principale jusqu'au village. Pénétrez dans toutes les maisons où vous le pouvez. A la fin du village, vous trouverez un magasin d'objets (sur la gauche). Retournez ensuite dans la maison de Laguna pour dormir.</font></p>
  <blockquote>
    <blockquote>
      <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Vous allez passer votre temps à vous battre (comme sur la carte du monde)</font></p>
    </blockquote>
  </blockquote>
  <p align="justify">&nbsp;</p>
  <p align="justify"><b><i><u><font face="Comic Sans MS" color="#0000FF">11. Un réveil douloureux</font></u></i></b></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Squall se réveille dans une prison. Quistis, Zell et Selphie sont dans une cellule, au 8ème étage. Zell s'échappe et doit récupérer les armes du groupe.<br />
    Chaque étage de la prison contient deux portes: certaines sont accessibles tout de suite, les autres après que Squall soit libéré (13 ème étage).</font></p>
  <blockquote>
    <blockquote>
      <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Les couloirs de la prison contiennent des gardes humains et des robots.</font></p>
      <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Les cellules contiennent des gens avec qui discuter/jouer aux cartes, des pôts de magie et un vendeur.</font></p>
      <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Votre groupe devra se se diviser en deux alors pensez à bien répartir vos GF.</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Lorsque vous arrivez au sommet, vous devez affronter un boss et deux robots. Puis vous traversez le pont suspendu qui se désagrège.</font></p>
  <blockquote>
    <blockquote>
      <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Faites se déplacer Squall vers la droite</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Ensuite, le groupe se divise à nouveau en deux: Squall (prenez Quistis et Linoa) part pour la BGU et Selphie (avec Zell et Irvine) vers la base militaire.</font></p>
  <p align="justify">&nbsp;</p>
  <p align="justify"><b><i><u><font face="Comic Sans MS" color="#0000FF">12. Il faut sauver Balamb</font></u></i></b></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Lorsque vous descendez, vos personnages se sont déguiser ! Prenez la première porte à droite, entrer et sauvegardez. Ensuite, allez entre les deux portes et placez-vous exactement devant le bouton blanc à coté de la porte de gauche (celle de droite est
    inacessible), vous parviendrez à insérer un pass trouvé dans le véhicule, et ainsi à ouvrir la porte. Lorsque vous apercevez le garde, choisissez le comportement &quot;marcher tranquillement&quot;. Prenez à droite et descendez l'escalier. Consulter l'ordinateur... malheureusement une autorisation est requise, pour le
    moment en tout cas. Prenez à gauche (sous l'escalier) puis avancer jusqu'à la source et parlez aux gardes, revenez dans la salle précédente et parlez au garde devant la porte. Entrez et parlez au second soldat, retournez voir celui qui vous a confié le message. Ensuite, retournez voir l'adjudant devant la porte rouge,
    parlez-lui et entrez. Prenez les glacier + dans la source et appuyez sur le bouton. Lorsque vous avez le choix entre vous battre et discutez, prenez la première option. Lorsque vous devez trouver une excuse, dites &quot;on allait vous appeler&quot;. Vous les suivrez dans la salle et leur casserez la figure. Revenez à
    l'ordinateur de commande et lorsque le message &quot;que faire ?&quot; apparaît, choisissez l'option &quot;se la jouer cool&quot; puis à &quot;comment réagir...&quot;: &quot;les aider&quot;.&nbsp; Parlez au soldat au premier plan et rejoignez les autres. Placez Selphie entre deux gardes et Zell et Irvine iront sur les deux
    côtés. Appuyez sans cesse sur carré afin de faire avancer' le cylindre sur l'interrupteur. ressortez et pianotez sur l'ordinateur juste à votre droite. Lorsque vous arrivez à cet écran, descendez à &quot;error ratio&quot;, amenez la jauge au maximun puis revenez au menu, allez à &quot;upload data&quot;. Sortez du
    programme, parlez au garde devant l'escalier. Grimpez ces derniers, arrivé en haut, vous devrez vous battre contre un commandeur et deux soldats. Il n'existe pas de technique particulière pour les achever, faite donc comme bon vous semble. quand ces gredins auront été écrasés, allez à l'ordinateur, parlez au deux
    personnages qui accompagne Selphie (vos mieux que se soit Zell et Irvine). Rendez-vous alors dans la pièce d'à côté, choisissez 30 minutes et revenez au tout début de la base. malheureusement, vous assisterez au lancement des missiles. Continuez tout droit, mais un boss vous attend.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Pour battre Omniborg, pas de secret, il faut bourriner ! Envoyez des guardians Forces à tour de bras ou restez constamment en limite break. Les dommages que provoque le robot sont trop important pour chercher à se la jouer fine. Une fois le mécha explosé, deux
    galbadiens accompagnés d'un Elite-T en sortiront, réglez-leur leur compte et sortez de la base aux missiles. Vous retrouverez Squall.</font></p>
  <p align="justify"><b><i><u><font face="Comic Sans MS" color="#0000FF">13. Mieux vaut prévenir que guérir !</font></u></i></b></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">L'école est envahie de monstres et ses couloirs ne sont plus surs.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Faites spécialement attention au T-Rex. N'oubliez surtout pas d'associer à nouveau Linoa et Qusitis. Arrivé dans la cour, prenez les soins dans la source et foncez en direction de l'université. Arrivé à la BGU, les templiers sont devenus fous et servent &quot;le
    grand maître NORG&quot;, calmez-les et retrouvez Cid. Vous rencontrerez Raijin et Fujin sur votre passage, parlez-leur. Allez ensuite dans votre chambre, dormez puis sauvez. Dirigez-vous ensuite vers la bibliothèque, allée bleu. Parlez à la plus petite des lycéennes, elle vous donnera un remède. Allez ensuite derrière le
    black, vous y trouverez une source de magie contenant de l'esuma. Après ça, allez à la sallle des fêtes et dites au Seed qui vous tombe dessus que vous êtes avec Cid. Ressortez et dirigez-vous vers la cafétéria, tuez le templier qui s'y trouve. Entrez et allez voir la plus petite de tous, elle vous donnera un chocolégume
    (ça vous servira plus tard). Allez ensuite à la serre de combat, tuez les templier qui vous attend et répétez l'opération pour le parking. Parlez au Seed, l'un d'eux vous offrira une red kross. Revenez à l'ascenseur, Shu vous y attend. Grimpez au premier étage et suivez Shu, parlez-lui. retournez ensuite à l'ascenseur,
    vous avez enfin retrouvez Cid. Il vous donnera une clef pour dévérouiller l'ascenseur, et ainsi arriver au niveau MD. Agenouillez-vous avec le bouton d'action juste en face de la trappe. vous arrivez ensuite dans un tunnel. Suivez le chemin jusqu'à une prochaine échelle. Descendez, vous arriverez dans un cul de sac avec une
    porte devant vous. entrez et tournez la valve en bourrinant sur le bouton carré. Lorsque Linoa viendra vous aider, vous y parviendrez. Ressortez, la cuvette a disparu et a laissé place à un trou. descendez grâce à l'échelle. Vous arriverez devant un bâtiment géant, prenez les vies max dans la source puis faites le tour.
    Grimpez à l'échelle. Elle chutera, mais vous tomberez dans la salle de contrôle, touchez à la manette devant vous, puis allez en face de la vitre, vous pouvez à nouveau descendre. Vous retrouverez Linoa et Quistis. Dans cet écran, vous remarquez une sorte de bouton vert, approchez-vous en, et, avec le bouton action, tirez
    la barrière. Emprunter l'échelle. Arrivé en bas, sauvegarder puis tirez le levier sur votre droite, ce qui aura pour action d'ouvrir le sas au fond de la pièce. Allez-y, mais un boss vous attend...</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Méfiez-vous de Cyanides (qui en faite possède un jumeau) est très énervant. Premièrement, il frappe fort, mais en plus il bénéficie d'une excellente initiative. Il suffit donc d'être bien préparé. Invoquez les G-Forces, c'est la meilleur solution. Sinon,
    appelez Ahuri et faites-vous une barrière: ils ne pourront plus vous toucher.</font></p>
  <p align="justify">&nbsp;</p>
  <p align="justify"><b><i><u><font face="Comic Sans MS" color="#0000FF">14. Le sous-sol de Balamb:</font></u></i></b></p>
  <p align="left"><font face="Comic Sans MS" color="#FFFFFF">Continuez tout droit derrière le pont, puis descendez via l'echelle devant vous, une cinématique vous montrera les missiles arriver. Vous arriverez ensuite en face d'un ensemble de gros cylindres. A l'aide du bouton action, touchez à la manette devant vous. Elle
    activera le dispositif air du Balamb Garden...</font></p>
  <p align="left"><font face="Comic Sans MS" color="#FFFFFF">Après une sublime cinématique qui vous montre la survie de la BGU, vous vous retrouverez aux commandes de votre université. C'est en faite une sorte de vaisseau ! Parlezb à Cid et lorsqu'il vous demande &quot;peux-tu aller voir ?&quot;, répondez affirmativement.
    Vous descendez au premier étage, allez au bout du couloir et entrez par la porte éclairée en rouge. Une sublime scène vous montrera l'entendue de la beauté du jeu et surtout de Linoa. Revenez à l'intérieur de la BGU, vous retrouverez Shu, vous retournerez aux côtés de Cid. Après la scène vidéo, vous vous réveillez
    sur votre lit. Linoa viendra vous réveiller, sauvegarder. Allez au centre de l'université, un templier vous y attend et vous demandera d'aller voir le grand maître. Pour cela, il suffit d'emprunter l'ascenseur direction le sous-sol. Vous arriverez dans un endroit nommé le temple. Parlez à Cid et suivez le templier, vous
    ferez face au grand maître NORG. Visiblement énervé de la nouvelle concernant Edea, il voudra vous tuer. Pas question de se laisser faire !</font></p>
  <p align="left"><font face="Comic Sans MS" color="#FFFFFF">Le Grand Maître Norg est en faite composé de trois parties distinctes : Odissey, Spootnik et Tupolev. Le but est d'abord de détruire Odissey. Pour cela, envoyez vos meilleurs G-Forces : Shiva, Ifrit ou Golgotha. Une fois celui-ci détruit, vous affronterez enfin NORG
    dans sa vraie forme. Dès que vous le pouvez, lancez A1huri, ceci vous évitera des dommages importants car le grand maître est un professionnel de la magie. Cela aura également pour conséquence de lui faire perdre quelque tours, ce qui est loin d'être négligeable. Avec Linoa et Quistis, envoyez des G-Force. Quant à Squall,
    faites-lui voler le plus de magies possible, et surtout n'oubliez pas Leviathan car c'est une G-Force. Si le monstre parvient à tuer vos invocations, finissez-le aux magie brasier +, au glacier + et bien sur avec des attaques répétées, et plus particulièrement aux limite breaks en visant bien évidemment NORG, et non ses
    deux acolytes. Si jamais cette pourriture se met bouclier, envoyez-lui un anti-sort simplement en le volant à Tupolev. Au bout d'un moment, la créature succombera et vous sortirez vainqueur du combat !</font></p>
  <p align="left"><font face="Comic Sans MS" color="#FFFFFF">Au terme du combat terminé, remontez voir Cid. Il se trouve dans l'infirmerie au rez-de-chaussée. Lorsque le Dr Kadowaki vous demande si vous voulez le voir, répondez &quot;oui, tout de suite !&quot;. Parlez de tout avec le proviseur, puis sortez et revenez à
    l'entrée de la BGU, vous retrouverez Shu. Elle vous expliquera qu'un vaisseau fonce sur vous. Allez au premier étage en direction du balcon comme elle vous l'a recommandé. Vous ferez la rencontre des &quot;Seeds d'Edea&quot;, ceux-ci viennent en paix... Votre mission maintenant est de retrouver Ellone (vous vous souvenez de
    la petite fille dans vos rêves avec Laguna ? Eh bien, elle a grandi...). Pour cela, rendez-vous à la bibliothèque au rez-de-chaussée. Allez au grand bureau, Ellone vous y attend. Eh... mais vous la reconnaissez... c'est elle que vous avez sauvée dans la serre de combat et que vous avez vu dans &quot;le monde
    parallèle&quot;. Vous vous retrouverez ensuite sur votre lit. Lorsque Linoa vient vous chercher et commence à sortir un truc puéril comme pas deux, jouez le jeu pour ne pas la vexer. Sauvez, puis sortez. Une cinématique vous montrera votre arrivée à Horizon.</font></p>
  <p align="justify">&nbsp;</p>
  <p align="justify">&nbsp;</p>
  <p align="justify"><b><i><u><font face="Comic Sans MS" color="#0000FF">15. Horizon</font></u></i></b></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Ensuite, l'école flottante se dirige vers la sité lagustre (au milieu du pont, reliant les deux hémisphères du monde de FF8). Utilisez la sortie du deuxième étage et faites vous descendre dans la cité.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">En arrivant au sol, prenez à droite, sur la voie ferrée, et entrez dans la cité (à gauche, un hôtel-magasin et à droite, un armurier). Continuez tout droit et vous verrez un garde molester un habitant. Battez-vous avec le garde, puis, avec le boss-robot.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Vous pouvez visiter la cité ou rentrer tout de suite au Garden.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Dans le Garden, Selphie veut faire un concert (dans la place se trouvant près de la chambre de Squall). Il y a 8 instruments. Choisissez en 4. Il y a deux mélodies. Les 4 instruments doivent suivre la même mélodie - ca n'a rien de difficile;-) Linoa invite alors
    Squall à assistez au concert. Déplacez-vous vers la droite et zapper la tonne de dialogues qui suivront.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Le lendemain, rendez-vous au 3ème étage du Garden. Vous pouvez maintenant manoeuvrer librement le Garden.</font></p>
  <blockquote>
    <blockquote>
      <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">A partir de maintenant, vous pouvez vous déplacez où vous voulez - ou presque!-, sur la carte du monde. Le &quot;Garden vollant&quot; correspond à un mélange du bateau, de l'avion cassé et de la voiture de FF7</font></p>
    </blockquote>
  </blockquote>
  <p align="justify">&nbsp;</p>
  <p align="justify"><i><u><b><font face="Comic Sans MS" color="#0000FF">16. Raijin</font></b></u></i></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Allez sur l'île où se trouvait le Garden. Rentrez dans le port de Balamb et allez dans la maison de Zell. Discutez avec la famille jusqu'au moment où un enfant s'enfuit. Allez ensuite sur le port, au fond (là où Squall avait embarqué pour aller combattre à
    Dollet). Cliquez sur le chien qui vous menera à Raijin. Ensuite, allez à l'hôtel et affrontez Raijin et deux gardes. Puis, entrez dans l'hôtel et battez-vous avec Raijin et Fujin.</font></p>
  <blockquote>
    <blockquote>
      <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Volez le GF Zephyr à Fujin</font></p>
    </blockquote>
  </blockquote>
  <p align="justify">&nbsp;</p>
  <p align="justify"><b><i><u><font face="Comic Sans MS" color="#0000FF">17. La FAC de Trabia:</font></u></i></b></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Selphie veut se rendre au Trabia Garden, qui se trouve tout en haut à droite, sur la carte du monde. Le Trabia Garden est tout cassé ;-)</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Entrez en escaladant le mur, à la suite de Selphie. Allez à droite dans le cimetiere (un pôt de magie et un livre)</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Allez ensuite au terrain de basket, et subissez trois heures de dialogues, avec chaque membres du groupe. Dirigez-vous ensuite vers une île du Sud-Ouest, où vous verrez un Garden flottant rouge (enemi).</font></p>
  <p align="justify">&nbsp;</p>
  <p align="justify"><b><i><u><font face="Comic Sans MS" color="#0000FF">18. Galbadia vs Balamb:</font></u></i></b></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Allez à la place du concert puis dans le hall principal. Allez au 2ème étage. La cinématique de Linoa se déclanche. Vous n'avez plus que 2 persos dans votre équipe. Allez dans la salle de classe et battez-vous avec un boss. Lorsque Squall se retrouve seul, allez au 2ème étage
    parler avec un enfant. Un ennemi vous attaquera.</font></p>
  <blockquote>
    <blockquote>
      <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Dirigez-vous vers la porte de secours (à gauche) et appuyez sur la touche O. Choisissez le 3ème message. Appuyez à nouveau sur O et choisissez le 2ème message. L'ennemi vous fera chuter dans le vide.</font></p>
      <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Carré=garde; O= coup de poing; X= coup de pied et Triangle = attaque spéciale. Vous avez 1minute20 pour battre le garde.</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Admirez la cinématique du sauvetage et discutez avec Linoa. Ensuite, entrez dans le Galbadia Garden</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Sélectionnez vos équipiers et partez à droite. Cherchez un homme, possédant la clé n°1. Revenez à votre point de départ et partez à gauche. Ouvrez la porte n°1. Cherchez une femme disposant de la clé n°2. Revenez sur vos pas et montez les escaliers, afin d'ouvrir la porte
    n°2 (Raijin et Fujin ne vous embêteront pas). Descendez et sautez sur le terrain de tennis. Dirigez-vous vers le hall principal, où vous attend le GF Cerbère. Une fois celui-ci battu, il vous appartiendra. Ensuite, allez à gauche et trouvez une femme qui vous donnera la clé n°3. Revenez dans le hall principal et allez au
    nord. Prenez les escaliers à droite et, une fois en haut, prenez l'ascenseur à gauche (grâce à la clé n°3).<br />
    Préparez vous au combat.<br />
    Affrontez d'abord Seifer (15 000 HP) et Edea s'enfuira. Descendez et allez dans l'hamphithéâtre. Après une discussion, le combat final commencera.<br />
    Affrontez de nouveau Seifer (affaiblit) puis Edea.</font></p>
  <blockquote>
    <blockquote>
      <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Volez-lui le GF Alexandre</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">C'est la fin du 2ème Cd, sur un nouveau coup de théâtre!</font></p>
  <p align="justify">&nbsp;</p>
  <p align="center"><b><i><u><font face="Comic Sans MS" color="#008000" size="5">- Disque 3</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
    <br />
  </font></p>
  <p align="justify"><b><i><u><font face="Comic Sans MS" color="#0000FF">19. Chez Edea: le mystère s'éclaircit</font></u></i></b></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Rendez-vous à l'infirmerie puis allez à la maison d'Edea. Discutez avec Edea et Cid.</font></p>
  <blockquote>
    <blockquote>
      <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Pour ceux qui ne le savent pas encore, ils sont mari et femme et le vrai vilain est une sorcière nommée Ultimecia.</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Retournez voir Rinoa.</font></p>
  <p align="justify">&nbsp;</p>
  <p align="justify"><b><i><u><font face="Comic Sans MS" color="#0000FF">20. Laguna fait son cinéma.</font></u></i></b></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">&nbsp;Préparez-vous à un combat entre Laguna et un dragon.</font></p>
  <blockquote>
    <blockquote>
      <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Pour le vaincre, c'est très simple: appuyez continuellement sur la touche X et Laguna frappera automatiquement avec un bon timing.</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Vous affronterez ensuite de nouveau le dragon mais avec l'aide du Black.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Je vous conseille de choisir la deuxième option avant (afin de pouvoir équiper votre camarade et de vous enregistrer, on est jamais trop prudent ;-) Ensuite, c'est une histoire entre Shiva et le dragon... Lorsque le combat sera terminé, vous retrouvez Squall.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Retournez à la maison d'Edea pour qu'elle vous donne une lettre - celle-ci n'apparaît pas dans l'inventaire. Ensuite, avec Squall, partez à la recherche du bateau des SeeD qui se trouve près de la maison d'Edea.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Une fois que vous l'avez trouvé, discutez avec tout le monde.</font></p>
  <p align="justify">&nbsp;</p>
  <p align="justify"><b><i><u><font face="Comic Sans MS" color="#0000FF">21. Salt Lake City</font></u></i></b></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Vous devez vous rendre maintenant à Estar. Allez à Horizon et prenez Linoa sur votre dos. Et marchez. Une fois arrivez au point de sauvegarde, choisissez vos équipiers.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Vous pouvez prendre Edea comme équipière!</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Vous allez arriver dans un désert de glace (qui n'est pas sans rappeler celui de FFVII mais en beaucoup, beaucoup plus court). Passez par les ossements de droite, pas par la route principale.<br />
    A la fin de ce désert, vous trouverez à droite un point de sauvegarde et à gauche, un boss.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Celui-ci est quasi invulnérable quand il est debout. Il faut donc le frapper uniquement quand il a ses 4 membres au sol, ce qui le rend le combat assez fastidieux.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Après le boss vous verrez une porte se former dans le ciel. Grimpez sur l'échelle (à moitié invisible) et pénétrez dans Estar.</font></p>
  <p align="justify">&nbsp;</p>
  <p align="justify"><b><i><u><font face="Comic Sans MS" color="#0000FF">22. Laguna ? souverain d'Estar !</font></u></i></b></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Vous vous retrouvez à nouveau avec Laguna. Discutez avec tout le monde. Après que le Mumba soit remonté, vous vous battrez seul avec un garde. Puis, avec l'aide de vos deux amis, vous affronterez un groupe de gardes. Prenez ensuite la navette, direction le labo de
    Lunatic Pandora.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Prenez les &quot;tasses à café&quot; pour vous rendre dans le labo. Vous verrez une fille dans une cellule. Cliquez ensuite sur l'ordinateur (mur de droite) jusqu'au moment ou vous obtenez un résultat (au début, il semble qu'il ne se passe rien). Ensuite,
    redescendez et entrez dans la cellule.</font></p>
  <p align="justify">&nbsp;</p>
  <p align="justify"><i><b><u><font face="Comic Sans MS" color="#0000FF">23. Petite visite guidée d'Estar.</font></u></b></i></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Après une discussion, vous êtes libre de visiter Estar. Vous n'avez rien d'intéressant à y faire pour le moment, mis à part prendre des points de repères en vue du futur ;-)</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Les magasins sont TRES bien fournis, dans cette ville ;-)</font></p>
  <p align="justify">&nbsp;</p>
  <p align="justify"><b><i><u><font face="Comic Sans MS" color="#0000FF">24. Lunar Gate</font></u></i></b></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">En route pour la &quot;porte de la lune&quot;. Une fois de plus, choisissez qui suivra Squall (dans l'espace) et qui suivra Zell (à Estar).</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Estar est attaquée par la pierre de &quot;2001-L'odyssé de l'espace&quot; ;-) Vous avez trois possibilités de pénétrer à l'intérieur.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Si vous n'y arrivez pas, ce n'est pas grave - La première fois que j'ai fais ce passage, je n'avais pas compris que je devais y pénétrer et le jeu c'est déroulé normalement. Simplement, j'ai loupé des bonus.</font></p>
  <p align="justify">&nbsp;</p>
  <p align="justify"><b><i><u><font face="Comic Sans MS" color="#0000FF">25. dans la station spatiale</font></u></i></b></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Une fois Linoa déposé dans son caisson, prenez les escaliers (à gauche) pour voir Ellone. Ensuite, refaites le chemin en sens inverse et allez à droite.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Note: je ne me souviens pas très bien de l'ordre des actions à faire dans cette partie et je vous fais toutes mes excuses. Tout ce que je peux dire pour ma défense, c'est que j'étais fasciné par les cinématique...</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Lorsque l'alarme se déclenche, allez voir Linoa et rebondissez contre elle ;-)<br />
    Puis, vous devez envoyer Squall dans l'espace: prenez le couloir menant à l'appart' de Leone. Vous verrez un corps gisant au milieu du couloir. Derrière ce corps se trouve une porte. Entrez dans la pièce et discutez avec le cosmonaute. Allez à droite et enfillez une combinaison. Prenez ensuite le passage où se trouvait le
    cosmonaute. Essayez de rattraper Rinoa - vous n'y arriverez pas et elle sera &quot;Perdue dans l'espace&quot; ;-)</font></p>
  <p align="justify">&nbsp;</p>
  <p align="justify"><b><i><u><font face="Comic Sans MS" color="#0000FF">26. Il faut sauver Linoa !</font></u></i></b></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Retournez dans la salle de commande, discutez avec tout le monde et partez sur la droite.<br />
    Attachez votre ceinture et en route pour de longues discussions/Flashbacks.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Ensuite, vous devez diriger Rinoa dans l'espace, en la maintenant au centre de l'écran. Vous la récuperez lorsque le compte à rebours est arrivé à zéro.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Sortez les violons ;-)</font></p>
  <p align="justify">&nbsp;</p>
  <p align="justify"><b><i><u><font face="Comic Sans MS" color="#0000FF">27. Connaissance avec le Ragnarok</font></u></i></b></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Ce passage m'a pris un temps monstrueux alors qu'il est en fait très simple: vous devez tuer les monstres, par paire de couleur. Sinon, ils se régénèrent.</font></p>
  <blockquote>
    <blockquote>
      <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Je vous propose l'ordre suivant: Bleu - Jaune - Rouge - Orange<br />
        mais vous faites comme vous le sentez ;-)</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Une fois tous les monstres morts, vous pouvez utiliser l'ascenseur (qui était gardé par un monstre jaune).</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Ressortez les violons et écoutez la fameuse chanson &quot;Eyes on Me&quot;.<br />
    Rinoa est ensuite emmenée par des scientifiques et vous pouvez, ENFIN, vous promenez partout où vous voulez sur la carte du monde, grâce au Ragnarok.</font></p>
  <p align="justify">&nbsp;</p>
  <p align="justify"><b><i><u><font face="Comic Sans MS" color="#0000FF">28. Une bonne préparation avant la fin</font></u></i></b></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">je vous conseille d'aller vous entraîner ferme et de faire le maximun d'achats nécessaires à votre bien-être. Pour gagner beaucoup d'expérience, une seule technique : rendez-vous sur l'île de l'enfer (l'île tout à l'ouest de
    Winhill) et combattez. Sachez que
    vous gagnerez quasiment un niveau à chaque duel. Utilisez le plus souvent possible vos meilleures attaques, car tous les monstres présents sur l'île sont incroyablement puissants et résistant. Un seul technique pour les battre : &quot;<a href="file:///E:/Mes%20sites%20webs/Dark%20mulau's%20RPG%20Parody/FF8LaTechniqueDeTueur.htm">la technique de tueur !</a>&quot;.&nbsp;</font></p>
  <p align="justify">&nbsp;</p>
  <p align="justify"><b><i><u><font face="Comic Sans MS" color="#0000FF">29. Ruine de Sentora : la tour d'Odin</font></u></i></b></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Allez ensuite à la maison d'Edea où d'autres dialogues vous attendent. Partez ensuite pour Centra Ruin où vous pourrez récupérer Odin.</font></p>
  <blockquote>
    <blockquote>
      <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Grimpez tout en haut du Dongeon, en évitant tous les combats (votre temps est TRES limité...).</font></p>
      <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Récupérez l'oeil de la statue (à gauche) et grimpez au sommet. Déposez l'oeil dans la deuxième statue et notez le code qui apparaît (celui-ci est alléatoire)</font></p>
      <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Récupérez les deux yeux et mettez-les dans la première statue. Tapez votre code et pénétrez dans la pièce qui c'est ouverte, sous la statue.</font></p>
      <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Vous allez devoir combattre Odin. Celui-ci ne se défend pas mais si vous n'arrivez pas à le tuer dans le délais impartit, il vous atomisera!</font></p>
      <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Une fois Odin en votre possetion, vous pouvez combattre dans le Dongeon à votre guise.</font></p>
    </blockquote>
  </blockquote>
  <p align="justify">&nbsp;</p>
  <p align="justify"><b><i><u><font face="Comic Sans MS" color="#0000FF">30. Shumi Village</font></u></i></b></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Allez ensuite au Village des Shumi .Discutez avec tout le monde. Dans l'espèce d'atelier, au fond du village, vous avez la possibilité de réaliser une mini-quête: vous devez retrouver 6 éléments cachés dans le décor.</font></p>
  <blockquote>
    <blockquote>
      <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Le blème, c'est que ces éléments apparaissent l'un après l'autre (une fois que vous avez remis l'élément en votre possetion au demandeur) et que vous allez devoir faire 15 000 allez-retour pour les trouver tous :-(</font></p>
    </blockquote>
  </blockquote>
  <p align="justify">&nbsp;</p>
  <p align="justify"><b><i><u><font face="Comic Sans MS" color="#0000FF">31 Lunatic Pandora</font></u></i></b></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Rendez-vous ensuite à Lunatic Pandora puis, foncez sur la pierre de &quot;2001-L'odyssé de l'espace&quot; (on la voit à l'horizon). Préparez-vous au combat</font></p>
  <blockquote>
    <blockquote>
      <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Contre Raijin et Faijin</font></p>
      <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Contre un boss</font></p>
      <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Contre Seipher - volez-lui un GF</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Fin du 3ème CD</font></p>
  <p align="justify">&nbsp;</p>
  <p align="center"><b><i><u><font size="5" color="#008000" face="Comic Sans MS">- Disque 4</font></u></i></b><font face="Comic Sans MS" color="#FFFFFF"><br />
    <br />
    Légende: SC= scène cinématique</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Note: Sur le 4ème CD, à part se battre, on ne fais pas grand-chose...</font></p>
  <p align="justify"><b><i><u><font color="#0000FF"><font face="Comic Sans MS">32</font>.<font face="Comic Sans MS"> 1er Boss</font></font></u></i></b></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Changez d'équipe si vous en éprouvez le besoin et allez vous castagner avec un grand lâche qui a pris Rinoa en otage.</font></p>
  <blockquote>
    <blockquote>
      <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Pas grand chose à dire sinon que le combat dure une éternité...</font></p>
    </blockquote>
  </blockquote>
  <p align="justify">&nbsp;</p>
  <p align="justify"><b><i><u><font face="Comic Sans MS" color="#0000FF">33. Les sorcières</font></u></i></b></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">A peine le temps de vous enregistrer et c'est repartie, avec toute une floppée de sorcière qui apparaissent deux par deux. Après 4 ou 5 &quot;paires&quot;, vous affrontez un boss-ver de terre ;-)</font></p>
  <p align="justify">&nbsp;</p>
  <p align="justify"><b><i><u><font face="Comic Sans MS" color="#0000FF">34. Le Dongeon</font></u></i></b></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Allez à la maison d'Edea et grimpez dans le Dongeon. Vous allez rencontrer tous les enemis que vous avez déjà combattus, ainsi que quelques boss.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">En pénétrant dans le Dongeon, vous vous rendrez compte que tous vos GF ont disparus. Le but du jeu est de combattre des boss afin de récupérer ces GF. Les cercles de lumière verte servent à changer de groupe.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">- 1er boss: en haut de l'escalier (c'est le plus faible du lot).</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">- changer de groupe et envoyer le groupe B sur le chandelier, qui s'écrasera au sol. Prenez maintenant le groupe A et faites lui traverser le chandelier. Le 2ème boss est derrière la porte (sensible au GF Diablo).</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">- envoyer le groupe A là où se trouvait le groupe B. Vous verrez une porte dans le sol. Une fois dans la cave, envoyez votre groupe vers la porte de gauche et affrontez un troisième boss.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">- remontez au niveau du 1er boss et prenez le couloir de droite: il vous mènera dans une salle pleine de tableaux (il y en a littéralement partout). Cliquez sur chaque tableau puis cliquer sur celui du bas, en face de l'escalier. Sélectionnez les noms VIVIDARIUM,
    INTERVIGILIUM et VIATOR. Vous ferez apparaître le 4ème boss.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Voilà, je ne sais pas où se trouvent les autres car ces quatre-là me suffisaient.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Enregistrez-vous avant d'affronter Altemisia.</font></p>
  <p align="justify">&nbsp;</p>
  <p align="justify"><b><i><u><font face="Comic Sans MS" color="#0000FF">35. Le boss final</font></u></i></b></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">C'est une horreur :-(</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">1) il a 3 incarnations successives, de plus en plus puissantes.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">2) il fait apparaître un groupe d'adversaire (vous) suivant SA volonté, et pas suivant votre répartition. Ces changements sont totalement aléatoires.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">3) sa force (HP) et ses attaques sont proportionnelles au membre le plus fort de votre groupe.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">4) Si un membre du groupe meurt, il est impossible de le ressusciter. Il est automatiquement remplacé (de façon aléatoire) par un autre membre vivant. Et lorsqu'il n'y a plus de membres vivants? Vous avez perdu.&gt;</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Le seul conseil que je puisse vous donner, c'est de répartir vos GF de la façon la plus équitable possible.</font></p>
  <p align="justify"><font face="Comic Sans MS" color="#FFFFFF">Voilà, il ne vous reste plus qu'à déguster la SC finale, que vous avez bien méritée ;-)</font></p>
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
