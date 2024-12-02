<?php

namespace App\Http\Requests\Admin\Vlan;

use Illuminate\Foundation\Http\FormRequest;

class VlanRequest extends FormRequest
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
                'tejari_id' => "required|exists:tejaris,id|unique:vlans,tejari_id",
                "vlan" => "required|ip|unique:vlans,vlan",
                "port_sw" => "required|numeric",
                "sw" => "required|numeric",
                "status" => "required|numeric|in:0,1",
            ];
        } else {
            return [
                "vlan" => "required|ip",
                "port_sw" => "required|numeric",
                "sw" => "required|numeric",
                "status" => "required|numeric|in:0,1",
            ];
        }
    }
}
