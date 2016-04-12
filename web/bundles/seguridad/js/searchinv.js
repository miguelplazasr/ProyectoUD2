$(document).ready(function(){
    $('#search-form').submit(function(event){
        event.preventDefault();
        var $iden = $('#searchbox').val();
        $.post("http://192.168.0.7/ProyectoUD2/web/xmlinv/salida/taginv_"+$iden+".xml", function(xml){
            $(xml).find("usuario").each(function(){
                var $id = $(this).find('n_identificacion').text();
                alert($id);
                $.ajax({
                    url: Routing.generate('ud_seguridad_invitado_c', {'id':$id}),
                    data: {id:$id},
                    statusCode: {
                        404: function(){
                            alert('No se encontro el usuario');
                        },
                        500: function(){
                            alert('La peticion fallo');
                        }
                    }
                }).done(function(data){
                    $ide = data.id;
                    $nombres = data.nombres;
                    $apellidos = data.apellidos;
                    $path = data.path;
                    $('#nombres').attr('value',$nombres);
                    $('#apellidos').attr('value',$apellidos);
                    $("#img-inv").attr('src','/ProyectoUD2/web/uploads/documents/invitados/'+$ide+'.'+$path)
                })
            });
        });
    });
});
