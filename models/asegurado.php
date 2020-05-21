<?php
// Clase Mascota del modelo
class asegurado{

    // PROPIEDADES
    public $id=0, $nombre='', $apellidos='', $numero_poliza='', $direccion='', $provincia='', $tipo_poliza = '',
    $fecha_nacimiento = '', $created_at='', $updated_at= '';

    //METODOS DEL CRUD

    //recuperar todos las mascotas
    public static function get():array{
        $consulta="SELECT * FROM asegurados"; //preparar la consulta
        return DB::selectAll($consulta, self::class);
    }

    /*recuperar las mascotas de un usuario
    public static function mascotasUsuario(int $idusuario):array{
        $consulta="SELECT * FROM mascotas WHERE idusuario=$idusuario"; //preparar la consulta
        return DB::selectAll($consulta, self::class);
    }
    */

    //recuperar una asegurado concreta por id
    public static function getAsegurado(int $id):?Asegurado{
        $consulta="SELECT * FROM asegurados WHERE id=$id"; //preparar la consulta
        return DB::select($consulta, self::class); //ejecutar y retornar el resultado
    }

    //insertar un nuevo asegurado
    public function guardar(){
        $consulta="INSERT INTO asegurados(nombre, apellidos, fecha_nacimiento, direccion, provincia, numero_poliza, tipo_poliza,
                created_at, updated_at)
                VALUES('$this->nombre',  '$this->apellidos', '$this->fecha_nacimiento', '$this->direccion', '$this->provincia',
                '$this->numero_poliza', '$this->tipo_poliza', curdate(), curdate());";

        return DB::insert($consulta);

    }

    //borrar una asegurado por id
    public static function borrar(int $id){
        //preparar consulta
        $consulta="DELETE FROM asegurados WHERE id=$id";
        //ejecutar consulta
        return DB::delete($consulta);
    }

    public function actualizar(){ //actualizar una asegurado
            //preparar consulta
            $consulta="UPDATE asegurados SET
                    nombre='$this->nombre',
                    apellidos = '$this->apellidos',
                    fecha_nacimiento = '$this->fecha_nacimiento',
                    direccion = '$this->direccion',
                    provincia = '$this->provincia,
                    numero_poliza ='$this->numero_poliza',
                    tipo_poliza ='$this->tipo_poliza',
                    updated_at = curdate()
                   WHERE id=$this->id";
            return DB::update($consulta);

    }

    public function __toString():string{  //__toString
        return "'$this->nombre',  '$this->apellidos', '$this->fecha_nacimiento', '$this->direccion', 
        '$this->provincia', '$this->numero_poliza', '$this->tipo_poliza', '$this->created_at', '$this->updated_at'";
    }

    //recuperar mascotas con un filtro avanzado
    public static function getFiltered(string $campo='titol', string $valor='', string $orden='id',
        string $sentido='ASC'):array{
            $consulta="SELECT * FROM asegurados
                   WHERE $campo LIKE '%$valor%'
                   ORDER BY $orden $sentido";
            return DB::selectAll($consulta, self::class);
    }

}
