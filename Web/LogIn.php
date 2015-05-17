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

    
    <!--------------------------------------	ACCESO	------------------------------------------------------>
    	<div id="Acceso">
                <input autofocus="autofocus" id="buscador" placeholder="¿Qué estás buscando?" type="text">

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
        
   	<div id="ProductZone">        
        
            <div id="Productos">
        	<p><h1 class="tagInicio">Últimos productos</h1></p>
                <p><form action="*">
                    <select name="preferencias">
                    <option name="popular">Más popular</option>    
                    <option value="menor">Menor precio</option>m                                                              
                    <option value="mejor">Tienda mejor puntuada</option>
                    <option value="fecha">Fecha más reciente</option>
                    </select>
                <input type="submit">
                </form></p>

                    <br><br>
                        <table id="PostNote">
                            <td> <br>"Dark Souls 2"<br><p id="autor"> <a href="Desktop.php?cid_user=1"> Game Planet </a><p><br><br>f - t</td>
                        </table>
                        <table id="PostNote">
                            <td> <br>"Bloodborne"<br><p id="autor"> <a href="Desktop.php?cid_user=2"> Game Rush </a><p><br><br>f - t</td>
                        </table>
                        <table id="PostNote">
                            <td> <br>"Bloodborne"<br><p id="autor"> <a href="Desktop.php?cid_user=3"> Game Rush </a><p><br><br>f - t</td>
                        </table>
                        <table id="PostNote">
                            <td> <br>"Bloodborne"<br><p id="autor"> <a href="Desktop.php?cid_user=1"> Game Rush </a><p><br><br>f - t</td>
                        </table>
                        <table id="PostNote">
                            <td> <br>"Bloodborne"<br><p id="autor"> <a href="Desktop.php?cid_user=2"> Game Rush </a><p><br><br>f - t</td>
                        </table>
                        <table id="PostNote">
                            <td> <br>"Bloodborne"<br><p id="autor"> <a href="Desktop.php?cid_user=3"> Game Rush </a><p><br><br>f - t</td>
                        </table>
                    <br><br>

            </div> 

            <br>

            <div id="Tiendas">
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
                        <table id="PostNote">
                            <td> <br>"Dark Souls 2"<br><p id="autor"> <a href="Desktop.php?cid_user=1"> Game Planet </a><p><br><br>f - t</td>
                        </table>
                        <table id="PostNote">
                            <td> <br>"Bloodborne"<br><p id="autor"> <a href="Desktop.php?cid_user=2"> Game Rush </a><p><br><br>f - t</td>
                        </table>
                    <br><br>

            </div>

                <br>

            <div id="Usuarios">
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
                        <table id="PostNote">
                            <td> <br>"Dark Souls 2"<br><p id="autor"> <a href="Desktop.php?cid_user=1"> Game Planet </a><p><br><br>f - t</td>
                        </table>
                        <table id="PostNote">
                            <td> <br>"Bloodborne"<br><p id="autor"> <a href="Desktop.php?cid_user=2"> Game Rush </a><p><br><br>f - t</td>
                        </table>
                    <br><br>

            </div>

        </div>


        <br><br>


        <div id="footer">
            ajshbcjhabsjh
            <section id="copyright">(( Datos Copyright ))</section>
            <section id="contacto">(( Datos de Contacto ))</section>
            <section id="enlaces">(( MapaWeb, Política, etc. ))</section>
        </div>
            
</body>

</html>