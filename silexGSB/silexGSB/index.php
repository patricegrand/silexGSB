<?php

require_once __DIR__.'/vendor/autoload.php';
$app = new Silex\Application();
require_once __DIR__.'/app/services.php';
require_once __DIR__.'/App/routes.php';
require_once __DIR__.'/App/controleurs.php';
$app->run();

