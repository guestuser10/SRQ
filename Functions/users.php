<?php

include_once '../Models/Usuario_model.php';
include_once '../Drivers/conections.php';

class User{

    private $nombre_u;
    private $tipo_u;

    public function userExists($nombre, $contraseña){
        //$conectar = new conexion();
        $conectar = mysqli_connect("127.0.0.1", "root", "123");
        if (mysqli_connect("127.0.0.1", "root", "123")){
            //echo "<p>MySQL le ha dado permiso a PHP para ejecutar consultas con ese usuario y clave</p>";
            $consulta= "SELECT * FROM usuario where nombre = '".$nombre."'"." AND contraseña = '".$contraseña."'";//.$nombre." AND contraseña = ".$contraseña;
            mysqli_select_db ($conectar,"srq");
            $datos = mysqli_query($conectar,$consulta);
        
            $fila= mysqli_fetch_array ($datos);

            return $fila;
        }else{
           // echo "<p>MySQL no conoce ese usuario y password, y rechaza el intento de conexión</p>";
        }

        

        /*if($fila <> null){
            echo "<p>";
            echo $fila ["id_usuario"];
            echo "-"; // un separador
            echo $fila["nombre"];
            echo "-"; // un separador
            echo $fila ["contraseña"];
            echo "-"; // un separador
            echo $fila["id_area"];
            echo "</p>";
            return $fila;
        }else{
            echo "Usuario y/o contraseña incorrecto";
        }
        */
        /*while ($fila = mysqli_fetch_array($datos)){
            echo "<p>";
            echo $fila ["id_usuario"];
            echo "-"; // un separador
            echo $fila["nombre"];
            echo "-"; // un separador
            echo $fila ["contraseña"];
            echo "-"; // un separador
            echo $fila["id_area"];
            echo "</p>";
            
            
            
        }
*/

        //$consulta= "SELECT * FROM usuario";
        //mysql_select_db ("");
        //$this->conectar->
        
        //1.-$query = $conectar->conectar()->prepare('SELECT * FROM usuario where nombre = ? AND contraseña = ?');
        
         //try{

         /*   $stm = $conectar->conectar()->prepare("SELECT * FROM usuario WHERE nombre = ? AND contraseña = ?");
				$stm->execute(array($nombre, $contraseña));
				$r = $stm->fetch(PDO::FETCH_OBJ);

				if ($r) {
					$entity = new Usuarios();
					$entity->__SET('id_usuario',$r->id_usuario);
					$entity->__SET('nombre',$r->nombre);
					$entity->__SET('contraseña',$r->contraseña);
					$entity->__SET('id_area',$r->id_area);
					$entity->__SET('usuario_active',$r->usuario_active);
					$entity->__SET('tipo',$r->tipo);
					//$entity->__SET('tgeneros_id',$r->tgeneros_id);
					//$entity->__SET('contrasenia',$r->contrasenia);
					

					return $entity;

				}*/
       /* }catch (Exception $e)
        {
            echo " nop";
        }*/
         

        //$query = 'SELECT * FROM Usuario where nombre = $nombre AND contraseña = $contraseña';
        //mysql_query($query.$conectar);
        
        //2.-$query->execute(array('nombre'=>$nombre, 'contraseña'=>$contraseña));

        /* 1.- $query->execute(array($nombre, $contraseña));

        //buscar como obtener el tipo de la bd 
        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
        */
    }

    public function setUser($nombre){
        $query = $this->conectar()->prepare('SELECT * FROM Usuario where nombre = :nombre');
        $query->execute([':nombre'=> $nombre]);

        foreach ($query as $currentUser) {
            $this->nombre_u = $currentUser['nombre'];
            $this->tipo_u = $currentUser['tipo'];
        }
    }
    
    public function getNombre(){
        return $this->nombre_u;
    }

    public function getTipo(){
        return $this->tipo_u;
    }

}

?>