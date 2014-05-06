<?php

require 'config.php';

$saludo = "hola mundo";
$confidencial = "esto es privado";

require 'helper.php';

// llamamos a la función
view('view', compact( 'saludo', 'titulo') );
?>