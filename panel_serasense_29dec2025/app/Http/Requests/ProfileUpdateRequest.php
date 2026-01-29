<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'age' => 'nullable|integer|min:1|max:120',
            'height' => 'nullable|numeric|min:50|max:250',
            'weight' => 'nullable|numeric|min:10|max:300',
            'activity_level' => 'nullable|in:Sedentary,Lightly active,Moderately active,Highly active',
            'sleep_goal' => 'nullable|integer|min:4|max:12',
            'wake_up_time' => 'nullable|date_format:H:i',
            'bedtime' => 'nullable|date_format:H:i',
        ];
    }

    public function messages(): array
    {
        return [
            'age.integer' => 'Age must be a number',
            'age.min' => 'Age must be at least 1',
            'age.max' => 'Age cannot exceed 120',
            'height.numeric' => 'Height must be a number',
            'height.min' => 'Height must be at least 50 cm',
            'height.max' => 'Height cannot exceed 250 cm',
            'weight.numeric' => 'Weight must be a number',
            'weight.min' => 'Weight must be at least 10 kg',
            'weight.max' => 'Weight cannot exceed 300 kg',
            'activity_level.in' => 'Activity level must be one of: Sedentary, Lightly active, Moderately active, Highly active',
            'sleep_goal.integer' => 'Sleep goal must be a number',
            'sleep_goal.min' => 'Sleep goal must be at least 4 hours',
            'sleep_goal.max' => 'Sleep goal cannot exceed 12 hours',
            'wake_up_time.date_format' => 'Wake up time must be in HH:MM format',
            'bedtime.date_format' => 'Bedtime must be in HH:MM format',
        ];
    }
}