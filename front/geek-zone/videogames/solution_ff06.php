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
  <p align="center"><b><u><i><font face="Comic Sans MS" size="7" color="#FF0000">Soluce</font></i></u></b></p>
  <p align="center"><b><font color="#FFFFFF"><img border="0" src="/dmic-corp/images/FF6Logo.jpg" width="320" height="240" /></font></b></p>
  <p>&nbsp;</p>
  <p align="center"><b><i><u><font face="Comic Sans MS" size="5" color="#008000">Monde 1</font></u></i></b></p>
  <p align="center"><b><font color="#FFFFFF"><img border="0" src="/dmic-corp/images/map1.gif" width="456" height="380" /></font></b></p>
  <p align="center"><b><i><u><font face="Comic Sans MS" size="4" color="#0000FF">LA JEUNE FILLE ET L’ESPER</font></u></i></b></p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">1. Arrivée à Narshe</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : Narshe</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : ? ? ? ?, Wedge, Vicks</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Vous commencez la partie dans la peau d’une jeune fille et de deux soldats, dans la ville de
    Narshe. Votre but est d’atteindre les mines, situées au fond de la ville. Cette première partie, très simple est l’occasion d’une initiation aux combat. En cas de problèmes,
    utilisez la commande Healing Force Si vous le voulez, vous pouvez aller directement au Nord mais, si vous voulez vous faire de l’expérience, explorez la ville du mieux que vous le pouvez. Une fois arrivé dans les mines, repérez le point d’enregistrement et faites une sauvegarde. Un peu plus loin se trouve une grille. L’un
    de vos compagnons ouvrira la grille et vous vous ferez attaquer par le premier boss.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Pour le vaincre, n’utilisez pas la magie de foudre, utilisez les TekMissiles de Terra .N’attaquez pas lorsqu’il rentre dans sa coquille, soignez-vous pendant se temps avec
    HealForce. Si vous vous en tenez à ceci, il ne devrait pas poser de problèmes.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Une fois vaincu, vous pourrez accéder à l’Esper un peu plus loin.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Au contact de la fille, l’Esper produit une réaction étrange, faisant disparaître Wedge et
    Vicks.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">La fille se réveille dans la maison d’un vieil homme et parvient à se rappeler son nom : Terra.</font></p>
  <p>&nbsp;</p>
  <p><b><font face="Comic Sans MS" color="#0000FF"><u>2. Fuite de Narshe</u></font></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : Narshe</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : Terra, puis Locke et des Mogs</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Après le dialogue avec l’homme, fouillez la pendule pour obtenir un élixir puis passez par la porte de derrière. Suivez le pont, entrez dans les mines et prenez vers le nord. Il est déconseillé d’ouvrir les coffres que vous verrez maintenant car il contiendront plus tard des
    objets plus intéressants. Au bout d’un moment, des soldats vont vous surprendre. Terra leur échappe en tombant dans un trou.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Locke fait son apparition. Après la séquence animée, vous dirigerez des équipes de
    Mogs. Vous devez tuez les soldats avant qu’ils ne parviennent jusqu’à Terra. Pour info, la meilleur équipe est celle comportant un Mog nommé…
    Mog, justement. Utilisez sa capacité « Danse
    » dès que vous le pouvez. Quand vous aurez battu les soldats, vous devrez combattre le marchal.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Avant ce combat, enlevez son équipement à Mog. Locke peut utiliser son bouclier et la lance vous servira plus tard. Pour combattre le Maréchal, pas de tactique particulière. Arrangez-vous pour avoir une équipe en bonne santé au début du combat car il frappe fort ! Essayez de
    le voler avec Locke.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Après le combat, Terra se réveille et vous sortez des cavernes. Notez bien l’emplacement du passage secret avant de quitter la ville.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">3. A Figaro</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : Figaro</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : Terra, Locke, rejoints par Edgar</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Une fois sorti de Narshe, dirigez-vous vers le sud. Vous devriez localisez un désert. Au centre de ce désert, se trouve le château de Figaro. Entrer-y et allez parler au roi (Edgar). Après le dialogue, vous contrôlez Terra seule. Explorez le château de fond en comble. Vous
    devriez entendre parler du frère jumeau d’Edgar, Sabin. Faites également des achats si vous le souhaitez. N’oubliez pas d’acheter les « Tools » (la petite pièce de droite avant la salle du trône). Une fois votre promenade terminée, retournez dans la salle du trône pour parler à Edgar. S’en suivront quelques
    scènes animés au cours desquels vous ferez la connaissance de Kefka. Quand vous contrôlerez Edgar, allez parler à
    Kefka, puis au garde à la porte du château. Après une fuite épique, vous affronterez deux armures
    Magitek.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Pour les vaincre, utilisez l’autocrossbow d’Edgar. Si vous lancez un sort durant cette bataille, vous aurez le droit à une petite scène cinématique. Une fois enfuis, dirigez-vous vers la caverne à l’est de Figaro</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">4. Passage vers South Figaro</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : Caverne</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : Terra, Locke, Edgar</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Dans la caverne, vous trouverez tout d’abord un lac permettant de restaurer vos points de vie. Profitez-en, si vous le voulez, pour faire monter votre expérience en vous battant. Il y a beaucoup de coffres dans cette caverne mais il est également déconseillé de les prendre, des
    choses plus intéressantes s’y trouveront par la suite. Allez au Sud puis prenez le passage avec les escaliers. Suivez le couloir jusqu’à vous retrouver à l’air libre. Une fois sorti, allez un peu au sud, vous trouverez South Figaro.</font></p>
  <p>&nbsp;</p>
  <p><b><font face="Comic Sans MS" color="#FFFFFF"><u>5. A South Figaro</u></font></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : South Figaro</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : Terra, Locke, Edgar</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Dans cette ville, faites des achats autant que vous le pouvez (en particulier d’armes et d’armures). Dans le café, vous rencontrerez Shadow pour la première fois. Une fois prêts et reposés, sortez de la ville (vous pouvez aussi louer un chocobo mais ce n’est pas
    nécessaire). Dirigez-vous vers les montagnes au Nord vers une petite maison. Examinez les différents éléments pour qu’Edgar fasse ses commentaires. N’oubliez pas de fouiller dans le pot. Reposez-vous si nécessaire. En sortant de la maison, parlez au vieil homme devant la porte. Dirigez-vous maintenant un peu à l’Est.
    Une route dans les montagnes vous indique les monts Koltz.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">6. Retrouvailles avec Sabin.</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : Monts Koltz</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : Terra, Edgar, Locke puis Sabin</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Commencez l’ascension des montagnes. Les ennemis sont assez nombreux donc, utilisez prudemment la magie « soins » de Terra. Explorez tout les passages pour être sur de ne rien manquer. Vous remarquerez une silhouette qui vous précède. Continuez votre route. Après le point d’enregistrement,
    vous finirez par découvrir un passage devant lequel se tient Vargas. Celui-ci va vous attaquer.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Commencez par éliminer les deux ours en utilisant le Bio blaster d’Edgar, acheté à Figaro. Tant que les bestioles ne sont pas mortes, attaquez bêtement avec Terra et Locke. Quand Vargas est seul, faites attaquer Edgar, essayez de voler avec Locke et utilisez la magie feu avec
    Terra, ou soignez l’équipe. Lorsque Sabin est seul face a lui, yttilisez son blitz pummel
    (avant,arrire,avant) pour le tué en un coup !</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Après un moment, Sabin fera son apparition. Vous devrez alors le diriger seul contre Vargas. Pour vous en débarrasser, utilisez le Blitz de Sabin « Pummel ».</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Au sortir de cette bataille, Sabin se joindra à vous. Continuez votre route par le passage devant lequel était Vargas. Vous sortirez bientôt des Monts Koltz. Dirigez vous vers le nord. Dans les montagnes, vous devriez apercevoir la cachette des Returners.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">7. La résistance s’organise</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : cachette des Returners</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : Terra, Locke, Egar, Sabin</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Une fois les diverses scènes passées, vous prenez le contrôle de Terra. Explorez toute la cachette avant de sortir. Banon, le chef des résistants, se trouve ici. Quand il vous demande si vous voulez les aidez, acceptez. Banon met alors un plan en place. Hélas, la réunion tourne
    court et Locke vous laisse pour aller espionner à South Figaro. Allez vers les chutes, comme vous le dit Banon et sautez sur le radeau.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">8. Traversée du fleuve Lete</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : rivière</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : Terra, Edgar, Sabin, Banon</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Avant toute chose, vous devez savoir que si Banon meurt, vous avez perdu la partie. Faites donc très attention. Il est conseillé de ne lui faire utiliser que la commande « Heal » lors des combats.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Tant que vous êtes sur le radeau, vous ne pouvez pas accéder au menu. Profitez donc des quelques arrêts pour vous refaire une santé. Après de nombreux combats, vous tomberez d’une cascade et rencontrerez pour la première fois
    Ultros.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Attention Ultros est assez puissant. Son attaque « Tentacle », lorsqu’elle est ciblée sur un seul personnage peut très bien le tuer. Faites attaquer Edgar à l’Autocrossbow, utilisez l’Aura bolt de Sabin, faites soigner l’équipe par Banon et attaquez avec Fire avec
    Terra.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">! SI BANON EST KO, LA PARTIE SE TERMINE !</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Une fois que vous l’aurez suffisamment blessé, Ultros disparaîtra. Sabin voudra le poursuivre mais sera emporté par la rivière.</font></p>
  <p><font face="Comic Sans MS" color="#0000FF">A partir de là, vous aurez à choisir entre 3 scénarios. Sachez que vous devrez les faire tous les 3 de toute façons. Ils sont ici classés du plus difficile au plus simple.</font></p>
  <p>&nbsp;</p>
  <p align="center"><font face="Comic Sans MS" color="#0000FF" size="4"><b><i><u>SCENARIO DE SABIN</u></i></b></font></p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">9. La rencontre avec Shadow</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : Maison, puis camp impérial</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : Sabin, puis Shadow.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Vous vous trouvez au bord de la mer. Allez vers la maison à l’est. Devant celle-ci, vous rencontrerez
    Shadow. Quand il vous demandera si vous le voulez en tant que partenaire, acceptez.
    Attenion, il peut partir à n’importe quel moment du jeu. Parlez avec le vieux dans la maison
    si vous le voulez. Dirigez vous ensuite vers le sud-est. Localisez une petite partie jaune sur la carte. Il s’agit en fait d’une base militaire. Avancez dans le camp. Vous verrez plusieurs scènes. Après l’une d’elle, vous changez de personnage.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">10. Le champion de Doma</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : château de Doma</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : Cyan</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Tout ce que vous avez à faire est de sortir du château et d’aller affronter le commandant de l’armée.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Dans ce combat, utilisez plusieurs fois la Sword Technic. A sa mort, le commandant vous laisse la très utile Black Belt.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">11. La perfidie de Kefka</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : base impériale</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : Sabin, Shadow puis Cyan</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Continuez de progresser dans le camp en l’explorant si le cœur vous en dit. Après un moment, vous verrez ce que Kefka a l’intention de faire. Poursuivez-le. Chaque fois que vous le frappez, il s’enfuit. Une fois ce « combat » terminé, il vous laisse avec des armures
    Magitek sur les bras. Après les avoir battu, vous verrez Cyan se battre contre les soldats impériaux. Filez-lui un coup de main. Une fois que vous les aurez défaits, Sabin aura l’idée de voler des armures
    magitek. Sortez ensuite du camp. Cyan vous indiquera où se trouve la prochaine étape de votre voyage : la forêt
    hantée.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">12. La forêt enchantée</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : forêt</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : Sabin, éventuellement Shadow, Cyan</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Attention, les adversaires de la forêt sont peu résistants mais relativement forts. La traversée est facile si vous faites gaffe aux passages. Au bout d’un moment, vous arrivez sur le quai d’une gare. Entrez-y</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">13. Le train fantôme</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : train</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : Sabin, éventuellement Shadow, Cyan, éventuellement ? ? ? ?</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Vous allez devoir traverser le train pour stopper la locomotive. Avant tout, allez dans le wagon de droite. Parlez au fantôme qui s’y trouve. Il pourra vous accompagner. Commencez la traversée du train. Attention, les ennemis sont assez puissants. Dans un des wagons, les
    fantômes se mettront à vous poursuivre. Sabin les sèmera. Pour vous en débarrasser, actionnez le levier dans le wagon suivant. Au bout d’un moment, vous trouverez le wagon restaurant, vous permettant de restaurer vos HP. Pour vous en débarrasser, actionnez le levier dans le wagon suivant. Dans les wagons à compartiments,
    fouillez tous les coffres, vous devriez rencontrer Ziegfried. Il ne vous posera pas le moindre problème. Explorez tout car les items à trouver sont assez intéressants. Dans un des derniers wagons, votre compagnon fantôme vous quittera. Dans le dernier wagon avant la locomotive, sauvegardez. Dans la loco elle-même, actionnez
    les boutons selon la marche à suivre indiquée par le manuel, dans le coin en haut à gauche. Vous devrez actionner une soupape sur l’avant du train. Ceci fait, le train vous attaquera.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Le train fantôme tape fort, alors pour survivre, tapez plus fort que lui ! Envoyez vos attaques bourrines mais ne négligez pas d’envoyer quelques potions de temps en temps. Une fois vaincu, il vous laissera partir. Assistez alors à la très triste séquence animée.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">! Vous pouvez le tuer en un coup avec une phoenix down !</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">14. Les chutes de Barren</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : cascade</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : Sabin, éventuellement Shadow, Cyan</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Les chutes de Barren se trouvent à l’est de la forêt. Une fois là-bas, si ce n’est pas encore fait, Shadow vous lâchera. Approchez-vous du bord et sautez. Pendant votre chute, vous devrez affrontez des poissons plutôt agressifs mais assez faciles à vaincre.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">15. Le Veldt</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : Veldt</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : Sabin, Cyan</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Dans ce passage, contentez vous de traversez le Veldt jusqu’à Mobliz (à l’est). Si vous rencontrez Gau durant cette traversée, attaquez-le pour qu’il vous laisse.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">16. Mobliz</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : Mobliz</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : Sabin, Cyan</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">A Mobliz, explorez la ville et faites quelques achats. Achetez des armes et des armures pour les autres membres de votre équipe également. Au magasin d’items, achetez de la viande séchée puis retournez dans le Veldt.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">17. Gau et son trésor</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : Veldt, caverne</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : Sabin, Cyan, rejoints par Gau</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Dans le Veldt, combattez des monstres pour faire apparaître Dan puis donnez-lui de la viande séchée. Il se joindra à vous et vous parlera de son trésor. Dirigez-vous vers la caverne qui se trouve au Sud du Veldt. Profitez-en pour apprendre quelques techniques à
    Gau. Une fois
    dans la caverne, allez vers la droite, jusqu’à ce que Gau retrouve son « trésor ». Vous pouvez maintenant plonger sous l’eau.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">18. Exploration sous-marine</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : fonds sous-marins</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : Sabin, Cyan, Gau</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Cette traversée est très facile. Contentez-vous de bien explorer les cavernes dans lesquelles vous passerez (en prenant soin de vous soigner). Quand vous arriverez à un bassin rempli d’eau, actionnez l’interrupteur au sud pour le vider. Vous arriverez ensuite à
    Nikeah.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">19. Retour vers Narshe</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : Nikeah</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : Sabin, Cyan, Gau</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Une fois en ville faites du shopping si le cœur vous en dit ou parlez directement au capitaine du bateau, qui vous emmènera vers
    Narshe.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Fin du premier scénario</font></p>
  <p>&nbsp;</p>
  <p align="center"><b><i><u><font face="Comic Sans MS" color="#0000FF" size="4">SCENARIO DE LOCKE</font></u></i></b></p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">20. Au bal masqué… (air connu)</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : South Figaro</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : Locke</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Dès que vous avez la main, allez au magasin d’items et parlez au marchand (en turban bleu). Vous l’attaquerez. Durant le combat, n’utilisez que la commande Steal jusqu’à ce que vous lui ayez volé ses vêtements. Ceci fait, rendez-vous dans la seule maison où vous puissiez
    accéder. Parlez au vieux puis descendez l’escalier. Parlez au garçon pour qu’il vous laisse passer. Sortez de la maison puis montez sur l’espèce de « balcon ». Allez complètement à gauche. Parlez au garde en uniforme vert puis, comme pour le marchand, piquez-lui ses vêtements. Allez ensuite parler au garde qui vous
    bouche le passage (à côté de celui qui nettoie une armure magitek). Entrez dans le café et descendez l’escalier à droite. Entrez dans la pièce où se trouve le marchand et parlez-lui. Volez-lui encore son costume puis prenez le cidre, sur la table. Retournez à la maison du vieil homme pour lui donner le cidre. Allez
    ensuite voir le garçon et donnez-lui comme mot de passe « Courage ». Empruntez le passage secret. Quand vous ressortez, entrez dans la maison. Au premier étage, prenez la première porte. Derrière l’armoire, se trouve un passage. Dans le couloir, Locke proposera de retirer son déguisement. Acceptez ou refusez, cela n’a
    aucune importance.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">21. Le général</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : maison</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : Locke, rejoint par Celes</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Passez devant la porte en bas. Vous ferez la connaissance de Celes
    Chere. Une fois la scène finie, entrez dans sa prison et libérez-la. Après le dialogue, prenez sa clé au garde. La pièce d’à côté comporte un point de sauvegarde. Dans l’autre pièce, repérez l’horloge
    qui ne marche pas et activez-la. Entrez dans le passage où vous trouverez de l’équipement pour
    Celes. Continuez votre progression jusqu’à arriver devant une porte en haut d’escaliers. Passez cette porte pour sortir enfin du village.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">22. Retour vers Narshe</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : caverne</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : Locke, Celes</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Retournez vers la caverne par laquelle vous aviez précédemment quitté Figaro pour vous rendre à South Figaro. Traversez-la. Arrivé à la sortie, un boss vous attaquera.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Pour le tuer, utilisez une technique très offensive en faisant attaquer Locke et le sort Ice avec Celes ou bloquez la magie du monstre avec la commande Runic de Celes et attaquez avec Locke.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Fin du deuxième scénario.</font></p>
  <p>&nbsp;</p>
  <p align="center"><b><i><u><font face="Comic Sans MS" size="4" color="#0000FF">SCENARIO DE TERRA ET EDGAR</font></u></i></b></p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">23. De retour sur la rivière</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : rivière</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : Terra, Edgar, Banon</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Pas de problème pour ce passage, vous n’avez qu’à combattre.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">24. Narshe</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : mines</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : Terra, Edgar, Banon</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Une fois le voyage terminé, vous vous retrouvez à côté de
    Narshe. Entrez-y. Les gardes refusent de vous laisser passer. Empruntez donc le passage secret utilisé par Locke quand il a secouru Terra. Les mines sont faciles à traverser. Au bout de quelques couloirs, vous
    remarquerez une lueur qui se déplace entre des rochers. Pour passer, empruntez le chemin suivi par la lumière. Si vous échouez, vous devrez combattre un monstre et recommencer le chemin. Il est conseillé de faire un schéma de la pièce et du trajet suivi par la lumière. Cet obstacle franchi, vous retrouverez le chemin
    suivi par Terra au début du jeu. Vous n’avez plus qu’à vous rendre à la maison de
    Arvis.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Une séquence animé vous montrera les retrouvailles des compagnons. Malheureusement, Kefka choisit ce moment pour attaquer la ville. A vous de la défendre.</font></p>
  <p>&nbsp;</p>
  <p><font face="Comic Sans MS" color="#0000FF"><u><b>25.</b></u></font><b><font face="Comic Sans MS" color="#0000FF"><u>Bataille pour l’Esper</u></font></p>
  </b>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : Champs enneigés</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : 3 groupes au choix parmis : Terra, Locke, Edgar, Sabin, Cyan, Gau, Celes.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Vous devez empêcher les gardes d’atteindre Banon. Deux techniques sont envisageables :</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">1. Formez trois groupes équilibrés au maximum et envoyez-les tous pour éliminer les gardes.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">2. Formez un groupe de 4 personnages (les plus forts) qui fera tout le ménage tout seul.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Une fois les gardes tués, vous allez devoir attaquer Kefka.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Pas de technique particulière pour défaire celui-ci. Utilisez des attaques puissantes et soignez le groupe avec Celes ou Terra. Et blocqué ses sorts avec Runic de Celes.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Une fois la bataille remportée, Tout le monde se retrouve devant l’Esper. Au contact de Terra, une mystérieuse réaction a lieu…</font></p>
  <p>&nbsp;</p>
  <p align="center"><b><u><font face="Comic Sans MS" size="4" color="#0000FF">LES EVENEMENTS SE PRECIPITENT</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">A l’issue de cette séquence, l’équipe décide d’aller rechercher Terra. Vous devez choisir quatre membres de votre équipe. Si vous tenez à connaître le maximum détails sur l’histoire, prenez comme personnages Locke, Edgar, Sabin et
    Celes.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">26. On s’équipe…</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : Narshe</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : au choix, parmi Locke, Edgar, Sabin, Cyan, Gau, Celes</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Avant de partir de la ville, passez dans les magasins si le cœur vous en dit et n’oubliez pas de prendre les objets dans la maison tout à droite du village. Ne vous en faîtes pas pour le coffre scellé, vous vous en occuperez plus tard.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">27. En route !</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : Figaro</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : au choix parmi Locke, Edgar, Sabin, Cyan, Gau, Celes</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Allez directement à Figaro. Passez-y une nuit avec Edgar et Sabin pour en savoir plus sur leur passé. Descendez ensuite l’escalier à gauche dans la toute première pièce. Parlez à l’homme qui vous transportera, vous et tout le château, de l’autre côté des montagnes. Au
    nord, se trouve le village de Kohlingen.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">28. Locke, un cœur qui saigne</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : Kohlingen</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : au choix parmi Locke, Edgar, Sabin, Cyan, Gau, Celes</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">En parlant aux habitants du village, vous en apprendrez plus sur la route qu’a suivie Terra. Dans le café, vous rencontrerez Shadow qui, moyennant finances, se joindra à vous si vous êtes moins de quatre (déconseillé, il partira à un moment gênant). Allez dans la maison tout
    en haut à gauche pour en apprendre un peu plus sur le passé de Locke. Entre ensuite dans la maison tout en haut à droite et descendez les marches. Vous rencontrerez Rachel. Sortez ensuite de la ville et dirigez-vous vers le sud. Vous arriverez à
    Jidoor.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">29. Où est Terra ?</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : Jidoor</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : au choix parmi Locke, Edgar, Sabin, Cyan, Gau, Celes</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">A Jidoor, vous trouverez des protections très efficaces, ainsi que quelques armes. Parlez aux gens pour avoir des renseignements sur Maria et la ville de Zozo. Louez ensuite un chocobo pour vous y rendre.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">30. Zozo, une ville sans histoires…</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : Zozo</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : au choix parmi Locke, Edgar, Sabin, Cyan, Gau, Celes</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Attention, vous pouvez rencontrer des ennemis (assez costauds d’ailleurs) dans cette ville. Commencez par vous rendre dans le bâtiment indiqué Inn. Vous y trouverez une horloge que l’on vous demandera de régler. Entrez les nombres suivants : 6, 10, 50. Vous accéderez à une
    salle secrète renfermant la Chain Saw, un des tools d’Edgar. Explorez ensuite le bâtiments Café (optionnel), puis entrez dans l’immeuble indiqué
    Relic. Grimpez jusqu’à une porte de bois où vous trouverez la relique principale de Locke : Thief
    Glove. Redescendez quelques étages, jusqu’à une ouverture (elle se
    situe en dessous du type qui saute de maisons en maisons. Mettez vous à la fenêtre, à gauche, puis sautez. Montez les étages jusqu’à ce que vous puissiez sautez à nouveau dans le premier bâtiment. Continuez à monter. Peu avant d’arriver au sommet, un charmant monsieur, nommé Dadaluma vous bouchera le passage et vous
    attaquera.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Il est vraiment facile à tuer. Utiliser les attaques spéciales de vos personnages (blitz, sword
    technic, magie…) et il ne devrait pas faire long feu. Si vous mettez trop de temps à le finir, il appellera deux acolytes à la rescousse. Ne vous en faites pas, ils ne sont pas
    costauds.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Une fois le passage dégagé, allez tout en haut du bâtiment et entrez par la porte. Vous retrouvez Terra, ainsi qu’un
    Esper. Il vous racontera son histoire et vous indiquera votre prochain objectif : l’usine Magitek de l’empire. Il vous laissera également en cadeau quatre
    magicites. Tout vos personnages vont à présent utiliser de la magie. Après la séquence, allez vers la sortie (sans oublier d’ouvrir les deux coffres). Vous retrouverez le reste de l’équipe. Celes et Locke décident de partir à l’assaut de l’usine
    Magitek. Choisissez deux autres membres pour les accompagner. Avant
    de sortir de Zozo, équipez votre équipe avec les magicites et parlez au fantôme qui vous apprendra à les utiliser.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">31. Maria</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : Jidoor</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : Obligatoirement Locke et Celes, accompagnés de Edgar, Sabin, Cyan ou Gau</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Une fois à Jidoor, allez directement à la maison tout en haut de la ville et parlez à l’impresario (l’homme en bleu). Une fois qu’il est parti, lisez la lettre qu’il a laissé tomber dans l’entrée. Vous entendrez parler de Setzer et de son aéroplane. Rendez-vous
    maintenant à la maison de l’opéra, au sud de Jidoor. Auparavant, vérifiez que vous avez bien la relique Sprint
    shoes. Equipez -en n’importe quel membre de votre équipe, sauf Celes.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">32. Locke a une… bonne idée ?</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : Maison de l’opéra</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : Obligatoirement Locke et Celes, accompagnés de Edgar, Sabin, Cyan ou Gau</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">L’imprésario vous attend là-bas. Parlez-lui. S’ensuivra une séquence animée dans laquelle Locke va exposer son plan génial. Il est maintenant temps de passer à l’action !</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">33. Une nuit à l’opéra</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : Maison de l’opéra</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : Locke, puis Celes</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Après la première scène de l’opéra, vous vous retrouvez dans la peau de Locke. Familiarisez-vous bien avec la topographie des lieux, vous allez en avoir besoin. Allez dans les loges, où se trouve
    Celes. Parlez-lui pour lui passer la main. Jetez un coup d’œil sur votre
    texte. Quand vous vous sentez prêt, entrez en scène !</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">34. En scène !</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : scène de l’opéra</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : Celes</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Attention, voici l’un des passage culte du jeu ! Vous allez devoir choisir les bonnes amorces de chacun des couplets de votre chanson, avant que la musique ne s’arrête. Ce sont, dans l’ordre « Oh my hero… », «I’m the darkness… » et « Must I… ». Une fois ceci
    fait, Draco apparaîtra. Parlez-lui chaque fois qu’il s’immobilise, puis ramassez le bouquet qu’il a laissé tomber. Dirigez-vous ensuite vers le balcon (tout en haut de marches). Allez tout au bord de celui-ci et faites action pour lancer votre bouquet. Après cette superbe performance musicale, vous reprenez le contrôle
    de Locke.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">35. Dans les coulisses…</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : Maison de l’opéra</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : Locke, accompagnés de Edgar, Sabin, Cyan ou Gau</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Ramassez la lettre dans la pièce où vous vous trouvez. Allez en parler avec l’impresario. Cela va déclencher un compte à rebours. Vous avez 5 minutes pour arrêter
    Ultros. Commencez par vous diriger vers la salle des interrupteurs (en haut à droite par rapport à la pièce où
    vous vous trouvez). Poussez le levier tout à droite. Revenez à votre point de départ et allez dans la salle tout en haut à gauche. Vous devez atteindre Ultros en combattant les rats qui se baladent sur le plancher. Utilisez vos attaques les plus fortes, vous devez les vaincre rapidement. Normalement, vous devriez atteindre
    Ultros au bout d’environ 3mn 30. Parlez-lui. Après votre… entrée en scène, vous allez devoir le combattre.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Ultros n’est pas non plus trop compliqué à mater. Ne lui laissez pas le temps d’attaquer. Envoyez-lui vos blitz et autres joyeusetés dans la tronche et il devrait vous laisser tranquille ! Une fois que vous lui aurez réglé son compte, Setzer va arriver et enlever
    Celes.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">36. A pile ou face…</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : Aéroplane</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : Obligatoirement Locke et Celes, accompagnés de Edgar, Sabin, Cyan ou Gau</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Une fois la séquence terminée, parlez à
    Setzer. Celes le « convaincra » de vous aider. Vous vous envolez jusqu’à
    Albrook. Avant de descendre, faites des achats et reposez-vous en parlant aux deux hommes dans le hall de l’aéroplane.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">37. Albrook</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : Albrook</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : Obligatoirement Locke et Celes, accompagnés de Edgar, Sabin, Cyan ou Gau</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Ce passage en ville n’est pas obligatoire mais vous permettra d’acquérir de bons objets. Profitez-en aussi pour vous faire de l’expérience et gagner des sorts en prévision de la suite. Une fois prêts, suivez les montagnes par la droite, vous arriverez à
    Vector.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">38. La capitale de l’empire</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : Vector</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : Obligatoirement Locke et Celes, accompagnés de Edgar, Sabin, Cyan ou Gau</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Ne dormez PAS dans l’auberge de la ville, vous risquez de vous faire voler de l’argent. Allez plutôt dans une des maisons (la plus étroite) et parlez à la femme. Refusez de prêter allégeance à l’empire et battez les gardes qui arrivent. Reparlez à la femme qui vous
    soignera alors. Allez ensuite parlez au vieil homme à côté des caisses, à droite de la ville. Ecoutez son plan et, une fois que vous avez la main, sautez sur les caisses. Vous pourrez ainsi vous introduire dans l’usine
    Magitek.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">39. L’usine maléfique</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : usine magitek</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : Obligatoirement Locke et Celes, accompagnés de Edgar, Sabin, Cyan ou Gau</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">&nbsp;Attention, cet endroit regorge d’objets intéressants mais aussi d’ennemis TRES résistants. Si vous voulez faire au plus vite, essayez de vous diriger principalement vers le Sud, en utilisant le plus possible les tapis roulants. Mais vous risquez de louper pas mal d’objets
    comme la flame blade, la thunder blade ou encore le gold shield. Au bout d’un moment, vous arriverez devant
    Kefka, occupé à brutaliser des Espers. Suivez le chemin que ceux-ci ont pris. Une fois que vous les voyez, ne leur parlez pas tout de suite, allez d’abord sauvegarder en passant par la porte de gauche. Ceci fait,
    parlez à Ifrit, cela déclenchera un combat.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Vous combattez les Espers à tour de rôle. Pour mater Ifrit, utilisez des sorts de glace ou attaquez normalement. Shiva, en tant que déesse de la glace, déteste le feu.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Au bout de quelques tours, ils abandonneront le combat et accepteront de vous aider en se transformant en Magicite. Vous pouvez retourner sauvegarder avant de prendre la porte de droite et de monter les escalier. Au dernier étage, vous rencontrerez un nouveau boss.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Ce boss tape fort et utilise le sort Wall of Change pour se protéger de vos attaques. Utilisez Scan sur lui pour connaître son point faible du moment et attaquez -le avec. Normalement, si vous attaquez bien, il devrait utiliser son sort une fois tout au plus.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Le monstre tué, vous entrez dans le laboratoire proprement dit. Dans la dernière pièce de celui-ci, vous trouverez un levier permettant de libérer les nombreux Espers emprisonnés. Après une petite conversation avec Cid, le chef des lieux, Kefka arrivera. A la fin de la
    séquence, Celes le téléportera (et elle aussi) dans un autre endroit. Cid vous fera monter dans un ascenseur. Après son speech, allez sauvegardez puis reparlez-lui. Vous devrez partir en catastrophe dans un wagon. Sur votre route, de nombreux ennemis vous attendrons, masi ils ne sont pas puissant du tout. Le dernier
    adversaire sera un boss.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Ce boss se compose de trois partie, le corps et les bras. Les bras peuvent se régénérer. Pour le tuer, essayer des sorts visant toutes les cibles
    (Espers, Fire Dance, Autocrossbow…) pour que les bras vous laissent quelques tours de repos. Après, concentrez vous uniquement sur
    le corps, même si les bras se régénèrent.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Une fois vaincu, vous vous retrouvez à Vector.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">40. Fuite de Vector</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : Vector, aérostat</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : Locke, accompagné de Edgar, Sabin, Cyan ou Gau, puis rejoints par Setzer</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Allez sauvegarder en haut de l’écran, puis prenez le chemin de la sortie de la ville. Setzer viendra vous chercher et vous emmènera sur son aérostat.
    Kefka, pas content que vous lui ayez faussé compagnie, lancera deux bras mécanique à l’assaut du navire.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Attention, n’utilisez pas de sorts de feu ni de tonnerre sur ces ennemis. Reservez un personnage pour soigner. Servez-vous de l’habileté Slot de
    Setzer. Si vous arrivez à la sortir au moins deux fois, la victoire est quasiment certaine.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Une fois le combat terminé, Locke décidera de retourner à Zozo pour voir Deliah.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Une séquence animée va se déclencher, à la suite de laquelle vous contrôlerez
    Maduin, le père de Deliah. Sortez de la caverne et allez vers le haut à droite, vous remarquerez une jeune femme évanouie, portez-lui secours. Pour la suite, suivez le développement logique de l’histoire.
    Une fois la séquence terminée, Terra rejoindra votre équipe. Elle maîtrise désormais une nouvelle capacité :
    Morph. Conseil : ne l’utilisez que dans les cas graves pour l’instant.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Une fois à bord de l’aérostat, prenez la direction de
    Narshe.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">41. Conseil de guerre, choix difficile et… MOG ! ! ! !</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : Narshe</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : obligatoirement Terra, accompagnée au choix de Locke, Edgar, Sabin, Cyan, Gau ou Setzer.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Arrivé en ville, un garde vous conduira à Banon. Vous comprenez que vous devez obtenir l’aide des Espers par le biais de Terra. Quand la discussion est terminée, sortez de la maison et retournez dans la maison où se trouvait le coffre scellé. Cette fois, vous rencontrez Lone
    Wolf qui s’enfuit quand il vous voit. Prenez la direction des mines pour le rattraper. Traversez-les, vous vous retrouverez sur les lieux de votre bataille contre
    Kefka. Continuez vers le haut, traversez le pont. Lone Wolf aura pris un Mog en otage. Ne faites rien, attendez simplement que le Mog se libère. Vous avez ensuite
    le choix. Soit vous parlez à Lone Wolf pour récupérer la relique Gold Hairpin (qui réduit de moitié le coût des sorts) ou vous parlez à
    Mog, qui rejoindra votre équipe. Ceci fait, sortez de Narshe.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Note : L’intérêt de Mog réside dans ses danses. Pour en apprendre un maximum, allez à la cachette des
    Returners, descendez dans la rivière et suivez en gros le scénario de Sabin de la partie 1.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">42. La porte scellée</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : Camp impérial puis caverne</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : obligatoirement Terra, accompagnée au choix de Locke, Edgar, Sabin, Cyan, Gau, Setzer ou Mog.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Mettez le cap sur le continent du sud. A l’ouest de celui-ci, vous devriez voir une maison avec un pont métallique. Descendez là.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">La maison est en fait un camp impérial. Si vous entrez dedans sans Terra, vous ne pourrez pas avancer plus loin. De l’autre côté, vous pourrez accéder à une caverne.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Cette caverne est grande et longue à explorer. Le chemin le plus direct consiste à allez tout le temps vers la droite et le bas mais vous allez louper de TRES bons items. Les plus importants sont la Coin
    Toss, changeant la commande Slot de Setzer, en GP Rain (lance de l’argent).
    Celle-ci se trouve dans le coffre à l’endroit où les passerelles bougent. Un autre objet utile et l’Atma
    Weapon, une arme qui inflige des dégâts en fonctions de vos HP. Vous la trouverez, ainsi que plusieurs
    Magicites, dans une salle secrète, à côté des ponts à actionner avec des interrupteurs (il faut également
    actionner un interrupteur pour y accéder).</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Finalement, vous allez arriver devant la porte scellée. Cet enquiquineur de Kefka vous aura suivi. Vous allez encore devoir vous « battre » contre lui, le temps que Terra ouvre la porte. Quand elle l’aura fait et que les Espers seront sortis de leur monde, retournez à l’aérostat
    par la sortie au sud de l’écran. Locke viendra vous chercher à l’entrée du camp impérial. Vous allez « chavirer ».</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">43. Entrevue avec l’empereur…</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : Vector</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : obligatoirement Terra, accompagnée au choix de Locke, Edgar, Sabin, Cyan, Gau, Setzer ou Mog.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Marchez jusqu’à Vector. Une fois là-bas, allez au palais impérial, tout au nord. Contre toute attente, vous serez très bien reçus.
    Equipez-vous des sprint shoes. Parlez à Gesthal qui vous demandera de parler à ses hommes. Vous avez quatre minutes. Ne perdez pas de temps à
    prendre les objets ou à parler à Kefka. Par contre, n’hésitez pas à combattre les soldats qui vous en veulent. Les quatre minutes passées, vous vous retrouverez à table avec l’empereur. Il va vous poser quelques questions. Ceci constitue une sorte de bonus qui vous permettra d’obtenir des objets supplémentaires.
    Voici les réponses à donner de préférence et leur traduction :</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">1. A qui porter le toast ?</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">To our hometowns (aux habitants)</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">2. Que faire de Kefka ?</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Let him in jail (le laisser en prison)</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">3. L’empoisonnement de Doma</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">What is done is done (ce qui est fait est fait)</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">4. A propos de Celes</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Celes is one of us ! (Celes est des nôtres !)</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">5. Posez une question, notez laquelle, puis, quand il aura répondu, demandez « one more question », posez les deux autres mais PAS deux fois la même. Quand vous aurez terminez de les posez, acceptez le sujet suivant.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">6. Les Espers…</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">They have gone too far (ils sont allés trop loin)</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">7. On vous proposera une pause. Acceptez et parlez aux gardes de l’empereur, assis avec lui. Combattez-les puis reprenez votre place et la conversation.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">8. Que voulez-vous m’entendre dire ?</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">That your war is truly over (que la guerre est vraiment finie)</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">9. Voulez-vous m’aider ?</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Yes !</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Le banquet terminé, vous vous retrouverez tous. Terra et Locke décideront de partir ensemble à Albrook. Avant de partir, vous serez récompenser en fonction du nombre de soldats auxquels vous aurez parlé et des réponses que vous aurez données au repas. Explorez aussi le
    château à fond. Direction Albrook.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">44. Sentiments…</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : Albrook</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : Terra, Locke</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Allez jusqu’à Albrook. Faites des achats si vous voulez. Rendez-vous au port où le général Leo vous présentera vos compagnons de route… Shadow et Celes ! Allez ensuite vous coucher. Après la grande scène de Celes et Locke, allez au port pour partir. En tant que Terra,
    parlez à Leo pour qu’elle aussi ait le droit à sa grande scène ! Enfin, parlez à Leo puis à Locke pour arriver à destination.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS">45. </font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : Thamasa</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : Terra, Locke, Shadow</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Dès que vous êtes sur l’île, dirigez-vous vers la ville. Vous vous rendrez vite compte que les étrangers n’y sont guère appréciés. Achetez quand même des armes et des armures au magasin du coin. Dans une maison, au fond du village, vous rencontrerez
    Strago. Parlez-lui.
    Vous ferez également la connaissance de sa petite-fille, Relm. Avant de partir à l’auberge, allez voir ce qui se passe derrière la maison à gauche du village (rien de répréhensible, ne vous alarmez pas). Les tarifs de l’auberge seront nettement plus praticables maintenant ! Malheureusement, vous ne pourrez pas profiter
    longtemps de votre lit douillet. Strago va venir vous chercher pour sauver sa petite-fille. Suivez-le et parlez-lui. Les habitants du village vont révéler leur « petit » secret. Après la séquence animée, vous entrez dans la maison.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">46. Ce soir on vous met le feu !</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : maison en flammes</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : Terra, Locke, Strago</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Dans la maison, vous verrez des flammes se déplacer. Si vous en touchez une, vous devrez combattre des ennemis. Ils ne sont pas très résistants. Ne vous laissez pas impressionner par l’ambiance, explorez calmement la maison, quitte à libérer des ennemis en ouvrant certaines
    portes. Vous trouverez des armes intéressantes dont un Ice Rod, utile pour ce passage du jeu. Dans une des pièces, vous verrez la source des flammes. Vous devez la combattre.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Etant une flamme, ce boss n’apprécie que très modérément les sorts d’eau et de glace. Essayez donc les magie Ice avec Terra et Locke, tandis que Strago attaquera avec Aqua Rake (avec son habileté Lore). Attention, ce boss contre-attaque avec de méchants sorts de feu, donc
    gardez des potions sous la main au cas où…</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Une fois ce boss vaincu, Shadow viendra vous tirer de vos ennuis. Après la petite scène, vous partez à la recherche des
    Espers. Avant de partir, prenez donc le Memento Ring qui se trouve dans le renfoncement à gauche dans la chambre de Relm</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">47. Rencontre avec les Espers.</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : caverne</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : Terra, Locke, Strago rejoints par Relm</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Partez vers le massif montagneux. Tout à l’est, vous verrez une ouverture. Entrez dans la caverne. Prenez tout de suite à droite sinon vous tournerez en rond. Au bout de quelques salles, vous apercevrez des statues. Allez les inspecter de plus près. Et voilà qu’Ultros vous
    retombe sur le palteau !</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Pour ce combat, utilisez des sorts de feu avec Terra, la Fire Rod avec Strago et faites attaquez Locke. Après quelques tours, Relm, qui vous suivait depuis quelques temps, se joindra à vous. Vous n’avez plus qu’à activer son habileté Sketch pour mettre fin au combat.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Prenez la sortie en hait à gauche. Dans la salle suivante, vous verrez trois trappes. Dans celle de gauche et de droite, vous trouverez des objets. Ensuite, entrez dans celle du bas. Continuez votre chemin, vous finirez par trouver les Esper.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">48. La trahison de Kefka (bis)</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : Thamasa</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : Général Leo</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Alors que la situation semble (enfin) s’arranger, voilà que Kefka resurgit… Avec tout l’empire à ses côtés. Vous allez vous retrouver dans la peau du général Leo. La seule chose à faire est d’attaquer Kefka.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Attaquez-le à l’épée ou avec Shock, vous le vaincrez quasi-obligatoirement. Après la séquence animée, vous retrouvez le groupe au grand complet. Il est temps de faire payer à l’empire !</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Attention, n’activez pas tout de suite la commande : Find the floating continent.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Il est maintenant temps de faire le point. Vous allez aborder le continent flottant, le dernier niveau de cette partie du jeu. Si vous voulez ne pas trop morfler à partir de maintenant, il vaut mieux que vous ayez quelques garanties :</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">- Vos personnages devront être, à la fin du continent flottant, à peu près tous au niveau 25. Il est TRES recommandé que Celes et Sabin soient un peu plus avancés dans les niveaux (et dans les magies également !). 28-30 est l’idéal, mais ils devraient s’en sortir à
    25-27.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">-Pour augmenter vos niveaux, battez-vous sur le continent flottant avec tous vos persos (vous pourrez revenir à l’aérostat à un endroit de ce niveau).</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">- Pour augmenter les magies, aller sur la petite île triangulaire et cherchez un ennemi invisible appelé Intangir. Pour le tuer, faites Doom sur lui. Attention, il lancera un sort très puissant sur le personnage qui le tuera. Il est conseillé d’associer en priorité à vos
    personnages la Magicite Maduin (attaques magiques puissantes) et Unicorn (sorts de soin).</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">- Achetez les meilleures armes et armures possible avec l’argent que vous retirerez des combats, vous en aurez grand besoin.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">- Si vous avez Mog, arrangez-vous pour qu’il connaisse quelques danses (3 ou 4 au minimum), sans quoi, il n’est pas très intéressant de jouer avec lui.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">- Combattez dans le Veldt ! Vous pourrez faire apprendre des techniques à Gau, et en plus, vous pourrez rencontrer des monstres puissants (ce sont toujours des monstres que vous avez déjà rencontré) qui feront monter votre expérience. Enfin, Strago pourra apprendre plusieurs
    sorts ennemis.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">OK, vous êtes prêts ? C’est parti pour le continent flottant !</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">49. Bataille aérienne</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : aérostat</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : au choix parmi Terra, Locke, Edgar, Sabin, Cyan, Gau, Celes, Setzer, Mog, Strago, Relm.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Le maximum de personnes autorisées dans l’équipe n’est que de 3 pour cette partie du jeu. Vous allez devoir vous battre contre les machines de l’IAF (Imperial Air Force). Assurez-vous d’avoir au moins un bon mage dans l’équipe maîtrisant le sort Bolt 2. Lancez ce sort
    en prisorité sur les ennemis mais ne négligez pas de vous soigner, les monstres tapant assez fort. Après plusieurs combat, vous verrez Ultros arriver. Cette fois, il a amené des renforts.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Pour battre Ultros, lancez comme d’habitude des sorts Fire 2, attaquez… Quand il appellera Chupon à la rescousse, Finissez d’abord Ultros. Chupon n’est pas dangereux si vous utilisez vos attaques les plus puissantes (Blitz, Tools, Rage, GP Rain…).</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">A la fin du combat, Chupon vous fera tomber de l’aérostat. Immédiatement après, vous devrez vous battre contre un autre boss.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Si nécessaire, prenez le premier tour pour vous soigner. Ce boss craint les attaques de foudre, donc n’hésitez pas à vous en servir. Après plusieurs tours, il activera, sur sa partie du haut, un mécanisme absorbant la magie. A ce moment, utilisez des attaques physiques pour en
    venir à bout. En vous pressant un minimum, vous devriez le battre largement avant la fin du compte à rebours.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Le boss détruit, vous atterrirez enfin sur le continent flottant…</font></p>
  <p>&nbsp;</p>
  <p align="center"><b><i><u><font face="Comic Sans MS" size="4" color="#0000FF">LA FIN DU MONDE ? VOUS Y ETES !</font></u></i></b></p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">50. Le continent maudit</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : continent flottant</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : au choix parmi Terra, Locke, Edgar, Sabin, Cyan, Gau, Celes, Setzer, Mog, Strago, Relm, rejoints par Shadow.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Dès que vous arrivez sur la terre ferme, allez parler à Shadow, étendu non loin de là, puis enregistrez. Le continent flottant regorge de créatures très puissantes, donc, soyez prêts ! Vous devez vous dégager un passage en activant les « boutons » qui joncheront votre
    parcours (ils sont gris, le long des parois). Utilisez les transporteurs pour y accéder (plate-forme avec un point rose au milieu). Quand un passage vous semble bouché, approchez-vous en tout de même, il peut arriver qu’il s’ouvre automatiquement. Tout à droite du continent, en bas, se trouve un transporteur mène à un
    point d’enregistrement. Utilisez-le car maintenant, ça va être chaud ! Sortez du transporteur et allez activer le bouton à gauche de l’écran. Prenez le transporteur ainsi révélé. Vous arrivez près d’un trou où vous pouvez choisir de retourner dans l'aérostat. Cette solution est pratique pour faire monter les
    niveaux des persos (vous devez recommencer ce niveau depuis le début si vous retournez dans l’aérostat). Sachez cependant que Shadow ne vous accompagnera pas si vous décidez de quitter le continent flottant. Vous le retrouverez à la même place qu’au début quand vous reviendrez. Une fois prêts, allez vers la gauche de
    ce trou. Un passage se libérera à votre approche. Avancez vers le haut. Vous apercevrez une créature, Atma Weapon. Parlez-lui pour la combattre.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Atma Weapon peut se révéler assez prise de tête si vous lui laissez le temps de lancer de grosses attaques. Ce boss est très peu sensible aux armes, préférez donc la magie. Une bonne idée est d’avoir Terra dans votre équipe, de la changer en Esper et de lui faire lancer des
    sorts comme Bolt 2… Assurez-vous aussi d’avoir au moins deux persos avec le sort Cure 2 et Life parce que Atma tape très fort. Le Blitz de Sabin Aura Bolt peut aussi se révéler efficace.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Une fois que vous l’aurez tuée, Shadow quittera le groupe. Vous n’avez plus qu’à monter les escaliers pour rencontrer Gesthal et Kefka. Si elle n’est pas dans votre groupe, Celes vous rejoindra durant la séquence animée qui va suivre. Quand elle sera terminée, un compte
    à rebours commencera. Fuyez par la droite. Les ennemis qui vont vous attaquer sont sensible au feu, utilisez donc vos sorts Fire 2, vos armes attaquant par le feu, etc… N’ayez pas peur d’utiliser des sorts puissants, l’essentiel étant de combattre vite. Quand vous arriverez devant l’étoile, changez vite d’équipement
    en mettant des armes attaquant par la glace. Vous affronterez une sorte de mini-boss.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Il commencera par lancer Condemned sur vos persos. Ne paniquez pas. Ne lancez pas de sorts, il a Reflect activé sur lui. Attaquez-le normalement ou avec des attaques spéciales (Blitz, Sword Technic…) pour en venir rapidement à bout.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">La technique de NeoNemesis : Equipez un des persos avec l'esper Carbunkl, dès le debut du combat, invoquez le, lancés alors des ice2 sur vos propres persos, il seront alors refletés sur le boss, et les sorts ne peuvent etre refletés qu'une seul fois, il encaissera alor de plein
    fouet...</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Arrivé au bord du continent, vous verrez l’aérostat. Quand on vous propose de sautez, choisissez Wait (attendre). Approchez-vous en encore une fois et sélectionnez Wait for Shadow (attendre Shadow). Ne vous affolez pas, il n’arrivera que cinq secondes avant la fin du compte à
    rebours.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">SURTOUT attendez-le ou j’en connais un qui ne sera pas content… (n’est-ce pas Neo ?)</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Je confirme, en plus j'ai déjà dus recommencer le jeu une fois a cause de ça...</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Une fois que Shadow vous aura rejoint, vous vous retrouverez à bord de l’aérostat. Assistez à la fin du monde en direct !</font></p>
  <p>&nbsp;</p>
  <p align="center"><b><i><u><font face="Comic Sans MS" size="5" color="#008000">Monde 2</font></u></i></b></p>
  <p align="center"><img border="0" src="/dmic-corp/images/map2.gif" width="456" height="380" /></p>
  <p>&nbsp;</p>
  <p align="center"><b><i><u><font face="Comic Sans MS" size="4" color="#0000FF">TOUT N’EST PAS PERDU !</font></u></i></b></p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">51. La jeune fille et le (presque) mort</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : île déserte</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : Celes</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Quand vous vous réveillez, vous ne contrôlez plus que Celes. Parlez à Cid. Il vous demande de le nourrir. Sur la plage, dans l’écran du bas, vous trouverez des poissons que vous pouvez attraper quand vous êtes prêts d’eux.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Vous avez deux possibilités.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">1. La plus immorale consiste à laisser mourir le pauvre Cid. Soit vous faites des allez et retour entre la maison et le jardin en lui parlant à chaque fois jusqu’à ce qu’il meure, soit vous le nourrissez avec des poissons qui nagent lentement.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">2. C’est plus long mais beaucoup plus moral ! Vous nourrissez Cid avec des poissons qui nagent vite. Il récupérera lentement. Si il n’y a pas de poissons qui nagent vite, allez parler à Cid pour « changer » les poissons.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Remarque : Les poissons bon pour Cid sont indiqués Yummy fish dans votre inventaire (dans la section Rare items) et les mauvais Fish ou Rotten fish.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Dans un cas comme dans l’autre, vous obtiendrez un radeau qui vous permettra de quitter l’île.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">52. Premiers contacts avec le nouveau monde</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : Albrook</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : Celes</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Vous échouerez près d’Albrook. Allez-y.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Attention ! Comme Celes est votre unique personnage, mettez-lui le meilleur équipement possible et n’hésitez pas à fuir des combats si cela s’avère nécessaire.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Une fois à Albrook, vous pourrez vous reposez ou acheter des objets. Parlez avec les gens pour en savoir plus sur la situation actuelle et pour apprendre qu’un homme vous ressemblant à quitté la ville pour Tzen. Vous n’avez plus qu’à vous y rendre.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">53. Sabin le combattant</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : Tzen</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : Celes</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Tzen se trouve au nord d’Albrook, à côté d’un petit désert. Sur le chemin, remarquez la tour, il s’agit du palais de Kefka où vous ne pouvez pas entrer pour le moment. Une fois près de Tzen, plantez une tente pour récupérer, et sauvegardez. Dès que vous entrerez dans
    le village, avancez un peu puis dirigez-vous dans la même direction que tout le monde. Vous allez retrouver Sabin. Avant qu’il se joigne à vous, vous allez devoir sauver un enfant resté dans la maison qu’il soutient. Cette partie est aussi chronométrée. Le gamin se trouve dans l’étage du bas, près de la cheminée.
    Une fois que vous l’aurez sauvé, rien ne vous empêche de fouiller les nombreux coffres de la maison si vous en avez encore le temps.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Quand vous serez sorti, Sabin rejoindra votre équipe. Ca va déjà mieux ! Parlez aux gens pour en apprendre plus sur les différentes villes du continent.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">54. Déception</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : Mobliz</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : Celes, Sabin</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Allez maintenant à Mobliz. Le village se situe tout à l’est du continent, sur une espèce de pointe. Une fois que vous y êtes, entrez dans la maison d’où sort le garçon. Descendez les escaliers. Vous allez retrouver Terra qui refusera de se joindre à vous. Restez calme et
    allez vous-en. C’est le moment que choisira un gros monstre nommé Phumbaba pour attaquer. Vous contrôlez d’abord Terra. Ne vous fatiguez pas, vous ne pouvez pas lui infliger de blessures avec elle. Celes et Sabin vont alors devoir se battre contre lui.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Dans ce combat, l’attaque est encore la meilleure des défenses. Utilisez des Blitz avec Sabin et des sorts (pas Bolt) avec Celes. Si ça tourne mal, utilisez des potions et laissez à Celes le rôle de guérisseuse. Quand le monstre aura reçu suffisamment de blessures, il s’échappera.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">En récompense, vous obtiendrez la Magicite Fenrir. Laissez Terra et quittez Mobliz.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">55. Gerad ? ? ?</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : Nikeah</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : Celes, Sabin</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Vous devez vous rendre à Nikeah, c’est la ville la plus au nord du continent où vous vous trouvez. Plutôt que de vous farcir tout le chemin à pied, vous pouvez louer un chocobo dans l’étable cachée dans la forêt un peu au sud de Mobliz.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Une fois à Nikeah, entrez dans le café et parlez avec tout les pirates. Quand ils seront partis, vous pourrez rencontrer leur chef. Celui-ci se trouve à côté de chez le marchand d’armures et présente une légère ressemblance avec quelqu’un de votre connaissance (sans
    parler du nom) ! Parlez-lui plusieurs fois, puis, suivez-le sur le port. Vous embarquerez discrètement pour South Figaro.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">56. Retour à South Figaro</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : South Figaro</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : Celes, Sabin</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Allez directement à l’auberge. Gerad se trouve au deuxième étage. Parlez-lui. Une fois qu’il est parti, sortez de la ville. A l’ouest se trouve une grotte. Vous devez vous y rendre. Il s’agit en fait de la grotte qui menait au château de Figaro dans le Monde de la
    Balance.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">57. Edgar, roi de Figaro</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : caverne et château Figaro</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : Celes, Sabin, rejoints par Edgar</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">A l’entrée de la grotte vous trouverez Siegfried. Suivez le chemin habituel de cette grotte. Vous arriverez devant Gerad et ses homme qui se rendent compte que la sortie est bouchée. Une fois qu’ils sont sortis, utilisez la tortue pour passer. Vous vous retrouvez à Figaro.
    Vous êtes obligé d’aller dans les caves. Ouvrez tout les coffres que vous pouvez avant de vous engager dans le passage central. Parlez à Gerad qui vous révèlera sa véritable identité et se joindra à vous. Vous devrez combattre un boss.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Chacune des quatre tentacules de ce boss absorbe un type d’attaque élémentale différente. Essayez de le repérer assez vite pour attaquer avec l’attaque magique opposée avec Celes. Utilisez la Chain Saw avec Edgar et le Blitz Aura Bolt de Sabin. Les sorts de soins ne
    devraient pas s’avérer essentiels si vous allez assez vite.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Quand vous aurez terminé le combat, remontez aux étages supérieurs. Achetez des Tools puis demandez au machiniste de vous emmener à Kolhingen.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">58. Setzer le joueur</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : Celes, Sabin, Edgar</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : Kolhingen</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Le village se situe légèrement à l’ouest de château. Entrez dans le café et parlez à Setzer. Il décidera de vous accompagner et vous indique où se trouve la tombe de Daryl.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Faites ensuite des achats à l’armurerie, vous allez en avoir besoin.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Bon, maintenant que vous avez enfin une équipe (plus où moins) décente, il vous faut un moyen de transport. Mettez donc le cap sur la tombe de Daryl.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">59. Celle qui volait trop près des étoiles</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : Celes, Sabin, Edgar, Setzer</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : Tombe de Daryl</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">A votre arrivée, Setzer ouvrira la tombe. Descendez au sous-sol. Prenez la porte en haut à droite. Activez la tombe pour ouvrir un passage derrière elle. Dans la salle ainsi révélée, actionnez l’interrupteur. Dans la salle principale, descendez les escaliers en bas à gauche.
    Tout en bas, entrez par la double porte et allez actionner l’interrupteur. Revenez dans la grande salle puis prenez la porte du milieu, en bas. Montez sur la tortue. Allez ensuite dans la salle en bas de celle où vous êtes entré. Lisez les inscriptions sur les quatre tombes. Retour à la salle principale. Allez dans la
    pièce en haut à gauche. On vous proposera de graver quelque chose sur la pierre tombale. Gravez les inscriptions que vous avez vues en bas de façon à former, à l’envers, la phrase THE WORLD IS SQUARE (bonjour la modestie !). Redescendez au troisième sous-sol près des doubles portes, vous devriez pouvoir passer à
    travers le mur de droite. Au bout du passage, vous trouverez une relique très partique, l’Exp. Egg, qui double les points d’expérience obtenus. Retour à la salle principale. Repartez par la porte en bas au centre. Remontez sur la tortue et, dans la pièce suivante, activez l’interrupteur. Sautez sur la tortue,
    désormais accessible. Elle vous dépose près d’un passage.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Dans la salle suivante, vous pourrez sauvegarder. Dans le coffre à côté du point d’enregistrement, se trouve un &quot;boss&quot;.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Ce monstre devrait vous rappeler quelques souvenirs ! Comme pour le premier, n’attaquez pas la carapace et bourrinez avec des sorts de feu. Un personnage guérisseur est souhaitable, mais pas obligatoire.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Dans la salle suivante, approchez-vous du piédestal sur lequel se trouvent les fleurs et activez-le. Cela fera apparaître un autre boss.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Il commencera par vous attaquer avec le sort Pearl. Soignez-vous vite. La meilleur technique est d’utiliser le debilitator d’Edgar, acheté à Figaro pour lui donner des points faibles et attaquez-le en vous servant de ces points faibles. Ici, il est très recommandé de
    réserver un guérisseur.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Quand il sera mort, un passage s’ouvrira derrière le piédestal. Entrez-y. Parlez plusieurs fois à Setzer pour qu’il vous raconte son histoire. A la fin de la séquence, vous vous retrouvez aux commandes du Falcon, près de Maranda.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">60. Des lettres d’amour…</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : Maranda</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : Celes, Sabin, Edgar, Setzer</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Arrivé à Maranda, après avoir acheté des objets si vous le voulez, allez dans la maison la plus à droite du village et parlez avec la jeune fille. Acceptez de l’aider (Yes).Sortez et allez « parler » au pigeon à côté de la maison. Repérez bien la ville où l’oiseau se
    pose. Il s’agit de Zozo.</font></p>
  <p>&nbsp;</p>
  <p align="center"><b><i><u><font face="Comic Sans MS" size="4" color="#0000FF">AU BOULOT !</font></u></i></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Attention, à partir d’ici, cette solution n’est plus linéaire. Vous pouvez, dès maintenant entrer dans le dernier niveau du jeu (évidemment, ce n’est pas ce qu’il y a de plus intelligent à faire !). Votre tâche va désormais consister à retrouver le reste de votre
    équipe. Vous pouvez le faire dans quasiment n’importe quel ordre. J’ai essayé de classer les quêtes le plus logiquement possible dans l’ordre croissant de difficulté, en tenant compte des impératifs de l’histoire (par exemple vous ne pouvez par récupérer Gau avant de pouvoir réduire votre équipe à 3 personnages
    ou avoir Strago sans avoir sauvé Relm). OK, c’est parti ! La composition des équipes sera donné en fonction de l’ordre que donne cette solution. Les quêtes facultatives feront l’objet d’une troisième partie mais rien ne vous empêche d’en réaliser certaines avant.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">61. Bum Rush…</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : Celes, Sabin, Edgar, Setzer</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : Maison de Duncan</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Avant tout, vous DEVEZ, faire une chose vitale : apprendre le dernier Blitz de Sabin. Pour cela, vous devez trouver la maison de Ducan. Sur l’île la plus au nord, repérez des arbres formant un +. La maison de Duncan est l’arbre du centre.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">62. Terra, la fille des Espers</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : Mobliz</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : Celes, Sabin, Edgar, Setzer</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Repartez à Mobliz. Cette fois, allez dans la maison la plus à gauche du village. Passez derrière la bibliothèque pour accéder à une salle où vous retrouverez Terra. Parlez-lui. Phumbaba va revenir vous attaquer.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Cette bataille se déroule en deux parties. Tout d’abord, utilisez la même technique que lors de votre première confrontation avec lui. Attaquez sans relâche, en faisant éventuellement soigner vos persos par Celes.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Au bout d’un moment, Phumbaba va lancer une attaque qui vous éjectera deux personnages hors de la bataille. Ne vous en faites pas, Terra va (enfin) venir à la rescousse. Elle restera sous sa forme d’Esper pour toute la durée de ce combat.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Dans cette deuxième phase, faites attaquez Terra à la magie (le sort Bio est le plus efficace) et vos autres combattants comme vous le voulez.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Une fois que Phumbaba aura finalement rendu l’âme, Terra acceptera de revenir avec vous. Elle pourra désormais se transformer un peu plus longtemps qu’auparavant.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">63. Gau, l’enfant sauvage </font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : Le Veldt</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : au choix parmi Celes, Sabin, Edgar, Setzer, Terra (équipe de 3)</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Vous n’avez qu’à vous balader à 3 dans le Veldt (c’est au nord de Mobliz, vous reconnaîtrez la musique) jusqu’à ce que Gau se joigne à vous à la suite d’un combat.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">64. Mog, le… Mog</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : Narshe</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : au choix parmi Celes, Sabin, Edgar, Setzer, Terra, Gau</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Retournez à Narshe (île du nord) et empruntez le passage secret que vous avez utilisé au début du jeu. Retournez à la maison des Mogs, dans les mines. Parlez à Mog, il se joindra à vous. Après son départ, fouillez l’endroit où il se trouvait pour recevoir le Moogle Charm.
    Si vous n’avez pas ouvert le coffre dans cet endroit au début, faites-le : vous y trouverez un Ribbon. Grâce à Mog vous pouvez accéder à une quête supplémentaire. Il vaut mieux attendre un peu d’avoir gagné en puissance pour la faire.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">65. Cyan le chevalier</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : Zozo, Mt Zozo</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : au choix parmi Celes, Sabin, Edgar, Setzer, Terra, Gau, Mog</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Allez à Zozo, puis parlez au marchand qui se ballade dans la rue. Il vous vendra du dégrippant pour la somme de 1000 GP. Allez en haut du bâtiment marqué « Café ». Sur le balcon, vous trouverez une porte que vous pourrez décoincer grâce au dégrippant. Vous arriverez dans
    les Mt Zozo.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Explorez cet endroit à fond, il regorge d’objets en tout genre. A un moment, après un point de sauvegarde, vous apercevrez un bouton sur le sol et, un peu plus haut, un coffre. Si vous vous sentez de le faire, appuyez sur ce bouton pour faire sortir du coffre le premier des 8
    dragons : le dragons des tempêtes. Sinon, vous pourrez toujours revenir plus tard.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Ce boss est assez prise de tête. Il utilise des attaques puissantes (Rage, Wind Slash). Prévoyez donc deux guérisseurs, avec des Espers de protection, comme Sraphim ou Golem. Utilisez avec vos guerriers des attaques puissantes ou des sorts Bolt 2.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">A sa mort, partez vers le sud, vous trouverez une caverne pleine de fleurs un peu plus loin. Cyan est de l’autre côté. Il se joindra à vous après la séquence animée.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">66. Relm l’artiste</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : Jidoor</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : au choix parmi Celes, Sabin, Edgar, Setzer, Terra, Gau, Mog, Cyan</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Allez à Jidoor (ce n’est pas très loin de Maranda) et entrez dans la maison tout au nord (là où vous avez entendu parler de Setzer pour la première fois). Essayez de grimper les escaliers de gauche, un journal apparaîtra sur le bureau. Lisez-le. Actionnez ensuite la lampe en
    bas des escaliers pour monter. Examinez le portrait de Gesthal pour découvrir une lettre. Examinez ensuite le portrait de la jeune femme (en bas à gauche). Après le combat, une porte apparaîtra. Entrez-y. Vous devrez vous battre contre un tableau dans la salle suivante. Passez dans la porte de gauche pour trouver la Moogle
    Suit et partez ensuite à droite. Se déplacer dans la maison d’Owzer est assez casse-tête. Devant les ouvertures avec une porte qui bouge, prenez celle de gauche quand la porte n’est pas devant. Au bout du couloir, se trouvent deux portes dont une seule est accessible. Allez-y. Vous devriez arriver dans une pièce
    éclairée. Examinez le tableau de l’armure qui s’y trouve. Après le combat, passez par la porte qui est apparue. Sauvez et entrez dans la porte du fond. Parlez à Owzer. Le tableau va vous attaquer.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Chardanook est peut-être, mis à part le boss final, le boss le plus long à battre du jeu. Il lance des attaques pernicieuses qui, si elles sont sous-estimées, vous seront fatales. De plus sont nombre impressionnant de points de vie en fait un adversaire très résistant Lancez
    des sorts de protection et de régénération sur votre équipe. Les sorts de vies vont aussi s’avérer essentiels. Si vous avez un Ribbon, il va être très pratique lors de ce combat. Attaquez le boss avec des sorts de feu ou des attaques spéciales (le Bum Rush prendra toute sa valeur durant ce combat).</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Après votre victoire, fouillez la bibliothèque à droite pour récupérer la Magicite Starlet. Relm décidera de vous accompagner.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS">67. </font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : Tour des fanatiques</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : obligatoirement Relm, acompagnée au choix de Celes, Sabin, Edgar, Setzer, Terra, Gau, Mog, Cyan</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Vous n’avez qu’à entrer dans la tour des fanatiques (elle est entourée de rochers). Relm parlera à son grand-père qui se joindra à vous.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">68. Shadow le ninja</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : grotte dans le Veldt, Thamasa, Colosseum</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : au choix parmi : Celes, Sabin, Edgar, Setzer, Terra, Gau, Mog, Cyan, Relm, Strago</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Dans le Veldt, vous devriez apercevoir l’entrée d’une grotte. Entrez-y. Explorez-là, elle n’est pas grande, vous ne pouvez pas vous perdre. Assurez-vous seulement de bien récupérer le Striker, dans un coffre. Vous finirez par tomber sur Shadow, blessé. Un monstre vous
    attaquera alors.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Ce boss attaque surtout avec des sorts Ice. Gardez un de vos personnages pour soigner le groupe et faites attaquer les autres, le monstre n’est pas trop coriace. Quand vous l’aurez battu une fois, il réapparaîtra sous forme de mort-vivant. A ce moment, utilisez un revivify sur
    lui pour en finir.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Vous vous retrouverez automatiquement à Thamasa. Partez pour le Colosseum. Là-bas, demandez au garde devant la porte à participer à un combat et pariez le Striker. Vous vous battrez contre Shadow. Vous gagnerez obligatoirement. A la fin du combat, Shadow décidera de combattre à
    vos côtés.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS">69. </font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : Narshe</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : obligatoirement Mog, accompagné au choix de Celes, Sabin, Edgar, Setzer, Terra, Gau, Cyan, Relm, Strago, Shadow</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Vous devriez maintenant pouvoir accomplir sans problème la quête d’un nouveau perso, Umaro. A Narshe, repartez dans les mines et suivez l’itinéraire que vous aviez pris quand vous avez rencontré Mog pour la première fois. En chemin, près d’un point de sauvegarde, vous
    apercevrez le dragon des glaces que vous pouvez combattre si vous le désirez.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Ce dragon est l’un des plus facile à battre. Lancez-lui des sorts Fire avec des persos équipés d’Earrings, soignez éventuellement votre groupe, il ne devrait pas faire long feu.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Continuez votre progression. Arrivé devant l’Esper, approchez-vous en. Un combat débutera.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">L’Esper n’est sensible qu’aux attaques de feu, vous savez donc ce qui vous reste à faire. Si il vous gèle un de vos persos, lancez-lui un sort Fire pour le ranimer. Laissez tout de même un perso soigner les autres au cas où.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Si vous gagnez, vous obtiendrez la Magicite Tritoch.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Approchez-vous du trou formé par l’Esper et choisissez de sauter.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Les cavernes où vous déboucherez sont petites mais peuplées de monstres assez forts, soyez donc sur vos gardes et sachez vous montrez lâche si nécessaire. Vous devriez accéder rapidement à une salle avec une passerelle en bois. Grâce à cette passerelle, vous accéderez à un
    couloir comportant deux leviers. Tirez le plus loin de vous. Vous arrivez dans une sorte de campement. Approchez vous du « totem » et examinez-le. Vous découvrirez qu’une Magicite s’y trouve. Prenez-là. C’est la Magicite Terrato. Mécontent que vous l’ayez volé, Umaro viendra vous attaquer.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Ce boss est tout simple à battre. Si vous utilisez des gros sorts ou des attaques spéciales, il ne devrait pas faire deux minutes !</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Quand vous l’aurez vaincu, Mog le convaincra de rejoindre votre équipe.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">70. Gogo le mime</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : Estomac d’un Zone Eater</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : au choix parmi Celes, Sabin, Edgar, Setzer, Terra, Gau, Mog, Cyan, Relm, Strago, Shadow, Umaro</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Vous allez maintenant faire la connaissance du personnage le plus bizarre du jeu. Allez sur la petite île en triangle, à l’est de la carte. Promenez-vous jusqu’à rencontrer un monstre appelé Zone Eater. Il possède une attaque lui permettant d’avaler un de vos persos. Tous
    les membres de l’équipe doivent se faire avaler pour pouvoir accéder à un réseau de cavernes. Ces cavernes sont pleines de trésors (mais aussi d’ennemis). Le plus important est sans doute la Fake Moustache qui permet de changer l’habileté Sketch de Relm en Control (et évite donc les nombreux bugs liés à Sketch).
    Vous la trouverez dans le coffre, tout au bout des plates-formes sur lesquels patrouillent les hommes en vert. Evitez-les sinon il vous pousseront à l’étage du dessous. De l’autre côté des passerelles, vous trouverez également un escalier. Sauvegardez en bas. Vous allez arriver dans un pièce où le plafond descend à
    intervalles réguliers. Vous allez devoir repérer les espaces qui restent libres quand il descend pour éviter de vous faire écraser. Dans la salle suivante, arrangez-vous pour accéder à l’interrupteur dans le sol. Vous pourrez ainsi arriver à la porte du milieu de la salle. Passé cette porte, vous rencontrerez Gogo qui
    acceptera de vous aider. Pour sortir des grottes utilisez le sort Warp ou revenez à votre point de départ.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Note : La boîte d’action de Gogo ne comporte que Mimer. Vous pouvez rajouter des commandes en allant dans le menu Status. Mettez le curseur sur la boîte d’action dans un emplacement vide. Un menu apparaîtra. Vous pourrez entrer d’autres actions, même celles spécifique à
    un autre perso.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">71. Locke le vol… (hum !) le chasseur de trésors (...)</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : Caverne du phénix</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : au choix parmi Celes, Sabin, Edgar, Setzer, Terra, Gau, Mog, Cyan, Relm, Strago, Shadow, Umaro, Gogo (2 équipes)</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Vous allez devoir vous rendre « là où les montagnes forment une étoile » comme indiqué dans la lettre trouvée dans le portrait de Gesthal. L’endroit en question se trouve au nord de Tzen. Vous le repèrerez assez facilement en prenant un peu d’altitude. Atterrissez au
    centre de ces montagnes. Vous allez devoir diviser votre groupe en deux. Essayez d’équilibrer au maximum les deux équipes, elles auront toutes les deux beaucoup de boulot. Ce niveau est vraiment labyrinthique. Vos deux équipe vont devoir progresser en même temps. Tout d’abord, commencez par ouvrir chacune des deux portes
    pour que les équipes puissent entrer. La caverne est pleine de trésor. Pour faire au plus court, descendez les escaliers le plus vite possible pour vous retrouver dans un sous-sol plein de lave. Vous devrez trouver des interrupteurs permettant la progression de l’autre équipe à chaque fois. Au bout d’un moment, vous
    pourrez revenir au premier étage. Là, votre objectif sera une plate-forme avec trois interrupteurs, dont deux côte à côte. Vous devrez faire aller chacun de vos groupe sur ces boutons. Celui du haut vous permettra de faire apparaître deux pierres qui permettront à votre deuxième équipe d’accéder sur la plate-forme.
    En chemin, vous rencontrerez le dragon de feu que vous pourrez affrontez si vous le désirez. Note que vous pourrez le combattre avec l’équipe de votre choix.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Essayez d’avoir des mages connaissant le sort Ice 2 (voir Ice 3 mais ce n’est pas obligé) pour ce combat. Le dragon lançant parfois le sort Flare 4, il vaut mieux éviter d’avoir des personnages dont le niveau est multiple de 4. La Magicite Starlet pourra vous être très
    utile pour soigner votre groupe. En allant assez vite et en attaquant fort, il ne devrait pas trop vous résister.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Une fois que vous aurez appuyé sur les deux boutons, un passage s’ouvrira. Descendez-y avec une des deux équipes. Vous rencontrerez Locke.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">La séquence animée vous ramènera automatiquement à Kohlingen. Après son triste dénouement, Locke rejoint votre équipe, et vous apporte les trésors qu’il a trouvé dans la caverne et la Magicite Phénix.</font></p>
  <p>&nbsp;</p>
  <p align="center"><b><i><u><font face="Comic Sans MS" size="4" color="#0000FF">Exploration ...</font></u></i></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Votre équipe est désormais au grand complet. Cependant, il est encore très déconseillé de vouloir affronter Kefka maintenant. Vous devez faire gagner vos héros en puissance et trouver les derniers objets qui vous aideront lors de l’assaut final. Les quêtes décrites dans
    cette partie sont toutes facultatives, donc, ne vous bloquez pas si vous n’arrivez pas à les réaliser. Elles sont plus où moins classées dans l’ordre croissant de difficulté.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">72. Exploration de Narshe…</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : Narshe</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : obligatoirement Locke accompagné au choix de Celes, Sabin, Edgar, Setzer, Terra, Gau, Mog, Cyan, Relm, Strago, Shadow, Umaro, Gogo</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Retournez à Narshe. Toutes les portes sont verrouillées. Locke pourra cependant les ouvrir. Explorez toutes les maisons. Dans l’une d’elle, un vieil homme couché vous donnera le Cursed Shield. Vous vous apercevrez en combattant de tous les désagréments qu'il apporte.
    Cependant, si vous arrivez à faire 255 combats avec ce bouclier, il deviendra le Paladin Shield, le meilleur bouclier du jeu. Un conseil : équipez le personnage qui combat avec ce bouclier du Ribbon, qui lui épargnera tout sauf le statut Condemned.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Dans le magasin d’armes, le forgeron vous donnera une Magicite. Vous pouvez soit la garder (elle apprend Ultima, un sort TRES puissant) ou la faire forger en une épée très puissante, Ragnarok. Faites comme vous voulez. Sachez seulement que l’épée peut-être pariée au
    Colosseum contre Illumina, la meilleure arme du jeu. De plus, vous pourrez apprendre Ultima si vous parvenez à ôter la malédiction du Cursed Shield, qui vous apprendra le sort comme une Magicite normale.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS">73. </font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : Aérostat</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : au choix parmi Celes, Sabin, Edgar, Setzer, Terra, Gau, Mog, Cyan, Relm, Strago, Shadow, Umaro, Gogo, Locke</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Pendant que vous vous déplacerez dans votre aérostat, vous pouvez vous faire attaquer par Doom Gaze.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Ce monstre est assez saoulant, étant donné qu’il attaque avec des sorts comme Doom. Pour le vaincre, ayez sous la main le sort Life, voir Life 2 pour ressusciter vos personnages et des sorts d’attaques puissants. Evitez d’avoir des personnages avec des niveaux multiples de 5,
    un de ses sorts Doom est basé sur ce facteur. Si le combat tourne mal, n’hésitez pas à fuir. Le dragon ne peut pas régénérer ses points de vie, vous pouvez donc le combattre en plusieurs fois. Il arrivera aussi parfois qu’il s’échappe de lui-même.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Si vous le tuez, vous obtiendrez la Magicite Bahamut.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">74. La bête de Strago</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : Thamasa, puis cavernes</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : obligatoirement Strago et Relm, accompagnés aux choix de Celes, Sabin, Edgar, Setzer, Terra, Gau, Mog, Cyan, Shadow, Umaro, Gogo, Locke</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Repartez à Thamasa avec Strago et Relm dans votre équipe. Votre arrivée déclenchera une séquence animée. Après celle-ci, allez sur la toute petite île, juste au nord de la ville. Entrez dans la caverne. Pour vous déplacez, activez les interrupteurs qui vous téléporteront
    dans différentes salles. Dans l’une d’elle, se trouve un coffre réclamant à manger du Coral. Vous en trouverez dans tout les coffres de la grottes. Quand vous en avez environ 30 morceau, allez les lui donner. Il vous laissera passer. Au fond de la pièce, vous trouverez le Hidon.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Ce boss est accompagné de petites bêtes ayant chacune des pouvoirs différents. Tuez-les (si possible avec des attaques physiques) avant de vous attaquer au Hidon lui-même sans quoi elle vous poseront des problèmes. Le Hidon attaque surtout avec des attaques au poison, les
    reliques comme Ribbon ou Star Pendant vous seront donc utiles. Il peut également réanimer un personnage inconscient sous forme de zombi. Quand ces points de vie commenceront à descendre sérieusement, il utilisera sont attaque Grand Train. Cette attaque peut être apprise par Strago, c’est la plus puissante de ses Lore.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Le monstre défait, vous retournerez à Thamasa où Strago fêtera sa victoire.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">75. Le château oublié</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : Château Figaro, cavernes puis château</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : au choix parmi Celes, Sabin, Edgar, Setzer, Terra, Gau, Mog, Cyan, Relm, Strago, Shadow, Umaro, Gogo, Locke</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Bien que ce ne soit pas obligatoire, il vaut mieux que Terra soit avec vous. Retournez à Figaro. Demandez au machiniste de voyager vers Figaro. En chemin, il vous signalera quelque chose d’étrange dans une strate et vous proposera de vous arrêter pour l’explorer. Acceptez.
    Allez dans les prisons du château et sortez par la cellule de droite. Vous déboucherez dans un réseau de cavernes. Comme toutes les autres, explorez-les à fond. Elles ne sont pas grandes mais pleines de trésors. Dans un des coffres, vous combattrez un mini boss.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Il contre-attaque beaucoup avec Step Mine. Vous devez le tuer avant qu’il ne s’approche trop de vous. Utilisez de préférence des attaques physiques en veillant à ce que vos persos soit constamment en bonne santé.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">En le battant, vous obtiendrez le Graedus.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Continuez votre exploration. Après un point de sauvegarde, vous trouverez un grand escalier. Vous déboucherez dans la cours d’un château et Terra vous racontera son histoire. Allez dans la salle du trône. Observez la statue d’Odin pour récupérer sa Magicite. Là,
    placez-vous sur le trône de la reine (à droite), avancez de 5 pas et faites action. Entrez dans la pièce en bas à droite. C’est la chambre de la reine. Lisez le livre qui brille dans la bibliothèque et descendez les marches. Vous pourrez combattre le dragon bleu.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Attaquez avec de préférence des attaques de feu. En soignant un peu vos héros, il ne devrait pas tenir longtemps. Préférez des sorts de soin de masse (Starlet), le dragon attaquant assez vite.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Une fois qu’il sera mort, vous pourrez accéder à la statue de la reine. Vous pouvez l’examiner. Si vous faites ceci, la Magicite Odin deviendra la Magicite Raiden, permettant d’apprendre un sort différent de celui d’Odin. Vous pouvez d’abord faire apprendre le sort
    Meteor à vos persos avant d’effectuer cette action mais sachez que vous pouvez apprendre Meteor par le biais de la Magicite Crusader, après avoir tué les 8 dragons.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Explorez toutes les pièces pour trouver des reliques intéressantes. Dans les prisons, vous trouverez un coffre renfermant un boss, Katana Soul.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Ce boss est assez méchant. Il tape vraiment fort et a le sort Reflect lancé sur lui dès le début du combat. Evitez donc les attaques magiques susceptibles de vous être renvoyées sur la tronche. Comme d’habitude, réservez un personnage pour guérir et attaquez très
    méchamment (Bum Rush, Illumina si possible…)</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Vous pouvez maintenant sortir du palais et revenir au château de Figaro. Attention, vous devrez faire le chemin à pied, le sort Warp ne fonctionne pas ici.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">76. De nouveau sur scène</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : opéra</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : au choix parmi Celes, Sabin, Edgar, Setzer, Terra, Gau, Mog, Cyan, Relm, Strago, Shadow,Umaro, Gogo, Locke</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Retournez à l’opéra. Il est toujours du côté de Jidoor. Parlez à l’homme à l’entrée puis montez au balcon. Parlez à l’imprésario pour connaître son problème. Allez à la salle des leviers (en haut à droite) et appuyez sur le troisième interrupteur en partant de
    la gauche. Vous tomberez sur la scène où vous devrez affronter le dragon de la terre.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Ce combat va être très rapide. Ce boss tape TRES fort et contre-attaque beaucoup. Les armures Gaïa Gear peuvent constituer un atout car elles absorbent les dommages due à la terre. La magie n’est pas le meilleur moyen de tuer ce dragon. Bourrinez à coup de Blitz et autres
    Chain Saw. Un Morph de Terra peut également s’avérer judicieux, ainsi qu’un peu de chance.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Le sort Float peut etre tres utile...</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">77. Magie…</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : Tour des mages</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : au choix parmi Celes, Sabin, Edgar, Setzer, Terra, Gau, Mog, Cyan, Relm, Strago, Shadow,Umaro, Gogo, Locke</font></p>
  <p>&nbsp;</p>
  <p><b><i><font face="Comic Sans MS" color="#FFFFFF">Avant de vous attaquer à la tour des mages, vous devez prendre quelques précautions :</font></i></b></p>
  <p><b><i><font face="Comic Sans MS" color="#FFFFFF">- Incluez dans votre équipe vos meilleurs mages.</font></i></b></p>
  <p><b><i><font face="Comic Sans MS" color="#FFFFFF">- Soyez sur d’avoir beaucoup de Tinctures ou d’Ethers.</font></i></b></p>
  <p><b><i><font face="Comic Sans MS" color="#FFFFFF">- Arrangez-vous pour qu’au moins l’un d’entre eux connaisse le sort Life 3.</font></i></b></p>
  <p><b><i><font face="Comic Sans MS" color="#FFFFFF">- Si vous ne vous sentez pas d’affrontez tout les ennemis de la tour (et, croyez-moi, personne ne vous en voudra), prenez avec vous Mog et son Moggle Charm qui vous empêche de rencontrer des ennemis ordinaires.</font></i></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Une fois équipés, commencez l’ascension de la tour. Attention, votre commande Fight va être verrouillée dans tout ce niveau, ainsi que toutes les aptitudes spécifiques de vos persos vous ne pourrez utiliser que de la magie ou des objets. Dans les différentes pièces de la
    tour, vous trouverez plusieurs trésors très intéressants. Dans la première salle que vous visiterez, allez à droite du coffre et faites action. Ressortez, vous verrez qu’une porte est apparue à l’étage d’au-dessous. Vous y trouverez le dernier Tool d’Edgar, l’Air Anchor. Dans une des pièces, vous pourrez
    combattre le dragon de perle.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Ce dragon n’est pas très agressifs. Soignez vos persos après ses attaques avec le sort Pearl et attaquez-le avec des sorts élémentaux de niveau 3 pour le vaincre.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Tout en haut de la tour, vous trouverez une petite pièce où se trouve une relique vraiment géniale, la Gem Box. Cependant, en ressortant, le maître des lieux, le Magi Master vous attaquera.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Pour vaincre ce boss, vous avez plusieurs techniques. Voici à mon avis l’une des plus simples. Commencez par lancer Berserk sur lui. Il ne pourra plus lancer de sorts où changer de points faibles avec Wall of Change. Lancez ensuite un Scan sur lui pour connaître son point
    faible. Avant de l’attaquer, jetez Life 3 sur tout vos persos. Combattez-le ensuite comme un boss normal, en soignant vos persos si nécessaire. Si l’un d’eux meurt, lancez de nouveau le sort Life 3 sur lui. A sa mort, le Magi Master lancera Ultima mais le sort Life 3 ranimera tous vos héros.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Vous n’avez plus qu’à redescendre l’escalier.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">78. Cyan : un homme d’honneur</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : Château de Doma, âme de Cyan</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : obligatoirement Cyan accompagné au choix de Celes, Sabin, Edgar, Setzer, Terra, Gau, Mog, Relm, Strago, Shadow,Umaro, Gogo, Locke</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Retournez au château de Doma (c’est sur une petite île, au nord). Entrez et trouvez une pièce où l’on vous propose de dormir. Votre sommeil va être interrompu par trois petits démons (Curley, Larry et Moe) qui vont vouloir s’emparer de l’âme de Cyan. Vous allez les
    poursuivre.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Vous allez vous retrouver avec un seul personnage. En empruntant les nombreuses portes autour de vous, retrouvez les deux autres membres de votre équipe. Si un combat se présente avant, fuyez. Quand votre équipe sera au complet (moins Cyan, bien sûr), essayez d’accéder à une
    plate-forme avec une seule porte au milieu. Vous arriverez à une salle avec une seule porte. Vous ne pourrez l’ouvrir qu’en ayant vos 3 héros réunis. Les trois démons vont vous attaquer.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Chacun d’eux est vulnérable à un type de magie. Repérez vite lequel. Il est préférable de vite tuer le boss du haut en premier car il peut lancer Life 2 sur ses petits camarades. Une fois que celui-ci sera mort, les deux autres ne devrait pas vous poser de problèmes, si ce n’est
    éventuellement avec le sort Reflect (dans ce cas utilisez la « technique de Neonemesis »).</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Quand ils seront mort, vous pourrez entrez dans une autre partie du rêve de Cyan.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Cette fois, vous êtes dans le train fantôme. Dans l’un des wagons, vous devrez vous dégager un passage en activant trois levier différents. Il déplacent la banquette du haut, les caisses et la banquette du bas. Une fois cet obstacle franchit, vous arriverez devant plusieurs
    coffres. Mémorisez ceux qui sont fermés et ceux qui sont ouverts (faites un dessin). Vous aurez à reproduire cette combinaison un peu plus loin dans le train.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Une fois dans la locomotive, activez les leviers comme vous l’avez déjà fait lors du scénario de Sabin. Quand vous en ressortirez, vous changerez de décor.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Sortez des mines où vous vous trouvez. Vous allez vous apercevoir que vous tournez en rond assez rapidement. Quand vous êtes ressorti à l’extérieur par la droite, essayez de rerentrer là d’où vous êtes sorti. Vous vous retrouverez devant un pont. Essayez de le franchir
    pour changer de décor.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Note : Cet endroit est super pour augmenter ses niveaux. Les ennemis rapportent beaucoup de points d’XP. Si Terra est dans votre équipe, son armure Magitek aura les mêmes commandes que celle qu’elle avait au début du jeu.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Vous êtes désormais dans le château de Doma. Après le dialogue, allez dans la salle du trône pour affronter Wrexsoul.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Le battre peut se révéler assez difficile. Le plus simple est de lancer X-Zone sur les bestioles qui l’accompagnent. Si le sort fonctionne, vous gagnerez automatiquement le combat. Mais vous ne recevrez pas les objets que vous gagnerez si vous le battez autrement. Pour le faire
    apparaître, tuez l’un de vos persos. Dès que le monstre est apparu, ressuscitez fissa votre héros inanimé et tapez de toutes vos forces sur le monstre. N’économisez pas vos forces ! Si par malheur il redisparaît, tuez un autre perso et recommencez. Faites vite !</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Quand Wrexsoul sera mort, vous récupérerez Cyan. Il aura appris toutes les Sword Technic qui lui manquaient et recevra une nouvelle arme.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Vous vous réveillerez enfin. Avant de quittez Doma, allez à la salle du trône pour récupérer la Magicite Alexander.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Bon ! Maintenant vos personnages devraient commencer à atteindre un niveau respectable. Mais avant de vous attaquer à Kefka, faisons une nouvelle fois le point.</font></p>
  <p>&nbsp;</p>
  <p><b><i><font face="Comic Sans MS" color="#0000FF">- Vos persos doivent être au minimum au niveau 35 pour avoir une petite chance de s’en sortir. Le niveau 40 est fortement recommandé. </font></i></b></p>
  <p><b><i><font face="Comic Sans MS" color="#0000FF">- Il est recommandé que vos persos connaissent tous quelques sorts d’attaque puissants. Les meilleurs sont : Pearl, Flare, Meteor. Il n’est pas essentiel d’apprendre Ultima à tous vos personnages, vous pouvez finir le jeu sans, même si ce sort vous sera d’une grande aide.</font></i></b></p>
  <p><b><i><font face="Comic Sans MS" color="#0000FF">- Pour augmentez vos niveaux et vos points de magie : combattez les ennemis dans le désert au sud de Maranda. Ils sont très forts mais vous tirerez beaucoup d’XP et de points de magie de ces combats. L’exp. egg s’avérera aussi très utile.</font></i></b></p>
  <p><b><i><font face="Comic Sans MS" color="#0000FF">- N’oubliez pas de combattre dans le Veldt ! Pour la même raison que dans le monde de la Balance, cela peut s’avérer payant !</font></i></b></p>
  <p><b><i><font face="Comic Sans MS" color="#0000FF">- Pour apprendre plus de Lore à Strago, utilisez l’option Control de Relm (qu’elle obtient avec Fake Mustache) et déclenchez les attaques des adversaires.</font></i></b></p>
  <p><b><i><font face="Comic Sans MS" color="#0000FF">- Dans la forteresse de Kefka, vous aurez 3 groupes de 4 personnages. Donc, essayez d’avoir pour tous de bons équipements.</font></i></b></p>
  <p><b><i><font face="Comic Sans MS" color="#0000FF">- N’hésitez pas à utilisez le sort Warp si vous sentez que vous avez trop de mal dans ce niveau. Vous aurez au moins gagné des points d’XP.</font></i></b></p>
  <p><b><i><font face="Comic Sans MS" color="#0000FF">- Une dernière chose : c’est peut-être évident mais… N’oubliez pas les tentes. Il est assez rageant de devoir repartir du château juste à cause de ça !</font></i></b></p>
  <p>&nbsp;</p>
  <p align="center"><b><i><u><font face="Comic Sans MS" size="4" color="#0000FF">KEFKA</font></u></i></b></p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">79. Les trois statues</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Lieu : forteresse de Kefka</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Equipe : trois équipes à choisir parmi Celes, Sabin, Edgar, Setzer, Terra, Gau, Mog, Cyan, Relm, Strago, Shadow,Umaro, Gogo, Locke</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Allez au-dessus du château de Kefka avec l’aérostat et descendez. Vous devez diviser vos héros en trois groupes. Chacun atterrira à un point différent du niveau. Cet endroit est le plus vaste du jeu et les ennemis sont vraiment très méchants. Il y a aussi beaucoup de
    trésors à trouver. Dans plusieurs occasions, vous devrez, avec un groupe, pousser un interrupteur pour permettre à un autre de continuer. Ne vous en faites pas, ces interrupteurs sont toujours à côté de l’endroit où vous vous trouvez, ces mécanismes n’ont rien de compliqué ! Attention, avant d’affronter les 3
    statues, les groupe 2 et 3 affronteront des boss.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Atma (groupe 2, optionnel)</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Atma se trouve dans une prison, vous pouvez lui parler pour la combattre. Utilisez la même technique qu’avec Atma Weapon.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Gold Dragon (groupe 2, optionnel)</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Ce dragon n’est vraiment pas agressif, n’utilisez pas de sort Bolt et, avec deux ou trois sorts bourrins et quelques attaques puissantes, vous ne devriez pas avoir de problèmes. Quand il commence à accumuler de l’énergie, finissez-le rapidement !</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Striker (groupe 3 obligatoire)</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Ce boss, qui se compose de trois parties, est vraiment très dur. Attaquez ses bras pour gagner un peu de temps puis bourrinez sur son corps. Des sorts de protection très puissant devraient s’avérer essentiel pour le vaincre.</font></p>
  <p><b><font face="Comic Sans MS" color="#FFFFFF">LE DERNIER DRAGON ! ! ! (groupe 3, optionnel)</font></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Ce dragon là est également très facile à vaincre. Quelques Blitz, Sword Technic ou autres Meteor bien placés en viendront à bout.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Au bout d’un moment, tous vos groupes se retrouveront dans une pièce avec des interrupteurs. Avec les groupes de gauche et de droite, allez activer les deux interrupteurs simultanément. Cela ouvrira la porte centrale. Entrez-y avec le groupe du centre. Vous n’avez plus qu’à
    pousser les poids à droite et à gauche dans l’autre pièce et à activer quelques interrupteurs pour accéder au statues. Pendant ces manipulations, vos groupes vont changer de place, mais cela n’a pas d’importance pour la suite des évènements. Avant d’aller affronter « sa » statue, le groupe du milieu devra
    combattre le Gardien.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Ce boss est relativement puissant mais ne devrait pas poser de problèmes à une équipe de niveau raisonnable. Pas de danger particulier. Utilisez des sorts de foudre pour en venir à bout.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Vous voilà maintenant arrivé aux statues. Chaque groupe devra en combattre une. Une fois vaincue, chacune d’elle se transformera en point de sauvegarde et dégagera le passage vers un interrupteur.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Statue de gauche : Doom</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Ce boss a plusieurs défauts gênants. Il contre-attaque souvent (et fort), adore annuler les attaques élémentales et jouera avec vos nerfs avec des sorts débiles genre R. Polarity. Il attaque avec des sorts à base de glace, prévoyez donc des Ice Shield. Essayez de le vaincre le
    plus vite possible, afin qu’il ne puisse pas annuler trop de types d’attaques. Les sorts de Pearl sont les plus efficaces.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Statue du centre Poltergeist</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Peut-être parce que vous avez dû vaincre un mini boss avant, cette statue n’est pas trop prise de tête à vaincre. Elle attaque essentiellement au feu. Des Fire Shield vous aiderons dans ce combat. Utilisez de grosses attaques physiques pour le tuer. Le seul danger provient de
    son sort de confusion qu’il n’arrête pas d’utiliser lors de certaines parties.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Statue de droite : Goddess</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Cette statue est peut-être la plus chiante à tuer, bien que vous attaquiez des deux côtés en même temps. Vous allez devoir vous dépêcher car, au bout d’un moment, elle lancera un compte à rebours qui finira par changer vos persos en zombies. De plus, elle peut forcer un de
    vos persos à la couvrir lorsqu’elle se prend des coups, possède un sort particulièrement dévastateur (autant qu’un de ceux de Kefka) et a une bonne résistance à la magie ! Ne désespérez cependant pas. Soyez rapide ! Si Sabin est dans ce groupe, usez et abusez des Bum Rush ! Sinon, envoyez-lui vos Meteor où Ultima si
    vous l’avez pour la tuer.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Et voilà ! Chaque groupe va accéder à un interrupteur. Avant d’appuyer dessus, vérifiez bien que tous vos groupes sont en bonne santé et bien équipés. Prêt ?</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">80. C’EST PARTI POUR LE BOSS FINAL ! ! !</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Après la séquence animée, le combat va débuter. Vous aller en fait devoir affronter les trois parties d’un monstre avant de faire face à Kefka lui-même. Vous allez devoir répartir vos personnages dans l’ordre de votre choix. Les quatre premiers commenceront le combat. Si,
    entre 2 combats (d’un étage à un autre), l’un des membres de votre équipe est inconscient, le suivant sur la liste prendra sa place.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Le premier étage n’est pas trop dur. Ce boss a trois parties à détruire : les deux mains et la tête. Commencez par détruire la tête, puis éliminez les mains dans n’importe quel ordre. Utilisez indifféremment la magie où les attaques physiques.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Le deuxième étage est déjà plus compliqué. Il se compose de quatre parties. Essayez d’utilisez des sorts « de masse » (Metor, Merton, Ultima). Débarassez-vous de la partie du milieu d’abord (elle peut lancer Life 3) et de la partie de droite en dernier, qui attaquera 10
    fois de suite lorsqu’elle mourra. Les sorts comme Remedy et Cure, bien sûr, vont se révéler très utiles.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Le troisième étage peut se révéler assez casse-tête aussi. Composé de deux parties, le boss attaque très fort avec des sorts de taré (W. Wind, Merton…) Tuez d’abord la tête de gauche, qui peut se soigner, puis la femme, à droite. Si vous tenez à garder votre équipe
    telle quelle pour le dernier combat, lancez Life 3 sur vos personnages car avant de mourir, le boss tuera quasi obligatoirement l’un de vos persos.</font></p>
  <p>&nbsp;</p>
  <p><b><u><font face="Comic Sans MS" color="#0000FF">81. KEFKA</font></u></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Vous voici devant Kefka himself. Ne vous en faites pas, à ce stade du jeu, vous pouvez devoir le vaincre. Tout d’abord, commencez par l’attaquer mais en restant sur la défensive. Un personnage guérisseur est vital pour cet ultime affrontement. Au bout d’un petit moment,
    Kefka lancera le sort Fallen Angel, réduisant le nombre de vos points de vie à 1. A ce moment, utilisez et Megalixir et FONCEZ ! Attaquez comme un fou ! Voici la liste des attaques recommandées pour chaque persos.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Terra : Morph puis magie, ou attaque avec une épée comme Ragnarok ou Illumina (transformée au niveau 48-50, elle fera presque 9999 points de dégâts à chaque coup en plus des sorts que lancent éventuellement les épées)</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Locke : Attaque où magie</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Edgar : Magie ou Tool (Drill, Chain Saw…)</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Sabin : Bum Rush, Bum Rush et encore Bum Rush</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Shadow : Throw, avec toutes les armes qui vous restent</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Cyan : Attaque, magie, voir une Sword Technic</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Gau : Rage, en fonction de celles qu’il connaît</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Celes : Magie ou Runic</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Setzer : Attaque ou magie</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Mog : Dance ou attaque</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Strago : Lore, en fonction de celles qu’il connaît (Grand Train si possible)</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Relm : Magie ou Sketch (si elle peut dessiner Kefka, elle lancera Ultima !)</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Umaro : …</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Gogo : Mimer ou Bum Rush</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Ce combat n’est pas trop dur si vous pensez à maintenir votre équipe en bonne santé et à utiliser Life 2 et 3 assez souvent.</font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF">Et voilà, l’affreux Kefka est vaincu ! Admirez maintenant la superbe séquence de fin… Avant de recommencer le jeu !</font></p>
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
