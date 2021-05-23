<?php


namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class FeedbackRequest extends FormRequest
{
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
            'name' => 'required | max:100',
            'phone_number' => 'required | min:3 | max:15 ', //| unique:visitors',
            'feedback' => 'required'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Поле Ім\'я* є обв\' язковим',
            'feedback.required' => 'Поле Ваше звернення є обов\' язковим',
            'name.max' => 'Поле Ім\'я* не має перевищувати 100 символів'
        ];
    }
}
