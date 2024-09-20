<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGuestRequest extends FormRequest
{
    public function rules()
    {
        return [
            'first_name' => 'string|max:255',
            'last_name' => 'string|max:255',
            'email' => 'email|unique:guests,email',
            'phone' => 'string|unique:guests,phone|regex:/^\+/',
            'country' => 'nullable|string|max:20',
        ];
    }
}
