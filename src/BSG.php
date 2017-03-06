<?php

require_once 'BSG/SmsApiClient.php';
require_once 'BSG/HLRApiClient.php';
require_once 'BSG/ViberApiClient.php';

class BSG
{
    private $apiKey;
    private $sender;
    private $tariff;
    private $viberSender;

    public function __construct($apiKey, $sender = null, $viberSender = null, $tariff = null) {
        $this->apiKey = $apiKey;
        $this->sender = $sender;
        $this->tariff = $tariff;
        $this->viberSender = $viberSender;
    }

    /**
     * @return SmsApiClient
     */
    public function getSmsClient() {
        return new SmsApiClient($this->apiKey, $this->sender, $this->tariff);
    }

    /**
     * @return HLRApiClient
     */
    public function getHLRClient() {
        return new HLRApiClient($this->apiKey, $this->tariff);
    }

    /**
     * @return ViberApiClient
     */
    public function getViberClient() {
        return new ViberApiClient($this->apiKey, $this->viberSender);
    }

}