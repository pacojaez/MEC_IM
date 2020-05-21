<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEC-IM</title>
    <link rel="stylesheet" href="../assets/css/styles.css" />
    <link rel="stylesheet" href="./build/tailwind.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
</head>

<body class="bg-gray-100">
    <h1 class="text-4xl font-bold text-center text-blue-600">MEC_IM GESTION</h1>
    <div class="flex items-center flex-shrink-0 text-white max-w-full  bg-teal-500" id="nav">
        <nav class="flex items-center flex-wrap p-6 w-full">
            <ul class="flex justify-between">
                <li class="mr-3">
                    <a class="ml-20 inline-block border border-white rounded hover:border-gray-200 text-gray-900 hover:bg-gray-200 py-2 px-4" href="#">HOSPITALES</a>
                </li>
                <li class="mr-3">
                    <a class="inline-block border border-white rounded hover:border-gray-200 text-gray-900 hover:bg-gray-200 py-2 px-4" href="#">DIAGNÓSTICOS</a>
                </li>
                <li class="mr-3">
                    <a class="inline-block border border-white rounded hover:border-gray-200 text-gray-900 hover:bg-gray-200 py-2 px-4" href="#">GESTIÓN</a>
                </li>
            </ul>
            <div class="max-w-full ml-4 mr-4 text-base px-4 py-2 leading-none border rounded text-white border-white mt-4 ">
                <form class="max-w-full mt-2">
                    <div class="flex flex-wrap ml-20 mb-4">
                        <div class="w-1/3 px-3 mb-6 md:mb-0 inline-block ">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2 " for="grid-first-name ">
                      BUSCAR
                    </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-green-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white " id="grid-first-name " type="text " placeholder="P.ejem: 28/393585858 ">
                        </div>

                        <div class="w-1/3 px-3 mb-6 md:mb-0 inline-block ">
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
                        <div class="w-1/5 px-3 mb-6 md:mb-0 inline-block ">
                            <button class="appearance-none block w-full bg-gray-300 text-gray-700 border border-green-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 absolute-center mt-5 " id="grid-zip " type="submit ">BUSCAR</button>
                        </div>
                    </div>

            </div>

        </nav>
    </div>