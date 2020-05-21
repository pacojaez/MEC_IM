<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Actualizar datos de la mascota <?=$mascota->nombre?></title>
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
		  (TEMPLATE)::header("Actualizar datos de la mascota");
		  (TEMPLATE)::nav();
		?>  
		
		<?=empty( $GLOBALS['mensaje'])? "" : "<p>". $GLOBALS['mensaje']."</p>"?>

		<div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
              <div class="col-lg-7">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Formulario de edición</h1>
                  </div>
                  <form class="user" method="post" action="/mascota/actualizar">
                  <!-- id de la mascota a modificar -->
        			<input type="hidden" name="id" value="<?=$mascota->id?>">
        			<input type="hidden" name="idusuario" value="<?=$mascota->idusuario?>">
        			<input type="hidden" name="idraza" value="<?=$mascota->idraza?>">
        			
                    <div class="form-group">
                        <div class="form-group">
                            <input type="text" name="nombre" value="<?=$mascota->nombre?>" class="form-control form-control-user" id="exampleFirstName" placeholder="Nombre">
                        </div>
              			<div class="form-check">
                          <input class="form-check-input" type="radio" name="sexo" id="exampleRadios1" value="H" checked>
                          <label class="form-check-label" for="exampleRadios1">
                            Hembra
                          </label>                      
                          <input class="form-check-input" type="radio" name="sexo" id="exampleRadios2" value="M">
                          <label class="form-check-label" for="exampleRadios2">
                            Macho
                          </label>
                        </div>               
                        <div class="form-group">
                          <input type="text" class="form-control form-control-user" value="<?=$mascota->biografia?>" name="biografia" id="exampleInputEmail" placeholder="Email">
                        </div>
                        
                        <div class="form-group row">
                          <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="date" class="form-control form-control-user" name="fechanacimiento" id="exampleInputPassword" value="<?=$mascota->fechanacimiento?>" placeholder="Password">
                          </div>
                          <div class="col-sm-6">
                            <input type="date" class="form-control form-control-user" name="fechafallecimiento" id="exampleRepeatPassword" value="<?=$mascota->fechafallecimiento?>" placeholder="Repeat Password">
                          </div>
                        </div>
                    	<input type="submit" name="actualizar" value="Actualizar" class="btn btn-primary btn-user btn-block">
                    	<hr>
                    	<a class="btn btn-primary" href="/mascota/show/<?=$mascota->id?>">Detalles</a> 
        				<a class="btn btn-primary" href="/mascota/list">Volver al listado de mascotas</a>
                    </div>
                  </form>
                  <hr>
                  <div class="row">
                  <div class="col-lg-12">
                	<div class="p-5 text-center">
                		<form class="user" method="post" action="/foto/store" enctype="multipart/form-data">
                          <!-- id de la mascota a modificar -->
                		  <input type="hidden" name="idmascota" value="<?=$mascota->id?>">
                		  <label>SUBE UNA FOTO DE TU MASCOTA</label>
                          <input type="file" name="fichero" class="btn btn-primary btn-user btn-block mb-5">
                		  <label>UBICACIÓN:</label>                         
                          <input type="text" class="form-control form-control-user mb-5" name="ubicacion">          
                    	  <input type="submit" name="guardar" value="Subir" class="btn btn-primary btn-user btn-block mb-5">           		  
                		</form>
                	</div>
                	</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>       
      </div>						
		<?php 
		  (TEMPLATE)::footer();
		?>		
	</body>
</html>
