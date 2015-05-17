<?php 
    /*include_once("../FuncionesPHP/bdconnect.php");
    include_once("../FuncionesPHP/bdaccess.php");    
    include_once("../FuncionesPHP/productos.php");*/

    require_once("conekta-php/lib/Conekta.php");
    Conekta::setApiKey("key_yu7cz6iTH3dv3cqtxedaUA");
    Conekta::setLocale('es');

    $precio = 50000;
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

        $chargePoints = Conekta_Charge::create(array(
          "amount"=> $glitchPoints,
          "currency"=> "MXN",
          "description"=> "Puntos ganados",
          "reference_id"=> "GlitchPoints",
          "card"=> $_POST['conektaTokenId'],
       //"tok_a4Ff0dD2xYZZq82d9",
          "details"=> array(
            "email"=>"valefcfhc@gmail.com"
            )
        ));

        echo $chargePoints->status;

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
	<div class="wrapper">
        <h1><a href="index.html" id="brand" title="ABC comp">ABC comp</a></h1>
        <nav>
            <ul>
                <li>
                  <a href="search.html">Tops</a>
                  <ul class="sub-menu">
                        <li><a href="search.html">Tshirts</a></li>
                        <li><a href="search.html">Jumpers</a></li>
                        <li><a href="search.html">Cardigans</a></li>
                        <li><a href="search.html">Knitwear</a></li>
                    </ul>
                </li>
                <li><a href="search.html">Trousers</a></li>
                <li>
                	<a href="search.html">Dresses</a>
                    <ul class="sub-menu">
                        <li><a href="search.html">Bridal dress</a></li>
                        <li><a href="search.html">Cocktail dress</a></li>
                        <li><a href="search.html">Maxi dress</a></li>
                        <li><a href="search.html">Shift dress</a></li>
                        <li><a href="search.html" class="current">Summer dress</a></li>
                        <li><a href="search.html">Warp dress</a></li>
                    </ul>
                </li>
                <li><a href="search.html">Skirts</a></li>
                <li>
                    <a href="search.html">Accessories</a>
                    <ul class="sub-menu">
                        <li><a href="search.html">Shoes</a></li>
                        <li><a href="search.html">Hats</a></li>
                        <li><a href="search.html">Bags</a></li>
                        <li><a href="search.html">Scarves</a></li>
                        <li><a href="search.html">Jewellery</a></li>
                        <li><a href="search.html">Gloves</a></li>
                    </ul>
                </li>
                <li><a href="search.html">Coats &amp; Jackets </a></li>
                <li><a href="search.html">Brands</a></li>
          </ul>
        </nav>
    </div>
</header>
<aside id="top">
	<div class="wrapper">
        <ul id="social">
            <li><a href="#" class="facebook" title="like us us on Facebook">like us us on Facebook</a></li>
            <li><a href="#" class="twitter" title="follow us on twitter">follow us on twitter</a></li>
        </ul>
        <form>
        	<input type="text" placeholder="Search ABC comp..." /><button type="submit">Search</button>
        </form>
        <div id="action-bar"><a href="login.html">Login/Register</a> // <a href="viewbasket.html">Your bag (3) &nbsp; &pound;148</a></div>
    </div>
</aside>
<article id="basket">

<h1>Shopping Bag</h1>
<table width="100" border="1">
    <tr>
        <th scope="col" class="description">Product</th>
        <th scope="col" class="options">Options</th>
        <th align="right" scope="col" class="price">Price</th>
    </tr>
    
    <tr>
    	<td align="left" valign="top" class="description"><a href="main.html"><img src="images/thumb1.jpg" alt="Elegant evening Dress" class="left" /></a><p><a href="main.html">Elegant evening Dress</a><br />Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ultricies fringilla. Suspendisse iaculis tristique leo, id adipiscing massa aliquet ut. Etiam adipiscing auctor enim nec tincidunt. </p>
        <a href="#">Remove</a></td>
        <td align="left" valign="top" class="options">
        	<dl>
                <dt>Product ID</dt>
                <dd>1936246</dd>
                <dt>Colour:</dt>
                <dd>Light blue</dd>
                <dt>Size:</dt>
                <dd>S</dd>
                <dt>Quantity:</dt>
                <dd>1</dd>
            </dl>
            <button>Change details</button>
        </td>
        <td align="right" valign="top" class="price">&pound;249</td>
    </tr>
</table>
<img src="images/creditcards.gif" class="safe" />

<!-- FORMULARIO PARA REALIZAR LAS COMPRAS -->

<div class="left" id="ProductInfo">        
                    
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



<div class="right">
    <strong>Subtotal before Delivery Charges</strong> <em>&pound;398.00</em><br />
    <p>
        <select>
        	<option>Free delivery (3-5 days)</option>
            <option>Next day delivery (£3.99)</option>
        </select> <em>&pound;0.00</em>
    </p>
    <strong>Your total</strong> <em>&pound;398.00</em>
</div>


</article>
<footer>
	<div class="wrapper">
    	<span class="logo">ABC comp</span>
        <a href="http://www.webdezign.co.uk" target="_blank" title="web design london" class="right">Web design london</a> &copy; ABC comp <a href="#">Sitemap</a> <a href="#">Terms &amp; Conditions</a> <a href="#">Shipping &amp; Returns</a> <a href="#">Size Guide</a><a href="#">Help</a> <br />
        Address to said ABC comp, including postcode &nbsp;-&nbsp; 1.888.CO.name <a href="mailto:ABC comp">service@ABC comp.com</a>
    </div>
</footer>
</body>
</html>