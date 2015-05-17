<?php 
    /*include_once("../FuncionesPHP/bdconnect.php");
    include_once("../FuncionesPHP/bdaccess.php");    
    include_once("../FuncionesPHP/productos.php");*/

    require_once("../conekta-php/lib/Conekta.php");
    Conekta::setApiKey("key_yu7cz6iTH3dv3cqtxedaUA");
    Conekta::setLocale('es');

    $precio = 50000;
    $precioGanancia = $precio * .05;
    $precioGananciaReal = $precioGanancia/2;
    $precioLocatario = $precio - $precioGanancia;
    $glitchPoints = $precioGananciaReal;// * 10;

    echo "$precio<br>"; 
    echo "$precioGanancia<br>";
    echo "$precioGananciaReal<br>";
    echo "$precioLocatario<br>";
    echo "$glitchPoints<br>";  

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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>GS</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- <link href="../CSS/GeneralGS.css" rel="stylesheet" type="text/css"/> -->
<!-- <script type="text/javascript" src="JS/jquery.js" language="javascript"></script>
<script type="text/javascript" src="JS/inicio.js" language="javascript"></script>
<script type="text/javascript" src="JS/mobys.js" language="javascript"></script> -->

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

<!------------------------------------------------------------------------------------------------------
                                               HEADER ELEMENTS
------------------------------------------------------------------------------------------------------->
    <div id="HEADER">

    
    <!--------------------------------------    ACCESO  ------------------------------------------------------>
    <!--    <div id="Acceso">
                <input type="text" name="txt_buscador" id="txt_buscador"/>

            <ul class="Header_Acceso">
                   <li><a href="#">Login</a></li>  
                  <li><a href="#">Register</a></li>
               </ul>
         
    </div> -->
        
<!------------------------------------------------------------------------------------------------------
                                 BODY ELEMENTS
----------------------------------------------------------------------------------------------------- -->
           <br>
        
                <div id="ProductInfo">        
                    <!-- <img src="Imagenes/Productos/1.png" alt="Smiley face" height="auto" width="250">
                    <br> -->
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
                      <button type="submit">Paga ahora!</button>
                    </form>

                </div>

                <div id = "Footer">

                </div>            
</body>

</html>