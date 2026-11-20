<?php

namespace App\Http\Requests\Course;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCourseRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'sometimes|required|string|max:255',
            'description' => 'sometimes|nullable|string',
            'duration' => 'sometimes|required|integer|min:1',
            'fee' => 'sometimes|required|numeric|min:0',
            'difficulty' => 'sometimes|required|string|max:255',
            'is_active' => 'sometimes|boolean',
        ];
    }
}
