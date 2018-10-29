<?php

/**
 * Created by PhpStorm.
 * User: Win10
 * Date: 15/10/2018
 * Time: 12:39 PM
 */
class AdministradorController
{
    /*
     * TODO Metedo de accesso al sistema
     */
    public static function get_login()
    {
        try{
            //si la variable existe
            if(isset($_POST["ingEmail"])) {
                //validar formato email con expresion regular
                $email=$_POST["ingEmail"];
                $pwd=$_POST["ingPassword"];
                if (preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([
                                                .][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $email) &&
                    preg_match('/^[a-zA-Z0-9]+$/', $pwd)) {

                    #$encriptar = crypt($_POST["ingPassword"],                                      '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
                    //manda a llamar metodo del modelo, envia variables post de la vista login.php
                    $response=AdministradorModel::login( $_POST["ingEmail"], $_POST["ingPassword"]);

                    if ($response['email'] == $email && $response['pwd'] == $pwd){
                        //save info the user in session
                        $_SESSION['validarSesionBackend']='ok';
                        $_SESSION['id']=$response['id'];
                        $_SESSION['nombre']=$response['nombre'];
                        $_SESSION['foto']=$response['foto'];
                        $_SESSION['email']=$response['email'];
                        $_SESSION['password']=$response['pwd'];
                        $_SESSION['perfil']=$response['id_tipo_perfil'];
                        // redirecciona a index, con url amigable delcarada en htacces
                        echo '<script>window.location="inicio"</script>';

                    }else{
                        echo '<br>
                        <div class="alert alert-danger">Error verifique email y/o contraseña</div>
                        ';
                    }
                }
            }
        }catch (Exception $e){
            return $e->getMessage();
        }

    }
}