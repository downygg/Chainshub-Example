<?php
require("src/Chainshub.php");

use Downygg\Chainshub;

$apikey = "uIgk1c51dH1nqlqeN***********VT4BsbQ67uRGMJRn99HSbsneE";
$ch = new Chainshub($apikey);
$payload = array(
    "email" => "*******@gmail.com",
    "password" => "*******",
    "kode"  => "BTC-IDR-2DSNYZCB-HYQLNS7U-SLETATGO-8R8ETK65-VCHDKWI5",
);

// Indodax Voucher Redeem
print_r($ch->redeemIndodax($payload));

?>