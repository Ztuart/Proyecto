<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vista Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar-form navbar-right">
                   <div class="container-fluid">
                      <a class="btn btn-primary" href="/usuario/create">//MODIFICAR
                        <span class="glyphicon glyphicon-plus"></span>Cerrar Sesion
                      </a>                     
                   </div>
    </nav> 
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-md">
                <h1>Listado de Ubicaciones</h1>
                <table class="table table-bordered">
                  <thead>
                      <tr class="bg-primary">
                          <th>#</th>
                          <th>Latitud</th>
                          <th>Longitud</th>
                          <th>Descripcion</th>
                          <th>Usuario</th>
                      </tr>
                  </thead>
                  <tbody>
                   @foreach($productos as $producto)
                    <tr>
                      <td><a href="/productos/{{$producto->ProductID}}"> {{$producto->ProductName}}</a></td>
                      <td>{{$producto->SupplierID}}</td> //MODIFICAR
                      <td>{{$producto->CategoryID}}</td> //MODIFICAR
                      <td>{{$producto->QuantityPerUnit}}</td> //MODIFICAR
                      <td>{{$producto->UnitPrice}}</td> //MODIFICAR
                      <td>{{$producto->UnitsInStock}}</td>   //MODIFICAR                   
                      <td><a  class="btn btn-primary" href="/productos/{{$producto->ProductID}}/edit">Visualizar</a></td>
                      <td><form action="/productos/{{$producto->ProductID}}" method="POST">
                        <input type="hidden" name="_method" value="DELETE"/>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                        <button type="submit" class="btn btn-primary">Borrar</button>
                  </form></td>
                    </tr>
                                       
                  @endforeach
                      
                  </tbody>
                </table>                
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>  
  </body>
</html>