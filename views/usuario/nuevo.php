<?php
(TEMPLATE)::Puthead("Portada");
?>
<!-- container -->
<div class="grid grid-cols-2 gap-2 max-width-full text-center mr-10 ml-4 mt-10">

<!-- image -->
  <div class="p-2 justify-center h-full rounded-lg overflow-hidden mt-20 ml-2">
    <div class="text-center p-2 ml-4">
      <img class="object-fill max-h-screen overflow-hidden" src="..\assets\img\bglaboratory.jpg" alt="microscopio"/>
    </div>
  </div>
  
<!-- login form -->
  <div class="p-2 -ml-8 mr-10">
    <div class="text-gray-700 text-center bg-gray-400 p-8 rounded-md shadow-xl">
      <h1 class="font-bold mb-6 text-3xl">CREAR CUENTA</h1>
      <form class="user" method="post" action="/usuario/store">
      <div class="font-semibold text-gray-800 text-xl mb-4">
        <label for="usuario" class="text-2xl justify-start">USUARIO</label>
        <input type="text" name="usuario" required class="ml-12 justify-end shadow-inner rounded-full p-2 focus:shadow-outline focus:bg-blue-100">
      </div>
      <div class="font-semibold text-gray-800 text-xl mb-4">
        <label for="email" class="text-2xl justify-start">EMAIL</label>
        <input type="text" name="email" required class="ml-20 shadow-inner rounded-full p-2 focus:shadow-outline focus:bg-blue-100">
      </div>
      <div class="font-semibold text-gray-800 text-xl mb-4">
         <label for="password" class="text-2xl justify-start">PASSWORD</label>
         <input type="password" name="clave" required class="ml-6 shadow-inner rounded-full p-2 focus:shadow-outline focus:bg-blue-100" >
      </div>
      <div class="font-semibold text-gray-800 text-xl mb-4">
        <label for="NOMBRE" class="text-2xl justify-start">NOMBRE</label>
        <input type="text" name="nombre" required class="ml-12 shadow-inner rounded-full p-2 focus:shadow-outline focus:bg-blue-100">
      </div>
      <div class="font-semibold text-gray-800 text-xl mb-4">
        <label for="apellido1" class="text-2xl justify-start">APELLIDO</label>
        <input type="text" name="apellido1" required class="ml-10 shadow-inner rounded-full p-2 focus:shadow-outline focus:bg-blue-100" >
      </div>
      <div class="font-semibold text-gray-800 text-xl mb-6">
        <label for="apellido2" class="text-2xl justify-start">APELLIDO</label>
        <input type="text" name="apellido2" required class="ml-10 shadow-inner rounded-full p-2 focus:shadow-outline focus:bg-blue-100">
      </div>
      <input type="submit" name="guardar" value="Guardar" class="cursor-pointer font-bold bg-blue-500 p-2 px-6 rounded-full mb-6 hover:bg-blue-400">
      <hr>
      </form>
      <div class="text-center mt-4">
        <a href="/forgotpassword" class="cursor-pointer font-semibold hover:font-bold hover:underline" href="forgot-password.html">¿Olvidaste tu clave?</a>
      </div>
    </div>
  </div>
</div>    
<!--fin main -->
</body>

</html>