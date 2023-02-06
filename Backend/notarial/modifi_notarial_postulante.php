<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
//@include('conexion.php');
mysql_connect('localhost','root','');
mysql_select_db('tierras');
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
@$expediente=$_POST['expediente'];
@$escribano=$_POST['escribano'];
@$fecha_escritura=$_POST['fecha_escritura'];
@$disposicion=$_POST['disposicion'];
@$tomo=$_POST['tomo'];
@$folio=$_POST['folio']; 
 


$update_estado="UPDATE  postulante SET apeynom='$_apeynom',barrio='$_barrio',expropiacion='$_expropiacion',acta_acuerdo='$acta_acuerdo',adjudicacion='$adjudicacion',nro_escritura='$nro_escritura',nro_presentacion='$nro_presentacion',nro_matricula='$nro_matricula',plano='$plano',expediente='$expediente',escribano='$escribano',fecha_escritura='$fecha_escritura',disposicion='$disposicion',tomo='$tomo',folio='$folio' WHERE dni = '$dni'";

$res=mysql_query($update_estado) or die (mysql_error());

echo '{"success":true}';

//ECHO $id;
?>