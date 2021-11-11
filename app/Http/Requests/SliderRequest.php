<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
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
          switch($this->method())
        {
            case 'POST':
            {
                 return [
                    'country'=>'required',
                    'title'=>'required|max:250',
                    'description'=>'required',
                    'image'=>'required|mimes:jpeg,jpg,png|max:10240',
                ];
            }
            case 'PATCH':
            {
                return [
                    'country'=>'required',
                    'title'=>'required|max:250',
                    'description'=>'required',
                    'image'=>'nullable|mimes:jpeg,jpg,png|max:10240'
                ];
            }
            default:break;
        }
    }
}
