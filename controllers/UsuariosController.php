<?php
include_once "config/constantes.php";
include_once "Controller.php";
include_once "models/Usuarios.php";
include_once "models/Publicaciones.php";
/**
 * Controlador de Usuarios
 */
class UsuariosController extends Controller
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
        $usuariosModel = new Usuarios();
        $usuarios = $usuariosModel->getUsuarios();
        require_once('views/usuarios/index.php');
    }

    public function editar()
    {
        $id = $_SESSION['usuario']->id;
        $usuariosModel = new Usuarios();
        $usuario = $usuariosModel->getUsuarioById($id);
        require_once('views/usuarios/editar.php');
    }

    public function save()
    {
        $id = $_SESSION['usuario']->id;
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $direccion = $_POST['direccion'];
        $email = $_POST['email'];
        if(isset($_POST['password'])){
            $password = $_POST['password'];
        }else{
            $password = $_SESSION['usuario']->password;
        }

        $usuariosModel = new Usuarios($id, $nombre, $apellido, $direccion, $email, $password);

        $result = $usuariosModel->save();

        header("Location: ".URL_BASE."url=usuarios/ver");
    }

    public function ver()
    {
        $id = $_SESSION['usuario']->id;
        $usuariosModel = new Usuarios();
        $usuario = $usuariosModel->getUsuarioById($id);
        require_once('views/usuarios/ver.php');
    }

    public function eliminar()
    {
        $id = $_GET['id'];
        $usuariosModel = new Usuarios();
        $usuario = $usuariosModel->eliminar($id);
        header("Location: ".URL_BASE."url=usuarios/index");
    }

    public function publicaciones()
    {
        $usuario_id = $_SESSION['usuario']->id;
        $publicacionesModel = new Publicaciones();
        $publicaciones = $publicacionesModel->getPublicacionesUsuario($usuario_id);
        require_once('views/usuarios/publicaciones.php');
    }
}
