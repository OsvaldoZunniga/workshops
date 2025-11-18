<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use Config\Database;
class Conexion extends Controller
{
    public function index()
    {
        $db = \Config\Database::connect();

        if ($db->connID) {
            echo "Conexión exitosa a la base de datos.";
        } else {
            echo "Error al conectar a la base de datos.";
        }
    }
}
?>