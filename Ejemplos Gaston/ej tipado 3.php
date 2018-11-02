<?php

declare(strict_types=1) //habilita el modo estricto

function primeraLetra(string $palabra) : string{
	return $palabra[0];
}

echo primeraLetra("hola");
echo primeraLetra(500);
?>