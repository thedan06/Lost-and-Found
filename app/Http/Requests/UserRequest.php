<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        //'name', 'email', 'password', 'first_name', 'last_name', 'phone_number', 'gender', 'location', 'description',
        return [
            //'name' => ['required', 'string', 'min:3', 'max:255', 'unique:event'],
            'name' => [
                'required', 'string', 'min:3', 'max:100',
                'unique:event,name,'.$this->user
            ],
            'email' => ['required', 'string', 'email', 'min:4', 'min:100'],
            'password' => ['required', 'string', 'min:4', 'min:10'],
            'first_name' => ['required', 'string', 'min:3', 'max:30'],
            'last_name' => ['required', 'string', 'min:3', 'max:30'],
            'phone_number' => ['required', 'string', 'min:10', 'max:12'],
            'description' => ['string', 'min:3', 'max:255'],
            'gender' => [
                'required',
                Rule::in(['male', 'female'])
            ],
            'location' => ['required', 'string', 'min:3', 'max:255'],
        ];
    }
}
