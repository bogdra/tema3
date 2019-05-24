<?php

namespace Core;


use App\Validate;

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
       if (!empty($_REQUEST))
       {
            $this->params['first_number'] = (float)Validate::clean($_REQUEST['first_number']);
            $this->params['second_number'] = (float)Validate::clean($_REQUEST['second_number']);

            if (Validate::is_permitted_operation($_REQUEST['operation'])) {
                $this->params['operation'] = (string)$_REQUEST['operation'];
            }
       } else {
            $this->params = [];
       }
        

    }


}