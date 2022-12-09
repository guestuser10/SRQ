<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTP-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    </head>
    <body >
        <form method="POST" action="n_solicitud.php">
                <h1>Enviar una solicitud</h1>
                <label>Selecciona un tipo de solicitud</label>
                <select name="narea">
                    <!-- <option selected disabled>Area</option>--> 
                    <?php
                        
                        $conectar = mysqli_connect("127.0.0.1", "root", "123");
                        if (mysqli_connect("127.0.0.1", "root", "123")){
                            //echo "<p>MySQL le ha dado permiso a PHP para ejecutar consultas con ese usuario y clave</p>";
                            $consulta= "SELECT * FROM area";//.$nombre." AND contraseña = ".$contraseña;
                            mysqli_select_db ($conectar,"srq");
                            $datos = mysqli_query($conectar,$consulta);
                        
                        }else{
                            //echo "<p>MySQL no conoce ese usuario y password, y rechaza el intento de conexión</p>";
                        }

                    ?>

                    <?php foreach ($datos as $opciones) : ?>
                        <option value = "<?php echo $opciones['area_name']?>"><?php echo $opciones['area_name']?></option>
                    <?php endforeach ?>
                </select>
                <h2></h2>
                <label>Titulo</label>
                <input type="text" name="Titulo_solicitud">
                <input type="submit" value="Enviar">
        </form>
    </body>
</html>

