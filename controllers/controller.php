<?php
class MvcController{
    #Llamada a la plantilla
    public function plantilla(){
        include "views/template.php";
    }
    
    #Interaccion del Usuario
    public function enlacesPaginasControlles(){
        
        if(isset($_GET["action"])){
            $enlacesController = $_GET["action"];
        }
        else{
            $enlacesController = "index";
        }   

        $respuestas = enlacesPaginas::enlacesPaginasModel($enlacesController);

        include $respuestas;
    }
}


?>