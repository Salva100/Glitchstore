<?php 
    /*include_once("../FuncionesPHP/bdconnect.php");
    include_once("../FuncionesPHP/bdaccess.php");    
    include_once("../FuncionesPHP/productos.php");*/

    require_once("conekta-php/lib/Conekta.php");
    Conekta::setApiKey("key_yu7cz6iTH3dv3cqtxedaUA");
    Conekta::setLocale('es');

    $precio = 100000;
    $precioGanancia = $precio * .05;
    $precioGananciaReal = $precioGanancia/2;
    $precioLocatario = $precio - $precioGanancia;
    $glitchPoints = $precioGananciaReal;// * 10;

    /*
    echo "$precio<br>"; 
    echo "$precioGanancia<br>";
    echo "$precioGananciaReal<br>";
    echo "$precioLocatario<br>";
    echo "$glitchPoints<br>";  
    */

    try{


      $customer = Conekta_Customer::create(array(
        "name"=> "Lews Therin",
        "email"=> "lews.therin@gmail.com",
        "phone"=> "55-5555-5555",
        "cards"=> array($_POST['conektaTokenId'])
      ));

      //echo get_object_vars($customer);

      $json= $customer -> cards[0];

      $json= json_decode($json,true);

      echo $json['id'];

      $charge = Conekta_Charge::create(array(
        "amount"=> $precioLocatario,
        "currency"=> "MXN",
        "description"=> "Audifonos Bose",
        "card"=> $json['id']
      ));

      echo $charge -> status;


      $charge1 = Conekta_Charge::create(array(
        "amount"=> $precioGananciaReal,
        "currency"=> "MXN",
        "description"=> "GlitchStore",
        "card"=> $json['id']
      ));

      echo $charge1 -> status;

      $charge2 = Conekta_Charge::create(array(
        "amount"=> $glitchPoints,
        "currency"=> "MXN",
        "description"=> "GlitchPoints-usuario-3487105",
        "card"=> $json['id']
      ));

      echo $charge2 -> status;

      

      }catch (Conekta_Error $e){
        echo $e->getMessage();
       //el pago no pudo ser procesado
      }


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Free ecommerce template by @webdezign</title>
<link rel="stylesheet" href="css/style.css" />
<link href='http://fonts.googleapis.com/css?family=Terminal+Dosis' rel='stylesheet' type='text/css'>
<!-- The below script Makes IE understand the new html5 tags are there and applies our CSS to it -->
<!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->


<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="https://conektaapi.s3.amazonaws.com/v0.3.2/js/conekta.js"></script>
<script type="text/javascript">
 
 // Conekta Public Key
  Conekta.setPublishableKey('key_yu7cz6iTH3dv3cqtxedaUA');
 
 // ...

</script>
<script type="text/javascript">
  var conektaSuccessResponseHandler;
  conektaSuccessResponseHandler = function(token) {
    console.log("token")
    var $form;
    $form = $("#card-form");

    console.log("token0")
  /* Inserta el token_id en la forma para que se envíe al servidor */

    $form.append($("<input type=\"hidden\" name=\"conektaTokenId\" />").val(token.id));

    console.log("token1")
  /* and submit */

    $form.get(0).submit();

    console.log("token2")
  };

  var conektaErrorResponseHandler;
  conektaErrorResponseHandler = function(response) {
    var $form;
    $form = $("#card-form");

    console.log("error")
    
  /* Muestra los errores en la forma */

    $form.find(".card-errors").text(response.message);
    $form.find("button").prop("disabled", false);

  };


  jQuery(function($) {
    $("#card-form").submit(function(event) {
      var $form;
      $form = $(this);

      console.log("hoa")
      
  /* Previene hacer submit más de una vez */

      $form.find("button").prop("disabled", true);

      Conekta.token.create($form, conektaSuccessResponseHandler, conektaErrorResponseHandler);

  /* Previene que la información de la forma sea enviada al servidor */

      return false;

      console.log("hoa3")
    });
  });

</script>


</head>
<body>
<header>
        <a href="index.html"> <img src="images/Logo.png" id="LogoPNG" height="100"></a>
        <br>  
</header>
<aside id="top">
  <div class="wrapper">

        <form>
          <input type="text" placeholder="Search ABC comp..." /><button type="submit">Search</button>
        </form>

        <div id="action-bar"><a href="login.html">Acceder / Registrarse</a>
        </div>
    </div>
</aside>
<article id="basket">

<table width="100" border="1">
    <tr>
        <th scope="col" class="description">Producto</th>
        <th scope="col" class="options">Opciones</th>
        <th align="right" scope="col" class="price">Precio</th>
    </tr>
    
    <tr>
    	<td align="left" valign="top" class="description"><a href="main.html"><img src="images/thumb1.jpg" alt="Elegant evening Dress" class="left" /></a><p><a href="main.html">Audifonos Bose</a><br />Sumérjase en su música gracias al rendimiento acústico optimizado que ofrecen los auriculares de audio AE2. Reproducen un sonido más uniforme en toda la gama de frecuencias, con completos graves y claros agudos. Los auriculares AE2 están diseñados para que, tanto en casa como en el exterior, disfrute más escuchando sus fuentes de audio favoritas, incluyendo reproductores y ordenadores portátiles. </p>
        <a href="#">Remove</a></td>
        <td align="left" valign="top" class="options">
        	<dl>
                <dt>ID del producto</dt>
                <dd>1936246</dd>
                <dt>Color:</dt>
                <dd>Negro</dd>
             
                <dt>Cantidad:</dt>
                <dd>1</dd>
            </dl>
            <button>Modificación</button>
        </td>
        <td align="right" valign="top" class="price">$1000</td>
    </tr>
</table>
<img src="images/creditcards.gif" class="safe" />

<!-- FORMULARIO PARA REALIZAR LAS COMPRAS -->
<br><br><br><br><br>

<div class="right" id="ProductInfo">        
                    
                    Generales<br>
                    Precio<br>
                      <form action="" method="POST" id="card-form">
                      <span class="card-errors"></span>
                      <div class="form-row">
                        <label>
                          <span>Nombre del tarjeta habiente</span>
                          <input type="text" size="20" data-conekta="card[name]"/>
                        </label>
                      </div>
                      <div class="form-row">
                        <label>
                          <span>Numero de tarjeta de credito</span>
                          <input type="text" size="20" data-conekta="card[number]"/>
                        </label>
                      </div>
                      <div class="form-row">
                        <label>
                          <span>CVC</span>
                          <input type="text" size="4" data-conekta="card[cvc]"/>
                        </label>
                      </div>
                      <div class="form-row">
                        <label>
                          <span>Fecha de expiracion (MM/AAAA)</span>
                          <input type="text" size="2" data-conekta="card[exp_month]"/>
                        </label>
                        <span>/</span>
                        <input type="text" size="4" data-conekta="card[exp_year]"/>
                      </div>
                      
                      <button type="submit" class="continue">Pay securely now</button>

                    </form>

                </div>

<div class="left">
    <strong>Subtotal antes de comision</strong> <em>$1000</em><br />
    <p>
        
    </p>
    <strong>Your total</strong> <em>$1050</em>
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


