<?php (TEMPLATE)::header();?>
	<body>
		<?=empty( $GLOBALS['mensaje'])? "" : "<p>". $GLOBALS['mensaje']."</p>"?>
	<div class="container mx-auto  text-center w-full mt-2">
        <div class="o-hidden border-0 shadow-lg m-5">
          <div class="p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class=""></div>
              <div class="">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="text-2xl text-gray-900 mb-8">Formulario de edición de Datos del Asegurado: <span class='font-semibold underline'><?=$asegurado->nombre.' - '.$asegurado->apellidos?></span>, 
                    ID # <span class='font-semibold'><?=$asegurado->id?></span></h1>
                  </div>
                  <form method="post" action="/hospital/update">
                  <!-- id del usuario a modificar -->
					        <input type="hidden" name="id" value="<?=$asegurado->id?>">
                    <div class="row">
                    <div class="mb-6">
                      <label for="nombre" class="justify-end">NOMBRE:</label>
                          <input type="text" name="nombre" value="<?=$asegurado->nombre?>" class="ml-6 rounded font-semibold text-gray-800 ml-2 p-2" id="exampleFirstName">
                    </div>
                    <div class="mb-6">
                      <label for="apellidos" class="justify-end">APELLIDOS:</label>
                        <input type="text" name="apellidos" value="<?=$asegurado->apellidos?>" class="ml-2 rounded font-semibold text-gray-800 ml-2 p-2" id="exampleFirstName">
                    </div>
                    <div class="mb-6">
                      <label for="numero_poliza" class="justify-end">NUMERO POLIZA:</label>
                        <input type="text" value="<?=$asegurado->numero_poliza?>" name="numero_poliza" class="ml-2 rounded font-semibold text-gray-800 ml-2 p-2" id="exampleFirstName">
                     </div>
                    <div class="mb-6">
                      <label for="tipo_poliza" class="justify-end">TIPO POLIZA:</label>
                        <input type="text" value="<?=$asegurado->tipo_poliza?>" name="tipo_poliza" class="rounded font-semibold text-gray-800 ml-2 p-2" id="exampleLastName" >
                    </div>
                    </div>
                    <div class="mb-6">
                    <label for="direccion" class="justify-end">DIRECCIÓN:</label>
                      <input type="text" value="<?=$asegurado->direccion?>" class="ml-2 rounded font-semibold text-gray-800 ml-2 p-2" name="direccion" id="exampleInputEmail">
                    </div>
                    <div class="mb-6">
                    <label for="provincia" class="justify-end">PROVINCIA:</label>
                      <input type="text" value="<?=$asegurado->provincia?>" class="ml-2 rounded font-semibold text-gray-800 ml-2 p-2" name="provincia" id="exampleInputEmail">
                    </div>
                    <div class='justify-center'>
                        <div class='max-w-sm justify-center m-auto max-w-sm'>
                          <input type="submit" name="actualizar" value="Actualizar" class="cursor-pointer rounded-md bg-blue-400 px-4 py-2 mb-4 hover:bg-blue-300 hover:border">
                        </div>
                    </div>                    
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








