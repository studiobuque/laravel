<?php

require 'config.php';

$saludo = "Aprende PHP con";
$titulo = 'Cursos Mejorando.la';

$confidencial = "esto es privado";

require 'helper.php';

// llamamos a la función
view('homeView', compact('saludo', 'titulo') );
?>