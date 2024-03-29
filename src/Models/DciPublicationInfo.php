<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\BCCR\Models;

use AlibabaCloud\Tea\Model;

class DciPublicationInfo extends Model
{
    // 作品发表状态
    /**
     * @example PUBLISHED
     *
     * @var string
     */
    public $publicationStatus;

    // 首次发表日期
    /**
     * @example yyyy-MM-dd
     *
     * @var string
     */
    public $firstPublicationDate;

    // 首次发表地址
    /**
     * @example 杭州
     *
     * @var string
     */
    public $firstPublicationPlace;

    // 首次发表地点地区编码
    /**
     * @example 110101
     *
     * @var string
     */
    public $firstPublicationCode;
    protected $_name = [
        'publicationStatus'     => 'publication_status',
        'firstPublicationDate'  => 'first_publication_date',
        'firstPublicationPlace' => 'first_publication_place',
        'firstPublicationCode'  => 'first_publication_code',
    ];

    public function validate()
    {
        Model::validateRequired('publicationStatus', $this->publicationStatus, true);
        Model::validateRequired('firstPublicationDate', $this->firstPublicationDate, true);
        Model::validateRequired('firstPublicationCode', $this->firstPublicationCode, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->publicationStatus) {
            $res['publication_status'] = $this->publicationStatus;
        }
        if (null !== $this->firstPublicationDate) {
            $res['first_publication_date'] = $this->firstPublicationDate;
        }
        if (null !== $this->firstPublicationPlace) {
            $res['first_publication_place'] = $this->firstPublicationPlace;
        }
        if (null !== $this->firstPublicationCode) {
            $res['first_publication_code'] = $this->firstPublicationCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DciPublicationInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['publication_status'])) {
            $model->publicationStatus = $map['publication_status'];
        }
        if (isset($map['first_publication_date'])) {
            $model->firstPublicationDate = $map['first_publication_date'];
        }
        if (isset($map['first_publication_place'])) {
            $model->firstPublicationPlace = $map['first_publication_place'];
        }
        if (isset($map['first_publication_code'])) {
            $model->firstPublicationCode = $map['first_publication_code'];
        }

        return $model;
    }
}
