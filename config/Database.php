<?php

/**
 * Conexión a la base de datos
 */
class Database
{
    private static function conection()
    {
        $con = new mysqli('localhost', 'root', '', 'proyecto-20191');
        //errores
        if (!$con) {
            echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
            echo "errno de depuración: " . $con->connect_errno() . PHP_EOL;
            echo "error de depuración: " . $con->connect_error() . PHP_EOL;
            exit;
        }
        return $con;
    }

    public static function query($sql)
    {
        $con = Database::conection();
        $result = $con->query($sql);
        if ($con->error) {
            return $con->error;
        }
        $con->close();
        return $result;
    }
}
