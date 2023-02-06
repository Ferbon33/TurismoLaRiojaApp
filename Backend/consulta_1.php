<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
@include('conexion.php');
@$persona=$_GET['persona'];
@$tipo=$_GET['tipo'];
$fecha=$_GET['fecha'];
$hasta_fecha=$_GET['fecha_hasta'];


if ($tipo=='7') {
	
//$fecha='2017-06-05 00:00:00';



	$sql="SELECT * from adjudicatarios where  fecha_de_inscripcion between '$fecha' and '$hasta_fecha'";


}

if ($tipo=='6') {
	
//$fecha='2017-06-05 00:00:00';



	$sql="SELECT * from adjudicatarios where  fecha_carga between '$fecha' and '$hasta_fecha'";


}
else
{
	/*/
	if ($persona=="") {
	$persona='*****';
}
*/
if ($tipo=='0') {
	$sql="SELECT * from adjudicatarios where persona like '%$persona%' LIMIT 0,50";
}
if ($tipo=='1') {
	$sql="SELECT * from adjudicatarios where dni like '%$persona%' LIMIT 0,50";
}
if ($tipo=='2') {
	$sql="SELECT * from adjudicatarios where matricula like '%$persona%' LIMIT 0,50 ";
}
if ($tipo=='3') {
	$sql="SELECT * from adjudicatarios where nro_escritura like '%$persona%' LIMIT 0,50";
}
if ($tipo=='4') {
	$sql="SELECT * from adjudicatarios where escribano like '%$persona%' LIMIT 0,50";
}
if ($tipo=='5') {
	$sql="SELECT * from adjudicatarios where barrio like '%$persona%' LIMIT 0,50 ";
}
}
$res=mysql_query($sql);
$datos_json=array();

while ($row=mysql_fetch_array($res)) {
	$datos_json[]=array_map('utf8_encode', $row);
}
echo json_encode($datos_json);



?>