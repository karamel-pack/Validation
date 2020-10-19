<?php

namespace Karamel\Validation\Rules;

use Karamel\Validation\Exceptions\ValidationException;
use Karamel\Validation\Interfaces\IRule;

class Required implements IRule
{
    public function validate($data, $key, $value = null)
    {

        if (!isset($data[$key]))
            throw new ValidationException($key . " is required");

        $_data = trim($data[$key]);
        if (empty($_data) || $_data == '')
            throw new ValidationException($key . " is required");


    }
}