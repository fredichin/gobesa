<?php
 $destino="fredyhuamansalcedo@gmail.com";
 $nombre=$_POST["name"];
 $correo=$_POST["email"];;
 $mensaje=$_POST["telefono"];
 $contenido="Nombre: ".$nombre."\nCorreo: ".$correo."\nMensaje: ".$telefono;
 mail($destino,"Contacto", $contenido);
 header("Location: index.html");

?>