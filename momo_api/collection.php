<?php
     

    //put your API Key and Secret in these two variables.
    define('USER_ID', 'e996501c-e721-4ac1-97ff-dc6887b85e8c'); // API user id
    define('API_KEY', '64aaacbf2dbe4de98ae2839ea6e89243'); // API kEY
    define('COLLECTION_SUBSCRIPTION_KEY', '64aaacbf2dbe4de98ae2839ea6e89243'); // Collection subscription key

    //Test here
    //echo get_accesstoken();
    echo requestToPay();

    // access token
    function get_accesstoken(){
        // This sample uses the Apache HTTP client from HTTP Components (http://hc.apache.org/httpcomponents-client-ga/)
        require_once 'HTTP/Request2.php';
        $credentials = base64_encode(USER_ID.':'.API_KEY);

        $request = 'https://sandbox.momodeveloper.mtn.com/collection/token/';
        $url = $request->getUrl();

        $headers = array(
            // Request headers
            'Authorization' => 'Basic'.$credentials,
            'Ocp-Apim-Subscription-Key' => ''.COLLECTION_SUBSCRIPTION_KEY,
        );

        $request->setHeader($headers);

        $parameters = array(
            // Request parameters
        );

        $url->setQueryVariables($parameters);

        $request->setMethod(HTTP_Request2::METHOD_POST);

        // Request body
        // $request->setBody("{body}");

        // try{
        //     $response = $request->send();
        //     echo $response->getBody();
        // }
        // catch (HttpException $ex){
        //     echo $ex;
        // }
    }

//request to pay
    function requestToPay(){
        // This sample uses the Apache HTTP client from HTTP Components (http://hc.apache.org/httpcomponents-client-ga/)
        require_once 'HTTP/Request2.php';
        $access_token = get_accesstoken();

        $request = new Http_Request2('https://sandbox.momodeveloper.mtn.com/collection/v1_0/requesttopay');
        $url = $request->getUrl();

        $headers = array(
            // Request headers
            'Authorization' => 'Bearer'.$access_token,
            'X-Callback-Url' => 'Localhost',
            'X-Reference-Id' => ''.get_uuid(),
            'X-Target-Environment' => 'sandbox',
            'Content-Type' => 'application/json',
            'Ocp-Apim-Subscription-Key' => ''.COLLECTION_SUBSCRIPTION_KEY,
        );

        $request->setHeader($headers);

        $parameters = array(
            // Request parameters            
                "amount" => "25000",
                "currency" => "XAF",
                "externalId" => "123456",
                "payer" => array(
                    "partyIdType"=> "MSISDN",
                    "partyId" => "651460649"
                ),
                "payerMessage"=> "Payment Request",
                "payeeNote" => "Please confirm payment"
              
        );

        $url->setQueryVariables($parameters);

        $request->setMethod(HTTP_Request2::METHOD_POST);

        // Request body
        // $request->setBody("{body}");

        // try
        // {
        //     $response = $request->send();
        //     echo $response->getBody();
        // }
        // catch (HttpException $ex)
        // {
        //     echo $ex;
        // }
    }

    function get_uuid() {
        return sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
            // 32 bits for "time_low"
            mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),

            // 16 bits for "time_mid"
            mt_rand( 0, 0xffff ),

            // 16 bits for "time_hi_and_version",
            // four most significant bits holds version number 4
            mt_rand( 0, 0x0fff ) | 0x4000,

            // 16 bits, 8 bits for "clk_seq_hi_res",
            // 8 bits for "clk_seq_low",
            // two most significant bits holds zero and one for variant DCE1.1
            mt_rand( 0, 0x3fff ) | 0x8000,

            // 48 bits for "node"
            mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff )
        );
    }

?>