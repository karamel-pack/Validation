<?php

namespace Karamel\Validation;
use Karamel\Validation\Rules\CheckRule;

class Validation
{

    public static function make($data = [], $roles = [])
    {
        foreach ($roles as $key => $role) {
            $role_row = explode("|", $role);
            foreach ($role_row as $role_single) {
                $role_single = explode(":", $role_single);
                if (count($role_single) > 1) {
                    $role_name = $role_single[0];
                    $role_value = $role_single[1];
                } else {
                    $role_name = $role_single[0];
                    $role_value = null;
                }
                CheckRule::check($role_name,$data,$key,$role_value);
            }
        }
    }
}