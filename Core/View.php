<?php

namespace Core;


class View
{

    public $params;


    public function __construct(array $params)
    {
        $this->params = $params;
    }


    public function render(?string $view, $params = [])
    {
        $this->params = array_merge($this->params, $params);

            list($controller, $action) = explode('/', $view);
            $view_path = VIEWS_PATH . DS . $controller . DS . $action . '.php';

            if (!file_exists($view_path)) {
                throw new \Exception("The view $view does not exists");
            }
            include $view_path;
    }


    public function get_partial($partial_name)
    {
        $partial_full_path = VIEWS_PATH . DS . 'partials' . DS . $partial_name . '.php';

        if (!file_exists($partial_full_path)) {
            throw new \Exception("The partial html file, $partial_full_path does not exists");
        }
        include($partial_full_path);
    }
}