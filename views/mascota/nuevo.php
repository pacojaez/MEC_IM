<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Registro de mascotas</title>
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
		  (TEMPLATE)::header("Registro de mascotas");
		  (TEMPLATE)::nav();
		?>
		 <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-5 d-none d-lg-block bg-mascotacreate-image"></div>
              <div class="col-lg-7">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Nueva mascota</h1>
                  </div>
                  <form class="user" method="post" action="/mascota/store">
                  <input type="hidden" name="idusuario" value="<?= Login::get($id);?>">
                  <input type="hidden" name="idraza" value="<?=$mascota->idraza?>">
                    <div class="form-group">
                        <div class="form-group">
                            <input type="text" name="nombre" class="form-control form-control-user" id="exampleFirstName" placeholder="Nombre">
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
                          <input type="text" class="form-control form-control-user" name="biografia" id="exampleInputEmail" placeholder="Biografia">
                        </div>                       
                        <div class="form-group row">
                          <div class="col-sm-6 mb-3 mb-sm-0">
                          <label>Fecha nacimiento</label>
                            <input type="date" class="form-control form-control-user" name="fechanacimiento" id="exampleInputPassword" placeholder="Fecha nacimiento">
                          </div>
                          <div class="col-sm-6">
                          <label>Fecha fallecimiento</label>
                            <input type="date" class="form-control form-control-user" name="fechafallecimiento" id="exampleRepeatPassword" placeholder="Fecha fallecimiento">
                          </div>
                        </div>
                        <div class="row">
                        <label class="col-md-3 mb-3">Raza-Tipo:</label>
            			<select name='idraza' class="form-control col-md-4 mb-3">
            			<?php 
            			foreach ($razas as $raza)
            			    echo "<option value='$raza->id' name='$raza->nombre'>$raza->nombre</option>";
            			?>
            			</select>
        			</div>
                    	<input type="submit" name="guardar" value="Guardar" class="btn btn-primary btn-user btn-block">
                    	<hr>
       
        				<a class="btn btn-primary" href="/mascota/list">Volver al listado de mascotas</a>
                    </div>
                  </form>
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

