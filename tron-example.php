<?php
require("src/Chainshub.php");

use Downygg\Chainshub;

$apikey = "uIgk1c51dH1nqlqeN***********VT4BsbQ67uRGMJRn99HSbsneE";
$ch = new Chainshub($apikey);
$payload = array(
    "to_address" => "TBh5ky8i4i6y****wr4Jg63b7KYaf", //destination address
    "amount" => 10, 
);


/**
 * Read This Before Use.
 * !! You must have address wallet at Chainshub.id !!
 * !! Please generate first in our website !!
 */
// Send trx Coin
print_r($ch->trxSend($payload));

?>