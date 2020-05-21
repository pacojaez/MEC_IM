<?php

//CONTROLADOR 
class MascotaController{
    
    //operación por defecto
    public function index(){
        
        $this->list(); //nos lleva a la lista de mascotas
    }
    
    //operación para listar todas las mascotas
    public function list(){
        $mascotas=Mascota::get(); //recupera las mascotas
        $usuario = Login::get();  //recupera el usuario logeado
        
        //cargar la vista del listado
        include 'views/mascota/lista.php';
    }
    
    //operación para listar todos las mascotas de un usuario
    public function mascotasUsuario(){
        
        $usuario=Login::getUsuario(); //recupera el usuario actual
        
        $mascotas=Mascota::getAdUser($usuario->id); //recupera las mascotas del usuario
        
        //cargar la vista del listado
        include 'views/mascota/lista.php';
    }
    
    //muestra una mascota
    public function show($id=false){
        //comprobar que me llega el código
        if(!$id)
            throw new Exception("No se indicó la mascota a ver.");
            
            //recuperar la mascota con dicho código
            $mascota=Mascota::getMascota($id);
            
            //recupera las fotos de la mascota
            $fotosmascota = Foto::getFotosMascota($id); 
       
            //comprobar que la mascota existe
            if(!$mascota)
                throw new Exception("No existe la mascota $id.");
                
            //cargar la vista de detalles
            include 'views/mascota/detalles.php';
    }
    
    //GUARDAR SE HACE EN 2 PASOS
    //PASO 1: muestra el formulario de nueva mascota
    public function create(){
        if(!Login::get()){
            throw new Exception('Debes ser admin, supervisor o usuario registrado');
        }
        $razas = Raza::get();
        
        include 'views/mascota/nuevo.php';
    }
    
    //PASO 2: guarda la nueva mascota
    public function store(){
        // comprueba que llegue el formulario con los datos
        if(empty($_POST['guardar']))
            throw new Exception('No se recibieron los datos');
            // comprueba si es admin, supervisor o usuario registrado
            if(!Login::get()){
                throw new Exception('Debes ser admin o usuario registrado');
            }
            
            $usuario=Login::get(); //recupera el usuario actual
            
            $mascota = new Mascota();  //nueva mascota, la info viene por POST
            $mascota->nombre=DB::escape($_POST['nombre']);
            $mascota->sexo=DB::escape($_POST['sexo']);
            $mascota->biografia=DB::escape($_POST['biografia']);
            $mascota->fechanacimiento=DB::escape($_POST['fechanacimiento']);
            $mascota->fechafallecimiento=DB::escape($_POST['fechafallecimiento']);
            $mascota->idraza=$_POST['idraza'];
            $mascota->idusuario=$usuario->id;         
          
            // TRATAMIENTO DEL FICHERO IMAGEN
            /*if(Upload::llegaFichero('imagen'))
                $foto->fichero=Upload::procesar($_FILES['fichero'],'img/mascotas',true,0,'image/*');*/
                
                if(!$mascota->guardar()) //guardar en la BDD
                    throw new Exception("No se pudo guardar $mascota->nombre");
                    
                    //muestra la vista de éxito
                    $mensaje="Guardado de la mascota $mascota->nombre correcto.";
                    
                    $usuario=Login::get(); //recupera el usuario actual
                    
                    include 'views/exito.php'; //mostrar éxito
    }
    
    //ACTUALIZAR SE HACE EN 2 PASOS
    //PASO 1: muestra el formulario de edición de una mascota
    public function edit(int $id=0){
        $usuario = Login::get(); //recupera el usuario actual
        $mascota = Mascota::getMascota($id);
        
        if((!$usuario || $usuario->id!=$mascota->idusuario) && !Login::isAdmin() && !Login::hasPrivilege(500))
            throw new Exception('No tienes permiso');
            
            //comprobar que me llega el identificador
            if(!$id)
                throw new Exception("No se indicó la mascota a editar.");
                
                //comprobar que la mascota existe
                if(!$mascota)
                    throw new Exception("No existe la mascota $id.");
                    
                    //cargar la vista del formulario
                    include 'views/mascota/actualizar.php';
    }
    
    //PASO 2: aplica los cambios de la mascota
    public function actualizar(){
        //comprueba que llegue el formulario con los datos y no por URL
        if(empty($_POST['actualizar']))
            throw new Exception('No está permitido entrar por la URL');
            
            //recuperar el anuncio de la BDD
            $mascota = Mascota::getMascota(intval($_POST['id']));
            
            //comprobar que existe la mascota
            if(!$mascota)
                throw new Exception('No existe la mascota');
                                
                $usuario = Login::get(); //recupera el usuario actual
                             
                if((!$usuario || $usuario->id!=$mascota->idusuario) && !Login::isAdmin() && !Login::hasPrivilege(500))
                    throw new Exception('No tienes permiso');
                    
                    $mascota->nombre=DB::escape($_POST['nombre']);
                    $mascota->sexo=DB::escape($_POST['sexo']);
                    $mascota->biografia=DB::escape($_POST['biografia']);
                    $mascota->fechanacimiento=DB::escape($_POST['fechanacimiento']);
                    $mascota->fechafallecimiento=DB::escape($_POST['fechafallecimiento']);
                    $mascota->idusuario=$_POST['idusuario'];
                    $mascota->idraza=$_POST['idraza'];                   
                    
                    /*//mirar si nos piden eliminar la imagen actual
                    if(!empty($_POST['eliminarimagen'])){
                        //guarda la imagen antigua para borrarla si se actualiza bien la mascota
                        $imagenAntigua = $mascota->imagen;
                        $mascota->imagen = '';
                    }
                    
                    //mirar si nos envían una imagen nueva
                    if(Upload::llegaFichero('imagen')){
                        //guarda la imagen antigua para borrarla si se actualiza bien la mascota
                        $imagenAntigua = $mascota->imagen;
                        $mascota->imagen=Upload::procesar($_FILES['imagen'],'img/mascotas',true,0,'image/*');
                    }
                    
                    //intenta realizar la actualización de datos*/
                    if($mascota->actualizar()===false){
                        //unlink($mascota->imagen); //borra la imagen recién subida
                        throw new Exception("No se pudo actualizar mascota: $mascota->nombre");
                    }
                    
                    /*if(!empty($imagenAntigua))
                        unlink($imagenAntigua); //borra la imagen antigua*/
                        
                        // mostrar detalles de la mascota editada
                        //$this->show($mascota->id);
                        $mensaje="Se ha actualizado correctamente";
                        include 'views/exito.php';
    }
    
    //ELIMINAR SE HACE EN 2 PASOS
    //(si queremos hacerlo con formulario de confirmación)
    
    //PASO 1: muestra el formulario de confirmación de eliminación
    public function delete(int $id=0){
        
        $usuario = Login::get(); //recupera el usuario actual
        $mascota = Mascota::getMascota($id);
        
        if((!$usuario || $usuario->id!=$mascota->idusuario) && !Login::isAdmin() && !Login::hasPrivilege(500))
            throw new Exception('No tienes permiso');
            
            //comprobar que me llega el identificador
            if(!$id)
                throw new Exception("No se indicó la mascota a borrar.");
                
                //comprobar que la mascota existe
                if(!$mascota)
                    throw new Exception("No existe la mascota con id $id.");
                    
                    //ir al formulario de confirmación
                    include 'views/mascota/borrar.php';
    }
    //PASO 2: elimina la mascota
    public function destroy(){
        //comprobar que me lleguen los datos del formulario y no por URL
        if(empty($_POST['borrar']))
            throw new Exception('No está permitido entrar desde la URL');
            
            $id=intval($_POST['id']); //recuperar el id vía POST
            
            $usuario = Login::get(); //recupera el usuario actual
            $mascota = Mascota::getMascota($id);
            
            if((!$usuario || $usuario->id!=$mascota->idusuario) && !Login::isAdmin() && !Login::hasPrivilege(500))
                throw new Exception('No tienes permiso');
                
                //intenta borrar la mascota de la BDD
                if(!Mascota::borrar($id))
                    throw new Exception("No se pudo borrar");
                    
                    //mostrar la vista de éxito
                    $mensaje="Borrado correcto.";
                    
                    include 'views/exito.php'; //mostrar éxito
    }
    
    public function filtered(){
        
        //recuperar la lista de anuncios
        $campo=empty($_POST['campo'])? 'titol' : $_POST['campo'];
        $valor=empty($_POST['valor'])? '' : $_POST['valor'];
        $orden=empty($_POST['orden'])? 'id' : $_POST['orden'];
        $sentido=empty($_POST['sentido'])? 'ASC' : $_POST['sentido'];
        
        $mascotas=Mascota::getFiltered($campo, $valor, $orden, $sentido);
        
        $usuario=Login::getUsuario(); //recupera el usuario actual
        
        //mostrar lista
        include 'views/mascota/lista.php';
    }
    
}
