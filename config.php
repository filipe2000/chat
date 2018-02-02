<?php
require 'environment.php';

global $config;
global $db;

$config = array();
 // Verifica o ambiente que esta "development"
if(ENVIRONMENT == 'development') {
	define("BASE_URL", "http://localhost/chat");
	$config['dbname'] = 'bdchat';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = 'root';
} else {
	define("BASE_URL", "http://localhost/chat");
	$config['dbname'] = 'bdchat';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = 'root';
}

// Adicionado a conex�o com banco
$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>