<?php
/**
 * Esta clase permite realizar las llamadas hacia las base de datos
 *
 * @author: Victor
 * @version: 1.0
 */

class UsuarioModel
{
    /*
     * TODO Metodo que obtiene el total de usuarios(clientes), registrados en la plataforma
     */
    public static function obtener_total_usuarios()
    {
        try{
            $stmt=Conexion::conectar()->prepare("select * from usuarios where usuarios.`status`=1 order by usuarios.id desc;");
            $stmt->execute();
            return $stmt->fetchAll();
            $stmt->close();
            $stmt=null;
        }catch (Exception $e){
            return $e->getMessage();
            exit;
        }

    }

    /*
     * TODO Metodo que obtiene todos los usuarios (clientes) de la plataforma con status 1, y por fecha actual
     */

    public static function obtener_ultimos_ususarios_registrados()
    {
        try{
            $stmt=Conexion::conectar()->prepare("select * from usuarios where usuarios.`status`=1 order by usuarios.fecha desc;");
            $stmt->execute();
            return $stmt->fetchAll();
            $stmt->close();
            $stmt=null;
        }catch (Exception $e){
            return $e->getMessage();
        }

    }

}