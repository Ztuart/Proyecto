<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
          <div class="row">   
            <div class="col-md-9 col-md-offset-3">                          
                <h2>Seleccione una opción</h2>
                  <div id="grupo"class="btn-group btn-group-lg">
                    <form class="form-horizontal" action="/panelAdmin">
                      <div class="form-group">        
                        <div class="col-sm-2 col-sm-6">                     
                          <button id ="admin"type="submit" class="btn btn-outline-primary waves-effect btn-lg btn-huge">Panel Administrador  </button>                     
                        </div>
                      </div>

                    </form>
                  
                  
                    <form class="form-horizontal" method="GET" action="/home">
                      <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-6">                      
                         <button id="usuario"type="submit" class="btn btn-outline-danger waves-effect btn-lg btn-huge">Pagina de Usuarios</button>                      
                        </div>
                      </div>
                    </form>
                </div>
                  <style type="text/css">
                       .btn-huge{
                              padding-top:60px;
                              padding-right: 60px;
                              padding-bottom:60px;
                              padding-left: 60px;
                          }
                        h2{
                          font-size: 3.1em;
                          padding-top:30px;
                          padding-bottom:30px;
                          padding-left: 300px;                    

                         }
                         #admin{

                          font-size: 2.3em;

                         }
                         #usuario{

                          font-size: 2.3em;

                         }
                         #grupo{

                          padding-left: 100px;

                         }


                    </style>
                
            </div>
        </div>
</div>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

</body>
</html>
