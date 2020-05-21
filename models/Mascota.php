<?php
// Clase Mascota del modelo
class Mascota{
    
    // PROPIEDADES
    public $id=0, $nombre='', $sexo='', $biografia='', $fechanacimiento='', $fechafallecimiento='',
    $idusuario=0, $idraza='0';
    
    //METODOS DEL CRUD
    
    //recuperar todos las mascotas
    public static function get():array{
        $consulta="SELECT * FROM mascotas"; //preparar la consulta
        return DB::selectAll($consulta, self::class);
    }
    
    //recuperar las mascotas de un usuario
    public static function mascotasUsuario(int $idusuario):array{
        $consulta="SELECT * FROM mascotas WHERE idusuario=$idusuario"; //preparar la consulta
        return DB::selectAll($consulta, self::class);
    }
    
    //recuperar una mascota concreta por id
    public static function getMascota(int $id):?Mascota{
        $consulta="SELECT * FROM mascotas WHERE id=$id"; //preparar la consulta
        return DB::select($consulta, self::class); //ejecutar y retornar el resultado
    }
    
    //insertar una nueva mascota
    public function guardar(){ 
        if(empty($this->fechafallecimiento)){
        $consulta="INSERT INTO mascotas(nombre, sexo, biografia, fechanacimiento, 
                fechafallecimiento, idusuario, idraza)
                VALUES('$this->nombre','$this->sexo', '$this->biografia', '$this->fechanacimiento',NULL, 
                    $this->idusuario, $this->idraza)";
        
        return DB::insert($consulta);
        }else{
            $consulta="INSERT INTO mascotas(nombre, sexo, biografia, fechanacimiento,
                fechafallecimiento, idusuario, idraza)
                VALUES('$this->nombre','$this->sexo', '$this->biografia', '$this->fechanacimiento','$this->fechafallecimiento',
                    $this->idusuario, $this->idraza)";
                    return DB::insert($consulta);
        }
    }
   
    //borrar una mascota por id
    public static function borrar(int $id){ 
        //preparar consulta
        $consulta="DELETE FROM mascotas WHERE id=$id";
        //ejecutar consulta
        return DB::delete($consulta);
    }
    
    public function actualizar(){ //actualizar una mascota
        if(empty($this->fechafallecimiento)){
          
        //preparar consulta
            $consulta="UPDATE mascotas SET
                    nombre='$this->nombre',
                    sexo='$this->sexo',
                    biografia='$this->biografia',
                    fechanacimiento='$this->fechanacimiento',
                    fechafallecimiento=NULL,
                    idusuario=$this->idusuario,
                    idraza=$this->idraza
                   WHERE id=$this->id";
            return DB::update($consulta);
        }else{
        //preparar consulta
        $consulta="UPDATE mascotas SET
                    nombre='$this->nombre',
                    sexo='$this->sexo',
                    biografia='$this->biografia',
                    fechanacimiento='$this->fechanacimiento',
                    fechafallecimiento='$this->fechafallecimiento',
                    idusuario=$this->idusuario,
                    idraza=$this->idraza
                   WHERE id=$this->id";
        return DB::update($consulta);
        }
    }
    
    public function __toString():string{  //__toString
        return "$this->id, '$this->nombre', '$this->sexo', $this->fechanacimiento, '$this->fechafallecimiento' $this->idusuario";
    }
    
    //recuperar mascotas con un filtro avanzado
    public static function getFiltered(string $campo='titol', string $valor='', string $orden='id',
        string $sentido='ASC'):array{
            $consulta="SELECT * FROM mascotas
                   WHERE $campo LIKE '%$valor%'
                   ORDER BY $orden $sentido";
            return DB::selectAll($consulta, self::class);
    }    
    
}