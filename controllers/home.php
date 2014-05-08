<?php

$saludo = "Aprende PHP con";
$titulo = 'Cursos Mejorando.la';

$confidencial = "esto es privado";


// llamamos a la función
view('home', compact('saludo', 'titulo') );
?>