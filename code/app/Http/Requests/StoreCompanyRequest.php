<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCompanyRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**  @return array<string, mixed> */
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'unique:App\Models\Company,name'
            ],
            'company_type_id' => [
                'required',
                'integer',
                'exists:App\Models\CompanyType,id'
            ]

        ];
    }
}
