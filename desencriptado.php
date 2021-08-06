<?php
<<<<<<< HEAD

$correo = $_POST['correo'];
$contrasenia = $_POST['contrasenia'];
$clave = $correo[0].$correo[1].$correo[2].$correo[3];
$cadenaCaracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789 ';

//$cadenaCaracteres = ' 9876543210ZYXVYTSRQPONMLKJIHGFEDCBAzyxwvutsrqponmlkjihgfedcba';
=======
$correo = $_POST['correo'];
$contrasenia = $_POST['contrasenia'];

$clave = $correo[0].$correo[1].$correo[2].$correo[3];
$cadenaCaracteres = ' 9876543210ZYXVYTSRQPOÑNMLKJIHGFEDCBAzyxwvutsrqpoñnmlkjihgfedcba';
>>>>>>> 29e8adeacf83e79b8b7b5cbab62441165734e717

$contador = 0;
$resultado='';

for($i = 0; $i < iconv_strlen($clave); $i++) $contador += iconv_strrpos($cadenaCaracteres, $clave[$i]);

for ($i = 0; $i < iconv_strlen($contrasenia); $i++)
{
    $posicion = (iconv_strpos($cadenaCaracteres, $contrasenia[$i]));
<<<<<<< HEAD
    if ($posicion > strlen($cadenaCaracteres))
    {
        $posicion = $posicion%strlen($cadenaCaracteres);
        //$posicion = strlen($cadenaCaracteres)-$posicion;

    }
//    else{
//        $posicion+1;
//    }
    $resultado= $resultado. $cadenaCaracteres[$posicion];
=======
    if ($posicion > 65)
    {
        //$posicion = $posicion%65;
        $posicion = 65-$posicion;

    }else{

    }
    $resultado= utf8_decode($resultado. $cadenaCaracteres[$posicion+1]);
>>>>>>> 29e8adeacf83e79b8b7b5cbab62441165734e717
}
echo $resultado;