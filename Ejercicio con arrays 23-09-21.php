<?php
$nombres = ['Lucia','Maria','Jordi'];
$apellidos =['Serrano','Rodríguez','Reyes'];

// a) Usando array_combine fusionar los 2 en un array asociativo, mostrar el array para comprobarlo.
// array_combine — Crea un nuevo array, usando una matriz para las claves y otra para sus valores
// print_r() muestra información sobre una variable en una forma que es legible por humanos.

$combinado = array_combine($nombres,$apellidos);
print_r($combinado);

// b) Mostrar en un string todos los nombres usando alguna funcion de arrays.
// array_values- Devuelve todos los valores de un array.

print_r(array_values($nombres));

// c) Mostrar en un string todos los apellidos usando alguna funcion de arrays.
// array





?>