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

        <title>Enviar un mensaje</title>
        <link rel="stylescss" href="solicitud.css">
    </head>
    <body bgcolor="white">
        <form method="POST" action="fu_mensaje.php">
            <center>
                <h1>Buzon de mensajes</h1>
            </center>

            <div class="container">
                <center>

                <div class="container-inner container-inner--page">MENSAJES ANTERIORES</div>
                <h5></h5>

                <?php
                        
                        $conectar = mysqli_connect("127.0.0.1", "root", "123");
                        if (mysqli_connect("127.0.0.1", "root", "123")){
                            //echo "<p>MySQL le ha dado permiso a PHP para ejecutar consultas con ese usuario y clave</p>";
                            $consulta= "SELECT mensaje FROM mensaje where id_ticket=".$userSession->getCurrentqueja();//.$nombre." AND contraseña = ".$contraseña;
                            mysqli_select_db ($conectar,"srq");
                            $datos = mysqli_query($conectar,$consulta);
                        
                        }else{
                            echo "<p>MySQL no conoce ese usuario y password, y rechaza el intento de conexión</p>";
                        }

                    ?>
                <?php foreach ($datos as $anteriores) : ?>

                    <div class="container-inner container-inner--page"><?php echo $anteriores['mensaje']?></div>
                    <h5></h5>

                <?php endforeach ?>

                <div class="container-inner container-inner--page">Escriba su mensaje</div>
                <h1></h1>

                    <textarea name="mensajes" rows="15" cols="80"></textarea>
                    <h5></h5>
                    <input type="submit" value="Enviar" id="">

                </div>
            </center>

            </div>

        </form>
    </body>



    
</html>