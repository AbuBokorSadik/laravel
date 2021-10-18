<?php

namespace App\Http\Requests\Book;

use Illuminate\Foundation\Http\FormRequest;
use App\Traits\ApiValidationResponseHelperTrait;

class BookCreateRequest extends FormRequest
{
    use ApiValidationResponseHelperTrait;
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
            'name' => 'required|unique:books,name',
            'writer' => 'required',
            'publication' => 'required',
        ];
    }
}
