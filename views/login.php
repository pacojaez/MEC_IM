		<?php 
		  (TEMPLATE)::putHead("Identificación"); 		  
		?>  
    <!-- container -->
    <div class="grid grid-cols-2 gap-2 max-width-full text-center mr-10 ml-4 mt-20">

    <!-- image -->
      <div class="p-2 justify-center h-full rounded-md overflow-hidden -mt-20 ml-16">
        <div class="text-center p-2 ml-4">
          <img class="object-fill max-h-screen" src="assets\img\bgmicroscopio.jpg" alt="microscopio"/>
        </div>
      </div>
      
    <!-- login form -->
      <div class="p-2 -ml-24 mr-10">
        <div class="text-gray-700 text-center bg-gray-400 p-20 rounded-md shadow-xl">
          <h1 class="font-bold mb-12 text-3xl">¡¡Bienvenido de nuevo!!</h1>
          <form class="user" method="post" action="/login/login">
          <div class="font-semibold text-gray-800 text-2xl mb-4">
            <label for="usuario" class="text-2xl mr-6">USUARIO</label>
            <input type="text" name="usuario" required class="ml-8 shadow-inner rounded-full p-2 focus:shadow-outline focus:bg-blue-100" placeholder="Usuario o Email">
          </div>
          <div class="font-semibold text-gray-800 text-2xl mb-4">
             <label for="password" class="text-2xl mr-6">PASSWORD</label>
             <input type="password" name="clave" required class="shadow-inner rounded-full p-2 focus:shadow-outline focus:bg-blue-100" placeholder="Password">
          </div>
          <div class="font-semibold text-gray-800 text-2xl mb-4">
            <div class="">
              <input type="checkbox" class="" id="customCheck">
              <label class="text-xl italic" for="customCheck">Recuerdame</label>
            </div>
          </div>
          <input type="submit" name="identificar" value="Identificarse" class="font-bold bg-blue-500 p-3 rounded-full mb-6 hover:bg-blue-400">
          <hr>
          </form>
          <div class="text-center mt-4">
            <a href="/forgotpassword" class="cursor-pointer font-semibold hover:font-bold hover:underline" href="forgot-password.html">¿Olvidaste tu clave?</a>
          </div>
          <div class="text-center mt-4">
            <a class="cursor-pointer font-semibold hover:font-bold hover:underline" href="/usuario/create">Crear Cuenta</a>
          </div>
        </div>
      </div>
    </div>    
    <!--fin main -->
	</body>
	
</html>