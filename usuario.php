<?php

//Encriptado de la contraseña
$correo = $_POST['correo'];
$contrasenia = $_POST['contrasenia'];

$clave = $correo[0].$correo[1].$correo[2].$correo[3];
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


//$conexion = new mysqli('localhost','root','','metodopropio');
// $prepara = $conexion->prepare("INSERT INTO usuario (correo, contrasena) VALUES (?, ?)");
// $prepara->bind_param("ss", $correo, $resultado);
// $prepara->execute();
// $prepara->fetch();
echo $resultado;