<?php
namespace Downygg;

class Chainshub
{
    private $apikey;

    public function __construct($apikey = false){
        if($apikey == false) {
            die("API Key is Needed. Please visit Chainshub.id for getting the apikey.");
        }

        $this->apikey = $apikey;
    }

    private static function endpoints($endpoint_key = false){
        $endpoint = array (
            "bsc"       => "https://chainshub.id/api/transaction/bsc",
            "tron"      => "https://chainshub.id/api/transaction/trx",
            "usdt"      => "https://chainshub.id/api/transaction/usdt",
            "bttold"    => "https://chainshub.id/api/transaction/bttold",
            "busd"      => "https://chainshub.id/api/transaction/busd",
            "solana"    => "https://chainshub.id/api/transaction/solana",
            "matic"     => "https://chainshub.id/api/transaction/matic",
            "okex"      => "https://chainshub.id/api/transaction/okex",
            "btt"       => "https://chainshub.id/api/transaction/btt",
            "algo"      => "https://chainshub.id/api/transaction/algo",
            "doge"      => "https://chainshub.id/api/transaction/doge",
            "ltc"       => "https://chainshub.id/api/transaction/ltc",
            "indodax"   => "https://chainshub.id/api/transaction/indodax"
        );

        return $endpoint[$endpoint_key];
    }
    public function request($endpoint = false, $data = false){
        $headers = array();
        $headers[] = "Content-Type:application/json";
        $headers[] = "Authorization:".$this->apikey;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $endpoint);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        $result = curl_exec($ch);
        curl_close($ch);
        return json_decode($result);
    }

    /*********************************************************
     *                  BSC Handled Start                    *
     *********************************************************/
        public function bscBalance($address = false) {
            if($address == false) {
                die("Address required.");
            }

            $payload = array(
                'action' => 'balance',
                'from_address' => $address,
            );

            return $this->request($this->endpoints("bsc"),$payload);
        }

        public function bscSend(Array $payload) {
            $payload = array(
                'action' => 'transfer',
                'from_address' => $payload['sender'],
                'amount' => $payload['amount'],
                'private_key' => $payload['privatekey'],
                'to_address' => $payload['destination'],
                'gas' => "25000", //25000 in wei
                'price' => "0.000000020", // 20 in gwei
            );

            return $this->request($this->endpoints("bsc"),$payload);
        }

    /*********************************************************
     *                  BSC Handled End                      *
     *********************************************************/

     /*********************************************************
     *                  Matic Handled Start                   *
     *********************************************************/
        public function maticBalance($address = false) {
            if($address == false) {
                die("Address required.");
            }

            $payload = array(
                'action' => 'balance',
                'from_address' => $address,
            );

            return $this->request($this->endpoints("matic"),$payload);
        }

        public function maticSend(Array $payload) {
            $payload = array(
                'action' => 'transfer',
                'from_address' => $payload['sender'],
                'amount' => $payload['amount'],
                'private_key' => $payload['privatekey'],
                'to_address' => $payload['destination'],
                'gas' => "25000", //25000 in wei
                'price' => "0.000000100", // 20 in gwei
            );

            return $this->request($this->endpoints("matic"),$payload);
        }

    /*********************************************************
     *                  Matic Handled End                    *
     *********************************************************/
    /*********************************************************
     *                  Okex Handled Start                   *
     *********************************************************/
        public function okexBalance($address = false) {
            if($address == false) {
                die("Address required.");
            }

            $payload = array(
                'action' => 'balance',
                'from_address' => $address,
            );

            return $this->request($this->endpoints("okex"),$payload);
        }

        public function okexSend(Array $payload) {
            $payload = array(
                'action' => 'transfer',
                'from_address' => $payload['sender'],
                'amount' => $payload['amount'],
                'private_key' => $payload['privatekey'],
                'to_address' => $payload['destination'],
                'gas' => "25000", //25000 in wei
                'price' => "0.000000100", // 20 in gwei
            );

            return $this->request($this->endpoints("okex"),$payload);
        }

    /*********************************************************
     *                  Okex Handled End                     *
     *********************************************************/

     /*********************************************************
     *                   Tron Handled Start                   *
     *********************************************************/
        public function trxSend(Array $payload) {
            return $this->request($this->endpoints("tron"),$payload);
        }
    /*********************************************************
     *                  Tron Handled End                     *
     *********************************************************/

    /*********************************************************
     *                  USDT Handled Start                   *
     *********************************************************/
        public function usdtBalance($address = false) {
            if($address == false) {
                die("Address required.");
            }

            $payload = array(
                'action' => 'balance',
                'contract' => "TR7NHqjeKQxGTCi8q8ZY4pL8otSzgjLj6t",
                'from_address' => $address
            );

            return $this->request($this->endpoints("usdt"),$payload);
        }

        public function usdtSend(Array $payload) {
            $payload = array(
                'action' => 'transfer',
                'contract' => "TR7NHqjeKQxGTCi8q8ZY4pL8otSzgjLj6t",
                'from_address' => $payload['sender'],
                'amount' => $payload['amount'],
                'private_key' => $payload['privatekey'],
                'to_address' => $payload['destination'],
            );

            return $this->request($this->endpoints("usdt"),$payload);
        }

    /*********************************************************
     *                  USDT Handled End                     *
     *********************************************************/

     /*********************************************************
     *                  BUSD Handled Start                    *
     *********************************************************/
        public function busdBalance($address = false) {
            if($address == false) {
                die("Address required.");
            }

            $payload = array(
                'action' => 'balance',
                'from_address' => $address,
            );

            return $this->request($this->endpoints("busd"),$payload);
        }

        public function busdSend(Array $payload) {
            $payload = array(
                'action' => 'transfer',
                'from_address' => $payload['sender'],
                'amount' => $payload['amount'],
                'private_key' => $payload['privatekey'],
                'to_address' => $payload['destination'],
                'gas' => "25000", //25000 in wei
                'price' => "0.000000020", // 20 in gwei
            );

            return $this->request($this->endpoints("busd"),$payload);
        }

    /*********************************************************
     *                  BUSD Handled End                     *
     *********************************************************/

     /*********************************************************
     *                  SOLANA Handled Start                  *
     *********************************************************/
        public function solanaBalance($address = false) {
            if($address == false) {
                die("Address required.");
            }

            $payload = array(
                'action' => 'balance',
                'from_address' => $address,
            );

            return $this->request($this->endpoints("solana"),$payload);
        }

        public function solanaSend(Array $payload) {
            $payload = array(
                'action' => 'transfer',
                'from_address' => $payload['sender'],
                'amount' => $payload['amount'],
                'secret' => $payload['secret'],
                'to_address' => $payload['destination'],
            );

            return $this->request($this->endpoints("solana"),$payload);
        }

        public function solanaAddress() {
            $payload = array(
                'action' => 'new_address',
            );

            return $this->request($this->endpoints("solana"),$payload);
        }

    /*********************************************************
     *                  SOLANA Handled End                   *
     *********************************************************/

     /*********************************************************
     *                  BTT Handled Start                     *
     *********************************************************/
        public function bttBalance($address = false) {
            if($address == false) {
                die("Address required.");
            }

            $payload = array(
                'action' => 'balance',
                'contract' => "TAFjULxiVgT4qWk6UZwjqwZXTSaGaqnVp4",
                'from_address' => $address
            );

            return $this->request($this->endpoints("btt"),$payload);
        }

        public function bttSend(Array $payload) {
            $payload = array(
                'action' => 'transfer',
                'contract' => "TAFjULxiVgT4qWk6UZwjqwZXTSaGaqnVp4",
                'from_address' => $payload['sender'],
                'amount' => $payload['amount'],
                'private_key' => $payload['privatekey'],
                'to_address' => $payload['destination'],
            );

            return $this->request($this->endpoints("btt"),$payload);
        }

    /*********************************************************
     *                  BTT Handled End                      *
     *********************************************************/

     /*********************************************************
     *                  ALGO Handled Start                    *
     *********************************************************/
        public function algoBalance($address = false) {
            if($address == false) {
                die("Address required.");
            }

            $payload = array(
                'action' => 'balance',
                'from_address' => $address,
            );

            return $this->request($this->endpoints("algo"),$payload);
        }

        public function algoSend(Array $payload) {
            $payload = array(
                'action' => 'transfer',
                'from_address' => $payload['sender'],
                'amount' => $payload['amount'],
                'secret' => $payload['secret'],
                'to_address' => $payload['destination'],
            );

            return $this->request($this->endpoints("algo"),$payload);
        }

        public function algoAddress() {
            $payload = array(
                'action' => 'new_address',
            );

            return $this->request($this->endpoints("algo"),$payload);
        }

    /*********************************************************
     *                  ALGO Handled End                     *
     *********************************************************/

     /*********************************************************
     *                  DOGE Handled Start                    *
     *********************************************************/
        public function dogeSend(Array $payload) {
            $payload = array(
                "to_address" => $payload['destination'],
                "amount" => $payload['amount'],
                "fees" => 1
            );

            return $this->request($this->endpoints("doge"),$payload);
        }

    /*********************************************************
     *                  DOGE Handled End                     *
     *********************************************************/
    /*********************************************************
     *                  LTC Handled Start                    *
     *********************************************************/
        public function ltcSend(Array $payload) {
            $payload = array(
                "to_address" => $payload['destination'],
                "amount" => $payload['amount'],
                "fees" => 1
            );

            return $this->request($this->endpoints("ltc"),$payload);
        }

    /*********************************************************
     *                  LTC Handled End                     *
     *********************************************************/

     /*********************************************************
     *                  Indodax Handled Start                 *
     *********************************************************/
        public function redeemIndodax(Array $payload) {
            return $this->request($this->endpoints("indodax"),$payload);
        }
    /*********************************************************
     *                  Indodax Handled End                  *
     *********************************************************/
}
