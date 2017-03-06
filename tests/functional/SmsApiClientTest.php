<?php

use PHPUnit\Framework\TestCase;
require_once __DIR__ . "/../../src/BSG/SmsApiClient.php";
require_once __DIR__ . "/../TestConfig.php";
class SmsApiClientTest extends TestCase
{

    const ERR_NO = 0;
    const ERR_SMS_NOT_FOUND = 20;
    const ERR_WRONG_PHONE_NUM = 21;
    const ERR_ABSENT_EXT_ID = 22;
    const ERR_EXT_ALREADY_EXIST = 23;
    const ERR_WRONG_PAYLOAD = 24;
    const ERR_WRONG_SENDER = 25;
    const ERR_WRONG_BODY = 26;
    const ERR_WRONG_EXTERNAL_ID = 27;
    const ERR_WRONG_LIFETIME = 28;
    const ERR_WRONG_TASK_ID = 29;
    const ERR_TASK_NOT_FOUND = 30;
    const ERR_PHONE_ALREADY_IN_USE = 31;
    const ERR_WRONG_TARIFF = 6;



    private $smsClient;

    public function __construct() {
        parent::__construct();
        $this->smsClient = new SmsApiClient(TestConfig::TEST_API_KEY, TestConfig::SMS_SENDER_NAME);;

    }

    /**
     * @test
     */
    public function SmsNotFoundTest() {
        $answer = $this->smsClient->getStatusById(99999999999);
        $this->assertEquals(self::ERR_SMS_NOT_FOUND, $answer['error']);
    }

    /**
     * @test
     */
    public function sendSuccessSmsTest() {
        try {
            $answer = $this->smsClient->sendSms(TestConfig::TEST_PHONE_1, 'test', 'successSend' . (string)time());
            $this->assertArrayHasKey('result', $answer);
            $this->assertArrayHasKey('price', $answer['result']);
            $this->assertArrayHasKey('currency', $answer['result']);
            $this->assertEquals(self::ERR_NO, $answer['result']['error']);
        } catch (Exception $e) {
            $this->fail(TestConfig::EXCEPTION_FAIL . $e->getMessage());
        }
    }

    /**
     * @test
     */
    public function sendSuccessSmsStatusTest() {
        try {
            $answer = $this->smsClient->sendSms(TestConfig::TEST_PHONE_1, 'test', 'successSend' . (string)time());
            sleep(5); //wait for creating sms
            $answer = $this->smsClient->getStatusById($answer['result']['id']);
            $this->assertEquals(self::ERR_NO, $answer['error']);
        } catch (Exception $e) {
            $this->fail(TestConfig::EXCEPTION_FAIL . $e->getMessage());
        }
    }

    /**
     * @test
     */
    public function sendSuccessSmsMultiTest() {
        try {
            $answer = $this->smsClient->sendSmsMulti([
                ['msisdn' => TestConfig::TEST_PHONE_1, 'body' =>'test', 'reference' => 'successSendM' . (string)time()],
                ['msisdn' => TestConfig::TEST_PHONE_2, 'body' =>'tes2', 'reference' => 'successSendM1' . (string)time()],
            ]);
            $this->assertArrayHasKey('result', $answer);
            $this->assertArrayHasKey('total_price', $answer);
            $this->assertArrayHasKey('currency', $answer);
            $this->assertEquals(self::ERR_NO, $answer['result'][0]['error']);
            $this->assertEquals(self::ERR_NO, $answer['result'][1]['error']);
        } catch (Exception $e) {
            $this->fail(TestConfig::EXCEPTION_FAIL . $e->getMessage());
        }
    }

    /**
     * @test
     */
    public function sendInvalidPhoneSmsTest() {
        try {
            $answer = $this->smsClient->sendSms('invalidPhone', 'test', 'failed' . (string)time());
            $this->assertArrayHasKey('result', $answer);
            $this->assertArrayNotHasKey('price', $answer['result']);
            $this->assertArrayNotHasKey('currency', $answer['result']);
            $this->assertEquals(self::ERR_WRONG_PHONE_NUM, $answer['result']['error']);
        } catch (Exception $e) {
            $this->fail(TestConfig::EXCEPTION_FAIL . $e->getMessage());
        }
    }

    /**
     * @test
     */
    public function sendNoExternalSmsTest() {
        try {
            $answer = $this->smsClient->sendSms(TestConfig::TEST_PHONE_1, 'test', null);
            $this->assertArrayHasKey('result', $answer);
            $this->assertArrayNotHasKey('price', $answer['result']);
            $this->assertArrayNotHasKey('currency', $answer['result']);
            $this->assertEquals(self::ERR_ABSENT_EXT_ID, $answer['result']['error']);
        } catch (Exception $e) {
            $this->fail(TestConfig::EXCEPTION_FAIL . $e->getMessage());
        }
    }

    /**
     * @test
     */
    public function sendAlreadyExistExtSmsTest() {
        try {
            $this->smsClient->sendSms(TestConfig::TEST_PHONE_1, 'test', 'existedExt'); //set ext_id if it isn't exist yet
            $answer = $this->smsClient->sendSms(TestConfig::TEST_PHONE_1, 'test', 'existedExt');
            $this->assertArrayHasKey('result', $answer);
            $this->assertArrayNotHasKey('price', $answer['result']);
            $this->assertArrayNotHasKey('currency', $answer['result']);
            $this->assertEquals(self::ERR_EXT_ALREADY_EXIST, $answer['result']['error']);
        } catch (Exception $e) {
            $this->fail(TestConfig::EXCEPTION_FAIL . $e->getMessage());
        }
    }

    /**
     * @test
     */
    public function sendToBigOriginatorSmsTest() {
        try {
            $answer = $this->smsClient->sendSms(TestConfig::TEST_PHONE_1, 'test', 'sn' . (string)time(), 72, 0,
                'lets try to insert very big originator VERRYYY BIG ORIGINATOR');
            $this->assertArrayNotHasKey('result', $answer);
            $this->assertArrayHasKey('error', $answer);
            $this->assertEquals(self::ERR_WRONG_SENDER, $answer['error']);
        } catch (Exception $e) {
            $this->fail(TestConfig::EXCEPTION_FAIL . $e->getMessage());
        }
    }

    /**
     * @test
     */
    public function sendEmptyBodySmsTest() {
        try {
            $answer = $this->smsClient->sendSms(TestConfig::TEST_PHONE_1, '', 'swb' . (string)time());
            $this->assertArrayNotHasKey('result', $answer);
            $this->assertArrayHasKey('error', $answer);
            $this->assertEquals(self::ERR_WRONG_BODY, $answer['error']);
        } catch (Exception $e) {
            $this->fail(TestConfig::EXCEPTION_FAIL . $e->getMessage());
        }
    }

    /**
     * @test
     */
    public function sendInvalidExtSmsTest() {
        try {
            $answer = $this->smsClient->sendSms(TestConfig::TEST_PHONE_1, 'test', '__\\||\\/');
            $this->assertArrayHasKey('result', $answer);
            $this->assertArrayHasKey('error', $answer['result']);
            $this->assertEquals(self::ERR_WRONG_EXTERNAL_ID, $answer['result']['error']);
        } catch (Exception $e) {
            $this->fail(TestConfig::EXCEPTION_FAIL . $e->getMessage());
        }
    }



    /**
     * @test
     */
    public function sendWrongValidationSmsTest() {
        try {
            $answer = $this->smsClient->sendSms(TestConfig::TEST_PHONE_1, 'test', 'wv' . (string)time(), "wrong validation time");
            $this->assertArrayHasKey('result', $answer);
            $this->assertArrayHasKey('error', $answer['result']);
            $this->assertEquals(self::ERR_WRONG_LIFETIME, $answer['result']['error']);
        } catch (Exception $e) {
            $this->fail(TestConfig::EXCEPTION_FAIL . $e->getMessage());
        }
    }

    /**
     * @test
     */
    public function sendSuccessTaskAndGetStatusSmsTest() {
        try {
            $answer = $this->smsClient->sendTask([
                ['msisdn' => TestConfig::TEST_PHONE_1, 'reference' => 't' . (string)time()],
            ], 'body');
            $this->assertArrayHasKey('result', $answer);
            $this->assertArrayHasKey('task_id', $answer);
            $this->assertArrayHasKey('error', $answer['result']);
            $this->assertEquals(self::ERR_NO, $answer['result']['error']);

            $taskInfo = $this->smsClient->getTaskStatus($answer['task_id']);
            $this->assertArrayHasKey('originator', $taskInfo);
            $this->assertArrayHasKey('body', $taskInfo);
            $this->assertArrayHasKey('totalprice', $taskInfo);
        } catch (Exception $e) {
            $this->fail(TestConfig::EXCEPTION_FAIL . $e->getMessage());
        }
    }

    /**
     * @test
     */
    public function sendWrongStatusIdSmsTest() {
        try {
            $answer = $this->smsClient->getTaskStatus('wrong status');
            $this->assertArrayHasKey('error', $answer);
            $this->assertEquals(self::ERR_WRONG_TASK_ID, $answer['error']);
        } catch (Exception $e) {
            $this->fail(TestConfig::EXCEPTION_FAIL . $e->getMessage());
        }
    }

    /**
     * @test
     */
    public function sendMissedIdTaskSmsTest() {
        try {
            $answer = $this->smsClient->getTaskStatus(99999999999);
            $this->assertArrayHasKey('error', $answer);
            $this->assertEquals(self::ERR_TASK_NOT_FOUND, $answer['error']);
        } catch (Exception $e) {
            $this->fail(TestConfig::EXCEPTION_FAIL . $e->getMessage());
        }
    }

    /**
     * @test
     */
    public function sendInvalidPayloadSmsTest() {
        try {
            $answer = $this->smsClient->sendSmsMulti([]);
            $this->assertArrayHasKey('error', $answer);
            $this->assertEquals(self::ERR_WRONG_PAYLOAD, $answer['error']);
        } catch (Exception $e) {
            $this->fail(TestConfig::EXCEPTION_FAIL . $e->getMessage());
        }
    }

    /**
     * @test
     */
    public function sendSamePhoneTest() {
        try {
            $answer = $this->smsClient->sendSmsMulti([
                ['msisdn' => TestConfig::TEST_PHONE_1, 'body' => 'test', 'reference' => (string)time()],
                ['msisdn' => TestConfig::TEST_PHONE_1, 'body' => 'test', 'reference' => (string)(time()+1)],
            ]);
            $this->assertArrayHasKey('result', $answer);
            $this->assertArrayHasKey('1', $answer['result']);
            $this->assertEquals(self::ERR_PHONE_ALREADY_IN_USE, $answer['result'][1]['error']);
        } catch (Exception $e) {
            $this->fail(TestConfig::EXCEPTION_FAIL . $e->getMessage());
        }
    }
}