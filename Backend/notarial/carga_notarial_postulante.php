<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
//@include('conexion.php');
@mysql_connect('localhost','root','');
@mysql_select_db('tierras');
//mysql_select_db('tierras');
@$dni=$_POST['dni'];
@$_apeynom=$_POST['apeynom'];
@$_barrio=$_POST['barrio'];
@$_expropiacion=$_POST['expropiacion'];
@$acta_acuerdo=$_POST['acta_acuerdo'];
@$adjudicacion=$_POST['adjudicacion'];
@$nro_escritura=$_POST['nro_escritura'];
@$nro_presentacion=$_POST['nro_presentacion'];
@$nro_matricula=$_POST['nro_matricula'];
@$plano=$_POST['plano'];



$update_estado="INSERT INTO postulante (dni,apeynom,barrio,expropiacion,acta_acuerdo,adjudicacion,nro_escritura,nro_presentacion,nro_matricula,plano) values ('$dni','$_apeynom','$_barrio','$_expropiacion','$acta_acuerdo','$adjudicacion','$nro_escritura','$nro_presentacion','$nro_matricula','$plano')";

$res=mysql_query($update_estado) or die (mysql_error());

echo '{"success":true}';

//ECHO $id;
?>