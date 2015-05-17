<?php	
	$GLOBALS["servidor"] = "localhost"; 
	$GLOBALS["usuario"] = "root";  
	$GLOBALS["contrasena"] = "majora";  
	$GLOBALS["bd"] = "gsbd";

	$con = mysql_connect($GLOBALS["servidor"],$GLOBALS["usuario"],$GLOBALS["contrasena"]); 
	mysql_select_db($GLOBALS["bd"],$con); 
?>