<?php

//defining the directory separator
define('DS', DIRECTORY_SEPARATOR);

//define the root directory
define ('ROOT', dirname(__FILE__));

//views path
define('VIEWS_PATH', ROOT . DS . 'App' . DS . 'Views');

//define the PATHS array to include in the autoload
define('PATHS', [
        'Core',
        'App',
        'App' . DS . 'Controllers',
        'App' . DS . 'Models',
        'App' . DS . 'Views',
    ]
);