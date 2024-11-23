<!DOCTYPE html>
<html lang="en">
<head>
  <title>DAWCCBD – CBTis No. 166</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>
<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>Curso de PHP y SQL: Base de Datos</h1>
  <h4>EQUIPO: 5XPROXXX  | https://www.cbtis166.edu.mx/</h4> 
</div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	<div class="btn-group btn-group-lg align-items-center col-12">
	  <a href="index.php" class="btn btn-info btn-lg" role="button">PRINCIPAL</a>
	  <a href="clientes.php" class="btn btn-warning btn-lg" role="button">CLIENTES</a>
	  <a href="pedidos.php" class="btn btn-success btn-lg" role="button">PEDIDOS</a>
	  <a href="menus.php" class="btn btn-primary btn-lg" role="button">MENUS</a>
	</div>	
</nav>

<div class="container" style="margin-top:30px">
  <div class="row">
  <h5> << PRINCIPAL >></h5>
    <div class="col-sm-12">
		<form method="POST">
			<div class="col-lg-12">
				<div class="input-group">
				  <input type="text" name="cliente" placeholder="Ingrese nombres" class="form-control">
				  <span class="input-group-btn">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Busqueda</button>
				  </span>
				</div>
			  </div>
		</form>
		<br/>
		<table class="table">
		  <thead>
			<tr>
			  <th scope="col">idcliente</th>
			  <th scope="col">nombre</th>
			  <th scope="col">NIT</th>
			  
			</tr>
		</thead>
		<tbody >
		<?php
		if(!empty($_POST['cliente']))
		{
			$cadena=$_POST['cliente'];
			require('conexion.php');
			$sentencia="SELECT * FROM cliente";
			$consulta=mysqli_query($conexion,$sentencia);
			if(mysqli_num_rows($consulta)>0)
			{
				while($valor=mysqli_fetch_assoc($consulta))
				{
					echo"<tr>";
					echo"<td>"; echo $valor['idCliente'];
					echo"</td>";
					echo"<td>"; echo $valor['Nombre'];
					echo"</td>";
					echo"<td>"; echo $valor['NIT'];
					echo"</td>";
					echo"</tr>";
				}

			}else
			{
				echo"<tr>";
				echo"<td colspan='4'>No se encontraron registros</td>";
				echo"</tr>";
			}
		}
		?>
    </div>
  </div>
</div>

</body>
</html>
