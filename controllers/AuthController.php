<?php
include_once "config/constantes.php";
include_once "Controller.php";
include_once "models/Usuarios.php";
/**
 * Controlador de Usuarios
 */
class AuthController extends Controller
{
    public function __construct()
    {
        //Ejecución de controlador padre
        parent::__construct();
        //Código propio
        // echo "Constructor Controlador de Usuarios <br />";
        //Construcción de un modelo
    }
    public function login()
    {
        if (!empty($_POST)) {
            extract($_POST);
            $usuariosModel = new Usuarios();
            $usuario = $usuariosModel->getUsuarioLogin($email, $password);
            if ($usuario!=null) {
                $_SESSION['usuario'] = $usuario;
                header("Location: ".URL_BASE."url=home/index");
                return 0;
            }
            header("Location: ".URL_BASE."url=auth/login");
        }
        require_once('views/login.php');
    }
    public function logout()
    {
        session_destroy();
        header("Location: ".URL_BASE."url=home/index");
    }
}
