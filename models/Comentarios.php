<?php
include_once "Model.php";

class Comentarios extends Model
{
    private $id;
    private $usuario_id;
    private $publicacion_id;
    private $texto;

    public function __construct($id = null, $usuario_id = null, $publicacion_id = null, $texto = null)
    {
        parent::__construct();

        $this->id = $id;
        $this->usuario_id = $usuario_id;
        $this->publicacion_id = $publicacion_id;
        $this->texto = $texto;
    }

    public function save()
    {
        if (!isset($this->id)) {
            $sql = "INSERT INTO comentarios (usuario_id, publicacion_id, texto) VALUES('$this->usuario_id','$this->publicaicon_id','$this->texto')";
        } else {
            $sql = "UPDATE `comentarios` SET `texto`='$this->texto' WHERE id=$this->id";
        }
        return Database::query($sql);
    }

    public function getComentariosPublicacion($publicacion_id)
    {
        $sql = "SELECT * FROM comentarios WHERE publicacion_id=$id_publicacion ORDER BY id ASC";
        return Database::query($sql);
    }

    public function eliminar($id)
    {
        $sql = "DELETE FROM comentarios WHERE id=$id";
        return Database::query($sql);
    }

}
