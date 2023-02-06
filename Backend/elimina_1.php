<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
@include('conexion.php');
@$id=$_POST['id'];


//echo $id;



$sql="DELETE FROM adjudicatarios  WHERE id_adjudicatario='$id'";
$res=mysql_query($sql) or die ("Error en: $busqueda: " . mysql_error());
//$datos_json=array();

//$datos_json='[{"valido":"validate"}]';
$datos_json='{"success":true}';
echo $datos_json;  



?>