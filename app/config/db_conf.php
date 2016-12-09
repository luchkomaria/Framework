<?php
$config = Dbconnect::instance();
$config->set(array(
	'host' =>'localhost',
	'user' =>'root',
	'pass' =>'root',
	'name' =>'articles'
	));
$config->connect();
unset($config);
echo $_idConnect;

?>