<?php

class UsuarioModel
{
    /*
     * TODO Metodo que obtiene el total de usuarios, registrados en la plataforma
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

}