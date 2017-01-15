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
  <p align="center"><font size="7" face="Comic Sans MS" color="#FF0000"><b><u><i>Code Action Replay</i></u></b></font></p>
  <p align="center"><img src="/dmic-corp/images/FF6Logo.jpg" alt="" width="320" height="240" border="0" /></p>
  <p align="center">&nbsp;</p>
  <div align="center">
    <center>
      <pre><font size="4"><font face="Comic Sans MS">Code Européen</font>
</font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font face="Comic Sans MS"><b><i><u><font color="#FF0000" size="5">Stop Events Timer</font></u></i></b><font size="4"> </font></font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font size="4">
D0044B58 F189
3002F189 00A4
 </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre>&nbsp;</pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><b><i><u><font color="#FF0000" size="5" face="Comic Sans MS">Start with Max Exp </font></u></i></b></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font size="4">
D0103944 E0F2
8010394C 0099
D0103944 E0F2
8010394E 2403
D0103944 E0F2
80103956 A043 </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre>&nbsp;</pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><b><i><u><font color="#FF0000" size="5" face="Comic Sans MS">Max Sword Tech Meter/Attack </font></u></i></b></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font size="4">
D0133B08 990C
30133B86 006E
 </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre>&nbsp;</pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font face="Comic Sans MS" size="5" color="#FF0000"><b><i><u>255 MP After Fight</u></i></b></font><font size="4"> </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font size="4">
D002E0F0 0800
3002E0FB 00FF
 </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre>&nbsp;</pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><b><i><u><font face="Comic Sans MS" size="5" color="#FF0000">No Random Battle </font><font face="Comic Sans MS" color="#FF0000" size="4">(On=Select/Off=L2+R2)</font><font face="Comic Sans MS" size="5" color="#FF0000"> </font></u></i></b></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font size="4">
D0007572 FFFE
80007F00 0001
D0007F00 0001
8002FF6E 0000
D0007572 FCFF
80007F00 0000 </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre>&nbsp;</pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><b><i><u><font color="#FF0000" size="5" face="Comic Sans MS">Inf Battle HP/One hit kill </font></u></i></b></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font size="4">
D016D134 0005
8016D130 0007
D016D134 0005
8016D132 2E2F
D016D134 0005
8016D136 15E0
D016D160 0003
8016D15C 270F
D016D160 0003
8016D15E 2402
D016D160 0003
8016D166 A602</font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font size="4">
 </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font face="Comic Sans MS" size="5" color="#FF0000"><b><i><u>Battle Magic Cost 0 MP </u></i></b></font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font size="4">
D018340C 990C
3018345E 0040
D018340C 990C
3018346E 0060
D018340C 990C
3018347E 0040
D018340C 990C
3018348E 0060
 </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre>&nbsp;</pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font face="Comic Sans MS" size="5" color="#FF0000"><b><i><u>Terra Inf Morph Time </u></i></b></font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font size="4">
D01580D4 1F30
801580D6 2400
 </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre>&nbsp;</pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><b><i><font face="Comic Sans MS" size="5" color="#FF0000"><u>All Blitzes</u></font></i></b></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font size="4"> 
3002FD28 00FF
 </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre>&nbsp;</pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font face="Comic Sans MS" size="5" color="#FF0000"><b><i><u>All Dances</u></i></b></font><font size="4"> </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font size="4">
3002FD4C 00FF
 </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre>&nbsp;</pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font face="Comic Sans MS" size="5" color="#FF0000"><b><i><u>All Lores </u></i></b></font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font size="4">
3002FD29 00FF
8002FD2A FFFF </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre>&nbsp;</pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font face="Comic Sans MS" size="5" color="#FF0000"><b><i><u>Max Stats All </u></i></b></font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font size="4">
D01277E4 75F5
801277A4 00FF
D01277E4 75F5
801277A6 2405
D01277E4 75F5
801277E6 A045
</font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre>&nbsp;</pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font face="Comic Sans MS" size="5" color="#FF0000"><b><i><u>All Rage Attacks</u></i></b></font><font size="4"> </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font size="4">
D00EF580 1021
800EF584 00FF
D00EF580 1021
800EF586 2403
D00EF580 1021
800EF588 7D2C
D00EF580 1021
800EF58A A043
 </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre>&nbsp;</pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font face="Comic Sans MS" size="5" color="#FF0000"><b><i><u>All Sword Techs </u></i></b></font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font size="4">
3002FCF7 00FF </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre>&nbsp;</pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font face="Comic Sans MS" size="5" color="#FF0000"><b><i><u>All Magics Complete </u></i></b></font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font size="4">
80008038 3021
8000803C 00FF
8000803E 2404
80008044 FA6E
80008046 A024
80008048 FB46
8000804A A024
8000804C FC1E
8000804E A024
80008054 0001
80008056 24C6
80008058 00D9
8000805A 28C2
8000805C FFF9
8000805E 1440
80008060 0001
80008062 2421
80008064 0008
80008066 03E0
D00EDD20 98CC
800EE2E8 200E
D00EDD20 98CC
800EE2EA 0800
 </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre>&nbsp;</pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font face="Comic Sans MS" size="5" color="#FF0000"><b><i><u>All Espers </u></i></b></font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font size="4">
3002FA69 00FF
8002FA6A FFFF
3002FA6C 00FF
 </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre>&nbsp;</pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font face="Comic Sans MS" size="5" color="#FF0000"><b><i><u>All Rare Items </u></i></b></font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font size="4">
8002FEBA FFFF
8002FEBC FFFF
 </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre>&nbsp;</pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font face="Comic Sans MS" size="5" color="#FF0000"><b><i><u>Save Anywhere</u></i></b></font><font size="4"> </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font size="4">
D0007572 EFFF
8002E200 8000
 </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre>&nbsp;</pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font face="Comic Sans MS" size="5" color="#FF0000"><i><u><b>Minimum 50,000 Cash </b></u></i></font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font size="4">
8002F860 C350
 </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre>&nbsp;</pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><b><i><u><font face="Comic Sans MS" size="5" color="#FF0000">All Items Max</font></u></i></b><font size="4"> </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font size="4">
80008000 4021
80008004 0063
80008006 3409
8000800C F869
8000800E 2421
80008012 A028
80008014 0100
80008016 A029
8000801C 0001
8000801E 2508
80008020 00FF
80008022 2902
80008024 FFFA
80008026 1440
80008028 0001
8000802A 2421
8000802C 0008
8000802E 03E0
D0007572 EFFF
3002F869 0000
D01135B0 E029
801135B4 2000
D01135B0 E029
801135B6 0800 
 </font></pre>
    </center>
  </div>
  <p align="center"></p>
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
