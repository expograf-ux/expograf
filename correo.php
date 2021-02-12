<?php
    $destinatario = 'comunidadexpograf@gmail.com';
    $nombre = $_POST['nombre']; 
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
   

    $header = "Enviado desde la página Expograf";
    $mensajeCompleto = $mensaje . "\nAtentamente: ". $nombre;

    mail($destinatario, $mensajeCompleto, $header);
    echo "<script>alert('correo enviado exitosamente')</script>";
    echo "<script> setTimeout(\"location.href='contacto.html'\",1000)</script>";
?>  