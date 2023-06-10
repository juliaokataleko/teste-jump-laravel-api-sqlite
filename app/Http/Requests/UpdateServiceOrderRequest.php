<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateServiceOrderRequest extends FormRequest
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
        $method = $this->method();

        return [
            "vehiclePlate" => "nullable|string",
            "entryDateTime" => "nullable|date",
            "exitDateTime" => "nullable|date",
            "priceType" => "nullable|string",
            "price" => "decimal:2|nullable",
            "userId" => "numeric|nullable"
        ];
        
    }
}
