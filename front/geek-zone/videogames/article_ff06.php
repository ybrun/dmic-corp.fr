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
  <p align="center"><b><font size="7" color="#FF0000"><i><u><img border="0" src="/dmic-corp/images/FF6Logo.jpg" width="320" height="240" /></u></i></font></b></p>
  <p align="center">&nbsp;</p>
  <p><i><b><font face="Comic Sans MS" color="#FFFFFF">Pourquoi s'obstiner à reconstruire nos biens sachant qu'ils vont être à nouveau détruits? Pourquoi continuer à s'attacher à la vie sachant qu'un jour nous allons mourir?</font></b></i></p>
  <p><b><font face="Comic Sans MS" color="#FFFFFF">Telles étaient les dernières paroles du cynique Kefka qui a finalement prouvé qu'il n'était pas un monstre ou le diable réincarné, mais juste un humain, une victime du monde qui n'a jamais cru à la vie.</font></b></p>
  <p><b><font face="Comic Sans MS" color="#FFFFFF">Mes très chers fans de rpg, laissez-moi vous présenter le jeu que la plupart des RPG-gamers considèrent comme le meilleur rpg de tous les temps alias Final Fantasy 6!!!</font></b></p>
  <p><font face="Comic Sans MS" color="#FFFFFF"><img border="0" src="/dmic-corp/images/ff3boite1.jpg" width="267" height="187" /></font></p>
  <p>&nbsp;</p>
  <p><font face="Comic Sans MS" color="#FFFFFF"><img border="0" src="/dmic-corp/images/ff3boite2.jpg" width="268" height="186" /></font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF"><img border="0" src="/dmic-corp/images/ff3notice.jpg" width="345" height="253" /></font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF"><img border="0" src="/dmic-corp/images/ffanthoboite1.jpg" width="200" height="174" /></font></p>
  <p><font face="Comic Sans MS" color="#FFFFFF"><img border="0" src="/dmic-corp/images/ffanthoboite2.jpg" width="200" height="173" /></font></p>
  <p>&nbsp;</p>
  <p class="MsoNormal" style="margin-top:0cm;margin-right:3.75pt;margin-bottom:
12.0pt;margin-left:0cm;text-align:justify"><font face="Comic Sans MS" color="#FFFFFF">Si l'on devait retenir un seul épisode de cette série mythique qu'est Final
    Fantasy, ce serait probablement celui-là. En effet, Final Fantasy VI possède un excellent scénario.<br />
    <br />
    C'est l'histoire d'un monde dans lequel la magie a disparu depuis plus de 1000 ans. Un homme nommé Ghestal décide de récupérer cette magie afin de conquérir le monde. Il découvre ensuite l'existence d'une jeune fille, nommée
    Tina, qui possède des pouvoirs magiques. Tina fait partie de votre équipe et vous tentez de
    reconquérir le monde.<br />
    <br />
    Final Fantasy VI met en scène 14 personnages dont 2 cachés avec lesquels vous pouvez jouez. En fait, il n'y pas vraiment de &quot; héros &quot;, chaque personnage a sa propre motivation : Locke est tourmenté après avoir perdu sa fiancée, Tina est constamment déchiré par sa personnalité, Célès et Léo se rebellent
    contre l'Empire et Mashe et Edgar sont deux frères qui s'adorent. De plus, chaque personnage possède ses propres capacités : Locke sait subtiliser les objets des ennemis, Strago apprend les attaques qu''il reçoit ... Chaque personnage se veut unique et le joueur peut s'attacher à l'un d'entre eux.<br style="mso-special-character:line-break" />
    <br style="mso-special-character:line-break" />
    <o:p> </o:p>
  </font></p>
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:3.75pt;
margin-bottom:12.0pt;margin-left:0cm;text-align:center"><font face="Comic Sans MS" color="#FFFFFF">
    <!--[if gte vml 1]><v:shapetype id="_x0000_t75"
 coordsize="21600,21600" o:spt="75" o:preferrelative="t" path="m@4@5l@4@11@9@11@9@5xe"
 filled="f" stroked="f">
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
</v:shapetype><v:shape id="_x0000_i1025" type="#_x0000_t75" alt="" style='width:24pt;
 height:24pt'/><![endif]-->
    <img src="/dmic-corp/images/Bahamut.jpg" v:shapes="_x0000_i1025" width="192" height="305" />
    <o:p> </o:p>
  </font></p>
  <p class="MsoNormal" style="margin-right:3.75pt;text-align:justify"><font face="Comic Sans MS" color="#FFFFFF">Ce Final Fantasy peut donc être considéré commme le meilleur du nom, non pas pour ses graphismes, mais pour la qualité de son scénario : les
    Espers, la quêtes des huits dragons ...<br />
    <br />
    NB : Final Fantasy Collection est sorti au Japon en Mars 99 sur Playstation. Il regroupe les 4, 5 et 6 ème épisodes de la saga et s'est vendu jusqu'à présent à 420 000 exemplaires. Ce coffret est sorti aux USA, amputé de
    FFIV, en octobre 99. FFVI est enfin sorti en Europe en Mars 2002, accompagné d'une démo jouable de
    FFX.
  <o:p> </o:p>
  </font></p>
  <p class="MsoNormal"><font face="Comic Sans MS" color="#FFFFFF">&nbsp;
    <o:p> </o:p>
  </font></p>
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
