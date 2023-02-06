<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
@include('conexion.php');
@$id=$_POST['id'];
$fecha_de_entrega=date("Y-m-d");  

$update_estado="UPDATE adjudicatarios set estado='ENTREGADA', fecha_de_entrega='$fecha_de_entrega' WHERE 	nro_escritura = '$id'";

$res=mysql_query($update_estado) or die (mysql_error());

echo '{"success":true}';

//ECHO $id;
?>