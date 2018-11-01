<?php
/**
 * Esta clase permite realizar las llamadas hacia las base de datos
 *
 * @author: Victor
 * @version: 1.0
 */

require_once 'Conexion.php';
class VisitaModel
{
    /*
     * TODO obtiene el total de las visitas al sistema
     */
    public static function obtener_total_visitas()
    {
        try{
            $stmt=Conexion::conectar()->prepare("
            select sum(cantidad) as total_visita from visitaspaises
            where visitaspaises.fecha>= Date('2018-01-31');");
            $stmt->execute();
            return $stmt->fetch();
            $stmt->close();
            $stmt=null;

        }catch (Exception $e){
            return $e->getMessage();
            exit;
        }

    }

    /*
     * TODO obtiene los paises que han visitado el sistema
     */

    public static function obtener_visitas()
    {
        try{
            $stmt=Conexion::conectar()->prepare("select * from visitaspaises order by cantidad desc;");
            $stmt->execute();
            return $stmt->fetchAll();
            $stmt->close();
            $stmt=null;
        }catch (Exception $e){
            return $e->getMessage();
        }

    }



}