<!doctype html>
<html>
<head>
<meta charset="utf-8">
<!-- TemplateBeginEditable name="doctitle" -->
<title>Document sans titre</title>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
<style type="text/css">
<!--
body {
	font: 100%;
	font-family: 'Bitstream Vera Sans', arial, Tahoma, 'Sans serif';
	font-size: 12px;
	background: #dfdfdf repeat-x;
	margin: 0;
	padding: 0;
	color: #000;
}

/* ~~ Sélecteurs d'éléments/balises ~~ */
ul, ol, dl { /* En raison des variations entre les navigateurs, il est conseillé d'attribuer une valeur de zéro aux marges intérieures et aux marges des listes. A des fins de cohérence, vous pouvez définir les valeurs désirées dans cette zone ou dans les éléments de liste (LI, DT, DD) qu'elle contient. N'oubliez pas que les paramètres que vous définissez ici se répercuteront sur la liste .nav, sauf si vous rédigez un sélecteur plus spécifique. */
	padding: 0;
	margin: 0;
}
h1, h2, h3, h4, h5, h6, p {
	margin-top: 0;	 /* la suppression de la marge supérieure résout un problème où les marges sortent de leur div conteneur. La marge inférieure restante l'éloignera de tout élément qui suit. */
	padding-right: 15px;
	padding-left: 15px; /* l'ajout de la marge intérieure aux côtés des éléments à l'intérieur des divs, et non aux divs proprement dit, évite le recours à des calculs de modèle de boîte. Une autre méthode consiste à employer une div imbriquée avec marge intérieure latérale. */
}
a img { /* ce sélecteur élimine la bordure bleue par défaut affichée dans certains navigateurs autour d'une image lorsque celle-ci est entourée d'un lien. */
	border: none;
}

/* ~~ La définition du style des liens de votre site doit respecter cet ordre, y compris le groupe de sélecteurs qui créent l'effet de survol. ~~ */
a:link {
	color:#414958;
	text-decoration: underline; /* à moins que vous ne définissiez un style particulièrement exclusif pour vos liens, mieux vaut prévoir un soulignement, qui garantit une identification visuelle rapide. */
}
a:visited {
	color: #4E5869;
	text-decoration: underline;
}
a:hover, a:active, a:focus { /* ce groupe de sélecteurs offrira à un navigateur au clavier la même expérience de survol que celle d'une personne employant la souris. */
	text-decoration: none;
}

/* ~~ ce conteneur entoure toutes les autres divs, en leur attribuant leur largeur sur base d'un pourcentage ~~ */
.container {
	background: #dfdfdf repeat-x;
	margin-left: auto;
	margin-right: auto;
	width: 9.6%;
	padding-left: 0.2%;
	padding-right: 0.2%;
	border: 1px none #000000;
	text-align: left; /* ce param�trage annule le param�tre text-align: center de l'�l�ment body. */
	height: auto;
	overflow: auto;
	z-index: auto;
	left: auto;
	top: auto;
	right: auto;
	bottom: auto;
	clip: rect(auto,auto,auto,auto);
}

/* ~~ aucune largeur n'est attribuée à l'en-tête. Il occupera toute la largeur de votre mise en page. Il contient un espace réservé pour une image, qui doit être remplacé par votre logo lié. ~~ */
.header {
	background-color: #6F7D94;
	/*background-image: url(http://www.dmic-corp.fr/images/arttilea.jpg);*/

	background: #000000;
	background: -moz-radial-gradient(#25A241, #000000); /* Firefox */
	background: -webkit-radial-gradient(#25A241, #000000); /* Webkit */

	

	/* For Internet Explorer 5.5 - 7 */

   	filter: progid:DXImageTransform.Microsoft.gradient(startColorStr=#25A241, endColorStr=#000000, GradientType=1);
	/* For Internet Explorer 8 */

	-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#25A241, endColorstr=#000000, GradientType=1)";
	color: #FFC;
	margin-top: 25px;
	-moz-border-radius: 4px;
	-webkit-border-radius: 4px;
	border-radius: 4px;
	-moz-box-shadow: 0px 7px 10px #4D4D4D;
	-webkit-box-shadow: 0px 7px 10px #4D4D4D;
	box-shadow: 0px 7px 10px #4D4D4D;
	margin-right: 10px;
	margin-bottom: 25px;
	margin-left: 10px;
	padding-top: 8px;
	padding-right: 8px;
	padding-bottom: 20px;
	padding-left: 8px;
}

.header_pub {

	padding: 10px 0;

	font-family: 'Bitstream Vera Sans', arial, Tahoma, 'Sans serif';

	color:#000;

	/*background-image: url(http://www.dmic-corp.fr/images/exptextb.jpg);*/

	background:#FFFFFF;
	background:-moz-radial-gradient(#25A241, #FFFFFF); /* Firefox */

   	background:-webkit-radial-gradient(#25A241, #FFFFFF); /* Webkit */

	

	/* For Internet Explorer 5.5 - 7 */

   	filter: progid:DXImageTransform.Microsoft.gradient(startColorStr=#25A241, endColorStr=#FFFFFF, GradientType=1);

   /* For Internet Explorer 8 */

   	-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#25A241, endColorstr=#FFFFFF, GradientType=1)";

	-moz-border-radius: 4px;

	-webkit-border-radius: 4px;

	border-radius: 4px;

	-moz-box-shadow: 0px 7px 10px #4D4D4D;

	-webkit-box-shadow: 0px 7px 10px #4D4D4D;

	box-shadow: 0px 7px 10px #4D4D4D;

	margin-top: 25px;

	margin-right: 10px;

	margin-bottom: 25px;

	margin-left: 10px;

	padding-top: 8px;

	padding-right: 8px;

	padding-bottom: 20px;

	padding-left: 8px;

	position: relative;

	z-index: auto;

	height: 70px;

	left: auto;

	top: auto;

	right: auto;

	bottom: auto;

	clip: rect(auto,auto,auto,auto);

}

/* ~~ Colonnes pour la mise en page. ~~ 

1) La marge intérieure n'est placée qu'en haut et/ou en bas des divs. Les éléments à l'intérieur de ces divs posséderont une marge intérieure sur les côtés. Vous évitez ainsi de devoir recourir à des « calculs de modèle de boîte ». N'oubliez pas que si vous ajoutez une marge intérieure latérale ou une bordure à la div proprement dite, elle sera ajoutée à la largeur que vous définissez pour créer la largeur totale. Vous pouvez également supprimer la marge intérieure de l'élément dans la div et placer une seconde div à l'intérieur, sans largeur et possédant une marge intérieure appropriée pour votre concept.

2) Toutes les colonnes étant flottantes, aucune marge ne leur a été attribuée. Si vous devez ajouter une marge, évitez de la placer du côté vers lequel vous effectuez le flottement (par exemple, une marge droite sur une div configurée pour flotter vers la droite). Dans de nombreux cas, vous pouvez plutôt employer une marge intérieure. Pour les divs où cette règle ne peut pas être respectée, ajoutez une déclaration « display:inline » à la règle de la div, afin de contourner un bogue qui amène certaines versions d'Internet Explorer à doubler la marge.

3) Comme des classes peuvent être employées à plusieurs reprises dans un document (et que plusieurs classes peuvent aussi être attribuées à un élément), les colonnes ont reçu des noms de classes au lieu d'ID. Par exemple, deux divs de barre latérale peuvent être empilées si nécessaire. Elles peuvent être très facilement remplacées par des ID si vous le souhaitez, pour autant que vous ne les utilisiez qu'une fois par document.

4) Si vous préférez que la navigation se trouve à droite et pas à gauche, faites flotter ces colonnes en sens opposé (toutes vers la droite au lieu de vers la gauche). Leur rendu s'effectuera dans l'ordre inverse. Il n'est pas nécessaire de déplacer les divs dans le code HTML source.

*/
.sidebar1 {
	float: left;
	width: 15%;
	max-width: 288px;
	min-width: 192px;
	background-color: #25A241;
	/*background-image: url(http://www.dmic-corp.fr/images/arttilea.jpg);*/

	background: radial-gradient(#25A241, #000000);
	background: -moz-radial-gradient(#25A241, #000000); /* Firefox */
	background: -webkit-radial-gradient(#25A241, #000000); /* Webkit */
	background: -0-radial-gradient(#25A241, #000000); /* Opera */

	/* For Internet Explorer 5.5 - 7 */

   	filter: progid:DXImageTransform.Microsoft.gradient(startColorStr=#000000, endColorStr=#25A241, GradientType=1);
	/* For Internet Explorer 8 */

	-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#000000, endColorstr=#25A241, GradientType=1)";
	-moz-border-radius: 4px;
	-webkit-border-radius: 4px;
	border-radius: 4px;
	-moz-box-shadow: 0px 7px 10px #4D4D4D;
	-webkit-box-shadow: 0px 7px 10px #4D4D4D;
	padding-top: 8px;
	padding-right: 8px;
	padding-bottom: 20px;
	padding-left: 8px;
	;
	margin-right: 0.5%;
	margin-left: 0.5%;
}
.content {
	font-family: 'Bitstream Vera Sans', arial, Tahoma, 'Sans serif';
	color: #000;
	/*background-image: url(http://www.dmic-corp.fr/images/exptextb.jpg);*/
	background: #FFFFFF;
	background: -moz-radial-gradient(#25A241, #FFFFFF); /* Firefox */
	background: -webkit-radial-gradient(#25A241, #FFFFFF); /* Webkit */
	/* For Internet Explorer 5.5 - 7 */
   	filter: progid:DXImageTransform.Microsoft.gradient(startColorStr=#25A241, endColorStr=#FFFFFF, GradientType=1);
	/* For Internet Explorer 8 */
	-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#25A241, endColorstr=#FFFFFF, GradientType=1)";
	-moz-border-radius: 4px;
	-webkit-border-radius: 4px;
	border-radius: 4px;
	-moz-box-shadow: 0px 7px 10px #4D4D4D;
	-webkit-box-shadow: 0px 7px 10px #4D4D4D;
	width: 65%;
	max-width: 1248px;
	min-width: 768px;
	float: left;
	padding-top: 8px;
	padding-right: 8px;
	padding-bottom: 20px;
	padding-left: 8px;
	position: relative;
	z-index: auto;
	height: auto;
	left: auto;
	top: auto;
	right: auto;
	bottom: auto;
	clip: rect(auto,auto,auto,auto);
	overflow: hidden;
}
.sidebar2 {
	float: right;
	width: 15%;
	max-width: 288px;
	min-width: 192px;
	background-color: #25A241;
	/*background-image: url(http://www.dmic-corp.fr/images/arttilea.jpg);*/

	background: radial-gradient(#25A241, #000000);
	background: -moz-radial-gradient(#25A241, #000000); /* Firefox */
	background: -webkit-radial-gradient(#25A241, #000000); /* Webkit */
	background: -0-radial-gradient(#25A241, #000000); /* Opera */

	/* For Internet Explorer 5.5 - 7 */

   	filter: progid:DXImageTransform.Microsoft.gradient(startColorStr=#000000, endColorStr=#25A241, GradientType=1);
	/* For Internet Explorer 8 */

	-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#000000, endColorstr=#25A241, GradientType=1)";
	-moz-border-radius: 4px;
	-webkit-border-radius: 4px;
	border-radius: 4px;
	-moz-box-shadow: 0px 7px 10px #4D4D4D;
	-webkit-box-shadow: 0px 7px 10px #4D4D4D;
	padding-top: 8px;
	padding-right: 8px;
	padding-bottom: 20px;
	padding-left: 8px;
	margin-right: 0.5%;
	margin-left: 0.5%;
}

/* ~~ Ce sélecteur groupé donne de l'espace aux listes dans la zone .content ~~ */
.content ul, .content ol { 
	padding: 0 15px 15px 40px; /* cette marge intérieure reflète la marge intérieure droite dans les en-têtes et la règle de paragraphe ci-dessus. Une marge intérieure a été placée en bas, afin d'assurer un espace entre les autres éléments des listes, et à gauche pour créer le retrait. Vous pouvez les régler comme bon vous semble. */
}

/* ~~ Styles de liste de navigation (peuvent être supprimés si vous optez pour un menu de survol prédéfini tel que Spry) ~~ */
ul.nav {
	list-style: none; /* entraîne la suppression du marqueur de liste */
	border-top: 1px solid #666; /* crée la bordure supérieure des liens ; les autres sont placées à l'aide d'une bordure inférieure sur la balise LI */
	margin-bottom: 15px; /* crée l'espace entre la navigation et le contenu en dessous */
}
ul.nav li {
	border-bottom: 1px solid #666; /* crée la séparation des boutons */
}
ul.nav a, ul.nav a:visited { /* le regroupement de ces sélecteurs garantit que vos liens conservent leur apparence de bouton, même après avoir été activés */
	padding: 5px 5px 5px 15px;
	display: block; /* attribue au bloc de liens des propriétés qui lui font remplir toute la balise LI qui le contient. Force la zone entière à réagir à un clic de souris. */
	text-decoration: none;
	background-color: #8090AB;
	color: #000;
}
ul.nav a:hover, ul.nav a:active, ul.nav a:focus { /* modifie la couleur de l'arrière-plan et du texte pour les navigateurs à la souris et au clavier. */
	background-color: #6F7D94;
	color: #FFF;
}

/* ~~ Pied de page ~~ */
.footer {
	margin-top: 25px;
	margin-botton: 10px;
	background-color: #25A241;
	/*background-image: url(http://www.dmic-corp.fr/images/arttilea.jpg);*/

	background: radial-gradient(#25A241, #000000);
	background: -moz-radial-gradient(#25A241, #000000); /* Firefox */
	background: -webkit-radial-gradient(#25A241, #000000); /* Webkit */
	background: -0-radial-gradient(#25A241, #000000); /* Opera */

	/* For Internet Explorer 5.5 - 7 */

   	filter: progid:DXImageTransform.Microsoft.gradient(startColorStr=#000000, endColorStr=#25A241, GradientType=1);
	/* For Internet Explorer 8 */

	-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#000000, endColorstr=#25A241, GradientType=1)";
	font-size: 9px;
	color: #FFC;
	border: 2px solid #cccccc;
	position: relative;/* donne hasLayout Ã  IE6 de faÃ§on Ã  permettre un effacement correct */
	float: right;
	right: 10px;
	height: 50px;
	width: 70%;
	-moz-border-radius: 8px;
	-webkit-border-radius: 8px;
	border-radius: 8px;
	-moz-box-shadow: 0px 7px 10px #4D4D4D;
	-webkit-box-shadow: 0px 7px 10px #4D4D4D;
	box-shadow: 0px 7px 10px #4D4D4D;
	margin-right: 10px;
	margin-bottom: 25px;
	margin-left: 10px;
	padding-top: 8px;
	padding-right: 8px;
	padding-bottom: 20px;
	padding-left: 8px;
}

/* ~~ classes flottant/effacement diverses ~~ */
.fltrt {  /* cette classe peut servir à faire flotter un élément depuis la droite sur votre page. L'élément flottant doit précéder l'élément à côté duquel il doit apparaître sur la page. */
	float: right;
	margin-left: 8px;
}
.fltlft { /* cette classe peut servir à faire flotter un élément depuis la gauche sur votre page. L'élément flottant doit précéder l'élément à côté duquel il doit apparaître sur la page. */
	float: left;
	margin-right: 8px;
}
.clearfloat { /* cette classe peut être placée sur une div <br /> ou vide, en tant qu'élément final suivant la dernière div flottante (dans le #container) si le paramètre #footer est supprimé ou retiré du #container */
	clear:both;
	height:0;
	font-size: 1px;
	line-height: 0px;
}
-->
/* Disposition tablette : 481px sur 768px. Hérite des styles de : Disposition mobile */
@media only screen and min-width: 481 px) {
}

</style><!--[if lte IE 7]>
<style>
.content { margin-right: -1px; } /* cette marge négative de 1px peut être placée sur n'importe quelle colonne de cette mise en page, avec le même effet correcteur. */
ul.nav a { zoom: 1; }  /* la propriété de zoom donne à IE le déclencheur hasLayout requis pour corriger les espaces blancs supplémentaires entre les liens */
</style>
<![endif]--></head>

<body>

<div class="container"><!-- TemplateBeginEditable name="header" -->
  <div class="header">
  <?php include ('front/inc/header/header_users.inc.php'); ?> 
    <!-- end .header -->
  </div>
<!-- TemplateEndEditable -->
<div id="header_pub" class="header_pub"><!-- TemplateBeginEditable name="header_pub" -->
	<?php include('front/inc/header/header_pub.inc.php');?>
<!--TemplateEndEditable --></div>
<!-- TemplateBeginEditable name="sidebar1" -->
<div class="sidebar1">
  <ul class="nav">
    <li><a href="#">Lien un</a></li>
    <li><a href="#">Lien deux</a></li>
    <li><a href="#">Lien trois</a></li>
    <li><a href="#">Lien quatre</a></li>
  </ul>
  <p> Les liens ci-dessus illustrent une structure de navigation de base à l'aide d'une liste simple dont le style est défini par CSS. Vous pouvez l'utiliser comme point de départ et modifier les propriétés afin de définir l'apparence de votre choix. Si vous avez besoin de menus de survol, créez-les à l'aide d'un menu Spry, d'un widget de menu téléchargé sur Adobe Exchange ou de diverses solutions JavaScript ou CSS.</p>
  <p>Si vous voulez placer la navigation en haut, déplacez l'élément ul.nav en haut de la page et recréez la mise en forme.</p>
  <!-- end .sidebar1 -->
</div>
<!-- TemplateEndEditable --><!-- TemplateBeginEditable name="content" -->
<div class="content">
  <h1>Instructions</h1>
  <p>Notez que le code CSS de ces mises en forme contient une grande quantité de commentaires. Si vous travaillez principalement en mode Création, jetez un coup d'œil au code afin d'obtenir des conseils sur l'utilisation du code CSS pour les mises en forme liquides. Vous pouvez supprimer ces commentaires avant de lancer votre site. Pour en savoir plus sur les techniques utilisées dans ces mises en forme CSS, consultez l'article suivant sur le centre pour développeurs Adobe : <a href="http://www.adobe.com/go/adc_css_layouts">http://www.adobe.com/go/adc_css_layouts</a>.</p>
  <h2>Méthode d'effacement</h2>
  <p>Comme toutes les colonnes sont flottantes, cette mise en page utilise une déclaration clear:both dans la règle .footer.  Cette technique d'effacement force le .container à comprendre où les colonnes se terminent, de façon à afficher les bordures ou les couleurs d'arrière-plan que vous appliquez au .container. Si votre conception exige la suppression de l'élément .footer du .container, vous devrez utiliser une méthode d'effacement différente. La plus fiable consiste à ajouter un élément &lt;br class=&quot;clearfloat&quot; /&gt; ou &lt;div  class=&quot;clearfloat&quot;&gt;&lt;/div&gt; après la dernière colonne flottante (mais avant la fermeture du .container). L'effet d'effacement résultant sera identique.</p>
  <h3>Remplacement du logo</h3>
  <p>Dans la zone .header, un espace réservé pour image a été utilisé à l'endroit où vous souhaiterez probablement placer un logo. Il est conseillé de supprimer l'espace réservé et de le remplacer par votre logo lié. </p>
  <p> Notez que si vous utilisez l'inspecteur Propriétés pour accéder à l'image de votre logo à l'aide de la zone SRC (au lieu de supprimer l'espace réservé puis de le remplacer), vous devez veiller à supprimer les propriétés intégrées d'arrière-plan et d'affichage. Ces styles intégrés servent uniquement à permettre l'affichage de l'espace réservé du logo dans des navigateurs à des fins de démonstration. </p>
  <p>Pour supprimer les styles intégrés, assurez-vous que le panneau Styles CSS est bien en mode Actuel. Sélectionnez l'image puis, dans le volet Propriétés du panneau Styles CSS, cliquez à l'aide du bouton droit puis supprimez les propriétés d'affichage et d'arrière-plan. Bien entendu, vous pouvez toujours accéder directement au code et y supprimer les styles intégrés depuis l'image ou l'espace réservé.</p>
  <h4>Commentaires conditionnels d'Internet Explorer</h4>
  <p>Ces mises en page liquides contiennent un commentaire conditionnel d'Internet Explorer afin de corriger deux problèmes. </p>
  <ol>
    <li>Les navigateurs n'arrondissent pas les tailles de divs de façon cohérente dans les mises en page basées sur des pourcentage. Si le navigateur doit rendre un nombre tel que 144,5px ou 564,5px, il devra l'arrondir à l'entier le plus proche. Safari et Opera arrondissent vers le bas, Internet Explorer vers le haut, et Firefox arrondit une colonne vers le haut et une vers le bas, de façon à remplir entièrement le conteneur. Ces problèmes d'arrondi peuvent entraîner des incohérences dans certaines mises en page. Cet IECC prévoit une marge négative de 1px afin de corriger le problème dans IE. Vous pouvez le déplacer dans n'importe quelle colonne (à gauche comme à droite) en fonction de vos besoins de mise en page.</li>
    <li>La propriété de zoom a été ajoutée à l'ancre dans la liste de navigation, car dans certains cas, des espaces blancs supplémentaires seront rendus dans IE6 et IE7. Le zoom attribue à IE sa propriété hasLayout prioritaire pour corriger ce problème.</li>
  </ol>
  <!-- end .content -->
</div>
<!-- TemplateEndEditable --><!-- TemplateBeginEditable name="sidebar2" -->
<div class="sidebar2">
  <h4>Arrière-plans</h4>
  <p>Par nature, la couleur d'arrière-plan d'une div ne s'affiche que pour la longueur du contenu. Si vous préférez une ligne de séparation plutôt qu'une couleur, placez une bordure sur le côté de la div .content (uniquement si elle doit toujours contenir davantage de contenu).</p>
  <!-- end .sidebar2 -->
</div>
<!-- TemplateEndEditable --><!-- TemplateBeginEditable name="footer" -->
<div class="footer">
  <?php include('front/inc/footer/footer_users.inc.php');?>
  <!-- end .footer -->
</div>
<!-- TemplateEndEditable -->
<!-- end .container --></div>
</body>
</html>
