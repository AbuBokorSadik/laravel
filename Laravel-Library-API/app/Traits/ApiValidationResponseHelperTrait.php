<?php

namespace App\Traits;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

trait ApiValidationResponseHelperTrait
{
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->json([
            'code' => 422,
            'messages' => $validator->errors()->all(),
            'data' => null,
        ], 422));
    }
}
