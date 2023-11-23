<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CursoRequest extends FormRequest
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
      "curso" => ["required", "string"],
      "" => ["max", "string"],
    ];
  }
  public function messages()
  {
    return [
      "curso.required" => "O campo precisa ser informado",
      "curso.max" => "O campo deve ter no maximo 50 caracteres",
    ];
  }
}
