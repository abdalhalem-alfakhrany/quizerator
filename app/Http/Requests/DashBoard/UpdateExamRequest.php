<?php

namespace App\Http\Requests\DashBoard;

use Illuminate\Foundation\Http\FormRequest;

class UpdateExamRequest extends FormRequest
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
            'title' => 'required|string|unique:exams,title,' . $this->title . ',title',
            'start_date' => 'required|date|date_format:Y-m-d\TH:i',
            'end_date' => 'required|date|date_format:Y-m-d\TH:i|after_or_equal:start_date'
        ];
    }
}
