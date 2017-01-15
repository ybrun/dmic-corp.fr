<link rel="stylesheet" type="text/css" href="Styles/dmxNavigationMenu.css" />
<link rel="stylesheet" type="text/css" href="../Styles/dmxNavigationMenu.css" />
<link rel="stylesheet" type="text/css" href="../../Styles/dmxNavigationMenu.css" />
<div id="menu_user" class="dmxNavigationMenu dark_black">
<div align="center"><table border="0" align="center">
  <tr>
    <th scope="col"><div align="left">
      <h3><u>Global</u></h3>
    </div></th>
  </tr>
  <tr>
    <td><div align="left">
      <img src="/images/visiteurs.png" width="16" height="16">
      <?php
// Connexion à MySQL
$hostname_dmic = "dmiccorpglroot.mysql.db";
$database_dmic = "dmiccorpglroot";
$username_dmic = "dmiccorpglroot";
$password_dmic = "Password7";
mysql_pconnect($hostname_dmic, $username_dmic, $password_dmic);
mysql_select_db($database_dmic);

// -------
// ÉTAPE 1 : on vérifie si l'IP se trouve déjà dans la table.
// Pour faire ça, on n'a qu'à compter le nombre d'entrées dont le champ "ip" est l'adresse IP du visiteur.
$retour = mysql_query('SELECT COUNT(*) AS nbre_entrees FROM dmic_connectes WHERE ip=\'' . $_SERVER['REMOTE_ADDR'] . '\'');
$donnees = mysql_fetch_array($retour);

if ($donnees['nbre_entrees'] == 0) // L'IP ne se trouve pas dans la table, on va l'ajouter.
{
    mysql_query('INSERT INTO dmic_connectes VALUES(\'' . $_SERVER['REMOTE_ADDR'] . '\', ' . time() . ')');
}
else // L'IP se trouve déjà dans la table, on met juste à jour le timestamp.
{
    mysql_query('UPDATE dmic_connectes SET timestamp=' . time() . ' WHERE ip=\'' . $_SERVER['REMOTE_ADDR'] . '\'');
}

// -------
// ÉTAPE 2 : on supprime toutes les entrées dont le timestamp est plus vieux que 5 minutes.

// On stocke dans une variable le timestamp qu'il était il y a 5 minutes :
$timestamp_5min = time() - (60 * 5); // 60 * 5 = nombre de secondes écoulées en 5 minutes
mysql_query('DELETE FROM dmic_connectes WHERE timestamp < ' . $timestamp_5min);

// -------
// ÉTAPE 3 : on compte le nombre d'IP stockées dans la table. C'est le nombre de visiteurs connectés.
$retour = mysql_query('SELECT COUNT(*) AS nbre_entrees FROM dmic_connectes');
$donnees = mysql_fetch_array($retour);


// Ouf ! On n'a plus qu'à afficher le nombre de connectés !
echo $donnees['nbre_entrees'] . ' visiteurs connectés';
?>
    </div></td>
  </tr>
  <tr>
    <td><div align="left">
      <img src="/images/pages.png" width="16" height="16">
      <?php
if(file_exists('compteur_pages_vues.txt'))
{
        $compteur_f = fopen('compteur_pages_vues.txt', 'r+');
        $compte = fgets($compteur_f);
}
else
{
        $compteur_f = fopen('compteur_pages_vues.txt', 'a+');
        $compte = 0;
}
$compte++;
fseek($compteur_f, 0);
fputs($compteur_f, $compte);
fclose($compteur_f); 
echo '<strong>'.$compte.'</strong> pages vues.';
?>
    </div></td>
  </tr>
  <tr>
    <td><div align="left">
      <img src="/images/statistiques.png" width="16" height="16">
      <?php
include_once('front/inc/sidebar/stats/upload/counter.php');
include_once('inc/sidebar/stats/upload/counter.php');
include_once('../inc/sidebar/stats/upload/counter.php');
echo " $c_today visites aujourd'hui<br />";
?>
    </div></td>
  </tr>
  <tr>
    <td><div align="left"><div align="left"><img src="/images/statistiques.png" width="16" height="16">
      <?php 
	include_once('front/inc/sidebar/stats/upload/counter.php');
	include_once('inc/sidebar/stats/upload/counter.php');
	include_once('../inc/sidebar/stats/upload/counter.php');
	echo " $c_alltime visites depuis le 01/09/2015<br />"; ?></div></td>
  </tr>
  <?php if ($_SESSION['MM_UserGroup'] == 'Administrateurs') { ?>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><h3><u>Administration</u></h3></td>
  </tr>
  <tr>
    <td><?php $inscription = mysql_query('SELECT COUNT(*) AS Inscrit
FROM dmic_inscription');
			  $inscrit = mysql_fetch_array($inscription);
			  echo 'Inscription : ' . $inscrit['Inscrit'];
		?></td>
  </tr>
  <tr>
    <td><?php $devis_ordi = mysql_query('SELECT COUNT(*) AS Devis_Ordi FROM dmic_demandedevis WHERE statut=1');
			  $nb_devis_ordi = mysql_fetch_array($devis_ordi);
			  $devis_service = mysql_query('SELECT COUNT(*) AS Devis_Service FROM dmic_demandedevisservices WHERE statut=1');
			  $nb_devis_service = mysql_fetch_array($devis_service);
			  $nb_devis = $nb_devis_ordi['Devis_Ordi'] + $nb_devis_service['Devis_Service'];
			  echo $nb_devis . ' devis créés.'; ?></td>
  </tr>
  <tr>
    <td><?php $devis_ordi_vu = mysql_query('SELECT COUNT(*) AS Devis_Ordi_Vu FROM dmic_demandedevis WHERE statut=2');
			  $nb_devis_ordi_vu = mysql_fetch_array($devis_ordi_vu);
			  $devis_service_vu = mysql_query('SELECT COUNT(*) AS Devis_Service_Vu FROM dmic_demandedevisservices WHERE statut=2');
			  $nb_devis_service_vu = mysql_fetch_array($devis_service_vu);
			  $nb_devis_vu = $nb_devis_ordi_vu['Devis_Ordi_Vu'] + $nb_devis_service_vu['Devis_Service_Vu'];
			  echo $nb_devis_vu . ' devis pris en compte.'; ?></td>
  </tr>
  <tr>
    <td><?php $devis_ordi_actif = mysql_query('SELECT COUNT(*) AS Devis_Ordi_Actif FROM dmic_demandedevis WHERE statut=3');
			  $nb_devis_ordi_actif = mysql_fetch_array($devis_ordi_actif);
			  $devis_service_actif = mysql_query('SELECT COUNT(*) AS Devis_Service_Actif FROM dmic_demandedevisservices WHERE statut=3');
			  $nb_devis_service_actif = mysql_fetch_array($devis_service_actif);
			  $nb_devis_actif = $nb_devis_ordi_actif['Devis_Ordi_Actif'] + $nb_devis_service_actif['Devis_Service_Actif'];
			  echo $nb_devis_actif . ' devis en traitement.'; ?></td>
  </tr>
  <tr>
    <td><?php $devis_ordi_clot = mysql_query('SELECT COUNT(*) AS Devis_Ordi_Clot FROM dmic_demandedevis WHERE statut=4');
			  $nb_devis_ordi_clot = mysql_fetch_array($devis_ordi_clot);
			  $devis_service_clot = mysql_query('SELECT COUNT(*) AS Devis_Service_Clot FROM dmic_demandedevisservices WHERE statut=4');
			  $nb_devis_service_clot = mysql_fetch_array($devis_service_clot);
			  $nb_devis_clot = $nb_devis_ordi_clot['Devis_Ordi_Clot'] + $nb_devis_service_clot['Devis_Service_Clot'];
			  echo $nb_devis_clot . ' devis cl&ocirc;tur&eacute;s.'; ?></td>
  </tr>
  <?php } ?>
</table>
</div>
</div>
<p></p>
<iframe frameborder="0" height="450px" width="100%" src="https://fr.ulule.com/sabre-laser/widget.html" scrolling="no"></iframe>