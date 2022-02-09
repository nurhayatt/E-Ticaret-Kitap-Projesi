<?php

namespace App\Http\Requests\Profile;

use Illuminate\Foundation\Http\FormRequest;

class StoreProfileRequest extends FormRequest
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
      
            'name' => 'required',
            'company' => 'required',
            'email' => 'required|email|nullable',
            'adress' => 'required',
            'phone' => 'required',
            'logo' => 'nullable|sometimes|image|mimes:jpeg,bmp,png,jpg,svg|max:2000',
        
        ];
    }
}