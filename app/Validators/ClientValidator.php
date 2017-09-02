<?php

namespace CodeProject\Validators;

use Prettus\Validator\LaravelValidator;

class ClientValidator extends LaravelValidator
{
    protected $rules = [
        'name' => 'required',
        'responsible' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'address' => 'required'
    ];
}