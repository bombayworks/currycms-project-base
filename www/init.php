<?php

$timeStart = microtime(true);
require_once dirname(__FILE__) . '/../curry/include/Curry/Core.php';
Curry_Core::init(dirname(__FILE__) . '/../cms/config/config.php', $timeStart);
