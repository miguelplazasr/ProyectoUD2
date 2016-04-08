$(document).ready(function(){

    $('#new-form').hide();
    $('#detalles').hide();

    $('#search-form').submit(function(event){
        var $id = $('#searchbox').val();
        event.preventDefault();
        $.ajax({
            url: Routing.generate('ud_enfermeria_reporte_search', {'id': $id}),
            data: {id: $id},
            statusCode: {
                404: function(){
                    alert('No existe el usuario');
                },
                500: function(){
                    alert('La peticion fallo');
                }
            }
        }).done(function(data){
            alert('El usuario existe');
            $('.searchx').hide();
            var iden = JSON.stringify(data[0].id);
            var nombres = JSON.stringify(data[0].nombres);
            var apellidos = JSON.stringify(data[0].apellidos);
            var eps = JSON.stringify(data[0].eps);
            var rh = JSON.stringify(data[0].rh);
            var telefonoc = JSON.stringify(data[0].telefonoContacto);
            var ide = data[0].id;
            $('#detalles').
                text('Identificacion: '+iden+ "\n" +'Nombres: '+nombres+"\n"+'Apellidos: '+apellidos+"\n"+
                     'Eps: '+eps+"\n"+"RH: "+rh+"\n"+'Telefono contacto: '+telefonoc).prop('readonly', true).show();
            $('#proyecto_enfermeriabundle_reporteemergencia_users').val(ide).change().hide();
            $('#new-form').show();
            $('#searchbox').prop('readonly', true);
            $('.btn-search').hide();
        });
    });
});