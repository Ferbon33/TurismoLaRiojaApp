var db = openDatabase('turismo_app', '1.0', 'turismo_lr_app', 5 * 1024 * 1024);

 db.transaction(function (tx) {
        //tx.executeSql('DROP TABLE  GALERIA_IMG ');
         //tx.executeSql('DELETE FROM  MSJ_RECIBIDOS');
        // tx.executeSql('DROP TABLE FARMACIA');
         tx.executeSql('CREATE TABLE IF NOT EXISTS QUE_HACER (id auto_increment, id_corredor number,nombre text, detalle text, imagen text, coord_x number, coord_y number )');

         tx.executeSql('CREATE TABLE IF NOT EXISTS GALERIA_IMG (id auto_increment, id_corredor number,nombre text ,imagen text, coord_x number, coord_y number)');

                           
         tx.executeSql('CREATE TABLE IF NOT EXISTS  ALOJAMIENTO (id auto_increment, id_corredor number,nombre text, direccion text,telefono text , imagen text, mail text, departamento text, tipo text,categoria text, web text, coord_x number, coord_y number)');

          tx.executeSql('CREATE TABLE IF NOT EXISTS CORREDORES (id auto_increment, id_corredor number,nombre text, detalle text,imagen text,coord_x number,coord_y number )');

        tx.executeSql('CREATE TABLE IF NOT EXISTS DATOS_UTILES (id auto_increment, id_corredor number,nombre text, detalle text,imagen text,coord_x number,coord_y number )');

         tx.executeSql('CREATE TABLE IF NOT EXISTS  GASTRONIMIA (id auto_increment, id_corredor number,nombre text, direccion text,imagen text, telefono text, coord_x number, coord_y number, departamento text, mail text, web text, tipo text)');
});
    