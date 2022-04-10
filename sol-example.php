<?php
require("src/Chainshub.php");

use Downygg\Chainshub;

$apikey = "uIgk1c51dH1nqlqeN***********VT4BsbQ67uRGMJRn99HSbsneE";
$ch = new Chainshub($apikey);
$payload = array(
    'sender' => "6jGpnthS7zcWtxG4w*******HKnvdughqEFaJS",
    'amount' => "0.001",
    'secret' => "MkecjF7Z6yv*******JvVrDmpTa8liBWZt+osM15p91csamtQB8JlznFw==",
    'destination' => "DRjtQh54eQ7Q*******Y7jzSAXjuqBsc64SNe",
);

// SOL Balance Check
print_r($ch->solanaBalance($payload['sender']));

// SOL Generate Address
//print_r($ch->solanaAddress());

// Sending SOL Coin
//print_r($ch->solanaSend($payload));

?>