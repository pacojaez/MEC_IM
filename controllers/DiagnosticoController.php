<?php

//CONTROLADOR
class DiagnosticoController{

    //operación por defecto
    public function index(){

        $this->list(); //nos lleva a la lista de diagnosticos
    }

    //operación para listar todas las diagnosticos
    public function list(){
        $diagnosticos=diagnostico::get(); //recupera las diagnosticos
        $usuario = Login::get();  //recupera el usuario logeado

        //cargar la vista del listado
        include 'views/diagnosticos/lista.php';
    }

    //operación para listar todos las diagnosticos de un usuario
    public function diagnosticosUsuario(){

        $usuario=Login::getUsuario(); //recupera el usuario actual

        $diagnosticos=diagnostico::getAdUser($usuario->id); //recupera las diagnosticos del usuario

        //cargar la vista del listado
        include 'views/diagnosticos/lista.php';
    }

    //muestra una diagnostico
    public function show($id=false){
        //comprobar que me llega el código
        if(!$id)
            throw new Exception("No se indicó la diagnostico a ver.");

            //recuperar la diagnostico con dicho código
            $diagnostico=diagnostico::getdiagnostico($id);

            //comprobar que la diagnostico existe
            if(!$diagnostico)
                throw new Exception("No existe la diagnostico $id.");

            //cargar la vista de detalles
            include 'views/diagnostico/detalles.php';
    }

    //GUARDAR SE HACE EN 2 PASOS
    //PASO 1: muestra el formulario de nueva diagnostico
    public function create(){
        if(!Login::get()){
            throw new Exception('Debes ser admin, supervisor o usuario registrado');
        }

        include 'views/diagnostico/nuevo.php';
    }

    //PASO 2: guarda la nueva diagnostico
    public function store(){
        // comprueba que llegue el formulario con los datos
        if(empty($_POST['guardar']))
            throw new Exception('No se recibieron los datos');
            // comprueba si es admin, supervisor o usuario registrado
            if(!Login::get()){
                throw new Exception('Debes ser admin o usuario registrado');
            }

            $usuario=Login::get(); //recupera el usuario actual


            $diagnostico = new Diagnostico();  //nuevo diagnostico, la info viene por POST
            $diagnostico->nombre=DB::escape($_POST['nombre']);
            $diagnostico->descripcion=DB::escape($_POST['descripcion']);
            $diagnostico->especialidad=DB::escape($_POST['especialidad']);
            $diagnostico->diagnostico=DB::escape($_POST['diagnostico']);
            $diagnostico->IDC_9 = DB::escape($_POST['IDC_9']);
            $diagnostico->quirurgico=DB::escape($_POST['quirurgico']);


            // TRATAMIENTO DEL FICHERO IMAGEN
            /*if(Upload::llegaFichero('imagen'))
                $foto->fichero=Upload::procesar($_FILES['fichero'],'img/diagnosticos',true,0,'image/*');*/

                if(!$diagnostico->guardar()) //guardar en la BDD
                    throw new Exception("No se pudo guardar $diagnostico->nombre");

                    //muestra la vista de éxito
                    $mensaje="Guardado del diagnostico $diagnostico->nombre correcto.";

                    $usuario=Login::get(); //recupera el usuario actual

                    include 'views/exito.php'; //mostrar éxito
    }

    //ACTUALIZAR SE HACE EN 2 PASOS
    //PASO 1: muestra el formulario de edición de una diagnostico
    public function edit(int $id=0){
        $usuario = Login::get(); //recupera el usuario actual
        $diagnostico = diagnostico::getdiagnostico($id);

        if((!$usuario || $usuario->id!=$diagnostico->idusuario) && !Login::isAdmin() && !Login::hasPrivilege(500))
            throw new Exception('No tienes permiso');

            //comprobar que me llega el identificador
            if(!$id)
                throw new Exception("No se indicó el diagnostico a editar.");

                //comprobar que la diagnostico existe
                if(!$diagnostico)
                    throw new Exception("No existe el diagnostico $id.");

                    //cargar la vista del formulario
                    include 'views/diagnostico/actualizar.php';
    }

    //PASO 2: aplica los cambios de la diagnostico
    public function actualizar(){
        //comprueba que llegue el formulario con los datos y no por URL
        if(empty($_POST['actualizar']))
            throw new Exception('No está permitido entrar por la URL');

            //recuperar el anuncio de la BDD
            $diagnostico = diagnostico::getdiagnostico(intval($_POST['id']));

            //comprobar que existe la diagnostico
            if(!$diagnostico)
                throw new Exception('No existe la diagnostico');

                $usuario = Login::get(); //recupera el usuario actual

                if((!$usuario || $usuario->id!=$diagnostico->idusuario) && !Login::isAdmin() && !Login::hasPrivilege(500))
                    throw new Exception('No tienes permiso');

                    $diagnostico->nombre=DB::escape($_POST['nombre']);
                    $diagnostico->descripcion=DB::escape($_POST['descripcion']);
                    $diagnostico->especialidad=DB::escape($_POST['especialidad']);
                    $diagnostico->diagnostico=DB::escape($_POST['diagnostico']);
                    $diagnostico->IDC_9=DB::escape($_POST['IDC_9']);
                    $diagnostico->quirurgico=DB::escape($_POST['quirurgico']);

                    /*//mirar si nos piden eliminar la imagen actual
                    if(!empty($_POST['eliminarimagen'])){
                        //guarda la imagen antigua para borrarla si se actualiza bien la diagnostico
                        $imagenAntigua = $diagnostico->imagen;
                        $diagnostico->imagen = '';
                    }

                    //mirar si nos envían una imagen nueva
                    if(Upload::llegaFichero('imagen')){
                        //guarda la imagen antigua para borrarla si se actualiza bien la diagnostico
                        $imagenAntigua = $diagnostico->imagen;
                        $diagnostico->imagen=Upload::procesar($_FILES['imagen'],'img/diagnosticos',true,0,'image/*');
                    }

                    //intenta realizar la actualización de datos*/
                    if($diagnostico->actualizar()===false){
                        //unlink($diagnostico->imagen); //borra la imagen recién subida
                        throw new Exception("No se pudo actualizar diagnostico: $diagnostico->nombre");
                    }

                    /*if(!empty($imagenAntigua))
                        unlink($imagenAntigua); //borra la imagen antigua*/

                        // mostrar detalles de la diagnostico editada
                        //$this->show($diagnostico->id);
                        $mensaje="Se ha actualizado correctamente";
                        include 'views/exito.php';
    }

    //ELIMINAR SE HACE EN 2 PASOS
    //(si queremos hacerlo con formulario de confirmación)

    //PASO 1: muestra el formulario de confirmación de eliminación
    public function delete(int $id=0){

        $usuario = Login::get(); //recupera el usuario actual
        $diagnostico = diagnostico::getDiagnostico($id);

        if((!$usuario || $usuario->id!=$diagnostico->idusuario) && !Login::isAdmin() && !Login::hasPrivilege(500))
            throw new Exception('No tienes permiso');

            //comprobar que me llega el identificador
            if(!$id)
                throw new Exception("No se indicó la diagnostico a borrar.");

                //comprobar que la diagnostico existe
                if(!$diagnostico)
                    throw new Exception("No existe la diagnostico con id $id.");

                    //ir al formulario de confirmación
                    include 'views/diagnostico/borrar.php';
    }
    //PASO 2: elimina la diagnostico
    public function destroy(){
        //comprobar que me lleguen los datos del formulario y no por URL
        if(empty($_POST['borrar']))
            throw new Exception('No está permitido entrar desde la URL');

            $id=intval($_POST['id']); //recuperar el id vía POST
            
            $usuario = Login::get(); //recupera el usuario actual
            $diagnostico = diagnostico::getDiagnostico($id);

            if((!$usuario || $usuario->id!=$diagnostico->idusuario) && !Login::isAdmin() && !Login::hasPrivilege(500))
                throw new Exception('No tienes permiso');

                //intenta borrar la diagnostico de la BDD
                if(!diagnostico::borrar($id))
                    throw new Exception("No se pudo borrar");

                    //mostrar la vista de éxito
                    $mensaje="Borrado correcto.";

                    include 'views/exito.php'; //mostrar éxito
    }

    public function filtered(){

        //recuperar la lista de diagnosticos
        $campo=empty($_POST['campo'])? 'diagnostico' : $_POST['campo'];
        $valor=empty($_POST['valor'])? '' : $_POST['valor'];
        $orden=empty($_POST['orden'])? 'id' : $_POST['orden'];
        $sentido=empty($_POST['sentido'])? 'ASC' : $_POST['sentido'];

        $diagnosticos = Diagnostico::getFiltered($campo, $valor, $orden, $sentido);

        $usuario=Login::getUsuario(); //recupera el usuario actual

        //mostrar lista
        include 'views/diagnosticos/lista.php';
    }

}
