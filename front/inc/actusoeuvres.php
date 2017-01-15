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
$idt = isset($_GET['idt']) ? $_GET['idt'] : false;
/* Si on a une région, on procède à la requête */
if(false !== $idt)
{
    /* Cération de la requête pour avoir les départements de cette région */
    $sql2 = "SELECT `id_oeuvres`, `oeuvres_name`".
            " FROM `dmic_actusoeuvres`".
            " WHERE `categories_lvl1` = ". $idt ."".
            " ORDER BY `oeuvres_name`;";
    $connexion = mysql_connect($serveur, $admin, $mdp);
    mysql_select_db($base, $connexion);
    $rech_actusoeuvres = mysql_query($sql2, $connexion);
    /* Un petit compteur pour les départements */
    $nd2 = 0;
    /* On crée deux tableaux pour les numéros et les noms des départements */
    $code_actusoeuvres = array();
    $nom_actusoeuvres = array();
    /* On va mettre les numéros et noms des départements dans les deux tableaux */
    while(false != ($ligne_actusoeuvres = mysql_fetch_assoc($rech_actusoeuvres)))
    {
        $code_actusoeuvres[] = $ligne_actusoeuvres['id_oeuvres'];
        $nom_actusoeuvres[]  = $ligne_actusoeuvres['oeuvres_name'];
        $nd2++;
    }
    /* Maintenant on peut construire la liste déroulante */
    $liste2 = "";
    $liste2 .= '<select name="actusoeuvres" id="actusoeuvres" onChange="getActuscategorieslvl2(this.value);"><option value="vide">- - - Oeuvres - - -</option>'."\n";
    for($d2 = 0; $d2 < $nd2; $d2++)
    {
        $liste2 .= '  <option value="'. $code_actusoeuvres[$d2] .'">'. htmlentities($nom_actusoeuvres[$d2]) .'</option>'."\n";
    }
    $liste2 .= '</select>'."\n";

    /* Un petit coup de balai */
    mysql_free_result($rech_actusoeuvres);
    /* Affichage de la liste déroulante */
    echo($liste2);
}
/* Sinon on retourne un message d'erreur */
else
{
    echo("<p>Une erreur s'est produite. La région sélectionnée comporte une donnée invalide.</p>\n");
}
?>