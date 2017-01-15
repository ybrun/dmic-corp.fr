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
  <p align="center"><img src="/dmic-corp/images/FF8.Logo.jpg" alt="" width="225" height="184" border="0" /></p>
  <p><font color="#FFFFFF" face="Comic Sans MS">Quel merveilleux jeu qu'est Final Fantasy
    VIII. Bien que mal vu et rejeté par beaucoup de fans, il fait partie des meilleurs FFs de part son ambiance magique, son scénario enchanteur, ses graphismes sublimes et ses personnages si attachants. Vous serez d'ailleurs rapidement les
    spectateurs impuissants d'une scène cinématique montrant l'introduction du jeu mêlant à la perfection la beauté et le suspense d'une formidable aventure. En effet, ouvrez bien vos oreilles et vos yeux, oubliez les larmes et admirez comme il se doit les images énigmatiques d'une scène de combat caressée par la douceur des
    plumes et assistée par les notes que forme Liberi Fatali…<br />
    <br />
    Le jeu commence alors… vous êtes un étudiant de 17 ans originaire de la BGU
    (Balamb Garden University). C'est une école servant à former des mercenaires nommés, plus précisément, des
    Seeds. Elle est ouverte à tous de 5 ans à 20 ans quelque soit sa qualification (mis à part le fait de changer d'école ou d'avoir été
    renvoyé), il est par contre possible de rester à la BGU après ses 20 ans à condition d'y travailler. Les armes utilisées sont principalement des Invocations nommées les G-Force (Gardian Force), mais il est donné à chacun d'avoir l'arme qui lui convient.<br />
    <br />
    Quant au scénario, il est riche et recherché, rien n'est laissé au hasard et tout a son importance… il faut donc être vigilant pour pouvoir suivre correctement et ainsi apprécier le jeu à sa juste valeur. N'ayez pas peur d'aider Linoa à poursuivre
    Edea, une nécromancienne dotée de pouvoirs extraordinaires qui sera
    votre première ennemie. Les nécromanciennes se devaient d'ailleurs de ne plus exister à cette époque, alors pourquoi sont-elles là ? Quel est son but ? Vous parviendrez à le savoir bien assez tôt…<br />
    <br />
    Il y a plusieurs points importants dans le jeu qui sont bons à retenir si vous voulez mener à bien votre quête :<br />
  <br />
    - <b>Le système de combat :</b> Comme dans tous les autres FFs, il diffère, mais ici, pas question de MP…<br />
  <br />
    Les magies sont comme des objets, vous en gagnez (après un combat, volées à des monstres ou à une source de magie) et pourrez les utiliser en combat ou en dehors afin de soigner vos personnages. La capacité Voler est utile lors des combats car vous pouvez soit garder la magie volée, soit l'utiliser directement.<br />
  <br />
    - <b>Les G-Force :</b> Ce sont des Invocations très puissantes qu'il vous est possible d'utiliser durant les combats, que ce soit devant de simples ennemis ou des Boss. Chaque personnage peut invoquer mais il est important de prendre en considération le taux de compatibilité entre le celui-ci et la G-Force en question. En
    effet, plus une G-Force aura de points de compatibilité avec un personnage, plus elle sera à 100 % compatible avec celui-ci, au cas contraire, ce sera beaucoup plus lent…<br />
    <br />
    Nos chères G-Force peuvent apprendre plusieurs capacités dont Turbo, qui sert à augmenter la puissance d'attaque de la G-Force le temps de l'Invocation (à savoir qu'il n'y a qu'elle à l'écran), il vous suffit d'appuyer sur Select et Carré afin d'aller le plus haut possible (250) tout en prenant garde aux passages où il
    nous est interdit de Booster. Si par mégarde il vous arrivait d'appuyer au mauvais moment, il vous sera alors inévitable de retomber à la puissance 75 (puissance de départ).<br />
    <br />
    - <b>Le système d'association :</b> Il est à votre disposition afin d'avoir la possibilité d'associer des G-Force et des magies à vos personnages. Le choix des G-Force est toujours suivi de la mise automatique des magies dans les domaines suivants : l'Attaque, la Magie et la Défense. Viennent alors les choix de trois
    capacités dans le domaine Command lorsque le moment d'attaquer sera venu, à savoir : Magie,
    G-Force, Voler et Objet (viennent s'y ajouter d'autres capacités au cours de votre aventure), ainsi que dans le domaine Ability où vous pourrez loger quelques techniques apprises par vos
    G-Force.<br />
    <br />
    Vous pouvez également vous charger vous-même de vos associations magiques afin d'augmenter ce dont vous avez besoin à votre convenance.</font></p>
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
