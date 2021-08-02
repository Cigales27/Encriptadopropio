<?php
$correo = $_POST['correo'];
$contrasenia = $_POST['contrasenia'];

$clave = $correo[0].$correo[1].$correo[2].$correo[3];
$cadenaCaracteres = ' 9876543210ZYXVYTSRQPOÑNMLKJIHGFEDCBAzyxwvutsrqpoñnmlkjihgfedcba';

$contador = 0;
$resultado='';

for($i = 0; $i < iconv_strlen($clave); $i++) $contador += iconv_strrpos($cadenaCaracteres, $clave[$i]);

for ($i = 0; $i < iconv_strlen($contrasenia); $i++)
{
    $posicion = (iconv_strpos($cadenaCaracteres, $contrasenia[$i]));
    if ($posicion > 65)
    {
        //$posicion = $posicion%65;
        $posicion = 65-$posicion;

    }else{

    }
    $resultado= utf8_decode($resultado. $cadenaCaracteres[$posicion+1]);
}
echo $resultado;