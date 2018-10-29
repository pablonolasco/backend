<?php

/**
 * Created by PhpStorm.
 * User: pablo
 * Date: 14/08/2018
 * Time: 06:15 PM
 */
class Conexion
{
    /**TODO Metodo que realiza la cadena de conexion
     * @var $link cadena de conexion
     * @param array, obtiene todos los datos en formato utf8
     */

    public function conectar()
    {
      try{
          $link= new PDO("mysql:host=localhost;dbname=ecommerce","root","",
              array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

      }catch (Exception $exception){
          return $exception->getMessage();
      }

        return $link;

    }

}