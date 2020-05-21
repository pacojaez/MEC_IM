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
          <h1 class="font-bold mb-6 text-3xl">¿Olvidate tu clave?</h1>
          <h3 class="mb-6 font-semibold">Cosas que pasan, ya lo sabemos. Identificate y te generaremos una nueva clave!</h3>
          <form class="user" method="post" action="/forgotpassword/send">
          <div class="font-semibold text-gray-800 text-2xl mb-4">
            <label for="usuario" class="text-2xl mr-10">USUARIO</label>
            <input type="text" name="usuario" required class="shadow-inner rounded-full p-2 focus:shadow-outline focus:bg-blue-100" placeholder="Usuario o Email">
          </div>
          <div class="font-semibold text-gray-800 text-2xl mb-6">
             <label for="email" class="text-2xl mr-16">EMAIL</label>
             <input type="email" name="email" required class="shadow-inner rounded-full p-2 focus:shadow-outline focus:bg-blue-100" placeholder="Password">
          </div>
         
          <input type="submit" name="generar" value="Generar nueva clave" class="font-bold bg-blue-500 p-3 rounded-full mb-6 hover:bg-blue-400">
          <hr>
          </form>
        </div>
      </div>
    </div>    
    <!--fin main -->
	</body>
	
</html>