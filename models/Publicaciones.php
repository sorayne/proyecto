<?php
include_once "Model.php";
/**
 * Modelo de Usuarios
 */
class Publicaciones extends Model
{
    private $id;
    private $usuario_id;
    private $titulo;
    private $texto;
    private $fecha;

    public function __construct($id = null, $usuario_id = null, $titulo = null, $texto = null)
    {
        parent::__construct();
        // echo "Modelo de Usuarios <br />";
        $this->id = $id;
        $this->usuario_id = $usuario_id;
        $this->titulo = $titulo;
        $this->texto = $texto;
    }

    public function save()
    {
        if (!isset($this->id)) {
            $sql = "INSERT INTO publicaciones (usuario_id, titulo, texto, fecha) VALUES('$this->usuario_id','$this->titulo','$this->texto',NOW())";
        } else {
            $sql = "UPDATE `publicaciones` SET `titulo`='$this->titulo',`texto`='$this->texto' WHERE id=$this->id";
        }
        return Database::query($sql);
    }

    public function getPublicaciones()
    {
        $sql = "SELECT * FROM publicaciones INNER JOIN usuarios ON publicaciones.usuario_id = usuarios.id ORDER BY fecha ASC";
        return Database::query($sql);
    }

    public function getPublicacionesUsuario($usuario_id)
    {
        $sql = "SELECT * FROM publicaciones WHERE usuario_id=$usuario_id ORDER BY fecha ASC";
        return Database::query($sql);
    }

    public function getPublicacionById($id)
    {
        $sql = "SELECT * FROM publicaciones WHERE id=$id";
        $usuario = Database::query($sql);
        return $usuario->fetch_object();
    }

    public function eliminar($id)
    {
        $sql = "DELETE FROM publicaciones WHERE id=$id";
        return Database::query($sql);
    }

}
