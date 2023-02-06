<?php
include('conexion_expediente.php');
@$apeynom=$_POST['apeynom'];
@$dni=$_POST['dni'];
@$area=$_POST['area'];

@$observaciones=$_POST['observaciones-ai'];

$insert="INSERT INTO agente_interviniente  (apeynom,dni,area,observacion) values ('$apeynom',$dni,'$area','$observaciones')";
mysql_query($insert) or die ("Error en: $busqueda: " . mysql_error());




?>