<?php
    require_once "lib/nusoap.php";

    function getAudifonos($datos){
        if ($datos == "Audifonos"){
            return join(",", array("Epos H3 Wired", "JBL Quantum 400", "HyperX Cloud Alpha", "Moondrop Kato", "Sennheiser HD400s"));
        }
        else {
            return "No hay audífonos";
        }
    }

    $server = new soap_server();     //Se crea instancia de SOAP
    $server->register("getAudifonos"); //Indica método o función a devolver
    if (!isset( $HTTP_RAW_POST_DATA) ) $HTTP_RAW_POST_DATA = file_get_contents('php://input');
        $server->service($HTTP_RAW_POST_DATA);
?>