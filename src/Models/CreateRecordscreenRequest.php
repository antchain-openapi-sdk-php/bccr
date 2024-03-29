<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\BCCR\Models;

use AlibabaCloud\Tea\Model;

class CreateRecordscreenRequest extends Model
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

    // 取证名称（最长128个字符）
    /**
     * @var string
     */
    public $name;

    // 取证备注（最长512个字符）
    /**
     * @var string
     */
    public $memo;

    // 预校验网址和预打开网页（不能大于10条），如果automatic为true 则必填
    /**
     * @var string[]
     */
    public $url;

    // 取证类型 具体见附录 RecordScreenType
    /**
     * @var string
     */
    public $type;

    // 取证服务器地域 具体见附录 RecordScreenArea
    /**
     * @var string
     */
    public $area;

    // 定制录屏桌面识别码，目前取值只有默认值：DEFAULT
    /**
     * @var string
     */
    public $screenCode;

    // 最大录屏时间，maxTimeInMin不能小于6min，不能大于300min
    /**
     * @var int
     */
    public $maxTimeInMin;

    // 服务器进入ready状态，指定时间未开始进入abort状态的等待时间，单位为分钟，默认1min，waitInMin不能小于1，不能大于10min
    /**
     * @var int
     */
    public $waitInMin;

    // 当所选地域无机器资源时，是否使用其它地域 目前取值只有默认值：FORBID
    /**
     * @var string
     */
    public $crossRegion;

    // ip地域取值 目前取值只有默认值：ANY
    /**
     * @var string
     */
    public $ipType;

    // 回调地址
    /**
     * @var string
     */
    public $callbackUrl;

    // 公证处Id
    /**
     * @var string
     */
    public $orgId;

    // 取证人证件名称
    /**
     * @var string
     */
    public $certName;

    // 取证人证件号码
    /**
     * @var string
     */
    public $certNo;

    // 取证人证件类型 具体见附录CertType
    /**
     * @var string
     */
    public $certType;

    // 企业法人代表姓名(如果certType为BUSINESS_LICENSE 则必传)
    /**
     * @var string
     */
    public $legalPersonName;

    // 企业法人代表身份证号(如果certType为BUSINESS_LICENSE 则必传)
    /**
     * @var string
     */
    public $legalPersonNo;

    // 法人证件类型（非必传，默认IDENTITY_CARD）
    /**
     * @var string
     */
    public $legalPersonType;

    // 企业用户取证人姓名(如果certType为BUSINESS_LICENSE 则必传)
    /**
     * @var string
     */
    public $agentName;

    // 企业用户取证人身份证号(如果certType为BUSINESS_LICENSE 则必传)
    /**
     * @var string
     */
    public $agentNo;

    // 取证人电话号码，生成公证处证书需要，公证处需要作登记 格式范例：(86-573)2651630 或 (86)13738258505
    /**
     * @var string
     */
    public $phoneNum;

    // 是否自动化取证
    /**
     * @var bool
     */
    public $automatic;

    // 取证目标类型： 微信公众号：WEIXIN_MP 其它：OTHER
    //
    /**
     * @var string
     */
    public $targetType;

    // 是否支持UAC通行 默认false
    /**
     * @var bool
     */
    public $supportUac;

    // 取证脚本集Id
    /**
     * @var string
     */
    public $scriptsPackageId;

    // 代理信息
    /**
     * @var ProxyData
     */
    public $proxyInfo;

    // 保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。clientToken只支持ASCII字符，且不能超过64个字符。更多详情，请参见如何保证幂等性。
    /**
     * @var string
     */
    public $clientToken;

    // 其他取证网址
    /**
     * @var string
     */
    public $inventory;

    // 音视频取证信息
    /**
     * @var EvidenceUrlInfo[]
     */
    public $audioVideoInfos;

    // 放弃取证信息
    /**
     * @var ScreenCancelInfo
     */
    public $screenCancelInfo;
    protected $_name = [
        'authToken'         => 'auth_token',
        'productInstanceId' => 'product_instance_id',
        'name'              => 'name',
        'memo'              => 'memo',
        'url'               => 'url',
        'type'              => 'type',
        'area'              => 'area',
        'screenCode'        => 'screen_code',
        'maxTimeInMin'      => 'max_time_in_min',
        'waitInMin'         => 'wait_in_min',
        'crossRegion'       => 'cross_region',
        'ipType'            => 'ip_type',
        'callbackUrl'       => 'callback_url',
        'orgId'             => 'org_id',
        'certName'          => 'cert_name',
        'certNo'            => 'cert_no',
        'certType'          => 'cert_type',
        'legalPersonName'   => 'legal_person_name',
        'legalPersonNo'     => 'legal_person_no',
        'legalPersonType'   => 'legal_person_type',
        'agentName'         => 'agent_name',
        'agentNo'           => 'agent_no',
        'phoneNum'          => 'phone_num',
        'automatic'         => 'automatic',
        'targetType'        => 'target_type',
        'supportUac'        => 'support_uac',
        'scriptsPackageId'  => 'scripts_package_id',
        'proxyInfo'         => 'proxy_info',
        'clientToken'       => 'client_token',
        'inventory'         => 'inventory',
        'audioVideoInfos'   => 'audio_video_infos',
        'screenCancelInfo'  => 'screen_cancel_info',
    ];

    public function validate()
    {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('area', $this->area, true);
        Model::validateRequired('maxTimeInMin', $this->maxTimeInMin, true);
        Model::validateRequired('certName', $this->certName, true);
        Model::validateRequired('certNo', $this->certNo, true);
        Model::validateRequired('certType', $this->certType, true);
        Model::validateRequired('clientToken', $this->clientToken, true);
        Model::validateMaxLength('name', $this->name, 128);
        Model::validateMaxLength('memo', $this->memo, 512);
        Model::validateMinLength('name', $this->name, 1);
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
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->memo) {
            $res['memo'] = $this->memo;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->area) {
            $res['area'] = $this->area;
        }
        if (null !== $this->screenCode) {
            $res['screen_code'] = $this->screenCode;
        }
        if (null !== $this->maxTimeInMin) {
            $res['max_time_in_min'] = $this->maxTimeInMin;
        }
        if (null !== $this->waitInMin) {
            $res['wait_in_min'] = $this->waitInMin;
        }
        if (null !== $this->crossRegion) {
            $res['cross_region'] = $this->crossRegion;
        }
        if (null !== $this->ipType) {
            $res['ip_type'] = $this->ipType;
        }
        if (null !== $this->callbackUrl) {
            $res['callback_url'] = $this->callbackUrl;
        }
        if (null !== $this->orgId) {
            $res['org_id'] = $this->orgId;
        }
        if (null !== $this->certName) {
            $res['cert_name'] = $this->certName;
        }
        if (null !== $this->certNo) {
            $res['cert_no'] = $this->certNo;
        }
        if (null !== $this->certType) {
            $res['cert_type'] = $this->certType;
        }
        if (null !== $this->legalPersonName) {
            $res['legal_person_name'] = $this->legalPersonName;
        }
        if (null !== $this->legalPersonNo) {
            $res['legal_person_no'] = $this->legalPersonNo;
        }
        if (null !== $this->legalPersonType) {
            $res['legal_person_type'] = $this->legalPersonType;
        }
        if (null !== $this->agentName) {
            $res['agent_name'] = $this->agentName;
        }
        if (null !== $this->agentNo) {
            $res['agent_no'] = $this->agentNo;
        }
        if (null !== $this->phoneNum) {
            $res['phone_num'] = $this->phoneNum;
        }
        if (null !== $this->automatic) {
            $res['automatic'] = $this->automatic;
        }
        if (null !== $this->targetType) {
            $res['target_type'] = $this->targetType;
        }
        if (null !== $this->supportUac) {
            $res['support_uac'] = $this->supportUac;
        }
        if (null !== $this->scriptsPackageId) {
            $res['scripts_package_id'] = $this->scriptsPackageId;
        }
        if (null !== $this->proxyInfo) {
            $res['proxy_info'] = null !== $this->proxyInfo ? $this->proxyInfo->toMap() : null;
        }
        if (null !== $this->clientToken) {
            $res['client_token'] = $this->clientToken;
        }
        if (null !== $this->inventory) {
            $res['inventory'] = $this->inventory;
        }
        if (null !== $this->audioVideoInfos) {
            $res['audio_video_infos'] = [];
            if (null !== $this->audioVideoInfos && \is_array($this->audioVideoInfos)) {
                $n = 0;
                foreach ($this->audioVideoInfos as $item) {
                    $res['audio_video_infos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->screenCancelInfo) {
            $res['screen_cancel_info'] = null !== $this->screenCancelInfo ? $this->screenCancelInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRecordscreenRequest
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
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['memo'])) {
            $model->memo = $map['memo'];
        }
        if (isset($map['url'])) {
            if (!empty($map['url'])) {
                $model->url = $map['url'];
            }
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['area'])) {
            $model->area = $map['area'];
        }
        if (isset($map['screen_code'])) {
            $model->screenCode = $map['screen_code'];
        }
        if (isset($map['max_time_in_min'])) {
            $model->maxTimeInMin = $map['max_time_in_min'];
        }
        if (isset($map['wait_in_min'])) {
            $model->waitInMin = $map['wait_in_min'];
        }
        if (isset($map['cross_region'])) {
            $model->crossRegion = $map['cross_region'];
        }
        if (isset($map['ip_type'])) {
            $model->ipType = $map['ip_type'];
        }
        if (isset($map['callback_url'])) {
            $model->callbackUrl = $map['callback_url'];
        }
        if (isset($map['org_id'])) {
            $model->orgId = $map['org_id'];
        }
        if (isset($map['cert_name'])) {
            $model->certName = $map['cert_name'];
        }
        if (isset($map['cert_no'])) {
            $model->certNo = $map['cert_no'];
        }
        if (isset($map['cert_type'])) {
            $model->certType = $map['cert_type'];
        }
        if (isset($map['legal_person_name'])) {
            $model->legalPersonName = $map['legal_person_name'];
        }
        if (isset($map['legal_person_no'])) {
            $model->legalPersonNo = $map['legal_person_no'];
        }
        if (isset($map['legal_person_type'])) {
            $model->legalPersonType = $map['legal_person_type'];
        }
        if (isset($map['agent_name'])) {
            $model->agentName = $map['agent_name'];
        }
        if (isset($map['agent_no'])) {
            $model->agentNo = $map['agent_no'];
        }
        if (isset($map['phone_num'])) {
            $model->phoneNum = $map['phone_num'];
        }
        if (isset($map['automatic'])) {
            $model->automatic = $map['automatic'];
        }
        if (isset($map['target_type'])) {
            $model->targetType = $map['target_type'];
        }
        if (isset($map['support_uac'])) {
            $model->supportUac = $map['support_uac'];
        }
        if (isset($map['scripts_package_id'])) {
            $model->scriptsPackageId = $map['scripts_package_id'];
        }
        if (isset($map['proxy_info'])) {
            $model->proxyInfo = ProxyData::fromMap($map['proxy_info']);
        }
        if (isset($map['client_token'])) {
            $model->clientToken = $map['client_token'];
        }
        if (isset($map['inventory'])) {
            $model->inventory = $map['inventory'];
        }
        if (isset($map['audio_video_infos'])) {
            if (!empty($map['audio_video_infos'])) {
                $model->audioVideoInfos = [];
                $n                      = 0;
                foreach ($map['audio_video_infos'] as $item) {
                    $model->audioVideoInfos[$n++] = null !== $item ? EvidenceUrlInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['screen_cancel_info'])) {
            $model->screenCancelInfo = ScreenCancelInfo::fromMap($map['screen_cancel_info']);
        }

        return $model;
    }
}
