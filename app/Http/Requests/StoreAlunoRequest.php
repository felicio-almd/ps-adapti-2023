<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAlunoRequest extends FormRequest
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
   * @return array
   */
  public function rules()
  {
    return [
      "nome" => ["required", "string"],
      "descricao" => ["max:3000"],
      "imagem" => ["image"],
      "cursos_id" => ["required"],
    ];
  }
  public function messages()
  {
    return [
      "nome.required" => "O campo precisa ser informado",
      "nome.max" => "O campo deve ter no maximo 100 caracteres",
      "descricao.max" => "O campo deve ter no maximo 3000 caracteres",
      "imagem.image" => "A imagem precisa ser de um formato de imagem",
    ];
  }
}
