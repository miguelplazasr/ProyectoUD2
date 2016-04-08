$(document).ready(function(){

    $('#elementos').hide();

    $('#search-form').submit(function(event){
        var $id = $('#searchbox').val();
        event.preventDefault();
        $.ajax({
            url: Routing.generate('ud_salones_prestamo_search', {'id': $id}),
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
            var id = JSON.stringify(data);
            alert(data);
            $('#users').val(data).change().hide();
            $('#elementos').show();
            $('#searchbox').prop('readonly', true);
            $('.btn-search').hide();
        });
    });
});

