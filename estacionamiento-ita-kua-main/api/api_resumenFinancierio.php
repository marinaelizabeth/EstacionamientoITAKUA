<?php
    
    
    require_once(__DIR__.'/../classes/resumenFinanciero.php');
    require_once(__DIR__.'/../common/validacion.php');


    $cajaInicio = ($_POST["cajaInicio"]);
        
        $finanza = new MostrarFinanza();
        $array_finanza = $finanza->get_Finanza();
        $suma = $finanza->get_suma();
       
        if($cajaInicio == null){
            $cajaInicio= $suma;
        }else{
            $cajaInicio = $cajaInicio + $suma;
        }
        echo json_encode($cajaInicio, JSON_UNESCAPED_UNICODE);
        //mostrando en json
            //el parametro unescaped unicode hace que se vean bien acentos y demas caracteres latinos
        echo  json_encode($array_finanza, JSON_UNESCAPED_UNICODE);
   
?>
