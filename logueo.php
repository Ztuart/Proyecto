!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Logueo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>
      <form method="POST" action="/{{$usuario->id}}">
        {{ csrf_field() }}
        <h1>Logueo</h1>          
          <div class="form-group">
           <label for="Usuario">Usuario</label>
           <input type="text" class="form-control" id="Usuario" name="Usuario">
          </div>
          <div class="form-group">
           <label for="contraseña">Contraseña</label>
           <input type="password" class="form-control" id="contraseña" name="contraseña">
          </div>         
      
      </form>      
        <button type="submit" class="btn btn-default" href="/usuario/create">Ingresar</button>
          

        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>  
  </body>
</html>
