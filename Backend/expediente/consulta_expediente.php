<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
include('conexion_expediente.php');
@$persona=$_GET['persona'];
@$criterio=$_GET['criterio'];
 if ($criterio=='1') {
 	$sql="SELECT historial.id,expedientes.numero,agente_interviniente.apeynom,historial.estado,historial.fechahora,expedientes.observacion,expedientes.caratula,historial.detalle,agente_interviniente.area from historial,expedientes,agente_interviniente where
 expedientes.id=historial.id_expediente 
 and historial.id_agente_interviniente = agente_interviniente.id
 and expedientes.numero like '%$persona%' order by historial.id";
 }
if ($criterio=='2')
{
	$sql="SELECT historial.id,expedientes.numero,agente_interviniente.apeynom,historial.estado,historial.fechahora,expedientes.observacion,expedientes.caratula,historial.detalle,agente_interviniente.area from historial,expedientes,agente_interviniente where
 expedientes.id=historial.id_expediente 
 and historial.id_agente_interviniente = agente_interviniente.id
 and agente_interviniente.apeynom like '%$persona%' order by historial.id";

}
if ($criterio=='3')
{
	$sql="SELECT historial.id,expedientes.numero,agente_interviniente.apeynom,historial.estado,historial.fechahora,expedientes.observacion,expedientes.caratula,historial.detalle,agente_interviniente.area from historial,expedientes,agente_interviniente where
 expedientes.id=historial.id_expediente 
 and historial.id_agente_interviniente = agente_interviniente.id
 and expedientes.caratula like '%$persona%' order by historial.id";

}

if ($criterio=='4') {
	$sql="SELECT historial.id, expedientes.numero, agente_interviniente.apeynom, historial.estado, historial.fechahora, expedientes.observacion, expedientes.caratula, historial.detalle, agente_interviniente.area
FROM historial, expedientes, agente_interviniente
WHERE expedientes.id = historial.id_expediente
AND historial.id_agente_interviniente = agente_interviniente.id
AND agente_interviniente.area LIKE  '%$persona%'
ORDER BY historial.id  limit 0,100";
}

$res=mysql_query($sql);
$datos_json=array();

while ($row=mysql_fetch_array($res)) {
	$datos_json[]=array_map('utf8_encode', $row);
}
echo json_encode($datos_json);



?>