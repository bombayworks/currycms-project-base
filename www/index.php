<?php

if ($_SERVER['SCRIPT_FILENAME'] !== __FILE__)
    return false;

require __DIR__.'/../vendor/autoload.php';
\Curry\App::create(__DIR__ . '/../cms/config/config.php')->run();