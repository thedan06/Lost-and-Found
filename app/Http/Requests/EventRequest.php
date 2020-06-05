<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EventRequest extends FormRequest
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
        return [
            //'name' => ['required', 'string', 'min:3', 'max:255', 'unique:event'],
            'name' => [
                'required', 'string', 'min:3', 'max:100',
                'unique:event,name,'.$this->event
            ],
            'description' => ['required', 'string', 'min:3', 'max:255'],
            'active' => [
                'required',
                Rule::in(['1', '0'])
            ],
            //'created_by' => ['required', 'numeric', 'min:1', 'min:100',],
        ];
    }
}
