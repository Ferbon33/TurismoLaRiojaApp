<?php
@mysql_connect('localhost','root','');
@mysql_select_db('tierras');


$dni_jefe_familia=$_POST['dni_jefe_familia'];
$val1=$_POST['1'];
$val2=$_POST['2'];
$val3=$_POST['3'];
$val4=$_POST['4'];
$val5=$_POST['5'];
$val6=$_POST['6'];
$val7=$_POST['7'];
$val8=$_POST['8'];
$val9=$_POST['9'];
$val10=$_POST['10'];
$val11=$_POST['11'];
$val12=$_POST['12'];
$val13=$_POST['13'];
$val14=$_POST['14'];
$val15=$_POST['15'];
$val16=$_POST['16'];




$insert="INSERT INTO `tierras`.`area_social_documentacion` (`dni_jefe_familia`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`) VALUES ('$dni_jefe_familia', '$val1', '$val2', '$val3', '$val4', '$val5', '$val6', '$val7', '$val8', '$val9', '$val10', '$val11', '$val12', '$val13', '$val14', '$val15', '$val16');";
mysql_query($insert) or die (mysql_error());

?>