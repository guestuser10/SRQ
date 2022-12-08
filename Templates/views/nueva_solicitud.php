<?php
include '../complements/Headbar.php'
?>  
<!DOCTYPE html>
<html>
    <head>
        <title>Enviar una solicitud</title>
        <link rel="stylesheet" href="../Resources/css/nueva_solicitud.css">
    </head>
    <body bgcolor="white">
        <div class="title">
            <h1>Enviar una solicitud</h1>
            <form>Selecciona un tipo de solicitud</form>
            
        </div>
        <div class ="form-group">
            <select>
                <option selected disabled>Area</option>
            </select>
        </div>
        <div class = "input-field">
            <h2></h2>
            <form>Titulo</form>
            <input type="text" name="" placeholder="">
        </div>
        <div class = "input-field button">
            <h3></h3>
            <input type="button" value="Enviar" id="">
        </div>

    </body>
</html>

