<?php
/**
 * Esta clase permite realizar las llamadas hacia la clase VentaModel
 *
 * @author: Victor
 * @version: 1.0
 */
class VentaController
{
    /*
     * TODO obtiene el total de ventas realizadas en el anio
     */
    public static function get_total_ventas()
    {
        try{
            $response=VentaModel::obtner_total_ventas();
        }catch (Exception $e){
            return $e->getMessage();
            exit;
        }

        return $response;

    }


    /*
     * TODO obtiene las ventas realizadas en el anio
     */
    public static function get_ventas()
    {
        try{
            $response=VentaModel::obtner_ventas();
        }catch (Exception $e){
            return $e->getMessage();
            exit;
        }

        return $response;

    }
}