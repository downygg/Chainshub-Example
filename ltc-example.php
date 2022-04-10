<?php
require("src/Chainshub.php");

use Downygg\Chainshub;

$apikey = "uIgk1c51dH1nqlqeN***********VT4BsbQ67uRGMJRn99HSbsneE";
$ch = new Chainshub($apikey);
$payload = array(
    "destination" => "3DSCNa7sVv4W*****JLBzb38JLARJQX",
    "amount"    => 0.001
);


/**
 * Read This Before Use.
 * !! You must have address wallet at Chainshub.id !!
 * !! Please generate first in our website !!
 */
// Send ltc Coin
print_r($ch->ltcSend($payload));

?>