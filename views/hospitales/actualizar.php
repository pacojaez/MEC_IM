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
                    <h1 class="text-2xl text-gray-900 mb-8">Formulario de edición de Datos del Hospital: <span class='font-semibold underline'><?=$hospital->nombre?></span>, 
                    ID # <span class='font-semibold'><?=$hospital->id?></span></h1>
                  </div>
                  <form method="post" action="/hospital/update">
                  <!-- id del usuario a modificar -->
					        <input type="hidden" name="id" value="<?=$hospital->id?>">
                    <div class="row">
                    <div class="mb-6">
                      <label for="nombre">NOMBRE:</label>
                          <input type="text" name="nombre" value="<?=$hospital->nombre?>" class="ml-6 rounded font-semibold text-gray-800 ml-2 p-2" id="exampleFirstName">
                    </div>
                    <div class="mb-6">
                      <label for="provincia">PROVINCIA:</label>
                        <input type="text" name="provincia" value="<?=$hospital->provincia?>" class="ml-2 rounded font-semibold text-gray-800 ml-2 p-2" id="exampleFirstName">
                    </div>
                    <div class="mb-6">
                      <label for="email">EMAIL:</label>
                        <input type="email" value="<?=$hospital->email?>" name="email" class="ml-12 rounded font-semibold text-gray-800 ml-2 p-2" id="exampleFirstName">
                     </div>
                    <div class="mb-6">
                      <label for="contraseña">CONTRASEÑA:</label>
                        <input type="text" value="<?=$hospital->contraseña?>" name="contraseña" class="rounded font-semibold text-gray-800 ml-2 p-2" id="exampleLastName" >
                    </div>
                    </div>
                    <div class="mb-6">
                    <label for="telefono">TELÉFONO:</label>
                      <input type="text" value="<?=$hospital->telefono?>" class="ml-2 rounded font-semibold text-gray-800 ml-2 p-2" name="telefono" id="exampleInputEmail">
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








