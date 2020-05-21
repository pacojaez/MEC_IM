<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Formulario de contacto</title>
		
		<script src="https://www.google.com/recaptcha/api.js"></script>
		<link href="/css/sb-admin-2.min.css" rel="stylesheet">
    	<link href="/css/bootstrap.min.css" rel="stylesheet">
    	<link href="/css/heroic-features.css" rel="stylesheet">
    	<link href="/css/estilos.css" rel="stylesheet">
		<style>
		  form label{
		      display: inline-block;
		      min-width: 120px;
		      padding: 5px;
		  }
		  form textarea{
		      vertical-align: text-top;
		      height: 100px;
		      width: 30%;
		      min-width: 200px;
		      resize:none;
		  }
		</style>
	</head>
	<body>
		<?php 
		  (TEMPLATE)::header("Formulario de contacto");
		  (TEMPLATE)::nav();
		?>  
	<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-contacto-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-2">Contacto</h1>
                    <p class="mb-4">Para lo que necesites, aquí estamos!</p>
                  </div>
                  <form class="user" method="post" action="/contacto/send">
                    <div class="form-group">
                      <input type="email" name="email" required class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email...">
                    </div>
                    <div class="form-group">
                      <input type="text" name="nombre" required class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Nombre...">
                    </div>
                    <div class="form-group">
                      <input type="text" name="asunto" required class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Asunto...">
                    </div>
                    <div class="form-group">
                      <textarea name="mensaje" required class="form-control form-control-user" row="3" col="5" aria-describedby="emailHelp" placeholder="Tu mensaje..."></textarea>
                    </div>
                    <div class="g-recaptcha mb-2" data-sitekey="6LfHIt0UAAAAAFtWr9E4EMA-NOdY4uyUasqmzrNi">
					</div>
                    <input type="submit" name="enviar" value="Enviar" class="btn btn-primary btn-user btn-block">
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="/usuario/create">Crear Cuenta</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="login">¿Ya tiene cuenta? Login!</a>
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








