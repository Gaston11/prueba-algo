<?php

function agregarHola(&$string)
{
    $string .= 'hola';
}
$str = 'Esto es un string.';
agregarHola($str);
echo $str;    

?>