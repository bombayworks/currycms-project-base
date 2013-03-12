<?php

try {
	require 'init.php';
	$admin = Curry_Admin::getInstance();
	$admin->show();
}
catch(Exception $e) {
	echo '<pre>Exception: ' . $e->getMessage();
	echo "\n".$e->getTraceAsString().'</pre>';
}
