<?php
/**
 * Esta clase permite realizar las llamadas hacia la clase PRoductoModel
 *
 * @author: Victor
 * @version: 1.0
 */
class ProductoController
{
    public function get_total_productos()
    {
        try{
            $response=ProductoModel::obtener_total_productos();
        }catch (Exception $e){
            return $e->getMessage();
        }
        return $response;

    }

    public function get_productos()
    {
        try{
            $response=ProductoModel::obtener_productos();
        }catch (Exception $e){
            return $e->getMessage();
        }

        return $response;

    }

    /*
     * TODO Metodo que regresa la suma de todos los productos ordenados por
     * ventas
     */
    public function get_sum_total_productos()
    {
        try{
            $response=ProductoModel::obtener_suma_productos();
        }catch (Exception $e){
            return $e->getMessage();
        }
        return $response;

    }

}