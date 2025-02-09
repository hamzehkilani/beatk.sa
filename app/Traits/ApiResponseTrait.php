<?php

namespace App\Traits;

trait ApiResponseTrait
{
    /**
     * Return a success JSON response.
     *
     * @param  mixed  $data
     * @param  string  $message
     * @param  int  $statusCode
     * @return \Illuminate\Http\JsonResponse
     */
    protected function successResponse($data, $message = null, $statusCode = 200)
    {
        return response()->json([
            'status' => 'success',
            'message' => $message,
            'data' => $data,
        ], $statusCode);
    }

    /**
     * Return an error JSON response.
     *
     * @param  string  $message
     * @param  int  $statusCode
     * @param  mixed  $data
     * @return \Illuminate\Http\JsonResponse
     */
    protected function errorResponse($message, $statusCode, $data = null)
    {
        return response()->json([
            'status' => 'error',
            'message' => $message,
            'data' => $data,
        ], $statusCode);
    }

    protected function webResponse()
    {
        return response()->json([
            'success' => true,
        ], 200);
    }

    protected function errorWebResponse($message)
    {
        return response()->json([
            'success' => true,
            'message'=>$message
        ], 500);
    }
}
