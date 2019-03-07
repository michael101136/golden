<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateViewReservation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return TRUE;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    { return [
        'name' => 'required',
        'email' => 'required',
        'country'=>'required',
        'phone'=>'required',
        'date'=>'required',
        'message'=>'required',
        
       ];
    }
    public function messages()
    { 
        return [
            'name.required'=>'* Ingresar nombre',
            'email.required'=>'* Ingresar email',
            'phone.required'=>'* Ingresar número telefónico',
            'country.required'=>'* Ingresar nacionalidad',
            'message.required'=>'* Ingresar mensaje',
        
       ];
    }
}
