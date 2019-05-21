<?php

namespace App\Controllers;

use \Core\Controller;
use \App\Validate;
use \App\Models\Operations;


class HomeController extends Controller
{


    public function indexAction()
    {

        try {
            $this->view->render('home/index');
            if (!empty($this->params)) {
                $operation_result = new Operations($this->params['first_number'], $this->params['second_number'],
                    $this->params['operation']);
                $param['result'] = $operation_result->get_result();
                $this->view->render('home/result', $param);
            }
            $this->view->get_partial('footer');
        } catch (\Exception $e) {
            echo $e->getMessage();
        }

    }

}