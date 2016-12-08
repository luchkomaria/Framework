<?php
$config = Dbconnect::instance();
$config->set(array(
	'host' =>'localhost',
	'user' =>'root',
	'pass' =>'',
	'name' =>'articles'
	));
$config->connect();
unset($config);
?>