<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Borrar mascota</title>
		<link href="/css/sb-admin-2.min.css" rel="stylesheet">
    	<link href="/css/bootstrap.min.css" rel="stylesheet">
    	<link href="/css/heroic-features.css" rel="stylesheet">
    	<link href="/css/estilos.css" rel="stylesheet">
	</head>
	
	<body>
		<?php 
		  (TEMPLATE)::header("Borrar mascota");
		  (TEMPLATE)::nav();
		?>  
		<div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
              <div class="col-lg-7">
                <div class="p-5">
                  <form class="user" method="post" action="/mascota/destroy">
                  	<h3>Confirmar el borrado de la mascota <?=$mascota->nombre?>.</h3>
					<input type="hidden" name="id" value="<?=$id?>">
        			
                    <div class="form-group">
                    	<input type="submit" name="borrar" value="Borrar" class="btn btn-primary btn-user btn-block">
                    	<hr>
                    	<a class="btn btn-primary" href="/mascota/show/<?=$mascota->id?>">Detalles</a> 
        				<a class="btn btn-primary" href="/mascota/list">Volver al listado de mascotas</a>
                    </div>
                  </form>
                  <hr>
                </div>
              </div>
            </div>
          </div>
        </div> 
        
      </div>				
		<br>
		<?php 
		  (TEMPLATE)::footer();
		?>
	</body>
	
</html>
