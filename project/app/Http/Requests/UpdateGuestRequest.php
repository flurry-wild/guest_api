<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGuestRequest extends FormRequest
{
    public function rules()
    {
        return [
            'first_name' => 'string|max:255',
            'last_name' => 'string|max:255',
            'email' => 'nullable|email|unique:guests,email,' . $this->route('guest'),
            'phone' => 'string|unique:guests,phone,' . $this->route('guest') . '|regex:/^\+/',
            'country' => 'nullable|string',
        ];
    }
}
