<?php

$timeStart = microtime(true);
if (file_exists(dirname(__DIR__).'/vendor/autoload.php')) {
	require_once dirname(__DIR__).'/vendor/autoload.php';
} else {
	require_once dirname(__DIR__).'/curry/include/Curry/Core.php';
}
Curry_Core::init(dirname(__DIR__).'/cms/config/config.php', $timeStart);
