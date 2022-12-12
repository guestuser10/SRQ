<?php
   include_once '../../Functions/userSession.php';
   $userSession = new UserSession();
        if($_POST['mensajes'] != null ){
            
            $tituloForm = $_POST['mensajes'];

            $conectar = mysqli_connect("127.0.0.1", "root", "123");
            mysqli_select_db ($conectar,"srq");

            $consulta= "SELECT id_usuario FROM usuario WHERE nombre='".$userSession->getCurrentUser()."'";
            $id_area = mysqli_query($conectar,$consulta);
            foreach ($id_area as $id_consulta){
                $area_id = $id_consulta['id_usuario'];
            }

            $consulta= "INSERT INTO mensaje (id_emisor, id_ticket, mensaje_active, mensaje) VALUES (".$area_id.", ".$userSession->getCurrentqueja().", 1, '".$tituloForm."')";//.$nombre." AND contraseña = ".$contraseña;
            $e_mensaje = mysqli_query($conectar,$consulta);
            include_once "mensaje.php";

        } else{
            include_once 'mensaje.php';
            echo "Favor de escribir un mensaje";
        }

    

    /*$conectar = mysqli_connect("127.0.0.1", "root", "123");
        if (mysqli_connect("127.0.0.1", "root", "123")){
            //echo "<p>MySQL le ha dado permiso a PHP para ejecutar consultas con ese usuario y clave</p>";
            $consulta= "SELECT area_name FROM area";//.$nombre." AND contraseña = ".$contraseña;
            mysqli_select_db ($conectar,"srq");
            $datos = mysqli_query($conectar,$consulta);
        
            while ($fila= mysqli_fetch_array ($datos)){
                
            }
           

            return $fila;
        }else{
            echo "<p>MySQL no conoce ese usuario y password, y rechaza el intento de conexión</p>";
        }
        */
?>