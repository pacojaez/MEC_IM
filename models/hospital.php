<?php
// Clase Mascota del modelo
class hospital{

    // PROPIEDADES
    public $id=0, $nombre='', $provincia='', $email='', $telefono='', $contraseña='',
    $created_at='', $updated_at='0';

    //METODOS DEL CRUD

    //recuperar todos las mascotas
    public static function get():array{
        $consulta="SELECT * FROM hospitales"; //preparar la consulta
        return DB::selectAll($consulta, self::class);
    }

    /*recuperar las mascotas de un usuario
    public static function mascotasUsuario(int $idusuario):array{
        $consulta="SELECT * FROM mascotas WHERE idusuario=$idusuario"; //preparar la consulta
        return DB::selectAll($consulta, self::class);
    }
    */

    //recuperar una mascota concreta por id
    public static function getHospital(int $id):?Hospital{
        $consulta="SELECT * FROM hospitales WHERE id=$id"; //preparar la consulta
        return DB::select($consulta, self::class); //ejecutar y retornar el resultado
    }

    //insertar un nuevo hospital
    public function guardar(){
        $consulta="INSERT INTO hospitales(nombre, provincia, email, telefono,
              contraseña, created_at, updated_at)
                VALUES('$this->nombre', '$this->provincia', '$this->email', '$this->telefono', '$this->contraseña',
                    curdate(), curdate())";

        return DB::insert($consulta);

    }

    //borrar una mascota por id
    public static function borrar(int $id){
        //preparar consulta
        $consulta="DELETE FROM hospitales WHERE id=$id";
        //ejecutar consulta
        return DB::delete($consulta);
    }

    public function actualizar(){ //actualizar un hospital
            //preparar consulta
            $consulta="UPDATE hospitales SET
                    nombre='$this->nombre',
                    provincia='$this->provincia',
                    email='$this->email',
                    telefono='$this->telefono',
                    contraseña= '$this->contraseña'
                   WHERE id=$this->id;";

            return DB::update($consulta);

    }

    public function __toString():string{  //__toString
        return "'$this->nombre', '$this->provincia', '$this->email', '$this->telefono', '$this->contraseña', '$this->created_at', '$this->updated_at'";
    }

    //recuperar mascotas con un filtro avanzado
    public static function getFiltered(string $campo='nombre', string $valor='', string $orden='id',
        string $sentido='ASC'):array{
            $consulta="SELECT * FROM hospitales
                   WHERE $campo LIKE '%$valor%'
                   ORDER BY $orden $sentido;";
        
        var_dump($consulta); die();

            return DB::selectAll($consulta, self::class);
    }

}
