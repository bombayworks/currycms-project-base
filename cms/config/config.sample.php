<?php
return array(
    'name' => 'Curry CMS',
    'adminEmail' => 'webmaster@example.com',
    'forceDomain' => false,
    'migrationVersion' => 1,
    'updateTranslationStrings' => true,
    'developmentMode' => true,
    'setup' => true,
    'maintenance' => array(
        'enabled' => false,
        'page' => null,
        'message' => 'Site is down for maintenance.',
    ),
    'backend' => array(
        'noauth' => false,
    ),
);
