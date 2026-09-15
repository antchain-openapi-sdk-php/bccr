<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AntChain\BCCR\Models;

use AlibabaCloud\Tea\Model;

class ReturnbackRegistrationRequest extends Model {
    protected $_name = [
        'authToken' => 'auth_token',
        'productInstanceId' => 'product_instance_id',
        'taskId' => 'task_id',
        'returnBackReason' => 'return_back_reason',
        'clientToken' => 'client_token',
    ];
    public function validate() {
        Model::validateRequired('taskId', $this->taskId, true);
        Model::validateRequired('returnBackReason', $this->returnBackReason, true);
        Model::validateRequired('clientToken', $this->clientToken, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->authToken) {
            $res['auth_token'] = $this->authToken;
        }
        if (null !== $this->productInstanceId) {
            $res['product_instance_id'] = $this->productInstanceId;
        }
        if (null !== $this->taskId) {
            $res['task_id'] = $this->taskId;
        }
        if (null !== $this->returnBackReason) {
            $res['return_back_reason'] = $this->returnBackReason;
        }
        if (null !== $this->clientToken) {
            $res['client_token'] = $this->clientToken;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return ReturnbackRegistrationRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['auth_token'])){
            $model->authToken = $map['auth_token'];
        }
        if(isset($map['product_instance_id'])){
            $model->productInstanceId = $map['product_instance_id'];
        }
        if(isset($map['task_id'])){
            $model->taskId = $map['task_id'];
        }
        if(isset($map['return_back_reason'])){
            $model->returnBackReason = $map['return_back_reason'];
        }
        if(isset($map['client_token'])){
            $model->clientToken = $map['client_token'];
        }
        return $model;
    }
    // OAuth模式下的授权token
    /**
     * @var string
     */
    public $authToken;

    /**
     * @var string
     */
    public $productInstanceId;

    // 数登流水号
    /**
     * @var string
     */
    public $taskId;

    // 拒绝退费原因
    /**
     * @var string
     */
    public $returnBackReason;

    // 幂等
    /**
     * @var string
     */
    public $clientToken;

}
