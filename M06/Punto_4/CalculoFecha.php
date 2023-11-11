<?php
        //////////////////////////////////////////////////////////////////////////////////////
        //Funcion para verificar si es mayor o menor de edad
        function ConfirmacionEdad($arg_1)
        {
            if ($arg_1< 0) {
                print("<br>Por Favor Ingrese una Edad Validad");
            } else{
                if ($arg_1 >=18) {
                    print("<br>Su edad es:".$arg_1." por tanto es Mayor de Edad");
                } else {
                    print("<br>Su edad es:".$arg_1." por tanto es Menor de Edad");
                }
            }
        }
        if(!$_GET){
            header("location: http://localhost/M06/Punto_4/IngresoDatos.html ");
        }
        //Declaracion de Variables
        $año= $_GET['Año'];
        $mes = $_GET['Mes'];
        $dia = $_GET['Dia'];
        $añoActual= date('Y');
        $mesActual = date('m');
        $diaActual = date('d');
        $edad=$añoActual-$año;///Calculo de la edad
        ///////////////////////////////////////////////////////////////////////////////////
        //$verif=checkdate(2, 29, 2001);
        //verificacion de fecha
        $verif=checkdate($mes,$dia,$año);
        /////////////////////////////////////////////////////////////////////////////////
        echo '<br>Fecha Actual:'.$añoActual."/".$mesActual."/".$diaActual."\n";//Fecha Actual 
        echo '<br>Fecha Ingresada:'.$año."/".$mes."/".$dia."\n";//Fecha Ingresada

        ///validacion para no ingresar años superiores al actual
        if($añoActual<$año){
            echo '<br>Por favor Ingrese una Fecha Valida';
        }
        //verificacion de fecha
        if($verif==false){
            echo '<br>Por favor Ingrese una Fecha Valida';
        }else{

            if($mes<$mesActual){
                echo "<br>Edad:".($edad);
                ConfirmacionEdad($edad);
            }elseif($mesActual<$mes){
                $edad=$edad-1;
                echo "<br>Edad:".($edad);
                ConfirmacionEdad($edad);
            }elseif($mes==$mesActual){
                if($diaActual<$dia){
                    $edad=$edad-1;
                    echo "<br>Edad:".($edad);
                    ConfirmacionEdad($edad);
                }elseif($dia<$diaActual){
                    echo "<br>Edad:".($edad);
                    ConfirmacionEdad($edad);
                }
            }
        }
        print ('<br /><a href="IngresoDatos.html">Volver</a>');

?>