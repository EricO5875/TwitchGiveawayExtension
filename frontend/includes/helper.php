<?php

/**
 * Readers template.
 *
 * @param template $template
 * @param array $data
 */

function render($template, $data = array())
{

	$path = __DIR__ . '/../views/' . $template . '.html';
	if (file_exists($path))
	{
		extract($data);
		require($path);
	}

}

?>