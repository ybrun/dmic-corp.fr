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
  <p align="center"><font size="7" color="#FF0000"><u><i><b>Trucs &amp; Astuces</b></i></u></font></p>
  <p align="center"><img src="/dmic-corp/images/Final_Fantasy_IV_logo.gif" alt="" width="260" height="98" border="0" /></p>
  <p align="center">&nbsp;</p>
  <p align="justify"><font face="Verdana" color="#FF0000"><b><i><u>- La salle secrète(FF IV hard type)<br />
    </u></i></b></font><font face="Verdana" color="#FFFFFF"> <br />
      Voici l'endroit le plus bizarre de Final Fantasy IV.<br />
      Allez au château des nain et entrez dans la salle entre les deux marchands (1) . Vous êtes arrivez dans un bar vide(enfin presque), traversez le mur à l'Est du bar (2) pour voir la face cachée de celui-ci…<br />
      Vous voilà dans la fameuse salle secrète ! ^^<br />
      Ici vous pouvez vous battre contre les programmeurs du jeu, écoutez le fameux Prélude à volonté, croisez un chocobo vraiment bizarre et acquérir une revue pornographique ! Celle-ci se trouve au sous-sol dans une bibliothèque (3) . Utilisez la pour voir une petite scène sympathique.</font></p>
  <p align="justify"><font color="#FFFFFF"> <br />
    </font><b><i><u><font face="Verdana" color="#FF0000" size="3">- Les Chocobos<br />
      </font></u></i></b><font color="#FFFFFF" face="Verdana"><br />
        Les chocobos sont biens présents dans Final Fantasy IV même si ils n'occupent pas une très grande place(aucune quêtes secondaire les mettant en scène dans ce volet). Enfin ils peuvent s'avérer utiles et même indispensables à un certain moment de l'aventure.<br />
        On trouve les chocobos généralement dans de petites forêts rondes se trouvant au Sud du Mt Ordeals et au Nord-Est de Fabul ou dans le village Chocobo qui se trouve au Nord de Troia.<br />
        Voici les differents chocobos que vous pourrez croiser, leurs aptitudes et leurs emplacement.<br />
  <br />
        Chocobo jaune (4) :<br />
  <br />
        Aptitude : C'est le chocobo de base, il permet de se déplacer sur la terre ferme et de traversez les rivières beaucoup plus<br />
        rapidement et sans avoir à combattre d'ennemis. Une fois que vous quittez ce chocobo il retourne à son emplacement d'origine.<br />
  <br />
        Emplacement : Ce chocobo se trouve dans les deux forêts et dans le village chocobo.</font></p>
  <p align="justify"><font face="Verdana" color="#FFFFFF"><br />
    Chocobo blanc (5) :<br />
  <br />
    Aptitude : Ce chocobo est très utile puisqu'il vous restore tous vos Mp !<br />
  <br />
    Emplacement : forêts et village chocobo.</font></p>
  <p align="justify"><font face="Verdana" color="#FFFFFF"><br />
    Chocobo noir (6) :<br />
  <br />
    Aptitude : Ce chocobo a la capacité de voler ce qui peut vous permettre de joindre certains lieux inaccessibles en aéronef. Le chocobo noir atterrit seulement dans les forêts, il vous ramène à votre point de départ dès que vous remontez dessus.<br />
  <br />
    Emplacement : Village Chocobo uniquement.</font></p>
  <p align="justify"><font face="Verdana" color="#FFFFFF"><br />
    Gros Chocobo (7) :<br />
  <br />
    Aptitude : Le gros chocobo allège votre inventaire en stockant vos objets.<br />
  <br />
    Emplacement : Pour le trouver il faut utiliser une carotte sur l'emplacement adéquate dans les forêts de chocobo, le village chocobo et le château des nains. Il se trouve aussi naturellement dans votre vaisseau.</font></p>
  <p align="justify"><font face="Verdana" color="#FFFFFF"><br />
    Chocobo bizarre (8) :<br />
  <br />
    Aptitude : aucune o_0.<br />
  <br />
    Emplacement : Salle secrète du château des nains.</font></p>
  <p align="justify"><font face="Verdana" color="#FFFFFF"><br />
    </font><b><i><u><font face="Verdana" color="#FF0000" size="3">- Dupliquer une arme</font></u></i></b><font face="Verdana" color="#FFFFFF"><br />
      <br />
      Voilà une astuce bien sympa qui va vous permettre de vous faire de l'argent ou une bonne réserve d'armes à Lancer avec la Commande
      d'Edge.<br />
      Equipez l'arme que vous souhaitez dupliquer à un de vos persos dans la main droite ou dans la main gauche, peu importe. Engagez un combat, utilisez la Commande Objets du personnage disposant de l'arme que vous souhaitez dupliquer, sélectionnez un emplacement vide dans la liste des objets et sélectionnez l'arme à dupliquer
      dans l'équipement des mains(accessible en mettant le pointeur tout en haut de la liste d'objets) (9) . Une fois le combat achevé, réequipez l'arme que vous aviez préalablement enlevée au personnage concerné…L'arme en question se trouve multiplié par 2 ! : )</font></p>
  <p align="center">&nbsp;</p>
  <p align="justify"><i><u><b><font face="Verdana" color="#FF0000" size="3">- Dans les villages :</font></b></u></i><font face="Verdana" color="#FFFFFF"><br />
    <br />
    Parlez à tout le monde et n'hésitez pas à fouiller les hautes herbes et les cours d'eau pour trouver des items ! <font face="Verdana">(1)</font> Si vous voulez en savoir plus sur le fonctionnement des magies, etc… allez dans les classes d'entraînement. <font face="Verdana">(2)</font> Pour renommer vos personnages parlez à
    Nemingway il se fera un plaisir d'accomplir cette tâche. <font face="Verdana">(3)</font> Pour changer le personnage de tête appuyez sur L ou R.</font></p>
  <p align="justify"><font face="Verdana" color="#FFFFFF"><br />
    </font><b><i><u><font face="Verdana" color="#FF0000">- Avant les Donjons :<br />
      </font></u></i></b><font face="Verdana" color="#FFFFFF"><br />
        Tentes et cabanes <font face="Verdana">(4)</font> &amp; <font face="Verdana">(5)</font> : Ses objets sont très importants et vous sauverons la vie plusieurs fois que se soit hors ou à l'intérieur d'un donjon. Une tente restore 1000 HP et 100 mp et une cabane 4 fois plus soit 4000 HP et 400 mp. Les tentes et les cabanes sont
        utilisables uniquement sur la carte du monde et les points de sauvegarde.<br />
        Détails vitaux : vérifiez toujours votre équipement, vos items, votre état, ayez toujours sur vous quelques tentes/cabanes et surtout n'oubliez pas de sauvegarder !<br />
  <br />
  <br />
        </font><b><i><u><font face="Verdana" color="#FF0000">- Pendant les combats :<br />
          </font></u></i></b><font face="Verdana" color="#FFFFFF"><br />
            Positions : Dans un combat il est préférable de mettre les magiciens et les persos ayant une faible défense en 2ème ligne. Pour se faire il suffit de déplacer les personnages avec l'option adéquate dans le menu <font face="Verdana">(6)</font> .<br />
            Les personnages en 1ère, 3ème et 5ème position seront en première ligne tandis que les personnages en 2ème et 4ème position seront en seconde ligne.<br />
            Défense et changement de place : Lorsque vous êtes sur l'écran de sélection des actions(attaque, magie, etc. . ) appuyez sur la touche directionnelle droite pour vous défendre et sur la touche directionnelle gauche pour disposer vos persos de première ligne en deuxième ligne et vice-versa.<br />
  <br />
            Attaques surprises et préventives : Lors d'une attaque préventive vous aurez le privilège d'attaquer en premier mais lorsque vous êtes attaqués par surprise les ennemis vous attaques en premier et si en plus de ça vous êtes attaqués dans le dos vos persos placés en deuxième ligne se trouveront en première ligne.
            Utilisez donc avant toute chose la commande Changer pour limiter les dégâts.<br />
            <br />
            Fuites : Pour fuir un combat appuyez sur L et R en même temps. Fuyez seulement lorsque vous êtes en très mauvaise posture car fuir un trop grand nombre de combats peu vous causez de gros problèmes par la suite surtout contre les boss.<br />
  <br />
            Monstres élémentaux : Vous serez souvent amenés à rencontrer des monstres beaucoup plus sensibles à une magie plutôt qu'a une autre, utilisez donc cela à votre avantage. Un monstre de Feu est très sensible à la Glace, un monstre d'Eau est très sensible aux éclairs et vice-versa. Il y a aussi d'autres sortes d'ennemis
            non élémentaux mais qui craignent aussi une magie particulière comme les machines et autres robots très sensibles aux magies d'éclairs et les morts-vivants sensibles aux sorts de Feu et de Soins.</font></p>
  <p align="left"><font size="3" face="Verdana"><b><i><u><font color="#FF0000">Les Invocations:</font></u></i></b></font></p>
  <p align="justify"><font face="Verdana" color="#FFFFFF">Depuis le volet précédent les invocations font parties intégrante de la série des Final
    Fantasy. Final Fantasy IV ne défraie pas la chronique et propose un certain nombre d'invocations que vous pourrez obtenir essentiellement en vous battant contre elles et en gagnant
    le combat(FF VIII sa vous dit quelque chose ?^^). Voici donc les différentes invocations que vous croiserez tout au long de l'aventure et leurs caractéristiques générales.<br />
    <br />
    Nom : Chocobo<br />
    Attaque : Kick<br />
    Description : Faible attaque non élémentale sur un seul ennemi. C'est la première invocation du jeu, c'est aussi la moins puissante.<br />
    Coût en MP : 7<br />
    Comment l'obtenir ? : Cette invocation est naturellement présente dans le menu des invocations lors de votre première rencontre avec
    Rydia.<br />
    <br />
    Nom : Myst Dragon<br />
    Attaque : Myst Breath<br />
    Description : Attaque de type Sacre sur tous les ennemis.<br />
    Coût en MP : 20<br />
    Comment l'obtenir ? : Cette invocation est en votre possession dès le retour de Rydia dans votre équipe.<br />
  <br />
    Nom : Titan<br />
    Attaque : Anger<br />
    Description : Puissante attaque de Terre sur tous les ennemis, inefficace contre les ennemis volants.<br />
    Coût en MP : 40<br />
    Comment l'obtenir ? : Cette invocation est en votre possession dès le retour de Rydia dans votre équipe.<br />
  <br />
    Nom : Shiva<br />
    Attaque : Snow Storm<br />
    Description : Attaque de Glace sur tous les ennemis.<br />
    Coût en MP : 30<br />
    Comment l'obtenir ? : Cette invocation est en votre possession dès le retour de Rydia dans votre équipe.<br />
  <br />
    Nom : Jinn<br />
    Attaque : Hell Fire<br />
    Description : Attaque de Feu sur tous les ennemis.<br />
    Coût en MP : 30<br />
    Comment l'obtenir ? : Cette invocation est en votre possession dès le retour de Rydia dans votre équipe.<br />
  <br />
    Nom : Indra<br />
    Attaque : Judgement<br />
    Description : Attaque d'Eclair sur tous les ennemis<br />
    Coût en MP : 30<br />
    Comment l'obtenir ? : Cette invocation est en votre possession dès le retour de Rydia dans votre équipe.<br />
  <br />
    Nom : Ashura<br />
    Attaque : Ashura…<br />
    Description : Attaque de soin ou de protection de façon aléatoire sur tout le groupe.<br />
    Coût en MP : 50<br />
    Comment l'obtenir ? : Il faut la défier et la battre dans le village des monstres invoqués.<br />
  <br />
    Nom : Leviathan<br />
    Attaque : Big Wave<br />
    Coût en MP : 50<br />
    Description : Puissante attaque d'Eau sur tous les ennemis.<br />
    Comment l'obtenir ? : De la même façon que pour Ashura, il faut le combattre après avoir battu cette dernière.<br />
  <br />
    Nom : Sylphid<br />
    Attaque : Whisper<br />
    Coût en MP : 25<br />
    Description : Attaque peu puissante sur un ennemi, les dégâts occasionnés sur l'ennemi sont distribué sous forme de points de vie à tout le groupe.<br />
    Comment l'obtenir ? : Après vous être rendu à la cave des Fées une première fois, allez chercher la poêle de la femme de Yang à
    Fabul, retournez à la cave des fées et donnez un coup de poêle à Yang.<br />
    <br />
    Nom : Odin<br />
    Attaque : Iron Sword<br />
    Coût en MP : 45<br />
    Description : L'attaque d'Odin tue instantanément tous les ennemis. Son taux de réussite est aléatoire et son attaque est inefficace contre les boss.<br />
    Comment l'obtenir ? : Il faut se rendre au Sous-Sol du château de Baron et ce battre contre lui.<br />
  <br />
    Nom : Bahamut<br />
    Attaque : Méga Flare<br />
    Coût en MP : 60<br />
    Description : Attaque non élémentale très puissante sur tous les ennemis.<br />
    Comment l'obtenir ? : Il faut le battre chez lui, dans la grotte du dragon qui se trouve sur la Lune.<br />
  <br />
  <br />
    Les invocations suivantes sont assez spéciales car elles sont enfermées dans des objets, cette sorte d'invocations n'est pas très puissante et occasionne souvent des dégâts aléatoires.<br />
  </font></p>
  <p align="justify"><font face="Verdana" color="#FFFFFF"><br />
    Nom : Goblin<br />
    Attaque : Punch<br />
    Coût en MP : 1<br />
    Description : Ataque physique très faible sur un ennemi.<br />
    Comment l'obtenir ? : Il suffit d'utiliser l'objet du même nom.<br />
  <br />
    Nom : Bomb<br />
    Attaque : Destruction<br />
    Coût en MP : 10<br />
    Description : Attaque de Feu sur un ennemi<br />
    Comment l'obtenir ? : Utilisez l'objet Bomb.<br />
  <br />
    Nom : Cockatrix<br />
    Attaque : Stone Beak<br />
    Coût en MP : 15<br />
    Description : Pétrifie un ennemi<br />
    Comment l'obtenir ? : Utilisez l'objet Cockatrix<br />
  <br />
    Nom : Mind<br />
    Attaque : Mind Blast<br />
    Coût en MP : 18<br />
    Description : Paralyse et cause des dégâts aléatoires sur un ennemi.<br />
    Comment l'obtenir ? : Utilisez l'objet Mind Flay</font></p>
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
