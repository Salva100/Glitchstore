﻿<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>GlitchStores</title>
<link rel="stylesheet" href="css/style.css" />
<link href='http://fonts.googleapis.com/css?family=Terminal+Dosis' rel='stylesheet' type='text/css'>

<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.13.custom.min.js"></script>
<script type="text/javascript">
	$(function(){
		// Tabs
		$('#tabs').tabs();
	});
</script>
</head>
<body>
<header>
    <br>
        <a href="index.php"> <img src="images/Logo.png" id="LogoPNG" height="100"></a>
        <br> 
</header>
<aside id="top">
	<div class="wrapper">

        <form>
        	<input type="text" id="buscador" placeholder="¿Qué estás buscando?" /><button type="submit">Search</button>
        </form>

        <div id="action-bar"><a href="login.php">Acceder / Registrarse</a> <!--//<a href="viewbasket.html">Your bag (0)</a></div>-->
        </div>
</aside>
<article id="mainview">
   
    <div id="description">
        <p><h1>Audifonos Bose</h1></p>
        <strong id="price"><span>GlitchPoints: 50</span>Precio: $1000.00</strong><p>
Sumérjase en su música gracias al rendimiento acústico optimizado que ofrecen los auriculares de audio AE2. Reproducen un sonido más uniforme en toda la gama de frecuencias, con completos graves y claros agudos. Los auriculares AE2 están diseñados para que, tanto en casa como en el exterior, disfrute más escuchando sus fuentes de audio favoritas, incluyendo reproductores y ordenadores portátiles. </p>
        
        <p>
            
            
        </p>
        <form action = "viewbasket.php">
            <p><button type="submit" class="continue">Comprar</button></p>
        </form>
        <p><button type="button">Etiqueta a un amigo</button></p>
        <div id="tabs">
            <ul>
                <li><a href="#tabs-1" class="first">Valoración General</a></li>
                <li><a href="#tabs-2">Reviews del Producto</a></li>
                <li><a href="#tabs-3">Reviews del Comprador</a></li>
            </ul>
            <section id="tabs-1">
                <p style="font-size:23px;"> <strong>7.3:</strong> Valoración general</p>
                <p> <strong>Total de reviews:</strong> 370,444 usuarios han valorado este producto.</p>
                <p> <strong>Precio promedio de este prducto en GS: </strong>$957</p>
                <p> <strong>Edad promedio de usuarios que adquirieron este producto:</strong> 24 años </p>                
                <p> <a shape="rect" href="#" title="Detalle">Información detallada sobre este producto</a></p>
</section>
            <section id="tabs-2">
              <p><img src="images/perfil1.png" id="LogoPNG" height="100" align="left"><br>Muy buenos audifonos, aunque con el precio podría comprar unos Sony a un precio más bajo y que tienen más calidad. - <strong>7.9</strong></p><br><br>

              <p><img src="images/perfil2.png" id="LogoPNG" height="100" align="left"><br><br>Ideal para aquellos que disfrutan trabajar de noche. - <strong>8.1</strong></p><br><br>

              <p><img src="images/perfil4.png" id="LogoPNG" height="100" align="left"><br>Buena calidad de sonido y hermoso diseño pero un precio elevado, comparado con otros audifonos. - <strong>7.2</strong></p><br><br>

              <p><a href="#">Click aquí</a> para ver todos los reviews</p>
            </section>
            <section id="tabs-3">
                <p style="font-size:23px;"> <a shape="rect" href="#" title="Detalle"><img src="images/perfil3.png" id="LogoPNG" height="100" align="left"><br><h1> Richard Velro </h1> </a></p><br>
                ......................................................................................................................
                <br>
                <br>
                <p>Nuevo vendedor, atento y responsable. - <strong>8</strong></p>

              <p>Todo bien. - <strong>8</strong></p>
            </section>
        </div>
    </div>
    <div id="images">
    	<a href="images/main.jpg"><img src="images/main.jpg"></a>
        <div id="productthumbs">
            <a href="#"><img src="images/thumb1.jpg" /></a><a href="#"><img src="images/thumb2.jpg" /></a><a href="#"><img src="images/thumb3.jpg" /></a>
        </div>
    </div>
</article>
<footer>
        <h1>It's about social,</h1><br>
        <h1>It's about commerce!</h1>
        <br>
	<div class="wrapper">
            &copy; GlitchStores Inc. <a href="#">Mapa del Sitio</a> <a href="#">Términos &amp; Condiciones</a> <a href="#">Empleo</a><a href="#">¿Quiénes somos?</a>
        </div>
</footer>
</body>
</html>