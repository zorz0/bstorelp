<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class settingUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            "title"=>"string|nullable",
            "phone"=>"string|nullable",
            "currency"=>"string|nullable",
            "email"=>"string|nullable",
            "address"=>"string|nullable",
            "facebook"=>"string|nullable",
            "twitter"=>"string|nullable",
            "instagram"=>"string|nullable",
            "youtube"=>"string|nullable",
            "description"=>"string|nullable",
            "logo"=>"nullable|image|mimes:png,jpg,jpeg|max:2048",
            "favicon"=>"nullable|image|mimes:png,jpg,jpeg|max:2048",
            "panerImgs"=>"nullable|image|mimes:png,jpg,jpeg|max:2048"
        ];
    }
}
