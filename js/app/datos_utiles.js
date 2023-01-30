function d_utiles(corredor){
  
  //var server='http://200.91.34.81:8080/turismo_lr/imagenes/datos_utiles/';
   var server='https://turismoapp.larioja.gov.ar/public/turismo_lr/imagenes/datos_utiles/'; 
db.transaction(function (tx) {
            tx.executeSql('SELECT * FROM DATOS_UTILES WHERE id_corredor=?', [corredor], function (tx, resultado) {
            
                 
                 var len = resultado.rows.length;
                 var datos_utiles = "";
          for (i = 0; i < len; i++){
                  
                  id_corredor = resultado.rows.item(i).id_corredor;
                  nombre = resultado.rows.item(i).nombre;
                  detalle = resultado.rows.item(i).detalle;
                  imagen = resultado.rows.item(i).imagen;
                 
              
              if (estado == "OFF LINE") {
                  imagen = 'no_foto.png';
                  server='imagenes/datos_utiles/';
                                   };
                  
              
              datos_utiles +='<div class="col s12 m7"><div class="card horizontal"><div class="card-image"><img src="'+server+''+imagen+'"></div><div class="card-stacked"><div class="card-content"><p>'+nombre+'</p></div><div class="card-action"><a href="#">'+detalle+'</a></div></div></div></div>';

               }
              
                
                $('#principal').html('<ul class="collection">'+datos_utiles+'</ul>');
                $('#corredor').html('');
                $('#encabezado').html('<img src="imagenes/encabezado.jpg" width="100%" >');
 
                $('#btn_left').html('<a href="#" class="sidenav-trigger"onclick="circuito1('+id_corredor+')" ><i class="material-icons">arrow_back</i></a>');
                $('#float').html('');
            });

         });










}