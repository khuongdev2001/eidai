<?php

namespace app\helpers;

/**
 * Class ResultHelper
 *
 * @author Tan Le <tannht@dtsmart.vn>
 * @package app\helpers\response
 */
class ResultHelper
{
    /**
     * @param string|null $status
     * @param string|array|null $data
     * @param string|null $message
     * @param string|array|null $error
     * @return array
     */
    public static function build($status = null, $data = null, $error = null, $message = null)
    {
        return [
            'status' => $status,
            'data' => $data,
            'error' => $error,
            'message' => $message
        ];
    }
}