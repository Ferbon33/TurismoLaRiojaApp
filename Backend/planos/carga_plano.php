<?php header('Access-Control-Allow-Origin: *'); ?>

<?php
mysql_connect('localhost','root','');
mysql_select_db('tierras');
$apeynom=$_POST['persona'];
$dni=$_POST['dni'];
$cuil=$_POST['cuil'];
$disposicion=$_POST['disposicion'];
$ubicacion=$_POST['ubicacion'];
$tomo=$_POST['tomo'];
$folio=$_POST['folio'];
$anio=$_POST['anio'];
$dominio_antc=$_POST['dominio_antc'];
$acto=$_POST['acto'];
$dep=$_POST['dep'];
$circ=$_POST['circ'];
$sec=$_POST['sec'];
//$mza=$_POST['mza'];
//$parc=$_POST['parc'];

$mza= str_pad( $_POST['mza'],5,"0",STR_PAD_LEFT);
$parc= str_pad( $_POST['parc'],5,"0",STR_PAD_LEFT);
$par_nomenc=$dep.$circ.$sec.$mza.$parc."0000000";

$sql="INSERT INTO planos (apeynom,dni,cuil,disposicion,ubicacion,tomo,folio,anio,dominio_antc,par_nomenc) 
values ('$apeynom','$dni','$cuil','$disposicion','$ubicacion','$tomo','$folio','$anio','$dominio_antc','$par_nomenc')";
$res=mysql_query($sql) or die ("Error en: $busqueda: " . mysql_error());
$datos_json=array();

$datos_json='[{"valido":"validate"}]';

echo $datos_json; 


?>