<?php

/*
 * El frontend controller se encarga de
 * configurar nuestra aplicación
 */
require 'config.php';
require 'helper.php';

// esto nos sirve para hacer debuger
//print_r($_GET);
//var_dump($_GET);

// llamar a los controladores indicado
controller($_GET['url']);

//librerias
require 'library/request.php'

if ( empty($_GET['url'] ))
{
	$url = '';
}
else
{
	$url = $_GET['url'];
}
$request = new Request($url);
var_dump($request->getUrl());

?>