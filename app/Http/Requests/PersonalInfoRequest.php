<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonalInfoRequest extends FormRequest
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
         $rules = [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'gender' => 'required',
        ];

        if (isset($this->marriage_date)) {
            $rules['marriage_date'] = 'required';
        }

        if (isset($this->marriage_place)) {
            $rules['marriage_place'] = 'required';
        }

        return $rules;
    }
}
