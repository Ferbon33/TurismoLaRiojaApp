<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
@include('conexion.php');
@$persona=$_POST['persona'];
@$dni=$_POST['dni'];
@$cuil=$_POST['cuil'];
@$matricula=$_POST['matricula'];
@$barrio=$_POST['barrio'];
@$escritura=$_POST['nro_escritura'];
@$dep=$_POST['dep'];
@$circ=$_POST['circ'];
@$sec=$_POST['sec'];
@$par_nomenc_rural=$_POST['par_nomenc_rural'];
@$escribano=$_POST['escri'];
@$area=$_POST['area'];

$mza= str_pad( $_POST['mza'],5,"0",STR_PAD_LEFT);
$parc= str_pad( $_POST['parc'],5,"0",STR_PAD_LEFT);
$par_nomenc=$dep.$circ.$sec.$mza.$parc."0000000";

@$nro_protocolo=$_POST['nro_protocolo'];
@$nro_preinscripcion=$_POST['nro_preinscripcion'];
@$fecha_de_inscripcion=$_POST['fecha_de_inscripcion'];
@$observaciones=$_POST['observaciones'];







$sql="INSERT INTO adjudicatarios (nro_escritura,persona,matricula,barrio,dni,cuil,par_nomenc,par_nomenc_rural,escribano,area,nro_protocolo,nro_preinscripcion,fecha_de_inscripcion,observaciones) 
values ('$escritura','$persona','$matricula','$barrio','$dni','$cuil','$par_nomenc','$par_nomenc_rural','$escribano','$area','$nro_protocolo','$nro_preinscripcion','$fecha_de_inscripcion','$observaciones')";
$res=mysql_query($sql) or die ("Error en: $busqueda: " . mysql_error());
$datos_json=array();

$datos_json='[{"valido":"validate"}]';
/*/
$datos_json='{"id":66047,"nro_escritura":"-","persona":"-","matricula":"-","barrio":"axasx@axasx.com"}';
/*/
echo $datos_json;  



?>