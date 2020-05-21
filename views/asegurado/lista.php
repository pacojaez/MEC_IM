<?php (TEMPLATE)::header();?>

<!--MAIN-->
<div class="font-bold text-4xl text-center">LISTADO DE ASEGURADOS</div>
    <div class="w-full ml-4 mr-4">
        <form class="w-full" action="/asegurado/filtered" method="POST">
            <div class="flex flex-wrap mx-3 mb-6">
                <div class="w-full md:w-1/5 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                     Buscar en:
                    </label>
                    <input name='campo' class="appearance-none block w-full bg-gray-200 text-gray-700 border border-green-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Provincia, email, telefono...">
                    <p class="text-green-500 text-xs italic">Puede dejar vacio este campo</p>
                </div>

                <div class="w-full md:w-1/5 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                      Término a buscar:
                    </label>
                    <input name='valor' class="appearance-none block w-full bg-gray-200 text-gray-700 border border-green-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Luis@hospitaldelmar.com, Barcelona ...">
                    <p class="text-green-500 text-xs italic">Puede dejar vacio este campo</p>
                </div>
                <div class="w-full md:w-1/5 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                      Ordenado por:
                    </label>
                    <input name='orden' class="appearance-none block w-full bg-gray-200 text-gray-700 border border-green-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Provincia, email, telefono...">
                    <p class="text-green-500 text-xs italic">Puede dejar vacio este campo</p>
                </div>
                <div class="w-full md:w-1/5 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                     Sentido:
                    </label>
                    <div class="relative">
                      <div class='border border-green-400 rounded'>
                      <select name='sentido' class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                        <option value='ascendente'>ASCENDENTE</option>
                        <option value='descendente'>DESCENDENTE</option>
                      </select>
                      <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 align-center">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg " viewBox="0 0 20 20 "><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z "/></svg>
                       </div>
                      </div>
                    <p class="text-green-500 text-xs italic">Puede dejar vacio este campo</p>
                    </div>
                </div>
                <div class="w-full md:w-1/5 px-3 mt-6 md:mb-0">
                    <input  type="submit" name="buscar" value="BUSCAR" class="cursor-pointer appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 absolute-center" id="grid-zip">
                </div>
            </div>
         </div>
        </form>
    </div>
    <div class="flex my-4 justify-center mx-4">
        <table class="table-auto">
            <thead>
                <tr class="bg-gray-200">
                    <th class="w-1/6 px-4 py-2">NOMBRE</th>
                    <th class="w-1/6 px-4 py-2">APELLIDOS</th>
                    <th class="w-1/6 px-4 py-2">NUMERO POLIZA</th>
                    <th class="w-1/6 px-4 py-2">TIPO POLIZA</th>
                    <th class="w-1/6 px-4 py-2">DIRECCIÓN</th>
                    <th class="w-1/6 px-4 py-2">PROVINCIA</th>
                    <th class="w-1/6 px-4 py-2">FECHA NACIMIENTO</th>
                    <th class="w-1/6 px-4 py-2">EDITAR</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($asegurados as $asegurado):?>
                <tr>
                    <td class="border px-4 py-2"><?=$asegurado->nombre?></td>
                    <td class="border px-4 py-2"><?=$asegurado->apellidos?></td>
                    <td class="border px-4 py-2"><?=$asegurado->numero_poliza?></td>
                    <td class="border px-4 py-2"><?=$asegurado->tipo_poliza?></td>
                    <td class="border px-4 py-2"><?=$asegurado->direccion?></td>
                    <td class="border px-4 py-2"><?=$asegurado->provincia?></td>
                    <td class="border px-4 py-2"><?=$asegurado->fecha_nacimiento?></td>
                    <td class="border px-4 py-2"><a href="/asegurado/edit/<?=$asegurado->id?>"><i class="fas fa-edit"></i></a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>