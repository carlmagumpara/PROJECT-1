<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CorporatePartnershipInfoRequest extends FormRequest
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
            'company_name' => 'required|max:255',
            'type' => 'required',
            'principal_office_address' => 'required|max:255',
            'business_address' => 'required|max:255',
            'line_of_business' => 'required|max:255',
            'attach_fill_out' => 'required',
        ];

        if ($this->attach_fill_out == 'Attach') {
            // $rules[''] = 'required';
        } else {
            // $rules[''] = 'required';
        }

        return $rules;
    }
}
