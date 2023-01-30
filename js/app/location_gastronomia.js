function location_gastronimia(){
  $('#res_cerca').html('<img src="imagenes/jar-loading.gif" width="15%" align="center">');
var server='https://turismoapp.larioja.gov.ar/public/turismo_lr/imagenes/gastronomia/';  
  /*/
  if (valor==0) {tipo='Hotel'}; 
  if (valor==1) {tipo='Cabaña'};
  if (valor==2) {tipo='Hostel'};
  if (valor==3) {tipo='Apart Hotel'};
  if (valor==4) {tipo='Hospedaje'};
  
  if (!valor) {tipo=''};
/*/
  
  
//var distancia_rango = '50';//$('#rango').val();
//$('#pant').html('Alojamitnos Cercanos Menor a '+distancia_rango+' Km de distancia');
db.transaction(function (tx) {
            tx.executeSql('SELECT * FROM  GASTRONIMIA ' , [ ], function (tx, resultado) {
            
               
                 var cant=0;
                 var len = resultado.rows.length;
                 var alojamientos = "";
          for (i = 0; i < len; i++){
                 
                  id_corredor = resultado.rows.item(i).id_corredor;
                  nombre = resultado.rows.item(i).nombre;
                  direccion= resultado.rows.item(i).direccion;
                  telefono = resultado.rows.item(i).telefono;  
                  imagen = resultado.rows.item(i).imagen;
                  mail = resultado.rows.item(i).mail;
                  departamento = resultado.rows.item(i).departamento;
                  tipo = resultado.rows.item(i).tipo;
                  categoria = resultado.rows.item(i).categoria;
                  web = resultado.rows.item(i).web;
                  coord_x = resultado.rows.item(i).coord_x;
                  coord_y = resultado.rows.item(i).coord_y; 
              //    distancia = calcDistance(act_coord_x, act_coord_y,coord_x,coord_y)
               if (!coord_x) {
               distancia = '?';
              }
              else{
                 distancia = calcDistance(act_coord_x, act_coord_y,coord_x,coord_y);
              }
              if (estado == "OFF LINE") {
                 imagen = 'no_foto.png';
                 server='imagenes/';
                                   };
                  
                //if(distancia<=parseFloat(distancia_rango)){
                   //alojamientos +='<div class="carousel-item"><div class="row"><div class="card"><div class="card-image"><img class="materialboxed" id="imagen" src="'+server+''+imagen+'"><a class="btn-floating halfway-fab waves-effect waves-light green" href="https://maps.google.com/?q='+coord_x+','+coord_y+'"><i class="material-icons">location_on</i></a></div><div class="card-content"><p>'+nombre+'</p><p>Dist:'+distancia+' Km</p></div></div></div></div>';
                  alojamientos +='<li class="collection-item avatar "><img id="imagen" src="'+server+''+imagen+'" alt="" class="circle materialboxed"><span class="title left">'+nombre+'</span><br><p align="left">'+direccion+'<br>Distancia:'+distancia+'km</p><a href="#!" class="secondary-content"><i class="material-icons" onclick="ubicacion('+coord_x+','+coord_y+')">location_on</i><i class="material-icons">local_phone</i><i class="material-icons">chat</i></a></li>';  
                   ++cant
               // }   
             
                
   
                       
               }

                  $('#res_cerca').html('<ul class="collection">'+alojamientos+'</ul>');
                  //alert(cant)
                  //$('#res_cerca').html('<div class="carousel">'+alojamientos+'</div>');
                  //alojamientos="";  
                
               // $('#principal').html('<ul class="collection">'+alojamiento+'</ul>');
                 
                //$('#corredor').html('');
               // $('#encabezado').html('<img src="imagenes/encabezado.jpg" width="100%" >');
                $('#encabezado').html('');
               //  $('#icon_online').html('<a class="dropdown-trigger brand-logo right" href="#" data-target="dropdown1"><i class="material-icons">more_vert</i></a>');
                
          // <a href="#" class="brand-logo right"><i class="material-icons">cloud_off</i></a>
               $('#btn_left').html('<a href="#" class="sidenav-trigger"onclick="carrusel()" ><i class="material-icons">arrow_back</i></a>');
               $('#float').html('');
               $('#corredor').html('Gastronomia Cercana');
              M.AutoInit();
            });

         });
                          
  
}