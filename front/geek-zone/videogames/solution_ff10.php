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
  <p align="center">
    <center>
      <font size="7" face="Conga" color="#FF0000"><b><i><u>Solution</u></i></b></font>
    </center>
  </p>
  <p align="center">
    <center>
      <img src="/dmic-corp/images/logo1.jpg" alt="" width="300" height="195" border="0" />
    </center>
  </p>
  <font FACE="Verdana" SIZE="1">
  <p align="justify"><font color="#FFFFFF">Dès le début du jeu vous incarnez Tidus, star de Blitzball de Zanarkand et fils du très célèbre Jecht, hélas mystérieusement disparu quelques années plus tôt. Après avoir signé quelques autographes de fans, rendez vous au stade afin de disputer votre match. Tout en traversant le pont, écoutez les
    informations à propos de Jecht que fait le commentateur. Arrivé au stade, passez par la grande porte en essayant de vous faufiller entre vos fans.</font></p>
  <p align="justify"><font color="#FFFFFF">Durant votre match de Blitzball, Zanarkand se fera attaquer par Sin ! A partir de ce moment suivez Auron, avec lequel vous aviez déjà fait connaissance, dans les rues de Zanarkand. Durant votre fuite, vous remarquez aussi qu'un monstre s'est écrasé non loin d'un immeuble et envoie des ennemis afin de vous
    stopper. Après avoir reçu l'<b>Epée longue</b> de la part d'Auron, apprêtez-vous à faire vos premiers combats ! Utilisez simplement l'attaque normale pour éléminer vos ennemis. Au milieu du pont, un 2ème monstre bloquera votre chemin.</font></p>
  <p align="center">&nbsp;</p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><font color="#FF0000">Boss : EMS</font></b><font color="#FF0000"><br />
        </font> </font><font face="Verdana" size="1" color="#ff0000">HP : 2400<br />
          MP : 400<br />
          AP : 0<br />
          Objets à voler</font><font FACE="Verdana" SIZE="1"> <font color="#FFFFFF"> : aucun<br />
            <br />
            Très simple à vaincre puisque ce boss n'utilise que la magie Quart pour attaquer. Si vous en ressentez le besoin, soignez Auron ou Tidus avec des Potions. Pour le vaincre plus vite, utilisez les Overdrive des 2 personnages : Arcanes pour Auron et Escrime pour Tidus.</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font color="#FFFFFF">Utilisez ensuite la sphère de sauvegarde pour refaire le point de HP et de MP et profitez en pour sauvegarder. Continuez à traverser le pont tout éléminant un à un les Squamelles qui bloqueront votre chemin. Quand vous aurez la possibilité d'attaquer le tanker focalisez vous entièrement dessus jusqu'à
    ce que celui explose. Continuez ensuite à fuire, toujours dans la même direction, jusqu'au moment où une immense vague s'abbat sur Zanarkand et où Tidus se fera mystérieusement aspirer. C'est ici que tout commence...</font></font> <font face="Verdana" size="1"> Après une superbe cinématique, Tidus se retrouve seul dans l'eau au milieu de ruines. Commencez par vous diriger au nord-ouest où vous trouverez un petit escalier qui vous mènera à une petite plateforme où vous trouverez une <b>sphère d'association de manuels Al Bhed</b> ainsi qu'un coffre renfermant 2
      potions. Si ce n'est pas votre première partie, vous pourrez grâce à cette sphère re-obtenir les différents livres que vous aviez eu lors d'une précédente partie ! Très utile donc pour comprendre au mieux et dès le début du jeu cette mystérieuse langue.</font> <font FACE="Verdana" SIZE="1"> <font color="#FFFFFF">Continuez ensuite votre chemin par le nord jusqu'à la salle suivante. Après avoir sauvegardé votre partie, empruntez le petit chemin qui tourne à gauche afin de trouver un coffre renfermant une Potion+. Retournez sur vos pas et sautez à l'eau. Vous serez tout d'abord attaqué par trois Sahuagins, après
        en avoir éliminé deux, le troisième se fera attraper et manger par un grand monstre venu du fond des eaux, le <b>Geosgaeno</b>.</font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><font color="#FF0000">Boss : Geosgaeno</font></b><font color="#FF0000"><br />
        </font></font><font face="Verdana" size="1" color="#ff0000">HP : 32,767<br />
          MP : 0<br />
          AP : 0<br />
          Objets à voler</font><font FACE="Verdana" SIZE="1"> <font color="#FFFFFF"> : aucun<br />
            <br />
            Vous ne devrez pas vaincre ce boss, d'ailleurs vous n'êtes vraiment pas encore à la hauteur; vous devrez simplement le fuire en lui infligeant 2 ou 3 coups d'épée. Rien de bien compliqué donc ^^</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font color="#FFFFFF">Après votre fuite, vous vous retrouverez au milieu d'une grande pièce ronde en ruines. Ayant froid, vous decidez de faire du feu. Commencez d'abord par fouiller la salle située au sud afin d'y trouver l'objet <b>Silex</b> qui vous permettra en partie d'allumer votre feu. Procédez ensuite à la salle
    située au nord. Avant de monter l'escalier, ouvrez le coffre situé juste en face, vous y trouverez un Ether. En haut des marches vous trouverez les <b>Fleurs séchées</b> et au bout de l'écran suivant un coffre renfermant une Potion+. Retournez ensuite au milieu de salle pour allumer votre feu.</font> <font color="#FFFFFF">Deuxième embuscade ! Cette fois-ci un grand monstre venu apparemment du plafond vous attaque. Préparez-vous à combattre.</font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><font color="#FF0000">Boss : Kourik</font></b><font color="#FF0000"><br />
        </font> </font> <font face="Verdana" size="1" color="#ff0000">HP : 1500<br />
          MP : 5 (7)<br />
          AP : 0<br />
          Objets à voler</font><font FACE="Verdana" SIZE="1"> <font color="#FFFFFF"> : aucun<br />
            <br />
            Toujours rien de compliqué avec ce boss ^^ Commencez par l'attaquer et soignez-vous avec des potions si c'est nécessaire. Quand vous l'aurez déjà assez bien entammé, un groupe d'Al Bhed fera son entrée en explosant litéralement la porte ! Un d'entre eux vient vous prêter main forte. Afin de vaincre Kourik, utilisez les
            grenades de ce personnage.</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font color="#FFFFFF">A bord de leur navire, le groupe vous oblige à travailler pour eux ! Un point de sauvegarde se situe à gauche de l'entrée et de l'autre côté le premier volume Al Bhed, le <b>manuel Al Bhed Vol. 1</b>. Tout au long de l'aventure vous trouverez dans le monde d'autres livres qui vous permettront de
    déchiffrer la langue Al Bhed. Il y en 26 en tout. Le personnage de gauche vous remettra 3 potions si vous lui parlez. Parlez ensuite au personnage qui comprend votre langue, celui-ci vous renseignera sur le système de Spherier de Final Fantasy X. Parlez lui une seconde fois et plongez à l'eau.</font> <font color="#FFFFFF">Suivez la chaîne tout en pressant sur rond afin de pouvoir descendre au fond de l'eau. Arrivés dans un batiment immergé, allez examiner le moniteur pour entrer dans la salle suivante. Continuez par la droite, traverez le couloir et examinez l'appareil suspendu au plafond. La remise en marche a néanmoins
      réveillé un monstre ^^ Faites chemin inverse jusqu'à vous faire attaquer !</font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><font color="#FF0000">Boss : Ultros</font></b><font color="#FF0000"><br />
        </font> </font> <font face="Verdana" size="1" color="#ff0000">HP : 2200<br />
          MP : 8 (12)<br />
          AP : 0<br />
          Objets à voler</font><font FACE="Verdana" SIZE="1"> <font color="#FFFFFF"> : Grenades<br />
            <br />
            Dans ce combat vous aurez pour la première fois dans le jeu accès à des commandes spéciales, les <b>Astuces</b>. Attaquez avec Tidus et lancez des grenades avec l'autre personnage. Quand Ultros ira se cacher derrière le pilier vous aurez la possibilité avec Tidus de faire l'encercler avec les Astuces. Une fois pris en
            sandwich, vous n'aurez plus aucun mal à en venir à bout.</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font color="#FFFFFF">Le monstre vaincu, sortez du batîment et revenez au navire. Allez sauvegarder et quand vous êtes prêt, allez parler au personnage qui vous a accompagné. Après une petite discussion où vous en apprendrez un peu plus sur l'endroit où vous vous trouvez, vous vous ferez une nouvelle fois attaquer par Sin !
    Tidus se fera éjecter du bateau et emporter par le tourbillon...</font> Après l'attaque de Sin, vous vous retrouvez au beau milieu de l'eau non loin d'une plage où se trouve un groupe de joueurs de
    Blitzball. Collectez les quelques objets se trouvant dans les environs (un <b>Symbole lunaire</b> et 2 <b>Antidotes</b>) et faites ensuite leur connaissance. Epaté par votre talent
    de joueur de Blitzball, Wakka, le capitaine de l'équipe des Aurochs, vous accompagnera jusqu'au village. Suivez-le jusqu'au moment où vous arriverez dans un lagon; à cet endroit vous aurez la possibilité de récolter dans l'eau une <b>Queue de Phénix</b>, une <b>Potion+</b> ainsi que 2 autres <b>Antidotes</b>. <font color="#FFFFFF">Sachez avant de poursuivre que vous serez confronté plusieurs fois au cours du jeu à explorer des Temples. Dans chacun d'entre eux vous aurez la possibilité de débloquer un coffre si vous parvenez à résoudre une énigme. Il est très important de débloquer chacun de ces coffres si vous désirez pourvoir
      utiliser une des Chimères les plus puissants du jeu (Anima (et donc par la même occasion les Soeurs Magus)). Pour chaque temple je vous proposerai un guide &quot;pas à pas&quot; décrivant en détails la façon de procéder :)</font></p>
  </font> <b>
  <p align="justify"><font color="#FF0000" face="Verdana" size="4"><i><u>Temple de Besaid</u></i></font></p>
  <font FACE="Verdana" SIZE="1">
  <blockquote>
    <blockquote>
      <p align="justify"><font color="#FFFFFF">1.</font> </font> </b> <font FACE="Verdana" SIZE="1"> <font color="#FFFFFF"> Examinez le symbole au fond de la salle et touchez ensuite le <b>Sceau</b> situé sur le mur de droite. Ce dernier révélera un passage secret.<br />
        <b>2.</b> Descendez le premier escalier et prenez la <b>Sphère Sceau</b> du mur. Descendez ensuite l'autre escalier et insérez la sphère dans la porte.<br />
        <b>3.</b> Une fois la porte ouverte, reprenez la sphère.<br />
        <b>4.</b> Continuez dans le couloir jusqu'à trouver un endroit où insérer la Sphère Sceau. Cette action révélera une chambre renfermant une <b>Sphère d'Initié</b>. Ne la prenez pas pour le moment.<br />
        <b>5.</b> Continuez jusqu'à un piedestal. Juste en face se trouve un Sceau, touchez le et prenez la <b>Sphère de Besaid</b> (située au fond de salle que vous venez d'ouvrir) afin de l'insérer dans le piedestal.<br />
        <b>6.</b> Retournez à présent chercher la Sphère d'Initié afin de la mettre où vous avez trouvé la Sphère de Besaid.<br />
        <b>7.</b> Vous pouvez dès à présent allez ouvrir un coffre renfermant le <b>Bâton D'Erudit</b> et situé au fond du couloir dans la salle que vous venez de révéler.<br />
        <b>8.</b> Poussez maintenant le piedestal au fond de la pièce pour déclencher un ascenseur.</font></p>
    </blockquote>
  </blockquote>
  <p align="center">&nbsp;</p>
  <p align="justify"><font color="#FFFFFF">Une fois sorti, suivez les autres membres du groupe sur la place du village où Yuna appellera pour la première fois une Chimère, il s'agit de Valefore. Plus tard dans la nuit et autour d'un bon feu de camp, allez discuter un peu avec Yuna. Quand vous serez prêt, allez parler à Wakka et choisissez l'option
    de dormir. Durant la même nuit vous ferez un étrange rêve...</font> <font color="#FFFFFF">Le matin suivant, examinez un peu la pièce pour y trouver le <b>manuel Al Bhed Vol. 2</b> et sortez ensuite de la tente. Wakka vous fera cadeau de l'épée de son frère Chappu. Après que Yuna ait rejoint votre groupe, quittez le village. Tout au long de votre chemin vous aurez plusieurs combats, disons
      &quot;initiatifs&quot;. En effet, chacun d'entre eux sera en quelque sorte un mini tutorial qu'il vous suffira simplement de suivre. Arrivé près d'un ancien temple envahi par la végétation vous vous ferez attaquer par Kimahri !</font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><font color="#FF0000">Boss : Kimahri</font></b><font color="#FF0000"><br />
        </font> </font> <font face="Verdana" size="1" color="#ff0000">HP : 750<br />
          MP : 3 (4)<br />
          AP : 0<br />
          Objets à voler</font><font FACE="Verdana" SIZE="1"> <font color="#FFFFFF"> : aucun<br />
            <br />
            Vraiment très simple à vaincre puisque vous devriez normalement pendant ce combat déclencher votre Overdrive. Commencez par vous lancer le sort <b>Encourager</b> et attaquez jusqu'à déclencer votre limite. Plus de 4 tours ne devrait pas être nécessaire pour en venir à bout.</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font color="#FFFFFF">Après avoir vaincu Kimahri, poursuivez votre périple, tout en continuant à suivre les tutoriaux des combats, jusqu'à arriver à la plage où vous embarquerez pour Kilika ^^ Avant de partir il est intéressant de parler aux différentes personnes se trouvant sur le quai. Celles-ci vous offriront
    gracieusement un <b>Ether</b>, 3 <b>Queues de Phénix</b>, une <b>Bague de Pèlerin</b>, un <b>Remède</b> ainsi que <b>400 Gils</b> !</font> Une fois à bord du S.S. Liki destiné à vous débarquer aux quais de Kilika, commencez par vous diriger à l'étage inférieur du bateau où quelques petites choses assez intéressantes vous attendent... <font color="#FFFFFF">Après avoir sauvegardé votre partie, allez discuter à l'homme portant un gros sac vert sur son dos. Cet homme n'est autre que l'illustre O'Aka, 13 ème du nom. O'Aka est en fait un marchand nomade que vous rencontrerez dans de nombreux endroits au cours de votre aventure. Dès que vous lui aurez donné des
      gils vous pourrez lui acheter des objets lors de futures rencontres, je vous conseille fortement d'investir si vous désirez ultérieurement obtenir des objets exclusifs ou de moindre prix. Evidemment, les prix des objets que vous pourrez lui acheter seront en fonction du montant que vous lui donnerez ^^ Pour le moment lui
      donner 1002 Gils me semble la meilleure des choses.</font></p>
  </font>
  <p align="center">&nbsp; </p>
  <center>
    <table cellspacing="0" border="0" cellpadding="1" width="520">
      <tr>
        <td width="49%" valign="middle" bgcolor="#0000ff"><p align="center"><b><font color="#FFFFFF" size="1" face="Verdana">Investissement</font></b></p></td>
        <td width="51%" valign="middle" bgcolor="#0000ff"><p align="center"><b><font color="#FFFFFF" size="1" face="Verdana">Prix</font></b></p></td>
      </tr>
      <tr>
        <td width="49%" valign="middle"><p align="center"><font color="#FFFFFF" size="1" face="Verdana">0~100 Gils</font></p></td>
        <td width="51%" valign="middle"><p align="center"><font color="#FFFFFF" size="1" face="Verdana">Prix standards x2</font></p></td>
      </tr>
      <tr>
        <td width="49%" valign="middle"><p align="center"><font color="#FFFFFF" size="1" face="Verdana">101~1.000 Gils</font></p></td>
        <td width="51%" valign="middle"><p align="center"><font color="#FFFFFF" size="1" face="Verdana">Prix standards x1,5</font></p></td>
      </tr>
      <tr>
        <td width="49%" valign="middle"><p align="center"><font color="#FFFFFF" size="1" face="Verdana">1.001~10.000 Gils</font></p></td>
        <td width="51%" valign="middle"><p align="center"><font color="#FFFFFF" size="1" face="Verdana">Prix standards x1,2</font></p></td>
      </tr>
      <tr>
        <td width="49%" valign="middle"><p align="center"><font color="#FFFFFF" size="1" face="Verdana">+ de 10.000 Gils</font></p></td>
        <td width="51%" valign="middle"><p align="center"><font color="#FFFFFF" size="1" face="Verdana">Prix standards x0,7</font></p></td>
      </tr>
    </table>
  </center>
  <font FACE="Verdana" SIZE="1">
  <p align="justify"><font color="#FFFFFF">Dans la pièce de gauche se trouve un coffre contenant un <b>Remède</b> ainsi qu'une valise sur la droite. A chaque fois que vous shooterez dedans, vous recevrez une potion à condition que votre total de potions n'est pas supérieur ou égal à 20. Vous trouverez également le <b>manuel Al Bhed Vol. 3</b> au
    fond de la salle des machines.</font> <font color="#FFFFFF">Retournez ensuite sur le pont et allez discuter à Wakka. Allez ensuite parler près des quelques personnes autour de Yuna, et allez parler une nouvelle fois avec Wakka. Après ceci, les personnes autour de Yuna s'en iront et vous pourrez allez lui parler. Lors de votre discussion vous vous ferez une nouvelle
      fois attaquer par Sin ! (Décidément... ^^)</font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><font color="#FF0000">Boss : Sin</font></b><font color="#FF0000"><br />
        </font> </font> <font face="Verdana" size="1" color="#ff0000">HP : 2000<br />
          MP : 100<br />
          AP : 10(15)<br />
          Objets à voler</font><font FACE="Verdana" SIZE="1"> <font color="#FFFFFF"> : aucun<br />
            <br />
            Commencez le combat en éliminant 2 des 3 Squamelles qui vous attaquent. En effet si vous éliminez les 3, d'autres reviendront. Bien qu'un peu plus coriace que les autres, ce boss ne devrait pas vous poser trop de problèmes. Lancez le sort <b>Encourager</b> avec Tidus sur les membres de votre groupe et utilisez ensuite Wakka,
            Kimahri et Lulu pour attaquer. Aux environs de 1000~1300 HP, je vous conseille d'appeller Yuna afin que celle-ci invoque Valefore. Son Overdrive Echo devrait achever le boss. Attention ! Il est très important que Tidus et Wakka sortent de ce combat sans trop de dommages.</font></p>
    </blockquote>
  </blockquote>
  <p align="center">&nbsp;</p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><font color="#FF0000">Boss : Ekyu</font></b><font color="#FF0000"><br />
        </font> </font><font face="Verdana" size="1" color="#ff0000">HP : 2000<br />
          MP : 20<br />
          AP : 12<br />
          Point faible : Cécité<br />
          Objets à voler</font><font FACE="Verdana" SIZE="1"> <font color="#FFFFFF"> : aucun<br />
            <br />
            Dès le combat face à Sin terminé un deuxième s'enclenche ne vous laissant pas le temps d'enregistrer ou de récupérer. Seuls Wakka et Tidus pourront combattre ce boss. Comme à l'accoutumée, lancez <b>Encourager</b> avec Tidus utilisez la compétence <b>Cécité</b> de Wakka sur le boss (annulant ainsi le sort <b>Saignée</b> de Ekyu). Attaquez le constamment avec Tidus et soignez avec Wakka en cas de besoin. Au bout d'une quinzaine de tours il devrait être vaincu.</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font color="#FFFFFF">Il ne vous reste plus qu'à contempler la superbe cinématique qui suit avant d'arriver sur les quais de Kilika où vous pourrez enregistrer et par la même occasion reprendre quelques HP et MP.</font> Votre partie sauvegardée, suivez les autres personnages au centre de Kilika. La boutique ainsi que le bar sont, pour le moment, fermés. Continuez de traverser les différents quais par l'ouest, jusqu'à rencontrer Yuna et les survivants de l'attaque. S'en suit alors une superbe cinématique où vous vous
    verrez Yuna envoyer les âmes des défunts en direction de l'Au-Delà. <font color="#FFFFFF">Dans cette forêt se trouvent 3 coffres ainsi qu'un boss, mais optionnel. Le premier coffre se trouve au fond du sentier de droite, juste à l'entrée; <b>2 Sphères mentales</b> y sont cachées. Pour le second, vous devrez directement prendre par la gauche, à partir de l'entrée, puis emprunter le premier
      petit chemin à droite; celui-là renferme une <b>Recruteuse</b>. Quant au troisième coffre, il vous suffit de continuer tout droit, toujours à partir de l'entrée; vous y trouverez une <b>Sphère Chance</b>. En ce qui concerne le boss optionnel, il s'agit de Ochu Egaré. Vous l'affronterez, après avoir croisé Gatta et Luzzu,
      si vous suivez le chemin &quot;principal&quot;. Endormi au milieu de la route, vous ne pourrez pas le manquer ^^</font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><font color="#FF0000">Boss : Ochu Egaré</font></b><font color="#FF0000"><br />
        </font> </font> <font face="Verdana" size="1" color="#ff0000">HP : 4649<br />
          MP : 800<br />
          AP : 40 (60)<br />
          Point faible : Brasier<br />
          Objets à voler</font><font FACE="Verdana" SIZE="1"> <font color="#FFFFFF"> : aucun<br />
            <br />
            Sans doute le boss le plus coriace que vous avez rencontré jusqu'à présent, du moins si vous n'y êtes pas préparé. Avoir la compétence Booster avec Tidus, est un plus non négligeable pour le vaincre. Avant de l'affronter, pensez à mettre Valefore en trance, ça peut aussi toujours servir... Commencez le combat en
            lançant le sort Booster avec Tidus, sur Lulu. Attaquez avec la magie &quot;Silence&quot; de Wakka, et lancez constamment le sortilège de magie noire Brasier, avec Lulu. Vous pouvez permutter Wakka avec Kimahri si vous en ressentez le besoin. Arrivé près des 2000 HP, appelez Yuna en faisant sortir Tidus. Invoquez Valefore.
            Après une ou deux attaques Sonic Wing, afin de retarder le tour de Ochu; déclenchez son Overdrive :) S'il n'est pas encore vaincu, continuez avec le sort Brasier.</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font color="#FFFFFF">Ochu vaincu, allez discuter à Luzzu pour obtenir un <b>Elixir</b> ! Pensez aussi à aller sauver votre partie... Reprenez maintenant votre route par le nord, en direction du Temple de Kilika. Aux marches de l'escalier du temple, vous vous ferez attaquer par un second boss, Sinspawn
    Geneaux.</font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><font color="#FF0000">Boss : Guno</font></b><font color="#FF0000"><br />
        </font> </font><font face="Verdana" size="1" color="#ff0000">HP : 3000 + 2*450<br />
          MP : 900, 500<br />
          AP : 48 (72), 5 (7)<br />
          Point faible : Brasier<br />
          Objets à voler</font><font FACE="Verdana" SIZE="1"> <font color="#FFFFFF"> : aucun<br />
            <br />
            Bien plus simple que le précédent, détruisez pour commencer ces 2 tentacules. Attaquez ensuite avec Kimahri qui est le seul à pouvoir percer sa carapace (son arme devrait être normalement équipér de la compétence Percer), lancez Brasier avec Lulu. Une fois sa forme normale reprise, continuez en suivant la même
            technique.</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font color="#FFFFFF">Montez ensuite l'escalier et entrez dans le temple. Après une rencontre avec un Invokeur rival (Dona et son gardien); Yuna, Lulu, Wakka et Kimahri entreront dans la salle de l'épreuve, vous laissant ainsi seul en haut de l'ascenseur o_Ô Enfin... pas pour longtemps, puisque Dona et Barthello vous rejoindront
    peu de temps après. Voulant se prêter à un petit jeu, ils vous emmèneront de force sur l'asenseur ^^ Une nouvelle énigme vous attend !</font></p>
  </font> <b>
  <p align="justify"><i><u><font color="#FF0000" face="Verdana" size="4">Temple de Kilika</font></u></i></p>
  <font FACE="Verdana" SIZE="1">
  <blockquote>
    <blockquote>
      <p align="justify"><font color="#FFFFFF">1.</font> </font> </b> <font FACE="Verdana" SIZE="1"> <font color="#FFFFFF"> Entrez dans le cloître et prenez la <b>Sphère de Kilika</b> du piedestal, à gauche.<br />
        <b>2.</b> Insérez celle-ci dans dans le mur nord. Ceci provoquera la disparition de la porte. Reprenez la sphère et entrez dans la salle suivante.<br />
        <b>3.</b> Insérez la sphère dans le mur nord afin d'y faire apparaître un <b>Sceau</b>. Reprenez celle-ci et insérez-la dans l'un des murs latéraux. Touchez le Sceau pour provoquer l'ouverture du mur.<br />
        <b>4.</b> Prenez la <b>Sphère Sceau</b> du piedestal et insérez-la dans l'autre mur.<br />
        <b>5.</b> Entrez dans la dernière pièce. Placez vous sur la dalle clignotante située à droite, ce qui provoquera la téléportation du piedestal de la précédente salle dans celle-ci.<br />
        <b>6.</b> Prenez la <b>Sphère de Kilika</b> du mur de droite pour l'insérer dans le piedstal.<br />
        <b>7.</b> Retournez dans la salle précédente et prenez y la <b>Sphère Sceau</b>. Allez placez celle-ci dans l'encoche désormais libre de l'autre salle. Ceci ouvrira une chambre secrète dans laquelle vous trouverez une <b>Sphère d'Initié</b>.<br />
        <b>8.</b> Poussez le piedestal avec la <b>Sphère de Kilika</b> sur la dalle.<br />
        <b>9.</b> Descendez les escaliers et prenez y la nouvelle <b>Sphère de Kilika</b>. Allez l'insérez à la sortie du cloître.<br />
        <b>10.</b> Faites marche arrière et allez prendre la <b>Sphère d'Initié</b> afin de l'insérez à l'endroit où se trouvait la <b>Sphère de Kilika</b> que vous venez d'insérez dans la porte nord.<br />
        <b>11.</b> Ouvrez le coffre de la deuxième pièce secrète pour y trouver un <b>Brassard Ecarlate</b>.<br />
        <b>12.</b> Reprenez la <b>Sphère de Kilika</b> pour éteindre la porte et pénétrez dans la salle.</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font color="#FFFFFF">Après une petite discussion avec Wakka et Lulu, Yuna sortira de la chambre du priant. Elle peut désormais appeler une seconde Chimère, Ifrit (voir rubrique Chimères pour de plus amples informations) ! Il ne vous reste plus qu'à quitter le temple et de retourner à Kilika en passant par la forêt. Trouvez
    le groupe sur les quais et choisissez d'embarquer :)</font> </font> <font face="Verdana" size="1" color="#FFFFFF"> Vous voilà reparti en mer pour
      Luca. Premièrement, allez chercher l’<b>Al Bhed Primer vol. V</b> qui se trouve dans la cabine de pilotage. Ensuite, rendez-vous sur le pont arrière où vous vous entretiendrez avec
      Yuna. Après ce bref échange, allez sur le pont supérieur où vous surprendrez Wakka et
      Lulu en pleine discussion. Pour entendre le dialogue dans sa totalité, vous devrez monter et descendre les escaliers à plusieurs reprises. Retournez sur le pont inférieur, à l’arrière du bateau, et examinez la
      blitzball. Vous pourrez apprendre <b>Jecht Shot</b> en réussissant une mini-épreuve. Vous devrez à l’aide du
      joystick pointer dans les directions indiquées à l’écran et appuyer sur le bouton X au moment opportun. Si vous le réussissez 11 fois, Tidus acquérra Jecht
      Shot. Cette technique de Blitzball est indispensable si vous souhaitez vous assurer la victoire dans vos éventuels matchs de
      Blitzball. Si vous n’êtes pas en
      mesure d’acquérir cette technique maintenant, vous pourrez revenir plus tard.uels matchs de
      Blitzball. Si vous n’êtes pas en mesure d’acquérir cette technique maintenant, vous pourrez revenir plus tard. Dès votre arrivée à
      Luca, vous ferez de nombreuses connaissances. Vous serez aussi initié aux rudiments du
      Blitzball, ayant tout le loisir d’apprendre les règles et les contrôles de ce sport. Yuna aura connaissance de certaines rumeurs sur la présence d’Auron à
      Luca, elle vous offrira son aide afin
      de le retrouver. En quittant la chambre des Aurochs, dirigez-vous vers la gauche à votre sortie et entrez dans la chambre des joueurs adverses. Au pied de l’un des joueurs vous trouverez l’<b>Al Bhed Primer Vol. VI</b>. Prenez bien le temps de visiter le port où vous trouverez de nombreux items. Durant votre visite, vous
      découvrirez le théâtre. En ce lieu, vous pourrez visionner les cinématiques et les musiques de FFX moyennant quelques
      Gil. </font> <font FACE="Verdana" SIZE="1"> <font color="#FFFFFF">Allez ensuite à la place du marché,
        Luca-Square. Prenez le temps de discuter avec tout le monde avant d’entrer dans le café qui se trouve au nord. Après quelques altercations entre Kimahri et l’un de ses confrères, vous vous rendrez compte à votre grand désarroi que Yuna a été enlevée par les Al
        Bhed. Dirigez-vous vers le port, Dock 4. Vous affronterez de nombreuses machines durant votre poursuite, n’oubliez pas que le sort Thunder de Lulu est particulièrement efficace contre ce type d’ennemis. Arrivez au Dock 4, vous aurez affaire à un adversaire fort peu amical.</font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><font color="#FF0000">Boss : Oblitzerator</font></b><font color="#FF0000"><br />
        </font> </font> <font face="Verdana" size="1" color="#ff0000">HP : 6 000<br />
          AP : 36<br />
          Point faible : Lightning<br />
          Absorbe : Aucun<br />
          Immunité : Water<br />
          Dommage réduit de moitié : Fire; Ice<br />
          Objet à volé</font><font FACE="Verdana" SIZE="1"> <font color="#FFFFFF"> : Aucun<br />
            <br />
            Premièrement, lancez le sort Haste sur Lulu. Vous verrez à votre droite une grue. Jetez le sort Thunder à plusieurs reprises sur celle-ci, jusqu’à ce qu’elle s’active. Une fois complété, avec Tidus utilisez la Trigger Command. Cette manœuvre aura pour effet d’affaiblir grandement votre adversaire. La victoire est
            à votre portée.</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font color="#FFFFFF">Après avoir sauvé Yuna, vous vous retrouverez dans la chambre des Aurochs où vous pourrez une dernière fois prendre connaissance du tutorial sur le Blitzball. Préparez-vous en effet à votre première véritable partie. Vous affronterez les Luca Goers. Ce match est très difficile (voir presque
    impossible) à gagner et mettra vos talents à rude épreuve.</font> </font> <font face="Verdana" size="1" color="#FFFFFF"> Après la partie, le stade sera assiégé par une horde de démon. Durant ce siège, vous retrouverez finalement Auron vous apportant un support non négligeable. Utilisez Power Break avec Auron et Dark Attack avec Wakka afin de vous faciliter la tâche. Avant de quitter
      Luca, allez au théâtre (Theater-Entrance) où vous trouverez sur le sol l’<b>Al Bhed Primer vol. VII</b>. Aussi, si vous désirez vous constituer une équipe de Blitzball solide, Luca est un excellent lieu pour recruter de nouveaux joueurs. Si vous désirez connaître davantage d’informations
      sur le Blitzball, référez-vous aux sections suivantes : « Blitzball » et « Les stratégies du Blitzball ». Avant de vous aventurer sur ce long trajet, assurez-vous d’avoir sauvegardé votre partie. La route que vous parcourez est relativement linéaire, mais prenez le temps de parler à tout le monde et de bien visiter chaque recoin de cette route afin de ne rien oublier. </font> <font FACE="Verdana" SIZE="1"> <font color="#FFFFFF">Durant votre expédition, vous ferez la connaissance de Maechen qui sera comblés vos lacunes sur l’histoire de
        Spira. Aussi, vous rencontrerez Belgemine qui mettra, si vous le souhaitez, Yuna à l’épreuve dans un combat d’aeons. Pour gagner, Valefor doit avoir sa jauge d’overdrive remplie avant le
        début du combat. Aussi, utilisez l’habilité Shield lorsque Ifrit se prépare à lâcher l’attaque Meteor
        Strike. Si vous gagnez, Yuna recevra <b>Echo Ring,</b> dans le cas contraire, celle-ci obtiendra <b>Seeker’s Ring</b>. Après cette longue marche épuisante, c’est dur d’appuyer sur le joystick :-), vous pourrez
        vous reposer à la Travel Agency de Mr. Rin. Lorsque Rin s’introduira à vous, il vous offrira l’<b>Al Bhed Primer vol. VIII </b>. En sortant, vous serez confronté à une bestiole qui s’en prendra à nos pauvres petits
        Chocobo.</font></p>
  <p align="center">&nbsp;</p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><font color="#FF0000">Boss : Chocobo Eater</font></b><font color="#FF0000"><br />
        </font> </font> <font face="Verdana" size="1" color="#ff0000">HP : 10 000<br />
          AP : 90<br />
          Point faible : Fire<br />
          Absorbe : Aucun<br />
          Immunité : Aucun<br />
          Dommage réduit de moitié : Aucun<br />
          Objet à volé</font><font FACE="Verdana" SIZE="1"> <font color="#FFFFFF"> : Aucun<br />
            <br />
            Le Chocobo Eater tentera de vous faire tomber dans un ravin. Vous devrez le repousser et l’avoir à son propre jeu. Dès le début du combat, lancez Haste (avec
            Tidus) sur Lulu afin qu’elle puisse utiliser la magie Fire. Avec Wakka, utilisez Dark
            Attack, ce qui aveuglera votre ennemi. Ensuite, sortez les gros bras de votre
            équipe, Kimahri et Auron. Avec votre preux chevalier, utilisez Power Break, ceci réduira les dommages physiques qui vous seront infligés. Comme à l’habitude, assurez-vous que tous vos joueurs participent à la bataille afin qu’ils reçoivent tous de l’expérience. Si vous réussissez à envoyer Chocobo Eater dans le
            ravin, vous recevrez deux<b> Lv. 1 Key Sphere</b> et Rin vous offrira un <b>Chocobo</b>.</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font color="#FFFFFF">Maintenant, vous allez entamer la deuxième partie de Mi’ihen
    Highroad. Avoir en votre possession le Chocobo est essentiel, puisque certains items ne sont accessibles qu’avec son aide. Prenez bien le temps d’explorer en profondeur les sentiers. Vous remarquerez sur le chemin qu’à certains endroits il
    y a des plumes jaunes sur le sol. Lorsque vous en voyez une, appuyez sur le bouton X. Grâce au
    Chocobo, vous obtiendrez :<b> Heat Lance, Thunder Blade, Scout </b>et <b>Fortune Spear</b>. Au nord de la route de Mi’ihen, dans un tournant peu après une plume de
    Chocobo, vous trouverez sur lu sol l’<b>Al Bhed Primer vol. IX</b>.
    Aussi, tout au fond d’un sentier, vous découvrirez<b> Mars Crest</b>.</font> <font color="#FFFFFF">Rendez-vous à la porte de Mushroom Rock et parlez avec le garde à votre droite. Celui-ci vous divulguera de précieuses informations sur le plan des Crusaders. Le garde à votre gauche sollicitera votre générosité. Dépendant de la donation que vous lui ferez, celui-ci vous offrira un item en retour :<br />
      -100gil : <b>Scout</b><br />
      -1 000gil : <b>Ice Lance</b><br />
      -10 000gil : </font> <b><font color="#FFFFFF">Moon Ring</font></p>
  </b>
  <p align="justify"><font color="#FFFFFF">Retournez à nouveau à la porte. Maester Seymour vous donnera sa bénédiction afin de pouvoir entrer à Mushroom Rock Road. Une fois de plus, prenez bien le temps de parler à tout le monde et de bien explorer chaque recoin afin de ne rien oublier. À la fin de Mushroom Rock Road, juste avant d’accéder au
    Command Center, vous trouverez au bout d’un petit chemin tortueux l’<b>Al Bhed Primer vol. X</b>. Aussi, à droite de l’élévateur, menant au Command
    Center, vous rencontrerez Luzzu qui vous fera quelques révélations.</font> <font color="#FFFFFF">Rendu au poste de commande, vous verrez à votre gauche O’aka, vous proposant une variété intéressante d’items. Ensuite, allez-vous entretenir avec
      Gatta. La conversation que vous aurez avec celui-ci décidera de son destin, mais aussi de celui de
      Luzzu. Si vous parlez à Gatta deux fois, et choisissez
      la seconde option à chaque fois, Gatta mourra dans la bataille qui s’ensuivra. Tout autre option causera la mort de
      Luzzu. Avant d’enclencher la bataille assurez-vous de sauvegarder votre partie. Aussi, durant l’assaut, vous pourrez voir l’overdrive de Seymour. Profitez-en, ceci sera votre seule occasion.</font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><font color="#FF0000">Boss : Sinspawn Gui</font></b><font color="#FF0000"><br />
        </font> </font> <font face="Verdana" size="1" color="#ff0000">HP : Tête-4 000; Corps-12 000 : Bras-800<br />
          AP : Tête-48; Corps-400 : Bras-37<br />
          Point faible : Aucun<br />
          Absorbe : Lightning<br />
          Immunité : Water<br />
          Dommage réduit de moitié : Aucun<br />
          Objet à volé</font><font FACE="Verdana" SIZE="1"> <font color="#FFFFFF"> : Aucun<br />
            <br />
            Sinspawn Gui est l’un des boss les plus durs auxquels jusqu’ici vous avez eu affaire. Commencez par attaquer sa tête avec Lulu et
            Wakka. Une fois éliminé, attaquez ces bras avec l’aide d’Auron. Faites intervenir Yuna
            (Esuna) si votre adversaire vous attaque avec Venom. N’utilisez les aeons que si leur overdrive est
            pleine, et choisissez bien votre moment. Leur lenteur peut vous coûter cher.</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font color="#FFFFFF">Après cette bataille titanesque, vous vous préparez à contrecœur à partir vers
    Djose.</font> </font> <font face="Verdana" size="1" color="#FFFFFF"> Durant votre progression sur la route de
      Djose, prenez le temps de parler aux personnes que vous rencontrerez, ils vous offriront divers items. Dès le début de votre excursion, examinez bien le sol, vous y verrez à votre droite l’<b>Al Bhed Primer vol. XI</b>. Vous devrez affronter de nombreux Basilisk
      qui auront la fâcheuse habitude de transformer vos personnages en pierre. Profitez-en pour acquérir l’habilité </font> <font color="#FFFFFF"><b><font face="Verdana" size="1" color="#0000ff">Stone Breath</font></b><font face="Verdana" size="1"> en utilisant Lancet avec
        Kimahri. Cette overdrive est l’une des plus dévastatrice que peut posséder
        votre compère. </font></font> <font FACE="Verdana" SIZE="1"> <font color="#FFFFFF">Rendu à l’entrée du temple de
          Djose, cherchez complètement à l’ouest un coffre contenant <b>4 000gil</b>. Après avoir pris le temps de visiter ces lieux, entrez dans le Cloister of Trials.</font></p>
  </font> <b>
  <p align="justify"><i><u><font color="#FF0000" face="Verdana" size="4">Djose Temple-Cloister of Trials</font></u></i></p>
  <font FACE="Verdana" SIZE="1">
  <blockquote>
    <blockquote>
      <p align="justify"><font color="#FFFFFF">1.</font> </font> </b> <font FACE="Verdana" SIZE="1"> <font color="#FFFFFF"> Prenez les deux Djose Sphere et placez celles-ci dans les slots se trouvant de part et d’autre de la porte.<br />
        <b>2.</b> Vous verrez deux autres Djose Sphere incrustées dans le mur, face au piédestal. Prenez celles-ci et insérez les dans les slots se trouvant à l’est de cette pièce.<br />
        <b>3.</b> Poussez le piédestal vers la droite jusqu’à ce que celui-ci coïncide avec le piédestal se trouvant au plafond.<br />
        <b>4.</b> Prenez la « <b>Djose Sphere Énergisé</b> » et insérez-la dans la slot à droite de la porte. Un hiéroglyphe sera activé et vous aurez accès à une nouvelle chambre.<br />
        <b>5.</b> Reprenez les deux Djose Sphere sur le mur et insérez-les sur le piédestal. Ensuite, poussez celui-ci dans le champ d’éclair. Le piédestal vous servira de plate-forme pour traverser la crevasse.<br />
        <b>6.</b> Poussez le piédestal se trouvant de l’autre côté, ceci activera l’Iris dans la chambre principale.<br />
        <b>7.</b> Revenez dans la pièce principale. Du côté ouest se trouve sur le plancher l’interrupteur permettant d’extraire le piédestal du champ d’éclair. Récupérez les deux Djose Sphere sur le piédestal et placez-les dans les slots de la première chambre du Cloister of Trials.<br />
        <b>8.</b> Ensuite, reprenez la Djose Sphere Énergisé et insérez-la dans la slot à votre gauche.<br />
        <b>9.</b> Un élévateur apparaîtra vous permettant d’accéder au niveau supérieur. Il y aura cinq piédestaux qui devront être poussés en appuyant sur le bouton X. Un nouveau piédestal apparaîtra.<br />
        <b>10.</b> Redescendez au niveau inférieur et allez à l’ouest de la chambre principale. Vous verrez sur le mur un hiéroglyphe. En le touchant, vous obtiendrez la <b>Destruction Sphere </b>.<br />
        <b>11.</b> Placez la Destruction Sphere dans le nouveau piédestal au deuxième niveau, ceci débloquera un coffre contenant une <b>Magic Sphere</b>.<br />
        <b>12.</b> Il ne vous reste plus qu’à entrer dans la dernière chambre du Cloister of Trials.</font></p>
    </blockquote>
  </blockquote>
  <p align="center">&nbsp;</p>
  <p align="justify"><font color="#FFFFFF">Après une nuit de repos, vous vous préparez à repartir. Avant de quitter l’auberge, récupérez <b>Switch Hitter</b> dans un coffre à l’arrière du tenancier. Allez au temple de Djose où vous retrouverez
    Yuna. Sur votre chemin du retour, comme à l’habitude, parlez aux diverses personnes que vous
    rencontrerez. Direction plein Nord, vers Moonflow.Vous voilà reparti sur la route. Plusieurs coffres sont dispersés sur votre itinéraire, mais rassurez-vous ceux-ci sont faciles à trouver. Vous ferez à nouveau la rencontre de
    Belgemine, proposant à Yuna un duel d’invocatrice. Belgemine aura Ixion, tandis que Yuna fera appelle à
    Ifrit. Avant de
    commencer le combat assurez-vous que la jauge d’overdrive de vos aeons soit remplie. Dès le début du combat, utilisez
    Hellfire. Si le niveau de vie d’Ifrit devient critique, utilisez la magie Fire sur lui-même. Lorsque Ixion se préparera à lancer son overdrive, utilisez l’habilité
    Shield. Dans l’éventualité où
    Ifrit tombe au combat, Yuna pourra toujours faire appel à Valefor. En défaisant
    Belgemine, vous recevrez deux <b>Dragon Scale</b>. Aussi, elle vous offrira <b>Summoner’s Soul</b>, et cela peu importe l’issu du combat. À partir de maintenant, vos aeon pourront apprendre de nouvelles habilités. Avant de quitter la rive Sud
    de Moonflow, allez récupérer les <b>5 000gil</b> qui se trouvent dans un coffre derrière Lulu.</font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><font color="#FF0000">Boss : Extractor</font></b><font color="#FF0000"><br />
        </font> </font> <font face="Verdana" size="1" color="#ff0000">HP : 4 000<br />
          AP : 660<br />
          Point faible : Lightning<br />
          Absorbe : Aucun<br />
          Immunité : Aucun<br />
          Dommage réduit de moitié : Fire; Water; Ice<br />
          Objet à volé</font><font FACE="Verdana" SIZE="1"> <font color="#FFFFFF"> : Aucun<br />
            <br />
            Équipez Tidus et Wakka avec des armes ayant l’habilité Lightningstrike. Utilisez le sort Haste sur Tidus et Wakka au début du combat. Normalement, vous devriez avoir aucune difficulté à vous défaire de ce boss.</font></p>
    </blockquote>
  </blockquote>
  <p align="center">&nbsp;</p>
  <p align="justify"><font color="#FFFFFF">À votre arrivée sur la rive Nord, O’aka sera là pour refaire vos provisions. Prenez le soin de bien fouiller la plate-forme de débarquement, il s’y trouve l’<b>Al Bhed Primer vol. XII</b>. En continuant votre voyage, Tidus retrouvera finalement la charmante Rikku qui viendra compléter votre équipe.</font> </font> <font face="Verdana" size="1" color="#FFFFFF"> À votre arrivée à Guadosalam, Rikku vous expliquera comment modifier vos armes et armures afin de les rendre plus puissantes. À l’intérieur de la « Home », vous y trouverez sur le plancher l’<b>Al Bhed Primer vol. XIII</b>. Cherchez bien, car en plus de ce livre il y a un coffre contenant <b>3
    000gil</b> dissimulé dans tout ce capharnaüm. Après votre exploration, ouvrez la double porte rouge se trouvant complètement au nord de ces lieux. Après quelques discussions, dirigez-vous vers
    Farplane. Juste à l’entrée du corridor menant à ce lieu sacré, cherchez à votre gauche un coffre contenant des <b>Lightning Marble</b>. Rendu à
    Farplane, parlez en premier lieu à Wakka et Lulu. L’échange que vous aurez eu avec Wakka fera en sorte que l’épée <b>Brotherhood</b> acquérra de nouvelles capacités. Finalement, allez prendre connaissance de la décision de
    Yuna. Votre séjour à Guadosalam tire à sa fin, rendez-vous à la double porte rouge où vous discuterez avec vos partenaires. Les Thunder Plains sont peuplées de monstres ayant des affinités avec le
    lightning. Si vous trouvez les combats trop faciles, pourquoi ne pas vous équiper avec des armes ayant l’habilité
    Lightningstrike. :-) Dans le cas contraire, équipez votre équipe avec des armes ayant l’habilité Waterstrike pour
    ne faire qu’une bouché de vos opposants. En restant sur la route principale, vous vous battrez souvent contre les
    Quactuar. Ceux-ci sont très payant en expérience, chacun de ces monstres vaut 350 points d’AP. Avec les attaques régulières des aeons vous ne devriez n’avoir aucun problème à vous en défaire. À mi-chemin de cette région, vous vous arrêterez dans une Travel
    Agency. À l’intérieur, vous pourrez prendre connaissance de l’histoire des pierres Quactuar par l’intermédiaire d’un livre. Un autre ouvrage se trouve sur une table, compilant vos statistiques sur vos capacités à éviter les
    éclairs. En effet, deux Side-Quest majeures devront être accomplies dans cette région, référez-vous aux sections suivantes pour en connaître davantage : « Échapper à la foudre » et « Armes Légendaires-Kimahri » Après avoir parlé à
    Rikku, Rin émergera du couloir et vous demandera comment votre étude du Al Bhed progresse. En choisissant l’option du haut, celui-ci vous offrira l’<b>Al Bhed Primer vol. XIV</b>. En quittant la Travel
    Agency, examinez le sol, vous y trouverez un <b>Yellow Shield</b>. Continuez
    votre route pour vous rendre à Macalania. Durant votre excursion dans Macalania
    Woods, vous ferez la connaissance d’un étrange personnage qui vous proposera de participer à un mini-jeu : La chasse aux papillons. Pour en savoir davantage, référez-vous à la section : « Capture des Papillons ». L’un des monstres les plus coriaces de cette région,
    Chimeras, pourra vous poser quelques problèmes. En utilisant Power Break avec Auron, vous affaiblirez votre adversaire. Si celui-ci vous oppose une trop grande résistance, n’hésitez pas à utiliser vos
    aeons. De plus, avec Kimahri, utilisez Lancet
    sur Chimeras afin d’apprendre l’overdrive </font> <font color="#FFFFFF"><b><font face="Verdana" size="1" color="#0000ff">Aqua Breath</font></b></font> <font FACE="Verdana" SIZE="1"><font color="#FFFFFF">Arrivé à la deuxième sphère de sauvegarde, juste avant Lake
      Macalania, vous retrouverez O’aka. Si vous examinez son inventaire, sans rien lui acheter, il vous demandera si ses prix ne sont pas trop exorbitants. Si vous êtes d’accord avec lui, il vous offrira un rabais important. Aussi, examinez
      attentivement le sol à droite d’O’aka, vous y trouverez l’<b>Al Bhed Primer vol. XV</b>. Avant de sortir de Macalania
      Woods, Auron révélera à Tidus un lieu secret.</font></p>
  <p align="center">&nbsp;</p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><font color="#FF0000">Boss : Spherimorph</font></b><font color="#FF0000"><br />
        </font> </font><font face="Verdana" size="1" color="#ff0000">HP : 12 000<br />
          AP : 3 240<br />
          Point faible : Varié<br />
          Absorbe : Varié<br />
          Immunité : Aucun<br />
          Dommage réduit de moitié : Aucun<br />
          Objet à voler</font><font FACE="Verdana" SIZE="1"> <font color="#FFFFFF"> : Ether<br />
            <br />
            Il est important avant de commencer la bataille, que vos coéquipiers soient équipés avec des armes
            non-élémentale. Les attaques physiques ont peu d’effet, l’astuce réside dans les attaques magiques. Lorsque vous attaquez
            Spherimorph, il contre-attaquera avec une magie. La magie qu’il utilise indique sa propriété
            élémentale actuelle. Utilisez la magie d’élément opposée pour blesser votre adversaire. Par exemple, si Spherimorph attaque avec
            Fire, attaquez-le à votre tour avec Blizzard ou Blizzara. Chaque fois que vous utilisez la bonne magie, votre opposant changera sa propriété
            élémentale. Frappez-le à nouveau pour
            connaître le type d’élément avec lequel vous devrez l'assaillir.</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font color="#FFFFFF">À la fin du combat, vous recevrez une <b>Jecht’s Sphere</b> et Auron aura appris une nouvelle overdrive, </font> </font><font color="#FFFFFF"><b><font face="Verdana" size="1" color="#007f00">Shooting Star</font></b></font><font FACE="Verdana" SIZE="1"><font color="#FFFFFF">. Pour en savoir plus, référez-vous à la section : « Les Ovedrives-Auron ». En quittant
    Macalania Woods, vous verrez une Travel Agency. Fouillez bien les alentours de l’auberge, vous y trouverez l’<b>Al Bhed Primer vol. XVI</b> et <b>4 000gil</b>. Avant de continuer votre voyage, assurez-vous de sauvegarder votre partie.</font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><font color="#FF0000">Boss : Crawler</font></b><font color="#FF0000"><br />
        </font><font color="#FFFFFF">HP : 16 000<br />
          AP : 4 400<br />
          Point faible : Lightning<br />
          Absorbe : Aucun<br />
          Immunité : Aucun<br />
          Dommage réduit de moitié : Aucun<br />
          Objet à voler : Lunar Curtain<br />
          <br />
          </font> </font> <b><font face="Verdana" size="1" color="#ff0000">Boss : Negator</font></b><font face="Verdana" size="1" color="#ff0000"><br />
            </font><font color="#FFFFFF" face="Verdana" size="1">HP : 1 000<br />
              AP : 220<br />
              Point faible : Aucun<br />
              Absorbe : Aucun<br />
              Immunité : Aucun<br />
              Dommage réduit de moitié : Aucun<br />
              Objet à voler</font><font FACE="Verdana" SIZE="1"> <font color="#FFFFFF"> : Hi-potion<br />
                <br />
                Premièrement, détruisez l’objet volant, le Negator. Vous ne serez capable d’utiliser aucune magie ou vos aeons aussi longtemps qu’il sera là. Pendant que Wakka s’attaque au
                Negator, envoyez Tidus, Auron ou Kimahri attaquer la Crawler. Après avoir détruit le
                Negator, vous pourrez utiliser votre magie et vos aeons.
                Cependant, un compte à rebours sera déclenché pour lancer une attaque surpuissante, Mana
                Beam. Si vous n’êtes pas en mesure de vous défaire de la Crawler avant la fin du compte à rebours, il est conseillé d’invoquer l’un de vos aeons et d’utiliser avec celui-ci la commande
                Shield. Cette manœuvre évitera à votre
                équipe de subir de grands dommages.</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font color="#FFFFFF">En entrant dans le temple, parlez à Tromell, il vous offrira un <b>Shell Targe</b>. Accédez au Cloister of Trials quand vous serez près.</font></p>
  <p align="center">&nbsp;</p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><font color="#FF0000">Boss : Seymour</font></b><font color="#FF0000"><br />
        </font><font color="#FFFFFF">HP : 6 000<br />
          AP : 2 000<br />
          Point faible : Aucun<br />
          Absorbe : Aucun<br />
          Immunité : Aucun<br />
          Dommage réduit de moitié : Aucun<br />
          Objet à voler : Turbo Ether<br />
          <br />
          </font><font color="#FF0000"> <b>Boss : Guado Guardians (2)</b><br />
            </font><font color="#FFFFFF">HP : 2 000<br />
              AP : 290<br />
              Point faible : Aucun<br />
              Absorbe : Aucun<br />
              Immunité : Aucun<br />
              Dommage réduit de moitié : Aucun<br />
              Objet à voler : Hi-Potion<br />
              <br />
              </font> </font> <b><font face="Verdana" size="1" color="#ff0000">Boss : Anima</font></b><font face="Verdana" size="1" color="#ff0000"><br />
                </font><font color="#FFFFFF" face="Verdana" size="1">HP : 18 000<br />
                  AP : 2 500<br />
                  Point faible : Aucun<br />
                  Absorbe : Aucun<br />
                  Immunité : Aucun<br />
                  Dommage réduit de moitié : Aucun<br />
                  Objet à voler</font><font FACE="Verdana" SIZE="1"> <font color="#FFFFFF"> : Silence Grenade<br />
                    <br />
                    Cet affrontement est très technique, soyez prudent dans les actions que vous poserez. Seymour est protégé par deux gardiens
                    Guado. Ceux-ci possèdent l’habilité Auto-Potion. La manière la plus aisée de vous en défaire est de leur voler leur Potion et de les attaquer directement. Lorsque Seymour aura perdu ses gardes du
                    corps, il fera appel à son aeon, Anima. Faites de même en invoquant Shiva. Son overdrive, Diamond
                    Dust, infligera 9 999HP de dommage à Anima. Aussi, si elle commence à trop faiblir, utilisez Blizzara sur elle-même. Après vous avoir débarrassé d’Anima, renvoyez immédiatement votre
                    aeon, car Seymour a la capacité de
                    les faire disparaître. Pour venir à bout rapidement de votre opposant, utilisez le sort
                    Haste, avec Auron l’habilité Magic Break et finalement avec Lulu le sort Bio.</font></p>
    </blockquote>
  </blockquote>
  </font> <b>
  <p align="justify"><i><u><font color="#FF0000" face="Verdana" size="4">Macalania Temple-Cloister of Trials</font></u></i></p>
  <font FACE="Verdana" SIZE="1">
  <blockquote>
    <blockquote>
      <p align="justify"><font color="#FFFFFF">1.</font> </font> </b> <font FACE="Verdana" SIZE="1"> <font color="#FFFFFF"> Descendez la rampe et prenez la <b>Glyph Sphere</b> sur le pilier principal.<br />
        <b>2.</b> Insérez la Glyph Sphere dans le piédestal et poussez-le sur le stalagmite. Poussez-le à nouveau en direction du mur.<br />
        <b>3.</b> Descendez au niveau inférieur et reprenez la Glyph Sphere sur le piédestal. Insérez-la dans la slot qui sera la plus à votre gauche.<br />
        <b>4.</b> Remontez en haut afin de récupérer la <b>Macalania Sphere</b>. Retournez en bas et placez celle-ci sur le piédestal. Finalement, poussez-la vers la droite, en direction du pilier segmenté.<br />
        <b>5.</b> Retournez au niveau supérieur et récupérez la Macalania Sphere à l’est (sur le mur) de cette pièce. Descendez au niveau le plus bas et placez celle-ci dans le pilier à votre gauche.<br />
        <b>6.</b> Prenez la dernière Macalania Sphere, proche de la rampe, et placez-la dans le pilier central.<br />
        <b>7.</b> Avant de traverser le pont de glace, marchez sur l’interrupteur à votre droite. Le piédestal apparaîtra à votre gauche, tandis qu’une partie du couloir de glace disparaîtra. Poussez celui-ci et descendez la rampe. Appuyez ensuite sur l’interrupteur proche du pilier central.<br />
        <b>8.</b> Ensuite, récupérez la Macalania Sphere du pilier central et placez-la dans la slot proche de la rampe. Prenez la <b>Destruction Sphere</b> sur le piédestal et allez à l’étage le plus bas. Insérez celle-ci dans la slot à votre gauche. Un coffre contenant une <b>Luck Sphere</b> vous sera révélée.<br />
        <b>9.</b> Il ne vous reste plus qu’à faire réapparaître à nouveau le tunnel de glace en suivant les étapes décrites précédemment.</font></p>
    </blockquote>
  </blockquote>
  <p align="center">&nbsp;</p>
  <p align="justify"><font color="#FFFFFF">Pendant votre fuite, vous serez poursuivi par les gardes Guado jusqu’à la sortie de Lake
    Macalania. Avant de pouvoir réussir à semer vos opposants, vous serez pris au piège.</font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><font color="#FF0000">Boss : Wendigo</font></b><font color="#FF0000"><br />
        </font><font color="#FFFFFF">HP : 18 000<br />
          AP : 2 000<br />
          Point faible : Fire<br />
          Absorbe : Aucun<br />
          Immunité : Aucun<br />
          Dommage réduit de moitié : Aucun<br />
          Objet à voler : Hi-Potion<br />
          <br />
          </font> </font> <b><font face="Verdana" size="1" color="#ff0000">Boss : Guado Guardians (2)</font></b><font face="Verdana" size="1" color="#ff0000"><br />
            </font><font color="#FFFFFF" face="Verdana" size="1">HP : 1 200<br />
              AP : 290<br />
              Point faible : Aucun<br />
              Absorbe : Aucun<br />
              Immunité : Aucun<br />
              Dommage réduit de moitié : Aucun<br />
              Objet à voler</font><font FACE="Verdana" SIZE="1"> <font color="#FFFFFF"> : Hi-Potion<br />
                <br />
                Ce combat est facile à gagner. Avec Lulu, utilisez la magie Fire, avec Wakke l’habilité Sleep Attack et finalement avec Auron l’habilité Power Break. Lorsque Wendigo devient
                Berserk, vous pourrez l’annuler en employant Treaten.</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font color="#FFFFFF">Dans votre fuite, vous tomberez dans une crevasse. Pas besoin de vous dire de sauvegarder votre partie. Après avoir parlé avec Yuna, discutez avec les autres membres de votre équipe. Il y a un coffre partiellement caché derrière Kimahri contenant une <b>Lv.2 Key Sphere</b>.</font> </font> <font face="Verdana" size="1" color="#FFFFFF"> Tidus se réveille sur une petite Oasis, en plein milieu d’un vaste désert. En explorant, vous retrouverez au fur à mesure vos coéquipiers. Vous ferez la rencontre d’un énorme charognard,
    Zu, qui pourra vous poser quelques problèmes. Servez-vous de la compétence Power Break avec Auron, et avec Wakka
    employez l’habilité Dark Attack (ou Dark Buster). Une arme avec la capacité DarkTouch sera très utile. Tout ceci vous évitera de subir ses attaques dévastatrices. Aussi, vous retrouverez des monstres qui vous seront familiers, les
    Cactuar. Sans les aeons de Yuna, ceux-ci risquent d’être difficiles à vaincre. Faites
    attention à leurs attaques 10 000 Needels. Les divers coffres que l’on retrouve dans Sanubia Desert sont éparpillés un peu partout. Si vous avez une armure avec la compétence
    No-Encounter, vous vous éviterez de nombreux combats, et vous vous faciliterez grandement la vie. Durant l’absence de
    Yuna, Rikku sera la personne la plus apte à
    régénérer l’HP de votre équipe en utilisant les Al Bhed Potion pendant les combats. Rendu à la sphère de sauvegarde dans Sanubia
    Desert-Central, vous aurez le choix entre aller à gauche ou à droite. Les monstres les plus faciles se trouvent à votre droite, tandis que les plus puissants sont à votre gauche ainsi que plusieurs excellents items. Complètement au Nord, dans chacune des
    directions se trouve un livre Al Bhed, soit l’<b>Al Bhed Primer vol XVII</b> et l’<b>Al Bhed Primer vol XVIII</b>. Vous verrez une fois rendu dans Sanubia Desert-West une immense tempête de sable et une étrange pierre au Nord-Est. Pour en connaître davantage sur cette sous-quête, référez-vous à la section « Le village des Pampa ». En vous dirigeant vers le Nord, vous trouverez à l’Ouest une série de coffres. L’un
    d’entre eux contient <b>Mercury Crest</b>. Continuez vers le Nord pour vous rendre à votre prochaine destination. </font> <font FACE="Verdana" SIZE="1"> <font color="#FFFFFF">En arrivant à Home, dirigez-vous vers le Nord-Ouest où vous trouverez dans un coffre l’<b>Al Bhed Primer vol. XIX</b>. Durant votre exploration, vous serez assailli à un certain moment par un Guado Guardian et un Dual
      Horns. Après cette bataille, revenez légèrement sur vos pas, vous devriez apercevoir
      une pièce à votre gauche. Dans cette salle se trouve l’<b>Al Bhed Primer vol. XX</b>, ainsi que deux coffres. Pour ouvrir ceux-ci, vous devrez résoudre une énigme dans la langue Al
      Bhed.</font></p>
  <blockquote>
    <blockquote> <i>
      <p align="justify"><font color="#FFFFFF">Première Énigme</font></i> <font color="#FFFFFF"> : <b>Friend Sphere</b> et un item de votre choix<br />
        1. Sorry<br />
        2. Wait<br />
        3. Pardon</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font color="#FFFFFF">Durant votre progression, vous arriverez à une intersection divisée en trois branches, juste un peu avant une sphère de sauvegarde. En prenant le couloir à votre extrême droite, vous trouverez au fond de celui-ci l’<b>Al Bhed Primer vol. XXI </b>. Après avoir acquis ce volume, entrez dans la pièce qui
    se trouve à votre droite. À l’intérieur de celle-ci se cache deux coffres qui pour être ouverts, nécessiteront la résolution d’énigmes.</font></p>
  <blockquote>
    <blockquote> <i>
      <p align="justify"><font color="#FFFFFF">Deuxième Énigme</font></i> <font color="#FFFFFF"> : <b>Special Sphere</b><br />
        1. Additionnez les deux nombres.<br />
        2. Soustraire le second nombre du premier nombre<br />
        3. Multipliez le premier nombre par le second nombre<br />
        4. Additionnez les deux nombres<br />
        <br />
        <i>Troisième Énigme</i> : <b>Skill Sphere</b><br />
        1. Troisième réponse<br />
        2. Quatrième réponse<br />
        3. Deuxième réponse<br />
        4. Première réponse</font></p>
    </blockquote>
  </blockquote>
  <p align="center">&nbsp;</p>
  <p align="justify"><font color="#FFFFFF">Avant d’entrer dans le « Sanctuaire des Summoners », n’oubliez pas la <b>Lv.2 Key Sphere</b> et la <b>Lv.4 Key Sphere </b>. À l’intérieur du sanctuaire se trouve un coffre contenant <b>10 000gil</b>. Maintenant, il ne vous reste plus qu’à fuir ces lieux le plus vite possible. Let’s Rock!!!</font> <font color="#FFFFFF">Quittez le pont et parlez à tous vos coéquipiers. Lors de votre exploration du
    Airship, vous retrouverez Dona que vous aurez à réconforter. Ensuite, retournez sur le pont et parlez avec le pilote. Vous apprendrez la position où est retenue prisonnière
    Yuna. Il ne vous reste plus qu’à faire face au
    gardien de Bevelle.</font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><font color="#FF0000">Boss : Evrae</font></b><font color="#FF0000"><br />
        </font> </font> <font face="Verdana" size="1" color="#ff0000">HP : 32 000<br />
          AP : 5 400<br />
          Point faible : Aucun<br />
          Absorbe : Aucun<br />
          Immunité : Aucun<br />
          Dommage réduit de moitié : Fire; Lightning; Water; Ice<br />
          Objet à voler</font><font FACE="Verdana" SIZE="1"> <font color="#FFFFFF"> : Water Gem<br />
            <br />
            Commencez par lancer Slow avec Tidus sur votre opposant, puis Haste sur votre équipe. Utilisez la Trigger Command avec Tidus ou Rikku pour être en mesure de frapper
            Evrae. Pour ce combat, oubliez toutes attaques magiques, cependant faites intervenir Lulu au moins une fois dans le combat afin qu’elle obtienne de l’expérience.
            Gardez Rikku à votre disposition pour qu’elle puisse vous régénérer avec les Al Bhed Potion. Si Evrae vous attaque avec Poison
            Breath, utilisez une Al bhed Potion afin de rétablir rapidement votre statut.</font></p>
    </blockquote>
  </blockquote>
  <p align="center">&nbsp;</p>
  </font>
  <p align="center">&nbsp; </p>
  <font FACE="Verdana" SIZE="1">
  <p align="justify"><font color="#FFFFFF">Après votre débarquement spectaculaire, vous devrez vous frayer un passage à travers les lignes ennemies. Durant l’assaut, vous affronterez des YKT-63. Profitez-en pour utiliser l’habilité Lancet avec Kimahri afin d’apprendre l’overdrive </font> </font><font color="#FFFFFF"><b><font face="Verdana" size="1" color="#0000ff">Spin
    Kick</font></b></font><font FACE="Verdana" SIZE="1"><font color="#FFFFFF">. Par la suite, vous vous échapperez de
      Bevelle. Lorsque vous aurez descendu un escalier circulaire, vous trouverez sur le plancher l’<b>Al Bhed Primer vol. XXII</b>.</font></p>
  </font>
  <p align="justify"><b><i><u><font color="#FF0000" face="Verdana" size="4">Bevelle Temple-Cloister of Trials</font></u></i></b></p>
  <font FACE="Verdana" SIZE="1">
  <p align="justify"><font color="#FFFFFF">Le Cloister of Trials du Temple de Bevelle est atypique des autres temples que vous avez explorés jusqu’ici. En fait, vous vous déplacerez sur une plate-forme en glissant à travers un labyrinthe de couloirs.</font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><font color="#FFFFFF">1.</font></b> <font color="#FFFFFF"> Dès votre départ, vous approcherez du premier hiéroglyphe. Lorsque la flèche sur l’hiéroglyphe pointera vers la droite, appuyez sur le bouton X. Suivez le chemin jusqu’au bout.<br />
        <b>2.</b> Prenez la <b>Bevelle Sphere</b> et insérez-la sur le piédestal. Repoussez le piédestal sur la route et dirigez-vous au niveau le plus élevé.<br />
        <b>3.</b> Rendu au sommet du labyrinthe, utilisez l’hiéroglyphe pour aller vers la droite. À l’hiéroglyphe suivant, tournez encore vers la droite. Prenez une des Bevelle Sphere sur le piédestal et insérez-la dans la slot. Ensuite, repoussez le piédestal sur le chemin.<br />
        <b>4.</b> À la fin du couloir, utilisez l’hiéroglyphe pour faire une rotation de 180 degrés. Ensuite, utilisez l’hiéroglyphe du milieu pour tourner vers la droite. Enlevez la Bevelle Sphere de la slot et placez-la dans le piédestal.<br />
        <b>5.</b> En reprenant la plate-forme, continuez jusqu’au fond du couloir afin de revenir au début de celui-ci. Au premier hiéroglyphe, tournez à droite afin de descendre au niveau inférieur. À l’intersection, tournez à gauche pour aller vers la fin du couloir et tournez à droite au deuxième hiéroglyphe. Prenez l’une
        des Bevelle Sphere du piédestal et placez-la dans la slot à votre gauche. Ceci ouvrira un passage vers une slot avec un hiéroglyphe violet.<br />
        <b>6.</b> Prenez le chemin inférieur et à l’avant-dernier hiéroglyphe tournez vers la droite. Arrivez au fond du couloir, prenez la <b>Glyph Sphere</b> et insérez-la dans le piédestal.<br />
        <b>7.</b> Retournez à l’hiéroglyphe violet et insérez-y la Glyph Sphere. Vous obtiendrez la <b>Destruction Sphere</b>.<br />
        <b>8.</b> En reprenant la plate-forme, allez jusqu’au fond du couloir afin de revenir au début de celui-ci. Prenez la direction de l’avant dernier hiéroglyphe et tournez encore à votre droite. Insérez la Destruction Sphere dans la slot où vous aviez obtenu précédemment la Glyph
        Sphere. Ceci ouvrira un nouveau passage.<br />
        <b>9.</b> Ramenez la plate-forme au dernier hiéroglyphe, au niveau inférieur, et tournez à votre droite. Reprenez la Bevelle Sphere que vous aviez placée antérieurement et mettez-la sur le piédestal. </font> </font><font color="#FFFFFF"><b><font face="Verdana" size="1" color="#ff0000">ATTENTION</font></b></font><font FACE="Verdana" SIZE="1"> <font color="#FFFFFF"> : Si vous n’avez
          pas les deux Bevelle Sphere à ce moment, vous manquerez un excellent item.<br />
          <b>10.</b> Retournez à la plate-forme et allez jusqu’à la fin du couloir afin de vous retrouver au début de celui-ci. Au second hiéroglyphe, tournez à droite. Ensuite, poussez le piédestal pour accéder à un nouveau passage.<br />
          <b>11.</b> Après avoir gravi les escaliers, un coffre contenant une <b>HP Sphere</b> se trouve à votre droite. Une fois l’item obtenu, le coffre disparaîtra, vous révélant un interrupteur sur le plancher. En l’activant, le piédestal sera téléporté en haut des escaliers.<br />
          <b>12.</b> Prenez l’une des Bevelle Sphere du piédestal et placez-la dans la slot afin d’ouvrir le chemin à votre gauche. Par la suite, poussez le piédestal vers la gauche. Vous recevrez <b>Knight Lance</b>. Vous avez finalement complété ce temple. :-)</font></p>
    </blockquote>
  </blockquote>
  <p align="center">&nbsp;</p>
  <p align="justify"><font color="#FFFFFF">En quittant le temple, vous serez fait prisonnier et votre équipe sera divisée en deux. Dans un premier temps, vous contrôlerez uniquement
    Yuna. N’ayez aucune crainte, car maintenant le légendaire Bahamut sera à vos côtés. Dans ce mini-labyrinthe, vous devrez retrouver Lulu, Kimahri et Auron. Prenez
    le temps de visiter ces lieux, puisque vous n’y aurez plus accès ultérieurement. À la fin du Via
    Purifica, vous serez confronté à Isaaru et à trois de ses aeons.</font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><font color="#FF0000">Boss : Isaaru/3 aeons</font></b><font color="#FFFFFF"><br />
        </font> </font><font face="Verdana" size="1" color="#ff0000">HP : Grothia (Ifrit)-8 000; Pterya (Valefor)-12 000; Spathi (Bahamut)-20 000<br />
          AP : 6 000<br />
          Point faible : Uniquement Ice pour Grothia<br />
          Absorbe : Uniquement Fire pour Grothia<br />
          Immunité : Aucun<br />
          Dommage réduit de moitié : Aucun<br />
          Objet à voler</font><font FACE="Verdana" SIZE="1"> <font color="#FFFFFF"> : Aucun<br />
            <br />
            Premièrement, Isaaru fera appel à Ifrit. Invoquez Bahamut afin d’en faire qu’une bouchée. Ensuite, Isaaru invoquera
            Valefor. Cette fois-ci, utilisez Shiva ou Ixion pour vous défaire de celui-ci. N’oubliez pas que vous pouvez vous régénérer en utilisant la magie qui est propre à leur élément. Si votre adversaire
            se prépare à utiliser son overdrive, employez la capacité Shield. Finalement, Isaaru fera appel à
            Bahamut. Continuez avec le même aeon pour le vaincre.</font></p>
    </blockquote>
  </blockquote>
  <p align="center">&nbsp;</p>
  <p align="justify"><font color="#FFFFFF">Tidus, Wakka et Rikku se retrouveront dans un canal d’eau souterrain. Plusieurs monstres que vous affronterez ont une armure résistante. Si vous le pouvez, équipez-vous avec des armes ayant l’habilité
    Piercing. Vous n’aurez pas long à faire avant d’être confronté à un ennemi de taille.</font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><font color="#FF0000">Boss : Evrae Altana</font></b><font color="#FFFFFF"><br />
        </font> </font><font face="Verdana" size="1" color="#ff0000">HP : 16 384<br />
          AP : 5 800<br />
          Point faible : Cure Magic<br />
          Absorbe : Aucun<br />
          Immunité : Aucun<br />
          Dommage réduit de moitié : Aucun<br />
          Objet à voler</font><font FACE="Verdana" SIZE="1"> <font color="#FFFFFF"> : Water Gem<br />
            <br />
            Pour vaincre ce boss, deux possibilités vous seront offertes. La première possibilité consiste à fuir Evrae en utilisant la Trigger Command jusqu’à ce que vous le preniez au piège. Une fois fait, vous n’aurez qu’à l’achever. Cependant, cette option vous fera manquer deux items. La deuxième possibilité consiste
            à utiliser des Phoenix Down sur votre adversaire. Deux ou trois Phoenix Down viendront à bout d’Evrae. Avec cette dernière méthode, vous pourrez collecter l’<b>Avenger</b> et le <b>Rematch</b>. Ceux-ci se trouvent éparpillés dans le tunnel.</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font color="#FFFFFF">Finalement, votre équipe sera réunie à nouveau. Préparez-vous à faire face à un revenant…</font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><font color="#FF0000">Boss : Seymour/Mortibody</font></b><font color="#FFFFFF"><br />
        </font> </font><font face="Verdana" size="1" color="#ff0000">HP : Seymour-36 000; Mortibody-4 000<br />
          AP : 6 300<br />
          Point faible : Aucun<br />
          Absorbe : Aucun<br />
          Immunité : Aucun<br />
          Dommage réduit de moitié : Aucun<br />
          Objet à voler</font><font FACE="Verdana" SIZE="1"> <font color="#FFFFFF"> : Seymour-Tetra
            Elemental; Mortibody-Aucun<br />
            <br />
            Durant ce combat, vous pourrez utiliser la Trigger Command de Tidus, Yuna et Auron afin de booster leurs attributs. N’invoquez aucun
            aeon, car Seymour a la capacité de les renvoyer. En attaquant directement Seymour, vous ferez un bien mauvais choix. En effet, lorsque vous l’attaquez, celui-ci contre-attaque avec soit
            plusieurs magies, soit avec Flare ou soit en pétrifiant l’un de vos coéquipiers. L’astuce consiste à attaquer
            Mortibody. Quand son HP devient trop bas, il draine de l’énergie à Seymour. Cependant, il peut aussi utiliser Cura pour régénérer Seymour. Si vous possédez le sort
            Reflect, lancez-le sur Seymour afin d’empêcher
            Mortibody de le guérir.</font></p>
    </blockquote>
  </blockquote>
  <p align="center">&nbsp;</p>
  </font>
  <p align="center">&nbsp; </p>
  <font FACE="Verdana" SIZE="1">
  <p align="justify"><font color="#FFFFFF">Après votre fuite de Bevelle, vous vous retrouverez à Macalania
    Woods. Avant de quitter cette région, vous pourrez découvrir une autre <b>Jecht’s Sphere</b>. Celle-ci se trouve juste avant d’entrer dans Calm Lands du côté gauche du sentier.</font> </font> <font face="Verdana" size="1" color="#FFFFFF"> Calm Lands est une vaste plaine, où vous aurez de multiples choses à accomplir. Vous retrouverez Maechen qui vous fera un bref historique de cette région. Durant votre exploration, prenez le temps d’arrêter à la Travel Agency afin de prendre connaissance des dernières nouvelles. Aussi, au nord-est de
      ces lieux, dans une légère cuve circulaire, vous rencontrerez à nouveau
      Belgemine. Un duel d’invocatrice sera de mise. Votre adversaire fera appel à la reine de la glace, Shiva. Deux possibilités s’offrent à vous, soit faire appel à
      Ifrit, ou bien, invoquer Bahamut. Faites attention à votre choix, car Shiva est très
      difficile à attaquer physiquement. Vous devrez utiliser des attaques spéciales, la magie ainsi que les overdrives pour en venir à bout facilement. En défaisant
      Belgemine, vous recevrez trois <b>Power Sphere</b> et <b>Aeon’s Soul</b>. Ce dernier item permet d’augmenter les attributs de vos
      aeons. Complètement au
      nord-ouest de Calm Lands se trouve près de la falaise l’<b>Al Bhed Primer vol. XXIII</b>. </font> <font face="Verdana" size="1"> Vous aurez de multiples sous-quêtes à compléter dans cette région.<br />
        Premièrement, vous pourrez entraîner un Chocobo. Vous trouverez l’entraîneuse de Chocobo lors de votre première visite au Nord-Ouest, sur le rebord du canyon. Référez-vous à la section « Les Chocobos » pour en connaître davantage. Deuxièmement, à l’est de Calm Lands se trouve la Monster Arena où vous pourrez
        affronter les divers monstres de Spira. La section « Arène des Monstres » sera en mesure de vous détailler cette sous-quête.<br />
        Troisièmement, par l’intermédiaire de Calm Lands, vous pourrez accéder à une région secrète, </font><font color="#FFFFFF"><b><font face="Verdana" size="1" color="#007f00">Remiem Temple</font></b><font face="Verdana" size="1">. Pour accéder à ce temple, vous aurez besoin d’un Chocobo. À l’entrée de ces plaines, vous verrez à votre
          droite les ruines d’un ancien pont. Juste à côté de celles-ci se trouve sur le sol une plume jaune, qui vous permet à l’aide de votre ami ailé d’accéder à une plate-forme rocheuse. À Remiem Temple, vous pourrez obtenir l’aeon The Magus Sister ainsi que le Cloudy Mirror, item nécessaire à la conception des armes
          légendaires. Référez-vous respectivement aux sections suivantes pour en connaître davantage : « Aeons » et « Armes légendaires ». Aussi, il s’y trouve l’<b>Al Bhed Primer vol. XXIV</b>. </font></font> <font FACE="Verdana" SIZE="1"><font color="#FFFFFF">Quand vous serez près à quitter Calm Lands, la sortie est au Nord-Est.</font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><font color="#FF0000">Boss : Defender X</font></b><font color="#FFFFFF"><br />
        </font> </font><font face="Verdana" size="1" color="#ff0000">HP : 64 000<br />
          AP : 6 660<br />
          Point faible : Aucun<br />
          Absorbe : Aucun<br />
          Immunité : Aucun<br />
          Dommage réduit de moitié : Aucun<br />
          Objet à voler</font><font FACE="Verdana" SIZE="1"> <font color="#FFFFFF"> : Lunar Curtain<br />
            <br />
            Cet adversaire n’a pas réellement de point faible. Au début du combat, utilisez Haste et avec Auron employez l’habilité Armor Break ainsi que Mental Break. Les attaques Darkness vous éviteront de grandes blessures. Évitez d’invoquer des aeons, Defender X vous les massacrera.</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font color="#FFFFFF">Vous verrez une route passant sous le pont. Celle-ci vous mènera dans une partie du canyon. Vous y trouverez la <b>Rusty Sword</b>, item nécessaire à la conception de l’arme légendaire d’Auron (voir section « Armes légendaires »). Aussi, vous y découvrirez The Cavern of the Stolen Fayth où se
    terre l’aeon Yojimbo (voir section « Aeons »). De plus, c’est dans cette caverne que vous trouverez l’<b>Al Bhed Primer vol. XXV</b>.</font> <font color="#FFFFFF">Après que Yuna est obtenue la permission de Kelk pour accéder au Mt. Gagazet, parlez avec les autres Ronso et sauvegardez votre partie.</font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><font color="#FF0000">Boss : Biran</font></b><font color="#FFFFFF"><br />
        </font> </font> <font color="#FFFFFF">HP : 2 500 (peu varier)<br />
          AP : 4 500<br />
          Point faible : Aucun<br />
          Absorbe : Aucun<br />
          Immunité : Aucun<br />
          Dommage réduit de moitié : Aucun<br />
          Objet à voler : Lv.3 Key Sphere<br />
          <br />
          </font> <b><font face="Verdana" size="1" color="#ff0000">Boss : Yenke</font></b><font color="#FFFFFF"><font face="Verdana" size="1" color="#ff0000"><br />
            HP : 2 500 (peu varier)<br />
            AP : 4 500<br />
            Point faible : Aucun<br />
            Absorbe : Aucun<br />
            Immunité : Aucun<br />
            Dommage réduit de moitié : Aucun<br />
            Objet à voler : Lv.3 Key Sphere<br />
            <br />
            Le combat de Ronso mettra vos talents à rude épreuve. Lorsqu’un des Ronso tombera au combat, l’adversaire restant se mettra Berserk et infligera des dommages deux fois plus grand qu’auparavant. Si Kimahri voit sa jauge d’overdrive remplit, utilisez l’habilité Mighty Guard. Ce combat est le meilleur moment pour
            compléter les overdrives de votre compagnon. Durant l’affrontement, vous pourrez apprendre </font><b><font face="Verdana" size="1" color="#0000ff">Fire Breath, Aqua Breath, Trust Kick, Mighty Guard, Doom, Stone Breath, Self-Destruct</font></b><font face="Verdana" size="1"> ou </font><b><font face="Verdana" size="1" color="#0000ff">White
              Wind</font></b></font><font FACE="Verdana" SIZE="1"><font color="#FFFFFF">. Quand Biran ou Yenke emploie une technique, utilisez Lancet à votre tour pour apprendre celle-ci.</font></p>
    </blockquote>
  </blockquote>
  <p align="center">&nbsp;</p>
  <p align="justify"><font color="#FFFFFF">Après le combat, prenez le temps de sauvegarder votre partie, car le Mt. Gagazet est rempli de monstres redoutables. Fouillez chaque recoins de cette région si vous voulez ne rien oublier. D’ailleurs, vous trouverez au fond d’un petit sentier tortueux la <b>Braska’s Sphere</b>.</font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><font color="#FF0000">Boss : Seymour Flux/Mortiorchis</font></b><font color="#FFFFFF"><br />
        </font> </font><font face="Verdana" size="1" color="#ff0000">HP : Seymour Flux-70 000; Mortiorchis-4 000<br />
          AP : 10 000<br />
          Point faible : Aucun<br />
          Absorbe : Aucun<br />
          Immunité : Aucun<br />
          Dommage réduit de moitié : Aucun<br />
          Objet à voler</font><font FACE="Verdana" SIZE="1"> <font color="#FFFFFF"> : Elixir<br />
            <br />
            À moins d’avoir des personnages booster, préparez-vous à l’une des batailles les plus difficiles du jeu. Tidus, Yuna et Kimahri pourront utiliser leur Trigger Command, ceci augmentera leurs attributs. Utilisez Hastega avec Tidus et avec Yuna lancez le sort Protect sur tous vos coéquipiers. Les attaques de Seymour sont
            surpuissantes. Votre adversaire vous attaquera avec Lance Atrophy (Zombie), puis par la suite avec Full-Life afin d’éliminer l’un de vos personnages. Entre ces deux attaques, vous n’aurez qu’un tour pour réagir. Tentez de lancer le sort Silence et le sort Bio sur votre adversaire, la chance sera peut-être avec vous.
            Lorsque Mortiorchis commencera à se charger pour l’attaque Total Annihilation, vous aurez deux ou trois tours pour réagir. Attaquez au moins une fois votre opposant pour l’affaiblir, mais aussi retarder son attaque. Aussi, régénérez au maximum vos coéquipiers. Après cette attaque, Seymour commencera à vous attaquer
            avec la magie Flare. Si vous survivez à Total Annihilation ;-D, utilisez rapidement une Mega-Potion. Si vous souhaitez invoquer un aeon, vous n’aurez qu’un tour pour agir, avant quoi Seymour le renverra.</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font color="#FFFFFF">Après cet affrontement, vous arriverez aux cavernes du Mt. Gagazet. À partir de maintenant les monstres seront particulièrement plus coriaces. Utilisez vote intelligence :-) et les points faibles de ceux-ci pour en venir aisément à bout. Dirigez-vous vers les tunnels souterrains immergés sous l’eau. Au
    fond de ceux-ci, vous découvrirez un étrange système qui devra être activé. Revenez sur vos pas, la salle où il y a la Save Sphere. Il y aura un nouveau passage auquel vous aurez accès. Vous devrez y résoudre une énigme. Chaque couleur correspond à la couleur du Sphere Grid de l’un de vos personnages (Tidus-Bleu;
    Wakka-Orange~Rouge; Rikku-Vert).</font> <font color="#FFFFFF">En passant cette épreuve, vous débloquerez un coffre contenant une <b>Fortune Sphere</b>. Revenez sur vos pas, où se trouve la Save Sphere. Plusieurs nouveaux passages se sont ouverts à cet endroit. En cherchant bien, vous trouverez de nombreux items. En quittant ces cavernes, vous ferez face au protecteur
      de ces lieux.</font></p>
  <p align="center">&nbsp;</p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><font color="#FF0000">Boss : Sanctuary Keeper</font></b><font color="#FFFFFF"><br />
        </font> </font> <font face="Verdana" size="1" color="#ff0000">HP : 40 000<br />
          AP : 11 000<br />
          Point faible : Aucun<br />
          Absorbe : Aucun<br />
          Immunité : Aucun<br />
          Dommage réduit de moitié : Aucun<br />
          Objet à voler</font><font FACE="Verdana" SIZE="1"> <font color="#FFFFFF"> : Turbo Ether<br />
            <br />
            En commençant le combat, employez le sorts Hastega et Protect. Avec Auron, utilisez Armor Break et Mental Break. Si vous faites appel aux aeons, vous n’aurez qu’un tour pour poser une action, car votre adversaire utilisera Mana Beam pour les éliminer. Vers le milieu du combat, Sanctuary Keeper tentera de se régénérer
            avec Curaga. Lancez Reflect sur celui-ci afin de contrer cette manœuvre.</font></p>
    </blockquote>
  </blockquote>
  <p><font color="#FFFFFF"><br />
  </font></p>
  <p align="center"><font color="#FFFFFF">&nbsp;Après un long voyage, vous arriverez finalement en cette terre bénie. Lorsque vous rentrerez dans le temple de Zanarkand, vous aurez un Cloister of Trial à résoudre. À votre première visite il n’y aura pas de « trésor caché » que vous obteniez normalement avec la <b>Destruction Sphere</b>.
    Cependant, en repassant plus tard, une nouvelle énigme vous sera présentée afin d’obtenir cet item secret. L’obtention de ce « trésor caché » est essentiel pour acquérir l’aeon Anima (voir section « Aeons »).</font></p>
  </font> <b>
  <p align="justify"><i><u><font color="#FF0000" face="Verdana" size="4">Zanarkand Dome-Cloister of Trials</font></u></i></p>
  <font FACE="Verdana" SIZE="1">
  <blockquote>
    <blockquote>
      <p align="justify"><font color="#FFFFFF">1.</font></font></b> <font FACE="Verdana" SIZE="1"> <font color="#FFFFFF"> Marchez sur le carré vert pour activer le casse-tête. La solution de celui-ci sera affichée sur un écran.<br />
        <b>2.</b> Après avoir réussi ce premier casse-tête, une porte s’ouvrira et six piédestaux apparaîtront. Poussez le piédestal au Nord-Oest afin d’actionner la solution de la prochaine énigme.<br />
        <b>3.</b> Entrez dans la grande salle et allez activer l’écran en appuyant sur le bouton X. La solution du casse-tête vous sera affichée sur l’écran. Après avoir complété le casse-tête, un symbole apparaîtra sur l’abîme central.<br />
        <b>4.</b> Répétez l’opération en poussant le piédestal au Sud-Ouest, Nord-Est et Sud-Est.<br />
        <b>5.</b> Après avoir complété les quatre casse-têtes, prenez la <b>Kilika Sphere</b> qui est à gauche de l’écran et retournez dans la première chambre. Insérez-la dans le piédestal à l’ouest de cet endroit.<br />
        <b>6.</b> Retournez à la grande salle et prenez la <b>Besaid Sphere</b>. Insérez-la dans le piédestal restant dans la première chambre.<br />
        <b>7.</b> Cette dernière action activera un élévateur et une <b>Save Sphere</b> apparaîtra. Sauvegardez votre partie, car vous allez affronter un boss fort peu amical.</font></p>
    </blockquote>
  </blockquote>
  <p align="center">&nbsp;</p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><font color="#FF0000">Boss : Spectral Keeper</font></b><font color="#FFFFFF"><br />
        </font></font><font face="Verdana" size="1" color="#ff0000">HP : 52 000<br />
          AP : 12 000<br />
          Point faible : Aucun<br />
          Absorbe : Aucun<br />
          Immunité : Aucun<br />
          Dommage réduit de moitié : Aucun<br />
          Objet à voler</font><font FACE="Verdana" SIZE="1"> <font color="#FFFFFF"> : Ether; Turbo Ether<br />
            <br />
            Avant de commencer le combat, équipez-vous avec des armures ayant la capacité Berserk Ward ou Berserkproof. Dès le début du combat, utilisez le sort Hastega. Déplacez deux personnages derrière Spectral Keeper et laissez-en un ayant l’HP élevé devant celui-ci. Ce personnage servira de distraction lorsqu’il
            contre-attaquera. Son attaque se fait sur trois cercles et elle peut vous infliger Berserk. Aussi, certains hiéroglyphes se mettront à exploser pouvant causer votre mort. Regardez la fenêtre de CTB afin de connaître le moment où ils exploseront et utilisez la Trigger Command pour les éviter. Les aeons ne vous serviront à
            rien à moins d’avoir leurs jauges d’overdrives pleines.</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font color="#FFFFFF">Avant votre rencontre avec Yunalesca, allez sauvegarder votre partie.</font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><font color="#FF0000">Boss : Yunalesca</font></b><font color="#FFFFFF"><br />
        </font> </font><font face="Verdana" size="1" color="#ff0000">HP : Première Forme-24 000; Deuxième Forme-48 000; Troisième Forme-60 000<br />
          AP : 14 000<br />
          Point faible : Aucun<br />
          Absorbe : Aucun<br />
          Immunité : Aucun<br />
          Dommage réduit de moitié : Aucun<br />
          Objet à voler</font><font FACE="Verdana" SIZE="1"> <font color="#FFFFFF"> : Stamina Tablet; Farplane Wind<br />
            <br />
            Avant de débuter l’affrontement, équipez-vous avec des armes ayant la capacité de vous protéger contre le Darkness, le Silence et le Sleep. La première forme de Yunalesca est facile à combattre, n’utilisez aucune attaque puissante. Durant sa seconde forme, Yunalesca vous infligera Zombie et tentera par la suite d’utiliser
            une magie curatrice sur vous. En utilisant rapidement une Holy Water ou une Remedy, vous pourrez contrer son attaque. Profitez-en pour lancer le sort Hastega. La troisième forme est la plus ardue et la plus délicate. À moins que vos personnages soient protégés contre le Death et le Zombie en même temps, vous devrez
            utiliser une astuce pour vaincre cet ennemi. Ainsi, vous devrez avoir un ou deux personnages sous l’effet du Zombie afin de survivre à l’attaque mortelle de Yunalesca, Mega-Death. Hormis vos personnages atteints par Zombie, cette attaque vous tuera instantanément. Si l’un de vos coéquipiers est attaqué avec Regen, en
            utilisant le sort Dispel vous pourrez enlever cette magie régénératrice tout en gardant l’effet du Zombie. Si vous avez des aeons avec leurs jauges d’overdrive remplis, défoulez-vous.</font></p>
    </blockquote>
  </blockquote>
  <p align="center">&nbsp;</p>
  <p align="justify"><font color="#FFFFFF">Après le combat, allez chercher <b>Sun Crest</b> au nord de cette salle.</font></p>
  </font>
  <p align="justify"><b><u><i><font color="#FF0000" face="Verdana" size="4">Une petite pause!!!</font></i></u></b></p>
  <font FACE="Verdana" SIZE="1">
  <p align="justify"><font color="#FFFFFF">Avant d’aller confronter l’ultime mal de Spira, vous pourrez compléter de nombreuses sous-quêtes. Vous pourrez partir à la recherche des armes légendaires, des aeons cachés ou bien visiter les ruines d’Omega. Aussi, en complétant l’Arène des Monstres, vous obtiendrez de nombreux items. Certaines
    de ces sous-quêtes vous prendront de nombreuses heures à compléter. Pour en connaître davantage sur celles-ci, référez-vous à la section « Sous Quêtes ». L’affrontement de Sin vous mènera à l’intérieur d’un mini-monde. Ainsi, si vous désirez commencer à explorer Sin maintenant, vous pourrez revenir plus tard
    pour compléter les divers sous-quêtes.</font> <font color="#FFFFFF">Avant même de vous attaquer à Sin, vous devrez retourner à Bevelle (Highbride) afin de vous entretenir avec Maester Mika. Cet entretien est essentiel si vous voulez débloquer certains lieux de Spira qui sont gardés par l’Institution Yevon. Par exemple, l’accès aux divers temples vous sera redonné
      seulement après votre conversation avec Maester Mika. En retournant visiter ceux-ci, vous pourrez compléter l’acquisition des «trésors cachés» afin de pouvoir obtenir l’aeon Anima (voir section « Aeons »). Aussi, en les visitant de nouveau, vous trouverez dans la «chambre de prières» (Fayth) plusieurs items
      auxquels vous n’aviez accès auparavant.</font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><font color="#FF0000">Boss : Left Fin/Right Fin</font></b><font color="#FFFFFF"><br />
        </font> </font> <font face="Verdana" size="1" color="#ff0000">HP : Left Fin-65 000; Right Fin-65 000<br />
          AP : Left Fin-17 000; Right Fin-16 000<br />
          Point faible : Aucun<br />
          Absorbe : Aucun<br />
          Immunité : Aucun<br />
          Dommage réduit de moitié : Aucun<br />
          Objet à voler</font><font FACE="Verdana" SIZE="1"> <font color="#FFFFFF"> : Left Fin-Mega-Potion, Supreme Gem; Right Fin-X-Potion, Shining Gem<br />
            <br />
            Pour commencer, vous vous attaquerez à l’armure extérieure de Sin. En utilisant la Trigger Command, vous vous approcherez de votre adversaire afin de pouvoir le frapper. Utilisez le sort Hastega et avec Auron employez l’habilité Power Break.</font></p>
      <b>
      <p align="justify"><font color="#FF0000">Boss : Sin/Sinspawn Genais</font></b><font color="#FFFFFF"><br />
        </font> </font><font face="Verdana" size="1" color="#ff0000">HP : Sin-36 000; Genais-20 000<br />
          AP : Sin-18 000; Genais-1 800<br />
          Point faible : Sin-Aucun; Genais-Fire<br />
          Absorbe : Sin-Aucun; Genais-Water<br />
          Immunité : Aucun<br />
          Dommage réduit de moitié : Aucun<br />
          Objet à voler</font><font FACE="Verdana" SIZE="1"> <font color="#FFFFFF"> : Sin-Stamina Spring; Genais-Star Curtain, Shining Gem<br />
            <br />
            Lancez le sort Slow et Silence sur Genais. Aussi, utilisez l’habilité Armor Break avec Auron. Si vous êtes attaqué avec Venom, utilisez une Al Bhed Potion avec Rikku. Les magies Flare, Holy et Ultima vous aideront grandement. Évitez d’utiliser vos overdrives, celles-ci vous serviront dans votre prochain combat.</font></p>
      <b>
      <p align="justify"><font color="#FF0000">Boss : Overdrive Sin</font></b><font color="#FFFFFF"><br />
        </font> </font><font face="Verdana" size="1" color="#ff0000">HP : 140 000<br />
          AP : 20 000<br />
          Point faible : Aucun<br />
          Absorbe : Aucun<br />
          Immunité : Aucun<br />
          Dommage réduit de moitié : Aucun<br />
          Objet à voler</font><font FACE="Verdana" SIZE="1"> <font color="#FFFFFF"> : Ether, Supreme Gem<br />
            <br />
            Cette bataille requiert vitesse et puissance. Si Sin réussit à utiliser son overdrive, Giga-Graviton, vous périrez dans cet affrontement. Les habilités Doublecast, Hastega, Quick Attack, Armor Break et Mental Break vous seront très utiles. En commençant, employez la magie Hastega et lancez vos sorts les plus dévastateurs
            (Flare, Holy, Ultima). Aussi, utilisez toutes les overdrives de vos personnages. Si Sin s’approche dangereusement de vous, faites appel à vos aeons les plus puissants.</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font color="#FFFFFF">Contrairement aux autres régions visitées précédemment, la carte vous sera dévoilée au fur et à mesure de votre exploration. D’excellents items se trouvent en ces lieux, prenez bien le temps de fouiller chaque recoin. Plusieurs monstres que vous aurez à combattre sont coriaces. Prenez note que le
    Behemoth Kings utilise la magie Meteor avant de mourir. Soyez vigilant, car cette attaque peut tuer aisément votre équipe. L’astuce consiste à utiliser le sort Auto-Life vers la fin du combat.</font></p>
  <p align="center">&nbsp;</p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><font color="#FF0000">Boss : Seymour Omnis</font></b><font color="#FFFFFF"><br />
        </font> </font><font face="Verdana" size="1" color="#ff0000">HP : 80 000<br />
          AP : 24 000<br />
          Point faible : Varie<br />
          Absorbe : Varie<br />
          Immunité : Varie<br />
          Dommage réduit de moitié : Aucun<br />
          Objet à voler</font><font FACE="Verdana" SIZE="1"> <font color="#FFFFFF"> : Shining Gem, Supreme Gem<br />
            <br />
            Avant d’affronter ce boss, équipez-vous avec des armures qui absorbent ou annulent les attaques élémental et utilisez des armes qui sont non-élémental. Durant cette bataille, il est important d’employer Armor Break, Mental Break et Nul Spells. Quatre roues se trouvent derrière Seymour, déterminant son type d’élément.
            Il est donc vulnérable au type d’élément opposé. Lorsque quatre orbes de la même couleur sont alignés, avec Lulu, employez Doublecast. Soyez prudent durant le combat, car Seymour peut utiliser le sort Ultima. Aussi, gardez à l’esprit que votre adversaire peut bannir vos aeons en un ou deux tours.</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font color="#FFFFFF">En pénétrant dans la ville fantôme, vous verrez un hiéroglyphe sur un mur. C’est en tuant 30 monstres dans cette région que vous pourrez débloquer cette porte et obtenir une <b>Lv.4 Key Sphere</b>. Lorsque vous serez rendu à la sphère de sauvegarde, prenez garde, le chemin nord vous mènera vers
    votre ultime affrontement.</font></p>
  <p align="justify"><font color="#FFFFFF">Une fois que vous serez entré dans la Tower of Death, vous devrez collecter 10 cristaux. Faites attention pour éviter les pics de cristal, car ceux-ci vous obligeront à combattre des monstres fort peu amicaux.</font></p>
  <blockquote>
    <blockquote> <b>
      <p align="justify"><font color="#FF0000">Boss : Final Aeon</font></b><font color="#FFFFFF"><br />
        </font> </font><font face="Verdana" size="1" color="#ff0000">HP : Première forme-60 000; Deuxième forme-120 000<br />
          AP : 0 (pourquoi???)<br />
          Point faible : Aucun<br />
          Absorbe : Aucun<br />
          Immunité : Aucun<br />
          Dommage réduit de moitié : Aucun<br />
          Objet à voler</font><font FACE="Verdana" SIZE="1"> <font color="#FFFFFF"> : Turbo Ether<br />
            <br />
            Dépendant du niveau de vos personnages, la difficulté de cette bataille variera. Si vous êtes relativement faible, assurez-vous d’avoir le sort Ultima. Bien que les Yu Pagodas tenteront de régénérer le Final Aeon, ne perdez pas votre temps à les détruire. Utilisez Zombie Attack avec Auron sur le boss, ainsi les Yu
            Pagodas blesseront celui-ci lorsqu’ils le régénéreront. Lorsque Tidus parlera au boss, en utilisant la Trigger Commant, sa jauge d’overdrive sera considérablement réduite. Sachez utiliser cet astuce au moment le plus opportun. Lors de la deuxième phase, utilisez le sort Auto-Life et Hastega. Employez vos magies les
            plus dévastatrices (Flare, Holy, Ultima) ainsi que les overdrives de vos aeons les plus puissants. Bon courage !</font></p>
    </blockquote>
  </blockquote>
  </font>
  <p align="center"><b><i><font color="#FF0000" size="4" face="Verdana">Le Calme Éternel</font></i></b></p>
  <p align="justify"><font color="#FFFFFF" size="1" face="Verdana">Le 31 Janvier 2002, Squaresoft sortait au Japon une version améliorée de Final Fantasy X nommée <i>Final Fantasy X International</i>. Outre des améliorations du gameplay, le jeu bénéficiait d'un autre DVD Bonus nommé <i>The Other Side of the Fantasy 2</i> (2 car il y en avait déjà eu un dans la
    première version). Sur ce DVD, on trouvait des bonus mais aussi une vidéo d'une vingtaine de minutes, intitulée <i>Eien no Nagi-setsu</i> en Japonais, soit <i>Eternal Peacetime</i> en Anglais (ou <i>The Eternal Calm</i>), sous-titré <i>Final Fantasy X : Another Story</i>.</font></p>
  <p align="justify"><font color="#FFFFFF" size="1" face="Verdana"><br />
    Cette histoire inédite prend place deux ans après la fin de Final Fantasy X. Malheureusement, cette vidéo n'est pas présente dans Final Fantasy X International en Europe... Voici donc, pour vous consoler, le script entier de l'histoire, ainsi que des images :<br />
  </font></p>
  <p align="center"><b><font face="Verdana" size="4" color="#ff0000"> ATTENTION ! Ne lisez que si vous avez fini FFX </font><font face="Verdana" size="4" color="#FFFFFF"> ! </font></b></p>
  <p align="justify">&nbsp;</p>
  <table cellspacing="0" border="0" cellpadding="1" width="612">
    <tr>
      <td valign="middle" bgcolor="#ffffff"><p><b><font color="#FF0000" size="2" face="Verdana">Scène 1 : La Plage de Besaid</font></b></p></td>
    </tr>
  </table>
  <p align="justify">&nbsp;</p>
  <b><font FACE="Verdana" SIZE="1">
  <p align="justify"><font color="#FFFFFF">Yuna (pense) :</font></font></b><font FACE="Verdana" SIZE="1"> <font color="#FFFFFF"> <i>37, 38, 39, 40, 41...</i><br />
    Yuna sort brutalement de l'eau, le souffle haletant.<br />
  <b>Yuna (pense) :</b> <i>Deux minutes, quarante et une secondes... un nouveau record !</i><br />
    Wakka arrive en courant sur la plage et crie :<br />
  <b>Wakka :</b> Yuna !!<br />
  <b>Yuna :</b> Attend, j'arrive !<br />
    Gros plan sur Wakka. Il croise les bras d'un air satisfait.<br />
  <b>Wakka :</b> Tu réussis à tenir longtemps, maintenant ?<br />
  <b>Yuna (riant) :</b> Oui, mais pas autant que toi !<br />
  <b>Wakka :</b> C'est-à-dire... je me suis plus tellement entraîné ces derniers temps.<br />
  <b>Yuna (blagueuse) :</b> Ça se voit !<br />
    Gêné par la blague, Wakka met sa main sur son front.<br />
  <b>Wakka :</b> Ah ah ah...<br />
  <b>Yuna :</b> On voit bien que c'est pas toi qui va avoir un bébé !</font></p>
  <p align="justify"><font color="#FFFFFF">Wakka se retourne, soupire et court, laissant Yuna seule sur la plage.<br />
    Yuna se retourne vers la plage en pensant.<br />
  <b>Yuna (pense) :</b> <i>Cela fait deux ans déjà... Je peux rester sous l'eau plus de deux minutes maintenant. Ce n'est pas qu'un simple effort physique, il y a des trucs à apprendre. Je ne comprenais pas quand on me l'expliquait, mais après l'avoir pratiqué j'ai compris.</i><br />
  <b>Yuna (pense) :</b> <i>Je n'aurais pensé devoir utiliser ces trucs. Je ne peux pas me permettre de penser à autre chose en même temps...</i><br />
  <b>Yuna (pense) :</b> <i>Le Calme Eternel. Ce sont mes deux minutes et quarante et une secondes et l'estomac grassouillet de Wakka. Ce n'est pas beaucoup. Juste un peu de bonheur paisible...</i><br />
  </font></p>
  </font>
  <table cellspacing="0" border="0" cellpadding="1" width="612">
    <tr>
      <td valign="middle" bgcolor="#ffffff"><p><b><font color="#FF0000" size="2" face="Verdana">Scène 2 : Temple de Besaid</font></b></p></td>
    </tr>
  </table>
  <p align="justify"><font color="#FFFFFF" size="1" face="Verdana">Yuna reste à la porte en regardant autour d'elle avant d'entrer dans le temple sombre. Elle marche jusqu'à voir Wakka discutant avec un homme. Les deux marchent vers elle et l'homme prend la parole.<br />
    <br />
    <b>Tasgio :</b> Je vous ai vu de loin au stade, il y a deux ans de ça... mais je n'aurais jamais pensé vous voir un jour en personne... Vous êtes plus belle que jamais.<br />
    <b>Yuna :</b> Merci.<br />
    <b>Tasgio :</b> J'ai quelque chose à vous demander, à propos de mon petit fils. Il s'est engagé dans l'Alliance des Jeunes.<br />
    <b>Tasgio :</b> Mais, sans vouloir dire que cette Alliance est mauvaise bien entendu... les autres et moi-même sommes du Nouveau Yevon, mon fils et ma belle-fille y compris. Mon petit fils avait aussi l'habitude de venir à nos réunions, mais un jour...</font></p>
  <b><font FACE="Verdana" SIZE="1">
  <p align="justify"><font color="#FFFFFF">Tasgio :</font></font></b><font FACE="Verdana" SIZE="1"> <font color="#FFFFFF"> Vous savez, il y a beaucoup de jeunes dans l'Alliance. Je suis sûr qu'il trouvait ça chouette !<br />
    <b>Yuna (pense) :</b> <i>De nombreux groupes se sont formés sur Spira depuis lors. Comment allons-nous faire pour reconstruire le monde ? Qu'est-ce qu'il va devenir ? Tout le monde cherche sa propre voie.</i><br />
    <b>Tasgio :</b> Je trouve que... mon petit fils et ses compagnons changent trop vite.<br />
    <b>Yuna (pense) :</b> <i>Avec autant de différentes façons de penser, les conflits sont inévitables. Certaines personnes ne sont pas à l'aise à cause de ça. Je le suis aussi, parfois. Mais s'en est assez. C'est ce que je continue à me dire.</i><br />
    <b>Yuna :</b> Je vous comprend, mais essayez de parler avec votre petit fils. Ce qu'il fait peut vous paraître insouciant, mais il est aussi attaché à Spira que vous.<br />
  </font></p>
  </font>
  <table cellspacing="0" border="0" cellpadding="1" width="612">
    <tr>
      <td valign="middle" bgcolor="#ffffff"><p><b><font color="#FF0000" size="2" face="Verdana">Scène 3 : L'île de Besaid</font></b></p></td>
    </tr>
  </table>
  <p align="justify"><font color="#FFFFFF" size="1" face="Verdana">Yuna marche le long d'un chemin. Wakka arrive soudain en courant.<br />
    <br />
    <b>Wakka :</b> Hééé !!<br />
    <b>Yuna :</b> Qui est-ce ? Un visiteur ?<br />
    <b>Wakka :</b> Ouais, tu sais comment c'est... les vieux du village n'arrêtent pas d'en parler...<br />
    <b>Yuna :</b> Qui est-ce cette fois-ci ?<br />
    <b>Wakka :</b> Le fils du chef du Nouveau Yevon.<br />
    <b>Yuna :</b> C'est pas croyable... Il va sûrement finir par m'utiliser.<br />
    <b>Wakka :</b> Ouah... désolé, Yuna.<br />
    <b>Yuna :</b> Je vais refuser.<br />
    <b>Wakka :</b> Pas de problème, j'ai pigé. Enfin, je veux dire, t'as plus envie de les voir, hein ?<br />
    <b>Yuna :</b> ...exact.<br />
    Un homme arrive.<br />
  <b>??? :</b> Mademoiselle Yuna !<br />
  <b>Yeivel :</b> Mademoiselle Yuna ! Je suis Yeivel, de l'Alliance des Jeunes ! Je viens vous donner un message de notre leader, Nurge !</font></p>
  <b><font FACE="Verdana" SIZE="1">
  <p align="justify"><font color="#FFFFFF">Wakka :</font></font></b><font FACE="Verdana" SIZE="1"> <font color="#FFFFFF"> Elle ne rejoindra pas l'Alliance.<br />
    <b>Yeivel :</b> Mais...<br />
    <b>Yuna :</b> C'est pour ça que vous êtes venu ?<br />
    <b>Yeivel :</b> Oui...<br />
    <b>Yuna :</b> Je ne rejoindrai aucun groupe.<br />
    <b>Yeivel :</b> Vous allez former le votre, alors ?<br />
    <b>Yuna :</b> Partez, s'il vous plait.<br />
    Rikku arrive en courant et en criant, à bout de souffle.<br />
  <b>Rikku :</b> Yunie ! Wakka !<br />
    Gros plan sur Rikku.<br />
  </font></p>
  </font>
  <table cellspacing="0" border="0" cellpadding="1" width="612">
    <tr>
      <td valign="middle" bgcolor="#ffffff"><p><b><font color="#FF0000" size="2" face="Verdana">Scène 4 : Navire Al Bhed</font></b></p></td>
    </tr>
  </table>
  <p align="justify">&nbsp;</p>
  <b><font FACE="Verdana" SIZE="1">
  <p align="justify"><font color="#FFFFFF">Yuna (pense) :</font></font></b><font FACE="Verdana" SIZE="1"> <font color="#FFFFFF"> <i>Rikku viens parfois à Besaid. Elle voyage tout autour de Spira afin d'apprendre aux gens à utiliser les vieilles machines sorties du sous-sol ou de la mer... Elle est toujours occupée, mais ça a l'air de lui plaire.</i><br />
    Rikku tape dans le ventre de Wakka.<br />
  <b>Wakka :</b> Mais arrête !<br />
  <b>Rikku :</b> Toujours aussi enveloppé, hein ? Et comment va Lulu ?<br />
  <b>Wakka :</b> Elle est au village. T'iras la saluer plus tard, OK ?<br />
  <b>Rikku :</b> Bien sûr ! Et Yunie, toujours la même ?<br />
  <b>Yuna (souriante) :</b> Oui. Toujours la même.<br />
    Une mouette survole le navire.</font></p>
  </font><b><font FACE="Verdana" SIZE="1">
  <p align="justify"><font color="#FFFFFF">Wakka :</font></font></b><font FACE="Verdana" SIZE="1"> <font color="#FFFFFF"> Kimahri est toujours au Mont Gagazet ?...<br />
    <b>Rikku :</b> Tu parles ! Il apprend plein de trucs aux enfants Ronso, un peu comme un vrai prof !<br />
    <b>Rikku :</b> Ah oui, j'ai quelque chose pour vous, de Kimahri. Il dit qu'il a trouvé ça dans les montagnes.<br />
    <b>Yuna :</b> Une Sphère?<br />
    <b>Wakka :</b> Elle est bizarre.<br />
    Rikku active la Sphère et la tend à Yuna.<br />
  <b>Rikku :</b> Regarde bien, Yunie.<br />
  </font></p>
  </font>
  <table cellspacing="0" border="0" cellpadding="1" width="612">
    <tr>
      <td valign="middle" bgcolor="#ffffff"><p><b><font color="#FF0000" size="2" face="Verdana">Scène 5 : La Sphère</font></b></p></td>
    </tr>
  </table>
  <p align="justify"><font color="#FFFFFF" size="1" face="Verdana">Cette séquence est difficile à voir et à entendre : l'écran est flou et le son est grésillant. La cage semble être sous l'eau, à un endroit indéterminé. On y aperçoit clairement Tidus.<br />
    <br />
    <b>Tidus :</b> Pourquoi vous m'avez arrêté ? Laissez-moi sortir !<br />
    <b>Tidus :</b> Vous m'entendez ?! Vous feriez quoi si c'était un de vos amis ?!<br />
    <b>Tidus :</b> Oui, oui, je sais, j'ai utilisé des machines ennemies ! C'était le seul moyen de sauver l'Invokeur !<br />
    <b>Tidus :</b> Vous auriez fait quoi à ma place ?!<br />
    <b>Tidus :</b> Laissez-moi sortir ! Laissez-moi la voir !<br />
  </font></p>
  <table cellspacing="0" border="0" cellpadding="1" width="612">
    <tr>
      <td valign="middle" bgcolor="#ffffff"><p><b><font color="#FF0000" size="2" face="Verdana">Scène 6 : Navire Al Bhed</font></b></p></td>
    </tr>
  </table>
  <p align="justify"><font color="#FFFFFF" size="1" face="Verdana"><br />
    <b>Yuna (pense) :</b></font> <font size="1" face="Verdana"><i><font color="#FFFFFF">Une voix... Une voix que l'on a enfermée à jamais...</font></font></p>
  </i><b><font FACE="Verdana" SIZE="1">
  <p align="justify"><font color="#FFFFFF">Wakka :</font></font></b><font FACE="Verdana" SIZE="1"> <font color="#FFFFFF"> De quoi ça parle ? Qu'est ce que ça faisait là ? C'est vraiment &quot;lui&quot; ? Qu'est ce que ça veut dire ?<br />
    <b>Rikku :</b> Je sais pas trop... Mais vous voulez le savoir, hein ?<br />
    <b>Wakka :</b> Bah, ouais !<br />
    <b>Yuna :</b> Oui.<br />
    <b>Rikku :</b> Alors allons-y !<br />
    <b>Yuna :</b> Où donc ?<br />
    <b>Rikku :</b> J'en sais rien ! Allons d'abord en parler à Kimahri, ça nous permettra d'y réfléchir, OK ?<br />
    <b>Wakka :</b> Mais on sait rien du tout ! On devrait pas plutôt y penser maintenant ?<br />
    <b>Rikku :</b> Et qui va le trouver pour nous ?<br />
    Yeivel apparaît soudain sur le pont.<br />
  <b>Yeivel :</b> Nous !<br />
  <b>Yeivel :</b> Notre leased Nurge l'acceptera ! Je vais le convaincre !<br />
  <b>Wakka :</b> Fiche le camp !<br />
  <b>Yeivel :</b> Euh... oui... oui monsieur ! Je reviendrais dès que vous aurez trouvé quelque chose !<br />
    Yeivel s'en va en courant.</font></p>
  </font><b><font FACE="Verdana" SIZE="1">
  <p align="justify"><font color="#FFFFFF">Rikku :</font></font></b><font FACE="Verdana" SIZE="1"> <font color="#FFFFFF"> Je pense que Yunie va se débrouiller d'elle-même.<br />
    <b>Wakka :</b> Pas possible.<br />
    <b>Rikku :</b> Pourquoi ?<br />
    <b>Wakka :</b> On a pas arrêté de vouloir la voir, ces derniers temps, et ça n'est pas encore fini.<br />
    <b>Rikku :</b> Mais, et ce qu'elle veut, elle ?<br />
    <b>Wakka :</b> Ben, tu sais... un jour, quand tout ce sera calmé...<br />
    Rikku est furieuse envers Wakka.<br />
  <b>Rikku :</b> Qu'est ce que tu veux dire par là ? Pourquoi &quot;un jour&quot; ? Qu'est ce qui va pas, Wakka ? Yunie travaille dur depuis longtemps, elle devrait savoir s'occuper d'elle tout seule, alors pourquoi ?! Chaque fois que je viens, je pense à tous ceux qui cherchent leur propre bonheur... sauf Yuna.<br />
  <b>Wakka :</b> Ben, c'est...<br />
    Rikku s'approche de Wakka et commence à crier.<br />
  <b>Rikku :</b> Ta tête est aussi lente que ton ventre ?!<br />
  <b>Rikku :</b> Yunie !<br />
  <b>Yuna (pense) :</b> <i>Je... Je veux y aller... Mais... Si je pars, je vais peut-être décevoir des gens.</i><br />
  <b>Yuna :</b> Je...</font></p>
  </font><b><font FACE="Verdana" SIZE="1">
  <p align="justify"><font color="#FFFFFF">Tidus (voix seule) :</font></font></b><font FACE="Verdana" SIZE="1"> <font color="#FFFFFF"> <i>Hé bien... si agir comme un adulte ça veut dire ne pas pouvoir dire ce que tu veux, alors oublie le ! Comme ça, ça va rien changer !</i><br />
    <b>Yuna :</b> J'irai.<br />
    <b>Wakka :</b> Yuna !<br />
    Rikku soupire.<br />
  <b>Yuna :</b> Après tout... c'est <i>mon</i> histoire.<br />
  <b>Rikku :</b> Ah ! Je savais que tu dirais ça, alors j'ai pris des trucs pour toi.<br />
  <b>Wakka :</b> Oh, non...<br />
  <b>Rikku :</b> Avant tout, on va te trouver de nouveaux vêtements ! T'es quand même assez connue, alors vaut mieux te camoufler.<br />
  <b>Wakka :</b> J... Juste une seconde, d'accord ? Je vais chercher Lou.<br />
  <b>Yuna (pense) :</b> <i>Le Calme Eternel. Ce sont mes deux minutes et quarante et une secondes et l'estomac grasouillet de Wakka. Ce n'est pas beaucoup. Juste un peu de bonheur paisible... mais... je suppose que je peux en demander plus, non ?</i><br />
  <b>Yuna :</b> Rikku, allons-y !<br />
  </font></p>
  </font>
  <p align="center"><b><font color="#FF0000" size="6" face="Verdana">THE END</font></b></p>
  <p align="center"><font color="#FFFFFF" size="1" face="Verdana"><br />
    <br />
    <br />
    <i>Eternal Peacetime</i> est une vidéo assez intéressante car elle pourrait bien être le prologue à une suite de Final Fantasy X. <i>Final Fantasy X Gaiden</i> (Gaiden veut dire Suite en Japonais) a même été évoqué sur Famitsu TV, il y a quelques mois de ça ! En effet, voici une brève traduction d'une news à ce sujet
    :<br />
    <br />
    <br />
    <i>La scène d'épilogue du DVD bonus The Otherside of the Fantasy 2 disponible dans FFX International semble être plus importante que ce que l'on pouvait penser...<br />
      <br />
      Il y a quelques temps, deux commentateurs de Famitsu TV ont eu le dialogue suivant, avec quelques informations cachées par un Bip :<br />
  <br />
      </i>&quot; J'attend beaucoup la suite de -BIP-. Ils disent que tu verras ce qu'il se passe après la dernière scène.<br />
    - Quoi, tu veux dire comme -BIP- ?!<br />
    - Oui, comme -BIP-. &quot;<i><br />
  <br />
      Après ça, l'émission a dévoilé les indices suivants :<br />
      - Une compagnie en &quot;S&quot;<br />
      - PS2<br />
      - Gaiden (Suite en Japonais)<br />
      - Si c'était dit en nombre, vous sauriez immédiatement ce que c'est<br />
      - Deux lettres de l'alphabet<br />
  <br />
  <br />
  </i>Un nouveau mystère que les newsmaker du site ont quand même qualifié de blague. Reste à savoir si s'en est vraiment une. Aucune nouvelle de ce projet depuis, sauf...<br />
  <br />
    28 Mai 2002. Le monde vidéoludique entier apprend avec stupeur que Squaresoft a décidé de donner deux &quot;suites&quot; à Final Fantasy X. Le terme suite demeure entre parenthèses car il ne semble pas qu'elles se déroulent après le jeu. <i>Final Fantasy X Yuna Version</i> et <i>Rikku Version</i> (titres non définitifs)
    sont programmés pour 2003 au Japon. Alors... Préquelle ou séquelle ? Le mystère est toujours là.<br />
  </font></p>
 
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
