<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyUpdateRequest extends FormRequest
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
            'company' => ['required', 'max:255', 'string'],
            'address' => ['required', 'max:255', 'string'],
            'postcode' => ['required', 'max:255', 'string'],
            'insurer' => ['nullable', 'max:255', 'string'],
            'policy_num' => ['nullable', 'max:255', 'string'],
            'broker' => ['nullable', 'max:255', 'string'],
            'policy_type' => ['nullable', 'max:255', 'string'],
            'policy_expiry' => ['nullable', 'date', 'date'],
            'policy_notes' => ['nullable', 'max:255', 'string'],
            
        ];
    }
}
