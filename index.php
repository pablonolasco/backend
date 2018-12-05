<?php
require_once "controller/ControllerTemplate.php";
require_once "controller/AdministradorController.php";
require_once "controller/CategoriaController.php";
require_once "controller/VentaController.php";
require_once "controller/SubcategoriaController.php";
require_once "controller/MensajeController.php";
require_once "controller/PerfilController.php";
require_once "controller/ProductoController.php";
require_once "controller/UsuarioController.php";
require_once "controller/ReporteController.php";
require_once "controller/VisitaController.php";
require_once "controller/ComercioController.php";
require_once "controller/SlideController.php";

require_once "model/AdministradorModel.php";
require_once "model/VentaModel.php";
require_once "model/MensajeModel.php";
require_once "model/CategoriaModel.php";
require_once "model/SubcategoriaModel.php";
require_once "model/ProductoModel.php";
require_once "model/UsuarioModel.php";
require_once "model/ReporteModel.php";
require_once "model/PerfilModel.php";
require_once "model/VisitaModel.php";
require_once "model/RutaModel.php";
require_once "model/ComercioModel.php";
require_once "model/SlideModel.php";

$plantilla=new ControllerTemplate();
$plantilla->plantilla();
