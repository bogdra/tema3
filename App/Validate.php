<?php

namespace App;


class Validate
{
    public static function is_permitted_operation(string $operation): bool
    {
        $permitted_operations = array('+', '-', '*', '/');

        if (!in_array($operation, $permitted_operations))
        {
            throw new \Exception('The submitted operation is not supported');
        }
        return true;
    }

    public static function convert_to_number($var)
    {

    }
}