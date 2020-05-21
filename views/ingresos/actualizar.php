<?php (TEMPLATE)::header();?>
	<body>
		<?=empty( $GLOBALS['mensaje'])? "" : "<p>". $GLOBALS['mensaje']."</p>"?>
	<div class="container mx-auto  text-center w-full mt-2">
        <div class="o-hidden border-0 shadow-lg m-5">
          <div class="p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="">
                <div class="p-5">
                  
                  <div class="text-center">
                    <h1 class="text-2xl text-gray-900 mb-4">INGRESO: <span class='font-semibold underline'><?=$ingreso->numero_autorizacion?></span>, 
                    ID # <span class='font-semibold'><?=$ingreso->id?></span></h1>
                  </div>

                  <form method="post" action="/ingreso/update">
                  <!-- id del usuario a modificar -->
					        <input type="hidden" name="id" value="<?=$ingreso->id?>">

                  <div class="flex justify-center bg-gray-200">
                    <div class="text-gray-700 text-center bg-gray-400 px-2 py-2 m-auto">
                      <div class="mb-2">
                        <label for="fecha_ingreso" class='text-xs'>FECHA INGRESO:</label>
                            <input type="date" name="fecha_ingreso" value="<?=$ingreso->fecha_ingreso?>" class="align-middle ml-1 rounded font-semibold text-gray-800 ml-1 p-1" id="exampleFirstName">
                      </div>
                    </div>
                    <div class="text-gray-700 text-center bg-gray-400 px-2 py-2 m-auto">
                      <div class="mb-2">
                        <label for="fecha_alta" class='text-xs'>FECHA ALTA:</label>
                          <input type="date" name="fecha_alta" value="<?=$ingreso->fecha_alta?>"  class="align-middle ml-1 rounded font-semibold text-gray-800 ml-1 p-1" id="exampleFirstName">
                      </div>
                    </div>
                    <div class="text-gray-700 text-center bg-gray-400 px-2 py-2 m-auto">
                      <div class="mb-2">
                        <label for="fecha_comunicación" class='text-xs'>FECHA COMUNICACION:</label>
                          <input type="date" value="<?=$ingreso->fecha_comunicación?>" name="fecha_comunicación"  class="align-middle ml-1 rounded font-semibold text-gray-800 ml-1 p-1" id="exampleFirstName">
                      </div>
                    </div>
                    <div class="text-gray-700 text-center bg-gray-400 px-2 py-2 m-auto">
                      <div class="mb-2">
                        <label for="AUTORIZADO HASTA" class='text-xs'>AUTORIZADO HASTA:</label>
                          <input type="date" value="<?=$ingreso->contraseña?>" name="autorizado_hasta"  class="align-middle ml-1 rounded font-semibold text-gray-800 ml-1 p-1" id="exampleLastName" >
                      </div>
                    </div>
                    <div class="text-gray-700 text-center bg-gray-400 px-2 py-2 m-auto">
                      <div class="mb-2">
                      <label for="dias_autorizados" class='text-xs'>DIAS AUTORIZADOS:</label>
                        <input type="number"name="dias_autorizados" value="<?=$ingreso->dias_autorizados?>"  class="w-20 text-center align-middle ml-1 rounded font-semibold text-gray-800 ml-1 p-1"  id="exampleInputEmail">
                      </div>
                    </div>
                    <div class="text-gray-700 text-center bg-gray-400 px-2 py-2 m-auto">
                      <div class="mb-2">
                      <label for="dias_prorrogados" class='text-xs'>DIAS PRORROGADOS:</label>
                        <input type="number" name="dias_prorrogados" value="<?=$ingreso->dias_prorrogados?>"  class="w-20 text-center align-middle ml-1 rounded font-semibold text-gray-800 ml-1 p-1" id="exampleInputEmail">
                      </div>
                    </div>
                  </div>
                  <hr>
                  <div class="flex justify-center bg-gray-200">
                    <div class="text-gray-700 text-center bg-gray-400 px-2 py-2 m-auto">
                      <div class="mb-2">
                        <label for="asegurado" class='text-xs'>ASEGURADO:</label>
                            <input type="text" name="asegurado" value="<?=$ingreso->asegurado?>" class="w-40 align-middle ml-1 rounded font-semibold text-gray-800 ml-1 p-1" id="exampleFirstName">
                      </div>
                    </div>
                    <div class="text-gray-700 text-center bg-gray-400 px-2 py-2 m-auto">
                      <div class="mb-2">
                        <label for="diagnostico" class='text-xs'>DIAGNÓSTICO:</label>
                          <input type="text" name="diagnostico" value="<?=$ingreso->diagnostico?>"  class="align-middle ml-1 rounded font-semibold text-gray-800 ml-1 p-1" id="exampleFirstName">
                      </div>
                    </div>
                    <div class="text-gray-700 text-center bg-gray-400 px-2 py-2 m-auto">
                      <div class="mb-2">
                        <label for="fecha_comunicación" class='text-xs'>HOSPITAL:</label>
                          <input type="text" value="<?=$ingreso->hospital?>" name="hospital"  class="align-middle ml-1 rounded font-semibold text-gray-800 ml-1 p-1" id="exampleFirstName">
                      </div>
                    </div>
                    <div class="text-gray-700 text-center bg-gray-400 px-2 py-2 m-auto">
                      <div class="mb-2">
                        <label for="medico_responsable" class='text-xs'>MÉDICO:</label>
                          <input type="text" value="<?=$ingreso->medico_responsable?>" name="medico_responsable" class="w-40 align-middle ml-1 rounded font-semibold text-gray-800 ml-1 p-1" id="exampleLastName" >
                      </div>
                    </div>
                    <div class="text-gray-700 text-center bg-gray-400 px-2 py-2 m-auto">
                      <div class="mb-2">
                      <label for="tipo_ingreso" class='text-xs'>TIPO INGRESO:</label>
                        <input type="text"name="tipo_ingreso" value="<?=$ingreso->tipo_ingreso?>" class="w-40 text-center align-middle ml-1 rounded font-semibold text-gray-800 ml-1 p-1"  id="exampleInputEmail">
                      </div>
                    </div>
                    <div class="text-gray-700 text-center bg-gray-400 px-2 py-2 m-auto">
                      <div class="mb-2">
                      <label for="ingreso_rechazado" class='text-xs'>RECHAZADO:</label>
                        <input type="text" name="ingreso_rechazado" value="<?=$ingreso->ingreso_rechazado?>" class="w-12 text-center align-middle ml-1 rounded font-semibold text-gray-800 ml-1 p-1" id="exampleInputEmail">
                      </div>
                    </div>
                  </div>
                  <hr>
                  <div class="flex justify-center bg-gray-200">
                    <div class="text-gray-700 text-center bg-gray-400 px-2 py-2 m-auto">
                      <div class="mb-2">
                        <label for="observaciones" class='text-xs'>OBSERVACIONES:</label>
                            <input type="text" name="observaciones" value="<?=$ingreso->observaciones?>" class="align-middle ml-1 rounded font-semibold text-gray-800 ml-1 p-1" id="exampleFirstName">
                      </div>
                    </div>
                    <div class="text-gray-700 text-center bg-gray-400 px-2 py-2 m-auto">
                      <div class="mb-2">
                        <label for="propuesta_denegacion" class='text-xs'>DENEGACIÓN:</label>
                          <input type="text" name="propuesta_denegacion" value="<?=$ingreso->propuesta_denegacion?>"  class="text-center w-12 align-middle ml-1 rounded font-semibold text-gray-800 ml-1 p-1" id="exampleFirstName">
                      </div>
                    </div>
                    <div class="text-gray-700 text-center bg-gray-400 px-2 py-2 m-auto">
                      <div class="mb-2">
                        <label for="nhc" class='text-xs'>NHC:</label>
                          <input type="text" value="<?=$ingreso->nhc?>" name="nhc" class="align-middle ml-1 rounded font-semibold text-gray-800 ml-1 p-1" id="exampleFirstName">
                      </div>
                    </div>
                    <div class="text-gray-700 text-center bg-gray-400 px-2 py-2 m-auto">
                      <div class="mb-2">
                        <label for="medico_responsable" class='text-xs'>MÉDICO:</label>
                          <input type="text" value="<?=$ingreso->medico_responsable?>" name="medico_responsable" class="w-40 align-middle ml-1 rounded font-semibold text-gray-800 ml-1 p-1" id="exampleLastName" >
                      </div>
                    </div>
                    <div class="text-gray-700 text-center bg-gray-400 px-2 py-2 m-auto">
                      <div class="mb-2">
                      <label for="tipo_ingreso" class='text-xs'>TIPO INGRESO:</label>
                        <input type="text"name="tipo_ingreso" value="<?=$ingreso->tipo_ingreso?>" class="w-40 text-center align-middle ml-1 rounded font-semibold text-gray-800 ml-1 p-1"  id="exampleInputEmail">
                      </div>
                    </div>
                    <div class="text-gray-700 text-center bg-gray-400 px-2 py-2 m-auto">
                      <div class="mb-2">
                      <label for="ingreso_rechazado" class='text-xs'>RECHAZADO:</label>
                        <input type="text" name="ingreso_rechazado" value="<?=$ingreso->ingreso_rechazado?>" class="w-12 text-center align-middle ml-1 rounded font-semibold text-gray-800 ml-1 p-1" id="exampleInputEmail">
                      </div>
                    </div>
                  </div>
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








