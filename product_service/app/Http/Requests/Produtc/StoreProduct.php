<?php

namespace App\Http\Requests\Produtc;

use Illuminate\Foundation\Http\FormRequest;

class StoreProduct extends FormRequest
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
            'name' => [
                'required',
                'min:3',
                'max:250',
                'unique:products'
            ],
            'description' => [
                'required',
                'min:3',
                'max:500',
            ],
            'price' => [
                'required',
                'numeric'
            ],
            'qtd_available' => [
                'required',
                'min:0'
            ],
            'qtd_total' => [
                'required',
                'min:0'
            ]
        ];
    }
}
