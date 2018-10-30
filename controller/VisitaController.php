<?php

class VisitaController
{
    public function get_total_visitas()
    {
        try{
            $response=VisitaModel::obtener_visitas();
        }catch (Exception $e){
            return $e->getMessage();
            exit;
        }
        return $response;

    }

}