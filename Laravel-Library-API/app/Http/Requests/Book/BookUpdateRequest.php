<?php

namespace App\Http\Requests\Book;

use Illuminate\Foundation\Http\FormRequest;
use App\Traits\ApiValidationResponseHelperTrait;
use Illuminate\Validation\Rule;

class BookUpdateRequest extends FormRequest
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
        $bookId = $this->route('id');
        // echo '<pre>';
        // print_r($bookId);
        // exit();
        return [
            'name' => ['required', Rule::unique('books', 'name')->ignore($bookId)],
            'writer' => 'required',
            'publication' => 'required',
        ];
    }
}
