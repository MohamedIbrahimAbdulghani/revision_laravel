<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Validation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "title" => "required|min:3",
            "body" => "required|min:3"
        ];
    }

    public function messages()
    {
        return [
            "title.required"=>"please enter title",
            "title.min"=>"please enter title more than 3 letters",
            "body.required"=>"please enter body",
            "body.required"=>"please enter body more than 3 letters"
        ];
    }
}
