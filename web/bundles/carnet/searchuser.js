$(document).ready(function(){

    $('.xml').hide();
    $('#print').hide();
    $('#search-form').submit(function(event){
        var $id = $('#searchbox').val();
        event.preventDefault();
        $.ajax({
            url: Routing.generate('ud_carnet_search', {'id': $id}),
            data: {id: $id},
            statusCode:{
                404: function(){
                    alert('No existe el usuario');
                },
                500: function(){
                    alert('La peticion fallo');
                }
            }
        }).done(function(data){
            alert("El usuario existe");
            $nombres = data.nombres.toUpperCase();
            $apellidos = data.apellidos.toUpperCase();
            $iden = data.id;
            $cod = data.codigo;
            $correo = data.correo;
            $path = data.path;
            $('.xml').show();
            $("#searchbox").attr('readonly','readonly');
            $("#idxml").val($iden).attr('readonly','readonly');
            $("#btn-search").hide();
            $("#nombres").replaceWith("<h5><b>"+$nombres+"</b></h5>");
            $("#apellidos").replaceWith("<h5><b>"+$apellidos+"</b></h5>");
            $("#iden").replaceWith("<h5><b>"+$iden+"</b></h5>");
            $("#cod").replaceWith("<h5><b>"+$cod+"</b></h5>")
            $("#correo").replaceWith("<h5><b>"+$correo+"</b></h5>")
            $("#imgcarnet").attr('src','/ProyectoUD2/web/uploads/documents/usuarios/'+$iden+'.'+$path)
        });
    });
});
