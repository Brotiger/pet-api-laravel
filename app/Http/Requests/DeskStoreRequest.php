<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DeskStoreRequest extends FormRequest
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
        $id = $this->desk? ',' . $this->desk->id : '';
        return [
            'name' => 'required|max:255|unique:desks,name' . $id //Для unique 3 параметром передается id записи которую следует игнорировать
        ];
    }

    public function messages()
    {
        return [
            'name.unique' => 'Имя доски должно быть уникальное'
        ];
    }
}