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
    $sql2 = "SELECT `id_categorie`, `name_categorie`".
            " FROM `dmic_knowbaseitemcategories`".
            " WHERE `type_categorie` = ". $idt ."".
            " ORDER BY `name_categorie`;";
    $connexion = mysql_connect($serveur, $admin, $mdp);
    mysql_select_db($base, $connexion);
    $rech_cycle = mysql_query($sql2, $connexion);
    /* Un petit compteur pour les départements */
    $nd = 0;
    /* On crée deux tableaux pour les numéros et les noms des départements */
    $code_cycle = array();
    $nom_cycle = array();
    /* On va mettre les numéros et noms des départements dans les deux tableaux */
    while(false != ($ligne_cycle = mysql_fetch_assoc($rech_cycle)))
    {
        $code_cycle[] = $ligne_cycle['id_categorie'];
        $nom_cycle[]  = $ligne_cycle['name_categorie'];
        $nd++;
    }
    /* Maintenant on peut construire la liste déroulante */
    $liste1 = "";
    $liste1 .= '<select name="cycle" id="cycle" onchange="getOeuvres(this.value);"><option value="vide">- - - Cat&eacute;gories - - -</option>'."\n";
    for($d = 0; $d < $nd; $d++)
    {
        $liste1 .= '  <option value="'. $code_cycle[$d] .'">'. htmlentities($nom_cycle[$d]) .' ('. $code_cycle[$d] .')</option>'."\n";
    }
    $liste1 .= '</select>'."\n";
    /* Un petit coup de balai */
    mysql_free_result($rech_cycle);
    /* Affichage de la liste déroulante */
    echo($liste1);
}
/* Sinon on retourne un message d'erreur */
else
{
    echo("<p>Une erreur s'est produite. La région sélectionnée comporte une donnée invalide.</p>\n");
}
?>