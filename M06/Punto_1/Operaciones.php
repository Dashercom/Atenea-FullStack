<?php
    if(isset($_POST['submit'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operacion = $_POST['operacion'];

        switch ($operacion) {
            case 'suma':
                $resultado = $num1 + $num2;
                print("<br>El resultado de la operación".$operacion." es igual a :".$resultado);
                break;
            
            case 'restar':
                $resultado = $num1 - $num2;
                print("<br>El resultado de la operación".$operacion." es igual a :".$resultado);
                break;

            case 'multiplicar':
                $resultado = $num1 * $num2;
                print("<br>El resultado de la operación".$operacion." es igual a :".$resultado);
                break;
            
            case 'dividir':
                if($num2 ==0){
                    print("<br>No se puede dividir por cero");
                    break;
                }else{
                    $resultado = $num1 / $num2;
                    print("<br>El resultado de la operación".$operacion." es igual a :".$resultado);
                    break;
                }
            default:
                $resultado = "Sin resultados";
                break;
        }
        print ('<br /><a href="Calculadora.html">Volver</a>');
}

?>