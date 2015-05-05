<?php
return array(
    'name' => 'Curry CMS',
    'adminEmail' => 'webmaster@example.com',
    'migrationVersion' => 1,
    'updateTranslationStrings' => true,
    'developmentMode' => true,
    'setup' => true,
    'maintenance' => array(
        'enabled' => false,
        'message' => 'Site is down for maintenance.',
    ),
    'backend' => array(
        'noauth' => false,
    ),
);
