<?php
/**
 * Esta clase permite realizar las llamadas hacia la clase UsuarioModel
 *
 * @author: Victor
 * @version: 1.0
 */
class UsuarioController
{
    /*
     * TODO obtiene el total de todos los usuarios(clientes) registrados en la plataforma
     */
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

    /*
     * TODO metodo que regresa todos los usuarios registrados a la plataforma
     */
    public function get_usuarios()
    {
        try{
            $response=UsuarioModel::obtener_ultimos_ususarios_registrados();


        }catch (Exception $e){
            return $e->getMessage();
            exit;
        }
        return $response;


    }
}