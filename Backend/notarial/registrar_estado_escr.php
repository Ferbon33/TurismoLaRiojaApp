<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
@mysql_connect('localhost','root','');
@mysql_select_db('tierras');
@$id=$_POST['id'];



 	$sql="UPDATE notarial SET estado = 'FINALIZADO'  where id= '$id'";



$res=mysql_query($sql) or die (mysql_error());

echo '{"success":true}';



?>