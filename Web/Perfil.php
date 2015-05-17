<?php 
    include_once("../FuncionesPHP/bdconnect.php");
    include_once("../FuncionesPHP/bdaccess.php");    
    include_once("../FuncionesPHP/productos.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>GS</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="../CSS/GeneralGS.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="JS/jquery.js" language="javascript"></script>
<script type="text/javascript" src="JS/inicio.js" language="javascript"></script>
<script type="text/javascript" src="JS/mobys.js" language="javascript"></script>

</head>

<body>

<!------------------------------------------------------------------------------------------------------
                                               HEADER ELEMENTS
------------------------------------------------------------------------------------------------------->
    <div id="HEADER">

    
    <!--------------------------------------    ACCESO  ------------------------------------------------------>
        <div id="Acceso">
                <input type="text" name="txt_buscador" id="txt_buscador"/>

            <ul class="Header_Acceso">
                   <li><a href="#">Login</a></li>  
                  <li><a href="#">Register</a></li>
               </ul>
        </div>  
    </div>
        
<!------------------------------------------------------------------------------------------------------
                                 BODY ELEMENTS
----------------------------------------------------------------------------------------------------- -->
           <br><br><br>
        
                <div id="ProductInfo">        
                    <img src="Imagenes/Productos/1.png" alt="Smiley face" height="auto" width="250">

                    Generales<br>
                    Gustos<br>
                    Reseñas<br>
                    Valoraciones...<br>

                    Productos en venta...<br>

                </div>

                <div id = "Footer">

                </div>            
</body>

</html>