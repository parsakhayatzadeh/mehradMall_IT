<?php

namespace App\Http\Requests\Admin\Statics;

use Illuminate\Foundation\Http\FormRequest;

class StaticsRequest extends FormRequest
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
                'tejari_id' => "required|exists:tejaris,id|unique:ip_statics,tejari_id",
                "status" => "required|numeric|in:0,1",
                "ip" => "ip|unique:ip_statics,ip",
                "vlan" => "ip|unique:ip_statics,vlan",

            ];
        } else {
            return [
                "status" => "required|numeric|in:0,1",
                "ip" => "ip",

            ];
        }
    }
}
