<?php
include_once "config/constantes.php";
include_once "Controller.php";
include_once "models/Usuarios.php";
/**
 * Controlador de Usuarios
 */
class RegisterController extends Controller
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
        require_once('views/register.php');
    }

    public function save()
    {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $direccion = $_POST['direccion'];
        $email = $_POST['email'];
        $password = $_POST['password'];

         if (empty($nombre) || empty($apellido) || empty($direccion) || empty($email) || empty($password)) {
            $validar = 'Los Campos son requeridos';
            require_once('views/register.php');
            
         }else{
            $usuariosModel = new Usuarios(null, $nombre, $apellido, $direccion, $email, $password);

            $result = $usuariosModel->save();
    
            header("Location: ".URL_BASE."url=auth/login");
         }

       
    }

}
