<?php
// La salida de datos sera true el valor es tipo string y false de lo contrario
$Valores = array(false, true, null, 80, '25', 25, '25.5','','','1',1);
foreach($Valores as $Valor){
    echo "Es un string(";
    var_export($Valor);
    echo ") = ";
    echo var_dump(is_string($Valor));
    echo "<br><br>";
}
$mensaje = "Esto es una cadena de caracteres";
if(is_string($mensaje)){
    echo $mensaje."<br>";
    var_dump($mensaje);
}
else{
    echo "El valor del mensaje no es un string es: ".$mensaje;
}
?>