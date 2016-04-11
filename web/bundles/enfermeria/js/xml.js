$(document).ready(function(){
//Read nodes
    $('#searchxml-form').submit(function(event) {
        event.preventDefault();
        $.post("http://192.168.0.16/soloip.php", function(data){
            var ip=data;
            alert(ip);
            $.post("http://192.168.0.16/ProyectoUD2/web/xmlusers/documento/acceso_"+ip+".xml", function (xml) {
                $(xml).find("usuario").each(function () {
                    var $id = $(this).find('n_identificacion').text();
                    alert($id);
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
                        $('.search').hide();
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
            }).fail(function(){
                alert('No se encuentra el archivo acceso_'+ip+'.xml');
            });
        });
    });
});