<?php

//Encriptado de la contraseña
$correo = $_POST['correo'];
$contrasenia = $_POST['contrasenia'];

$clave = 'Refugio';
$cadenaCaracteres = 'abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ0123456789 ';

$contador = 0;
$resultado='';

 for($i = 0; $i < iconv_strlen($clave); $i++) $contador += iconv_strrpos($cadenaCaracteres, $clave[$i]);

 for ($i = 0; $i < iconv_strlen($contrasenia); $i++)
 {
     $posicion = (iconv_strpos($cadenaCaracteres, $contrasenia[$i]))+$contador;
     if ($posicion > 65)
     {
         $posicion = $posicion%65;

     }else{
         $posicion+1;
     }
     $resultado= utf8_decode($resultado. $cadenaCaracteres[$posicion+1]);
 }


$conexion = new mysqli('localhost','root','','metodopropio');
 $prepara = $conexion->prepare("INSERT INTO usuario (correo, contrasena) VALUES (?, ?)");
 $prepara->bind_param("ss", $correo, $resultado);
 $prepara->execute();
 $prepara->fetch();
echo $resultado;


$clave = 'Refugio';
$cadenaCaracteres = ' 9876543210ZYXVYTSRQPOÑNMLKJIHGFEDCBAzyxwvutsrqpoñnmlkjihgfedcba';

$contador = 0;
$resultado='';

for($i = 0; $i < iconv_strlen($clave); $i++) $contador += iconv_strrpos($cadenaCaracteres, $clave[$i]);

for ($i = 0; $i < iconv_strlen($contrasenia); $i++)
{
    $posicion = (iconv_strpos($cadenaCaracteres, $contrasenia[$i]));
    if ($posicion > 65)
    {
        $posicion = $posicion%65;
        $posicion = 65-$posicion;

    }else{
        $posicion+1;
    }
    $resultado= utf8_decode($resultado. $cadenaCaracteres[$posicion+1]);
}
