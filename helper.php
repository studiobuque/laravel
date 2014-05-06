<?php

// declraramos la función
function view($template, $vars = array())
{
	extract($vars);
	require "$template.php";
}
?>