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
    $sql2 = "SELECT `id_categorie`, `name_categorie`".
            " FROM `dmic_knowbaseitemcategories`".
            " WHERE `type_categorie` = ". $idt ."".
            " ORDER BY `name_categorie`;";
    $connexion = mysql_connect($serveur, $admin, $mdp);
    mysql_select_db($base, $connexion);
    $rech_cycle = mysql_query($sql2, $connexion);
    /* Un petit compteur pour les d�partements */
    $nd = 0;
    /* On cr�e deux tableaux pour les num�ros et les noms des d�partements */
    $code_cycle = array();
    $nom_cycle = array();
    /* On va mettre les num�ros et noms des d�partements dans les deux tableaux */
    while(false != ($ligne_cycle = mysql_fetch_assoc($rech_cycle)))
    {
        $code_cycle[] = $ligne_cycle['id_categorie'];
        $nom_cycle[]  = $ligne_cycle['name_categorie'];
        $nd++;
    }
    /* Maintenant on peut construire la liste d�roulante */
    $liste1 = "";
    $liste1 .= '<select name="cycle" id="cycle" onchange="getOeuvres(this.value);"><option value="vide">- - - Cat&eacute;gories - - -</option>'."\n";
    for($d = 0; $d < $nd; $d++)
    {
        $liste1 .= '  <option value="'. $code_cycle[$d] .'">'. htmlentities($nom_cycle[$d]) .' ('. $code_cycle[$d] .')</option>'."\n";
    }
    $liste1 .= '</select>'."\n";
    /* Un petit coup de balai */
    mysql_free_result($rech_cycle);
    /* Affichage de la liste d�roulante */
    echo($liste1);
}
/* Sinon on retourne un message d'erreur */
else
{
    echo("<p>Une erreur s'est produite. La r�gion s�lectionn�e comporte une donn�e invalide.</p>\n");
}
?>