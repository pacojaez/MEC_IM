<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Lista de mascotas</title>
		<script src="https://kit.fontawesome.com/b96ccb0f2a.js" crossorigin="anonymous"></script>
		<link href="/css/sb-admin-2.min.css" rel="stylesheet">
    	<link href="/css/bootstrap.min.css" rel="stylesheet">
    	<link href="/css/heroic-features.css" rel="stylesheet">
    	<link href="/css/estilos.css" rel="stylesheet">
	</head>
	<body>
		<?php 
		  (TEMPLATE)::header("Lista de mascotas");
		  (TEMPLATE)::nav();
		?> 
		<div class="container">
		<br>
		<h2>Lista de mascotas</h2>
			
		<table class="table table-hover">
			<tr class="table-active">
				<th>Nombre</th>
				<th>Sexo</th>
				<th>Biografía</th>
				<th>Nacimiento</th>
				<th>Fallecimiento</th>
				<th>Operaciones</th>
			</tr>
    		<?php 
    		       foreach($mascotas as $mascota){
    			   echo "<tr>";
    			    
    			   echo "<td>$mascota->nombre</td>";
    			   echo "<td>$mascota->sexo</td>";
    			   echo "<td>$mascota->biografia</td>";
    			   echo "<td>$mascota->fechanacimiento</td>";
    			   echo "<td>$mascota->fechafallecimiento</td>";
    			   echo "<td>";
    			   echo "<a href='/mascota/show/$mascota->id'><i class='fas fa-search' style='color:black'></i></a>";
    			   
    			   if(Login::get() && Login::get()->id==$mascota->idusuario || Login::hasPrivilege(500)){
    			     echo " - <a href='/mascota/edit/$mascota->id'><i class='fas fa-edit' style='color:black'></i></a>";
                     echo " - <a href='/mascota/delete/$mascota->id'><i class='fas fa-trash-alt' style='color:black'></i></a>";}
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
