<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\File;

class StoreSampleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
                'title' => ['required', 'string', 'max:255'],
                'description' => ['required', 'string'],
                'image' => [
                            'required',
                            File::types(['png', 'jpg'])
                                    ->min(1024)
                                    ->max(12 * 1024)
                                    ->dimensions(Rule::dimensions()->maxWidth(1000)->maxHeight(500)),
                            ]
        ]
    }
}
