<?php

class Basic{
    // pone el header
    public static function header(string $pagina = ''){?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEC-IM</title>
    <link rel="stylesheet" href="<?=CSSDIRASSETS?>styles.css" />
    <link rel="stylesheet" href="<?=CSSDIRASSETS?>tailwind.css" />
    <link rel="stylesheet" href="<?=CSSDIR?>tailwind.css" />  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
</head>

<body class="bg-gray-200">

    <div class="text-center container max-w-full flex justify-between">
        <a href="/welcome/index"><h1 class="text-4xl font-bold text-center text-blue-600 ml-48">MEC_IM GESTION</h1></a>
        <div class="rounded-full mr-24 bg-blue-200 m-auto">
          <i class="far fa-user p-3 m-auto"></i>
        </div>
    </div>
   
    <nav class="grid grid-cols-4 gap-4 flex items-center flex-shrink-0 text-white max-w-full bg-blue-200" id="nav">
        <div class="col-span-2">
            <div class=''>
                <ul class="flex justify-between">
                    <li class="mr-3">
                        <a class="ml-20 inline-block border border-white rounded hover:border-gray-200 text-gray-900 hover:bg-gray-200 py-2 px-4" href="/hospital/list">HOSPITALES</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block border border-white rounded hover:border-gray-200 text-gray-900 hover:bg-gray-200 py-2 px-4" href="/diagnostico/list">DIAGNÓSTICOS</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block border border-white rounded hover:border-gray-200 text-gray-900 hover:bg-gray-200 py-2 px-4" href="/asegurado/list">ASEGURADOS</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block border border-white rounded hover:border-gray-200 text-gray-900 hover:bg-gray-200 py-2 px-4" href="/ingreso/list">INGRESOS</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-span-2">
            <div class="ml-4 m-2 text-base px-2 py-2 leading-none border rounded text-white border-white float-right">
                <form class="mt-2">
                    <div class="flex flex-wrap ml-8 mb-2">
                        <div class="w-1/3 px-3 mb-4 md:mb-0 inline-block ">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 " for="grid-first-name ">
                        BUSCAR
                        </label>
                         <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-green-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white " id="grid-first-name " type="text " placeholder="P.ejem: 28/393585858 ">
                    </div>
                        <div class="w-1/3 px-3 mb-4 md:mb-0 inline-block ">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 " for="grid-state ">
                          CAMPO
                        </label>
                            <div class="relative ">
                                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 " id="grid-state ">
                            <option>Número Asegurado</option>
                            <option>Nombre Asegurado</option>
                            <option>Edad</option>
                            <option>Fecha Comunicación</option>
                          </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 ">
                                    <svg class="fill-current h-4 w-4 " xmlns="http://www.w3.org/2000/svg " viewBox="0 0 20 20 "><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z "/></svg>
                                </div>
                            </div>
                        </div>
                        <div class="w-1/3 px-3 mb-4 md:mb-0 inline-block ">
                            <button class="hover:font-bold appearance-none block w-full bg-gray-300 text-gray-700 border border-green-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 absolute-center mt-5 " id="grid-zip " type="submit ">BUSCAR</button>
                        </div>
                    </div>
            </div>
        </div>
    </nav>

   <?php } 
        
        // pone el login/logout       
        public static function login(){
            // recupera el usuario identificado mediante el modelo Login
            $identificado = Login::get();
            
            // el enlace depende de si el usuario está identificado o no
           echo $identificado ?
                " <a href='/usuario/show/$identificado->id'><button style='color:light-grey;' type='button' class='btn btn-secondary p-2 ml-2' >Su perfil de $identificado->usuario</button></a>
                  <a href='/login/logout'><button type='button' class='btn btn-secondary p-2 ml-2'>Logout</button></a>":                   
                 "<a href='/login'><button type='button' class='btn btn-primary p-2 ml-2' >Identificarse</button></a>
                  <a href='/usuario/create'><button type='button' class='btn btn-secondary p-2 ml-2'>Registro</button></a>";
                
        }
        
        // pone el footer
        public static function footer(){?>
            <footer class="absolute inset-x-0 bottom-0 h-20 bg-gray-100">	
            	<p class="text-center text-gray-700">App de Gestión 2020</p>
            	<p class="text-center text-gray-700">Framework@CIFO</p>	
            </footer>     
        <?php }

        // pone el footer
        public static function nav(){?>	
            	<p class="text-center text-gray-700">quitar esta funcion</p>            	 
        <?php }

        public static function putHead(string $pagina = ''){?>
        <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>MEC-IM</title>
                <link rel="stylesheet" href="<?=CSSDIRASSETS?>styles.css" />
                <link rel="stylesheet" href="<?=CSSDIRASSETS?>tailwind.css" />
                <link rel="stylesheet" href="<?=CSSDIR?>tailwind.css" />  
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
            </head>

            <body class="bg-gray-200">
       <?php }
    }