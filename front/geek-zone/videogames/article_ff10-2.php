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
  <p align="center"><b><img border="0" src="/dmic-corp/images/logo5.jpg" width="1000" height="678" /></b></p>
  <p align="center">&nbsp;</p>
  <p align="center"><b><font face="Comic Sans MS" color="#FF0000"><i><u>- Cette preview contient des spoilers concernant Final Fantasy X -</u></i></font></b></p>
  <p align="justify"><font face="Comic Sans MS"><font color="#FFFFFF">Qui aurait cru que Square aurait tenté le pari fou de faire une suite directe à l'un de ses épisodes de Final Fantasy ? Et pourtant, même si l'argent semble être avant tout l'enjeu de ce Final Fantasy X-2, nous avons pour la première fois affaire au retour
    de nos héros...<br />
    <br />
    <br />
    </font><b><font color="#FF0000"><i><u>Un brin d'histoire</u></i></font></b><font color="#FFFFFF"><br />
      <br />
      Vous allez me dire &quot;On s'en fout, on le sait déjà tous&quot;, mais je tiens à revenir sur</font> <font color="#0000ff"><a href="file:///E:/Mes%20sites%20webs/Dark%20mulau's%20RPG%20Parody/ArticleFF10.htm">Final Fantasy X</a></font><font color="#FFFFFF">, le premier (FFX-1 si vous préférez). FFX-1 fut le premier Final Fantasy sur PlayStation 2, et il a marqué un virage
        important dans la série. L'aspect cinématographique y était encore plus renforcé que dans les épisodes précédents, ce qui a fait qu'il a été boudé par un large public, tandis que des fans immenses (dont moi) ont trouvé en lui la perfection absolue. Il faut dire que son scénario était d'une complexité très poussée
        (bon, on atteint pas le Xenogearsisme quand même) mais que tout était presque réglé au milipixel près.<br />
        <br />
        Kazushige Nojima, le scénariste (qui avait déjà écrit ceux de FFVII et VIII - c'est donc un génie), Yoshinori Kitase, le producteur (qui avait aussi bossé sur FFVIII), Tetsuya Nomura, le character designer (qui avait également - ils les ont tous fait - bossé sur FFVII et VIII) et le trio Nobuo Uematsu / Masashi Hamauzu /
        Junya Nakano, les compositeurs, nous avaient prouvés à quel point ils pouvaient ensemble créer de la qualité.<br />
        <br />
        Mais comment en sommes-nous arrivés à Final Fantasy X-2 ? C'est très simple... Le 31 Janvier dernier, Squaresoft a eu la &quot;grande&quot; idée de sortir un Final Fantasy X dit &quot;International&quot;. Rien de génial jusque là, sauf que le DVD bonus qui accompagnait le jeu contenait une vidéo d'une quinzaine de minutes
        nommée &quot;Eien no Nagi-setsu&quot;. Les non-japanisants vont sûrement se demander de quoi il s'agit... C'est évidemment la désormais célèbre &quot;Another Story&quot; : l'éternelle Félicité.<br />
        <br />
        Cette vidéo spéciale était pour beaucoup un coup commercial sans fond. Et pourtant, Square s'en est bel et bien inspiré pour créer son second volet de cette inoubliable aventure qu'est Final Fantasy X...<br />
  <br />
  <br />
  </font><u><i><b><font color="#FF0000">Final Fantasy X-2 : Une aventure à retardement</font></b></i></u><font color="#FFFFFF"><u><i><br />
  </i></u><br />
    On a eu droit à deux noms provisoires avant d'aboutir à ce très simple nom &quot;Final Fantasy X-2&quot;. La première fois, c'était plus compliqué qu'un seul jeu.<br />
  <br />
    En mai dernier, les premières déclarations de Square parlaient de Final Fantasy X Yuna Version et Rikku Version. Deux jeux étaient donc prévus, et certains évoquaient le fait que s'ils marchaient, on en aurait d'autres encore... Mais ce projet a été abandonné.</font></font></p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS">Quelques jours avant le Tokyo Game Show de Septembre, un nom à rallonge a commencé à parcourir le web... Il s'agissait de &quot;Final Fantasy X Another Lord : Lord of the Future&quot;. Mais une fois de plus, ce nom a sombré dans l'oubli...<br />
    <br />
    Ce qui est néanmoins le plus marquant sur les débuts FFX-2 reste son apparition remarquée lors du Tokyo Game Show. Pas un seul mot de la part de Squaresoft, juste un poster (interdit de photographier d'ailleurs) montrant une Yuna un brin Croftienne. L'image se retrouve immédiatement aux quatre coins du web et fait
    &quot;scandale&quot;. Les voix les plus négatives se dressent contre l'aspect trop Tomb Raider de cette Yuna nouvelle version, mais force est de constater que Square a marqué un grand coup.<br />
    <br />
    Et c'est le 19 Octobre 2002 que Final Fantasy X-2 est enfin présenté... Le magazine V-Jump (qui est habitué aux révélations des premiers Final Fantasy) laisse ainsi place aux premières images du jeu sur 2 maigres pages... Mais on peut voir que la Yuna du TGS est bel et bien celle du jeu final. Horreur pour certains.
    Illumination pour d'autres. Final Fantasy X-2 a été une bien longue histoire, qui n'est pas encore finie...<br />
    <br />
    <br />
    </font><b><font face="Comic Sans MS" color="#FF0000"><i><u>L'histoire recommence</u></i></font></b><font color="#FFFFFF" face="Comic Sans MS"><br />
      <br />
      Depuis la mort de Sin, il y a deux ans, l'éternelle Félicité règne sur Spira, qui est devenue une terre dominée par la puissance des technologies Al bhedes. L'Another Story nous conte l'histoire d'un monde où de nombreux clans religieux se sont formés, comme par exemple l'alliance des jeunes ou le Nouveau Yevon.</font></p>
  <p align="center"><img border="0" src="/dmic-corp/images/lulu.jpg" width="640" height="480" /></p>
  <p align="center"><i><font color="#0000FF">&quot;Prend garde Yuna, que ton nom, celui du Grand Invokeur qui nous as délivré de SIn, ne soit pas utilisé.&quot;</font></i></p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS">Yuna vit en paix à Besaid depuis deux ans, avec Wakka et Lulu. Cette dernière est d'ailleurs enceinte, mais on ne sait pas qui est le père... Les suppositions les plus évidents font état de Wakka. Le fait que Lulu soit enceinte lui empêche de participer à
    l'aventure, bien qu'elle soit un des personnages secondaires de FFX-2. Son rôle de &quot;grande soeur&quot; de Yuna est apparemment plus marqué encore que dans FFX-1.<br />
    <br />
    Kimahri est retourné vivre au Mont Gagazet, tandis que Rikku parcoure Spira pour remettre à neuf d'anciennes machines. Un beau jour ensoleillé, Rikku vient à Besaid pour saluer Yuna et Wakka, mais aussi pour leur montrer une étrange sphère, que Kimahri a trouvé... Cette sphère montre clairement Tidus, enfermé on ne sait
    où, et particulièrement énervé. Après quelques discussions, Yuna décidé de suivre Rikku pour connaître l'origine de cette sphère...<br />
    <br />
    Voici l'histoire de l'Another Story. Maintenant, il s'agit de se pencher sur la véritable histoire de Final Fantasy X-2, et c'est déjà nettement plus flou. Selon les développeurs, la sphère de Tidus n'est pas le seul prétexte de Yuna pour quitter Besaid et repartir pour un voyage à travers Spira. Reste maintenant à
    découvrir de quoi il s'agit.<br />
    <br />
    Au début de l'aventure, Yuna part de Besaid et semble refaire le même trajet que deux ans auparavant. Les images nous montrent son départ de Besaid, où Lulu lui donne des conseils, Kilika, qui a bien changé depuis, son passage sur la route de Mi'ihen, où elle se souvient d'ailleurs quand elle l'a franchie avec Tidus, puis
    à la porte de Mi'ihen, où des personnes veulent réintroduire les Chocobos dans la zone, au temple de Djose, où les machines Al bhedes auparavant bannies se côtoient avec les statues de Grand Invokeurs, et enfin à la forêt de Macalania, dont la disparition vous est annoncée par le bonhomme qui nous avait tout énervé
    avec ses papillons dans FFX-1 !</font></p>
  <p align="center"><font color="#FFFFFF" face="Comic Sans MS"><img src="/dmic-corp/images/felicite1.jpg" width="640" height="480" /></font></p>
  <p align="center"><i><font color="#0000FF">&quot;J'avais l'impression que l'éternelle Félicité s'écroulait sous mes pieds&quot;</font></i></p>
  <p align="justify"><font face="Comic Sans MS"><font color="#FFFFFF">Une image nous montre clairement que le calme de Spira a été troublé. Yuna y dit sentir l'éternelle Félicité s'écrouler sous ses pieds... Mais la Félicité était une période sans Sin, on peut venir à se poser des questions. Maintenant que Sin n'est
    plus, le terme de Félicité peut être tout simplement associé à une période de calme. Ainsi, le mal serait de retour, sous une forme que nous ne connaissons pas encore. Cette image donne en tout cas très envie d'en savoir plus !<br />
    <br />
    Des éléments très flous et incertains mais qui recadrent l'histoire. Nojima affirme en revanche que l'histoire ne sera pas courte, comme certains ne craignaient. Selon lui, la durée du jeu sera assez grande. On peut donc compter dans les 20 à 30 heures ! En plus de cela, de nouveaux mini-jeux sont au programme. On souhaite
    juste qu'ils soient moins durs et moins longs que dans FFX-1, car c'était vraiment trop excessif.<br />
    <br />
    <br />
  </font><b><font color="#FF0000">Un nouveau gameplay</font></b></font></p>
  <p align="center"><font color="#FFFFFF" face="Comic Sans MS"><img src="/dmic-corp/images/gameplay.jpg" width="640" height="480" /></font></p>
  <p align="center"><font color="#0000FF"><i>&quot;je fais des bonds, je fais des bonds...&quot;</i></font></p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS">Différents passages alterneront, où vous contrôlerez Yuna, Rikku (la seconde héroïne) et un dernier personnage (qui est une femme), présent sur le logo, mais qui n'a pas encore été dévoilé. On peut ainsi penser que les Yuna et Rikku Version ont été
    mêlées en ce seul jeu.<br />
    <br />
    Selon les développeurs, cet aspect du jeu renforcera sa &quot;non-linéarité&quot;. En effet, après les plaintes des joueurs du fait que FFX-1 était trop dirigiste, le 2 sera nettement plus libre. Différentes routes seront disponibles dès le début du jeu, et vous pourrez choisir où aller comme bon vous semble. Toujours
    pas de carte du monde comme dans les épisodes précédents, mais déjà un grand pas de franchi !<br />
    <br />
    Côté gameplay pur et dur, vous êtes déjà tous au courant des nouveaux mouvements de Miss Yuna. Ainsi, elle ne fera pas que courir bêtement, mais pourra aussi sauter et grimper. Même si cela fait écho à Tomb Raider, c'est une manière de rendre le jeu plus dynamique. Néanmoins, l'équipe du jeu nous affirme que ces
    mouvements resteront occasionnels et que vous ne subirez aucun dommage si jamais vous ratez un saut par exemple. Toujours dans les déplacements, différents véhicules seront disponibles, comme des espèces d'aéroglisseurs miniatures, mais pas de trace des Chocobos jusqu'à présent. Square a également annoncé que les
    temples de Yevon pourront, tout comme la BGU dans FFVIII, prendre le large... Ce qui me semble un peu aberrant, mais il faut voir, évidemment.</font></p>
  <p align="center"><font color="#FFFFFF" face="Comic Sans MS"><img src="/dmic-corp/images/chateau.jpg" width="640" height="480" /></font></p>
  <p align="center"><font color="#0000FF"><i>&quot;Un château perdu dans les nuages.&quot;</i></font></p>
  <p align="justify"><font face="Comic Sans MS"><font color="#FFFFFF">De nouveaux lieux ont évidemment été ajoutés au tout, histoire de ne pas faire une suite banale. Ainsi, un immense château, entouré par des nuages baignant dans les éclairs, est au programme. La beauté de ce lieu laisse penser que quelque chose se cache
    derrière, mais on ne sait pas encore quoi. Les lieux déjà présents dans l'épisode 1 ont par contre été révisés, l'exemple le plus frappant étant Kilika, devenue une vraie petite ville côtière ! C'est pour le moment l'endroit qui a été le mieux revisité, car Besaid semble encore identique, de même que la route de
    Mi'ihen. En revanche, le fameux poster du TGS montre Yuna sur les marches menant au grand stade de Luca. Il n'a plus tellement la même apparence non plus...<br />
    <br />
    <br />
  </font><b><font color="#FF0000">Sors tes flingues, Yuyu.</font></b></font></p>
  <p align="center">&nbsp;</p>
  <p align="center"><font color="#FFFFFF" face="Comic Sans MS"><img src="/dmic-corp/images/combat.jpg" width="640" height="480" /></font></p>
  <p align="center"><i><font color="#0000FF">&quot;Un combat dans Final Fantasy X-2.&quot;</font></i></p>
  <p align="justify"><font face="Comic Sans MS"><font color="#FFFFFF">Le système de combats de Final Fantasy X-2 sera lui aussi révisé, mais les informations à son sujet sont bien peu nombreuses... Tout d'abord, Toshiro Tsuchida, celui qui s'était occupé des combats du 1, n'est plus sur le coup. Exit les Overdrives et les
    Overkills, les combats seront un peu plus orientés actions, mais suivront la lignée du premier épisode, en gardant par exemple le dynamisme qui avait fait le charme des batailles !<br />
    <br />
    Yuna, au lieu de son fidèle bâton, disposera de deux beaux pistolets... Ce qui a quand même choqué pas mal de monde. Rikku, quant à elle, au vu du logo, sera toujours équipée de la même arme. Quant au troisième personnage mystère, c'est une épée qu'il utilisera.<br />
  <br />
    La seule image de combat nous montre une présentation identique à celle de FFX-1, à savoir en bas à droite la barre &quot;vitale&quot; avec des informations comme HP et MP. En haut à droite, c'est une curieuse inscription : Active Mode. Il semble ainsi y avoir plusieurs modes de combats. Yuna brandit en tout cas son
    revolver vers un ennemi (qu'on ne connaissait pas d'ailleurs), laissant penser qu'un système de tir pourrait compléter les commandes habituelles. Concernant les Chimères, elles n'existent donc plus et ne pourront pas être invoquées...<br />
    <br />
    Mais le système de combats reste encore très flou. En tout cas, le système d'évolution si génial qu'était le Sphérier n'est plus de la partie. On espère que l'équipe trouvera quelque chose d'aussi innovant.<br />
  <br />
  <br />
  </font><b><font color="#FF0000">Rien que des héroïnes...</font></b></font></p>
  <p align="center"><img border="0" src="/dmic-corp/images/wallpaper3.jpg" width="1024" height="768" /></p>
  <p align="justify"><font face="Comic Sans MS"><font color="#FFFFFF">Yuna est évidemment l'héroïne de ce FFX-2. On la retrouve dans une tenue littéralement différente de celle dans le premier FFX. Tetsuya Nomura est toujours le character designer et on le sent toujours aussi inspiré...<br />
    <br />
    The New-Yuna est en tout cas bien osée. Quelques éléments de sa parure sont néanmoins originaux et reflètent un peu son désir de garder Tidus avec elle : regardez sa capuche... Ne vous rappelle-t-elle pas celle que notre blondinet favori avait avec lui deux ans auparavant ? Et entre ses deux... euh sur sa poitrine, le
    symbole est celui des Zanarkand Abes. Troublant, n'est ce pas ? Sur son flanc gauche, un grand tissu couvre sa jambe alors qu'une immense &quot;queue&quot; part de derrière sa nuque pour toucher le sol...<br />
    <br />
    Selon Nojima, le scénariste, Yuna aurait choisi cette tenue en réaction aux pressions qu'elle avait dû supporter durant son pèlerinage. Mais de là à brandir des pistolets, est-ce bien raisonnable ?<br />
  <br />
    Vient ensuite la seconde héroïne : Rikku. Une image la montre, tout du moins on peut penser que c'est elle. Bien plus &quot;yéyé&quot; que dans FFX-1, elle aurait sa place dans l'histoire. Son design est en tout cas relativement osé lui aussi : avec ses longs cheveux et son corps très largement dénudé, on voit bien une
    fois de plus que Nomura se dévergonde.<br />
    <br />
    Quant à la troisième héroïne, aucune information sur son identité, et le logo ne nous aide pas tellement à cerner son apparence, les envolées d'Amano obligent.<br />
  <br />
    Concernant les personnages secondaires, Lulu sera de la partie, car elle s'adresse à Yuna sur une des images. Elle ne participera toutefois pas au voyage sur Spira, car, comme je l'ai précisé plus haut, elle est enceinte. L'idée de la voir enceinte est d'ailleurs plutôt déroutante...<br />
  <br />
    Tout laisse ensuite à penser que Wakka et Kimahri seront de la partie, mais aucune information dessus.<br />
  <br />
  <br />
  </font><b><font color="#FF0000">Et pour finir...</font></b></font></p>
  <p align="center"><font color="#FFFFFF" face="Comic Sans MS"><img src="/dmic-corp/images/kilika.jpg" width="640" height="480" /></font></p>
  <p align="center"><i><font color="#0000FF">&quot;Porto Kilika, un village côtier plus accueillant que jamais !&quot;</font></i></p>
  <p align="justify"><font face="Comic Sans MS"><font color="#FFFFFF">Final Fantasy X-2 devrait être un bon jeu. Les principaux défauts de FFX-1 ont été gommés, la linéarité en tête de file. Le scénario n'est pas aussi basique (et improvisé) que dans l'Another Story, et le fait qu'il nous tienne de 20 à 30 heures
    (supposition toujours...) laisse supposer de nombreux rebondissements.<br />
    <br />
    Toutefois, cette preview est bien loin de présenter précisément le jeu et nous devrons encore attendre avant de pouvoir en savoir plus. Par contre, une sortie PAL du jeu reste bien lointaine. Le fait que l'Another Story ne soit pas dans FFX PAL fait penser que Square n'est pas décidé à sortir le jeu pour l'instant. Mais
    restons confiants...<br />
    <br />
    Final Fantasy X-2 sort au Japon en Mars prochain. L'avancement du projet ? Pour vous faire une idée, l'enregistrement des voix est presque terminé. Et au vu des images, tout semble au point...<br />
  <br />
  <br />
  </font><b><font color="#FF0000">Images :</font></b></font></p>
  <p align="center"><font color="#FFFFFF" face="Comic Sans MS"><img src="/dmic-corp/images/011.jpg" width="308" height="229" /><img src="/dmic-corp/images/022.jpg" width="308" height="229" /><img src="/dmic-corp/images/03.jpg" width="308" height="229" /><img src="/dmic-corp/images/04.jpg" width="308" height="229" /><br />
    <img src="/dmic-corp/images/art1.jpg" width="856" height="563" /><img src="/dmic-corp/images/art2.jpg" width="576" height="768" /><img src="/dmic-corp/images/wallpaper1.jpg" width="1024" height="768" /><img src="/dmic-corp/images/wallpaper11.jpg" width="1024" height="768" /><br />
    <img src="/dmic-corp/images/wallpaper12.jpg" width="1024" height="768" /><img src="/dmic-corp/images/game01.jpg" width="308" height="229" /><img src="/dmic-corp/images/Lenne01.jpg" width="310" height="232" /><img src="/dmic-corp/images/Yuna01.jpg" width="310" height="232" /><br />
    <img src="/dmic-corp/images/Yuna02.jpg" width="310" height="232" /><img border="0" src="/dmic-corp/images/FFX-2_cool_yuna.jpg" width="1024" height="1365" /><img border="0" src="/dmic-corp/images/Final_Fantasy_X-2_-_Yuna_Rikku_and_Pine.jpg" width="432" height="576" /><img border="0" src="/dmic-corp/images/lenne.jpg" width="410" height="600" /></font></p>
  <p align="center"><img border="0" src="/dmic-corp/images/FFX-2_-_Rikku_2.jpg" width="410" height="600" /><img border="0" src="/dmic-corp/images/FFX-2_-_Rikku_3.jpg" width="410" height="600" /><img border="0" src="/dmic-corp/images/inconnu2.jpg" width="410" height="600" /></p>
  <p align="right"><font face="Comic Sans MS"><b><font color="#FFFFFF">Dark Mulau</font></b><font color="#FFFFFF"> - <i>13/08/2003 @ 21:30</i></font></font><font FACE="Verdana" SIZE="3"></p>
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
