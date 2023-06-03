<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LicenseCardRequest extends FormRequest
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
            'policeNumber' => 'required|min:4',
            'nameOfOwner' => 'required|min:4',
            'address' => 'required|min:5',
            'brandAndType' => 'required|min:5',
            'categoryAndModel' => 'required|min:5',
            'manufactureYear' => 'required|min:4',
            'cylindrerCapacity' => 'required|min:3',
            'bodyNumber' => 'required|min:5',
            'engineNumber' => 'required|min:5',
            'color' => 'required|min:4',
            'typeFuel' => 'required|min:4',
            'licensePlateColor' => 'required|min:5',
            'dateOfExpire' => 'required|min:4',
            'payDate' => 'required|min:4',
            'payment' => 'required|min:4',
            'status' => 'required|boolean',
            'telp' => 'required|min:4',
            'description' => 'required|min:5',
        ];
    }
}
