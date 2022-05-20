<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'num' => [
                'required',
                'max:20',
                isset($this->order->id)
                    ? Rule::unique('orders')->ignore($this->order->id)
                    : 'unique:orders',
            ],
            'receiver' => 'required|string|max:255',
            'total_cost' => 'required|numeric',
            'address' => 'max:255',
        ];;
    }
}
