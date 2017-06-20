!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detalle Ubicacion</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>
      <form method="POST" action="/productos"(//MODIFICAR)>
        {{ csrf_field() }}
        <h1>Detalle Ubicacion</h1>          
          <div class="form-group">
           <label for="Usuario">Usuario</label>
           <input type="text" class="form-control" id="Usuario" name="Usuario">
          </div>
          <div class="form-group">
           <label for="Descripcion">Descripcion</label>
           <input type="text" class="form-control" id="Descripcion" name="Descripcion">
          </div>         
      
      </form>
      <div class="container">

                  //MAPA
      </div>
        <button type="submit" class="btn btn-default" href="/usuario/create">Regresar</button>
          <button type="submit" class="btn btn-default" href="/usuario/create">Borrar</button>

        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>  
  </body>
</html>
