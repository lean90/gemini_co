<?php
define('APPPATH', dirname(__FILE__) . '/');
define('BASEPATH', APPPATH . '/../system/');
require_once '../ENVIRONMENT.php';

chdir(APPPATH);

require __DIR__ . '/libraries/Doctrine.php';
$doctrine = new Doctrine();
$doctrine->generate_classes();
echo "Done !";