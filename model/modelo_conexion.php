<?php
class conexionBD
{
    public function conexionPDO(){


        $host = 'localhost';
        $usuario = 'u960558345_adminvdc';
        $contrasena = 'Leninpropietario2020';
        $dbName = 'u960558345-bd-vdc';


        try{
            $pdo = new PDO("mysql:host=$host;dbname=$dbName",$usuario,$contrasena);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->exec("set names utf8");
            return $pdo;

        }catch(Exception $e){
            echo "la conexion ha fallado";
        }
    }

    function cerrar_conexion(){
        $this->$pdo=null;
    }
}

?>
