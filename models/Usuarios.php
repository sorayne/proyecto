<?php
include_once "Model.php";
/**
 * Modelo de Usuarios
 */
class Usuarios extends Model
{
    private $id;
    private $nombre;
    private $apellido;
    private $direccion;
    private $email;
    private $password;

    public function __construct($id = null, $nombre = null, $apellido = null, $direccion = null, $email = null, $password = null)
    {
        parent::__construct();
        // echo "Modelo de Usuarios <br />";
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->direccion = $direccion;
        $this->email = $email;
        $this->password = $password;
    }

    public function save()
    {
        if (!isset($this->id)) {
            $sql = "INSERT INTO usuarios (nombre, apellido, direccion, email, password) VALUES('$this->nombre','$this->apellido','$this->direccion','$this->email','$this->password')";
        } else {
            $sql = "UPDATE `usuarios` SET `nombre`='$this->nombre',`apellido`='$this->apellido',`direccion`='$this->direccion',`email`='$this->email',`password`='$this->password' WHERE id=$this->id";
        }
        return Database::query($sql);
    }

    public function getUsuarios()
    {
        $sql = "SELECT * FROM usuarios ORDER BY id ASC";
        return Database::query($sql);
    }

    public function getUsuarioById($id)
    {
        $sql = "SELECT * FROM usuarios WHERE id=$id";
        $usuario = Database::query($sql);
        return $usuario->fetch_object();
    }

    public function eliminar($id)
    {
        $sql = "DELETE FROM usuarios WHERE id=$id";
        return Database::query($sql);
    }

    public function getUsuarioLogin($email, $password)
    {
        $sql = "SELECT * FROM usuarios WHERE email='$email' AND password='$password'";
        $usuario = Database::query($sql);
        return $usuario->fetch_object();
    }

}
