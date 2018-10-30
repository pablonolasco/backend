<?php
require_once 'Conexion.php';
class VisitaModel
{
    public static function obtener_visitas()
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

}