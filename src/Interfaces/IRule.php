<?php
namespace Karamel\Validation\Interfaces ;
interface IRule {
    public function validate($data, $key, $value = null) ;
}