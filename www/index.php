<?php

try {
	require 'init.php';
	$application = Curry_Application::getInstance();
	$application->run();
}
catch(Exception $e) {
	echo '<pre>Exception: ' . $e->getMessage();
	echo "\n".$e->getTraceAsString().'</pre>';	
}
