<?php


require_once('config.php');


function autoload($className)
{
    $classNameWithNamespaceArray = explode('\\', $className);
    $classFile = array_pop($classNameWithNamespaceArray) . '.php';
    foreach (PATHS as $path) {
        check_and_include(ROOT . DS . $path . DS . $classFile);
    }
}

function check_and_include(string $file_path)
{
    if (file_exists($file_path)) {
        require_once($file_path);
    }
    return;
}

spl_autoload_register('autoload');
