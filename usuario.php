<?php

//Encriptado de la contraseña
$correo = $_POST['correo'];
$contrasenia = $_POST['contrasenia'];

$clave = $correo[0].$correo[1].$correo[2].$correo[3];
<<<<<<< HEAD
$cadenaCaracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789 ';
=======
$cadenaCaracteres = 'abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ0123456789 ';
>>>>>>> 29e8adeacf83e79b8b7b5cbab62441165734e717

$contador = 0;
$resultado='';

 for($i = 0; $i < iconv_strlen($clave); $i++) $contador += iconv_strrpos($cadenaCaracteres, $clave[$i]);

 for ($i = 0; $i < iconv_strlen($contrasenia); $i++)
 {
     $posicion = (iconv_strpos($cadenaCaracteres, $contrasenia[$i]))+$contador;
     if ($posicion > strlen($cadenaCaracteres))
     {
         $posicion = $posicion%strlen($cadenaCaracteres);

     }else{
         $posicion+1;
     }
     $resultado= $resultado. $cadenaCaracteres[$posicion+1];
 }


<<<<<<< HEAD
$conexion = new mysqli('localhost','root','','metodopropio');
 $prepara = $conexion->prepare("INSERT INTO usuario (correo, contrasena) VALUES (?, ?)");
 $prepara->bind_param("ss", $correo, $resultado);
 $prepara->execute();
 $prepara->fetch();
echo $resultado;
=======
//$conexion = new mysqli('localhost','root','','metodopropio');
// $prepara = $conexion->prepare("INSERT INTO usuario (correo, contrasena) VALUES (?, ?)");
// $prepara->bind_param("ss", $correo, $resultado);
// $prepara->execute();
// $prepara->fetch();
echo $resultado;
>>>>>>> 29e8adeacf83e79b8b7b5cbab62441165734e717
