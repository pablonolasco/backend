<?php

class UsuarioController
{
    public function get_total_usuarios()
    {
        try{
            $response=UsuarioModel::obtener_total_usuarios();
        }catch (Exception $e){
            return $e->getMessage();
            exit;
        }
        return $response;

    }
}