<?php

namespace App\Http\Requests\Admin\Phone;

use Illuminate\Foundation\Http\FormRequest;

class PhoneRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {

        if ($this->isMethod("post")) {
            return [
                'tejari_id' => "required|exists:tejaris,id|unique:phones,tejari_id",
                "phone" => "required|numeric",
                "ip" => "ip",
                "status" => "required|numeric|in:0,1",
            ];
        } else {
            return [
                "phone" => "required|numeric",
                "ip" => "ip",
                "status" => "required|numeric|in:0,1",
            ];
        }
    }
}
