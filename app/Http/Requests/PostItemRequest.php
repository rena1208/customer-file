<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostItemRequest extends FormRequest
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
            //
            'purchased_item_id' => 'nullable',
            'item_id' => 'nullable',
            'quantity' => 'nullable',
            'date'  => 'required',
            'comment' => 'nullable',
            'sampl' => 'nullable',
        ];
    }
}
