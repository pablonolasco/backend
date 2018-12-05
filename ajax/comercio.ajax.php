<?php

require_once "../controller/ComercioController.php";
require_once "../model/ComercioModel.php";

/*=============================================
CLASE DONDE SE ENCUNETRA TODA LA LOGICA DE PROGRAMACION
ASI COMO REALIZA LAS LLAMADAS AL CONTROLADOR
=============================================*/

class AjaxComercio{

	/*=============================================
	CAMBIAR LOGOTIPO
	=============================================*/	

	public $imagenLogo;

    /**
     *
     * @return $respuesta del controlador
     */
	public function ajaxCambiarLogotipo(){
    try{
        $item = "logoTipo";//campo de la bd
        $valor = $this->imagenLogo;//imagen seleccionada desde el js
        //Metodo del controlador
        $respuesta = ComercioController::ctrActualizarLogoIcono($item, $valor);

        echo $respuesta;

    }catch (Exception $e){
        return $e->getMessage();
    }


	}

	/*=============================================
	CAMBIAR ICONO
	=============================================*/

	public $imagenIcono;	

	public function ajaxCambiarIcono(){

		$item = "favIcon";
		$valor = $this->imagenIcono;

		$respuesta = ComercioController::ctrActualizarLogoIcono($item, $valor);

		echo $respuesta;

	}


	/*=============================================
	CAMBIAR COLORES
	=============================================*/
    //vARIABLES DE LA CLASE
	public $barraSuperior;
	public $textoSuperior;
	public $colorFondo;
	public $colorTexto;

	public function ajaxCambiarColor(){

		$datos = array("barraSuperior"=>$this->barraSuperior,
					   "textoSuperior"=>$this->textoSuperior,
					   "colorFondo"=>$this->colorFondo,
					   "colorTexto"=>$this->colorTexto);

		$respuesta = ComercioController::ctrActualizarColores($datos);

		echo $respuesta;

	}

	/*=============================================
	CAMBIAR REDES SOCIALES
	=============================================*/

	public $redesSociales;

	public function ajaxCambiarRedes(){

		$item = "redesSociales";
		$valor = $this->redesSociales;

		$respuesta = ComercioController::ctrActualizarLogoIcono($item, $valor);

		echo $respuesta;

	}

	/*=============================================
	CAMBIAR SCRIPT
	=============================================*/

	public $apiFacebook;
	public $pixelFacebook;
	public $googleAnalytics;

	public function ajaxCambiarScript(){

		$datos = array("apiFacebook"=>$this->apiFacebook,
					   "pixelFacebook"=>$this->pixelFacebook,
					   "googleAnalytics"=>$this->googleAnalytics);

		$respuesta = ComercioController::ctrActualizarScript($datos);

		echo $respuesta;

	}

	/*=============================================
	CAMBIAR INFORMACIÓN
	=============================================*/

	public $impuesto;
	public $envioNacional;
	public $envioInternacional;
	public $tasaMinimaNal;
	public $tasaMinimaInt;
	public $seleccionarPais;
	public $modoPaypal;
	public $clienteIdPaypal;
	public $llaveSecretaPaypal;
	public $modoPayu;
	public $merchantIdPayu;
	public $accountIdPayu;
	public $apiKeyPayu;

	public function ajaxCambiarInformacion(){

		$datos = array("impuesto"=>$this->impuesto,
						"envioNacional"=>$this->envioNacional,
						"envioInternacional"=>$this->envioInternacional,
						"tasaMinimaNal"=>$this->tasaMinimaNal,
						"tasaMinimaInt"=>$this->tasaMinimaInt,
						"seleccionarPais"=>$this->seleccionarPais,
						"modoPaypal"=>$this->modoPaypal,
						"clienteIdPaypal"=>$this->clienteIdPaypal,
						"llaveSecretaPaypal"=>$this->llaveSecretaPaypal,
						"modoPayu"=>$this->modoPayu,
						"merchantIdPayu"=>$this->merchantIdPayu,
						"accountIdPayu"=>$this->accountIdPayu,
						"apiKeyPayu"=>$this->apiKeyPayu);

		$respuesta = ComercioController::ctrActualizarInformacion($datos);

		echo $respuesta;

	}

}



/*=============================================
FUNCIONES PHP QUE REALIZAN LAS LLAMADAS A LA CLASE AjaxComercio
=============================================*/

/*=============================================
CAMBIAR LOGOTIPO
=============================================*/	
if(isset($_FILES["imagenLogo"])){

	$logotipo = new AjaxComercio();
	$logotipo -> imagenLogo = $_FILES["imagenLogo"];
	$logotipo -> ajaxCambiarLogotipo();

}

/*=============================================
CAMBIAR ICONO
=============================================*/	
if(isset($_FILES["imagenIcono"])){

	$icono = new AjaxComercio();
	$icono -> imagenIcono = $_FILES["imagenIcono"];
	$icono -> ajaxCambiarIcono();

}

/*=============================================
CAMBIAR COLORES
=============================================*/	
//si existe una variable post barra-superior
if(isset($_POST["barraSuperior"])){
    //crea un objeto de tipo 	$colores = new AjaxComercio();

    $colores = new AjaxComercio();
	$colores -> barraSuperior = $_POST["barraSuperior"];
	$colores -> textoSuperior = $_POST["textoSuperior"];
	$colores -> colorFondo = $_POST["colorFondo"];
	$colores -> colorTexto = $_POST["colorTexto"];
	$colores -> ajaxCambiarColor();

}


/*=============================================
CAMBIAR REDES SOCIALES
=============================================*/	

if(isset($_POST["redesSociales"])){

	$redesSociales = new AjaxComercio();
	$redesSociales -> redesSociales = $_POST["redesSociales"];
	$redesSociales -> ajaxCambiarRedes();

}

/*=============================================
CAMBIAR SCRIPT
=============================================*/	

if(isset($_POST["apiFacebook"])){

	$script = new AjaxComercio();
	$script -> apiFacebook = $_POST["apiFacebook"];
	$script -> pixelFacebook = $_POST["pixelFacebook"];
	$script -> googleAnalytics = $_POST["googleAnalytics"];
	$script -> ajaxCambiarScript();

}

/*=============================================
CAMBIAR INFORMACION
=============================================*/	

if(isset($_POST["impuesto"])){

	$informacion = new AjaxComercio();
	$informacion -> impuesto = $_POST["impuesto"];
	$informacion -> envioNacional = $_POST["envioNacional"];
	$informacion -> envioInternacional = $_POST["envioInternacional"];
	$informacion -> tasaMinimaNal = $_POST["tasaMinimaNal"];
	$informacion -> tasaMinimaInt = $_POST["tasaMinimaInt"];
	$informacion -> seleccionarPais = $_POST["seleccionarPais"];
	$informacion -> modoPaypal = $_POST["modoPaypal"];
	$informacion -> clienteIdPaypal = $_POST["clienteIdPaypal"];
	$informacion -> llaveSecretaPaypal = $_POST["llaveSecretaPaypal"];
	$informacion -> modoPayu = $_POST["modoPayu"];
	$informacion -> merchantIdPayu = $_POST["merchantIdPayu"];
	$informacion -> accountIdPayu = $_POST["accountIdPayu"];
	$informacion -> apiKeyPayu = $_POST["apiKeyPayu"];
	$informacion -> ajaxCambiarInformacion();

}

