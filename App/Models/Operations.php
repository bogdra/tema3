<?php

namespace App\Models;

use PHPUnit\Runner\Exception;

class Operations
{

    private $first_number;
    private $second_number;
    private $operation;
    public $result;


    public function __construct(float $first_number, float $second_number, string $operation)
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
                $this->result = $this->divide();
                break;
        }
    }

    public function get_result()
    {
       return $this->result;
    }

    public function add(): float
    {
        return round($this->first_number + $this->second_number,2);
    }


    public function subtract(): float
    {
        return round($this->first_number - $this->second_number,2);
    }


    public function multiply(): float
    {
        return round($this->first_number * $this->second_number,2);
    }


    public function divide(): float
    {
        if ($this->second_number != 0)
        {
            return round($this->first_number / $this->second_number,2);
        }
        throw new \Exception('Can not divide by zero');
    }
}
