<?php


// declraramos la función pera cargar las vistas
function view($template, $vars = array())
{
	extract($vars);
	require "views/$template.tpl.php";
}


function controller($name)
{
	if (empty($name))
	{
		$name='home';
	}
	
	$file = "controllers/$name.php";
	
	if (file_exists($file))
	{
		return require $file;
	}
	//require 'controllers/$name.php';
	
	header("HTTP/1.0 404 Not Found");
	exit("Pagina no encontrada");	

}


?>