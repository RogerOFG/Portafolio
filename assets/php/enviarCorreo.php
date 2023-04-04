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
