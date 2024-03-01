<?php

namespace Ohansyah\ExceptionHandler\Traits;

use Exception;
use Illuminate\Http\JsonResponse;
use Symfony\Component\Debug\Exception\FlattenException;
use Throwable;

/**
 * Custom Response
 */
trait ResponseTransform
{
    /**
     * Response Exception
     *
     * @param Exception $exception
     * @return JsonResponse
     */
    public function resException(Exception $exception): JsonResponse
    {
        try {
            $fe = FlattenException::create($exception);
            $responseCode = (int) $fe->getStatusCode();

            return $this->resError(__("EH::http.$responseCode.message"), $responseCode, [
                'title' => __("EH::http.$responseCode.title"),
                'exception' => $exception->__toString(),
            ]);
        } catch (\Throwable $th) {
            return $this->resDefaultError($exception->__toString());
        }
    }

    /**
     * Response Throwable
     *
     * @param Throwable $throwable
     * @return JsonResponse
     */
    public function resThrowable(Throwable $throwable): JsonResponse
    {
        try {
            $responseCode = $throwable->getCode() ?: 500;
            return $this->resError($throwable->getMessage(), $responseCode, [
                'title' => __("EH::http.$responseCode.title"),
                'exception' => $throwable->__toString(),
            ]);
        } catch (\Throwable $th) {
            return $this->resDefaultError($throwable->__toString());
        }
    }

    /**
     * Default Response Error
     */
    public function resDefaultError($exception = null): JsonResponse
    {
        return $this->resError(__("EH::http.500.message"), 500, [
            'title' => __("EH::http.500.title"),
            'exception' => $exception,
        ]);
    }

    /**
     * Response Error
     *
     * @param mixed $responseMessage
     * @param integer $responseCode
     * @param array $additionals
     * @return JsonResponse
     */
    public function resError($responseMessage, int $responseCode = 400, array $additionals = []): JsonResponse
    {
        $response['status'] = 'error';
        $response['message'] = $responseMessage;
        $response['errors'] = [
            'message' => [$responseMessage],
        ];
        $responseCode = $responseCode == 200 ? 422 : $responseCode;

        if (!empty($additionals)):
            if (!config('exception-handler.trace_exception')) {
                $additionals['exception'] = null;
            }
            $response = array_merge($response, $additionals);
        endif;

        return response()->json($response, $responseCode, []);
    }

    /**
     * Response Success
     *
     * @param mixed $responseMessage
     * @param integer $responseCode
     * @return JsonResponse
     */
    public function resSuccess($responseMessage, int $responseCode = 200): JsonResponse
    {
        $response['status'] = 'success';
        $response['data'] = $responseMessage;

        return response()->json($response, $responseCode, []);
    }
}
