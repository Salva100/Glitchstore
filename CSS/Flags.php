<?php

header("Content-type: text/css");
include_once("../FuncionesPHP/keep_sesion.php");
include_once("../FuncionesPHP/status.php");
include_once("../FuncionesPHP/getInfo.php");
validarSesion();

list(,,,,,,,,,,,,,,,,$pais) = mostrarInfo($_SESSION["cidusuario"]);

	switch($pais)		{

/*---------------------------------------------------------------------------
									MÉXICO
/*---------------------------------------------------------------------------*/	

	case 1:
		echo "#LeftWindow, #LeftWindow2	{
			background-color:#419045;	
		}

		#Publicity	{
			background-color:#B52B2B;
		}
		
		#Foto	{
			border-color:#876C3F;			
		}"
		;
	break;

/*---------------------------------------------------------------------------
									ESPAÑA
/*---------------------------------------------------------------------------*/

	case 2:
		echo "#LeftWindow, #LeftWindow2	{
			background-color:#E61418;	
		}

		#Publicity	{
			background-color:#E61418;
		}
		
		#Foto	{
			border-color:#FDDC04;			
		}";
	break;

/*---------------------------------------------------------------------------
									FRANCIA
/*---------------------------------------------------------------------------*/
	case 3:
		echo "#LeftWindow, #LeftWindow2	{
			background-color:#7B7EF7;	
		}

		#Publicity	{
			background-color:#F93D40;
		}
		
		#Foto	{
			border-color:#FFFFFF;			
		}";
	break;
	
/*---------------------------------------------------------------------------
									BRASIL
/*---------------------------------------------------------------------------*/

	case 4:
		echo "#LeftWindow, #LeftWindow2	{
			background-color:#2BB73E;	
		}

		#Publicity	{
			background-color:#F4E83F;
		}
		
		#Foto	{
			border-color:#343BBD;			
		}";
	break;

/*---------------------------------------------------------------------------
									COLOMBIA
/*---------------------------------------------------------------------------*/

	case 5:
		echo "#LeftWindow, #LeftWindow2	{
			background-color:#F9EB1D;	
		}

		#Publicity	{
			background-color:#4842B8;
		}
		
		#Foto	{
			border-color:#E82424;			
		}";
	break;

/*---------------------------------------------------------------------------
									ARGENTINA
/*---------------------------------------------------------------------------*/

	case 6:
		echo "#LeftWindow, #LeftWindow2	{
			background-color:#9EA1D8;	
		}

		#Publicity	{
			background-color:#9EA1D8;
		}
		
		#Foto	{
			border-color:#F8FF00;			
		}";
	break;
	
/*---------------------------------------------------------------------------
								NINGUNO SELECCIONADO
/*---------------------------------------------------------------------------*/

	default:
		echo "#LeftWindow, #LeftWindow2	{
			background-color:#FFFFFF;	
			border-style: groove;
			border-color: black;
		}

		#Publicity	{
			background-color:#FFFFFF;
			border-style: groove;
			border-color: black;
		}
		
		#Foto	{
			border-color:#000000;			
		}";
	break;
	
	/*---------------------------------------------------------------------------
									ROSA
	/*---------------------------------------------------------------------------*/

	case 7:
		echo "#LeftWindow, #LeftWindow2	{
			background-color:#F04CE0;	
		}

		#Publicity	{
			background-color:#F04CE0;
		}
		
		#Foto	{
			border-color:#F8FF00;			
		}";
	break;
	
	/*---------------------------------------------------------------------------
									NEGRO
	/*---------------------------------------------------------------------------*/

	case 8:
		echo "#LeftWindow, #LeftWindow2	{
			background-color:#585858;	
		}

		#Publicity	{
			background-color:#585858;
		}
		
		#Foto	{
			border-color:#7FFF6B;			
		}";
	break;
}
?>