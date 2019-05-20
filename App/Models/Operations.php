<?php

namespace App\Models;

use PHPUnit\Runner\Exception;

class Operations
{

    private $first_number;
    private $second_number;
    private $operation;
    public $result;


    public function __construct(int $first_number, int $second_number, string $operation)
    {
        $this->first_number = $first_number;
        $this->second_number = $second_number;
        $this->operation = $operation;

        switch ($operation)
        {
            case '+':
                $this->result = $this->add();
                break;
            case '-':
                $this->result = $this->subtract();
                break;
            case '*':
                $this->result = $this->multiply();
                break;
            case '/':
                $this->result = $this->devide();
                break;
        }
    }

    public function get_result()
    {
       return $this->result;
    }

    public function add(): int
    {
        return $this->first_number + $this->second_number;
    }


    public function subtract(): int
    {
        return $this->first_number - $this->second_number;
    }


    public function multiply(): int
    {
        return $this->first_number * $this->second_number;
    }


    public function devide(): int
    {
        if ($this->second_number != 0)
        {
            return $this->first_number * $this->second_number;
        }
        throw new \Exception('Can not divide by zero');
    }
}
