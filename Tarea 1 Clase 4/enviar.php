<?php
   $destino = "jjpg2004@gmail.com";
   $nombre = $_post["name"];
   $correo = $_post["email"];
   $telefono = $_post["phone"];
   $mensaje = $_post["message"];
   $contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTelefono: " . $telefono . "\nMensaje: " . $mensaje;
   mail($destino, "Contacto", $contenido);
   header("Location:gracias.html");
?>   





