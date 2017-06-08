<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Recuperar Pass</title>        
        <link rel="stylesheet" href="">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    
    </head>
    <body>
     <div class="container">
        <h1 style="font-family: cursive;text-align: right;font-size: 200%;">PUCP Delivery</h1>
           
            <div class="col-xs-6 col-md-offset-3">
              <form>
                  <h2 style="font-size: 300%;">Crear Cuenta</h2>
                  <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre">
                  </div>
                  <div class="form-group">
                    <label for="apellido">Apellido</label>
                    <input type="text" class="form-control" id="apellido" placeholder="Apellido" name="apellido">
                  </div>
                  <div class="form-group">
                    <label for="apodo">Apodo</label>
                    <input type="text" class="form-control" id="apodo" placeholder="Apodo" name="apodo">
                  </div>
                  <div class="form-group">
                    <label for="correo">Correo</label>
                    <input type="email" class="form-control" id="correo" placeholder="Correo" name="correo">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                  </div>
                  <div class="form-group">
                    <label for="rePassword">Re-Ingresar Password</label>
                    <input type="password" class="form-control" id="rePassword" placeholder="Re-Password" name="rePassword">
                  </div>
                  <div class="col-md-6 col-md-offset-4">
                      <button type="submit" class="btn btn-primary">Crear Cuenta</button><br>
                  </div>
              </form>
            </div>
           
    </div>  
    </body>
</html>