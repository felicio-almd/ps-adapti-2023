<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TypeRequest extends FormRequest
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
      "type" => ["required", "string"],
      "" => ["max", "string"],
    ];
  }
  public function messages()
  {
    return [
      "type.required" => "O Campo precisa ser informado",
      "type.max" => "O Campo deve ter no maximo 100 caracteres",
    ];
  }
}
