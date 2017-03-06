<?php

use PHPUnit\Framework\TestCase;
require_once __DIR__ . "/../../src/BSG/HLRApiClient.php";
require_once __DIR__ . "/../TestConfig.php";


class HLRApiClientTest extends TestCase
{

    const ERR_NO = 0;
    const ERR_HLR_NOT_FOUND = 60;
    const ERR_WRONG_PHONE_NUM = 61;
    const ERR_ABSENT_EXT_ID = 62;
    const ERR_EXT_ALREADY_EXIST = 63;
    const ERR_WRONG_PAYLOAD = 64;
    const ERR_WRONG_EXT_ID = 65;
    const ERR_PHONE_ALREADY_ON_QUERY = 66;
    const ERR_WRONG_TARIFF = 6;



    private $hlrClient;

    public function __construct() {
        parent::__construct();
        $this->hlrClient = new HLRApiClient(TestConfig::TEST_API_KEY);;

    }

    /**
     * @test
     */
    public function hlrNotFoundTest() {
        $answer = $this->hlrClient->getStatusById(99999999999);
        $this->assertEquals(self::ERR_HLR_NOT_FOUND, $answer['error']);
    }

    /**
     * @test
     */
    public function sendSuccessHLRTest() {
        try {
            $answer = $this->hlrClient->sendHLR(TestConfig::TEST_PHONE_1, 'hlrTest' . (string)time());
            $this->assertArrayHasKey('result', $answer);
            $this->assertArrayHasKey('total_price', $answer);
            $this->assertArrayHasKey('currency', $answer);
            $this->assertEquals(self::ERR_NO, $answer['result'][0]['error']);
        } catch (Exception $e) {
            $this->fail(TestConfig::EXCEPTION_FAIL . $e->getMessage());
        }
    }

    /**
     * @test
     */
    public function HLRsExtAlreadyExistTest() {
        try {
            $this->hlrClient->sendHLR(TestConfig::TEST_PHONE_1, 'a');  //necessary for working next tests;
            $answer = $this->hlrClient->sendHLRS([
                ['msisdn' => TestConfig::TEST_PHONE_1, 'reference' => 'a']
            ]);
            $this->assertArrayHasKey('result', $answer);
            $this->assertArrayHasKey('total_price', $answer);
            $this->assertArrayHasKey('currency', $answer);
            $this->assertEquals(self::ERR_EXT_ALREADY_EXIST, $answer['result'][0]['error']);
        } catch (Exception $e) {
            $this->fail(TestConfig::EXCEPTION_FAIL . $e->getMessage());
        }
    }

    /**
     * @test
     */
    public function HLRsExtAbsentTest() {
        try {
            $answer = $this->hlrClient->sendHLRS([
                ['msisdn' => TestConfig::TEST_PHONE_1]
            ]);
            $this->assertArrayHasKey('result', $answer);
            $this->assertArrayHasKey('total_price', $answer);
            $this->assertArrayHasKey('currency', $answer);
            $this->assertEquals(self::ERR_ABSENT_EXT_ID, $answer['result'][0]['error']);
        } catch (Exception $e) {
            $this->fail(TestConfig::EXCEPTION_FAIL . $e->getMessage());
        }
    }


    /**
     * @test
     */
    public function HLRssuccessTest() {
        try {
            $answer = $this->hlrClient->sendHLRS([
                ['msisdn' => TestConfig::TEST_PHONE_1, 'reference' => 'hlrs' . (string)time()],
                ['msisdn' => TestConfig::TEST_PHONE_2, 'reference' => 'hlrs' . (string)(time()+1)],
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
    public function HLRsExtAbsentOneMoreTest() {
        try {
            $answer = $this->hlrClient->sendHLRS([
                ['msisdn' => TestConfig::TEST_PHONE_1, 'reference' => null]
            ]);
            $this->assertArrayHasKey('result', $answer);
            $this->assertArrayHasKey('total_price', $answer);
            $this->assertArrayHasKey('currency', $answer);
            $this->assertEquals(self::ERR_ABSENT_EXT_ID, $answer['result'][0]['error']);
        } catch (Exception $e) {
            $this->fail(TestConfig::EXCEPTION_FAIL . $e->getMessage());
        }
    }

    /**
     * @test
     */
    public function HLRsWrongTariffTest() {
        try {
            $answer = $this->hlrClient->sendHLRS([
                ['msisdn' => TestConfig::TEST_PHONE_1, 'reference' => 'wt'.(string)time(), 'tariff' => 111]
            ]);
            $this->assertArrayHasKey('result', $answer);
            $this->assertArrayHasKey('total_price', $answer);
            $this->assertArrayHasKey('currency', $answer);
            $this->assertEquals(self::ERR_WRONG_TARIFF, $answer['result'][0]['error']);
        } catch (Exception $e) {
            $this->fail(TestConfig::EXCEPTION_FAIL . $e->getMessage());
        }
    }

    /**
     * @test
     */
    public function HLRsWrongTariffSecondTest() {
        try{
            $answer = $this->hlrClient->sendHLRS([
                ['msisdn' => TestConfig::TEST_PHONE_1, 'reference' => 'wt'.(string)(time()+1), 'tariff' => 'asd']
            ]);
            $this->assertArrayHasKey('result', $answer);
            $this->assertArrayHasKey('total_price', $answer);
            $this->assertArrayHasKey('currency', $answer);
            $this->assertEquals(self::ERR_WRONG_TARIFF, $answer['result'][0]['error']);
        } catch (Exception $e) {
            $this->fail(TestConfig::EXCEPTION_FAIL . $e->getMessage());
        }
    }

    /**
     * @test
     */
    public function HLRsWrongTariffThirdTest() {
        try {
            $answer = $this->hlrClient->sendHLRS([
                ['msisdn' => TestConfig::TEST_PHONE_1, 'reference' => 'wt'.(string)(time()+2), 'tariff' => -21]
            ]);
            $this->assertArrayHasKey('result', $answer);
            $this->assertArrayHasKey('total_price', $answer);
            $this->assertArrayHasKey('currency', $answer);
            $this->assertEquals(self::ERR_WRONG_TARIFF, $answer['result'][0]['error']);
        } catch (Exception $e) {
            $this->fail(TestConfig::EXCEPTION_FAIL . $e->getMessage());
        }
    }

    /**
     * @test
     */
    public function HLRsInvalidMSISDN() {
        try{
            $answer = $this->hlrClient->sendHLRS([
                ['380501111111111111', 'inv' . (string)time()]
            ]);
            $this->assertArrayHasKey('result', $answer);
            $this->assertArrayHasKey('total_price', $answer);
            $this->assertArrayHasKey('currency', $answer);
            $this->assertEquals(self::ERR_WRONG_PHONE_NUM, $answer['result'][0]['error']);
        } catch (Exception $e) {
            $this->fail(TestConfig::EXCEPTION_FAIL . $e->getMessage());
        }
    }

    /**
     * @test
     */
    public function HLRsWrongPayload() {
        try {
            $answer = $this->hlrClient->sendHLRS([]);
            $this->assertArrayNotHasKey('result', $answer);
            $this->assertArrayNotHasKey('total_price', $answer);
            $this->assertArrayNotHasKey('currency', $answer);
            $this->assertEquals(self::ERR_WRONG_PAYLOAD, $answer['error']);
        } catch (Exception $e) {
            $this->fail(TestConfig::EXCEPTION_FAIL . $e->getMessage());
        }
    }

    /**
     * @test
     */
    public function HLRsPhoneAlreadyInRequestTest() {
        try {
            $answer = $this->hlrClient->sendHLRS([
                ['msisdn' => TestConfig::TEST_PHONE_1, 'reference' => 'airt' . (string)time()],
                ['msisdn' => TestConfig::TEST_PHONE_1, 'reference' => 'airt' . (string)(time()+1)] //already in request
            ]);
            $this->assertArrayHasKey('result', $answer);
            $this->assertArrayHasKey('total_price', $answer);
            $this->assertArrayHasKey('currency', $answer);
            $this->assertEquals(self::ERR_PHONE_ALREADY_ON_QUERY, $answer['result'][1]['error']);
        } catch (Exception $e) {
            $this->fail(TestConfig::EXCEPTION_FAIL . $e->getMessage());
        }
    }
    /**
     * @test
     */
    public function HLRWrongExternalIdTest() {
        try {
            $answer = $this->hlrClient->getStatusByReference('-=__');
            $this->assertArrayNotHasKey('result', $answer);
            $this->assertArrayNotHasKey('total_price', $answer);
            $this->assertArrayNotHasKey('currency', $answer);
            $this->assertEquals(self::ERR_WRONG_EXT_ID, $answer['error']);
        } catch (Exception $e) {
            $this->fail(TestConfig::EXCEPTION_FAIL . $e->getMessage());
        }
    }

    /**
     * @test
     */
    public function HLRPricesTest() {
        try {
            $answer = $this->hlrClient->getPrices();
            $this->assertArrayHasKey('prices', $answer);
            $this->assertEquals(self::ERR_NO, $answer['error']);
        } catch (Exception $e) {
            $this->fail(TestConfig::EXCEPTION_FAIL . $e->getMessage());
        }
    }

    /**
     * @test
     */
    public function HLRSuccessGetById() {
        try {
            $hlr = $this->hlrClient->sendHLR('380501111111', 'su' . (string)time());
            sleep(5); //wait for creating
            $answer = $this->hlrClient->getStatusById($hlr['result'][0]['id']);
            $this->assertArrayHasKey('msisdn', $answer);
            $this->assertArrayHasKey('brand', $answer);
            $this->assertArrayHasKey('error', $answer);
            $this->assertEquals(self::ERR_NO, $answer['error']);
        } catch (Exception $e) {
            $this->fail(TestConfig::EXCEPTION_FAIL . $e->getMessage());
        }
    }
}
