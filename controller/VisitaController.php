<?php
/**
 * Esta clase permite realizar las llamadas hacia la clase VisitasModel
 *
 * @author: Victor
 * @version: 1.0
 */
class VisitaController
{
    /*
     * TODO obtiene las ventas realizadas en el anio
     */
    public function get_total_visitas()
    {
        try{
            $response=VisitaModel::obtener_total_visitas();
        }catch (Exception $e){
            return $e->getMessage();
            exit;
        }
        return $response;

    }
    /*
     * TODO obtiene las ventas realizadas en el anio
     */
    public function get_visitas()
    {
        try{
            $response=VisitaModel::obtener_visitas();
        }catch (Exception $e){
            return $e->getMessage();
            exit;
        }

        return $response;

    }


}