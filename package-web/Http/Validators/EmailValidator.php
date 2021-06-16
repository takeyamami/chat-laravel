<?php
namespace MyApp\Http\Validators;

use Illuminate\validation\Validator;

class EmailValidator extends Validator
{
    public function validateMyEmail($attribute, $value)
    {
        return preg_match("/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/", $value);
    }
}