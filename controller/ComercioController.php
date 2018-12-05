<?php
/**
 * Esta clase permite realizar las llamadas hacia la clase ComercioModel
 *
 * @author: Victor
 * @version: 1.0
 */

class ComercioController
{
    /*
     * TODO Metodo que obtiene los datos de la plantilla
     */
    public static function get_seleccionar_plantilla()
    {
        try{
            $response=ComercioModel::obtener_plantilla();
        }catch (Exception $e){
            return $e->getMessage();
        }
        return $response;
        
    }


    /*=============================================
    SELECCIONAR COMERCIO
    =============================================*/

    public static function get_seleccionar_comercio()
    {
        try{
            $response=ComercioModel::obtener_comercio();
        }catch (Exception $e){
            return $e->getMessage();
        }
        return $response;

    }

    /*=============================================
    ACTUALIZAR LOGO O ICONO
    =============================================*/

    static public function ctrActualizarLogoIcono($item, $valor){
        $tabla="plantilla";
        $id = 1;
        $ruta="";
        //metodo del controlador
        $plantilla = ComercioModel::obtener_plantilla();

        /*=============================================
        CAMBIANDO LOGOTIPO O ICONO
        =============================================*/

        $valorNuevo = $valor;
        // SI NO ES UN ARCHIVO PASA DIRECTO AL MODELO
        if(isset($valor["tmp_name"])){

            list($ancho, $alto) = getimagesize($valor["tmp_name"]);

            /*=============================================
            CAMBIANDO LOGOTIPO
            =============================================*/

            if($item == "logoTipo"){
                //borrar imagen logo del servidor
                unlink("../".$plantilla["logoTipo"]);

                $nuevoAncho = 500;
                $nuevoAlto = 100;
                //Crear nueva imagen
                $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

                if($valor["type"] == "image/jpeg"){

                    $ruta = "../view/img/plantilla/logo.jpg";

                    $origen = imagecreatefromjpeg($valor["tmp_name"]);

                    imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

                    imagejpeg($destino, $ruta);

                }

                if($valor["type"] == "image/png"){

                    $ruta = "../view/img/plantilla/logo.png";

                    $origen = imagecreatefrompng($valor["tmp_name"]);
                    //funcion imagen fondo transparente
                    imagealphablending($destino, FALSE);

                    imagesavealpha($destino, TRUE);
                    //recortar imagen
                    imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
                    //crea imagen con fondo transparente
                    imagepng($destino, $ruta);

                }

            }

            /*=============================================
            CAMBIANDO ICONO
            =============================================*/

            if($item == "favIcon"){

                unlink("../".$plantilla["favIcon"]);

                $nuevoAncho = 100;
                $nuevoAlto = 100;

                $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

                if($valor["type"] == "image/jpeg"){

                    $ruta = "../view/img/plantilla/icono.jpg";

                    $origen = imagecreatefromjpeg($valor["tmp_name"]);

                    imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

                    imagejpeg($destino, $ruta);

                }

                if($valor["type"] == "image/png"){

                    $ruta = "../view/img/plantilla/icono.png";

                    $origen = imagecreatefrompng($valor["tmp_name"]);

                    imagealphablending($destino, FALSE);

                    imagesavealpha($destino, TRUE);

                    imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

                    imagepng($destino, $ruta);

                }

            }
            $valorNuevo = substr($ruta, 3);

        }
        //metodo del modelo
        $respuesta = ComercioModel::mdlActualizarLogoIcono($tabla, $id, $item, $valorNuevo);

        return $respuesta;

    }

    /*=============================================
    ACTUALIZAR COLORES
    =============================================*/

    static public function ctrActualizarColores($datos){

        $tabla = "plantilla";
        $id = 1;

        $respuesta = ComercioModel::mdlActualizarColores($tabla, $id, $datos);

        return $respuesta;


    }

    /*=============================================
    ACTUALIZAR SCRIPT
    =============================================*/

    static public function ctrActualizarScript($datos){

        $tabla = "plantilla";
        $id = 1;

        $respuesta = ComercioModel::mdlActualizarScript($tabla, $id, $datos);

        return $respuesta;


    }


    /*=============================================
    ACTUALIZAR INFORMACION
    =============================================*/

    static public function ctrActualizarInformacion($datos){

        $tabla = "comercio";
        $id = 1;

        $respuesta = ComercioModel::mdlActualizarInformacion($tabla, $id, $datos);

        return $respuesta;


    }


}