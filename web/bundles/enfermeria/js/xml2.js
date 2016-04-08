$(document).ready(function(){
//Read nodes
    var xml = $.parseXML("acceso.xml"),
        $xml = $( xml),
        $id = $xml.find("n_identificacion");

    alert($id);
});
