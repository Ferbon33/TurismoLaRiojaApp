
<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
@mysql_connect('localhost','root','');
@mysql_select_db('tierras');
@$persona=$_GET['persona'];
@$criterio=$_GET['criterio'];

 if ($criterio=='1') {
 	$sql="SELECT * from notarial where escribano like '%$persona%'";
 }
if ($criterio=='2')
{
	$sql="SELECT * from notarial where barrio like '%$persona%'";

}


$res=mysql_query($sql) or die (mysql_error());
$datos_json=array();

while ($row=mysql_fetch_array($res)) {
	$datos_json[]=array_map('utf8_encode', $row);
}
echo json_encode($datos_json);



?>


