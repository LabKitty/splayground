<?php

// Project constants
define('PROJECT_NAME', 'splayground');
define('DEFAULT_CONTROLLER', 'homepage');
define('DEBUG', false);

// Load app
require 'system/classes/Application.php';
$app = new Application;
