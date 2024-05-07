<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator as ValidationValidator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Validator;

class Roupas extends FormRequest
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
            'tecido'=>'required',
            'tamanho'=>'required',
            'cor'=>'required',
            'categoria'=>'required',
            'fabricação'=>'required',
            'estação'=>'required',
            'descrição'=>'required'
        ];
    }

    public function failedValidation(ValidationValidator $validator){
        throw new HttpResponseException(response()->json([
            'status' => false,
            'error' => $validator->errors()
        ]));
    }
    public function messages(){
        return [
            'tecido.required' => 'obrigatório',
            'tamanho.required' => 'tamanho obrigatório',
            'cor.required' => 'cor obrigatória',
            'categoria.required' => 'categoria obrigatório',
            'fabricação.required' => 'fabricação obrigatória',
            'estação.required' => 'estação obrigatória',
            'descrição.required' => 'descrição obrigatória',
        ];
    }
}
