<?php

namespace Karamel\Validation\Rules;
class CheckRule
{
    public static function check($name, $data, $key, $value)
    {

        $_name = trim(ucfirst($name));
        $_name = "Karamel\\Validation\\Rules\\".$_name;
         (new $_name())->validate($data, $key, $value);

    }
}