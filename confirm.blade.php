<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.12/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    .image{
      height: 240px;
    }

    .centrado{
      min-width: 450px;
      height: 270px;
    }

    .bordeado{
      border-style: groove;
      border-radius: 10px;
    }

    .boton{
      box-shadow: rgb(61, 194, 27) 0px 0px 34px -3px; background: linear-gradient(rgb(68, 199, 103) 5%, rgb(72, 117, 48) 100%) rgb(68, 199, 103); border-radius: 30px; display: inline-block; cursor: pointer; color: rgb(255, 255, 255); font-family: Arial; font-size: 17px; padding: 20px 60px; text-decoration: none; text-shadow: rgb(51, 166, 33) 0px 0px 0px;
    }

  </style>
</head>
<body>
      <div class="container">
          <br><br>
            <div class="jumbotron ">
              <div class="row ">
                      <div class="col-md-6  centrado" align="center">
                        <img src="https://raw.githubusercontent.com/Ztuart/Proyecto/master/149458974_1296d66e-e4ab-4740-8a20-a765c0570297.png" class="image" alt="Pucp delivery">
                      </div>
                      <div class="col-md-6 bordeado" align="center" >
                        <h2><b>¡Cuenta activada con éxito!</b></h2>
                        <p>Ya eres parte de la comunidad <span style="font-style: italic;"><b>PUCP Delivery</b></span>. Puedes comenzar haciendo click en el botón para retornar a la vista principal</p>
                        <form action="/validarCorreo" method="POST">
                               <input type="hidden" name="val" value="{{ $val }}">
                               <input type="hidden" name="_token" value="{{ csrf_token() }}">
                               <button type="submit" class="btn btn-success boton">Ir a la pagina principal</button>
                        </form>  
                      </div>
              </div>
            </div>
      </div>
</body>
</html>
