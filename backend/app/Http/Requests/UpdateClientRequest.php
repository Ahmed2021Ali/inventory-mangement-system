<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateClientRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'=>['required','string','min:1','max:150',Rule::unique('clients')->ignore($this->id,'id')],
            'phone'=>['required','min:1','max:150',Rule::unique('clients')->ignore($this->id,'id')],
            'address'=>['required','string','min:1','max:150'],

        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'الاسم مطلوب ',
            'name.string' => 'يجب ان يكون اسم المقاس عبارة عن احرف',
            'name.min' => 'يجب عن لا يقل عن حرف واحد',
            'name.max' =>'يجب ان لا يزيد عن 150 حرف ',
            'name.unique' =>'الاسم المقاس موجود بالفعل   ',

            'phone.required' => 'رقم الهاتف مطلوب ',
            //'phone.string' => 'يجب ان يكون  رقم الهاتف عبارة عن احرف',
            'phone.min' => 'يجب عن لا يقل رقم الهاتف عن حرف واحد',
            'phone.max' =>'يجب ان لا يزيد رقم الهاتف عن 25 حرف ',
            'phone.unique' =>' رقم الهاتف موجود بالفعل   ',
        ];
    }
}
