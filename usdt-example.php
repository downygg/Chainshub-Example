<?php
require("src/Chainshub.php");

use Downygg\Chainshub;


$apikey = "uIgk1c51dH1nqlqeN***********VT4BsbQ67uRGMJRn99HSbsneE";
$ch = new Chainshub($apikey);
$payload = array(
    'destination' => "TBh5ky*****g63b7KYaf",
    'amount' => 10,
    'privatekey' => "77809ed45a2dc8753*********c0f5655ad65201625b9927c2",
    'sender' => "TExHq1Q4wN*****YK7B6KjSih4E",
);

// Check Balance Wallet
print_r($ch->usdtBalance($payload['sender']));

// Send usdt Coin
//print_r($ch->usdtSend($payload));

?>