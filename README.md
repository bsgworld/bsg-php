# bsg-sdk
This repository contains the open source Php client for BSG's REST API.

# Requirements

- [Sign up](https://bsg.world) for a free account
- Get api key

# Instalation

Download and use files from "src" directory. No installation needed. Composer used only for phpunit tests.

## BSG class

Bsg class provide access to the hlr/sms/viber clients

**Parameters**
>   **apiKey**          *(string)*     Api key from bsg.world. Required.
>   
>   **sender**          *(string)*     Sender name for sms
>   
>   **viberSender**     *(string)*        Sender name for viber (alpha name)
>   
>   **tariff**          *(int)*        Tariff that should be used for this session 
>   
>   **api source**          *(string)*        Name of your application (not required) 
    
    $apiKey = 'test_8zWaPwOaHDPRFmgIldhl'
    $bsg = new BSG($apiKey, 'originator', 'aplhaname', 3, 'Bitrix-24')

## API function "balance"
BSG provides an API to get the balance information of your account.

    $apikey = 'test_8zWaPwOaHDPRFmgIldhl';
    $api = new BSG($apikey);
    $client = $api->getSmsClient(); //get one of the clients
    $balance = $client->getBalance();

#### Simple response

    $balance = array(5) {
                 ["error"]=>
                 int(0)
                 ["errorDescription"]=>
                 string(9) "No errors"
                 ["amount"]=>
                 string(10) "-4.0999333"
                 ["currency"]=>
                 string(3) "EUR"
                 ["limit"]=>
                 string(1) "7"
               }

## API functions "sendHLR"

 Number Lookup helps you keep your mobile numbers database up to date.

 Mobile subscribers often change numbers, go into roaming and change providers while retaining their original phone number. Knowing which mobile numbers are in use and available, or which network your client is currently using can greatly improve accuracy and cost effectiveness for many types of businesses.
 With Number Lookup, you can determine:

 - which numbers are currently active
 - is the mobile number in roaming
 - is the mobile number ported

**Parameters**
>   **msisdn**          *(int)*     The telephone number. Required.
>   
>   **reference**       *(string)*   A client reference. Required.
>   
>   **tariff**          *(int)*     Tariff code of a price grid. Use value from BSG class if it empty. Use default value from bsg cabinet if it wasn't set at all

#### HLR request:
    
    $hlr = $bsg->getHLRClient();
    $responce = $hlr->sendHLR('+380501111111', (string)time());
Example response:

       $response = array(3) {
                    ["result"]=>
                    array(1) {
                      [0]=>
                      array(9) {
                        ["error"]=>
                        int(0)
                        ["errorDescription"]=>
                        string(9) "No errors"
                        ["msisdn"]=>
                        string(12) "380501111111"
                        ["reference"]=>
                        string(10) "1488536778"
                        ["tariff_code"]=>
                        string(1) "0"
                        ["callback_url"]=>
                        string(0) ""
                        ["price"]=>
                        float(0.0025)
                        ["currency"]=>
                        string(3) "EUR"
                        ["id"]=>
                        string(6) "174568"
                      }
                    }
                    ["total_price"]=>
                    float(0.0025)
                    ["currency"]=>
                    string(3) "EUR"
                  }


#### Multiple HLR request. API function sendHLRS:
Send multiple hlr queries in one time.<br>Exaple:

    $response = $hlr->sendHLRS(
          [ 
            [
              "msisdn"=>"380501111111", //required
              "reference"=>"extid1",  //required
              "tariff"=>"0",
            ],
            [
              "msisdn"=>"380501111112",
              "reference"=>"extid2",
              "tariff"=>"0",
            ]
          ]
    )

  Example response:
                     
    $response = {array(3) {
                   ["result"]=>
                   array(2) {
                     [0]=>
                     array(8) {
                       ["error"]=>
                       int(0)
                       ["msisdn"]=>
                       string(12) "380501111111"
                       ["reference"]=>
                       string(14) "extid1"
                       ["tariff_code"]=>
                       string(1) "0"
                       ["callback_url"]=>
                       string(0) ""
                       ["price"]=>
                       float(0.0025)
                       ["currency"]=>
                       string(3) "EUR"
                       ["id"]=>
                       string(6) "174573"
                     }
                     [1]=>
                     array(8) {
                       ["error"]=>
                       int(0)
                       ["msisdn"]=>
                       string(12) "380501111112"
                       ["reference"]=>
                       string(14) "extid2"
                       ["tariff_code"]=>
                       string(1) "0"
                       ["callback_url"]=>
                       string(0) ""
                       ["price"]=>
                       float(0.0025)
                       ["currency"]=>
                       string(3) "EUR"
                       ["id"]=>
                       string(6) "174574"
                     }
                   }
                   ["total_price"]=>
                   float(0.005)
                   ["currency"]=>
                   string(3) "EUR"
                 }

## API function "getStatusByReference"

Retrieves the information of an existing HLR. You only need to supply the unique message reference that was set upon creation.


    $response = $hlr->getStatusByReference('ref1);


Example response:

    $response = array(14) {
                  ["error"]=>
                  int(0)
                  ["errorDescription"]=>
                  string(9) "No errors"
                  ["name_ru"]=>
                  string(14) "Украина"
                  ["name_en"]=>
                  string(7) "Ukraine"
                  ["brand"]=>
                  string(3) "MTS"
                  ["name"]=>
                  string(11) "MTS Ukraine"
                  ["msisdn"]=>
                  string(12) "380501111111"
                  ["id"]=>
                  string(12) "380501111111"
                  ["reference"]=>
                  string(12) "su1488546296"
                  ["network"]=>
                  string(5) "25501"
                  ["status"]=>
                  string(6) "failed"
                  ["details"]=>
                  NULL
                  ["createdDatetime"]=>
                  string(25) "2017-03-03T13:04:56+00:00"
                  ["statusDatetime"]=>
                  string(25) "2017-03-03T13:04:56+00:00"
                }
                   
                      
## API function "getStatusById"

Retrieves the information of an existing HLR. You only need to supply the unique message id that was returned upon creation or receiving.
<br>Example:

    $response = $hlr->getStatusById('1);


Example response:

    $response = array(14) {
                  ["error"]=>
                  int(0)
                  ["errorDescription"]=>
                  string(9) "No errors"
                  ["name_ru"]=>
                  string(14) "Украина"
                  ["name_en"]=>
                  string(7) "Ukraine"
                  ["brand"]=>
                  string(3) "MTS"
                  ["name"]=>
                  string(11) "MTS Ukraine"
                  ["msisdn"]=>
                  string(12) "380501111111"
                  ["id"]=>
                  string(12) "380501111111"
                  ["reference"]=>
                  string(12) "su1488546296"
                  ["network"]=>
                  string(5) "25501"
                  ["status"]=>
                  string(6) "failed"
                  ["details"]=>
                  NULL
                  ["createdDatetime"]=>
                  string(25) "2017-03-03T13:04:56+00:00"
                  ["statusDatetime"]=>
                  string(25) "2017-03-03T13:04:56+00:00"
                }
                                           
## SMS message

  BSG provides an API to send SMS messages to any country across the world. 

  BSG are identified by a unique random ID. And with this ID you can always check the status of the message through the provided endpoint.

### API function sendSms

Creates a new message object. BSG returns the created message object with each request. Per request, a max of 50 phones can be entered.

**Parameters**
> **msisdn**  *(string)* The telephone number. Required

> **body**  *(string)* The body of the SMS message. Required

> **reference** *(string)* A client reference. Required

> **validity**  *(int)* The amount of seconds that the message is valid.

> **tariff**  *(int)* Tariff code of a price grid.

>  **originator**   *(string)* The sender of the message. This can be a telephone number 
> (including country code) or an alphanumeric string. In case of an alphanumeric string, the maximum length is 11 characters. Uses value from BSG if it was set. In all other cases - required 

#### Single sms
  
  
    $smsClient = $BSG->getSmsClient();
    $smsClient->sendSms(
        '380501111111', 
        'test', 
        'successSend' . (string)time()
    );
  
#### Multiple sms

    $smsclient->$answer = $this->smsClient->sendSmsMulti([
                                ['msisdn' => 380501111111, 'body' =>'test', 'reference' => 'successSendM' . (string)time()],
                                ['msisdn' => 380501111112, 'body' =>'tes2', 'reference' => 'successSendM1' . (string)time()],
                            ]);

Example response:

      $answer = array(3) {
                  ["result"]=>
                  array(2) {
                    [0]=>
                    array(6) {
                      ["error"]=>
                      int(0)
                      ["errorDescription"]=>
                      string(9) "No errors"
                      ["reference"]=>
                      string(22) "successSendM1488547867"
                      ["id"]=>
                      string(6) "174584"
                      ["price"]=>
                      float(0.1)
                      ["currency"]=>
                      string(3) "EUR"
                    }
                    [1]=>
                    array(6) {
                      ["error"]=>
                      int(0)
                      ["errorDescription"]=>
                      string(9) "No errors"
                      ["reference"]=>
                      string(23) "successSendM11488547867"
                      ["id"]=>
                      string(6) "174585"
                      ["price"]=>
                      float(0.1)
                      ["currency"]=>
                      string(3) "EUR"
                    }
                  }
                  ["total_price"]=>
                  float(0.2)
                  ["currency"]=>
                  string(3) "EUR"
                }

### View a status

#### by SMS ID

    $response = $smsClient->getStatusById(214);
#### by reference 

    $response = $smsClient->getStatusByReference(ref1);
    
#### by task ID
  
    $response = $smsClient->getTaskStatus(214);
  
Example response:

### SINGLE SMS RESPONSE
      array(11) {
        ["error"]=>
        int(0)
        ["errorDescription"]=>
        string(9) "No errors"
        ["id"]=>
        string(12) "380501111111"
        ["msisdn"]=>
        string(12) "380501111111"
        ["reference"]=>
        string(21) "successSend1488548141"
        ["time_in"]=>
        string(19) "2017-03-03 13:35:42"
        ["time_sent"]=>
        string(19) "2017-03-03 13:35:42"
        ["time_dr"]=>
        string(19) "2017-03-03 13:35:42"
        ["status"]=>
        string(7) "unknown"
        ["price"]=>
        int(0)
        ["currency"]=>
        string(3) "EUR"
      }
      
###TASK SMS RESPONSE
      
      array(10) {
        ["originator"]=>
        string(4) "name"
        ["body"]=>
        string(4) "body"
        ["validity"]=>
        int(72)
        ["totalprice"]=>
        float(0.1)
        ["currency"]=>
        string(3) "EUR"
        ["sent"]=>
        int(1)
        ["delivered"]=>
        int(1)
        ["expired"]=>
        int(0)
        ["undeliverable"]=>
        int(0)
        ["unknown"]=>
        int(0)
      }



## Viber message

VIBER provides an API to send VIBER messages to any country across the world.

BSG are identified by a unique random ID. And with this ID you can always check the status of the message through the provided endpoint.

### API function addMessage

Add a VIBER message into queue

**Parameters**

> **to** *(array)* The array of recipients msisdn's & reference's.  Required

> **messages**  *(string)* Viber message. Required.

> **options**:  *(hash)* An hash with VIBER options.

> **alpha_name**  *(string)*  The sender of the message. Uses the value of "viber sender name" from BSG class if not setted. Required if it is empty

> **is_promotional**  *(bool)*  Set is this message promotional. Default is true

> **callback_url**  *(string)*  Link for delivery reports. Reference id is required in message arrray

    $viberClient = $bsg->getViberClient();
    
    $response = $viberClient->addMessage([['msisdn' => 380501111111]], 'test');
    
Add image and link to the message:

    $viberClient->addMessage([['msisdn' => msisdn' => 380501111111]], 'test', [
                        "img" => "http://my-cool-webpage.com/logo.png",
                        "caption" => "Join us!",
                        "action" => "http://my-cool-webpage.com"
                    ]);

Return: Void
     
### API function sendMessages

Send all messages from queue

**Parameters**

> **validity**  *(int)*  The amount of seconds that the message is valid.

> **tariff**  *(int)*  Tariff code of a price grid.

    $viberClient = $bsg->sendMessages();

Example of response:

    $response = array(3) {
      ["result"]=>
      array(1) {
        [0]=>
        array(5) {
          ["error"]=>
          int(0)
          ["errorDescription"]=>
          string(9) "No errors"
          ["id"]=>
          string(6) "174592"
          ["price"]=>
          int(0)
          ["currency"]=>
          string(3) "EUR"
        }
      }
      ["currency"]=>
      string(3) "EUR"
      ["total_price"]=>
      int(0)
    }

      
### View a status

Retrieves the information of an existing message. This message can be a sent or a received message. You only need to supply the unique message id that was returned upon creation or receiving.

    $response = $viberClient->getStatusById(216);
   or by reference
  
    $response = $api->getStatusByReference("ext_id_19");

Example response:

      $response = array(11) {
                    ["error"]=>
                    int(0)
                    ["errorDescription"]=>
                    string(9) "No errors"
                    ["id"]=>
                    string(12) "380501111111"
                    ["msisdn"]=>
                    string(12) "380501111111"
                    ["reference"]=>
                    string(25) "38050111111158b977704621d"
                    ["time_in"]=>
                    string(19) "2017-03-03 14:02:24"
                    ["time_sent"]=>
                    string(19) "2017-03-03 14:02:24"
                    ["time_dr"]=>
                    string(19) "2017-03-03 14:02:24"
                    ["status"]=>
                    string(7) "expired"
                    ["price"]=>
                    int(0)
                    ["currency"]=>
                    string(3) "EUR"
                  }

## Price

BSG provides an API to get the price information of your account.
## API function "getPrices"
Return chosen tariff prices<br>

<br>**Parameters**
> **tariff**           *(int)* The type of message campaign

#### HLR Price
  
    $response = $hlrClient->getPrices();
  
#### SMS Price
  
    $response = $smsClient->getPrices();
  
#### Viber price by tarif ID
 
    $response = $viberClient->getPrices();

Example response:

    $response = array(3) {
                    ["error"]=>
                    int(0)
                    ["errorDescription"]=>
                    string(9) "No errors"
                    ["prices"]=>
                    array(191) {
                      [0]=>
                      array(6) {
                        ["type"]=>
                        string(3) "hlr"
                        ["country"]=>
                        string(0) ""
                        ["country_name"]=>
                        string(15) "Other countries"
                        ["mcc"]=>
                        string(0) ""
                        ["price"]=>
                        string(9) "0.0034000"
                        ["currency"]=>
                        string(3) "EUR"
                      }
                      [1]=>
                      array(6) {
                        ["type"]=>
                        string(3) "hlr"
                        ["country"]=>
                        string(2) "AB"
                        ["country_name"]=>
                        string(8) "Abkhazia"
                        ["mcc"]=>
                        string(3) "289"
                        ["price"]=>
                        string(9) "0.0050000"
                        ["currency"]=>
                        string(3) "EUR"
                      }
                      [2]=>
                      array(6) {
                        ["type"]=>
                        string(3) "hlr"
                        ["country"]=>
                        string(2) "AD"
                        ["country_name"]=>
                        string(7) "Andorra"
                        ["mcc"]=>
                        string(3) "213"
                        ["price"]=>
                        string(9) "0.0025000"
                        ["currency"]=>
                        string(3) "EUR"
                      }
                     }
                    }

###Tests
This sdk also contain  phpunit tests with for all functions our API (with checking errors).
To start them, check "/tests/TestConfig.php" and change value of api key, sender name and viber sender name. 
After that, just use:

    $ phpunit -c tests/
