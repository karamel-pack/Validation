<?php

namespace Karamel\Validation\Rules;

use Karamel\Validation\Exceptions\ValidationException;
use Karamel\Validation\Interfaces\IRule;

class Int implements IRule
{
    public function validate($data, $key, $value = null)
    {
        if (!isset($data[$key]))
            return;

        $_data = trim($data[$key]);

        if (!is_int($_data))
            throw new ValidationException($key . " must be an integer value");

    }
}