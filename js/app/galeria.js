function galeria_imagenes(corredor){

var menu="";
var server='https://turismoapp.larioja.gov.ar/public/turismo_lr/imagenes/galeria/';

db.transaction(function (tx) {
            tx.executeSql('SELECT * FROM GALERIA_IMG WHERE id_corredor=?', [corredor], function (tx, resultado) {
            
                 
                 var len = resultado.rows.length;
                 var galeria = "";

          for (i = 0; i < len; i++){
                  
                  id_corredor = resultado.rows.item(i).id_corredor;
                  //nombre = resultado.rows.item(i).nombre;
                  imagen = resultado.rows.item(i).imagen;
                  coord_x = resultado.rows.item(i).coord_x;
                  coord_y = resultado.rows.item(i).coord_y;
              
              if (estado == "OFF LINE") {
                  imagen = 'no_foto.png';
                  server='imagenes/';
                                   };
                 
              
              galeria +='<div class="carousel-item" ><img src="'+server+''+imagen+'"></div>';
               }
              
               
$('#principal').html('<div class="carousel carousel-slider center"><div class="carousel-fixed-item center"></div>'+galeria+'</div>');
 $('#btn_left').html('<a href="#" class="sidenav-trigger"onclick="circuito1('+id_corredor+')" ><i class="material-icons">arrow_back</i></a>');
   $('#corredor').html('');

  $('#float').html('<div class="fixed-action-btn" onclick="ubicacion('+coord_x+','+coord_y+')"><a class="btn-floating btn-large blue"><i class="large material-icons">location_on</i></a></div>');
  $('#encabezado').html('<img src="imagenes/encabezado.jpg" width="100%" >');
 M.AutoInit();
             });

         });

  
  
 
}