<?php
/**
 *
 */
class IngresoController
{
  function __construct()
  {
    // code...
  }
  // operación por defecto
  public function index(){
    if(!login::isAdmin())
        throw new Exception('Debes ser administrador');
    
    $this->list(); // listado de hospitales
  }

// lista los hospitales
public function list(){
    $ingresos = Ingreso::get();
    // solamente el administrador 
    if(!login::isAdmin())
        throw new Exception('No tienes permiso para hacer esto');
    
    include 'views/ingresos/lista.php'; 
  }
  //muestra un ingreso
  public function show($id=false){
    //comprobar que me llega el id
    if(!$id)
        throw new Exception("No se indicó la mascota a ver.");
        
        //recuperar el ingreso con dicho código
        $ingreso=Ingreso::getIngreso($id);
        
        //comprobar que la mascota existe
        if(!$ingreso)
            throw new Exception("No existe el ingreso con id= $id.");
            
        //cargar la vista de detalles
        include 'views/ingresos/actualizar.php';
}

}
