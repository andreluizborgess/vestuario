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
            'tecido'=>'required|max:50|min:3',
            'tamanho'=>'required|max:5|min:1',
            'cor'=>'required',
            'categoria'=>'required|max:10|min:5',
            'fabricacao'=>'required|max:10|min:2',
            'estacao'=>'required',
            'descricao'=>'required|max:50|min:10'
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
            'tecido.max' => 'o campo tecido pode conter no maximo 50 caracteres',
            'tecido.min' => 'o campo tecido pode conter no minimo 3 caracteres',
            'tamanho.required' => 'tamanho obrigatório',
            'tamanho.max' => 'o campo tamanho pode conter no maximo 5 caracteres',
            'tamanho.min' => 'o campo tamanho pode conter no minimo 1 caracteres',
            'cor.required' => 'cor obrigatória',
            'categoria.required' => 'categoria obrigatório',
            'categoria.max' => 'o campo categoria pode conter no maximo 10 caracteres',
            'categoria.min' => 'o campo categoria pode conter no minimo 5 caracteres',
            'fabricacao.required' => 'fabricação obrigatória',
            'fabricacao.max' => 'o campo fabricacao pode conter no maximo 10 caracteres ',
            'fabricacao.min' => 'o campo fabricacao pode conter no minimo 2 caracteres ',
            'estacao.required' => 'estação obrigatória',
            'descricao.required' => 'descrição obrigatória',
            'descricao.max' => 'o campo descricao pode conter no maximo 50 caracteres',
            'descricao.min' => 'o campo descricao pode conter no minimo 10 caracteres',
        ];
    }
}
