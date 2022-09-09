<?php


namespace wechat\src\Services;


class ConfigService
{
    protected $mchid;
    protected $appid;
    protected $apiKey;
    protected $orderInfo = [];
    /**
    * @Author: dori
    * @Date: 2022/9/9
    * @Descrip:设置微信参数
    * @Return ConfigService
    */
    public function setConfig(string $mchid,string $appid,string $apiKey): ConfigService
    {
        $this->mchid = $mchid;
        $this->appid = $appid;
        $this->apiKey = $apiKey;
        return $this;
    }

    public function setOrderInfo(array $orderInfo)
    {
        $this->orderInfo = $orderInfo;
        return $this;
    }
}
