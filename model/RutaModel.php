<?php
/**
 * Esta clase permite cambiar las urls hacia el servidor
 *
 * @author: Victor
 * @version: 1.0
 */

class RutaModel
{
    /**TODO Metodo que regresa la ruta
     * @return string, regresa la ruta del proyecto, estaba debe cambiarse cuando se suba al servidor
     */
    public static function obtenerRuta()
    {
        return "http://localhost/frontend/";
    }

    /**Metodo que regresa la ruta del servidor, del lado del backend
     * @return ruta del servidor
     */
    public static function obtenerRutaServidor()
    {
        return "http://localhost/backend/";

    }
}