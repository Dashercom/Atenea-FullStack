<?php
        if(!$_GET){
            header("location: http://localhost/M06/Punto_3/PeticionDatos.html ");
        }
        $nombre = $_GET['Nombre'];
        $apellido = $_GET['Apellido'];
        $cedula = $_GET['Cedula'];
        

        print("<br>Nombre:".$nombre);
        print("<br>Apellido:".$apellido);
        print("<br>Cedula:".$cedula);

        print ('<br /><a href="PeticionDatos.html">Volver</a>');

?>