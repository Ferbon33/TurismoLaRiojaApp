<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
@$con=odbc_connect('REGISTRO', 'sa', 'sa');


@$persona=$_GET['dni'];

$sql="SELECT  * FROM titular_inmueble,tit_dominios_mov
	WHERE 	titular_inmueble.matricula=tit_dominios_mov.matricula and titular_inmueble.nro_doc='$persona'";
	$res=odbc_exec($con, $sql);

$row=odbc_fetch_array($res);
//$apellidonombre=$row['apellidonombre'];
//$nro_doc=$row['nro_doc'];
//$cuit=$row['cuit'];
 //echo json_encode($datos_json);

 echo '{"apellido_rpi":"'.$row['apellido'].'",
          "nombre_rpi":"'.$row['nombre'].'",
	           "nro_doc_rpi":"'.$row['nro_doc'].'",
	              "cuit_rpi":"'.$row['cuit'].'",
	     "localidad_rpi":"'.$row['localidad'].'",
	     "matricula_rpi":"'.$row['matricula'].'",
"         escritura_fecha":"'.$row['fescritura'].'",
	     "datos_conyugue_rpi":"'.$row['datos_conyuge'].'"
      }';
     



?>