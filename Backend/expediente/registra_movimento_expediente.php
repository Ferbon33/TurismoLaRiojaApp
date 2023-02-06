<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
include('conexion_expediente.php');
@$id=$_GET['id'];
$expediente=$_POST['numero'];
$agente_interviniente=$_POST['agente_interviniente'];
$detalle=$_POST['detalle'];
$estado=$_POST['estado'];

$select_expediente="SELECT id from expedientes where numero='$expediente'";
$res = mysql_query($select_expediente);
$row_id_exp = mysql_fetch_array($res);
$id_expediente=$row_id_exp['id'];

$sql_insert_historial="INSERT INTO historial (id_expediente,id_agente_interviniente, estado, detalle) 
values ('$id_expediente','$agente_interviniente','$estado', '$detalle')";
mysql_query($sql_insert_historial) or die ("Error en: $busqueda: " . mysql_error());


$datos_json='{"id":'.$id.'}';
echo $datos_json;  



?>