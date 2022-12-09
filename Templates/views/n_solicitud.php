<?php
   // include_once '../../Drivers/conections.php';
    //include '../../Templates/views/nueva_solicitud.php';

    
    //isset($_POST['narea'])    isset($_POST['Titulo_solicitud'])
        if($_POST['Titulo_solicitud'] != null  ){
            $areaForm = $_POST['narea'];
            $tituloForm = $_POST['Titulo_solicitud'];

            $conectar = mysqli_connect("127.0.0.1", "root", "123");
            mysqli_select_db ($conectar,"srq");
            $consulta= "SELECT id_area FROM area WHERE area_name='".$areaForm."'";
            $id_area = mysqli_query($conectar,$consulta);
            foreach ($id_area as $id_consulta){
                $area_id = $id_consulta['id_area'];
            }

            $consulta= "INSERT INTO ticket (title , id_area, id_ticket_state) VALUES ('".$tituloForm."', ".$area_id.", 1)";//.$nombre." AND contraseña = ".$contraseña;
            $titulo = mysqli_query($conectar,$consulta);
            

        } else{
            include_once 'nueva_solicitud.php';
            echo "Favor de escribir un titulo";
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