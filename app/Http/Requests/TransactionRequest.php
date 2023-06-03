<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransactionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'amount' => 'required|numeric',
            'date' => 'required|date',
            'category' => [
                'required',
                'string',
                'in:Food & Beverage,Transportation,House Bill,Medical,Education,Gift & Donations,Fun Money,Other Expenses,Salary,Other Income'
            ],
            'topik' => 'required|string|max:255|in:',
            'description' => 'required|string'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function messages(): array
    {
        return [
            'amount' => [
                'required' => 'Amount is required',
                'numeric' => 'Amount must be a number',
            ],
            'date' => [
                'required' => 'Date is required',
                'date' => 'Date must be a date',
            ],
            'category' => [
                'required' => 'Category is required',
                'string' => 'Category must be a string',
                'in' => 'Category not in the list'
            ],
            'description' => [
                'required' => 'Description is required',
                'string' => 'Description must be a string',
            ],
        ];
    }
}
