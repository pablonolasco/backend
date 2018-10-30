<?php
require_once 'Conexion.php';
class VentaModel
{
    /*
     * TODO Metodo que obtiene la suma total de las compras
     */
    public static function obtner_total_ventas()
    {
        try{
            $stmt=Conexion::conectar()->prepare("select sum(pago) as total_venta from compras where compras.fecha>= Date('2018-01-31');");
            $stmt->execute();
            //retorna respuesta con datos del registro
            return $stmt->fetch();
            //cerramos stament
            $stmt->close();
            $stmt->null;

        }catch (Exception $e){

            return $e->getMessage();
            exit;
        }

    }

}