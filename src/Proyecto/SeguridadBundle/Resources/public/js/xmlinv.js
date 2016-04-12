$(document).ready(function(){
    $('#submit').hide();
    $("#xmlinv").submit(function(event){
        event.preventDefault();
        var $id = $('#id').val();
        alert($id);
        $.ajax({
            url: Routing.generate('ud_seguridad_invitado_xml', {'id': $id}),
            data: {id: $id},
            statusCode: {
                404: function(){
                    alert('No se pudo crear el archivo');
                },
                500: function(){
                    alert('La peticion fallo');
                }
            }
        }).done(function(data){
            alert('datos enviados correctamente');
            $('#submit').show();
            $("#xmlbutton").hide();
        })
    });
});
