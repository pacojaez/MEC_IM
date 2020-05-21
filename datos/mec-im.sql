DROP DATABASE IF EXISTS mec_im;
create database mec_im;
use mec_im;

CREATE TABLE usuarios (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  `apellido1` varchar(64) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellido2` varchar(64) COLLATE utf8_spanish_ci DEFAULT NULL,
  `privilegio` int(11) COLLATE utf8_spanish_ci DEFAULT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `email` varchar(64) COLLATE utf8_spanish_ci DEFAULT NULL,
  `imagen` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

select * from usuarios;
insert into usuarios values ( 2, 'Paco', '1234', 'nombreuno', 'apellidouno', 'apellidodos', 1000, 1, 'paco@paco.com', '', curdate(), curdate()); 

CREATE TABLE `diagnosticos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(64) COLLATE utf8_spanish_ci NULL,
  `descripcion` text COLLATE utf8_spanish_ci NULL,
  `especialidad` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  `diagnostico` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  `quirurgico` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  `IDC_9` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
  -- definición de las claves foráneas
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

drop table asegurados;
CREATE TABLE `asegurados` (
   `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(64) COLLATE utf8_spanish_ci NULL,
  `apellidos` varchar(64) COLLATE utf8_spanish_ci NULL,
  `numero_poliza` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  `provincia` varchar(64) COLLATE utf8_spanish_ci NULL,
  `tipo_poliza` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nacimiento` date COLLATE utf8_spanish_ci NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

insert into asegurados values (2, 'PACO', 'Puigcorbe', '65-65-65-65', 'C/ Rue 13 Percebe', 'Barcelona', 'Todo Riesgo', '1980-05-25', curdate(), curdate());
select * from asmec_imegurados;

CREATE TABLE `hospitales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(64) COLLATE utf8_spanish_ci NULL,
  `provincia` varchar(64) COLLATE utf8_spanish_ci NULL,
  `email` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  `contraseña` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
  -- definición de las claves foráneas
  
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

insert into hospitales values (2, 'HOSPITAL DEL MAR', 'BARCELONA', 'paco@paco.com', '999-999-999', 'unapasswordard', curdate(), curdate());

drop table if exists ingresos;
CREATE TABLE `ingresos` (
  `id` 				int(255) NOT NULL AUTO_INCREMENT,
  `asegurado_id`	int(11),
  `diagnostico_id`	int(11),
  `hospital_id` 	int(11),
  `observaciones` 	text COLLATE utf8_spanish_ci NULL,
  `fecha_ingreso` 	date NULL,
  `fecha_alta` 		date NULL,
  `fecha_comunicación` 	date NULL,
  `autorizado_hasta`	date null,
  `numero_autorizacion` int(20) COLLATE utf8_spanish_ci NULL,
  `dias_autorizados`  int(20) COLLATE utf8_spanish_ci NULL,
  `dias_prorrogados`  int(20) COLLATE utf8_spanish_ci NULL,
  `total_dias`		  int(20) COLLATE utf8_spanish_ci NULL,
  `dias_estancia` 	int(20) COLLATE utf8_spanish_ci NULL,
  `desviacion`		int(20) COLLATE utf8_spanish_ci NULL,
  `tipo_ingreso`	varchar(64) COLLATE utf8_spanish_ci NULL,
  `ingreso_rechazado` bool default false,
  `propuesta_denegacion` bool default false,
  `medico_responsable` varchar(128) COLLATE utf8_spanish_ci NULL,
  `nhc` 			text COLLATE utf8_spanish_ci NULL,
  `comentarios`		text COLLATE utf8_spanish_ci NULL,
  `dias_cobertura_psiquiatrica` int(20) COLLATE utf8_spanish_ci NULL,
  `ingreso_psiquiatrico_hasta` date null,
  `dias_uci`		int(20) COLLATE utf8_spanish_ci NULL,
  `created_at` 		date NOT NULL DEFAULT current_timestamp(),
  `updated_at` 		date DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  -- definición de las claves foráneas
  FOREIGN KEY (diagnostico_id) REFERENCES diagnosticos(id) 
  ON UPDATE CASCADE ON DELETE CASCADE,
  FOREIGN KEY (hospital_id) REFERENCES hospitales(id) ,
  FOREIGN KEY (asegurado_id) REFERENCES asegurados(id) 
  
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/* insert into diagnosticos (id,  especialidad, diagnostico, quirurgico, `IDC-9`) VALUES
(1, 'Neurologia', 'A. ISQUEMICO TRANSITORIO (435.9)', FALSE , '435.9'); */

select * from diagnosticos order by id desc;
INSERT INTO diagnosticos(id, especialidad, diagnostico, quirurgico, IDC_9) VALUES ( null, 'ESPECIALIDAD', 'DIAGNOSTICO', 'QUIRURGICO', 'IDC_9' );
delete from diagnosticos where id >= 1253; 

iNSERT INTO ingresos (diagnostico_id, hospital_id, asegurado_id, observaciones, 
      fecha_ingreso, fecha_alta, fecha_comunicación, autorizado_hasta, numero_autorizacion, 
      dias_autorizados, dias_prorrogados, total_dias, dias_estancia, desviacion, tipo_ingreso, 
      ingreso_rechazado, propuesta_denegacion, medico_responsable, nhc, comentarios, dias_cobertura_psiquiatrica,
      ingreso_psiquiatrico_hasta, dias_uci, created_at, updated_at)
              VALUES( 1, 1, 1, 'observaciones', 
              '2020-05-19', '2020-05-19', '2020-05-19',
              '2020-05-22', '25252525-ui-909', 3, 1,
              3, 1, 1, 'Programado', 0,
              0, 'DR. Lopez', 'codigonhc 7685664', 'Comentarios aleatorios', 1,
              '2020-05-22', 5, curdate(), curdate());
			
select * from ingresos;
delete from ingresos where id = 1;