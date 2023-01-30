function gastronimia(corredor){
 var server='https://turismoapp.larioja.gov.ar/public/turismo_lr/imagenes/gastronomia/';

db.transaction(function (tx) {
            tx.executeSql('SELECT * FROM GASTRONIMIA WHERE id_corredor=?', [corredor], function (tx, resultado) {
            
                 
                 var len = resultado.rows.length;
                 var gastronomia = "";
          for (i = 0; i < len; i++){
                  
                  id_corredor = resultado.rows.item(i).id_corredor;
                  nombre = resultado.rows.item(i).nombre;
                  direccion= resultado.rows.item(i).direccion;
                  telefono = resultado.rows.item(i).telefono;  
                  imagen = resultado.rows.item(i).imagen;
                  mail = resultado.rows.item(i).mail;
                  departamento = resultado.rows.item(i).departamento;
                  tipo = resultado.rows.item(i).tipo;
                 // categoria = resultado.rows.item(i).categoria;
                  web = resultado.rows.item(i).web;
                  coord_x = resultado.rows.item(i).coord_x;
                  coord_y = resultado.rows.item(i).coord_y; 
              
              if (estado == "OFF LINE") {
                  imagen = 'no_foto.png';
                  server='imagenes/';
                                   };
                  
              //gastronomia +='<div class="card"><div class="card-image waves-effect waves-block waves-light"><img class="activator" id="imagen" src="'+server+''+imagen+'"></div><div class="card-content"><span class="card-title activator grey-text text-darken-4">'+nombre+'<i class="material-icons right">more_vert</i></span><p><a href="#">'+categoria+'</a></p></div><div class="card-reveal"><span class="card-title grey-text text-darken-4">'+nombre+'<i class="material-icons right">close</i></span><p>'+direccion+'</p><p>'+telefono+'</p><p>'+tipo+'</p><p>'+mail+'</p><p>'+web+'</p><p>'+departamento+'</p><a href="https://maps.google.com/?q='+coord_x+','+coord_y+'"><i class="material-icons">location_on</i></a><a href="tel:'+telefono+'"><i class="material-icons">local_phone</i></a></div></div>';    
               gastronomia +='<div class="card"><div class="card-image waves-effect waves-block waves-light"><img class="activator" src="'+server+''+imagen+'"></div><div class="card-content"><span class="card-title activator grey-text text-darken-4">'+nombre+'<i class="material-icons right">more_vert</i></span></div><div class="card-reveal"><span class="card-title grey-text text-darken-4">'+nombre+'<i class="material-icons right">close</i></span><p>'+direccion+'</p><p>'+telefono+'</p><p>'+tipo+'</p><p>'+mail+'</p><p>'+web+'</p><p>'+departamento+'</p><a href="https://maps.google.com/?q='+coord_x+','+coord_y+'"><i class="material-icons">location_on</i></a><a href="tel:'+telefono+'"><i class="material-icons">local_phone</i></a></div></div>';
  
               }
              
                
                $('#principal').html('<ul class="collection">'+gastronomia+'</ul>');
                $('#corredor').html('');
                $('#encabezado').html('<img src="imagenes/encabezado.jpg" width="100%" >');
 
                $('#btn_left').html('<a href="#" class="sidenav-trigger"onclick="circuito1('+id_corredor+')" ><i class="material-icons">arrow_back</i></a>');
                $('#float').html('');
            });

         });

 


}