<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GestaoFormRequest extends FormRequest
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
         'Titulo'=>'required|max:80|min:5',
         'descricao'=> 'required|max:200|min:10',
        'data_inicio'=>'required|date',
        'data_terminio'=>'required|date',
        'valor_projeto'=>'required|decimal:2'
        ];
    }
}
