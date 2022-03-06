<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactStoreRequest extends FormRequest
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
            'company_id' => ['required', 'exists:companies,id'],
            'email' => ['required', 'email', 'unique:contacts'],
            'phone' => ['required', 'max:255', 'string'],
            'mobile' => ['required', 'max:255', 'string'],
            'contact' => ['required', 'max:255', 'string', 'unique:contacts'],
        ];
    }
}
