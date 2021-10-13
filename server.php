<?php
    require_once "lib/nusoap.php";
    function getFrutas($datos){
        if($datos == "Frutas"){
            return join(",", array(
                "Fresa",
                "Platano",
                "Manzana",
                "Mandarina"
            ));
        }
        else {
            return "No hay frutas";
        }
    }
    function getPaises($datos){
        if($datos == "Paises"){
            return join(",", array(
                "China",
                "Italia",
                "España",
                "Venezuela"
            ));
        }
        else {
            return "No hay Paises";
        }
    }
    $server = new soap_server();
    $server->register("getFrutas");
    $server->register("getPaises");
    if(!isset( $HTTP_RAW_POST_DATA ) ) $HTTP_RAW_POST_DATA= file_get_contents('php://input');
    $server->service($HTTP_RAW_POST_DATA);
?>