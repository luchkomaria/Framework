<?php
$config = Dbconnect::instance();
$config->set(array(
	'host' =>'host_name',
	'user' =>'user',
	'pass' =>'password',
	'name' =>'database_name'
	));
$config->connect();
unset($config);
?>