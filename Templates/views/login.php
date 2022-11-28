 

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- ===== Iconscout de CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- =====Link de CSS ===== -->
    <link rel="stylesheet" href="../Resources/css/login.css">
         
    <title>Login & Registro Form</title>
</head>
<body>
    
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Iniciar Sesion</span>

                <form action="#">
                    <div class="input-field">
                        <input type="text" placeholder="Ingresa tu Email" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Ingresa tu contraseña" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Recuerdame</label>
                        </div>
                        <!-- OlVISDASTE LA CONTRASEÑA LABEL-->
                        <a href="#" class="text"></a>
                    </div>

                    <div class="input-field button">
                        <input type="button" value="Iniciar Sesion">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">¿No eres miembro?
                        <a href="#" class="text signup-link">Registrate</a>
                    </span>
                </div>
            </div>

            <!-- Registrate Form -->
            <div class="form signup">
                <span class="title">Registro</span>

                <form action="#">
                    <div class="input-field">
                        <input type="text" placeholder="Ingresa tu nombre" required>
                        <i class="uil uil-user"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Ingresa tu Email" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Crea tu contraseña" required>
                        <i class="uil uil-lock icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Confirma tu contraseña" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="termCon">
                            <label for="termCon" class="text">Acepto todos los terminos y condiciones</label>
                        </div>
                    </div>

                    <div class="input-field button">
                        <input type="button" value="Registrate">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">¿Ya eres usuario?
                        <a href="#" class="text login-link">Inicia Sesion ahora</a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <script src="../Resources/js/login.js"></script>
</body>
</html>

