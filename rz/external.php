<?php

define('ROOT', './../../../../dev.rockrepublik/www/orion/');

$extension = strtolower($_REQUEST['extension']);

switch ($extension) {
	case 'css':
	case 'js':
		$filepath = ROOT . $extension . '.php';
		break;
	default:
		exit;
}

require_once($filepath);