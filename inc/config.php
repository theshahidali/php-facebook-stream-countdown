<?php

session_start();

$GLOBALS['config'] = array(
	'url' => getenv('APP_URL') ?: '',
	'database_host' => getenv('DB_HOST') ?: '',
	'database_user' => getenv('DB_USER') ?: '',
	'database_password' => getenv('DB_PASSWORD') ?: '',
	'database_name' => getenv('DB_NAME') ?: '',
);

require_once('database.php');
require_once('functions.php');