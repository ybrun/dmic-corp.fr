/**
 * Lister les départements d'une région avec un objet
 * XMLHTTPRequest.
 */
/* Création de la variable globale qui contiendra l'objet XHR */
var requete = null;
/**
 * Fonction privée qui va créer un objet XHR.
 * Cette fonction initialisera la valeur dans la variable globale définie
 * ci-dessus.
 */
function creerRequete()
{
    try
    {
        /* On tente de créer un objet XmlHTTPRequest */
        requete = new XMLHttpRequest();
    }
    catch (microsoft)
    {
        /* Microsoft utilisant une autre technique, on essays de créer un objet ActiveX */
        try
        {
            requete = new ActiveXObject('Msxml2.XMLHTTP');
        }
        catch(autremicrosoft)
        {
            /* La première méthode a échoué, on en teste une seconde */
            try
            {
                requete = new ActiveXObject('Microsoft.XMLHTTP');
            }
            catch(echec)
            {
                /* À ce stade, aucune méthode ne fonctionne... mettez donc votre navigateur à jour ;) */
                requete = null;
            }
        }
    }
    if(requete == null)
    {
        alert('Impossible de créer l\'objet requête,\nVotre navigateur ne semble pas supporter les object XMLHttpRequest.');
    }
}
/**
 * Fonction privée qui va mettre à jour l'affichage de la page.
 */
function actualiserTexteoeuvres()
{
    var listeTexteoeuvres = requete.responseText;
    var blocListe = document.getElementById('blocTexteoeuvres');
    blocListe.innerHTML = listeTexteoeuvres;
}

/**
 * Fonction publique appelée par la page affichée.
 * Cette fonction va initialiser la création de l'objet XHR puis appeler
 * le code serveur afin de récupérer les données à modifier dans la page.
 */
function getTexteoeuvres(id_pub)
{
    /* Si il n'y a pas d'identifiant de région, on fait disparaître la seconde liste au cas où elle serait affichée */
    if(id_pub == 'vide')
    {
        document.getElementById('blocTexteoeuvres').innerHTML = '';
    }
    else
    {
        /* À cet endroit précis, on peut faire apparaître un message d'attente */
        var blocListe = document.getElementById('blocTexteoeuvres');
        blocListe.innerHTML = "Traitement en cours, veuillez patienter...";
        /* On crée l'objet XHR */
        creerRequete();
        /* Définition du fichier de traitement */
        var url = '../inc/texteoeuvres.php?id_pub='+ id_pub;
        /* Envoi de la requête à la page de traitement */
        requete.open('GET', url, true);
        /* On surveille le changement d'état de la requête qui va passer successivement de 1 à 4 */
        requete.onreadystatechange = function()
        {
            /* Lorsque l'état est à 4 */
            if(requete.readyState == 4)
            {
                /* Si on a un statut à 200 */
                if(requete.status == 200)
                {
                    /* Mise à jour de l'affichage, on appelle la fonction apropriée */
                    actualiserTexteoeuvres();
                }
            }
        };
        requete.send(null);
    }
}