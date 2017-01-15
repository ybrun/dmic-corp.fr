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
  <p align="center"><u><i><b><font size="7" color="#FF0000">Trucs &amp; Astuces</font></b></i></u></p>
  <p align="center"><font color="#FFFFFF"><img border="0" src="/dmic-corp/images/Logo.jpg" width="320" height="240" /></font></p>
  <p align="center">&nbsp;</p>
  <p align="center"><i><u><font face="Verdana" size="4" color="#FF0000">- <b>Battre MagiMaster :</b>&nbsp;</font></u></i></p>
  <p align="center"><font face="Verdana" size="3" color="#FFFFFF">Dans le Monde de Ruines, voici comment battre facilement le boss du Fanatic Tower (tour où l'on ne peut qu'utiliser la Magie). Laissez-le tout d'abord vous enlever environ 2000 HP. Ensuite utilisez la magie &quot;Drain&quot;. Ceci vous permettra de récupérer vos
    HP perdus tout en lui enlevant des HP. Répétez cette opération jusqu'à ce que vous le battiez (vous pouvez utiliser la magie &quot;Scan&quot; pour voir ses statistiques et ses vies). Attention : à la fin du combat, MagiMaster va utiliser la magie &quot;Ultima&quot; ce qui enlèvera 3000 (ou plus) HP à chacun de vos
    membres.<br />
    <br />
  </font></p>
  <p align="center"><i><u><font face="Verdana" color="#FF0000" size="4">- <b>Magie sur plusieurs ennemis !&nbsp;</b></font></u></i></p>
  <p align="center"><font face="Verdana" size="3" color="#FFFFFF">Au cours d'une bataille, choisissez une Magie. Alignez votre curseur sur un ennemi et appuyez sur L ou sur R. Vous pourrez utiliser cette Magie sur tous les ennemis en même temps.<br />
    <br />
  </font></p>
  <p align="center"><i><u><font face="Verdana" color="#FF0000" size="4">- <b>Conseil dans World Of Balance :</b>&nbsp;</font></u></i></p>
  <p align="center"><font face="Verdana" size="3" color="#FFFFFF">Après avoir vaincu le boss sur le Floating Continent, vous devez impérativement attendre les dernières secondes du compte à rebours pour que Shadow vous rejoigne. Sinon, vous ne le retrouverez plus dans le deuxième monde (World of Ruins).<br />
    <br />
  </font></p>
  <p align="center"><i><u><font face="Verdana" color="#FF0000" size="4">- <b>Obtenir Kappa :</b></font></u></i></p>
  <p align="center"><font face="Verdana" size="3" color="#FFFFFF">&nbsp;Si vous voulez qu'il se joigne à votre groupe, suivez les instructions suivantes. Premièrement, il vous faut la &quot;Rename Card&quot; que l'on obtient au Colisée. Ensuite, collectez tous les équipement Imp ( Imp Halberd, Imp's Armor ... ). Ces derniers
    se trouvent dans le monde des ruines tout autour de narshe : volez les à des ennemis. Equipez un personnage de tous ces équipements et renommez le ( à narshe ) Kappa. Pour finir, invoquez imp sur ce personnage. Ca y est, vous avez obtenu Kappa !<br />
    <br />
  </font></p>
  <p align="center"><i><u><font face="Verdana" size="4" color="#FF0000">- <b>Tuer un monstre coriace :</b>&nbsp;</font></u></i></p>
  <p align="center"><font face="Verdana" size="3" color="#FFFFFF">Pour venir à bout des monstres les plus costauds, faites ce qui suit. Pour commencer, faites la magie Vanish avec un de vos combattants. Ensuite, avec votre prochain attaquant, faites la magie Doom et si cela ne marche pas, essayez avec X-zone à la place et vous
    serez vainqueur du combat.</font></p>
  <p align="center">&nbsp;</p>
  <p align="center"><b><i><u><font face="Verdana" size="4" color="#FF0000">- Les Invocations</font></u></i></b></p>
  <p align="center">&nbsp; </p>
  <center>
    <table border="1" cellspacing="1" width="594">
      <tr>
        <td width="35%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Alexandre</font></b></p></td>
        <td width="65%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">&nbsp;</font></p></td>
      </tr>
      <tr>
        <td width="35%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana"><br />
          <img src="/dmic-corp/images/alexandr.gif" width="90" height="126" /></font></p></td>
        <td width="65%" valign="middle"><p align="justify"><font color="#FFFFFF" size="3" face="Verdana">- <b>Où</b> : On peut trouver Alexander sur le trone du Chateau de Doma, après avoir battu WrexSoul dans le monde des ruines. Alexander utilise Holy Light, une attaque qui fonctionne mieux sur les zombies.</font></p></td>
      </tr>
    </table>
    <table border="1" cellspacing="1" width="594">
      <tr>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Attaque</font></b></p></td>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">MP Nécessaires</font></b></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">Justice</font></p></td>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">90</font></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Magies</font></b></p></td>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Taux d'apprentissage</font></b></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">Pearl<br />
          Shell<br />
          Safe<br />
          Dispel<br />
          Remedy</font></p></td>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">x2<br />
          x10<br />
          x10<br />
          x10<br />
          x15</font></p></td>
      </tr>
    </table>
  </center>
  <p align="center"><font color="#FFFFFF" size="3" face="Verdana"><br />
  </font></p>
  <p align="center">&nbsp; </p>
  <center>
    <table border="1" cellspacing="1" width="594">
      <tr>
        <td width="35%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Bahamut</font></b></p></td>
        <td width="65%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">&nbsp;</font></p></td>
      </tr>
      <tr>
        <td width="35%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana"><br />
          <img src="/dmic-corp/images/bahamut.gif" width="98" height="130" /></font></p></td>
        <td width="65%" valign="middle"><p align="justify"><font color="#FFFFFF" size="3" face="Verdana">- <b>Où</b> : Vous recevez Bahamut après avoir battu les terreurs du ciel, Doom Gaze, dans le monde des ruines. Il attaque les ennemis avec le Sun Flare, qui cause des dégâts lourds sur tous les ennemis.</font></p>
          <p align="justify">&nbsp;</p></td>
      </tr>
    </table>
    <table border="1" cellspacing="1" width="594">
      <tr>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Attaque</font></b></p></td>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">MP Nécessaires</font></b></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">Sun Flare</font></p></td>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">80</font></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Magies</font></b></p></td>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Taux d'apprentissage</font></b></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">Flare</font></p></td>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">x2</font></p></td>
      </tr>
    </table>
  </center>
  <p align="center"><font color="#FFFFFF" size="3" face="Verdana"><br />
  </font></p>
  <p align="center">&nbsp; </p>
  <center>
    <table border="1" cellspacing="1" width="594">
      <tr>
        <td width="35%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Bismark</font></b></p></td>
        <td width="65%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">&nbsp;</font></p></td>
      </tr>
      <tr>
        <td width="35%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana"><br />
          <img src="/dmic-corp/images/bismark.gif" width="98" height="37" /></font></p></td>
        <td width="65%" valign="middle"><p align="justify"><font color="#FFFFFF" size="3" face="Verdana">- <b>Où</b> : Bismark se trouve facilementdans le centre de recherche Magitek de Vector. Son attaque &quot;Sea Song&quot; engloutie les ennemis d'une véritable déferlante d'eau.</font></p>
          <p align="justify">&nbsp;</p></td>
      </tr>
    </table>
    <table border="1" cellspacing="1" width="594">
      <tr>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Attaque</font></b></p></td>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">MP Nécessaires</font></b></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">Sea Song</font></p></td>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">50</font></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Magies</font></b></p></td>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Taux d'apprentissage</font></b></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">Fire<br />
          Ice<br />
          Bolt<br />
          Life</font></p></td>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">x20<br />
          x20<br />
          x20<br />
          x2</font></p></td>
      </tr>
    </table>
  </center>
  <p align="center"><font color="#FFFFFF" size="3" face="Verdana"><br />
  </font></p>
  <p align="center">&nbsp; </p>
  <center>
    <table border="1" cellspacing="1" width="594">
      <tr>
        <td width="35%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Carbunkle</font></b></p></td>
        <td width="65%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">&nbsp;</font></p></td>
      </tr>
      <tr>
        <td width="35%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana"><br />
          <img src="/dmic-corp/images/carbunkl.gif" width="34" height="40" /></font></p></td>
        <td width="65%" valign="middle"><p align="justify"><font color="#FFFFFF" size="3" face="Verdana">- <b>Où</b> : De la même façon que Bismark, Carbunkle se trouve à Vector. Il utilise &quot;Rudy Power&quot; afin d'invoquer la magie &quot;reflect&quot; sur le groupe entier.</font></p>
          <p align="justify">&nbsp;</p></td>
      </tr>
    </table>
    <table border="1" cellspacing="1" width="594">
      <tr>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Attaque</font></b></p></td>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">MP Nécessaires</font></b></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">Ruby Power</font></p></td>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">36</font></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Magies</font></b></p></td>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Taux d'apprentissage</font></b></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">Reflect<br />
          Haste<br />
          Shell<br />
          Safel<br />
          Warp</font></p></td>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">x5<br />
          x3<br />
          x2<br />
          x2<br />
          x2</font></p></td>
      </tr>
    </table>
  </center>
  <p align="center"><font color="#FFFFFF" size="3" face="Verdana"><br />
  </font></p>
  <p align="center">&nbsp; </p>
  <center>
    <table border="1" cellspacing="1" width="594">
      <tr>
        <td width="35%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Crusader</font></b></p></td>
        <td width="65%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">&nbsp;</font></p></td>
      </tr>
      <tr>
        <td width="35%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana"><br />
          <img src="/dmic-corp/images/crusadersmall.gif" width="132" height="140" /></font></p></td>
        <td width="65%" valign="middle"><p align="justify"><font color="#FFFFFF" size="3" face="Verdana">- <b>Où</b> : Vous recevez Crusader après avoir battu les 8 légendaires dragons ( rien que ca ;) Son attaque cause des dommages à tous les personnages. apparaissant à l'écran, même votre groupe ! Soyez donc très attentif lorsque vous utiliserez cet esper ...</font></p>
          <p align="justify">&nbsp;</p></td>
      </tr>
    </table>
    <table border="1" cellspacing="1" width="594">
      <tr>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Attaque</font></b></p></td>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">MP Nécessaires</font></b></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">Purifier</font></p></td>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">96</font></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Magies</font></b></p></td>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Taux d'apprentissage</font></b></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">Merton<br />
          Meteore</font></p></td>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">x1<br />
          x10</font></p></td>
      </tr>
    </table>
  </center>
  <p align="center"><font color="#FFFFFF" size="3" face="Verdana"><br />
  </font></p>
  <p align="center">&nbsp; </p>
  <center>
    <table border="1" cellspacing="1" width="594">
      <tr>
        <td width="35%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Fenrir</font></b></p></td>
        <td width="65%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">&nbsp;</font></p></td>
      </tr>
      <tr>
        <td width="35%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana"><br />
          <img src="/dmic-corp/images/fenrir.gif" width="42" height="82" /></font></p></td>
        <td width="65%" valign="middle"><p align="justify"><font color="#FFFFFF" size="3" face="Verdana">- <b>Où</b> : Lorsque vous irez récupérer Terra à Mobiliz, vous devrez battre Phunaba qui vous permettra d'acquérir Fenrir.</font></p>
          <p align="justify">&nbsp;</p></td>
      </tr>
    </table>
    <table border="1" cellspacing="1" width="594">
      <tr>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Attaque</font></b></p></td>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">MP Nécessaires</font></b></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">Moon Song</font></p></td>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">70</font></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Magies</font></b></p></td>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Taux d'apprentissage</font></b></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">Warp<br />
          X-Zone<br />
          Stop</font></p></td>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">x10<br />
          x5<br />
          x3</font></p></td>
      </tr>
    </table>
  </center>
  <p align="center"><font color="#FFFFFF" size="3" face="Verdana"><br />
  </font></p>
  <center>
    <table border="1" cellspacing="1" width="594">
      <tr>
        <td width="35%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Golem</font></b></p></td>
        <td width="65%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">&nbsp;</font></p></td>
      </tr>
      <tr>
        <td width="35%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana"><br />
          <img src="/dmic-corp/images/golem.gif" width="58" height="50" /></font></p></td>
        <td width="65%" valign="middle"><p align="justify"><font color="#FFFFFF" size="3" face="Verdana">- <b>Où</b> : Vous pouvez acheter Golem pour la maudique somme de 20 000 GP aux ventes aux enchère de Jidor. Son &quot;Earth Wall&quot; vous protège des attaques physiques.</font></p></td>
      </tr>
    </table>
    <table border="1" cellspacing="1" width="594">
      <tr>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Attaque</font></b></p></td>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">MP Nécessaires</font></b></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">Earth Wall</font></p></td>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">33</font></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Magies</font></b></p></td>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Taux d'apprentissage</font></b></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">Safe<br />
          Stop<br />
          Cure 2</font></p></td>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">x5<br />
          x5<br />
          x5</font></p></td>
      </tr>
    </table>
  </center>
  <p align="center"><font color="#FFFFFF" size="3" face="Verdana"><br />
  </font></p>
  <p align="center">&nbsp; </p>
  <center>
    <table border="1" cellspacing="1" width="594">
      <tr>
        <td width="35%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Ifrit</font></b></p></td>
        <td width="65%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">&nbsp;</font></p></td>
      </tr>
      <tr>
        <td width="35%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana"><br />
          <img src="/dmic-corp/images/ifrit.gif" width="34" height="58" /></font></p></td>
        <td width="65%" valign="middle"><p align="justify"><font color="#FFFFFF" size="3" face="Verdana">- <b>Où</b> : Vous pouvez récupérer Ifrit encore une fois à Vector. Son attaque &quot;Inferno&quot; bombarde les ennemis d'une grosse boule de feu.</font></p>
          <p align="justify">&nbsp;</p></td>
      </tr>
    </table>
    <table border="1" cellspacing="1" width="594">
      <tr>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Attaque</font></b></p></td>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">MP Nécessaires</font></b></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">Inferno</font></p></td>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">26</font></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Magies</font></b></p></td>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Taux d'apprentissage</font></b></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">Fire<br />
          Fire 2<br />
          Drain</font></p></td>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">x10<br />
          x5<br />
          x1</font></p></td>
      </tr>
    </table>
  </center>
  <p align="center"><font color="#FFFFFF" size="3" face="Verdana"><br />
  </font></p>
  <p align="center">&nbsp; </p>
  <center>
    <table border="1" cellspacing="1" width="594">
      <tr>
        <td width="35%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Kirin</font></b></p></td>
        <td width="65%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">&nbsp;</font></p></td>
      </tr>
      <tr>
        <td width="35%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana"><br />
          <img src="/dmic-corp/images/kirin.gif" width="66" height="57" /></font></p></td>
        <td width="65%" valign="middle"><p align="justify"><font color="#FFFFFF" size="3" face="Verdana">- <b>Où</b> : Kirin est un esper que l'on peut trouver tout en haut de la tour de Zozo, après le combat contre Dadulama. L'invoquation de Kirin régénère lentement les HP du groupe.</font></p></td>
      </tr>
    </table>
    <table border="1" cellspacing="1" width="594">
      <tr>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Attaque</font></b></p></td>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">MP Nécessaires</font></b></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">Life Guard</font></p></td>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">18</font></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Magies</font></b></p></td>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Taux d'apprentissage</font></b></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">Cure<br />
          Cure2<br />
          Regen<br />
          Antidote<br />
          Scan</font></p></td>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">x5<br />
          x1<br />
          x3<br />
          x4<br />
          x5</font></p></td>
      </tr>
    </table>
  </center>
  <p align="center"><font color="#FFFFFF" size="3" face="Verdana"><br />
  </font></p>
  <p align="center">&nbsp; </p>
  <center>
    <table border="1" cellspacing="1" width="594">
      <tr>
        <td width="35%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Maduin</font></b></p></td>
        <td width="65%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">&nbsp;</font></p></td>
      </tr>
      <tr>
        <td width="35%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana"><br />
          <img src="/dmic-corp/images/maduin.gif" width="50" height="65" /></font></p></td>
        <td width="65%" valign="middle"><p align="justify"><font color="#FFFFFF" size="3" face="Verdana">- <b>Où</b> : On l'obtient à Vector, comme d'habitude ;). Son attaque &quot;Chaos Wing&quot; attaque plusieurs ennemis grâce à la puissance de l'électricité.</font></p>
          <p align="justify">&nbsp;</p></td>
      </tr>
    </table>
    <table border="1" cellspacing="1" width="594">
      <tr>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Attaque</font></b></p></td>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">MP Nécessaires</font></b></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">Chaos Wing</font></p></td>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">44</font></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Magies</font></b></p></td>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Taux d'apprentissage</font></b></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">Fire 2<br />
          Ice 2<br />
          Bolt 2</font></p></td>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">x3<br />
          x1<br />
          x3</font></p></td>
      </tr>
    </table>
  </center>
  <p align="center"><font color="#FFFFFF" size="3" face="Verdana"><br />
  </font></p>
  <p align="center">&nbsp; </p>
  <center>
    <table border="1" cellspacing="1" width="594">
      <tr>
        <td width="35%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Odin</font></b></p></td>
        <td width="65%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">&nbsp;</font></p></td>
      </tr>
      <tr>
        <td width="35%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana"><br />
          <img src="/dmic-corp/images/odin.gif" width="63" height="81" /></font></p></td>
        <td width="65%" valign="middle"><p align="justify"><font color="#FFFFFF" size="3" face="Verdana">- <b>Où</b> : On obtient Odin au Chateau des Anciens qui peut être trouvé uniquement dans le monde des ruines. Odin charge les ennemis et les coupe en deux.</font></p>
          <p align="justify">&nbsp;</p></td>
      </tr>
    </table>
    <table border="1" cellspacing="1" width="594">
      <tr>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Attaque</font></b></p></td>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">MP Nécessaires</font></b></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">Chaos Wing</font></p></td>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">44</font></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Magies</font></b></p></td>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Taux d'apprentissage</font></b></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">Fire 2<br />
          Ice 2<br />
          Bolt 2</font></p></td>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">x3<br />
          x1<br />
          x3</font></p></td>
      </tr>
    </table>
  </center>
  <p align="center"><font color="#FFFFFF" size="3" face="Verdana"><br />
  </font></p>
  <p align="center">&nbsp; </p>
  <center>
    <table border="1" cellspacing="1" width="594">
      <tr>
        <td width="35%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Palidor</font></b></p></td>
        <td width="65%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">&nbsp;</font></p></td>
      </tr>
      <tr>
        <td width="35%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana"><br />
          <img src="/dmic-corp/images/palidor.gif" width="98" height="58" /></font></p></td>
        <td width="65%" valign="middle"><p align="justify"><font color="#FFFFFF" size="3" face="Verdana">- <b>Où</b> : On peut trouver Palidor sur la plage de l'île où Celes commence dans le monde des ruines. Il n'apparait pas tant que vous n'avez pas récupérer le deuxième hautvent.</font></p>
          <p align="justify">&nbsp;</p></td>
      </tr>
    </table>
    <table border="1" cellspacing="1" width="594">
      <tr>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Attaque</font></b></p></td>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">MP Nécessaires</font></b></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">Sonic Drive</font></p></td>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">21</font></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Magies</font></b></p></td>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Taux d'apprentissage</font></b></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">Haste<br />
          Slow<br />
          Haste2<br />
          Slow2<br />
          Float</font></p></td>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">x20<br />
          x20<br />
          x2<br />
          x2<br />
          x5</font></p></td>
      </tr>
    </table>
  </center>
  <p align="center"><font color="#FFFFFF" size="3" face="Verdana"><br />
  </font></p>
  <p align="center">&nbsp; </p>
  <center>
    <table border="1" cellspacing="1" width="594">
      <tr>
        <td width="35%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Phantom</font></b></p></td>
        <td width="65%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">&nbsp;</font></p></td>
      </tr>
      <tr>
        <td width="35%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana"><br />
          <img src="/dmic-corp/images/phantom.gif" width="34" height="66" /></font></p></td>
        <td width="65%" valign="middle"><p align="justify"><font color="#FFFFFF" size="3" face="Verdana">- <b>Où</b> : Vector ca vous dit quelque chose ? Et bien, c'est là bas qu'il faut se rendre pour obtenir cet Esper. Grâce à son invocation &quot;Fader&quot;, votre groupe est temporairement invisible.</font></p>
          <p align="justify">&nbsp;</p></td>
      </tr>
    </table>
    <table border="1" cellspacing="1" width="594">
      <tr>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Attaque</font></b></p></td>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">MP Nécessaires</font></b></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">Fader</font></p></td>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">38</font></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Magies</font></b></p></td>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Taux d'apprentissage</font></b></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">Bersek<br />
          Vanish<br />
          Demi</font></p></td>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">x3<br />
          x3<br />
          x5</font></p></td>
      </tr>
    </table>
  </center>
  <p align="center"><font color="#FFFFFF" size="3" face="Verdana"><br />
  </font></p>
  <p align="center">&nbsp; </p>
  <center>
    <table border="1" cellspacing="1" width="594">
      <tr>
        <td width="35%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Phoenix</font></b></p></td>
        <td width="65%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">&nbsp;</font></p></td>
      </tr>
      <tr>
        <td width="35%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana"><br />
          <img src="/dmic-corp/images/phoenix.gif" width="66" height="74" /></font></p></td>
        <td width="65%" valign="middle"><p align="justify"><font color="#FFFFFF" size="3" face="Verdana">- <b>Où</b> : Vous recevez Phoenix après avoir trouvé Locke dans la grotte phoenix dans le monde des ruines. Un esper bien utile puisqu'il vous permettra de réanimer les persos KO..</font></p>
          <p align="justify">&nbsp;</p></td>
      </tr>
    </table>
    <table border="1" cellspacing="1" width="594">
      <tr>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Attaque</font></b></p></td>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">MP Nécessaires</font></b></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">Rebirth</font></p></td>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">110</font></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Magies</font></b></p></td>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Taux d'apprentissage</font></b></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">Life<br />
          Life2<br />
          Life3<br />
          Cure3<br />
          Fire3</font></p></td>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">x10<br />
          x2<br />
          x1<br />
          x2<br />
          x3</font></p></td>
      </tr>
    </table>
  </center>
  <p align="center"><font color="#FFFFFF" size="3" face="Verdana"><br />
  </font></p>
  <p align="center">&nbsp; </p>
  <center>
    <table border="1" cellspacing="1" width="594">
      <tr>
        <td width="35%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Ragnarok</font></b></p></td>
        <td width="65%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">&nbsp;</font></p></td>
      </tr>
      <tr>
        <td width="35%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana"><br />
          <img src="/dmic-corp/images/ragnarok.gif" width="17" height="66" /></font></p></td>
        <td width="65%" valign="middle"><p align="justify"><font color="#FFFFFF" size="3" face="Verdana">- <b>Où</b> : On peut trouver cet esper dans le magasin d'armes de Narshe dans le monde des ruines. Vous devez choisir de la garder en pierre plutôt que de le changer en épée. Cet esper vous permettra de transformer les ennemis en objet. Le taux de réussite est plus élévé si
          l'ennemi est faible.</font></p>
          <p align="justify">&nbsp;</p></td>
      </tr>
    </table>
    <table border="1" cellspacing="1" width="594">
      <tr>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Attaque</font></b></p></td>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">MP Nécessaires</font></b></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">Metamorph</font></p></td>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">8</font></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Magies</font></b></p></td>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Taux d'apprentissage</font></b></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">Ultima</font></p></td>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">x1</font></p></td>
      </tr>
    </table>
  </center>
  <p align="center"><font color="#FFFFFF" size="3" face="Verdana"><br />
  </font></p>
  <p align="center">&nbsp; </p>
  <center>
    <table border="1" cellspacing="1" width="594">
      <tr>
        <td width="35%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Raiden</font></b></p></td>
        <td width="65%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">&nbsp;</font></p></td>
      </tr>
      <tr>
        <td width="35%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana"><br />
          <img src="/dmic-corp/images/raiden.gif" width="63" height="81" /></font></p></td>
        <td width="65%" valign="middle"><p align="justify"><font color="#FFFFFF" size="3" face="Verdana">- <b>Où</b> : Raiden est la transformation de Odin. Pour que la transformation ait lieu, vous devez evidemment posséder Odin et ensuite trouver la statue de la reine. Cette statue changera Odin en Raiden.</font></p>
          <p align="justify">&nbsp;</p></td>
      </tr>
    </table>
    <table border="1" cellspacing="1" width="594">
      <tr>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Attaque</font></b></p></td>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">MP Nécessaires</font></b></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">True Edge</font></p></td>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">80</font></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Magies</font></b></p></td>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Taux d'apprentissage</font></b></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">Quick</font></p></td>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">x1</font></p></td>
      </tr>
    </table>
  </center>
  <p align="center"><font color="#FFFFFF" size="3" face="Verdana"><br />
  </font></p>
  <p align="center">&nbsp; </p>
  <center>
    <table border="1" cellspacing="1" width="594">
      <tr>
        <td width="35%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Ramuh</font></b></p></td>
        <td width="65%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">&nbsp;</font></p></td>
      </tr>
      <tr>
        <td width="35%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana"><br />
          <img src="/dmic-corp/images/ramuh.gif" width="49" height="65" /></font></p></td>
        <td width="65%" valign="middle"><p align="justify"><font color="#FFFFFF" size="3" face="Verdana">- <b>Où</b> : On trouve Ramuh en haut de la tour de Zozo après le combat contre Dadulama. Son attaque utilise l'élément éclair.</font></p>
          <p align="justify">&nbsp;</p></td>
      </tr>
    </table>
    <table border="1" cellspacing="1" width="594">
      <tr>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Attaque</font></b></p></td>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">MP Nécessaires</font></b></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">Blot Fist</font></p></td>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">25</font></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Magies</font></b></p></td>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Taux d'apprentissage</font></b></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">Bolt<br />
          Bolt2<br />
          Poison</font></p></td>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">x10<br />
          x2<br />
          x5</font></p></td>
      </tr>
    </table>
  </center>
  <p align="center"><font color="#FFFFFF" size="3" face="Verdana"><br />
  </font></p>
  <p align="center">&nbsp; </p>
  <center>
    <table border="1" cellspacing="1" width="594">
      <tr>
        <td width="35%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Shiva</font></b></p></td>
        <td width="65%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">&nbsp;</font></p></td>
      </tr>
      <tr>
        <td width="35%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana"><br />
          <img src="/dmic-corp/images/shiva.gif" width="42" height="50" /></font></p></td>
        <td width="65%" valign="middle"><p align="justify"><font color="#FFFFFF" size="3" face="Verdana">- <b>Où</b> : Comme beaucoup d'autres espers, on trouve Shiva à Vector. Son attaque utilise l'élément glace.</font></p>
          <p align="justify">&nbsp;</p></td>
      </tr>
    </table>
    <table border="1" cellspacing="1" width="594">
      <tr>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Attaque</font></b></p></td>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">MP Nécessaires</font></b></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">Gem Dust</font></p></td>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">27</font></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Magies</font></b></p></td>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Taux d'apprentissage</font></b></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">Ice<br />
          Ice2<br />
          Rasp<br />
          Osmose<br />
          Cure</font></p></td>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">x10<br />
          x5<br />
          x4<br />
          x4<br />
          x3</font></p></td>
      </tr>
    </table>
  </center>
  <p align="center"><font color="#FFFFFF" size="3" face="Verdana"><br />
  </font></p>
  <p align="center">&nbsp; </p>
  <center>
    <table border="1" cellspacing="1" width="594">
      <tr>
        <td width="35%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Siren</font></b></p></td>
        <td width="65%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">&nbsp;</font></p></td>
      </tr>
      <tr>
        <td width="35%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana"><br />
          <img src="/dmic-corp/images/siren.gif" width="33" height="56" /></font></p></td>
        <td width="65%" valign="middle"><p align="justify"><font color="#FFFFFF" size="3" face="Verdana">- <b>Où</b> : On la trouve en haut de la tour de Zozo, après le combat contre Dadulama. Elle invoque Silence sur les tous les ennemis.</font></p>
          <p align="justify">&nbsp;</p></td>
      </tr>
    </table>
    <table border="1" cellspacing="1" width="594">
      <tr>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Attaque</font></b></p></td>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">MP Nécessaires</font></b></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">Hope Song</font></p></td>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">16</font></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Magies</font></b></p></td>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Taux d'apprentissage</font></b></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">Sleep<br />
          Mute<br />
          Slow<br />
          Fire</font></p></td>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">x10<br />
          x8<br />
          x7<br />
          x6</font></p></td>
      </tr>
    </table>
  </center>
  <p align="center"><font color="#FFFFFF" size="3" face="Verdana"><br />
  </font></p>
  <p align="center">&nbsp; </p>
  <center>
    <table border="1" cellspacing="1" width="594">
      <tr>
        <td width="35%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Sraphim</font></b></p></td>
        <td width="65%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">&nbsp;</font></p></td>
      </tr>
      <tr>
        <td width="35%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana"><br />
          <img src="/dmic-corp/images/seraphim.gif" width="47" height="66" /></font></p></td>
        <td width="65%" valign="middle"><p align="justify"><font color="#FFFFFF" size="3" face="Verdana">- <b>Où</b> : On peut l'obtenir n'importe quand après la fuite de Vector. Payez le voleur 3000 GP ou 30 GP dans la ville de Tzen ( cela dépend si vous l'acheter dans le monde de Balance ou dans le monde des ruines.</font></p>
          <p align="justify">&nbsp;</p></td>
      </tr>
    </table>
    <table border="1" cellspacing="1" width="594">
      <tr>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Attaque</font></b></p></td>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">MP Nécessaires</font></b></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">Revivre</font></p></td>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">40</font></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Magies</font></b></p></td>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Taux d'apprentissage</font></b></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">Life<br />
          Cure2<br />
          Cure<br />
          Regen<br />
          Remedy</font></p></td>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">Life<br />
          Cure2<br />
          Cure<br />
          Regen<br />
          Remedy</font></p></td>
      </tr>
    </table>
  </center>
  <p align="center"><font color="#FFFFFF" size="3" face="Verdana"><br />
  </font></p>
  <p align="center">&nbsp; </p>
  <center>
    <table border="1" cellspacing="1" width="594">
      <tr>
        <td width="35%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Starlet</font></b></p></td>
        <td width="65%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">&nbsp;</font></p></td>
      </tr>
      <tr>
        <td width="35%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana"><br />
          <img src="/dmic-corp/images/starlet.gif" width="65" height="90" /></font></p></td>
        <td width="65%" valign="middle"><p align="justify"><font color="#FFFFFF" size="3" face="Verdana">- <b>Où</b> : On la trouve dans la bibliothèque de Owzer après avoir battu Chadarnook. Elle guérit et réveille vos persos.</font></p>
          <p align="justify">&nbsp;</p></td>
      </tr>
    </table>
    <table border="1" cellspacing="1" width="594">
      <tr>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Attaque</font></b></p></td>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">MP Nécessaires</font></b></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">Groupe Hug</font></p></td>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">75</font></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Magies</font></b></p></td>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Taux d'apprentissage</font></b></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">Cure<br />
          Cure2<br />
          Cure3<br />
          Regen<br />
          Remedy</font></p></td>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">x25<br />
          x16<br />
          x1<br />
          x20<br />
          x20</font></p></td>
      </tr>
    </table>
  </center>
  <p align="center"><font color="#FFFFFF" size="3" face="Verdana"><br />
  </font></p>
  <p align="center">&nbsp; </p>
  <center>
    <table border="1" cellspacing="1" width="594">
      <tr>
        <td width="35%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Stray</font></b></p></td>
        <td width="65%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">&nbsp;</font></p></td>
      </tr>
      <tr>
        <td width="35%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana"><br />
          <img src="/dmic-corp/images/stray.gif" width="34" height="40" /></font></p></td>
        <td width="65%" valign="middle"><p align="justify"><font color="#FFFFFF" size="3" face="Verdana">- <b>Où</b> : On le trouve en haut de la tour de Zozo. Il rend confus les ennemis grâce à son &quot;Cat Rain&quot;.</font></p>
          <p align="justify">&nbsp;</p></td>
      </tr>
    </table>
    <table border="1" cellspacing="1" width="594">
      <tr>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Attaque</font></b></p></td>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">MP Nécessaires</font></b></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">Cat Rain</font></p></td>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">28</font></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Magies</font></b></p></td>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Taux d'apprentissage</font></b></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">Nuddle<br />
          Imp<br />
          Float</font></p></td>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">x7<br />
          x5<br />
          x2</font></p></td>
      </tr>
    </table>
  </center>
  <p align="center"><font color="#FFFFFF" size="3" face="Verdana"><br />
  </font></p>
  <p align="center">&nbsp; </p>
  <center>
    <table border="1" cellspacing="1" width="594">
      <tr>
        <td width="35%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Terrato</font></b></p></td>
        <td width="65%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">&nbsp;</font></p></td>
      </tr>
      <tr>
        <td width="35%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana"><br />
          <img src="/dmic-corp/images/terrato.gif" width="89" height="58" /></font></p></td>
        <td width="65%" valign="middle"><p align="justify"><font color="#FFFFFF" size="3" face="Verdana">- <b>Où</b> : Vous pouvez trouver Terrato dans la statue d'os, à l'intérieur de la grotte de Umaro. Son attaque cause des dommages à tous les ennemis.</font></p>
          <p align="justify">&nbsp;</p></td>
      </tr>
    </table>
    <table border="1" cellspacing="1" width="594">
      <tr>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Attaque</font></b></p></td>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">MP Nécessaires</font></b></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">Justice</font></p></td>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">90</font></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Magies</font></b></p></td>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Taux d'apprentissage</font></b></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">Pearl<br />
          Shell<br />
          Safe<br />
          Dispel<br />
          Remedy</font></p></td>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">x2<br />
          x10<br />
          x10<br />
          x10<br />
          x15</font></p></td>
      </tr>
    </table>
  </center>
  <p align="center"><font color="#FFFFFF" size="3" face="Verdana"><br />
  </font></p>
  <p align="center">&nbsp; </p>
  <center>
    <table border="1" cellspacing="1" width="594">
      <tr>
        <td width="35%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Tritoch</font></b></p></td>
        <td width="65%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">&nbsp;</font></p></td>
      </tr>
      <tr>
        <td width="35%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana"><br />
          <img src="/dmic-corp/images/tritoch.gif" width="77" height="98" /></font></p></td>
        <td width="65%" valign="middle"><p align="justify"><font color="#FFFFFF" size="3" face="Verdana">- <b>Où</b> : On peut trouver Tritoch sur une falaise près de Narshe dans le monde des ruines. Vous devez d'abord le battre pour qu'il vous rejoigne.</font></p>
          <p align="justify">&nbsp;</p></td>
      </tr>
    </table>
    <table border="1" cellspacing="1" width="594">
      <tr>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Attaque</font></b></p></td>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">MP Nécessaires</font></b></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">Tri-Dazer</font></p></td>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">68</font></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Magies</font></b></p></td>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Taux d'apprentissage</font></b></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">Fire3<br />
          Ice2<br />
          Bolt3</font></p></td>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">x1<br />
          x1<br />
          x1</font></p></td>
      </tr>
    </table>
  </center>
  <p align="center"><font color="#FFFFFF" size="3" face="Verdana"><br />
  </font></p>
  <p align="center">&nbsp; </p>
  <center>
    <table border="1" cellspacing="1" width="594">
      <tr>
        <td width="35%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Unicorn</font></b></p></td>
        <td width="65%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">&nbsp;</font></p></td>
      </tr>
      <tr>
        <td width="35%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana"><br />
          <img src="/dmic-corp/images/unicorn.gif" width="66" height="66" /></font></p></td>
        <td width="65%" valign="middle"><p align="justify"><font color="#FFFFFF" size="3" face="Verdana">- <b>Où</b> : On peut le trouver à Vector. Son invocation enlève les status anormaux à tous vos personnages.</font></p>
          <p align="justify">&nbsp;</p></td>
      </tr>
    </table>
    <table border="1" cellspacing="1" width="594">
      <tr>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Attaque</font></b></p></td>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">MP Nécessaires</font></b></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">Heal Horn</font></p></td>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">30</font></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Magies</font></b></p></td>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Taux d'apprentissage</font></b></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">Cure2<br />
          Remedy<br />
          Dispel<br />
          Safe<br />
          Shell</font></p></td>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">x4<br />
          x3<br />
          x2<br />
          x1<br />
          x1</font></p></td>
      </tr>
    </table>
  </center>
  <p align="center"><font color="#FFFFFF" size="3" face="Verdana"><br />
  </font></p>
  <p align="center">&nbsp; </p>
  <center>
    <table border="1" cellspacing="1" width="594">
      <tr>
        <td width="35%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Zone Seek</font></b></p></td>
        <td width="65%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">&nbsp;</font></p></td>
      </tr>
      <tr>
        <td width="35%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana"><br />
          <img src="/dmic-corp/images/zoneseek.gif" width="66" height="42" /></font></p></td>
        <td width="65%" valign="middle"><p align="justify"><font color="#FFFFFF" size="3" face="Verdana">- <b>Où</b> : On peut l'acheter aux ventes aux enchères pour 10,000 GP à Jidor. Son attaque vois protège des attaque magiques.</font></p>
          <p align="justify">&nbsp;</p></td>
      </tr>
    </table>
    <table border="1" cellspacing="1" width="594">
      <tr>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Attaque</font></b></p></td>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">MP Nécessaires</font></b></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">Wall</font></p></td>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">30</font></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Magies</font></b></p></td>
        <td width="50%" valign="middle"><p align="center"><b><font color="#FFFFFF" size="3" face="Verdana">Taux d'apprentissage</font></b></p></td>
      </tr>
      <tr>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">Rasp<br />
          Osmose<br />
          Shell</font></p></td>
        <td width="50%" valign="middle"><p align="center"><font color="#FFFFFF" size="3" face="Verdana">x20<br />
          x15<br />
          x5</font></p></td>
      </tr>
    </table>
  </center>
  <p align="center">&nbsp;</p>
  <p align="center"><b><i><u><font face="Verdana" size="4" color="#FF0000">- Les personnages:</font></u></i></b></p>
  <p align="center"><font size="3" face="Verdana"><img border="0" src="/dmic-corp/images/p_terra.jpg" width="202" height="202" /></font></p>
  <p class="MsoNormal" style="margin-right:36.0pt;mso-margin-top-alt:auto;
mso-margin-bottom-alt:auto;margin-left:36.0pt;text-align:justify"><font color="#FFFFFF"><span style="font-size:11.0pt;font-family:Verdana">- <b>Nom</b> : Terra<br />
    - <b>Age</b> : 18 ans<br />
    - <b>Taille</b> : 1m 64<br />
    - <b>Poids</b> : 56 Kg<br />
    - <b>Capacité</b> : Morph
  <o:p> </o:p>
    </span><span style="font-size:11.0pt;font-family:Verdana;mso-fareast-font-family:&quot;Times New Roman&quot;;
mso-bidi-font-family:&quot;Times New Roman&quot;;mso-ansi-language:FR;mso-fareast-language:
FR;mso-bidi-language:AR-SA"><br />
      - <b>Description brève</b> : Terra est une puissante magicienne avec un passé mystérieux. Elle est &quot;l'esclave&quot; de l'empire et n'as plus le contrôle de sa vie . Dans sa quête pour découvrir la vérité sur son identité, elle réalise qu'elle n'a pas de véritable ami et qu'elle est impatiente de découvrir
      l'amour.</span></font></p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p align="center"><img border="0" src="/dmic-corp/images/p_locke.jpg" width="202" height="202" /></p>
  <p class="MsoNormal" style="margin-right:36.0pt;mso-margin-top-alt:auto;
mso-margin-bottom-alt:auto;margin-left:36.0pt;text-align:justify"><font color="#FFFFFF"><span style="font-size:11.0pt;font-family:Verdana">- <b>Nom</b> : Locke<br />
    - <b>Age</b> : 25 ans<br />
    - <b>Taille</b> : 1m 70<br />
    - <b>Poids</b> : 73 Kg<br />
    - <b>Capacité</b> : Steal
  <o:p> </o:p>
    </span><span style="font-size:11.0pt;font-family:Verdana;mso-fareast-font-family:&quot;Times New Roman&quot;;
mso-bidi-font-family:&quot;Times New Roman&quot;;mso-ansi-language:FR;mso-fareast-language:
FR;mso-bidi-language:AR-SA"><br />
      - <b>Description brève</b> : Il ne l'admettra jamais, mais Locke est réellement chasseur de Trésor. Il préfère toujours être considéré comme un marchand et s'énerve rapidement lorsqu'on dit de lui qu'il est un voleur. Sa première rencontre avec Terra lui rapelle son amour perdu.</span></font></p>
  <p class="MsoNormal" style="margin-right:36.0pt;mso-margin-top-alt:auto;
mso-margin-bottom-alt:auto;margin-left:36.0pt;text-align:justify">&nbsp;</p>
  <p class="MsoNormal" style="mso-margin-top-alt: auto; mso-margin-bottom-alt: auto; margin-left: 36.0pt; margin-right: 36.0pt" align="center"><img border="0" src="/dmic-corp/images/p_celes.jpg" width="202" height="202" /></p>
  <p class="MsoNormal" style="margin-bottom:12.0pt;text-align:justify">
    <!--[if gte vml 1]><v:shapetype
 id="_x0000_t75" coordsize="21600,21600" o:spt="75" o:preferrelative="t"
 path="m@4@5l@4@11@9@11@9@5xe" filled="f" stroked="f">
 <v:stroke joinstyle="miter"/>
 <v:formulas>
  <v:f eqn="if lineDrawn pixelLineWidth 0"/>
  <v:f eqn="sum @0 1 0"/>
  <v:f eqn="sum 0 0 @1"/>
  <v:f eqn="prod @2 1 2"/>
  <v:f eqn="prod @3 21600 pixelWidth"/>
  <v:f eqn="prod @3 21600 pixelHeight"/>
  <v:f eqn="sum @0 0 1"/>
  <v:f eqn="prod @6 1 2"/>
  <v:f eqn="prod @7 21600 pixelWidth"/>
  <v:f eqn="sum @8 21600 0"/>
  <v:f eqn="prod @7 21600 pixelHeight"/>
  <v:f eqn="sum @10 21600 0"/>
 </v:formulas>
 <v:path o:extrusionok="f" gradientshapeok="t" o:connecttype="rect"/>
 <o:lock v:ext="edit" aspectratio="t"/>
</v:shapetype><v:shape id="_x0000_s1026" type="#_x0000_t75" alt="" style='position:absolute;
 left:0;text-align:left;margin-left:0;margin-top:0;width:24pt;height:24pt;
 z-index:1;mso-wrap-distance-left:0;mso-wrap-distance-right:0;
 mso-position-horizontal:left;mso-position-vertical-relative:line'
 o:allowoverlap="f">
 <w:wrap type="square"/>
</v:shape><![endif]-->
    <img src="/dmic-corp/images/trucs1.gif" align="left" v:shapes="_x0000_s1026" width="32" height="32" /><span style="font-size:11.0pt;
font-family:Verdana">
      <o:p> </o:p>
    </span></p>
  <p class="MsoNormal" style="margin-right:36.0pt;mso-margin-top-alt:auto;
mso-margin-bottom-alt:auto;margin-left:36.0pt;text-align:justify"><font color="#FFFFFF"><span style="font-size:11.0pt;font-family:Verdana">- <b>Nom</b> : Celes<br />
    - <b>Age</b> : 18 ans<br />
    - <b>Taille</b> : 1m 68<br />
    - <b>Poids</b> : 60 Kg<br />
    - <b>Capacité</b> : Runic
  <o:p> </o:p>
    </span><span style="font-size:11.0pt;font-family:Verdana;mso-fareast-font-family:&quot;Times New Roman&quot;;
mso-bidi-font-family:&quot;Times New Roman&quot;;mso-ansi-language:FR;mso-fareast-language:
FR;mso-bidi-language:AR-SA"><br />
      - <b>Description brève</b> : Fusionnée avec la magie lorsqu'elle était encore toute petite, Celes est le seul personnage, avec Terra, qui peut utiliser la magie sans l'avoir apprise dans une magi cite. Elle est un ancien général de l'empire. Locke la découvre lorsqu'elle emprisonnée dans un cachot de Figaro Sud. Il est
      possible qu'elle ait des sentiments</span></font></p>
  <p class="MsoNormal" style="mso-margin-top-alt: auto; mso-margin-bottom-alt: auto; margin-left: 36.0pt; margin-right: 36.0pt" align="center">&nbsp;</p>
  <p align="center"><img border="0" src="/dmic-corp/images/p_sabin.jpg" width="202" height="202" /></p>
  <p class="MsoNormal" style="margin-right:36.0pt;mso-margin-top-alt:auto;
mso-margin-bottom-alt:auto;margin-left:36.0pt;text-align:justify"><font color="#FFFFFF"><span style="font-size:11.0pt;font-family:Verdana">- <b>Nom</b> : Sabin<br />
    - <b>Age</b> : 27 ans<br />
    - <b>Taille</b> : 1m 87<br />
    - <b>Poids</b> : 113 Kg<br />
    - <b>Capacité</b> : Blitz
  <o:p> </o:p>
    </span><span style="font-size:11.0pt;
font-family:Verdana;mso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:
&quot;Times New Roman&quot;;mso-ansi-language:FR;mso-fareast-language:FR;mso-bidi-language:
AR-SA"><br />
      - <b>Description brève</b> : Lorsque son père est mort, Sabin quitta Figaro et laissa le trône.Il apprit les arts martiaux grâce au maître Duncan, son talent est le blitz. Sabin se joint à l'équipe après le combat contre Vargas.</span></font></p>
  <p align="center">&nbsp;</p>
  <p align="center"><img border="0" src="/dmic-corp/images/p_shadow.jpg" width="202" height="202" /></p>
  <p class="MsoNormal" style="margin-bottom:12.0pt;text-align:justify">
    <!--[if gte vml 1]><v:shapetype
 id="_x0000_t75" coordsize="21600,21600" o:spt="75" o:preferrelative="t"
 path="m@4@5l@4@11@9@11@9@5xe" filled="f" stroked="f">
 <v:stroke joinstyle="miter"/>
 <v:formulas>
  <v:f eqn="if lineDrawn pixelLineWidth 0"/>
  <v:f eqn="sum @0 1 0"/>
  <v:f eqn="sum 0 0 @1"/>
  <v:f eqn="prod @2 1 2"/>
  <v:f eqn="prod @3 21600 pixelWidth"/>
  <v:f eqn="prod @3 21600 pixelHeight"/>
  <v:f eqn="sum @0 0 1"/>
  <v:f eqn="prod @6 1 2"/>
  <v:f eqn="prod @7 21600 pixelWidth"/>
  <v:f eqn="sum @8 21600 0"/>
  <v:f eqn="prod @7 21600 pixelHeight"/>
  <v:f eqn="sum @10 21600 0"/>
 </v:formulas>
 <v:path o:extrusionok="f" gradientshapeok="t" o:connecttype="rect"/>
 <o:lock v:ext="edit" aspectratio="t"/>
</v:shapetype><v:shape id="_x0000_s1026" type="#_x0000_t75" alt="" style='position:absolute;
 left:0;text-align:left;margin-left:0;margin-top:0;width:24pt;height:24pt;
 z-index:1;mso-wrap-distance-left:0;mso-wrap-distance-right:0;
 mso-position-horizontal:left;mso-position-vertical-relative:line'
 o:allowoverlap="f">
 <w:wrap type="square"/>
</v:shape><![endif]-->
    <img src="/dmic-corp/images/trucs2.gif" align="left" v:shapes="_x0000_s1026" width="32" height="32" /><span style="font-size:11.0pt;
font-family:Verdana">
      <o:p> </o:p>
    </span></p>
  <p class="MsoNormal" style="margin-right:36.0pt;mso-margin-top-alt:auto;
mso-margin-bottom-alt:auto;margin-left:36.0pt;text-align:justify"><font color="#FFFFFF"><span style="font-size:11.0pt;font-family:Verdana">- <b>Nom</b> : Shadow<br />
    - <b>Age</b> : inconnu<br />
    - <b>Taille</b> : 1m 75<br />
    - <b>Poids</b> : 75 Kg<br />
    - <b>Capacité</b> : Throw
  <o:p> </o:p>
    </span><span style="font-size:11.0pt;font-family:Verdana;mso-fareast-font-family:&quot;Times New Roman&quot;;
mso-bidi-font-family:&quot;Times New Roman&quot;;mso-ansi-language:FR;mso-fareast-language:
FR;mso-bidi-language:AR-SA"><br />
      - <b>Description brève</b> : Un talentueux mercenaire qui ferait n'importe quoi pour de l'argent. Shadow est hanté par son ancienne vie de voleur. Son seul ami est son fidèle chien, Interceptor. Ce chien a d'étranges rapports avec Relm, dont la relation avec Shadow est inconnue. . Le lien entre eux reste inconnu.</span></font></p>
  <p class="MsoNormal" style="margin-right:36.0pt;mso-margin-top-alt:auto;
mso-margin-bottom-alt:auto;margin-left:36.0pt;text-align:justify">&nbsp;</p>
  <p align="center"><img border="0" src="/dmic-corp/images/p_setzer.jpg" width="202" height="202" /></p>
  <p class="MsoNormal" style="margin-right:36.0pt;mso-margin-top-alt:auto;
mso-margin-bottom-alt:auto;margin-left:36.0pt;text-align:justify"><font color="#FFFFFF"><span style="font-size:11.0pt;font-family:Verdana">- <b>Nom</b> : Setzer<br />
    - <b>Age</b> : 27 ans<br />
    - <b>Taille</b> : 1m 72<br />
    - <b>Poids</b> : 73 Kg<br />
    - <b>Capacité</b> : Slot
  <o:p> </o:p>
    </span><span style="font-size:11.0pt;font-family:Verdana;mso-fareast-font-family:&quot;Times New Roman&quot;;
mso-bidi-font-family:&quot;Times New Roman&quot;;mso-ansi-language:FR;mso-fareast-language:
FR;mso-bidi-language:AR-SA"><br />
      - <b>Description brève</b> : Un homme qui adore prendre des risques. Il rencontre Celes ( pour qui il a sûrement des sentiments ) et ses amis lorsque ces derniers ont besoin du bateau volant pour aller à Vector. Il accepte de les enmener à destination mais refuse de se joindre à la partie. Après être passé à vector, il
      réalise que la destruction et le chaos de la Terre sont causé par la menace de l'Empire. Il se joint alors à la résistance.</span></font></p>
  <p align="center">&nbsp;</p>
  <p align="center"><img border="0" src="/dmic-corp/images/p_cyan.jpg" width="202" height="202" /></p>
  <p class="MsoNormal" style="margin-right:36.0pt;mso-margin-top-alt:auto;
mso-margin-bottom-alt:auto;margin-left:36.0pt;text-align:justify"><font color="#FFFFFF"><span style="font-size:11.0pt;font-family:Verdana">- <b>Nom</b> : Cyan<br />
    - <b>Age</b> : 50 ans<br />
    - <b>Taille</b> : 1m 90<br />
    - <b>Poids</b> : 80 Kg<br />
    - <b>Capacité</b> : SwdTech
  <o:p> </o:p>
    </span><span style="font-size:11.0pt;font-family:Verdana;mso-fareast-font-family:&quot;Times New Roman&quot;;
mso-bidi-font-family:&quot;Times New Roman&quot;;mso-ansi-language:FR;mso-fareast-language:
FR;mso-bidi-language:AR-SA"><br />
      - <b>Description brève</b> : En dépit de son âge avancé, Cyan est une fine lame. Il est le chevalier du royaume de Doma. Comme quelques survivants de l'empoisonnement de la rivière, il témoigne de la mort de sa famille et se reproche de n'avoir rien pu faire pour les sauver. Habité d'une haine aveugle, il attaque la base
      impériale seul, tuant des dixaines de soldats. Il se joint à la résistance afin de venger les siens.</span></font></p>
  <p align="center">&nbsp;</p>
  <p align="center"><img border="0" src="/dmic-corp/images/p_strago.jpg" width="202" height="202" /></p>
  <p class="MsoNormal" style="margin-bottom:12.0pt;text-align:justify">
    <!--[if gte vml 1]><v:shapetype
 id="_x0000_t75" coordsize="21600,21600" o:spt="75" o:preferrelative="t"
 path="m@4@5l@4@11@9@11@9@5xe" filled="f" stroked="f">
 <v:stroke joinstyle="miter"/>
 <v:formulas>
  <v:f eqn="if lineDrawn pixelLineWidth 0"/>
  <v:f eqn="sum @0 1 0"/>
  <v:f eqn="sum 0 0 @1"/>
  <v:f eqn="prod @2 1 2"/>
  <v:f eqn="prod @3 21600 pixelWidth"/>
  <v:f eqn="prod @3 21600 pixelHeight"/>
  <v:f eqn="sum @0 0 1"/>
  <v:f eqn="prod @6 1 2"/>
  <v:f eqn="prod @7 21600 pixelWidth"/>
  <v:f eqn="sum @8 21600 0"/>
  <v:f eqn="prod @7 21600 pixelHeight"/>
  <v:f eqn="sum @10 21600 0"/>
 </v:formulas>
 <v:path o:extrusionok="f" gradientshapeok="t" o:connecttype="rect"/>
 <o:lock v:ext="edit" aspectratio="t"/>
</v:shapetype><v:shape id="_x0000_s1026" type="#_x0000_t75" alt="" style='position:absolute;
 left:0;text-align:left;margin-left:0;margin-top:0;width:24pt;height:24pt;
 z-index:1;mso-wrap-distance-left:0;mso-wrap-distance-right:0;
 mso-position-horizontal:left;mso-position-vertical-relative:line'
 o:allowoverlap="f">
 <w:wrap type="square"/>
</v:shape><![endif]-->
    <img src="/dmic-corp/images/trucs3.gif" align="left" v:shapes="_x0000_s1026" width="32" height="32" /><span style="font-size:11.0pt;
font-family:Verdana"><font color="#FFFFFF">
      <o:p> </o:p>
    </font></span></p>
  <p class="MsoNormal" style="margin-right:36.0pt;mso-margin-top-alt:auto;
mso-margin-bottom-alt:auto;margin-left:36.0pt;text-align:justify"><span style="font-size:11.0pt;font-family:Verdana"><font color="#FFFFFF">- <b>Nom</b> : Strago<br />
    - <b>Age</b> : 70 ans<br />
    - <b>Taille</b> : 1m 50<br />
    - <b>Poids</b> : 47 Kg<br />
    - <b>Capacité</b> : Lore
  <o:p> </o:p>
  </font></span></p>
  <p class="MsoNormal" style="margin-right:36.0pt;mso-margin-top-alt:auto;
mso-margin-bottom-alt:auto;margin-left:36.0pt;text-align:justify"><span style="font-size:11.0pt;font-family:Verdana;mso-fareast-font-family:&quot;Times New Roman&quot;;
mso-bidi-font-family:&quot;Times New Roman&quot;;mso-ansi-language:FR;mso-fareast-language:
FR;mso-bidi-language:AR-SA"><font color="#FFFFFF">- <b>Description brève</b> : Vivant dans la petite ville de Thamassa, Strago est l'un des derniers descendants de ceux qui sont capable d'utiliser la magie bleue. Il se joint à l'équipe après avoir sauvé sa petit fille Relm d'un immeuble en feu.</font></span></p>
  <p align="center">&nbsp;</p>
  <p align="center"><img border="0" src="/dmic-corp/images/p_relm.jpg" width="202" height="202" /></p>
  <p class="MsoNormal" style="margin-bottom:12.0pt;text-align:justify">
    <!--[if gte vml 1]><v:shapetype
 id="_x0000_t75" coordsize="21600,21600" o:spt="75" o:preferrelative="t"
 path="m@4@5l@4@11@9@11@9@5xe" filled="f" stroked="f">
 <v:stroke joinstyle="miter"/>
 <v:formulas>
  <v:f eqn="if lineDrawn pixelLineWidth 0"/>
  <v:f eqn="sum @0 1 0"/>
  <v:f eqn="sum 0 0 @1"/>
  <v:f eqn="prod @2 1 2"/>
  <v:f eqn="prod @3 21600 pixelWidth"/>
  <v:f eqn="prod @3 21600 pixelHeight"/>
  <v:f eqn="sum @0 0 1"/>
  <v:f eqn="prod @6 1 2"/>
  <v:f eqn="prod @7 21600 pixelWidth"/>
  <v:f eqn="sum @8 21600 0"/>
  <v:f eqn="prod @7 21600 pixelHeight"/>
  <v:f eqn="sum @10 21600 0"/>
 </v:formulas>
 <v:path o:extrusionok="f" gradientshapeok="t" o:connecttype="rect"/>
 <o:lock v:ext="edit" aspectratio="t"/>
</v:shapetype><v:shape id="_x0000_s1026" type="#_x0000_t75" alt="" style='position:absolute;
 left:0;text-align:left;margin-left:0;margin-top:0;width:24pt;height:24pt;
 z-index:1;mso-wrap-distance-left:0;mso-wrap-distance-right:0;
 mso-position-horizontal:left;mso-position-vertical-relative:line'
 o:allowoverlap="f">
 <w:wrap type="square"/>
</v:shape><![endif]-->
    <img src="/dmic-corp/images/trucs4.gif" align="left" v:shapes="_x0000_s1026" width="32" height="32" /><span style="font-size:11.0pt;
font-family:Verdana">
      <o:p> </o:p>
    </span></p>
  <p class="MsoNormal" style="margin-right:36.0pt;mso-margin-top-alt:auto;
mso-margin-bottom-alt:auto;margin-left:36.0pt;text-align:justify"><span style="font-size:11.0pt;font-family:Verdana"><font color="#FFFFFF">- <b>Nom</b> : Relm<br />
    - <b>Age</b> : 10 ans<br />
    - <b>Taille</b> : 1m 50<br />
    - <b>Poids</b> : 44 Kg<br />
    - <b>Capacité</b> : Skecth
  <o:p> </o:p>
  </font></span></p>
  <p class="MsoNormal" style="margin-right:36.0pt;mso-margin-top-alt:auto;
mso-margin-bottom-alt:auto;margin-left:36.0pt;text-align:justify"><span style="font-size:11.0pt;font-family:Verdana;mso-fareast-font-family:&quot;Times New Roman&quot;;
mso-bidi-font-family:&quot;Times New Roman&quot;;mso-ansi-language:FR;mso-fareast-language:
FR;mso-bidi-language:AR-SA"><font color="#FFFFFF">- <b>Description brève</b> : La capacité artistique de Relm n'a rien d'amusant. Les images qu'elle capture sont si réelles qu'elles deviennent réalité. Malgré l'interdiction de son grand-père Strago, elle se joint quand même à la résistance. C'est une enfant plutôt
    impolie. Elle aime bien le chien de Shadow et le lien entre ce dernier et elle est totalement inconnu.</font></span></p>
  <p align="center">&nbsp;</p>
  <p align="center"><img border="0" src="/dmic-corp/images/p_mog.jpg" width="202" height="202" /></p>
  <p class="MsoNormal" style="margin-bottom:12.0pt;text-align:justify">
    <!--[if gte vml 1]><v:shapetype
 id="_x0000_t75" coordsize="21600,21600" o:spt="75" o:preferrelative="t"
 path="m@4@5l@4@11@9@11@9@5xe" filled="f" stroked="f">
 <v:stroke joinstyle="miter"/>
 <v:formulas>
  <v:f eqn="if lineDrawn pixelLineWidth 0"/>
  <v:f eqn="sum @0 1 0"/>
  <v:f eqn="sum 0 0 @1"/>
  <v:f eqn="prod @2 1 2"/>
  <v:f eqn="prod @3 21600 pixelWidth"/>
  <v:f eqn="prod @3 21600 pixelHeight"/>
  <v:f eqn="sum @0 0 1"/>
  <v:f eqn="prod @6 1 2"/>
  <v:f eqn="prod @7 21600 pixelWidth"/>
  <v:f eqn="sum @8 21600 0"/>
  <v:f eqn="prod @7 21600 pixelHeight"/>
  <v:f eqn="sum @10 21600 0"/>
 </v:formulas>
 <v:path o:extrusionok="f" gradientshapeok="t" o:connecttype="rect"/>
 <o:lock v:ext="edit" aspectratio="t"/>
</v:shapetype><v:shape id="_x0000_s1026" type="#_x0000_t75" alt="" style='position:absolute;
 left:0;text-align:left;margin-left:0;margin-top:0;width:24pt;height:24pt;
 z-index:1;mso-wrap-distance-left:0;mso-wrap-distance-right:0;
 mso-position-horizontal:left;mso-position-vertical-relative:line'
 o:allowoverlap="f">
 <w:wrap type="square"/>
</v:shape><![endif]-->
    <img src="/dmic-corp/images/trucs5.gif" align="left" v:shapes="_x0000_s1026" width="32" height="32" /><span style="font-size:11.0pt;
font-family:Verdana">
      <o:p> </o:p>
    </span></p>
  <p class="MsoNormal" style="margin-right:36.0pt;mso-margin-top-alt:auto;
mso-margin-bottom-alt:auto;margin-left:36.0pt;text-align:justify"><font color="#FFFFFF"><span style="font-size:11.0pt;font-family:Verdana">- <b>Nom</b> : Mog<br />
    - <b>Age</b> : 11 ans<br />
    - <b>Taille</b> : 1m 20<br />
    - <b>Poids</b> : 48 Kg<br />
    - <b>Capacité</b> : Dance
  <o:p> </o:p>
    </span><span style="font-size:11.0pt;font-family:Verdana;mso-fareast-font-family:&quot;Times New Roman&quot;;
mso-bidi-font-family:&quot;Times New Roman&quot;;mso-ansi-language:FR;mso-fareast-language:
FR;mso-bidi-language:AR-SA">- <b>Description brève</b> : La seule occasion d'obtenir le moogle ( appelé plus souvent Mog ) est de le sauver lorsqu'il est tenu en hotage à Narshe par Lone Wolf, un pickpocket. Une fois sauvé, Mog nous raconte que l'Esper Ramuh est venu dans son rêve pour lui demander de se joindre à la résistance.
      Sans laisser le choix à Terra et ses compagnons, Mog se joint effectivement à la partie.</span></font></p>
  <p align="center"></p>
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
