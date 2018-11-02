<?php

$miarray = array( 2, 4, 5, 2, 1, 7, 10);
$otroarray =array(0);
foreach ($miarray as $clave => $valor) {
    echo "{$clave} => {$valor} ";
    echo "<br>";
}

$i = 0;
while (++$i) {
    
    switch ($miarray[$i]) {
    case 5:
        echo "Encontro un 5 <br />\n";
        break 1;  /* Sólo sale del switch. */
    case 7:
        echo "Encontro un 7; saliendo<br />\n";
        array_push($otroarray,$miarray[$i]);
        break 2;  /* Sale del switch y del while. */
    default:
        break;
    }
}

print_r($otroarray);

$bool = true && false;
var_dump($bool); //false

$bool = true and false;
var_dump($bool); //true



?>