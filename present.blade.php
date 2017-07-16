<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <link rel="stylesheet" href="main.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <style>
		    .bordeado{
		      	border-bottom: 6px solid;
		    }

		    td {
		    	border-top:2px solid #83ccff;
		    	border-bottom:2px solid #83ccff;
		    	background:#e2f3ff;
		    }

		    #p1{
				font-family:Arial,Helvetica;
				font-size:16px;
				line-height:1em;
				font-weight:bold;
				margin:0;
		    }


		    #td1{
				border-left:2px solid #d6cc90;
				padding-left: 20px;
		    }

		    #td2{
				border-right:2px solid #d6cc90;
		    }

		    table{
		    	background:#ffffff;
		    }

		</style>

	</head>
	<body>
		<table cellspacing="0" cellpadding="0" align="center">
			<tbody>
				<tr>
					<td id="td1">
						<img src="https://raw.githubusercontent.com/Ztuart/Proyecto/master/149458974_1296d66e-e4ab-4740-8a20-a765c0570297.png" class="image" alt="PUCP Delivery" width="180" height="100">
					</td>
					<td id="td2" colspan="3">
						<div style="padding:20px 35px;text-align:justify">
								<p id="p1">Hola, {{$nombre}}!</p>
								<p>Gracias por unirte a la comunidad de PUCP Delivery! Activa tu cuenta para completar tu registro entrando al siguiente enlace	:</p>
			                    <a href="http://127.0.0.1:8000/validarCorreo/?acc={{ $hash }}">https://PUCPDelivery.com/?nd=ra&c=h7zrbau5xx&i=7470623</a>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
	</body>
</html>
