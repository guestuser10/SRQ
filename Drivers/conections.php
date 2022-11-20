<?php 
    define('HOST', 'localhost');
    define('DBNAME', 'SRQ');
    define('PORT', '3306');
    define('USERNAME', 'root');
    define('PASSWORD', '1234');

    class conexion{
        public static function conectar(){
            $dsn = 'mysql:host='.HOST.';dbname='.DBNAME.';charset=UTF8';
            $mOptions=array(
                PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => FALSE,
            );
            try
            {	
                $pdo = new PDO($dsn, USERNAME, PASSWORD, $mOptions);
                return $pdo;
            }catch(Exception $e)
            {
                die($e->getMessage()." -> No hay Conexion a la Base de Datos");
            }
        }
    }
?>