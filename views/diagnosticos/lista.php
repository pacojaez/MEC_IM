<?php (TEMPLATE)::header();?>

<!--MAIN-->
<div class="font-bold text-4xl text-center">LISTADO DE DIAGNÓSTICOS</div>
    <div class="w-full ml-4 mr-4">
        <form class="w-full" method='POST' action='/diagnostico/filtered'>
            <div class="flex flex-wrap mx-3 mb-6">
                <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    BUSCAR                        
                    </label>
                    <input name='valor' class="appearance-none block w-full bg-gray-200 text-gray-700 border border-green-400 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="P.Ejem: ISQUEMICO TRANSITORIO">
                    <p class="text-green-500 text-xs italic">Puede dejar vacio este campo</p>
                </div>

                <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                      EN
                    </label>
                    <div class="relative">
                        <select name='campo' class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                            <option value='diagnostico'>DIAGNÓSTICO</option>
                            <option value='especialidad'>ESPECIALIDAD</option>
                            <option value='quirurgico'>QUIRÚRGICO</option>
                            <option value='IDC_9'>IDC-9</option>
                            <option value='updated_at'>FECHA ACTUALIZACIÓN</option>
                      </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                </div>

                <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                      ORDENADO POR: 
                    </label>
                    <div class="relative">
                        <select name='orden' class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                            <option value='diagnostico'>DIAGNÓSTICO</option>
                            <option value='especialidad'>ESPECIALIDAD</option>
                            <option value='quirurgico'>QUIRÚRGICO</option>
                            <option value='IDC_9'>IDC-9</option>
                            <option value='updated_at'>FECHA ACTUALIZACIÓN</option>
                      </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                </div>

                <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        BUSCAR
                       </label>
                    <input name='consultar' value='ENVIAR' class="cursor-pointer appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 absolute-center" id="grid-zip" type="submit">
                </div>
            </div>
        </div>
      </form>
   </div>
    <div class="flex my-4 justify-center mx-4">
        <table class="table-auto">
            <thead>
                <tr class="bg-gray-200">
                    <th class="w-1/4 px-4 py-2">DIAGNÓSTICO</th>
                    <th class="w-1/4 px-4 py-2">ESPECIALIDAD</th>
                    <th class="w-1/6 px-4 py-2">QUIRÚRGICO</th>
                    <th class="w-1/6 px-4 py-2">IDC-9</th>
                    <th class="w-1/6 px-4 py-2">ACTUALIZADO</th>
                    <th class="w-1/6 px-4 py-2">EDITAR</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($diagnosticos as $diagnostico):?>
                <tr>
                    <td class="border px-4 py-2"><?=$diagnostico->diagnostico?></td>
                    <td class="border px-4 py-2"><?=$diagnostico->especialidad?></td>
                    <td class="border px-4 py-2"><?=$diagnostico->quirurgico?></td>
                    <td class="border px-4 py-2"><?=$diagnostico->IDC_9?></td>
                    <td class="border px-4 py-2"><?=$diagnostico->updated_at?></td>
                    <td class="border px-4 py-2"><a href="/diagnostico/edit/<?=$diagnostico->id?>"><i class="fas fa-edit"></i></a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
 </div>
