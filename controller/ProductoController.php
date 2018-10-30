<?php

class ProductoController
{
    public function get_total_productos()
    {
        try{
            $response=ProductoModel::obtener_total_productos();
        }catch (Exception $e){
            return $e->getMessage();
        }
        return $response;

    }

}