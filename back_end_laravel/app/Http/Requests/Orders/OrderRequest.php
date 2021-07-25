<?php

namespace App\Http\Requests\Orders;

use App\Rules\ValidFood;
use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
    public function rules(ValidFood $valid_food)
    {
        return [
            'token' => 'required',
            'amount' => [
                'required',
                $valid_food,
            ] 
        ];
    }
}