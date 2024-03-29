<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\BCCR\Models;

use AlibabaCloud\Tea\Model;

class DciCreationInfo extends Model
{
    // 作品创作性质
    /**
     * @example ORIGINAL
     *
     * @var string
     */
    public $creationNature;

    // 创作完成日期
    /**
     * @example yyyy-MM-dd
     *
     * @var string
     */
    public $creationCompletionDate;

    // 创作完成地点
    /**
     * @example 杭州
     *
     * @var string
     */
    public $creationCompletionPlace;

    // 作品创作地点地区编码
    /**
     * @example 110101
     *
     * @var string
     */
    public $creationCompletionCode;
    protected $_name = [
        'creationNature'          => 'creation_nature',
        'creationCompletionDate'  => 'creation_completion_date',
        'creationCompletionPlace' => 'creation_completion_place',
        'creationCompletionCode'  => 'creation_completion_code',
    ];

    public function validate()
    {
        Model::validateRequired('creationNature', $this->creationNature, true);
        Model::validateRequired('creationCompletionDate', $this->creationCompletionDate, true);
        Model::validateRequired('creationCompletionCode', $this->creationCompletionCode, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationNature) {
            $res['creation_nature'] = $this->creationNature;
        }
        if (null !== $this->creationCompletionDate) {
            $res['creation_completion_date'] = $this->creationCompletionDate;
        }
        if (null !== $this->creationCompletionPlace) {
            $res['creation_completion_place'] = $this->creationCompletionPlace;
        }
        if (null !== $this->creationCompletionCode) {
            $res['creation_completion_code'] = $this->creationCompletionCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DciCreationInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['creation_nature'])) {
            $model->creationNature = $map['creation_nature'];
        }
        if (isset($map['creation_completion_date'])) {
            $model->creationCompletionDate = $map['creation_completion_date'];
        }
        if (isset($map['creation_completion_place'])) {
            $model->creationCompletionPlace = $map['creation_completion_place'];
        }
        if (isset($map['creation_completion_code'])) {
            $model->creationCompletionCode = $map['creation_completion_code'];
        }

        return $model;
    }
}
