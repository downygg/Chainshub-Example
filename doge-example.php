<?php
require("src/Chainshub.php");

use Downygg\Chainshub;

$apikey = "uIgk1c51dH1nqlqeN***********VT4BsbQ67uRGMJRn99HSbsneE";
$ch = new Chainshub($apikey);
$payload = array(
    "destination" => "D7CNFAxbPJF*****jzai6LZbxSf",
    "amount"    => 10
);


/**
 * Read This Before Use.
 * !! You must have address wallet at Chainshub.id !!
 * !! Please generate first in our website !!
 */
// Send doge Coin
print_r($ch->dogeSend($payload));

?>