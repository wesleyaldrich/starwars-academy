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
            'title.required' => __('form.title_required'),
            'force_reward.required' => __('form.force_reward_required'),
            'force_reward.numeric' => __('form.force_reward_numeric'),
            'role_id.required' => __('form.role_id_required'),
        ];
    }
}
