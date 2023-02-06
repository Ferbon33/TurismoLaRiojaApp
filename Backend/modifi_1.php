<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
@include('conexion.php');
@$id=$_GET['id'];
@$persona=$_POST['persona'];
@$dni=$_POST['dni'];
@$cuil=$_POST['cuil'];
@$matricula=$_POST['matricula'];
@$barrio=$_POST['barrio'];
@$escritura=$_POST['nro_escritura'];
@$escri=$_POST['escri'];
//@$par_nomenc=$_POST['par_nomenc'];
@$dep=$_POST['dep'];
@$circ=$_POST['circ'];
@$sec=$_POST['sec'];
@$par_nomenc_rural=$_POST['par_nomenc_rural'];

$mza= str_pad( $_POST['mza'],5,"0",STR_PAD_LEFT);
$parc= str_pad( $_POST['parc'],5,"0",STR_PAD_LEFT);
$par_nomenc=$dep.$circ.$sec.$mza.$parc."0000000";

@$nro_protocolo=$_POST['nro_protocolo'];
@$nro_preinscripcion=$_POST['nro_preinscripcion'];
@$fecha_de_inscripcion=$_POST['fecha_de_inscripcion'];
@$observaciones=$_POST['observaciones'];


$sql="UPDATE adjudicatarios SET nro_escritura='$escritura',persona='$persona',matricula='$matricula',barrio='$barrio',dni='$dni',cuil='$cuil',par_nomenc='$par_nomenc',par_nomenc_rural='$par_nomenc_rural', escribano='$escri', nro_protocolo='$nro_protocolo', nro_preinscripcion='$nro_preinscripcion', fecha_de_inscripcion='$fecha_de_inscripcion', observaciones='$observaciones' WHERE id_adjudicatario='$id'";
$res=mysql_query($sql) or die ("Error en: $busqueda: " . mysql_error());
//$datos_json=array();

//$datos_json='[{"valido":"validate"}]';
$datos_json='{"id":'.$id.'}';
echo $datos_json;  


?>