<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
@mysql_connect('localhost','root','');
@mysql_select_db('tierras');
@$buscar=$_GET['buscar'];
@$criterio=$_GET['criterio'];

 if ($criterio=='1') {
 	$sql="SELECT * from postulante where dni like '%$buscar%'";
 }
if ($criterio=='2')
{
	$sql="SELECT * from postulante where apeynom like '%$buscar%'";

}


$res=mysql_query($sql) or die (mysql_error());
$datos_json=array();

while ($row=mysql_fetch_array($res)) {
	$datos_json[]=array_map('utf8_encode', $row);
}
echo json_encode($datos_json);



?>