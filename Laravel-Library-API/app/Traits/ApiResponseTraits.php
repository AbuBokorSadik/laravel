<?php

namespace App\Traits;

trait ApiResponseTraits
{
    protected function respondInJSON(int $code = 200, array $message = [], $data = null)
    {
        return response()->json([
            'code' => $code,
            'messages' => $message,
            'data' => $data,
        ]);
    }

    protected function failedResponse(int $code = 500, array $message = [], $data = null, $validationException = false)
    {
        if ($validationException) {
            $error_msg = [];
            foreach ($data->errors() as $key => $msg) {
                $error_msg[] = $msg[0];
            }

            return response()->json([
                'code' => $code,
                'messages' => $error_msg,
                'data' => null
            ], 200);
        }

        return response()->json([
            'code' => $code,
            'messages' => $message,
            'data' => $data
        ], 200);
    }

    protected function failedCredentials(int $code = 411, array $message = [], $data = null)
    {
        return response()->json([
            'code' => $code,
            'messages' => $message,
            'data' => null,
        ], 200);
    }

    protected function respondToken(int $code = 200, array $message = [], $data = null)
    {
        return response()->json([
            'code' => $code,
            'messages' => $message,
            'data' => ['token' => $data],
        ], 200);
    }
}
