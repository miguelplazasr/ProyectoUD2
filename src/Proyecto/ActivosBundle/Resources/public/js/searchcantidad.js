$(document).ready(function(){
    $('#form-rest').hide();
    $('.success').hide();
    $('.danger').hide();

    $('#proyecto_activosbundle_prestamoactivo_sactivo').change(function(event){
        var $id = $('#proyecto_activosbundle_prestamoactivo_sactivo').val();
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
                $('.danger').hide();
            }else{
                $('#form-rest').hide();
                $('.success').hide();
                $('.danger').show();
            }
        });
    });
});

