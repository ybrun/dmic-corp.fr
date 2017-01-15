<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session varialbles
  $_SESSION['MM_Username'] = NULL;
  $_SESSION['MM_UserGroup'] = NULL;
  $_SESSION['PrevUrl'] = NULL;
  unset($_SESSION['MM_Username']);
  unset($_SESSION['MM_UserGroup']);
  unset($_SESSION['PrevUrl']);
	
  $logoutGoTo = "http://www.dmic-corp.fr/index.php";
  if ($logoutGoTo) {
    header("Location: http://www.dmic-corp.fr/index.php");
    exit;
  }
}
?><?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}
?>
<link rel="stylesheet" type="text/css" href="../../../Styles/dmxNavigationMenu.css" />
<link rel="stylesheet" type="text/css" href="../Styles/dmxNavigationMenu.css" />
<link rel="stylesheet" type="text/css" href="../../Styles/dmxNavigationMenu.css" />
<link rel="stylesheet" type="text/css" href="../../../Styles/dmxNavigationMenu/dark_black/dark_black.css" />
<link rel="stylesheet" type="text/css" href="../Styles/dmxNavigationMenu/dark_black/dark_black.css" />
<link rel="stylesheet" type="text/css" href="../../Styles/dmxNavigationMenu/dark_black/dark_black.css" />
<script type="text/javascript" src="../../ScriptLibrary/jquery-latest.pack.js"></script>
<script type="text/javascript" src="../../../ScriptLibrary/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../ScriptLibrary/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../../ScriptLibrary/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../../../ScriptLibrary/dmxNavigationMenu.js"></script>
<script type="text/javascript" src="../ScriptLibrary/dmxNavigationMenu.js"></script>
<script type="text/javascript" src="../../ScriptLibrary/dmxNavigationMenu.js"></script>
<!--[if lt IE 7]><script type="text/javascript" src="../../../Styles/IE7.js"></script><![endif]-->
<!--[if lt IE 7]><script type="text/javascript" src="../../../Styles/IE7.js"></script><![endif]-->
<!--[if lt IE 7]><script type="text/javascript" src="../../../Styles/IE7.js"></script><![endif]-->
<style type="text/css">
.matrix { font-family:Lucida Console, Courier, Monotype; font-size:10pt; text-align:center; width:10px; padding:0px; margin:0px;}
</style>

<script type="text/javascript" language="JavaScript">

<!--
var rows=5; // must be an odd number
var speed=50; // lower is faster
var reveal=2; // between 0 and 2 only. The higher, the faster the word appears
var effectalign="default" //enter "center" to center it.

/***********************************************
* The Matrix Text Effect- by Richard Womersley (http://www.mf2fm.co.uk/rv)
* This notice must stay intact for use
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/

var w3c=document.getElementById && !window.opera;;
var ie45=document.all && !window.opera;
var ma_tab, matemp, ma_bod, ma_row, x, y, columns, ma_txt, ma_cho;
var m_coch=new Array();
var m_copo=new Array();
window.onload=function() {
	if (!w3c && !ie45) return
  var matrix=(w3c)?document.getElementById("matrix"):document.all["matrix"];
  ma_txt=(w3c)?matrix.firstChild.nodeValue:matrix.innerHTML;
  ma_txt=" "+ma_txt+" ";
  columns=ma_txt.length;
  if (w3c) {
    while (matrix.childNodes.length) matrix.removeChild(matrix.childNodes[0]);
    ma_tab=document.createElement("table");
    ma_tab.setAttribute("border", 0);
    ma_tab.setAttribute("align", effectalign);
    ma_tab.style.backgroundColor="#000000";
    ma_bod=document.createElement("tbody");
    for (x=0; x<rows; x++) {
      ma_row=document.createElement("tr");
      for (y=0; y<columns; y++) {
        matemp=document.createElement("td");
        matemp.setAttribute("id", "Mx"+x+"y"+y);
        matemp.className="matrix";
        matemp.appendChild(document.createTextNode(String.fromCharCode(160)));
        ma_row.appendChild(matemp);
      }
      ma_bod.appendChild(ma_row);
    }
    ma_tab.appendChild(ma_bod);
    matrix.appendChild(ma_tab);
  } else {
    ma_tab='<ta'+'ble align="'+effectalign+'" border="0" style="background-color:#000000">';
    for (var x=0; x<rows; x++) {
      ma_tab+='<t'+'r>';
      for (var y=0; y<columns; y++) {
        ma_tab+='<t'+'d class="matrix" id="Mx'+x+'y'+y+'"> </'+'td>';
      }
      ma_tab+='</'+'tr>';
    }
    ma_tab+='</'+'table>';
    matrix.innerHTML=ma_tab;
  }
  ma_cho=ma_txt;
  for (x=0; x<columns; x++) {
    ma_cho+=String.fromCharCode(32+Math.floor(Math.random()*94));
    m_copo[x]=0;
  }
  ma_bod=setInterval("mytricks()", speed);
}

function mytricks() {
  x=0;
  for (y=0; y<columns; y++) {
    x=x+(m_copo[y]==100);
    ma_row=m_copo[y]%100;
    if (ma_row && m_copo[y]<100) {
      if (ma_row<rows+1) {
        if (w3c) {
          matemp=document.getElementById("Mx"+(ma_row-1)+"y"+y);
          matemp.firstChild.nodeValue=m_coch[y];
        }
        else {
          matemp=document.all["Mx"+(ma_row-1)+"y"+y];
          matemp.innerHTML=m_coch[y];
        }
        matemp.style.color="#33ff66";
        matemp.style.fontWeight="bold";
      }
      if (ma_row>1 && ma_row<rows+2) {
        matemp=(w3c)?document.getElementById("Mx"+(ma_row-2)+"y"+y):document.all["Mx"+(ma_row-2)+"y"+y];
        matemp.style.fontWeight="normal";
        matemp.style.color="#00ff00";
      }
      if (ma_row>2) {
          matemp=(w3c)?document.getElementById("Mx"+(ma_row-3)+"y"+y):document.all["Mx"+(ma_row-3)+"y"+y];
        matemp.style.color="#009900";
      }
      if (ma_row<Math.floor(rows/2)+1) m_copo[y]++;
      else if (ma_row==Math.floor(rows/2)+1 && m_coch[y]==ma_txt.charAt(y)) zoomer(y);
      else if (ma_row<rows+2) m_copo[y]++;
      else if (m_copo[y]<100) m_copo[y]=0;
    }
    else if (Math.random()>0.9 && m_copo[y]<100) {
      m_coch[y]=ma_cho.charAt(Math.floor(Math.random()*ma_cho.length));
      m_copo[y]++;
    }
  }
  if (x==columns) clearInterval(ma_bod);
}

function zoomer(ycol) {
  var mtmp, mtem, ytmp;
  if (m_copo[ycol]==Math.floor(rows/2)+1) {
    for (ytmp=0; ytmp<rows; ytmp++) {
      if (w3c) {
        mtmp=document.getElementById("Mx"+ytmp+"y"+ycol);
        mtmp.firstChild.nodeValue=m_coch[ycol];
      }
      else {
        mtmp=document.all["Mx"+ytmp+"y"+ycol];
        mtmp.innerHTML=m_coch[ycol];
      }
      mtmp.style.color="#33ff66";
      mtmp.style.fontWeight="bold";
    }
    if (Math.random()<reveal) {
      mtmp=ma_cho.indexOf(ma_txt.charAt(ycol));
      ma_cho=ma_cho.substring(0, mtmp)+ma_cho.substring(mtmp+1, ma_cho.length);
    }
    if (Math.random()<reveal-1) ma_cho=ma_cho.substring(0, ma_cho.length-1);
    m_copo[ycol]+=199;
    setTimeout("zoomer("+ycol+")", speed);
  }
  else if (m_copo[ycol]>200) {
    if (w3c) {
      mtmp=document.getElementById("Mx"+(m_copo[ycol]-201)+"y"+ycol);
      mtem=document.getElementById("Mx"+(200+rows-m_copo[ycol]--)+"y"+ycol);
    }
    else {
      mtmp=document.all["Mx"+(m_copo[ycol]-201)+"y"+ycol];
      mtem=document.all["Mx"+(200+rows-m_copo[ycol]--)+"y"+ycol];
    }
    mtmp.style.fontWeight="normal";
    mtem.style.fontWeight="normal";
    setTimeout("zoomer("+ycol+")", speed);
  }
  else if (m_copo[ycol]==200) m_copo[ycol]=100+Math.floor(rows/2);
  if (m_copo[ycol]>100 && m_copo[ycol]<200) {
    if (w3c) {
      mtmp=document.getElementById("Mx"+(m_copo[ycol]-101)+"y"+ycol);
      mtmp.firstChild.nodeValue=String.fromCharCode(160);
      mtem=document.getElementById("Mx"+(100+rows-m_copo[ycol]--)+"y"+ycol);
      mtem.firstChild.nodeValue=String.fromCharCode(160);
    }
    else {
      mtmp=document.all["Mx"+(m_copo[ycol]-101)+"y"+ycol];
      mtmp.innerHTML=String.fromCharCode(160);
      mtem=document.all["Mx"+(100+rows-m_copo[ycol]--)+"y"+ycol];
      mtem.innerHTML=String.fromCharCode(160);
    }
    setTimeout("zoomer("+ycol+")", speed);
  }
}
// -->
</script>

<table width="100%">
  <tr>
    <td width="20%"><img src="http://www.dmic-corp.fr/images/Negatif_Original_transparent_256x75.png" width="284" height="75"></td>
    <td width="80%"><h1 align="center"><div id="matrix" align="center">DMIC : le Centre Dynamique de Managemement Informatique.</div></h1></td>
  </tr>
</table>

  <div id="menu_user" class="dmxNavigationMenu dark_black">
  <ul class="menu dark_black horizontal">
    <li title="Home"><a href="javascript:void(0);" class="expandable"><img src="http://www.dmic-corp.fr/images/home.png" border="0" alt="Home" />Home<span class="sub_down"></span></a>
    	<ul class="sub">
        	<li title="Actualités"><a href="http://www.dmic-corp.fr/front/index.php"><img src="http://www.dmic-corp.fr/images/home.png" border="0" alt="Home" />Actualités</a></li>
            <li title="L_Equipe"><a href="http://www.dmic-corp.fr/front/equipe.php"><img src="http://www.dmic-corp.fr/images/home.png" border="0" alt="Home" />L'équipe</a></li>
            <li title="Présentation"><a href="http://www.dmic-corp.fr/front/presentation.php"><img src="http://www.dmic-corp.fr/images/home.png" border="0" alt="Home" />Présentation</a></li>
         </ul>
    </li>
    <?php if ($_SESSION['MM_UserGroup'] == 'Administrateurs') { ?>
    <li title="Administration"><a href="javascript:void(0);" class="expandable"><img src="http://www.dmic-corp.fr/images/administration.png" border="0" alt="Administration" />Administration<span class="sub_down"></span></a>
      <ul class="sub">
        <li title="GLPI"><a href="http://vps107766.ovh.net/glpi/index.php" target="_blank"><img src="http://www.dmic-corp.fr/images/favicon.ico" border="0" alt="GLPI" />GLPI</a></li>
        <li title="Intitulés"><a href="http://www.dmic-corp.fr/front/admin/config_intitules.php"><img src="http://www.dmic-corp.fr/images/intitules.jpg" border="0" alt="Intitulés" />Intitulés</a></li>
        <li title="OCS Inventory NG"><a href="http://vps107766.ovh.net/ocsreports/index.php" target="_blank"><img src="http://www.dmic-corp.fr/images/logo_OCS.png" border="0" alt="OCS Inventory NG" />OCS Inventory NG</a></li>
        <li title="OVH Manager"><a href="https://www.ovh.com/managerv3" target="_blank"><img src="http://www.dmic-corp.fr/images/ovh_manager.jpg" border="0" alt="OVH Manager" />OVH Manager</a></li>
        <li title="dmic-corp.fr"><a href="https://phpmyadmin.ovh.net" target="_blank"><img src="http://www.dmic-corp.fr/images/database_mysql.jpg" border="0" alt="dmic-corp.fr" />phpMyAdmin dmic-corp.fr</a></li>
        <li title="vps107766"><a href="http://vps107766.ovh.net/phpMyAdmin/index.php" target="_blank"><img src="http://www.dmic-corp.fr/images/database_mysql.jpg" border="0" alt="vps107766" />phpMyAdmin vps107766</a></li>
        <li title="Serveur FTP"><a href="https://ssl7.ovh.net/net2ftp/?username=dmiccorpgl" target="_blank"><img src="http://www.dmic-corp.fr/images/ftp.jpg" border="0" alt="Serveur FTP" />Serveur FTP</a></li>
        <li title="Utilisateurs"><a href="http://www.dmic-corp.fr/front/admin/liste_users.php"><img src="http://www.dmic-corp.fr/images/users.jpg" border="0" alt="Utilisateurs" />Utilisateurs</a></li>
        <li title="Webmail"><a href="https://ssl0.ovh.net/fr" target="_blank"><img src="http://www.dmic-corp.fr/images/webmail.jpg" border="0" alt="Webmail" />Webmail</a></li>
        <li title="WordPress"><a href="https://articles.dmic-corp.fr/admin" target="_blank"><img src="http://www.dmic-corp.fr/images/wordpress.png" border="0" alt="WordPress" />WordPress</a></li>
      </ul>
    </li>
	<?php } ?>
    <li title="Applications"><a href="http://www.dmic-corp.fr/front/apps.php"><img src="http://www.dmic-corp.fr/images/application.jpg" border="0" alt="Applications" />Applications</a></li>
    <li title="Artciels"><a href="javascript:void(0);" class="expandable"><img src="http://www.dmic-corp.fr/images/geek.jpg" border="0" alt="Articles" />Articles<span class="sub_down"></span></a>
    	<ul class="sub">
        	<li title="Cinéma & TV"><a href="https://articles.dmic-corp.fr/category/cinema_tv/" target="_blank"><img src="http://www.dmic-corp.fr/images/cinema.jpg" border="0" alt="Cinéma & TV" />Cinema & TV</a></li>
            <li title="Littératures"><a href="https://articles.dmic-corp.fr/category/litteratures/" target="_blank"><img src="http://www.dmic-corp.fr/images/livre_or.jpg" border="0" alt="Littérature" />Littérature</a></li>
            <li title="Jeux Vidéo"><a href="https://articles.dmic-corp.fr/category/jeux_video/" target="_blank"><img src="http://www.dmic-corp.fr/images/videogame.jpg" border="0" alt="Jeux Vidéo" />Jeux vidéo</a></li>
            <li title="Sciences & High Tech"><a href="https://articles.dmic-corp.fr/category/nouvelles_technologies/" target="_blank"><img src="http://www.dmic-corp.fr/images/sciences.jpg" border="0" alt="Sciences & High Tech" />Sciences & High Tech</a></li>
        </ul>
    </li>
    <li title="Base de connaissance"><a href="javascript:void(0);" class="expandable"><img src="http://www.dmic-corp.fr/images/knowbase.jpg" border="0" alt="Base de connaissance" />Base de connaissance<span class="sub_down"></span></a>
    	<ul class="sub">
        	<li title="Procédure"><a href="https://articles.dmic-corp.fr/category/informatiques/base_de_connaissances/procedures/" target="_blank"><img src="http://www.dmic-corp.fr/images/knowbase.jpg" border="0" alt="Procédures" />Procédures</a></li>
            <li title="Résolution d'incidents"><a href="https://articles.dmic-corp.fr/category/informatiques/base_de_connaissances/resolution_d_incidents/" target="_blank"><img src="http://www.dmic-corp.fr/images/knowbase.jpg" border="0" alt="Résolution d'incidents" />Résolution d'incidents</a></li>
        </ul>
    </li>
    <li title="Cours"><a href="https://articles.dmic-corp.fr/category/informatiques/cours/" target="_blank"><img src="http://www.dmic-corp.fr/images/knowbase.jpg" border="0" alt="Cours" />Cours</a></li>
    <li title="Communications"><a href="javascript:void(0);" class="expandable"><img src="http://www.dmic-corp.fr/images/tools.jpg" border="0" alt="Outils" />Communications<span class="sub_down"></span></a>
      <ul class="sub">
        <li title="FAQ"><a href="http://faq.dmic-corp.fr/" target="_blank"><img src="http://www.dmic-corp.fr/images/faq.png" border="0" alt="FAQ" />FAQ</a></li>
        <li title="Forum"><a href="http://forum.dmic-corp.fr/" target="_blank"><img src="http://www.dmic-corp.fr/images/forum.jpg" border="0" alt="Forum" />Forum</a></li>
        <li title="Livre d'or"><a href="http://www.dmic-corp.fr/front/guestbook.php"><img src="http://www.dmic-corp.fr/images/livre_or.jpg" border="0" alt="Livre d'or" />Livre d'or</a></li>
      </ul>
    </li>
    <?php if ($_SESSION['MM_UserGroup']=='Administrateurs' or $_SESSION['MM_UserGroup']=='Clients') { ?>
    <li title="Prestations"><a href="javascript:void(0);" class="expandable"><img src="http://www.dmic-corp.fr/images/computer.jpg" border="0" alt="Prestations" />Prestations<span class="sub_down"></span></a>
      <ul class="sub">
        <li title="Tarif"><a href="http://www.dmic-corp.fr/front/tarifs.php"><img src="http://www.dmic-corp.fr/images/tarifs.jpg" border="0" alt="Tarif" />Tarif</a></li>
        <li title="Devis"><a href="http://www.dmic-corp.fr/front/devis.php"><img src="http://www.dmic-corp.fr/images/devis.jpg" border="0" alt="Devis" />Devis</a></li>
      </ul>
    </li> 
    <?php } ?>  
    <li title="Sites Partenaires"><a href="javascript:boid(0);" class="expandable"><img src="http://www.dmic-corp.fr/images/site_partenaire.jpg" border="0" alt="Sites Partenaires" />Sites Partenaires<span class="sub_down"></span></a>
      <ul class="sub">
        <li title="Editions Web"><a href="javascript:void(0);" class="expandable">Editions Web<span class="sub_right"></span></a>
          <ul class="sub">
            <li title="Dynamic Drive"><a href="http://www.dynamicdrive.com"><img src="http://www.dmic-corp.fr/images/dynamic_drive.png" border="0" alt="Dynamic Drive" />Dynamic Drive</a></li>
          </ul>
        </li>
        <li title="Fournisseurs"><a href="javascript:void(0);" class="expandable">Fournisseurs<span class="sub_right"></span></a>
          <ul class="sub">
            <li><a href="../../../header/www.grosbill.com"><img src="http://www.dmic-corp.fr/images/grosbill_logo.png" border="0" alt="" /></a></li>
            <li title="Matériel.net"><a href="http://www.materiel.net"><img src="http://www.dmic-corp.fr/images/logo_materiel.net.jpg" border="0" alt="Matériel.net" />Matériel.net</a></li>
          </ul>
        </li>
        <li title="Partenaires"><a href="javascript:void(0);" class="expandable">Partenaires<span class="sub_right"></span></a>
          <ul class="sub">
            <li title="Présences d'esprits"><a href="http://cms.presences-d-esprits.com"><img src="http://www.dmic-corp.fr/images/right.1.gif" border="0" alt="Présences d'esprits" />Présences d'esprits</a></li>
            <li title="Cocyclics"><a href="http://cocyclics.org"><img src="http://www.dmic-corp.fr/images/logo-cadre.png" border="0" alt="Cocyclics" />Cocyclics</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <?php if ($_SESSION['MM_Username'] == NULL) { ?>
    <li title="Inscription"><a href="http://www.dmic-corp.fr/front/inscription.php"><img src="http://www.dmic-corp.fr/images/inscription.jpg" border="0" alt="Inscription" />Inscription</a></li>
    <li title="Connexion"><a href="http://www.dmic-corp.fr/connexion.php"><img src="http://www.dmic-corp.fr/images/login.jpg" border="0" alt="Connexion" />Connexion</a></li>
    <?php } ?>
    <?php if ($_SESSION['MM_UserGroup'] == 'Administrateurs' or $_SESSION['MM_UserGroup'] == 'Formateurs' or $_SESSION['MM_UserGroup'] == 'Stagiaires' or $_SESSION['MM_UserGroup'] == 'Clients' or $_SESSION['MM_UserGroup'] == 'Contributeurs' or $_SESSION['MM_UserGroup'] == 'Culture') { ?>
	<li title="<?php echo $_SESSION['MM_Username'] ?>"><a href="http://www.dmic-corp.fr/front/user.php?login=<?php echo $_SESSION['MM_Username'] ?>"><img src="http://www.dmic-corp.fr/images/users.jpg" border="0" alt="<?php echo $_SESSION['MM_Username'] ?>" /><?php echo $_SESSION['MM_Username'] ?></a></li>
    <li title="Déconnexion"><a href="<?php echo $logoutAction ?>"><img src="http://www.dmic-corp.fr/images/logout.jpg" border="0" alt="Déconnexion" />Déconnexion</a></li>
    <?php } ?>
  </ul>
  <div style="height:0;font-size:0;clear:both;"></div>
</div>
<script type="text/javascript">
  // <![CDATA[
 jQuery(document).ready(
   function()
     {
       jQuery("#menu_user").dmxNavigationMenu(
         {"mainShowDuration": "normal", "mainShowEasing": "swing", "mainHideDuration": "normal", "mainHideEasing": "swing", "subShowDuration": "normal", "subShowEasing": "swing", "subHideDuration": "normal", "subHideEasing": "swing", "design": "dark_black", "useMenuBarSearch": false, "keyboard": true, "menuWidth": 250}
       );
     }
 );
  // ]]>
</script>