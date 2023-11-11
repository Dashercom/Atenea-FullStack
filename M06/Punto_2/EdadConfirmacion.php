<?php
    if(isset($_POST['submit'])){
        $edad = $_POST['edad'];

        if ($edad < 0) {
            print("<br>Por Favor Ingrese una Edad Validad");
        } else{
            if ($edad >=18) {
                print("<br>El individuo es mayor de Edad");
            } else {
                print("<br>El individuo es menor de edad");
            }
        }

        print ('<br /><a href="index.html">Volver</a>');
}
?>