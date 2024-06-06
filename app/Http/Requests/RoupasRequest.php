<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class RoupasRequest extends FormRequest
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
        'categoria'=>'required|max:10|min:2',
        'fabricacao'=>'required',
        'estacao'=>'required',
        'descricao'=>'required|max:150|min:5'
        ];
    }

    public function failedValidation(Validator $validator){
        throw new HttpResponseException(response()->json([
           'success'=>false,
           'error'=>$validator->errors()
        ]));
      }
      public function messages(){
       return [
        'tecido.required'=>'O campo tecido é obrigatorio',
        'tecido.max'=>'O campo tecido é obrigatorio conter no maximo 50 caracteres',
        'tecido.min'=>'O campo tecido é obrigatorio conter no minimo 3 caracteres',
        'tamanho.required'=>'O campo tamanho é obrigatorio',
        'tamanho.max'=>'O campo tamanho é obrigatorio conter no maximo 5 caracteres',
        'tamanho.min'=>'O campo tamanho é obrigatorio conter no minimo 1 caracteres',
        'cor.required'=>'O campo cor é obrigatorio',
        'categoria.required'=>'O campo categoria é obrigatorio',
        'categoria.max'=>'O campo categoria é obrigatorio conter no maximo 10 caracteres',
        'categoria.min'=>'O campo categoria é obrigatorio conter no minimo 2 caracteres',
        'fabricacao.required'=>'O campo fabricacao é obrigatorio',
        'estacao.required'=>'O campo estacao é obrigatorio',
        'descricao.required'=>'O campo descricao é obrigatorio',
        'descricao.max'=>'O campo descricao é obrigatorio conter no maximo 150 caracteres',
        'descricao.min'=>'O campo descricao é obrigatorio conter no minimo 5 caracteres',

       ];
}
}