<?php

use PHPUnit\Framework\TestCase;
require_once __DIR__ . "/../../src/BSG/ViberApiClient.php";
require_once __DIR__ . "/../TestConfig.php";

class ViberApiClientTest extends TestCase
{
    const ERR_NO = 0;
    const ERR_VIBER_MESS_NOT_FOUND = 40;
    const ERR_WRONG_PHONE_NUM = 41;
    const ERR_EXT_ALREADY_EXIST = 43;
    const ERR_WRONG_PAYLOAD = 44;
    const ERR_WRONG_SENDER = 45;
    const ERR_WRONG_BODY = 46;
    const ERR_WRONG_EXTERNAL_ID = 47;
    const ERR_WRONG_LIFETIME = 48;
    const ERR_WRONG_VIBER_OPTIONS = 49;
    const ERR_PHONE_ALREADY_IN_USE = 51;

    private $viberClient;

    public function __construct() {
        parent::__construct();
        $this->viberClient = new ViberApiClient(TestConfig::TEST_API_KEY, TestConfig::VIBER_SENDER_NAME);;
    }

    /**
     * @test
     */
    public function hlrNotFoundTest() {
        $answer = $this->viberClient->getStatusById(1);
        $this->assertEquals(self::ERR_VIBER_MESS_NOT_FOUND, $answer['error']);
    }

    /**
     * @test
     */
    public function sendSuccessViberTest() {
        try {
            $this->viberClient->addMessage([['msisdn' => TestConfig::TEST_PHONE_1]], 'test');
            $answer = $this->viberClient->sendMessages();
            $this->assertArrayHasKey('result', $answer);
            $this->assertArrayHasKey('total_price', $answer);
            $this->assertArrayHasKey('currency', $answer);
            $this->assertEquals(self::ERR_NO, $answer['result'][0]['error']);

            $status = $this->viberClient->getStatusById($answer['result'][0]['id']);
            $this->assertArrayHasKey('price', $status);
            $this->assertArrayHasKey('msisdn', $status);
            $this->assertArrayHasKey('error', $status);
            $this->assertEquals(self::ERR_NO, $status['error']);

        } catch (Exception $e) {
            $this->fail(TestConfig::EXCEPTION_FAIL . $e->getMessage());
        }
    }

    /**
     * @test
     */
    public function sendWrongStatusViberTest() {
        try {
            $status = $this->viberClient->getStatusById(-2);
            $this->assertArrayNotHasKey('price', $status);
            $this->assertArrayNotHasKey('msisdn', $status);
            $this->assertArrayHasKey('error', $status);
            $this->assertEquals(self::ERR_VIBER_MESS_NOT_FOUND, $status['error']);

        } catch (Exception $e) {
            $this->fail(TestConfig::EXCEPTION_FAIL . $e->getMessage());
        }
    }

    /**
     * @test
     */
    public function sendWrongNumberViberTest() {
        try {
            $this->viberClient->addMessage([['msisdn' => 'definitely not phone nubmer']], 'test');
            $answer = $this->viberClient->sendMessages();
            $this->assertArrayHasKey('result', $answer);
            $this->assertEquals(self::ERR_WRONG_PHONE_NUM, $answer['result'][0]['error']);

        } catch (Exception $e) {
            $this->fail(TestConfig::EXCEPTION_FAIL . $e->getMessage());
        }
    }

    /**
     * @test
     */
    public function sendAlreadyExistExtViberTest() {
        try {
            $this->viberClient->addMessage([['msisdn' => TestConfig::TEST_PHONE_1, 'reference' => 'alreadyused']], 'test'); //set if it wasn't set before
            $this->viberClient->addMessage([['msisdn' => TestConfig::TEST_PHONE_2, 'reference' => 'alreadyused']], 'test');
            $answer = $this->viberClient->sendMessages();
            $this->assertArrayHasKey('result', $answer);
            $this->assertEquals(self::ERR_EXT_ALREADY_EXIST, $answer['result'][1]['error']);

        } catch (Exception $e) {
            $this->fail(TestConfig::EXCEPTION_FAIL . $e->getMessage());
        }
    }

    /**
     * @test
     */
    public function sendInvalidPayloadViberTest() {
        try {
            $this->viberClient->addMessage([], 'test');
            $answer = $this->viberClient->sendMessages();
            $this->assertArrayHasKey('result', $answer);
            $this->assertEquals(self::ERR_WRONG_PAYLOAD, $answer['result'][0]['error']);
        } catch (Exception $e) {
            $this->fail(TestConfig::EXCEPTION_FAIL . $e->getMessage());
        }
    }

    /**
     * @test
     */
    public function sendUnregisteredSenderViberTest() {
        try {
            $this->viberClient->addMessage([['msisdn' => TestConfig::TEST_PHONE_1]], 'test', null, 'wrongSender');
            $answer = $this->viberClient->sendMessages();
            $this->assertArrayHasKey('result', $answer);
            $this->assertEquals(self::ERR_WRONG_SENDER, $answer['result'][0]['error']);
        } catch (Exception $e) {
            $this->fail(TestConfig::EXCEPTION_FAIL . $e->getMessage());
        }
    }

    /**
     * @test
     */
    public function sendEmtyMsgViberTest() {
        try {
            $this->viberClient->addMessage([['msisdn' => TestConfig::TEST_PHONE_1]], '');
            $answer = $this->viberClient->sendMessages();
            $this->assertArrayHasKey('result', $answer);
            $this->assertEquals(self::ERR_WRONG_BODY, $answer['result'][0]['error']);
        } catch (Exception $e) {
            $this->fail(TestConfig::EXCEPTION_FAIL . $e->getMessage());
        }
    }

    /**
     * @test
     */
    public function getWrongReferenceTest() {
        try {
            $answer = $this->viberClient->getStatusByReference(-2);
            $this->assertArrayNotHasKey('result', $answer);
            $this->assertEquals(self::ERR_VIBER_MESS_NOT_FOUND, $answer['error']);
        } catch (Exception $e) {
            $this->fail(TestConfig::EXCEPTION_FAIL . $e->getMessage());
        }
    }

    /**
     * @test
     */
    public function sendInvalidLifetimeTest() {
        try {
            $this->viberClient->addMessage([['msisdn' => TestConfig::TEST_PHONE_1]], 'test');
            $answer = $this->viberClient->sendMessages(-100);
            $this->assertArrayNotHasKey('result', $answer);
            $this->assertEquals(self::ERR_WRONG_LIFETIME, $answer['error']);
        } catch (Exception $e) {
            $this->fail(TestConfig::EXCEPTION_FAIL . $e->getMessage());
        }
    }

    /**
     * @test
     */
    public function sendWrongViberOptionsTest() {
        try {
            $this->viberClient->addMessage([['msisdn' => '380937029501']], 'test', 'wrong options');
            $answer = $this->viberClient->sendMessages();
            $this->assertArrayHasKey('result', $answer);
            $this->assertEquals(self::ERR_WRONG_VIBER_OPTIONS, $answer['result'][0]['error']);
        } catch (Exception $e) {
            $this->fail(TestConfig::EXCEPTION_FAIL . $e->getMessage());
        }
    }

    /**
     * @test
     */
    public function sendSamePhoneViberTest() {
        try {
            $this->viberClient->addMessage([['msisdn' => '380937029501']], 'test');
            $this->viberClient->addMessage([['msisdn' => '380937029501']], 'test');
            $answer = $this->viberClient->sendMessages();
            $this->assertArrayHasKey('result', $answer);
            $this->assertEquals(self::ERR_PHONE_ALREADY_IN_USE, $answer['result'][1]['error']);
        } catch (Exception $e) {
            $this->fail(TestConfig::EXCEPTION_FAIL . $e->getMessage());
        }
    }

    /**
     * @test
     */
    public function getPrice() {
        try {
            $answer = $this->viberClient->getPrices();
            $this->assertArrayHasKey('error', $answer);
            $this->assertArrayHasKey('prices', $answer);
        } catch (Exception $e) {
            $this->fail(TestConfig::EXCEPTION_FAIL . $e->getMessage());
        }
    }
}
