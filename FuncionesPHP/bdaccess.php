<?php

	function abrirConexion()	{
		$conector = mysqli_connect($GLOBALS["servidor"],$GLOBALS["usuario"],$GLOBALS["contrasena"]) or die(mysqli_connect_error());
		return $conector;
	}

	function seleccionarBaseDatos($conector)		{
		mysqli_select_db($conector, $GLOBALS["bd"]) or die(mysqli_connect_error($conector));
	}

	function cerrarConexion($conector)	{
		mysqli_close($conector);
	}


function existeRegistro($pconector, $cquery){

 $lexiste_referencia = true;
 $lresult = mysqli_query($pconector, $cquery);
 
 if (!$lresult){
   $cerror = "No fue posible recuperar la información de la base de datos.<br>";
   $cerror .= "SQL: $cquery <br>";
   $cerror .= "Descripción: ".mysqli_connect_error($pconector);
   die($cerror);   
 }
 else{
   if ( mysqli_num_rows($lresult) == 0 ){
     $lexiste_referencia = false;   
   }   
 }
 
 mysqli_free_result($lresult);
    
 return $lexiste_referencia;
 
}

function insertarDatos($pconector, $cquery){

 $lentrada_creada = false;
 $lresult = mysqli_query($pconector, $cquery);
 if (!$lresult){   
   $cerror = "Ocurrió un error al acceder a la base de datos.<br>";
   $cerror .= "SQL: $cquery <br>";
   $cerror .= "Descripción: ".mysqli_connect_error($pconector);
   die($cerror);
 }
 else{
   if (mysqli_affected_rows($pconector) > 0){
     $lentrada_creada = true;
   }
 }
     
 return $lentrada_creada;
}


function getProfile($pconector, $cquery){

	$aregistro = array();
	$lresult = mysqli_query($pconector, $cquery);

		if (!$lresult){
			
			$cerror = "No fue posible recuperar la información de la base de datos.<br>";
			$cerror .= "SQL: $cquery <br>";
			$cerror .= "Descripción: ".mysqli_connect_error($pconector);
	
			die($cerror);
		}

		else{
				if (mysqli_num_rows($lresult) == 1){
					$aregistro = mysqli_fetch_array($lresult);
				}
		}

		reset($aregistro);
		return $aregistro;

}

?>