<?php require_once ('../../ScriptLibrary/ban_ip.php') ;?>
<?php require_once('../../Connections/dmic.php'); ?>
<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form_kb")) {
  $insertSQL = sprintf("INSERT INTO dmic_knowbaseitems (type, format, knowbaseitemcategories, name_fichier, name, answer, users, `date`) VALUES (%s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['type'], "int"),
                       GetSQLValueString($_POST['format'], "int"),
                       GetSQLValueString($_POST['knowbaseitemcategories_id'], "text"),
                       GetSQLValueString($_FILES['upload']['name'], "text"),
                       GetSQLValueString($_POST['name'], "text"),
                       GetSQLValueString($_POST['answer'], "text"),
                       GetSQLValueString($_POST['users_id'], "text"),
                       GetSQLValueString($_POST['date'], "date"));

  mysql_select_db($database_dmic, $dmic);
  $Result1 = mysql_query($insertSQL, $dmic) or die(mysql_error());
}

$colname_users = "-1";
if (isset($_SESSION['MM_Username'])) {
  $colname_users = $_SESSION['MM_Username'];
}
mysql_select_db($database_dmic, $dmic);
$query_users = sprintf("SELECT * FROM dmic_users WHERE login = %s", GetSQLValueString($colname_users, "text"));
$users = mysql_query($query_users, $dmic) or die(mysql_error());
$row_users = mysql_fetch_assoc($users);
$totalRows_users = mysql_num_rows($users);

mysql_select_db($database_dmic, $dmic);
$query_categorie = "SELECT * FROM dmic_knowbaseitemcategories";
$categorie = mysql_query($query_categorie, $dmic) or die(mysql_error());
$row_categorie = mysql_fetch_assoc($categorie);
$totalRows_categorie = mysql_num_rows($categorie);

$colname_profil_users = "-1";
if (isset($_SESSION['MM_Username'])) {
  $colname_profil_users = $_SESSION['MM_Username'];
}
mysql_select_db($database_dmic, $dmic);
$query_profil_users = sprintf("SELECT profil FROM dmic_users WHERE login = %s", GetSQLValueString($colname_profil_users, "text"));
$profil_users = mysql_query($query_profil_users, $dmic) or die(mysql_error());
$row_profil_users = mysql_fetch_assoc($profil_users);
$totalRows_profil_users = mysql_num_rows($profil_users);

mysql_select_db($database_dmic, $dmic);
$query_types = "SELECT * FROM dmic_knowbaseitemtypecategorie";
$types = mysql_query($query_types, $dmic) or die(mysql_error());
$row_types = mysql_fetch_assoc($types);
$totalRows_types = mysql_num_rows($types);

mysql_select_db($database_dmic, $dmic);
$query_format = "SELECT * FROM dmic_knowbaseitemformat";
$format = mysql_query($query_format, $dmic) or die(mysql_error());
$row_format = mysql_fetch_assoc($format);
$totalRows_format = mysql_num_rows($format);
$_SESSION['MM_UserGroup'] = $row_profil_users['profil'];
?>
<?php
if (!isset($_SESSION)) {
  session_start();
}
$MM_authorizedUsers = "Administrateurs,Formateurs,Contributeurs";
$MM_donotCheckaccess = "false";

// *** Restrict Access To Page: Grant or deny access to this page
function isAuthorized($strUsers, $strGroups, $UserName, $UserGroup) { 
  // For security, start by assuming the visitor is NOT authorized. 
  $isValid = False; 

  // When a visitor has logged into this site, the Session variable MM_Username set equal to their username. 
  // Therefore, we know that a user is NOT logged in if that Session variable is blank. 
  if (!empty($UserName)) { 
    // Besides being logged in, you may restrict access to only certain users based on an ID established when they login. 
    // Parse the strings into arrays. 
    $arrUsers = Explode(",", $strUsers); 
    $arrGroups = Explode(",", $strGroups); 
    if (in_array($UserName, $arrUsers)) { 
      $isValid = true; 
    } 
    // Or, you may restrict access to only certain users based on their username. 
    if (in_array($UserGroup, $arrGroups)) { 
      $isValid = true; 
    } 
    if (($strUsers == "") && false) { 
      $isValid = true; 
    } 
  } 
  return $isValid; 
}

$MM_restrictGoTo = "http://www.dmic-corp.fr/no_authorized.php";
if (!((isset($_SESSION['MM_Username'])) && (isAuthorized("",$MM_authorizedUsers, $_SESSION['MM_Username'], $_SESSION['MM_UserGroup'])))) {   
  $MM_qsChar = "?";
  $MM_referrer = $_SERVER['PHP_SELF'];
  if (strpos($MM_restrictGoTo, "?")) $MM_qsChar = "&";
  if (isset($_SERVER['QUERY_STRING']) && strlen($_SERVER['QUERY_STRING']) > 0) 
  $MM_referrer .= "?" . $_SERVER['QUERY_STRING'];
  $MM_restrictGoTo = $MM_restrictGoTo. $MM_qsChar . "accesscheck=" . urlencode($MM_referrer);
  header("Location: ". $MM_restrictGoTo); 
  exit;
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
             "http://www.w3.org/TR/html4/loose.dtd">
<html><head><title>DMIC Corp</title>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
<meta http-equiv='Expires' content='Fri, Jun 12 1981 08:20:00 GMT'>
<meta http-equiv='Pragma' content='no-cache'>
<meta http-equiv='Cache-Control' content='no-cache'>
<script type='text/javascript' src="../../ScriptLibrary/tiny_mce/tiny_mce.js"></script>
<link href="../../Styles/Fluid Grid Layout/boilerplate.css" rel="stylesheet" type="text/css">
<![endif]-->
</head>
<body>
<div id='page' ><div id='contenukb'><script language='javascript' type='text/javascript'>tinyMCE.init({
         language : 'fr',
         mode : 'exact',
         elements: 'answer',
         valid_elements: '*[*]',
         browser_spellcheck : true,
         plugins : 'table,directionality,searchreplace',
         theme : 'advanced',
         entity_encoding : 'raw', theme_advanced_buttons1_add : 'ltr,rtl,search,replace',theme_advanced_toolbar_location : 'top',
         theme_advanced_toolbar_align : 'left',
	 theme_advanced_statusbar_location : 'none',
         theme_advanced_buttons1 : 'bold,italic,underline,strikethrough,fontsizeselect,formatselect,separator,justifyleft,justifycenter,justifyright,justifyfull,bullist,numlist,outdent,indent',
         theme_advanced_buttons2 : 'forecolor,backcolor,separator,hr,separator,link,unlink,anchor,separator,tablecontrols,undo,redo,cleanup,code,separator',
         theme_advanced_buttons3 : ''});</script>
         <form method='POST' id='form_kb' name='form_kb' action="<?php echo $editFormAction; ?>">
         <table width="80%" border="1" align="center" class="tab_cadrehov">
           <tr>
             <th scope="row">Type</th>
             <td><label for="type"></label>
               <select name="type" id="type">
                 <?php
do {  
?>
                 <option value="<?php echo $row_types['id']?>"><?php echo $row_types['name_type']?></option>
                 <?php
} while ($row_types = mysql_fetch_assoc($types));
  $rows = mysql_num_rows($types);
  if($rows > 0) {
      mysql_data_seek($types, 0);
	  $row_types = mysql_fetch_assoc($types);
  }
?>
             </select></td>
           </tr>
           <tr>
             <th scope="row">Format</th>
             <td><label for="format"></label>
               <select name="format" id="format">
                 <?php
do {  
?>
                 <option value="<?php echo $row_format['id_format']?>"><?php echo $row_format['name_format']?></option>
                 <?php
} while ($row_format = mysql_fetch_assoc($format));
  $rows = mysql_num_rows($format);
  if($rows > 0) {
      mysql_data_seek($format, 0);
	  $row_format = mysql_fetch_assoc($format);
  }
?>
             </select></td>
           </tr>
           <tr>
             <th scope="row">Catégorie</th>
             <td><span class="center"><span id='results_1871535311'>
               <select id='dropdown_knowbaseitemcategories_id1871535311' name='knowbaseitemcategories_id'
             size='1'>
                 <?php
do {  
?>
                 <option value="<?php echo $row_categorie['id_categorie']?>"><?php echo $row_categorie['name_categorie']?></option>
                 <?php
} while ($row_categorie = mysql_fetch_assoc($categorie));
  $rows = mysql_num_rows($categorie);
  if($rows > 0) {
      mysql_data_seek($categorie, 0);
	  $row_categorie = mysql_fetch_assoc($categorie);
  }
?>
               </select>
               <script type='text/javascript'>
               Ext.get('dropdown_knowbaseitemcategories_id1871535311').on(
                'change',
                function() {Ext.get('comment_knowbaseitemcategories_id1871535311').load({
          url: '/glpi/ajax/comments.php',
          scripts: true,
             params:'value='+Ext.get('dropdown_knowbaseitemcategories_id1871535311').getValue()+'&table=glpi_knowbaseitemcategories&withlink=comment_link_knowbaseitemcategories_id1871535311'
});});
               </script>
             </span>
                 <script type='text/javascript'>function update_results_1871535311() {Ext.get('results_1871535311').load({
          url: '/glpi/ajax/dropdownValue.php',
          scripts: true,
             params:'searchText=*&value=0&itemtype=KnowbaseItemCategory&myname=knowbaseitemcategories_id&limit=50&toadd=W10=&comment=1&rand=1871535311&entity_restrict=-1&update_item=&used=W10=&on_change=&condition=&emptylabel=-----&display_emptychoice=1&displaywith=W10=&display=&permit_select_parent=&update_link=1'
});}</script>
                 <a id='comment_link_knowbaseitemcategories_id1871535311' target='_blank'  href='/glpi/front/knowbaseitemcategory.php'><img id='tooltip830990672' alt='' src='/glpi/pics/aide.png'></a><span id='comment_knowbaseitemcategories_id1871535311' class='x-hidden'>&nbsp;</span>
                 <script type='text/javascript' >
new Ext.ToolTip({
               target: 'tooltip830990672',
               anchor: 'left',
               autoShow: true,
               autoHide: true,

                  dismissDelay: 0,contentEl: 'comment_knowbaseitemcategories_id1871535311'});</script>
             <img alt='' title="Ajouter" src='/glpi/pics/add_dropdown.png' style='cursor:pointer; margin-left:2px;'
                            onClick="var w = window.open('/administration/config_intitules_categorie_bdc.php' ,'glpipopup', 'height=400, width=1000, top=100, left=100, scrollbars=yes' );w.focus();"></span></td>
           </tr>
           <tr>
             <th scope="row">Sujet ou Nom du fichier</th>
             <td><span class="center">
               <textarea cols='200' rows='2' name='name'></textarea>
             </span></td>
           </tr>
           <tr>
             <th scope="row">Fichier &agrave; uploader (pdf uniquement)</th>
             <td><input name="upload" type="file" /></td>
           </tr>
           <tr>
             <th scope="row">Contenu</th>
             <td><textarea cols='200' rows='50' id='answer' name='answer'></textarea></td>
           </tr>
         </table>
                    <input name='date' type='hidden' id="date" value="<?php
$date = date("Y-m-d");
Print("$date");
?>">
                    <br>
             <input name='users_id' type='hidden' value="<?php echo $row_users['nom_user']. ' '.$row_users['prenom_user']; ?>">
             <input type='submit' class='submit' name='add' value="Ajouter">
                  </p>
    <input type='hidden' name='_glpi_csrf_token' value='0c5e7916645b9c577a2d6e384e5e08d3'>
                  <input type="hidden" name="MM_insert" value="form_kb">
    </form>

         </div></div>
</body></html>
<?php
mysql_free_result($users);

mysql_free_result($categorie);

mysql_free_result($types);

mysql_free_result($format);
?>