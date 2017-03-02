<?php

use PHPUnit\Framework\TestCase;
require_once __DIR__ . "/../../src/BSG/ApiClient.php";
require_once __DIR__ . "/../TestConfig.php";

class ApiClientTest extends TestCase
{
    const ERR_NO = 0;

    private $apiClient;

    public function __construct() {
        parent::__construct();
        $this->apiClient = new ApiClient(TestConfig::TEST_API_KEY);;
    }

    /**
     * @test
     */
    public function hlrNotFoundTest()
    {
        try {
            $answer = $this->apiClient->getBalance();
            $this->assertArrayHasKey('error', $answer);
            $this->assertArrayHasKey('amount', $answer);
            $this->assertArrayHasKey('currency', $answer);
            $this->assertArrayHasKey('limit', $answer);
            $this->assertEquals(self::ERR_NO, $answer['error']);
        } catch (Exception $e) {
            $this->fail(TestConfig::EXCEPTION_FAIL . $e->getMessage());
        }
    }
}
