<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Actualizar datos del usuario <?=$usuario->usuario?></title>
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
		  (TEMPLATE)::header("Actualizar datos del usuario");
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
                  <form class="user" method="post" action="/usuario/update">
                  <!-- id del usuario a modificar -->
					<input type="hidden" name="id" value="<?=$usuario->id?>">
					
                    <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-3">
                        <input type="text" name="usuario" value="<?=$usuario->usuario?>" class="form-control form-control-user" id="exampleFirstName" placeholder="Usuario">
                      </div>
                      <div class="col-sm-6 mb-3 mb-sm-3">
                        <input type="text" name="nombre" value="<?=$usuario->nombre?>" class="form-control form-control-user" id="exampleFirstName" placeholder="Nombre">
                      </div>
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control form-control-user" value="<?=$usuario->apellido1?>" name="apellido1" id="exampleFirstName" placeholder="Apellido">
                      </div>
                      <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" value="<?=$usuario->apellido2?>" name="apellido2" id="exampleLastName" placeholder="Apellido">
                      </div>
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" value="<?=$usuario->email?>" name="email" id="exampleInputEmail" placeholder="Email">
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="password" class="form-control form-control-user" name="clave" id="exampleInputPassword" placeholder="Password">
                      </div>
                      <div class="col-sm-6">
                        <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
                      </div>
                    </div>
                    <?php if(Login::isAdmin()){
                        
                    echo "<h4>Operaciones solo para el admin</h4>
        			<label>Privilegio</label>
        			<input type='number' min='0' max='9999' name='privilegio' 
        				   value='<?=$usuario->privilegio?>'>
        			<br>
        			<input type='checkbox' name='administrador' value='1'";?>
        			<?php (empty($usuario->administrador))? '' : ' checked';
		              echo "<label> Conceder privilegio de administrador</label>
        			<br><br>";
                    }else{?>
                    <input type='hidden' name='privilegio' value='0'>
                    <?php }?>
                    <input type="submit" name="update" value="Actualizar" class="btn btn-primary btn-user btn-block">
                    <hr>
                    
                  </form>
                  <hr>
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








