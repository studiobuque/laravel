<?php

// declraramos la función
function view($template, $vars = array())
{
	extract($vars);
	require "viewa/$template.tpl.php";
}
?>