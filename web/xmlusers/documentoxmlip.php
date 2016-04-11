<?php

$num = 111111;
//echo $numero;
  //$cc = $_REQUEST['num']; //captura el num de identificacion
  crear($num); //Creamos el archivo
  leer();  //Luego lo leemos
  
  
          function get_real_ip()
        {
		
     
            if (isset($_SERVER["HTTP_CLIENT_IP"]))
            {
                $d=$_SERVER["HTTP_CLIENT_IP"];
            }
            elseif (isset($_SERVER["HTTP_X_FORWARDED_FOR"]))
            {
                $d=$_SERVER["HTTP_X_FORWARDED_FOR"];
            }
            elseif (isset($_SERVER["HTTP_X_FORWARDED"]))
            {
                $d= $_SERVER["HTTP_X_FORWARDED"];
            }
            elseif (isset($_SERVER["HTTP_FORWARDED_FOR"]))
            {
                $d=$_SERVER["HTTP_FORWARDED_FOR"];
            }
            elseif (isset($_SERVER["HTTP_FORWARDED"]))
            {
                $d=$_SERVER["HTTP_FORWARDED"];
            }
            else
            {
                $d=$_SERVER["REMOTE_ADDR"];
            }
			
			//$d= get_real_ip();
			$d= str_replace('.', '',$d);
			$d= str_replace(':', '',$d);
			return $d;
        }
  
  
  
 
  //Para crear el archivo
  function crear($numero){
    $xml = new DomDocument('1.0', 'UTF-8');
 
    $tag = $xml->createElement('tag');
    $tag = $xml->appendChild($tag);
 
    $usuario = $xml->createElement('usuario');
    $usuario = $tag->appendChild($usuario);
 
    $n_identificacion = $xml->createElement('n_identificacion',$numero);
    $n_identificacion = $usuario->appendChild($n_identificacion);
    
 
    $xml->formatOutput = true;
    $el_xml = $xml->saveXML();
    $xml->save('documento/acceso_'.get_real_ip().'.xml');
 
    //Mostramos el XML puro
    echo "<p><b>El XML ha sido creado.... Mostrando en texto plano:</b></p>".
         htmlentities($el_xml)."<br/><hr>";
  }
 
  //Para leerlo
  function leer(){
    echo "<p><b>Ahora mostrandolo con estilo</<  b></p>";
    $xml = simplexml_load_file('acceso_'.get_real_ip().'.xml');
	//Modificar
	//$xml->usuario[0]->n_identificacion=123456;
	//$xml->asXML('acceso.xml');
	//Borrar
	//$xml->usuario[0]->n_identificacion=null;
	//$xml->asXML('acceso.xml');
    $salida=$xml->usuario[0]->n_identificacion;
	//Mostramos varios
   // foreach($xml->usuario as $item){
    //  $salida .=
    //    "<b>Numero de identificacion:</b> " .
	//$item->n_identificacion . "<br/>". ;
     //    "<br/><hr/>";
	 
    //}
	//$salida=$salida+1;
    echo $salida;
  }
?>