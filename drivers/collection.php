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
    "collectionApiSecret"   => '32bfa2c1ad084d1c9fabf29da9dfa806', 
    "collectionPrimaryKey"  => '64aaacbf2dbe4de98ae2839ea6e89243', 
    "collectionUserId"      => 'c5617f01-9970-4afb-b290-a1d930b6c118'
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

$response = $transactionId->isSuccess($params);

?>