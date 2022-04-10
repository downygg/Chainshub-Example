<?php
require("src/Chainshub.php");

use Downygg\Chainshub;

$ch = new Chainshub("uIgk1c51dH1nqlqeN***********VT4BsbQ67uRGMJRn99HSbsneE");
$payload = array(
    "destination" => "0x5b1864cb38e********D481B637aBC4DEf", //destination address
    "amount" => 0.001, //amount in matic
    "privatekey" => "0x1979f9582a4179a69356d*************14136d3cb34020173a5b994e6bee", //your private key
    "sender" => "0x967D3110F45*********Cb9Ac3DCf5531550" //your address
);

// Check Balance Wallet
print_r($ch->maticBalance("0x5b1864cb38e********481B637aBC4DEf"));


// Send Matic Coin
//print_r($ch->maticSend($payload));

?>