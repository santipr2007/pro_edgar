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
  <h5> << DESGLOSE DE DIRECCIONES >></h5>
    <div class="col-sm-12">
		<br/>
		<table class="table">
		  <thead>
			<tr>
			  <th scope="col">IDDIRECCION</th>
			  <th scope="col">DIRECCION</th>
        <th scope="col">IDCLIENTE</th>
			  <th scope="col">NOMBRE</th>		
        <th scope="col">NIT</th>	  
			</tr>
		</thead>
		<tbody >
		<?php
    require('conexion_prs.php');
    $sentencia_prs = "SELECT direccion.iddireccion,
    direccion.ubicacion,
    direccion.referencia,
    cliente.Nombre,
    cliente.NIT
    FROM direccion inner JOIN cliente
    ON direccion.Cliente_idCliente = cliente.idCliente";
    $consulta_prs = mysqli_query($conexion_prs, $sentencia_prs);
    while($valor_prs = mysqli_fetch_assoc($consulta_prs))
    {
      echo"<tr>";	
      echo"<td>".$valor_prs['iddireccion']."</td>";
      echo"<td>".$valor_prs['nombre']."</td>";
      echo"<td>".$valor_prs['Cliente_idCliente']."</td>";
      echo"<td>".$valor_prs['Nombre']."</td>";
      echo"<td>".$valor_prs['NIT']."</td>";
      echo"</tr>";
    }
    ?>
			
    </div>
  </div>
</div>

</body>
</html>
