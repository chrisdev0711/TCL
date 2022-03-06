<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HireStoreRequest extends FormRequest
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
            'contact' => ['required', 'max:255', 'string'],
            'tanker_id' => ['required', 'exists:tankers,id'],
            'mot_expiry' => ['nullable', 'date', 'date'],
            'adr_expiry' => ['nullable', 'date', 'date'],
            'service_interval' => ['nullable'],
            'discharge_pump' => ['nullable', 'boolean', 'boolean'],
            'order_num' => ['nullable', 'max:255', 'string'],
            'start_date' => ['required', 'date', 'date'],
            'contract_num' => ['nullable', 'max:255', 'string'],
            'end_date' => ['nullable', 'date', 'date'],
            'delivery_date' => ['nullable', 'date', 'date'],
            'hire_type' => [
                    'required',
                    'in:Weekly,Monthly,3 Months +,6 Months +,12 Months +',
            ],
            'hire_rate' => ['nullable', 'numeric'],
            'monthly_rate' => ['nullable', 'string'],
            'deposit' => ['nullable', 'numeric'],
            'minimum_hire_period' => ['nullable', 'max:255', 'string'],
            'notice_period' => ['nullable', 'max:255', 'string'],
            'maintenance_included' => ['nullable', 'boolean', 'boolean'],
            'tyres_included' => ['nullable', 'boolean', 'boolean'],
            'delivery_charge' => ['nullable', 'numeric'],
            'collection_charge' => ['nullable', 'numeric'],
            'water_fill_charge' => ['nullable', 'numeric'],
            'tyre_wear_charge' => ['nullable', 'numeric'],
            'commissioning_charge' => ['nullable', 'numeric'],
            'cleaning_outside_charge' => ['nullable', 'numeric'],
            'cleanout_charge' => ['nullable', 'numeric'],
            'other_charge' => ['nullable', 'numeric'],
            'charge_notes' => ['nullable', 'max:255', 'string'],
            'delivery_address' => ['nullable', 'max:255', 'string'],
            'delivery_postcode' => ['nullable', 'max:255', 'string'],
            'delivery_phone' => ['nullable', 'max:255', 'string'],
            'delivery_email' => ['nullable', 'max:255', 'string'],
            'delivery_fax' => ['nullable', 'max:255', 'string'],
            'delivery_contact_name' => ['nullable', 'max:255', 'string'],
            'insurer' => ['nullable', 'max:255', 'string'],
            'policy_num' => ['nullable', 'max:255', 'string'],
            'broker' => ['nullable', 'max:255', 'string'],
            'policy_type' => ['nullable', 'max:255', 'string'],
            'policy_expiry' => ['nullable', 'date', 'date'],
            'policy_value' => ['nullable', 'numeric'],
            'policy_notes' => ['nullable', 'max:255', 'string'],
            'hirer_name' => ['nullable', 'max:255', 'string'],
            'hirer_position' => ['nullable', 'max:255', 'string'],
            'hirer_behalf' => ['nullable', 'max:255', 'string'],
            'hirer_signature' => ['nullable', 'max:255', 'string'],
            'hirer_sign_date' => ['nullable', 'date', 'date'],
            'hirer_ip' => ['nullable', 'max:255', 'string'],
            'hirer_geo' => ['nullable', 'max:255', 'string'],
            'tcl_name' => ['nullable', 'max:255', 'string'],
            'tcl_behalf' => ['nullable', 'max:255', 'string'],
            'tcl_position' => ['nullable', 'max:255', 'string'],
            'tcl_signature' => ['nullable', 'max:255', 'string'],
            'tcl_sign_date' => ['nullable', 'date', 'date'],
        ];
    }
}
