function calcula_distancia(x,y){
alert(x+y);
 $.ajax({
        dataType: "json",
        type: "GET",
        contentType : "application/json",
        data: "units=imperial&origins=-29.444605, -66.867157&destinations=-29.445284, -66.858714&key=AIzaSyBLMa7emvhGQMK0uYYrS-9aymoEhlX-4sU",
        url: 'https://maps.googleapis.com/maps/api/distancematrix/json', 
        // url: 'http://200.91.34.81:8080/turismo_lr/backend/datos_utiles.php',
        //url: 'https://turismoapp.larioja.gov.ar/public/turismo_lr/backend/localidades.php',
              }).done(function (resultado) {
              var datosRecibidos = JSON.parse(resultado);
             //alert(resultado)   
               
                $.each( datosRecibidos, function ( key, value ) {
                          
                 //alo += value.origin_addresses;
                 
    
       });                        
  
   // mansaje(alo)
   //       $('#dist').html('asdads');
        });

              }