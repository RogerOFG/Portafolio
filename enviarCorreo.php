<?php
    if(isset($_POST['enviar'])) {
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $mensaje = $_POST['mensaje'];
        $para = 'roger_flasx@hotmail.com';
        $titulo = 'Nuevo mensaje de ' . $nombre;
        $mensaje = 'Nombre: ' . $nombre . "\r\n" .
                    'Correo electrónico: ' . $correo . "\r\n" .
                    'Mensaje: ' . $mensaje;
        $cabeceras = 'From: ' . $correo . "\r\n" .
                    'Reply-To: ' . $correo . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();
        if(mail($para, $titulo, $mensaje, $cabeceras)) {
            echo 'Mensaje enviado correctamente.';
        } else {
            echo 'Error al enviar el mensaje.';
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactanos</title>

    <!-- Linkeado de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <!-- Linkeado de BoxIcons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Linkeado de estilos CSS -->
    <link rel="stylesheet" href="assets/css/waves.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/cards.css">

    <!-- Icono de la pagina -->
    <link rel="icon" href="./assets/img/icon.ico">
</head>
<body>
    <!-- CONTACTANOS -->
    <div class="contacto" id="contact">
            <div class="contacto-container">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="card">
                    <a class="contacto-form">CONTACTANOS</a>
                    <div class="inputBox">
                        <input type="text" id="nombre" name="nombre" required="required">
                        <span>Nombre</span>
                    </div> 

                    <div class="inputBox1">
                        <input type="text" id="correo" name="correo" required="required">
                        <span class="user">Correo</span>
                    </div>

                    <div class="inputBox">
                        <textarea id="mensaje" name="mensaje" rows="5" required="required"></textarea>
                        <span>Mensaje</span>    
                    </div>

                    <input type="submit" name="enviar" class="enter" value="Enviar">

                </form>
            </div>
        </div>
</body>
</html>