<?php

require_once('autoload.php');


$construct = new \App\Controllers\HomeController;

echo $construct->indexAction();