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
  <p align="center"><img border="0" src="/dmic-corp/images/logo1.jpg" width="300" height="195" /></p>
  <p align="center">&nbsp;</p>
  <p align="center"><font color="#FFFFFF" face="Comic Sans MS" size="3">Après un brillant Final Fantasy IX
    Playstation, la nouvelle console de Sony, la Playstation 2, accueille le dixième opus de cette fabuleuse saga. Préparez-vous pour un long voyage au coeur de la &quot; fantasy &quot;… !</font></p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS" size="3"><br />
    <br />
  &nbsp;&nbsp;&nbsp;&nbsp; L'histoire nous transporte dans un monde nommé Spira, une planète engloutie par les eaux. Autrefois ce monde connu une avancée technologique sans précédent, mais un jour, une force inconnu, Sin (notamment représenté sur le logo combattant
    Yuna) dévaste tout sur son passage, ne laissant derrière
    lui que ruines et destructions. Depuis ce jour, la majorité de la population adoptèrent la religion
    Yevon. Cette dernière inculque les dangers de la technologie et ne recommande son utilisation uniquement en cas extrêmes. Un millénaire s'est écoulé depuis ce jour, et le monde vit dans la crainte de la technologie, de la
    prochaine attaque de Sin…<br />
    <br />
    Vous incarnez Tidus, un jeune joueur de Blitzball, très doué par ailleurs. Débordant d'énergie et très joyeux, il fera rapidement la rencontre de
    Yuna, le personnage principal autour duquel le scénario repose. Celle-ci est une
    Invokeur, ce qui n'est guère étonnant étant donné que son père, Braska, fut un célèbre
    sorcier. Hantée par d'étranges rêves, pour ne pas dire des cauchemars, elle cherche à les comprendre et pour cela part à la recherche de Sin dans le but de le vaincre. Pour ce faire, elle souhaite se rendre dans les différents temples de la religion
    Yevon, afin d'y acquérir les Chimères. Ces dernières sont de puissants
    &quot; esprits &quot;, disposant d'incroyables pouvoirs. C'est en réunissant leur puissance qu'elle pourra invoquer l'Ultime Chimère, la seule capable de vaincre Sin. Ce voyage à travers le monde sera également l'occasion d'acquérir expérience, savoir et sagesse.<br />
  </font></p>
  <p align="center"><font color="#FFFFFF" face="Comic Sans MS" size="3"><img src="/dmic-corp/images/0012.jpg" width="157" height="114" /><img src="/dmic-corp/images/0022.jpg" width="158" height="114" /><img src="/dmic-corp/images/0033.jpg" width="159" height="114" /></font></p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS" size="3"><br />
    <br />
    Tidus et Yuna ne sont pas seul durant leur aventure, cinq autres personnages se joindront à eux :</font></p>
  <blockquote>
    <blockquote>
      <p align="justify"><font color="#FFFFFF" face="Comic Sans MS" size="3">- Auron, un des gardiens de Braska.<br />
        - Lulu, une magicienne maîtrisant la magie noire et combattant à l'aide d'une poupée qui pourra représenter un Mog, un Moomba, un Pampa voire même Cait Sith !<br />
        - Wakka, le capitaine de l'équipe de Blitzball de Besaid.<br />
        - Kimahri Ronso, un des gardiens de Yuna et originaire du Mont Gagazet, patrie du peuple Ronso.<br />
        - Rikku, une intrépide voleuse Al Bhed, qui ne manque pas de charme.</font></p>
    </blockquote>
  </blockquote>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS" size="3">L'équipe qui s'est chargé du développement de Final Fantasy X est sensiblement la même que celle de Final Fantasy
    VIII. Ainsi, le directeur du projet est Yoshinori Kitase, le scénario a été écrit par Kazushige
    Nojima, Tetsuya Nomura s'est occupé du
    character design et Nobuo Uematsu reste fidèle à son poste, bien que pour la première fois dans l'histoire de la série, Junya Nakano
    (Thread of Fate ou Dew Prism) et Masashi Hamauzu (SaGa Frontier 2) accompagnent l'honorable compositeur. Néanmoins, un nouveau membre arrive dans l'équipe : il s'agit de Toshiro
    Tsuchida, qui
    a principalement travaillé sur la série des Front Mission. Ce dernier s'occupe principalement des combats (système, mise en scène, etc…), ce qui explique leur aspect plus tactique. Pour finir,
    Rikki, une chanteuse très populaire au Japon et originaire d'Okinawa, interpréte le thème principal du jeu : &quot; Suteki Da Ne
    &quot;.<br />
    <br />
    En ce qui concerne la réalisation, Square ne se repose pas sur ces lauriers et nous propose un jeu entièrement en 3D temps réel, en revanche les angles de caméra sont prédéfinis, comme dans Metal Gear
    Solid. Néanmoins, certains décors (principalement l'intérieur d'habitations dont la superficie n'est pas énorme)
    demeurent fixes. Cela n'empêche pas Final Fantasy X d'être actuellement un des plus beau jeu de la Playstation 2, voir toutes consoles confondues ! Les combats restent aléatoires et dans des arènes en 3D, mais parfois, notamment face à un boss, le combat se déroule sans transition, c'est à dire que vous vous battrez dans
    la même zone, comme dans Chrono Trigger ou plus récemment Breath of Fire IV. Quant aux cinématiques, elles sont une fois de plus superbes, Square étant passé maître dans ce domaine.<br />
    <br />
    Une des caractéristiques très controversée par les joueurs est sans nul doute l'ajout de voix. En effet, c'est un véritable pas dans toute l'histoire de Final
    Fantasy. Nous avons l'occasion ainsi d'entendre parler nos chers protagonistes durant les moments importants et les moments clés du scénario mais bien évidemment,
    la majorité des scènes et des dialogues qui ponctue le jeu est également agrémentée de voix. Vous avez également la possibilité d'ajouter ou non des sous-titres. A noter que la version Européenne du jeu garde les voix de la version
    US...<br />
  </font></p>
  <p align="center"><font color="#FFFFFF" face="Comic Sans MS" size="3"><img src="/dmic-corp/images/0043.jpg" width="157" height="114" /><img src="/dmic-corp/images/0051.jpg" width="154" height="114" /><img src="/dmic-corp/images/0062.jpg" width="156" height="114" /></font></p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS" size="3"><br />
    <br />
    Final Fantasy X est une aventure passionnante se déroulant dans un monde magnifique. Un RPG qui démontre que la &quot; fantasy &quot; n'est pas limité à la scène médiévale européenne, et qu'il peut garder cette magie propre à cette série épique tout en proposant un monde influencé par l'Asie. Bref, Final Fantasy X
    parvient à garder l'esprit qui fait le charme de la saga tout en offrant un contexte complètement différent…</font></p>
  <p align="center">&nbsp; </p>
  <center>
    <table cellspacing="0" border="0" cellpadding="1" width="306">
      <tr>
        <td valign="middle" colspan="2" bgcolor="#0000ff"><p align="center"><b><font color="#FFFFFF" face="Comic Sans MS" size="3">Dates de sortie</font></b></p></td>
      </tr>
      <tr>
        <td width="25%" valign="middle" bgcolor="#0000ff"><p align="center"><b><font color="#FFFFFF" face="Comic Sans MS" size="3">Japon</font></b></p></td>
        <td width="75%" valign="middle"><p><font color="#FFFFFF" face="Comic Sans MS" size="3">Sorti - 19 Juillet 2001</font></p></td>
      </tr>
      <tr>
        <td width="25%" valign="middle" bgcolor="#0000ff"><p align="center"><b><font color="#FFFFFF" face="Comic Sans MS" size="3">USA</font></b></p></td>
        <td width="75%" valign="middle"><p><font color="#FFFFFF" face="Comic Sans MS" size="3">Sorti - 18 décembre 2001</font></p></td>
      </tr>
      <tr>
        <td width="25%" valign="middle" bgcolor="#0000ff"><p align="center"><b><font color="#FFFFFF" face="Comic Sans MS" size="3">Europe</font></b></p></td>
        <td width="75%" valign="middle"><p><font color="#FFFFFF" face="Comic Sans MS" size="3">Sorti - 29 mai 2002</font></p></td>
      </tr>
    </table>
  </center>
  <p align="justify">&nbsp;</p>
  <p align="center">&nbsp; </p>
  <center>
    <table cellspacing="0" border="0" cellpadding="1" width="200">
      <tr>
        <td width="3151" valign="middle"><p><font size="3" color="#FFFFFF" face="Comic Sans MS"><a href="../../../geek-zone/videogames/box-jap-front.jpg"><img src="/dmic-corp/images/box-jap-front.jpg" width="125" height="176" /></a><a href="../../../geek-zone/videogames/box-jap-back.jpg"><img src="/dmic-corp/images/box-jap-back.jpg" width="125" height="181" /></a></font></p>
          <p><font size="3" color="#FFFFFF" face="Comic Sans MS"><a href="../../../geek-zone/videogames/box-us-front.jpg"><img src="/dmic-corp/images/box-us-front.jpg" width="125" height="176" /></a><a href="../../../geek-zone/videogames/box-us-back.jpg"><img src="/dmic-corp/images/box-us-back.jpg" width="125" height="180" /></a></font></p>
          <p><font size="3" color="#FFFFFF" face="Comic Sans MS"><a href="../../../geek-zone/videogames/box-pal-front.jpg"><img src="/dmic-corp/images/box-pal-front.jpg" width="125" height="173" /></a><a href="../../../geek-zone/videogames/box-pal-back.jpg"><img src="/dmic-corp/images/box-pal-back.jpg" width="125" height="175" /></a></font></p></td>
      </tr>
    </table>
  </center>
  <p align="center">&nbsp;</p>
  <p align="center"><b><i><u><font face="Comic Sans MS" size="5" color="#FF0000">Le test:</font></u></i></b></p>
  <p align="center">&nbsp;</p>
  <b>
  <p align="justify"><font face="Comic Sans MS"><i><u><font size="3" color="#FF0000">Editeur :</font></u></i></font></b><font color="#FFFFFF" size="3" face="Comic Sans MS"> Squaresoft<br />
    </font><b><i><u><font size="3" face="Comic Sans MS" color="#FF0000">Développeur :</font></u></i></b><font color="#FFFFFF" size="3" face="Comic Sans MS"> Squaresoft<br />
      </font><b><i><u><font size="3" face="Comic Sans MS" color="#FF0000">Genre :</font></u></i></b><font color="#FFFFFF" size="3" face="Comic Sans MS"> RPG<br />
        </font><b><i><u><font size="3" face="Comic Sans MS" color="#FF0000">Dates de sortie :</font></u></i><font color="#FFFFFF" size="3" face="Comic Sans MS"><br />
          </font><u><font size="3" face="Comic Sans MS" color="#0000FF">- Japon :</font></u></b><font color="#FFFFFF" size="3" face="Comic Sans MS"> 19/07/2001<br />
            </font><b><u><font size="3" face="Comic Sans MS" color="#0000FF">- USA :</font></u></b><font color="#FFFFFF" size="3" face="Comic Sans MS"> 18/12/2001<br />
              </font><b><font size="3" face="Comic Sans MS" color="#0000FF">- Europe :</font></b><font color="#FFFFFF" size="3" face="Comic Sans MS"> 29/05/2002<br />
                <br />
                On aura attendu 2 ans et demi entre les premières images de FFX, au Square Millenium 2000, et le jeu dans sa version PAL. Inutile de dire que l’attente fut longue et pénible… Mais le résultat est au-delà de nos (de mes) espérances. En ouvrant le boîtier de FFX et en glissant le DVD dans ma PlayStation 2, et même si je
                savais que ce n’était pas un disque normal, j’étais loin de penser que j’allais être aussi retourné…<br />
                <br />
                <br />
                </font><b><i><u><font size="3" face="Comic Sans MS" color="#FF0000">Scénario :</font></u></i></b><font color="#FFFFFF" size="3" face="Comic Sans MS"><br />
                  <br />
                  Final Fantasy X dispose d’un scénario très loin de ceux déjà proposés dans la série. Ici, il est nettement plus abouti et surtout plus prenant. Certains diront qu’un scénario trop complet nuit à la liberté, c’est vrai, mais ça dépend du scénario…<br />
  <br />
                  Et dans FFX, on peut dire que vos sens vont être mis à rude épreuve. Il vous faudra beaucoup réfléchir au-delà du jeu, car celui-ci propose une intense réflexion sur de nombreux sujets. Et ceux-ci sont très adultes, comme pour
                  FFVIII. Mais nulle question de comparer ces deux extrêmes.<br />
                  <br />
                  Vous incarnez Tidus, jeune star de Blitzball, sport aquatique très prisé à
                  Zanarkand. Zanarkand est une immense cité qui ne dort jamais. Toujours illuminée de mille feux, ses habitants passent leur temps à s’amuser, laissant aux machines le soin de faire toutes les dures tâches. Ce soir-là, Tidus signe quelques
                  autographes avant de se rendre au stade, pour un match au sommet. Malheureusement… Sin, une immense créature décidée à raisonner les hommes, apparaît et détruit
                  Zanarkand. Tidus, un peu abasourdi, retrouve Auron, un homme sage et maniant l’épée comme personne, qui l’emmène jusqu’à l’antre du diable : Sin
                  lui-même… C’est alors que débutent les aventures de Tidus sur Spira, planète subissant les attaques de l’immense entité qu’est Sin.</font></p>
  <p align="center"><font color="#FFFFFF" face="Comic Sans MS" size="3"><img src="/dmic-corp/images/test-1.jpg" width="350" height="251" /></font></p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS" size="3">Mille ans ont en effet passé depuis la destruction de
    Zanarkand. Tidus, après s’être rendu compte de là où il était tombé, se décide à accompagner
    Yuna, une jeune Invokeur, dans son pèlerinage la menant à anéantir Sin. Les Invokeurs sont les
    seuls êtres capables de tuer Sin, et ce en appelant l’Ultime Chimère, commandée par les cinq autres. Depuis des centaines d’années, ils se succèdent pour apporter la Félicité, période où Sin n’est pas. Malheureusement, il renaît sans cesse…<br />
    <br />
    Derrière ces maigres lignes de scénario se cache en fait une trame excellente, sans cesse plus prenante. Vous ferez de découvertes en révélations, ce qui est tout à fait digne d’un Final Fantasy…<br />
  <br />
    A plusieurs reprises, vous ne pourrez retenir vos larmes. Et quand ce n’est pas émouvant à ce point, c’est calmant. Mais calmer dans le sens que vous ne verrez plus jamais la vie autrement. Personnellement, je voudrais vous faire partager un moment du jeu où je me suis senti ému jusqu’aux os. Ce n’est en rien un
    spoiler, ne vous inquiétez pas. Après une attaque de Sin, vous vous réveillez sur une plage dévastée encore fumante et jonchée de corps… Vous êtes le seul être encore en vie. La musique en fond n’est ni plus ni moins que Song of
    Prayer, l’hymne des Priants, et c’est ce qui a contribué à mon émotion (il s’agit
    de chœurs mixtes mais dominés par des voix de femmes). Un terrible sentiment de fatalité monte alors en vous, accumulé à la colère contre Sin.<br />
    <br />
    La très large palette d’émotion que vous procure Final Fantasy X, du sourire aux larmes, contribue à faire de ce jeu l’un des plus aboutis de la création.<br />
    Et comme c’est un FF, les réflexions continuent longuement après la fin. Les nombreux thèmes abordés par le jeu (le voyage, les relations parents-enfants, la mort et bien évidemment la religion) permettent de discuter de sujets qui finalement font partie de notre vie et de notre Humanité. Yevon nous dresse par exemple un
    sombre portrait de la religion d’aujourd’hui : sans cesse plus ignorée par des populations dont les préoccupations se trouvent ailleurs. Trahis par des cultes qu’on essaye de leur faire gober, ils se retournent vers la dure réalité qu’est le monde, où la paix est loin de faire légion.<br />
    <br />
    Comme vous le voyez, il est facile de partir sur une réflexion où des camps sont susceptibles de s’opposer. Tout ça venant d’un jeu vidéo…<br />
  <br />
  <br />
    </font><b><i><u><font face="Comic Sans MS" size="3" color="#FF0000">Graphismes :</font></u></i></b><font color="#FFFFFF" face="Comic Sans MS" size="3"><br />
      <br />
      Du jamais vu. Je n’ai jamais vu de jeu plus beau. Ne me rétorquez pas de nom, je sais très bien que je trouverai toujours FFX plus beau. La qualité des graphismes atteint ici son paroxysme…<br />
  <br />
      FFX est en 3D. Fini le pré-calculé, enfin presque. Même si certains décors en 2D subsistent, tout le reste est désormais en temps réel. A chaque nouveau décor, vous ne pourrez pas vous empêcher de vous écrier « Mais qu’est ce que c’est BEAU !!! » Et oui, c’est beau, mais c’est Square. Ils ont réussi à
      dompter la PlayStation 2 dès le début ! On sent également qu’ils ont peaufiné chaque détail…<br />
      <br />
      En effet, les décors en 3D bénéficient d’un soin encore jamais vu : tout est fait pour vous donner l’impression que vous vous baladez dans un vrai décor. Les nuages défilent dans le ciel, l’herbe remue au gré du vent, l’eau s’écoule, etc. C’est néanmoins un point de vue général, car chaque décor a sa
      spécificité. Vous trouverez par exemple sur l’île de Besaid des cascades, une forêt luxuriante à
      Kilika, des installations « futuristes » à Luca, et plein d’autres bonnes choses encore. Certains passages proposent une palette de couleurs plutôt hallucinante. Je ne citerais que votre arrivée à
      Kilika, sur fond de
      coucher de soleil, ou encore Macalania, la forêt glacée, aux couleurs bleues d’une pureté rare.<br />
      <br />
      L’animation des décors est en plus mise en valeur par les angles de caméra. Le jeu a beau être tout en 3D, Square a pris la décision de ne pas laisser au joueur les commandes de la caméra. Même si des fois on a une terrible envie de la tourner pour admirer les lieux, cette décision rapproche FFX des épisodes sur
      PSOne.
      Cette 3D se rapproche donc d’une 2D à la puissance supérieure. Et il faut aussi noter que la caméra se place toujours parfaitement pour nous faire profiter des magnifiques paysages ! Par contre, des fois elle change de position brutalement, et quand vous voulez changer de direction aussi avec votre personnage, il part dans
      tous les sens...</font></p>
  <p align="center"><font color="#FFFFFF" face="Comic Sans MS" size="3"><img src="/dmic-corp/images/test-2.jpg" width="350" height="228" /></font></p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS" size="3">Côté personnages, Final Fantasy X doit être le premier jeu où leur modélisation en temps réel est supérieure à celle dans les séquences cinématiques. En effet, j’ai trouvé que les protagonistes étaient pour la plupart moches dans les
    FMV, l’exemple
    le plus désastreux étant celui de Rikku, qui devient une vraie horreur au visage déformé. Yuna et Tidus sont quant à eux représentés de façon trop japonaise, comparé au jeu où ils ont l’air plus occidentaux. Cela nuit un peu à la beauté de
    Yuna, je trouve…<br />
    <br />
    Mais peu importe. On a plus souvent des séquences de jeu que des séquences cinématiques. Et durant les
    cut-scenes, on atteint le summum de la beauté sur PlayStation 2. Il est dur de penser que c’est du temps réel, tant la beauté et la précision sont poussés. Les expressions faciales sont retranscrites à merveille,
    faisant de ces scènes un régal à regarder, au lieu d’une pénible épreuve à passer dans les précédents FF, bien que FFX aie quand même plus de dialogues…<br />
    Par contre, là où certaines fois les héros sont modélisés à merveille, il est des moments où Square (par manque de mémoire ?) se trouve obligé de sortir leurs versions moins
    pixélisées. Yuna devient ainsi un peu laide… Mais au milieu des personnages secondaires qui sont eux naturellement moins détaillés, ça
    passerait presque.<br />
    <br />
    En combat, on peut enfin apprécier des décors riches. En effet, les FF sur PSOne proposaient souvent des zones de combat vides. Maintenant, la plupart des combats se passent dans le même environnement que les déplacements. C’est certes un détail, mais ça rend l’apparence générale plus soignée. Les ennemis sont bien
    modélisés et leurs mouvements paraissent naturels. C’est par contre une version sous-pixélisée des personnages auquel on a droit. Rien de dramatique toutefois, car les gros plans ne sont pas courants. Côté effets visuels, on a toujours droit à l’excellence
    Squaresoft, bien que ça manque souvent d’originalité…
    Les magies sont ainsi très proches de celles de FFVIII, de même que les Chimères. L’Overdrive de Shiva est par exemple la copie conforme de son attaque dans le huitième épisode. La puissance d’une 128 bits en plus, quand même…<br />
    <br />
    Pour finir, le désormais grand classique : les séquences cinématiques. Dans Final Fantasy X, elles semblent plus rares, car la 3D fait le reste. Et on se dit parfois qu’elles feraient mieux de ne pas prendre place à l’action. Certaines sont en effet un peu en dessous de ce que l’on pourrait penser obtenir, vu la
    puissance de la console. Ceci venant du fait que les personnages y sont laids, comme je l’ai déjà dis, mais aussi que ça ne révolutionne pas le genre. Rien d’aussi impressionnant que les vidéos de FFVII à leur époque, si vous préférez ! On reste par contre sans voix devant la vidéo d’introduction à
    Zanarkand,
    qui est vraiment extraordinaire !<br />
    <br />
    <br />
    </font><b><i><u><font face="Comic Sans MS" size="3" color="#FF0000">Système de jeu :</font></u></i></b><font color="#FFFFFF" face="Comic Sans MS" size="3"><br />
      <br />
      Un aspect excellent du jeu, comme les autres d’ailleurs. Je vais commencer par dire que je ne me suis jamais autant amusé à faire des combats et à augmenter les aptitudes de mes personnages. Nous pouvons donc remercier Toshiro
      Tsuchida, provenant directement du staff des Front Mission, pour le système de jeu qu’il nous a
      réalisé.<br />
      <br />
      Commençons par les combats… ceux-ci peuvent se targuer d’être les meilleurs de toute la série, et je pèse mes mots. Avant, les combats étaient plus des épreuves dont on voulait sortir au plus vite. C’est maintenant avec une grande joie que je vois l’écran se briser pour laisser place à la zone de bataille ! Tout
      d’abord, grâce à la puissance divine de la PlayStation 2, le chargement n’existe plus, on est directement plongé dans l’action. Ensuite, la vitesse avec laquelle les personnages répondent à vos actions rend le tout nettement plus dynamique. Une fois ce coup de punch passé, on peut admirer la nouvelle conception des
      combats : plus de jauge d’ATB, c’est désormais chacun son tour d’agir. Une fenêtre vous indique l’ordre d’action, vous pourrez ainsi calculer vos attaques par rapport à celles des ennemis. Fini le bourrinage des anciens épisodes, maintenant il faut être tactique.<br />
      <br />
      Les personnages retrouvent leurs « jobs », Yuna est ainsi « summoner » (Invokeur en français…), Rikku voleuse, Lulu mage noire, etc. Chaque ennemi a sa technique particulière pour être tué. S’il dispose d’une carapace solide, faites appel à Auron et son épée lourde ; s’il est rapide et agile, ramenez Tidus
      pour le coincer sous votre épée ; si c’est un monstre de feu, 3615 Lulu et sa magie de glace, et ainsi de suite… A vous de trouver le point faible de chaque ennemi. Et si je parle de faire appel aux personnages, c’est que vous avez maintenant la possibilité de changer d’équipe en cours de combat ! Cela ne prendra
      même pas un tour, permettant de mobiliser à temps l’équipe idéale face à un monstre. Et tant que je parle de changements en direct, sachez que vous pourrez aussi changer d’armes et d’armures en direct live. Une évolution rendant les combats toujours plus tactiques…</font></p>
  <p align="center"><font color="#FFFFFF" face="Comic Sans MS" size="3"><img src="/dmic-corp/images/test-3.jpg" width="350" height="228" /></font></p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS" size="3">Et c’est en finissant un affrontement qu’on se rend compte la nouvelle évolution de FFX : il n’y a plus de points d’EXP
    (EXPérience), uniquement des PC. Ceux-ci vous amèneront à pouvoir activer des sphères boostant vos compétences. Ces sphères
    prennent place sur un immense champ : le Sphérier.<br />
    <br />
    Bien que difficile à saisir au début, le principe du Sphérier est tout simplement génial et vous permettra de faire évoluer vos héros comme vous l’entendez. Dès lors que vous avez assez de PC, vous passez un « niveau d’évolution » qui vous permettra de vous déplacer sur le
    Sphérier. Ce dernier est composé de
    près de 800 orbes permettant chacun d’avoir accès à une compétence : augmenter les HP, les MP, la force, la constitution, apprendre un sort, etc. Tout remplir vous prendra énormément de temps, mais au final vous serez une bête de course.<br />
    <br />
    La version Internationale de FFX dont nous disposons en Europe propose deux
    Sphériers. Le premier, le standard, est très dirigiste et vous serez directement amenés aux compétences vitales d’un personnage : Lulu ira vers ses magies noires, Auron augmentera sans cesse sa force, etc. Le Sphérier expert est quant à lui
    totalement libre ! Aucune direction ne vous sera imposée, et si vous désirez transformer Yuna en mage noir, ça ne posera aucun problème. Par contre, si j’ai bien un conseil à vous donner, c’est de garder le même schéma que le standard au début, pour avoir quand même les compétences vitales aux combats : sorts de
    soin par exemple…<br />
    <br />
    En conclusion, le gameplay de FFX est supérieur à celui des précédents épisodes, grâce à un système de gestion démoniaque.<br />
  <br />
  <br />
    </font><b><i><u><font face="Comic Sans MS" size="3" color="#FF0000">Personnages :</font></u></i></b><font color="#FFFFFF" face="Comic Sans MS" size="3"><br />
      <br />
      Comme à chaque nouvel épisode, c’est une nouvelle ribambelle de personnages qui s’offre à nous… C’est Tetsuya Nomura qui revient pour les dessiner, après un neuvième opus aux couleurs (magiques) de Yoshitaka
      Amano. On revient donc au design adulte qui avait été si contesté à l’époque de
      FFVIII. Laissez-moi
      vous dire que ceux qui critiquaient ce jeu uniquement du fait qu’il n’était pas en SD sont des abrutis bornés. Le huitième épisode est pourtant devenu à mes yeux l’un des meilleurs !<br />
      <br />
      Je retrouve donc un FFX aux formes réalistes, mais dans un genre pourtant à des années-lumière du
      VIII. En effet, les personnages sont adaptés au monde qu’ils chevauchent, une terre de mystères et de rêves :
      Spira. Leur mentalité est pour la plupart soumise à Yevon, sauf les étrangers au culte : Tidus et
      Rikku.<br />
      <br />
      Tidus est le héros. Un jeune bon vivant qui se retrouve propulsé dans un monde dont il ne sait rien… Il fera néanmoins face à son destin. Auron, un vieil ami à son père, lui montrera le chemin… tout en lui expliquant ce pourquoi il est arrivé sur
      Spira. En combat, Tidus manie habilement l’épée et utilise
      différents sorts lui permettant d’agir sur la vitesse : Booster, Somni, etc.<br />
      <br />
      Auron est donc un ami du père de Tidus, Jecht. Sa sagesse vous sera grandement utile, même si on sent parfois qu’il en fait trop pour protéger
      Yuna. Il sera quand même un confident de taille, car renseigné sur les risques du trajet jusqu’à Sin… Il manie une épée lourde avec laquelle les ennemis ne font guère long
      feu !<br />
      <br />
      Yuna est l’héroïne. Cette nouvelle Invokeur (hum…) suit les traces de son père,
      Braska, qui a apporté la dernière Félicité. Elle désire plus que tout tuer Sin. L’arrivée de Tidus lui fera néanmoins découvrir quelque chose qu’elle n’avait pas encore connu… Comme c’est une
      Invokeur, Yuna manie aussi la
      magie blanche. Durant les combats, elle pourra ainsi appeler les Chimères, qui occasionnent les plus gros dommages possibles du jeu. Sa magie de soin vous sera aussi très utile.<br />
      <br />
      Vient ensuite Wakka, le bourrin jovial que vous rencontrerez à Besaid. Capitaine de l’équipe de Blitzball des Besaid Aurochs, il est très attaché à Yevon et suit son culte de très près. Il se bat évidemment avec une balle de Blitzball et dispose de sorts permettant de changer l’état des adversaires : Morphée,
      Cécité, etc.<br />
      <br />
      Lulu est quant à elle la mage noire de l’équipe. C’est une superbe femme (aux attributs plutôt généreux…) énigmatique au début mais qui se dévoilera au fur et à mesure. A plusieurs moments, elle sert de confidente à
      Tidus. Le fait que ce soit une mage noire fait qu’elle maîtrise… la magie noire ! Elle vous
      sera très utile contre les monstres élementaires ainsi que ceux hors de portée. A noter un détail amusant : elle se bat avec différents animaux présents dans les anciens FF, comme les
      Mogs, les Pampas ou les Moombas !<br />
      <br />
      J’en arrive au moins causant de tous : Kimahri Ronso. Cet homme-lion bleu est depuis toujours le gardien de
      Yuna. Vous devrez arriver plus loin dans l’aventure pour l’entendre parler, car avant cela, il reste muet. Mais il parlera toujours intelligemment… En combat, il n’est pas très intéressant, mais il a quand
      même la capacité d’apprendre les sorts des ennemis en utilisant sa compétence
      Ryuken.<br />
      <br />
      Et pour finir, votre équipe se fera un plaisir d’accueillir la jeune Al Bhede
      Rikku. Outre son fessier plus que mis en valeur, cette jeune fille joviale, fille de Cid, dispose de la compétence « voler » qui vous permettra de vous servir sur les ennemis.<br />
      <br />
      Vous l’aurez compris, pas de héros perturbés ou introvertis. Cette équipe semble avant tout naturelle, ce qui ajoute de la crédibilité au jeu…<br />
  <br />
  <br />
      </font><b><i><u><font face="Comic Sans MS" size="3" color="#FF0000">Musique :</font></u></i></b><font color="#FFFFFF" face="Comic Sans MS" size="3"><br />
        <br />
        Comme le jeu, les musiques de Final Fantasy X sont de purs chef-d’œuvres. J’ai rarement trouvé une adéquation aussi parfaite entre les deux. La variété et la qualité du travail fourni par le trio des compositeurs est maintenant gravée dans mon cœur.<br />
  <br />
        Nobuo Uematsu n’est plus seul. Le fameux bonhomme moustachu a décidé de ne pas composer (assumer ?) seul toute la bande originale de
        FFX. C’est ainsi qu’il a fait appel à deux extrêmes : Junya Nakano, ex-compositeur de Dewprism (mieux connu sous le nom de Threads of Fate) et Masashi
        Hamauzu, génie à l’origine des
        thèmes de SaGa Frontier 2. Deux extrêmes car ces musiciens n’ont résolument pas la même conception de la musique. Là où Junya Nakano opte pour un style ambiant très oriental, Masashi Hamauzu se tourne vers l’occident avec des musiques pleines d’émotion.<br />
        <br />
        Le résultat est donc une bande originale très variée, composée de thèmes d’ambiance discrets mais réussis, de thèmes de combat furieux aux lignes directrices très entraînantes, de thèmes de lieux souvent sympathiques, mais aussi évidemment de thèmes accompagnant les événements que vous serez amenés à
        découvrir.<br />
        <br />
        Et c’est là qu’on peut dire que messieurs Nakano et Hamauzu sont les bienvenus. Même si, j’en conviens, ça n’a plus toujours le goût de Final
        Fantasy, ça apporte un nouveau brin de variété. Et, de toute façon, je ne pourrais pas renier le fait que mes musiques préférées soient pour la plupart signées
        Hamauzu.
        A l’instar de celle qui berce l’au-delà (« Fluctuating Flame ») ou encore celle du Mont Gagazet (« People of the North Pole »), je ne peux que tomber en sanglots devant des musiques telles que celle que vous entendez à Macalania après l’assaut de Bevelle (« Forest of Macalania ») ou le thème du dernier combat («
        The Final Battle »). Tout cela est signé Masashi Hamauzu, preuve indéniable que son ajout au sein de FFX n’a apporté que du bien. De plus, il dispose d’un style vraiment inattendu, ce qui expliquera la présence de piano dans la musique accompagnant la plaine foudroyée par exemple ! Et pourtant, l’ambiance créée n’a
        rien de choquant…</font></p>
  <p align="center"><font color="#FFFFFF" face="Comic Sans MS" size="3"><img src="/dmic-corp/images/test-4.jpg" width="350" height="228" /></font></p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS" size="3">Junya Nakano m’a déplu quand j’ai entendu ses premiers thèmes, en dehors du jeu, il y a un an de cela. Néanmoins, force est de constater qu’il fait un travail très intéressant pour mettre une ambiance sans pour autant déployer tous les instruments
    possibles et imaginables. La douceur de ses thèmes d’ambiance fait qu’on se retrouve vite à être possédé par le jeu. Il suffit de suivre les lignes directrices de « Hurry ! », la musique accompagnant votre échappée de Zanarkand avec Auron, ou les sons discrets de « Underwater Remains » dans les ruines
    sous-marines, ou bien « Guadosalam » le thème de la ville des Guados, ou bien encore l’un des thèmes du combat final « Summon Monster Battle » pour comprendre qu’il veut avant tout faire profiter le joueur et pas l’auditeur.<br />
    <br />
    Nobuo Uematsu… fidèle à lui-même, si je puis dire. Toujours aussi inégal pour certains, il signe une grande majorité de thèmes beaux voire extraordinaires, mais aussi des choses pas terribles. La plupart des joueurs resteront bloqués sur « At Zanarkand », le solo de piano qui rythme les premières secondes du jeu.
    Jamais je n’ai été aussi passionné par du piano, et je pense que ça s’explique simplement par le fait qu’il se dégage de ce morceau une intense émotion et un terrible sentiment de fatalité, ce même sentiment qui revient plusieurs fois dans l’aventure. Uematsu a beau se faire voler la vedette pour le thème des
    boss (de Nakano), il réussit à me faire frémir grâce au thème de combat, qui est à mes yeux le meilleur de la série aux côtés de ceux des épisodes II et III (je sais… ça remonte à longtemps). Même si j’ai entendu dire que pas mal de monde n’aime pas, je ne me lasse pas de le réentendre.<br />
    <br />
    Et que dire de la chanson thème « Suteki Da Ne » ? Beaucoup de monde est partagé sur la voix de
    Rikki, mais je dois dire qu’elle donne un charme tout particulier à la chanson. Il est d’ailleurs à noter qu’elle n’a pas été massacrée par un passage en anglais (je pense à Hikari de Kingdom Hearts évidemment), et
    qu’elle reste en japonais dans toutes les versions. Suteki Da Ne est magnifique je trouve, presque plus encore en version orchestrale, celle berçant le générique de fin.<br />
    <br />
    Pour terminer, je dirais que Final Fantasy X dispose d’une bande sonore excellente qui mérite la note maximale, car elle me fait vibrer à n’importe quel moment, contribuant à renforcer mon avis général déjà glorieux sur le jeu.<br />
  <br />
  <br />
    </font><b><i><u><font face="Comic Sans MS" size="3" color="#FF0000">Son :</font></u></i></b><font color="#FFFFFF" face="Comic Sans MS" size="3"><br />
      <br />
      Vous devez savoir que FFX comporte (enfin !) des voix digitalisées… Une amélioration qui donne un nouveau tournant à la série. En effet, là où les précédents épisodes s’efforçaient de garder des dialogues écrits, pour mieux laisser au joueur le loisir de s’identifier aux personnages, le dixième opus donne
      directement un caractère et des émotions aux héros. Un choix qui tourne définitivement la série vers un aspect cinématique. A noter tout de même que les voix de cette version PAL sont en anglais, tandis que les dialogues sont bel et bien sous-titrés dans la langue de Molière.<br />
      <br />
      Tous les dialogues principaux sont doublés, ce qui représente près de 9000 lignes de texte pour la plupart… C’est tout simplement du jamais vu. James Arnold Taylor, le doubleur de
      Tidus, explique bien que ce travail n’était pas une sinécure, mais que ce fut à plusieurs fois un plaisir, le travail de doublage se
      déroulant avec le jeu sous les yeux…<br />
      <br />
      Venons-en à la qualité des voix. Elles sont toutes bonnes, voire excellentes, chaque personnage ayant son style. Même si la voix de Tidus est énervante à force, on s’y fait… Par contre, votre équipe possède une belle brochette de doubleurs ! Je ne peux qu’être admiratif devant le travail de John
      diMaggio, qui a
      donné sa voix à la fois à Wakka mais aussi à Kimahri. On ne remarque même pas que la même personne est derrière les deux voix ! Le travail de Matt MacKenzie est également admirable : le doublage d’Auron est divin, tant sa voix colle avec la classe du protagoniste.</font></p>
  <p align="center"><font color="#FFFFFF" face="Comic Sans MS" size="3"><img src="/dmic-corp/images/test-5.jpg" width="350" height="251" /></font></p>
  <p align="justify"><font color="#FFFFFF" face="Comic Sans MS" size="3">Les dialogues semblent tout à fait naturels, bien qu’ils prennent le soin d’articuler au maximum, pour ne pas restreindre trop le public… Peu importe, du moment que c’est sous-titré. Naturellement, les voix font aussi leur apparition en combat, sous
    la forme d’exclamations diverses : « See ya ! » « Farewell » « Enough ! » « Take that ! » « Bye-bye ! ». De quoi rendre le tout encore plus dynamique que ça ne l’était déjà.<br />
    <br />
    Je dis donc oui aux voix dans les Final Fantasy, si ce niveau est gardé. En effet, l’ajout de voix, qui sont qui plus est réussies, donne une tournure particulière au jeu. C’est l’émotion qui gagne en puissance, surtout aux moments clés…<br />
  <br />
  <br />
    </font><b><i><u><font face="Comic Sans MS" size="3" color="#FF0000">Défauts :</font></u></i></b><font color="#FFFFFF" face="Comic Sans MS" size="3"><br />
      <br />
      Linéarité. Le mot qui fait mal. C’est malheureusement l’aspect négatif qui ressort le plus dans Final Fantasy X… En effet, le scénario occupe une place très importante, vous obligeant à suivre un itinéraire précis pendant une grande partie du jeu. Heureusement, certaines phases, surtout vers la fin, vous laissent
      libres.<br />
      <br />
      L’absence de carte du monde se veut pour beaucoup la cause de cette linéarité trop poussée. L’un des fondements du RPG est donc oublié dans FFX pour laisser place à une aventure dans laquelle les déplacements sont réalistes. Ce n’est que vers la fin, avec l’airship, qu’on a le droit à un planisphère sur lequel
      on choisit sa direction…<br />
      <br />
      C’est justement avant la fin qu’on se rend aussi compte d’un autre défaut : les quêtes secondaires. Elles ne sont pas aussi intéressantes que dans les épisodes précédents… Du fait que la plupart sont purement impossibles sans avoir fait une surdose de « level up » (pratique barbare qui consiste à tourner en rond
      pour faire un maximum de combats et gagner un meilleur niveau). Les Chimères Purgatrices sont par exemple des monstres impossibles à battre sans une puissance d’attaque colossale et un nombre d’HP faramineux. Et… on peut très bien tomber sur ces Chimères sans faire attention, ce qui m’est très bien arrivé (Imaginez…
      vous revenez sur la route de Mycorocs pour aller chercher l’arme légendaire d’Auron, quand soudain les Magus Purgatrices se dressent sur votre chemin !).<br />
      <br />
      Pour me tourner vers les défauts graphiques, je dirais que l’aliasing fait une apparition plutôt remarquée sur certains décors. Toutefois, le plus choquant reste la pitoyable qualité de la synchronisation labiale des personnages. Sony nous avait promis une adaptation des mouvements des lèvres des personnages par rapport
      à ce qu’ils disent, mais… Il n’en est rien. On voit bien que ce sont toujours les mouvements de la version japonaise, le tout additionné au fait que la version PAL moins rapide ne se coordonne pas avec les répliques les plus longues. Ainsi, entre les ventriloques et les bovins, la beauté des scènes de dialogues perd
      un point… Il n’empêche que je suis tombé fou amoureux d’une réplique de Yuna dans laquelle sa bouche suit exactement ses mots. Situez un « I don’t understand you ! » qui se trouve vers la fin, avant un combat contre un méchant qui vous traite de pitoyables mortels. C’est là.<br />
      <br />
      Dernier défaut qui n’en est finalement pas un : la conversion en PAL. Même si les bandes noires choquent dans les premières minutes du jeu, on les oublie tant le jeu passionne. La vitesse de jeu moins rapide qu’en NTSC est également à oublier, surtout si on ne connaît pas la version 60 Hz. En bref, je m’aventurerai
      même à dire que cette conversion est très bonne. Du moment que les sous-titres sont en français, je suis heureux… c’est pas que je suis naze en anglais, mais je préfère tout comprendre. Et en parlant des sous-titres, la traduction française est excellente. Là.<br />
      <br />
      <br />
      </font><b><i><u><font face="Comic Sans MS" size="3" color="#FF0000">Petit final personnel :</font></u></i></b><font color="#FFFFFF" face="Comic Sans MS" size="3"><br />
        <br />
        Avant de terminer ce test, j’aimerais vous dire quelque chose. Je délaisse toute objectivité pour vous faire partager ma passion envers ce jeu qui n’est ni plus ni moins que la plus grande aventure que j’ai pu vivre.<br />
  <br />
        Que ceux qui mettent leur DVD dans leur PS2 en pensant « tiens je vais jouer un peu » s’arrêtent là. Avec Final Fantasy X, on ne joue plus. On vit. Jamais je n’ai autant ressenti des secondes. Parfois, chacune vaut plus qu’un milliard d’autres. C’est dans ces moments-là qu’on se dit que le jeu vidéo est un art
        qui va au-delà de tous les autres. Il regroupe tout. L’image. Le son. La possibilité d’y participer. Et, le plus important, les émotions.</font></p>
  <p align="center"><font color="#FFFFFF" face="Comic Sans MS" size="3"><img src="/dmic-corp/images/test-6.jpg" width="350" height="228" /></font></p>
  <p><font color="#FFFFFF" face="Comic Sans MS" size="3">Et Dieu sait si FFX est un jeu où les émotions ont une grande importance. J’avais presque pleuré à la fin de
    FFVII, heureux de savoir que le monde pouvait à nouveau s’épanouir, maintenant que sa force mère était protégée. J’ai pleuré autant que possible à
    la fin de FFVIII, satisfait de voir ces héros devenus si simples, après avoir vécu de telles aventures. La simple évocation de la fin de FFVIII me suffit d’ailleurs à retrouver mes yeux humides. Quant à la fin de FFIX… j’en ai pleuré de part sa beauté, mais aussi de part l’intense émotion qui s’en dégage,
    attisée par le fait qu’elle draine le mystère avec elle.<br />
    <br />
    La fin de FFX dépasse toutes ces fins. Je ne vais rien raconter. Je vais juste vous dire : jamais je n’ai été aussi ému. Jamais je n’ai autant versé de larmes, rien qu’en regardant un écran. Final Fantasy X dépasse tous les entendements, et ça… ne l’oubliez jamais…<br />
  <br />
  <br />
    </font><b><u><i><font face="Comic Sans MS" size="3" color="#FF0000">Notes :</font></i></u></b><font color="#FFFFFF" face="Comic Sans MS" size="3"><br />
      <br />
      </font><b><u><font face="Comic Sans MS" size="3" color="#0000FF">Scénario :</font></u></b><font color="#FFFFFF" face="Comic Sans MS" size="3"> 20/20<br />
        </font><b><u><font face="Comic Sans MS" size="3" color="#0000FF">Graphismes :</font></u></b><font color="#FFFFFF" face="Comic Sans MS" size="3"> 20/20<br />
          </font><b><u><font face="Comic Sans MS" size="3" color="#0000FF">Gameplay :</font></u></b><font color="#FFFFFF" face="Comic Sans MS" size="3"> 20/20<br />
            </font><b><u><font face="Comic Sans MS" size="3" color="#0000FF">Personnages :</font></u></b><font color="#FFFFFF" face="Comic Sans MS" size="3"> 19/20<br />
              </font><b><u><font face="Comic Sans MS" size="3" color="#0000FF">Musique :</font></u></b><font color="#FFFFFF" face="Comic Sans MS" size="3"> 20/20<br />
                </font><b><u><font face="Comic Sans MS" size="3" color="#0000FF">Difficulté :</font></u></b><font color="#FFFFFF" face="Comic Sans MS" size="3"> 17/20<br />
                  </font><b><u><font face="Comic Sans MS" size="3" color="#0000FF">Final :</font></u><font color="#FFFFFF" face="Comic Sans MS" size="3"> </font><font face="Comic Sans MS" size="3" color="#FF0000">20/20</font></b><font color="#FFFFFF" face="Comic Sans MS" size="3"><br />
                    <br />
                    Un 20. Oui. Mais un 20 de passion. Aveuglé par cette extraordinaire aventure, je ne peux que donner la note parfaite. Je sais qu’il y a des défauts, mais quand on joue à un jeu et qu’on prend son pied jusqu’au genou, on ne peut pas rester sur une note qui ne serait pas symbolique de l’excellence… Alors je lui mets
                    20, et puis c’est tout.</font></p>
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
