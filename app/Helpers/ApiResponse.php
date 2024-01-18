<?php
namespace App\Helpers;

class ApiResponse
{
    public static function success($data = null, $message = null, $statusCode = 200)
    {
        return response()->json([
            'success' => [
                'code' => $statusCode,
                'message' => $message,
            ],
            'data'=> $data

        ], $statusCode);

    }

    public static function error($message, $statusCode = 500)
    {
        return response()->json([
            'success' => false,
            'error' => [
                'code' => $statusCode,
                'message' => $message,
            ]

        ], $statusCode);
    }
}

?>