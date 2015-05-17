<?php 
    include_once("FuncionesPHP/bdconnect.php");
    include_once("FuncionesPHP/bdaccess.php");    
    include_once("FuncionesPHP/productos.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>GS</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="CSS/GeneralGS.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="JS/jquery.js" language="javascript"></script>
<script type="text/javascript" src="JS/inicio.js" language="javascript"></script>
<script type="text/javascript" src="JS/mobys.js" language="javascript"></script>
</head>

<body>

<!------------------------------------------------------------------------------------------------------
							                   HEADER ELEMENTS
------------------------------------------------------------------------------------------------------->
    <div id="HEADER">

    
    <!--------------------------------------	ACCESO	------------------------------------------------------>
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
           <br><br><br> j
        
   	<div id="ProductZone">        
        
            <div id="Productos">
        	<h1 class="tagInicio">Últimos productos</h1>
                <form action="*">
                    <select name="preferencias">
                    <option name="popular">Más popular</option>    
                    <option value="menor">Menor precio</option>m                                                              
                    <option value="mejor">Tienda mejor puntuada</option>
                    <option value="fecha">Fecha más reciente</option>
                    </select>
                <input type="submit">
                </form>

                    <br><br>
                    <?php          
                        echo mostrarProductos();
                    ?>
                    <br><br>
            </div> 

            <br>
            
            <div id="Tiendas">
                <br><br><br><br><br><br><br><br>
                <h1 class="tagInicio">Tiendas oficiales</h1>
                <form action="*">
                    <select name="preferencias">
                    <option name="popular">Más popular</option>    
                    <option value="menor">Menor precio</option>
                    <option value="mejor">Tienda mejor puntuada</option>
                    <option value="fecha">Fecha más reciente</option>
                    </select>
                <input type="submit">
                </form>

                    <br><br>
                    <?php          
                        echo mostrarProductos();
                    ?>
                    <br><br>
            </div>

            <div id="Usuarios">
                <br><br><br><br><br><br><br><br>
                <h1 class="tagInicio">Usuarios recientes</h1>
                <form action="*">
                    <select name="preferencias">
                    <option name="popular">Más popular</option>    
                    <option value="menor">Menor precio</option>
                    <option value="mejor">Tienda mejor puntuada</option>
                    <option value="fecha">Fecha más reciente</option>
                    </select>
                <input type="submit">
                </form>

                    <br><br>
                    <?php          
                        echo mostrarProductos();
                    ?>
                    <br><br>
            </div>

                <div id = "Footer">

                </div>
        </div>
            
</body>

</html>