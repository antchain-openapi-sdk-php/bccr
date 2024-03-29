<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\BCCR\Models;

use AlibabaCloud\Tea\Model;

class ResembleRiskData extends Model
{
    // 重复作品ID
    /**
     * @example 重复作品ID
     *
     * @var string
     */
    public $workId;

    // 相似作品的名称
    /**
     * @example 相似作品的名称
     *
     * @var string
     */
    public $workName;

    // 相似作品的类型
    /**
     * @example VIDEO
     *
     * @var string
     */
    public $workType;

    // 相似值
    /**
     * @example 相似值
     *
     * @var string
     */
    public $score;

    // 相似作品下载凭证
    /**
     * @example 相似作品下载凭证
     *
     * @var string
     */
    public $workFileId;

    // 相似明细
    /**
     * @example
     *
     * @var ResembleDetail[]
     */
    public $resembleDetails;
    protected $_name = [
        'workId'          => 'work_id',
        'workName'        => 'work_name',
        'workType'        => 'work_type',
        'score'           => 'score',
        'workFileId'      => 'work_file_id',
        'resembleDetails' => 'resemble_details',
    ];

    public function validate()
    {
        Model::validateRequired('workId', $this->workId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->workId) {
            $res['work_id'] = $this->workId;
        }
        if (null !== $this->workName) {
            $res['work_name'] = $this->workName;
        }
        if (null !== $this->workType) {
            $res['work_type'] = $this->workType;
        }
        if (null !== $this->score) {
            $res['score'] = $this->score;
        }
        if (null !== $this->workFileId) {
            $res['work_file_id'] = $this->workFileId;
        }
        if (null !== $this->resembleDetails) {
            $res['resemble_details'] = [];
            if (null !== $this->resembleDetails && \is_array($this->resembleDetails)) {
                $n = 0;
                foreach ($this->resembleDetails as $item) {
                    $res['resemble_details'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResembleRiskData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['work_id'])) {
            $model->workId = $map['work_id'];
        }
        if (isset($map['work_name'])) {
            $model->workName = $map['work_name'];
        }
        if (isset($map['work_type'])) {
            $model->workType = $map['work_type'];
        }
        if (isset($map['score'])) {
            $model->score = $map['score'];
        }
        if (isset($map['work_file_id'])) {
            $model->workFileId = $map['work_file_id'];
        }
        if (isset($map['resemble_details'])) {
            if (!empty($map['resemble_details'])) {
                $model->resembleDetails = [];
                $n                      = 0;
                foreach ($map['resemble_details'] as $item) {
                    $model->resembleDetails[$n++] = null !== $item ? ResembleDetail::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
