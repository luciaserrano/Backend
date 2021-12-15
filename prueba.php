<?php

// EJERCICIO 2

$texto = 'cadena            de espacios ';
$texto = preg_replace('/\s+/', '',$texto); 

// preg_replace -> Realiza una búsqueda y sustitución de una expresión regular
// \s+ coge todos los espacios que haya en la cadena

echo $texto, '</br>';

// EJERCICIO 3

$corchete = 'una cadena con palabras [que estan de mas]';
$corchete = preg_replace('/\[.*?]/','', $corchete);
echo $corchete, '</br>';

$yt = 'https://www.youtube.com/watch?v=vfbd42oghii youtu.be/vfbd42oghii https://www.youtube.com/watch?v=vfbd42oghii';
$yt =preg_replace('/(?=v=)[a-zA-Z0-9]+(?=&)|(?<=v\/)[^&\n]+|(?<=v=)[^&\n]+|(?<=youtu.be\/)[^&\n]+/','', $yt);
echo $yt;
?>