<?php

namespace Karamel\Validation\Rules;

use Karamel\Validation\Exceptions\ValidationException;
use Karamel\Validation\Interfaces\IRule;

class Regex implements IRule
{
    public function validate($data, $key, $value = null)
    {
        if (!isset($data[$key]))
            return;

        $_data = trim($data[$key]);

        if (!preg_match($value, $_data))
            throw new ValidationException($key . " has invalid format");


    }
}