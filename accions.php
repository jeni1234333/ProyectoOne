<?php, Recuperar e insertar datos include "conecta.php";
if[isset ($_POST['btn'])]{
    $Nombre=$conecta->Reel_scape_string($_POST['Nombre']);
    $Apellido=$conecta->Reel_scape_string($_POST['Apellido']);
    $Direccion=$conecta->Reel_scape_string($_POST['Direccion']);
    $NTelefono=$conecta->Reel_scape_string($_POST['NTelefono']);
    $Fecha=$conecta->Reel_scape_string($_POST['Fecha']);
    $Correo=$conecta->Reel_scape_string($_POST['Correo']);
    if($Nombre==" "||$Apellido==" "||$Direccion==" "||$NTelefono==" "||$Fecha==" "||$Correo==" "){
        $Alerta="Alguno de los datos estan vacios";
    }
    else{
        $registro="INSERT INTO usuario(Nombre,Apellidos,Direccion,Telefono,Fecha,Email;)VALUES('$Nombre','$Apellido','$Direccion','$NTelefono','$Fecha','$Correo'");
        $registro=$conection->query($registro);
        if($registro)||{
            echo="REGISTRO EXITOSO";
        }else{
            echo="ERROR AL REGISTRARSE";
        }
    }
}
?>
