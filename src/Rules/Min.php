<?php

namespace Karamel\Validation\Rules;

use Karamel\Validation\Exceptions\ValidationException;
use Karamel\Validation\Interfaces\IRule;

class Min implements IRule
{
    public function validate($data, $key, $value = null)
    {

        if (!isset($data[$key]))
            return;
        $_data = trim($data[$key]);

        if (is_int($_data)) {
            // TODO check int 
            if ($_data < $value){
                throw new ValidationException($key . " should be greater than " . $value);
            }
        }else{
            if (mb_strlen($_data) < $value)
                throw new ValidationException($key . " should has " . $value . " character at least");
        }

    }
}