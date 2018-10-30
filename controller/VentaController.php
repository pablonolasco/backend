<?php

class VentaController
{
    public static function get_total_ventas()
    {
        try{
            $response=VentaModel::obtner_total_ventas();
        }catch (Exception $e){
            return $e->getMessage();
            exit;
        }

        return $response;

    }
}