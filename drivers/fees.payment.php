<?php
session_start();
require "vendor/autoload.php";
// use Omnipay\Common\GatewayFactory;
// require "vendor/omnipay/common/src/omnipay.php";
use Omnipay\Omnipay;
if(isset($_POST['submit'])){
    include_once '../include/db_connection.php';

    $_SESSION['amt'] = $_POST['amount'];
    $_SESSION['number'] = $_POST['number'];
    

$gateway = Omnipay::create('Momoc');
$gateway->setTestMode(TRUE);
$config = [
    'baseUrl'               => 'https://sandbox.momodeveloper.mtn.com', 
    'currency'              => 'EUR', 
    'targetEnvironment'     => 'sandbox',
    'providerCallbackHost' =>'http://localhost',
    'amount' => 100.00, //amount the client should pay
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
    echo "Payment Accepted";
    // include_once '../include/db_connection.php';

    // Payment reciept
$sql = mysqli_query($conn,"SELECT * FROM admission WHERE `name` = '{$_SESSION['username']}'");
while($row = mysqli_fetch_assoc($sql)){
   
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf(['format' => 'A7-L']);
$mpdf -> AddPage();

// $mpdf -> Image('../img/account-logo.png', '15', '10');
$mpdf -> Image('../img/header.png', '15', '13');
$mpdf -> SetFont('','B','12');
$mpdf -> Cell(0,8,'PAYMENT RECIEPT',0,1,'C',1);
$mpdf -> SetFont('','N','12');
$mpdf -> Cell(0,8,'Date: '.date("d M, Y"),0,1,'L',1);
$mpdf -> Cell(0,8,'Name: '.$_SESSION['studname'],0,1,'L',1);
$mpdf -> Cell(0,8,'Entry Level: '.$_SESSION['level'],0,1,'L',1);
$mpdf -> Cell(0,8,"Matricle: ". $_SESSION['matricle'],0,1,'L',1);
$mpdf -> Cell(0,8,"Number: ". $_SESSION['number'],0,1,'L',1);
$mpdf -> Cell(0,8,"Amount: ". $_SESSION['amt'],0,1,'L',1);
$mpdf -> Image('../img/footer.png', '15', '80');
$mpdf->Output('Payment reciept.pdf','D');
}
    header ("refresh:5;url=../drivers/fees.insertion.php");

}else{
    //get error from the message and notify the user
    //......
    echo "An error occured";
}
}