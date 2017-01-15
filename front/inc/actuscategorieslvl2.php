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
$id_oeuvres = isset($_GET['id_oeuvres']) ? $_GET['id_oeuvres'] : false;
/* Si on a une région, on procède à la requête */
if(false !== $id_oeuvres)
{
    /* Cération de la requête pour avoir les départements de cette région */
    $sql3 = "SELECT `id_lvl2`, `categorieslvl2_name`".
            " FROM `dmic_actuscategorieslvl2`".
            " WHERE `oeuvres` = ". $id_oeuvres ."".
            " ORDER BY `categorieslvl2_name`;";
    $connexion = mysql_connect($serveur, $admin, $mdp);
    mysql_select_db($base, $connexion);
    $rech_actuscategorieslvl2 = mysql_query($sql3, $connexion);
    /* Un petit compteur pour les départements */
    $nd3 = 0;
    /* On crée deux tableaux pour les numéros et les noms des départements */
    $code_actuscategorieslvl2 = array();
    $nom_actuscategorieslvl2 = array();
    /* On va mettre les numéros et noms des départements dans les deux tableaux */
    while(false != ($ligne_actuscategorieslvl2 = mysql_fetch_assoc($rech_actuscategorieslvl2)))
    {
        $code_actuscategorieslvl2[] = $ligne_actuscategorieslvl2['id_lvl2'];
        $nom_actuscategorieslvl2[]  = $ligne_actuscategorieslvl2['categorieslvl2_name'];
        $nd3++;
    }
    /* Maintenant on peut construire la liste déroulante */
    $liste3 = "";
    $liste3 .= '<select name="actuscategorieslvl2" id="actuscategorieslvl2" onChange="getActussujet(this.value);"><option value="vide">- - - Sous-cat&eacute;gorie - - -</option>'."\n";
    for($d3 = 0; $d3 < $nd3; $d3++)
    {
        $liste3 .= '  <option value="'. $code_actuscategorieslvl2[$d3] .'">'. htmlentities($nom_actuscategorieslvl2[$d3]) .'</option>'."\n";
    }
    $liste3 .= '</select>'."\n";

    /* Un petit coup de balai */
    mysql_free_result($rech_actuscategorieslvl2);
    /* Affichage de la liste déroulante */
    echo($liste3);
}
/* Sinon on retourne un message d'erreur */
else
{
    echo("<p>Une erreur s'est produite. La région sélectionnée comporte une donnée invalide.</p>\n");
}
?>