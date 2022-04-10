<?php
require("src/Chainshub.php");

use Downygg\Chainshub;

$apikey = "uIgk1c51dH1nqlqeN***********VT4BsbQ67uRGMJRn99HSbsneE";
$ch = new Chainshub($apikey);
$payload = array(
    'sender' => "XIW7JAUY55UA7BCVV***********632GFEDR6XW7M",
    'amount' => "0.001",
    'secret' => "+zvkFfkWOEXSNpZr75*************D4RVqGFq259Z1H4wMxWh1kn3tRtr+3oxSA==",
    'destination' => "VW2UHF6VP7NFJRQNJ**********T6JG4A3KEULO6KGTHQSSOWAY",
);

// ALGO Balance Check
print_r($ch->algoBalance($payload['sender']));

// ALGO Generate Address
//print_r($ch->algoAddress());

// Sending ALGO Coin
//print_r($ch->algoSend($payload));

?>