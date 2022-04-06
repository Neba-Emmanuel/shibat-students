<?php
require_once("vendor\autoload.php");
require_once("vendor\patricpoba\mtn-momo-api-php\src\MtnCollection.php");
require_once("vendor\patricpoba\mtn-momo-api-php\src\Http\ApiResponse.php");
use vendor\autoload;
use PatricPoba\MtnMomo\MtnConfig;
use PatricPoba\MtnMomo\MtnCollection;
use PatricPoba\MtnMomo\Http\ApiResponse;
 
$config = new MtnConfig([ 
    // mandatory credentials
    'baseUrl'               => 'https://sandbox.momodeveloper.mtn.com', 
    'currency'              => 'EUR', 
    'targetEnvironment'     => 'sandbox', 

    // collection credentials
    "collectionApiSecret"   => 'c7ecfae4f8ea4fe8839542e2a7688ddc', 
    "collectionPrimaryKey"  => '8daf9716e90c48d9a93fa8f62a3a5807', 
    "collectionUserId"      => 'c0a9acdb-636b-4267-995c-4df86298165a'
]);


$collection = new MtnCollection($config); 

$params = [
    "mobileNumber"      => '233540000000', 
    "amount"            => '100', 
    "externalId"        => '46733123453',
    "payerMessage"      => 'some note',
    "payeeNote"         => '1212'
];

$transactionId = $collection->requestToPay($params);

$transaction = $collection->getTransaction($transactionId);
$response = $collection->requestToPay($params);

if($response->isSuccessful()){
    //save transaction to database and notify the user
    //.....
    print_r($response);
}else{
    //get error from the message and notify the user
    //......
    echo $response->requestToPay();
}

?>