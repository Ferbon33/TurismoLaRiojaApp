function act_base(){
   $('#principal').html('<img src="imagenes/jar-loading.gif" width="25%" align="center">');
   db.transaction(function (tx) {
            
           tx.executeSql('DELETE FROM ALOJAMIENTO ');
           
         });
  $.ajax({
        dataType: "html",
        type: "POST",
        data: "corredor="+1,
       // url: 'http://200.91.34.81:8080/turismo_lr/backend/alojamientos.php', /// retome catastro
       /// url: 'http://localhost/turismo_lr/backend/alojamientos.php', /// localhost
      url: 'https://turismoapp.larioja.gov.ar/public/turismo_lr/backend/alojamientos.php',
        
              }).done(function (resultado) {
              var datosRecibidos = JSON.parse(resultado);
             var alojamiento="";     
               
                $.each( datosRecibidos, function ( key, value ) {
                          

                db.transaction(function (tx) {
           

          
           tx.executeSql('INSERT INTO ALOJAMIENTO (id_corredor ,nombre , direccion ,telefono  , imagen , mail , departamento , tipo ,categoria , web , coord_x , coord_y ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)',[value.id_corredor,value.nombre,value.direccion,value.telefono,value.imagen,value.mail,value.departamento,value.tipo,value.categoria,value.web,value.coord_x,value.coord_y]);
           
         });           
               

 });                        
      
          
        });
              
              db.transaction(function (tx) {
           
           tx.executeSql('DELETE FROM GASTRONIMIA ');
           
         });
      $.ajax({
        dataType: "html",
        type: "POST",
        data: "corredor="+1,
       // url: 'http://200.91.34.81:8080/turismo_lr/backend/gastronomia.php',
       url: 'https://turismoapp.larioja.gov.ar/public/turismo_lr/backend/gastronomia.php',
              }).done(function (resultado) {
              var datosRecibidos = JSON.parse(resultado);
             var alojamiento="";     
               
                $.each( datosRecibidos, function ( key, value ) {
                          

                db.transaction(function (tx) {
          
             tx.executeSql('INSERT INTO  GASTRONIMIA (id_corredor ,nombre , direccion ,imagen , telefono ,  departamento ,tipo, mail , web , coord_x , coord_y  ) VALUES (?,?,?,?,?,?,?,?,?,?,?)',[value.id_corredor,value.nombre,value.direccion,value.imagen,value.telefono,value.departamento,value.tipo,value.mail,value.web,value.coord_x,value.coord_y]);
         });           
       });                        
  
    
          
        });

 db.transaction(function (tx) {
           
           tx.executeSql('DELETE FROM QUE_HACER ');
           
         });
$.ajax({
        dataType: "html",
        type: "POST",
        data: "corredor="+1,
         //url: 'http://200.91.34.81:8080/turismo_lr/backend/que_hacer.php',
           url: 'https://turismoapp.larioja.gov.ar/public/turismo_lr/backend/que_hacer.php',
              }).done(function (resultado) {
              var datosRecibidos = JSON.parse(resultado);
             var alojamiento="";     
               
                $.each( datosRecibidos, function ( key, value ) {
                          

                db.transaction(function (tx) {
                   
           
             tx.executeSql('INSERT INTO  QUE_HACER (id_corredor ,nombre , detalle ,imagen ,  coord_x , coord_y  ) VALUES (?,?,?,?,?,?)',[value.id_corredor,value.nombre,value.detalle,value.imagen,value.coord_x,value.coord_y]);
         });           
       });                        
  
//setTimeout(carrusel, 5000);      
          
        });
////////////////////////DATOS UTILES AL NO CREARSE LA BASE LA ALMACENO EN CORREDORES
db.transaction(function (tx) {
           
           tx.executeSql('DELETE FROM DATOS_UTILES ');
           
         });
$.ajax({
        dataType: "html",
        type: "POST",
        data: "corredor="+1,
        // url: 'http://200.91.34.81:8080/turismo_lr/backend/datos_utiles.php',
        url: 'https://turismoapp.larioja.gov.ar/public/turismo_lr/backend/datos_utiles.php',
              }).done(function (resultado) {
              var datosRecibidos = JSON.parse(resultado);
             var alojamiento="";     
               
                $.each( datosRecibidos, function ( key, value ) {
                          

                db.transaction(function (tx) {
                    // tx.executeSql('CREATE TABLE  IF NOT EXISTS DATOS_UTILES (id auto_increment, id_corredor number,nombre text, detalle text,imagen text )');
           
             tx.executeSql('INSERT INTO  DATOS_UTILES (id_corredor ,nombre , detalle ,imagen  ) VALUES (?,?,?,?)',[value.id_corredor,value.nombre,value.detalle,value.imagen]);
         });           
       });                        
  
//setTimeout(carrusel, 5000);      
          
        });

///////////////////////////////// almacena galeria
db.transaction(function (tx) {
           
           tx.executeSql('DELETE FROM GALERIA_IMG ');
           
         });
$.ajax({
        dataType: "html",
        type: "POST",
        data: "corredor="+1,
        // url: 'http://200.91.34.81:8080/turismo_lr/backend/datos_utiles.php',
        url: 'https://turismoapp.larioja.gov.ar/public/turismo_lr/backend/galeria.php',
              }).done(function (resultado) {
              var datosRecibidos = JSON.parse(resultado);
             var alojamiento="";     
               
                $.each( datosRecibidos, function ( key, value ) {
                          

                db.transaction(function (tx) {
                    // tx.executeSql('CREATE TABLE  IF NOT EXISTS DATOS_UTILES (id auto_increment, id_corredor number,nombre text, detalle text,imagen text )');
           
             tx.executeSql('INSERT INTO  GALERIA_IMG (id_corredor ,nombre ,imagen,coord_x,coord_y  ) VALUES (?,?,?,?,?)',[value.id_corredor,value.nombre,value.imagen,value.coord_x,value.coord_y]);
         });           
       });                        
  
//setTimeout(carrusel, 5000);      
          
        });
              ////////////////////// actualiza corredores
db.transaction(function (tx) {
           
           tx.executeSql('DELETE FROM CORREDORES ');
           
         });
$.ajax({
        dataType: "html",
        type: "POST",
        data: "corredor="+1,
        // url: 'http://200.91.34.81:8080/turismo_lr/backend/datos_utiles.php',
        url: 'https://turismoapp.larioja.gov.ar/public/turismo_lr/backend/corredores.php',
              }).done(function (resultado) {
              var datosRecibidos = JSON.parse(resultado);
             var alojamiento="";     
               
                $.each( datosRecibidos, function ( key, value ) {
                          

                db.transaction(function (tx) {
              
           //  tx.executeSql('CREATE TABLE IF NOT EXISTS CORREDORES (id auto_increment, id_corredor number,nombre text, detalle text,imagen text,coord_x number,coord_y number )');

             tx.executeSql('INSERT INTO  CORREDORES (id_corredor ,nombre ,detalle,coord_x,coord_y  ) VALUES (?,?,?,?,?)',[value.id_corredor,value.nombre,value.detalle,value.coord_x,value.coord_y]);
         });           
       });                        
  
//setTimeout(carrusel, 5000);      
          
        });

}