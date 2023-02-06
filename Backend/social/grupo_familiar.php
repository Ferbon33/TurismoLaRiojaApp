
<?php
@mysql_connect('localhost','root','');
@mysql_select_db('tierras');


$dni_jefe_familia=$_POST['nro_doc'];
$nombre=$_POST['nombre'];
$nro_doc_integrante=$_POST['nro_doc_integrante'];
$vinculo_integrante=$_POST['vinculo_integrante'];
$Educacion=$_POST['Educacion'];
$Ocupacion=$_POST['Ocupacion'];
$obra_social=$_POST['obra_social'];
$Ingresos=$_POST['Ingresos'];




$insert="INSERT INTO `tierras`.`area_solcial_g_familiar` (`dni_jefe_familia`, `nombre`, `dni`, `vinculo`, `educacion`, `ocupacion`, `obra_social`, `ingresos`) VALUES ( '$dni_jefe_familia', '$nombre', '$nro_doc_integrante', '$vinculo_integrante', '$Educacion', '$Ocupacion', '$obra_social', '$Ingresos');";
mysql_query($insert) or die (mysql_error());

?>




