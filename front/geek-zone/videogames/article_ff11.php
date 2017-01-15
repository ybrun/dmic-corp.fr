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
  <p align="center"><img border="0" src="/dmic-corp/images/logo3.jpg" width="342" height="198" /></p>
  <p align="center">&nbsp;</p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS">Final Fantasy XI est le deuxième Final Fantasy à voir le jour sur PlayStation 2 le 16 mai 2002. Freinée par le matériel supplémentaire et surtout coûteux à se procurer afin de pouvoir jouer, sa sortie au Japon fut un véritable flop quand on la compare aux
    chiffres de ventes des opus précédents. En effet, à ce jour, seulement 100.000 jeux ont trouvé acquéreur. Malheureusement pour nous, d'après les dernières nouvelles, Final Fantasy XI ne devrait pas pointer le bout de son nez sur notre bon Vieux Continent avant 2004.</font></p>
  <p align="center">&nbsp; </p>
  <center>
    <table cellspacing="0" border="0" cellpadding="1" width="551">
      <tr>
        <td width="50%" valign="top"><p align="center"><i><font color="#FFFFFF" face="Comic Sans MS">It all began with a stone,<br />
          Or so the legend says.<br />
          <br />
          In ages past,<br />
          The sentient jewel,<br />
          Enormous and beautiful,<br />
          Banished the darkness.<br />
          <br />
          It's many-colored light filled the world with life<br />
          And brought forth-mighty gods.<br />
          <br />
          <br />
          Bathed in that light,<br />
          The world entered an age of bliss,<br />
          Until after a time,<br />
          The gods fell into slumber.<br />
          That world was called Vana'diel.&quot;<br />
          <br />
          In the 863rd year of the Crystal Era, Vana'diel was in the midst of a great war. Faced with the invasion of the Shadow Lord and his hordes of beastmen, the leaders of the enlightened peoples united their forces in desperate alliance.<br />
          <br />
          <br />
          They were the Kingdom of San D'oria, the Republic of Bastok, the Federation of Windurst, and the Grand Duchy of Jueno. Together they struggled for survival in battle after battle as chaos engulfed the land.</font></i></p></td>
        <td width="50%" valign="top"><p align="center"><i><font color="#FFFFFF" face="Comic Sans MS">Tout commença par une pierre,<br />
          Tel que nous le raconte la légende.<br />
          <br />
          Dans les temps anciens,<br />
          Le joyaux précieux,<br />
          Enorme et magnifique,<br />
          Avait banni les ténèbres.<br />
          <br />
          C'est une lumière, resplendissante de mille couleurs, qui remplit le monde de vie<br />
          Et apporta les puissants dieux.<br />
          <br />
          Baigné dans cette lumière,<br />
          Le monde était entré dans un âge de bonheur,<br />
          Jusqu'au jour où les dieux tombèrent peu à peu dans le sommeil.<br />
          Ce monde était appelé Vana'diel.<br />
          <br />
          A la 863ème année de l'ère du Cristal, Vana'diel était plongé au coeur d'une grande guerre. Confrontés à l'invasion du Seigneur des Ténèbres et à ses hordes de monstres, les leaders des peuples de la Lumière unirent leurs forces dans une alliance désespérée.<br />
          <br />
          Il s'agissait du Royaume de San D'oria, de la République de Bastok, de la Fédération de Windurst et du Grand Duché de Jueno. Ensemble ils luttèrent pour survivre, battaille après battaille, jusqu'à ce que le chaos soit englouti à tout jamais.</font></i></p></td>
      </tr>
    </table>
  </center>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS">Hormis le prologue ci-dessus de l'histoire, nous ne savons encore rien à propos du scénario de Final Fantasy XI. Bien que de nombreux joueurs pensent qu'il y n'aura pas réellement de scénario du fait que le jeu soit Online, Squaresoft a plusieurs fois affirmé
    que, contrairement aux autres MMORPG (Massive Multiplayers Online Role Playing Game), celle-ci serait mise en avant et que Final Fantasy XI fourmillerait de sous-quêtes. On apprenait d'ailleurs mi-aout 2002, par un communiqué de PlayOnline, que de nouvelles quêtes seraient ajoutées chaque mois ! De quoi ravir donc les
    joueurs en mal d'aventures.</font></p>
  <p align="center"><font face="Comic Sans MS"><font color="#FFFFFF"><img src="/dmic-corp/images/intro1.jpg" width="309" height="166" /><br />
  </font><i><font color="#FFFFFF">L'introduction du jeu.</font></i></font></p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS">Final Fantasy XI se démarque des autres Final Fantasy de part son gameplay radicalement différent puisqu'il s'agit d'un MMORPG. Le monde de Final Fantasy XI sera en effet en perpétuelle évolution et ce, même si vous n'y êtes pas connecté. Vous aurez également
    la possibilité d'intervenir directement sur celui-ci, en accomplissant par exemple certaines quêtes. Concernant les combats, ils se dérouleront désormais en temps réel et non plus en mode tour à tour comme ce fut toujours le cas.</font></p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS">Graphiquement, Final Fantasy XI n'a rien à envier à ses prédécesseurs. Bien que le monde de Vana'diel soit très vaste, celui-ci regorge de détails. Les différents personnages sont très bien modelisés et les villes sont très réalistes. Quant à l'ambiance
    générale du jeu, celle-ci est à mon goût un peu trop sombre ou pas assez colorée. Néanmoins Vana'diel n'en reste pas moins un monde qu'il me tarde d'explorer et de contempler !</font></p>
  <p align="center"><font face="Comic Sans MS"><font color="#FFFFFF"><img src="/dmic-corp/images/intro2.jpg" width="250" height="189" /><br />
  </font><i><font color="#FFFFFF">Un combat en temps réel.</font></i></font></p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS">A l'instar de Final Fantasy X, Nobuo Uematsu n'a pas été le seul à composer les musiques du jeu. Naoshi Mizuta et Kumi Tanioka l'ont accompagné apportant ainsi deux nouveaux styles : l'un celtique, l'autre moderne. Les musiques sont d'un style médiéval et
    plutôt d'ambiance. Le meilleur thème de l'OST est sans nul doute celui de l'introduction : totalement orchestré et d'une durée de 7 minutes. On peut par contre déplorer l'absence des thèmes fétiches de Final Fantasy, à savoir : le thème des Chocobos, le thème des Mogs ou encore le thème de la Fanfare.</font></p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS">A noter également qu'une édition spéciale et limitée de Final Fantasy XI sortira ce 26 septembre au Japon. Ce package regroupera la dernière version du jeu ainsi que l'artbook de Final Fantasy XI.</font></p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS">Quoiqu'il en soit, cet épisode, premier et peut-être dernier jeu Online de Squaresoft, s'annonce comme être une véritable révolution pour la série. Ça passe ou ça casse !</font></p>
  <p align="center"><font face="Comic Sans MS"><font color="#FFFFFF"><img src="/dmic-corp/images/ff11-front.jpg" width="456" height="654" /><img src="/dmic-corp/images/ff11-back.jpg" width="455" height="653" /><br />
  </font><i><font color="#FFFFFF">L'avant et l'arrière de la boîte de Final Fantasy XI.</font></i></font></p>
  <p><font color="#FFFFFF" face="Comic Sans MS"><br />
  </font></p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS">Pour vous présenter du mieux qui soit Vana'diel, le fabuleux monde de Final Fantasy XI, cette section est décomposée en 6 rubriques.</font></p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS">Le monde de Final Fantasy XI,
    Vana'diel, est très vaste et très riche. Même si certains décors ne sont pas très remplis, on peut admirer un travail excellent de Square. La fameuse Webcam du site PlayOnline montre parfois l'avancée de groupes sur Vana'diel et
    force est de constater qu'ils se déplacent sur de très vastes plaines…</font></p>
  <b>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS">Gustaberg :</font></b><font color="#FFFFFF" face="Comic Sans MS"><br />
    Gustaberg est une immense région semi-désertique s'étendant autour de la République de
    Bastok. Ses montagnes arides, attaquées par l'érosion, contiennent des minerais très précieux. Le nord de la région est entrecoupée de très profonds canyons aux cascades impressionnantes. Le vent puissant transporte des tonnes de
    sable qui s'empressent d'aveugler les rares passants…</font></p>
  <b>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS">Ronfaure :</font></b><font color="#FFFFFF" face="Comic Sans MS"><br />
    La région de Ronfaure borde la République de San D'Oria. Une immense forêt brumeuse couvre cette magnifique plaine, rafraîchie par des nombreuses rivières. Une atmosphère mystérieuse baigne cette forêt millénaire, dans laquelle le soleil perce quelquefois… De nombreuses créatures magiques y habitent.</font></p>
  <p align="center"><font face="Comic Sans MS"><font color="#FFFFFF"><img src="/dmic-corp/images/ronfaure.jpg" width="300" height="217" /><br />
  </font><i><font color="#FFFFFF">La région ouest de Ronfaure.</font></i></font></p>
  <b>
  <p align="justify"><font color="#FFFFFF">Sakutabaruta :</font></b><font color="#FFFFFF" face="Comic Sans MS"><br />
    Cette région au nom bizarre se trouve au Nord de la Fédération de Winburst. On y retrouve les mêmes belles plaines verdoyantes et la même météo favorable. Néanmoins, une steppe peuplée de monstres recouvre une grande partie de l'Ouest. Il y a aussi des forêts sombres, dans lesquelles des mares d'eau elles aussi sombre
    se sont installées.</font></p>
  <b>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS">???? :</font></b><font color="#FFFFFF" face="Comic Sans MS"><br />
    Il existe des régions encore inconnues de FFXI. Elles sont pourtant plus que magnifiques… La première est celle d'un petit lac toujours plongé dans la nuit. On ne sait pas quelle est la signification de ce phénomène, d'autant plus que ce lac semble fumer… La seconde région est nettement plus agréable. Ses vastes
    plaines verdoyantes avec quelques arbres et une météo favorable doivent sûrement se trouver non loin de
    Sakutabaruta. Parmi le reste nous avons quelques régions ressemblant à
    Ronfaure, c'est-à-dire des plaines vertes avec des forêts plus ou moins denses et des jolies rivières.</font></p>
  <b>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS">La République de Bastok :</font></b><font color="#FFFFFF" face="Comic Sans MS"><br />
    Bastok est une république établie autour de la région semi-désertique de Gustaberg. Cette ville minière et industrielle est assez bien peuplée. On y trouve un accès direct aux mines les plus importantes de la région, directement construites dans la roche !</font></p>
  <p align="center"><font face="Comic Sans MS"><font color="#FFFFFF"><img src="/dmic-corp/images/bastok.jpg" width="300" height="217" /><br />
  </font><i><font color="#FFFFFF">Bastok en pleine activité.</font></i></font></p>
  <b>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS">Le Royaume de San D'Oria :</font></b><font color="#FFFFFF" face="Comic Sans MS"><br />
    Etablie derrière ses hauts remparts, San D'Oria se trouve dans la région de Ronfaure. L'omniprésence des forêts autour de la ville est en effet caractéristique de la région. L'architecture médiévale donne l'impression au joueur de retomber en plein Moyen-Âge. Elle est comme Bastok assez bien peuplée, même si les
    complexes miniers n'y existent pas.</font></p>
  <b>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS">La Fédération de Windurst :</font></b><font color="#FFFFFF" face="Comic Sans MS"><br />
    Windurst est de loin la ville la plus agréable que l'on connaisse de FFXI. Située au Sud de
    Sakutabaruta, elle semble avoir créé le parfait compromis entre civilisation et nature. Les nombreuses forêts n'ont pas empêché les humains d'y vivre. Au contraire, c'est avec des matériaux naturels qu'ils ont bâti leur cité !
    Les pontons au dessus des rivières, les arbres autour des habitations, et plein d'autres choses encore, font de Windurst la ville préférée des (futurs) joueurs…</font></p>
  <p align="center"><font face="Comic Sans MS"><font color="#FFFFFF"><img src="/dmic-corp/images/windurst.jpg" width="300" height="217" /><br />
  </font><i><font color="#FFFFFF">Windurst dans toute sa splendeur.</font></i></font></p>
  <b>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS">Alentours de Windurst :</font></b><font color="#FFFFFF" face="Comic Sans MS"><br />
    Pendant une journée entière, la webcam de PlayOnline nous a montré une drôle de porte, éclairée la nuit par deux lampes puissantes. Il semblerait que ce soit la frontière entre Sakutabaruta et Windurst. Beaucoup d'habitants y passent.</font></p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS">Mais Vana'diel nous réserve encore plein de surprises que l'on se fera un plaisir de voir en jouant au jeu !</font></p>
  <p><font color="#FFFFFF" face="Comic Sans MS"><br />
  </font></p>
  <p align="center">&nbsp;</p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS">Comme ce fut anecdotiquement le cas pour Final Fantasy VII, il vous est possible dans Final Fantasy XI d'établir un petit &quot;chez soi&quot; où vous pourrez vous reposer.</font></p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS">Dans chaque ville de Final Fantasy XI, vous retrouverez ainsi un espace qui vous est entièrement réservé, lequel si situant dans la zone résidentielle de celle-ci. Votre maison ne pourra néanmoins se trouver que dans votre lieu d'origine, cependant il vous sera
    tout à fait possible de louer une chambre dans les autres villes de Vana'Diel. Malheureusement, et ce pour des raisons techniques, les autres joueurs ne pourront pas voir votre maison, comme vous vous ne pourez pas voir la leur. A l'intérieur vous pourrez vous reposer afin de recouvrer tous vos HP et MP.</font></p>
  <p align="center"><font face="Comic Sans MS"><font color="#FFFFFF"><img src="/dmic-corp/images/maison2.jpg" width="245" height="186" /><br />
  </font><i><font color="#FFFFFF">Le quartier résidentiel.</font></i></font></p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS">Chose étonnante, vous pourrez également entièrement personnaliser votre maison (bien qu'il s'agisse plus d'une simple pièce que d'une véritable maison) ! En parlant au Mog, vous aurez en effet le loisir de déplacer les meubles ou d'ajouter certains éléments de
    décoration, afin de rendre votre maison la plus confortable possible ! Il est aussi à noter que vous aurez l'opportunité d'acheter ou de commander du mobiler à la Guilde des menuisiers.</font></p>
  <p align="center"><font face="Comic Sans MS"><font color="#FFFFFF"><img src="/dmic-corp/images/maison3.jpg" width="245" height="186" /><img src="/dmic-corp/images/maison4.jpg" width="245" height="186" /><br />
  </font><i><font color="#FFFFFF">Personnaliser sa maison.</font></i></font></p>
  <p><font color="#FFFFFF" face="Comic Sans MS"><br />
  </font></p>
  <p align="center">&nbsp;</p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS">Bien que Final Fantasy IX fut marqué par le retour des Cristaux, Squaresoft a décidé de réitérer l'évènement avec Final Fantasy XI, mais cette fois-ci d'une façon bien plus significative. En effet, dans cet épisode, les Cristaux auront un rôle bien plus
    marqué puisqu'ils seront de véritables objets que vous aurez l'occasion d'acquérir tout au long de votre épopée. Il en existe en tout 8 types différents, chacun d'entre eux dégageant une certaine forme d'énergie.</font></p>
  <font FACE="Verdana" SIZE="3">
  <p align="center">&nbsp; </p>
  <center>
    </font>
    <table cellspacing="0" border="0" cellpadding="1" width="510">
      <tr>
        <td width="25%" valign="middle"><p align="center"><font color="#FFFFFF" face="Comic Sans MS"><img src="/dmic-corp/images/cristal_feu.jpg" width="34" height="37" /><br />
          <i>Le Feu<br />
            Combustion</i></font></p></td>
        <td width="25%" valign="middle"><p align="center"><font color="#FFFFFF" face="Comic Sans MS"><img src="/dmic-corp/images/cristal_glace.jpg" width="34" height="37" /><br />
          <i>La Glace<br />
            Coagulation</i></font></p></td>
        <td width="24%" valign="middle"><p align="center"><font color="#FFFFFF" face="Comic Sans MS"><img src="/dmic-corp/images/cristal_terre.jpg" width="34" height="37" /><br />
          <i>La Terre<br />
            Assimilation</i></font></p></td>
        <td width="26%" valign="middle"><p align="center"><font color="#FFFFFF" face="Comic Sans MS"><img src="/dmic-corp/images/cristal_vent.jpg" width="35" height="37" /><br />
          <i>Le Vent<br />
            Séparation</i></font></p></td>
      </tr>
      <tr>
        <td width="25%" valign="middle"><p align="center"><font color="#FFFFFF" face="Comic Sans MS"><img src="/dmic-corp/images/cristal_eau.jpg" width="34" height="37" /><br />
          <i>L'Eau<br />
            Dissolution</i></font></p></td>
        <td width="25%" valign="middle"><p align="center"><font color="#FFFFFF" face="Comic Sans MS"><img src="/dmic-corp/images/cristal_foudre.jpg" width="35" height="36" /><br />
          <i>La Foudre<br />
            Décomposition</i></font></p></td>
        <td width="24%" valign="middle"><p align="center"><font color="#FFFFFF" face="Comic Sans MS"><img src="/dmic-corp/images/cristal_lumiere.jpg" width="34" height="37" /><br />
          <i>La Lumière<br />
            Reproduction</i></font></p></td>
        <td width="26%" valign="middle"><p align="center"><font color="#FFFFFF" face="Comic Sans MS"><img src="/dmic-corp/images/cristal_ombre.jpg" width="34" height="37" /><br />
          <i>L'Ombre<br />
            Putréfaction</i></font></p></td>
      </tr>
    </table>
  </center>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS">Mais à quoi peuvent-ils bien servir me direz-vous ? Ces Cristaux serviront en fait à créer de nouveaux objets, d'une qualité supérieure. Ainsi, vous pourrez combiner l'énergie que renferme les cristaux avec certains objets de façon à vous fabriquer des armes,
    des armures, des bijoux et bien d'autres choses encore. Le principe est le même que pour l'Overdrive de Rikku dans Final Fantasy X, hormis le fait que vous combinerez plus de 2 ingrédients ensemble.</font></p>
  <p align="center"><font face="Comic Sans MS"><font face="Comic Sans MS"><font face="Comic Sans MS"><font face="Comic Sans MS"><font face="Comic Sans MS"><font face="Comic Sans MS"><font face="Comic Sans MS"><font face="Comic Sans MS"><font color="#FFFFFF"><img src="/dmic-corp/images/alchimie.jpg" width="417" height="66" /></font></font></font></font></font><font color="#FFFFFF"></font></font></font><font color="#FFFFFF"></font></font><font color="#FFFFFF"><br />
  </font><i><font color="#FFFFFF">Un petit exemple de combinaison possible.</font></i></font></p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS">Néanmoins les combinaisons ne marcheront pas toutes dès le début. En effet, il vous faudra bénéficier d'une certaine expérience avant d'avoir un taux assez élevé de réussites. Cette expérience s'acquérira au fur et à mesure de vos tentatives, augmentant
    ainsi votre niveau de synthétisation (amateur, novice, apprenti, maître, ...). Enfin, vous pourrez vous spécialer dans un ou plusieurs domaines, allant de la forge d'armes à la joaillerie en passant par la couture ! Ces spécialisations sont particulièrement intéressantes si vous désirez entrer plus facilement dans
    certaines guildes (Guilde des forgerons, des menuisiers, etc). Pour l'instant 6 domaines différents nous sont connus :</font></p>
  <blockquote>
    <blockquote>
      <p align="justify"><font color="#FFFFFF" face="Comic Sans MS">- <b>Forge</b> : Objets de métal comme les armes, les armures ou les boucliers.<br />
        - <b>Alchimie</b> : Création de potions et d'autres cocktails.<br />
        - <b>Couture</b> : Objets de tissus comme les vêtements, les capes, les chapeaux, etc.<br />
        - <b>Charpenterie</b> : Création de meubles, d'instruments de musique, etc.<br />
        - <b>Joaillerie</b> : Travail fin des cristaux pour la création de bijoux, d'armes de haute qualité, etc.<br />
        - <b>Création de skin</b> : Changement de l'apparence des objets, de votre équipement.</font></p>
    </blockquote>
  </blockquote>
  <p align="center"><font face="Comic Sans MS"><font color="#FFFFFF"><img src="/dmic-corp/images/forgeron.jpg" width="272" height="202" /><img src="/dmic-corp/images/menuisier.jpg" width="272" height="202" /><br />
  </font><i><font color="#FFFFFF">Un forgeron et un menuisier.</font></i></font></p>
  <p><font color="#FFFFFF" face="Comic Sans MS"><br />
  </font></p>
  <p align="center">&nbsp;</p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS">Comme ce fut le cas dans les précédents épisodes, divers moyens de transports sont mis à votre disposition. Le désormais traditionnel Airship est bien entendu présent. Celui-ci s'avèrera sûrement très pratique pour effectuer de longues distances en un minimum
    de temps. On peut également supposer que l'Airship nous permettra d'atteindre certains lieux inaccessibles par les voies terrestres et/ou navales, comme par exemple une ville entourée de montagnes. Il sera aussi possible de se déplacer sur le vaisseau pendant le trajet, pour discuter avec d'autres personnages ou bien encore
    pour simplement admirer le paysage !</font></p>
  <p align="center"><font face="Comic Sans MS"><font color="#FFFFFF"><img src="/dmic-corp/images/airship.jpg" width="273" height="203" /><br />
  </font><i><font color="#FFFFFF">La vue doit vraiment être superbe de là haut...</font></i></font></p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS">Emprunter la voie des mers sera une alternative plus démocratique pour voyager à travers Vana'diel. Tout comme dans l'Airship, vous pourrez vous déplacer librement à bord du bateau, mais, à la différence du vaisseau, vous aurez la possibilité de pouvoir pêcher
    ! (Différence plutôt évidente me direz-vous ^^) Bien que ce ne soit qu'une supposition, on peut aussi sans doute espérer pouvoir attraper des poissons de plus gros calibre en pleine mer, espérons juste que Square y ait pensé...</font></p>
  <p align="center"><font face="Comic Sans MS"><font color="#FFFFFF"><img src="/dmic-corp/images/ship.jpg" width="273" height="203" /><br />
  </font><i><font color="#FFFFFF">Le voyage s'annonce tranquille !</font></i></font></p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS">Enfin, à l'instar de Final Fantasy VI, vous aurez aussi le choix de louer un Chocobo dans une écurie. Très peu d'informations nous sont pour l'instant parvenues à ce sujet, on ne sait par exemple toujours pas s'il sera possible d'entraîner son Chocobo ni si les
    fidèles facultés de celui-ci seront conservées, à savoir : traverser les rivières et les mers, escalader les montagnes, voler, etc.</font></p>
  <p align="center"><font face="Comic Sans MS"><font color="#FFFFFF"><img src="/dmic-corp/images/chocobo-louer.jpg" width="273" height="206" /><br />
  </font><i><font color="#FFFFFF">Une écurie de Chocobos.</font></i></font></p>
  <p><font color="#FFFFFF" face="Comic Sans MS"><br />
  </font></p>
  <p align="center">&nbsp;</p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS">Un bug vous empêche de progresser dans FFXI ? Vous ne savez pas où vous devez aller ? Une question vous trotte dans la tête mais vous ne trouvez personne pour y répondre ? Pas de panique, les Game Masters sont là pour vous aider !</font></p>
  <p align="center"><font face="Comic Sans MS"><font color="#FFFFFF"><img src="/dmic-corp/images/gm.jpg" width="226" height="229" /><br />
  </font><i><font color="#FFFFFF">Un Game Master.</font></i></font></p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS">Les Game Masters sont pour ainsi dire les standardistes de Final Fantasy XI. Ces personnages, facilement identifiables de par leurs armures rouges de même que par le logo <i>GM</i> situé à côté de leur pseudonyme, seront en effet présents afin de répondre à
    vos questions, vous diriger dans le jeu ou encore par exemple pour résoudre un problème lié à un bug du jeu (comme un personnage coincé dans le décor).</font></p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS">A savoir aussi que les Game Masters ne sont pas de simples joueurs mais de véritables employés de Squaresoft et que, par conséquent, ceux-ci seront rémunérés pour jouer à Final Fantasy XI (Boulot qui devrait en intéresser plus d'un !</font></p>
  <p><font color="#FFFFFF" face="Comic Sans MS"><br />
  </font></p>
  <p align="center">&nbsp;</p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS">Il y a déjà quelques mois de ça, PlayOnline eut l'excellente idée de mettre en place sur son site internet une webcam connectée 24h/24 au monde de Vana'Diel ! Celle-ci est vraiment très intéressante si vous désirez découvrir le monde de Final Fantasy XI avant
    sa sortie en Europe.<br />
    <br />
    Hélas, il est assez fastidueux d'observer celle-ci via le site officiel de Final Fantasy XI. En effet, l'image ne s'actualisant pas d'elle même, vous devrez constammant actualiser votre explorateur... Ainsi, nous avons décidé de vous faciliter les choses, afin de vous en faire profiter un maximum, en créant un petit
    programme écrit en Delphi, actualisant l'image à intervalles réguliers, lesquels étant biensûr paramétrables !&nbsp;</font></p>
  <p align="center"><font face="Comic Sans MS"><font color="#FFFFFF"><img src="/dmic-corp/images/webcam.jpg" width="226" height="282" /><br />
  </font><i><font color="#FFFFFF">Découvrez en direct le monde de Vana'Diel.</font></i></font></p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS">Depuis peu, il est aussi possible d'admirer Vana'Diel en Streaming Live (Windows Media Player 7 est recquis). L'avantage ici c'est qu'en plus de l'image, vous profiterez aussi de la musique et des effets sonores du jeu ! Néanmoins, il est plus que conseillé de
    bénéficier d'une connexion haut débit pour se régaler.&nbsp;</font></p>
  <p><font color="#FFFFFF" face="Comic Sans MS"><br />
  </font></p>
  <p align="center">&nbsp;</p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS">Comme la plupart d'entre vous le savent, Final Fantasy XI se joue à travers le réseau PlayOnline. Afin de vous présenter au mieux ce réseau, cette rubrique est décomposée en 4 sections distinctes :</font></p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS">Profiter de Final Fantasy XI ne sera malheureusement pas possible pour tout le monde. En effet, un matériel très coûteux est indispensable afin de pouvoir jouer dans de bonnes conditions et de se connecter aux serveurs de PlayOnline.</font></p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS">De nombreuses rumeurs circulant sur la toile, il est également important de mettre tout de suite certaines choses au clair. Final Fantasy XI n'incluera pas de mode Offline, celui-ci sera exclusivement jouable Online. Pour les joueurs désirant se procurer Final
    Fantasy XI par les voies du marché de l'import, il est également bon de signaler qu'il n'est possible pour l'instant de se connecter aux serveur que via un provider japonais.</font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><font color="#FFFFFF" face="Comic Sans MS">Matériel recquis :</font></b><font color="#FFFFFF" face="Comic Sans MS"><br />
        - Une Playstation 2 + Manette (300 €)<br />
        - Un disque dur PlayStation 2 (BB Unit (154 €))<br />
        - BB Navigator (Livré avec le BB unit)<br />
        - Une souris USB (Recommandée) (20 €)<br />
        - Un clavier USB (Recommandé) (51 €)<br />
        - Une connexion Internet<br />
        - FFXI (67 €), en version originale de préférence puisqu'un code d'accès accompagne le jeu.</font></p>
    </blockquote>
  </blockquote>
  <p align="center"><font face="Comic Sans MS"><font color="#FFFFFF"><img src="/dmic-corp/images/matos2.jpg" width="454" height="361" /><img src="/dmic-corp/images/matos3.jpg" width="454" height="360" /><br />
  </font><i><font color="#FFFFFF">La souris et la clavier PlayStation 2.</font></i></font></p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS">Soit un total non négligeable de 292 € sans compter la PlayStation 2 ni l'abonnement à
    PlayOnline, ni la connexion Internet ! A ce prix là, j'espère que vous comprenez maintenant mieux le flop qu'a fait Final Fantasy XI lors de sa sortie au Japon. On peut
    néanmoins espérer plus d'engouement de la part des joueurs pour Final Fantasy XI quand sa version PC sera dans les bacs. En effet, tout cet investissement sera alors devenu complètement inutile puisque déjà présent dans la plupart des ordinateurs.</font></p>
  <p align="center"><font face="Comic Sans MS"><font color="#FFFFFF"><img src="/dmic-corp/images/matos4.jpg" width="437" height="553" /><br />
  </font><i><font color="#FFFFFF">Une PlayStation 2 équipée du BB Unit externe.</font></i></font></p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS">En ce qui concerne le BB Unit, il s'agit en fait d'un package regroupant un disque dur de 40 Go (soit externe, soit interne), d'une carte d'accès à distance Ethernet ainsi que du software BB Navigator. Ce dernier vous permettra entre autre de configurer votre modem
    et donc votre connexion Internet. On peut d'ailleurs se réjouir que de nombreuses d'entre elles soient supportées, du bas au haut au débit (56k, ISDN, ADSL, Câble, ..).&nbsp;</font></p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS">Il est aussi intéressant de noter qu'un DVD d'accès au réseau PlayOnline accompagne FFXI.</font></p>
  <p align="center"><font face="Comic Sans MS"><font color="#FFFFFF"><img src="/dmic-corp/images/matos1.jpg" width="640" height="480" /><br />
  </font><i><font color="#FFFFFF">Le DVD PlayOnline.</font></i></font></p>
  <p><font color="#FFFFFF" face="Comic Sans MS"><br />
  </font></p>
  <p align="center">&nbsp;</p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS">Après avoir monté tout le matériel et correctement configuré votre connexion Internet, il faut maintenant procéder à l'inscription au réseau
    PlayOnline. Celle-ci se fait biensûr en ligne et requiert le code d'accès joint avec Final Fantasy XI. L'abonnement
    s'élève pour l'instant à 1280 Yens par mois (soit environ 11 €), incluant l'accès aux divers services PlayOnline
    (FFXI compris) et la création de 2 personnages. Car en effet, pour chaque autre personnage créé vous devrez payer aux alentours d'un
    euro.</font></p>
  <p align="center"><font face="Comic Sans MS"><font color="#FFFFFF"><img src="/dmic-corp/images/abonnement.jpg" width="272" height="209" /><br />
  </font><i><font color="#FFFFFF">Le réseau PlayOnline.</font></i></font></p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS">Le paiement peut se faire via plusieurs méthodes. Soit par la méthode habituelle des paiements en ligne, c'est à dire par carte de crédit, ou soit par &quot;Web Money Card&quot;. Ces dernières sont d'ailleurs très communes au Japon, on pourrait les comparer aux
    cartes de recharge des téléphones portables que l'on trouve chez nous. En utilisant cette méthode, le paiement est alors beaucoup plus simple puisqu'il suffit de rentrer le code se trouvant au dos de la carte. Idéal donc pour les personnes souhaitant éviter toutes les formalités bancaires.</font></p>
  <p><font color="#FFFFFF" face="Comic Sans MS"><br />
  </font></p>
  <p align="center">&nbsp;</p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS">En plus de permettre l'accès au merveilleux monde de Vana'diel, le réseau PlayOnline offre plusieurs autres services. Le Tetra Master, jeu de cartes de Final Fantasy IX, a par exemple été adapté au réseau afin d'y jouer en ligne et de défier d'autres joueurs.
    Celui-ci a cependant bénéficié de quelques autres améliorations. On retiendra surtout l'ajout de nouvelles cartes et l'ouverture d'une boutique permettant d'acheter des cartes exclusives.</font></p>
  <p align="center">&nbsp;</p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS">Il est également possible de consulter les derniers guides Ultimania, d'obtenir des informations sur les dernières productions de Squaresoft ou encore de discuter avec d'autres joueurs. Un espace membres est aussi à votre disposition. Vous pourrez par exemple y
    éditer vos informations, modifier l'interface selon vos préférences ou même envoyer des emails !</font></p>
  <p align="center"><font face="Comic Sans MS"><font color="#FFFFFF"><img src="/dmic-corp/images/services2.jpg" width="302" height="217" /><br />
  </font><i><font color="#FFFFFF">Envoyer un email via PlayOnline !</font></i></font></p>
  <p><font color="#FFFFFF" face="Comic Sans MS"><br />
  </font></p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS">Notre rubrique consacrée au système de jeu de Final Fantasy XI est pour l'instant en construction. Seule la section traitant des races de Vana'Diel est disponible, la suite sera disponible très prochainement.</font></p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS">Lorsque que vous débuterez votre partie, vous aurez l'occasion d'entièrement créer votre personnage. Vous aurez ainsi le choix entre 5 races différentes, chacune ayant évidemment ses qualités et ses défauts. Vous aurez de plus la possibilité de choisir le sexe
    de votre personnage. Néanmoins, seule la gente féminine sera disponible pour les Mithras et seuls les mâles vous seront proposés pour les Galkas (Bien qu'ils n'en soient pas réellement...). Sans plus tarder, voici un descriptif de chacune d'entre elles :</font></p>
  <p align="center"><font face="Comic Sans MS"><font color="#FFFFFF"><img src="/dmic-corp/images/hume.jpg" width="250" height="188" /><br />
  </font><i><font color="#FFFFFF">Une femelle Hume.</font></i></font></p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS">Les Humes sont comparables aux humains que l'on pouvait trouver dans les précédents Final Fantasy. Leur lieu d'origine est la République de Bastok. En tant que race la plus répandue, vous les trouverez néanmoins dans pratiquement toutes les autres régions du
    monde de Vana'Diel. N'ayant pas spécialement de domaine dans lequel ils excellent, les Humes ont cependant la faculté d'apprendre facilement et de rapidement s'adapter.</font></p>
  <p align="center"><font face="Comic Sans MS"><font color="#FFFFFF"><img src="/dmic-corp/images/tarutaru.jpg" width="250" height="188" /><br />
  </font><i><font color="#FFFFFF">Un Taru Taru !</font></i></font></p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS">Malgré une apparence plutôt trompeuse, les Taru Taru sont particulièrement doués pour tout ce qui se touche, de près ou de loin, à la magie. Ces derniers sont concentrés dans la Fédération de Windurst. En ce qui me concerne je trouve qu'ils ont un air
    rappelant vaguement celui de Vivi de Final Fantasy IX ^^ Quoiqu'il en soit, si vous désirez devenir un puissant magicien, cette race est faite pour vous !</font></p>
  <p align="center"><font face="Comic Sans MS"><font color="#FFFFFF"><img src="/dmic-corp/images/elvaan.jpg" width="250" height="188" /><br />
  </font><i><font color="#FFFFFF">Une Elvaan.</font></i></font></p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS">Les Elvaans sont regroupés dans la région aride du Royaume de San D'Oria, où ils sont d'ailleurs passés maître dans le maniemant de l'épée. Considérés comme les meilleurs guerriers de Vana'Diel, les Elvaans bénéficient également d'une intelligence
    remarquable et d'une extrême beauté.</font></p>
  <p align="center"><font face="Comic Sans MS"><font color="#FFFFFF"><img src="/dmic-corp/images/mithra.jpg" width="250" height="188" /><br />
  </font><i><font color="#FFFFFF">Deux Mithras.</font></i></font></p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS">Tout comme les Taru Taru, les Mithras sont réunis dans la Férération de Windurst. Ceux-ci sont très proches de la nature et plutôt réticents quant à l'utilisation de la magie ou de technologies inutiles. Néanmoins, les Mithras pourront se servir de l'ensemble
    des sorts de magie blanche. Jouissant de leur extrême agilité et de leur rapidité, ils privilègeront les attaques à mains nues à celles des armes. Il est également important de souligner que cette race est essentiellement féminine, la gente masculine préférant se faire plutôt rare et discrète.</font></p>
  <p align="center"><font face="Comic Sans MS"><font color="#FFFFFF"><img src="/dmic-corp/images/galka.jpg" width="250" height="188" /><br />
  </font><i><font color="#FFFFFF">Un Galka.</font></i></font></p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS">Les Galkas sont quant à eux rassemblés dans les quartiers industriels de Bastok. D'une force exceptionnelle, ils se verront être de précieux alliés lors de batailles importantes. De plus, les Galkas se distinguent des autres races de part leur mode de
    reproduction puisqu'ils sont en effet asexués. A noter aussi que leur apparence peut être extrêment variée.</font></p>
  <p align="right">&nbsp;</p>
  <p align="right"><font color="#FFFFFF" face="Comic Sans MS">Dark Mulau : 13/08/2003 @ 22:30<br />
  </font></p>
  <p></p>
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
