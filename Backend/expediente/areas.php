?php header('Access-Control-Allow-Origin: *'); ?>
<?php
include('conexion_expediente.php');


$sql="SELECT * FROM areas order by id";
$res=mysql_query($sql);
$datos_json=array();

while ($row=mysql_fetch_array($res)) {
	$datos_json[]=array_map('utf8_encode', $row);
}
echo json_encode($datos_json);



?>