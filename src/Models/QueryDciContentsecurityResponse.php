<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\BCCR\Models;

use AlibabaCloud\Tea\Model;

class QueryDciContentsecurityResponse extends Model
{
    // 请求唯一ID，用于链路跟踪和问题排查
    /**
     * @var string
     */
    public $reqMsgId;

    // 结果码，一般OK表示调用成功
    /**
     * @var string
     */
    public $resultCode;

    // 异常信息的文本描述
    /**
     * @var string
     */
    public $resultMsg;

    // 作品类型
    /**
     * @var string
     */
    public $workType;

    // 审查结果
    /**
     * @var ReviewData
     */
    public $reviewData;
    protected $_name = [
        'reqMsgId'   => 'req_msg_id',
        'resultCode' => 'result_code',
        'resultMsg'  => 'result_msg',
        'workType'   => 'work_type',
        'reviewData' => 'review_data',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reqMsgId) {
            $res['req_msg_id'] = $this->reqMsgId;
        }
        if (null !== $this->resultCode) {
            $res['result_code'] = $this->resultCode;
        }
        if (null !== $this->resultMsg) {
            $res['result_msg'] = $this->resultMsg;
        }
        if (null !== $this->workType) {
            $res['work_type'] = $this->workType;
        }
        if (null !== $this->reviewData) {
            $res['review_data'] = null !== $this->reviewData ? $this->reviewData->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDciContentsecurityResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['req_msg_id'])) {
            $model->reqMsgId = $map['req_msg_id'];
        }
        if (isset($map['result_code'])) {
            $model->resultCode = $map['result_code'];
        }
        if (isset($map['result_msg'])) {
            $model->resultMsg = $map['result_msg'];
        }
        if (isset($map['work_type'])) {
            $model->workType = $map['work_type'];
        }
        if (isset($map['review_data'])) {
            $model->reviewData = ReviewData::fromMap($map['review_data']);
        }

        return $model;
    }
}
