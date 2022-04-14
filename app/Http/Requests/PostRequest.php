<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            //バリデーション
        'name' => 'required|max:50',
        'name_ruby' => 'required|regex:/^[あ-ん゛゜ぁ-ぉゃ-ょー 　]+$/u',

        'phone_number' => 'required|max:16|regex:/^(0{1}\d{1,4}-{0,1}\d{1,4}-{0,1}\d{4})$/',
        'address' => 'required',      
        'birthday'=> 'nullable',
        'purchased_item_id' => 'nullable',
        'item_id' => 'nullable',
        'quantity' => 'nullable',
        'date'  => 'required',
        'comment' => 'nullable',
        'sampl' => 'nullable',
        'purchased_item_id' => 'nullable',
        'item_id' => 'nullable',
        ];
    }
}
