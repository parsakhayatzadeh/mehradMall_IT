<?php

namespace App\Http\Requests\Admin\Router;

use Illuminate\Foundation\Http\FormRequest;

class RouterRequest extends FormRequest
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
                'tejari_id' => "required|exists:tejaris,id|unique:routers,tejari_id",
                "status" => "required|numeric|in:0,1",
                "ip_router" => "ip|unique:routers,ip_router",
                'internet_speed' => 'numeric'

            ];
        } else {
            return [
                "status" => "required|numeric|in:0,1",
                "ip_router" => "ip",
                'internet_speed' => 'numeric'

            ];
        }
    }
}
