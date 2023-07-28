<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NoteRequest extends FormRequest
{
    
    public function authorize(): bool
    {
        return true;
    }





    
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    
    
    public function rules(): array
    {
        return [
            'title'=> 'required|max:255|min:3',
            'description' => 'required|min:5|max:255'
        ];
    }
}
