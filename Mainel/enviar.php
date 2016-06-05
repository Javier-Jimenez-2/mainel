<?php
    $para= "javipuertosm@gmail.com";

    $asunto = "Mensaje Nuevo";

    $nombre = $_POST["nombre"];

    $correo = $_POST["correo"];

    $contenido = $_POST["mensaje"];
    
    $mensaje = "
    
    Nombre del remitente: ".$nombre."
    E-mail: ".$correo."
    Mensaje: ".$contenido."
    ";

    mail($para,$asunto,utf8_decode($mensaje));

    header("Location:index.html");

?>