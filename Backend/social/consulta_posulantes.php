<?php

@mysql_connect('localhost','root','');
@mysql_select_db('tierras');

$persona=$_GET['persona'];
@$tipo=$_GET['criterio'];

if ($tipo=='1') {
	$select="SELECT * FROM area_social where nro_doc = '$persona'";
}
if ($tipo=='2') {
	$select="SELECT * FROM area_social where apellido like '%$persona%'";
}
if ($tipo=='3') {
	$select="SELECT * FROM area_social where cuit like '%$persona%'";
}
$res=mysql_query($select);
$datos_json=array();

while ($row=mysql_fetch_array($res)) {
	$datos_json[]=array_map('utf8_encode', $row);
}
echo json_encode($datos_json);


?>