<?php

namespace App\Http\Requests;

use App\Enums\TransactionStatusEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TransactionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'amount'           => ['required'],
            'description'      => ['nullable'],
            'currency'         => ['required'],
            'status'           => ['required', Rule::in(TransactionStatusEnum::toArray())],
            'issuer'           => ['required'],
            'transaction_date' => ['required'],
        ];
    }
}
