<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCourseRequest extends FormRequest
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
            'title' => 'required',
            'force_reward' => 'required|numeric',
            'role_id' => 'required'
        ];
    }

    public function messages(): array{
        return [
            'title.required' => 'Title must not be empty',
            'force_reward.required' => 'Force reward must not be empty',
            'force_reward.numeric' => 'Force reward must be a number',
            'role_id.required' => 'Role must not be empty',
        ];
    }
}
