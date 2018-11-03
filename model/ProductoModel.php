<?php
/**
 * Esta clase permite realizar las llamadas hacia las base de datos
 *
 * @author: Victor
 * @version: 1.0
 */

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
    /*
     * TODO Metodo que obtiene todos los productos, registrados en la plataforma ordenados por ventas
     */
    public static function obtener_productos()
    {
        try{
            $stmt=Conexion::conectar()->prepare("select * from productos where productos.`status`=1 order by productos.ventas desc;");
            $stmt->execute();
            return $stmt->fetchAll();
            $stmt->close();
            $stmt=null;
        }catch (Exception $e){
            return $e->getMessage();
        }

    }
    /*
     * TODO Metodo que obtiene la suma de todos los productos ordenados por ventas
     */
    public static function obtener_suma_productos()
    {
        try{
            $stmt=Conexion::conectar()->prepare("select sum(productos.ventas) as total_ventas from productos where productos.`status`=1 order by productos.id desc;");
            $stmt->execute();
            return $stmt->fetch();
            $stmt->close();
            $stmt=null;
        }catch (Exception $e){
            return $e->getMessage();
        }
    }

    /*
    * TODO Metodo que obtiene la suma de todos los productos ordenados por fechas
    */
    public static function obtener_productos_fecha()
    {
        try{
            $stmt=Conexion::conectar()->prepare("select * from productos where productos.`status`=1 order by productos.fecha desc;");
            $stmt->execute();
            return $stmt->fetchAll();
            $stmt->close();
            $stmt=null;
        }catch (Exception $e){
            return $e->getMessage();
        }
    }

}