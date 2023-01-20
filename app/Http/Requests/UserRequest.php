<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
		 'name' => 'required|string|max:30',
		 'email' => 'required|string|email|max:60|unique:users',
		 'password' => 'required|min:8|confirmed',
	  ];
   }
   
   public function messages()
   {
	  return [
		 'name.required' => 'El campo nombre es obligatorio',
		 'name.string' => 'El campo nombre debe ser un texto',
		 'name.max' => 'El campo nombre debe tener un máximo de 30 caracteres',
		 'email.required' => 'El campo email es obligatorio',
		 'email.string' => 'El campo email debe ser un texto',
		 'email.email' => 'El campo email debe ser un email válido',
		 'email.max' => 'El campo email debe tener un máximo de 60 caracteres',
		 'email.unique' => 'El campo email ya está en uso',
		 'password.required' => 'El campo password es obligatorio',
		 'password.min' => 'El campo password debe tener un mínimo de 8 caracteres',
		 'password.confirmed' => 'El campo password no coincide con la confirmación',
	  ];
   }
}
