<?php
@mysql_connect('localhost','root','');
@mysql_select_db('tierras');

$dni='27450615';//$_POST['dni'];

$sql1="select * from area_social where nro_doc='$dni'";
$res1=mysql_query($sql1);
$sql2="select * from area_social_documentacion where dni_jefe_familia='$dni'";
$res2=mysql_query($sql2);
$sql3="select * from area_solcial_g_familiar where dni_jefe_familia='$dni'";
$res3=mysql_query($sql3);

$row1 = mysql_fetch_array($res1);
$row2 = mysql_fetch_array($res2);
//$row3 = mysql_fetch_array($res3);   

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Resultado Consulta</title>

<script type="text/javascript" src="js/qrcode.js"></script>
<script src="js/jquery-1.7.2.min"></script>
<style type="text/css">
.CALIBRI {
	font-family: Calibri;
}
.CAL {
	font-family: "Arial Narrow";
	font-size: 30px;
	font-weight: bold;
}
.C {
	font-family: Calibri;
	text-align: center;
}
body,td,th {
	font-family: "Arial Narrow";
	/* [disabled]font-size: 19px; */
	text-align: center;
	color: #000;
}
.C {
	font-weight: bold;
}
.C {
	font-weight: bold;
	font-size: 16px;
}
.C {
	font-weight: bold;
	text-align: center;
}
.SD {
	font-weight: bold;
	text-align: center;
}
.sc {
	text-align: center;
	font-family: Arial, Helvetica, sans-serif;
}
.sd {
	font-weight: bold;
}
.ads {
	font-weight: bold;
}
.asd {
	text-align: center;
}
.zx {
	text-align: center;
}
.z {
	font-weight: bold;
	text-align: center;
}
.dc {
	text-align: center;
}
.s {
	font-weight: bold;
	text-align: center;
}
.as {
	font-weight: normal;
}
.sd {
	font-weight: normal;
}
.sd1 {	font-weight: bold;
}
.sd1 {
	font-weight: bold;
	text-align: center;
}
.zx {
	text-align: center;
}
.sd {
	font-weight: bold;
	text-align: center;
}
.sda {
	text-align: center;
}
.qw {
	text-align: center;
}
.ad {
	font-weight: bold;
}
.d {
	font-weight: bold;
	text-align: center;
}
.xzc {
	font-weight: bold;
	text-align: center;
}
.zc {
	text-align: center;
}
.sad {
	font-weight: bold;
	text-align: center;
}
.zc {
	text-align: center;
}
.cz {
	font-weight: bold;
	text-align: center;
}
.zxc {
	font-weight: bold;
	text-align: center;
}
.zxc {
	font-weight: bold;
}
.zxc {
	font-weight: bold;
}
.zc {
	font-weight: bold;
}
.xzc {
	font-weight: bold;
}
.Estilo3 {font-family: Calibri; font-weight: bold; }
.sd2 {	font-weight: bold;
}
.sd2 {	font-weight: normal;
}
.sd2 {	font-weight: bold;
	text-align: center;
}
.CAL pre {
	font-size: 36px;
	font-family: Calibri;
	text-align: center;
}
.J {
	font-weight: bold;
}
.J {
	font-weight: normal;
}
.C {
	font-size: 18px;
}
.C {
	font-size: 20px;
}
.j {
	font-size: 20px;
}
.l {
	font-weight: bold;
}
.j {
	font-weight: bold;
	font-size: 20px;
}
.J {
	font-weight: bold;
}
.J {
	font-weight: bold;
}
.J {
	font-weight: normal;
}
.j1 {	font-size: 20px;
}
.j1 {
	font-size: 18px;
	font-family: "Arial Narrow";
	text-align: left;
}
.k {
}
.k {
}
.j {
	font-size: 16px;
	font-family: "Times New Roman", Times, serif;
}
.J {
	font-size: 16px;
	font-family: "Arial Narrow";
	text-align: center;
}
.J1 {
	font-weight: bold;
}
.j2 {	font-size: 20px;
}
.j2 {	font-weight: bold;
	font-size: 20px;
}
.j2 {	font-weight: bold;
}
.J11 {	font-weight: bold;
}
.k {
	font-family: "Times New Roman", Times, serif;
}
.k {
	font-weight: bold;
}
.l {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: normal;
}
.j {
	font-family: "Arial Black", Gadget, sans-serif;
}
.j {
	font-size: 16px;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: normal;
}
.j {
	font-family: Arial, Helvetica, sans-serif;
}
.j {
	font-family: Arial, Helvetica, sans-serif;
}
.j {
	text-align: center;
}
.j {
	text-align: center;
	font-weight: bold;
}
.j3 {	font-size: 20px;
}
.j3 {	font-weight: bold;
	font-size: 20px;
}
.j3 {	font-size: 16px;
	font-family: "Times New Roman", Times, serif;
}
.j3 {	font-family: "Arial Black", Gadget, sans-serif;
}
.j3 {	font-size: 16px;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: normal;
}
.j3 {	font-family: Arial, Helvetica, sans-serif;
}
.j3 {	font-family: Arial, Helvetica, sans-serif;
}
.j3 {	text-align: center;
}
.j3 {
	text-align: left;
}
.L {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: normal;
	text-align: center;
	font-size: 24px;
}
.L1 {
	font-family: "Arial Narrow";
	font-size: 12px;
}
.cz {
	text-align: left;
}
.zxc {
	text-align: left;
}
.zc {
	text-align: left;
}
.L2 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: normal;
	text-align: center;
	font-size: 14px;
}
.arial_svel {
	font-family: Arial, Helvetica, sans-serif;
	text-align: right;
}
.j4 {	font-size: 20px;
}
.j4 {	font-weight: bold;
	font-size: 20px;
}
.j4 {	font-size: 16px;
	font-family: "Times New Roman", Times, serif;
}
.j4 {	font-family: "Arial Black", Gadget, sans-serif;
}
.j4 {	font-size: 16px;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: normal;
}
.j4 {	font-family: Arial, Helvetica, sans-serif;
}
.j4 {	font-family: Arial, Helvetica, sans-serif;
}
.j4 {	text-align: center;
}
.j4 {
	text-align: left;
}
.arial_narrow {
	font-family: "Arial Narrow";
	font-size: 18px;
	text-align: left;
}
negrita {
	font-weight: bold;
}
.negrita {
	font-weight: bold;
	font-size: 16px;
	text-align: left;
}
med_18 {
	font-size: 18px;
}
.szc {
	text-align: left;
}
.sd {
	font-weight: bold;
}
.szc {
	text-align: left;
}
.SD {
	color: #999;
}
.sd {
	text-align: left;
}
.zsc {
	text-align: left;
}
.szd {
	text-align: left;
}
.sd {
	font-size: 25px;
	font-weight: normal;
}
.j4 .ads {
	text-align: left;
}
.sd3 {	font-weight: bold;
}
.sd3 {	font-weight: normal;
}
.sd3 {	font-weight: bold;
	text-align: center;
}
.sd3 {	font-weight: bold;
}
.sd3 {	text-align: left;
}
.sd3 {	font-size: 25px;
	font-weight: normal;
}
.j .arial_narrow_negrita {
	font-weight: bold;
}
.CAL .L2.tamanio10 {
	font-size: 10px;
}
titulo {
	font-family: "Arial Narrow";
}
titulo {
	font-size: 36px;
}
.izquierda {
	text-align: left;
}
.j .arial_narrow_negrita {
	text-align: center;
}
.j5 {	font-size: 20px;
}
.j5 {	font-weight: bold;
	font-size: 20px;
}
.j5 {	font-size: 16px;
	font-family: "Times New Roman", Times, serif;
}
.j5 {	font-family: "Arial Black", Gadget, sans-serif;
}
.j5 {	font-size: 16px;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: normal;
}
.j5 {	font-family: Arial, Helvetica, sans-serif;
}
.j5 {	font-family: Arial, Helvetica, sans-serif;
}
.j5 {	text-align: center;
}
.j5 {
	text-align: center;
	font-weight: bold;
	font-size: 24px;
}
.q {
	text-align: left;
}
.qq {
	text-align: left;
}
</style>
</head>

<body>
<table width="100%" height="100%" border="1" align="left" cellspacing="0">
  <tr>
    <td width="1066" height="595" align="left" valign="top"><table width="100%" border="0" align="left">
      <tr align="left">
        <td width="1051" align="center" valign="top"><table width="100%" border="0" cellspacing="0">
          <tr>
            <td width="78" height="96" align="center" class="CAL">&nbsp;</td>
            <td width="235" align="center" class="CAL">
            <p class="L2">
            	<img src="../../imagenes/LogoTierras.png" width="600" height="200" /></td>
            <td width="114" align="center" class="CAL">&nbsp;</td>
            <td width="149" align="center" class="CAL">&nbsp;</td>
            <td width="485" align="left" class="j"><p><span class="CAL">Informe Area Social</span></p></td>
          </tr>
          <tr>
            <td height="30" align="center" class="j">&nbsp;</td>
            <td align="center" class="j">&nbsp;</td>
            <td align="left" class="j">&nbsp;</td>
            <td align="left" class="j">&nbsp;</td>
            <td align="left" bgcolor="#CCCCCC" class="j"><span class="j5"><?php   ?></span></td>
          </tr>
          </table>
          
          <table width="100%" border="0" cellspacing="0">
            <tr>
              <th width="23%" class="izquierda" scope="j">&nbsp;</th>
              <th width="77%" align="left" scope="j">&nbsp;</th>
              
            <tr>
              <th class="izquierda" scope="col">&nbsp;</th>
              <th scope="j">&nbsp;</th>
            <tr>
              <th class="izquierda" scope="col">&nbsp;</th>
              <th scope="j"><span class="arial_narrow"> _______________________________________________________________________________________________</span>_______</th>
            <tr>
              <th class="izquierda" scope="col">&nbsp;</th>
              <th align="left" scope="j">&nbsp;</th>
            <tr>
   <th class="izquierda" scope="col"><strong>FECHA</strong>:<?php echo  date("d-m-Y");  ?></th>
              <th class="izquierda" scope="col"></th>
            <tr>
              <th class="izquierda" scope="col"></th>
              <th align="left" scope="j">Datos Personales</th>
            </table>
<table width="100%" border="1" cellpadding="0" align="left" cellspacing="0">
  <tr>
    <td width="229" height="26" align="left"><strong class="j1">Nombre:</strong></td>
    <td width="958" align="left" class="q"><strong class="j1"><?php echo $row1['nombre'];   ?></strong></td>
    </tr>
    <tr>
    <td width="109" height="26" align="left"><strong class="j1">Apellido:</strong></td>
    <td width="958" align="left" class="q"><strong class="j1"><?php echo $row1['apellido'];  ?></strong></td>
    </tr>
    <tr>
    <td width="109" height="26" align="left"><strong class="j1">Numero de DNI:</strong></td>
    <td width="958" align="left" class="q"><strong class="j1"><?php echo $row1['nro_doc'];  ?></strong></td>
    </tr>
    <tr>
    <td width="109" height="26" align="left"><strong class="j1">Numero de Cuit:</strong></td>
    <td width="958" align="left" class="q"><strong class="j1"><?php echo $row1['cuit'];  ?></strong></td>
    </tr>
    <tr>
    <td width="109" height="26" align="left"><strong class="j1">Fecha de Nac:</strong></td>
    <td width="958" align="left" class="q"><strong class="j1"><?php echo $row1['fecha_de_nac'];  ?></strong></td>
    </tr>
    <tr>
    <td width="109" height="26" align="left"><strong class="j1">Edad:</strong></td>
    <td width="958" align="left" class="q"><strong class="j1"><?php echo $row1['edad'];  ?></strong></td>
    </tr>
    <tr>
    <td width="109" height="26" align="left"><strong class="j1">Telefono</strong></td>
    <td width="958" align="left" class="q"><strong class="j1"><?php echo $row1['tel'];  ?></strong></td>
    </tr>
    <tr>
    <td width="109" height="26" align="left"><strong class="j1">Estudios</strong></td>
    <td width="958" align="left" class="q"><strong class="j1"><?php echo $row1['estudio'];  ?></strong></td>
    </tr>
    <tr>
    <td width="109" height="26" align="left"><strong class="j1">Ocupacion</strong></td>
    <td width="958" align="left" class="q"><strong class="j1"><?php echo $row1['ocupacion'];  ?></strong></td>
    </tr>
    <tr>
    <td width="109" height="26" align="left"><strong class="j1">Beneficio Social</strong></td>
    <td width="958" align="left" class="q"><strong class="j1"><?php echo $row1['beneficio_social'];  ?></strong></td>
    </tr>
     <tr>
    <td width="109" height="26" align="left"><strong class="j1">Enfermedad Cornica</strong></td>
    <td width="958" align="left" class="q"><strong class="j1"><?php echo $row1['enfermedad_cronica'];  ?></strong></td>
    </tr>
    <tr>
    <td width="109" height="26" align="left"><strong class="j1">Certificado</strong></td>
    <td width="958" align="left" class="q"><strong class="j1"><?php echo $row1['certificado_enfermedad'];  ?></strong></td>
    </tr>
    <tr>
    <td width="109" height="26" align="left"><strong class="j1">Situacion Laboral</strong></td>
    <td width="958" align="left" class="q"><strong class="j1"><?php echo $row1['sit_lab_act'];  ?></strong></td>
    </tr>
  </table>
<table width="100%" border="0" cellpadding="0" align="left" scope="col" cellspacing="0">
  <tr>
    <th class="izquierda" scope="col"></th>
              <th align="left" scope="j">Grupo familiar</th>
    </tr>
    
  </table>
  <table width="100%" border="1" cellpadding="0" align="left" scope="col" cellspacing="0">
  
  <?php
  while ($row3=mysql_fetch_array($res3)) {
	

echo '<tr>';
    echo '<td width="229" height="26" scope="j"align="left"><strong class="j1">Nombre:</strong></td>';
    echo '<td width="958" align="left" class="q"><strong class="j1">'.$row3['nombre'].'</strong></td>';
    echo '<td width="229" height="26" scope="j"align="left"><strong class="j1">Dni:</strong></td>';
    echo '<td width="958" align="left" class="q"><strong class="j1">'.$row3['dni'].'</strong></td>';
    echo '<td width="229" height="26" scope="j"align="left"><strong class="j1">Vinculo:</strong></td>';
    echo '<td width="958" align="left" class="q"><strong class="j1">'.$row3['vinculo'].'</strong></td>';
    echo '<td width="229" height="26" scope="j"align="left"><strong class="j1">educacion:</strong></td>';
    echo '<td width="958" align="left" class="q"><strong class="j1">'.$row3['educacion'].'</strong></td>';
    echo '<td width="229" height="26" scope="j"align="left"><strong class="j1">Ocupacion:</strong></td>';
    echo '<td width="958" align="left" class="q"><strong class="j1">'.$row3['ocupacion'].'</strong></td>';
    echo '<td width="229" height="26" scope="j"align="left"><strong class="j1">Obra Social:</strong></td>';
    echo '<td width="958" align="left" class="q"><strong class="j1">'.$row3['obra_social'].'</strong></td>';
     echo '</tr>';
    }
 ?>   

  </table>
<table width="100%" border="0" cellpadding="0" align="left" scope="col" cellspacing="0">
  <tr>
    <th class="izquierda" scope="col"></th>
              <th align="left" scope="j">Habitad y Vivienda</th>
    </tr>
    
  </table>
  <table width="100%" border="1" cellpadding="0" align="left" cellspacing="0">
  <tr>
    <td width="229" height="26" align="left"><strong class="j1">vive en:</strong></td>
    <td width="958" align="left" class="q"><strong class="j1"><?php echo $row1['vive_en'];   ?></strong></td>
    <td width="109" height="26" align="left"><strong class="j1">Pisos:</strong></td>
    <td width="958" align="left" class="q"><strong class="j1"><?php echo $row1['pisos'];  ?></strong></td>
    <td width="109" height="26" align="left"><strong class="j1">Paredes</strong></td>
    <td width="958" align="left" class="q"><strong class="j1"><?php echo $row1['paredes'];  ?></strong></td>
    <td width="109" height="26" align="left"><strong class="j1">Electrcidad:</strong></td>
    <td width="958" align="left" class="q"><strong class="j1"><?php echo $row1['electricidad'];  ?></strong></td>
    <td width="329" height="26" align="left"><strong class="j1">Tiene Agua:</strong></td>
    <td width="958" align="left" class="q"><strong class="j1"><?php echo $row1['tiene_agua'];  ?></strong></td>
    </tr>
   <tr>
   	<td width="229" height="26" align="left"><strong class="j1">Proviene Agua:</strong></td>
    <td width="958" align="left" class="q"><strong class="j1"><?php echo $row1['proviene_agua'];   ?></strong></td>
    <td width="109" height="26" align="left"><strong class="j1">Tiene Baño:</strong></td>
    <td width="958" align="left" class="q"><strong class="j1"><?php echo $row1['tiene_banio'];  ?></strong></td>
    <td width="109" height="26" align="left"><strong class="j1">Tiene Pozo</strong></td>
    <td width="958" align="left" class="q"><strong class="j1"><?php echo $row1['tiene_pozo'];  ?></strong></td>
    <td width="109" height="26" align="left"><strong class="j1">Tiene Cocina:</strong></td>
    <td width="958" align="left" class="q"><strong class="j1"><?php echo $row1['lugar_coninar'];  ?></strong></td>
    <td width="329" height="26" align="left"><strong class="j1">Combustible Cocina:</strong></td>
    <td width="958" align="left" class="q"><strong class="j1"><?php echo $row1['combustible_cocina'];  ?></strong></td>
   </tr>
   <tr>
   	<td width="229" height="26" align="left"><strong class="j1">Techo:</strong></td>
    <td width="958" align="left" class="q"><strong class="j1"><?php echo $row1['techos'];   ?></strong></td>
    <td width="109" height="26" align="left"><strong class="j1">Observacion:</strong></td>
    <td width="958" align="left" class="q" colspan="7"><strong class="j1"><?php echo $row1['observacion_5'];  ?></strong></td>
   </tr>
  </table>
  <table width="100%" border="0" cellpadding="0" align="left" scope="col" cellspacing="0">
  <tr>
    <th class="izquierda" scope="col"></th>
              <th align="left" scope="j"></th>
    </tr>
    
  </table>
  <table width="100%" border="0" cellpadding="0" align="left" scope="col" cellspacing="0">
  <tr>
    <th class="izquierda" scope="col"></th>
              <th align="left" scope="j">Documentacion Presentada</th>
    </tr>
    
  </table>
  <p align="left">Fotocopia de DNI del grupo familiar conviviente (TODO LOS MIEMBROS) - <?php echo $row2['1'];   ?><p>
  <p align="left">Fotocopia de la Acta de Nacimiento de los hijos. - <?php echo $row2['2'];   ?></p>
  <p align="left">En caso de tener régimen de visitas de menores: legar otorgada por el juez. - <?php echo $row2['3'];   ?></p>
  <p align="left">En caso de tener régimen de visitas de menores: legar otorgada por el juez. - <?php echo $row2['4'];   ?></p>
  <p align="left">Certificado de domicilio de los titulares - <?php echo $row2['5'];   ?></p>
  <p align="left">Constancia de Cuil y Certificado de negatividad del ANSES - <?php echo $row2['6'];   ?></p>
  <p align="left">Fotocopia del recibo de sueldo, tirilla del banco o declaración jurada de los ingresos que perciban. - <?php echo $row2['7'];   ?>
</p>
  <p align="left">Certificado de inscripción en vivienda - <?php echo $row2['8'];   ?></p>
  <p align="left">En el caso de poseer medio de movilidad, fotocopia de registro del automotor - <?php echo $row2['9'];   ?></p>
  <p align="left">Fotocopia de acta de matrimonio.Fotocopia de acta de matrimonio. - <?php echo $row2['10'];   ?></p>
  <p align="left">Fotocopia de acta de convivencia - <?php echo $row2['11'];   ?></p>
  <p align="left">Fotocopia de sentencia de divorcio. - <?php echo $row2['12'];   ?></p>
  <p align="left">Fotocopia de acta de defunción de cónyuge. - <?php echo $row2['13'];   ?></p>
  <p align="left">Certificado único de discapacidad extendido por la junta evaluadora de discapacidad - <?php echo $row2['14'];   ?></p>
  <p align="left">Fotocopia de Minuta H de ambos titulares con informe del Registro de la propiedad. - <?php echo $row2['15'];   ?></p>
  <p align="left">En caso de alquilar, presentar fotocopia de contrato y recibo de alquiler. Al momento de presentar la documentación traer los originales que acompañen la copia. - <?php echo $row2['16'];   ?></p>











  
<br>
<div >
	
	<table width="100%" border="0" align="center" cellpadding="1" cellspacing="0" class="arial_narrow">
  <tr>
    <th scope="col"></th>
  </tr>
</table>
</div>


<p>&nbsp;</p>
<table width="100%" border="0" cellspacing="0">
  <tr>
    <th width="35%" height="226" scope="col"><p>&nbsp;</p>
      <p></p></th>
    <th width="35%" scope="col"><p> <div id="qrcode" align="center"></div></p></th>
    <th width="30%" scope="col"><span class="J"></span><span class="J"></span></th>
  </tr>
</table>
<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>

<p aling="left"><strong>Recepcion:</strong><?php     ?></p><p>firma:.......................................</p>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



  <th scope="col"><div id="qrcode_2" align="center"></div></th>
</tr>
</table>

<table width="95%" border="0" align="center" cellspacing="0">
  <tr>
    <th scope="col">
  </th>
  </tr>
</table>
</td>
      </tr>
    </table>
     </td>
  </tr>
</table>
</body>


</html>
<script type="text/javascript">
	/*/
var qrcode = new QRCode(document.getElementById("qrcode"), {
  width : 250,
  height : 250
});


var qrcode_2 = new QRCode(document.getElementById("qrcode_2"), {
  width : 150,
  height : 150
});

function makeCode () {    
  
  
  
  qrcode.makeCode('<?php echo $numero;  ?>');
  qrcode_2.makeCode('<?php echo $numero;  ?>');
}

makeCode();

/*/
</script>