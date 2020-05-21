<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Detalles de la mascota <?=$mascota->nombre?></title>
		<link href="/css/sb-admin-2.min.css" rel="stylesheet">
    	<link href="/css/bootstrap.min.css" rel="stylesheet">
    	<link href="/css/heroic-features.css" rel="stylesheet">
    	<link href="/css/estilos.css" rel="stylesheet">
    	<script src="js/jquery-3.4.1.min.js"></script>
	</head>
	<body>
	
		<?php 
		  (TEMPLATE)::header("Detalles");
		  (TEMPLATE)::nav();
		?>  
		<br>
		<h2 class="text-center">Detalles de la mascota</h2>
		<div class="container">
        	<div class="row text-center">
              <div class="col-lg-12 col-md-5 mb-2"> 
                <div class="row">
    				<?php
    				foreach($fotosmascota as $foto)
    				echo "<div class='card-body'>
                              <a class='btn btn-danger mb-3' href='/foto/delete/$foto->id'>Borrar foto</a>                                        
                              <figure class='mb-4 p-30'>
                              <img class='imagendetalle' src='/$foto->fichero' alt=''><br>
                              <figcaptation>$foto->ubicacion</figcaptation>
                              </figure>
                          </div>";?>             
                 </div> 
                  <div class="card-body">
                    <h4 class="card-title"><?="$mascota->nombre"?></h4>
                    <p class="card-text"><b>Nombre:</b> <?=$mascota->nombre?></p>
                    <p class="card-text"><b>Sexo:</b> <?="$mascota->sexo"?></p>
                    <p class="card-text"><b>Biografía:</b> <?=$mascota->biografia?></p>
                    <p class="card-text"><b>Fecha Nacimiento:</b> <?="$mascota->fechanacimiento"?></p>
                    <p class="card-text"><b>Fecha Fallecimiento:</b> <?=$mascota->fechafallecimiento?></p>
                  </div>
                  <div class="card-footer">
					 <?php 
					 if(Login::get() && Login::get()->id==$mascota->idusuario || Login::hasPrivilege(500)){
    			     echo "<td><a href='/mascota/edit/$mascota->id'><button class='btn btn-primary p-2 ml-2' >EDITAR</button></a></td>
                     <td><a href='/mascota/delete/$mascota->id'><button class='btn btn-danger p-2 ml-2' >BORRAR</button></a></td>";}  ?>                
                  </div>
              </div>
              
            </div>
        </div>
	
		<?php 
		  (TEMPLATE)::footer();
		?>
	</body>
</html>
