<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_dmic = "dmiccorpglroot.mysql.db";
$database_dmic = "dmiccorpglroot";
$username_dmic = "dmiccorpglroot";
$password_dmic = "Password7";
$dmic = mysql_pconnect($hostname_dmic, $username_dmic, $password_dmic) or trigger_error(mysql_error(),E_USER_ERROR); 
?>