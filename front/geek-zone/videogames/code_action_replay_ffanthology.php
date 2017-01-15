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
  <p align="center"><u><i><b><font size="7" face="Comic Sans MS" color="#FF0000">Code Action Replay&nbsp;</font></b></i></u></p>
  <p align="center"><u><i><b><font size="7" face="Comic Sans MS" color="#FF0000">Final Fantasy Anthology</font></b></i></u></p>
  <p align="center">&nbsp;</p>
  <p align="center"><font face="Comic Sans MS" size="4">Les codes suivants sont ceux de la version européenne que j'ai testé moi-même. Je vous les offres ainsi. Chaque code fonctionne soit pour Final Fantasy IV ou pour Final Fantasy V, à vous de trouver celui qui fonctionne !</font></p>
  <div align="center">
    <center>
      <pre><font size="5" face="Comic Sans MS" color="#FF0000"><b><i><u>Have All Item Set 8 </u></i></b></font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font size="4">
8002E812 6363
8002E814 6363
8002E816 6363
8002E818 6363
8002E81A 6363 </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre>&nbsp;</pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font size="5" face="Comic Sans MS" color="#FF0000"><b><i><u>Have All Item Set 5 </u></i></b></font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font size="4">
8002E7B8 6363
8002E7BA 6363
8002E7BC 6363
8002E7BE 6363
8002E7C0 6363
8002E7C2 6363
8002E7C4 6363
8002E7C6 6363
8002E7C8 6363
8002E7CA 6363
8002E7CC 6363
8002E7CE 6363
8002E7D0 6363
8002E7D2 6363
8002E7D4 6363 </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre>&nbsp;</pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><b><i><u><font color="#FF0000" size="5" face="Comic Sans MS">Have All Item Set 6 </font></u></i></b></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font size="4">
8002E7D6 6363
8002E7D8 6363
8002E7DA 6363
8002E7DC 6363
8002E7DE 6363
8002E7E0 6363
8002E7E2 6363
8002E7E4 6363
8002E7E6 6363
8002E7E8 6363
8002E7EA 6363
8002E7EC 6363
8002E7EE 6363
8002E7F0 6363
8002E7F2 6363 </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre>&nbsp;</pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><b><i><u><font color="#FF0000" size="5" face="Comic Sans MS">Have All Item Set 7</font></u></i></b><font size="4"> </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font size="4">
8002E7F4 6363
8002E7F6 6363
8002E7F8 6363
8002E7FA 6363
8002E7FC 6363
8002E7FE 6363
8002E800 6363
8002E802 6363
8002E804 6363
8002E806 6363
8002E808 6363
8002E80A 6363
8002E80C 6363
8002E80E 6363
8002E810 6363 </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre>&nbsp;</pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><b><i><u><font color="#FF0000" size="5" face="Comic Sans MS">Have All Item Set 2 </font></u></i></b></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font size="4">8002E75E 6363
8002E760 6363
8002E762 6363
8002E764 6363
8002E766 6363
8002E768 6363
8002E76A 6363
8002E76C 6363
8002E76E 6363
8002E770 6363
8002E772 6363
8002E774 6363
8002E776 6363
8002E778 6363
8002E77A 6363 </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre>&nbsp;</pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><b><i><u><font color="#FF0000" size="5" face="Comic Sans MS">Have All Item Set 3 </font></u></i></b></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font size="4">
8002E77C 6363
8002E77E 6363
8002E780 6363
8002E782 6363
8002E784 6363
8002E786 6363
8002E788 6363
8002E78A 6363
8002E78C 6363
8002E78E 6363
8002E790 6363
8002E792 6363
8002E794 6363
8002E796 6363
8002E798 6363 </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre>&nbsp;</pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><b><i><u><font color="#FF0000" size="5" face="Comic Sans MS">Have All Item Set 4 </font></u></i></b></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font size="4">
8002E79A 6363
8002E79C 6363
8002E79E 6363
8002E7A0 6363
8002E7A2 6363
8002E7A4 6363
8002E7A6 6363
8002E7A8 6363
8002E7AA 6363
8002E7AC 6363
8002E7AE 6363
8002E7B0 6363
8002E7B2 6363
8002E7B4 6363
8002E7B6 6363 </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre>&nbsp;</pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><u><i><b><font color="#FF0000" size="5" face="Comic Sans MS">Have All Item Set 1 </font></b></i></u><font size="4">
</font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font size="4">3002E6FD E1E0
8002E6FE E3E2
8002E700 E5E4
8002E702 E7E6
8002E704 E9E8
8002E706 EBEA
8002E708 EDEC
8002E70A EFEE </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre>&nbsp;</pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><u><i><b><font color="#FF0000" size="5" face="Comic Sans MS">All Infinite Set 1 </font></b></i></u></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><u><i><b><font color="#FF0000" size="5" face="Comic Sans MS"> </font></b></i></u><font size="4">8002E740 6363
8002E742 6363
8002E744 6363
8002E746 6363
8002E748 6363
8002E74A 6363
8002E74C 6363
8002E74E 6363
8002E750 6363
8002E752 6363
8002E754 6363
8002E756 6363
8002E758 6363
8002E75A 6363
8002E75C 6363 </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre>&nbsp;</pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><u><i><b><font color="#FF0000" size="6">Have All Item Set 2 </font></b></i></u></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font size="4">
8002E70C F1F0
8002E70E F3F2
8002E710 F5F4
8002E712 F7F6
8002E714 F9F8
8002E716 FBFA
8002E718 FDFC
8002E71A FFFE </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre>&nbsp;</pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><b><i><u><font color="#FF0000" size="5" face="Comic Sans MS">Have All Armor Set 1</font></u></i></b><font size="4"> </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font size="4">
3002E6AD 0081
8002E6AE 8382
8002E6B0 8584
8002E6B2 8786
8002E6B4 8988
8002E6B6 8B8A
8002E6B8 8D8C
8002E6BA 8F8E
8002E6BC 9190
8002E6BE 9392
8002E6C0 9594
8002E6C2 9796
8002E6C4 9998
8002E6C6 9B9A
8002E6C8 9D9C </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre>&nbsp;</pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><u><i><b><font color="#FF0000" size="5" face="Comic Sans MS">Have All Armor Set 2 </font></b></i></u></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><u><i><b><font color="#FF0000" size="5" face="Comic Sans MS"> </font></b></i></u><font size="4">8002E6CA 9F9E
8002E6CC A1A0
8002E6CE A3A2
8002E6D0 A5A4
8002E6D2 A7A6
8002E6D4 A9A8
8002E6D6 ABAA
8002E6D8 ADAC
8002E6DA AFAE
8002E6DC B1B0
8002E6DE B3B2
8002E6E0 B5B4
8002E6E2 B7B6
8002E6E4 B9B8
8002E6E6 BBBA </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre>&nbsp;</pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><u><i><b><font color="#FF0000" size="5" face="Comic Sans MS">Have All Armor Set 3 </font></b></i></u></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><u><i><b><font color="#FF0000" size="5" face="Comic Sans MS"> </font></b></i></u><font size="4">8002E6E8 BDBC
8002E6EA BFBE
8002E6EC C1C0
8002E6EE C3C2
8002E6F0 C5C4
8002E6F2 C7C6
8002E6F4 C9C8
8002E6F6 CBCA
8002E6F8 CDCC
8002E6FA CFCE
3002E6FC 00D0 </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre>&nbsp;</pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><u><i><b><font color="#FF0000" size="5" face="Comic Sans MS">Have All Weapons Set 2 </font></b></i></u></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><u><i><b><font color="#FF0000" size="5" face="Comic Sans MS"> </font></b></i></u><font size="4">8002E65E 2120
8002E660 2322
8002E662 2524
8002E664 2726
8002E666 2928
8002E668 2B2A
8002E66A 2D2C
8002E66C 2F2E
8002E66E 3130
8002E670 3332
8002E672 3534
8002E674 3736
8002E676 3938
8002E678 3B3A
8002E67A 3D3C </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre>&nbsp;</pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><u><i><b><font color="#FF0000" size="5" face="Comic Sans MS">Have All Weapons Set 3</font></b></i></u><font size="4"> </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font size="4">
8002E67C 3F3E
8002E67E 4140
8002E680 4342
8002E682 4544
8002E684 4746
8002E686 4948
8002E688 4B4A
8002E68A 4D4C
8002E68C 4F4E
8002E68E 5150
8002E690 5352
8002E692 5554
8002E694 5756
8002E696 5958
8002E698 5B5A </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre>&nbsp;</pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><b><i><u><font color="#FF0000" size="5" face="Comic Sans MS">Have All Weapons Set 4</font></u></i></b><font size="4"> </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font size="4">
8002E69A 5D5C
8002E69C 5F5E
8002E69E 6160
8002E6A0 6362
8002E6A2 6564
8002E6A4 6766
8002E6A6 6968
8002E6A8 6B6A
8002E6AA 6D6C
3002E6AC 006E </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre>&nbsp;</pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><b><i><u><font color="#FF0000" size="5" face="Comic Sans MS">Have All Jobs </font></u></i></b></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font size="4">
8002E840 FFFF
3002E842 00FF </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre>&nbsp;</pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><u><i><b><font color="#FF0000" size="5" face="Comic Sans MS">Have All Magic</font></b></i></u><font size="4"> </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font size="4">
8002E950 FFFF
8002E952 FFFF
8002E954 FFFF
8002E956 FFFF
8002E958 FFFF
8002E95A FFFF
8002E95C FFFF
8002E95E FFFF
8002E960 FFFF
8002E962 FFFF </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre>&nbsp;</pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><b><i><u><font color="#FF0000" size="5" face="Comic Sans MS">Have All Weapons Set 1 </font></u></i></b></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font size="4">
8002E640 0302
8002E642 0504
8002E644 0706
8002E646 0908
8002E648 0B0A
8002E64A 0D0C
8002E64C 0F0E
8002E64E 1110
8002E650 1312
8002E652 1514
8002E654 1716
8002E656 1918
8002E658 1B1A
8002E65A 1D1C
8002E65C 1F1E </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre>&nbsp;</pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><b><i><u><font color="#FF0000" size="5" face="Comic Sans MS">2nd Character Max Status</font><font color="#FF0000" face="Comic Sans MS" size="4"> (pour FF5)</font></u></i></b><font size="4"> </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font size="4">
8002E556 270F
8002E558 270F
8002E55A 03E7
8002E55C 03E7
8002E574 6363
8002E576 6363 </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre>&nbsp;</pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><u><i><b><font color="#FF0000" size="5" face="Comic Sans MS">3rd Character Max Status </font><font color="#FF0000" face="Comic Sans MS" size="4">(pour FF5)</font></b></i></u></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font size="4">
8002E5A6 270F
8002E5A8 270F
8002E5AA 03E7
8002E5AC 03E7
8002EAB4 6363
8002E5B6 6363 </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre>&nbsp;</pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><u><i><b><font color="#FF0000" size="5" face="Comic Sans MS">4th Character Max Status </font><font color="#FF0000" face="Comic Sans MS" size="4">(pour FF5)</font></b></i></u><font size="4"> </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font size="4">
8002E5F6 270F
8002E5F8 270F
8002E5FA 03E7
8002E5FC 03E7
8002E614 6363
8002E616 6363 </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre>&nbsp;</pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font face="Comic Sans MS"><u><i><b><font color="#FF0000" size="5">One Fight For Job Master</font></b></i></u></font><u><i><b><font size="4"> (pour FF5)</font></b></i></u><font size="4"> </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font size="4">
3002E53C 00FF
3002E58C 00FF
3002E5DC 00FF
3002E62C 00FF </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre>&nbsp;</pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font face="Comic Sans MS"><u><i><b><font color="#FF0000" size="5">One Fight For Level 99</font></b></i></u></font><font face="Comic Sans MS" size="4"><font color="#FF0000"><u><i><b> (pour FF5)</b></i></u></font> </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font size="4">
3002E503 007F
8002E504 9896
3002E553 007F
8002E554 9896
3002E5A3 007F
8002E5A4 9896
3002E5F3 007F
8002E5F4 9896 </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre>&nbsp;</pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><u><i><b><font color="#FF0000" size="5" face="Comic Sans MS">1st Character Max Status </font><font color="#FF0000" face="Comic Sans MS" size="4">(pour FF5)</font></b></i></u><font size="4"> </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font size="4">
8002E506 270F
8002E508 270F
8002E50A 03E7
8002E50C 03E7
8002E524 6363
8002E526 6363 </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre>&nbsp;</pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><i><b><u><font color="#FF0000" size="5" face="Comic Sans MS">Save Anywhere </font></u></b></i></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font size="4">
8002E144 0080 </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre>&nbsp;</pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><u><i><b><font color="#FF0000" size="5" face="Comic Sans MS">No Enemies </font><font color="#FF0000" face="Comic Sans MS" size="4">(ne fonctionne uniquement pour FF5)</font></b></i></u></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font size="4">
8002F6A8 0000 </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre>&nbsp;</pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><u><i><b><font color="#FF0000" size="5" face="Comic Sans MS">Time Is Always 00:00</font></b></i></u><font size="4"> </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font size="4">
8002E94A 0000
8002E94C 0000 </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre>&nbsp;</pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><u><i><b><font color="#FF0000" size="5" face="Comic Sans MS">Pots Of Cash </font><font color="#FF0000" face="Comic Sans MS" size="4">(fonctionne uniquement sur FF4)</font></b></i></u></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font size="4">
800D16A0 967F
800D16A2 0098 </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre>&nbsp;</pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><u><i><b><font color="#FF0000" size="5" face="Comic Sans MS">Super Fast Leveling </font><font color="#FF0000" face="Comic Sans MS" size="4">(pour FF4)</font></b></i></u></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font size="4">
800D5990 FF00
800D5992 7EFF </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre>&nbsp;</pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font face="Comic Sans MS"><u><i><b><font color="#FF0000" size="5">Pots Of Cash </font><font color="#FF0000">(pour FF5)</font></b></i></u></font><font face="Comic Sans MS"> </font></pre>
    </center>
  </div>
  <div align="center">
    <center>
      <pre><font size="4"><font face="Comic Sans MS">
        </font>3002E947 007F
8002E948 9896 
 </font></pre>
    </center>
  </div>
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
