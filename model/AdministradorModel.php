<?php


/**
 * Created by PhpStorm.
 * User: Win10
 * Date: 15/10/2018
 * Time: 12:44 PM
 */
include 'Conexion.php';
class AdministradorModel
{
    /*
     * TODO Metodo que realiza consulta de login a la base de datos
     * @param email
     * @param pwd
     */
    public static function login($email,$pwd)
    {
        try{
            //llamada a sp
            $stmt=Conexion::conectar()->prepare("Call sp_admin_login(?,?)");
            //Envio de parametros al sp
            $stmt->bindParam(1,$email,PDO::PARAM_STR);
            $stmt->bindParam(2,$pwd,PDO::PARAM_STR);
            $stmt->execute();
            //retorna respuesta con datos del registro
            return $stmt->fetch();
            //cerramos stament
            $stmt->close();
            $stmt->null;

        }catch (Exception $exception){
            return $exception->getMessage(); //! retorna error si falla
        }
    }

}