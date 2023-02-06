<?php
@mysql_connect('localhost','root','');
@mysql_select_db('tierras');


$lugar=$_POST['lugar'];
$apellido=$_POST['apellido'];
$nombre=$_POST['nombre'];
$nro_doc=$_POST['nro_doc'];
$cuit=$_POST['cuit'];
@$conyugue=$_POST['conyugue'];
@$dni_conyugue='1';
$domicilio=$_POST['domicilio'];
$tel=$_POST['tel'];
$estudio=$_POST['estudio'];
$ocupacion=$_POST['ocupacion'];
$beneficio_social=$_POST['beneficio_social'];
$obra_social=$_POST['obra_social'];
$enfermedad_cronica=$_POST['enfermedad_cronica'];
$certificado_enfermedad=$_POST['certificado_enfermedad'];
$sit_lab_act=$_POST['sit_lab_act'];
@$v_n=1;
@$v_adolecente='1';//$_POST['v-adolecente'];
@$v_adulto='1';//$_POST['v-adulto'];
@$m_n='1';//$_POST['m-n'];
@$m_adolecente='1';//$_POST['m-adolecente'];
@$m_adulto='1';//$_POST['m-adulto'];
@$discapacidad='1';//$_POST['discapacidad'];
@$total='1';//$_POST['total'];
@$observacion='1';//$_POST['observacion'];
$vive_en=$_POST['vive_en'];
$pisos=$_POST['pisos'];
$paredes=$_POST['paredes'];
//$techos=$_POST['techos'];
$electricidad=$_POST['electricidad'];
$tiene_agua=$_POST['tiene_agua'];
$proviene_agua=$_POST['proviene_agua'];
$tiene_banio=$_POST['tiene_banio'];
$tiene_pozo=$_POST['tiene_pozo'];
@$lugar_coninar='1';//$_POST['lugar_coninar'];
$combustible_cocina=$_POST['combustible_cocina'];
$techos=$_POST['techos'];
$observacion_1=$_POST['observacion_1'];
@$observacion_2='1';//$_POST['observacion_2'];
@$observacion_3='1';//$_POST['observacion_3'];
@$observacion_4='1';//$_POST['observacion_4'];
@$observacion_5='1';//$_POST['observacion_5'];
$fecha_de_nac=$_POST['fecha_de_nac'];
$edad=$_POST['edad'];

$insert="INSERT INTO area_social (lugar,   apellido,  nombre,   nro_doc,    cuit,   conyugue,   dni_conyugue,   domicilio,   tel,   estudio,   ocupacion,   beneficio_social,   obra_social,   enfermedad_cronica,   certificado_enfermedad,   sit_lab_act,  v_n,    v_adolecente,   v_adulto,   m_n,   m_adolecente,   m_adulto,   discapacidad,   total,   observacion,   vive_en,   pisos,    paredes,   techos,electricidad,   tiene_agua,   proviene_agua,   tiene_banio,   tiene_pozo,   lugar_coninar,   combustible_cocina, observacion_1,   observacion_2,   observacion_3,   observacion_4,   observacion_5,fecha_de_nac,edad) 
	  values ('$lugar','$apellido','$nombre','$nro_doc','$cuit','$conyugue','$dni_conyugue','$domicilio','$tel','$estudio','$ocupacion','$beneficio_social','$obra_social','$enfermedad_cronica','$certificado_enfermedad','$sit_lab_act','$v_n','$v_adolecente','$v_adulto','$m_n','$m_adolecente','$m_adulto','$discapacidad','$total','$observacion','$vive_en','$pisos' ,'$paredes','$techos','$electricidad','$tiene_agua','$proviene_agua','$tiene_banio','$tiene_pozo','$lugar_coninar','$combustible_cocina','$observacion_1','$observacion_2','$observacion_3','$observacion_4','$observacion_5','$fecha_de_nac','$edad') ";
mysql_query($insert) or die (mysql_error());

?>