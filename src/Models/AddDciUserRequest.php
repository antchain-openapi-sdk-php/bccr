<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\BCCR\Models;

use AlibabaCloud\Tea\Model;

class AddDciUserRequest extends Model
{
    // OAuth模式下的授权token
    /**
     * @var string
     */
    public $authToken;

    /**
     * @var string
     */
    public $productInstanceId;

    // 用户名称
    /**
     * @var string
     */
    public $certName;

    // 证件类型
    /**
     * @var string
     */
    public $certificateType;

    // 证件号
    /**
     * @var string
     */
    public $certificateNumber;

    // 证件正面OSS fileId
    /**
     * @var string
     */
    public $certificateFrontFileId;

    // 证件反面OSS fileId
    /**
     * @var string
     */
    public $certificateBackFileId;

    // 法人名称
    /**
     * @var string
     */
    public $legalPersonCertName;

    // 法人证件类型
    /**
     * @var string
     */
    public $legalPersonCertType;

    // 法人证件号
    /**
     * @var string
     */
    public $legalPersonCertNo;

    // 手机号
    /**
     * @var string
     */
    public $phone;

    // 所属地区
    /**
     * @var string
     */
    public $areaType;

    // 代理信息
    /**
     * @var ProxyData
     */
    public $proxyData;

    // 版权认证方式:UGC-用户生成内容，AIGC-AI生成内容，SOFTWARE_WORKS-软件作品认证，如果不传默认为UGC
    /**
     * @var string
     */
    public $copyrightCertificationType;

    // 幂等字段
    /**
     * @var string
     */
    public $clientToken;

    // 用户名称废弃
    /**
     * @var string
     */
    public $userName;

    // 证件有效期限起始日期
    /**
     * @var string
     */
    public $certificateStartTime;

    // 证件有效期限终止日期
    /**
     * @var string
     */
    public $certificateEndTime;

    // 证件正面OSS fileId废弃
    /**
     * @var string
     */
    public $certificateFrontFilePath;

    // 证件反面OSS filePath废弃
    /**
     * @var string
     */
    public $certificateBackFilePath;

    // 用户身份开始时间
    /**
     * @var string
     */
    public $identityStartTime;

    // 用户类型废弃
    /**
     * @var string
     */
    public $userType;

    // 地址
    /**
     * @var string
     */
    public $address;

    // 证件是否长期有效
    /**
     * @var bool
     */
    public $longTermValid;
    protected $_name = [
        'authToken'                  => 'auth_token',
        'productInstanceId'          => 'product_instance_id',
        'certName'                   => 'cert_name',
        'certificateType'            => 'certificate_type',
        'certificateNumber'          => 'certificate_number',
        'certificateFrontFileId'     => 'certificate_front_file_id',
        'certificateBackFileId'      => 'certificate_back_file_id',
        'legalPersonCertName'        => 'legal_person_cert_name',
        'legalPersonCertType'        => 'legal_person_cert_type',
        'legalPersonCertNo'          => 'legal_person_cert_no',
        'phone'                      => 'phone',
        'areaType'                   => 'area_type',
        'proxyData'                  => 'proxy_data',
        'copyrightCertificationType' => 'copyright_certification_type',
        'clientToken'                => 'client_token',
        'userName'                   => 'user_name',
        'certificateStartTime'       => 'certificate_start_time',
        'certificateEndTime'         => 'certificate_end_time',
        'certificateFrontFilePath'   => 'certificate_front_file_path',
        'certificateBackFilePath'    => 'certificate_back_file_path',
        'identityStartTime'          => 'identity_start_time',
        'userType'                   => 'user_type',
        'address'                    => 'address',
        'longTermValid'              => 'long_term_valid',
    ];

    public function validate()
    {
        Model::validateRequired('certName', $this->certName, true);
        Model::validateRequired('certificateType', $this->certificateType, true);
        Model::validateRequired('certificateNumber', $this->certificateNumber, true);
        Model::validateRequired('certificateFrontFileId', $this->certificateFrontFileId, true);
        Model::validateRequired('phone', $this->phone, true);
        Model::validateRequired('areaType', $this->areaType, true);
        Model::validateRequired('clientToken', $this->clientToken, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authToken) {
            $res['auth_token'] = $this->authToken;
        }
        if (null !== $this->productInstanceId) {
            $res['product_instance_id'] = $this->productInstanceId;
        }
        if (null !== $this->certName) {
            $res['cert_name'] = $this->certName;
        }
        if (null !== $this->certificateType) {
            $res['certificate_type'] = $this->certificateType;
        }
        if (null !== $this->certificateNumber) {
            $res['certificate_number'] = $this->certificateNumber;
        }
        if (null !== $this->certificateFrontFileId) {
            $res['certificate_front_file_id'] = $this->certificateFrontFileId;
        }
        if (null !== $this->certificateBackFileId) {
            $res['certificate_back_file_id'] = $this->certificateBackFileId;
        }
        if (null !== $this->legalPersonCertName) {
            $res['legal_person_cert_name'] = $this->legalPersonCertName;
        }
        if (null !== $this->legalPersonCertType) {
            $res['legal_person_cert_type'] = $this->legalPersonCertType;
        }
        if (null !== $this->legalPersonCertNo) {
            $res['legal_person_cert_no'] = $this->legalPersonCertNo;
        }
        if (null !== $this->phone) {
            $res['phone'] = $this->phone;
        }
        if (null !== $this->areaType) {
            $res['area_type'] = $this->areaType;
        }
        if (null !== $this->proxyData) {
            $res['proxy_data'] = null !== $this->proxyData ? $this->proxyData->toMap() : null;
        }
        if (null !== $this->copyrightCertificationType) {
            $res['copyright_certification_type'] = $this->copyrightCertificationType;
        }
        if (null !== $this->clientToken) {
            $res['client_token'] = $this->clientToken;
        }
        if (null !== $this->userName) {
            $res['user_name'] = $this->userName;
        }
        if (null !== $this->certificateStartTime) {
            $res['certificate_start_time'] = $this->certificateStartTime;
        }
        if (null !== $this->certificateEndTime) {
            $res['certificate_end_time'] = $this->certificateEndTime;
        }
        if (null !== $this->certificateFrontFilePath) {
            $res['certificate_front_file_path'] = $this->certificateFrontFilePath;
        }
        if (null !== $this->certificateBackFilePath) {
            $res['certificate_back_file_path'] = $this->certificateBackFilePath;
        }
        if (null !== $this->identityStartTime) {
            $res['identity_start_time'] = $this->identityStartTime;
        }
        if (null !== $this->userType) {
            $res['user_type'] = $this->userType;
        }
        if (null !== $this->address) {
            $res['address'] = $this->address;
        }
        if (null !== $this->longTermValid) {
            $res['long_term_valid'] = $this->longTermValid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddDciUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['auth_token'])) {
            $model->authToken = $map['auth_token'];
        }
        if (isset($map['product_instance_id'])) {
            $model->productInstanceId = $map['product_instance_id'];
        }
        if (isset($map['cert_name'])) {
            $model->certName = $map['cert_name'];
        }
        if (isset($map['certificate_type'])) {
            $model->certificateType = $map['certificate_type'];
        }
        if (isset($map['certificate_number'])) {
            $model->certificateNumber = $map['certificate_number'];
        }
        if (isset($map['certificate_front_file_id'])) {
            $model->certificateFrontFileId = $map['certificate_front_file_id'];
        }
        if (isset($map['certificate_back_file_id'])) {
            $model->certificateBackFileId = $map['certificate_back_file_id'];
        }
        if (isset($map['legal_person_cert_name'])) {
            $model->legalPersonCertName = $map['legal_person_cert_name'];
        }
        if (isset($map['legal_person_cert_type'])) {
            $model->legalPersonCertType = $map['legal_person_cert_type'];
        }
        if (isset($map['legal_person_cert_no'])) {
            $model->legalPersonCertNo = $map['legal_person_cert_no'];
        }
        if (isset($map['phone'])) {
            $model->phone = $map['phone'];
        }
        if (isset($map['area_type'])) {
            $model->areaType = $map['area_type'];
        }
        if (isset($map['proxy_data'])) {
            $model->proxyData = ProxyData::fromMap($map['proxy_data']);
        }
        if (isset($map['copyright_certification_type'])) {
            $model->copyrightCertificationType = $map['copyright_certification_type'];
        }
        if (isset($map['client_token'])) {
            $model->clientToken = $map['client_token'];
        }
        if (isset($map['user_name'])) {
            $model->userName = $map['user_name'];
        }
        if (isset($map['certificate_start_time'])) {
            $model->certificateStartTime = $map['certificate_start_time'];
        }
        if (isset($map['certificate_end_time'])) {
            $model->certificateEndTime = $map['certificate_end_time'];
        }
        if (isset($map['certificate_front_file_path'])) {
            $model->certificateFrontFilePath = $map['certificate_front_file_path'];
        }
        if (isset($map['certificate_back_file_path'])) {
            $model->certificateBackFilePath = $map['certificate_back_file_path'];
        }
        if (isset($map['identity_start_time'])) {
            $model->identityStartTime = $map['identity_start_time'];
        }
        if (isset($map['user_type'])) {
            $model->userType = $map['user_type'];
        }
        if (isset($map['address'])) {
            $model->address = $map['address'];
        }
        if (isset($map['long_term_valid'])) {
            $model->longTermValid = $map['long_term_valid'];
        }

        return $model;
    }
}
