<?php
include_once "config/constantes.php";
include_once "Controller.php";
include_once "models/Publicaciones.php";

class PublicacionesController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function agregar()
    {
        require_once('views/publicaciones/agregar.php');
    }

    public function editar()
    {
        $id = $_GET['id'];
        $publicacionesModel = new Publicaciones();
        $publicacion = $publicacionesModel->getPublicacionById($id);
        if($publicacion->usuario_id == $_SESSION['usuario']->id){
            require_once('views/publicaciones/editar.php');
        }else{
            header("Location: ".URL_BASE."url=usuarios/publicaciones");
        }
    }

    public function save()
    {
        $usuario_id = $_SESSION['usuario']->id;
        $titulo = $_POST['titulo'];
        $texto = $_POST['texto'];
        if (!isset($_POST['id'])) {
            $publicacionesModel = new Publicaciones(null, $usuario_id, $titulo, $texto);
        } else {
            $id = $_POST['id'];
            $publicacionesModel = new Publicaciones($id, $usuario_id, $titulo, $texto);
        }
        $result = $publicacionesModel->save();
        header("Location: ".URL_BASE."url=usuarios/publicaciones");
    }

    public function ver()
    {
        $id = $_GET['id'];
        $publicacionesModel = new Publicaciones();
        $publicacion = $publicacionesModel->getPublicacionById($id);
        require_once('views/publicaciones/ver.php');
    }

    public function eliminar()
    {
        $id = $_GET['id'];
        $publicacionesModel = new Publicaciones();
        $publicacion = $publicacionesModel->eliminar($id);
        header("Location: ".URL_BASE."url=usuarios/publicaciones");
    }
}
