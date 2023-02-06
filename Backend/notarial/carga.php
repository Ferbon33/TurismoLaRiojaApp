<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
//@include('conexion.php');
@mysql_connect('localhost','root','');
@mysql_select_db('tierras');
//mysql_select_db('tierras');
@$barrio=$_POST['barrio'];
@$escr=$_POST['escri'];
@$estado = 'EN PROCESO';


$update_estado="INSERT INTO notarial (escribano,barrio,estado) values ('$escr','$barrio','$estado')";

$res=mysql_query($update_estado) or die (mysql_error());

echo '{"success":true}';

//ECHO $id;
?>