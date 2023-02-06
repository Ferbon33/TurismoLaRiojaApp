<?php
@$expediente=$_POST['expediente'];
@$agente_interviniente=$_POST['agente_interviniente'];
@$observacion=$_POST['observacion'];
@$caratula=$_POST['caratula'];
@$detalle=$_POST['detalle'];
@$nro_fojas=$_POST['nro_fojas'];
@$fecha_dif=$_POST['fecha_dif'];

include('conexion_expediente.php');

$select_expediente="select * from expedientes where numero='$expediente'";
$res=mysql_query($select_expediente);
$row=mysql_fetch_array($res);
$numero_existe_exp=$row['numero'];
if ($numero_existe_exp=="") {
	$insert_expediente="INSERT INTO expedientes (numero, caratula, observacion, nro_fojas,fecha_forsada) values ('$expediente','$caratula','$observacion','$nro_fojas','$fecha_dif')";
mysql_query($insert_expediente);
$select_expediente="SELECT id from expedientes where numero='$expediente'";
$res = mysql_query($select_expediente);
$row_id_exp = mysql_fetch_array($res);
$id_expediente=$row_id_exp['id'];
$insert_historial="INSERT INTO historial (id_expediente,id_agente_interviniente, estado, detalle) 
values ('$id_expediente','$agente_interviniente','ENTRADA','$detalle')";
mysql_query($insert_historial);
$datos_json='[{"valido":"validate"}]';

echo $datos_json; 
}
else
{
	echo '{"errorMsg":"ERROR: Ya Fue Cargado este Expediente"}';
}



//echo $agente_interviniente;


?>