$(document).ready(function(){
    $('#form-rest').hide();
    $('.success').hide();
    $('.danger').hide();

    $('#sactivo').change(function(event){
        var $id = $('#sactivo').val();
        event.preventDefault();
        $.ajax({
            url: Routing.generate('ud_activos_prestamo_cantidad', {'id': $id}),
            data: {id: $id},
            statusCode:{
                404: function(){
                    alert('No se encuentra el elemento');
                },
                500: function(){
                    alert('La peticion Fallo');
                }
            }
        }).done(function(data){
            if (data > 0){
                $('#form-rest').show();
                $('.success').show().append(data);
                $('#cantidad').attr('max', data);
                $('.danger').hide();
            }else{
                $('#form-rest').hide();
                $('.success').hide();
                $('.danger').show();
            }
        });
    });
});

