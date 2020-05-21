<?php
(TEMPLATE)::header("Portada");
?>
	<body>	
	<h2 class="text-center">Detalles del usuario</h2>		
	<div class="container">
	<div class="row text-center mr-2">
      <div class="col-lg-12 col-md-6 mb-4 text-center">
        <div class="card h-100">
          <div class="card-body">
            <h4 class="card-title"><?="$usuario->usuario ($usuario->email)"?></h4>
            <p class="card-text"><b>Nombre:</b> <?=$usuario->nombre?></p>
            <p class="card-text"><b>Apellidos:</b> <?="$usuario->apellido1 $usuario->apellido2"?></p>          
          </div>
          <div class="card-footer">
            <a class="btn btn-primary" href="/usuario/edit/<?=$usuario->id?>">Editar usuario</a>
			<a class="btn btn-danger" href="/usuario/delete/<?=$usuario->id?>">Borrar usuario</a>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="container">
    <h1 class="text-center">Tus </h1>
    <div class="row text-center">
	</div>
	</div>
		<?php 
		  (TEMPLATE)::footer();
		?>
	</body>
</html>