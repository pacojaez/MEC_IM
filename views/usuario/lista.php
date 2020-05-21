<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Actualizar datos de usuarios</title>
		<script src="https://kit.fontawesome.com/b96ccb0f2a.js" crossorigin="anonymous"></script>
		<link href="/css/sb-admin-2.min.css" rel="stylesheet">
    	<link href="/css/bootstrap.min.css" rel="stylesheet">
    	<link href="/css/heroic-features.css" rel="stylesheet">
    	<link href="/css/estilos.css" rel="stylesheet">
		<style>
		  form label{
		      display: inline-block;
		      min-width: 100px;
		      padding: 5px;
		  }
		</style>
	</head>
	<body>
		<?php 
		  (TEMPLATE)::header("Usuarios");
		  (TEMPLATE)::nav();
		?> 
		<br>
		<div class="container"> 
		<h2>Lista de usuarios</h2>
			
		<table class="table table-hover">
			<tr class="table-active">
				<th>Usuario</th>
				<th>Nombre</th>
				<th>Apellidos</th>
				<th>Operaciones</th>
			</tr>
			
    		<?php foreach($usuarios as $usuario){
    			   echo "<tr>";
    			   echo "<td>$usuario->usuario</td>";
    			   echo "<td>$usuario->nombre</td>";
    			   echo "<td>$usuario->apellido1 $usuario->apellido2</td>";
    			   echo "<td>";
    			   echo " <a href='/usuario/show/$usuario->id'><i class='fas fa-search' style='color:black'></i></a>";
    			   echo " - <a href='/usuario/edit/$usuario->id'><i class='fas fa-edit' style='color:black'></i></a>";
    			   echo " - <a href='/usuario/delete/$usuario->id'><i class='fas fa-trash-alt' style='color:black'></i></a>";
    			   echo "</td>";
    			   echo "</tr>";
    		}?>
		</table>
		</div>
		<br>
		<?php 
		  (TEMPLATE)::footer();
		?>
	</body>
</html>

