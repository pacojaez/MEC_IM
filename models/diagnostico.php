<?php
// Clase diagnostico del modelo
class Diagnostico{

    // PROPIEDADES
    public $id=0, $nombre='', $descripcion='', $especialidad='', $diagnostico='', $quirurgico='', $IDC_9='',
    $created_at, $updated_at;

    //METODOS DEL CRUD

    //recuperar todos las diagnosticos
    public static function get():array{
        $consulta="SELECT * FROM diagnosticos"; //preparar la consulta
        return DB::selectAll($consulta, self::class);
    }

    /*recuperar las diagnosticos de un usuario
    public static function diagnosticosUsuario(int $idusuario):array{
        $consulta="SELECT * FROM diagnosticos WHERE idusuario=$idusuario"; //preparar la consulta
        return DB::selectAll($consulta, self::class);
    }
    */

    //recuperar una diagnostico concreta por id
    public static function getDiagnostico(int $id):?Diagnostico{
        $consulta="SELECT * FROM diagnosticos WHERE id=$id"; //preparar la consulta
        return DB::select($consulta, self::class); //ejecutar y retornar el resultado
    }

    //insertar un nuevo hospital
    public function guardar(){
        $consulta="INSERT INTO diagnosticos (especialidad, diagnostico, quirurgico, IDC_9,
        created_at, updated_at)
                VALUES('$this->especialidad', '$this->diagnostico', '$this->quirurgico',
                  '$this->IDC_9', curdate(), curdate());";

        return DB::insert($consulta);

    }

    //borrar una diagnostico por id
    public static function borrar(int $id){
        //preparar consulta
        $consulta="DELETE FROM hospitales WHERE id=$id";
        //ejecutar consulta
        return DB::delete($consulta);
    }

    public function actualizar(){ //actualizar una diagnostico
            //preparar consulta
            $consulta="UPDATE diagnoticos SET
                    nombre='$this->nombre',
                    descripcion='$this->descripcion,
                    especialidad='$this->especialidad',
                    diagnostico='$this->diagnostico',
                    quirurgico='$this->quirurgico',
                    IDC-9= '$this->IDC_9'
                    update_at = curdate()
                   WHERE id=$this->id";

            return DB::update($consulta);

    }

    public function __toString():string{  //__toString
        return "'$this->nombre', '$this->descripcion', '$this->especialidad', '$this->diagnostico',
                '$this->quirurgico', '$this->IDC-9', $this->created_at', '$this->updated_at'";
    }

    //recuperar diagnosticos con un filtro avanzado
    public static function getFiltered (string $campo='diagnostico', 
            string $valor='', string $orden='id', string $sentido='ASC'):array{
            $consulta="SELECT * FROM diagnosticos
                   WHERE $campo LIKE '%$valor%'
                   ORDER BY $orden $sentido;";
                   
            return DB::selectAll($consulta, self::class);
    }

}
