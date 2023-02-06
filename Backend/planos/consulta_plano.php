<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
@mysql_connect('localhost','root','');
@mysql_select_db('tierras');
@$persona=$_GET['persona'];
@$criterio=$_GET['criterio'];

 if ($criterio=='1') {
 	$sql="SELECT * from planos where disposicion like '%$persona%'";
 }
if ($criterio=='2')
{
	$sql="SELECT * from planos where apeynom like '%$persona%'";

}
if ($criterio=='3')
{
	
	$sql="SELECT * from planos where dni like '%$persona%'";


}
if ($criterio=='4')
{
	
	$sql="SELECT * from planos where cuil like '%$persona%'";


}
if ($criterio=='5')
{
	
	$sql="SELECT * from planos where tomo like '%$persona%'";


}

$res=mysql_query($sql) or die (mysql_error());
$datos_json=array();

while ($row=mysql_fetch_array($res)) {
	$datos_json[]=array_map('utf8_encode', $row);
}
echo json_encode($datos_json);



?>