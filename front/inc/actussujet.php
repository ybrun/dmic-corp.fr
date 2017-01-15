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
$id_lvl2 = isset($_GET['id_lvl2']) ? $_GET['id_lvl2'] : false;
/* Si on a une région, on procède à la requête */
if(false !== $id_lvl2)
{
    /* Cération de la requête pour avoir les départements de cette région */
    $sql4 = "SELECT `id_actus`, `sujet_name`".
            " FROM `dmic_actus`".
            " WHERE `categorieslvl2` = ". $id_lvl2 ."".
            " ORDER BY `sujet_name`;";
    $connexion = mysql_connect($serveur, $admin, $mdp);
    mysql_select_db($base, $connexion);
    $rech_actus = mysql_query($sql4, $connexion);
    /* Un petit compteur pour les départements */
    $nd4 = 0;
    /* On crée deux tableaux pour les numéros et les noms des départements */
    $code_actus = array();
    $nom_actus = array();
    /* On va mettre les numéros et noms des départements dans les deux tableaux */
    while(false != ($ligne_actus = mysql_fetch_assoc($rech_actus)))
    {
        $code_actus[] = $ligne_actus['id_actus'];
        $nom_actus[]  = $ligne_actus['sujet_name'];
        $nd4++;
    }
    /* Maintenant on peut construire la liste déroulante */
    $liste4 = "";
    $liste4 .= '<select name="actus" id="actus" onChange="getActustexte(this.value);"><option value="vide">- - - Sujets - - -</option>'."\n";
    for($d4 = 0; $d4 < $nd4; $d4++)
    {
        $liste4 .= '  <option value="'. $code_actus[$d4] .'">'. htmlentities($nom_actus[$d4]) .'</option>'."\n";
    }
    $liste4 .= '</select>'."\n";

    /* Un petit coup de balai */
    mysql_free_result($rech_actus);
    /* Affichage de la liste déroulante */
    echo($liste4);
}
/* Sinon on retourne un message d'erreur */
else
{
    echo("<p>Une erreur s'est produite. La région sélectionnée comporte une donnée invalide.</p>\n");
}
?>