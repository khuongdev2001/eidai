<?php

namespace app\helpers;

use BadMethodCallException;
use yii\base\BaseObject;
use yii\data\DataProviderInterface;
use yii\rest\Serializer;

/**
 * Class ResponseHelper
 *
 * @author Tan Le <tannht@dtsmart.vn>
 * @package app\helpers\response
 */
class ResponseHelper extends BaseObject
{
    public $status;
    public $data = null;
    public $error = null;
    public $message = null;
    public $ok_status = null;

    /**
     * @return array
     * @throws BadMethodCallException
     * @author Tan Nguyen <tannx@dtsmart.vn>
     * @since 11:17 25/11/2019
     */
    public function build()
    {
        if ($this->status == ApiConstant::STATUS_OK) {
            if ($this->data instanceof DataProviderInterface) {
                $serializer = new Serializer(['collectionEnvelope' => 'items']);
                $this->data = $serializer->serialize($this->data);
            }
            return [
                'result' => ResultHelper::build($this->ok_status, $this->data, $this->error, $this->message),
                'error' => null, 'message' => null,
                'data' => null,
                'status' => ApiConstant::STATUS_OK
            ];
        } else if ($this->status == ApiConstant::STATUS_FAIL) {
            return [
                'result' => null,
                'status' => $this->status,
                'error' => $this->error,
                'message' => $this->message
            ];
        }
        throw new BadMethodCallException();
    }

    public function error()
    {
        if ($this->status != ApiConstant::STATUS_OK) {
            return [
                'result' => null,
                'status' => ApiConstant::STATUS_FAIL,
                'error' => $this->error,
                'message' => $this->message
            ];
        } else {
            throw new BadMethodCallException();
        }
    }
}