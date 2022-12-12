<?php
    include '../complements/Headbar.php';
   // include_once 'n_solicitud.php'
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTP-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Ver una solicitud</title>
       
    </head>
    <body bgcolor="white">
        <form method="POST" action="f_ver_solicitud.php">
            <div class="title">
                <h1>Ver las solicitudes</h1>
            </div>
            <div class ="form-group">
                <table class="default">

                    <tr>
                    <th>Id queja</th>
                    <th>Nombre de la queja</th>
                    <th>Area</th>
                    <th>Estado de la queja</th>
                    </tr>
                <!--<select name="narea">
                     --> 
                    <?php
                        
                        $conectar = mysqli_connect("127.0.0.1", "root", "123");
                        if (mysqli_connect("127.0.0.1", "root", "123")){
                            //echo "<p>MySQL le ha dado permiso a PHP para ejecutar consultas con ese usuario y clave</p>";
                            $consulta= "SELECT * FROM ticket";//.$nombre." AND contraseña = ".$contraseña;
                            mysqli_select_db ($conectar,"srq");
                            $datos = mysqli_query($conectar,$consulta);
                        
                        }else{
                            //echo "<p>MySQL no conoce ese usuario y password, y rechaza el intento de conexión</p>";
                        }

                    ?>

                    <?php foreach ($datos as $opciones) : ?>
                        <?php 
                        
                        //echo $opciones['id_ticket'].", ".$opciones['title'].", ".$opciones['id_area'].", ".$opciones['id_ticket_state'];
                        
                        $consulta= "SELECT area_name FROM area where id_area =".$opciones['id_area'];
                        $nom_area = mysqli_query($conectar,$consulta);
                        foreach ($nom_area as $n_a) {
                            $nombre_area=$n_a['area_name'];
                        }
                       // echo $opciones['id_ticket'].", ".$opciones['title'].", ".$nombre_area.", ".$opciones['id_ticket_state'];
                        
                        $consulta= "SELECT ticket_state FROM ticket_state where id_ticket_state =".$opciones['id_ticket_state'];
                        $nom_ticket = mysqli_query($conectar,$consulta);
                        foreach ($nom_ticket as $n_t) {
                            $nombre_ticket=$n_t['ticket_state'];
                        }

                        //echo $opciones['id_ticket'].", ".$opciones['title'].", ".$nombre_area.", ".$nombre_ticket;


                        ?>

                    <tr>
                    <td><center> <input type="submit" value=<?php echo  $opciones['id_ticket']?> name="id_ticket" id=""></center></td>
                    <td><center><?php echo  $opciones['title']?></center></td>
                    <td></center><?php echo  $nombre_area?></center></td>
                    <td><center><?php echo  $nombre_ticket?></center></td>
                    </tr>
                    <?php endforeach ?>
                </table>
                
            </div>
        </form>
    </body>
</html>