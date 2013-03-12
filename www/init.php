<?php
define('CURRY_DISABLE_AUTOLOAD', 1);
$timeStart = microtime(true);
require __DIR__ . '/../vendor/autoload.php';
Curry_Core::init(__DIR__ . '/../cms/config/config.php', $timeStart);
unset($timeStart);
