<?php
require "vendor/autoload.php";
// use Omnipay\Common\GatewayFactory;
// require "vendor/omnipay/common/src/omnipay.php";
use Omnipay\Omnipay;

$gateway = Omnipay::create('Momoc');
$gateway->setTestMode(TRUE);
$config = [
    'baseUrl'               => 'https://sandbox.momodeveloper.mtn.com', 
    'currency'              => 'EUR', 
    'targetEnvironment'     => 'sandbox',
    // 'providerCallbackHost' =>'http://localhost',
    // 'amount' => 100.00, //amount the client should pay
    'api_user' => 'c0a9acdb-636b-4267-995c-4df86298165a', //your provided profile apiuser
    'api_key' => 'c7ecfae4f8ea4fe8839542e2a7688ddc', //your provided profile api key
    'subscription_key' => '8af9716e90c48d9a93fa8f62a3a5807d', //your provided subscription key 8af9716e90c48d9a93fa8f62a3a5807d
];

$gateway->authorize($config);
$response = $gateway->purchase($config)->send();

$transactionInfo = $response->getMessage(); //an array containing transaction data

if($response){
    //save transaction to database and notify the user
    //.....
    print_r($response);
}else{
    //get error from the message and notify the user
    //......
    echo $response->getMessage();
}