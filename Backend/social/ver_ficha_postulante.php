<?php

mysql_connect('localhost','root','');
mysql_select_db('tierras');

$persona='1';//$_POST['dni'];


$select="SELECT id,apellido,nombre,nro_doc,lugar,cuit FROM area_social where id = '$persona'";
$res=mysql_query($select);
$datos_json=array();

while ($row=mysql_fetch_array($res)) {
	$datos_json[]=array_map('utf8_encode', $row);
}
echo json_encode($datos_json);


?>