<?php

namespace App\Http\Requests\Admin\Tejari;

use Illuminate\Foundation\Http\FormRequest;

class TejariRequest extends FormRequest
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
        return [
            'name' => "required|max:120|min:2|regex:/^[ا-یa-zA-Z0-9\-۰-۹-, ]+$/u",
            "image" => "mimes:png,jpg,jpeg,gif,webpv|max:10240",
            "status" => "required|numeric|in:0,1",
            "unit" => "required|numeric",
            "floor" => "required|numeric",
            "phone" => "numeric|nullable",
            "vlan" => "nullable|ip",
            "port_sw" => "numeric|nullable",
            "sw" => "numeric|nullable",
            "ip" => "nullable|ip",
            'internet_speed' => 'numeric|nullable'




        ];
    }
}
