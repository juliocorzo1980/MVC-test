<?php
    
    class EnlacesPaginas{

        public function enlacesPaginasModel($enlacesModel){
            
            $module = $enlacesModel;

            if($enlacesModel == "inicio" || 
               $enlacesModel == "mantenimientoClientes" ||
               $enlacesModel == "mantenimientoProductos" ||
               $enlacesModel == "reporteVentas" ||
               $enlacesModel == "factura"){
               
                    $module = "views/modules/".$enlacesModel.".php";
                              
            }
            else if($enlacesModel == "index"){
                $module = "views/modules/inicio.php";    
            }    
            return $module;
        }
    }

?>