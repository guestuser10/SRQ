<?php 
    /*define('HOST', '127.0.0.1');
    define('DBNAME', 'sqr');
    define('PORT', '3306');
    define('USERNAME', 'root');
    define('PASSWORD', '1234');
*/
    $HOST= '127.0.0.1';
    $DBNAME= 'srq';
    $PORT='3306';
    $USERNAME='root';
    $PASSWORD='123';
    class conexion{
        public static function conectar(){
            try
            {
                //$dsn = 'mysql:host='.HOST.';dbname='.DBNAME.';user='.USERNAME.';password='.PASSWORD.';charset=UTF8';
                $mOptions=array(
                PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => FALSE,
                 );
                 
                 //$conn = new mysqli($HOST, $USERNAME, $PASSWORD);
                 $conn = mysqli_connect('localhost:3306', 'root','123','srq');
                 return $conn;
                if ($conn->connect_error){
                    die("Connection failed: ");
                }
                echo "Correcto";

                //$pdo = new PDO($dsn, USERNAME, PASSWORD, $mOptions);
                //return 1;
            }catch(Exception $e)
            {
                die($e->getMessage()." -> No hay Conexion a la Base de Datos " . $e);
            }
        }
    }
?>