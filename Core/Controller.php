<?php

namespace Core;


class Controller
{
    public $view;
    protected $params;


    public function __construct()
    {
        $this->set_params();
        $this->view = new View($this->params);
    }


    private function set_params()
    {
        //TODO: sanitize the params
        $this->params = $_REQUEST;
    }

}