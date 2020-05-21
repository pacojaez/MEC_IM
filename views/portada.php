<?php 
	(TEMPLATE)::putHead("Identificación"); 		  
?>  
			<div class="w-screen h-56 bg-gray-200">
			
				<h1 class="font-extrabold text-4xl text-center p-4">App de Gestión</h1>
			   	<h2 class="font-bold text-xl text-center p-2">En este proyecto hemos usado las siguientes tecnologías y herramientas de programación:</h2>
				   <div class="flex flex-row bg-gray-200 justify-between mx-4">
						<div class="text-gray-700 text-center px-4 py-2 m-2">
			   				<img src="../assets/img/tools/html5.png" alt="html5 logo" class='w-20 h-20'>
						</div>
						<div class="text-gray-700 text-center px-4 py-2 m-2">
			   				<img src="../assets/img/tools/css3.png" alt="css3 logo" class='w-20 h-20'>
						</div>
						<div class="text-gray-700 text-center px-4 py-2 m-2">
			   				<img src="../assets/img/tools/js.png" alt="js logo" class='w-20 h-20'>
						</div>
						<div class="text-gray-700 text-center px-4 py-2 m-2">
			   				<img src="../assets/img/tools/php.png" alt="php logo" class='w-20 h-20'>
						</div>
						<div class="text-gray-700 text-center px-4 py-2 m-2">
			   				<img src="../assets/img/tools/sql.png" alt="sql logo" class='w-20 h-20'>
						</div>
						<div class="text-gray-700 text-center px-4 py-2 m-2">
			   				<img src="../assets/img/tools/tailwind.png" alt="tailwind logo" class='w-20 h-20'>
						</div>
						<div class="text-gray-700 text-center px-4 py-2 m-2">
			   				<img src="../assets/img/tools/nodejs.png" alt="nodejs logo" class='w-20 h-20'>
						</div>
						<div class="text-gray-700 text-center px-4 py-2 m-2">
			   				<img src="../assets/img/tools/vsc.jpg" alt="vsc logo" class='w-20 h-20'>
						</div>
						<div class="text-gray-700 text-center px-4 py-2 m-2">
			   				<img src="../assets/img/tools/atom.jpg" alt="atom logo" class='w-20 h-20'>
						</div>
						<div class="text-gray-700 text-center px-4 py-2 m-2">
			   				<img src="../assets/img/tools/mysqlworkbench.jpg" alt="mysqlworkbench logo" class='w-20 h-20'>
						</div>
						<div class="text-gray-700 text-center px-4 py-2 m-2">
			   				<img src="../assets/img/tools/github.png" alt="github logo" class='w-20 h-20'>
						</div>
					</div>
					<div class="flex flex-row bg-gray-200 justify-center mx-12 my-5">
					<h3>El proyecto trata de dar solución a la gestión de informes de una compañía aseguradora. No vamos a extendernos
					en todos los casos de uso del proyecto. Cuenta con 4 tablas y relaciones de uno a uno, un ingreso tiene un asegurado,
					un hospital y un diagnóstico. Se realiza un CRUD en cada una de las tablas y se arrojan los datos que necesitan los
					usuarios de la aplicación.</h3>
					</div>
					<div class="flex flex-row bg-gray-200 justify-center mx-12 my-5">
					<h3>No tiene diseño responsive ya que es una aplicación de escritorio para gestión</h3><br>
					</div>
					<div class="flex flex-row bg-gray-200 justify-center mx-12 my-5">
					<h3>El proyecto se ha desarrollado sobre el framework realizado en el CIFO Vallés en 2020</h3><br>
					</div>
					<div class="flex flex-row bg-gray-200 justify-center mx-12 my-5">
					<h4 class='font-bold underline'>TODO</h4>
					</div>
					<div class="flex flex-row bg-gray-200 justify-center mx-12 my-5">
						<ul>
							<li>LOGIN CON DIVERSOS NIVELES DE PERMISO: Admin, Gestor, Coordinador, Usuario</li>
							<li>EXPORTACIÓN A PDF, EXCEL Y WORD DE LOS DATOS MOSTRADOS EN PANTALLA</li>
							<li>GENERAR UN FOLDER POR CADA INFORME Y GUARDAR LO ARCHIVO DE DICHO INFORME EN ESE FOLDER</li>
							<li>LINK A GITHUB</li>
							<li>Compilar el css</li>
						</ul>
					</div>
					<div class="flex flex-row bg-gray-200 justify-center mx-12 my-5">
						<a href="/login"><button class='text-center bg-blue-400 rounded w-28 px-4 py-2 font-extrabold hover:bg-blue-300'>ENTRAR</button></a>
					</div>

				   
    		<!--<div class="alert alert-dismissible alert-success">
  				<button type="button" class="close" data-dismiss="alert">&times;</button>
  				<strong>
  					<?php
    		          echo Login::get()?
    		          "<p>Identificado como ".Login::get()->usuario."</p>":
    		          "<p>No estás identificado</p>";
    		          ?>
    		   </strong>
    		  <?php
    		  echo Login::isAdmin()?
        		  "<p>Eres administrador todopoderoso</p>":
        		  "<p>No eres admin</p>";
    		  ?> <a href="<?="/usuario/show/".Login::get()->id?>" class="alert-link">
    		  <?php
    		  echo Login::hasPrivilege(500)?
        		  "<p>Aqui puedes ver tu perfil</p>":
        		  "<p>Podrias ver tu perfil pero no estas logeado</p>";
    		 ?></a>.
			</div>-->
    		<!--<p class='mb-10'>Esta es una aplicación de prueba para comprender el MVC.</p>-->
    		</div>
    		<?php
    		  (TEMPLATE)::footer();
    		?>
    	</body>

    </html>
