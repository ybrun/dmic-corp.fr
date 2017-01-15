<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}
?>
<link href="/Styles/Fluid Grid Layout/boilerplate.css" rel="stylesheet" type="text/css">
<?php
/**
 * Code qui sera aeeplé par un objet XHR et qui
 * retournera la liste déroulante des départements
 * correspondant à la région sélectionnée.
 */
/* Paramètres de connexion */
$serveur = "dmiccorpglroot.mysql.db";
$admin   = "dmiccorpglroot";
$mdp     = "Password7";
$base    = "dmiccorpglroot";

/* On récupère l'identifiant de la région choisie. */
$id_categorie = isset($_GET['id_categorie']) ? $_GET['id_categorie'] : false;
/* Si on a une région, on procède à la requête */
if(false !== $id_categorie)
{
    /* Cération de la requête pour avoir les départements de cette région */
    $sql3 = "SELECT `id_knowbaseitems`, `format`, `name_fichier`, `name`, `users`, `date`".
            " FROM `dmic_knowbaseitems`".
            " WHERE `knowbaseitemcategories` = ". $id_categorie ."".
            " ORDER BY `name`;";
    $connexion = mysql_connect($serveur, $admin, $mdp);
    mysql_select_db($base, $connexion);
    $rech_BdC = mysql_query($sql3, $connexion);
    /* Un petit compteur pour les départements */
    $nd2 = 0;
    /* On crée deux tableaux pour les numéros et les noms des départements */
    $code_BdC = array();
    $nom_BdC = array();
	$users_BdC = array();
	$date_BdC = array();
    /* On va mettre les numéros et noms des départements dans les deux tableaux */
    while(false != ($ligne_BdC = mysql_fetch_assoc($rech_BdC)))
    {
        $code_BdC[] = $ligne_BdC['id_knowbaseitems'];
		$format_BdC[] = $ligne_BdC['format'];
		$fichier_BdC[] = $ligne_BdC['name_fichier'];
        $nom_BdC[]  = $ligne_BdC['name'];
		$users_BdC[] = $ligne_BdC['users'];
		$date_BdC[] = $ligne_BdC['date'];
        $nd2++;
    }
    /* Maintenant on peut construire la liste déroulante */
    $liste2 = "";
    $liste2 .= '<table width="65% border="1" align="center" class="tab_cadrehov">
					<tr>
						<th width="20%" nowrap="nowrap" scope="col"><div align="center" class="Style7">Nom</div></th>
						<th width="20%" nowrap="nowrap" scope="col"><div align="center" class="Style7">Auteur</div></th>
						<th width="20%" nowrap="nowrap" scope="col"><div align="center" class="Style7">Date de cr&eacute;ation</div></th>'."\n";
	
	if ($_SESSION['MM_UserGroup']=="Administrateurs")
	{
		$liste2 .= '	<th width="2,5%" nowrap="nowrap" scope="col">&nbsp;</th>
						<th width="2,5%" nowrap="nowrap" scope="col">&nbsp;</th>
					</tr>'."\n";
	}
	
    do {
		for($d2 = 0; $d2 < $nd2; $d2++)
		{
				if ($format_BdC[$d2] == 1) {
					$liste2 .= '  <tr>
									<td scope="row"><div align="center"><a href="http://www.dmic-corp.fr/front/knowbaseitems.php?id='. $code_BdC[$d2] .'">'. htmlentities($nom_BdC[$d2]) .' ('. $code_BdC[$d2] .')</a></div></td>
									<td scope="row"><div align="center">' .htmlentities($users_BdC[$d2]) .'</div></td>
									<td scope="row"><div align="center">' .htmlentities($date_BdC[$d2]) .'</div></td>'."\n";
				}
				if ($format_BdC[$d2] == 2) {
					$liste2 .= '  <tr>
									<td scope="row"><div align="center"><a href="http://www.dmic-corp.fr/download/procs/'. htmlentities($fichier_BdC[$d2]) .'" target="_blank" >'. htmlentities($nom_BdC[$d2]) .' ('. $code_BdC[$d2] .')</a></div></td>
									<td scope="row"><div align="center">' .htmlentities($users_BdC[$d2]) .'</div></td>
									<td scope="row"><div align="center">' .htmlentities($date_BdC[$d2]) .'</div></td>'."\n";
				}
	
			if ($_SESSION['MM_UserGroup']=="Administrateurs")
			{
				$liste2 .=	'<td><a href="http://www.dmic-corp.fr/front/contribute/modif_knowbaseitems.php?id='. $code_BdC[$d2] .'" target="_blank")" ><img src="../../images/modif.png" width="29" height="29"></a></td>
							<td><a href="http://www.dmic-corp.fr/front/liste_knowbaseitems.php?id='. $code_BdC[$d2] .'"><img src="../images/showdeleted.png" width="16" height="16"></a></td>
						</tr>'."\n";
			}
	
		}
	} while ($ligne_BdC = mysql_fetch_assoc($rech_BdC));
    $liste2 .= '</table>'."\n";
    /* Un petit coup de balai */
    mysql_free_result($rech_oeuvres);
    /* Affichage de la liste déroulante */
    echo($liste2);
}
/* Sinon on retourne un message d'erreur */
else
{
    echo("<p>Une erreur s'est produite. La région sélectionnée comporte une donnée invalide.</p>\n");
}
?>