<?php
/**
 *
 */
class Ingreso
{
  // PROPIEDADES
  public $id=0, $diagnostico_id=0, $hospital_id= 0, $asegurado_id=0, $observaciones, 
  $fecha_ingreso, $fecha_alta, $fecha_comunicación,
  $autorizado_hasta, $numero_autorizacion, $dias_prorrogados,
  $total_dias, $tipo_ingreso, $ingreso_rechazado,
  $propuesta_denegacion, $medico_responsable, $nhc, $comentarios, $dias_cobertura_psiquiatrica,
  $dias_uci, $created_at, $updated_at;

  function __construct(){

  }

  //recuperar todos lo ingresos
  public static function get():array{
      $consulta="select i.*, a.nombre as asegurado, h.nombre as hospital, 
                    d.diagnostico as diagnostico from ingresos i
                    inner join asegurados a on i.asegurado_id=a.id
                    inner join hospitales h on i.hospital_id =h.id
                    inner join diagnosticos d on i.diagnostico_id = d.id;"; //preparar la consulta
      return DB::selectAll($consulta, self::class);
  }

  //recuperar una campo concreta por id
  public static function getIngreso(int $id):?Ingreso{
      $consulta="select i.*, a.nombre as asegurado, h.nombre as hospital, 
      d.diagnostico as diagnostico from ingresos i
      inner join asegurados a on i.asegurado_id=a.id
      inner join hospitales h on i.hospital_id =h.id
      inner join diagnosticos d on i.diagnostico_id = d.id
      WHERE i.id=$id;"; //preparar la consulta
      return DB::select($consulta, self::class); //ejecutar y retornar el resultado
  }

  //insertar un nuevo campo
  public function guardar(){
      $consulta="INSERT INTO ingresos (diagnostico_id, hospital_id, asegurado_id, observaciones, 
      fecha_ingreso, fecha_alta, fecha_comunicación, autorizado_hasta, numero_autorizacion, 
      dias_autorizados, dias_prorrogados, total_dias, dias_estancia, desviacion, tipo_ingreso, 
      ingreso_rechazado, propuesta_denegacion, medico_responsable, nhc, comentarios, dias_cobertura_psiquiatrica,
      ingreso_psiquiatrico_hasta, dias_uci, created_at, updated_at)
              VALUES( $this->diagnostico_id, $this->hospital_id, $this->asegurado_id, '$this->observaciones', 
              '$this->fecha_ingreso', '$this->fecha_alta', '$this->fecha_comunicación',
              '$this->autorizado_hasta', $this->numero_autorizacion, $this->dias_autorizados, $this->dias_prorrogados,
              $this->total_dias, $this->dias_estancia, $this->desviacion, '$this->tipo_ingreso', '$this->ingreso_rechazado',
              '$this->propuesta_denegacion', '$this->medico_responsable', '$this->nhc', '$this->comentarios', $this->dias_cobertura_psiquiatrica,
              '$this->ingreso_psiquiatrico_hasta', $this->dias_uci, curdate(), curdate());";

      return DB::insert($consulta);
  }
  //borrar un campo por id
  public static function borrar(int $id){
      //preparar consulta
      $consulta="DELETE FROM ingresos WHERE id=$id";
      //ejecutar consulta
      return DB::delete($consulta);
  }

  public function actualizar(){ //actualizar un campo
          //preparar consulta
          $consulta="UPDATE ingresos SET
          diagnostico_id= $this->diagnostico_id,
          hospital_id = $this->hospital_id,
          asegurado_id= $this->asegurado_id,
          observaciones = '$this->observaciones',
          fecha_ingreso= '$this->fecha_ingreso',
          fecha_alta = '$this->fecha_alta',
          fecha_comunicación='$this->fecha_comunicación',
          autorizado_hasta = '$this->autorizado_hasta',
          numero_autorizacion = $this->numero_autorizacion,
          dias_autorizados = $this->dias_autorizados ,
          dias_prorrogados = $this->dias_prorrogados ,
          total_dias=  $this->total_dias,
          dias_estancia = $this->dias_estancia,
          desviacion = $this->desviacion,
          tipo_ingreso = '$this->tipo_ingreso',
          ingreso_rechazado='$this->ingreso_rechazado' ,
          propuesta_denegacion = '$this->propuesta_denegacion',
          medico_responsable = '$this->medico_responsable',
          nhc = '$this->nhc',
          comentarios= '$this->comentarios',
          dias_cobertura_psiquiatrica= $this->dias_cobertura_psiquiatrica,
          ingreso_psiquiatrico_hasta = '$this->ingreso_psiquiatrico_hasta',
          dias_uci= $this->dias_uci,
          updated_at= curdate()
                 WHERE id=$this->id";
          return DB::update($consulta);
  }

  public function __toString():string{  //__toString
      return "$this->diagnostico_id, $this->hospital_id, $this->asegurado_id, '$this->observaciones', 
      '$this->fecha_ingreso', '$this->fecha_alta', '$this->fecha_comunicación',
      '$this->autorizado_hasta', $this->numero_autorizacion, $this->dias_autorizados, $this->dias_prorrogados,
      $this->total_dias, $this->dias_estancia, $this->desviacion, '$this->tipo_ingreso', '$this->ingreso_rechazado',
      '$this->propuesta_denegacion', '$this->medico_responsable', '$this->nhc', '$this->comentarios', $this->dias_cobertura_psiquiatrica,
      '$this->ingreso_psiquiatrico_hasta', $this->dias_uci, '$this->created_at', '$this->updated_at'";
  }

  //recuperar ingresos con un filtro avanzado
  public static function getFiltered(string $campo='titol', string $valor='', string $orden='id',
      string $sentido='ASC'):array{
          $consulta="SELECT * FROM ingresos
                 WHERE $campo LIKE '%$valor%'
                 ORDER BY $orden $sentido";
          return DB::selectAll($consulta, self::class);
  }


}
