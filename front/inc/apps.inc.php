<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}
?>
<?php
/**
 * Code qui sera aeepl� par un objet XHR et qui
 * retournera la liste d�roulante des d�partements
 * correspondant � la r�gion s�lectionn�e.
 */
/* Param�tres de connexion */
$serveur = "dmiccorpglroot.mysql.db";
$admin   = "dmiccorpglroot";
$mdp     = "Password7";
$base    = "dmiccorpglroot";

/* On r�cup�re l'identifiant de la r�gion choisie. */
$idt = isset($_GET['idt']) ? $_GET['idt'] : false;
/* Si on a une r�gion, on proc�de � la requ�te */
if(false !== $idt)
{
    /* C�ration de la requ�te pour avoir les d�partements de cette r�gion */
    $sql2 = "SELECT `apps_id`, `apps_finalname`, `apps_name`, `apps_type`, `apps_version`, `apps_systeme`, `apps_description`".
            " FROM `dmic_apps`".
            " WHERE `apps_type` = ". $idt ."";
            " ORDER BY `apps_finalname` ASC;";

    $connexion = mysql_connect($serveur, $admin, $mdp);
    mysql_select_db($base, $connexion);
    $rech_apps = mysql_query($sql2, $connexion);

	
    /* Un petit compteur pour les d�partements */
    $nd = 0;
    /* On cr�e deux tableaux pour les num�ros et les noms des d�partements */
    $id_apps = array();
	$finalname_apps = array();
    $name_apps = array();
	$type_apps = array();
	$version_apps = array();
	$systeme_apps = array();
	$description_apps = array();
    /* On va mettre les num�ros et noms des d�partements dans les deux tableaux */
    while(false != ($ligne_apps = mysql_fetch_assoc($rech_apps)))
    {
        $id_apps[] = $ligne_apps['apps_id'];
		$finalname_apps[] = $ligne_apps['apps_finalname'];
        $name_apps[]  = $ligne_apps['apps_name'];
		$version_apps[] = $ligne_apps['apps_version'];
		$systeme_apps[] = $ligne_apps['apps_systeme'];
		$description_apps[] = $ligne_apps['apps_description'];
        $nd++;
    }
    /* Maintenant on peut construire la liste d�roulante */
    $liste1 = "";
    $liste1 .=	'<table width="65%" border="1" align="center" class="tab_cadrehov">
					<tr>
						<th width="20%" scope="col"><div align="center"><span id="SearchApps">Nom</span></div></th>
      					<th width="16%" scope="col"><div align="center"><span id="SearchApps">Version</span></div></th>
      					<th width="16%" scope="col"><div align="center"><span id="SearchApps">Syst&egrave;me</span></div></th>
      					<th width="30%" scope="col"><div align="center"><span id="SearchApps">Description</span></div></th>'."\n";
	if ($_SESSION['MM_UserGroup']=='Administrateurs' or $_SESSION['MM_UserGroup']=='Contributeurs' or $_SESSION['MM_UserGroup']=='Formateurs') {
    $liste1 .=  	   '<th width="2%" scope="col"><div align="center"></div></th>'."\n";
    }
    if ($_SESSION['MM_UserGroup']=='Administrateurs') {
    $liste1 .=         '<th width="1%" scope="col"><div align="center"></div></th>'."\n";
    }
	$liste1 .=		'</tr>'."\n"; 
	do {
		for ($d = 0; $d < $nd; $d++)
		{
	$liste1 .=		'<tr>
						<th scope="row"><div align="center"><span id="SearchApps"><a href="http://www.dmic-corp.fr/download/apps/'. htmlentities($name_apps[$d]) .'">'. htmlentities($finalname_apps[$d]) .'</a></span></div></th>
      					<td><div align="center"><span id="SearchApps">'. htmlentities($version_apps[$d]) .'</span></div></td>
      					<td><div align="center"><span id="SearchApps">'. htmlentities($systeme_apps[$d]) .'</span></div></td>
      					<td><div align="center"><span id="SearchApps">'. htmlentities($description_apps[$d]) .'</span></div></td>'."\n";
		if ($_SESSION['MM_UserGroup']=='Administrateurs' or $_SESSION['MM_UserGroup']=='Contributeurs' or $_SESSION['MM_UserGroup']=='Formateurs') { 
	$liste1 .=		   '<td><div align="center"><span id="SearchApps"><a href="http://www.dmic-corp.fr/front/contribute/modif_apps.php?id='. $id_apps[$d] .'"><img src="http://www.dmic-corp.fr/images/modif.png" width="29" height="29"></a></span></div></td>'."\n";
		}
		if ($_SESSION['MM_UserGroup']=='Administrateurs') {
	$liste1 .=			'<td><div align="center"><span id="SearchApps"><a href="http://www.dmic-corp.fr/front/apps.php?id='. $id_apps[$d] .'"><img src="http://www.dmic-corp.fr/images/showdeleted.png" width="16" height="16"></a></span></div></td>'."\n";
		}
	$liste1 .=		'</tr>'."\n";
		}
	} while ($ligne_apps = mysql_fetch_assoc($rech_apps));
    
    /* Un petit coup de balai */
    mysql_free_result($rech_apps);
    /* Affichage de la liste d�roulante */
    echo($liste1);
}
/* Sinon on retourne un message d'erreur */
else
{
    echo("<p>Une erreur s'est produite. La r�gion s�lectionn�e comporte une donn�e invalide.</p>\n");
}
?>