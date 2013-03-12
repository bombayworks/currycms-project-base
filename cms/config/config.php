<?php
return array (
  'curry' => 
  array (
    'name' => 'Curry CMS',
    'adminEmail' => 'webmaster@domain.com',
    'forceDomain' => false,
    'statistics' => false,
    'applicationClass' => 'Project_Application',
    'migrationVersion' => 1,
    'updateTranslationStrings' => true,
    'developmentMode' => true,
    'setup' => true,
    'maintenance' => 
    array (
      'enabled' => false,
      'page' => null,
      'message' => 'Site is down for maintenance.',
    ),
    'cache' =>
    array(
      'method' => 'none',
    ),
    'log' => 
    array (
      'method' => 'none',
    ),
    'propel' => 
    array (
    ),
    'template' => 
    array (
    ),
    'backend' => 
    array (
      'noauth' => false,
    ),
    'errorPage' => 
    array (
      'notFound' => null,
      'accessDenied' => null,
      'error' => null,
    ),
  ),
);
