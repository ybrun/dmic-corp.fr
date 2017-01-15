<?php require_once ('../../../../ScriptLibrary/ban_ip.php') ;?>
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
.Style2 {font-family: "Times New Roman", Times, serif}
.Style3 {color: #FFFFCC}
</style>
<script src="/dmic-corp/SpryAssets/SpryCollapsiblePanel.js" type="text/javascript"></script>
<script src="/dmic-corp/SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="/dmic-corp/SpryAssets/SpryCollapsiblePanel.css" rel="stylesheet" type="text/css">
<link href="/dmic-corp/SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css">
<!-- InstanceEndEditable -->
<link href="../../../../Styles/Fluid%20Grid%20Layout/boilerplate.css" rel="stylesheet" type="text/css">
<link href="../../../../Styles/Fluid%20Grid%20Layout/test.css" rel="stylesheet" type="text/css">
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
<script src="../../../../Styles/Fluid%20Grid%20Layout/respond.min.js"></script>
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
    <h1 align="center" class="Style3">Le Fils des Dragons Ecarlates.</h1>
    <p align="center" class="Style3"><img src="/dmic-corp/images/DE_tom2.jpg" alt="" width="682" height="457" /></p>
    <p align="center" class="Style3">&nbsp;</p>
    <p align="left" class="Style3">Le projet de la Genèse de FDE vient à l'origine de la lecture de la Genèse de Dune. Il a donc démarré fin 2012 après la réécriture des premiers chapitres de FDE. C'est donc avec Guilhem L. que nous avons débuté l'écriture de cette aventure.</p>
    <div id="CollapsiblePanel25" class="CollapsiblePanel">
      <div class="CollapsiblePanelTab" tabindex="0">Tome 1</div>
      <div class="CollapsiblePanelContent">
        <div id="CollapsiblePanel26" class="CollapsiblePanel">
          <div class="CollapsiblePanelTab" tabindex="0">Prologue</div>
          <div class="CollapsiblePanelContent">
            <div id="TabbedPanels19" class="TabbedPanels">
              <ul class="TabbedPanelsTabGroup">
                <li class="TabbedPanelsTab" tabindex="0">Version du 31/12/2011 par Guilhem</li>
                <li class="TabbedPanelsTab" tabindex="0">Version du 31/12/2011 par Yohann</li>
                <li class="TabbedPanelsTab" tabindex="0">Version du 08/01/2012 par Guilhem</li>
                <li class="TabbedPanelsTab" tabindex="0">Version du 09/01/2012 par Yohann</li>
                <li class="TabbedPanelsTab" tabindex="0">Version du 10/01/2012 par Guilhem</li>
                <li class="TabbedPanelsTab" tabindex="0">Version du 14/01/2012</li>
                <li class="TabbedPanelsTab" tabindex="0">Version du 22/01/2012</li>
                </ul>
              <div class="TabbedPanelsContentGroup">
                <div class="TabbedPanelsContent Style2">
                  <div align="justify">
                    <p align="center"><strong>Prologue. </strong></p>
                    <p> </p>
                    <p>La silhouette infernale de la magicienne, que le crépitement timide d’un feu de cheminée révèle discrètement à l’obscurité régnante, demeure dans la maison ou doit avoir lieu la rencontre. Une odeur de souffre emplie ces lieux ou le temps s’arrête pour contempler la matière brute et fragile, témoin éternel du passé de la civilisation humaine. Le halo de lumière entourant l’être démoniaque expose les formes voluptueuses mais acérées de sa tunique et de sa couronne, d’où trônent en son sommet de long pics sinueux, semblables à des serpents affamés. Si son visage reste caché dans l’ombre, l’éclat rouge de ses yeux transperce les ténèbres par le fait d’une puissance irrationnelle. Des formes spectrales tourbillonnent autour d’elle, comme envoutés par sa force de gravitation. Majestueuse, elle attend son serviteur, ce parfait produit de l’avidité humaine, cet être vil et vampirique, dénué de tout jugement morale et de compassion, l’esclave idéal. Une voix aigue et faussement nonchalante émergea du silence : « Dame, j’implore votre attention. ». La magicienne ne semble pas réagir à sa demande. Son corps reste impassible, pourtant ses yeux renforcent sensiblement leur éclat sanglant. Après un long silence, elle répond d’une voix sifflante, expirant des ectoplasmes à chacun de ses propos: </p>
                    <p>- Sois Bref </p>
                    <p>- J’ai accompli votre plan selon vos souhaits </p>
                    <p>- Et Lessien ? </p>
                    <p>- Lessien n’est plus. </p>
                    <p>Un rire grave et dissonant jaillit alors du corps creux et tourmenté de la magicienne. Une vapeur grise émane de son enveloppe spectrale et s’élance sur le serviteur puis tourbillonne autour de lui éclairant ainsi son corps fin et allongé, son dos vouté et son visage amère couvert de taches de vieillesse. Une tête ovale à la mâchoire tombante, au nez fin et pointu, aux yeux écarquillés, à l’arcade démesurément proéminente ornée d’une malheureuse calvitie. Honteux, il baisse les yeux en signe de crainte sacrée. La magicienne retrouve son calme et lui souffle: « Bien… Lloyd, tu m’as servie fidèlement. Tu as pris le risque de te rendre monstrueux aux yeux de tes semblables et je t’en suis reconnaissante. Je n’ai plus besoin de toi à présent… MEURE ! ». À cette injonction, ses spectres interrompent leur mouvement gravitationnel pour se jeter sur le corps fragile de Lloyd. Aussitôt il se recroqueville en position fœtal et pousse un hurlement perçant et vacillant tandis qu’il se laisse ronger par les fantômes. Une fois la besogne achevée. Ils retournent auprès de leur maitresse, laissant au sol le cadavre recroquevillé de Lloyd. La magicienne inspire alors profondément sa chaire que les fantômes portent en eux et se nourrie de son être. Une fois rassasiée, L’éclat rouge de ses yeux jaillit de plus en plus et dans un grondement terrible, elle entonne d’une voix étrangement caverneuse et puissante: « L’OBSCURITE VAINCRA ! »</p>
                    </div>
                  </div>
                <div class="TabbedPanelsContent Style2">
                  <div align="justify">
                    <p align="center"><strong>Prologue. </strong></p>
                    <p> </p>
                    <p> La Lune éclairait une tour délabrée, au sommet d’une colline. Un homme au corps fin, allongé, au dos vouté, marchait sur un chemin de terre qui l’amenait vers cette ruine. Il voyait une lueur orangé qui sortait de l’une des fenêtres. Il entendait des cris atroces, des hurlements perçants qui rompirent le silence de la nuit. A la lueur de la lune, en haut de sa route, devant l’entrée où la porte n’était que poussière, l’homme au visage amer couvert de taches de vieillesse, à la tête ovale avec une mâchoire tombante, au nez fin et pointu, aux yeux écarquillés, à l’arcade démesurément proéminente ornée d’une malheureuse calvitie, entra. </p>
                    <p>Dans la salle la plus haute, une silhouette féminine, que le crépitement timide d’un feu de cheminée révélait discrètement à l’obscurité régnante. Une odeur de souffre emplissait ces lieux où le temps s’arrêtait pour contempler la matière brute et fragile, témoin éternel du passé de la civilisation humaine. Le halo de lumière entourant l’être démoniaque exposait les formes voluptueuses mais acérées de sa tunique et de sa couronne, d’où trônaient en son sommet de longs pics sinueux, semblables à des serpents affamés. Si son visage restait caché dans l’ombre, l’éclat rouge de ses yeux transperçait les ténèbres par le fait d’une puissance irrationnelle. Des formes spectrales tourbillonnaient autour d’elle, comme envoutés par sa force de gravitation. Majestueuse, elle vit son serviteur, ce parfait produit de l’avidité humaine, cet être vil et vampirique, dénué de tout jugement moral et de compassion, l’esclave idéal. Une voix aigue et faussement nonchalante émergea du silence. </p>
                    <p> </p>
                    <p>-            Dame, j’implore votre attention. </p>
                    <p> </p>
                    <p>La femme ne semblait pas réagir à sa demande. Son corps restait impassible, pourtant ses yeux renforçaient sensiblement leur éclat sanglant. </p>
                    <p> </p>
                    <p>-            Sois Bref, répondit-elle après un long silence, d’une voix sifflante, expirant des ectoplasmes à chacun de ses propos. </p>
                    <p>-            J’ai accompli votre plan selon vos souhaits. L’Espérance partira demain. </p>
                    <p>-            Et Lessien ? </p>
                    <p>-            Elle sera détruite comme prévu. </p>
                    <p> </p>
                    <p>Un rire grave et dissonant jaillit alors du corps creux et tourmenté de la magicienne. Une vapeur grise émana de son enveloppe spectrale  et s’élança sur le serviteur. Elle tourbillonna autour de lui. Honteux, il baissa les yeux en signe de crainte sacrée. La femme retrouva son calme. </p>
                    <p> </p>
                    <p>-            Bien, souffla-t-elle… Lloyd, tu m’as servie fidèlement. Tu as pris le risque de te rendre monstrueux aux yeux de tes semblables et je t’en suis reconnaissante. Demain, je prendrai place à bord de ce misérable vaisseau… Je verrai enfin la destruction des Arenefangts, les enfants des dieux Yekins… Venez, lança-t-elle aux Ombres. </p>
                    <p> </p>
                    <p>À cette injonction, ces spectres interrompirent leur mouvement gravitationnel pour se jeter sur le corps fragile de la femme. La magicienne inspira profondément. L’éclat rouge de ses yeux jaillit de plus en plus et dans un grondement terrible. </p>
                    <p> </p>
                    <p>-            L’OBSCURITE VAINCRA ! entoona-t-elle d’une voix étrangement caverneuse et puissante.</p>
                    </div>
                  </div>
                <div class="TabbedPanelsContent Style2">
                  <div align="justify">
                    <p align="center"><strong>Prologue. </strong></p>
                    <p> </p>
                    <p> La Lune éclairait la façade érodée d’une tour en ruine, gisant au sommet d’une colline abrupte. Émergeant péniblement du silence nocturne, un homme au corps filiforme, dont le dos vouté marquait le poids d’un fardeau qu‘il devait trainer quotidiennement, foulait, d’un pas lancinant, un chemin de terre qui le menait au seuil de l‘édifice déliquescent. Une lueur orangé, provenant d’une des fenêtres encore intacte, paraissait à sa vue. À mesure qu’il se rapprochait de la tour, des hurlements atroces s‘en échappaient. Dès que la porte de bois poussiéreuse à moitié rongée par les affronts du temps lui apparut, ses mains arthrosiques se tendirent fébrilement vers elle. Un léger  gémissement aigu sorti du fond de sa gorge sèche. </p>
                    <p>S’agrippant alors au loquet, la pauvre créature humaine à la tête ovale, au visage amer couvert de taches de vieillesse,  pourvue d’une mâchoire tombante, d’un nez fin et pointu, d’yeux écarquillés aux arcades démesurément proéminentes, le tout, ornée d’une malheureuse calvitie, se reposa quelques instant, puis ouvrit lentement la porte.  Il pénétra dans la tour et gravit chacune des marches irrégulière de l’escalier qui l’élèverait jusqu’à la plus haute salle de la tour. </p>
                    <p> </p>
                    <p>Dans cette même salle, une silhouette, que le crépitement timide d’un feu de cheminée révélait discrètement à l’obscurité régnante se tenait là, immobile. Une odeur de souffre emplissait ces lieux où le temps s’arrêtait pour contempler la matière brute et fragile, témoin éternel du passé de la civilisation humaine. Le halo de lumière entourant l’être démoniaque exposait les formes voluptueuses mais acérées de sa tunique et de sa couronne, d’où trônaient en son sommet de longs pics sinueux, semblables à des serpents affamés. Si son visage restait caché dans l’ombre, l’éclat rouge de ses yeux transperçait les ténèbres par le fait d’une puissance irrationnelle. Des formes spectrales tourbillonnaient autour d’elle, comme envoutés par sa force de gravitation. Majestueuse, elle vit son serviteur, ce parfait produit de l’avidité humaine, cet être vil et vampirique, dénué de tout jugement moral et de compassion, l’esclave idéal. Une voix aigue et faussement nonchalante émergea du silence. </p>
                    <p> </p>
                    <p>-      Dame, j’implore votre attention. </p>
                    <p> </p>
                    <p>Elle ne sembla pas réagir à sa demande. Son corps restait impassible, pourtant ses yeux renforçaient sensiblement leur éclat sanglant : « Sois Bref » répondit-elle après un long silence, d’une voix sifflante, expirant des ectoplasmes à chacun de ses propos. </p>
                    <p> </p>
                    <p>-      J’ai accompli votre plan selon vos souhaits. </p>
                    <p>-      … Et ? </p>
                    <p>-      L’Espérance partira demain. </p>
                    <p> </p>
                    <p>Un rire grave et dissonant jaillit alors du corps creux et tourmenté de l‘étrange femme. Une vapeur grise émana de son enveloppe spectrale et s’élança sur le serviteur. Elle tourbillonna autour de lui. Honteux, il baissa les yeux en signe de crainte sacrée. La mystérieuse se tût. </p>
                    <p> </p>
                    <p>-      Bien, souffla-t-elle… tu m’as servie fidèlement. Tu as pris le risque de te rendre monstrueux aux yeux de tes semblables et je t’en suis reconnaissante. Demain, je prendrai place à bord de ce misérable vaisseau… Je verrai enfin la destruction des Arenefangts, Venez, lança-t-elle aux Ombres. </p>
                    <p> </p>
                    <p>À cette injonction, ses spectres interrompirent leur mouvement gravitationnel pour se glisser à l‘intérieur de son enveloppe corporelle. L’éclat rouge de ses yeux jaillit de plus en plus. </p>
                    <p> </p>
                    <p>-      L’OBSCURITE VAINCRA ! entonna-t-elle d’une voix étrangement caverneuse et puissante. </p>
                    <p> </p>
                    <p>Le feu de la cheminée s’étouffa aussitôt, laissant le vieil homme seul, dans l’obscurité ambiante, avec pour seul compagnon de nuit, les pâles rayons de lune, traversant discrètement les carreaux encrassés de la fenêtre de la plus haute salle de la tour.</p>
                    </div>
                  </div>
                <div class="TabbedPanelsContent Style2">
                  <div align="justify">
                    <p align="center"><strong>Prologue. </strong></p>
                    <p> </p>
                    <p> Au sommet d’une colline abrupte, la Lune éclairait la façade érodée de la tour en ruine. Un homme au corps filiforme émergeait avec peine du silence nocturne. Son dos vouté marquait le poids d’un fardeau qu‘il devait trainer au quotidien. Il foulait, exténué, un chemin de terre qui le menait au seuil de l‘édifice déliquescent. Une lueur orangée, provenait d’une des fenêtres encore intacte. Arrivé devant le bâtiment, il entendit des hurlements atroces qui rompirent le calme de la nuit. Ses mains se tendirent fébrilement vers la porte de bois poussiéreuse, à moitié rongé par les affronts du temps. Un gémissement aigu s’échappa du fond de sa gorge sèche. </p>
                    <p>Il s’agrippa au loquet. A la lumière d’une torche, la pauvre créature humaine avait une tête ovale ornée d’une malheureuse calvitie et un visage amer couvert de taches de vieillesse.  Sa mâchoire tombante, son nez fin et pointu,  ses yeux écarquillés aux arcades proéminentes exprimaient la peur. L’homme se reposa quelques instants, puis ouvrit lentement la porte.  Il pénétra et gravit chacune des marches irrégulières de l’escalier jusqu’à la plus haute salle pour rejoindre la source de ces cris. </p>
                    <p> </p>
                    <p>Dans cette pièce, le crépitement d’un feu de cheminé révélait, discrètement de l’obscurité, une silhouette immobile dans un fauteuil.   Une odeur de soufre emplissait ces lieux. Le temps paraissait s’arrêter. L’homme vit par le halo de lumière  un être démoniaque, une femme semblait-il, aux formes voluptueuses et cintrées dans sa tunique mauve. Sur sa tête trônait une couronne qui se terminait par  de longs pics sinueux, semblables à des serpents affamés. Si son visage restait caché dans l’ombre, l’éclat rouge de ses yeux transperçait les ténèbres. Des ombres spectrales tournaient autour de cette femme, comme envoutées par sa force. Son serviteur, ce parfait produit de l’avidité humaine, cet être vil et avide, dénué de tout jugement moral et de compassion, s’approcha d’elle. </p>
                    <p> </p>
                    <p>-      Dame, j’implore votre attention, lança-t-il de sa voix aigüe et apeuré. </p>
                    <p> </p>
                    <p>Elle ne sembla pas réagir. Son corps restait impassible, pourtant ses yeux renforcèrent sensiblement leur éclat sanglant. </p>
                    <p> </p>
                    <p>-          Sois Bref, répondit-elle après un long silence, d’une voix sifflante, expirant des ectoplasmes à chacun de ses mots. </p>
                    <p> </p>
                    <p>-      J’ai accompli votre plan selon vos souhaits. </p>
                    <p>-      Et ? </p>
                    <p>-      L’Espérance partira demain. </p>
                    <p> </p>
                    <p>Un rire grave émergea du corps de l‘étrange femme. Une vapeur grise émana de son enveloppe spectrale et s’élança sur le serviteur. Elle tourbillonna autour de lui. Il baissa les yeux en signe de soumission et de crainte. </p>
                    <p> </p>
                    <p>-      Bien. Tu m’as servie fidèlement. Tu as pris le risque de te rendre monstrueux aux yeux de tes semblables et je t’en suis reconnaissante. Demain, je prendrai place à bord de ce misérable vaisseau… Je verrai enfin la destruction des Arenefangts. Venez, lança-t-elle aux Ombres. </p>
                    <p> </p>
                    <p>À cette injonction, ses spectres interrompirent leur mouvement pour se glisser à l‘intérieur de son enveloppe corporelle. L’éclat rouge de ses yeux s’intensifia. </p>
                    <p> </p>
                    <p>-      L’OBSCURITE VAINCRA ! entonna-t-elle d’une puissante voix étrangement caverneuse. </p>
                    <p> </p>
                    <p>Le feu de la cheminée s’étouffa. Le vieil homme était seul, dans l’obscurité ambiante. Il avait pour seul compagnon de nuit, les pâles rayons de lune qui traversait discrètement les carreaux encrassés de la fenêtre de la plus haute salle de la tour.</p>
                    </div>
                  </div>
                <div class="TabbedPanelsContent Style2">
                  <div align="justify">
                    <p align="center"><strong>Prologue </strong></p>
                    <p> </p>
                    <p>Au sommet d’une colline abrupte, la Lune éclairait la façade érodée de la tour en ruine. Un homme au corps filiforme émergeait avec peine du silence nocturne. Son dos voûté marquait le poids d’un fardeau qu'il devait traîner au quotidien. Il foulait, essoufflé, un chemin de terre qui le menait au seuil de l'édifice déliquescent. Une lueur orangée, provenait d’une des fenêtres encore intacte. Arrivé devant le bâtiment, il entendit des hurlements atroces qui rompirent le calme de la nuit. Un frémissement le parcourut des pieds jusqu’à la nuque. « Pardonnez-moi » implora-t-il intérieurement. Ses mains se tendirent fébrilement vers la porte de bois poussiéreuse, à moitié rongée par les affronts du temps. Un gémissement aigu s’échappa du fond de sa gorge sèche.<br />
                      Il s’agrippa au loquet. A la lumière d’une torche qui éclairait le seuil, se dévoilait l’ingrat faciès de la pauvre créature humaine. Une tête ovale ornée d’une malheureuse calvitie et un visage amer couvert de taches de vieillesse. Sa mâchoire tombante, son nez fin et pointu, ses yeux écarquillés aux arcades proéminentes lui donnait un air apeuré. L’homme se reposa quelques instants, puis ouvrit lentement la porte. Une fois entré, il gravit chacune des marches irrégulières de l’escalier jusqu’à ce qu’il atteigne la plus haute salle. Là, se trouvait la source de ces cris qu’il reconnaissait trop bien.</p>
                    <p> Dans cette pièce, un feu de cheminé révélait discrètement à obscurité, une silhouette immobile, assise dans un fauteuil. Le temps semblait suspendu autour d‘elle. Une odeur de soufre emplissait ces lieux. L’homme entra sans faire de bruit et retint sa respiration. Il vit le halo de lumière entourant l’obscure présence. Elle se leva alors et se retourna vers lui. Il baissa aussitôt les yeux et plongea son regard entre les contours de l’aura.  Une femme, semblait-il, aux formes voluptueuses et cintrées dans sa tunique. Sur sa tête trônait une couronne qui se terminait par de longs pics sinueux, semblables à des serpents. Si son visage restait caché dans l’ombre, l’éclat rouge de ses yeux transperçait les ténèbres. Des ombres spectrales tournaient autour de cette femme, comme envoutées par sa force. Il l’avait toujours vu ainsi et n’aurait sans doute jamais l’honneur de la découvrir à la lumière du jour. Il n’était que son serviteur, parfait produit de l’avidité humaine, un vil dénué de tout jugement moral et de compassion. Il s’approcha d’elle.</p>
                    <p> - Dame, pardonnez moi si je n‘ai pu venir à l‘heure prévu ! lança-t-il de sa voix aigüe et apeuré.</p>
                    <p> Elle ne sembla pas réagir. Son corps restait impassible, pourtant ses yeux renforcèrent sensiblement leur éclat sanglant.</p>
                    <p>- Sois Bref, répondit-elle après un long silence, d’une voix sifflante, expirant des ectoplasmes à chacun de ses mots.</p>
                    <p> - J’ai accompli votre plan selon vos souhaits.<br />
                      - Et ?<br />
                      - L’Espérance partira demain.</p>
                    <p> Un rire grave émergea du corps de l‘étrange femme. Une vapeur grise émana de son enveloppe spectrale et s’élança sur le serviteur. Elle tourbillonna autour de lui. Il baissa les yeux en signe de soumission et de crainte.</p>
                    <p> - Bien. Tu m’as servie fidèlement. Tu as pris le risque de te rendre monstrueux aux yeux de tes semblables et je t’en suis reconnaissante. Demain, je prendrai place à bord de ce misérable vaisseau… Je verrai enfin la destruction des Arenefangts. Venez, lança-t-elle aux Ombres.</p>
                    <p> À cette injonction, ses spectres interrompirent leur mouvement pour se glisser à l‘intérieur de son enveloppe corporelle. L’éclat rouge de ses yeux s’intensifia.</p>
                    <p> - L’OBSCURITE VAINCRA ! entonna-t-elle d’une puissante voix étrangement caverneuse.</p>
                    <p> Le feu de la cheminée s’étouffa. Le vieil homme se retrouva seul, dans l’obscurité ambiante. Il n’aurait, pour seuls compagnons de nuit, que les pâles rayons de lune qui traversait discrètement les carreaux encrassés de la fenêtre de la plus haute salle de la tour.</p>
                    </div>
                  </div>
                <div class="TabbedPanelsContent Style2">
                  <div align="justify">
                    <p align="center"><strong>Prologue </strong></p>
                    <p> </p>
                    <p>Au sommet d’une colline abrupte, la Lune[BY1]  éclairait la façade érodée d’une tour en ruine[BY2] . Au pied de cette butte, un homme au corps filiforme entamait avec peine son ascension à l’aide d’une canne noir au pommeau à tête de lion. Les semelles lisses de ses chaussures basses en cuir gris glissaient sur le gravier. [BY3] Il trébucha et s’écroula sur ses genoux. Prenant appui sur son bâton, il se releva. Son pantalon gris en coton s’était déchiré au niveau des articulations et du sang s’écoulait le long des blessures. Les jambes flageolantes, il poursuivit sa grimpée[BY4] . Une partie de sa veste de costume [BY5] se décrocha de ses épaules. Son dos se voûta sous le poids de la fatigue. Une lueur orangée provenait d’une des fenêtres encore intacte[BY6] . Il entendit des hurlements atroces qui rompirent [BY7] le calme de la nuit. Saisi d’effroi, il bascula en arrière. D’un réflexe, il se réceptionna sur son coude droit. Il se releva, exténué, le bras ensanglanté, puis continua son chemin. </p>
                    <p> </p>
                    <p>Arrivé devant l’édifice, un frémissement le parcourut des pieds jusqu’à la nuque.[BY8]  « Pardonnez-moi » implora-t-il. Fébrile, il tendit ses mains vers la porte de bois poussiéreuse, à moitié rongée par les affronts du temps. Une plainte aiguë s’échappa du fond de sa gorge sèche.<br />
                      Il saisit le loquet, pénétra dans la tour, puis s’adossa à un mur près de l’ouverture. A la lumière d’une torche qui éclairait le seuil, se dévoilait l’ingrat faciès de la pauvre créature humaine. Sa tête ovale était ornée d’une malheureuse calvitie. Son visage à la mâchoire tombante, au nez fin et pointu, était couvert de taches de vieillesse[BY9] . Ses yeux, écarquillés, aux arcades proéminentes, lui donnaient un air apeuré. L’homme se reposa quelques instants. Il gravit avec difficulté les marches irrégulières de l’escalier en colimaçon  jusqu’à atteindre la plus haute salle. </p>
                    <p> </p>
                    <p>Dans cette pièce, un feu de cheminée révélait discrètement à l’obscurité,[BY10]  une silhouette immobile, assise dans un fauteuil. Une odeur de chair en décomposition emplissait ces lieux. L’homme entra sans faire de bruit. Sous la lumière des torches du seuil, il vit un corps encore chaud d’où s’échappait du sang. D’autres cadavres, rongés par les insectes et des squelettes, jonchaient le sol carrelé[BY11] . Il eut un haut-le-cœur et plaqua sa main contre le bas de son visage. Au fond de la pièce, les contours qui se dessinaient dans l’ombre[BY12] , se levèrent alors et se retournèrent vers lui. Une femme, semblait-il[BY13] , aux formes voluptueuses et cintrées dans sa tunique. Sur sa tête trônait une couronne qui se terminait par de longs pics sinueux, semblables à des serpents. Si son visage restait caché dans l’ombre, l’éclat rouge de ses yeux transperçait les ténèbres. Des ombres spectrales tournaient autour de cette femme[BY14] , comme envoutées par sa force. Le visiteur l’avait toujours vue ainsi et n’aurait sans doute jamais l’honneur de la découvrir à la lumière du jour. Il s’approcha d’elle et baissa les yeux en guise de soumission. Il n’était que son serviteur, parfait produit de l’avidité humaine, vil, dénué de tout jugement moral et de compassion.</p>
                    <p> - Dame, pardonnez-moi de mon retard ! lança-t-il de sa voix aigüe et apeurée.</p>
                    <p> Elle ne sembla pas réagir. Son corps resta impassible, pourtant ses yeux renforcèrent sensiblement leur éclat sanglant. Les ombres se jetèrent sur l’être[BY15]  et l’engloutirent[BY16] . Pris de peur et de douleur, il poussa des cris atroces, puis les créatures retournèrent aussitôt auprès de leur maitresse. De la fumée s’échappait du costume et de ses[BY17]  cheveux à moitié calcinés ; sa peau était roussie.<br />
                      </p>
                    <p>- Sois bref, répondit-elle après un long silence, d’une voix sifflante, expirant des ectoplasmes à chacun de ses mots.</p>
                    <p> - J’ai accompli votre plan selon vos souhaits.<br />
                      - Et ?<br />
                      - L’Espérance partira demain.</p>
                    <p> Un rire strident émergea du corps de l‘étrange femme. Une vapeur grise émana de son enveloppe spectrale, s’élança sur le serviteur, puis tourbillonna autour de lui. Il baissa les yeux en signe de crainte.</p>
                    <p> - Bien. Tu m’as servi fidèlement. Demain, je prendrais place à bord de ce misérable vaisseau… Je verrai enfin la destruction des Arenefangts. Venez, lança-t-elle aux Ombres !</p>
                    <p> À cette injonction, ses spectres interrompirent leur mouvement pour se glisser à l‘intérieur de son enveloppe corporelle. L’éclat rouge de ses yeux s’intensifia.</p>
                    <p> - L’OBSCURITE VAINCRA tonna-t-elle d’une puissante voix étrangement caverneuse !<br />
                      [BY18] <br />
                      Le feu de la cheminée s’étouffa. Le vieil homme se retrouva seul, dans l’obscurité ambiante. Il n’aurait, pour seuls compagnons de nuit, que les pâles rayons de lune qui traversaient[BY19]  discrètement les carreaux encrassés de la fenêtre de la plus haute salle de la tour.<br />
                      [BY20] </p>
                    </div>
                  </div>
                <div class="TabbedPanelsContent Style2">
                  <div align="justify">
                    <p align="center"><strong>Prologue </strong></p>
                    <p> </p>
                    <p>Au sommet d’une colline abrupte[BY1] , la lune[BY2]  éclairait la façade d’une tour en ruine. Au pied de cette butte, un homme au corps filiforme entamait avec peine son ascension à l’aide d’une canne noire au pommeau à tête de lion[BY3] . Les semelles lisses de ses chaussures en cuir gris glissaient sur le gravier. Il trébucha et s’écroula sur ses genoux[BY4] . Prenant appui sur son bâton, il se releva. Son pantalon gris en coton s’était déchiré au niveau des articulations et du sang s’écoulait le long des blessures. Les jambes flageolantes, il poursuivit sa progression. Une partie de sa veste se décrocha de ses épaules. Son dos se voûta sous le poids de la fatigue. Une lueur orangée provenait d’une des fenêtres encore intacte. Des hurlements atroces rompirent le calme de la nuit. Saisi d’effroi, il bascula en arrière. D’un réflexe, il se réceptionna sur son coude droit. Il se releva, exténué, le bras ensanglanté, puis continua son chemin. [BY5] </p>
                    <p> </p>
                    <p>Arrivé devant l’édifice, un frémissement le parcourut des pieds jusqu’à la tête. « Pardonnez-moi » implora-t-il[BY6] . Fébrile, il tendit ses mains vers la porte de bois poussiéreuse, à moitié rongée par les affronts du temps. Une plainte aiguë s’échappa du fond de sa gorge sèche.<br />
                      Il saisit le loquet, pénétra dans la tour, puis s’adossa à un mur près de l’ouverture[BY7] . A la lumière d’une torche qui éclairait le seuil,[BY8]  se dévoilait l’ingrat faciès de la pauvre créature humaine. Une malheureuse[BY9]  calvitie ornait sa tête ovale. Son visage, couvert de taches de vieillesse, à la mâchoire tombante, au nez fin et pointu, se contractait en un rictus de douleur. Ses yeux, écarquillés, aux arcades proéminentes, se troublaient d’inquiétude. L’homme se reposa quelques instants. Il gravit[BY10]  avec difficulté les marches irrégulières de l’escalier en colimaçon  jusqu’à atteindre la plus haute salle. [BY11] </p>
                    <p> </p>
                    <p>Dans cette pièce, un feu de cheminée révélait discrètement à l’obscurité une silhouette immobile, assise dans un fauteuil. Une odeur de chair en décomposition emplissait ces lieux. L’homme entra sans faire de bruit[BY12] . Sous la lumière des torches du seuil, il vit[BY13]  un corps encore chaud d’où s’échappait du sang. Des squelettes et des cadavres rongés par les insectes, jonchaient le sol carrelé. Il eut un haut-le-cœur et plaqua sa main contre le bas de son visage. Au fond de la pièce, dans l’obscurité, les contours d’une femme se dessinaient. Elles se levèrent alors et se retournèrent vers lui. Son corps aux formes voluptueuses était cintré dans sa tunique. Sur sa tête trônait une couronne qui se terminait par de [BY14] longs pics sinueux, semblables à des serpents. Si son visage restait caché dans la pénombre, l’éclat rouge de ses yeux transperçait les ténèbres. Des Ombres spectrales tournaient autour d’elle, comme envoutées par sa force. Le visiteur l’avait toujours vue[BY15]  ainsi et n’aurait sans doute jamais l’honneur de la découvrir à la lumière du jour. Il s’approcha d’elle et baissa les yeux en guise de soumission. Il n’était que son serviteur, parfait produit de l’avidité humaine, vil, dénué de tout jugement moral et de compassion.[BY16] </p>
                    <p>- Dame, pardonnez-moi de [BY17] mon retard ! lança-t-il de sa voix aigüe et apeurée.</p>
                    <p> Elle ne sembla pas réagir. Son corps resta impassible, pourtant ses yeux renforcèrent sensiblement leur éclat sanglant. Les Ombres se jetèrent sur l’esclave et l’emprisonnèrent. Pris de peur et de douleur, il poussa des cris atroces, puis les créatures retournèrent aussitôt auprès de leur maitresse. De la fumée s’échappait du costume et de ses cheveux à moitié calcinés ; la peau de l’homme était roussie.<br />
                      </p>
                    <p>- Sois bref, répondit-elle après un long silence, d’une voix sifflante, expirant des ectoplasmes à chacun de ses mots.<br />
                      - J’ai accompli votre plan selon vos souhaits.<br />
                      - Et ?<br />
                      - L’Espérance partira demain.</p>
                    <p> Un rire strident émergea du corps de l‘étrange femme. Une vapeur grise émana de son enveloppe spectrale, s’élança sur le serviteur, puis tourbillonna autour de lui. Il baissa les yeux en signe de crainte.</p>
                    <p> - Bien. Tu m’as servi fidèlement. Demain, je prendrais place à bord de ce misérable vaisseau… Je verrai enfin la destruction des Arenefangts. Venez, lança-t-elle aux Ombres ![BY18] </p>
                    <p> À cette injonction, ses spectres interrompirent leur mouvement pour se glisser à l‘intérieur de son enveloppe corporelle. L’éclat rouge de ses yeux s’intensifia.</p>
                    <p> - MON CLAN VAINCRA, tonna-t-elle d’une puissante voix étrangement caverneuse ![BY19] <br />
                      [BY20] <br />
                      Le feu de la cheminée s’étouffa. Le vieil homme se retrouva seul, dans l’obscurité ambiante. Il n’avait pour seuls compagnons de nuit que les pâles rayons de lune qui traversaient discrètement les carreaux encrassés de la fenêtre.[BY21] </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <div id="CollapsiblePanel27" class="CollapsiblePanel">
          <div class="CollapsiblePanelTab" tabindex="0">Chapitre 1</div>
          <div class="CollapsiblePanelContent">
            <div id="TabbedPanels20" class="TabbedPanels">
              <ul class="TabbedPanelsTabGroup">
                <li class="TabbedPanelsTab" tabindex="0">Version du 14/01/2012 par Yohann</li>
                <li class="TabbedPanelsTab" tabindex="0">Version du 07/02/2012 par Guilhem</li>
                </ul>
              <div class="TabbedPanelsContentGroup">
                <div class="TabbedPanelsContent Style2">
                  <div align="justify">
                    <p align="center"><strong>I </strong></p>
                    <p align="center"><strong>L’Espérance. </strong></p>
                    <p> </p>
                    <p>Vêtue d‘une ample robe mauve, le visage caché sous l‘ombrage de sa capeline marron, l’énigmatique femme s’avançait vers l’entrée principale du centre aérospatiale de New-Atlantis. L’homme en costume gris avançait à ses côtés, aidé de sa canne au pommeau à tête de lion. Ils foulaient à pas rapides, l’immense allée pavée qui donnait sur la grande porte blindée, gravée des initiales du centre : CA - NA. Dans l’enceinte, une musique cérémonieuse retentit. Un soldat de l’Archanger, Les arrêta d‘un signe de la main. Un individu facilement reconnaissable par son uniforme : pantalon en jean bleu, une chemise blanche en-dessous d’un caban en cuir noir sur lequel les décorations apparaissaient, et d’une paire de santiag noire. </p>
                    <p>- Vos noms ? </p>
                    <p>- Monsieur Albert Llyod et Mademoiselle Lisa Nasahya, répondit sèchement l’homme d’affaire. </p>
                    <p>- Vos invitations s’il vous plaît ? </p>
                    <p> </p>
                    <p>Albert haussa l’un de ses sourcils, puis jeta un bref coup d’œil complice à Lisa. Il décrocha alors au soldat un léger sourire et lui donna les cartons. Le soldat les laissa passer à travers un détecteur de métaux puis actionna l’ouverture de la porte principale. </p>
                    <p>- Vous pouvez entrer, le centre est presque comble. L’inauguration est sur le point de commencer. </p>
                    <p>- La sécurité est renforcée, lança Albert. </p>
                    <p>- Effectivement… Des politiciens y assistent… </p>
                    <p> </p>
                    <p>Le soldat n’eut pas le temps de finir sa phrase qu’Albert et Lisa se dirigèrent vers la grande place où des gradins avaient été installées pour l‘occasion. Devant un bunker, une estrade couverte d’une tente était aménagée pour les conférenciers. Au loin, se dressait des montagnes. Deux hommes sortirent du bâtiment. L’un, en blouse blanche, s'installa sur une chaise au fond de la tribune ; l’autre en costume gris clair par-dessus une chemise bleue se tint debout, face aux micros du pupitre. </p>
                    <p>Des journalistes, des politiciens du gouvernement international des Nations Unies, des célèbres physiciens et biologistes se démenaient pour trouver une place. Le conférencier en costume perçut la nervosité de l’audience. Il attendit patiemment que tout le monde soit installé et que le silence se fasse tandis que le scientifique en blouse relisait ses notes. Albert et Lisa s’étaient assis, sans bruit, en bordure des gradins. Quand soudain, Le conférencier pris la parole afin de capter définitivement l’attention du public : «　Mesdames et messieurs, bienvenue à New-Atlantis pour l’inauguration de l’Espérance…　» </p>
                    <p>Albert se tourna discrètement vers Lisa qui, les mains posées sur sa robe, feignait d’écouter sagement le discours. </p>
                    <p>- Dame, comment vous y prendrez-vous pour pénétrer dans l’Espérance ? demanda Albert. </p>
                    <p>- Ne vous occupez pas de ça... </p>
                    <p>- Mais… </p>
                    <p>- Ccfaeka ! [BY1] Albert se tue devant l’ordre.　 </p>
                    <p>Le discours du conférencier n’était plus qu’un bruit de fond aux oreilles de Lisa : </p>
                    <p>«　… Ces scientifiques ont découvert des ruines datant de quatre mille ans. L’Atlantide et l’Empire de Mu…　» </p>
                    <p>- Hum… L’Atlantide… J’aurai aimé détruire cette cité, autrefois, murmura Lisa. </p>
                    <p>«　… Les fouilles ont dévoilé que ces deux peuples possédaient une technologie avancée basée sur l’utilisation de la cohésion de la matière, de l’énergie photonique, des forces gravitationnelles, coulombiennes et électromagnétiques…　» </p>
                    <p>- Blabla… C’est la télékinésie… Bouffon. </p>
                    <p>- Maîtresse… supplia Lloyd </p>
                    <p>- Quoi encore ? cria-t-elle. Leur voisin se retournèrent et leur incitèrent de se taire. </p>
                    <p>- Quoi ? Vous voulez ma photo ? leur lança-t-elle. </p>
                    <p>- Dame, je vous en pris. Ne vous faites pas remarquer… </p>
                    <p>Lisa interrompit Albert d’un geste sec de la main tandis que la voix de l’orateur se faisait plus solennelle. </p>
                    <p>«　… Nous avons gardé secret l’origine de nos technologies que nous dévoilons aujourd’hui devant le monde entier…　» </p>
                    <p> </p>
                    <p>Une chaîne montagneuse s’élevait derrière les tours de New-Atlantis. Au sommet, les nuages cachaient des neiges éternelles. L’holo-projection vacilla, et disparut. Les sommets laissèrent place à des bâtiments de même hauteur que les monts qui les cachaient. Atlantis se dévoilait majestueusement. De grands immeubles encadraient une tour centrale plus haute que les autres. La lumière du soleil se réfléchissait sur le cristal, au sommet de ce building, et sur les tubes transparents en plexi-aluminium qui traversaient la cité. Au sommet de chacun des immeubles, ces canalisations se subdivisaient pour relier chaque bâtiment les uns aux autres. Ces tubes les traversaient, tel des ascenseurs, jusqu’au dernier sous-sol. A l’intérieur, des véhicules monoplaces sphériques circulaient. A leurs pieds, les rues larges restaient éclairées par la lumière qui se reflétait dans le cristal. Devant chaque édifice, des stèles en pierre équipés de clavier permettaient la téléportation d’une adresse sur Terre à un autre. </p>
                    <p> </p>
                    <p>- Atlantis… Moi qui la croyais anéantie… Encore une chose à laquelle je devrai remédier, murmura Lisa à Albert. </p>
                    <p>- Que voulez-vous dire ? demanda l’homme d’affaire. </p>
                    <p>- De nombreux secrets y sont cachés… Des textes qu’y relatent des faits passés… De puissantes armes… Je te donne la charge de leur destruction. </p>
                    <p>- Comment ? </p>
                    <p>- Le monde ne doit rien savoir sur mon clan et sur mon maître. Tu devras effacer toutes traces nous concernant… </p>
                    <p>- Toutefois, les Atlantes sont toujours parmi nous… </p>
                    <p>- Quoi ? C’est impossible ! </p>
                    <p>Le conférencier respira profondément, puis déclara solennellement à l’auditoire : </p>
                    <p>«　 Voici Syedna Acbuen ! l’un des représentants du peuple Seurions.　» </p>
                    <p> </p>
                    <p>Lisa se figea à l’annonce de l’invité surprise. Il ne manquait plus qu’un Seurion ne la reconnaisse pour contrecarrer ses plans. </p>
                    <p>La porte de l’entrepôt s’ouvrit sur un humanoïde à la peau pâle. Il s’avança d’une démarche gracieuse vers le pupitre, au côté de Yank. En-dessous de sa blouse blanche, il portait une combinaison moulante grise métallisée et un large pantalon ivoire. Sa tête chauve et allongée, son visage humain et imberbe, se différenciait du nôtre par de grandes oreilles allongées et plus fines. Son nez large, long et pointu était encadré par des yeux noirs aux pupilles horizontales. Son regard amical et intelligent se posait sur un public stupéfié. Il les salua d’un signe de main. Lisa chuchotta à l’oreille d’Albert qui lui invita aussitôt à quitter la rangée où ils étaient installés. Ils se dirigèrent vers l’entrée ou était ,posté un soldat. Lisa repoussa Lloyd et s’avança vers l’homme en uniforme. </p>
                    <p> </p>
                    <p>- Excusez-moi. Savez-vous où je pourrai trouver des toilettes ? demanda Lisa en lançant une œillade perverse au soldat. </p>
                    <p>- Oui… </p>
                    <p>- Pouvez-vous m’accompagner ? insista-t-elle en le fixant des yeux. </p>
                    <p>Lisa Caressa alors discrètement l’entre-jambe du garde qui frémit au contacte de sa main. Comme sous l’emprise d’un charme, le regard du pauvre homme semblait se pendre à ses lèvres. </p>
                    <p>- Vous êtes un beau jeune homme. Vous êtes vraiment sur ? </p>
                    <p>- Madame… Je dois rester à mon poste, bredouilla-t-il déconcerté. </p>
                    <p>- C’est vraiment dommage. Elle lui prit la main et la fourra sous sa robe. Il commença à la caresser. Vous voyez, vous n’êtes pas contre… </p>
                    <p>Le soldat rougit et fut pris d’une pulsion ardente. Il ôta sa main de la robe et se tourna vivement vers son collègue qui s’était reposé, derrière lui. </p>
                    <p>- Mikaël ! Viens prendre ma place, lui ordonna-t-il. </p>
                    <p> </p>
                    <p>Le soldat accompagna Lisa vers les toilettes. Albert Saluat sèchement le remplaçant avant de les suivre. Arrivé au bunker, le militaire ouvrit la porte. Le visage avide, il invita Lisa à prendre les devants. Albert, qui était resté derrière-lui, leva alors sa canne, et l’assomma d’un bon coup à la tête. </p>
                    <p> </p>
                    <p>- Fort bien Albert ! </p>
                    <p> </p>
                    <p>Un bruit sourd rompit le silence. Le sol se mit à vibrer légèrement. Le bunker, derrière l’estrade, se scinda en deux. Chaque partie s’éloigna l’une de l’autre dans un crissement assourdissant. Au premier coup d’œil, l’Espérance, sortant du sous-sol, ressemblait à un bateau triangulaire de cent mètres à la coque aplatie. Il s’épaississait en allant vers les quatre propulseurs ioniques reliés au système d’hyper-propulsion. Un bulbe situé sous la proue pointue et acérée, comportait un accès vers le hangar à chasseurs. A la poupe, le vaisseau se rétrécissait au niveau du centre de commandement de forme pyramidale. Ses étages se déterminaient par les baies vitrées en plexi-aluminium garantissant une vue panoramique. Il se terminait par une sphère équipée de senseurs, d’antennes de communication et de scanners. Trois tourelles à triple canon, l’un à l’avant, les deux autres situées à la base de la pyramide, étaient dirigées vers l’assemblée. Ses flancs possédaient un armement hétéroclite de canons lasers, de batteries lourdes, et de lances missiles. </p>
                    <p> </p>
                    <p>- Souhaitons-lui bon vol vers le système du Centaure, lança Yank. </p>
                    <p> </p>
                    <p>L’Espérance s’éclaira, les moteurs s’allumèrent et il décolla. Lisa le regardait s’envoler. Elle ferma les yeux et commença en un murmure insondable une incantation. Alors le corps de la femme se volatilisa.</p>
                    </div>
                  </div>
                <div class="TabbedPanelsContent Style2">
                  <div align="justify">
                    <p align="center"><strong>I </strong></p>
                    <p align="center"><strong>L’Espérance. </strong></p>
                    <p> </p>
                    <p>Vêtue d‘une ample robe mauve, le visage caché sous l‘ombrage de sa capeline marron, l’énigmatique femme s’avançait vers l’entrée principale du centre aérospatiale de New-Atlantis. L’homme en costume gris avançait à ses côtés, aidé de sa canne au pommeau à tête de lion. Ils foulaient à pas rapides, l’immense allée pavée qui donnait sur la grande porte blindée, gravée des initiales du centre : CA - NA. Dans l’enceinte, une musique cérémonieuse retentit. Un soldat de l’Archanger, Les arrêta d‘un signe de la main. Un individu facilement reconnaissable par son uniforme : pantalon en jean bleu, une chemise blanche en-dessous d’un caban en cuir noir sur lequel les décorations apparaissaient, et d’une paire de santiag noire. </p>
                    <p>- Vos noms ? </p>
                    <p>- Monsieur Albert Llyod et Mademoiselle Lisa Nasahya, répondit sèchement l’homme d’affaire. </p>
                    <p>- Vos invitations s’il vous plaît ? </p>
                    <p> </p>
                    <p>Albert haussa l’un de ses sourcils, puis jeta un bref coup d’œil complice à Lisa. Il décrocha alors au soldat un léger sourire et lui donna les cartons. Le soldat les laissa passer à travers un détecteur de métaux puis actionna l’ouverture de la porte principale. </p>
                    <p>- Vous pouvez entrer, le centre est presque comble. L’inauguration est sur le point de commencer. </p>
                    <p>- La sécurité est renforcée, lança Albert. </p>
                    <p>- Effectivement… Des politiciens y assistent… </p>
                    <p> </p>
                    <p>Le soldat n’eut pas le temps de finir sa phrase qu’Albert et Lisa se dirigèrent vers la grande place où des gradins avaient été installées pour l‘occasion. Devant un bunker, une estrade couverte d’une tente était aménagée pour les conférenciers. Au loin, se dressait des montagnes. Deux hommes sortirent du bâtiment. L’un, en blouse blanche, s'installa sur une chaise au fond de la tribune ; l’autre en costume gris clair par-dessus une chemise bleue se tint debout, face aux micros du pupitre. </p>
                    <p>Des journalistes, des politiciens du gouvernement international des Nations Unies, des célèbres physiciens et biologistes se démenaient pour trouver une place. Le conférencier en costume perçut la nervosité de l’audience. Il attendit patiemment que tout le monde soit installé et que le silence se fasse tandis que le scientifique en blouse relisait ses notes. Albert et Lisa s’étaient assis, sans bruit, en bordure des gradins. Quand soudain, Le conférencier pris la parole afin de capter définitivement l’attention du public : «　Mesdames et messieurs, bienvenue à New-Atlantis pour l’inauguration de l’Espérance…　» </p>
                    <p>Albert se tourna discrètement vers Lisa qui, les mains posées sur sa robe, feignait d’écouter sagement le discours. </p>
                    <p>- Dame, comment vous y prendrez-vous pour pénétrer dans l’Espérance ? demanda Albert. </p>
                    <p>- Ne vous occupez pas de ça... </p>
                    <p>- Mais… </p>
                    <p>- Ccfaeka ! [BY1] Albert se tue devant l’ordre.　 </p>
                    <p>Le discours du conférencier n’était plus qu’un bruit de fond aux oreilles de Lisa : </p>
                    <p>«　… Ces scientifiques ont découvert des ruines datant de quatre mille ans. L’Atlantide et l’Empire de Mu…　» </p>
                    <p>- Hum… L’Atlantide… J’aurai aimé détruire cette cité, autrefois, murmura Lisa. </p>
                    <p>«　… Les fouilles ont dévoilé que ces deux peuples possédaient une technologie avancée basée sur l’utilisation de la cohésion de la matière, de l’énergie photonique, des forces gravitationnelles, coulombiennes et électromagnétiques…　» </p>
                    <p>- Blabla… C’est la télékinésie… Bouffon. </p>
                    <p>- Maîtresse… supplia Lloyd </p>
                    <p>- Quoi encore ? cria-t-elle. Leur voisin se retournèrent et leur incitèrent de se taire. </p>
                    <p>- Quoi ? Vous voulez ma photo ? leur lança-t-elle. </p>
                    <p>- Dame, je vous en pris. Ne vous faites pas remarquer… </p>
                    <p>Lisa interrompit Albert d’un geste sec de la main tandis que la voix de l’orateur se faisait plus solennelle. </p>
                    <p>«　… Nous avons gardé secret l’origine de nos technologies que nous dévoilons aujourd’hui devant le monde entier…　» </p>
                    <p> </p>
                    <p>Une chaîne montagneuse s’élevait derrière les tours de New-Atlantis. Au sommet, les nuages cachaient des neiges éternelles. L’holo-projection vacilla, et disparut. Les sommets laissèrent place à des bâtiments de même hauteur que les monts qui les cachaient. Atlantis se dévoilait majestueusement. De grands immeubles encadraient une tour centrale plus haute que les autres. La lumière du soleil se réfléchissait sur le cristal, au sommet de ce building, et sur les tubes transparents en plexi-aluminium qui traversaient la cité. Au sommet de chacun des immeubles, ces canalisations se subdivisaient pour relier chaque bâtiment les uns aux autres. Ces tubes les traversaient, tel des ascenseurs, jusqu’au dernier sous-sol. A l’intérieur, des véhicules monoplaces sphériques circulaient. A leurs pieds, les rues larges restaient éclairées par la lumière qui se reflétait dans le cristal. Devant chaque édifice, des stèles en pierre équipés de clavier permettaient la téléportation d’une adresse sur Terre à un autre. </p>
                    <p> </p>
                    <p>- Atlantis… Moi qui la croyais anéantie… Encore une chose à laquelle je devrai remédier, murmura Lisa à Albert. </p>
                    <p>- Que voulez-vous dire ? demanda l’homme d’affaire. </p>
                    <p>- De nombreux secrets y sont cachés… Des textes qu’y relatent des faits passés… De puissantes armes… Je te donne la charge de leur destruction. </p>
                    <p>- Comment ? </p>
                    <p>- Le monde ne doit rien savoir sur mon clan et sur mon maître. Tu devras effacer toutes traces nous concernant… </p>
                    <p>- Toutefois, les Atlantes sont toujours parmi nous… </p>
                    <p>- Quoi ? C’est impossible ! </p>
                    <p>Le conférencier respira profondément, puis déclara solennellement à l’auditoire : </p>
                    <p>«　 Voici Syedna Acbuen ! l’un des représentants du peuple Seurions.　» </p>
                    <p> </p>
                    <p>Lisa se figea à l’annonce de l’invité surprise. Il ne manquait plus qu’un Seurion ne la reconnaisse pour contrecarrer ses plans. </p>
                    <p>La porte de l’entrepôt s’ouvrit sur un humanoïde à la peau pâle. Il s’avança d’une démarche gracieuse vers le pupitre, au côté de Yank. En-dessous de sa blouse blanche, il portait une combinaison moulante grise métallisée et un large pantalon ivoire. Sa tête chauve et allongée, son visage humain et imberbe, se différenciait du nôtre par de grandes oreilles allongées et plus fines. Son nez large, long et pointu était encadré par des yeux noirs aux pupilles horizontales. Son regard amical et intelligent se posait sur un public stupéfié. Il les salua d’un signe de main. Lisa chuchotta à l’oreille d’Albert qui lui invita aussitôt à quitter la rangée où ils étaient installés. Ils se dirigèrent vers l’entrée ou était ,posté un soldat. Lisa repoussa Lloyd et s’avança vers l’homme en uniforme. </p>
                    <p> </p>
                    <p>- Excusez-moi. Savez-vous où je pourrai trouver des toilettes ? demanda Lisa en lançant une œillade perverse au soldat. </p>
                    <p>- Oui… </p>
                    <p>- Pouvez-vous m’accompagner ? insista-t-elle en le fixant des yeux. </p>
                    <p>Lisa Caressa alors discrètement l’entre-jambe du garde qui frémit au contacte de sa main. Comme sous l’emprise d’un charme, le regard du pauvre homme semblait se pendre à ses lèvres. </p>
                    <p>- Vous êtes un beau jeune homme. Vous êtes vraiment sur ? </p>
                    <p>- Madame… Je dois rester à mon poste, bredouilla-t-il déconcerté. </p>
                    <p>- C’est vraiment dommage. Elle lui prit la main et la fourra sous sa robe. Il commença à la caresser. Vous voyez, vous n’êtes pas contre… </p>
                    <p>Le soldat rougit et fut pris d’une pulsion ardente. Il ôta sa main de la robe et se tourna vivement vers son collègue qui s’était reposé, derrière lui. </p>
                    <p>- Mikaël ! Viens prendre ma place, lui ordonna-t-il. </p>
                    <p> </p>
                    <p>Le soldat accompagna Lisa vers les toilettes. Albert Saluat sèchement le remplaçant avant de les suivre. Arrivé au bunker, le militaire ouvrit la porte. Le visage avide, il invita Lisa à prendre les devants. Albert, qui était resté derrière-lui, leva alors sa canne, et l’assomma d’un bon coup à la tête. </p>
                    <p> </p>
                    <p>- Fort bien Albert ! </p>
                    <p> </p>
                    <p>Un bruit sourd rompit le silence. Le sol se mit à vibrer légèrement. Le bunker, derrière l’estrade, se scinda en deux. Chaque partie s’éloigna l’une de l’autre dans un crissement assourdissant. Au premier coup d’œil, l’Espérance, sortant du sous-sol, ressemblait à un bateau triangulaire de cent mètres à la coque aplatie. Il s’épaississait en allant vers les quatre propulseurs ioniques reliés au système d’hyper-propulsion. Un bulbe situé sous la proue pointue et acérée, comportait un accès vers le hangar à chasseurs. A la poupe, le vaisseau se rétrécissait au niveau du centre de commandement de forme pyramidale. Ses étages se déterminaient par les baies vitrées en plexi-aluminium garantissant une vue panoramique. Il se terminait par une sphère équipée de senseurs, d’antennes de communication et de scanners. Trois tourelles à triple canon, l’un à l’avant, les deux autres situées à la base de la pyramide, étaient dirigées vers l’assemblée. Ses flancs possédaient un armement hétéroclite de canons lasers, de batteries lourdes, et de lances missiles. </p>
                    <p> </p>
                    <p>- Souhaitons-lui bon vol vers le système du Centaure, lança Yank. </p>
                    <p> </p>
                    <p>L’Espérance s’éclaira, les moteurs s’allumèrent et il décolla. Lisa le regardait s’envoler. Elle ferma les yeux et commença en un murmure insondable une incantation. Alors le corps de la femme se volatilisa.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
  </div>
  </div>
    <p align="left" class="Style3">
      <!-- fin de #mainContent -->
      </p>
    </div>
  <script type="text/javascript">
<!--
var CollapsiblePanel25 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel25", {contentIsOpen:false});
var CollapsiblePanel27 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel27", {contentIsOpen:false});
var TabbedPanels20 = new Spry.Widget.TabbedPanels("TabbedPanels20", {defaultTab:1});
var CollapsiblePanel26 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel26", {contentIsOpen:false});
var TabbedPanels19 = new Spry.Widget.TabbedPanels("TabbedPanels19", {defaultTab:6});
//-->
  </script>
  <div>
    <div class="CollapsiblePanel">
      <div class="CollapsiblePanelContent">
        <div class="CollapsiblePanel">
          <div class="CollapsiblePanelContent"> </div>
          </div>
        <div class="CollapsiblePanel">
          <div class="CollapsiblePanelContent"> </div>
          </div>
        </div>
      </div>
    </div>
  <h1>&nbsp;</h1>
  <!-- end .content -->
<script type="text/javascript">
var CollapsiblePanel25 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel25", {contentIsOpen:false});
var CollapsiblePanel25 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel25", {contentIsOpen:false});
var CollapsiblePanel27 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel27", {contentIsOpen:false});
var CollapsiblePanel26 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel26", {contentIsOpen:false});
var TabbedPanels19 = new Spry.Widget.TabbedPanels("TabbedPanels19", {defaultTab:6});
var CollapsiblePanel26 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel26", {contentIsOpen:false});
var CollapsiblePanel27 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel27", {contentIsOpen:false});
var TabbedPanels20 = new Spry.Widget.TabbedPanels("TabbedPanels20", {defaultTab:1});
</script>
<!-- InstanceEndEditable --></td>
      </tr>
    </table>
  </div>
  <div class="footer" id="LayoutDiv4"><!-- InstanceBeginRepeat name="footer" --><!-- InstanceBeginRepeatEntry -->
    <?php include('../../../inc/footer/footer_users.inc.php');?>
  <!-- InstanceEndRepeatEntry --><!-- InstanceEndRepeat --></div>
</div>
</body>
<!-- InstanceEnd --></html>
