$(document).ready(function(){
    $('#xml-form').submit(function(event){
        var $id = $('#idxml').val();
        var $role = $('#rol').val();
        event.preventDefault();
        $.ajax({
            url: Routing.generate('ud_carnet_createxml', {'id': $id, 'role': $role}),
            data: {id: $id, role:$role},
            statusCode:{
                404: function(){
                    alert('No se pudo crear el archivo');
                },
                500: function(){
                    alert('La peticion fallo');
                }
            }
        }).done(function(data){
            alert("envio de datos correcto");
            $('#print').show();
        })
    });
});