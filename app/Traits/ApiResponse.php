<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Response;
use Symfony\Component\HttpFoundation\Response as FoundationResponse;

/**
 * 通用Api返回结果
 * Class ApiResponse
 * @package App\Traits
 */
trait ApiResponse
{
    protected $statusCode = FoundationResponse::HTTP_OK;

    protected $header = [];

    /**
     * @return array
     */
    public function getHeader(): array
    {
        return $this->header;
    }

    /**
     * @param array $header
     * @return $this
     */
    public function setHeader(array $header)
    {
        $this->header = $header;
        return $this;
    }

    /**
     * @return int
     */
    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    /**
     * @param int $statusCode
     * @return $this
     */
    public function setStatusCode($statusCode = 200)
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    /**
     * @param array $data
     * @param string $msg
     * @param int $code
     * @param array $header
     * @return JsonResponse
     */
    public function responseJson($data = [], string $msg = 'success', int $code = FoundationResponse::HTTP_OK, array $header = []): JsonResponse
    {
        if ($code) {
            $this->setStatusCode($code);
        }
        if (!empty($header)) {
            $this->setHeader($header);
        }
        $responseData = [
            'code' => $code,
            'msg' => $msg,
        ];
        $responseData = array_merge($responseData, $data);
        return Response::json($responseData, FoundationResponse::HTTP_OK, $this->getHeader());
    }

    /**
     * @param array $data
     * @param string $msg
     * @return JsonResponse
     */
    public function success($data = [], string $msg = 'success'): JsonResponse
    {
        return $this->responseJson(compact('data'), $msg);
    }

    /**
     * @param string $msg
     * @param array $data
     * @return JsonResponse
     */
    public function failed(string $msg = 'fail', array $data = []): JsonResponse
    {
        if (!$this->getStatusCode() || $this->getStatusCode() == FoundationResponse::HTTP_OK) {
            $code = FoundationResponse::HTTP_BAD_REQUEST;
        } else {
            $code = $this->getStatusCode();
        }
        Log::warning($msg, $data);
        return $this->responseJson(compact('data'), $msg, $code);
    }
}
