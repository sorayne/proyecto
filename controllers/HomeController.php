<?php
include_once "config/constantes.php";
include_once "Controller.php";
include_once "models/Publicaciones.php";
/**
 * Controlador de Usuarios
 */
class HomeController extends Controller
{
    public function __construct()
    {
        //Ejecución de controlador padre
        parent::__construct();
        //Código propio
        // echo "Constructor Controlador de Usuarios <br />";
        //Construcción de un modelo
    }

    public function index()
    {
        $publicacionesModel = new Publicaciones();
        $publicaciones = $publicacionesModel->getPublicaciones();
        require_once('views/home.php');
    }
}