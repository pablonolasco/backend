<?php

class ProductoModel
{
    /*
     * TODO Metodo que obtiene el total de productos, registrados en la plataforma
     */
    public static function obtener_total_productos()
    {
        try{
            $stmt=Conexion::conectar()->prepare("select * from productos where productos.`status`=1 order by productos.id desc;");
            $stmt->execute();
            return $stmt->fetchAll();
            $stmt->close();
            $stmt=null;
        }catch (Exception $e){
            return $e->getMessage();
        }

    }

}