<?php

namespace App\Rules;

use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Validation\Rule;

class PhoneRules implements Rule
{
    public function passes($attribute, $value)
    {
        return preg_match("/^[0-9]{7,15}$/", $value);
    }

    public function message()
    {
        return 'The :attribute must be a valid telephone number (7 - 15 digits in length)';
    }
}
