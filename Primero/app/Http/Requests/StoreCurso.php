<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
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
            'nome' => 'required',
            'descricao' => 'required',
            'imagem' => 'required',
            'link' => 'required',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */

    public function messages(): array
    {
        return [
            'nome.required' => 'O campo nome é obrigatório',
            'descricao.required' => 'O campo descrição é obrigatório',
            'imagem.required' => 'O campo imagem é obrigatório',
            'link.required' => 'O campo link é obrigatório',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array<string, string>
     */

    public function attributes(): array
    {
        return [
            'nome' => 'nome do curso',
        ];
    }
}
