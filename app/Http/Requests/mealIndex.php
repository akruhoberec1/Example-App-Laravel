<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;


class mealIndex extends FormRequest
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
            'per_page' => 'nullable|integer|min:1',
            'page' => 'nullable|integer|min:1',
            'tags.*' => 'nullable|integer',
            'with.*' => 'nullable|in:ingredients,category,tags',
            'diff_time' => 'nullable|integer|min:1',
            'lang' => 'nullable|string|min:2|exists:languages,locale'
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'with' => !empty($this->with) ? array_filter(explode(',', $this->with)) : [],
            'tags' => !empty($this->tags) ? array_filter(explode(',', $this->tags)) : []
        ]);
    }

    public function failedValidation(Validator $validator)
    {
        $errors = (new ValidationException($validator))->errors();
        throw new HttpResponseException(
            response()->json(['errors' => $errors], JsonResponse::HTTP_UNPROCESSABLE_ENTITY)
        );
    }

}
