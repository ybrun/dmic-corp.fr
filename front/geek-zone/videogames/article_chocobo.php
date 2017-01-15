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
  <p align="center">&nbsp;<b><i><u><font size="7" face="Comic Sans MS" color="#FF0000">Les Chocobo</font></u></i></b></p>
  <p align="center">&nbsp;</p>
  <font FACE="Verdana" SIZE="3">
  <p align="center"><img src="/dmic-corp/images/d_choco_choco_neige.jpg" width="373" height="248" /></p>
  <p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font><font color="#FFFFFF" face="Comic Sans MS" size="3">Mmmhh... Voila un petit dossier qui devrait je pense, plaire à plus d'un d'entre vous ^^ Je crois que j'ai fait un peu près le tour de tout ce qui se rapproche de près ou de loin aux Chocobos. Si toute fois
    vous avez quelque à y ajouter, vous pouvez toujours m'envoyer ça par email. Enfin... treve de bavardage et entrons directement dans le vif du sujet !<br />
    <br />
    Mais d'où vient ce nom ? Les développeurs de chez Squaresoft se sont en fait inspirés du nom d'une friandise japonaise : le &quot;Chocoball&quot; (une cacahuète englobée d'une couche de chocolat, pour tout vous dire :p) pour trouver le nom &quot;Chocobo&quot; En effet, un drôle d'oiseau était dessiné sur son emballage :)<br />
  </font></p>
  <p align="center"><font color="#FFFFFF" face="Comic Sans MS" size="3"><img src="/dmic-corp/images/d_choco_chocoball.jpg" width="144" height="223" /></font></p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS" size="3"><br />
    <br />
    Leur première apparition dans la série fut dans Final Fantasy II, ceux-ci étaient cachés dans une forêt. Ensuite et tout au long de la série, les Chocobos ont servi de moyen de transport o_Ô Pour vous donner un exemple, dans Final Fantasy VI on pouvait les louer et ainsi se déplacer sur la carte sans être affronté par
    les ennemis ! Vint alors Final Fantasy, 7ème du nom. Les Chocobos ont vraiment pris une place très importante dans cet épisode. Grâce à un système assez prise de tête pour certains (que de bons souvenirs ^o^), on pouvait les accoupler et obtenir des oiseaux de différentes couleurs ^^ Les bleus avaient la capacité de
    marcher sur l'eau, les verts escalader les montagnes,... Ce système de couleurs a d'ailleurs été repris dans Final Fantasy IX.<br />
    <br />
    Et Final Fantasy X ? Pour l'instant on ne sait pas encore grand chose des chocobos de ce 10ème opus ^^ Mais ils seront bien présents ! Ils serviront encore surement de &quot;moyen de transports&quot; et n'auront pas une très grande importance dans le jeu. Enfin, attendons d'y avoir joué avant d'en parler :)<br />
  <br />
    Les Chocobos ont donc toujours occupé une place assez secondaire dans la série. Néanmoins, Square n'a pas hésité à produire plusieurs jeux où seuls les Chocobos sont les héros. C'est ainsi que Chocobo Dungeon I &amp; II, Chocobo Racing ou encore Chocobo Stallion sont sortis sur PlayStation.<br />
  </font></p>
  <p align="center"><font size="3" color="#FFFFFF" face="Comic Sans MS"><img src="/dmic-corp/images/d_choco_cover_b_1.jpg" width="715" height="715" /><img src="/dmic-corp/images/d_choco_cover_b_2.jpg" width="715" height="715" /><img src="/dmic-corp/images/d_choco_cover_b_3.jpg" width="715" height="715" /><img src="/dmic-corp/images/d_choco_cover_b_4.jpg" width="715" height="715" /></font></p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS" size="3"><br />
    <br />
    <br />
    - <b>Zoom sur Chocobo Dungeon II</b><br />
    Tandis tous les nouveaux jeux Squaresoft sont dotés d'un système qui leur sont propres, Chocobo Dungeon 2 reste dans le &quot;classique&quot; avec une interface très simple et un système de génération de donjons. Ne vous attendez donc pas à quelque chose d'extraordinaire en y jouant ;)<br />
  <br />
    Le principe même du jeu n'est pas difficle à saisir : vous explorez un donjon avec votre Chocobo, battez des ennemis, ramassez les trésors et passez au donjon suivant. Le tout sur une musique bien débile, typique aux Chocobos ^^. Bref rien de bien compliqué et même ennuyant à la longue. Quelques petits pièges et 2, 3
    puzzles vous bloqueront néanmoins dans votre quête, mais jamais pour bien longtemps ;) Cependant le gameplay est assez agréable, et le système de combat est comme le reste du jeu : simple.<br />
  </font></p>
  <p align="center"><font color="#FFFFFF" face="Comic Sans MS" size="3"><img src="/dmic-corp/images/d_choco_cd2_1.jpg" width="252" height="200" /><img src="/dmic-corp/images/d_choco_cd2_2.jpg" width="252" height="200" /></font></p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS" size="3"><br />
    <br />
    Ce soft amusant, mignon mais assez répétitif est donc réservé aux vrais fans de Chocobos. Dans le même genre, essayez-vous au premier épisode ;-)<br />
  <br />
  <br />
    Comme je le dis plus haut, la célèbre musique qui accompagne toujours les Chocobos est assez... débile ou &quot;amusante&quot; dirons-nous. Notez que celle-ci a tout de même évoluée au fil du temps : on peut remarquer que le thème des Chocobos est beaucoup &quot;électronique&quot; dans Final Fantasy 4 que dans Final
    Fantasy 9 où, là, il est plus recherché. Ecoutez plutot les quelques midis qui suivent pour vous faire une opinion.<br />
    <br />
  </font></p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS" size="3">Pour conclure ce petit dossier, je voudrais dire un mot sur les Moogles qui sont quand même devenus avec les Chocobos les mascottes des Squaresoft.<br />
  </font></p>
  <p align="justify">&nbsp;</p>
  <p align="right"><font color="#FFFFFF" face="Comic Sans MS" size="3">Dark Mulau 13/08/2003 @ 22:45</font></p>
 
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
